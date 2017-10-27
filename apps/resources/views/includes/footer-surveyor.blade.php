
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();

        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year
          format: 'dd/mm/yyyy'
        });

        // MODAL
        $('.modal').modal();
        // DROPDOWNS
        $(".dropdown-button").dropdown(
          {
            belowOrigin: true
          }
        );
        // TABS
        $('ul.tabs').tabs();
        // SCROLLSPY
        $('.scrollspy').scrollSpy();
        //SIDENAV
        $(".button-collapse").sideNav();
            });
    </script> 