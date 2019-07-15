@extends('admin.admin_master')
@section('main_content')
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header  text-center text-primary">
        <h3> Post List</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Post Id</th>
                        <th>Model</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Status</th>
                        <th>Acton</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_product as $result) { ?>
                        <tr>
                            <td>{{$result->product_id}}</td>
                            <td>{{$result->product_model}}</td>
                            <td>{{$result->category_name}}</td>
                            <td>{{$result->manufacturer_name}}</td>
                            <td>{{$result->product_price}}</td>
                            <td><img src="{{$result->product_image}}" height="50" width="50"></td>
                            <td>
                                <?php if ($result->product_featuerd == 1) { ?>
                                    <span class="btn btn-success">Active</span>
                                <?php } else { ?>
                                    <span class=" btn btn-danger">Inactive</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($result->product_featuerd == 1) { ?>
                                    <a href="{{URL::to('/inactive-feature-product/'.$result->product_id)}}" style="color:#ffffff;" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                <?php } else { ?>
                                    <a href="{{URL::to('/active-feature-product/'.$result->product_id)}}" style="color:#ffffff;" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                                <?php } ?>
                                
                                <?php if ($result->publication_status == 1) { ?>
                                    <span class="btn btn-success">Published</span>
                                <?php } else { ?>
                                    <span class=" btn btn-danger">Unpublished</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($result->publication_status == 1) { ?>
                                    <a href="{{URL::to('/unpublished-product/'.$result->product_id)}}" style="color:#ffffff;" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                <?php } else { ?>
                                    <a href="{{URL::to('/published-product/'.$result->product_id)}}" style="color:#ffffff;" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                                <?php } ?>
                                <a href="{{URL::to('/edit-product/'.$result->product_id)}}" style="color:#ffffff;" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{URL::to('/delete-product/'.$result->product_id)}}" style="color:#ffffff;" onclick="return checkDelete();" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
        </div>
    </div>
</footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

@endsection