<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.8 Bug Report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 09:18:08 2015" -->
<!-- isoreceived="20150827131808" -->
<!-- sent="Thu, 27 Aug 2015 22:18:07 +0900" -->
<!-- isosent="20150827131807" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.8 Bug Report" -->
<!-- id="CAAkFZ5uhQWWNpOtpXsyQjqzNnAoZgWqJYOz3HtmNeDFunOOJ_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150827204243.774053ccd961f6a3ea3ed658_at_jp.fujitsu.com" -->
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
<strong>Date:</strong> 2015-08-27 09:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17882.php">Mark Santcroos: "[OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kawashima-san,
<br>
<p>you are right, I mixed MPI_Buffer_detach and MPI_Win_detach
<br>
sorry for the confusion
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, August 27, 2015, Kawashima, Takahiro &lt;
<br>
t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; there is a comment in the source code to explain this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you point where the comment is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can find a comment about MPI_Buffer_detach in
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/mpif-h/buffer_detach_f.c and
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/use-mpi-f08/buffer_detach.c files.
</span><br>
<span class="quotelev1">&gt; But the situation is different form MPI_Buffer_detach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The declaration of MPI_Win_detach is not changed since
</span><br>
<span class="quotelev1">&gt; the one-sided code was merged into the trunk at commit
</span><br>
<span class="quotelev1">&gt; 49d938de (svn r30816).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; iirc, the MPI_Win_detach discrepancy with the standard is intentional in
</span><br>
<span class="quotelev2">&gt; &gt; fortran 2008,
</span><br>
<span class="quotelev2">&gt; &gt; there is a comment in the source code to explain this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday, August 27, 2015, Kawashima, Takahiro &lt;
</span><br>
<span class="quotelev2">&gt; &gt; t-kawashima_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oh, I also noticed it yesterday and was about to report it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And one more, the base parameter of MPI_Win_detach.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Takahiro Kawashima
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I noticed a bug in the definition of the 3 MPI-3 RMA functions
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Compare_and_swap, MPI_Fetch_and_op and MPI_Raccumulate.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; According to the MPI standard, the origin_addr and compare_addr
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; parameters of these functions have a const attribute, which is
</span><br>
<span class="quotelev1">&gt; missing
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; in OpenMPI's mpi.h (OpenMPI 1.8.x and 1.10.0).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Michael
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17880.php">http://www.open-mpi.org/community/lists/devel/2015/08/17880.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17882.php">Mark Santcroos: "[OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17880.php">Kawashima, Takahiro: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
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
