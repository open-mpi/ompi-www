<?
$subject_val = "[OMPI users] architecture questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 12:11:33 2010" -->
<!-- isoreceived="20101116171133" -->
<!-- sent="Tue, 16 Nov 2010 12:11:29 -0500" -->
<!-- isosent="20101116171129" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="[OMPI users] architecture questions" -->
<!-- id="20101116121129.18996_at_web001.roc2.bluetie.com" -->
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
<strong>Subject:</strong> [OMPI users] architecture questions<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 12:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,I currently have a serial application with a GUI that runs some calculations.My next step is to use OpenMPI with the help of the Boost.MPI wrapper library in C++ to parallelize those calculations.There is a set of static data objects created once at startup or loaded from files.1. In terms of running mpi processes, I've chosen this route: starting up the GUI launches all the MPI processes. They wait listening for calculations to perform (via broadcast?)&#194;&#160;The GUI is the sort of master process.I've used mpirun to launch x processes on the same box. I assume there's a different setup to launch mpi processes on different boxes.Is there a way to hide the explicit launching of the mpi runtime? ie, can the user just start the GUI and the program actually launches the mpi runtime and the program actually becomes 1 of the mpi processes (a master process)2. what are the pros/cons of loading the static data objects individually from each separate mpi process vs broadcasting the static data via MPI itself after only the master reads/sets up the static data?regards,
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
