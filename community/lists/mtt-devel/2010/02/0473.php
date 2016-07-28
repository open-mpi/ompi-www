<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 09:11:09 2010" -->
<!-- isoreceived="20100210141109" -->
<!-- sent="Wed, 10 Feb 2010 17:09:33 +0300" -->
<!-- isosent="20100210140933" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4B72BE1D.8020707_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0CFB6F72-212C-4C60-BD51-8895718E1EA9_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 09:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Jeff Squyres: "[MTT devel] MTTGDS issues"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<br>
<br>
Jeff Squyres wrote:
<blockquote cite="mid:0CFB6F72-212C-4C60-BD51-8895718E1EA9@cisco.com"
 type="cite">
  <pre wrap="">On Feb 10, 2010, at 4:12 AM, Igor Ivanov wrote:

  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">Is it hard to redirect the appspot lookup to use google account names + passwords?

      </pre>
    </blockquote>
    <pre wrap="">[II] I believe that it is possible task. It could be done in two ways:
set google account e-mail in mttdatabase_username key of ini-file
1) provide for filling User.username with google account e-mail and change code of User.check_password in file  gds/auth/models.py to with google account verification code
code example (I have not checked one):
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I took a swipe at doing this (totally not tested; how does one develop/test this stuff?).  I know just a tiny bit of python, but the code was fairly readable.  Please see the attached patch -- is it anywhere close to correct?

  </pre>
</blockquote>
[II] It seems close but you forget about bquery.pl that allows to add a
new user and related handler (processes bquery.pl --admin) on
gds/main.py at least.<br>
<blockquote cite="mid:0CFB6F72-212C-4C60-BD51-8895718E1EA9@cisco.com"
 type="cite">
  <pre wrap="">User.get_full_name() would still need to be re-done.  How does one fetch Google account info like that?
  </pre>
</blockquote>
[II] May be you asked following
<a class="moz-txt-link-freetext" href="http://code.google.com/appengine/docs/python/users/userclass.html">http://code.google.com/appengine/docs/python/users/userclass.html</a><br>
<blockquote cite="mid:0CFB6F72-212C-4C60-BD51-8895718E1EA9@cisco.com"
 type="cite">
  <pre wrap="">
  </pre>
  <blockquote type="cite">
    <pre wrap="">Keep in mind performance difference between google account verification code and local verification!
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Yep -- am not worried about that.  MTT data submits don't have to be super speedy.  If a local verification takes (say) .01 second, and a google account verification takes 1 second (or even a few seconds), I don't think it'll matter.
  </pre>
</blockquote>
[II] We should take into account limitations and quotes (response etc)
that are specific for google app:
<a class="moz-txt-link-freetext" href="http://code.google.com/appengine/docs/python/runtime.html#Responses">http://code.google.com/appengine/docs/python/runtime.html#Responses</a><br>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4854 (20100210) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Jeff Squyres: "[MTT devel] MTTGDS issues"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
