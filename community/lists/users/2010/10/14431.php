<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 14:45:48 2010" -->
<!-- isoreceived="20101008184548" -->
<!-- sent="Fri, 8 Oct 2010 14:45:51 -0400" -->
<!-- isosent="20101008184551" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="7BA13F6E-01BE-4553-A1DC-778C82586B19_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E25B05422FCA8_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Date:</strong> 2010-10-08 14:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14430.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14434.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good!
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Oct 8, 2010, at 2:34 PM, &quot;Richard Walsh&quot; &lt;Richard.Walsh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding building HD5 ... the OpenMPI 1.4.1 wrapper using the May 2010
</span><br>
<span class="quotelev1">&gt; release of the Intel Compiler Toolkit Cluster Edition (ICTCE) worked for me.
</span><br>
<span class="quotelev1">&gt; Here is my config.log header:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ ./configure CC=mpicc CXX=mpiCC F77=mpif77 FC=mpif90 --enable-parallel --prefix=/share/apps/hdf5/1.8.4p --with-zlib=/share/apps/zlib/1.2.3/lib --with-szlib=/share/apps/szip/2.1/lib --disable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With some tweaking I was able to build the whole WRF and NCAR-NCL
</span><br>
<span class="quotelev1">&gt; stack here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; 718-982-3319
</span><br>
<span class="quotelev1">&gt; 612-382-4620
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason does give the heart pause;
</span><br>
<span class="quotelev1">&gt; As the heart gives reason fits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yet, to live where reason always rules;
</span><br>
<span class="quotelev1">&gt; Is to kill one's heart with wits.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Gus Correa [gus_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 08, 2010 1:58 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2010, at 1:00 PM, G&#195;&#182;tz Waschk wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have solved this problem myself. The trick is not to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler wrappers but icc and ifort directly. But in that case you'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to link to libmpi_f77 manually and set the variable RUNPARALLEL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a working mpirun command.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Strange.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Be sure to see: <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Typically the Makefiles have hardwired items that cannot be overridden
</span><br>
<span class="quotelev1">&gt; (e.g. -lmpich for the MPI library name passed to the linker,
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14432.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14430.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14434.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
