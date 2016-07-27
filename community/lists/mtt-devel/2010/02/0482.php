<?
$subject_val = "Re: [MTT devel] MTTGDS issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 02:06:43 2010" -->
<!-- isoreceived="20100212070643" -->
<!-- sent="Fri, 12 Feb 2010 10:08:13 +0300" -->
<!-- isosent="20100212070813" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTTGDS issues" -->
<!-- id="4B74FE5D.2040609_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A04E636-0E98-4A61-947B-3B5AE7B8E158_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTTGDS issues<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 02:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<li><strong>Previous message:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Jeff Squyres: "[MTT devel] MTTGDS issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0488.php">Jeff Squyres: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Reply:</strong> <a href="0488.php">Jeff Squyres: "Re: [MTT devel] MTTGDS issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial"></font></font><br>
Jeff Squyres wrote:
<blockquote cite="mid:5A04E636-0E98-4A61-947B-3B5AE7B8E158@cisco.com"
 type="cite">
  <pre wrap="">1. Can you guys describe what MTTGDS expects from the performance analyzer modules?

I ran a bunch of netpipe results and MTTGDS performance analyzer failed to run -- did you guys change the specifications for the performance analyzer modules?

*** WARNING: Could not run module
    MTT::Test::Analyze::Performance::NetPipe:PreReport: Undefined
    subroutine &amp;MTT::Test::Analyze::Performance::NetPipe::PreReport called
    at (eval 335838) line 1.
  </pre>
</blockquote>
[II] It is the same thing as with "analyze_module" warning you got
before. There are set of values that we would like to store in
datastore but they do not exist in original analyzer. To avoid conflict
with original mtt procedure _pre_process_phase call is done to get info
from special function integrated into original analyzers as PreReport.<br>
<blockquote cite="mid:5A04E636-0E98-4A61-947B-3B5AE7B8E158@cisco.com"
 type="cite">
  <pre wrap="">
2. I ran 24+ hours of MTT tests and the MTTGDS reporter failed to submit the results.  :-(

*** ERROR: Module aborted: MTT::Reporter::MTTGDS:Finalize: Nested
    quantifiers in regex; marked by &lt;-- HERE in m/\s[\S/\\]*mpi2c++ &lt;--
    HERE _test.*/ at /home/jsquyres/svn/mtt/lib/MTT/Reporter/MTTGDS.pm line
    498.

Some of my INI section names have special characters in them (e.g., "mpi2c++"); it looks like this might be what tripped up some regexp.  I'll have a look at this one now...

Is there a way to re-submit my data to GDS?

  </pre>
</blockquote>
[II] Yes. You can upload data (datafile.yaml) from local place to
datastore using bquery.pl --upload. Place for collected data can be
controlled by "repository_tempdir", "repository_dirname_prefix"<br>
[VBench]<br>
repository_tempdir=&amp;scratch_root()/gds_data<br>
repository_dirname_prefix=gds<br>
submit_failed_results_to_gds=0<br>
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
<li><strong>Next message:</strong> <a href="0483.php">Igor Ivanov: "Re: [MTT devel] GDS errors"</a>
<li><strong>Previous message:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Jeff Squyres: "[MTT devel] MTTGDS issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0488.php">Jeff Squyres: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Reply:</strong> <a href="0488.php">Jeff Squyres: "Re: [MTT devel] MTTGDS issues"</a>
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
