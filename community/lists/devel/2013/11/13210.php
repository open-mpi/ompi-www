<?
$subject_val = "Re: [OMPI devel] debian/ directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 12:52:53 2013" -->
<!-- isoreceived="20131106175253" -->
<!-- sent="Wed, 6 Nov 2013 19:52:51 +0200" -->
<!-- isosent="20131106175251" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debian/ directory" -->
<!-- id="CAAO1KyZSmH9YSb5FKarnS7g2cRF5+NMnrg5+Ct6Rcf7qXSOpkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1479916D-D745-4306-9E24-E3974597F11C_at_cisco.com" -->
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
<strong>Date:</strong> 2013-11-06 12:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>In reply to:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i see.
<br>
It sounds like a good idea to have all OMPI packaging files in one
<br>
place/repo to allow easy/unified packaging into vendor distributions (like
<br>
OFED, MLNX OFED, etc..)
<br>
<p><p><p>On Wed, Nov 6, 2013 at 7:48 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; (we can consolidate this down to 1 thread, not multiple)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Debian build stuff is not maintained by us (and is therefore not in
</span><br>
<span class="quotelev1">&gt; our tree); it's maintained by Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt;  I'm not sure where the original packaging for that is developed /
</span><br>
<span class="quotelev1">&gt; maintained -- Sylvestre?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2013, at 9:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; unfortunately, debian/ packaging works only if located in rootDir. :(
</span><br>
<span class="quotelev2">&gt; &gt; If you have better ones - can you put it and we will use it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Nov 6, 2013 at 4:38 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 06/11/2013 15:26, Barrett, Brian W a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mike added a debian/ directory to the top-level of the tree this
</span><br>
<span class="quotelev1">&gt; morning,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which looks to be helping in building a Debian package.  While I don't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mind helping Debian, I'm really against having a debian/ directory in
</span><br>
<span class="quotelev1">&gt; our
</span><br>
<span class="quotelev3">&gt; &gt; &gt; top-level tree.  We have a place for those things (in contrib/).  If
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Debian can't conform to that requirement, maybe we shouldn't have
</span><br>
<span class="quotelev1">&gt; Debian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; support&#197;&#160;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am sorry but it does not help for a few reasons:
</span><br>
<span class="quotelev2">&gt; &gt; * We, in Debian, are doing several uploads of the same upstream version.
</span><br>
<span class="quotelev2">&gt; &gt; So, we always have to modify debian/
</span><br>
<span class="quotelev2">&gt; &gt; * Our tools are removing automatically debian/ in upstream tarballs
</span><br>
<span class="quotelev2">&gt; &gt; * They would have to be in rootDir/debian/, rootDir/contrib/debian would
</span><br>
<span class="quotelev2">&gt; &gt; not work.
</span><br>
<span class="quotelev2">&gt; &gt; * There are already the Debian packages which are a bit more complete
</span><br>
<span class="quotelev2">&gt; &gt; and tested than the one pushed ;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sylvestre
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>In reply to:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
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
