<?php include("head.php");?>
<style>
.index{
    background-color:#e7ab3c;
    color:#fff;
}
</style>

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ประชาสัมพันธ์</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <br>
</div>
<!--  -->

<!-- -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-01.jpg">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-02.jpg">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-03.jpg">
        </div>
    </div>
</section>
<!-- -->

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
        <?php //echo $_SESSION["name"] ; ?>
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ข้อมูลศิษย์เก่า</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รหัสักศึกษา</th>
                        <th>ชื่อ</th>
                        <!-- xxxxx -->
                        <th>แสดง</th>
                    </tr>
                </thead>
                <tbody>
                <?php
			        $showPersonal = $conn->prepare("SELECT * FROM `personal` ");
			        $showPersonal->execute();
                    $result = $showPersonal->fetchAll();

                    foreach ($result as $row) {  
                ?>
                    <tr>
                        <td><?php echo $row['student_id'];  ?></td>
                        <td><?php echo $row['name'];  ?></td>
                        <!-- <td> อยากแสดงอะไรเพิ่มเองเลยนะ</td> -->
                        <td><button type="button" class="btn" style="background-color:#e7ab3c;color:#fff;" onclick="show(<?php echo $row['student_id'];?>)"  data-toggle="modal" data-target="#details" >รายละเอียด</button></td>
                    </tr>
                    <?php 
                    };
                    ?>
                </tbody>
            </table>
            <br>
            <br>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
<!--  -->


<!-- -->
<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">รายละเอียด</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <div id="show_details"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>
<!--  -->












<?php include("footer.php") ?>

<script type="text/javascript">

function show(id) {
	var form_data = new FormData();
	form_data.append('id', id);
	var getData = $.ajax({
		url: 'js_show.php',
		dataType: 'text',
		cache: false,
		contentType: false,
		processData: false,
		data: form_data,
		type: 'post',
		async: true,
		success: function(getData) {
			$("#show_details").html(getData);
		}
	}).responseText;
}

</script>