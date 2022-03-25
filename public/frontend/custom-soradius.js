/**
 * Custom soradius solutions
 * Email: info@soradius.com
 */
 let responses = [];
 let questions = [];
 $(function () {
     "use strict";

     handleOtherInputs($);

     handleRadioButtons($);
     handleRatingButtons($);
     handleSelects($);
     //disableStuff($)

     //check if you are on surveys page and if so load previous survey answers.
     if (document.getElementById("survey_form") !== null) {
         console.log("location is ", localStorage.getItem("soradius_survey_id"));
         getSurveyResponses()

     }

 });

 function handleOtherInputs($){
     $('form#survey_form input[type=text]').on('keyup', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })

     $('form#survey_form input[type=tel]').on('keyup', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })

     $('form#survey_form input[type=email]').on('keyup', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })

     $('form#survey_form textarea').on('keyup', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })

     $('form#survey_form input[type=date]').on('change', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })

     $('form#survey_form input[type=number]').on('keyup', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })

     $('form#survey_form input[type=range]').on('change', function (val){
         saveAutomatically(parseInt($(this).attr("data-sor_id")),$(this).val());
     })
 }

 function disableStuff(){
     window.addEventListener('contextmenu', function (e) {
         // do something here...
         e.preventDefault();
     }, false)

     $(document).keyup(function(evtobj) {
         if (evtobj.altKey || evtobj.ctrlKey || evtobj.shiftKey){
             alert("you pressed one of the 'Alt', 'Ctrl', or 'Shift' keys")
         }
         if (!(evtobj.altKey || evtobj.ctrlKey || evtobj.shiftKey)){
             if (evtobj.keyCode == 16) {return false;}
             if (evtobj.keyCode == 17) {return false;}
             console.log(evtobj.keyCode + " ");

         }
     });
 }

 function handleSelects($){

     $('form#survey_form select').change(function () {
         const checked_question = parseInt($(this).attr("data-sor_id"));
         $("#question_input_"+checked_question).remove();
         let selected_value = $(this).val();
         $("#input_"+checked_question).val(selected_value);



         let question_responses = responses.filter(function (item) {
             return item.question_id === checked_question;
         })
         let question_choices = questions.find(function (item) {
             return item.id === checked_question;
         }).attributes.choices;


         saveAutomatically(checked_question, selected_value).then(function (res){
              drawHandleSelectButtons(question_choices,val,selected_value,checked_question)

         },function (err){
             drawHandleSelectButtons(question_choices,question_responses,selected_value,checked_question)
         });

         console.log("choices are", question_choices);


     })
 }

 function drawHandleSelectButtons(question_choices,question_responses,selected_value,checked_question){

     var html_output = "";
     question_choices.forEach(function (item) {
         let selection_total = question_responses.filter(res_item=>res_item.response === item).length;
         let opacity = 100;

         if (selection_total > 0 && selection_total <= 5){
             opacity = selection_total;
         }

         if (selection_total > 5 && selection_total <= 10){
             opacity = Math.round(5/selection_total);
         }
         let rating = calculateRating(item, question_responses, selected_value);


         html_output += `<div class="response_item circle">
                     <span>
                     `+item+" ("+selection_total+`)
                     </span>
                     <div class="circle" style="--choicePercentage:${rating}%; --choiceTotal:${selection_total};"></div>
                 </div>`;


     });
     // $([document.documentElement, document.body]).animate({
     //     scrollTop: $(this).parent().next().offset().top
     // }, 2000);
     $("#soradius_response_" + checked_question).show();
     $("#responses_container_" + checked_question).html(html_output);
 }
 /**
  * RATING BUTTONS
  * @param $
  */
 function handleRatingButtons($) {
     $('form#survey_form .sor_rating button').click(function () {
         let question_id = $(this).attr("data-sor_id");
         let rating_value = $(this).attr("data-sor_value");

         $("#question_input_"+question_id).remove();

         let options = [1, 2, 3, 4, 5];
         let question_responses = responses.filter(function (item) {
             return parseInt(item.question_id) === parseInt(question_id);
         })

         $("#input_"+question_id).val(rating_value);
         saveAutomatically(question_id, rating_value).then(function (val){
             console.log("val is ", val);

             drawHandleRatingButtons(options,val,rating_value,question_id)
         },function (err){
             drawHandleRatingButtons(options,question_responses,rating_value,question_id)
         })
     });
 }


 function drawHandleRatingButtons(options,question_responses,rating_value,question_id){
     var html_output = "";
     options.forEach(function (item) {
         let selection_total = question_responses.filter(res_item=>parseInt(res_item.response) === item).length;
         let opacity = 100;

         if (selection_total > 0 && selection_total <= 5){
             opacity = selection_total;
         }

         if (selection_total > 5 && selection_total <= 10){
             opacity = Math.round(5/selection_total);
         }

         let rating = calculateRating(item, question_responses, parseInt(rating_value));

         html_output += `<div class="response_item">
                     <span>
                     `+item+" ("+selection_total+`)
                     </span>
                     <div class="" style="--choicePercentage:${rating}%; --choiceTotal:${selection_total};"></div>
                 </div>`;


     });
     $("#soradius_response_" + question_id).show();
     $("#responses_container_" + question_id).html(html_output);
 }

 /**
  * RADIO BUTTONS
  * @param $
  */

 function handleRadioButtons($) {
     $('form#survey_form input[type=radio]').click(function () {
     //  $("body").find(".inview").addClass("spinner");
     //  $(".snap-container").addClass("scroll-stop");
     var snapscroll = $("body").find(".inview").next().attr('id');
      setTimeout(function(){
         // window.location.href = "#" + snapscroll;
         // $("#" + snapscroll).removeClass("spinner");
         // $(".snap-container").removeClass("scroll-stop");
     }, 3000);
         const checked_question = parseInt($(this).attr("data-sor_id"));


         let question_responses = responses.filter(function (item) {
             return item.question_id === checked_question;
         })
         let selected_value = $(this).val();

         let question_choices = [];
         let question_choice = questions.find(function (item) {
             return item.id === checked_question;
         });

         if (question_choice && question_choice.type === 'multiple-choices') {
             question_choices = question_choice.attributes.choices;
            // console.log(question_choices);
         }
         if (question_choice && question_choice.type === 'yes-no') {
             question_choices = Object.values(question_choice.attributes.choices);
         }
         $("#input_"+checked_question).val(selected_value);
         checkid = $(this).attr("id");
         setTimeout(function() {
             saveAutomatically(checked_question, selected_value).then(function (res){
                 $("#question_input_"+checked_question).remove();
                 drawHandleRadioButtons(checkid,question_choices,checked_question,res,selected_value);
             },function(err){
                 drawHandleRadioButtons(checkid,question_choices,checked_question,question_responses,selected_value);
             })

         }, 0);

     });
 }

 function drawHandleRadioButtons(checkid,question_choices,checked_question,question_responses,selected_value){
     var html_output = "";
     console.log(checkid);
         $('#'+checkid).addClass( 'active-button' );


    //console.log(question_choices);

    for (let keyAttr of Object.keys(question_choices)) {
         var item = question_choices[keyAttr];

         let selection_total = question_responses.filter(res_item=>res_item.response === item).length;

         console.log("we have item")
         console.log(item)
         console.log(question_responses)

         if(item === selected_value)
         {
             var activeclass = 'not-active';
         }else{

            var activeclass = 'active-answer';
         }



         let rating = calculateRating(item, question_responses, selected_value);


         html_output += `<div class="response_item `+activeclass+`"><span class="disabled-check border-color-four"></span>
         <div class="w-100 p-0"><span class="percent">${Math.round((selection_total / rating) * 100)}%</span>
         <div>
                     <span class="ans">
                     `+item+`
                     </span>

                     </div></div>
                     <div class="bar-cont">
                     <div class="bar border-color-five" style="--choicePercentage:${(selection_total / rating) * 100}%; --choiceTotal:${selection_total};"></div></div></div>`;

     };

     $("#soradius_response_" + checked_question).show();
     $("#responses_container_" + checked_question).html(html_output);




 }


 function getSurveyResponses() {

     $("form#survey_form").hide()

     if (!localStorage.getItem("soradius_survey_id")){
       window.location.reload();
     }

     let url = "/api/survey/responses?survey_id=" + localStorage.getItem("soradius_survey_id");
     const xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function () {
         if (this.readyState === 4 && this.status === 200) {

             responses = JSON.parse(this.responseText).responses;
             questions = JSON.parse(this.responseText).questions;

             $("form#survey_form").show()
         }
     };
     xhttp.onload = function () {
         // Here you can use the Data
     }
     xhttp.open("GET", url);
     xhttp.send();

 }


 function calculateRating(item, question_responses, option) {
     let value = 0;
     if (question_responses && question_responses.length > 0) {
         let my_item_total = question_responses.filter(function (itemV) {
             return cleanString(typeof item === 'number' ? parseInt(itemV.response) : itemV.response) === cleanString(item);
         }).length;
         if (cleanString(option) === cleanString(item)) {
             my_item_total += 1;
         }
         // value = Math.round((my_item_total / (question_responses.length + 1)) * 100)
         value = ((question_responses.length))

         return value;
     }
     return (cleanString(option) === cleanString(item)) ? 100 : 0;
 }


 function cleanString(str) {
     return typeof str === 'number' ? parseInt(str) : (str ? str.replace(/\s/g, '') : '');
 }

 function saveAutomatically(question_id, answer){
     $("#soradius_loading_"+question_id).show();
     return new Promise(function (resolve,reject){
         let url = "/api/survey/automatic-save";
         let data = new FormData();
         data.append('question_id', question_id);
         data.append('answer', answer);
         data.append('attendee', localStorage.getItem("soradius_attendee_item"));
         data.append('survey_id', localStorage.getItem("soradius_survey_id"));
         var xhr = new XMLHttpRequest();
         xhr.open('POST', url, true);
         xhr.onreadystatechange = function (oEvent) {
             $("#soradius_loading_"+question_id).hide();
             if (xhr.readyState === 4) {
                 if (xhr.status === 200) {

                     resolve(JSON.parse(xhr.responseText));
                 } else {
                     reject(false);
                 }
             }
         };
         xhr.send(data);
     })

 }

 $(window).on("load",function(){$("body").addClass("loaded")})

     $(".snap .xm-page").each(function() {
         $(this).on('inview', function(event, isInView) {

             if (isInView) {
                 $(this).parent().parent().addClass("inview");
                 $(this).parent().parent().find("video").trigger("play");



 //                 $('#theVideo').get(0).play();
 //   setTimeout(function(){
 //     $('#theVideo').get(0).pause();
 //     $('#theVideo').get(0).currentTime = 0;
 //   }, 7000);


                 var loaded = $(this).parent().parent().data("percent");
                 $(".xm-progress span").height(loaded);

             } else {
                 $(this).parent().parent().removeClass("inview");
                 $(this).parent().parent().find("video").trigger("pause");
             }
         })
     });

     // $('video').addEventListener('ended',myHandler,false);
     // function myHandler(e) {
     //     console.log('ended');
     //     setTimeout(function(){
     //         $('video').play();
     //     }, 5000);
     // }

     // $(".snap .xm-page").each(function() {
     //     $(this).one('inview', function(event, isInView) {
     //         if (isInView) {
     //             var head = $(this).parent().parent().find("h2");
     //             var highlight = $(head).text().split(" ");
     //             $(head).empty();
     //             $.each(highlight, function(i, v) {
     //                 $(head).append($("<span>").text(v));
     //             });

     //         }
     //     })
     // });

     // var comfyText = (function() {
     //     var tag = document.querySelectorAll('textarea')
     //     for (var i = 0; i < tag.length; i++) {
     //         tag[i].addEventListener('paste', autoExpand)
     //         tag[i].addEventListener('input', autoExpand)
     //         tag[i].addEventListener('keyup', autoExpand)
     //     }

     //     function autoExpand(e, el) {
     //         var el = el || e.target
     //         el.style.height = 'inherit'
     //         el.style.height = el.scrollHeight + 'px'
     //     }
     //     window.addEventListener('load', expandAll)
     //     window.addEventListener('resize', expandAll)

     //     function expandAll(e) {
     //         var tag = document.querySelectorAll('textarea')
     //         for (var i = 0; i < tag.length; i++) {
     //             autoExpand(e, tag[i])
     //         }
     //     }
     // })()


 // gsap.registerPlugin(ScrollTrigger);

 // ScrollTrigger.defaults({
 //   toggleActions: "restart pause resume pause",
 //   scroller: ".snap-container"
 // });


 // const boxes = gsap.utils.toArray('.snap h2');

 // boxes.forEach((box, i) => {
 //   const anim = gsap.fromTo(box, {autoAlpha: 0, y: 50}, {duration: 1, autoAlpha: 1, y: 0});
 //   ScrollTrigger.create({
 //     trigger: box,
 //     animation: anim,
 //     toggleActions: 'play none none none'
 //   });
 // });
 var audioplayer = document.getElementById("audio-player");
 // $("#mute-video").click( function (){
 //     if( $("video").prop('muted') ){
 //         $("video").prop('muted', false);
 //         $(this).removeClass('muted');
 //     }
 //     else {
 //         $("video").prop('muted', true);
 //         $(this).addClass('muted');
 //     }

 //     if (audioplayer.paused) {
 //        audioplayer.play();
 //     }
 //     else {
 //        audioplayer.pause();
 //     }
 //     $(this).toggleClass('muted');
 // });

 (function($) {
     $.fn.clickToggle = function(func1, func2) {
         var funcs = [func1, func2];
         this.data('toggleclicked', 0);
         this.click(function() {
             var data = $(this).data();
             var tc = data.toggleclicked;
             $.proxy(funcs[tc], this)();
             data.toggleclicked = (tc + 1) % 2;
         });
         return this;
     };
 }(jQuery));

 if ( $(".vid-sound").length ) {
     $("#mute-video").show();
 }
 $("#mute-video").clickToggle(function() {
     $(".vid-sound").prop('muted', false);
         $(this).removeClass('muted');
         // audioplayer.play();
 },
 function() {
     $(".vid-sound").prop('muted', true);
         $(this).addClass('muted');
         // audioplayer.pause();
 });

