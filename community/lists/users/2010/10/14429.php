<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 14:33:37 2010" -->
<!-- isoreceived="20101008183337" -->
<!-- sent="Fri, 8 Oct 2010 14:27:21 -0400" -->
<!-- isosent="20101008182721" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="5E9838FE224683419F586D9DF46A0E25B05422FCA8_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 14:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14430.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14428.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14434.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Regarding building HD5 ... the OpenMPI 1.4.1 wrapper using the May 2010
<br>
release of the Intel Compiler Toolkit Cluster Edition (ICTCE) worked for me.
<br>
Here is my config.log header:
<br>
<p>&nbsp;&nbsp;$ ./configure CC=mpicc CXX=mpiCC F77=mpif77 FC=mpif90 --enable-parallel --prefix=/share/apps/hdf5/1.8.4p --with-zlib=/share/apps/zlib/1.2.3/lib --with-szlib=/share/apps/szip/2.1/lib --disable-shared
<br>
<p>With some tweaking I was able to build the whole WRF and NCAR-NCL
<br>
stack here.
<br>
<p>Regards,
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
718-982-3319
<br>
612-382-4620
<br>
<p>Reason does give the heart pause;
<br>
As the heart gives reason fits.
<br>
<p>Yet, to live where reason always rules;
<br>
Is to kill one's heart with wits.
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Gus Correa [gus_at_[hidden]]
<br>
Sent: Friday, October 08, 2010 1:58 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 8, 2010, at 1:00 PM, G&#246;tz Waschk wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have solved this problem myself. The trick is not to use the
</span><br>
<span class="quotelev2">&gt;&gt; compiler wrappers but icc and ifort directly. But in that case you'll
</span><br>
<span class="quotelev2">&gt;&gt; have to link to libmpi_f77 manually and set the variable RUNPARALLEL
</span><br>
<span class="quotelev2">&gt;&gt; to a working mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be sure to see: <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi Jeff
<br>
<p>Sadly, it is not only HDF5.
<br>
<p>There are several public domain parallel programs which we use here
<br>
that refuse to build using the mpi wrappers (from OpenMPI,
<br>
MPICH2, or MVAPICH2), and require the same &quot;deconstruction&quot;
<br>
of configuration and make files that Gotz probably had to face.
<br>
<p>Typically the Makefiles have hardwired items that cannot be overridden
<br>
(e.g. -lmpich for the MPI library name passed to the linker,
<br>
compiler options and flags that are vendor-specific, logic that
<br>
separates MPI, OpenMP, and serial compilation, etc).
<br>
I have used the FAQ link you sent many times in this regard.
<br>
<p>I would guess that even more than the end users of MPI,
<br>
it is the developers of public domain software
<br>
(and of software projects funded by public grants)
<br>
who need to be convinced that the right thing
<br>
to do is to ensure that MPI wrappers will compile their
<br>
software without problems.
<br>
<p>My $0.02
<br>
Gus Correa
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Think green before you print this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14430.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14428.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14434.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
