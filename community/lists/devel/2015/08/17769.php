<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 13:45:37 2015" -->
<!-- isoreceived="20150820174537" -->
<!-- sent="Thu, 20 Aug 2015 17:45:34 +0000" -->
<!-- isosent="20150820174534" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?" -->
<!-- id="59EB2C9D-468C-46F2-B187-9E661543783F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5FC731D7-0947-43D3-94B6-3EFC46ADABB6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 13:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17768.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>In reply to:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul sent me some additional info off-list, and I fixed the issue.
<br>
<p>PR's filed for v1.10 and v2.x.
<br>
<p><p><span class="quotelev1">&gt; On Aug 19, 2015, at 5:09 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 19, 2015, at 5:01 PM, Todd Kordenbrock &lt;thkgcode_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The linker error that Paul posted isn't an OFI MTL specific linker line.  It is the linker line for otfmerge-mpi from VampirTrace package.  Portals4 just shows up as an external library the same as OFI or torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, right you are -- and those are there because of --enable-static --disable-shared.  So: all is good there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as the 3 occurrences of the Portals4 path in that linker line, it breaks down as one -L and two -rpath.  I think the -rpath shows up twice because Portals4 depends on libev.so which is installed in the same place as libportals.so and you get one -rpath for each lib.  I'll see if that can be deduped.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; K.  Not a huge deal, but would be nice to fix up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17765.php">http://www.open-mpi.org/community/lists/devel/2015/08/17765.php</a>
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
<li><strong>Next message:</strong> <a href="17770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17768.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>In reply to:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
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
