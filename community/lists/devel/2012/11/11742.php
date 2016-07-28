<?
$subject_val = "Re: [OMPI devel] MTT parameters vor really big nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 06:11:09 2012" -->
<!-- isoreceived="20121104111109" -->
<!-- sent="Sun, 4 Nov 2012 06:11:04 -0500" -->
<!-- isosent="20121104111104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT parameters vor really big nodes?" -->
<!-- id="36AEFD99-1F57-444B-B92B-95A59FB04BCB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50959BBB.9090603_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT parameters vor really big nodes?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-04 06:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Previous message:</strong> <a href="11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>In reply to:</strong> <a href="11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yevgeny -
<br>
<p>Could Mellanox update the FAQ item about this?
<br>
<p>Large-memory nodes are becoming more common.
<br>
<p><p>On Nov 3, 2012, at 6:33 PM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/31/2012 10:22 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Yevgeny, hello all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yevgeny, first of all thanks for explaining what the MTT parameters do and why there are two of them! I mean this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, the official recommendation is &quot;twice the RAM amount&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And here we are: we have 2 nodes with 2 TB (that with a 'tera') RAM and a couple of nodes with 1TB, each with 4x Mellanox IB adapters. Thus we should have raised the MTT parameters in order to make up to 4 TB memory registrable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't really *have* to be able to register twice the available RAM.
</span><br>
<span class="quotelev1">&gt; It's just heuristics. It depends on the application that you're running
</span><br>
<span class="quotelev1">&gt; and fragmentation that it creates in the MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to raise the MTT parameters in multiple combinations, but the maximum amount of registrable memory I was able to get was one TB (23 / 5). All tries to get more (24/5, 23/6 for 2 TB) lead to not responding InfiniBand HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any another limits in the kernel have to be adjusted in order to be able to register that a bunch of memory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, current driver has a limitation in this area so 1TB 
</span><br>
<span class="quotelev1">&gt; (23/5 values) is probably the top what the driver can do.
</span><br>
<span class="quotelev1">&gt; IIRC, log_num_mtt can reach 26, so perhaps you can try 26/2 (same 1TB),
</span><br>
<span class="quotelev1">&gt; and then, if it works, try 26/3 (fingers crossed), which will bring you
</span><br>
<span class="quotelev1">&gt; to 2 TB, but I'm not sure it will work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has already been fixed, and the fix was accepted to the upstream
</span><br>
<span class="quotelev1">&gt; Linux kernel, so it will be included in the next OFED/MLNX_OFED versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
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
<li><strong>Next message:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Previous message:</strong> <a href="11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>In reply to:</strong> <a href="11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
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
