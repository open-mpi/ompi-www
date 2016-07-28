<?
$subject_val = "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 03:25:17 2009" -->
<!-- isoreceived="20090206082517" -->
<!-- sent="Fri, 6 Feb 2009 09:25:12 +0100" -->
<!-- isosent="20090206082512" -->
<!-- name="Christoph van W&#252;llen" -->
<!-- email="vanWullen_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c" -->
<!-- id="CDF95278-BB90-4F7E-8608-D63BECF159D8_at_Chemie.Uni-KL.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B03990EB-0D93-4BBA-9413-0ADAAABF81F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c<br>
<strong>From:</strong> Christoph van W&#252;llen (<em>vanWullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 03:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 05.02.2009 um 17:39 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; On Feb 4, 2009, at 10:17 AM, Christoph van W&#252;llen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I came across OpenMPI because it seems to be the only MPI  
</span><br>
<span class="quotelev2">&gt;&gt; implementation
</span><br>
<span class="quotelev2">&gt;&gt; which supports 64-bit integers in FORTRAN, so I had a huge propensity
</span><br>
<span class="quotelev2">&gt;&gt; stepping into this bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I was the one that championed the whole &quot;what if fortran  
</span><br>
<span class="quotelev1">&gt; INTEGERs are different sizes than C int's?&quot; stuff in OMPI, I glad  
</span><br>
<span class="quotelev1">&gt; that we finally have a user who needs it.  :-D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
In many cases, FORTRAN with 8-byte integers even work with
<br>
&quot;plain vanilla&quot; MPI libs, since a MPI_INTEGER8 data type
<br>
is usually available. However, there are cases where integer
<br>
pointers are passed to MPI calls (like MPI_COMM_RANK etc.), and
<br>
if you fail defining the parameter as &quot;INTEGER*4&quot; in your FORTRAN
<br>
program, then you are in trouble. So it is really nice to have
<br>
an MPI FORTRAN interface that works with 64-bit integers
<br>
natively.
<br>
<p>Yours,
<br>
<p>+---------------------------------+----------------------------------+
<br>
| Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
<br>
| TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
<br>
| Erwin-Schr&#246;dinger-Str.          |                                  |
<br>
| D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
<br>
|                                                                    |
<br>
| HomePage:  <a href="http://www.chemie.uni-kl.de/wcms/ag-vanwullen.html">http://www.chemie.uni-kl.de/wcms/ag-vanwullen.html</a>      |
<br>
+---------------------------------+----------------------------------+
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
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
