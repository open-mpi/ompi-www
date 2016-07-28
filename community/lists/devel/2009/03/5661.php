<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 12:40:49 2009" -->
<!-- isoreceived="20090318164049" -->
<!-- sent="Wed, 18 Mar 2009 12:40:33 -0400" -->
<!-- isosent="20090318164033" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="49C12401.4030002_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="73D23853-6DC6-429E-80E8-31167168A0AE_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-03-18 12:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5662.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5 posted"</a>
<li><strong>Previous message:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Something like this. We can play with the eager size too, maybe 4K is 
</span><br>
<span class="quotelev1">&gt; too small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I guess I am curious why the larger buffer sizes work better?  I am 
<br>
curious because we ran into a similar issue on one of our platforms and 
<br>
it turned out to be the non-temporal copy was not initiated until a 
<br>
large (64K) memcpy. 
<br>
<p>--td
<br>
<span class="quotelev1">&gt; On Mar 18, 2009, at 06:43 , Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The default values for the large message fragments are not optimized 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the new generation processors. This might be something to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; investigate, in order to see if we can have the same bandwidth as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they do or not.
</span><br>
<span class="quotelev2">&gt;&gt; Are you suggesting bumping up the btl_sm_max_send_size value from 32K 
</span><br>
<span class="quotelev2">&gt;&gt; to something greater?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 17, 2009, at 18:23 , Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A colleague of mine ran some microkernels on an 8-way Barcelona box 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Sun x2200M2 at 2.3 GHz).  Here are some performance comparisons 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Scali.  The performance tests are modified versions of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPCC pingpong tests.  The OMPI version is the trunk with my 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;single-queue&quot; fixes... otherwise, OMPI latency at higher np would 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be noticeably worse.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            latency(ns)   bandwidth(MB/s)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          (8-byte msgs)   (2M-byte msgs)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          =============    =============
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    np    Scali    OMPI    Scali    OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2      327     661     1458    1295
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     4      369     670     1517    1287
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     8      414     758     1535    1294
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI latency is nearly 2x slower than Scali's.  Presumably, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;fastpath&quot; PML latency optimizations would help us a lot here.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thankfully, our latency is flat with np with the recent 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;single-queue&quot; fixes... otherwise our high-np latency story would 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be so much worse.  We're behind on bandwidth as well, though not as 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pitifully so.
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
<li><strong>Next message:</strong> <a href="5662.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5 posted"</a>
<li><strong>Previous message:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>In reply to:</strong> <a href="5660.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5663.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
