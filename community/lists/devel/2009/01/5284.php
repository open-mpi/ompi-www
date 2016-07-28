<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 00:30:21 2009" -->
<!-- isoreceived="20090123053021" -->
<!-- sent="Fri, 23 Jan 2009 00:30:28 -0500" -->
<!-- isosent="20090123053028" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="497955F4.9070502_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="097EF165-D1F9-4935-98F5-621FF65FD8A1_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-23 00:30:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5285.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I don't know how helpful this code will be unless you happen to have 
</span><br>
<span class="quotelev2">&gt;&gt; HDF5/NetCDF4 already installed. I looked at the code NetCDF4 uses to 
</span><br>
<span class="quotelev2">&gt;&gt; test parallel IO but it is all in C so it wasn't very helpful. If you 
</span><br>
<span class="quotelev2">&gt;&gt; have the NetCDF4 source code the parallel IO tests are in the nc_test4 
</span><br>
<span class="quotelev2">&gt;&gt; directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mm, yes, that would be difficult for me to build/run.  Can you or your 
</span><br>
<span class="quotelev1">&gt; developer trim it down to a small independent example?
</span><br>
<p>I will talk to the developer tomorrow to see if he can come up with an 
<br>
independent example.
<br>
<p><span class="quotelev1">&gt; FWIW, this is not happening for me -- I can call subroutines or 
</span><br>
<span class="quotelev1">&gt; functions with MPI_COMM_WORLD and then use that value (which should be 
</span><br>
<span class="quotelev1">&gt; 0, btw) to call an MPI function such as MPI_COMM_DUP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per your prior comment about the debugging not being able to find 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD -- perhaps the compiler is optimizing it out...?  Or 
</span><br>
<span class="quotelev1">&gt; perhaps it was transmorgified to lower case (i.e., try seeing if 
</span><br>
<span class="quotelev1">&gt; &quot;mpi_comm_world&quot; exists -- I see it in your mpi.mod file)...?
</span><br>
<p>I have looked for both MPI_COMM_WORLD and mpi_comm_world but neither can 
<br>
be found by totalview (the parallel debugger we use) when I compile with 
<br>
&quot;USE mpi&quot;. When I use &quot;include 'mpif.h'&quot; both MPI_COMM_WORLD and 
<br>
mpi_comm_world are zero. MPI_COMM_WORLD is set to a large integer 
<br>
(1140850688) in MPICH2 so I wonder if there is something in HDF5 and/or 
<br>
NetCDF4 that doesn't like 0 for the communicator handle. At any rate, 
<br>
you have given me some ideas of things to check in the debugger 
<br>
tomorrow. Is there a safe way to change what MPI_COMM_WORLD is set to in 
<br>
OpenMPI?
<br>
<p>I have tried the code I sent you with ifort and gfortran compilations of 
<br>
OpenMPI 1.3 with identical results so I don't think it's PGI's fault.
<br>
<p>Let me know on that MPI_COMM_WORLD value and I'll get back to you tomorrow.
<br>
<p>Thanks,
<br>
Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5285.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5283.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
