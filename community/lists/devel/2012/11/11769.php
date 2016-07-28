<?
$subject_val = "Re: [OMPI devel] MTT parameters vor really big nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 05:28:35 2012" -->
<!-- isoreceived="20121109102835" -->
<!-- sent="Fri, 09 Nov 2012 11:28:30 +0100" -->
<!-- isosent="20121109102830" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT parameters vor really big nodes?" -->
<!-- id="509CDACE.20606_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50965FA2.6070105_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 05:28:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<li><strong>Previous message:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>In reply to:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yevgeny, Jeff,
<br>
I've tried 26/2 on a node with 2TB RAM - the IB cards are not reachable with 
<br>
this setup.
<br>
<p>26/3 not yet tested (it's a bit work for our admins to 'repair' a node in case 
<br>
it is not reachable over the IB interface).
<br>
<p>By now we've a couple of nodes with up to 2TB RAM running with 23/5 setup; this 
<br>
seem to be the sonic barrier.
<br>
<p>Best,
<br>
<p>Paul
<br>
<p><p><p>On 11/04/12 13:29, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/4/2012 1:11 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yevgeny -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could Mellanox update the FAQ item about this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Large-memory nodes are becoming more common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure. But I'd like to hear Paul's input on this first.
</span><br>
<span class="quotelev1">&gt; Did it work with log_num_mtt=26?
</span><br>
<span class="quotelev1">&gt; I don't have that kind of machines to test this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2012, at 6:33 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/31/2012 10:22 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Yevgeny, hello all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yevgeny, first of all thanks for explaining what the MTT parameters do and why there are two of them! I mean this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, the official recommendation is &quot;twice the RAM amount&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And here we are: we have 2 nodes with 2 TB (that with a 'tera') RAM and a couple of nodes with 1TB, each with 4x Mellanox IB adapters. Thus we should have raised the MTT parameters in order to make up to 4 TB memory registrable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You don't really *have* to be able to register twice the available RAM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's just heuristics. It depends on the application that you're running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and fragmentation that it creates in the MTT.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've tried to raise the MTT parameters in multiple combinations, but the maximum amount of registrable memory I was able to get was one TB (23 / 5). All tries to get more (24/5, 23/6 for 2 TB) lead to not responding InfiniBand HCAs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there any another limits in the kernel have to be adjusted in order to be able to register that a bunch of memory?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, current driver has a limitation in this area so 1TB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (23/5 values) is probably the top what the driver can do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IIRC, log_num_mtt can reach 26, so perhaps you can try 26/2 (same 1TB),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then, if it works, try 26/3 (fingers crossed), which will bring you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 2 TB, but I'm not sure it will work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This has already been fixed, and the fix was accepted to the upstream
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux kernel, so it will be included in the next OFED/MLNX_OFED versions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
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
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11769/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<li><strong>Previous message:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>In reply to:</strong> <a href="11743.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
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
