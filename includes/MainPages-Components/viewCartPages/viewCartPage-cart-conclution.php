<?php
if (currentLang() == "arabic") { ?>
    <div class="col col-12 col-sm-12 col-md-3 col-lg-3 border ">
        <div class="row form-group p-2">
            <div class="col-sm-12  text-center  bg-dark p-1">
                <p class="text-white fw-bolder p-0"><?php echo ($data->orderConclution); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class=" h6 m-0 p-0 text-dark text-center " style=" font-size:15px; font-weight:bold;">
                    <?php echo $cart->total() . CURRENCY_SYMBOL; ?>
                </p>
            </div>
            <div class="col text-dark text-center ">
                <p> :<?php echo ($data->cartTotal); ?></p>
            </div>
        </div>
        <hr class="border">

        <div class="row">
            <div class="col">
                <p class=" h6 m-0 p-0 text-dark text-center" style=" font-size:15px; font-weight:bold;">
                    15%
                </p>
            </div>
            <div class="col text-dark text-center ">
                <p> : <?php echo ($data->tax); ?></p>
            </div>
        </div>
        <hr class="border">
        <div class="row">
            <div class="col">
                <p class=" h6 m-0 p-0 text-dark text-center" style=" font-size:18px; font-weight:bold;">
                    <?php echo ((float)$cart->total() + (float)$setting->percentage(15, $cart->total())) . '<span class="text-success fw-bold">' . CURRENCY_SYMBOL . '</span>'; ?>
                </p>
            </div>
            <div class="col text-dark text-center ">
                <p> : <?php echo ($data->totalPrice); ?></p>
            </div>
        </div>
        <hr class="border">
    </div>
<?php } else { ?>
    <div class="col col-12 col-sm-12 col-md-3 col-lg-3 border ">
        <div class="row form-group p-2">
            <div class="col-sm-12  text-center  bg-dark p-1">
                <p class="text-white fw-bolder p-0"><?php echo ($data->orderConclution); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col text-dark text-center ">
                <p> <?php echo ($data->cartTotal); ?>:</p>
            </div>
            <div class="col">
                <p class=" h6 m-0 p-0 text-dark text-center " style=" font-size:15px; font-weight:bold;">
                    <?php echo $cart->total() . CURRENCY_SYMBOL; ?>
                </p>
            </div>
        </div>
        <hr class="border">

        <div class="row">
            <div class="col text-dark text-center ">
                <p> <?php echo ($data->tax); ?>:</p>
            </div>
            <div class="col">
                <p class=" h6 m-0 p-0 text-dark text-center" style=" font-size:15px; font-weight:bold;">
                    <?php echo (float)$setting->percentage_value(12, $cart->total()); ?>
                </p>
            </div>
        </div>
        <hr class="border">
        <div class="row">
            <div class="col text-dark text-center ">
                <p> <?php echo ($data->totalPrice); ?>:</p>
            </div>
            <div class="col">
                <p class=" h6 m-0 p-0 text-dark  text-center" style=" font-size:18px; font-weight:bold;">
                    <?php echo ((float)$cart->total() + (float)$setting->percentage(12, $cart->total())) . '<span class="text-success fw-bold">' . CURRENCY_SYMBOL . '</span>'; ?>
                </p>
            </div>
        </div>
        <hr class="border">
    </div>
<?php } ?>