<?php
session_start();
require_once(__DIR__ . '/library/config.php');
extract(array_map("trim", $_GET));
$ratelist = $db->table("ratelist")
    ->select("ratelist.id", "ratelist.estimated_delivery", "ratelist.charge", "service.fuel_surcharge", "service.name as service", "service.discount", "service.logo")
    ->join("service", "service.id", "=", "ratelist.service")
    ->where("country", $destination)->get();

$destination_arr = $db->table("csc_country")->where("id", $destination)->first();
$package_arr = $db->table("package_type")->where("id", $package_type)->first();

$country_list = $db->table("csc_country")->orderBy("name", "asc")->get()->toArray();
$package_list = $db->table("package_type")->orderBy("sort_order", "asc")->get()->toArray();

?>

<?php include('header.php'); ?>
<section class="page-title page-title-4 bg-overlay bg-overlay-dark-our bg-parallax" id="page-title">
    <div class="bg-section">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="title text-lg-left">

                    <div class="title-heading">
                        <h1>Rate Calculator</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb justify-content-lg-start">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Calculate Charges</li>
                    </ol>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="contact-info" id="contact">
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-12 charge-box-header charge-box " >
                <div class="row justify-content-around">
                    <div class="col-md-2 col-6 col">
                        <div class="d-flex justify-content-start flex-column align-items-center header-box">
                            <span class="icon-size"><i class="fa fa-globe"></i></span>
                            <span>Pickup From</span>
                            <span><?= $pickup_pincode ?></span>
                        </div>
                    </div>
                    <div class="col-md-2 col-6 mb-2">
                        <div class="d-flex justify-content-start flex-column align-items-center header-box">
                            <span class="icon-size"><i class="fa fa-plane-departure"></i></span>
                            <span>To, Destination</span>
                            <span><?= $destination_arr->name ?></span>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="d-flex justify-content-start flex-column align-items-center header-box">
                            <span class="icon-size"><i class="fa fa-book"></i></span>
                            <span>Package Weight</span>
                            <span><?= $package_weight ?> Kg</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-6 mb-2">
                        <div class="d-flex justify-content-start flex-column align-items-center header-box">
                            <span class="icon-size"><i class="fa fa-box"></i></span>
                            <span>Package Type</span>
                            <span><?= $package_arr->name ?></span>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                            <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#exampleModal">Modify Search</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 py-2 d-flex align-items-center flex-column">

                <?php foreach($ratelist as $rate):

                    $charge_obj = json_decode($rate->charge);
                    $charge = new stdClass();
                    $actual_charge = null;
                    $charge_amount  = null;
                    foreach ($charge_obj as $key => $value) {
                        $newKey = str_replace(' ', '', $key);
                        $value = str_replace(' ', '', $value);
                        if($newKey==$package_weight){
                            $actual_charge  =  $value-$value*$rate->discount/100;
                            $charge_amount  =  $value;
                        }
//                        $newObj->$newKey = $value;
                    }

                    if(isset($actual_charge)){
                        $oncall = false;
                    }else {
                        $oncall = true;
                    }

                    ?>

                    <div class="row charge-box" >
                    <div class="col-md-3 col-sm-12 d-flex pb-2 justify-content-center align-items-center">
                        <img src="source/public/backend/img/service/<?=$rate->logo?>" style="max-width:152px !important; max-height: 81px; ">
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="d-flex justify-content-around align-items-center justify-content-md-between px-1 h-100">
                            <div class="text-center">
                                <span>Estimated Delivery</span>
                                <h4 style="font-size:18px;color:#F00; "><?=$rate->estimated_delivery?></h4>
                                <span style="color: #00b0aa;">Once Connected</span>
                            </div>
                            <div class="text-center" >
                                <span>Shipping Charges</span><br>
                                    <?php if(!$oncall): ?>
                                        <h4 class="text-success"> ₹ <?=$actual_charge?>/- </h4>
                                        <span style="position: relative;bottom: 8px;">
                                                 <?=$rate->discount?>% off on
                                                <span style="color:#f00; font-family: ariel; text-decoration: line-through;"> <span
                                                            style="font-weight: bold;font-size:larger">
      ₹ <?=$charge_amount?>
    </span>

    /-    </span>
                                        </span>
                                    <?php else: ?>
                                    <span></span>
                                        <h4 class="text-success mt-2"> On Call </h4>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 d-flex justify-content-center align-items-center p-1">
                        <?php if(!$oncall):
                            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                            ?>
                        <form action="book.php" method="post" id="modify_data">

                            <input type="hidden" name="package_type" value="<?=$package_type?>">
                            <input type="hidden" name="ratelist" value="<?=$rate->id?>">
                            <input type="hidden" name="package_weight" value="<?=$package_weight?>">
                            <input type="hidden" name="phone_no" value="<?=$phone?>">
                            <input type="hidden" name="pickup_pincode" value="<?=$pickup_pincode?>">
                            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']?>">
                            <input type="submit" style="margin-top: 6px;" class="btn btn-outline-success"
                                   value="Book Now">
                        </form>
                        <?php else: ?>
                            <a href="tel:7056221377" class="btn btn-outline-primary d-flex align-items-center justify-content-center"><i class="fa fa-phone-square fa-2x"></i>Call Now</a>
                        <?php endif; ?>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

</section>

<style>
        .quick-enquiry-head, .quick-enquiry-head + p {
            text-align: center !important;
            font-weight: bolder !important;
            margin-bottom: 20px;
        }
        .quick-enquiry-head {
            color: #007bf9 !important;
            font-family: unset;
            font-weight:700 !important;
        }
        div.form-group >  .custom-style-input {
            box-shadow: inset 1px 1px 2px #ccc;
            height: 35px;
            padding: 0 15px;
            color: #797979;
            margin-bottom: 0;
            font-weight:bolder;
        }
        .quick-enquiry {
            padding:.7rem .5rem .4rem .5rem !important;
            border: 8px solid #007bf9;
            box-shadow: 0px 0px 30px 0px rgb(255 255 255);
            background-color: rgba( 255, 255, 255, 1.00 );
            border-radius:5px;

        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .custom-btn {
            background-color:#007bf9 !important;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        input {
            border-color: #6706d3!important;
        }

        .quick-equiry-close {
            position: absolute;
            height: 31px;
            width: 31px;
            left: auto;
            right: -4px;
            bottom: auto;
            top: -6px;
            padding: 0px;
            color: #ffffff;
            font-family: Arial;
            font-weight: 100;
            font-size: 22px;
            line-height: 14px;
            border:2px solid #fff;
            border-radius: 26px;
            box-shadow: 0px 0px 15px 1px rgb(2 2 2 / 75%);
            text-shadow: 0px 0px 0px rgb(0 0 0 / 23%);
            background-color: #007bf9 !important;
            z-index: 1000;
        }

</style>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border border-dark" style="background-color:white">

                <button aria-hidden="true"  type="button" class="quick-equiry-close" data-dismiss="modal" aria-label="Close">x</button>
                <div class="modal-body quick-enquiry">
                    <h3 class="text-primary text-center mt-1 quick-enquiry-head"><u>Rate Calculator</u></h3>
                    <form id="join_course_form" class="mt-4 mb-2" method="get" action="calculate-charge.php">
                        <div class="row noti_msg"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="pickup_pincode" value="<?=$pickup_pincode?>" class="form-control custom-style-input" placeholder="Pickup From" required="">
                            </div>

                            <div class="form-group col-md-6">
                                <select  name="destination" class="form-control custom-style-input" required="">
                                    <option value="">--Select Country--</option>
                                    <?php foreach($country_list as $cl): ?>
                                        <option value="<?=$cl->id?>" <?=($cl->id==$destination)?'selected':'' ?> ><?=$cl->name?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select  name="package_type"  class="form-control custom-style-input" required="">
                                    <option value="">--Select Package--</option>
                                    <?php  foreach($package_list as $cl): ?>
                                        <option value="<?=$cl->id?>" <?=($cl->id==$package_type)?'selected':'' ?>><?=$cl->name?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select  name="package_weight" class="form-control custom-style-input" required="">
                                    <option value="">--Select Weight--</option>
                                    <?php foreach($weightArr as $wk=>$weight): ?>
                                        <option value="<?=$wk?>"  <?=($wk==$package_weight)?'selected':'' ?>><?=$weight?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="number"  pattern="[7-9]{1}[0-9]{9}" name="phone" value="<?=$phone?>" class="form-control custom-style-input" placeholder="Enter 10 Digit Number" required="">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn  btn-warning custom-btn text-center" id="submit_btn">Modify</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php include('footer.php'); ?>