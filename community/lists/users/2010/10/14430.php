<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 14:45:26 2010" -->
<!-- isoreceived="20101008184526" -->
<!-- sent="Fri, 8 Oct 2010 14:45:27 -0400" -->
<!-- isosent="20101008184527" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="24654A5B-3074-43F0-A175-69B71E31E94D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4CAF5BDA.7010803_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 14:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been trying to convince people to use thewrappers unless they have a *really, really good* reason not to for years. :(
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Oct 8, 2010, at 1:59 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2010, at 1:00 PM, G&#195;&#182;tz Waschk wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have solved this problem myself. The trick is not to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler wrappers but icc and ifort directly. But in that case you'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to link to libmpi_f77 manually and set the variable RUNPARALLEL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a working mpirun command.
</span><br>
<span class="quotelev2">&gt;&gt; Strange.
</span><br>
<span class="quotelev2">&gt;&gt; Be sure to see: <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
</span><br>
<span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sadly, it is not only HDF5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are several public domain parallel programs which we use here
</span><br>
<span class="quotelev1">&gt; that refuse to build using the mpi wrappers (from OpenMPI,
</span><br>
<span class="quotelev1">&gt; MPICH2, or MVAPICH2), and require the same &quot;deconstruction&quot;
</span><br>
<span class="quotelev1">&gt; of configuration and make files that Gotz probably had to face.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typically the Makefiles have hardwired items that cannot be overridden (e.g. -lmpich for the MPI library name passed to the linker,
</span><br>
<span class="quotelev1">&gt; compiler options and flags that are vendor-specific, logic that
</span><br>
<span class="quotelev1">&gt; separates MPI, OpenMP, and serial compilation, etc).
</span><br>
<span class="quotelev1">&gt; I have used the FAQ link you sent many times in this regard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would guess that even more than the end users of MPI,
</span><br>
<span class="quotelev1">&gt; it is the developers of public domain software
</span><br>
<span class="quotelev1">&gt; (and of software projects funded by public grants)
</span><br>
<span class="quotelev1">&gt; who need to be convinced that the right thing
</span><br>
<span class="quotelev1">&gt; to do is to ensure that MPI wrappers will compile their
</span><br>
<span class="quotelev1">&gt; software without problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
