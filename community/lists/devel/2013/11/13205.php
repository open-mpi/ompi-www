<?
$subject_val = "Re: [OMPI devel] debian/ directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 12:21:01 2013" -->
<!-- isoreceived="20131106172101" -->
<!-- sent="Wed, 6 Nov 2013 19:20:59 +0200" -->
<!-- isosent="20131106172059" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debian/ directory" -->
<!-- id="CAAO1KybQZNhtD3VRfoMephvmSvuk1O3dDM3HWwP2H32aRRO1gg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="527A5449.1040606_at_debian.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debian/ directory<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 12:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13206.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13199.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
unfortunately, debian/ packaging works only if located in rootDir. :(
<br>
If you have better ones - can you put it and we will use it?
<br>
<p><p>On Wed, Nov 6, 2013 at 4:38 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 06/11/2013 15:26, Barrett, Brian W a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi all -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mike added a debian/ directory to the top-level of the tree this morning,
</span><br>
<span class="quotelev2">&gt; &gt; which looks to be helping in building a Debian package.  While I don't
</span><br>
<span class="quotelev2">&gt; &gt; mind helping Debian, I'm really against having a debian/ directory in our
</span><br>
<span class="quotelev2">&gt; &gt; top-level tree.  We have a place for those things (in contrib/).  If
</span><br>
<span class="quotelev2">&gt; &gt; Debian can't conform to that requirement, maybe we shouldn't have Debian
</span><br>
<span class="quotelev2">&gt; &gt; support&#197;&#160;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I am sorry but it does not help for a few reasons:
</span><br>
<span class="quotelev1">&gt; * We, in Debian, are doing several uploads of the same upstream version.
</span><br>
<span class="quotelev1">&gt; So, we always have to modify debian/
</span><br>
<span class="quotelev1">&gt; * Our tools are removing automatically debian/ in upstream tarballs
</span><br>
<span class="quotelev1">&gt; * They would have to be in rootDir/debian/, rootDir/contrib/debian would
</span><br>
<span class="quotelev1">&gt; not work.
</span><br>
<span class="quotelev1">&gt; * There are already the Debian packages which are a bit more complete
</span><br>
<span class="quotelev1">&gt; and tested than the one pushed ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvestre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13206.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib	contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13199.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
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
