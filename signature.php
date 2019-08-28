<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/getSignature.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <!--<link type="text/css" rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" /> -->
    <!--Import materialize.css -->
</head>
<?php


$slash = false;
if($_GET['name']){
    $name = strtoupper(htmlspecialchars($_GET['name']));    
}
if($_GET['position']){
    $position = strtoupper(htmlspecialchars($_GET['position']));
}
if($_GET['email']){
    $email = strtolower(htmlspecialchars($_GET['email']));  
}
if($_GET['work']){
    $work = htmlspecialchars($_GET['work']);
}
if($_GET['cell']){
    $cell = htmlspecialchars($_GET['cell']);
}
if($_GET['company']){
    $company = strtoupper(htmlspecialchars($_GET['company']));
}
if($_GET['video_call']){
    $video_call = strtolower(htmlspecialchars($_GET['video_call']));
}
if($_GET['meeting']){
    $meeting = strtolower(htmlspecialchars($_GET['meeting']));
}
if($_GET['website']){
    $website = strtolower(htmlspecialchars($_GET['website']));
}

?>
<body>
    <div class="container card hoverable">
        <div class="card-content">
            <div id="signature">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <table cellpadding="0" cellspacing="0" border="0" style="background: none; border-width: 0px; border: 0px; margin: 0; padding: 0;">

                    <tr>
                        

                        <td style="padding:0 8px 0 0;" valign="top"> <img style="width:104px;moz-border-radius:50%;khtml-border-radius:50%;o-border-radius:50%;webkit-border-radius:50%;ms-border-radius:50%;border-radius:50%;margin: 35px 5px 35px 30px;" width="104" img id="imageUpload"  src="uploads/image-placeholder.png"; alt='<?php echo "$name" ?>'>
                        </td>
                        <td style="border-left:3px solid;color:#000001;font-family:Arial, Helvetica, sans-serif;padding:0 0 0 8px;border-color:#202969;" valign="top">

                            <td style="padding-top: 0; padding-bottom: 0; padding-left: 12px; padding-right: 0;">

                                <table cellpadding="0" cellspacing="0" border="0" style="background: none; border-width: 0px; border: 0px; margin: 0; padding: 0;">

                                    <tr><td colspan="2" style="padding-bottom: 0px; color: #202969; font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><?php echo $name;?></td></tr>

                                    <tr><td colspan="2" style="color: #333333; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><i><?php echo $position;?></i></td></tr>

                                    <tr><td valign="top" style="vertical-align: top; color: #333333; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><img src="icos/line-2.png" style="width: 96%;"></td></tr>

                                    <tr><td colspan="2" style="color: #333333; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><b><a href="<?php echo $website;?>"><?php echo $company;?></a></b></td></tr>

                                    <tr><td width="20" valign="top" style="vertical-align: top; width: 20px; color: #202969; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><span><a href="tel:<?php echo $work;?>" style="color:#1481B1;text-decoration: none;font-size: 14px;"><?php echo $work;?></a></span></td></tr>

                                    <tr><td width="20" valign="top" style="vertical-align: top; width: 20px; color: #202969; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><span><a href="tel:<?php echo $cell;?>" style="color:#1481B1;text-decoration: none;font-size: 14px;"><?php echo $cell;?></a></span></td></tr>

                                    <tr><td width="20" valign="top" style="vertical-align: top; width: 20px; color: #202969; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><img src="icos/skype.png">&nbsp;<?php echo $video_call; ?></td></tr>

                                    <tr><td valign="top" style="vertical-align: top; color: #202969; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><img src="icos/email.png">&nbsp;<a href="mailto:<?php echo $email;?>" style="color: #1481B1; text-decoration: none; font-weight: normal; font-size: 14px;"><?php echo $email;?></a></td></tr>

                                        <!--<tr><td valign="top" style="vertical-align: top; color: #202969; font-size: 14px; font-family: Arial, Helvetica, sans-serif;"><a href="<?php //echo $website;?>" style="color: #1481B1; text-decoration: none; font-weight: normal; font-size: 14px;">

                                            <img src="icos/website.png">

                                        Our Website</a></td></tr> 


                                        <tr><td valign="top" style="vertical-align: top; color: #333333; font-size: 18px; font-family: Arial, Helvetica, sans-serif;"><a href="https://app.hubspot.com/meetings/richard13" style="color: #1481B1; text-decoration: none; font-weight: normal; font-size: 14px;">

                                            <img src="icos/calendar.png">
                                            <strong>BOOK A MEETING</strong></a></td></tr>
                                        
                                        -->


                                        </table>     
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>  
</html>