<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    
    <!-- Custom CSS -->
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    
    <?php include 'components/general/head.php'; ?>
</head>

<body>
    
    

    <?php
        // <!-- ============================================================== -->
        // <!-- Main wrapper - style you can find in pages.scss -->
        // <!-- ============================================================== -->
    ?>
    <?php 
        // ADD TOPBAR PHP
        include 'components/general/topbar.php'; 
        
    ?>

    <div id="main-wrapper" >       

        <?php
            // <!-- ============================================================== -->
            // <!-- Page wrapper  -->
            // <!-- ============================================================== -->
        ?>
        <div class="page-wrapper">

            <?php // INSERT MAIN PAGE HERE ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 cold-md-6" style="max-width: 50%;">
                                         <h4 class="card-title">List of Classes</h4>
                                    </div>
                                    <div class="col-sm-12 cold-md-6" style="max-width: 50%; text-align: right; padding-bottom:1rem;">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#addModal"><span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span> Create Class</button>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Class Name</th>
                                                <th>Date</th>
                                                <th>Teacher</th>
                                                <th>Slots</th>
                                                <th>For Approval</th>
                                                <th>Enrolled</th>
                                                <th>Attended</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!isset($listClasses) || count($listClasses) <= 0){
                                                    echo "<tr><td colspan='8'>No Records found</td></tr>";
                                            } 
                                            else {
                                                foreach($listClasses as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['class_name'] ?></td>
                                                <td><?php echo $row['sched_date'] ?></td>
                                                <td><?php echo $row['teacher'] ?></td>
                                                <td><?php echo $row['f2f_slots'] ?></td>
                                                <td><?php echo $row['for_approval'] ?></td>
                                                <td><?php echo $row['enrolled'] ?></td>
                                                <td><?php echo $row['attended'] ?></td>
                                                <td>
                                                    <button type='button' class="btn btn-primary">
                                                        <span class="icon text-white-100"><i class="fa fa-search"></i></span>
                                                    </button>
                                            </tr>
                                            <?php
                                            }
                                            }
                                            ?>
                                            
                                                                                     
                                        </tbody>
                                    </table>
                                </div>                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ADD BUNDLE MODAL -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <h3 class="modal-title">Create New Class</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="text-white" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="classForm">
                            <div class="modal-body">
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="class_name">Class Name *</label>
                                    <input type="text" class="form-control" id="class_name" name="class_name">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="sched_date">Scheduled Date *</label>
                                    <input type="date" class="form-control" id="sched_date" name="sched_date">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="f2f_slots">Face to Face Slots # *</label>
                                    <input type="number" class="form-control" id="f2f_slots" name="f2f_slots" min="1">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="zoom_link">Zoom Link *</label>
                                    <input type="text" class="form-control" id="zoom_link" name="zoom_link">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="price">Price *</label>
                                    <input type="text" class="form-control" id="price" name="price" onchange="computeRate()">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="promo">Early Bird Promo</label>
                                    <input type="text" class="form-control" id="promo" name="promo" onchange="computeRate()">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="thumbnail">Thumbnail *</label>
                                    <input type="file" id="thumbnail" name="thumbnail" required>
                                </div>                           
                            </div>
                        </form>
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> 
                            <button type="submit" class="btn btn-success" id="addClassBtn">Create Class</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ADD BUNDLE MODAL -->

            <?php 
                // ADD FOOTER PHP
                include 'components/general/footer.php'; 
            ?>
        </div>
        <?php
            // <!-- ============================================================== -->
            // <!-- End Page wrapper  -->
            // <!-- ============================================================== -->
        ?>
    </div>
    <?php
        // <!-- ============================================================== -->
        // <!-- End Main wrapper  -->
        // <!-- ============================================================== -->
    ?>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>

    <!--This page JavaScript -->
    <!-- <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script> -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <!-- <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script> -->
    <script>
        function computeRate()
        {
            var price = document.getElementById('price').value;
            var formatter = new Intl.NumberFormat('en-US',{
                minimumFractionDigits: 2,
            });

            console.log(formatter.format(price));
            document.getElementById('price').value = formatter.format(price);
        }
    </script>
    <script type="module">
        // IMPORTS
        import ApiCall from './dist/js/fetch.js';
        import Disable from './dist/js/disable.js';
        import Listener from './dist/js/listener.js';
        import Toast from './dist/js/toast.js';

        // CREATE CLASS INSTANCES
        const api = new ApiCall();
        const disabler = new Disable();
        const listener = new Listener();
        const notification = new Toast();
        const day = new Date();


        const addClassBtn = document.getElementById('addClassBtn');
        listener.click(addClassBtn, createClass);

        async function createClass(e) {
           
            e.preventDefault();
            disabler.disableBtn(addClassBtn, 'Creating Class...');
            const classForm = document.getElementById('classForm');
            const fields = [document.forms['classForm'].getElementsByTagName('input'), document.forms['classForm'].querySelectorAll('.is_valid')];
            console.log(fields);
            
            for (let i = 0; i < fields.length; i++) {
                for (let index = 0; index < fields[i].length; index++) {
                    const element = fields[i][index];
                    element.classList.remove('is_valid');
                }
            }

            const formData = new FormData(classForm);

            for (var value of formData.values()) {
                console.log(value);
                }
            
            console.log(formData);
            
            const response = await api.formEncoded('./add-new-class', formData);
            console.log(response);

            if(response.status == 'success') { 
                notification.success(response.message);
                $('#addModal').modal('hide');
            } 
            else { 
                notification.error(response.message);
                if(response.fields.class_name) {
                    document.getElementById('class_name').classList.add('is_valid');
                }
                if(response.fields.sched_date) {
                    document.getElementById('sched_date').classList.add('is_valid');
                }
                if(response.fields.teacher) {
                    document.getElementById('teacher').classList.add('is_valid');
                }
                if(response.fields.f2f_slots) {
                    document.getElementById('f2f_slots').classList.add('is_valid');
                }
                if(response.fields.zoom_link) {
                    document.getElementById('zoom_link').classList.add('is_valid');
                }
                if(response.fields.price) {
                    document.getElementById('price').classList.add('is_valid');
                }
                if(response.fields.thumbnail) {
                    document.getElementById('thumbnail').classList.add('is_valid');
                }
            }          
                disabler.enableBtn(addClassBtn, 'Create Class');
            
        }

    </script>

</body>

</html>