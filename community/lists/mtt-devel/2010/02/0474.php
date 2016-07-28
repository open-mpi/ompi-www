<?
$subject_val = "[MTT devel] MTTGDS issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 11:06:44 2010" -->
<!-- isoreceived="20100211160644" -->
<!-- sent="Thu, 11 Feb 2010 11:06:38 -0500" -->
<!-- isosent="20100211160638" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] MTTGDS issues" -->
<!-- id="5A04E636-0E98-4A61-947B-3B5AE7B8E158_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT devel] MTTGDS issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 11:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Reply:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. Can you guys describe what MTTGDS expects from the performance analyzer modules?
<br>
<p>I ran a bunch of netpipe results and MTTGDS performance analyzer failed to run -- did you guys change the specifications for the performance analyzer modules?
<br>
<p>*** WARNING: Could not run module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Analyze::Performance::NetPipe:PreReport: Undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subroutine &amp;MTT::Test::Analyze::Performance::NetPipe::PreReport called
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at (eval 335838) line 1.
<br>
<p>2. I ran 24+ hours of MTT tests and the MTTGDS reporter failed to submit the results.  :-(
<br>
<p>*** ERROR: Module aborted: MTT::Reporter::MTTGDS:Finalize: Nested
<br>
&nbsp;&nbsp;&nbsp;&nbsp;quantifiers in regex; marked by &lt;-- HERE in m/\s[\S/\\]*mpi2c++ &lt;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HERE _test.*/ at /home/jsquyres/svn/mtt/lib/MTT/Reporter/MTTGDS.pm line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;498.
<br>
<p>Some of my INI section names have special characters in them (e.g., &quot;mpi2c++&quot;); it looks like this might be what tripped up some regexp.  I'll have a look at this one now...
<br>
<p>Is there a way to re-submit my data to GDS?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Reply:</strong> <a href="0482.php">Igor Ivanov: "Re: [MTT devel] MTTGDS issues"</a>
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
