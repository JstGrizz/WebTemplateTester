<?php

function buscon_default_footer() {
    ?>
    <footer class="txa-footer-1-area bg-default fix tx-footer tx-defaultFooter">
        <div class="container h1-container">
            <div class="txa-footer-1-copyright">
                <p class="copyright-text txa-para-1">
                    <?php if(function_exists('buscon_copyright_text')) {buscon_copyright_text();} ?>
                </p>
            </div>
        </div>
    </footer>

<?php

}