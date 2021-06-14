<h1 style="text-align: left;"><span style="font-family: verdana; font-size: large;">Send SMS With PHP and Tiniyo</span></h1>
<div>
  <div class="separator" style="clear: both; text-align: center;"><a href="PHP_Tiniyo_cover.jpg" style="border: 1px solid black; clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><span style="background-color: white; clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="1216" data-original-width="2587" height="301" src="PHP_Tiniyo_cover.jpg" width="644" /></span></a></div>
  
  <div><br /></div>
  <div><span style="font-family: verdana; font-size: large;">Using Tiniyo's REST API, you can send outgoing SMS messages from&nbsp;</span></div>
  <div><span style="font-family: verdana;"><span style="font-size: medium;">your Verified Tiniyo Phone number to mobile phones around the globe.</span></span></div>
  <div>
    <div><span style="font-family: verdana; font-size: large;"><br /></span></div>
  </div>
  <div><span style="font-family: verdana; font-size: x-large;">What you need&nbsp;</span></div>
</div>
<div><span style="font-family: verdana; font-size: large;"><br /></span></div>
<div><span style="font-family: verdana; font-size: medium;">To follow this tutorial you will need :&nbsp;</span></div>
<div><span style="font-family: verdana; font-size: medium;"><br /></span></div>
<div><span style="font-family: verdana; font-size: medium;">1. A Tiniyo Account&nbsp;</span></div>
<div><span style="font-family: verdana; font-size: medium;"><br /></span></div>
<div><span style="font-family: verdana; font-size: medium;">2. Tiniyo PHP Package</span></div>
<div><span style="font-family: verdana; font-size: medium;"><br /></span></div>
<div><span style="font-family: verdana; font-size: medium;">3. PHP Code</span></div>
<div><span style="font-family: verdana; font-size: medium;"><br /></span></div>
<div><span style="font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;"><span face="&quot;Whitney SSm A&quot;, &quot;Whitney SSm B&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif" style="background-color: white; letter-spacing: -0.16px;">Tiniyo generates an AuthID&nbsp;</span><span face="&quot;Whitney SSm A&quot;, &quot;Whitney SSm B&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif" style="background-color: white; letter-spacing: -0.16px;">and an AuthSecretID when you create a Tiniyo account.</span></span></div>
<div><span style="font-size: medium;"><span face="&quot;Whitney SSm A&quot;, &quot;Whitney SSm B&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif" style="background-color: white; color: #0d112b; letter-spacing: -0.16px;"><br /></span></span></div>
<div><span style="font-size: medium;"><span face="&quot;Whitney SSm A&quot;, &quot;Whitney SSm B&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif" style="background-color: white; color: #0d112b; letter-spacing: -0.16px;"><br /></span></span></div>
<div>
  <h3 style="background-color: white; box-sizing: inherit; clear: both; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 1.25rem; line-height: 1.1; margin: 0px auto 0.9375rem; max-width: 100%; overflow-wrap: break-word; padding-left: 0px; padding-right: 0px; word-break: break-word;">Step 1 – Create a Tiniyo Account.</h3>
</div>
<div><br /></div>
<div><span style="font-family: arial; font-size: medium;">If you already have a Tiniyo account, great!&nbsp; Feel free to skip to Step 2.&nbsp; If not, no worries !&nbsp;</span><span style="font-family: arial; font-size: medium;">Go to&nbsp;<a href="https://www.tiniyo.com/" target="_blank">Tiniyo Official Website</a>. Click on Sign Up.</span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div>
  <div class="separator" style="clear: both; text-align: center;"><a href="image1.png" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img alt="Sign Up" border="0" data-original-height="609" data-original-width="1280" height="308" src="image1.png" style="border: 1px solid black;" title="Sign Up" width="665" /></a></div>
</div>

<div><br /></div>
<div><br /></div>
<div><span style="font-family: arial; font-size: medium;">You will redirect to Sign Up page. FIll your details and click on "SignUp" Button.</span></div>
<div><br /></div>
<div><br /></div>
<div><br /></div>
<div class="separator" style="clear: both; text-align: center;"><a href="image2.png" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="609" data-original-width="1280" height="307" src="image2.png" style="border: 1px solid black;" width="667" /></a></div>
<
<div><span style="font-family: arial; font-size: x-large;"><br /></span></div>
<div><span style="font-family: arial; font-size: x-large;"><br /></span></div>
<div><span style="font-family: arial;"><span style="font-size: medium;">Now, Your Account is Successfully Created. Verify your Phone Number using OTP.</span></span></div>
<div><span><span><br /></span></span></div>
<div><span style="font-family: arial; font-size: medium;">After that Login into your Account using your Email Id and Password.</span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div>
  <div class="separator" style="clear: both; text-align: center;"><a href="image3.png" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="873" data-original-width="1043" height="461" src="image3.png" style="border: 1px solid black;" width="655" /></a></div>
</div>
<div>
  <h3 style="background-color: white; box-sizing: inherit; clear: both; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 1.25rem; line-height: 1.1; margin: 0px auto 0.9375rem; max-width: 100%; overflow-wrap: break-word; padding-left: 0px; padding-right: 0px; word-break: break-word;"><br /></h3>
  <h3 style="background-color: white; box-sizing: inherit; clear: both; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 1.25rem; line-height: 1.1; margin: 0px auto 0.9375rem; max-width: 100%; overflow-wrap: break-word; padding-left: 0px; padding-right: 0px; word-break: break-word;">Step 2 – Get Your AuthID and AuthSecretID from Tiniyo Account.</h3>
</div>
<div><br /></div>
<div><span style="font-family: arial; font-size: medium;">Once you are logged into your account you will see Dashboard Like below Image.</span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;">Here, You will Find your AuthID and AuthSecretID for Request API.</span></div>
<div><br /></div>
<div>
  <div class="separator" style="clear: both; text-align: center;"><a href="image4.png" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="913" data-original-width="1920" height="324" src="image4.png" style="border: 1px solid black;" width="660" /></a></div>
</div>
<div>
  <h2 style="background-color: white; box-sizing: border-box; color: #444444; font-family: Whitney SSm A, Whitney SSm B, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 2rem; font-weight: 300; letter-spacing: -0.16px; line-height: 1.4; margin: 1.7rem 0px 15px; padding: 0px;"><span style="font-family: arial; font-size: large; letter-spacing: -0.16px;"><br /></span></h2>
  <h2 style="background-color: white; box-sizing: border-box; color: #444444; font-family: Whitney SSm A, Whitney SSm B, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 2rem; font-weight: 300; letter-spacing: -0.16px; line-height: 1.4; margin: 1.7rem 0px 15px; padding: 0px;"><span style="font-family: arial; font-size: x-large; letter-spacing: -0.16px;">Copy Your Key and Secet provided by Tiniyo and Store it.</span></h2>
  <div><span style="background-color: white; letter-spacing: -0.16px;"><span style="font-family: arial; font-size: medium;">Once you've got all that, let's dive into the code.</span></span></div>
  <h2 style="background-color: white; box-sizing: border-box; color: #444444; font-family: Whitney SSm A, Whitney SSm B, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 2rem; font-weight: 300; letter-spacing: -0.16px; line-height: 1.4; margin: 1.7rem 0px 15px; padding: 0px;">Getting started with PHP</h2>
</div>
<div>
  <p style="background-color: white; box-sizing: border-box; color: #24292e; margin-bottom: 16px; margin-top: 0px;"><span style="font-family: arial; font-size: medium;">tiniyo-php provides sdk for tiniyo apis.</span></p>
  <h3 style="background-color: white; box-sizing: border-box; color: #24292e; line-height: 1.25; margin-bottom: 16px; margin-top: 24px;"><span style="font-family: arial; font-size: large;">Supported PHP Versions</span></h3>
  <p style="background-color: white; box-sizing: border-box; color: #24292e; margin-bottom: 16px; margin-top: 0px;"><span style="font-family: arial; font-size: medium;">This library supports the following PHP implementations:</span></p>
  <ul style="background-color: white; box-sizing: border-box; color: #24292e; margin-bottom: 16px; margin-top: 0px; padding-left: 2em;">
    <li style="box-sizing: border-box;"><span style="font-family: arial; font-size: medium;">PHP 7.2</span></li>
    <li style="box-sizing: border-box; margin-top: 0.25em;"><span style="font-family: arial; font-size: medium;">PHP 7.3</span></li>
    <li style="box-sizing: border-box; margin-top: 0.25em;"><span style="font-family: arial; font-size: medium;">PHP 7.4</span></li>
    <li style="box-sizing: border-box; margin-top: 0.25em;"><span style="font-family: arial; font-size: medium;">PHP 8.0.1</span></li>
  </ul>
  <h3 style="background-color: white; box-sizing: inherit; clear: both; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 1.25rem; line-height: 1.1; margin: 0px auto 0.9375rem; max-width: 100%; overflow-wrap: break-word; padding-left: 0px; padding-right: 0px; word-break: break-word;">Step 3 – Installation</h3>
  <div><br /></div>
  <p style="background-color: white; box-sizing: border-box; color: #24292e; margin-bottom: 16px; margin-top: 0px;"><span style="font-family: arial; font-size: medium;">You can install&nbsp;<span style="box-sizing: border-box; font-weight: 600;">tiniyo-php</span>&nbsp;via composer or by downloading the source.</span></p>
  <h3 style="background-color: white; box-sizing: border-box; color: #24292e; line-height: 1.25; margin-bottom: 16px; margin-top: 24px;">
    <a aria-hidden="true" class="anchor" href="https://github.com/tiniyo/tiniyo-php#via-composer" id="user-content-via-composer" style="background-color: transparent; box-sizing: border-box; float: left; line-height: 1; margin-left: -20px; padding-right: 4px; text-decoration-line: none;">
      <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewbox="0 0 16 16" width="16"></svg>
      <span style="font-family: arial; font-size: medium;">
        <path d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z" fill-rule="evenodd"></path>
      </span>
    </a>
    <span style="font-family: arial; font-size: medium;">Via Composer:</span>
  </h3>
  <p style="background-color: white; box-sizing: border-box; color: #24292e; margin-bottom: 16px; margin-top: 0px;"><span style="font-family: arial; font-size: medium;"><span style="box-sizing: border-box; font-weight: 600;">tiniyo-php</span>&nbsp;is available on Packagist as the&nbsp;<a href="https://packagist.org/packages/tiniyo/tiniyo-php" rel="nofollow" style="background-color: transparent; box-sizing: border-box; text-decoration-line: none;"><code style="background-color: var(--color-markdown-code-bg); border-radius: 6px; box-sizing: border-box; margin: 0px; padding: 0.2em 0.4em;">tiniyo/tiniyo-php</code></a>&nbsp;package:</span></p>
  <div class="snippet-clipboard-content position-relative" style="background-color: white; box-sizing: border-box; color: #24292e; position: relative;">
    <pre style="background-color: var(--color-bg-tertiary); border-radius: 6px; box-sizing: border-box; line-height: 1.45; margin-bottom: 16px; margin-top: 0px; overflow-wrap: normal; overflow: auto; padding: 16px;"><code style="background: transparent; border-radius: 6px; border: 0px; box-sizing: border-box; display: inline; line-height: inherit; margin: 0px; overflow-wrap: normal; overflow: visible; padding: 0px; word-break: normal;"><span style="font-family: arial; font-size: medium;">composer require tiniyo/tiniyo-php</span></code></pre>
  </div>
</div>
<h3><span style="font-family: verdana; font-weight: normal;"><span style="font-size: large;">Send an SMS</span></span></h3>
<div><span style="background-color: white; color: #0d112b; font-family: arial; font-size: large; letter-spacing: -0.16px;">It takes just a few lines of code and even fewer minutes to send your first text message with PHP and Tiniyo. Here’s how:</span></div>
<div><span style="background-color: white; color: #0d112b; font-family: arial; font-size: large; letter-spacing: -0.16px;"><br /></span></div>
<div class="separator" style="clear: both; text-align: center;"><a href="code.png" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="761" data-original-width="1481" height="330" src="code.png" width="655" /></a></div>
<div><br /></div>

<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;">When creating a new message via the API, include the parameters :</span></div>
<p style="text-align: left;"><b><span style="font-size: medium;"><span style="font-family: arial;">To , From , Body,&nbsp;</span><span style="font-family: arial;">TemplateId.</span></span></b></p>
<div><span style="font-family: arial; font-size: medium;"><b>To :-&nbsp;</b></span><span style="font-family: arial; font-size: medium;">This parameter determines the destination phone number for your SMS message. Format this number with country code, e.g., 91XXXXXXXXXX.</span></div>
<div><br /></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;"><b>From :-</b>&nbsp;Specifies the Tiniyo Verified Phone number (or)&nbsp; TINIYO that sends this message. This must be a Tiniyo Verified phone number that you own, formatted with country code,&nbsp;</span><span style="font-family: arial; font-size: medium;">e.g., 91XXXXXXXXXX.</span><span style="font-family: arial; font-size: medium;">&nbsp;</span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;"><b>Body :-</b>&nbsp;The Body Parameter&nbsp;</span><span style="font-size: medium;"><span style="font-family: arial;">includes the full text of the message you want to send, limited to 1600 characters.</span></span></div>
<div><span style="font-size: medium;"><span style="font-family: arial;"><br /></span></span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div><span style="font-family: arial; font-size: medium;"><b>TemplateID :-</b>&nbsp;TemplateID is mandatory field for the country india.</span></div>
<div><span style="font-family: arial; font-size: medium;">You can get this Id from Verify -&gt; Verify-Template using tiniyo account.</span></div>
<div><span style="font-family: arial; font-size: medium;"><br /></span></div>
<div>
  <span style="font-family: arial; font-size: medium;">
    <div style="font-family: Times New Roman; font-size: medium;"><span style="font-family: arial; font-size: large;">Save your file and run it.</span></div>
    <p style="font-family: Times New Roman; font-size: medium;"><span style="font-family: arial; font-size: medium;">php send-sms.php</span></p>
  </span>
</div>
<div><span style="font-family: arial; font-size: medium;"><span style="background-color: white; letter-spacing: -0.16px;">Boom! Your phone should light up with a text!</span></span></div>
<h1 style="text-align: left;"><span face="Roboto, sans-serif"><span style="font-size: large;">Output :</span></span></h1>
<div><span face="Roboto, sans-serif"><span style="font-size: large;"><br /></span></span></div>
<div>
  <span face="Roboto, sans-serif">
    <div class="separator" style="clear: both; text-align: center;"><a href="msgimage.jpg" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="2340" data-original-width="1080" height="761" src="msgimage.jpg" style="border: 1px solid black;" width="352" /></a></div>
    <div class="separator" style="clear: both; text-align: center;"><br /></div>
  </span>
  <span style="background-color: white; color: #0d112b; font-family: arial; font-size: medium; letter-spacing: -0.16px;">That's it, you've sent an SMS message using PHP and Tiniyo API.</span>
</div>
<div><span style="background-color: white; color: #0d112b; letter-spacing: -0.16px;"><span style="font-family: arial; font-size: medium;"><br /></span></span></div>
<div><span style="color: #0d112b; font-family: arial; font-size: medium;"><span style="background-color: white; letter-spacing: -0.16px;">Thank You,</span></span></div>
<div><span style="color: #0d112b; font-family: arial; font-size: medium;"><span style="background-color: white; letter-spacing: -0.16px;"><br /></span></span></div>
<div><span style="color: #0d112b; font-family: arial;"><span style="background-color: white; font-size: medium; letter-spacing: -0.16px;"><b>Yash Joshi.</b></span></span></div>
