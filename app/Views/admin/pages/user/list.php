<div class="page-content">
<div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Editable Table</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Editable Table</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Datatable Editable</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Function</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($users as $user): ?>
                                                    <tr data-id="1">
                                                        <td data-field="id" style="width: 80px"><?=$user['id']?></td>
                                                        <td data-field="name"><?=$user['name']?></td>
                                                        <td data-field="age"><?=$user['email']?></td>
                                                        <td style="width: 100px">
                                                            <a href= "admin/user/edit/<?= $user['id'] ?>"class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                             <a class="btn btn-outline-secondary btn-sm edit" title="Delete">
                                                                <i class="mdi-delete-circle-outline"></i>
                                                             </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        </div> <!-- container-fluid -->
                        </div>
