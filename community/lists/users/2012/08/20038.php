<?
$subject_val = "[OMPI users] MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 17:06:06 2012" -->
<!-- isoreceived="20120828210606" -->
<!-- sent="Tue, 28 Aug 2012 14:06:00 -0700" -->
<!-- isosent="20120828210600" -->
<!-- name="Tony Raymond" -->
<!-- email="traymond_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init" -->
<!-- id="9CE85F8D-3641-4EA4-926B-49AC8AC58FF1_at_bcgsc.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init<br>
<strong>From:</strong> Tony Raymond (<em>traymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 17:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20039.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20037.php">Jeff Squyres: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20039.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Reply:</strong> <a href="20039.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have an application that uses openMPI and creates some child processes using fork(). I've been trying to catch SIGCHLD in order to check the exit status of these processes so that the program will exit if a child errors out. 
<br>
<p>I've found out that if I set the SIGCHLD handler before calling MPI_Init, MPI_Init sets the SIGCHLD handler so that my application appears to ignore SIGCHLD, but if I set my handler after MPI_Init, the application handles SIGCHLD appropriately. 
<br>
<p>I'm wondering if there are any problems that could come up by changing the SIGCHLD handler, and why MPI_Init modifies the SIGCHLD handler in the first place.
<br>
<p>Thanks,
<br>
Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20039.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="20037.php">Jeff Squyres: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20039.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<li><strong>Reply:</strong> <a href="20039.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
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
