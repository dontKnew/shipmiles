<?= $this->extend('include/admin') ?>
<?= $this->section('main-contents') ?>

<!--start main content-->
<div class="container-fluid">

    <h4 class="page-title">
        <a href="<?= route_to("admin/ratelist") ?>" class="btn btn-warning">
            <i class="la la-arrow-left"></i> Back
        </a>
    </h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Package Type</div>
                </div>
                <form action="<?= route_to("admin/ratelist/add") ?>" method="post" enctype="multipart/form-data">
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
                            <label> Country Name</label>
                            <select  name="country" class="form-control input-solid" required>
                                <option value="">Select Country</option>
                                <?php foreach($country_list as $c): ?>
                                    <option value="<?=$c['id']?>"><?=$c['name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Service Name</label>
                            <select  name="service" class="form-control input-solid" required>
                                <option value="">Select Country</option>
                                <?php foreach($service_list as $c): ?>
                                    <option value="<?=$c['id']?>"><?=$c['name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estimated Delivery Time</label>
                            <input type="text" name="estimated_delivery" placeholder="3-5 Days" class="form-control input-solid" required>
                        </div>
                        <div class="form-group">
                            <label>Rates</label>
                            <textarea name="charge" class="form-control input-solid" placeholder="Ex. 1.0=5400, 2.5=600, 3.0=4500" required></textarea>
                            <span>Note - 1.0 is Kg & 5400 is charge amount  </span>
                        </div>
                    </div>
                    <div class="card-action text-center">
                        <button type="submit" class="btn btn-outline-primary">Submit</button
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!--end main content-->
<?= $this->endSection('main-contents') ?>
