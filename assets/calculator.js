// assets/calculator.js

import $ from 'jquery';

$(document).ready(function () {
  $('#calculator-form').submit(function (e) {
    e.preventDefault();

    const formData = $(this).serialize();

    $.ajax({
      url: '/',
      type: 'POST',
      data: formData,
      success: function (data) {
        $('#result').html('Result: ' + data.result);
      },
      error: function () {
        alert('Error processing request');
      }
    });
  });
});
