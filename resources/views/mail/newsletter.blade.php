<!-- Hello {{$receiver_name}}

Welcome to our Tuesday newsletter,

Enjoy our article and have fun.

Warm regards,
Alex Price. -->



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>[SUBJECT]</title>
    <style type="text/css">
      body {background: #ffffff; font-family:"Helvetica Neue", Helvetica, Arial, sans-serif; font-size:16px; line-height:150%; color:#444; margin:0; padding:0;}
      p,li {margin-bottom:14px; margin-top:0;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size:16px;color:#999999; line-height:150%;}
      td, div {font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:13px; }
      a {color:#007FFF;text-decoration: none;font-weight: bold;display:inline-block;}
      h1 {margin-top:15px;padding:0; color:#FF6A54; font-size:30px;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-weight: normal;}
      h2 {margin-top:0; color:#FF6A54; font-size:18px;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-weight:normal;}
      h3 {margin:0;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;}
      .bgItem{background: #094F94;}
      .bgBody{background-color: #004080;}
    </style>
    <script type="colorScheme" class="swatch active">
      {
        "name":"Default",
        "bgBody":"004080",
        "link":"007FFF",
        "color":"303841",
        "bgItem":"094F94",
        "title":"FF6A54"
      }
    </script>
  </head>

  <body style="margin:0;">

  <!-- main container -->
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#ffffff;"><!-- MASTER TABLE; controls the movable content container! -->
      <tr>
        <td align="center" class="movableContentContainer">               
            
          <!-- Header: Logo; company name; website nav bar - Image + text -->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
              <tbody>
                <tr>
                  <td align="center" colspan="7" height="20px;"></td>
                </tr>
                <tr>
                  <td valign="top" height="60" width="75">
                    <div class="contentEditableContainer contentImageEditable">
                      <div class="contentEditable">
                        <img data-default="placeholder" data-max-width="75" data-max-height="60" src="{{asset('images/logo.png')}}" width="75" height="60"/>
                      </div>
                    </div>
                  </td>
                  <td width="20">
                  </td>
                  <td width="250" valign="middle">
                    <div class="contentEditableContainer contentTextEditable">
                      <div class="contentEditable">
                        <h2 style="text-align:left;">
                          <a target='_blank' href="[CLIENTS.WEBSITE]" style="text-align:right; text-decoration:none; font-size:30px">Workshops</a>
                        </h2>
                      </div>
                    </div>
                  </td>
                  <td width="20">
                  </td>
                  <td width="135" valign="middle" align="right">
                    <div class="contentEditableContainer contentTextEditable">
                      <div class="contentEditable">
                        <a target='_blank' href="[CLIENTS.WEBSITE]" style="text-align:right;">Learn more</a>
                      </div>
                    </div>
                  </td>
                  <td width="20"></td>
                  <td width="135" valign="middle" align="right">
                    <div class="contentEditableContainer contentTextEditable">
                      <div class="contentEditable">
                        <a target='_blank' href="[CLIENTS.WEBSITE]" style="background:#007FFF;color:#FFFFFF; padding:10px 16px;border-radius:3px;-moz-border-radius:16px;-webkit-border-radius:6px;text-decoration:none; line-height:150%;">Save my spot</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="7" height="20"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- END: Header: Logo; company name; website nav bar - Image + text -->

          <!-- Featured Image -->        
          <div class="movableContent">
            <table align="center" width="600" height="300" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td height="20"></td>
              </tr>
              <tr>
                <td>
                  <div class="contentEditableContainer contentImageEditable" >
                    <div class="contentEditable">
                      <img src="{{asset('images/featured.png')}}" width="600" style='margin:0; padding:0;'/>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td height="20"></td>
              </tr>
            </table>
          </div>
          <!-- END: Featured Image -->

          <!-- Title -->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
              <tr>
                <td height="20"></td>
              </tr>
              <tr>
                <td>
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:left;font-size:24px;"> Hello {{$receiver_name}},</h2>
                      <p style="color:#666666;text-align:left;">Show your contacts what you do in your newsletters: use pictures you've taken. Don't have any pictures? Sign up for the <a target='_blank' href="http://deathtothestockphoto.com/">Death to the Stock Photo newsletter</a>. They'll send you beautiful pictures, like the ones in this template, for free once a month.</p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td height="20"></td>
              </tr>
            </table>
          </div>
          <!-- END: Title -->

          <!--Featured Teacher -->
          <div class="movableContent">
            <table align="center" width="600" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
              <tr>
                <td valign="top" width='250'>
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable" style="margin: 0px;">
                      <img data-default="placeholder" data-max-width="250" src="{{asset('images/about.png')}}" width="250"/>
                    </div>
                  </div>
                </td>
                <td width="30"></td>
                <td valign="top">
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:left;">About Me</h2>
                      <p style="text-align:left;">Use this area to provide your credentials as the expert in your field, or to provide the story of a featured teacher.</p>
                      <p style="text-align:left;">Note that instead of having all the information in the email, you should use links to guide people back to your website.</p>
                      <p style="text-align:left; padding-top:7px">
                        <a target='_blank' href="[CLIENTS.WEBSITE]" style="font-size:16px;line-height:150%" >Get the online schedule</a>
                      </p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" height="45"></td>
              </tr>
            </table>
          </div>
          <!-- END: Featured Teacher -->


          <!-- Section Title: Schedule-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center" class="bgBody">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    
                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="45"></td>
                    </tr>
                    <!-- .Spacing-->
                    
                    <tr>
                      <td width="180"> 
                        
                        <!--h1Line-->
                        <div class="movableContent">
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable">
                              <img data-default="placeholder" data-max-width="180" src="{{asset('images/whiteline.png')}}" width="180" height="30"/>
                            </div>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                      <td width="30"></td>
                      <td width="180" align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <h1 style="color:#ffffff;">Month name</h1>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" height="30">

                        <!--h1Line-->
                        <div class="movableContent">
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable">
                              <img data-default="placeholder" data-max-width="180" src="{{asset('images/whiteline.png')}}" width="180" height="30"/>
                            </div>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                    </tr>

                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="10"></td>
                    </tr>
                    <!-- .Spacing-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!-- .Section Title: Schedule-->

          <!--Schedule : Monthly-->

          <!-- 7 days of the week -->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center" class="bgBody">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                      <td colspan="13" height="10"></td>
                    </tr>
                    <tr>
                      <td width="78" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Monday</p>
                          </div>
                        </div>
                      </td>
                      <td width="9"></td>
                      <td width="78" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Tuesday</p>
                          </div>
                        </div>
                      </td>
                      <td width="9"></td>
                      <td width="78" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Wednesday</p>
                          </div>
                        </div>
                      </td>
                      <td width="9"></td>
                      <td width="78" align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Thursday</p>
                          </div>
                        </div>
                      </td>
                      <td width="9"></td>
                      <td width="78" align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Friday</p>
                          </div>
                        </div>
                      </td>
                      <td width="9"></td>
                      <td width="78" align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Saturday</p>
                          </div>
                        </div>
                      </td>
                      <td width="9"></td>
                      <td width="78" align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Sunday</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!-- .7 days of the week-->

          <!-- Week 1-->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!-- Dates -->
                    <tr>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">1</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">2</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82"  align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">3</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">4</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">5</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">6</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">7</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--.Dates-->

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!--Content-->
                    <tr>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- .Content-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Week1-->


          <!-- Week 2-->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >
                    <tr>
                      <td colspan="13" height="3"></td>
                    </tr>

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!-- Dates -->
                    <tr>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">8</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">9</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82"  align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">10</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">11</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">12</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">13</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">14</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--.Dates-->

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!--Content-->
                    <tr>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- .Content-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Week2-->
              
          <!-- Week 3-->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >
                    <tr>
                      <td colspan="13" height="3"></td>
                    </tr>

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!-- Dates -->
                    <tr>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">15</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">16</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82"  align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">17</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">18</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">19</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">20</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">21</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--.Dates-->

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!--Content-->
                    <tr>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- .Content-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Week3-->

          <!-- Week 4-->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >
                    <tr>
                      <td colspan="13" height="3" ></td>
                    </tr>

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!-- Dates -->
                    <tr>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">22</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">23</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82"  align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">24</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">25</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">26</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">27</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">28</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--.Dates-->

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!--Content-->
                    <tr>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- .Content-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Week4-->

          <!-- Week 5-->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >
                    <tr>
                      <td colspan="13" height="3" >
                      </td>
                    </tr>

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!-- Dates -->
                    <tr>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">29</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">30</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82"  align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">31</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--.Dates-->

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!--Content-->
                    <tr>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- .Content-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Week5-->

          <!-- Week 6-->
          <div class="movableContent">   
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >
                    <tr>
                      <td colspan="13" height="3" >
                      </td>
                    </tr>

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!-- Dates -->
                    <tr>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82"  align="right" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="right" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">...</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--.Dates-->

                    <!--Spacer-->
                    <tr>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                      <td width="4"></td>
                      <td width="82" height="10" align="right" class="bgItem"></td>
                    </tr>
                    <!--.Spacer-->

                    <!--Content-->
                    <tr>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable" >
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                      <td width="4"></td>
                      <td width="82" align="center" style="padding-left:9px; padding-right:9px;" class="bgItem"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff; font-size: 13px;">Workshop name</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- .Content-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Week6-->

          <!-- Text+Link section-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                      <td height="20"></td>
                    </tr>
                    <tr>
                      <td align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" style="margin: 0px;">
                            <p style="align:center; color:#ffffff;">Consider adding links to the workshops that would save the date to people's computer calendars. Visit <a target='_blank' href="http://addthisevent.com/">http://addthisevent.com/</a> to create links.</p>
                            <p style="align:center; color:#ffffff;">The button below is set up so that people can send you an email telling you which workshops they want to attend.</p> 
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td height="20"></td>
                    </tr>
                    <tr>
                      <td align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" style="margin: 0px;">
                            <p>
                              <a target='_blank' href="mailto:[SENDER_EMAIL]?subject=I'd like to attend the following sessions" style="background:#ffffff;padding:10px 16px;border-radius:3px;-moz-border-radius:16px;-webkit-border-radius:6px;text-decoration:none; font-size:16px;line-height:150%;">Save my spot</a>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <!--Spacing-->
              <tr>
                <td height="45"></td>
              </tr>
              <!--.Spacing-->

            </table>
          </div>
          <!-- END: Text+Link section-->

          <!--END: Schedule 7 days-->

          <!--TOPICS-->
        
          <!-- Section Title: Topics-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">

                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="45"></td>
                    </tr>
                    <!-- .Spacing-->

                    <tr>
                      <td width="180"> 

                        <!--h1Line-->
                        <div class="movableContent">
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable">
                              <img data-default="placeholder" data-max-width="180" src="{{asset('images/line.png')}}" width="180" height="30"/>
                            </div>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                      <td width ="30"></td>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <h2 style="font-size:24px;">Topics</h2>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" height="30">

                        <!--h1Line-->
                        <div class="movableContent">
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable">
                              <img data-default="placeholder" data-max-width="180" src="{{asset('images/line.png')}}" width="180" height="30"/>
                            </div>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                    </tr>
                    <tr>
                      <td colspan="5" height="20"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!-- .Section Title: Topics-->

          <!-- Topics 2 columns: Image + Image -->
          <div class="movableContent">
            <table align="center" width="600" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
              <tr>
                <td valign="top" width="285">
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable">
                      <img data-default="placeholder" data-max-width="180" src="{{asset('images/topics.png')}}" width="285"/>
                    </div>
                  </div>
                </td>
                <td width="30"></td>
                <td valign="top" width="285">
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable">
                      <img data-default="placeholder" data-max-width="180" src="{{asset('images/topics.png')}}" width="285"/>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
            </table>
          </div>
          <!-- Topics 2 columns: Image + Image-->

          <!-- Topics 2 columns: Text+Text-->
          <div class="movableContent">
            <table align="center" width="600" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
              <tr>
                <td valign="top" width="285">
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:center;">Two is better than 3</h2>
                      <p style="text-align:center;">Two column layouts are more legible on mobile devices.</p>
                      <p style="text-align:center;">Keep your emails short and have a clear action for your readers to take.</p>
                      <p style="text-align:center;">
                        <a target='_blank' href="#">Read more</a>
                      </p>
                    </div>
                  </div>
                </td>
                <td width="30"></td>
                <td valign="top" width="285">
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:center;">Make the images clickable</h2>
                      <p style="text-align:center;">Click on the image above to add a link.</p>
                      <p style="text-align:center;">The link should take people to a webpage where they can get more information.</p>
                      <p style="text-align:center;">
                        <a target='_blank' href="#">Read more</a>
                      </p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
            </table>
          </div>
          <!-- END: Topics 2 columns: Text+Text-->
        
          <!--Topics: Text + Image -->
          <div class="movableContent">
            <table align="center" width="600" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
              <tr>
                <td valign="top">
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:left;">Use lists</h2>
                      <p style="text-align:left;">Break up long block of text into bullets:</p>
                      <ul style="text-align:left;" >
                        <li>Long blocks of text are scary</li>
                        <li>Bullets are far more manageable</li>
                        <li>Keep it simple</li>
                        <li>And keep bullets to a minimum</li>
                      </ul>
                      <p style="text-align:left;">Rather than flood people with information, add links to a page on your website that is specific to the information found in this email.</p>
                      <p style="text-align:left; padding-top:7px">
                        <a target='_blank' href="#" style="font-size:16px;line-height:150%" >Read more</a>
                      </p>
                    </div>
                  </div>
                </td>
                <td width="30"></td>
                <td valign="top" width='250'>
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable" style="margin: 0px;">
                      <img data-default="placeholder" data-max-width="250" src="{{asset('images/verticalimg.png')}}" width="250"/>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" height="45"></td>
              </tr>
            </table>
          </div>
          <!-- END: Topics: Text + Image -->

          <!-- END: TOPICS-->

          <!-- TESTIMONIALS-->

          <!-- Section Title: Testimonials-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center" class="bgBody">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">

                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="45"></td>
                    </tr>
                    <!-- .Spacing-->

                    <tr>
                      <td width="180">

                        <!--h1Line-->
                        <div class="movableContent">
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable">
                              <img data-default="placeholder" data-max-width="180" src="{{asset('images/whiteline.png')}}" width="180" height="30"/>
                            </div>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                      <td width ="30"></td>
                      <td width="180" align="center">
                        <h1 style="color:#ffffff; line-height: 150%;" >What people are saying</h1>
                      </td>
                      <td width="30"></td>
                      <td width="180" height="30">

                        <!--h1Line-->
                        <div class="movableContent">
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable">
                              <img data-default="placeholder" data-max-width="180" src="{{asset('images/whiteline.png')}}" width="180" height="30"/>
                            </div>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                    </tr>
                    <!-- .Section Title: Benefits-->
              
                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="15"></td>
                    </tr>
                    <!-- .Spacing-->

                  </table>
                </td>
              </tr>
            </table>
          </div>

          <!--Benefits: 3column: Images-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center" class="bgBody">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                  
                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="15"></td>
                    </tr>
                    <!-- .Spacing-->

                    <!-- Images section-->
                    <tr>
                      <td width="180">

                        <!--image-->
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            <img data-default="placeholder" data-max-width="180" src="{{asset('images/testimonial1.png')}}" width="180" height="180"/>
                          </div>
                        </div>
                        <!--.image-->

                      </td>
                      <td width="30"></td>
                      <td width="180">

                        <!--image-->
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            <img data-default="placeholder" data-max-width="180" src="{{asset('images/testimonial2.png')}}" width="180" height="180"/>
                          </div>
                        </div>
                        <!--.image-->

                      </td>
                      <td width="30"></td>
                      <td width="180">

                        <!--image-->
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            <img data-default="placeholder" data-max-width="180" src="{{asset('images/testimonial3.png')}}" width="180" height="180"/>
                          </div>
                        </div>
                        <!--.image-->

                      </td>
                    </tr>
                    <!-- .Images section-->

                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="15"></td>
                    </tr>
                    <!-- .Spacing-->

                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--END: Benefits: 3column: Images-->

          <!--Benefits: 3column: Text-->

          <!--Section Header Section-->
          <div class="movableContent">

            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td align="center" class="bgBody">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                      <td colspan="5" height="15"></td>
                    </tr>
                    <tr>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff;">Olivia</p>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" align="center">
                      <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff;">Peter</p>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style="color:#ffffff;">Riley</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!--.Section Header Section-->

          <!-- Text+Link section-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="bgBody">
              <tr>
                <td>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                      <td colspan="5" height="15"></td>
                    </tr>
                    <tr>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="color:#ffffff;">Ask your customers for feedback: it provides valuable - and often surprising - insight.</p>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="align:center; color:#ffffff;">Don't fear the bad review. Answer your customers queries quickly and honestly.</p>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable"> 
                            <p style="align:center; color:#ffffff;">Request permission to use testimonials on marketing materials before using them.</p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <!--Spacing-->
              <tr>
                <td height="45"></td>
              </tr>
              <!--.Spacing-->

            </table>
          </div>
          <!-- END: Text+Link section-->

          <!--END: Benefits: 3column: Text-->

          <!-- END: TESTIMONIALS-->

          <!-- CONTACT US-->

          <!-- Section Title: Contact Us-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">

                    <!-- Spacing-->
                    <tr>
                      <td colspan="5" height="45"></td>
                    </tr>
                    <!-- .Spacing-->

                    <tr>
                      <td width="180"> 

                        <!--h1Line-->
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            <img data-default="placeholder" data-max-width="180" src="{{asset('images/line.png')}}" width="180" height="30"/>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                      <td width ="30"></td>
                      <td width="180" align="center"> 
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <h2 style="font-size:24px;">Contact Us</h2>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" height="30">

                        <!--h1Line-->
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            <img data-default="placeholder" data-max-width="180" src="{{asset('images/line.png')}}" width="180" height="30"/>
                          </div>
                        </div>
                        <!--.h1Line-->

                      </td>
                    </tr>
                    <tr>
                      <td colspan="5" height="20"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!-- .Section Title: Contact Us-->

          <!-- Contact Us: Phone & Email -->
          <div class="movableContent">
            <table align="center" width="600" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
              <tr>
                <td valign="top" width="320">
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:left;">Get in touch</h2>
                      <p style="text-align:left;">Our support team is able to answer all your questions. Just get in touch with us:</p>
                      <ul>
                        <li>Call us: [CLIENTS.PHONE]</li>
                        <li>Email us:<a target='_blank' href="mailto:[SENDER_EMAIL]"> [SENDER_EMAIL]</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
                <td width="30"></td>
                <td valign="top" width="250">
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable">
                      <img data-default="placeholder" data-max-width="250" src="{{asset('images/ContactUs.png')}}" width="250"/>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
            </table>
          </div>
          <!-- END: Contact Us: Phone & Email -->

          <!-- Contact Us: Address -->
          <div class="movableContent">
            <table align="center" width="600" valign="middle" cellpadding="0" style='margin:0;' cellspacing="0" border="0">
              <tr>
                <td colspan="3" height="20"></td>
              </tr>
              <tr>
                <td valign="top" width="320">
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable">
                      <h2 style="text-align:left;">Come see us</h2>
                      <p style="text-align:left;">Visit our offices at: <br/> [CLIENTS.ADDRESS]</p>
                      <p style="text-align:left;">
                        <a target='_blank' href="https://www.google.com/maps/dir">Get Directions</a>
                      </p>
                    </div>
                  </div>
                </td>
                <td width="30"></td>
                <td valign="top" width="250">
                  <div class="contentEditableContainer contentGmapEditable">
                    <div class="contentEditable">   
                      <img data-default="placeholder" src="{{asset('images/gmap_example.png')}}" width="250" data-max-width="250"/>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="3" height="40"></td>
              </tr>
            </table>
          </div>
          <!-- END: Contact Us: Address -->

          <!--Footer: Social Media-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#FF6A54;">
              <tr>
                <td height="40"></td>
              </tr>
              <tr>
                <td align="center" style="background-color:#FF6A54;" height="20" padding="0">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">

                    <!-- Social Media -->
                    <tr>
                      <td align="center" valign="middle">

                        <!--Twitter-->
                        <div class="contentEditableContainer contentTwitterEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhiteTweet.png')}}" title="Follow us on Twitter" width="20" data-customIcon="true" data-max-width='20' data-default="placeholder"/>
                          </div>
                        </div>
                        <!--.Twitter-->
                      </td>
                      <td width="30"></td>
                      <td align="center">

                        <!--Facebook-->
                          <div class="contentEditableContainer contentFacebookEditable" style="min-height: 0px;">
                            <div class="contentEditable">
                              <img src="{{asset('images/Whitebook.png')}}" title="Like us on Facebook" width="20" data-customIcon="true" data-max-width='20' data-default="placeholder"/>
                            </div>
                          </div>
                        <!--.Facebook-->

                      </td>
                      <td width="30"></td>
                      <td align="center">
                      
                        <!--Instagram/Tumblr-->
                        <div class="contentEditableContainer contentImageEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhiteCam.png')}}" title="Check out our pics" width="20"/>
                          </div>
                        </div>
                        <!--.Instagram/Tumblr-->

                      </td>
                      <td width="30"></td>
                      <td align="center">
                      
                        <!--Pinterest-->
                        <div class="contentEditableContainer contentImageEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhitePin.png')}}" title="See what we're pinning" width="20"/>
                          </div>
                        </div>
                        <!--.Pinterest-->

                      </td>
                      <td width="30"></td>
                      <td align="center">

                        <!--GooglePlus-->
                        <div class="contentEditableContainer contentImageEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhitePlus.png')}}" title="Add us to your circles" width="20"/>
                          </div>
                        </div>
                        <!--GooglePlus-->

                      </td>
                      <td width="30"></td>
                      <td align="center">
                        
                        <!--LinkedIn-->
                        <div class="contentEditableContainer contentImageEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhiteLinked.png')}}" title="Check out our pics" width="20"/>
                          </div>
                        </div>
                        <!--.LinkedIn-->

                      </td>
                      <td width="30"></td>
                      <td align="center">

                        <!--RSSFeed-->
                        <div class="contentEditableContainer contentImageEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhiteRss.png')}}" title="Stay up to date on our blog" width="20"/>
                          </div>
                        </div>
                        <!--.RSSFeed-->

                      </td>
                      <td width="30"></td>
                      <td align="center">
                      
                        <!--YouTube-->
                        <div class="contentEditableContainer contentImageEditable" style="min-height: 0px;">
                          <div class="contentEditable">
                            <img src="{{asset('images/WhiteTube.png')}}" title="Watch our videos" width="20"/>
                          </div>
                        </div>
                        <!--.YouTube-->

                      </td>
                    </tr>
                    <!-- .Images section-->

                  </table>
                </td>
              </tr>
              <tr>
                <td height="10"></td>
              </tr>
            </table>
          </div>
          <!-- END: Footer: Social Media-->

          <!-- Footer: Email links-->
          <div class="movableContent">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#FF6A54;">
              <tr>
                <td height="10"></td>
              </tr>
              <tr>
                <td align="center" style="background-color:#FF6A54;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p>
                              <a target='_blank' href="[UNSUBSCRIBE]" style="font-size: 12px; text-align:center; color:#ffffff">
                                Unsubscribe</a>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p>
                              <a target='_blank' href="[SHOWEMAIL]" style="font-size: 12px; text-align:center; color:#ffffff">View in Browser</a>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td width="30"></td>
                      <td width="180" align="center">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p>
                              <a target='_blank' href="[FORWARD]" style="font-size: 12px; text-align:center; color:#ffffff">
                                Forward to a friend</a>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td height="20"></td>
              </tr>
            </table>
          </div>
          <!-- END: Footer: Email links-->

        </td>
      </tr>
    </table>
  </body>
</html>