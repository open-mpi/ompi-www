<?
$subject_val = "[OMPI users] mpicc -showme:compile output (possible bug report)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 07:57:33 2008" -->
<!-- isoreceived="20080416115733" -->
<!-- sent="Wed, 16 Apr 2008 13:57:24 +0200" -->
<!-- isosent="20080416115724" -->
<!-- name="Crni Gorac" -->
<!-- email="cgorac_at_[hidden]" -->
<!-- subject="[OMPI users] mpicc -showme:compile output (possible bug report)" -->
<!-- id="c02b565a0804160457r332beb10j4aa9944ae850cf8a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpicc -showme:compile output (possible bug report)<br>
<strong>From:</strong> Crni Gorac (<em>cgorac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 07:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5398.php">Richard Treumann: "Re: [OMPI users] MPI_CANCEL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am using CMake build system along with an OpenMPI based project.
<br>
CMake is using mpicc's -showme:compile and -showme:link output to
<br>
build compile and link flags; however, it is expecting -showme:compile
<br>
to dump at least some &quot;-I&quot; flags, that it is further parsing in order
<br>
to build the list of include directories.  As OpenMPI's mpicc (OpenMPI
<br>
compiled from source on a Slackware Linux 12.0 installation) is not
<br>
printing alike flags, CMake is unable to utilize OpenMPI.  So, I'm
<br>
wondering would it be possible to change OpenMPI to dump the path to
<br>
the directory where mpi.h installed in an &quot;-I&quot; flag, when mpicc
<br>
-showme:compile command run?
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5398.php">Richard Treumann: "Re: [OMPI users] MPI_CANCEL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
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
