@extends('admin.admin_master')
@section('main_content')
<div class="card mb-3">
    <div class="card-header  text-center text-primary">
        <h3>Brand List</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Manufacturer Id</th>
                        <th>Manufacturer Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_manufacturer as $result) { ?>
                        <tr>
                            <td>{{$result->manufacturer_id}}</td>
                            <td>{{$result->manufacturer_name}}</td>
                            <td>
                                <?php if ($result->publication_status == 1) { ?>
                                    <span class="btn btn-success">Published</span>
                                <?php } else { ?>
                                    <span class=" btn btn-danger">Unpublished</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($result->publication_status == 1) { ?>
                                    <a href="{{URL::to('/unpublished-manufacturer/'.$result->manufacturer_id)}}" style="color:#ffffff;" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                <?php } else { ?>
                                    <a href="{{URL::to('/published-manufacturer/'.$result->manufacturer_id)}}" style="color:#ffffff;" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                                <?php } ?>
                                <a href="{{URL::to('/edit-manufacturer/'.$result->manufacturer_id)}}" style="color:#ffffff;" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{URL::to('/delete-manufacturer/'.$result->manufacturer_id)}}" style="color:#ffffff;" onclick="return checkDelete();" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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