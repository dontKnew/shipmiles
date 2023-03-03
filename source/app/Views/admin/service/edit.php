<?= $this->extend('include/admin') ?>
<?= $this->section('main-contents') ?>

<!--start main content-->
<div class="container-fluid">

    <h4 class="page-title">
        <a href="<?= route_to("admin/service") ?>" class="btn btn-warning">
            <i class="la la-arrow-left"></i> Back
        </a>
    </h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit State</div>
                </div>
                <form action="<?= route_to("admin/service/update", $data['id']) ?>" method="POST">
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

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="<?=$data['name']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" name="code" value="<?=$data['code']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Fuel Surcharge(%)</label>
                            <input type="number" name="fuel_surcharge" value="<?=$data['fuel_surcharge']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Discount(%)</label>
                            <input type="number" name="discount" value="<?=$data['discount']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Fuel Surcharge Link</label>
                            <input type="url" name="fuel_surcharge_link" value="<?=$data['fuel_surcharge_link']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Fuel Surcharge Effective</label>
                            <input type="datetime-local" name="fuel_surcharge_date" value="<?=$data['fuel_surcharge_date']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Service Logo</label>
                            <input type="file" name="logo" class="form-control input-solid" >
                            <img src="<?= base_url()."/backend/img/service/".esc($data['logo']) ?>" alt="service logo" width="100" height="100">
                        </div>
                    </div>
                    <div class="card-action text-center">
                        <button type="submit" class="btn btn-outline-primary">UPDATE</button
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!--end main content-->
<?= $this->endSection('main-contents') ?>
