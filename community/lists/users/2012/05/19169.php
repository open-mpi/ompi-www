<?
$subject_val = "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 11:24:11 2012" -->
<!-- isoreceived="20120502152411" -->
<!-- sent="Wed, 2 May 2012 09:24:01 -0600" -->
<!-- isosent="20120502152401" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="0A455A1E-D77B-4D33-9473-EDD36D737A57_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3f97ae8b172a90d11b897fbe0d6c7f19_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 11:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19170.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19168.php">Jeff Squyres: "Re: [OMPI users] MPI with RDMA CM"</a>
<li><strong>In reply to:</strong> <a href="19167.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, your tests confirmed my suspicions. Slurm isn't doing any binding at all - that's why your srun of get-allowed-cpu-ompi showed no bindings. I don't see anything in your cmds that would tell slurm to bind us to anything. All your salloc did was tell slurm what to allocate - that doesn't imply binding.
<br>
<p>You can get the trunk to bind by adding &quot;--bind-to core&quot; to your cmd line. That should yield the pattern you show from your 1.4.3 test.
<br>
<p>Of more interest is why the 1.4.3 installation is binding at all. I suspect you have an MCA param set somewhere that tells us to bind-to-core - perhaps in the default MCA param file, or in your environment. It certainly wouldn't be doing that by default.
<br>
<p><p>On May 2, 2012, at 8:49 AM, R&#233;mi Palancher wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 27 Apr 2012 08:56:15 -0600, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Couple of things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. please do send the output from ompi_info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can find them attached to this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. please send the slurm envars from your allocation - i.e., after
</span><br>
<span class="quotelev2">&gt;&gt; you do your salloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an example:
</span><br>
<span class="quotelev1">&gt; $ salloc -N 2 -n 20 --qos=debug
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 1917048
</span><br>
<span class="quotelev1">&gt; $ srun hostname | sort | uniq -c
</span><br>
<span class="quotelev1">&gt;     12 cn0331
</span><br>
<span class="quotelev1">&gt;      8 cn0333
</span><br>
<span class="quotelev1">&gt; $ env | grep ^SLURM
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=cn[0331,0333]
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=1917048
</span><br>
<span class="quotelev1">&gt; SLURM_NTASKS=20
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=12,8
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=1917048
</span><br>
<span class="quotelev1">&gt; SLURM_SUBMIT_DIR=/gpfs/home/H76170
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=20
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=cn[0331,0333]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=12,8
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that slurm is actually &quot;binding&quot; us during this launch?
</span><br>
<span class="quotelev2">&gt;&gt; If you just srun your get-allowed-cpu, what does it show? I'm
</span><br>
<span class="quotelev2">&gt;&gt; wondering if it just gets reflected in the allocation envar and not
</span><br>
<span class="quotelev2">&gt;&gt; actually binding the orteds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Core binding with Slurm 2.3.3 + OpenMPI 1.4.3 works well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; $ mpirun get-allowed-cpu-ompi 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 01 of 20 (cn0331): 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 03 of 20 (cn0331): 3
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 04 of 20 (cn0331): 5
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 02 of 20 (cn0331): 2
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 09 of 20 (cn0331): 11
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 11 of 20 (cn0331): 10
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 12 of 20 (cn0333): 0
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 13 of 20 (cn0333): 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 14 of 20 (cn0333): 2
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 15 of 20 (cn0333): 3
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 16 of 20 (cn0333): 6
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 17 of 20 (cn0333): 4
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 18 of 20 (cn0333): 5
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 19 of 20 (cn0333): 7
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 20 (cn0331): 0
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 05 of 20 (cn0331): 7
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 06 of 20 (cn0331): 6
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 07 of 20 (cn0331): 4
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 08 of 20 (cn0331): 8
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 10 of 20 (cn0331): 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it fails as soon as I switch to OpenMPI 1.7a1r26338:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ module load openmpi_1.7a1r26338
</span><br>
<span class="quotelev1">&gt; $ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.7a1r26338
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; $ unset OMPI_MCA_mtl OMPI_MCA_pml
</span><br>
<span class="quotelev1">&gt; $ mpirun get-allowed-cpu-ompi 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 12 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 13 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 14 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 15 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 16 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 17 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 18 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 19 of 20 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 07 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 08 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 09 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 10 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 11 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 01 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 02 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 03 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 04 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 05 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 06 of 20 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using srun fails in OpenMPI 1.4.3 environment with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error obtaining unique transport key from ORTE (orte_precondition_transports not present in
</span><br>
<span class="quotelev1">&gt; the environment).
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In OpenMPI 1.7a1r26338, the result of srun is the same as with mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ module load openmpi_1.7a1r26338
</span><br>
<span class="quotelev1">&gt; $ srun get-allowed-cpu-ompi 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0333): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 01 (cn0331): 0-23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; R&#233;mi Palancher
</span><br>
<span class="quotelev1">&gt; <a href="http://rezib.org<ompi_info_1.7a1r26338_error_binding.txt.gz">http://rezib.org<ompi_info_1.7a1r26338_error_binding.txt.gz</a>&gt;&lt;ompi_info_1.7a1r26338_psm_undefined_symbol.txt.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="19170.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19168.php">Jeff Squyres: "Re: [OMPI users] MPI with RDMA CM"</a>
<li><strong>In reply to:</strong> <a href="19167.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
