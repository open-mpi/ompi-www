<?
$subject_val = "[OMPI devel] FORTRAN_LOGICAL warnings on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 10:35:25 2008" -->
<!-- isoreceived="20080216153525" -->
<!-- sent="Sat, 16 Feb 2008 10:34:57 -0500" -->
<!-- isosent="20080216153457" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] FORTRAN_LOGICAL warnings on trunk" -->
<!-- id="D5EF3685-9D67-4661-B4F8-91E71D5BBFF4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] FORTRAN_LOGICAL warnings on trunk<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-16 10:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<li><strong>Previous message:</strong> <a href="3256.php">Tim Prins: "Re: [OMPI devel] C++ errhandler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<li><strong>Reply:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a heads up. I noticed this morning that the Open MPI trunk  
<br>
(r17473) is giving quite a number of warnings of the form (14 sets of  
<br>
this):
<br>
----------------------------------
<br>
/../ompi/include/mpi.h:632:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL1&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:635:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL2&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:638:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL4&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:641:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL8&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:751:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL1&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:754:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL2&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:757:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL4&quot;  
<br>
is not defined
<br>
/../ompi/include/mpi.h:760:5: warning: &quot;OMPI_HAVE_FORTRAN_LOGICAL8&quot;  
<br>
is not defined
<br>
----------------------------------
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<li><strong>Previous message:</strong> <a href="3256.php">Tim Prins: "Re: [OMPI devel] C++ errhandler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<li><strong>Reply:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
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
