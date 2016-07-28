<?
$subject_val = "Re: [OMPI devel] malloc(0) warning with 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 03:51:25 2015" -->
<!-- isoreceived="20150806075125" -->
<!-- sent="Thu, 6 Aug 2015 10:50:54 +0300" -->
<!-- isosent="20150806075054" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc(0) warning with 1.8.7" -->
<!-- id="CAEcYPwACgGy+7Y0TEwsz4Gybf5j23dxwkR0qs6Q3CR8yUpYxVQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="55B5EA59.20407_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc(0) warning with 1.8.7<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-06 03:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17734.php">Gilles Gouaillardet: "Re: [OMPI devel] new branch on open-mpi/ompi?"</a>
<li><strong>Previous message:</strong> <a href="17732.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Coverity Scan: Analysis failed for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17712.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 27 July 2015 at 11:22, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i fixed it on master at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/318a1a40a4ab345f417b8932326d4dd2e68d82bc">https://github.com/open-mpi/ompi/commit/318a1a40a4ab345f417b8932326d4dd2e68d82bc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you git it a try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay. I transplanted the diff to the 1.8.7 sources. All
<br>
warnings were silenced. Thanks! As I understand a 1.8.8 tarball is
<br>
going to be released, It would be nice to add this fix to it. I'm
<br>
attaching a patch from 1.8.7, it is basically your commit diff
<br>
ignoring white-space changes and reverting
<br>
mca_coll_base_module_2_1_0_t  -&gt; mca_coll_base_module_2_0_0_t.
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17733/ireduce_scatter_block.diff">ireduce_scatter_block.diff</a>
</ul>
<!-- attachment="ireduce_scatter_block.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17734.php">Gilles Gouaillardet: "Re: [OMPI devel] new branch on open-mpi/ompi?"</a>
<li><strong>Previous message:</strong> <a href="17732.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Coverity Scan: Analysis failed for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17712.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
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
