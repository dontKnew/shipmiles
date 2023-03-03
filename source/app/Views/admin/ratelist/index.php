<?= $this->extend('include/admin') ?>
<?= $this->section('main-contents') ?>
<div class="row d-flex justify-content-center" style="margin-top:-20px">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-title">Manage RateList</div>
                <a href="<?= route_to("admin/ratelist/add") ?>" class="btn btn-info">
                    <i class="la la-plus-circle"></i> Add RateList
                </a>
            </div>

            <div class="card-body">
                <?php if (session()->has('msg')) : ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?= session()->getFlashdata("msg") ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('err')) : ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= session()->getFlashdata("err") ?>
                    </div>
                <?php endif; ?>
                <?php if ($data): ?>
                    <form action="<?= route_to("admin/ratelist") ?>" method="post" >
                        <div class="form-group form-inline">
                            <label for="smallSelect" class="form-label mx-1 text-dark">Show Results : </label>
                            <select  onchange='this.form.submit()' class="form-control form-control-sm text-dark" name="result_number"  >
                                <option  <?php if($pager['pagination']['perPage']==5){echo "selected";}?> >5</option>
                                <option  <?php if($pager['pagination']['perPage']==10){echo "selected";}?>>10</option>
                                <option  <?php if($pager['pagination']['perPage']==15){echo "selected";}?>>15</option>
                                <option  <?php if($pager['pagination']['perPage']==20){echo "selected";}?>>20</option>
                                <option  <?php if($pager['pagination']['perPage']==25){echo "selected";}?>>25</option>
                                <option  <?php if($pager['pagination']['perPage']==30){echo "selected";}?>>30</option>
                            </select>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-head-bg-primary table-striped table-hover text-center">
                            <thead>
                            <tr>
                                <th> Country </th>
                                <th> Service </th>
                                <th> Estimated Delivery </th>
                                <th>Rates</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; foreach ($data as $value): ?>
                                <tr>
                                    <td><?= esc(ucwords($value['country'])) ?></td>
                                    <td><?= esc($value['service']) ?></td>
                                    <td><?= esc($value['estimated_delivery']) ?></td>
                                    <td><a  href="<?= route_to("admin/ratelist/view", $value['id']) ?>"
                                           class="btn btn-sm btn btn-rounded btn-warning my-1">
                                            <i class="la la-eye"></i> View
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Are you sure want to remove ratelist ?')" href="<?= route_to("admin/ratelist/delete", $value['id']) ?>"
                                           class="btn btn-sm btn btn-rounded btn-danger my-1">
                                            <i class="la la-trash"></i> Delete
                                        </a>
                                        <a href="<?= route_to("admin/ratelist/update" , $value['id']) ?>"
                                           class="btn btn-sm btn btn-rounded btn-success my-1">
                                            <i class="la la-pencil"></i> Edit
                                        </a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link red" href="<?=$pager['pagination']['previous']?>">Previous</a></li>

                            <?php $k=0; for($i=$pager['pagination']['currentPage']; $i < $pager['pagination']['pageCount']; $i++) { ?>
                                <li class="page-item <?=($pager['pagination']['currentPage']==$i)?'':''?> ">
                                    <a class="page-link red" href="<?=$pager['pagination']['path']?>?page=<?=$i?>">
                                        <?=$i?>
                                    </a>
                                </li>
                                <?php if($k==5){ break;} ?>
                                <?php $k++; } ?>
                            <li class="page-item"><a class="page-link red" href="<?=$pager['pagination']['path']?>?page=<?=$pager['pagination']['get_last_page']?>">Last..</a></li>
                        </ul>
                    </nav>
                <?php else: ?>
                    <h6>
                        <div class="alert alert-warning text-center"><i class="la la-warning"></i> No Record found
                            yet
                        </div>
                    </h6>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!--end main content-->
<?= $this->endSection('main-contents') ?>
