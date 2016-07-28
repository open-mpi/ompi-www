<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 04:53:19 2012" -->
<!-- isoreceived="20120202095319" -->
<!-- sent="Thu, 02 Feb 2012 10:53:14 +0100" -->
<!-- isosent="20120202095314" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7" -->
<!-- id="4F2A5D0A.6030608_at_inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 04:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2791.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2791.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/02/2012 04:12, Paul H. Hargrove a &#233;crit :
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
<p>I don't think I will be able to reproduce this one here unfortunately.
<br>
This machine has three NUMA nodes: #0 has many CPUs. #1 doesn't exist.
<br>
#2 and #3 have memory with CPUs. I can't emulate libnuma in such an
<br>
environment. So debugging the linux-libnuma tests is hard.
<br>
<p>Can you the following code just above this assert in
<br>
tests/linux-libnuma.c:53 and report what it says ?
<br>
<p>{ char *a, *b;
<br>
&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;a, set);
<br>
&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;b, set2);
<br>
&nbsp;&nbsp;printf(&quot;got %s instead of %s\n&quot;, b, a);
<br>
}
<br>
<p><p><span class="quotelev2">&gt;&gt;
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
<p>This one should go away once sched_setaffinity vs XLC problems are fixed.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2791.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2791.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
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
