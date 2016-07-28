<?
$subject_val = "Re: [OMPI devel] MPI_Buffer_detach fortran binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 12:28:38 2015" -->
<!-- isoreceived="20150629162838" -->
<!-- sent="Mon, 29 Jun 2015 16:28:36 +0000" -->
<!-- isosent="20150629162836" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Buffer_detach fortran binding" -->
<!-- id="6E0A966C-9F3B-4DC8-9351-C2B4235DBD2C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tJDG4gtV46YYMFCmOnJZfpCpnRF98gXxOhtDpOTmWEfQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Buffer_detach fortran binding<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 12:28:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17560.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="17557.php">Gilles Gouaillardet: "[OMPI devel] MPI_Buffer_detach fortran binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch.
<br>
<p>The type was wrong, too -- it should be C_PTR.
<br>
<p>I pushed a fix to master and PRs to v1.10 and v2.x -- can you review?
<br>
<p><p><p><span class="quotelev1">&gt; On Jun 29, 2015, at 10:44 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the first argument of MPI_Buffer_detach is
</span><br>
<span class="quotelev1">&gt;    OMPI_FORTRAN_IGNORE_TKR_TYPE, INTENT(IN) :: buffer_addr
</span><br>
<span class="quotelev1">&gt; from use-mpi-f08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however, the standard states this is TYPE(C_PTR), INTENT(OUT)
</span><br>
<span class="quotelev1">&gt; (and yes, this is very counter intuitive ... at first glance only)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you please confirm this is an Open MPI bug ?
</span><br>
<span class="quotelev1">&gt; (and not an anticipated errata)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If a bug, then I can fix it tomorrow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17557.php">http://www.open-mpi.org/community/lists/devel/2015/06/17557.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17560.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="17557.php">Gilles Gouaillardet: "[OMPI devel] MPI_Buffer_detach fortran binding"</a>
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
