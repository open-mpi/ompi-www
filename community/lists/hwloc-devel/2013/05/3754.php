<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 20 10:57:13 2013" -->
<!-- isoreceived="20130520145713" -->
<!-- sent="Mon, 20 May 2013 16:57:07 +0200" -->
<!-- isosent="20130520145707" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD" -->
<!-- id="519A39C3.8000309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51986787.4020100_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-20 10:57:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3755.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5634)"</a>
<li><strong>Previous message:</strong> <a href="3753.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="3753.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied to trunk and v1.7, thanks.
<br>
Brice
<br>
<p><p>Le 19/05/2013 07:47, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a failure we noticed on FreeBSD.  I thought I reported it
</span><br>
<span class="quotelev1">&gt; earlier, but maybe not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In src/topology-freebsd.c, the definition and usage of
</span><br>
<span class="quotelev1">&gt; hwloc_freebsd_node_meminfo_info() need to be protected by both
</span><br>
<span class="quotelev1">&gt; HAVE_SYSCTL and HAVE_SYS_SYSCTL_H (currently it's only protected by
</span><br>
<span class="quotelev1">&gt; HAVE_SYSCTL).  The former provides the declaration for the function and
</span><br>
<span class="quotelev1">&gt; the latter provides the macros used within the definition of the
</span><br>
<span class="quotelev1">&gt; function (e.g., CTL_HW).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this is a small enough patch to make it into 1.7.1 GA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3755.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5634)"</a>
<li><strong>Previous message:</strong> <a href="3753.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="3753.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
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
