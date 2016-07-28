<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 16 08:13:29 2005" -->
<!-- isoreceived="20050816131329" -->
<!-- sent="Tue, 16 Aug 2005 09:13:27 -0400" -->
<!-- isosent="20050816131327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpi opaque object fortran type" -->
<!-- id="380382c4c896da32d1a5b70f4703accf_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.1.2.2.20050815144202.036811a8_at_ca.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-16 08:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Raul Mosquera: "[O-MPI users] How pass an array??"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<li><strong>In reply to:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2005, at 5:55 PM, Ben Allan wrote:
<br>
<p><span class="quotelev1">&gt; I deal with mixed-language c/c++/fortran codes and it appears I might 
</span><br>
<span class="quotelev1">&gt; be able to define an inter-language opaque reference (e.g. a Comm) as 
</span><br>
<span class="quotelev1">&gt; C int64t for passing to fortran and using the MPI_Comm_c2f/f2c macros 
</span><br>
<span class="quotelev1">&gt; to encode/decode it on the C side.
</span><br>
<p>Based on reading your entire post, it sounds like you are trying to 
<br>
have a Fortran-compiler-independent application/library (i.e., have 
<br>
software that works regardless of what size the Fortran compiler uses 
<br>
for INTEGER).  Is that right?
<br>
<p><span class="quotelev1">&gt; The MPI standard says that on the FORTRAN side the object handles are 
</span><br>
<span class="quotelev1">&gt; of type INTEGER.  Presumably, then to make sure things are not done 
</span><br>
<span class="quotelev1">&gt; accidently, the FORTRAN interface receiving such an integer from C 
</span><br>
<span class="quotelev1">&gt; would declare it INTEGER*8, not default the integer size at the whim 
</span><br>
<span class="quotelev1">&gt; of the FORTRAN compiler.  On the fortran side, one might need to step 
</span><br>
<span class="quotelev1">&gt; the int64t down to an int32t (INTEGER*4) before calling to MPI on some 
</span><br>
<span class="quotelev1">&gt; of the compilers I know of today.
</span><br>
<p>(I assume you're talking about your application here, not the MPI 
<br>
implementation, right?)
<br>
<p>Yes, I don't see any reason this won't work, but be sure you don't pass 
<br>
INTEGER*8's into MPI Fortran calls directly.  A trivial example 
<br>
example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(comm, size, ierr)
<br>
<p>comm, size, and ierr should still be INTEGERs, or the MPI 
<br>
implementation's C code is going to run into problems (i.e., it's going 
<br>
to assume that it receives pointers to items that are of the same 
<br>
length as sizeof(INTEGER)).
<br>
<p><span class="quotelev1">&gt; My question for the MPI implementation wizards is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know of a current platform where f90 INTEGER is *bigger* 
</span><br>
<span class="quotelev1">&gt; than C int64t/INTEGER*8 (e.g. default is INTEGER*16, yikes!) or a 
</span><br>
<span class="quotelev1">&gt; where misplaced fortran compiler option might make that true?
</span><br>
<p>I'm not enough of a Fortran wizard to know, but I will say that in 
<br>
LAM's and Open MPI's configure scripts, we dynamically figure out the 
<br>
size of a Fortran INTEGER and find a corresponding C integer type for 
<br>
it.  I have not personally see a case where we couldn't find a matching 
<br>
C integer type (and we certainly don't assume that int128_t exists! :-) 
<br>
), but you shouldn't take that as an iron-clad guarantee...
<br>
<p><span class="quotelev1">&gt; Due to an automated code generator in the processing (babel) I have to 
</span><br>
<span class="quotelev1">&gt; pick one of INTEGER*4 or INTEGER*8 and stick to it. I'm guessing 
</span><br>
<span class="quotelev1">&gt; INTEGER*4 would be a poor choice for MPI opaque objects in calling on 
</span><br>
<span class="quotelev1">&gt; some MPI implementations.
</span><br>
<p>As long as your code can handle the transfer from your type back and 
<br>
forth to an INTEGER, you should be ok.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Raul Mosquera: "[O-MPI users] How pass an array??"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<li><strong>In reply to:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
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
