<?php ?>
<!--</div>-->
<!-- /.row -->

<!--</div>-->
<!-- /.container -->

<!--<footer>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-2 col-sm-2">-->
<!--                <div class="footer-links">-->
<!--                    <h4>sydney address</h4>-->
<!--                    <p>Suite 401/19 Roseby St<br/>-->
<!--                        Drummoyne, 2047<br/>-->
<!--                        Sydney, NSW<br/>-->
<!--                        Australia</p>-->
<!--                    <h4><a href="#">get directions</a></h4>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-2 col-sm-2">-->
<!--                <div class="footer-links">-->
<!--                    <h4>melbourne address</h4>-->
<!--                    <p>Level 14,<br/>-->
<!--                        333 Collins St<br/>-->
<!--                        Melbourne<br/>-->
<!--                        Australia</p>-->
<!--                    <h4><a href="#">get directions</a></h4>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 col-sm-2">-->
<!--                <div class="footer-links">-->
<!--                    <h4>telephone</h4>-->
<!--                    <p><abbr>Sydney</abbr> +61 2 9181 3431 <br/>-->
<!--                        <abbr>Melbourne</abbr> +61 3 9620 9858</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-2 col-sm-2">-->
<!--                <div class="footer-links">-->
<!--                    <h4>careers</h4>-->
<!--                    <p>We are always looking for talent-->
<!--                        <a href="#">infoxxx@Insightmp.com.au</a></p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3">-->
<!--                <div class="social-link">-->
<!--                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
<!--                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
<!--                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="footer-bottom">-->
<!--                    <p><span>Insight Management Partners</span> - ABN 89 154 240 338</p>-->
<!--                    <p><span>Insight Investment Partners</span> -    ABN 35 136 879 484 - AFS Licence No. 368175</p>-->
<!--                    <p><span>Insight Tax Partners</span> -                ABN 65 162 200 473.</p>-->
<!--                    <p><span>Insight Legal Partners</span> -             ABN 96 168 459 649</p>-->
<!--                    <p><span>Insight Mortgages</span> -                   ABN 58 154 407 011</p>-->
<!--                    <p class="p-t-50">Photography credits: Alejandro Escamilla, Helloquence, Hunters Race, John Schnobrich, Nik Macmillan, Rawpixel, Erwan Debuire, James Coleman and Marcus Wallace all thanks to unsplash.com-->
<!--                        Icons courtesy of <a href="#">vecteezy.com</a></p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="footer-links">
                    <?php if ( is_active_sidebar( 'footer-area-1' ) ) { dynamic_sidebar( 'footer-area-1' ); } ?>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="footer-links">
                    <?php if ( is_active_sidebar( 'footer-area-2' ) ) { dynamic_sidebar( 'footer-area-2' ); } ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-2">
                <div class="footer-links">
                    <?php if ( is_active_sidebar( 'footer-area-3' ) ) { dynamic_sidebar( 'footer-area-3' ); } ?>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="footer-links">
                    <?php if ( is_active_sidebar( 'footer-area-4' ) ) { dynamic_sidebar( 'footer-area-4' ); } ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="social-link">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom">
                    <?php if ( is_active_sidebar( 'footer-copyright-text' ) ) { dynamic_sidebar( 'footer-copyright-text' ); } ?>

                </div>
            </div>
        </div>
    </div>
</footer>

<!--<footer class="blog-footer">-->
<!--    --><?php //if ( is_active_sidebar( 'footer-copyright-text' ) ) { dynamic_sidebar( 'footer-copyright-text' ); } ?>
<!--</footer>-->
<?php wp_footer(); ?>
</body>
</html>