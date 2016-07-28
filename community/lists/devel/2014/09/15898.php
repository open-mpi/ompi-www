<?
$subject_val = "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 20:01:38 2014" -->
<!-- isoreceived="20140923000138" -->
<!-- sent="Tue, 23 Sep 2014 09:01:36 +0900" -->
<!-- isosent="20140923000136" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: &amp;quot;v1.9.0&amp;quot; (vs. &amp;quot;v1.9&amp;quot;)" -->
<!-- id="CAAkFZ5sTZNZOW8UP6CXVXr-syxbM0H-fz0Qmm=ZrQJXfro73dw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140922232535.GA5143_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 20:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15897.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15896.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>if i read between the lines, it looks like the next stable branch will be
<br>
v2.0 and not v1.10
<br>
is there a strong reason for that (such as ABI compatibility will break, or
<br>
a major but internal refactoring) ?
<br>
/* other than v1.10 is less than v1.8 when comparing strings :-) */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Sep 23, 2014 at 8:25 AM, Andreas Sch&#195;&#164;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 13:50 Mon 22 Sep     , Aur&#195;&#169;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Could also start at 1.9.1 instead of 1.9.0. That gives a free number
</span><br>
<span class="quotelev2">&gt; &gt; for the &#226;&#128;&#156;trunk&#226;&#128;&#157; nightly builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could also start at 2.1 instead of 2.0. That gives a free boost in
</span><br>
<span class="quotelev1">&gt; maturity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More seriously, I'd suggest to use Semantic Versioning[1], which is
</span><br>
<span class="quotelev1">&gt; actually straight forward for both, developers and users. I'm quoting
</span><br>
<span class="quotelev1">&gt; the linked website:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Given a version number MAJOR.MINOR.PATCH, increment the:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. MAJOR version when you make incompatible API changes,
</span><br>
<span class="quotelev2">&gt; &gt; 2. MINOR version when you add functionality in a backwards-compatible
</span><br>
<span class="quotelev2">&gt; &gt;    manner, and
</span><br>
<span class="quotelev2">&gt; &gt; 3. PATCH version when you make backwards-compatible bug fixes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Additional labels for pre-release and build metadata are available as
</span><br>
<span class="quotelev2">&gt; &gt; extensions to the MAJOR.MINOR.PATCH format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://semver.org/">http://semver.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#195;&#164;fer
</span><br>
<span class="quotelev1">&gt; HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg, Germany
</span><br>
<span class="quotelev1">&gt; +49 9131 85-27910
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15896.php">http://www.open-mpi.org/community/lists/devel/2014/09/15896.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15897.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15896.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
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
