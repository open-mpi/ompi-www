<?
$subject_val = "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 01:01:09 2012" -->
<!-- isoreceived="20121203060109" -->
<!-- sent="Mon, 3 Dec 2012 15:00:59 +0900" -->
<!-- isosent="20121203060059" -->
<!-- name="Valentin Clement" -->
<!-- email="valentin.clement_at_[hidden]" -->
<!-- subject="[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)" -->
<!-- id="65EB48C4-19C0-45B2-9917-6928C1B444E4_at_riken.jp" -->
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
<strong>Subject:</strong> [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)<br>
<strong>From:</strong> Valentin Clement (<em>valentin.clement_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 01:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Maybe reply:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Maybe reply:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Maybe reply:</strong> <a href="20883.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've seen a deadlock occurred in a very strange situation. If I'm running my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no problem. 
<br>
<p>On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple only if my ethernet interface is enable. If I disable it, the deadlock is gone. 
<br>
<p>Anyone has an idea of what is happening ? I joined the output of ompi_info on both OS X and Linux. 
<br>
<p>Regards,
<br>
<p>Valentin 
<br>
<p><p>-----------------------------------------------------------------------------------------
<br>
Valentin Clement - Student trainee at RIKEN AICS
<br>
Programming Environment Research Team
<br>
valentin.clement_at_[hidden]
<br>
valentin.clement_at_[hidden]
<br>
Master thesis project
<br>
POP-C++ on the K Computer 
<br>
Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
<br>
Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
<br>
-----------------------------------------------------------------------------------------
<br>
<p><p>
<p><p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20853/ompi_info.tar.bz2">ompi_info.tar.bz2</a>
</ul>
<!-- attachment="ompi_info.tar.bz2" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20853/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20853/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Maybe reply:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Maybe reply:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Maybe reply:</strong> <a href="20883.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
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
