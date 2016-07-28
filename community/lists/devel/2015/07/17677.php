<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 01:14:04 2015" -->
<!-- isoreceived="20150722051404" -->
<!-- sent="Tue, 21 Jul 2015 22:13:58 -0700" -->
<!-- isosent="20150722051358" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="CAAvDA15ZkzUfyK-vMcKnt24PbohqMjxnhuvJUqtxkYGf6nji7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BDEDED62-14EE-4D78-ADCF-B690C6DCE693_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc2<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 01:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17678.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17686.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sorry if you already noticed:
<br>
It appears that there is no mention of --with-libfabric or
<br>
--with-libfabric-libdir in the README for 1.10.0rc2
<br>
<p>-Paul
<br>
<p>On Tue, Jul 21, 2015 at 6:59 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jul 21, 2015, at 4:38 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see that 1.10.0 can make use of libfabric, but I don't see much
</span><br>
<span class="quotelev2">&gt; &gt; documentation on it and certainly nothing in the README file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops; shame on us.  We'll update README.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since libfabric
</span><br>
<span class="quotelev2">&gt; &gt; makes use of libibverbs and librdmacm, does it replace that
</span><br>
<span class="quotelev1">&gt; functionality in
</span><br>
<span class="quotelev2">&gt; &gt; openmpi, or should we continue to build openmpi with direct verbs/rdmacm
</span><br>
<span class="quotelev1">&gt; support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current status of Mellanox IB support in libfabric is rudimentary, at
</span><br>
<span class="quotelev1">&gt; best (it's layered over verbs, as you noted).  As such, OMPI doesn't use
</span><br>
<span class="quotelev1">&gt; libfabric with verbs -- there wouldn't be much point.  libfabric is better
</span><br>
<span class="quotelev1">&gt; with other networks, such as Cisco usNIC and Intel PSM.  There's a Cray
</span><br>
<span class="quotelev1">&gt; uGNI libfabric provider coming along, too -- but it's not in the released
</span><br>
<span class="quotelev1">&gt; libfabric distribution yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you should continue building the openib BTL with native verbs support
</span><br>
<span class="quotelev1">&gt; 2. you should use --with-libfabric to compile in support for Cisco usNIC-
</span><br>
<span class="quotelev1">&gt; and Intel PSM-based fabrics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17676.php">http://www.open-mpi.org/community/lists/devel/2015/07/17676.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17677/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17678.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17686.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
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
