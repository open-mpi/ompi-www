<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 02:51:03 2011" -->
<!-- isoreceived="20111214075103" -->
<!-- sent="Wed, 14 Dec 2011 08:50:58 +0100" -->
<!-- isosent="20111214075058" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure" -->
<!-- id="4EE85562.7060209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE8503F.7030902_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 02:50:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="10100.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>Reply:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/12/2011 08:29, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; I've attempted the build on MacOS 10.4 (Tiger) on x86-64, I hit the
</span><br>
<span class="quotelev1">&gt; same hwloc issue I've encountered on {Free,Open,Net}BSD.
</span><br>
<span class="quotelev1">&gt; The build fails with
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt; _opal_hwloc122_hwloc_backend_sysfs_exit
</span><br>
<span class="quotelev2">&gt;&gt; _opal_hwloc122_hwloc_backend_sysfs_init
</span><br>
<span class="quotelev2">&gt;&gt; _opal_hwloc122_hwloc_look_linux
</span><br>
<span class="quotelev2">&gt;&gt; _opal_hwloc122_hwloc_set_linux_hooks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>At least FreeBSD and darwin should be detected by configure so the big
<br>
configure warning should not appear there.
<br>
<p>OpenBSD and NetBSD are not detected explicitly IIRC, so the warning is
<br>
expected there.
<br>
<p>But none of these cases should cause the Linux code to be built anyway
<br>
(the above symbols), so it seems to me that something is broken in the
<br>
way OMPI uses hwloc's configure.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="10100.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>Reply:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
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
