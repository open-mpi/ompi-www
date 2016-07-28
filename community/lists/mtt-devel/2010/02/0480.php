<?
$subject_val = "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 01:41:09 2010" -->
<!-- isoreceived="20100212064109" -->
<!-- sent="Fri, 12 Feb 2010 09:42:26 +0300" -->
<!-- isosent="20100212064226" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com" -->
<!-- id="4B74F852.3080009_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100211190518.GB18474_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 01:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0479.php">Jeff Squyres: "[MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">Hi Ethan,<br>
<br>
You got 500 Error because "The timeout exception handling" raised.<br>
Full description looks as "This request used a high amount of CPU, and
was roughly 1.9 times over the average request CPU limit. High CPU
requests have a small quota, and if you exceed this quota, your app
will be temporarily disabled."<br>
<br>
There are set of limitations and quotas that exists in Google App
Engine
(<a class="moz-txt-link-freetext" href="http://code.google.com/appengine/docs/python/runtime.html#Responses">http://code.google.com/appengine/docs/python/runtime.html#Responses</a>).<br>
You request matched one of them. <br>
<br>
<br>
Common recommendation to avoid this issue:<br>
1. use --no-raw (get data w/o zip archive), --no-ref (no references to
other models(tables)), --no-limit (will try to get data by portion)
options of bquery;<br>
for example: --gqls="select * from TestRunPhase where status=1"&nbsp;
--no-raw --no-ref --no-limt <br>
2. construct --gqls query more detail using additional condition in
where clause;<br>
note: "select * from TestRunPhase where status=1" query is trying to
get ~ 90% all data stored in datastore.<br>
3. active using 'tag' property allow to filter needed data;<br>
<br>
Regards,<br>
Igor<br>
<br>
</font></font><br>
<br>
Ethan Mallove wrote:
<blockquote cite="mid:20100211190518.GB18474@sun.com" type="cite">
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

__________ Information from ESET NOD32 Antivirus, version of virus signature database 4859 (20100211) __________

The message was checked by ESET NOD32 Antivirus.

<a class="moz-txt-link-freetext" href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>




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
<li><strong>Next message:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0479.php">Jeff Squyres: "[MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
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
