$(document).ready(function() {

    $("select.state").change(function() {
      var selectedCity = $(".state option:selected").val();

      $.ajax({
        type: "POST",
        url: "../selectCountry/process-request.php",
        data: {
          state: selectedCity
        }
      }).done(function(data) {

        $("#price").html(data);

      });
    });
  });