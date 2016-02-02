<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	HTML Email Opt-In
</title>
<?php require '_form-header.php'; ?>
</head>
<body>
    
    <?php require '_form-nav.php'; ?>

    <form name="form1" method="post" action="#" id="form1">
    <div>

    <a id="top"></a>
    <div class="main">
    <h2>HTML Email Opt-In</h2>
    <!--<a href="Default.aspx">Main Menu</a>-->
    <h3><span class="number">1.</span>Select Form Name</h3>
    <section>
        <p>
            Select a unique Form Name that will identify the campaign in ExactTarget. Use letters, numbers, and underscores only.
        </p>
        <p> 
            For example, Work in Progress might use <span class="typewriter-font">wip_sidebaroptin</span> to identify the form in the sidebar, or <span class="typewriter-font">wip_popupoptin</span> to identify the form in a pop-up window. 
        </p>
        <div class="full-width clear-after pos-relative">
             <input name="txtFormName" type="text" maxlength="30" id="txtFormName" placeholder="ex. wip_sidebaroptin"/>
             <span class="name-validation-true display-none"><i class="fa fa-check"></i></span>
             <span class="name-validation-false display-none">unavailable&nbsp;&nbsp;<i class="fa fa-close"></i></span>
            <span class="question">*Form Name</span>
            <div class="btn-container-formname float-right">
                <input type="submit" name="btnDoesFormNameExist" value="Check availability" id="btnDoesFormNameExist" />
            </div>
        </div>
        
    </section>
    <h3><span class="number">2.</span>Campaign Details</h3> 
    <section>      
        <div class="full-width">
            <input name="txtISBN" type="text" maxlength="20" id="txtISBN" placeholder="i.e. 9780312594428"/>
            <span class="question">* 13-digit ISBN, Format Specific</span>
        </div>
        <div class="full-width">
            <input name="txtCampaign" type="text" maxlength="50" id="txtCampaign" placeholder="i.e. Tour of Tulsa Sweepstakes" />
            <span class="question">* Campaign Name</span>
        </div>
        <div class="full-width">
            <input name="txtSubmitButtonText" type="text" maxlength="15" id="txtSubmitButtonText" placeholder="i.e. Subscribe"/>
            <span class="question">* Submit Button Text</span>
        </div>
        <div class="full-width">
            <input name="txtContactName" type="text" maxlength="75" id="txtContactName" placeholder="i.e. John Smith"/>
            <span class="question">* Your FULL name or the department that should be listed in the contact info</span>
        </div>
    </section>
    <h3><span class="number">3.</span>Required Fields</h3>
    <section>
        <p>
            The following fields will be automatically appended to this form as required fields:
        </p>
        <ul class="plaintext-ul">
            <li>Email</li>
            <li>Birth Month</li>
            <li>Birth Year</li>
        </ul>
        <p>
            Please select any additional field(s) that you would like to include in this form, and select "required" for items that consumers MUST fill in:
        </p>
        <div class="required-checklist-table">
            <table cellspacing="0">
                <tr>
                    <td>
                        <input id="ckbFirstName" type="checkbox" name="ckbFirstName" /><label for="ckbFirstName">First Name</label>
                    </td>
                    <td>
                        <input id="ckbReqFirstName" type="checkbox" name="ckbReqFirstName" /><label for="ckbReqFirstName">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbLastName" type="checkbox" name="ckbLastName" /><label for="ckbLastName">Last Name</label>
                    </td>
                    <td>
                        <input id="ckbReqLastName" type="checkbox" name="ckbReqLastName" /><label for="ckbReqLastName">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbPostalCode" type="checkbox" name="ckbPostalCode" /><label for="ckbPostalCode">Postal Code</label>
                    </td>
                    <td>
                        <input id="ckbReqPostalCode" type="checkbox" name="ckbReqPostalCode" /><label for="ckbReqPostalCode">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbProfession" type="checkbox" name="ckbProfession" /><label for="ckbProfession">Profession</label>
                    </td>
                    <td>
                        <input id="ckbReqProfession" type="checkbox" name="ckbReqProfession" /><label for="ckbReqProfession">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbInstitution" type="checkbox" name="ckbInstitution" /><label for="ckbInstitution">Institution</label>
                    </td>
                    <td>
                        <input id="ckbReqInstitution" type="checkbox" name="ckbReqInstitution" /><label for="ckbReqInstitution">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbAddress1" type="checkbox" name="ckbAddress1" /><label for="ckbAddress1">Address 1</label>
                    </td>
                    <td>
                        <input id="ckbReqAddress1" type="checkbox" name="ckbReqAddress1" /><label for="ckbReqAddress1">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbAddress2" type="checkbox" name="ckbAddress2" /><label for="ckbAddress2">Address 2</label>
                    </td>
                    <td>
                        <input id="ckbReqAddress2" type="checkbox" name="ckbReqAddress2" /><label for="ckbReqAddress2">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbCity" type="checkbox" name="ckbCity" /><label for="ckbCity">City</label>
                    </td>
                    <td>
                        <input id="ckbReqCity" type="checkbox" name="ckbReqCity" /><label for="ckbReqCity">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbState" type="checkbox" name="ckbState" /><label for="ckbState">State</label>
                    </td>
                    <td>
                        <input id="ckbReqState" type="checkbox" name="ckbReqState" /><label for="ckbReqState">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbStateAbbr" type="checkbox" name="ckbStateAbbr" /><label for="ckbStateAbbr">State Abbr</label>
                    </td>
                    <td>
                        <input id="ckbReqStateAbbr" type="checkbox" name="ckbReqStateAbbr" /><label for="ckbReqStateAbbr">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbPhoneNumber" type="checkbox" name="ckbPhoneNumber" /><label for="ckbPhoneNumber">Phone Number</label>
                    </td>
                    <td>
                        <input id="ckbReqPhoneNumber" type="checkbox" name="ckbReqPhoneNumber" /><label for="ckbReqPhoneNumber">Required?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="ckbMobileNumber" type="checkbox" name="ckbMobileNumber" /><label for="ckbMobileNumber">Mobile Number</label>
                    </td>
                    <td>
                        <input id="ckbReqMobileNumber" type="checkbox" name="ckbReqMobileNumber" /><label for="ckbReqMobileNumber">Required?</label>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <h3><span class="number">4.</span>Email List</h3>
    <section>
        <span class="question">Author Alerts</span>
        <div class="alerts-list-container clear-after">

                        <select size="10" name="lbxAuthors" id="lbxAuthors">
                        	<option value="Adam Christopher Author Alert">Adam Christopher Author Alert</option>
                        	<option value="Alan Weisman author alert">Alan Weisman author alert</option>
                        	<option value="Alden Bell author alerts">Alden Bell author alerts</option>
                        	<option value="Allison Brennan Author Alert">Allison Brennan Author Alert</option>
                        	<option value="Alyson Noel author alert">Alyson Noel author alert</option>
                        	<option value="Amanda Hocking author alert">Amanda Hocking author alert</option>
                        	<option value="Andrew Morton author alerts">Andrew Morton author alerts</option>
                        	<option value="Andy Cohen Author Alert">Andy Cohen Author Alert</option>
                        	<option value="Ann Aguirre Author Alert">Ann Aguirre Author Alert</option>
                        	<option value="Anna Banks Author Alert">Anna Banks Author Alert</option>
                        	<option value="Ava Dellaira Author Alert">Ava Dellaira Author Alert</option>
                        	<option value="Barbara Delinsky Author Alert">Barbara Delinsky Author Alert</option>
                        	<option value="Barbara Ehrenreich Author Alerts">Barbara Ehrenreich Author Alerts</option>
                        	<option value="Ben Coes author alerts">Ben Coes author alerts</option>
                        	<option value="Ben Tripp Author Alert">Ben Tripp Author Alert</option>
                        	<option value="Benjamin Black author alerts">Benjamin Black author alerts</option>
                        	<option value="Beth Harbison author alert">Beth Harbison author alert</option>
                        	<option value="Bill McKibben Author Alerts">Bill McKibben Author Alerts</option>
                        	<option value="Bill Nye Author Alert Group">Bill Nye Author Alert Group</option>
                        	<option value="Bill O'Reilly Author Alert">Bill O'Reilly Author Alert</option>
                        	<option value="Bob Mayer author alert">Bob Mayer author alert</option>
                        	<option value="Brandon Sanderson author alerts">Brandon Sanderson author alerts</option>
                        	<option value="Brandon Stanton Author Alert Group">Brandon Stanton Author Alert Group</option>
                        	<option value="Brian Herbert Author Alert Group">Brian Herbert Author Alert Group</option>
                        	<option value="Byron L. Dorgan Author Alert">Byron L. Dorgan Author Alert</option>
                        	<option value="C. C. Hunter Author Alert">C. C. Hunter Author Alert</option>
                        	<option value="Caragh O'Brien Author Alert">Caragh O'Brien Author Alert</option>
                        	<option value="Cecelia Ahern Author Alert">Cecelia Ahern Author Alert</option>
                        	<option value="Charles Cumming Author Alert">Charles Cumming Author Alert</option>
                        	<option value="Charlie Jane Anders Author Alert">Charlie Jane Anders Author Alert</option>
                        	<option value="Chelsea Cain Author Alerts">Chelsea Cain Author Alerts</option>
                        	<option value="Chevy Stevens author alert">Chevy Stevens author alert</option>
                        	<option value="Chuck Thompson author alert">Chuck Thompson author alert</option>
                        	<option value="Cory Doctorow author alerts">Cory Doctorow author alerts</option>
                        	<option value="Courtney Alameda Author Alert">Courtney Alameda Author Alert</option>
                        	<option value="Courtney Summers author alert">Courtney Summers author alert</option>
                        	<option value="Daisy Goodwin Author Alert">Daisy Goodwin Author Alert</option>
                        </select>
                        <div class="btn-container">
                            <input type="submit" name="btnSelectAuthor" value="Select >" id="btnSelectAuthor" /><br />
                            <input type="submit" name="btnRemoveAuthor" value="Remove" id="btnRemoveAuthor" />
                        </div>
                        <div id="UpdatePanel4">
    	                   <select size="10" name="lbxSelectedAuthors" id="lbxSelectedAuthors" ></select>                  
                        </div><!--  close #UpdatePanel4 -->
                    </div>
                    <div class="email-list-container clear-after">
                        <span class="question">List</span>
 
                        <select size="10" name="lbxList" id="lbxList">
                        	<option value="2.14 Swoon Writers">2.14 Swoon Writers</option>
                        	<option value="20120214_FierceReads_Clicks">20120214_FierceReads_Clicks</option>
                        	<option value="20131029_Unengaged Tor Subscribers">20131029_Unengaged Tor Subscribers</option>
                        	<option value="201311_Re-engaged Tor Subscribers">201311_Re-engaged Tor Subscribers</option>
                        	<option value="2014 Comic Con Audio Signups">2014 Comic Con Audio Signups</option>
                        	<option value="20140226_Unengaged HandH Subscribers">20140226_Unengaged HandH Subscribers</option>
                        	<option value="201404_Re-engaged TorForge Subscribers">201404_Re-engaged TorForge Subscribers</option>
                        	<option value="201404_Unengaged TorForge Subscribers">201404_Unengaged TorForge Subscribers</option>
                        	<option value="20140926 Comic Con Audio Signups">20140926 Comic Con Audio Signups</option>
                        	<option value="20141023_Tor Held Subscribers">20141023_Tor Held Subscribers</option>
                        	<option value="201412_Swoon Writers">201412_Swoon Writers</option>
                        	<option value="201504_Swoon Writers">201504_Swoon Writers</option>
                        	<option value="201510_Swoon Reads Notifications List">201510_Swoon Reads Notifications List</option>
                        	<option value="AAP TriState Book Buzz">AAP TriState Book Buzz</option>
                        	<option value="AAP YA Tri-State Book Buzz 2015">AAP YA Tri-State Book Buzz 2015</option>
                        	<option value="Accidental Highwayman Booklist Leads 2014">Accidental Highwayman Booklist Leads 2014</option>
                        	<option value="Aerotropolis">Aerotropolis</option>
                        	<option value="African American Fiction">African American Fiction</option>
                        	<option value="Afternoon Tea">Afternoon Tea</option>
                        	<option value="Ahead Follow-Up">Ahead Follow-Up</option>
                        	<option value="Ahead of the Bull">Ahead of the Bull</option>
                        	<option value="ALA15">ALA15</option>
                        	<option value="Alden Bell">Alden Bell</option>
                        	<option value="Alyson Noel">Alyson Noel</option>
                        	<option value="American Empire Project">American Empire Project</option>
                        	<option value="American History">American History</option>
                        	<option value="American Presidents">American Presidents</option>
                        	<option value="Andrew Bacevich">Andrew Bacevich</option>
                        	<option value="Ann Aguirre">Ann Aguirre</option>
                        	<option value="Anna Banks">Anna Banks</option>
                        	<option value="April 2015 Booklist eBlast">April 2015 Booklist eBlast</option>
                        	<option value="April 2015 Booklist Webinar">April 2015 Booklist Webinar</option>
                        	<option value="Atkinson Exclusion List">Atkinson Exclusion List</option>
                        	<option value="Audio">Audio</option>
                        	<option value="Bad Kitty Kids Club">Bad Kitty Kids Club</option>
                        	<option value="Barbara Ehrenreich">Barbara Ehrenreich</option>
                        	<option value="Betsy Woodman">Betsy Woodman</option>
                        	<option value="Between the Sheets">Between the Sheets</option>
                        	<option value="Bill McKibben">Bill McKibben</option>
                        	<option value="Bill Nye Bookshout">Bill Nye Bookshout</option>
                        	<option value="Biographies and Memoirs (Audio)">Biographies and Memoirs (Audio)</option>
                        	<option value="Biography and Autobiography - Kim Kardashian ">Biography and Autobiography - Kim Kardashian </option>
                        	<option value="Black Box">Black Box</option>
                        	<option value="Blood Game Forwarders">Blood Game Forwarders</option>
                        	<option value="Bo Caldwell">Bo Caldwell</option>
                        	<option value="Book Buzz 2015 San Francisco">Book Buzz 2015 San Francisco</option>
                        	<option value="Book Groups">Book Groups</option>
                        	<option value="Book of speculation book kit">Book of speculation book kit</option>
                        	<option value="Booklandia Newsletter Subscribers">Booklandia Newsletter Subscribers</option>
                        </select>
                        <div class="btn-container">
                            <input type="submit" name="btnSelectList" value="Select >" id="btnSelectList" /><br />
                            <input type="submit" name="btnRemoveList" value="Remove" id="btnRemoveList" />
                        </div>
                        <div id="UpdatePanel1">
    	                   <select size="10" name="lbxSelectedList" id="lbxSelectedList" ></select> 
                        </div><!-- close #UpdatePanel1 -->

        </div><!-- close .email-list-container -->
        <div class="full-width">
            <span class="question">Are users automatically opted in to the list(s) selected by submitting this form?</span>
            <div class="radio-container">
                <input id="rblAutomaticallyOptedIn_0" type="radio" name="rblAutomaticallyOptedIn" value="Y" /><label for="rblAutomaticallyOptedIn_0">Yes</label>
                <input id="rblAutomaticallyOptedIn_1" type="radio" name="rblAutomaticallyOptedIn" value="N" checked="checked" /><label for="rblAutomaticallyOptedIn_1">No</label>
            </div>
        </div>
        <div class="full-width">
            <input name="txtCombinedDescription" type="text" maxlength="250" id="txtCombinedDescription" placeholder="ex. Yes, please send me email updates about X, Y and Z, and other information from Macmillan and its related companies."/>
            <span class="question">(Optional) Enter Description for Opt-In language</span>
        </div>
        <div class="full-width">
            <input name="txtAutoResponseID" type="text" maxlength="15" id="txtAutoResponseID" placeholder="ex. 12345"/>
            <span class="question">Auto-Response Email ID</span>
        </div>
        <div class="full-width">
            <input name="txtConfirmationPg" type="text" maxlength="250" id="txtConfirmationPg" placeholder="ex. http://smp.com/thanks"/>
            <span class="question">Confirmation page URL</span>
        </div>

        <input type="submit" name="btnGenerateHTML" value="Generate HTML" id="btnGenerateHTML" />
        <div class="bottom-links">
            <a href="form-html.php">Clear page</a>
            <a href="#top">Go to the top</a>
        </div> 
    </section>
    </div>

</div>
</form>
<?php require '_form-footer.php'; ?>
</body>
</html>
