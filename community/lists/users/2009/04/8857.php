<?
$subject_val = "[OMPI users] Checkpointing hangs with OpenMPI-1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 04:55:11 2009" -->
<!-- isoreceived="20090410085511" -->
<!-- sent="Fri, 10 Apr 2009 14:26:58 +0530" -->
<!-- isosent="20090410085658" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpointing hangs with OpenMPI-1.3.1" -->
<!-- id="OF7AD38D0A.F80C2C38-ON65257594.0030D8A4-65257594.0030FA13_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Checkpointing hangs with OpenMPI-1.3.1<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Checkpointing%20hangs%20with%20OpenMPI-1.3.1"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-04-10 04:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>&nbsp;&nbsp;&nbsp;I am trying to checkpoint a test application using openmpi-1.3.1, but 
<br>
fails to do so, when run multiple process on different nodes.
<br>
<p>&nbsp;Checkpointing runs fine, if process is running on the same node along 
<br>
with mpirun process. But the moment i launch MPI process from different 
<br>
node, it hangs.
<br>
<p>&nbsp;ex.
<br>
&nbsp;&nbsp;&nbsp;mpirun -np 2 ./test (will checkpoint fine using ompi-checkpoint -v 
<br>
&lt;mpirun_pid&gt; )
<br>
&nbsp;&nbsp;but
<br>
&nbsp;&nbsp;mpirun -np 2 -H host1 ./test (Checkpointing will hang)
<br>
<p>Similarly
<br>
&nbsp;&nbsp;mpirun -np 2 -H localhost,host1 ./test would still hangs while 
<br>
checkpointing.
<br>
<p>Please find the output which comes while checkpointing
<br>
<p>--------------xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----------------------------
<br>
[n0:01596] orte_checkpoint: Checkpointing... 
<br>
[n0:01596]       PID 1514 
<br>
[n0:01596]       Connected to Mpirun [[11946,0],0] 
<br>
[n0:01596] orte_checkpoint: notify_hnp: Contact Head Node Process PID 1514 
<br>
<p>[n0:01596] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid 
<br>
[INVALID] 
<br>
[n0:01596] orte_checkpoint: hnp_receiver: Receive a command message. 
<br>
[n0:01596] orte_checkpoint: hnp_receiver: Status Update. 
<br>
[n0:01596]                 Requested - Global Snapshot Reference: (null) 
<br>
[n0:01596] orte_checkpoint: hnp_receiver: Receive a command message. 
<br>
[n0:01596] orte_checkpoint: hnp_receiver: Status Update. 
<br>
[n0:01596]                   Pending - Global Snapshot Reference: (null) 
<br>
[n0:01596] orte_checkpoint: hnp_receiver: Receive a command message. 
<br>
[n0:01596] orte_checkpoint: hnp_receiver: Status Update. 
<br>
[n0:01596]                   Running - Global Snapshot Reference: (null) 
<br>
<p>Note: It hangs here 
<br>
<p>------------------------------*******************************---------------------
<br>
<p>Command used to launch program is 
<br>
<p>/usr/local/openmpi-1.3.1/install/bin/mpirun -np 2 -H n5 -am ft-enable-cr 
<br>
--mca btl tcp,self a.out
<br>
<p>And the dummy program is pretty simple as follows
<br>
<p>#include&lt;time.h&gt; 
<br>
#include&lt;stdio.h&gt; 
<br>
#include&lt;mpi.h&gt; 
<br>
&nbsp;
<br>
&nbsp;
<br>
#define LIMIT 10000000 
<br>
&nbsp;
<br>
main(int argc,char ** argv) 
<br>
{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i; 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int my_rank; /* Rank of process */ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int np; /* Number of process */ 
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;my_rank); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;np); 
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;=LIMIT; i++) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;n HELLO %d&quot;,i); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//sleep(10); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize(); 
<br>
} 
<br>
&nbsp;
<br>
&nbsp;
<br>
<p>Let me know, what could be the error. I feel there is the error in MPI 
<br>
process coordination.
<br>
<p>Regards
<br>
<p><p>Neeraj Chourasia
<br>
Member of Technical Staff
<br>
Computational Research Laboratories Limited
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
P: +91.9890003757
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8857/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Reply:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
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
