<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 16:56:21 2005" -->
<!-- isoreceived="20050815215621" -->
<!-- sent="Mon, 15 Aug 2005 14:55:43 -0700" -->
<!-- isosent="20050815215543" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="[O-MPI users] mpi opaque object fortran type" -->
<!-- id="6.2.1.2.2.20050815144202.036811a8_at_ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="276DCEB7-64B5-4F46-8F19-457358B46E44_at_cs.utk.edu" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-15 16:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Jeff Squyres: "Re: [O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Previous message:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Jeff Squyres: "Re: [O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Reply:</strong> <a href="0109.php">Jeff Squyres: "Re: [O-MPI users] mpi opaque object fortran type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I deal with mixed-language c/c++/fortran codes and
<br>
it appears I might be able to define an inter-language
<br>
opaque reference (e.g. a Comm) as C int64t for passing
<br>
to fortran and using the MPI_Comm_c2f/f2c macros to encode/decode it on the C side. 
<br>
<p>The MPI standard says that on the FORTRAN side the object handles are of type INTEGER. 
<br>
Presumably, then to make sure things are not done accidently, the FORTRAN interface receiving
<br>
such an integer from C would declare it INTEGER*8, not default the integer size at the whim of
<br>
the FORTRAN compiler.
<br>
On the fortran side, one might need to step the int64t down to an int32t (INTEGER*4)
<br>
before calling to MPI on some of the compilers I know of today. 
<br>
<p>My question for the MPI implementation wizards is:
<br>
<p>Does anyone know of a current platform where
<br>
f90 INTEGER is *bigger* than C int64t/INTEGER*8 (e.g. default
<br>
is INTEGER*16, yikes!) or a where misplaced fortran
<br>
compiler option might make that true?
<br>
<p>Due to an automated code generator in the processing (babel)
<br>
I have to pick one of INTEGER*4 or INTEGER*8 and stick to it.
<br>
I'm guessing INTEGER*4 would be a poor choice for MPI opaque
<br>
objects in calling on some MPI implementations.
<br>
<p>Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Jeff Squyres: "Re: [O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Previous message:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Jeff Squyres: "Re: [O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Reply:</strong> <a href="0109.php">Jeff Squyres: "Re: [O-MPI users] mpi opaque object fortran type"</a>
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
