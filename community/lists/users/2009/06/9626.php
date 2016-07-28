<?
$subject_val = "Re: [OMPI users] Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 13:40:02 2009" -->
<!-- isoreceived="20090616174002" -->
<!-- sent="Tue, 16 Jun 2009 13:39:56 -0400" -->
<!-- isosent="20090616173956" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11)" -->
<!-- id="58DFA9CE-3F53-4362-9914-55C838A44449_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4063.42954.qm_at_web31007.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault (11)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 13:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9627.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9625.php">Josh Hursey: "Re: [OMPI users] Compiling and Building OPENMPI for checkpointing using self"</a>
<li><strong>In reply to:</strong> <a href="9619.php">Kritiraj Sajadah: "[OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the delay. I have been on travel, and just now getting  
<br>
caught up on email.)
<br>
<p>It looks like the checkpoint is corrupted. This can be caused by a  
<br>
number of things. Usually it is caused by memory corruption in the  
<br>
application that then further muddles the checkpoint generated. Are  
<br>
you able to get a stack trace from the core dump resulting from the  
<br>
segfault on restart?
<br>
<p>What do you mean by the checkpoint &quot;hangs forever just before ending&quot;?  
<br>
Do you have to CTRL-C the application, or is the checkpoint just  
<br>
taking a long time to finish?
<br>
<p>-- Josh
<br>
<p>On Jun 15, 2009, at 11:30 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;         I have installed BLCR 0.8.1 and OPENMPI 1.3 on a linux  
</span><br>
<span class="quotelev1">&gt; platform. However, when i tried checkpoiting an application, it  
</span><br>
<span class="quotelev1">&gt; hangs forever just before ending.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A chekcpoint file is generated. However, when i try restarting it, i  
</span><br>
<span class="quotelev1">&gt; get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; raj_at_sun06:~$ ompi-restart ompi_global_snapshot_22390.ckpt
</span><br>
<span class="quotelev1">&gt; [sun06:22423] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sun06:22423] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [sun06:22423] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sun06:22423] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [sun06:22423] [ 0] [0xb7fb640c]
</span><br>
<span class="quotelev1">&gt; [sun06:22423] [ 1] /usr/local/openmpi/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_crs_blcr_restart+0x103) [0xb7f76925]
</span><br>
<span class="quotelev1">&gt; [sun06:22423] [ 2] opal-restart [0x8049435]
</span><br>
<span class="quotelev1">&gt; [sun06:22423] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7d9a455]
</span><br>
<span class="quotelev1">&gt; [sun06:22423] [ 4] opal-restart [0x8049001]
</span><br>
<span class="quotelev1">&gt; [sun06:22423] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 22423 on node sun06  
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be very appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kind regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9627.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9625.php">Josh Hursey: "Re: [OMPI users] Compiling and Building OPENMPI for checkpointing using self"</a>
<li><strong>In reply to:</strong> <a href="9619.php">Kritiraj Sajadah: "[OMPI users] Segmentation fault (11)"</a>
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
