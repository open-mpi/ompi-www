<?
$subject_val = "Re: [OMPI devel] bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 21:02:18 2009" -->
<!-- isoreceived="20090925010218" -->
<!-- sent="Thu, 24 Sep 2009 18:03:18 -0700" -->
<!-- isosent="20090925010318" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug?" -->
<!-- id="4ABC16D6.8040703_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B0D5BBD8-3891-4161-B776-520E08A083F1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 21:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6891.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>In reply to:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6891.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Reply:</strong> <a href="6891.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Reply:</strong> <a href="6892.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun -V
<br>
mpirun (Open MPI) 1.4a1-1
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sigh - you really need to remember to tell us what version you're  
</span><br>
<span class="quotelev1">&gt; talking about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2009, at 5:39 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume this is a bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 2 -slot-list 1,3 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [[455,0],0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; odls_base_default_fns.c at line 875
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] Failing at address: 0x4c
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 0] [0xffffe600]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 1] /home/eugene/CTperf/test-CT821/paff_bug2/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; myopt/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x78a)  
</span><br>
<span class="quotelev2">&gt;&gt; [0xf7f8c206]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 2] /home/eugene/CTperf/test-CT821/paff_bug2/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; myopt/lib/openmpi/mca_plm_rsh.so [0xf7d13564]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 3] mpirun [0x804b49d]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 4] mpirun [0x804a456]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 5] /lib/libc.so.6(__libc_start_main+0xdc) [0xf7d348ac]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] [ 6] mpirun(orte_daemon_recv+0x201) [0x804a3b1]
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:10337] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6891.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>In reply to:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6891.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Reply:</strong> <a href="6891.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Reply:</strong> <a href="6892.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
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
