<?php

/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[module]--[key].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $recipient: The recipient of the message
 * - $subject: The message subject
 * - $body: The message body
 * - $css: Internal style sheets
 * - $module: The sending module
 * - $key: The message identifier
 *
 * @see template_preprocess_mimemail_message()
 */
?>

<?php $domain = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>DaisyFlo Email</title>
    <?php if ($css): ?>
    <style type="text/css">
      <!--
      <?php print $css ?>
      -->
    </style>
    <?php endif?>
    
   </head>
  <body id="mimemail-body" class="<?php echo $module?>" >
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
   <tbody>
      <tr>
         <td>
            <table width="600" class="responsive-table" cellpadding="0" cellspacing="0" border="0" align="center" class="">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="600" class="responsive-table"  cellpadding="0" cellspacing="0" border="0" align="center" class="">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="20"></td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" align="left" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #282828" st-content="preheader">
                                    Any questions about this email? Email us at <a href="#" style="text-decoration: none; color: #d70c76"><?php echo variable_get('site_mail');?></a> 
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="20"></td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of preheader -->       
<!-- Start of header -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
   <tbody>
      <tr>
         <td>
            <table width="600" class="responsive-table" cellpadding="0" cellspacing="0" border="0" align="center">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="600" class="responsive-table" bgcolor="#d70c76" cellpadding="0" cellspacing="0" border="0" align="center">
                           <tbody>
                              <tr>
                                 <td>
                                    <!-- logo -->
                                    <table bgcolor="#282828" width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="responsive-table">
                                       <tbody>
                                          <tr>
                                             <td width="140" height="50" align="center">
                                                <div class="imgpop">
                                                   <a target="_blank" href="#" style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: white; text-align:left; line-height: 24px;">
                                                   	DaisyFlo.
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- end of logo -->
                                    <!-- start of menu -->
                                    <table bgcolor="#d70c76" width="250" height="50" border="0" align="right" valign="middle" cellpadding="0" cellspacing="0" border="0" class="devicewidth">
                                       <tbody>
                                          <tr>
                                             <td height="50" align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: white" st-content="menu">
                                                <a href="#" style="color: white;text-decoration: none;">Home</a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="#" style="color: white;text-decoration: none;">Shop</a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="#" style="color: white;text-decoration: none;">Contact</a>
                                                &nbsp;&nbsp;&nbsp;
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- end of menu -->
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>

<?php if($module == "custom-commerce"):?>
	<?php print $body ?>
<?php else: ?>
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <!-- COPY -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="font-size: 32px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy"><span style="color:#d70c76">Thank you </span> for using DaisyFlo.</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
                                <?php print $body ?>
                                
                                	<br />
                                	<br />
                             		<hr style="border-top:0px!important; background-color:white; border-bottom: 1px dashed #aaaaaa;" />
                                	
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?php endif?>
 
<!-- Start of footer -->
<!-- Start of seperator -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
   <tbody>
      <tr>
         <td>
            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
               <tbody>
                  <tr>
                     <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of seperator --> 


<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <!-- COPY -->
                                <td align="center" style="font-size: 32px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">How did we do?</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius, leo a ullamcorper feugiat, ante purus sodales justo, a faucibus libero lacus a est. Aenean at mollis ipsum.</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <!-- BULLETPROOF BUTTON -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">
                                                <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                    <tr>
                                                        <td align="center"><a href="#" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #BE0B67; border-top: 15px solid #BE0B67; border-bottom: 15px solid #BE0B67; border-left: 25px solid #BE0B67; border-right: 25px solid #BE0B67; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">Let Us Know</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
   <tbody>
      <tr>
         <td>
            <table width="600" bgcolor="#d70c76" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>

 <img width="100%" src="<?php echo $domain?>/sites/all/themes/daisyflo/img/theme/footer.png"/>
 
<!-- End of footer -->
<!-- Start of Postfooter -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="postfooter" >
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="responsive-table">
               <tbody>
                  <!-- Spacing -->
                  <tr>
                     <td width="100%" height="20"></td>
                  </tr>
                  <!-- Spacing -->
                  <tr>
                     <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #282828" st-content="preheader">
						1234 Main Street, Anywhere, MA 01234, USA  <a href="#" style="text-decoration: none; color: #d70c76"><?php echo variable_get('site_mail');?></a> 
                     </td>
                  </tr>
                  <!-- Spacing -->
                  <tr>
                     <td width="100%" height="20"></td>
                  </tr>
                  <!-- Spacing -->
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of postfooter -->      
</body>
</html>
