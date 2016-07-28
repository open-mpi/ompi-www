<?
$subject_val = "[OMPI users] run openMPI jobs with SGE,";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  9 00:03:06 2010" -->
<!-- isoreceived="20100409040306" -->
<!-- sent="Fri, 9 Apr 2010 00:02:42 -0400" -->
<!-- isosent="20100409040242" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="[OMPI users] run openMPI jobs with SGE," -->
<!-- id="j2qb66245471004082102o3460897auf3f26031b700708b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] run openMPI jobs with SGE,<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-09 00:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12593.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_MAX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>after some days of work and testing, i managed to install SGE on two
<br>
machines, also installed openMPI 1.4.1 for each one.
<br>
<p>SGE is working, i can submit jobs and it schedules the jobs to the available
<br>
cores total of 6,
<br>
<p>my problem is that im trying to run an openMPI job and i cant.
<br>
<p>this is an example of what i am trying.
<br>
<p>$qrsh -verbose -pe pempi mpirun -np 6 hostname
<br>
Your job 105 (&quot;mpirun&quot;) has been submitted
<br>
waiting for interactive job to be scheduled ...
<br>
<p>Your &quot;qrsh&quot; request could not be scheduled, try again later.
<br>
<p>im not sure what this can be,
<br>
in the ompi_info i have gridengine support.
<br>
<p>where do you recommend to look ??
<br>
thanks in advance
<br>
<p>Cristobal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12593.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_MAX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12595.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Reply:</strong> <a href="12596.php">Huynh Thuc Cuoc: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
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
