<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 08:24:22 2013" -->
<!-- isoreceived="20130430122422" -->
<!-- sent="Tue, 30 Apr 2013 07:24:16 -0500" -->
<!-- isosent="20130430122416" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517FB7F0.5050805_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15p41D6M+3mZ788=VVOdONRRFeQuZpRYHO0cF81fetCUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issues<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 08:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3661.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3659.php">Brice Goglin: "[hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/30/2013 03:12 AM US Central Time, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; So, what else is one to expect when defining _POSIX_SOURCE and including
</span><br>
<span class="quotelev1">&gt; then including the non-POSIX header sys/sysctl.h?
</span><br>
<span class="quotelev1">&gt; I agree that one cannot expect to build hwloc on FreeBSD w/ strict POSIX
</span><br>
<span class="quotelev1">&gt; source enforced.
</span><br>
<p>It's OK to not build hwloc on FreeBSD, but it should abort cleanly at
<br>
configure time.  With the current model, the mpich build breaks on
<br>
FreeBSD because of this, even though the non-hwloc part of mpich builds
<br>
fine on FreeBSD.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3661.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3659.php">Brice Goglin: "[hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
