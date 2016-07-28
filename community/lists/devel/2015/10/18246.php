<?
$subject_val = "Re: [OMPI devel] 1.10.1 overnight failures - Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 19:03:58 2015" -->
<!-- isoreceived="20151022230358" -->
<!-- sent="Fri, 23 Oct 2015 07:39:41 +0900" -->
<!-- isosent="20151022223941" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.1 overnight failures - Fortran" -->
<!-- id="CAAkFZ5t3gw8B6Z6oiMoEHEXg2poGFEL6CEZDKy1ovtM4sbZK+A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53C2D723-5F1B-49FB-A520-D7DEB09C75BE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.1 overnight failures - Fortran<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 18:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18247.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18245.php">Justin Cinkelj: "[OMPI devel] How is session dir used?"</a>
<li><strong>In reply to:</strong> <a href="18243.php">Ralph Castain: "[OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18247.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Reply:</strong> <a href="18247.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>these are MPI 3 functions that did not land yet into the v1.10 series.
<br>
only MPI_Aint arithmetic functions landed into v1.10 so it seems configure
<br>
is confused
<br>
(e.g. this test was previously not built, and now it is ...)
<br>
<p>I ll try to back port the missing functions
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, October 23, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m seeing a bunch of build failures in the overnight tests with this
</span><br>
<span class="quotelev1">&gt; signature:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aint_mpifh.o: In function `do_the_test_':
</span><br>
<span class="quotelev1">&gt; aint_mpifh.f90:(.text+0x138): undefined reference to
</span><br>
<span class="quotelev1">&gt; `mpi_win_create_dynamic_'
</span><br>
<span class="quotelev1">&gt; aint_mpifh.f90:(.text+0x16b): undefined reference to `mpi_win_attach_'
</span><br>
<span class="quotelev1">&gt; aint_mpifh.f90:(.text+0x34c): undefined reference to `mpi_win_detach_'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks to me like something got left out of the prior PRs?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18243.php">http://www.open-mpi.org/community/lists/devel/2015/10/18243.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18247.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18245.php">Justin Cinkelj: "[OMPI devel] How is session dir used?"</a>
<li><strong>In reply to:</strong> <a href="18243.php">Ralph Castain: "[OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18247.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Reply:</strong> <a href="18247.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
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
