<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 08:25:35 2013" -->
<!-- isoreceived="20130430122535" -->
<!-- sent="Tue, 30 Apr 2013 07:25:29 -0500" -->
<!-- isosent="20130430122529" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517FB839.1000208_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517F7120.5010706_at_inria.fr" -->
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
<strong>Date:</strong> 2013-04-30 08:25:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 woes"</a>
<li><strong>Previous message:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/30/2013 02:22 AM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 29/04/2013 15:51, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 04/29/2013 08:36 AM US Central Time, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wonder if this CFLAGS=-D_POSIX_SOURCE is supported by FreeBSD headers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could not fix this. Google says that FreeBSD does not define u_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when _POSIX_SOURCE, so the sysctl() prototype cannot be correct. I tend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to think you should remove _POSIX_SOURCE on this FreeBSD release.
</span><br>
<span class="quotelev2">&gt;&gt; Is this for any version of POSIX_SOURCE?  Just giving _POSIX_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; falls back to POSIX.1-1990.  Most times we (mpich) only care about
</span><br>
<span class="quotelev2">&gt;&gt; POSIX.1-2001 (given by -D_POSIX_C_SOURCE=200112L).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to fail the same on FreeBSD 9.1 with -D_POSIX_C_SOURCE=200112L
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, regarding the AM_CONDITIONAL issue, you should remove the
</span><br>
<span class="quotelev1">&gt; relevant &quot;if&quot; section from src/Makefile.am for now. You likely don't
</span><br>
<span class="quotelev1">&gt; want to use plugins anyway? I still don't have a complete solution,
</span><br>
<span class="quotelev1">&gt; there will be another mail later to discuss this.
</span><br>
<p>Yes, this is what I've been doing to move things forward, but this is
<br>
not a great solution.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 woes"</a>
<li><strong>Previous message:</strong> <a href="3660.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3657.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
