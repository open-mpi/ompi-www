<?
$subject_val = "[OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 17:33:58 2012" -->
<!-- isoreceived="20120726213358" -->
<!-- sent="Thu, 26 Jul 2012 16:33:54 -0500" -->
<!-- isosent="20120726213354" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="[OMPI users] restricting a job to a set of hosts" -->
<!-- id="CAM=OgihKE_3kWK0S4AaOw5J+TzK0XNgSS10dxNvbbniqcCZZrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] restricting a job to a set of hosts<br>
<strong>From:</strong> Erik Nelson (<em>nelsonerikd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 17:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19830.php">Brock Palen: "[OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19828.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a purely parallel job that runs ~100 processes. Each process has
<br>
~identical
<br>
overhead so the speed of the program is dominated by the slowest processor.
<br>
<p>For this reason, I would like to restrict the job to a specific set of
<br>
identical (fast)
<br>
processors on our cluster.
<br>
<p>I read the FAQ on -hosts and -hostfile, but it is still unclear to me what
<br>
affect these
<br>
directives will have in a queuing environment.
<br>
<p>Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot;
<br>
environment as :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qsub -pe mpich 101 jobfile.job
<br>
<p>where jobfile contains the command
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 101 -nolocal ./executable
<br>
<p>I would like to restrict the job to nodes compute-5-1 to compute-5-32 on
<br>
our machine,
<br>
each containing 8 cpu's (slots). How do I go about this?
<br>
<p>Thanks, Erik
<br>
<p><pre>
-- 
Erik Nelson
Howard Hughes Medical Institute
6001 Forest Park Blvd., Room ND10.124
Dallas, Texas 75235-9050
p : 214 645 5981
f : 214 645 5948
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19830.php">Brock Palen: "[OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19828.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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
