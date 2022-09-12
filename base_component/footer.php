<section id="footer" style="
        background-color: rgba(255, 255, 255, 0);
        background-position: center center;
        background-repeat: no-repeat;
        border-width: 0px 0px 0px 0px;
        border-color: rgba(0, 0, 0, 0.08);
        border-style: solid;
        padding-top: 0px;
        margin-top: 0px;
        padding-right: 32px;
        padding-bottom: 4%;
        margin-bottom: 0px;
        padding-left: 32px;
      ">
    <div class="container">
        <div class="row" style="margin-top: 35px;">
            <div class="col-lg-12 col-md-12 col-12 d-flex justify-content-md-center justify-content-center align-items-center">
                <p class="p-0 m-0 text-center fw-bold" style="font-size:18px">本網站由<a href="http://gender.nknu.edu.tw/lilingtsai/" target="blank">蔡麗玲教授</a>主持之<a href="https://taiwan-gist.nknu.edu.tw/" target="blank">國科會「性別化創新的應用與推廣」計畫</a>維護</p>
            </div>
            <div class="col-lg-12 col-md-12 col-12  d-flex justify-content-md-center justify-content-center align-items-center">
                <a href="https://www.most.gov.tw/?l=ch" target="blank"><img class="img-fluid" src="img/taiwan_minisrty_of_science_and_technology-copy.png" alt=""></a>
            </div>
        </div>
    </div>

    <div class="row">
        <p class="text-center" style="font-size: 16px;margin-top: 16px;margin-bottom:16px;font-family: 'DM Sans', Arial, Helvetica, sans-serif;">© 2021 Jones, Schiebinger, Grimes, & Small.</p>
        <p style="font-size: 12px; text-align: center;" data-fusion-font="true"><em>This work is licensed under a Creative
                Commons<br> Attribution-NonCommercial-<wbr>NoDerivatives 4.0<br> International <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="blank">License</a> (CC BY-NC-ND 4.0).</em></p>
        <p class="text-center"><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="blank">
                <img src="img/by-nc-nd-200x70.png" style="width: 150px;
    aspect-ratio: auto 150 / 52.5;" alt="">
            </a></p>
    </div>

</section>
<script src="js/bootstrap5.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // $('#dropdown-toggle').addClass('c-active');
        $(".nav-link").each(function() {
            if (this.href == window.location.href && $(this).hasClass('nav-link')) {
                $(this).addClass("c-active");
            }
        });
        $("[href].dropdown-item").each(function() {
            if (this.href == window.location.href) {
                console.log($('#navbarDropdownMenuLink'));
                // $('#nav-menu').addClass("c-active");
                // $('.dropdown-toggle').addClass('c-active');
                $('#nav-menu').addClass("c-btn-active");
                $('#dropdown-toggle').addClass('c-btn-active');
                $(this).addClass("dropdown-item-active");
            }
        });
        if (window.location.href == 'http://127.0.0.1/intersectionaldesign.com/digital-experience.php' || window.location.href == 'http://genderedinnovations.taiwan-gist.net/intersectionaldesign.com/digital-experience.php') {
            // $('#navbarDropdownMenuLink').addClass("c-active");
            // $('#dropdown-toggle').addClass('c-active');
            $('#dropdown-toggle').addClass('c-btn-active');
        }
        // $('#nav-menu').click(function() {
        //     $(this).css('border-radius', 'unset');
        // })
    });

</script>
</body>

</html>