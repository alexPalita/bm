<footer class="container-fluid fixed-bottom px-0">
    <button id="moreInfoBtn" type="button" class="btn"	data-toggle="collapse" data-target="#legalNav" aria-expanded="false" aria-controls="legalNav">MORE INFO</button>
    <div class="legal collapse" id="legalNav">
        <ul class="d-flex flex-column flex-md-row justify-content-center text-center ">
            <li class="p-4">
                <a href="/legal-pages#shipping-returns" class="p-4">Shipping&amp;Returns</a>
            </li>
            <li class="p-4">
                <a href="/legal-pages#privacy-policy" class="p-4">Privacy Policy</a>
            </li>
            <li class="p-4">
                <a href="/legal-pages#terms-and-conditions" class="p-4">Terms and Conditions</a>
            </li>
        </ul>
        <p class="m-0 p-4 text-center" >&copy;<?php echo date("Y") ?> Baguette Marraine . All rights reserved</p>
    </div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="/js/animsition-master/dist/js/animsition.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<?php
switch ($jsAsset) {
    case 'order':
        echo '<script type="text/javascript" src="/js/orderScript.js"></script>';
        break;

    case 'mail':
        echo '<script type="text/javascript" src="/js/mailScript.js"></script>';
        break;

    // case 'easyZoom':
    //     echo '<script type="text/javascript" src="/js/EasyZoom-master/dist/easyzoom.js"></script>';
    //     echo '<script type="text/javascript"> var $easyzoom = $(".easyzoom").easyZoom(); </script>';
    //     break;

    default:
        echo '';
        break;
} ?>
</body>
</html>
