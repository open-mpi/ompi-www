<?
$subject_val = "Re: [OMPI users] checkpointing 2 or more processes running in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 10:06:52 2009" -->
<!-- isoreceived="20090908140652" -->
<!-- sent="Tue, 8 Sep 2009 10:06:49 -0400" -->
<!-- isosent="20090908140649" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing 2 or more processes running in parallel" -->
<!-- id="13529C37-D285-4652-A8E6-7F1EBA42FAF1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="835756.71496.qm_at_web28310.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing 2 or more processes running in parallel<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 10:06:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10590.php">Marcus Herrmann: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10588.php">Josh Hursey: "Re: [OMPI users] problem in using blcr"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10508.php">Jean Potsam: "[OMPI users] checkpointing 2 or more processes running in parallel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Though I would not recommend your technique for initiating a  
<br>
checkpoint from an application, it may work. Since ompi-checkpoint  
<br>
will need to contact and interact with every MPI process, this could  
<br>
cause problems if the application is blocking in system() while ompi- 
<br>
checkpoint is trying to interact with the process. Additionally if you  
<br>
are using any fork()-sensitive software/hardware (some high-speed  
<br>
interconnects fall into this category) then calling system() (which  
<br>
uses fork() on the back end) may cause a variety of problems including  
<br>
memory corruption.
<br>
<p>That being said, if you have configured Open MPI to use the C/R Fault  
<br>
Tolerance thread then this may work. You will want to make sure that  
<br>
only one MPI process in the entire job calls ompi-checkpoint (which is  
<br>
probably the cause of the problem you mention below). The rest of the  
<br>
processes can sit in a MPI_Barrier on the other side of the mychkpt()  
<br>
operation if you want your processes to wait for the checkpoint to  
<br>
finish before proceeding (though this is not required). Additionally  
<br>
the MPI process that calls ompi-checkpoint will always need to be on  
<br>
the same node as the mpirun process in order for the ompi-checkpoint  
<br>
command to work.
<br>
<p>Give that a try and let me know if it helps.
<br>
<p><p>As a side note, I have an API for initiating a checkpoint operation  
<br>
through Open MPI's Extensions interface. It is nearly ready, and will  
<br>
probably be available on the Open MPI trunk in the next couple months.  
<br>
I'll post the list when it is available if you want to give that a try.
<br>
<p>-- Josh
<br>
<p>On Aug 27, 2009, at 10:24 PM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;               I am trying to checkpoint an mpi application at  
</span><br>
<span class="quotelev1">&gt; specific points in my program. So, i created a small function as  
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void mychkpt()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; system (&quot;ompi-checkpoint -v `pidof mpirun`&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I am calling it in my MPI application at specific points. e.g
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##############
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 6&quot;);
</span><br>
<span class="quotelev1">&gt; mychkpt();
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 4&quot;);
</span><br>
<span class="quotelev1">&gt; mychkpt();
</span><br>
<span class="quotelev1">&gt; #############
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i do:
</span><br>
<span class="quotelev1">&gt;  mpirun -am ft-enable-cr -np 1 mpisleepts0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it works fine. but if i use more than 1 node there is a problem. e.g
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 2 mpisleepts0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ################
</span><br>
<span class="quotelev1">&gt; I am processor no 0 of a total of 2 procs
</span><br>
<span class="quotelev1">&gt; I am processor no 1 of a total of 2 procs
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [jean:13673]      PID 13647
</span><br>
<span class="quotelev1">&gt; [jean:13673]      Connected to Mpirun [[28355,0],0]
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: notify_hnp: Contact Head Node Process  
</span><br>
<span class="quotelev1">&gt; PID 13647
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: notify_hnp: Requested a checkpoint of  
</span><br>
<span class="quotelev1">&gt; jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [jean:13673]                 Requested - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [jean:13673]                   Pending - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [jean:13673]                   Running - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [jean:13672] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [jean:13672]      PID 13647
</span><br>
<span class="quotelev1">&gt; [jean:13672]      Connected to Mpirun [[28355,0],0]
</span><br>
<span class="quotelev1">&gt; [jean:13672] orte_checkpoint: notify_hnp: Contact Head Node Process  
</span><br>
<span class="quotelev1">&gt; PID 13647
</span><br>
<span class="quotelev1">&gt; [jean:13672] orte_checkpoint: notify_hnp: Requested a checkpoint of  
</span><br>
<span class="quotelev1">&gt; jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [jean:13673]             File Transfer - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [jean:13673] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [jean:13673]                  Finished - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_13647.ckptSnapshot Ref.:   0  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_13647.ckpt
</span><br>
<span class="quotelev1">&gt; ^Xmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; #################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It runs the function twice simultaneously which try to call the  
</span><br>
<span class="quotelev1">&gt; checkpointing process twice...thus causing problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can i ensure that the checkpointing process is called only once  
</span><br>
<span class="quotelev1">&gt; when there are more than one process running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please given me some ideas on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
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
<li><strong>Next message:</strong> <a href="10590.php">Marcus Herrmann: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10588.php">Josh Hursey: "Re: [OMPI users] problem in using blcr"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10508.php">Jean Potsam: "[OMPI users] checkpointing 2 or more processes running in parallel"</a>
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
