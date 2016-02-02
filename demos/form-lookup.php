<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	Form Lookup
</title>
<?php require '_form-header.php'; ?>
</head>
<body>

<?php require '_form-nav.php'; ?>

    <form name="form1" method="post" action="HtmlOptIn.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
    <div>
    <a id="top"></a>
    <div class="main">
    <h2>Form Lookup</h2>
    <!--<a href="Default.aspx">Main Menu</a>-->
    <h3>Select Form Type</h3>
        <section>
            <p>
                Select a Form Type to generate a list of completed forms by date. 
            </p>
            <div class="full-width pos-relative">
                <!--add to select: onchange="javascript:setTimeout('__doPostBack(\'ddlTypes\',\'\')', 0)" -->
                <select name="ddlTypes" id="ddlTypes" class="full-width-select">
                    <option value="">Select</option>
                    <option value="H">HTML Opt-In</option>
                    <option value="S">Sweepstakes Legal Lang.</option>
                    <option value="P1">Promo: Plain XML</option>
                    <option value="P2">Promo: Upload Form</option>
                    <option value="P3" selected="selected">Promo: 3rd Party HTML / XML Form </option>
                </select>
                <span class="select-caret"><i class="fa fa-caret-down"></i></span>
            </div>
        </section>
   
    <section class="lookup-table">
        <table cellspacing="0" id="gdvPromoList" >
        <tr>
            <th scope="col">Promo Name</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Moved to Staging</th>
            <th scope="col">Moved to Production</th>
            <th scope="col">Create Date</th>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                usef 20151204&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                12/4/15<br/>12:00 AM
            </td>
            <td>
                12/31/15<br/>11:59 PM
            </td>
            <td>
                12/4/15<br/>11:24 AM
            </td>
            <td></td>
            <td>
                12/4/15<br/>11:23 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td >
                Cara Promo Source Test 2&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                8/21/15<br/>12:00 AM
            </td>
            <td>
                8/26/15<br/>11:59 PM
            </td>
            <td>
                8/21/15<br/>10:20 AM
            </td>
            <td>
                8/21/15<br/>10:20 AM
            </td>
            <td>
                8/21/15<br/>10:06 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                CaraGenTest2&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                8/11/15<br/>12:00 AM
            </td>
            <td>
                8/13/15<br/>11:59 PM
            </td>
            <td>
                8/11/15<br/>12:29 PM
            </td>
            <td>
                8/11/15<br/>12:29 PM
            </td>
            <td>
                8/11/15<br/>12:29 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                usef72215a&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                7/22/15<br/>12:00 AM
            </td>
            <td>
                7/31/15<br/>11:59 PM
            </td>
            <td>
                7/22/15<br/>1:21 PM
            </td>
            <td>
                7/27/15<br/>2:31 PM
            </td>
            <td>
                7/22/15<br/>10:57 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                testum2&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                9/1/14<br/>12:00 AM
            </td>
            <td>
                9/24/14<br/>11:59 PM
            </td>
            <td>
                2/3/15<br/>10:33 AM
            </td>
            <td></td>
            <td>
                9/23/14<br/>3:26 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                useftest 1234xx&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                12/2/13<br/>3:00 AM
            </td>
            <td>
                12/31/13<br/>11:59 PM
            </td>
            <td>
                7/27/15<br/>2:39 PM
            </td>
            <td>
                7/27/15<br/>3:00 PM
            </td>
            <td>
                12/19/13<br/>12:33 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                fall2013fiercereadssweeps&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                10/14/13<br/>12:00 AM
            </td>
            <td>
                10/27/13<br/>11:59 PM
            </td>
            <td>
                12/4/13<br/>4:10 PM
            </td>
            <td>
                7/27/15<br/>3:01 PM
            </td>
            <td>
                10/17/13<br/>12:15 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                xsvfdsfl&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                10/15/13<br/>12:30 AM
            </td>
            <td>
                10/23/15<br/>11:59 PM
            </td>
            <td>
                6/9/15<br/>10:12 AM
            </td>
            <td></td>
            <td>
                10/16/13<br/>5:26 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                scalziomwsweeps&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                10/14/13<br/>12:30 AM
            </td>
            <td>
                10/29/13<br/>11:59 PM
            </td>
            <td></td>
            <td></td>
            <td>
                10/10/13<br/>2:59 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                caratestpromo3rdparty2&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                10/22/13<br/>4:00 AM
            </td>
            <td>
                10/30/13<br/>12:30 AM
            </td>
            <td></td>
            <td></td>
            <td>
                10/8/13<br/>2:54 PM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                BK2 Tour of Tulsa Sweeps&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                10/15/13<br/>2:00 AM
            </td>
            <td>
                10/22/13<br/>11:59 PM
            </td>
            <td></td>
            <td></td>
            <td>
                10/8/13<br/>10:51 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                Tra La La Sweeps 2&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                10/1/13<br/>12:00 AM
            </td>
            <td>
                10/31/13<br/>11:59 PM
            </td>
            <td></td>
            <td></td>
            <td>
                9/30/13<br/>10:35 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                Tour of Tulsa Sweeps 13&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                9/26/13<br/>12:30 AM
            </td>
            <td>
                9/28/13<br/>11:59 PM
            </td>
            <td></td>
            <td></td>
            <td>
                9/26/13<br/>9:57 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                caratestpromo3rdparty1&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                9/18/13<br/>12:00 AM
            </td>
            <td>
                9/19/13<br/>11:59 PM
            </td>
            <td>
                9/11/13<br/>1:55 PM
            </td>
            <td>
                
            </td>
            <td>
                9/11/13<br/>11:54 AM
            </td>
        </tr>
        <tr onclick="alert('redirect disabled in demo');">
            <td>
                usef test 3&nbsp;&nbsp;&nbsp;(embedded)
            </td>
            <td>
                9/5/13<br/>12:00 AM
            </td>
            <td>
                9/30/13<br/>11:59 PM
            </td>
            <td>
                9/5/13<br/>2:35 PM
            </td>
            <td>
                9/9/13<br/>3:29 PM
            </td>
            <td></td>
        </tr>
    </table>

    </section>

    </div>

</form>
<?php require '_form-footer.php'; ?>
</body>
</html>
