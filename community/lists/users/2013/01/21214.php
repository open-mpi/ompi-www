<?
$subject_val = "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 09:34:33 2013" -->
<!-- isoreceived="20130124143433" -->
<!-- sent="Thu, 24 Jan 2013 08:34:29 -0600" -->
<!-- isosent="20130124143429" -->
<!-- name="Sabuj Pattanayek" -->
<!-- email="sabujp_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified" -->
<!-- id="CAEeMGHtWWsVDCc87sCDAR23g3MY8SGCsTsuzYyQTtRTAX=bKTg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified<br>
<strong>From:</strong> Sabuj Pattanayek (<em>sabujp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 09:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21215.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Previous message:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21215.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Reply:</strong> <a href="21215.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm submitting a job through torque/PBS, the head node also runs the
<br>
Moab scheduler, the .pbs file has this in the resources line :
<br>
<p>#PBS -l nodes=2:ppn=4
<br>
<p>I've also tried something like :
<br>
<p>#PBS -l procs=56
<br>
<p>and at the end of script I'm running :
<br>
<p>mpirun -np 8 cat /dev/urandom &gt; /dev/null
<br>
<p>or
<br>
<p>mpirun -np 56 cat /dev/urandom &gt; /dev/null
<br>
<p>...depending on how many processors I requested. The job starts,
<br>
$PBS_NODEFILE has the nodes that the job was assigned listed, but all
<br>
the cat's are piled onto the first node. Any idea how I can get this
<br>
to submit jobs across multiple nodes? Note, I have OSU mpiexec working
<br>
without problems with mvapich and mpich2 on our cluster to launch jobs
<br>
across multiple nodes.
<br>
<p>Thanks,
<br>
Sabuj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21215.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Previous message:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21215.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Reply:</strong> <a href="21215.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
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
