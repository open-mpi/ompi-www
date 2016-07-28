<?
$subject_val = "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 08:27:42 2009" -->
<!-- isoreceived="20090428122742" -->
<!-- sent="Tue, 28 Apr 2009 08:27:30 -0400" -->
<!-- isosent="20090428122730" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1" -->
<!-- id="68EFE85C-B3F6-471C-88E1-B70CA089FD27_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF7471D0CE.8995B857-ON652575A6.003E36F9-652575A6.003EC591_at_crlindia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 08:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9115.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1212, Issue 3, Message: 2"</a>
<li><strong>Previous message:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2009, at 7:27 AM, neeraj_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks for your reply. Actually the reason for hang was  
</span><br>
<span class="quotelev1">&gt; missing
</span><br>
<span class="quotelev1">&gt; blcr library in LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         After setting it right, checkpoint was working but as you
</span><br>
<span class="quotelev1">&gt; mentioned before, datatype error is coming along with, and hence  
</span><br>
<span class="quotelev1">&gt; restart
</span><br>
<span class="quotelev1">&gt; is not working.
</span><br>
<p>Thanks for letting me know. I was worried that I was missing  
<br>
something since I could not reproduce the hang.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a)      The errors coming is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; [n0:12674] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:12674] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:12674] *** MPI_ERR_BUFFER: invalid buffer pointer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:12674] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:12674] crcp:bkmrk: drain_message_copy_remove(): Datatype copy  
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt; (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:12674] crcp:bkmrk: drain_check_recv(): Datatype copy failed (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:12674] crcp:bkmrk: pml_recv(): Failed trying to find a drained
</span><br>
<span class="quotelev1">&gt; message. ---------- This should never happen ----------
</span><br>
<span class="quotelev1">&gt; (crcp_bkmrk_pml.c:2411)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yeah this is the error that I fixed yesterday. The next release of  
<br>
Open MPI will have this fix in it. If you need it before then you can  
<br>
download the current trunk or (soon) the v1.3 branch from SVN. The  
<br>
following ticket will let you know when the patch is committed to the  
<br>
v1.3 branch:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1899">https://svn.open-mpi.org/trac/ompi/ticket/1899</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b)      The other error i am getting while checkpointing is  
</span><br>
<span class="quotelev1">&gt; segmentation
</span><br>
<span class="quotelev1">&gt; fault. This is independent of the previous error and the scenario  
</span><br>
<span class="quotelev1">&gt; is bit
</span><br>
<span class="quotelev1">&gt; different.
</span><br>
<span class="quotelev1">&gt;         I have two nodes, one with infiniband and other with TCP. I am
</span><br>
<span class="quotelev1">&gt; running simple mpirun with no option of selecting/deselecting btl's
</span><br>
<span class="quotelev1">&gt; leaving openmpi to decide at runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The error i am getting is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; [n5:29211] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 1] /usr/lib64/libibverbs.so.1(ibv_destroy_srq+0)
</span><br>
<span class="quotelev1">&gt; [0x3496108fb0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2a979369ed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2a979376b5]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; [0x2a97186a33]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2a96f68e5d]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_crcpw.so
</span><br>
<span class="quotelev1">&gt; [0x2a96e638d5]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(ompi_cr_coord+0x127)
</span><br>
<span class="quotelev1">&gt; [0x2a95591127]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_cr_inc_core+0x33)
</span><br>
<span class="quotelev1">&gt; [0x2a95858403]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_snapc_full.so
</span><br>
<span class="quotelev1">&gt; [0x2a965432b1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [10]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_cr_test_if_checkpoint_ready+0x52)
</span><br>
<span class="quotelev1">&gt; [0x2a95857662]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [11]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2a9558e13b]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [12]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2a98421c12]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [13]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2a9842a00e]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [14]
</span><br>
<span class="quotelev1">&gt; /home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(PMPI_Barrier+0x140)
</span><br>
<span class="quotelev1">&gt; [0x2a955a4af0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [15] ./a.out(main+0x64) [0x4009bc]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [16] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x399e11c3fb]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] [17] ./a.out [0x4008ca]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n5:29211] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 29211 on node n5 exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Soon, this error goes away, if i force mpirun to use tcp for
</span><br>
<span class="quotelev1">&gt; communication using mca parameters and then error a) starts coming  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; is related with some datatype handling during checkpoint.
</span><br>
<p>I believe Pasha fixed the segfault in r20872. However that was after  
<br>
the release of v1.3.1, but should be in v1.3.2. Can you try the  
<br>
v1.3.2 release or the current SVN to confirm that this fixes the  
<br>
segfault problem.
<br>
<p>Best,
<br>
Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neeraj Chourasia
</span><br>
<span class="quotelev1">&gt; Member of Technical Staff
</span><br>
<span class="quotelev1">&gt; Computational Research Laboratories Limited
</span><br>
<span class="quotelev1">&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev1">&gt; P: +91.9225520634
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
<span class="quotelev1">&gt; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 04/28/2009 12:34 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still have not been able to reproduce the hang, but I'm still
</span><br>
<span class="quotelev1">&gt; looking into it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did commit a fix for the datatype copy error that I mentioned
</span><br>
<span class="quotelev1">&gt; (r21080 in the Open MPI trunk, and it is in the pipeline for v1.3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you put in a print statement before MPI_Finalize, then try the
</span><br>
<span class="quotelev1">&gt; program again? I am wondering if the problem is not with the
</span><br>
<span class="quotelev1">&gt; MPI_Barrier, but MPI_Finalize. I wonder if one (or both) of the
</span><br>
<span class="quotelev1">&gt; processes enter MPI_Finalize while a checkpoint is occurring.
</span><br>
<span class="quotelev1">&gt; Unfortunately, I have not tested the MPI_Finalize scenario in a long
</span><br>
<span class="quotelev1">&gt; time, but will put that on my todo list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2009, at 9:48 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the long delay to respond.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is a bit odd that the hang does not occur when running on only
</span><br>
<span class="quotelev2">&gt;&gt; one host. I suspect that is more due to timing than anything else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not able to reproduce the hang at the moment, but I do get an
</span><br>
<span class="quotelev2">&gt;&gt; occasional datatype copy error which could be symptomatic of a
</span><br>
<span class="quotelev2">&gt;&gt; related problem. I'll dig into this a bit more this week and let you
</span><br>
<span class="quotelev2">&gt;&gt; know when I have a fix and if I can reproduce the hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the bug report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2009, at 4:56 AM, neeraj_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I am trying to checkpoint a test application using openmpi-1.3.1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but fails to do so, when run multiple process on different nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checkpointing runs fine, if process is running on the same node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; along with mpirun process. But the moment i launch MPI process from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different node, it hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ex.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun -np 2 ./test (will checkpoint fine using ompi-checkpoint -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v &lt;mpirun_pid&gt; )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 2 -H host1 ./test (Checkpointing will hang)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Similarly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 2 -H localhost,host1 ./test would still hangs while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpointing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please find the output which comes while checkpointing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596]       PID 1514
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596]       Connected to Mpirun [[11946,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: notify_hnp: Contact Head Node Process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PID 1514
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: notify_hnp: Requested a checkpoint of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobid [INVALID]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596]                 Requested - Global Snapshot Reference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596]                   Pending - Global Snapshot Reference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n0:01596]                   Running - Global Snapshot Reference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note: It hangs here
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************************---------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Command used to launch program is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.3.1/install/bin/mpirun -np 2 -H n5 -am ft-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable-cr --mca btl tcp,self a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the dummy program is pretty simple as follows
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LIMIT 10000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main(int argc,char ** argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            int my_rank; /* Rank of process */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            int np; /* Number of process */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MPI_Comm_rank(MPI_COMM_WORLD,&amp;my_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MPI_Comm_size(MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for(i=0; i&lt;=LIMIT; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     printf(&quot;n HELLO %d&quot;,i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        //sleep(10);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know, what could be the error. I feel there is the error in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI process coordination.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neeraj Chourasia
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Member of Technical Staff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computational Research Laboratories Limited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P: +91.9890003757
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====-----=====-----===== Notice: The information contained in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail message and/or attachments to it may contain confidential or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; privileged information. If you are not the intended recipient, any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dissemination, use, review, distribution, printing or copying of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the information contained in this e-mail message and/or attachments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to it are strictly prohibited. If you have received this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication in error, please notify us by reply e-mail or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; telephone and immediately and permanently delete the message and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any attachments. Internet communications cannot be guaranteed to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timely, secure, error or virus-free. The sender does not accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; liability for any errors or omissions.Thank you =====-----=====-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====-----=====-----=====
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice: The information contained in this e-mail
</span><br>
<span class="quotelev1">&gt; message and/or attachments to it may contain
</span><br>
<span class="quotelev1">&gt; confidential or privileged information. If you are
</span><br>
<span class="quotelev1">&gt; not the intended recipient, any dissemination, use,
</span><br>
<span class="quotelev1">&gt; review, distribution, printing or copying of the
</span><br>
<span class="quotelev1">&gt; information contained in this e-mail message
</span><br>
<span class="quotelev1">&gt; and/or attachments to it are strictly prohibited. If
</span><br>
<span class="quotelev1">&gt; you have received this communication in error,
</span><br>
<span class="quotelev1">&gt; please notify us by reply e-mail or telephone and
</span><br>
<span class="quotelev1">&gt; immediately and permanently delete the message
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Internet communications cannot be guaranteed to be timely,
</span><br>
<span class="quotelev1">&gt; secure, error or virus-free. The sender does not accept liability
</span><br>
<span class="quotelev1">&gt; for any errors or omissions.Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====-----=====-----=====
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
<li><strong>Next message:</strong> <a href="9115.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1212, Issue 3, Message: 2"</a>
<li><strong>Previous message:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
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
