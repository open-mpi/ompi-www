<?
$subject_val = "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 18:53:26 2016" -->
<!-- isoreceived="20160418225326" -->
<!-- sent="Mon, 18 Apr 2016 15:53:22 -0700" -->
<!-- isosent="20160418225322" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2" -->
<!-- id="6754751F-E491-4A63-BDE5-D7AAE228E06A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201604181713.u3IHDRED021865_at_d03av05.boulder.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 18:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28959.php">Farid Parpia: "[OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28957.php">dpchoudh .: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28955.php">Farid Parpia: "[OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Farid
<br>
<p>I&#226;&#128;&#153;m not sure I understand what you are asking here. If your point is that OMPI isn&#226;&#128;&#153;t placing and binding procs per the LSF directives, then you are quite correct. The LSF folks never provided that level of integration, nor the info by which we might have derived it (e.g., how the pattern is communicated).
<br>
<p>If someone from IBM would like to provide that code, we&#226;&#128;&#153;d be happy to help answer questions as to how to perform the integration.
<br>
<p><p><span class="quotelev1">&gt; On Apr 18, 2016, at 10:13 AM, Farid Parpia &lt;parpia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following batch script will successfully demo the use of LSF's task geometry feature using IBM Parallel Environment:
</span><br>
<span class="quotelev1">&gt; #BUB -J &quot;task_geometry&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -n 9
</span><br>
<span class="quotelev1">&gt; #BSUB -R &quot;span[ptile=3]&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -network &quot;type=sn_single:mode=us&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -R &quot;affinity[core]&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -e &quot;task_geometry.stderr.%J&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -o &quot;task_geometry.stdout.%J&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -q &quot;normal&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -M &quot;800&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -R &quot;rusage[mem=800]&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd /gpfs/gpfs_stage1/parpia/PE_tests/reporter/bin/reporter_MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /gpfs/gpfs_stage1/parpia/PE_tests/reporter/bin/reporter_MPI
</span><br>
<span class="quotelev1">&gt; The reporter_MPIutility simply reports the hostname and affinitization for each MPI process, and is what I use to verify that the job is distributed to allocated nodes and on them with the affinitization expected.  Typical output is
</span><br>
<span class="quotelev1">&gt;         , 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To adapt the above batch script to use OpenMPI, I modify it to
</span><br>
<span class="quotelev1">&gt; #BSUB -J &quot;task_geometry&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -n 9
</span><br>
<span class="quotelev1">&gt; #BSUB -R &quot;span[ptile=3]&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -m &quot;p10a30 p10a33 p10a35 p10a55 p10a58&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -R &quot;affinity[core]&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -e &quot;task_geometry.stderr.%J&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -o &quot;task_geometry.stdout.%J&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -q &quot;normal&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -M &quot;800&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -R &quot;rusage[mem=800]&quot;
</span><br>
<span class="quotelev1">&gt; #BSUB -x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/OpenMPI/1.10.2/bin:${PATH}
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/local/OpenMPI/1.10.2/lib:${PATH}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;=== LSB_DJOB_HOSTFILE ===&quot;
</span><br>
<span class="quotelev1">&gt; cat ${LSB_DJOB_HOSTFILE}
</span><br>
<span class="quotelev1">&gt; echo &quot;=== LSB_AFFINITY_HOSTFILE ===&quot;
</span><br>
<span class="quotelev1">&gt; cat ${LSB_AFFINITY_HOSTFILE}
</span><br>
<span class="quotelev1">&gt; echo &quot;=== LSB_DJOB_RANKFILE ===&quot;
</span><br>
<span class="quotelev1">&gt; cat ${LSB_DJOB_RANKFILE}
</span><br>
<span class="quotelev1">&gt; echo &quot;=========================&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
</span><br>
<span class="quotelev1">&gt; There are additional lines of scripting that I have inserted to help with debugging this failing job.  Here are the output files from the job:
</span><br>
<span class="quotelev1">&gt;         , 
</span><br>
<span class="quotelev1">&gt; If I change the last line of the immediately above job script to
</span><br>
<span class="quotelev1">&gt;         mpirun -bind-to core:overload-allowed /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
</span><br>
<span class="quotelev1">&gt; the job runs through, but the host selection and affinization is completely wrong (you can extract the relevant information with grep &quot;can be sched&quot; *.stdout.* | sort -n -k 9):
</span><br>
<span class="quotelev1">&gt;         , 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.10.2 was built using this script:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; It was installed with
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; executed from the top if the build tree.  Here
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; is the output of
</span><br>
<span class="quotelev1">&gt; ompi_info --all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Farid Parpia          IBM Corporation: 710-2-RF28, 2455 South Road, Poughkeepsie, NY 12601, USA; Telephone: (845) 433-8420 = Tie Line 293-8420
</span><br>
<span class="quotelev1">&gt; &lt;task_geometry.stdout.43915.gz&gt;&lt;task_geometry.stderr.43915.gz&gt;&lt;task_geometry.stderr.43918.gz&gt;&lt;task_geometry.stdout.43918.gz&gt;&lt;task_geometry.stderr.43953.gz&gt;&lt;task_geometry.stdout.43953.gz&gt;&lt;build_OpenMPI.sh&gt;&lt;ompi_info--all.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28955.php">http://www.open-mpi.org/community/lists/users/2016/04/28955.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28959.php">Farid Parpia: "[OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28957.php">dpchoudh .: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28955.php">Farid Parpia: "[OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
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
