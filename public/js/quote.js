 $(document).ready(function() {
    $('#countrySelect').select2({
      placeholder: "Select a country",
      allowClear: true
    });
    $('#FreightSelect').select2({
      placeholder: "Select a Shipping Mode",
      allowClear: true
    });
    $('#originCountrySelect').select2({
      placeholder: "Select Origin Country",
      allowClear: true
    });
    $('#departuretypeSelect').select2({
      placeholder: "Select Departure type",
      allowClear: true
    });
      $('#destinationCountrySelect').select2({
      placeholder: "Select Destination Country",
      allowClear: true
    });
    $('#ArrivalType').select2({
      placeholder: "Select Arrival Type",
      allowClear: true
    });
     $('#ContainerType').select2({
      placeholder: "Select Container Type",
      allowClear: true
    });
     $('#DimensionSizeType').select2({
      placeholder: "Select Size Type",
      allowClear: true
    });
     $('#CargoPacked').select2({
      placeholder: "How is your cargo packed",
      allowClear: true
    });
     $('#incoterms').select2({
      placeholder: "Unknown",
      allowClear: true
    });


 const input = document.querySelector("#phone");
  window.intlTelInput(input, {
    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
  });
  });

