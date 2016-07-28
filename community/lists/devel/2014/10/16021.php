<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 09:49:31 2014" -->
<!-- isoreceived="20141007134931" -->
<!-- sent="Tue, 7 Oct 2014 22:49:30 +0900" -->
<!-- isosent="20141007134930" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="CAAkFZ5vNWLizdQAn3k4CGQNx-TOE1zKVqHKH_h0h73LUR1ieKg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8E4542CE-2291-4752-A23E-BD8CF40513E5_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 09:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>In reply to:</strong> <a href="16018.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>that should not be an issue since github provides the infrastructure to
<br>
filter bozo requests (requests are sha1 signed with a shared secret)
<br>
<a href="https://developer.github.com/webhooks/securing/">https://developer.github.com/webhooks/securing/</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Oct 7, 2014 at 9:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 7, 2014, at 6:57 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; so far, using webhooks looks really simple :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; a public web server (apache+php) that can
</span><br>
<span class="quotelev2">&gt; &gt; a) process json requests
</span><br>
<span class="quotelev2">&gt; &gt; b) issue curl requests
</span><br>
<span class="quotelev2">&gt; &gt; is required strictly speaking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My only request would be to ensure that appropriate security is put in so
</span><br>
<span class="quotelev1">&gt; that this bot won't be spoofed by any bozo who sends a github-looking json
</span><br>
<span class="quotelev1">&gt; request to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i will keep working on a proof of concept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that our current public PHP web pages already issue some curl
</span><br>
<span class="quotelev1">&gt; requests behind the scenes.  E.g., the license page (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/license.php">http://www.open-mpi.org/community/license.php</a>) does a curl request to get
</span><br>
<span class="quotelev1">&gt; the actual license text from our github repo and output it verbatim.  See
</span><br>
<span class="quotelev1">&gt; the PHP source code here:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-www/blob/master/community/license.php">https://github.com/open-mpi/ompi-www/blob/master/community/license.php</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16018.php">http://www.open-mpi.org/community/lists/devel/2014/10/16018.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>In reply to:</strong> <a href="16018.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
