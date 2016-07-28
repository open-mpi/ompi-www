<?
$subject_val = "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 10:19:37 2009" -->
<!-- isoreceived="20090204151937" -->
<!-- sent="Wed, 04 Feb 2009 10:19:16 -0500" -->
<!-- isosent="20090204151916" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c" -->
<!-- id="200902041019.17302.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="68C50629-4247-40DE-B5B4-A6DE3AFFC852_at_Chemie.Uni-KL.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 10:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5369.php">Christoph van W&#252;llen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5367.php">Christoph van W&#252;llen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mr. Wuellen,
<br>
thanks for the bug report!
<br>
<p>On Wednesday 04 February 2009 09:21:38 am Christoph van W&#252;llen wrote:
<br>
<span class="quotelev1">&gt; there is an error in the above mentioned file, in line 74:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr)) {
</span><br>
<span class="quotelev1">&gt;         OMPI_ARRAY_INT_2_FINT(coords, OMPI_FINT_2_INT(*maxdims));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the OMPI_ARRAY_INT_2_FINT macro uses the second argument with
</span><br>
<span class="quotelev1">&gt; pre-decrement, such that it must be an lvalue and should not
</span><br>
<span class="quotelev1">&gt; contain a type-cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the built at hand this code expands to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (0 == (int) (*ierr)) {
</span><br>
<span class="quotelev1">&gt;         while((int) (*maxdims) &gt; 0) { coords[(int) (*maxdims) - 1] =
</span><br>
<span class="quotelev1">&gt; c_coords[(int) (*maxdims) - 1]; --(int) (*maxdims); } free(c_coords);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if MPI_FINT is, e.g. &quot;long long&quot; (that is, if FORTRAN integers are
</span><br>
<span class="quotelev1">&gt; 64 bit, but C int/long is 32 bit), and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --(int) (*maxdims)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is not correct syntactically. I guess one could omit the
</span><br>
<span class="quotelev1">&gt; OMPI_FINT_2_INT in the second line, but you should check this.
</span><br>
<p>Good catch.
<br>
That was introduced by me in r14762, where I didn't notice the lvalue usage.
<br>
<p>This should be moved into the v1.3.1 release.
<br>
<p><span class="quotelev1">&gt; Anyway, bad testing. The code has probably never been build for
</span><br>
<span class="quotelev1">&gt; FORTRAN with 64-bit integers.
</span><br>
Hmm, not by me after r8254, when the same applied to sizeof(logical)!= 
<br>
sizeof(int)... Then I tested these cases.
<br>
<p>Thanks again.
<br>
<p>With best regards,
<br>
Rainer Keller
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: (865) 241-6293
Oak Ridge National Lab          Fax: (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5369.php">Christoph van W&#252;llen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5367.php">Christoph van W&#252;llen: "[OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
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
