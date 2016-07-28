<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:56:57 2009" -->
<!-- isoreceived="20090123125657" -->
<!-- sent="Fri, 23 Jan 2009 07:56:48 -0500" -->
<!-- isosent="20090123125648" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="4979BE90.9090507_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Prayer.1.3.1.0901231245400.21855_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Date:</strong> 2009-01-23 07:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD is set to a large integer (1140850688) in MPICH2 so I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wonder if there is something in HDF5 and/or NetCDF4 that doesn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like 0 for the communicator handle. At any rate, you have given me  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some ideas of things to check in the debugger tomorrow. Is there a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; safe way to change what MPI_COMM_WORLD is set to in OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No.  Open MPI's Fortran MPI_COMM_WORLD is pretty much hard-wired to 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a mistake.  But probably non-trivial to fix.
</span><br>
<p>I'm a little confused as to what you mean. What are you saying is a 
<br>
mistake? That Open MPI's Fortran MPI_COMM_WORLD is hard-wired to 0? That 
<br>
MPICH2 setting MPI_COMM_WORLD to 1140850688? or that HDF5 and/or 
<br>
NetCDF-4 may not like 0 for a communicator handle?
<br>
<p><p>Thanks,
<br>
Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5289.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
