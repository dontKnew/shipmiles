<?= $this->extend('include/admin') ?>
<?= $this->section('main-contents') ?>

<!--start main content-->
<div class="container-fluid">

    <h4 class="page-title">
        <a href="<?= route_to("admin/country") ?>" class="btn btn-warning">
            <i class="la la-arrow-left"></i> Back
        </a>
    </h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit State</div>
                </div>
                <form action="<?= route_to("admin/country/update", $data['id']) ?>" method="POST">
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
                            <input type="text" name="iso2" value="<?=$data['iso2']?>" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Country Flag</label>
                            <input type="file" name="flag" class="form-control input-solid" >
                            <img src="<?= base_url()."/backend/flag/".esc($data['flag']) ?>" alt="contry-flag" width="100" height="100">
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
