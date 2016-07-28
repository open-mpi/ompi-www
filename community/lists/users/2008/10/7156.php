<?
$subject_val = "Re: [OMPI users] ompi-checkpoint is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 10:51:20 2008" -->
<!-- isoreceived="20081031145120" -->
<!-- sent="Fri, 31 Oct 2008 15:51:09 +0100" -->
<!-- isosent="20081031145109" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint is hanging" -->
<!-- id="490B1B5D.5080100_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220810310548n3d4f35aapac516e3cc9e253fa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint is hanging<br>
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 10:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7157.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>In reply to:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7161.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7161.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim!
<br>
<p>First of all: thanks a lot for answering! :-)
<br>
<p><p><span class="quotelev1">&gt; Could you try running your two MPI jobs with fewer procs each,
</span><br>
<span class="quotelev1">&gt; say 2 or 3 each instead of 4, so that there are a few extra cores available.
</span><br>
<p>This problem occurrs with any number of procs.
<br>
<p><span class="quotelev1">&gt; Also, what happens to the checkpointing of one MPI job if you kill the
</span><br>
<span class="quotelev1">&gt; other MPI job
</span><br>
<span class="quotelev1">&gt; after the first &quot;hangs&quot;?
</span><br>
<p>Nothing, it keeps hanging.
<br>
<p><span class="quotelev1"> &gt; (It may not be a true hang, but very very slow progress that you
</span><br>
<span class="quotelev1"> &gt; are observing.)
</span><br>
<p>I already waited for more than 12 hours, but the ompi-checkpoint
<br>
did not return. So if it's slow, it must be very slow.
<br>
<p><p>I continued testing and just observed a case where the problem
<br>
occurred with only one job running on the compute node:
<br>
<p>-------------------------------------------------------
<br>
ccs_at_grid-demo-1:~$ ps auxww | grep mpirun | grep -v grep
<br>
ccs       7706  0.4  0.2  63864  2640 ?        S    15:35   0:00 mpirun 
<br>
-np 1 -am ft-enable-cr -np 6 
<br>
/home/ccs/XN-OMPI/testdrive/loop-1/remotedir/mpi-x-povray +I planet.pov 
<br>
-w1600 -h1200 +SP1 +O planet.tga
<br>
ccs_at_grid-demo-1:~$
<br>
-------------------------------------------------------
<br>
<p>The resource management system tried to checkpoint this job using the
<br>
command &quot;ompi-checkpoint -v --term 7706&quot;. This is the output of that
<br>
command:
<br>
<p>-------------------------------------------------------
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: Checkpointing...
<br>
[grid-demo-1.cit.tu-berlin.de:08178]     PID 7706
<br>
[grid-demo-1.cit.tu-berlin.de:08178]     Connected to Mpirun [[3623,0],0]
<br>
[grid-demo-1.cit.tu-berlin.de:08178]     Terminating after checkpoint
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: notify_hnp: 
<br>
Contact Head Node Process PID 7706
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: notify_hnp: 
<br>
Requested a checkpoint of jobid [INVALID]
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:08178]                 Requested - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:08178]     Pending (Termination) - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:08178] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:08178]                   Running - Global 
<br>
Snapshot Reference: (null)
<br>
-------------------------------------------------------
<br>
<p>If I look to the activity on the node, I see that the processes
<br>
are still computing:
<br>
<p>-------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
<br>
&nbsp;&nbsp;7710 ccs       25   0  327m 6936 4052 R  102  0.7   4:14.17 mpi-x-povray
<br>
&nbsp;&nbsp;7712 ccs       25   0  327m 6884 4000 R  102  0.7   3:34.06 mpi-x-povray
<br>
&nbsp;&nbsp;7708 ccs       25   0  327m 6896 4012 R   66  0.7   2:42.10 mpi-x-povray
<br>
&nbsp;&nbsp;7707 ccs       25   0  331m  10m 3736 R   54  1.0   3:08.62 mpi-x-povray
<br>
&nbsp;&nbsp;7709 ccs       25   0  327m 6940 4056 R   48  0.7   1:48.24 mpi-x-povray
<br>
&nbsp;&nbsp;7711 ccs       25   0  327m 6724 4032 R   36  0.7   1:29.34 mpi-x-povray
<br>
-------------------------------------------------------
<br>
<p>Now I killed the hanging ompi-checkpoint operation and tried
<br>
to execute a checkpoint manually:
<br>
<p>-------------------------------------------------------
<br>
ccs_at_grid-demo-1:~$ ompi-checkpoint -v --term 7706
<br>
[grid-demo-1.cit.tu-berlin.de:08224] orte_checkpoint: Checkpointing...
<br>
[grid-demo-1.cit.tu-berlin.de:08224]     PID 7706
<br>
[grid-demo-1.cit.tu-berlin.de:08224]     Connected to Mpirun [[3623,0],0]
<br>
[grid-demo-1.cit.tu-berlin.de:08224]     Terminating after checkpoint
<br>
[grid-demo-1.cit.tu-berlin.de:08224] orte_checkpoint: notify_hnp: 
<br>
Contact Head Node Process PID 7706
<br>
[grid-demo-1.cit.tu-berlin.de:08224] orte_checkpoint: notify_hnp: 
<br>
Requested a checkpoint of jobid [INVALID]
<br>
-------------------------------------------------------
<br>
<p>Is there perhaps a way of increasing the level of debug output?
<br>
Please let me know if I can support you in any way...
<br>
<p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7157.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>In reply to:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7161.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7161.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
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
