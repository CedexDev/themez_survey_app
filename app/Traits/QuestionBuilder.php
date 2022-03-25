<?php

namespace App\Traits;

trait QuestionBuilder
{
    public $types = [
        // [
        //     'key' => 'impact',
        //     'title' => 'Content',
        // ],
        [
            'key' => 'multiple-choices',
            'title' => 'Multi-choice',
            'attributes' => [
                'choice_selection_count' => 1,
                'randomize_choice' => 0,
                'choices' => [
                    '',
                    '',
                ],
            ],
        ],
        [
            'key' => 'email',
            'title' => 'Email field',
        ],
        [
            'key' => 'long-text',
            'title' => 'Text field',
            'attributes' => [
                'max_chars' => 200,
            ],
        ],
        // [
        //     'key' => 'yes-no',
        //     'title' => 'Me too',
        //     'attributes' => [
        //         'choices' => [
        //             1 => 'Me too',
        //             2 => 'Not me',
        //         ],
        //     ],
        // ],




        // [
        //     'key' => 'rating',
        //     'title' => 'Rating',
        //     'attributes' => [
        //         'choices' => [
        //             1,
        //             2,
        //             3,
        //             4,
        //             5,
        //         ],
        //     ],
        // ],

        // [
        //     'key' => 'phone',
        //     'title' => 'Phone',
        // ],



        // [
        //     'key' => 'short-text',
        //     'title' => 'Text',
        //     'attributes' => [
        //         'max_chars' => 50,
        //     ],
        // ],





        // [
        //     'key' => 'date',
        //     'title' => 'Date',
        //     'attributes' => [
        //         'date_format' => 'MMDDYYYY',
        //     ],
        // ],

        [
            'key' => 'number',
            'title' => 'Number field',
        ],



        // [
        //     'key' => 'dropdown',
        //     'title' => 'HTML',
        //     'attributes' => [
        //         'alphabetical_order' => false,
        //         'randomize' => false,
        //         'choices' => [],
        //     ],
        // ]
        // [
        //     'key' => 'slider',
        //     'title' => 'Slider',
        //     'attributes' => [
        //         'choice_selection_count' => 1,
        //         'randomize_choice' => 0,
        //         'choices' => [
        //             0,
        //             100,
        //         ],
        //     ],
        // ]
    ];

    public function getQuestionTypes()
    {
        return collect($this->types)->pluck('title', 'key');
    }

    public function getQuestionAttribute($type)
    {
        $attributes = collect($this->types)->where('key', $type)->first();

        return (isset($attributes['attributes'])) ? $attributes['attributes'] : null;
    }
}
