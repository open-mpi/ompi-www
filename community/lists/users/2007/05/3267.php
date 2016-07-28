<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 12:23:26 2007" -->
<!-- isoreceived="20070514162326" -->
<!-- sent="Mon, 14 May 2007 17:21:53 +0100" -->
<!-- isosent="20070514162153" -->
<!-- name="Nym" -->
<!-- email="neverwillreply_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_TYPE_STRUCT Not" -->
<!-- id="eb51483d0705140921x6cd7b285l573b99bdf68fb823_at_mail.gmail.com" -->
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
<strong>From:</strong> Nym (<em>neverwillreply_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 12:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="3266.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3271.php">Brian Barrett: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Reply:</strong> <a href="3271.php">Brian Barrett: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to use MPI_TYPE_STRUCT in a 64 bit Fortran 90 program. I'm
<br>
using the Intel Fortran Compiler 9.1.040 (and C/C++ compilers
<br>
9.1.045).
<br>
<p>If I try to call MPI_TYPE_STRUCT with the array of displacements that
<br>
are of type INTEGER(KIND=MPI_ADDRESS_KIND), then I get a compilation
<br>
error:
<br>
<p>fortcom: Error: ./test_basic.f90, line 34: There is no matching
<br>
specific subroutine for this generic subroutine call.
<br>
[MPI_TYPE_STRUCT]
<br>
&nbsp;&nbsp;CALL MPI_TYPE_STRUCT(numTypes, blockLengths, displacements, oldTypes &amp;
<br>
-------^
<br>
compilation aborted for ./test_basic.f90 (code 1)
<br>
<p>Attached is a small test program to demonstrate this. I thought
<br>
according to the MPI specs that the displacement array should be of
<br>
type MPI_ADDRESS_KIND. Am I wrong?
<br>
<p>Michal.
<br>
<p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3267/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3267/test_basic.f90">test_basic.f90</a>
</ul>
<!-- attachment="test_basic.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="3266.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3271.php">Brian Barrett: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Reply:</strong> <a href="3271.php">Brian Barrett: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
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
