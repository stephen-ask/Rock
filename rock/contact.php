<?php 
/*
	Template name: Contact us
*/
get_header();?>

    <div class="contactbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>contact</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class=" col-md-6 offset-md-3">
                <div class="address">

                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Name" type="text" name="Name">
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Phone" type="text" name="Email">
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  footer -->

    <div class="copyright">
        <div class="container">
            <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
        </div>
    </div>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.0.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>