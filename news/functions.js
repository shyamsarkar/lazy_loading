// $(window).scroll(function () {
//   if ($(window).scrollTop() == $(document).height() - $(window).height()) {
//     // ajax call get data from server and append to the div
//   }
// });




var counter = 1;
$(window).scroll(function () {
  if ($(window).scrollTop() == $(document).height() - $(window).height() && counter <= 2) {
    appendData();
    // console.log(counter);
  }
});

function appendData() {
  $.ajax({
    url: "show_record.php",
    success: function (mydata) {
      $('#show_record').append(mydata);
      counter++;
      if (counter > 2) {
        $('#show_record').append('<tr><td colspan=5><button id="uniqueButton" onclick="ReCount()" class="btn btn-primary mb-5">Load More...</button></td></tr>');
      }
    }
  });

}

function ReCount() {
  counter = 1;
  document.getElementById('uniqueButton').parentElement.remove();
  appendData();
}















// function appendData() {
//   var html = '';
//   for (i = 0; i < 10; i++) {
//     html += '<p class="dynamic">Dynamic Data :  This is test data.<br />Next line.</p>';
//   }
//   $('#show_record').append(html);
//   counter++;

//   if (counter == 2)
//     $('#show_record').append('<button id="uniqueButton" style="margin-left: 50%; background-color: powderblue;">Click</button><br /><br />');
// }