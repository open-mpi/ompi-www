<?
$subject_val = "[OMPI users] restarting checkpointed applications";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 07:37:34 2013" -->
<!-- isoreceived="20130113123734" -->
<!-- sent="Sun, 13 Jan 2013 12:37:27 +0000" -->
<!-- isosent="20130113123727" -->
<!-- name="Jerry Mersel" -->
<!-- email="jerry.mersel_at_[hidden]" -->
<!-- subject="[OMPI users] restarting checkpointed applications" -->
<!-- id="321E9E17D18E084488F038FCE6624C3EBB815555_at_IBWMBX04" -->
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
<strong>Subject:</strong> [OMPI users] restarting checkpointed applications<br>
<strong>From:</strong> Jerry Mersel (<em>jerry.mersel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-13 07:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<li><strong>Previous message:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<li><strong>Reply:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
checkpointing and restarting openmpi applications don't work for me.
<br>
<p>I have a redhat version 5U6 system with blcr checkpointing version 0.8.4
<br>
and openmpi version 1.6.3.
<br>
<p>I have a simple parallel application that I want to checkpoint and restart.
<br>
<p>I see that the blcr modules are loaded (with lsmod).
<br>
<p>I run:
<br>
mpirun  -np 1 -hostfile hostfile -am ft-enable-cr  EXECUTABLE
<br>
ompi-checkpoint -v -s &lt;PID of mpirun&gt;
<br>
<p>then I kill mpirun.
<br>
<p>then:
<br>
ompi-restart -v ompi_global_snapshot_&lt;PID&gt;.ckpt
<br>
<p>here is my results:
<br>
<p>Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_0.ckpt). Returned -1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check the installation of the none checkpoint/restart service
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on all of the machines in your system.
<br>
<p><p><p>If I try using the blcr utilities (cr_run, cr_checkpoint, cr_run) then it runs on the local machine,  it won't on more then one machine.
<br>
<p>Please help me with this.
<br>
<p>Thank you.
<br>
<p><p><p><p><p>With Blessings, always,
<br>
<p>&nbsp;&nbsp;&nbsp;Jerry Mersel
<br>
<p>&nbsp;&nbsp;&nbsp;System Administrator
<br>
&nbsp;&nbsp;&nbsp;IT Infrastructure Branch | Division of Information Systems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Weizmann Institute of Science
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rehovot 76100, Israel
<br>
<p>&nbsp;&nbsp;&nbsp;Tel:  +972-8-9342363
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21116/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<li><strong>Previous message:</strong> <a href="21115.php">Beat Rubischon: "Re: [OMPI users] OpenMPI and SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
<li><strong>Reply:</strong> <a href="21117.php">Ralph Castain: "Re: [OMPI users] restarting checkpointed applications"</a>
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
