<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 08:46:24 2014" -->
<!-- isoreceived="20141007124624" -->
<!-- sent="Tue, 7 Oct 2014 12:46:22 +0000" -->
<!-- isosent="20141007124622" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="8E4542CE-2291-4752-A23E-BD8CF40513E5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5433C736.2070806_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 08:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16019.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a"</a>
<li><strong>Previous message:</strong> <a href="16017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="16015.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16021.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="16021.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2014, at 6:57 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; so far, using webhooks looks really simple :-)
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; a public web server (apache+php) that can
</span><br>
<span class="quotelev1">&gt; a) process json requests
</span><br>
<span class="quotelev1">&gt; b) issue curl requests
</span><br>
<span class="quotelev1">&gt; is required strictly speaking.
</span><br>
<p>My only request would be to ensure that appropriate security is put in so that this bot won't be spoofed by any bozo who sends a github-looking json request to it.
<br>
<p><span class="quotelev1">&gt; i will keep working on a proof of concept
</span><br>
<p>Sounds good.  
<br>
<p>Note that our current public PHP web pages already issue some curl requests behind the scenes.  E.g., the license page (<a href="http://www.open-mpi.org/community/license.php">http://www.open-mpi.org/community/license.php</a>) does a curl request to get the actual license text from our github repo and output it verbatim.  See the PHP source code here: <a href="https://github.com/open-mpi/ompi-www/blob/master/community/license.php">https://github.com/open-mpi/ompi-www/blob/master/community/license.php</a>.
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
<li><strong>Next message:</strong> <a href="16019.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a"</a>
<li><strong>Previous message:</strong> <a href="16017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="16015.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16021.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="16021.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
