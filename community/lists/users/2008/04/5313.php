<?
$subject_val = "[OMPI users] Oversubscription performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 02:31:03 2008" -->
<!-- isoreceived="20080404063103" -->
<!-- sent="Fri, 4 Apr 2008 16:30:51 +1000" -->
<!-- isosent="20080404063051" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="[OMPI users] Oversubscription performance problem" -->
<!-- id="8acca4520804032330u4d91596cv6c8934e6d30812ad_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Oversubscription performance problem<br>
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 02:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5314.php">George Bosilca: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5343.php">Lars Andersson: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Reply:</strong> <a href="5343.php">Lars Andersson: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Reply:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm just in the progress of moving our application from LAM/MPI to
<br>
OpenMPI, mainly because OpenMPI makes it easier for a user to run
<br>
multiple jobs(MPI universa) simultaneously. This is useful if a user
<br>
wants to run smaller experiments without disturbing a large experiment
<br>
running in the background). I've been evaluation the performance using
<br>
a simple test, running on a hetrogenous cluster of 2 x dual core
<br>
Opteron machines, a couple of dual core P4 Xeon machines and a 8 core
<br>
Core2 machine. The main structure of the application is a master rank
<br>
distributing jobs packages to the rest of the ranks and collecting the
<br>
results. We don't use any fancy MPI features but rather see it as an
<br>
efficient low-level tool for broadcasting and transferring data.
<br>
<p>When a single user runs a job (fully subscribed nodes, but not
<br>
oversubscribed, i.e one process per cpu-core) on an otherwise unloaded
<br>
cluster both LAM/MPI and OpenMPI average runtimes of about 1m33s
<br>
(OpenMPI has a slightly lower average).
<br>
<p>When I start the same job simultaneously as two different users (thus
<br>
oversubscribing the nodes 2x) under LAM/MPI, the two jobs finish as an
<br>
average time of about 3m, thus scaling very well (we use the -ssi rpi
<br>
sysv option to mpirun under LAM/MPI to avoid busy waiting).
<br>
<p>When running the same second experiment under OpenMPI, the average
<br>
runtime jumps up to about 3m30s, with runs occasionally taking more
<br>
than 4 minutes to complete. I do use the &quot;--mca mpi_yield_when_idle 1&quot;
<br>
option to mpirun, but it doesn't seem to make any difference. I've
<br>
also tried setting the environment variable
<br>
OMPI_MCA_mpi_yield_when_idle=1, but still no change. ompi_info says:
<br>
<p>ompi_info --param all all | grep yield
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;1&quot;)
<br>
<p>The cluster is used for various tasks, running MPI applications as
<br>
well as non-MPI applications, so we would like to avoid spending too
<br>
much cycles on busy-waiting. Any ideas on how to tweak OpenMPI to get
<br>
better performance and more cooperative behavior in this case would be
<br>
greatly appreciated.
<br>
<p>Cheers,
<br>
<p>Lars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5314.php">George Bosilca: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5343.php">Lars Andersson: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Reply:</strong> <a href="5343.php">Lars Andersson: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Reply:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
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
