<?
$subject_val = "Re: [OMPI users] openmpi on linux-ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:58:49 2008" -->
<!-- isoreceived="20080723135849" -->
<!-- sent="Wed, 23 Jul 2008 15:58:42 +0200" -->
<!-- isosent="20080723135842" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi on linux-ia64" -->
<!-- id="48873912.9020705_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3CDA0B51-4906-4C1E-A3FC-96D53ED4C61B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi on linux-ia64<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 09:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Previous message:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI users] openmpi on linux-ia64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, our code is supposed to call MPI_init prior to any further MPI_* call.
<br>
Anyway, I finally found the reason for this error (sorry I spoiled the 
<br>
list being unable to find my own mistakes...) and corrected our build 
<br>
system.
<br>
<p>For different reasons, we generate a sequential and a parallel binary 
<br>
(both linked with different openmpi libraries, the sequential one being 
<br>
linked with a fake &quot;mpi&quot; library too that will redefine some methods 
<br>
when running sequential) of this code.
<br>
I somehow managed to link the sequential binary as:
<br>
&nbsp;&nbsp;my_objects + the_fake_mpi_library + the openmpi libraries needed (cf. 
<br>
what mpicc --show:link says) (the mpi compilers wrappers add necessary 
<br>
flags as a postfix to the build command)
<br>
instead of:
<br>
&nbsp;&nbsp;my_objects + the openmpi libraries needed (cf. what mpicc --show:link 
<br>
says) +the_fake_mpi_library
<br>
As a consequence, when the &quot;sequential&quot; binary called MPI_init (assuming 
<br>
it was the method redefined in the fake_mpi library), it was actually 
<br>
calling the the MPI_init method from the openmpi library.
<br>
<p>Thanks for your reactivity Jeff,
<br>
Eloi
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 23, 2008, at 8:33 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been encountering some issues with openmpi on a linux-ia64 platform
</span><br>
<span class="quotelev2">&gt;&gt; (centos-4.6 with gcc-4.3.1) within a call to MPI_Query_thread (in a fake
</span><br>
<span class="quotelev2">&gt;&gt; single process run):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An error occurred in MPI_Query_thread
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error message usually means that you have invoked an MPI function 
</span><br>
<span class="quotelev1">&gt; call (e.g., MPI_Query_thread) before you invoked MPI_Init (or 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that what your code is doing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Previous message:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI users] openmpi on linux-ia64"</a>
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
