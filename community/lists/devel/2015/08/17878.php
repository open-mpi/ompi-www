<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.8 Bug Report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 05:41:40 2015" -->
<!-- isoreceived="20150827094140" -->
<!-- sent="Thu, 27 Aug 2015 09:41:35 +0000" -->
<!-- isosent="20150827094135" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.8 Bug Report" -->
<!-- id="20150827184134.73f229c688d90323a30230f8_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="55DED88B.4030108_at_fz-juelich.de" -->
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
<strong>Date:</strong> 2015-08-27 05:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, I also noticed it yesterday and was about to report it.
<br>
<p>And one more, the base parameter of MPI_Win_detach.
<br>
<p>Regards,
<br>
Takahiro Kawashima
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed a bug in the definition of the 3 MPI-3 RMA functions
</span><br>
<span class="quotelev1">&gt; MPI_Compare_and_swap, MPI_Fetch_and_op and MPI_Raccumulate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the MPI standard, the origin_addr and compare_addr
</span><br>
<span class="quotelev1">&gt; parameters of these functions have a const attribute, which is missing
</span><br>
<span class="quotelev1">&gt; in OpenMPI's mpi.h (OpenMPI 1.8.x and 1.10.0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Reply:</strong> <a href="17879.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
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
