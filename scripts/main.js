"use strict";
var max_page = 20;
var outString = "";
var outValue = "";
var strMainSep = "____";
var strSubSep = "@@@@";
$(document).ready(function() {
    var $slider = $('.slider');
    var $progressBar = $('.progress');
    var $progressBarLabel = $( '.slider__label' );
    
    $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
      if (nextSlide == 0) {
        $('.slick-prev').hide();
      }
      else if (nextSlide > 0 && nextSlide < max_page) {
        $('.slick-prev').show();
      }
      else if (nextSlide == max_page) {
        $('.slick-prev').show();
        $('.slick-next').hide();
        return;
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
        if(nextSlide == max_page + 1)
        {
          $('.slick-prev').show();
          $('.slick-next').hide();
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
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 2)
  {
    var ele1 = document.getElementsByName('quiz-2');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strSubSep;
        outValue += pageValue + strSubSep;
      }
    }
    outString += strMainSep;
    outValue += strMainSep;
  }
  else if(curPage == 3)
  {
    var ele1 = document.getElementsByName('quiz-3');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 4)
  {
    var ele1 = document.getElementsByName('quiz-4');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 5)
  {
    var ele1 = document.getElementsByName('quiz-5');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 6)
  {
    var ele1 = document.getElementsByName('quiz-6');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 7)
  {
    var ele1 = document.getElementsByName('quiz-7');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 8)
  {
    var ele1 = document.getElementsByName('quiz-8');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 9)
  {
    var ele1 = document.getElementsByName('quiz-9');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 10)
  {
    var ele1 = document.getElementsByName('quiz-name');
    pageValue = ele1[0].value;
    outString += pageValue + strMainSep;
    outValue += pageValue + strMainSep;
  }
  else if(curPage == 11)
  {
    var ele1 = document.getElementsByName('quiz-11');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 12)
  {
    var ele1 = document.getElementsByName('quiz-old');
    pageValue = ele1[0].value;
    outString += pageValue + strMainSep;
    outValue += pageValue + strMainSep;
  }
  else if(curPage == 13)
  {
    var ele1 = document.getElementsByName('quiz-length');
    pageValue = ele1[0].value;
    outString += pageValue + strMainSep;
    outValue += pageValue + strMainSep;
  }
  else if(curPage == 14)
  {
    var ele1 = document.getElementsByName('quiz-weight');
    pageValue = ele1[0].value;
    outString += pageValue + strMainSep;
    outValue += pageValue + strMainSep;
  }
  else if(curPage == 15)
  {
    var ele1 = document.getElementsByName('quiz-ideal-weight');
    pageValue = ele1[0].value;
    outString += pageValue + strMainSep;
    outValue += pageValue + strMainSep;
  }
  else if(curPage == 16)
  {
    var ele1 = document.getElementsByName('quiz-16');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 17)
  {
    var ele1 = document.getElementsByName('quiz-17');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 18)
  {
    var ele1 = document.getElementsByName('quiz-18');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        // outString += pageValue + strMainSep;
      }
    }
    var ele1 = document.getElementsByName('quiz-medical');
    var temp = ele1[0].value;
    outString += temp + strMainSep;
    outValue += pageValue + strMainSep;
}
  else if(curPage == 19)
  {
    var ele1 = document.getElementsByName('quiz-19');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        // outString += pageValue + strMainSep;
      }
    }
    var ele1 = document.getElementsByName('quiz-allergy');
    var temp = ele1[0].value;
    outString += temp + strMainSep;
    outValue += pageValue + strMainSep;
  }
  else if(curPage == 20)
  {
    var ele1 = document.getElementsByName('quiz-20');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }
  else if(curPage == 21)
  {
    var ele1 = document.getElementsByName('quiz-21');
    for(var i = 0; i < ele1.length; i++) {
      if(ele1[i].checked){
        pageValue = ele1[i].value;
        var eleID = ele1[i].id;
        var labelName = document.getElementsByName(eleID)[0].textContent;
        outString += labelName + strMainSep;
        outValue += pageValue + strMainSep;
      }
    }
  }

  return pageValue;
}


$('input[name=quiz-name]').change(function() {
  $('.slick-next').show();
});

$('input[name=quiz-old]').change(function() {
  var element = document.getElementsByName('quiz-old');
  var tmp = parseFloat(element[0].value);
  if(tmp < 0)
  {
    $('input[name=quiz-old]').val(0);
    alert("?????????????????????????????????????????????")
    $('.slick-next').hide();
  }
  else
  {
    $('input[name=quiz-old]').val(tmp);
    $('.slick-next').show();
  }
});

$('input[name=quiz-length]').change(function() {
  var element = document.getElementsByName('quiz-length');
  var tmp = parseFloat(element[0].value);
  if(tmp < 0)
  {
    $('input[name=quiz-length]').val(0);
    alert("?????????????????????????????????????????????")
    $('.slick-next').hide();
  }
  else
  {
    $('input[name=quiz-length]').val(tmp);
    $('.slick-next').show();
  }
});

$('input[name=quiz-weight]').change(function() {
  var element = document.getElementsByName('quiz-weight');
  var tmp = parseFloat(element[0].value);
  if(tmp < 0)
  {
    $('input[name=quiz-weight]').val(0);
    alert("?????????????????????????????????????????????")
    $('.slick-next').hide();
  }
  else
  {
    $('input[name=quiz-weight]').val(tmp);
    $('.slick-next').show();
  }
});

$('input[name=quiz-ideal-weight]').change(function() {
  var element = document.getElementsByName('quiz-ideal-weight');
  var tmp = parseFloat(element[0].value);
  if(tmp < 0)
  {
    $('input[name=quiz-ideal-weight]').val(0);
    alert("????????????????????????????????????????????????????????????")
    $('.slick-next').hide();
  }
  else
  {
    $('input[name=quiz-ideal-weight]').val(tmp);
    $('.slick-next').show();
  }
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
  if(max_page == 18)
  {
    $('.slick-next').hide();
    $('.evaluate-btn').show();  
  }
  else {
    var ele1 = document.getElementsByName('quiz-allergy');
    var temp = ele1[0].value;
    if(temp == "")
      $('.slick-next').hide();
    else
      $('.slick-next').show();  
  }
}

function startBtnClick() {
  // var topPage = document.getElementsByClassName('top-page');
  // topPage[0].classList.add('top-page-hide')
  $('.top-page').hide();
  $('.evaluate-btn').hide();
}

$(".quiz-content .next-radio").click(function(event){
  // var obj = event.target;
  $('.slick-next').click();
});
$('#quiz-11-1').click(function(event){
  max_page = 18;
});
$('#quiz-11-2').click(function(event){
  max_page = 20;
});
$('#quiz-18-1').click(function(event){
  // var obj = event.target;
  $( "#quiz-medical" ).prop( "disabled", false );
});
$('#quiz-19-1').click(function(event){
  // var obj = event.target;
  $( "#quiz-allergy" ).prop( "disabled", false );
});
$('#quiz-19-2').click(function(event) {
  if(max_page == 18) {
    $('.slick-next').hide();
    $('.evaluate-btn').show();  
  }
  else {
    $('.slick-next').click();  
  }
});
$('input[name=quiz-21]').change(function() {
  $('.slick-next').hide();
  $('.evaluate-btn').show();
});
$(".quiz-content input[type=checkbox]").click(function(event){
  // var obj = event.target;
  $('.slick-next').show();
});
$(".quiz-name").click(function(event){
  $('.slick-next').show();
});

function startDiagnosis() {
  

  $('.progress').css("background-size", 100+"% " + 100 + "%");
  $('.slider').hide();
  $('.result-page').show();
  $('.evaluate-btn').hide();
  $('.progressbar').hide();

  var result, result_bmi, eval_protain, eval_vitamin, eval_gap, eval_exercise, eval_break;
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
  eval_vitamin = (quiz_6 + quiz_7 + quiz_8 + quiz_9) * 20 + 20;            //vitamin

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
  
  var param1 = quiz_job * 20;
  var param2 = quiz_athletic;
  if(quiz_athletic == 1)
    param2 = 50;
  else if(quiz_athletic == 2.5)
    param2 = 75;
  else if(quiz_athletic == 5)
    param2 = 100;
  eval_exercise = param1 + param2 + 20;
  if(eval_exercise > 100)
    eval_exercise = 100;                                               //athletic

  val_tmp = (quiz_6 + quiz_7 + quiz_8 + quiz_9) * 5;
  eval_break = (quiz_sleeptime - val_tmp) - eval_exercise/10;           //body
  
  if(eval_protain > 100)
    eval_protain = 100;
  if(eval_exercise > 100)
    eval_exercise = 100;
  if(eval_vitamin > 100)
    eval_vitamin = 100;
  if(eval_break > 100)
    eval_break = 100;
  if(eval_gap > 100)
    eval_gap = 100;
  if(eval_gap < 0)
    eval_gap = 0;
    
  var user_name = document.getElementById("quiz-name").value;
  var ele = document.getElementsByName("username");
  for(var i = 0; i < ele.length; i++) {
    ele[i].textContent = user_name;
  }

  var quiz_milk = document.getElementById("quiz-16-1");
  if(quiz_milk.checked)
  {
    $('.attension-title').show();
    $('.attension1').show();
  }

  var quiz_supplement = document.getElementById("quiz-17-1");
  if(quiz_supplement.checked)
  {
    $('.attension-title').show();
    $('.attension3').show();
  }

  var quiz_medical = document.getElementById("quiz-medical").value;
  if(quiz_medical != "")
  {
    $('.attension-title').show();
    $('.attension2').show();
  }

  var quiz_baby = document.getElementById("quiz-20-1");
  if(quiz_baby.checked)
  {
    $('.attension-title').show();
    $('.attension2').show();
  }

  var quiz_baby = document.getElementById("quiz-21-1");
  if(quiz_baby.checked)
  {
    $('.attension-title').show();
    $('.attension2').show();
  }
  
  var marksCanvas = document.getElementById("marksChart");  
  var marksData = {
    labels: ["???????????????????????????", "????????????????????????", "?????????/?????????????????????GAP", "??????????????????", "??????????????????"],
      datasets: [{
          label: "????????????",
          backgroundColor: "rgba(200,0,0,0.2)",
          data: [parseFloat(eval_protain), parseFloat(eval_vitamin), parseFloat(eval_gap), parseFloat(eval_exercise), parseFloat(eval_break)],
      }]
  };

  var radarChart = new Chart(marksCanvas, {
      type: 'radar',
      data: marksData,
      options: {
        scale: {
          min: 0,
          max: 100,
          stepSize: 10
        }
      },
  });

  let minvalue = Math.min(parseFloat(eval_protain), parseFloat(eval_vitamin), parseFloat(eval_gap), parseFloat(eval_exercise), parseFloat(eval_break));
  if(minvalue == parseFloat(eval_protain))
    document.getElementById("result-protain").style.display = "block";
  else if(minvalue == parseFloat(eval_vitamin))
    document.getElementById("result-vitamin").style.display = "block";
  else if(minvalue == parseFloat(eval_gap))
    document.getElementById("result-gap").style.display = "block";
  else if(minvalue == parseFloat(eval_exercise))
    document.getElementById("result-exercise").style.display = "block";
  else if(minvalue == parseFloat(eval_break))
    document.getElementById("result-break").style.display = "block";
}

function getOutString()
{
  outString = "";
  var value = "";
  for(var i = 1; i <= max_page + 1; i++)
  {
    value = testValidate(i);
    if(value == "")
    {
      alert("Q." + i + "?????????????????????");
      return "";
    }
  }
  return outString;
}

function getOutValue()
{
  outValue = "";
  var value = "";
  for(var i = 1; i <= max_page + 1; i++)
  {
    value = testValidate(i);
    if(value == "")
    {
      return "";
    }
  }
  return outValue;
}