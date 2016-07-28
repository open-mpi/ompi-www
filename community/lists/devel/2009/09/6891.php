<?
$subject_val = "Re: [OMPI devel] bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 21:07:42 2009" -->
<!-- isoreceived="20090925010742" -->
<!-- sent="Thu, 24 Sep 2009 19:07:34 -0600" -->
<!-- isosent="20090925010734" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug?" -->
<!-- id="231266C4-3980-4E9B-A824-D50ED5B6C4A0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ABC16D6.8040703_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 21:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6892.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6890.php">Eugene Loh: "Re: [OMPI devel] bug?"</a>
<li><strong>In reply to:</strong> <a href="6890.php">Eugene Loh: "Re: [OMPI devel] bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6892.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In that case, since you ask...it is not a bug - it is definitely a  
<br>
feature.
<br>
<p>On Sep 24, 2009, at 7:03 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4a1-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sigh - you really need to remember to tell us what version you're   
</span><br>
<span class="quotelev2">&gt;&gt; talking about.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2009, at 5:39 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume this is a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 2 -slot-list 1,3 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [[455,0],0] ORTE_ERROR_LOG: Not found in file base/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_default_fns.c at line 875
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] Failing at address: 0x4c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 0] [0xffffe600]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 1] /home/eugene/CTperf/test-CT821/paff_bug2/src/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myopt/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x78a)   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xf7f8c206]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 2] /home/eugene/CTperf/test-CT821/paff_bug2/src/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myopt/lib/openmpi/mca_plm_rsh.so [0xf7d13564]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 3] mpirun [0x804b49d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 4] mpirun [0x804a456]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 5] /lib/libc.so.6(__libc_start_main+0xdc)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xf7d348ac]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] [ 6] mpirun(orte_daemon_recv+0x201) [0x804a3b1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:10337] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6892.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6890.php">Eugene Loh: "Re: [OMPI devel] bug?"</a>
<li><strong>In reply to:</strong> <a href="6890.php">Eugene Loh: "Re: [OMPI devel] bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6892.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
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
