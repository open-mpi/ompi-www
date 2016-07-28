<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:45:44 2009" -->
<!-- isoreceived="20090123124544" -->
<!-- sent="23 Jan 2009 12:45:40 +0000" -->
<!-- isosent="20090123124540" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="Prayer.1.3.1.0901231245400.21855_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5288.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5290.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5290.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;On Jan 23, 2009, at 12:30 AM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have looked for both MPI_COMM_WORLD and mpi_comm_world but neither  
</span><br>
<span class="quotelev2">&gt;&gt; can be found by totalview (the parallel debugger we use) when I  
</span><br>
<span class="quotelev2">&gt;&gt; compile with &quot;USE mpi&quot;. When I use &quot;include 'mpif.h'&quot; both  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD and mpi_comm_world are zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm afraid I don't know why that would be.  :-(
</span><br>
<p>It is fairly common for debuggers to not handle Fortran modules properly;
<br>
that is very often not the fault of the debugger, but because the compiler
<br>
has changed from one undocumented format to another.
<br>
<p>However, if I had to bet on the cause of this, I would bet an installation
<br>
problem, with at least one set of paths or parameters set incorrectly or
<br>
incompatibly with other ones.  Now, WHICH set?  Dunno.
<br>
<p><span class="quotelev2">&gt;&gt; MPI_COMM_WORLD is set to a large integer (1140850688) in MPICH2 so I  
</span><br>
<span class="quotelev2">&gt;&gt; wonder if there is something in HDF5 and/or NetCDF4 that doesn't  
</span><br>
<span class="quotelev2">&gt;&gt; like 0 for the communicator handle. At any rate, you have given me  
</span><br>
<span class="quotelev2">&gt;&gt; some ideas of things to check in the debugger tomorrow. Is there a  
</span><br>
<span class="quotelev2">&gt;&gt; safe way to change what MPI_COMM_WORLD is set to in OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;No.  Open MPI's Fortran MPI_COMM_WORLD is pretty much hard-wired to 0.
</span><br>
<p>That's a mistake.  But probably non-trivial to fix.
<br>
<p><p>Regards,
<br>
Nick Maclaren,
<br>
University of Cambridge Computing Service,
<br>
New Museums Site, Pembroke Street, Cambridge CB2 3QH, England.
<br>
Email:  nmm1_at_[hidden]
<br>
Tel.:  +44 1223 334761    Fax:  +44 1223 334679
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5288.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5286.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5290.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5290.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5291.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
