<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.8 Bug Report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 06:18:59 2015" -->
<!-- isoreceived="20150827101859" -->
<!-- sent="Thu, 27 Aug 2015 19:18:58 +0900" -->
<!-- isosent="20150827101858" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.8 Bug Report" -->
<!-- id="CAAkFZ5taU7xKZ9dbqVji5ONXRZix6h0kQjgAVV1HGDwPFZ63zQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150827184134.73f229c688d90323a30230f8_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 06:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
iirc, the MPI_Win_detach discrepancy with the standard is intentional in
<br>
fortran 2008,
<br>
there is a comment in the source code to explain this.
<br>
<p>On Thursday, August 27, 2015, Kawashima, Takahiro &lt;
<br>
t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oh, I also noticed it yesterday and was about to report it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And one more, the base parameter of MPI_Win_detach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I noticed a bug in the definition of the 3 MPI-3 RMA functions
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Compare_and_swap, MPI_Fetch_and_op and MPI_Raccumulate.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; According to the MPI standard, the origin_addr and compare_addr
</span><br>
<span class="quotelev2">&gt; &gt; parameters of these functions have a const attribute, which is missing
</span><br>
<span class="quotelev2">&gt; &gt; in OpenMPI's mpi.h (OpenMPI 1.8.x and 1.10.0).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Michael
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17878.php">http://www.open-mpi.org/community/lists/devel/2015/08/17878.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17878.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
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
