<?
$subject_val = "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 10:17:28 2009" -->
<!-- isoreceived="20090204151728" -->
<!-- sent="Wed, 4 Feb 2009 16:17:01 +0100" -->
<!-- isosent="20090204151701" -->
<!-- name="Christoph van W&#252;llen" -->
<!-- email="vanWullen_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c" -->
<!-- id="7F209935-4697-4D10-BD41-2AB40D610106_at_Chemie.Uni-KL.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1FFED86F-145A-4E67-92FD-B693ED5EED39_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-02-04 10:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.02.2009 um 16:06 schrieb George Bosilca:
<br>
<p><span class="quotelev1">&gt; Christoph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're absolutely right. In addition to your comment about the  
</span><br>
<span class="quotelev1">&gt; syntactically wrong line of code, even in the case when the fortran  
</span><br>
<span class="quotelev1">&gt; and C integers have the same length, we modify the value pointer by  
</span><br>
<span class="quotelev1">&gt; the fortran IN only argument.
</span><br>
<span class="quotelev1">&gt; A patch is on the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I came across OpenMPI because it seems to be the only MPI implementation
<br>
which supports 64-bit integers in FORTRAN, so I had a huge propensity
<br>
stepping into this bug.
<br>
<p>It may be wrong in either case, but gcc accepts the code when building
<br>
for 32-bit FORTRAN integers, while compilation fails in the other case.
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
<li><strong>Next message:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5368.php">George Bosilca: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Reply:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
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
