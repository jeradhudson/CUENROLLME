 <footer class="main-footer">
    <div class="container">
      <nav class="footer-nav">
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="#" class="social-link">
              <img src="images/twitter.svg">
              Twitter
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <img src="images/facebook.svg">
              Facebook
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </footer>
</body>


<script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <script src="assets/jquery.dataTables.min.js"></script>
  <script src="assets/dataTables.bootstrap4.min.js"></script>
  <script>
      $(document).ready(function () {
          $("#flash-msg").delay(7000).fadeOut("slow");
      });
      $(document).ready(function() {
          $('#example').DataTable();
      } );
  </script>





</html>
