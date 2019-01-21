$(document).ready(function() {
  $(window).on("load", function() {
    $(".loader")
      .delay(2)
      .fadeOut("fast");
  });

  $(".modal").modal();

  $(".dropdown-button").dropdown({
    constrainWidth: false,
    hover: true,
    belowOrigin: true,
    alignment: "left"
  });
  $(".button-collapse").sideNav();

  $(".slider").slider({
    indicators: true,
    height: 400,
    transition: 500,
    interval: 6000
  });

  $(".datepicker").pickadate({
    selectMonths: true,
    selectYears: 15,
    closeOnSelect: true
  });

  // INIT TIMEPICKER
  $(".timepicker").pickatime({
    default: "now",
    twelvehour: true,
    donetext: "ok",
    cleartext: "clear",
    canceltext: "cancel",
    autoclose: true
  });

  // INIT AUTOCOMPLETE
  $(".autocomplete").autocomplete({
    data: {
      Apple: null,
      Orange: null,
      Banana: null,
      Grapes: null,
      Strawberries: null,
      Pears: null,
      Plumbs: null
    },
    limit: 20,
    minLength: 2
  });
});
