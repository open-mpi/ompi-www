<?
$subject_val = "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 07:25:47 2009" -->
<!-- isoreceived="20090428112547" -->
<!-- sent="Tue, 28 Apr 2009 16:57:47 +0530" -->
<!-- isosent="20090428112747" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1" -->
<!-- id="OF7471D0CE.8995B857-ON652575A6.003E36F9-652575A6.003EC591_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C8C8F71-11AA-4A3F-9260-9A3C39B0E59A_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Checkpointing%20hangs%20with%20OpenMPI-1.3.1"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-04-28 07:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9114.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9114.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your reply. Actually the reason for hang was missing 
<br>
blcr library in LD_LIBRARY_PATH. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After setting it right, checkpoint was working but as you 
<br>
mentioned before, datatype error is coming along with, and hence restart 
<br>
is not working.
<br>
<p>a)      The errors coming is
<br>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
<br>
[n0:12674] *** An error occurred in MPI_Barrier
<br>
<p>[n0:12674] *** on communicator MPI_COMM_WORLD
<br>
<p>[n0:12674] *** MPI_ERR_BUFFER: invalid buffer pointer
<br>
<p>[n0:12674] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>[n0:12674] crcp:bkmrk: drain_message_copy_remove(): Datatype copy failed 
<br>
(1)
<br>
<p>[n0:12674] crcp:bkmrk: drain_check_recv(): Datatype copy failed (1)
<br>
<p>[n0:12674] crcp:bkmrk: pml_recv(): Failed trying to find a drained 
<br>
message. ---------- This should never happen ---------- 
<br>
(crcp_bkmrk_pml.c:2411)
<br>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
<br>
<p><p><p><p><p>b)      The other error i am getting while checkpointing is segmentation 
<br>
fault. This is independent of the previous error and the scenario is bit 
<br>
different. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have two nodes, one with infiniband and other with TCP. I am 
<br>
running simple mpirun with no option of selecting/deselecting btl's 
<br>
leaving openmpi to decide at runtime.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The error i am getting is as follows:
<br>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
<br>
[n5:29211] *** Process received signal ***
<br>
<p>[n5:29211] Signal: Segmentation fault (11)
<br>
<p>[n5:29211] Signal code: Address not mapped (1)
<br>
<p>[n5:29211] Failing at address: (nil)
<br>
<p>[n5:29211] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
<br>
<p>[n5:29211] [ 1] /usr/lib64/libibverbs.so.1(ibv_destroy_srq+0) 
<br>
[0x3496108fb0]
<br>
<p>[n5:29211] [ 2] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_btl_openib.so 
<br>
[0x2a979369ed]
<br>
<p>[n5:29211] [ 3] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_btl_openib.so 
<br>
[0x2a979376b5]
<br>
<p>[n5:29211] [ 4] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_bml_r2.so 
<br>
[0x2a97186a33]
<br>
<p>[n5:29211] [ 5] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_pml_ob1.so 
<br>
[0x2a96f68e5d]
<br>
<p>[n5:29211] [ 6] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_pml_crcpw.so 
<br>
[0x2a96e638d5]
<br>
<p>[n5:29211] [ 7] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libmpi.so.0(ompi_cr_coord+0x127) 
<br>
[0x2a95591127]
<br>
<p>[n5:29211] [ 8] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libopen-pal.so.0(opal_cr_inc_core+0x33) 
<br>
[0x2a95858403]
<br>
<p>[n5:29211] [ 9] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_snapc_full.so 
<br>
[0x2a965432b1]
<br>
<p>[n5:29211] [10] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libopen-pal.so.0(opal_cr_test_if_checkpoint_ready+0x52) 
<br>
[0x2a95857662]
<br>
<p>[n5:29211] [11] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libmpi.so.0 
<br>
[0x2a9558e13b]
<br>
<p>[n5:29211] [12] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_coll_tuned.so 
<br>
[0x2a98421c12]
<br>
<p>[n5:29211] [13] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/openmpi/mca_coll_tuned.so 
<br>
[0x2a9842a00e]
<br>
<p>[n5:29211] [14] 
<br>
/home/syssoft/alap/fts/openmpi-1.3.1/ft_thread_install/lib/libmpi.so.0(PMPI_Barrier+0x140) 
<br>
[0x2a955a4af0]
<br>
<p>[n5:29211] [15] ./a.out(main+0x64) [0x4009bc]
<br>
<p>[n5:29211] [16] /lib64/tls/libc.so.6(__libc_start_main+0xdb) 
<br>
[0x399e11c3fb]
<br>
<p>[n5:29211] [17] ./a.out [0x4008ca]
<br>
<p>[n5:29211] *** End of error message ***
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that process rank 1 with PID 29211 on node n5 exited on 
<br>
signal 11 (Segmentation fault).
<br>
<p>--------------------------------------------------------------------------
<br>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soon, this error goes away, if i force mpirun to use tcp for 
<br>
communication using mca parameters and then error a) starts coming which 
<br>
is related with some datatype handling during checkpoint.
<br>
<p><p>Regards
<br>
<p>Neeraj Chourasia
<br>
Member of Technical Staff
<br>
Computational Research Laboratories Limited
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
P: +91.9225520634
<br>
<p><p><p><p><p>Josh Hursey &lt;jjhursey_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
04/28/2009 12:34 AM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1
<br>
<p><p><p><p><p><p>I still have not been able to reproduce the hang, but I'm still 
<br>
looking into it.
<br>
<p>I did commit a fix for the datatype copy error that I mentioned 
<br>
(r21080 in the Open MPI trunk, and it is in the pipeline for v1.3).
<br>
<p>Can you put in a print statement before MPI_Finalize, then try the 
<br>
program again? I am wondering if the problem is not with the 
<br>
MPI_Barrier, but MPI_Finalize. I wonder if one (or both) of the 
<br>
processes enter MPI_Finalize while a checkpoint is occurring. 
<br>
Unfortunately, I have not tested the MPI_Finalize scenario in a long 
<br>
time, but will put that on my todo list.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Apr 27, 2009, at 9:48 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the long delay to respond.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a bit odd that the hang does not occur when running on only 
</span><br>
<span class="quotelev1">&gt; one host. I suspect that is more due to timing than anything else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not able to reproduce the hang at the moment, but I do get an 
</span><br>
<span class="quotelev1">&gt; occasional datatype copy error which could be symptomatic of a 
</span><br>
<span class="quotelev1">&gt; related problem. I'll dig into this a bit more this week and let you 
</span><br>
<span class="quotelev1">&gt; know when I have a fix and if I can reproduce the hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2009, at 4:56 AM, neeraj_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am trying to checkpoint a test application using openmpi-1.3.1, 
</span><br>
<span class="quotelev2">&gt;&gt; but fails to do so, when run multiple process on different nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Checkpointing runs fine, if process is running on the same node 
</span><br>
<span class="quotelev2">&gt;&gt; along with mpirun process. But the moment i launch MPI process from 
</span><br>
<span class="quotelev2">&gt;&gt; different node, it hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ex.
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun -np 2 ./test (will checkpoint fine using ompi-checkpoint - 
</span><br>
<span class="quotelev2">&gt;&gt; v &lt;mpirun_pid&gt; )
</span><br>
<span class="quotelev2">&gt;&gt;  but
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 2 -H host1 ./test (Checkpointing will hang)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Similarly
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 2 -H localhost,host1 ./test would still hangs while 
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please find the output which comes while checkpointing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------- 
</span><br>
<span class="quotelev2">&gt;&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596]       PID 1514
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596]       Connected to Mpirun [[11946,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: notify_hnp: Contact Head Node Process 
</span><br>
<span class="quotelev2">&gt;&gt; PID 1514
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: notify_hnp: Requested a checkpoint of 
</span><br>
<span class="quotelev2">&gt;&gt; jobid [INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596]                 Requested - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596]                   Pending - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev2">&gt;&gt; [n0:01596]                   Running - Global Snapshot Reference: 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note: It hangs here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------ 
</span><br>
<span class="quotelev2">&gt;&gt; *******************************---------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Command used to launch program is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.3.1/install/bin/mpirun -np 2 -H n5 -am ft- 
</span><br>
<span class="quotelev2">&gt;&gt; enable-cr --mca btl tcp,self a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the dummy program is pretty simple as follows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define LIMIT 10000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc,char ** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;         int i;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            int my_rank; /* Rank of process */
</span><br>
<span class="quotelev2">&gt;&gt;            int np; /* Number of process */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Comm_rank(MPI_COMM_WORLD,&amp;my_rank);
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Comm_size(MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             for(i=0; i&lt;=LIMIT; i++)
</span><br>
<span class="quotelev2">&gt;&gt;             {
</span><br>
<span class="quotelev2">&gt;&gt;                     printf(&quot;n HELLO %d&quot;,i);
</span><br>
<span class="quotelev2">&gt;&gt;                        //sleep(10);
</span><br>
<span class="quotelev2">&gt;&gt;                        MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know, what could be the error. I feel there is the error in 
</span><br>
<span class="quotelev2">&gt;&gt; MPI process coordination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Neeraj Chourasia
</span><br>
<span class="quotelev2">&gt;&gt; Member of Technical Staff
</span><br>
<span class="quotelev2">&gt;&gt; Computational Research Laboratories Limited
</span><br>
<span class="quotelev2">&gt;&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev2">&gt;&gt; P: +91.9890003757
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =====-----=====-----===== Notice: The information contained in this 
</span><br>
<span class="quotelev2">&gt;&gt; e-mail message and/or attachments to it may contain confidential or 
</span><br>
<span class="quotelev2">&gt;&gt; privileged information. If you are not the intended recipient, any 
</span><br>
<span class="quotelev2">&gt;&gt; dissemination, use, review, distribution, printing or copying of 
</span><br>
<span class="quotelev2">&gt;&gt; the information contained in this e-mail message and/or attachments 
</span><br>
<span class="quotelev2">&gt;&gt; to it are strictly prohibited. If you have received this 
</span><br>
<span class="quotelev2">&gt;&gt; communication in error, please notify us by reply e-mail or 
</span><br>
<span class="quotelev2">&gt;&gt; telephone and immediately and permanently delete the message and 
</span><br>
<span class="quotelev2">&gt;&gt; any attachments. Internet communications cannot be guaranteed to be 
</span><br>
<span class="quotelev2">&gt;&gt; timely, secure, error or virus-free. The sender does not accept 
</span><br>
<span class="quotelev2">&gt;&gt; liability for any errors or omissions.Thank you =====-----=====----- 
</span><br>
<span class="quotelev2">&gt;&gt; =====
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>=====-----=====-----=====
<br>
<p><p><p>Notice: The information contained in this e-mail
<br>
message and/or attachments to it may contain 
<br>
confidential or privileged information. If you are 
<br>
not the intended recipient, any dissemination, use, 
<br>
review, distribution, printing or copying of the 
<br>
information contained in this e-mail message 
<br>
and/or attachments to it are strictly prohibited. If 
<br>
you have received this communication in error, 
<br>
please notify us by reply e-mail or telephone and 
<br>
immediately and permanently delete the message 
<br>
and any attachments. 
<br>
<p>Internet communications cannot be guaranteed to be timely,
<br>
secure, error or virus-free. The sender does not accept liability
<br>
for any errors or omissions.Thank you
<br>
<p>=====-----=====-----=====
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9114.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9114.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
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
