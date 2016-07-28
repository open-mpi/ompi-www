<?
$subject_val = "Re: [OMPI devel] mca_mtl_psm and java";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 11:41:45 2015" -->
<!-- isoreceived="20150826154145" -->
<!-- sent="Wed, 26 Aug 2015 15:41:43 +0000" -->
<!-- isosent="20150826154143" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_mtl_psm and java" -->
<!-- id="8B6B4F5E-EC81-4AE3-8FEB-2046FB19DBCF_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8EDD868D-1018-4F38-B26F-83B7498F9897_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_mtl_psm and java<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 11:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17873.php">Jeff Squyres (jsquyres): "[OMPI devel] Annual Open MPI membership review, and Git repo permissions review"</a>
<li><strong>Previous message:</strong> <a href="17871.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17871.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17874.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17874.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2015, at 11:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...but only when the PSM MTL is not compiled directly into libmpi, e.g., via using --disable-dlopen, or --enable-static (neither of which are the default, but it's worth mentioning).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that true? If the problem lies in not &#226;&#128;&#156;nicely&#226;&#128;&#157; handling the errhandler registrations, then so long as PSM is not selected, it shouldn&#226;&#128;&#153;t have an impact.
</span><br>

<br>
That's what Gilles said.  ...er, I guess he didn't state that directly; he said that the signal handler is set when the DSO is dlopened, which I took to mean that it occurs during a library constructor (and is therefore independent of Open MPI selection):
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17857.php">http://www.open-mpi.org/community/lists/devel/2015/08/17857.php</a>
<br>

<br>
I could be reading too much into Gilles' words, though...
<br>

<br>
I'll just shut up now and let Intel provide definitive answers to this issue.  :-)
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17873.php">Jeff Squyres (jsquyres): "[OMPI devel] Annual Open MPI membership review, and Git repo permissions review"</a>
<li><strong>Previous message:</strong> <a href="17871.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17871.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17874.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17874.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
