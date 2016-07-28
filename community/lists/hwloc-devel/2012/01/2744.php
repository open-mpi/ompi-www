<?
$subject_val = "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 22:13:07 2012" -->
<!-- isoreceived="20120201031307" -->
<!-- sent="Tue, 31 Jan 2012 19:12:46 -0800" -->
<!-- isosent="20120201031246" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7" -->
<!-- id="4F28ADAE.1050606_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F289BCC.6040408_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 22:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem I reported below also exists in hwloc-1.4.1.
<br>
Additionally, I can reproduce the SEGVs with xlc which Chris Samuel 
<br>
reported in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php</a>
<br>
<p>-Paul
<br>
<p>On 1/31/2012 5:56 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I see:
</span><br>
<span class="quotelev2">&gt;&gt; lt-linux-libnuma: 
</span><br>
<span class="quotelev2">&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-gcc//hwloc-1.3.1/tests/linux-libnuma.c:53: 
</span><br>
<span class="quotelev2">&gt;&gt; main: Assertion `hwloc_bitmap_isequal(set, set2)' failed.
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 5: 21415 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've reproduced that failure with 4 different compilers (3 gcc's and 
</span><br>
<span class="quotelev1">&gt; an xlc).
</span><br>
<span class="quotelev1">&gt; The xlc-built hwloc-1.3.1 also fails an additional test:
</span><br>
<span class="quotelev2">&gt;&gt; lt-glibc-sched: 
</span><br>
<span class="quotelev2">&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-xlc-11.1//hwloc-1.3.1/tests/glibc-sched.c:43: 
</span><br>
<span class="quotelev2">&gt;&gt; main: Assertion `!err' failed.
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 5:  7077 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The contents of /proc/cpuinfo are:
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev2">&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev2">&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [30 more of the same]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 31
</span><br>
<span class="quotelev2">&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev2">&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev2">&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; timebase        : 512000000
</span><br>
<span class="quotelev2">&gt;&gt; platform        : pSeries
</span><br>
<span class="quotelev2">&gt;&gt; model           : IBM,8233-E8B
</span><br>
<span class="quotelev2">&gt;&gt; machine         : CHRP IBM,8233-E8B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know of any other h/w or s/w info I can report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
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
