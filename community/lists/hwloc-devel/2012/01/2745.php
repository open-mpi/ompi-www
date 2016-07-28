<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 22:29:36 2012" -->
<!-- isoreceived="20120201032936" -->
<!-- sent="Tue, 31 Jan 2012 19:29:14 -0800" -->
<!-- isosent="20120201032914" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7" -->
<!-- id="4F28B18A.3050008_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28ADAE.1050606_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 22:29:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2759.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2759.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This node is an IBM &quot;Power 750 Express server&quot;, described in detail at
<br>
<a href="http://www.redbooks.ibm.com/redpapers/pdfs/redp4638.pdf">http://www.redbooks.ibm.com/redpapers/pdfs/redp4638.pdf</a>
<br>
<p>Notably it is a quad-socket chassis which can take 6-core or 8-core 
<br>
processors.
<br>
However, lstopo is reporting 8 sockets of 4-cores each.
<br>
This discrepancy lead me to recall the following from an email sent to 
<br>
me by a colleague:
<br>
<span class="quotelev1">&gt; A surprise
</span><br>
<span class="quotelev1">&gt; to me is that the login nodes provide the appearance of having 32
</span><br>
<span class="quotelev1">&gt; cpu's, but those are in fact only 8 cores with 4 hyper-threads,
</span><br>
<span class="quotelev1">&gt; and they are in fact VM's on top of one socket of a compute node.
</span><br>
<p>So, I am not really certain what I should expect lstopo to report.
<br>
I suppose it is accurately reporting to me the virtual node's configuration.
<br>
<p>I bring this up because it may very well be related to the assertion 
<br>
failures.
<br>
My guess here being that some part of hwloc has seen past the &quot;virtual&quot; 
<br>
to see the &quot;physical&quot; and the assertion failure reflects the resulting 
<br>
inconsistency.  But that is just a guess.  Let me know how I might help 
<br>
debug this failure.
<br>
<p>-Paul
<br>
<p>On 1/31/2012 7:12 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; The problem I reported below also exists in hwloc-1.4.1.
</span><br>
<span class="quotelev1">&gt; Additionally, I can reproduce the SEGVs with xlc which Chris Samuel 
</span><br>
<span class="quotelev1">&gt; reported in
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 5:56 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt-linux-libnuma: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-gcc//hwloc-1.3.1/tests/linux-libnuma.c:53: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main: Assertion `hwloc_bitmap_isequal(set, set2)' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 5: 21415 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've reproduced that failure with 4 different compilers (3 gcc's and 
</span><br>
<span class="quotelev2">&gt;&gt; an xlc).
</span><br>
<span class="quotelev2">&gt;&gt; The xlc-built hwloc-1.3.1 also fails an additional test:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt-glibc-sched: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-xlc-11.1//hwloc-1.3.1/tests/glibc-sched.c:43: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main: Assertion `!err' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 5:  7077 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The contents of /proc/cpuinfo are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor       : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [30 more of the same]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor       : 31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timebase        : 512000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platform        : pSeries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model           : IBM,8233-E8B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine         : CHRP IBM,8233-E8B
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know of any other h/w or s/w info I can report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2759.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2759.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
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
