<?
$subject_val = "[OMPI users] memory allocation - Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 16:34:33 2010" -->
<!-- isoreceived="20101112213433" -->
<!-- sent="Fri, 12 Nov 2010 13:34:28 -0800" -->
<!-- isosent="20101112213428" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] memory allocation - Fortran" -->
<!-- id="20101112213428.GA28927_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> [OMPI users] memory allocation - Fortran<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 16:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14746.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>section 4.11
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi-20-html/node54.htm">http://www.mpi-forum.org/docs/mpi-20-html/node54.htm</a>
<br>
<p>describes how memory allocation can be done in a Fortran program:
<br>
<p>REAL A 
<br>
POINTER (P, A(100,100))   ! no memory is allocated 
<br>
CALL MPI_ALLOC_MEM(4*100*100, MPI_INFO_NULL, P, IERR) 
<br>
! memory is allocated 
<br>
... 
<br>
A(3,5) = 2.71; 
<br>
... 
<br>
CALL MPI_FREE_MEM(A, IERR) ! memory is freed
<br>
<p>However, this uses non-standard Cray pointers. I am wondering how this
<br>
can be coded using the standard iso_c_binding module - I do not have
<br>
much experience using that module, but apparently it provides C
<br>
pointers:
<br>
<p>use, intrinsic :: iso_c_binding, only: c_float, c_ptr, c_f_pointer
<br>
real (c_float), pointer :: a(:,:)
<br>
type (c_ptr) :: p
<br>
<p>call MPI_Alloc_mem(4*100*100, MPI_INFO_NULL, p, ierr)
<br>
call c_f_pointer(p, a, (/100, 100/))
<br>
...
<br>
a(3,5) = 2.71
<br>
...
<br>
call MPI_Free_mem(a, ierr)
<br>
<p>Is that going to work? Or is there a different way of recoding the
<br>
example?
<br>
<p>Thanks in advance!
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14746.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
