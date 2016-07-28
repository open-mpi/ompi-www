<?
$subject_val = "Re: [OMPI devel] Update IMB in ompi-tests";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 11:34:31 2013" -->
<!-- isoreceived="20130618153431" -->
<!-- sent="Tue, 18 Jun 2013 15:34:26 +0000" -->
<!-- isosent="20130618153426" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update IMB in ompi-tests" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F68DCE2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F686722_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Update IMB in ompi-tests<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 11:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12468.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] BTL sendi"</a>
<li><strong>Previous message:</strong> <a href="12466.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>In reply to:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No one cared today on the call.  So I'll be removing the old IMB 3.2 and 3.2.3 directories from ompi-tests later today.
<br>
<p>Go update your MTT configurations to use the new &quot;imb&quot; directory.
<br>
<p><p><p>On Jun 14, 2013, at 12:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm sorry -- I was not clear:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I'm adding 3.2.4 as the imb/ directory *today*.
</span><br>
<span class="quotelev1">&gt;  --&gt; You can go update your MTT configs today.
</span><br>
<span class="quotelev1">&gt; - I'll refrain from removing the IMB-3.2 and imb_3.2.3 directories until Tuesday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2013, at 11:57 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see we have 2 versions of IMB in the ompi-tests SVN repo: 3.2, and 3.2.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to update the version to 3.2.4 and remove the other two copies (IMB_3.2 and imb_3.2.3).  The new directory will be version-independent so that we don't have to do an announcement when updating the version again:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/imb">https://svn.open-mpi.org/svn/ompi-tests/trunk/imb</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** THIS CHANGE WILL AFFECT YOUR MTT CONFIGURATIONS!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll do this change after the teleconf this upcoming Tuesday (June 18) to give everyone time to prepare.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12468.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] BTL sendi"</a>
<li><strong>Previous message:</strong> <a href="12466.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>In reply to:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
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
