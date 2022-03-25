<?php
namespace App\Http\Livewire\Company;

use App\Models\Survey;
use Livewire\Component;
use App\Models\Question;
use Livewire\WithFileUploads;
use App\Traits\QuestionBuilder;


use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class ShowQuestionBuilder extends Component
{
    use QuestionBuilder;
    use AuthorizesRequests;
    use WithFileUploads;

    public $questions;

    public $activeQuestion;

    public $choices = [];

    public $survey;

    public $select_type;

    public $questionTypes;

    public $privilegeArray;

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

        $jsonData = Storage::disk('local')->get('quick_options.json');
        $this->privilegeArray = json_decode($jsonData, true);
    }

    public function render()
    {


        $this->questions = $this->survey->questions()->orderBy('position')->get();

        return view('livewire.company.show-question-builder');
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

    public function ChooseShow($getvalue){

        try {

            foreach ($this->choices as $key => $choice){
                 unset($this->choices[$key]);
            }
            foreach ($this->privilegeArray as $key => $value) {
                if($key == $getvalue){
                    foreach ($value['item'] as $key2 => $value2) {

                         array_push($this->choices, $value2);

                    }

                }
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert',
                ['type' => 'warning',  'message' => $e->getMessage()]);
        }

    }

}
