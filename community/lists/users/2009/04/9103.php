<?
$subject_val = "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 15:00:22 2009" -->
<!-- isoreceived="20090427190022" -->
<!-- sent="Mon, 27 Apr 2009 15:00:19 -0400" -->
<!-- isosent="20090427190019" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1" -->
<!-- id="2C8C8F71-11AA-4A3F-9260-9A3C39B0E59A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AB8B552E-CDA4-4927-84BA-79D0D9279A75_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-04-27 15:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9104.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still have not been able to reproduce the hang, but I'm still  
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9104.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
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
