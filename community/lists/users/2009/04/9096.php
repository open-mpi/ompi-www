<?
$subject_val = "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 09:44:58 2009" -->
<!-- isoreceived="20090427134458" -->
<!-- sent="Mon, 27 Apr 2009 09:48:09 -0400" -->
<!-- isosent="20090427134809" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1" -->
<!-- id="AB8B552E-CDA4-4927-84BA-79D0D9279A75_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF7AD38D0A.F80C2C38-ON65257594.0030D8A4-65257594.0030FA13_at_crlindia.com" -->
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
<strong>Date:</strong> 2009-04-27 09:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>Previous message:</strong> <a href="9095.php">Rangesh Gupta: "[OMPI users] error no=110 (Connection timeout)"</a>
<li><strong>In reply to:</strong> <a href="8857.php">neeraj_at_[hidden]: "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the long delay to respond.
<br>
<p>It is a bit odd that the hang does not occur when running on only one  
<br>
host. I suspect that is more due to timing than anything else.
<br>
<p>I am not able to reproduce the hang at the moment, but I do get an  
<br>
occasional datatype copy error which could be symptomatic of a related  
<br>
problem. I'll dig into this a bit more this week and let you know when  
<br>
I have a fix and if I can reproduce the hang.
<br>
<p>Thanks for the bug report.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Apr 10, 2009, at 4:56 AM, neeraj_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I am trying to checkpoint a test application using openmpi-1.3.1,  
</span><br>
<span class="quotelev1">&gt; but fails to do so, when run multiple process on different nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Checkpointing runs fine, if process is running on the same node  
</span><br>
<span class="quotelev1">&gt; along with mpirun process. But the moment i launch MPI process from  
</span><br>
<span class="quotelev1">&gt; different node, it hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ex.
</span><br>
<span class="quotelev1">&gt;    mpirun -np 2 ./test (will checkpoint fine using ompi-checkpoint - 
</span><br>
<span class="quotelev1">&gt; v &lt;mpirun_pid&gt; )
</span><br>
<span class="quotelev1">&gt;   but
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 -H host1 ./test (Checkpointing will hang)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 -H localhost,host1 ./test would still hangs while  
</span><br>
<span class="quotelev1">&gt; checkpointing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find the output which comes while checkpointing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----------------------------
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [n0:01596]       PID 1514
</span><br>
<span class="quotelev1">&gt; [n0:01596]       Connected to Mpirun [[11946,0],0]
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: notify_hnp: Contact Head Node Process  
</span><br>
<span class="quotelev1">&gt; PID 1514
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: notify_hnp: Requested a checkpoint of  
</span><br>
<span class="quotelev1">&gt; jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [n0:01596]                 Requested - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [n0:01596]                   Pending - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [n0:01596] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [n0:01596]                   Running - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: It hangs here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------ 
</span><br>
<span class="quotelev1">&gt; *******************************---------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command used to launch program is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.1/install/bin/mpirun -np 2 -H n5 -am ft- 
</span><br>
<span class="quotelev1">&gt; enable-cr --mca btl tcp,self a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the dummy program is pretty simple as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define LIMIT 10000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main(int argc,char ** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;          int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             int my_rank; /* Rank of process */
</span><br>
<span class="quotelev1">&gt;             int np; /* Number of process */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_rank(MPI_COMM_WORLD,&amp;my_rank);
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_size(MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              for(i=0; i&lt;=LIMIT; i++)
</span><br>
<span class="quotelev1">&gt;              {
</span><br>
<span class="quotelev1">&gt;                      printf(&quot;n HELLO %d&quot;,i);
</span><br>
<span class="quotelev1">&gt;                         //sleep(10);
</span><br>
<span class="quotelev1">&gt;                         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;             MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know, what could be the error. I feel there is the error in  
</span><br>
<span class="quotelev1">&gt; MPI process coordination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; P: +91.9890003757
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====-----=====-----===== Notice: The information contained in this  
</span><br>
<span class="quotelev1">&gt; e-mail message and/or attachments to it may contain confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, any  
</span><br>
<span class="quotelev1">&gt; dissemination, use, review, distribution, printing or copying of the  
</span><br>
<span class="quotelev1">&gt; information contained in this e-mail message and/or attachments to  
</span><br>
<span class="quotelev1">&gt; it are strictly prohibited. If you have received this communication  
</span><br>
<span class="quotelev1">&gt; in error, please notify us by reply e-mail or telephone and  
</span><br>
<span class="quotelev1">&gt; immediately and permanently delete the message and any attachments.  
</span><br>
<span class="quotelev1">&gt; Internet communications cannot be guaranteed to be timely, secure,  
</span><br>
<span class="quotelev1">&gt; error or virus-free. The sender does not accept liability for any  
</span><br>
<span class="quotelev1">&gt; errors or omissions.Thank you =====-----=====-----=====
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
<li><strong>Next message:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>Previous message:</strong> <a href="9095.php">Rangesh Gupta: "[OMPI users] error no=110 (Connection timeout)"</a>
<li><strong>In reply to:</strong> <a href="8857.php">neeraj_at_[hidden]: "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
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
