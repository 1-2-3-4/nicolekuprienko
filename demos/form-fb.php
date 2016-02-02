<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	Facebook
</title>
<?php require '_form-header.php'; ?>
</head>
<body>
    
    <?php require '_form-nav.php'; ?>
    <form name="form1" method="post" action="#" id="form1">
    <div>

    <a id="top"></a>
    <div class="main">
    <h2>Facebook</h2>
    <!--<a href="Default.aspx">Main Menu</a>-->
    <h3><span class="number">1.</span>Campaign Details</h3>
    <section>
        <div class="full-width">
            <input name="txtPromoName" type="text" maxlength="150" id="txtPromoName" placeholder="ex. Dalton Fury Audiobook Sweepstakes" />
            <span class="question">*Promotion Name</span>
        </div>
         <div class="full-width clear-after">
            <div class="half-width">
                <input name="txtStartDate" type="text" id="txtStartDate" placeholder="MM/DD/YYYY" />
                <span class="question">*Start date</span>
            </div>
            <div class="half-width">
                <input name="txtStartTime" type="text" id="txtStartTime" placeholder="11:59 PM"/>
                <span class="question">*Start time</span>
            </div>
        </div>
        <div class="full-width clear-after">
            <div class="half-width">
                <input name="txtEndDate" type="text" id="txtEndDate" placeholder="MM/DD/YYYY"/>
                <span class="question">*End date</span>
            </div>
            <div class="half-width">
                <input name="txtEndTime" type="text" id="txtEndTime" placeholder="11:59 PM"/>
                <span class="question">*End time</span>
            </div>
        </div>
        <div class="full-width">
            <input name="txtSweepsstakesURL" type="text" maxlength="250" id="txtSweepsstakesURL" placeholder="ex. https://apps.odylfarm.com/torteen/Giveaways/31" />
            <span class="question">*Where will your sweepstakes live (url)?</span>
        </div>
        <hr>
        <div class="full-width">
            <span class="question">*Is this Sweepstakes
            like-gated?</span>
            <div class="radio-container">
                <input id="rblLikeGated_0" type="radio" name="rblLikeGated" value="Y" onclick="javascript:setTimeout('__doPostBack(\'rblLikeGated$0\',\'\')', 0)" /><label for="rblLikeGated_0">Yes</label>
                <input id="rblLikeGated_1" type="radio" name="rblLikeGated" value="N" onclick="javascript:setTimeout('__doPostBack(\'rblLikeGated$1\',\'\')', 0)" /><label for="rblLikeGated_1">No</label>
            </div>
        </div>
        <div class="full-width">
            <span class="question">*Select the valid countries for this sweepstakes:</span>
            <div class="radio-container">
                <input id="rblCountries_0" type="radio" name="rblCountries" value="usonly" /><label for="rblCountries_0">US</label>
                <input id="rblCountries_1" type="radio" name="rblCountries" value="uscxq" /><label for="rblCountries_1">US and Canada (excluding Quebec)</label>
            </div>
        </div>
        <div class="full-width">
            <span class="question">* Select the minimum age allowed to enter this promotion:</span>
            <div class="radio-container">
                <input id="rblMinimumAge_0" type="radio" name="rblMinimumAge" value="13" /><label for="rblMinimumAge_0">13+</label>
                <input id="rblMinimumAge_1" type="radio" name="rblMinimumAge" value="18" /><label for="rblMinimumAge_1">18+</label>
                <input id="rblMinimumAge_2" type="radio" name="rblMinimumAge" value="21" /><label for="rblMinimumAge_2">21+</label>
            </div>
        </div>
    </section>
    <h3><span class="number">2.</span>Setup the Grand Prize</h3> 
    <section>      
        <div class="full-width">
            <textarea name="ucPrizesCtl$txtGPDescription" rows="4" cols="20" id="ucPrizesCtl_txtGPDescription" maxlength="600"></textarea>
            <span class="question">Grand prize description - Characters remaining <span id="gpDiv">0</span></span>
        </div>
        <div class="full-width clear-after">
            <div class="half-width">
                <input name="ucPrizesCtl$txtGP_ARV" type="text" maxlength="15" id="ucPrizesCtl_txtGP_ARV" placeholder="ex. 250.09" />
                <span class="question">Grand Prize Approx. Retail Value (numbers only)</span>
            </div>
            <div class="half-width">
                <input name="ucPrizesCtl$txtNumberOfGpWinners" type="text" maxlength="4" id="ucPrizesCtl_txtNumberOfGpWinners" placeholder="ex. 5" />
                <span class="question">Number of Grand Prize winners allowed</span>
            </div>
        </div>
    </section>
    <h3><span class="number">3.</span>Setup Alternate Prizes</h3>
    <section>
        <p>
            Add the Alternate Prize information below and click 'Add' to add the prize to the list. 
        </p>
        <div class="full-width">
            <textarea name="ucPrizesCtl$txtDescription" rows="4" cols="20" id="ucPrizesCtl_txtDescription" maxlength="600"></textarea>
            <span class="question">Prize Description - 600 characters max.</span>
        </div>
        <div class="full-width clear-after">
            <div class="half-width">
                <input name="ucPrizesCtl$txtARV" type="text" maxlength="15" id="ucPrizesCtl_txtARV" placeholder="ex. 250.09" />
                <span class="question">Prize Approx. Retail Value (numbers only)</span>
            </div>
            <div class="half-width">
                <input name="ucPrizesCtl$txtNumberOfWinners" type="text" maxlength="4" id="ucPrizesCtl_txtNumberOfWinners" placeholder="ex. 5"/>
                <span class="question">Number of Prize Winners allowed</span>
            </div>
            <div class="btn-container-formname float-right">
                <input type="submit" name="ucPrizesCtl$btnAddPrize" value="Add" id="ucPrizesCtl_btnAddPrize" onclick="alert('back-end functionality removed for demo'); return false;"/>
            </div>
        </div>
        <div class="prize-table">
            <input type="hidden" name="ucPrizesCtl$hidGPId" id="ucPrizesCtl_hidGPId" />

            <table cellspacing="0" rules="all" id="ucPrizesCtl_gvPrizes">
                <tbody>
                    <tr>
                        <th scope="col">Sort</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total Approximate Retail Value</th>
                        <th scope="col"># of Winners</th>
                        <th scope="col">Prize Position</th>
                        <th scope="col">Delete</th>
                    </tr>
                    <tr>
                        <td>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgPrior" id="ucPrizesCtl_gvPrizes_ctl02_imgPrior" title="Move Up" onclick="alert('back-end functionality removed for demo'); return false;" ><i class="fa fa-caret-up"></i></button>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgNext" id="ucPrizesCtl_gvPrizes_ctl02_imgNext" title="Move Down" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-caret-down"></i></button>
                        </td>
                        <td>
                            sdfsdfsdf
                        </td>
                        <td>
                            162.00
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgDelete" id="ucPrizesCtl_gvPrizes_ctl02_imgDelete" title="Delete" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-close"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgPrior" id="ucPrizesCtl_gvPrizes_ctl02_imgPrior" title="Move Up" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-caret-up"></i></button>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgNext" id="ucPrizesCtl_gvPrizes_ctl02_imgNext" title="Move Down" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-caret-down"></i></button>
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa qui, sit assumenda earum quae magni debitis placeat rerum cupiditate harum? Voluptates molestias quod consequuntur labore, porro accusantium, asperiores delectus sapiente.
                        </td>
                        <td>
                            80.00
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgDelete" id="ucPrizesCtl_gvPrizes_ctl02_imgDelete" title="Delete" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-close"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgPrior" id="ucPrizesCtl_gvPrizes_ctl02_imgPrior" title="Move Up" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-caret-up"></i></button>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgNext" id="ucPrizesCtl_gvPrizes_ctl02_imgNext" title="Move Down" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-caret-down"></i></button>
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa qui, sit assumenda earum quae magni debitis placeat rerum cupiditate harum? Voluptates molestias quod consequuntur labore, porro accusantium, asperiores delectus sapiente.
                        </td>
                        <td>
                            80.00
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            <button name="ucPrizesCtl$gvPrizes$ctl02$imgDelete" id="ucPrizesCtl_gvPrizes_ctl02_imgDelete" title="Delete" onclick="alert('back-end functionality removed for demo'); return false;"><i class="fa fa-close"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <h3><span class="number">4.</span>Contact Information</h3>
    <section>
        <div class="full-width">
            <input name="txtSponsor" type="text" maxlength="100" id="txtSponsor" placeholder="ex. St. Martin's Press" />
            <span class="question">*Who is the sponsor?</span>
        </div>
        <div class="full-width">
            <input name="txtFullName" type="text" maxlength="100" id="txtFullName" placeholder="ex. John Smith" />
            <span class="question">*Enter Your Full Name</span>
        </div>
        <input type="submit" name="btnGenerate" value="Generate" id="btnGenerate" />
        <div class="bottom-links">
            <a href="form-fb.php">Clear page</a>
            <a href="#top">Go to the top</a>
        </div> 
    </section>
    </div>
</form>
<?php require '_form-footer.php'; ?>
</body>
</html>
