<?
$subject_val = "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 13:11:43 2014" -->
<!-- isoreceived="20140919171143" -->
<!-- sent="Fri, 19 Sep 2014 17:11:40 +0000" -->
<!-- isosent="20140919171140" -->
<!-- name="Gan, Qi                    PW" -->
<!-- email="Qi.Gan2_at_[hidden]" -->
<!-- subject="[OMPI users] Can &amp;quot;timeout&amp;quot; be implemented in OpenMPI?" -->
<!-- id="BC61C7775820B1469DB38FAE0D52DCA10BAD2CE6_at_UUSNWE1W.na.utcmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?<br>
<strong>From:</strong> Gan, Qi                    PW (<em>Qi.Gan2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-19 13:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25364.php">George Bosilca: "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25364.php">George Bosilca: "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25364.php">George Bosilca: "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a question about set timeout limit for MPI data transmissions.  Our users run their parallel jobs (with openmpi) on our HPC cluster. Sometimes the job may hang due to unknown reason. In such case a job is still in &quot;RUN&quot; status, all processes of this job are running. But not output is produced (in normal a job writes to the output files periodically). We suspect that is may be caused by the broken MPI communication pipe, which stalls the entire job.
<br>
<p>For example, all processes exchange data at the end of  computations, and synchronize by using MPI_waitall function. If  one of the communication links (e.g. Ethernet, Infiniband) fails and the system is not able to detect it, then all processes are staying with MPI_waitall indefinitely. The whole job still looks &quot;running&quot; but it doesn't do anything useful.
<br>
<p>My question is: is it possible to set up &quot;timeout&quot; flag in MPI functions so that if the time spent by a function (e.g. MPI_waitall) exceeds the preset timeout limit then the function is aborted and the whole job is terminated?
<br>
<p>In our environment, we use OpenMPI v1.4.5 and v1.6.5 on Linux platform. The job scheduling tool is LSF v8.4.
<br>
<p>Thanks for the help,
<br>
<p>Qi
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25364.php">George Bosilca: "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25364.php">George Bosilca: "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25364.php">George Bosilca: "Re: [OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
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
