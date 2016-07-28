<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 22:11:03 2009" -->
<!-- isoreceived="20090123031103" -->
<!-- sent="Thu, 22 Jan 2009 22:10:57 -0500" -->
<!-- isosent="20090123031057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="097EF165-D1F9-4935-98F5-621FF65FD8A1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49787FF6.1070706_at_marine.rutgers.edu" -->
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
<strong>Date:</strong> 2009-01-22 22:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5282.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers]	Bug#512616:	[openmpi]	missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2009, at 9:17 AM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; I have attached the requested info. I included the sources to the  
</span><br>
<span class="quotelev1">&gt; test program(s). I have left the copies of the .mod files. It should  
</span><br>
<span class="quotelev1">&gt; be mentioned that I did not write this code. It was written by the  
</span><br>
<span class="quotelev1">&gt; developer of the ROMS ocean model, Hernan Arango.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how helpful this code will be unless you happen to have  
</span><br>
<span class="quotelev1">&gt; HDF5/NetCDF4 already installed. I looked at the code NetCDF4 uses to  
</span><br>
<span class="quotelev1">&gt; test parallel IO but it is all in C so it wasn't very helpful. If  
</span><br>
<span class="quotelev1">&gt; you have the NetCDF4 source code the parallel IO tests are in the  
</span><br>
<span class="quotelev1">&gt; nc_test4 directory.
</span><br>
<p>Mm, yes, that would be difficult for me to build/run.  Can you or your  
<br>
developer trim it down to a small independent example?
<br>
<p>FWIW, this is not happening for me -- I can call subroutines or  
<br>
functions with MPI_COMM_WORLD and then use that value (which should be  
<br>
0, btw) to call an MPI function such as MPI_COMM_DUP.
<br>
<p>Per your prior comment about the debugging not being able to find  
<br>
MPI_COMM_WORLD -- perhaps the compiler is optimizing it out...?  Or  
<br>
perhaps it was transmorgified to lower case (i.e., try seeing if  
<br>
&quot;mpi_comm_world&quot; exists -- I see it in your mpi.mod file)...?
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
<li><strong>Next message:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5282.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers]	Bug#512616:	[openmpi]	missing symbols?"</a>
<li><strong>In reply to:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5284.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
