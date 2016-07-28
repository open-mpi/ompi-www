<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 10:55:02 2013" -->
<!-- isoreceived="20130124155502" -->
<!-- sent="Thu, 24 Jan 2013 07:54:55 -0800" -->
<!-- isosent="20130124155455" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified" -->
<!-- id="63D07A93-3946-489E-82CB-ABFBA6C1D56A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEeMGHs_X2te0EGd2e=jFh3xb=9Xnft28N3rMAibmymL5CsOvg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-24 10:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21221.php">Michael Kluskens: "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="21219.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure  - just add --with-openib=no --with-psm=no to your config line and we'll ignore it
<br>
<p>On Jan 24, 2013, at 7:09 AM, Sabuj Pattanayek &lt;sabujp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ahha, with --display-allocation I'm getting :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /sb/apps/openmpi/1.6.3/x86_64/lib/openmpi/mca_mtl_psm:
</span><br>
<span class="quotelev1">&gt; libpsm_infinipath.so.1: cannot open shared object file: No such file
</span><br>
<span class="quotelev1">&gt; or directory (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the system I compiled it on has different ib libs than the
</span><br>
<span class="quotelev1">&gt; nodes. I'll need to recompile and then see if it runs, but is there
</span><br>
<span class="quotelev1">&gt; anyway to get it to ignore IB and just use gigE? Not all of our nodes
</span><br>
<span class="quotelev1">&gt; have IB and I just want to use any node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 24, 2013 at 8:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; How did you configure OMPI? If you add --display-allocation to your cmd line, does it show all the nodes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 24, 2013, at 6:34 AM, Sabuj Pattanayek &lt;sabujp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm submitting a job through torque/PBS, the head node also runs the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moab scheduler, the .pbs file has this in the resources line :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've also tried something like :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l procs=56
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and at the end of script I'm running :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 cat /dev/urandom &gt; /dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 56 cat /dev/urandom &gt; /dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...depending on how many processors I requested. The job starts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $PBS_NODEFILE has the nodes that the job was assigned listed, but all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cat's are piled onto the first node. Any idea how I can get this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to submit jobs across multiple nodes? Note, I have OSU mpiexec working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without problems with mvapich and mpich2 on our cluster to launch jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across multiple nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sabuj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21221.php">Michael Kluskens: "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="21219.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21216.php">Sabuj Pattanayek: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
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
