<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 16:59:46 2012" -->
<!-- isoreceived="20120201215946" -->
<!-- sent="Wed, 01 Feb 2012 22:59:41 +0100" -->
<!-- isosent="20120201215941" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7" -->
<!-- id="4F29B5CD.9060707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F299B69.5090201_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-01 16:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2768.php">Paul H. Hargrove: "[hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The topology of the virtual node is a bit unusual, I am reproducing a
<br>
similar setup with Linux cgroups. I already found some problems there,
<br>
no idea if they are related to yours, we'll see when I'll have some patches.
<br>
<p>Brice
<br>
<p><p><p>Le 01/02/2012 21:07, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; Responses interspersed w/ your questions, below.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/1/2012 6:13 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you run hwloc-gather-topology and send the resulting tarball and
</span><br>
<span class="quotelev2">&gt;&gt; output ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've seen some powerpc machines where the old kernel didn't say much
</span><br>
<span class="quotelev2">&gt;&gt; about the topology, so your 8 cores with 4 threads appeared as 32 things
</span><br>
<span class="quotelev2">&gt;&gt; without much details about their organization. I assume you can't
</span><br>
<span class="quotelev2">&gt;&gt; upgrade the kernel. Which kernel is this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am told the VM spans 1 socket of 8 cores, and each core has 4 threads.
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo doesn't show any &quot;structure&quot;.
</span><br>
<span class="quotelev1">&gt; So, when lstopo reports the machine as (8 sockets X 1 core  X 4
</span><br>
<span class="quotelev1">&gt; threads), it was probably as close as it could be w/o the &quot;missing&quot;
</span><br>
<span class="quotelev1">&gt; information.  [note that I MISreported lstopo's output as (8 sockets X
</span><br>
<span class="quotelev1">&gt; 4 cores) in my previous email].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a guest on this machine and can't change the kernel nor add
</span><br>
<span class="quotelev1">&gt; accounts.
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux biou2.rice.edu 2.6.32-131.6.1.el6.ppc64 #1 SMP Tue Sep 13
</span><br>
<span class="quotelev2">&gt;&gt; 15:16:45 CDT 2011 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; Which isn't really all that old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes the virtual node thing could also make things more wrong. What kind
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;virtualization&quot; is this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know for certain, but would guess they are using the stuff
</span><br>
<span class="quotelev1">&gt; described in Chapter 3 of the pdf I gave the URL for.
</span><br>
<span class="quotelev1">&gt; I don't think RHEL6 has any other virtualization support for PPC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 01/02/2012 04:29, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This node is an IBM &quot;Power 750 Express server&quot;, described in detail at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.redbooks.ibm.com/redpapers/pdfs/redp4638.pdf">http://www.redbooks.ibm.com/redpapers/pdfs/redp4638.pdf</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Notably it is a quad-socket chassis which can take 6-core or 8-core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, lstopo is reporting 8 sockets of 4-cores each.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This discrepancy lead me to recall the following from an email sent to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me by a colleague:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A surprise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to me is that the login nodes provide the appearance of having 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu's, but those are in fact only 8 cores with 4 hyper-threads,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and they are in fact VM's on top of one socket of a compute node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I am not really certain what I should expect lstopo to report.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suppose it is accurately reporting to me the virtual node's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I bring this up because it may very well be related to the assertion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess here being that some part of hwloc has seen past the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;virtual&quot; to see the &quot;physical&quot; and the assertion failure reflects the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resulting inconsistency.  But that is just a guess.  Let me know how I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might help debug this failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/31/2012 7:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem I reported below also exists in hwloc-1.4.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Additionally, I can reproduce the SEGVs with xlc which Chris Samuel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reported in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1/31/2012 5:56 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lt-linux-libnuma:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-gcc//hwloc-1.3.1/tests/linux-libnuma.c:53:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; main: Assertion `hwloc_bitmap_isequal(set, set2)' failed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 5: 21415 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've reproduced that failure with 4 different compilers (3 gcc's and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an xlc).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The xlc-built hwloc-1.3.1 also fails an additional test:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lt-glibc-sched:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-xlc-11.1//hwloc-1.3.1/tests/glibc-sched.c:43:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; main: Assertion `!err' failed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 5:  7077 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The contents of /proc/cpuinfo are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processor       : 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [30 more of the same]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processor       : 31
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cpu             : POWER7 (architected), altivec supported
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clock           : 3550.000000MHz
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; revision        : 2.0 (pvr 003f 0200)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; timebase        : 512000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; platform        : pSeries
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; model           : IBM,8233-E8B
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; machine         : CHRP IBM,8233-E8B
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me know of any other h/w or s/w info I can report.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2768.php">Paul H. Hargrove: "[hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
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
