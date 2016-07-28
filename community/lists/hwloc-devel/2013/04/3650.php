<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 01:12:59 2013" -->
<!-- isoreceived="20130429051259" -->
<!-- sent="Mon, 29 Apr 2013 07:12:53 +0200" -->
<!-- isosent="20130429051253" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517E0155.80306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517DEEBA.9080105_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2013-04-29 01:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3649.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3649.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/04/2013 05:53, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are seeing two errors with hwloc-1.7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The hwloc embedded in mpich was failing to build on FreeBSD with a
</span><br>
<span class="quotelev1">&gt; strict build.  I was able to reproduce the failure with hwloc-1.7 by
</span><br>
<span class="quotelev1">&gt; setting CFLAGS=-D_POSIX_SOURCE (the error shows up even with later
</span><br>
<span class="quotelev1">&gt; versions of POSIX enabled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology.c: In function 'hwloc_fallback_nbprocessors':
</span><br>
<span class="quotelev1">&gt; topology.c:146: error: conflicting types for 'n'
</span><br>
<span class="quotelev1">&gt; topology.c:131: error: previous declaration of 'n' was here
</span><br>
<p>Hello,
<br>
<p>I fixed the above one but I am getting many other warnings and another
<br>
error on FreeBSD 9.1:
<br>
<p>/usr/include/sys/sysctl.h:799: error: expected declaration specifiers or '...' before 'u_int'
<br>
topology-freebsd.c: In function 'hwloc_freebsd_node_meminfo_info':
<br>
topology-freebsd.c:173: warning: passing argument 2 of 'sysctl' makes pointer from integer without a cast
<br>
topology-freebsd.c:173: warning: passing argument 5 of 'sysctl' makes integer from pointer without a cast
<br>
topology-freebsd.c:173: error: too many arguments to function 'sysctl'
<br>
<p><p>I wonder if this CFLAGS=-D_POSIX_SOURCE is supported by FreeBSD headers.
<br>
<p><span class="quotelev1">&gt; 2. The second error shows up with hwloc in embedded mode.  In hydra, we
</span><br>
<span class="quotelev1">&gt; setup hwloc in embedded mode using HWLOC_SETUP_CORE.  autoreconf on this
</span><br>
<span class="quotelev1">&gt; fails as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tools/topo/hwloc/hwloc/src/Makefile.am:211: error: HWLOC_LTDL_INCLUDED
</span><br>
<span class="quotelev1">&gt; does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; autoreconf: automake failed with exit status: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem seems to be that this conditional is defined in hwloc's
</span><br>
<span class="quotelev1">&gt; configure.ac directly instead of in the SETUP_CORE macro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right, the plugin configury is currently outside of the SETUP macros. I
<br>
was waiting for Jeff's feedback about all this but it never came :)
<br>
<p>I'll look at this later today.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3649.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3649.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3651.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
