        <footer>
            <div id="footer-info">
                <div id="certificates"></div>
                <div id="loading-time"><?= _MAIN_PAGE_LOADING_TIME ?>&nbsp;</div>
            </div>
            <div id="footer-nav">
                <a href="about"><?= _ABOUT_NAME ?></a>
                <a href="portfolio"><?= _PORTFOLIO_NAME ?></a>
                <a href="contact"><?= _CONTACT_NAME ?></a>
                <a href="legal"><?= _MAIN_LEGAL ?></a>
                <a href="sitemap.xml">Sitemap</a>
            </div>
            <hr/>
            <div id="footer-copyright">
                <p>
                    <em>Copyright <?= date("Y") ?> - adrialberich.com</em>
                </p>
                <p>
                    <em><?= _MAIN_DISCLAIMER ?></em>
                </p>
                <p>
                    <a href="mailto:<?= _MAIN_EMAIL ?>" target="_blank"><?= _MAIN_EMAIL ?></a>
                </p>
                <p>
                    <?= _MAIN_PHONE ?>
                </p>
            </div>
            <div id="footer-social">
                <p><em><?= _MAIN_SOCIAL ?></em></p>
                <p><a href="https://www.linkedin.com/in/adri%C3%A0-alberich-jaume-744191122/" target="_blank">Linkedin</a></p>
                <p><a href="https://github.com/AdriaAlberich" target="_blank">Github</a></p>
            </div>
        </footer>
        <div id="scrollTop" class="scrollTop invisible" onclick="goUp()">^</div>
        <div id="cookie" class="cookie" style="display:none">
            <span><?= _MAIN_COOKIE ?>&nbsp;<a href="legal"><?= _MAIN_COOKIE_POLICY ?></a>.</span>&nbsp;&nbsp;<button onclick="hideCookie()">OK</button>
        </div>
    </body>
</html>