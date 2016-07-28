<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:47:50 2009" -->
<!-- isoreceived="20090123124750" -->
<!-- sent="Fri, 23 Jan 2009 07:47:41 -0500" -->
<!-- isosent="20090123124741" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="4979BC6D.6060501_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BCE18061-3465-4E13-ADE1-765D0E6A4D85_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; One question: you *are* using different HDF5/NetCDF4 installations for 
</span><br>
<span class="quotelev1">&gt; Open MPI and MPICH2, right?  I.e., all the software that uses MPI needs 
</span><br>
<span class="quotelev1">&gt; to be separately compiled/installed against different MPI 
</span><br>
<span class="quotelev1">&gt; implementations.  Case in point: if you have HDF5 compiled against 
</span><br>
<span class="quotelev1">&gt; MPICH2, it will not work properly with Open MPI-compiled MPI applications.
</span><br>
<p>Yes, At this point I have more than 8 separate builds of HDF5/NetCDF-4 
<br>
(4 compilers, each with MPICH2 and OpenMPI and 2 versions of both HDF5 
<br>
and NetCDF-4 for some of the compilers). Perhaps I should build them 
<br>
again with debugging since I can't seem to see the values of any of the 
<br>
variables in those libraries with the debugger.
<br>
<p>Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
