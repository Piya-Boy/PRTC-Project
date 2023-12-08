<footer class="bg-dark fixed-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-muted">
                <p class=" p-2">Copyright &copy; 2021
                    <a class="text-light" rel="nofollow noopener" href="https://www.facebook.com/IL-Chaoprayasurasak-1600161676721692" target="_blank">IL Chaoprayasurasak</a>
                    - Dev : <a class="text-light" rel="nofollow noopener" href="https://github.com/Piya-Boy/Piya-Boy" target="_blank">Piya Miang-Lae</a>
                </p>
            </div>
        </div>
    </div>

</footer>
</div>
<script src="assets/Jquery/jquery.min.js"></script>
<script src="assets/Bootstrap/js/bootstrap.min.js"></script>
<script src="assets/Fontawesome/js/all.min.js"></script>
<script src="assets/sweetalert/js/sweetalert2.all.min.js"></script>
<script src="assets/Customs/js/custom.js"></script>

<?php
// show sweetalert
$status = $this->session->flashdata('status');
$message = $this->session->flashdata('message');
$icon = $this->session->flashdata('icon');

if ($status) {
    echo '<script>
    Swal.fire({
        icon: "' . $icon . '",
        title: "' . $message . '",
        showConfirmButton: false,
        timer: 1500
    });
    </script>';
}

unset($status, $message, $icon);
?>
</body>

</html>