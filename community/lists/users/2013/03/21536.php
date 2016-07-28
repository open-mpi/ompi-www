<?
$subject_val = "[OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 18:30:48 2013" -->
<!-- isoreceived="20130313223048" -->
<!-- sent="Wed, 13 Mar 2013 18:30:43 -0400" -->
<!-- isosent="20130313223043" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?" -->
<!-- id="5140FE13.20303_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 18:30:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Previous message:</strong> <a href="21535.php">Jeff Squyres (jsquyres): "Re: [OMPI users] current release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Reply:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI Pros
<br>
<p>Which MPI data type corresponds to ptrdiff_t in C?
<br>
I guess the same question can be asked about size_t.
<br>
<p>The FFTW3.3 MPI API has lots of stuff declared as
<br>
ptrdiff_t, and I need to pass them around with MPI,
<br>
hopefully without size or sign mistakes.
<br>
<p>I am using Open MPI 1.6.3, if this matters.
<br>
My C goes as far as ABC, and in my naive view
<br>
ptrdiff_t is signed and has 64-bits on my x86_64 Linux computer,
<br>
whereas size_t is unsigned also 64-bits, right?
<br>
<p>If I grep mpi.h for ptrdiff I see that OPAL_PTRDIFF_TYPE is
<br>
MPI_Aint, which is indeed an MPI pointer/address type.
<br>
However, this is OPAL, not generic MPI.
<br>
Moreover, MPI_Aint seems to be unsigned, right?
<br>
[And this would make it a bad match for ptrdiff_t,
<br>
but maybe a good match for size_t.]
<br>
Or is MPI_Aint signed?
<br>
<p>[grep result:]
<br>
147:/* type to use for ptrdiff_t, if it does not exist, set to ptrdiff_t 
<br>
if it does exist */
<br>
148:#define OPAL_PTRDIFF_TYPE ptrdiff_t
<br>
218:/* include for ptrdiff_t */
<br>
317:typedef OPAL_PTRDIFF_TYPE MPI_Aint;
<br>
<p>OTOH, there are bunches of signed and unsigned integer MPI types
<br>
in mpi.h.
<br>
In a 64-bit machine, besides MPI_Aint,
<br>
I guess possible candidates would be
<br>
MPI_INT64_T and MPI_UINT64_T.
<br>
But which one: signed or unsigned?
<br>
<p>Even if I write a little function to find an MPI integer type
<br>
with the same extent as sizeof(ptrdiff_t), it may still
<br>
return more than one type, and be problematic to pick one
<br>
(e.g., signed or unsigned?).
<br>
<p>Any help is appreciated.
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Previous message:</strong> <a href="21535.php">Jeff Squyres (jsquyres): "Re: [OMPI users] current release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Reply:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
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
