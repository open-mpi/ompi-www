<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 20:56:49 2012" -->
<!-- isoreceived="20120201015649" -->
<!-- sent="Tue, 31 Jan 2012 17:56:28 -0800" -->
<!-- isosent="20120201015628" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F289BCC.6040408_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 20:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2734.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4224)"</a>
<li><strong>Previous message:</strong> <a href="2732.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I see:
<br>
<span class="quotelev1">&gt; lt-linux-libnuma: 
</span><br>
<span class="quotelev1">&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-gcc//hwloc-1.3.1/tests/linux-libnuma.c:53: 
</span><br>
<span class="quotelev1">&gt; main: Assertion `hwloc_bitmap_isequal(set, set2)' failed.
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 5: 21415 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: linux-libnuma
</span><br>
<p>I've reproduced that failure with 4 different compilers (3 gcc's and an 
<br>
xlc).
<br>
The xlc-built hwloc-1.3.1 also fails an additional test:
<br>
<span class="quotelev1">&gt; lt-glibc-sched: 
</span><br>
<span class="quotelev1">&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-xlc-11.1//hwloc-1.3.1/tests/glibc-sched.c:43: 
</span><br>
<span class="quotelev1">&gt; main: Assertion `!err' failed.
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 5:  7077 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: glibc-sched
</span><br>
<p><p>The contents of /proc/cpuinfo are:
<br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev1">&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev1">&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [30 more of the same]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 31
</span><br>
<span class="quotelev1">&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev1">&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev1">&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; timebase        : 512000000
</span><br>
<span class="quotelev1">&gt; platform        : pSeries
</span><br>
<span class="quotelev1">&gt; model           : IBM,8233-E8B
</span><br>
<span class="quotelev1">&gt; machine         : CHRP IBM,8233-E8B
</span><br>
<p>Let me know of any other h/w or s/w info I can report.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2734.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4224)"</a>
<li><strong>Previous message:</strong> <a href="2732.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
