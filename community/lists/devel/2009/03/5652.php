<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 19:21:23 2009" -->
<!-- isoreceived="20090317232123" -->
<!-- sent="Tue, 17 Mar 2009 19:21:13 -0400" -->
<!-- isosent="20090317232113" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="5C2BAE9F-FB2D-4C83-BFE4-A37A417D7069_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C022D6.1010501_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI vs Scali performance comparisons<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 19:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The default values for the large message fragments are not optimized  
<br>
for the new generation processors. This might be something to  
<br>
investigate, in order to see if we can have the same bandwidth as they  
<br>
do or not.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 17, 2009, at 18:23 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; A colleague of mine ran some microkernels on an 8-way Barcelona box  
</span><br>
<span class="quotelev1">&gt; (Sun x2200M2 at 2.3 GHz).  Here are some performance comparisons  
</span><br>
<span class="quotelev1">&gt; with Scali.  The performance tests are modified versions of the HPCC  
</span><br>
<span class="quotelev1">&gt; pingpong tests.  The OMPI version is the trunk with my &quot;single- 
</span><br>
<span class="quotelev1">&gt; queue&quot; fixes... otherwise, OMPI latency at higher np would be  
</span><br>
<span class="quotelev1">&gt; noticeably worse.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             latency(ns)   bandwidth(MB/s)
</span><br>
<span class="quotelev1">&gt;           (8-byte msgs)   (2M-byte msgs)
</span><br>
<span class="quotelev1">&gt;           =============    =============
</span><br>
<span class="quotelev1">&gt;     np    Scali    OMPI    Scali    OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      2      327     661     1458    1295
</span><br>
<span class="quotelev1">&gt;      4      369     670     1517    1287
</span><br>
<span class="quotelev1">&gt;      8      414     758     1535    1294
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI latency is nearly 2x slower than Scali's.  Presumably,  
</span><br>
<span class="quotelev1">&gt; &quot;fastpath&quot; PML latency optimizations would help us a lot here.   
</span><br>
<span class="quotelev1">&gt; Thankfully, our latency is flat with np with the recent &quot;single- 
</span><br>
<span class="quotelev1">&gt; queue&quot; fixes... otherwise our high-np latency story would be so much  
</span><br>
<span class="quotelev1">&gt; worse.  We're behind on bandwidth as well, though not as pitifully so.
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
<li><strong>Next message:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
