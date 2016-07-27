<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 03:22:20 2013" -->
<!-- isoreceived="20130430072220" -->
<!-- sent="Tue, 30 Apr 2013 09:22:08 +0200" -->
<!-- isosent="20130430072208" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517F7120.5010706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517E7AE4.3090904_at_mcs.anl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 03:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3656.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5566)"</a>
<li><strong>In reply to:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3661.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3661.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/04/2013 15:51, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; On 04/29/2013 08:36 AM US Central Time, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if this CFLAGS=-D_POSIX_SOURCE is supported by FreeBSD headers.
</span><br>
<span class="quotelev2">&gt;&gt; I could not fix this. Google says that FreeBSD does not define u_int
</span><br>
<span class="quotelev2">&gt;&gt; when _POSIX_SOURCE, so the sysctl() prototype cannot be correct. I tend
</span><br>
<span class="quotelev2">&gt;&gt; to think you should remove _POSIX_SOURCE on this FreeBSD release.
</span><br>
<span class="quotelev1">&gt; Is this for any version of POSIX_SOURCE?  Just giving _POSIX_SOURCE
</span><br>
<span class="quotelev1">&gt; falls back to POSIX.1-1990.  Most times we (mpich) only care about
</span><br>
<span class="quotelev1">&gt; POSIX.1-2001 (given by -D_POSIX_C_SOURCE=200112L).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It seems to fail the same on FreeBSD 9.1 with -D_POSIX_C_SOURCE=200112L
<br>
<p>By the way, regarding the AM_CONDITIONAL issue, you should remove the
<br>
relevant &quot;if&quot; section from src/Makefile.am for now. You likely don't
<br>
want to use plugins anyway? I still don't have a complete solution,
<br>
there will be another mail later to discuss this.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3656.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5566)"</a>
<li><strong>In reply to:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3661.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3661.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
