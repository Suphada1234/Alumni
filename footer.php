<!-- -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">เข้าสู่ระบบ</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="login_email" name="login_email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login_password" name="login_password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color:#e7ab3c;color:#fff;"
                    data-dismiss="modal" onclick="login()" >ตกลง</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">รออกจากระบบ</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                คุณต้องการออกจากระบบ
            </div>
            <div class="modal-footer">
                <a href="js_logout.php"><button type="button" class="btn" style="background-color:#e7ab3c;color:#fff;">ตกลง</button></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-left">
                    <ul>
                        <li>
                            <h4 style="color: #fff;">มหาวิทยาลัยราชภัฎนครปฐม</h4>
                        </li>
                        <li>Nakhon Pathom Rajabhat University</li>
                        <li>
                            <div class="ci-icon"><i class="ti-location-pin"></i> 85 ถนนมาลัยแมน อ.เมือง จ.นครปฐม 73000
                            </div>
                        </li>
                        <li>
                            <div class="ci-icon"><i class="ti-mobile"></i> 0 3410 9300</div>
                        </li>
                        <li>
                            <div class="ci-icon"><i class="ti-email"></i> rajabhat@npru.ac.th</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script>Nakhon Pathom Rajabhat University. All rights reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery.dd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script src="source/dataTables/jquery.dataTables.min.js"></script>
<script src="source/dataTables/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
    $('#table_details').DataTable();
});


function login() {
    var login_email = $("#login_email").val();
    var login_password = $("#login_password").val();

    var form_data = new FormData();
    form_data.append('login_email', login_email);
    form_data.append('login_password', login_password);
    var getData = $.ajax({
        url: 'js_login.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        async: true,
        success: function(getData) {
            console.log(getData);
            if(getData == "error"){
                alert("กรุณาตรวจสอบ อีเมล หรือ เลขบัตรประชาชน");
                // window.location.reload()
            }
           else{ window.location.replace('index.php');  }
        }
    }).responseText;
}
</script>


</body>

</html>