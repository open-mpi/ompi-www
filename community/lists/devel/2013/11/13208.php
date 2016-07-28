<?
$subject_val = "Re: [OMPI devel] debian/ directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 12:48:45 2013" -->
<!-- isoreceived="20131106174845" -->
<!-- sent="Wed, 6 Nov 2013 17:48:44 +0000" -->
<!-- isosent="20131106174844" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debian/ directory" -->
<!-- id="1479916D-D745-4306-9E24-E3974597F11C_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAO1KybQZNhtD3VRfoMephvmSvuk1O3dDM3HWwP2H32aRRO1gg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 12:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13207.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>In reply to:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(we can consolidate this down to 1 thread, not multiple)
<br>
<p>The Debian build stuff is not maintained by us (and is therefore not in our tree); it's maintained by Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt;.  I'm not sure where the original packaging for that is developed / maintained -- Sylvestre?
<br>
<p><p><p>On Nov 6, 2013, at 9:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; unfortunately, debian/ packaging works only if located in rootDir. :(
</span><br>
<span class="quotelev1">&gt; If you have better ones - can you put it and we will use it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 6, 2013 at 4:38 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 06/11/2013 15:26, Barrett, Brian W a &#233;crit :
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
<span class="quotelev2">&gt; &gt; support&#138;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13209.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Previous message:</strong> <a href="13207.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>In reply to:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13211.php">Brice Goglin: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
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
