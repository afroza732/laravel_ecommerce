@extends('admin.admin_master')
@section('main_content')
<div class="card mb-3">
    <div class="card-header  text-center text-primary">
        <h3> Category List</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_category as $result) { ?>
                        <tr>
                            <td>{{$result->category_id}}</td>
                            <td>{{$result->category_name}}</td>
                            <td>
                                <?php if ($result->publication_status == 1) { ?>
                                    <span class="btn btn-success">Published</span>
                                <?php } else { ?>
                                    <span class=" btn btn-danger">Unpublish</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($result->publication_status == 1) { ?>
                                    <a href="{{URL::to('/unpublished-category/'.$result->category_id)}}" style="color:#ffffff;" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                <?php } else { ?>
                                    <a href="{{URL::to('/published-category/'.$result->category_id)}}" style="color:#ffffff;" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                                <?php } ?>
                                <a href="{{URL::to('/edit-category/'.$result->category_id)}}" style="color:#ffffff;" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{URL::to('/delete-category/'.$result->category_id)}}" style="color:#ffffff;" onclick="return checkDelete();" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection