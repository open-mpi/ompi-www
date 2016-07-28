<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 09:51:38 2013" -->
<!-- isoreceived="20130429135138" -->
<!-- sent="Mon, 29 Apr 2013 08:51:32 -0500" -->
<!-- isosent="20130429135132" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517E7AE4.3090904_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517E775F.7040707_at_inria.fr" -->
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
<strong>Date:</strong> 2013-04-29 09:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3653.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5563)"</a>
<li><strong>Previous message:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/29/2013 08:36 AM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; I wonder if this CFLAGS=-D_POSIX_SOURCE is supported by FreeBSD headers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could not fix this. Google says that FreeBSD does not define u_int
</span><br>
<span class="quotelev1">&gt; when _POSIX_SOURCE, so the sysctl() prototype cannot be correct. I tend
</span><br>
<span class="quotelev1">&gt; to think you should remove _POSIX_SOURCE on this FreeBSD release.
</span><br>
<p>Is this for any version of POSIX_SOURCE?  Just giving _POSIX_SOURCE
<br>
falls back to POSIX.1-1990.  Most times we (mpich) only care about
<br>
POSIX.1-2001 (given by -D_POSIX_C_SOURCE=200112L).
<br>
<p>I can try it out later today.
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
<li><strong>Next message:</strong> <a href="3653.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5563)"</a>
<li><strong>Previous message:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
