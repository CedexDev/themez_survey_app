<?php
namespace App\Http\Livewire\Company;

use App\Models\Survey;
use Livewire\Component;
use App\Models\Question;
use Livewire\WithFileUploads;
use App\Traits\QuestionBuilder;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class ShowQuestionBuilder_bu extends Component
{
    use QuestionBuilder;
    use AuthorizesRequests;
    use WithFileUploads;

    public $questions;

    public $activeQuestion;

    public $choices = [];

    public $survey,$select_type,$submitForm;

    public $questionTypes;

    public $image;


    // listeners
    protected $listeners=['formSubmit'=>'pexelSubmit'];

    protected $rules = [
        'activeQuestion.text' => 'required',
        'activeQuestion.paragraph' => 'required',
        'activeQuestion.videolink' => 'required',
        'activeQuestion.image' => 'mimes:jpg,jpeg,png,svg,gif',
        'activeQuestion.img_pexels' => 'nullable',
        'activeQuestion.position' => 'required|integer',
        'activeQuestion.visibility' => 'required|in:0,1',
        'activeQuestion.alignment' => 'required|in:0,1,2',
        'activeQuestion.verticalalign' => 'required|in:0,1,2',
        'activeQuestion.variation' => 'required|in:0,1,2',
        'activeQuestion.is_required' => 'required|in:0,1',
        'activeQuestion.attributes.choice_selection_count' => 'required|integer',
        'activeQuestion.attributes.randomize_choice' => 'required|in:0,1',
        'activeQuestion.attributes.max_chars' => 'required|integer',
        'activeQuestion.attributes.date_format' => 'required',
        'activeQuestion.attributes.alphabetical_order' => 'required|in:0,1',
        'choices.*' => '',



    ];

    public function mount()
    {

        $this->questionTypes = $this->getQuestionTypes();

        $this->questions = $this->survey->questions()->orderBy('position')->get();

        if (! $this->questions->isEmpty()) {
            $this->showQuestion($this->questions->first());
        }
    }

    public function render()
    {


        $this->questions = $this->survey->questions()->orderBy('position')->get();

        return view('livewire.company.show-question-builder');
    }


    public function updateTaskOrder($items)
    {
       foreach ($items as $key => $item) {
          Question::find($item['value'])->update([
            'position'=>$item['order'],
        ]);
       }
    }

    public function ChooseShow($getvalue){

        $privilege_array = array(

            'trueandfalse'=>array(

            'name'=>'true & false ?',

            'item'=> array(

            'answer-0' => 'True',

            'answer-1' => 'False',

            ),

            ),
            'agree'=>array(

            'name'=>'Agree ?',

            'item'=> array(

            'answer-0' => 'Strongly agree',

            'answer-1' => 'Somewhat agree',

            'answer-2' => 'Somewhat disagree',

            'answer-3' => 'Strongly disagree',

            ),

            ),

            'enough'=>array(

            'name'=>'Enough ?',

            'item'=> array(

            'answer-0' => 'Much too little',

            'answer-1' => 'The right amount',

            'answer-2' => 'Much too much',

            ),

            ),

            'satisfied'=>array(

                'name'=>'Satisfied ?',

                'item'=> array(

                'answer-0' => 'Very Satisfied',

                'answer-1' => 'Somewhat satisfied',

                'answer-2' => 'Neither Satisfied nor dissatisfied',

                'answer-3' => 'Somewhat dissatisfied',

                'answer-4' => 'Very dissatisfied',

                ),

            ),

            'scott'=>array(

                'name'=>'Scott ?',

                'item'=> array(

                    'answer-0' => 'Very scott',

                    'answer-1' => 'Somewhat scott',

                    'answer-2' => 'Neither scott nor dissatisfied',

                    'answer-3' => 'Somewhat not scott',

                    'answer-4' => 'Very not scott',

                ),

            ),

            'mobile'=>array(

                'name'=>'Mobile ?',

                'item'=> array(

                    'answer-0' => 'Nokia',

                    'answer-1' => 'Iphone',

                    'answer-2' => 'vivo',

                    'answer-3' => '1plus',

                ),

            ),

        );
        foreach ($this->choices as $key => $choice){
             unset($this->choices[$key]);
        }
        foreach ($privilege_array as $key => $value) {
            if($key == $getvalue){
                foreach ($value['item'] as $key2 => $value2) {

                     array_push($this->choices, $value2);

                }

            }
        }
    }

    public function addChoice(Question $question)
    {
        array_push($this->choices, '');
    }

    public function submitForm(){
        $this->submit();

    }
    public function pexelSubmit($img){
        $this->activeQuestion->img_pexels = ($img!='')?$img:null;
        Storage::disk('public')->delete($this->activeQuestion->image);
        $this->activeQuestion->image=null;
        $this->activeQuestion->videolink ='';
        $this->activeQuestion->save();
        // $this->submit();
    }

    public function submit()
    {
        $this->reassignChoices();

        if($this->image) {

            $this->validate([
                'image' => 'mimetypes:image/jpeg,image/png,image/svg,image/gif,video/avi,video/mpeg,video/quicktime,video/mp4|max:100000',
            //    'image' => 'video',
            ],['image.image' => 'The file must be of type'
            ]);

            $filename = $this->image->store('questions','public');
            $this->activeQuestion->image = $filename;
            $this->activeQuestion->img_pexels ='';
            $this->activeQuestion->videolink ='';
        }
        if($this->activeQuestion->videolink){
            Storage::disk('public')->delete($this->activeQuestion->image);
            $this->activeQuestion->image ='';
            $this->activeQuestion->img_pexels ='';

        }

        $this->activeQuestion->save();

        $this->reset('image');

        $this->showQuestion($this->activeQuestion);
    }

    public function deleteQuestion(Question $question)
    {
        $question->delete();

        $this->activeQuestion = null;

        $this->mount();
    }

    public function deleteChoice($choiceKey)
    {
        unset($this->choices[$choiceKey]);
    }

    public function showQuestion(Question $question)
    {
        $this->activeQuestion = $question;

        $this->choices = ($this->activeQuestion->attributes['choices']) ?? [];



    }

    public function addQuestion($surveyUuid, $questionType)
    {

        try {
            $survey = Survey::where('uuid', $surveyUuid)->first();
            $this->authorize('addQuestion', $survey);
            $question = $survey->addEmptyQuestion($questionType);
            $this->showQuestion($question);
            $this->select_type = $questionType;

        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'warning',  'message' => $e->getMessage()]);

        }

    }

    private function reassignChoices()
    {
        $attributes = $this->activeQuestion->attributes;

        $attributes['choices'] = $this->choices;

        $this->activeQuestion->attributes = $attributes;
    }

    public function uploadImage()
    {
       $this->image->storePublicly('photos');
    }
}
