<?
$subject_val = "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:08:35 2014" -->
<!-- isoreceived="20140424180835" -->
<!-- sent="Thu, 24 Apr 2014 14:08:33 -0400" -->
<!-- isosent="20140424180833" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk" -->
<!-- id="CAMJJpkVUGiU4BP222zZW29bLmni3pgdx+2kv3MBn3ygd1PWuhQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53588F89.8090408_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 14:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14597.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14595.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Reply:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r31524 is fixing this corner case. The problem was that persistent
<br>
request with MPI_RPOC_NULL were never activated, so the wait* function
<br>
was taking the if corresponding to inactive requests.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Thu, Apr 24, 2014 at 12:14 AM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is attached an oversimplified version of the MPI_Recv_init_null_c
</span><br>
<span class="quotelev1">&gt; test from the
</span><br>
<span class="quotelev1">&gt; intel test suite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the test works fine with v1.6, v1.7 and v1.8 branches but fails with the
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i wonder wether the bug is in OpenMPI or the test itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on one hand, we could consider there is a bug in OpenMPI :
</span><br>
<span class="quotelev1">&gt; status.MPI_SOURCE should be MPI_PROC_NULL since we explicitly posted a
</span><br>
<span class="quotelev1">&gt; recv request with MPI_PROC_NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on the other hand, (mpi specs, chapter 3.7.3 and
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3475">https://svn.open-mpi.org/trac/ompi/ticket/3475</a>)
</span><br>
<span class="quotelev1">&gt; we could consider the returned value is not significant, and hence
</span><br>
<span class="quotelev1">&gt; MPI_Wait should return an
</span><br>
<span class="quotelev1">&gt; empty status (and empty status has source=MPI_ANY_SOURCE per the MPI specs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for what it's worth, this test is a success with mpich (e.g.
</span><br>
<span class="quotelev1">&gt; status.MPI_SOURCE is MPI_PROC_NULL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is the correct interpretation of the MPI specs and what should be
</span><br>
<span class="quotelev1">&gt; done ?
</span><br>
<span class="quotelev1">&gt; (e.g. fix OpenMPI or fix/skip the test ?)
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14589.php">http://www.open-mpi.org/community/lists/devel/2014/04/14589.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14597.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14595.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Reply:</strong> <a href="14599.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
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
