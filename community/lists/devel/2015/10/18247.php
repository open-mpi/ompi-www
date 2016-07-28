<?
$subject_val = "Re: [OMPI devel] 1.10.1 overnight failures - Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 21:42:46 2015" -->
<!-- isoreceived="20151023014246" -->
<!-- sent="Fri, 23 Oct 2015 10:42:38 +0900" -->
<!-- isosent="20151023014238" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.1 overnight failures - Fortran" -->
<!-- id="5629908E.5050701_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5t3gw8B6Z6oiMoEHEXg2poGFEL6CEZDKy1ovtM4sbZK+A_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 21:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>In reply to:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Reply:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i made PR #711 <a href="https://github.com/open-mpi/ompi-release/pull/711">https://github.com/open-mpi/ompi-release/pull/711</a> to fix 
<br>
this issue
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/23/2015 7:39 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; these are MPI 3 functions that did not land yet into the v1.10 series.
</span><br>
<span class="quotelev1">&gt; only MPI_Aint arithmetic functions landed into v1.10 so it seems 
</span><br>
<span class="quotelev1">&gt; configure is confused
</span><br>
<span class="quotelev1">&gt; (e.g. this test was previously not built, and now it is ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ll try to back port the missing functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, October 23, 2015, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I&#146;m seeing a bunch of build failures in the overnight tests with
</span><br>
<span class="quotelev1">&gt;     this signature:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     aint_mpifh.o: In function `do_the_test_':
</span><br>
<span class="quotelev1">&gt;     aint_mpifh.f90:(.text+0x138): undefined reference to
</span><br>
<span class="quotelev1">&gt;     `mpi_win_create_dynamic_'
</span><br>
<span class="quotelev1">&gt;     aint_mpifh.f90:(.text+0x16b): undefined reference to `mpi_win_attach_'
</span><br>
<span class="quotelev1">&gt;     aint_mpifh.f90:(.text+0x34c): undefined reference to `mpi_win_detach_'
</span><br>
<span class="quotelev1">&gt;     collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Looks to me like something got left out of the prior PRs?
</span><br>
<span class="quotelev1">&gt;     Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18243.php">http://www.open-mpi.org/community/lists/devel/2015/10/18243.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18246.php">http://www.open-mpi.org/community/lists/devel/2015/10/18246.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>In reply to:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Reply:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
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
