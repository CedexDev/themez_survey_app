<style>
        html {
            --colorOne: {{ $survey->question_color }};
            --colorTwo: {{ $survey->answer_color }};
            --colorThree: {{ $survey->button_color }};
            --colorFour: {{ $survey->button_text_color }};
            --colorFive: {{ $survey->background_color }};
            --fontDisplay: {{ ($survey->font_display?(json_decode($survey->font_display)->family):'Roboto') }};
            --fontBody: {{ ($survey->font_body?(json_decode($survey->font_body)->family):'Roboto') }};
        }
        .bg-one { background: var(--colorOne); }
        .bg-two { background: var(--colorTwo); }
        .bg-three { background: var(--colorThree); }
        .bg-four { background: var(--colorFour); }
        .bg-five { background: var(--colorFive); }
        .color-one { color: var(--colorOne); }
        .color-two { color: var(--colorTwo); }
        .color-three { color: var(--colorThree); }
        .color-four { color: var(--colorFour); }
        .color-five { color: var(--colorFive); }
        .stroke-one { stroke: var(--colorOne); }
        .stroke-two { stroke: var(--colorTwo); }
        .stroke-three { stroke: var(--colorThree); }
        .stroke-four { stroke: var(--colorFour); }
        .stroke-five { stroke: var(--colorFive); }
        .border-color-one { border-color: var(--colorOne); }
        .border-color-two { border-color: var(--colorTwo); }
        .border-color-three { border-color: var(--colorThree); }
        .border-color-four { border-color: var(--colorFour); }
        .border-color-five { border-color: var(--colorFive); }
        .font-display { font-family: var(--fontDisplay);}
        .font-body { font-family: var(--fontBody);}

        body .multi-choice .grow-wrap:before { border-color: var(--colorFive); }
        /* .var-two .multi-choice .grow-wrap:before { border-color: var(--colorFour); } */


        .var-two .bg-four { background: var(--colorThree); }
        .var-two .bg-three { background: var(--colorFour); }
        .var-two .color-four { color: var(--colorThree); }
        .var-two .color-three { color: var(--colorFour); }
        .var-two .stroke-four { stroke: var(--colorThree); }
        .var-two .stroke-three { stroke: var(--colorFour); }
        .var-two .border-color-four { border-color: var(--colorThree); }
        .var-two .border-color-three { border-color: var(--colorFour); }
        .var-two .font-display { font-family: var(--fontBody);}
        .var-two .grow-wrap > textarea { background: var(--colorFour); }
        .var-two .grow-wrap label.color-four, .var-two .form-group small { color: var(--colorFour); }
        .var-two .multi-choice .grow-wrap > textarea { background: var(--colorFour); color: var(--colorThree); }
        .var-two .multi-choice .grow-wrap > textarea + .inline-edit { border-color: var(--colorThree);  }
        .var-two .btn-add-answer span { border-color: var(--colorThree); }
        .var-two .btn-add-answer { color: var(--colorFour); }
        .var-two .form-group a svg { color: var(--colorThree); }

    </style>
