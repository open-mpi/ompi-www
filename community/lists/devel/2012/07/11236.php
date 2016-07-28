<?
$subject_val = "Re: [OMPI devel] openib max_cqe";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 15:56:59 2012" -->
<!-- isoreceived="20120705195659" -->
<!-- sent="Thu, 5 Jul 2012 15:56:54 -0400" -->
<!-- isosent="20120705195654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib max_cqe" -->
<!-- id="E3455BAF-4D4E-4890-BCEE-CC6D43F3233D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="86EAE59E-D6F9-4A6D-88CA-E860A7243F1A_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib max_cqe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 15:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Previous message:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>In reply to:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 5, 2012, at 3:53 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; I mentioned on the call that for Mellanox devices (+OFA verbs) this resource is really cheap. Do you run mellanox hca + OFA verbs ?
</span><br>
<p>(I'll reply because I know Terry is offline for the rest of the day)
<br>
<p>Yes, he does.
<br>
<p>The heart of the question: is it incorrect to assume that we'll consume (num CQE * CQE size) registered memory for each QP opened?
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
<li><strong>Next message:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Previous message:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>In reply to:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11237.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
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
