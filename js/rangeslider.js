// DOM Ready
$(function() {
 var el, newPoint, newPlace, offset;
 //el = document.getElementById('rangeSlider');
 
 // Select all range inputs, watch for change
 $("input[type='range']").change(function() {
    
    if (parseInt(this.value) < 1200) {
        this.value = "1200";
    }
    else if (parseInt(this.value) < 3000){
        this.value = "3000";
    } 
    else if (parseInt(this.value) < 5000){
        this.value = "5000";
    } 
    else if (parseInt(this.value) < 9000){
        this.value = "9000";
    } 
    else if (parseInt(this.value) < 12000){
        this.value = "12000";
    } 
    else if (parseInt(this.value) < 16000){
        this.value = "16000";
    } 
    else if (parseInt(this.value) < 38000){
        this.value = "38000";
    } 
    else if (parseInt(this.value) < 65000){
        this.value = "65000";
    } 
    else if (parseInt(this.value) < 90000){
        this.value = "90000";
    } 
    else if (parseInt(this.value) < 150000){
        this.value = "150000";
    } 
    else if (parseInt(this.value) < 300000){
        this.value = "300000";
    }    
    




   // Cache this for efficiency
   el = $(this);
   
   // Measure width of range input
   width = el.width();
   
   // Figure out placement percentage between left and right of input
   newPoint = (el.val() - el.attr("min")) / (el.attr("max") - el.attr("min"));  
   // Janky value to get pointer to line up better
   offset = -1.3;
   
   // Prevent bubble from going beyond left or right (unsupported browsers)
   if (newPoint < 0) { newPlace = 0; }
   else if (newPoint > 1) { newPlace = width; }
   else { newPlace = width * newPoint + offset; offset -= newPoint; }
   // Move bubble
   $("input[type='range']").next("output").css({
       left: -13 + newPlace,
       marginLeft: offset + "%"
     })
     .text(el.val()/1000+" Mil\nVisitas");
 })
 // Fake a change to position bubble at page load
 .trigger('change');
});