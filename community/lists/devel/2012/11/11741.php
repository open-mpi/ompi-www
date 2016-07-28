<?
$subject_val = "Re: [OMPI devel] MTT parameters vor really big nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  3 18:33:42 2012" -->
<!-- isoreceived="20121103223342" -->
<!-- sent="Sun, 04 Nov 2012 00:33:31 +0200" -->
<!-- isosent="20121103223331" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT parameters vor really big nodes?" -->
<!-- id="50959BBB.9090603_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50918883.9070705_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2012-11-03 18:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Previous message:</strong> <a href="11740.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11722.php">Paul Kapinos: "[OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>On 10/31/2012 10:22 PM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hello Yevgeny, hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yevgeny, first of all thanks for explaining what the MTT parameters do and why there are two of them! I mean this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, the official recommendation is &quot;twice the RAM amount&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here we are: we have 2 nodes with 2 TB (that with a 'tera') RAM and a couple of nodes with 1TB, each with 4x Mellanox IB adapters. Thus we should have raised the MTT parameters in order to make up to 4 TB memory registrable.
</span><br>
<p>You don't really *have* to be able to register twice the available RAM.
<br>
It's just heuristics. It depends on the application that you're running
<br>
and fragmentation that it creates in the MTT.
<br>
<p>However:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I've tried to raise the MTT parameters in multiple combinations, but the maximum amount of registrable memory I was able to get was one TB (23 / 5). All tries to get more (24/5, 23/6 for 2 TB) lead to not responding InfiniBand HCAs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any another limits in the kernel have to be adjusted in order to be able to register that a bunch of memory?
</span><br>
<p>Unfortunately, current driver has a limitation in this area so 1TB 
<br>
(23/5 values) is probably the top what the driver can do.
<br>
IIRC, log_num_mtt can reach 26, so perhaps you can try 26/2 (same 1TB),
<br>
and then, if it works, try 26/3 (fingers crossed), which will bring you
<br>
to 2 TB, but I'm not sure it will work.
<br>
<p>This has already been fixed, and the fix was accepted to the upstream
<br>
Linux kernel, so it will be included in the next OFED/MLNX_OFED versions.
<br>
<p>-- YK
<br>
<p><p><span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Previous message:</strong> <a href="11740.php">Josh Hursey: "Re: [OMPI devel] Open MPI MTT is moving"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11722.php">Paul Kapinos: "[OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="11742.php">Jeff Squyres: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
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
