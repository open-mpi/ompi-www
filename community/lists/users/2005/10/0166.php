<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 03:58:42 2005" -->
<!-- isoreceived="20051010085842" -->
<!-- sent="Mon, 10 Oct 2005 10:58:24 +0200" -->
<!-- isosent="20051010085824" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="[O-MPI users] MPI ABI" -->
<!-- id="434A2D30.40706_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42D264D9.4020003_at_fft.be" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 03:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0165.php">Brian Barrett: "Re: [O-MPI users] Config error on MAC os X (10.4)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/07/0096.php">Toon Knapen: "[O-MPI users] MorphMPI idea in reality ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0197.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Coming back to the MPI ABI discussion (which dates back from a long time
<br>
ago though), just one additional question (to which MPI implementers
<br>
certainly have an interesting opinion):
<br>
<p>Why don't we use the fortran interface instead of the C interface.
<br>
Different C interfaces for MPI are likely incompatible because the type
<br>
behind the MPI_Group etc. might all be different. Same goes for the
<br>
named constants. In the fortran interface however the type's are always
<br>
guaranteed to be int's.
<br>
<p>Thus AFAICT if my app uses the fortran interface of MPI I can link my
<br>
app with a dynamic library (say libmpi.so) which I can make point to
<br>
either e.g. an MPICH implementation or POE. right?
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0165.php">Brian Barrett: "Re: [O-MPI users] Config error on MAC os X (10.4)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/07/0096.php">Toon Knapen: "[O-MPI users] MorphMPI idea in reality ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0197.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
