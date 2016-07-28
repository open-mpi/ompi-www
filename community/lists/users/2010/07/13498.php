<?
$subject_val = "Re: [OMPI users] Dynamic algorithms problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 10:03:15 2010" -->
<!-- isoreceived="20100707140315" -->
<!-- sent="Wed, 7 Jul 2010 10:03:22 -0400" -->
<!-- isosent="20100707140322" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic algorithms problem" -->
<!-- id="4F51B2AF-A78A-4FD9-9628-9462CD5F0575_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinM_ZoGkTrAto1P3g9MfsKKFHtq4ctnMK424IfY_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic algorithms problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 10:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13499.php">Olivier Marsden: "[OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13497.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13469.php">Gabriele Fatigati: "[OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Reply:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do believe that this is a bug.  I *think* that the included patch will fix it for you, but George is on vacation until tomorrow (and I don't know how long it'll take him to slog through his backlog :-( ).
<br>
<p>Can you try the following patch and see if it fixes it for you?
<br>
<p>Index: ompi/mca/coll/tuned/coll_tuned_module.c
<br>
===================================================================
<br>
--- ompi/mca/coll/tuned/coll_tuned_module.c	(revision 23360)
<br>
+++ ompi/mca/coll/tuned/coll_tuned_module.c	(working copy)
<br>
@@ -165,6 +165,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{                                                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int need_dynamic_decision = 0;                                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_forced_getvalues( (TYPE), &amp;((DATA)-&gt;user_forced[(TYPE)]) ); \
<br>
+        (DATA)-&gt;com_rules[(TYPE)] = NULL;                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 != (DATA)-&gt;user_forced[(TYPE)].algorithm ) {              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need_dynamic_decision = 1;                                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXECUTE;                                                    \
<br>
<p><p><p><p><p>On Jul 4, 2010, at 8:12 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI user,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'm trying to use collective dynamic rules with OpenMPi 1.4.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_coll_tuned_bcast_algorithm=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My target is to test Bcast peformances using SKaMPI benchmark changing dynamic rules. But at runtime i get the follow error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node003:05871] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node003:05871] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node003:05871] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node003:05871] Failing at address: 0xcc
</span><br>
<span class="quotelev1">&gt; [node003:05872] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node003:05872] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node003:05872] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node003:05872] Failing at address: 0xcc
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 0] /lib64/libpthread.so.0 [0x3be160e4c0]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 1] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0 [0x2accf7210145]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 2] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0 [0x2accf720ef16]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 3] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0 [0x2accf721fec9]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 4] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0(MPI_Bcast+0x171) [0x2accf71b81e1]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 5] ./skampi [0x409566]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3be0e1d974]
</span><br>
<span class="quotelev1">&gt; [node003:05871] [ 7] ./skampi [0x404e19]
</span><br>
<span class="quotelev1">&gt; [node003:05871] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 0] /lib64/libpthread.so.0 [0x3be160e4c0]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 1] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0 [0x2b1959eb3145]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 2] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0 [0x2b1959eb1f16]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 3] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0 [0x2b1959ec2ec9]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 4] /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0(MPI_Bcast+0x171) [0x2b1959e5b1e1]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 5] ./skampi [0x409566]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3be0e1d974]
</span><br>
<span class="quotelev1">&gt; [node003:05872] [ 7] ./skampi [0x404e19]
</span><br>
<span class="quotelev1">&gt; [node003:05872] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 9 with PID 5872 on node node003ib0 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same using other Bcast algorithm. Disabling dynamic rules, it works well. Maybe i'm using some wrong parameter setup?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13499.php">Olivier Marsden: "[OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Previous message:</strong> <a href="13497.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13469.php">Gabriele Fatigati: "[OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Reply:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
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
