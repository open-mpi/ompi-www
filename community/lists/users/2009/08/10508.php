<?
$subject_val = "[OMPI users] checkpointing 2 or more processes running in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 22:24:38 2009" -->
<!-- isoreceived="20090828022438" -->
<!-- sent="Fri, 28 Aug 2009 02:24:33 +0000 (GMT)" -->
<!-- isosent="20090828022433" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] checkpointing 2 or more processes running in parallel" -->
<!-- id="835756.71496.qm_at_web28310.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] checkpointing 2 or more processes running in parallel<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 22:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10509.php">Ashika Umanga Umagiliya: "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I am trying to checkpoint an mpi application at specific points in my program. So, i created a small function as follows:
<br>
<p>void mychkpt()
<br>
{
<br>
system (&quot;ompi-checkpoint -v `pidof mpirun`&quot;);
<br>
}
<br>
<p>and I am calling it in my MPI application at specific points. e.g
<br>
<p>##############
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 6&quot;);
<br>
mychkpt();
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 4&quot;);
<br>
mychkpt();
<br>
#############
<br>
<p>If i do:
<br>
&#160;mpirun -am ft-enable-cr -np 1 mpisleepts0,
<br>
<p>it works fine. but if i use more than 1 node there is a problem. e.g
<br>
<p>mpirun -am ft-enable-cr -np 2 mpisleepts0
<br>
<p>I get
<br>
<p>################
<br>
I am processor no 0 of a total of 2 procs 
<br>
I am processor no 1 of a total of 2 procs 
<br>
[jean:13673] orte_checkpoint: Checkpointing...
<br>
[jean:13673] &#160;&#160;&#160; &#160;PID 13647
<br>
[jean:13673] &#160;&#160;&#160; &#160;Connected to Mpirun [[28355,0],0]
<br>
[jean:13673] orte_checkpoint: notify_hnp: Contact Head Node Process PID 13647
<br>
[jean:13673] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid [INVALID]
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Status Update.
<br>
[jean:13673]&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Requested - Global Snapshot Reference: (null)
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Status Update.
<br>
[jean:13673]&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Pending - Global Snapshot Reference: (null)
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Status Update.
<br>
[jean:13673]&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Running - Global Snapshot Reference: (null)
<br>
[jean:13672] orte_checkpoint: Checkpointing...
<br>
[jean:13672] &#160;&#160;&#160; &#160;PID 13647
<br>
[jean:13672] &#160;&#160;&#160; &#160;Connected to Mpirun [[28355,0],0]
<br>
[jean:13672] orte_checkpoint: notify_hnp: Contact Head Node Process PID 13647
<br>
[jean:13672] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid [INVALID]
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Status Update.
<br>
[jean:13673]&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; File Transfer - Global Snapshot Reference: (null)
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[jean:13673] orte_checkpoint: hnp_receiver: Status Update.
<br>
[jean:13673]&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Finished - Global Snapshot Reference: ompi_global_snapshot_13647.ckptSnapshot Ref.:&#160;&#160; 0 ompi_global_snapshot_13647.ckpt
<br>
^Xmpirun: killing job...
<br>
#################
<br>
<p>It runs the function twice simultaneously which try to call the checkpointing process twice...thus causing problems.
<br>
<p>How can i ensure that the checkpointing process is called only once when there are more than one process running?
<br>
<p>Please given me some ideas on it. 
<br>
<p>Thank you
<br>
<p>Jean 
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10509.php">Ashika Umanga Umagiliya: "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
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
