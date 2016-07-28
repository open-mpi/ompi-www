<?
$subject_val = "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 09:30:53 2009" -->
<!-- isoreceived="20090914133053" -->
<!-- sent="Mon, 14 Sep 2009 09:31:01 -0400" -->
<!-- isosent="20090914133101" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)" -->
<!-- id="74C6D789-F881-477C-AF75-6F4E31D908FD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="816078.11906.qm_at_web28308.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 09:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10642.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>In reply to:</strong> <a href="10601.php">Jean Potsam: "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The configuration looks fine, but from the stack it seems that the  
<br>
segv is coming from an invalid free in BLCR (which seems odd to me).
<br>
<p>Are you able to get a gdb backtrace from a core file generated from  
<br>
this run? That would provide a bit more detail on where things are  
<br>
going wrong.
<br>
<p>What version of BLCR are you running? Does BLCR work with sequential  
<br>
applications?
<br>
<p>Additionally, have you tried Open MPI 1.3.3 or the trunk to see if the  
<br>
problem happen there as well?
<br>
<p>-- Josh
<br>
<p>On Sep 9, 2009, at 1:49 PM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;                I have installed openmpi 1.3.2 in my home directory  
</span><br>
<span class="quotelev1">&gt; ( /home/jean/openmpisof/ ) and BLCR in /usr/local/blcr. I have added  
</span><br>
<span class="quotelev1">&gt; the following in the .bashrc file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/home/jean/openmpisof/bin/:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/jean/openmpisof/lib/:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/blcr/bin/:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/local/blcr/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running my application as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -mca btl ^openib -mca  
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir /tmp mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I get the following error when i try to checkpoint the  
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ######################################
</span><br>
<span class="quotelev1">&gt; [sun06:20513] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sun06:20513] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [sun06:20513] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sun06:20513] Failing at address: 0x4
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 0] [0xb7fab40c]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 1] /lib/libc.so.6(cfree+0x3b) [0xb79e468b]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 2] /usr/local/blcr/lib/libcr.so.0(cri_info_free 
</span><br>
<span class="quotelev1">&gt; +0x2a) [0xb7b1725a]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 3] /usr/local/blcr/lib/libcr.so.0 [0xb7b18c72]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 4] /lib/libc.so.6(__libc_fork+0x186) [0xb7a0d266]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 5] /lib/libpthread.so.0(fork+0x14) [0xb7ac4b24]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 6] /home/jean/openmpisof/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7bc2a01]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 7] /home/jean/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_crs_blcr_checkpoint+0x187) [0xb7bc231b]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 8] /home/jean/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_cr_inc_core+0xc3) [0xb7b8eb1d]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [ 9] /home/jean/openmpisof/lib/libopen-rte.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7cab40f]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [10] /home/jean/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_cr_test_if_checkpoint_ready+0x129) [0xb7b8ea2a]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [11] /home/jean/openmpisof/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7b8f0f8]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [12] /lib/libpthread.so.0 [0xb7abbf3b]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] [13] /lib/libc.so.6(clone+0x5e) [0xb7a42bee]
</span><br>
<span class="quotelev1">&gt; [sun06:20513] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; #######################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be very appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10642.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>In reply to:</strong> <a href="10601.php">Jean Potsam: "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
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
