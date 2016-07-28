<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 06:11:30 2014" -->
<!-- isoreceived="20141008101130" -->
<!-- sent="Wed, 08 Oct 2014 19:11:29 +0900" -->
<!-- isosent="20141008101129" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="54350DD1.5010504_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B0E6204-879E-45EA-B3FC-7434FA82E68F_at_cisco.com" -->
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
<strong>Date:</strong> 2014-10-08 06:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16030.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-40-g93eba3a"</a>
<li><strong>Previous message:</strong> <a href="16028.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>one last thing ...
<br>
<p>could you please make sure you (since you have write access to
<br>
ompi-release) can assign an issue to me (since i do not have write
<br>
access to ompi-release *but* i am part of the open-mpi organization)
<br>
<p>/* i think we already validated this on a sandbox, but i would like to
<br>
be 100% sure ... */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/07 22:55, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Sounds perfect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2014, at 9:49 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that should not be an issue since github provides the infrastructure to filter bozo requests (requests are sha1 signed with a shared secret)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://developer.github.com/webhooks/securing/">https://developer.github.com/webhooks/securing/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 7, 2014 at 9:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 7, 2014, at 6:57 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so far, using webhooks looks really simple :-)
</span><br>
<span class="quotelev2">&gt;&gt; Good!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a public web server (apache+php) that can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) process json requests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) issue curl requests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is required strictly speaking.
</span><br>
<span class="quotelev2">&gt;&gt; My only request would be to ensure that appropriate security is put in so that this bot won't be spoofed by any bozo who sends a github-looking json request to it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i will keep working on a proof of concept
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that our current public PHP web pages already issue some curl requests behind the scenes.  E.g., the license page (<a href="http://www.open-mpi.org/community/license.php">http://www.open-mpi.org/community/license.php</a>) does a curl request to get the actual license text from our github repo and output it verbatim.  See the PHP source code here: <a href="https://github.com/open-mpi/ompi-www/blob/master/community/license.php">https://github.com/open-mpi/ompi-www/blob/master/community/license.php</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16018.php">http://www.open-mpi.org/community/lists/devel/2014/10/16018.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16021.php">http://www.open-mpi.org/community/lists/devel/2014/10/16021.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16030.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-40-g93eba3a"</a>
<li><strong>Previous message:</strong> <a href="16028.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="16022.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
