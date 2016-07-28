<?
$subject_val = "[OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 19:08:19 2016" -->
<!-- isoreceived="20160418230819" -->
<!-- sent="Mon, 18 Apr 2016 19:08:11 -0400" -->
<!-- isosent="20160418230811" -->
<!-- name="Farid Parpia" -->
<!-- email="parpia_at_[hidden]" -->
<!-- subject="[OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2" -->
<!-- id="201604182308.u3IN8GJK024565_at_d03av01.boulder.ibm.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2<br>
<strong>From:</strong> Farid Parpia (<em>parpia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 19:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28960.php">Tom Rosmond: "[OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28958.php">Ralph Castain: "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="28963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>

<br>
Thank you for looking into this!
<br>

<br>
The job
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

<br>
export PATH=/usr/local/OpenMPI/1.10.2/bin:${PATH}
<br>
export LD_LIBRARY_PATH=/usr/local/OpenMPI/1.10.2/lib:${PATH}
<br>

<br>
export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
<br>

<br>
mpirun /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
<br>
fails with the message
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>

<br>
&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        p10a55
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>

<br>
You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
(Please see the first set of LSF output files in the original message.)  I 
<br>
did not expect this failure: I haven't asked for more than one MPI process 
<br>
per core.  In an attempt to work around this failure, I added the option 
<br>
-bind-to core:overload-allowed, and this led to 20 MPI processes (there 
<br>
are 20 cores on each host in this cluster) being started on just one of 
<br>
the hosts.  That is, neither job did what I expected.
<br>

<br>
I will try to put you in touch with someone in LSF development 
<br>
immediately.
<br>

<br>
Regards,
<br>

<br>
Farid Parpia          IBM Corporation: 710-2-RF28, 2455 South Road, 
<br>
Poughkeepsie, NY 12601, USA; Telephone: (845) 433-8420 = Tie Line 293-8420
<br>
----- Forwarded by Farid Parpia/Poughkeepsie/IBM on 04/18/2016 06:56 PM 
<br>
-----
<br>

<br>
From:   Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:   04/18/2016 06:53 PM
<br>
Subject:        Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 
<br>
1.10.2
<br>
Sent by:        &quot;users&quot; &lt;users-bounces_at_[hidden]&gt;
<br>

<br>

<br>

<br>
Hi Farid
<br>

<br>
I&#226;&#128;&#153;m not sure I understand what you are asking here. If your point is that 
<br>
OMPI isn&#226;&#128;&#153;t placing and binding procs per the LSF directives, then you are 
<br>
quite correct. The LSF folks never provided that level of integration, nor 
<br>
the info by which we might have derived it (e.g., how the pattern is 
<br>
communicated).
<br>

<br>
If someone from IBM would like to provide that code, we&#226;&#128;&#153;d be happy to help 
<br>
answer questions as to how to perform the integration.
<br>

<br>

<br>
On Apr 18, 2016, at 10:13 AM, Farid Parpia &lt;parpia_at_[hidden]&gt; wrote:
<br>

<br>
Greetings!
<br>

<br>
The following batch script will successfully demo the use of LSF's task 
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

<br>
export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
<br>

<br>
ldd /gpfs/gpfs_stage1/parpia/PE_tests/reporter/bin/reporter_MPI
<br>

<br>
/gpfs/gpfs_stage1/parpia/PE_tests/reporter/bin/reporter_MPI
<br>
The reporter_MPIutility simply reports the hostname and affinitization for 
<br>
each MPI process, and is what I use to verify that the job is distributed 
<br>
to allocated nodes and on them with the affinitization expected.  Typical 
<br>
output is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, 
<br>

<br>
To adapt the above batch script to use OpenMPI, I modify it to
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

<br>
export PATH=/usr/local/OpenMPI/1.10.2/bin:${PATH}
<br>
export LD_LIBRARY_PATH=/usr/local/OpenMPI/1.10.2/lib:${PATH}
<br>

<br>
export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
<br>

<br>
echo &quot;=== LSB_DJOB_HOSTFILE ===&quot;
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

<br>
ldd /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
<br>

<br>
mpirun /gpfs/gpfs_stage1/parpia/OpenMPI_tests/reporter/bin/reporter_MPI
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

<br>
Regards,
<br>

<br>
Farid Parpia          IBM Corporation: 710-2-RF28, 2455 South Road, 
<br>
Poughkeepsie, NY 12601, USA; Telephone: (845) 433-8420 = Tie Line 293-8420
<br>
&lt;task_geometry.stdout.43915.gz&gt;&lt;task_geometry.stderr.43915.gz&gt;&lt;task_geometry.stderr.43918.gz&gt;&lt;task_geometry.stdout.43918.gz&gt;&lt;task_geometry.stderr.43953.gz&gt;&lt;task_geometry.stdout.43953.gz&gt;&lt;build_OpenMPI.sh&gt;&lt;ompi_info--all.gz&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/04/28955.php">http://www.open-mpi.org/community/lists/users/2016/04/28955.php</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/04/28958.php">http://www.open-mpi.org/community/lists/users/2016/04/28958.php</a>
<br>

<br>

<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28960.php">Tom Rosmond: "[OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28958.php">Ralph Castain: "Re: [OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="28963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
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
