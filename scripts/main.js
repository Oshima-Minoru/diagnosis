"use strict";


$(document).ready(function() {
    var $slider = $('.slider');
    var $progressBar = $('.progress');
    var $progressBarLabel = $( '.slider__label' );
    
    $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
      if (nextSlide == 0) {
        $('.slick-prev').hide();
        // $('.slick-next').show();
        // $('.evaluate-btn').hide();
      }
      else if (nextSlide > 0 && nextSlide < 20) {
        $('.slick-prev').show();
        // $('.slick-next').show();
        // $('.evaluate-btn').hide();
      }
      else if (nextSlide == 20) {
        $('.slick-prev').show();
        $('.slick-next').hide();
        // $('.evaluate-btn').show();
      }

      var testPage = nextSlide;
      if(nextSlide < currentSlide)
        testPage = currentSlide;
      else
        testPage = testPage + 1;

      $('.slick-next').hide();

      var value = "";
      value = testValidate(testPage);
      if(value == "")
        $('.slick-next').hide();
      else {
        $('.slick-next').show();
        if(nextSlide == 21)
        {
          $('.slick-prev').show();
          $('.slick-next').hide();
          // $('.evaluate-btn').show();
        }
      }

      $progressBar
        .css('background-size', calc + '% 100%')
        .attr('aria-valuenow', calc );
      
      $progressBarLabel.text( calc + '% completed' );
    });
    
    $slider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 400,
      draggable: false
    }); 

    $('.slick-prev').hide();
    $('.slick-next').hide();
});

function testValidate(curPage){
  var pageValue = "";
  if(curPage == 1)
  {
    var ele1 = document.getElementsByName('quiz-1');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 2)
  {
    var ele1 = document.getElementsByName('quiz-2');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 3)
  {
    var ele1 = document.getElementsByName('quiz-3');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 4)
  {
    var ele1 = document.getElementsByName('quiz-4');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 5)
  {
    var ele1 = document.getElementsByName('quiz-5');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 6)
  {
    var ele1 = document.getElementsByName('quiz-6');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 7)
  {
    var ele1 = document.getElementsByName('quiz-7');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 8)
  {
    var ele1 = document.getElementsByName('quiz-8');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 9)
  {
    var ele1 = document.getElementsByName('quiz-9');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 10)
  {
    var ele1 = document.getElementsByName('quiz-name');
    pageValue = ele1[0].value;
  }
  else if(curPage == 11)
  {
    var ele1 = document.getElementsByName('quiz-11');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 12)
  {
    var ele1 = document.getElementsByName('quiz-old');
    pageValue = ele1[0].value;
  }
  else if(curPage == 13)
  {
    var ele1 = document.getElementsByName('quiz-length');
    pageValue = ele1[0].value;
  }
  else if(curPage == 14)
  {
    var ele1 = document.getElementsByName('quiz-weight');
    pageValue = ele1[0].value;
  }
  else if(curPage == 15)
  {
    var ele1 = document.getElementsByName('quiz-ideal-weight');
    pageValue = ele1[0].value;
  }
  else if(curPage == 16)
  {
    var ele1 = document.getElementsByName('quiz-16');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 17)
  {
    var ele1 = document.getElementsByName('quiz-17');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 18)
  {
    var ele1 = document.getElementsByName('quiz-18');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 19)
  {
    var ele1 = document.getElementsByName('quiz-19');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }
  else if(curPage == 20)
  {
    var ele1 = document.getElementsByName('quiz-20');
    for(var i = 0; i < ele1.length; i++) {
        if(ele1[i].checked){
          pageValue = ele1[i].value;
        }
    }
  }

  return pageValue;
}


$('input[name=quiz-name]').change(function() {
  $('.slick-next').show();
});

$('input[name=quiz-old]').change(function() {
  $('.slick-next').show();
});
$('input[name=quiz-length]').change(function() {
  $('.slick-next').show();
});
$('input[name=quiz-weight]').change(function() {
  $('.slick-next').show();
});
$('input[name=quiz-ideal-weight]').change(function() {
  $('.slick-next').show();
});
$('input[name=quiz-21]').change(function() {
  $('.slick-next').hide();
  $('.evaluate-btn').show();
});

function medicalChanged() {
  var ele1 = document.getElementsByName('quiz-medical');
  var temp = ele1[0].value;
  if(temp == "")
    $('.slick-next').hide();
  else
    $('.slick-next').show();
}
function allergyChanged() {
  var ele1 = document.getElementsByName('quiz-allergy');
  var temp = ele1[0].value;
  if(temp == "")
    $('.slick-next').hide();
  else
    $('.slick-next').show();
}

function startBtnClick() {
  // var topPage = document.getElementsByClassName('top-page');
  // topPage[0].classList.add('top-page-hide')
  $('.top-page').hide();
  $('.evaluate-btn').hide();
}

$(".quiz-content .next-radio").click(function(event){
  var obj = event.target;
  // $('.slick-next').show();
  $('.slick-next').click();
});
$('#quiz-18-1').click(function(event){
  var obj = event.target;
  $( "#quiz-medical" ).prop( "disabled", false );
});
$('#quiz-19-1').click(function(event){
  var obj = event.target;
  $( "#quiz-allergy" ).prop( "disabled", false );
});
$(".quiz-content input[type=checkbox]").click(function(event){
  var obj = event.target;
  $('.slick-next').show();
});


$(".quiz-name").click(function(event){
  $('.slick-next').show();
});

function startDiagnosis() {
  $('.slider').hide();
  $('.result-page').show();
  $('.evaluate-btn').hide();
  $('.progressbar').hide();

  var result, result_bmi, eval_protain, eval_vitamin, eval_gap, eval_athletic, eval_body;
  var quiz_sex, quiz_weight, eval_weight, quiz_ideal_weight, eval_ideal_weight, quiz_length, eval_length, quiz_old, eval_old,
      quiz_breakfast, quiz_food, quiz_job, quiz_athletic, quiz_sleeptime, quiz_6, quiz_7, quiz_8, quiz_9;

  quiz_food = 0;
  var element = document.getElementsByName('quiz-11');
  for(var i = 0; i < element.length; i++) {
      if(element[i].checked){
        quiz_sex = parseFloat(element[i].value);                          //sex
      }
  }

  element = document.getElementsByName('quiz-weight');
  quiz_weight = parseFloat(element[0].value);
  eval_weight = parseFloat(quiz_weight)/3;                                //weight

  quiz_ideal_weight = parseFloat(document.getElementById('quiz-ideal-weight').value);
  var weight_param = quiz_ideal_weight - quiz_weight;
  if(weight_param == 0)
    eval_ideal_weight = -1;
  else if (weight_param > 0)
    eval_ideal_weight = 1
  else if (weight_param < 0)
    eval_ideal_weight = -1;                                   //ideal weight

  element = document.getElementsByName('quiz-length');
  quiz_length = parseFloat(element[0].value);

  var val_tmp = quiz_length/100*quiz_length/100;
  result_bmi = quiz_weight/val_tmp;
  eval_length = 25-result_bmi;                              //length

  element = document.getElementsByName('quiz-old');
  quiz_old = parseFloat(element[0].value);
  if(quiz_old < 20)
    eval_old = 0;
  else if(quiz_old >= 20 && quiz_old < 30)
    eval_old = 1
  else if(quiz_old >= 30 && quiz_old < 40)
    eval_old = 2
  else if(quiz_old >= 40 && quiz_old < 50)
    eval_old = 3
  else if(quiz_old >= 50 && quiz_old < 60)
    eval_old = 4
  else if(quiz_old >= 60)
    eval_old = 5                                              //old

  element = document.getElementsByName('quiz-1');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_breakfast = parseFloat(element[i].value);                      //breakfast
    }
  }

  element = document.getElementsByName('quiz-2');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_food += parseFloat(element[i].value);                           //food
    }
  }

  element = document.getElementsByName('quiz-3');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_job = parseFloat(element[i].value);                            //job
    }
  }

  element = document.getElementsByName('quiz-4');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_athletic = parseFloat(element[i].value);                       //athletic
    }
  }

  element = document.getElementsByName('quiz-5');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_sleeptime = parseFloat(element[i].value);                       //sleeptime
    }
  }

  var quiz_sum = parseFloat(quiz_sex) + parseFloat(eval_weight)
                + parseFloat(eval_ideal_weight) + parseFloat(eval_length)
                + parseFloat(eval_old) + parseFloat(quiz_breakfast)
                + parseFloat(quiz_food) + parseFloat(quiz_job)
                + parseFloat(quiz_athletic);

  if(result_bmi > 35)
    result = 0;
  else
    result = quiz_sum;

  element = document.getElementsByName('quiz-6');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_6 = parseFloat(element[i].value);
    }
  }
  element = document.getElementsByName('quiz-7');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_7 = parseFloat(element[i].value);
    }
  }
  element = document.getElementsByName('quiz-8');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_8 = parseFloat(element[i].value);
    }
  }
  element = document.getElementsByName('quiz-9');
  for(var i = 0; i < element.length; i++) {
    if(element[i].checked){
      quiz_9 = parseFloat(element[i].value);
    }
  }
  
  eval_protain = 100-result;                                      //protain
  eval_vitamin = (quiz_6 + quiz_7 + quiz_8 + quiz_9) * 25;            //vitamin

  var temp_bmi;
  if(result_bmi < 18.5)
    temp_bmi = 75;
  else if(result_bmi < 25)
    temp_bmi = 100;
  else if(result_bmi < 30)
    temp_bmi = 75;
  else
    temp_bmi = 50;
  eval_gap = temp_bmi - (weight_param/quiz_weight*100);                //GAP
  
  var param1 = quiz_job * 25;
  var param2 = quiz_athletic;
  if(quiz_athletic == 1)
    param2 = 50;
  else if(quiz_athletic == 2.5)
    param2 = 75;
  else if(quiz_athletic == 5)
    param2 = 100;
  eval_athletic = param1 + param2;
  if(eval_athletic > 100)
    eval_athletic = 100;                                               //athletic

  val_tmp = (quiz_6 + quiz_7 + quiz_8 + quiz_9) * 5;
  eval_body = (quiz_sleeptime - val_tmp) - eval_athletic/10;           //body
  
  $('.result').val(result);
  $('.protain').val(eval_protain);
  $('.vitamin').val(eval_vitamin);
  $('.gap').val(eval_gap);
  $('.athletic').val(eval_athletic);
  $('.body').val(eval_body);

  var user_name = document.getElementById("quiz-name").value;
  var ele = document.getElementsByName("username");
  for(var i = 0; i < ele.length; i++) {
    ele[i].textContent = user_name;
  }
  
  var marksCanvas = document.getElementById("marksChart");  
  var marksData = {
    labels: ["タンパク質の充足度", "ビタミンの充足度", "肥満度/理想の体重とのGAP", "運動の充足度", "休憩の充足度"],
      datasets: [{
          label: "診断結果",
          backgroundColor: "rgba(200,0,0,0.2)",
          data: [parseFloat(eval_protain), parseFloat(eval_vitamin), parseFloat(eval_gap), parseFloat(eval_athletic), parseFloat(eval_body)],
          options: {
            scale: {
                min: 0,
                max: 100,
            },
        },
      }]
  };

  var radarChart = new Chart(marksCanvas, {
      type: 'radar',
      data: marksData
  });

  let minvalue = Math.min(parseFloat(eval_protain), parseFloat(eval_vitamin), parseFloat(eval_gap), parseFloat(eval_athletic), parseFloat(eval_body));
  if(minvalue == parseFloat(eval_protain))
    document.getElementById("result-protain").style.display = "block";
  else if(minvalue == parseFloat(eval_vitamin))
    document.getElementById("result-break").style.display = "block";
  else if(minvalue == parseFloat(eval_gap))
    document.getElementById("result-exercise").style.display = "block";
  else if(minvalue == parseFloat(eval_athletic))
    document.getElementById("result-gap").style.display = "block";
  else if(minvalue == parseFloat(eval_body))
    document.getElementById("result-gap1").style.display = "block";


}


