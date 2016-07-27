<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 08:28:35 2010" -->
<!-- isoreceived="20100227132835" -->
<!-- sent="Sat, 27 Feb 2010 16:30:10 +0300" -->
<!-- isosent="20100227133010" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4B891E62.9040006_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B7AB770.5060407_at_argus-cv.com" -->
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
<strong>Date:</strong> 2010-02-27 08:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0498.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font face="Arial" size="-1">Hi Jeff,<br>
<br>
It seems that one issue related google account auth method has been
detected.</font><font face="Arial"><br>
<small><br>
Description:<br>
Issue arises </small></font><font face="Arial"><small>during
submitting data frequently. </small></font><font face="Arial"><small>We
can get failure during data submitting with authentication error.</small></font><br>
<font face="Arial"><small><br>
Reason:<br>
Google allows a failure response on The ClientLogin authorization
process with a CAPTCHA challenge means that Google has decided, for
whatever reason, that additional security measures should be taken.
This response is accompanied by a CAPTCHA image URL and a token
representing the specific CAPTCHA challenge.<br>
I do not see way to organize customer input in this case.<br>
<br>
Detail information can be found at:<br>
<a class="moz-txt-link-freetext" href="http://code.google.com/intl/en-EN/apis/accounts/docs/AuthForInstalledApps.html">http://code.google.com/intl/en-EN/apis/accounts/docs/AuthForInstalledApps.html</a></small><br>
</font><br>
<font face="Arial"><small>Possible solutions:<br>
1. catch error condition on server side and return status 503: 'Service
Unavailable';<br>
In this case client can organize processing of this failure (it is
possible that sleeping for some time could help)<br>
2. catch error condition on server side and accept authentication by
correct username only w/o real verification;<br>
3. rollback to previous scheme;<br>
</small><small><br>
<br>
Igor</small></font><br>
<br>
Igor Ivanov wrote:
<blockquote cite="mid:4B7AB770.5060407@argus-cv.com" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <font size="-1"><font face="Arial">Hi Jeff,<br>
  <br>
I am sending patch that enable google account approach to submit data
to MTT GDS.<br>
It also has the fix to a bug in displaying table as respond to
bquery.pl --view (It has not been committed yet to MTT trunk).<br>
  <br>
As for question relating "how does one develop ..." that source
information can be found at following location as:
  <a moz-do-not-send="true" class="moz-txt-link-freetext"
 href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc</a>.<br>
In case you make a resolve to accept patch I am sending next steps
should be done:<br>
  <br>
1. update application on server side using instruction in </font></font><font
 size="-1"><font face="Arial">VBench_GDS_Setup.doc (topic 4
"Installation")<br>
example: appcfg.py update &lt;local folder with open-mpi-mtt&gt;/<br>
2. change version on
  <a moz-do-not-send="true" class="moz-txt-link-freetext"
 href="https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607">https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607</a>
from 1 to 2 (make default)<br>
note: after this operation all users that attempt to submit data using
previous scheme of authentication will get failure respond.<br>
3. go to </font></font><font size="-1"><font face="Arial">open-mpi-mtt
and add new users with google account</font></font><br>
  <font size="-1"><font face="Arial"><br>
  <br>
Regards,<br>
Igor<br>
  </font></font><br>
Jeff Squyres wrote:
  <blockquote cite="mid:2AE960A7-F377-4111-938A-C3C20DD42067@cisco.com"
 type="cite">
    <pre wrap="">Great -- many thanks!

On Feb 12, 2010, at 12:32 PM, Igor Ivanov wrote:

  </pre>
    <blockquote type="cite">
      <pre wrap="">Hi Jeff,

I have done changes related google account support but not tested them well.
I will try to send them on Monday.

Regards,
Igor

Jeff Squyres wrote:
    </pre>
      <blockquote type="cite">
        <pre wrap="">On Feb 10, 2010, at 9:09 AM, Igor Ivanov wrote:

  

      </pre>
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">I took a swipe at doing this (totally not tested; how does one develop/test this stuff?).  I know just a tiny bit of python, but the code was fairly readable.  Please see the attached patch -- is it anywhere close to correct?

      

          </pre>
          </blockquote>
          <pre wrap="">[II] It seems close but you forget about bquery.pl that allows to add a new user and related handler (processes bquery.pl --admin) on gds/main.py at least.
    

        </pre>
        </blockquote>
        <pre wrap="">Oh, yikes -- good catch.  I'll look into that...

How does one develop / test / debug / deploy changes to this stuff?

  

      </pre>
      </blockquote>
      <pre wrap="">__________ Information from ESET NOD32 Antivirus, version of virus signature database 4861 (20100212) __________

The message was checked by ESET NOD32 Antivirus.

<a moz-do-not-send="true" class="moz-txt-link-freetext"
 href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
    </pre>
    </blockquote>
    <pre wrap=""><!---->

  </pre>
  </blockquote>
  <br>
  <br>
__________ Information from ESET NOD32 Antivirus, version of virus
signature database 4871 (20100216) __________<br>
  <br>
The message was checked by ESET NOD32 Antivirus.<br>
  <br>
  <a moz-do-not-send="true" href="http://www.esetnod32.ru">http://www.esetnod32.ru</a><br>
  <br>
  <br>
__________ Information from ESET NOD32 Antivirus, version of virus
signature database 4871 (20100216) __________<br>
  <br>
The message was checked by ESET NOD32 Antivirus.<br>
  <br>
  <a moz-do-not-send="true" href="http://www.esetnod32.ru">http://www.esetnod32.ru</a><br>
  <pre wrap=""><pre wrap="">
<hr size="4" width="90%">
_______________________________________________
mtt-devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:mtt-devel@open-mpi.org">mtt-devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>



__________ Information from ESET NOD32 Antivirus, version of virus signature database 4871 (20100216) __________

The message was checked by ESET NOD32 Antivirus.

<a class="moz-txt-link-freetext" href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>

</pre></pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4899 (20100226) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0498.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
