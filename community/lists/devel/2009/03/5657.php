<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 06:43:16 2009" -->
<!-- isoreceived="20090318104316" -->
<!-- sent="Wed, 18 Mar 2009 06:43:11 -0400" -->
<!-- isosent="20090318104311" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="49C0D03F.2000807_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5C2BAE9F-FB2D-4C83-BFE4-A37A417D7069_at_eecs.utk.edu" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 06:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5658.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>In reply to:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The default values for the large message fragments are not optimized 
</span><br>
<span class="quotelev1">&gt; for the new generation processors. This might be something to 
</span><br>
<span class="quotelev1">&gt; investigate, in order to see if we can have the same bandwidth as they 
</span><br>
<span class="quotelev1">&gt; do or not.
</span><br>
Are you suggesting bumping up the btl_sm_max_send_size value from 32K to 
<br>
something greater?
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2009, at 18:23 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A colleague of mine ran some microkernels on an 8-way Barcelona box 
</span><br>
<span class="quotelev2">&gt;&gt; (Sun x2200M2 at 2.3 GHz).  Here are some performance comparisons with 
</span><br>
<span class="quotelev2">&gt;&gt; Scali.  The performance tests are modified versions of the HPCC 
</span><br>
<span class="quotelev2">&gt;&gt; pingpong tests.  The OMPI version is the trunk with my &quot;single-queue&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; fixes... otherwise, OMPI latency at higher np would be noticeably worse.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             latency(ns)   bandwidth(MB/s)
</span><br>
<span class="quotelev2">&gt;&gt;           (8-byte msgs)   (2M-byte msgs)
</span><br>
<span class="quotelev2">&gt;&gt;           =============    =============
</span><br>
<span class="quotelev2">&gt;&gt;     np    Scali    OMPI    Scali    OMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      2      327     661     1458    1295
</span><br>
<span class="quotelev2">&gt;&gt;      4      369     670     1517    1287
</span><br>
<span class="quotelev2">&gt;&gt;      8      414     758     1535    1294
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI latency is nearly 2x slower than Scali's.  Presumably, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fastpath&quot; PML latency optimizations would help us a lot here.  
</span><br>
<span class="quotelev2">&gt;&gt; Thankfully, our latency is flat with np with the recent 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;single-queue&quot; fixes... otherwise our high-np latency story would be 
</span><br>
<span class="quotelev2">&gt;&gt; so much worse.  We're behind on bandwidth as well, though not as 
</span><br>
<span class="quotelev2">&gt;&gt; pitifully so.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5658.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>In reply to:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
