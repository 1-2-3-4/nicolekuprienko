<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	Form Generator Tool
</title>
<?php require '_form-header.php'; ?>
</head>
<body>
    <?php require '_form-nav.php'; ?>

    <form name="form1" method="post" action="#" >
    <div>
    <a id="top"></a>
    <div class="main homepg">
    <h2>Form Generator Tool</h2>
 
        <h3>Select Form Type</h3>
        <section>
            <div class="promo-container">
                <h4>HTML Email Opt-In</h4>
                <p>Use this form to generate an HTML Email Subscription/Opt-In form.</p>
                <div class="full-width clear-after">
                    <div class="btn-container-formname float-right">
                        <button class="fancybox" rel="group" href="img/email-optin.png">View Sample</button>
                        <button onclick="window.location='form-html.php'; return false;">Launch</button>
                    </div>
                </div>
            </div>
            <div class="promo-container">
                <h4>Facebook</h4>
                <p>Use this form to generate Legal Language for sweepstakes on Facebook.</p>
                <div class="full-width clear-after">
                    <div class="btn-container-formname float-right">
                        <!-- <button>View Sample</button> -->
                        <button onclick="window.location='form-fb.php'; return false;">Launch</button>
                    </div>
                </div>
            </div>
            <div class="promo-container">
                <h4>Promo - Mac.com</h4>
                <p>Use this form to create a full Sweepstakes page hosted on us.macmillan.com. You can provide your own HTML to display above the sign-up form.</p>
                <div class="full-width clear-after">
                    <div class="btn-container-formname float-right">
                        <button class="fancybox" rel="group" href="img/mac-sweeps-pg.png">View Sample</button>
                        <button onclick="window.location='form-promo.php'; return false;">Launch</button>
                    </div>
                </div>
            </div>
            <div class="promo-container">
                <h4>Promo - Upload</h4>
                <p>This form has the same functionality as the Mac.com Promo, but also allows the user to upload an item to the form (ex. proof of purchase).</p>
                <div class="full-width clear-after">
                    <div class="btn-container-formname float-right">
                        <button class="fancybox" rel="group" href="img/mac-upload.png">View Sample</button>
                        <button onclick="window.location='form-upload.php'; return false;">Launch</button>
                    </div>
                </div>
            </div>
            <div class="promo-container">
                <h4>Promo - HTML</h4>
                <p>Create a sweepstakes form that you can export as HTML and embed in a webpage of your choice (Macmillan-hosted sites/pages only).</p>
                <div class="full-width clear-after">
                    <div class="btn-container-formname float-right">
                        <button class="fancybox" rel="group" href="img/third-party-sweeps.png">View Sample</button>
                        <button onclick="window.location='form-promo-html.php'; return false;">Launch</button>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex-container two-col">
            <h3 class="grey-bg">Form Lookup</h3>
            <h3 class="grey-bg"><span class="number"><i class="fa fa-question-circle"></i></span>Help</h3>
        </div>

        <div class="flex-container two-col">
            <section>
                <p>Already created a form? Check here to find links to existing forms.</p>
                <div class="full-width clear-after">
                    <div class="btn-container-formname float-right">
                        <button onclick="window.location='form-lookup.php'; return false;">Launch</button>
                    </div>
                </div>
            </section>

            <section>
                <p>Visit our Confluence Hub to find documentation and materials on a wide array of marketing topics.</p>
                <p>Can't find what you're looking for? Email with questions.</p>
            </section>

        </div>

    </div>

</form>
<?php require '_form-footer.php'; ?>
</body>
</html>
