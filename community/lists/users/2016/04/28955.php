<?
$subject_val = "[OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 13:13:36 2016" -->
<!-- isoreceived="20160418171336" -->
<!-- sent="Mon, 18 Apr 2016 17:13:15 +0000" -->
<!-- isosent="20160418171315" -->
<!-- name="Farid Parpia" -->
<!-- email="parpia_at_[hidden]" -->
<!-- subject="[OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2" -->
<!-- id="201604181713.u3IHDRED021865_at_d03av05.boulder.ibm.com" -->
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
<strong>Subject:</strong> [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2<br>
<strong>From:</strong> Farid Parpia (<em>parpia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 13:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28956.php">Nathan Smith: "[OMPI users] openib MTL not working via slurm after update"</a>
<li><strong>Previous message:</strong> <a href="28954.php">George Bosilca: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28958.php">Ralph Castain: "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="28958.php">Ralph Castain: "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings!
<br>
<p>The following batch script will successfully demo the use of LSF's task 
<br>
geometry feature using IBM Parallel Environment:
<br>
#BUB -J &quot;task_geometry&quot;
<br>
#BSUB -n 9
<br>
#BSUB -R &quot;span[ptile=3]&quot;
<br>
#BSUB -network &quot;type=sn_single:mode=us&quot;
<br>
#BSUB -R &quot;affinity[core]&quot;
<br>
#BSUB -e &quot;task_geometry.stderr.%J&quot;
<br>
#BSUB -o &quot;task_geometry.stdout.%J&quot;
<br>
#BSUB -q &quot;normal&quot;
<br>
#BSUB -M &quot;800&quot;
<br>
#BSUB -R &quot;rusage[mem=800]&quot;
<br>
#BSUB -x
<br>
<p>export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
<br>
<p>ldd /gpfs/gpfs_stage1/parpia/PE_tests/reporter/bin/reporter_MPI
<br>
<p>/gpfs/gpfs_stage1/parpia/PE_tests/reporter/bin/reporter_MPI
<br>
The reporter_MPI utility simply reports the hostname and affinitization 
<br>
for each MPI process, and is what I use to verify that the job is 
<br>
distributed to allocated nodes and on them with the affinitization 
<br>
expected.  Typical output is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, 
<br>
<p>To adapt the above batch script to use OpenMPI, I modify it to
<br>
#BSUB -J &quot;task_geometry&quot;
<br>
#BSUB -n 9
<br>
#BSUB -R &quot;span[ptile=3]&quot;
<br>
#BSUB -m &quot;p10a30 p10a33 p10a35 p10a55 p10a58&quot;
<br>
#BSUB -R &quot;affinity[core]&quot;
<br>
#BSUB -e &quot;task_geometry.stderr.%J&quot;
<br>
#BSUB -o &quot;task_geometry.stdout.%J&quot;
<br>
#BSUB -q &quot;normal&quot;
<br>
#BSUB -M &quot;800&quot;
<br>
#BSUB -R &quot;rusage[mem=800]&quot;
<br>
#BSUB -x
<br>
<p>export PATH=/usr/local/OpenMPI/1.10.2/bin:${PATH}
<br>
export LD_LIBRARY_PATH=/usr/local/OpenMPI/1.10.2/lib:${PATH}
<br>
<p>export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
<br>
<p>echo &quot;=== LSB_DJOB_HOSTFILE ===&quot;
<br>
cat ${LSB_DJOB_HOSTFILE}
<br>
echo &quot;=== LSB_AFFINITY_HOSTFILE ===&quot;
<br>
cat ${LSB_AFFINITY_HOSTFILE}
<br>
echo &quot;=== LSB_DJOB_RANKFILE ===&quot;
<br>
cat ${LSB_DJOB_RANKFILE}
<br>
echo &quot;=========================&quot;
<br>
<p>ldd /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
<br>
<p>mpirun /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
<br>
There are additional lines of scripting that I have inserted to help with 
<br>
debugging this failing job.  Here are the output files from the job:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, 
<br>
If I change the last line of the immediately above job script to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -bind-to core:overload-allowed 
<br>
/gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
<br>
the job runs through, but the host selection and affinization is 
<br>
completely wrong (you can extract the relevant information with grep &quot;can 
<br>
be sched&quot; *.stdout.* | sort -n -k 9):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, 
<br>
OpenMPI 1.10.2 was built using this script:
<br>
&nbsp;
<br>
It was installed with
<br>
make install
<br>
executed from the top if the build tree.  Here
<br>
&nbsp;
<br>
is the output of
<br>
ompi_info --all
<br>
<p>Regards,
<br>
<p>Farid Parpia          IBM Corporation: 710-2-RF28, 2455 South Road, 
<br>
Poughkeepsie, NY 12601, USA; Telephone: (845) 433-8420 = Tie Line 293-8420
<br>
<p><p>







<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/task_geometry.stdout.43915.gz">task_geometry.stdout.43915.gz</a>
</ul>
<!-- attachment="task_geometry.stdout.43915.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/task_geometry.stderr.43915.gz">task_geometry.stderr.43915.gz</a>
</ul>
<!-- attachment="task_geometry.stderr.43915.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/task_geometry.stderr.43918.gz">task_geometry.stderr.43918.gz</a>
</ul>
<!-- attachment="task_geometry.stderr.43918.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/task_geometry.stdout.43918.gz">task_geometry.stdout.43918.gz</a>
</ul>
<!-- attachment="task_geometry.stdout.43918.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/task_geometry.stderr.43953.gz">task_geometry.stderr.43953.gz</a>
</ul>
<!-- attachment="task_geometry.stderr.43953.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/task_geometry.stdout.43953.gz">task_geometry.stdout.43953.gz</a>
</ul>
<!-- attachment="task_geometry.stdout.43953.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/build_OpenMPI.sh">build_OpenMPI.sh</a>
</ul>
<!-- attachment="build_OpenMPI.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28955/ompi_info--all.gz">ompi_info--all.gz</a>
</ul>
<!-- attachment="ompi_info--all.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28956.php">Nathan Smith: "[OMPI users] openib MTL not working via slurm after update"</a>
<li><strong>Previous message:</strong> <a href="28954.php">George Bosilca: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28958.php">Ralph Castain: "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="28958.php">Ralph Castain: "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
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
