<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 09:53:00 2013" -->
<!-- isoreceived="20130124145300" -->
<!-- sent="Thu, 24 Jan 2013 06:52:52 -0800" -->
<!-- isosent="20130124145252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified" -->
<!-- id="1A0C6A9E-77D9-41D0-BBA4-637BCCD6DEB3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEeMGHtWWsVDCc87sCDAR23g3MY8SGCsTsuzYyQTtRTAX=bKTg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 09:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Previous message:</strong> <a href="21214.php">Sabuj Pattanayek: "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>In reply to:</strong> <a href="21214.php">Sabuj Pattanayek: "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Reply:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you configure OMPI? If you add --display-allocation to your cmd line, does it show all the nodes?
<br>
<p>On Jan 24, 2013, at 6:34 AM, Sabuj Pattanayek &lt;sabujp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm submitting a job through torque/PBS, the head node also runs the
</span><br>
<span class="quotelev1">&gt; Moab scheduler, the .pbs file has this in the resources line :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also tried something like :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #PBS -l procs=56
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and at the end of script I'm running :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 cat /dev/urandom &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 56 cat /dev/urandom &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...depending on how many processors I requested. The job starts,
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE has the nodes that the job was assigned listed, but all
</span><br>
<span class="quotelev1">&gt; the cat's are piled onto the first node. Any idea how I can get this
</span><br>
<span class="quotelev1">&gt; to submit jobs across multiple nodes? Note, I have OSU mpiexec working
</span><br>
<span class="quotelev1">&gt; without problems with mvapich and mpich2 on our cluster to launch jobs
</span><br>
<span class="quotelev1">&gt; across multiple nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sabuj
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
<li><strong>Next message:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Previous message:</strong> <a href="21214.php">Sabuj Pattanayek: "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>In reply to:</strong> <a href="21214.php">Sabuj Pattanayek: "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Reply:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
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
