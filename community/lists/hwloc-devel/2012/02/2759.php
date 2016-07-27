<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 09:13:20 2012" -->
<!-- isoreceived="20120201141320" -->
<!-- sent="Wed, 01 Feb 2012 15:13:15 +0100" -->
<!-- isosent="20120201141315" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7" -->
<!-- id="4F29487B.5070408_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28B18A.3050008_at_lbl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 09:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you run hwloc-gather-topology and send the resulting tarball and
<br>
output ?
<br>
We've seen some powerpc machines where the old kernel didn't say much
<br>
about the topology, so your 8 cores with 4 threads appeared as 32 things
<br>
without much details about their organization. I assume you can't
<br>
upgrade the kernel. Which kernel is this?
<br>
Yes the virtual node thing could also make things more wrong. What kind
<br>
of &quot;virtualization&quot; is this?
<br>
Thanks
<br>
Brice
<br>
<p><p>Le 01/02/2012 04:29, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; This node is an IBM &quot;Power 750 Express server&quot;, described in detail at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.redbooks.ibm.com/redpapers/pdfs/redp4638.pdf">http://www.redbooks.ibm.com/redpapers/pdfs/redp4638.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notably it is a quad-socket chassis which can take 6-core or 8-core
</span><br>
<span class="quotelev1">&gt; processors.
</span><br>
<span class="quotelev1">&gt; However, lstopo is reporting 8 sockets of 4-cores each.
</span><br>
<span class="quotelev1">&gt; This discrepancy lead me to recall the following from an email sent to
</span><br>
<span class="quotelev1">&gt; me by a colleague:
</span><br>
<span class="quotelev2">&gt;&gt; A surprise
</span><br>
<span class="quotelev2">&gt;&gt; to me is that the login nodes provide the appearance of having 32
</span><br>
<span class="quotelev2">&gt;&gt; cpu's, but those are in fact only 8 cores with 4 hyper-threads,
</span><br>
<span class="quotelev2">&gt;&gt; and they are in fact VM's on top of one socket of a compute node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I am not really certain what I should expect lstopo to report.
</span><br>
<span class="quotelev1">&gt; I suppose it is accurately reporting to me the virtual node's
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I bring this up because it may very well be related to the assertion
</span><br>
<span class="quotelev1">&gt; failures.
</span><br>
<span class="quotelev1">&gt; My guess here being that some part of hwloc has seen past the
</span><br>
<span class="quotelev1">&gt; &quot;virtual&quot; to see the &quot;physical&quot; and the assertion failure reflects the
</span><br>
<span class="quotelev1">&gt; resulting inconsistency.  But that is just a guess.  Let me know how I
</span><br>
<span class="quotelev1">&gt; might help debug this failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 7:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The problem I reported below also exists in hwloc-1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, I can reproduce the SEGVs with xlc which Chris Samuel
</span><br>
<span class="quotelev2">&gt;&gt; reported in
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/31/2012 5:56 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lt-linux-libnuma:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-gcc//hwloc-1.3.1/tests/linux-libnuma.c:53:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main: Assertion `hwloc_bitmap_isequal(set, set2)' failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh: line 5: 21415 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've reproduced that failure with 4 different compilers (3 gcc's and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an xlc).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The xlc-built hwloc-1.3.1 also fails an additional test:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lt-glibc-sched:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-xlc-11.1//hwloc-1.3.1/tests/glibc-sched.c:43:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main: Assertion `!err' failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh: line 5:  7077 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The contents of /proc/cpuinfo are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor       : 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [30 more of the same]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor       : 31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timebase        : 512000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; platform        : pSeries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; model           : IBM,8233-E8B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine         : CHRP IBM,8233-E8B
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know of any other h/w or s/w info I can report.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2745.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
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
