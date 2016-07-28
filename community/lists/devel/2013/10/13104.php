<?
$subject_val = "Re: [OMPI devel] oshmem Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 08:33:14 2013" -->
<!-- isoreceived="20131018123314" -->
<!-- sent="Fri, 18 Oct 2013 12:33:11 +0000" -->
<!-- isosent="20131018123311" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem Fortran" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F97C148_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5260C4A7.9030308_at_itseez.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-18 08:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2013, at 1:18 AM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there naming convention related configure options in OMPI?
</span><br>
<span class="quotelev1">&gt; Do you see any objections about --enable-oshmem-xxx or they must be replaced with --enable-shmem-xxx?
</span><br>
<p>Hmm.  Good question.
<br>
<p>I don't know enough about shmem vs. open shmem to say.  Is the API the same?  If the API is the same, then you make a good point -- perhaps we should replace all --with-oshmem-xxx and --enable-oshmem-xxx with --with-shmem-xxx and --enable-shmem-xxx, respectively.
<br>
<p>Supporting this view, we have several --with-mpi-xxx switches (i.e., we don't have --with-ompi-xxx switches).  But this works because Open MPI is just an implementation of MPI.  Forgive my shmem ignorance: is the oshmem/ layer an implementation of Shmem?  Or an implementation of Open Shmem?  (is there a difference between the two?)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
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
