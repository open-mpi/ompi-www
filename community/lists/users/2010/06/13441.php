<?
$subject_val = "[OMPI users] MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 13:47:04 2010" -->
<!-- isoreceived="20100629174704" -->
<!-- sent="Tue, 29 Jun 2010 11:46:50 -0600" -->
<!-- isosent="20100629174650" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_GET beyond 2 GB displacement" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA4147F27E3B7_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 13:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13442.php">Íõî£: "Re: [OMPI users] about MPI"</a>
<li><strong>Previous message:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI version: 1.3.3
<br>
<p>Platform: IBM P5
<br>
<p>Built OpenMPI 64-bit (i.e., CFLAGS=-q64, CXXFLAGS=-q64, -FFLAGS=-q64, -FCFLAGS=-q64)
<br>
<p>FORTRAN 90 test program:
<br>
<p>-          Create a large array (3.6 GB of 32-bit INTs)
<br>
<p>-          Initialize MPI
<br>
<p>-          Create a large window to encompass large array (3.6 GB)
<br>
<p>-          Have PE 0 get 1 32-bit INT from PE1
<br>
<p>o   Lock the window
<br>
<p>o   MPI_GET
<br>
<p>o   Unlock the window
<br>
<p>-          Free the window
<br>
<p>-          Finalize MPI
<br>
<p>Built FORTRAN 90 test program 64-bit using OpenMPI wrapper compiler (mpif90 -q64).
<br>
<p>Why would this MPI_GET work fine with displacements all the way up to just under 2 GB, and then fail as soon as the displacement hits 2 GB?
<br>
<p>The MPI_GET succeeds with a displacement of 2147483644 (4 bytes less than 2 GB).
<br>
<p>I get a segmentation fault (address not mapped) when the displacement is 2147483648 (2 GB) or larger.
<br>
<p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13442.php">Íõî£: "Re: [OMPI users] about MPI"</a>
<li><strong>Previous message:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
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
