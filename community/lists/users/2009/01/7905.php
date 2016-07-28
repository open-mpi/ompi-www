<?
$subject_val = "[OMPI users] Installing OpenMPI for Intel Fortran on OSX??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 18:32:23 2009" -->
<!-- isoreceived="20090130233223" -->
<!-- sent="Fri, 30 Jan 2009 15:32:15 -0800" -->
<!-- isosent="20090130233215" -->
<!-- name="Goldstein, Bruce E" -->
<!-- email="bruce.e.goldstein_at_[hidden]" -->
<!-- subject="[OMPI users] Installing OpenMPI for Intel Fortran on OSX??" -->
<!-- id="C5A8CDFF.18C8D%Bruce.E.Goldstein_at_jpl.nasa.gov" -->
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
<strong>Subject:</strong> [OMPI users] Installing OpenMPI for Intel Fortran on OSX??<br>
<strong>From:</strong> Goldstein, Bruce E (<em>bruce.e.goldstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 18:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Previous message:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Reply:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I OSX 10.5, have Intel Fortran, but I do not have Intel C, so need to compile OpenMPI using gcc, which is supposed to work.
<br>
When I run the configure script I get an error message about
<br>
configure: error: C and Fortran 77 compilers are not link compatible.  Can not continue.
<br>
<p>I am guessing that the problem is that the Intel Fortran is compiling for a 64 bit architecture, and gcc is by default compiling for
<br>
32 bit.  I tried setting an environment variable CFLAGS=-m64, but this did not help.  I am really a novice at passing compiler
<br>
flags to things inside scripts, and also, not knowing these flags, and, also, maybe I tried to pass the wrong flag value.  I would appreciate it
<br>
if anyone who knows what to do could provide a very specific recipe for exactly what I need to do to fix this problem.
<br>
Thanks very much.  -bg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7905/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Previous message:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Reply:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
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
