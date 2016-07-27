<?
$subject_val = "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 20 03:53:37 2013" -->
<!-- isoreceived="20130420075337" -->
<!-- sent="Sat, 20 Apr 2013 09:53:31 +0200" -->
<!-- isosent="20130420075331" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compiling hwloc 1.7 with NV support" -->
<!-- id="5172497B.9090500_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5171D4AF.6070503_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Compiling hwloc 1.7 with NV support<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-20 03:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3632.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5552)"</a>
<li><strong>Previous message:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/04/2013 01:35, Brice Goglin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Le 20/04/2013 01:11, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Le 20/04/2013 00:56, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology-gl.c: In function 'hwloc_gl_query_devices':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology-gl.c:91:41: error: 'NV_CTRL_PCI_DOMAIN' undeclared (first use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology-gl.c:91:41: note: each undeclared identifier is reported only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; once for each function it appears in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [topology-gl.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/tmp/hwloc-1.7/src'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/tmp/hwloc-1.7/src'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed, there is no NV_CTRL_PCI_DOMAIN MACRO defined in NVCtrl header
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files:
</span><br>
<span class="quotelev2">&gt;&gt; Old CUDA versions didn't have a similar domain macro either, maybe
</span><br>
<span class="quotelev2">&gt;&gt; NVIDIA did the same mistake with old nvml.
</span><br>
<span class="quotelev1">&gt; I meant nvctrl, not nvml.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, it was added in release 190.18.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I just fixed this in trunk and v1.7 branch after testing for real. We
<br>
also needed to remove a useless duplicated call to CTRL_PCI_DOMAIN. See
<br>
the attached patch.
<br>
Thanks for the report
<br>
Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3631/nvctrl.patch">nvctrl.patch</a>
</ul>
<!-- attachment="nvctrl.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3632.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5552)"</a>
<li><strong>Previous message:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
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
