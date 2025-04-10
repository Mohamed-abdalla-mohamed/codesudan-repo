$(document).ready(function() {

    $("select.country").change(function() {
      var selectedCountry = $(".country option:selected").val();

      $.ajax({
        type: "POST",
        url: "../selectCountry/process-request.php",
        data: {
          country: selectedCountry
        }
      }).done(function(data) {
        $("#response2").html(data);
        //the fowllowing tow colde is to set the city for the default first time when the country is selected.
        var c = document.getElementById("response2").value;
        $("#price").html(c);

      });
    });
  });