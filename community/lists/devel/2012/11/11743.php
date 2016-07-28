<?
$subject_val = "Re: [OMPI devel] MTT parameters vor really big nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 07:29:30 2012" -->
<!-- isoreceived="20121104122930" -->
<!-- sent="Sun, 04 Nov 2012 14:29:22 +0200" -->
<!-- isosent="20121104122922" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT parameters vor really big nodes?" -->
<!-- id="50965FA2.6070105_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36AEFD99-1F57-444B-B92B-95A59FB04BCB_at_cisco.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-04 07:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11744.php">Santhosh Kokala: "[OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Previous message:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>In reply to:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11769.php">Paul Kapinos: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="11769.php">Paul Kapinos: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On 11/4/2012 1:11 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yevgeny -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could Mellanox update the FAQ item about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Large-memory nodes are becoming more common.
</span><br>
<p>Sure. But I'd like to hear Paul's input on this first.
<br>
Did it work with log_num_mtt=26?
<br>
I don't have that kind of machines to test this.
<br>
<p>-- YK
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2012, at 6:33 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/31/2012 10:22 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Yevgeny, hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yevgeny, first of all thanks for explaining what the MTT parameters do and why there are two of them! I mean this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, the official recommendation is &quot;twice the RAM amount&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And here we are: we have 2 nodes with 2 TB (that with a 'tera') RAM and a couple of nodes with 1TB, each with 4x Mellanox IB adapters. Thus we should have raised the MTT parameters in order to make up to 4 TB memory registrable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You don't really *have* to be able to register twice the available RAM.
</span><br>
<span class="quotelev2">&gt;&gt; It's just heuristics. It depends on the application that you're running
</span><br>
<span class="quotelev2">&gt;&gt; and fragmentation that it creates in the MTT.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to raise the MTT parameters in multiple combinations, but the maximum amount of registrable memory I was able to get was one TB (23 / 5). All tries to get more (24/5, 23/6 for 2 TB) lead to not responding InfiniBand HCAs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any another limits in the kernel have to be adjusted in order to be able to register that a bunch of memory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, current driver has a limitation in this area so 1TB
</span><br>
<span class="quotelev2">&gt;&gt; (23/5 values) is probably the top what the driver can do.
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, log_num_mtt can reach 26, so perhaps you can try 26/2 (same 1TB),
</span><br>
<span class="quotelev2">&gt;&gt; and then, if it works, try 26/3 (fingers crossed), which will bring you
</span><br>
<span class="quotelev2">&gt;&gt; to 2 TB, but I'm not sure it will work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This has already been fixed, and the fix was accepted to the upstream
</span><br>
<span class="quotelev2">&gt;&gt; Linux kernel, so it will be included in the next OFED/MLNX_OFED versions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11744.php">Santhosh Kokala: "[OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Previous message:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>In reply to:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11769.php">Paul Kapinos: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="11769.php">Paul Kapinos: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
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
