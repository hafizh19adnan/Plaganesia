<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Butuh Bantuan ?</h5>
          <p class="grey-text text-lighten-4">Kirim email ke kami</p>
          <p class="grey-text text-lighten-4">admin@plaganesia.com</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Informasi Lain</h5>
          <ul>
            <li><a class="white-text" href="#!">Tentang</a></li>
            <li><a class="white-text" href="#!">FAQ</a></li>
            <li><a class="white-text" href="#!">Situs Kemenkes</a></li>
            <li><a class="white-text" href="#!">Situs Pusdatin Kemenkes</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Ikuti Kami</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">Instagram</a></li>
            <li><a class="white-text" href="#!">Google+</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


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
           format: 'yyyy-mm-dd'
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
