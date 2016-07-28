<?
$subject_val = "[OMPI users] mpirun and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 20:01:47 2016" -->
<!-- isoreceived="20160608000147" -->
<!-- sent="Tue, 7 Jun 2016 18:01:45 -0600" -->
<!-- isosent="20160608000145" -->
<!-- name="Ken Nielson" -->
<!-- email="knielson_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun and Torque" -->
<!-- id="CADvLK3dG3dU=e+W8++c3niQk68AzegVWfdwjrM_1EJzL+ziKNA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun and Torque<br>
<strong>From:</strong> Ken Nielson (<em>knielson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 20:01:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Previous message:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Reply:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using openmpi version 1.10.2 with Torque 6.0.1.
<br>
<p>I launch a job with the following syntax:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qsub -L tasks=2:lprocs=2:maxtpn=1 -I
<br>
<p>This starts an interactive job which is using two nodes.
<br>
<p>I then use mpirun as follows from the command line of the interactive job.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 sleep 60
<br>
<p>What I would like to see happen is a call made to tm_spawn for each sleep
<br>
for each node. That would be two per node. Instead I get a single tm_spawn
<br>
request which launches mpirun and mpirun launches the two sleep processes.
<br>
<p>Is there a command line to direct mpi run to call tm_spawn for each count
<br>
in np?
<br>
<p><p><p><pre>
-- 
[image: Adaptive Computing] &lt;<a href="http://www.adaptivecomputing.com">http://www.adaptivecomputing.com</a>&gt;
[image: Twitter] &lt;<a href="http://twitter.com/AdaptiveMoab">http://twitter.com/AdaptiveMoab</a>&gt; [image: LinkedIn]
&lt;<a href="http://www.linkedin.com/company/448673?goback=.fcs_GLHD_adaptive+computing_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits">http://www.linkedin.com/company/448673?goback=.fcs_GLHD_adaptive+computing_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits</a>&gt;
[image:
YouTube] &lt;<a href="http://www.youtube.com/adaptivecomputing">http://www.youtube.com/adaptivecomputing</a>&gt; [image: GooglePlus]
&lt;<a href="https://plus.google.com/u/0/102155039310685515037/posts">https://plus.google.com/u/0/102155039310685515037/posts</a>&gt; [image: Facebook]
&lt;<a href="http://www.facebook.com/pages/Adaptive-Computing/314449798572695?fref=ts">http://www.facebook.com/pages/Adaptive-Computing/314449798572695?fref=ts</a>&gt;
[image:
RSS] &lt;<a href="http://www.adaptivecomputing.com/feed">http://www.adaptivecomputing.com/feed</a>&gt;
Ken Nielson Sr. Software Engineer
+1 801.717.3700 office    +1 801.717.3738 fax
1712 S. East Bay Blvd, Suite 300     Provo, UT 84606
www.adaptivecomputing.com
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Previous message:</strong> <a href="29396.php">Ralph Castain: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Reply:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
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
