<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:54:04 2009" -->
<!-- isoreceived="20090123115404" -->
<!-- sent="Fri, 23 Jan 2009 06:53:58 -0500" -->
<!-- isosent="20090123115358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="BCE18061-3465-4E13-ADE1-765D0E6A4D85_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497955F4.9070502_at_marine.rutgers.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5285.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5288.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 12:30 AM, David Robertson wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I don't know how helpful this code will be unless you happen to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have HDF5/NetCDF4 already installed. I looked at the code NetCDF4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses to test parallel IO but it is all in C so it wasn't very  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helpful. If you have the NetCDF4 source code the parallel IO tests  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are in the nc_test4 directory.
</span><br>
<span class="quotelev2">&gt;&gt; Mm, yes, that would be difficult for me to build/run.  Can you or  
</span><br>
<span class="quotelev2">&gt;&gt; your developer trim it down to a small independent example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will talk to the developer tomorrow to see if he can come up with  
</span><br>
<span class="quotelev1">&gt; an independent example.
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, this is not happening for me -- I can call subroutines or  
</span><br>
<span class="quotelev2">&gt;&gt; functions with MPI_COMM_WORLD and then use that value (which should  
</span><br>
<span class="quotelev2">&gt;&gt; be 0, btw) to call an MPI function such as MPI_COMM_DUP.
</span><br>
<span class="quotelev2">&gt;&gt; Per your prior comment about the debugging not being able to find  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD -- perhaps the compiler is optimizing it out...?  Or  
</span><br>
<span class="quotelev2">&gt;&gt; perhaps it was transmorgified to lower case (i.e., try seeing if  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_comm_world&quot; exists -- I see it in your mpi.mod file)...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have looked for both MPI_COMM_WORLD and mpi_comm_world but neither  
</span><br>
<span class="quotelev1">&gt; can be found by totalview (the parallel debugger we use) when I  
</span><br>
<span class="quotelev1">&gt; compile with &quot;USE mpi&quot;. When I use &quot;include 'mpif.h'&quot; both  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD and mpi_comm_world are zero.
</span><br>
<p>I'm afraid I don't know why that would be.  :-(
<br>
<p><span class="quotelev1">&gt; MPI_COMM_WORLD is set to a large integer (1140850688) in MPICH2 so I  
</span><br>
<span class="quotelev1">&gt; wonder if there is something in HDF5 and/or NetCDF4 that doesn't  
</span><br>
<span class="quotelev1">&gt; like 0 for the communicator handle. At any rate, you have given me  
</span><br>
<span class="quotelev1">&gt; some ideas of things to check in the debugger tomorrow. Is there a  
</span><br>
<span class="quotelev1">&gt; safe way to change what MPI_COMM_WORLD is set to in OpenMPI?
</span><br>
<p>No.  Open MPI's Fortran MPI_COMM_WORLD is pretty much hard-wired to 0.
<br>
<p>One question: you *are* using different HDF5/NetCDF4 installations for  
<br>
Open MPI and MPICH2, right?  I.e., all the software that uses MPI  
<br>
needs to be separately compiled/installed against different MPI  
<br>
implementations.  Case in point: if you have HDF5 compiled against  
<br>
MPICH2, it will not work properly with Open MPI-compiled MPI  
<br>
applications.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5285.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5288.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
