<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 11:26:17 2013" -->
<!-- isoreceived="20130618152617" -->
<!-- sent="Tue, 18 Jun 2013 15:25:48 +0000" -->
<!-- isosent="20130618152548" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &amp;quot;libhcoll&amp;quot; library" -->
<!-- id="CDE5D7FC.1144C%bwbarre_at_sandia.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F68D3B9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 11:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12467.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>Previous message:</strong> <a href="12465.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>In reply to:</strong> <a href="12465.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12469.php">Aurélien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>Reply:</strong> <a href="12469.php">Aurélien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, I'm ok with it.  I think we should let it soak for a week or
<br>
two in the trunk before we file the CMR to 1.7.
<br>
<p>Brian
<br>
<p>On 6/18/13 6:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Sounds good; +1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 18, 2013, at 8:02 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Request for Change:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; What: Add support for Mellanox Technologies&#185; next-generation
</span><br>
<span class="quotelev2">&gt;&gt;non-blocking collectives, code-named &#179;libhcoll&#178;. This comes in the form
</span><br>
<span class="quotelev2">&gt;&gt;of a new &#179;hcoll&#178; component to the &#179;coll&#178; framework.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Where: Trunk and 1.7
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; When: July 1
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Why: In support of MPI 3, Mellanox Technologies will make available its
</span><br>
<span class="quotelev2">&gt;&gt;next generation collectives library, &#179;libhcoll&#178;,  in MOFED 2.0 releases
</span><br>
<span class="quotelev2">&gt;&gt;and higher starting in the late 2013 timeframe. &#179;Libhcoll&#178; adds support
</span><br>
<span class="quotelev2">&gt;&gt;for truly asynchronous non-blocking collectives on supported HCAs
</span><br>
<span class="quotelev2">&gt;&gt;(Connect X-3 and higher) via Mellanox Technologies&#185; CORE-Direct
</span><br>
<span class="quotelev2">&gt;&gt;technology. &#179;Libhcoll&#178; also adds support for hierarchical collectives
</span><br>
<span class="quotelev2">&gt;&gt;and features a highly scalable infrastructure battle tested and proven
</span><br>
<span class="quotelev2">&gt;&gt;on some of the world&#185;s largest HPC systems.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev2">&gt;&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell: +1 (865) 258 - 8898
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
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12466/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12467.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>Previous message:</strong> <a href="12465.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>In reply to:</strong> <a href="12465.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12469.php">Aurélien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>Reply:</strong> <a href="12469.php">Aurélien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
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
