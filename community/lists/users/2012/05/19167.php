<?
$subject_val = "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 10:50:12 2012" -->
<!-- isoreceived="20120502145012" -->
<!-- sent="Wed, 02 May 2012 16:49:35 +0200" -->
<!-- isosent="20120502144935" -->
<!-- name="R&#195;&#169;mi Palancher" -->
<!-- email="remi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="3f97ae8b172a90d11b897fbe0d6c7f19_at_localhost" -->
<!-- charset="binary" -->
<!-- inreplyto="03B793B5-F2A0-4D2B-8459-4BCD657501B5_at_open-mpi.org" -->
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
<strong>From:</strong> R&#195;&#169;mi Palancher (<em>remi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 10:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19168.php">Jeff Squyres: "Re: [OMPI users] MPI with RDMA CM"</a>
<li><strong>Previous message:</strong> <a href="19166.php">Shanthini Kannan: "[OMPI users] MPI with RDMA CM"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;On Fri, 27 Apr 2012 08:56:15 -0600, Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
&nbsp;wrote:
<br>
<span class="quotelev1">&gt; Couple of things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. please do send the output from ompi_info
</span><br>
<p>&nbsp;You can find them attached to this email.
<br>
<p><span class="quotelev1">&gt; 2. please send the slurm envars from your allocation - i.e., after
</span><br>
<span class="quotelev1">&gt; you do your salloc.
</span><br>
<p>&nbsp;Here is an example:
<br>
&nbsp;$ salloc -N 2 -n 20 --qos=debug
<br>
&nbsp;salloc: Granted job allocation 1917048
<br>
&nbsp;$ srun hostname | sort | uniq -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 cn0331
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 cn0333
<br>
&nbsp;$ env | grep ^SLURM
<br>
&nbsp;SLURM_NODELIST=cn[0331,0333]
<br>
&nbsp;SLURM_NNODES=2
<br>
&nbsp;SLURM_JOBID=1917048
<br>
&nbsp;SLURM_NTASKS=20
<br>
&nbsp;SLURM_TASKS_PER_NODE=12,8
<br>
&nbsp;SLURM_JOB_ID=1917048
<br>
&nbsp;SLURM_SUBMIT_DIR=/gpfs/home/H76170
<br>
&nbsp;SLURM_NPROCS=20
<br>
&nbsp;SLURM_JOB_NODELIST=cn[0331,0333]
<br>
&nbsp;SLURM_JOB_CPUS_PER_NODE=12,8
<br>
&nbsp;SLURM_JOB_NUM_NODES=2
<br>
<p><span class="quotelev1">&gt; Are you sure that slurm is actually &quot;binding&quot; us during this launch?
</span><br>
<span class="quotelev1">&gt; If you just srun your get-allowed-cpu, what does it show? I'm
</span><br>
<span class="quotelev1">&gt; wondering if it just gets reflected in the allocation envar and not
</span><br>
<span class="quotelev1">&gt; actually binding the orteds.
</span><br>
<p>&nbsp;Core binding with Slurm 2.3.3 + OpenMPI 1.4.3 works well:
<br>
<p>&nbsp;$ mpirun -V
<br>
&nbsp;mpirun (Open MPI) 1.4.3
<br>
<p>&nbsp;Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
&nbsp;$ mpirun get-allowed-cpu-ompi 1
<br>
&nbsp;Launch 1 Task 01 of 20 (cn0331): 1
<br>
&nbsp;Launch 1 Task 03 of 20 (cn0331): 3
<br>
&nbsp;Launch 1 Task 04 of 20 (cn0331): 5
<br>
&nbsp;Launch 1 Task 02 of 20 (cn0331): 2
<br>
&nbsp;Launch 1 Task 09 of 20 (cn0331): 11
<br>
&nbsp;Launch 1 Task 11 of 20 (cn0331): 10
<br>
&nbsp;Launch 1 Task 12 of 20 (cn0333): 0
<br>
&nbsp;Launch 1 Task 13 of 20 (cn0333): 1
<br>
&nbsp;Launch 1 Task 14 of 20 (cn0333): 2
<br>
&nbsp;Launch 1 Task 15 of 20 (cn0333): 3
<br>
&nbsp;Launch 1 Task 16 of 20 (cn0333): 6
<br>
&nbsp;Launch 1 Task 17 of 20 (cn0333): 4
<br>
&nbsp;Launch 1 Task 18 of 20 (cn0333): 5
<br>
&nbsp;Launch 1 Task 19 of 20 (cn0333): 7
<br>
&nbsp;Launch 1 Task 00 of 20 (cn0331): 0
<br>
&nbsp;Launch 1 Task 05 of 20 (cn0331): 7
<br>
&nbsp;Launch 1 Task 06 of 20 (cn0331): 6
<br>
&nbsp;Launch 1 Task 07 of 20 (cn0331): 4
<br>
&nbsp;Launch 1 Task 08 of 20 (cn0331): 8
<br>
&nbsp;Launch 1 Task 10 of 20 (cn0331): 9
<br>
<p>&nbsp;But it fails as soon as I switch to OpenMPI 1.7a1r26338:
<br>
<p>&nbsp;$ module load openmpi_1.7a1r26338
<br>
&nbsp;$ mpirun -V
<br>
&nbsp;mpirun (Open MPI) 1.7a1r26338
<br>
<p>&nbsp;Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
&nbsp;$ unset OMPI_MCA_mtl OMPI_MCA_pml
<br>
&nbsp;$ mpirun get-allowed-cpu-ompi 1
<br>
&nbsp;Launch 1 Task 12 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 13 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 14 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 15 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 16 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 17 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 18 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 19 of 20 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 07 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 08 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 09 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 10 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 11 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 01 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 02 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 03 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 04 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 05 of 20 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 06 of 20 (cn0331): 0-23
<br>
<p>&nbsp;Using srun fails in OpenMPI 1.4.3 environment with the following error:
<br>
<p>&nbsp;Error obtaining unique transport key from ORTE 
<br>
&nbsp;(orte_precondition_transports not present in
<br>
&nbsp;the environment).
<br>
&nbsp;[...]
<br>
<p>&nbsp;In OpenMPI 1.7a1r26338, the result of srun is the same as with mpirun:
<br>
<p>&nbsp;$ module load openmpi_1.7a1r26338
<br>
&nbsp;$ srun get-allowed-cpu-ompi 1
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0333): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
&nbsp;Launch 1 Task 00 of 01 (cn0331): 0-23
<br>
<p>&nbsp;Regards,
<br>
<pre>
-- 
 R&#195;&#169;mi Palancher
 <a href="http://rezib.org">http://rezib.org</a>


</pre>
<p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19167/ompi_info_1.7a1r26338_error_binding.txt.gz">ompi_info_1.7a1r26338_error_binding.txt.gz</a>
</ul>
<!-- attachment="ompi_info_1.7a1r26338_error_binding.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19167/ompi_info_1.7a1r26338_psm_undefined_symbol.txt.gz">ompi_info_1.7a1r26338_psm_undefined_symbol.txt.gz</a>
</ul>
<!-- attachment="ompi_info_1.7a1r26338_psm_undefined_symbol.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19168.php">Jeff Squyres: "Re: [OMPI users] MPI with RDMA CM"</a>
<li><strong>Previous message:</strong> <a href="19166.php">Shanthini Kannan: "[OMPI users] MPI with RDMA CM"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
