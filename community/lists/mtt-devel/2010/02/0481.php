<?
$subject_val = "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 01:44:16 2010" -->
<!-- isoreceived="20100212064416" -->
<!-- sent="Fri, 12 Feb 2010 09:45:24 +0300" -->
<!-- isosent="20100212064524" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com" -->
<!-- id="4B74F904.4040204_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52B87A38-8314-46B1-B30B-910AF5269C19_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 01:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">Jeff,<br>
<br>
Yes, you are right.<br>
I read this mail after sent answer to original from Ethan:)<br>
So, read my answer.<br>
<br>
Igor<br>
</font></font><br>
Jeff Squyres wrote:
<blockquote cite="mid:52B87A38-8314-46B1-B30B-910AF5269C19@cisco.com"
 type="cite">
  <pre wrap="">After looking through the logs, Ethan and I *think* that this was just a query that was too large (i.e., it used too much CPU, and therefore it was killed).

Can someone with a little more knowledge than us have a look at the logs and let us know if we're right?


On Feb 11, 2010, at 2:05 PM, Ethan Mallove wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Hi,

I'm getting a 500 Internal Server Error using bquery.pl.  I can --ping
successfully:

  $ client/bquery.pl --ping --server=<a class="moz-txt-link-freetext" href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a> --password=xxxxx --username=sun
  Ping is successful.

But an actual query gets an error:

  $ client/bquery.pl --server=<a class="moz-txt-link-freetext" href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a> --password=xxxxx --username=sun --query --gqls="select * from TestRunPhase where status=1" --dir="bquery-test"
  Error at <a class="moz-txt-link-freetext" href="http://open-mpi-mtt.appspot.com//client">http://open-mpi-mtt.appspot.com//client</a>
  500 Internal Server Error

-Ethan
_______________________________________________
mtt-devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:mtt-devel@open-mpi.org">mtt-devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>

    </pre>
  </blockquote>
  <pre wrap=""><!---->

  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4859 (20100211) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
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
