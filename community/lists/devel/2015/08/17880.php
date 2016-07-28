<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.8 Bug Report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 07:42:49 2015" -->
<!-- isoreceived="20150827114249" -->
<!-- sent="Thu, 27 Aug 2015 11:42:43 +0000" -->
<!-- isosent="20150827114243" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.8 Bug Report" -->
<!-- id="20150827204243.774053ccd961f6a3ea3ed658_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="CAAkFZ5taU7xKZ9dbqVji5ONXRZix6h0kQjgAVV1HGDwPFZ63zQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI 1.8 Bug Report<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 07:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p><span class="quotelev1">&gt; there is a comment in the source code to explain this.
</span><br>
<p>Could you point where the comment is?
<br>
<p>I can find a comment about MPI_Buffer_detach in
<br>
ompi/mpi/fortran/mpif-h/buffer_detach_f.c and
<br>
ompi/mpi/fortran/use-mpi-f08/buffer_detach.c files.
<br>
But the situation is different form MPI_Buffer_detach.
<br>
<p>The declaration of MPI_Win_detach is not changed since
<br>
the one-sided code was merged into the trunk at commit
<br>
49d938de (svn r30816).
<br>
<p>Regards,
<br>
Takahiro Kawashima
<br>
<p><span class="quotelev1">&gt; iirc, the MPI_Win_detach discrepancy with the standard is intentional in
</span><br>
<span class="quotelev1">&gt; fortran 2008,
</span><br>
<span class="quotelev1">&gt; there is a comment in the source code to explain this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, August 27, 2015, Kawashima, Takahiro &lt;
</span><br>
<span class="quotelev1">&gt; t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oh, I also noticed it yesterday and was about to report it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And one more, the base parameter of MPI_Win_detach.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Takahiro Kawashima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I noticed a bug in the definition of the 3 MPI-3 RMA functions
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Compare_and_swap, MPI_Fetch_and_op and MPI_Raccumulate.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; According to the MPI standard, the origin_addr and compare_addr
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parameters of these functions have a const attribute, which is missing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in OpenMPI's mpi.h (OpenMPI 1.8.x and 1.10.0).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Michael
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
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
