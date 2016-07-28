<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 17:13:17 2009" -->
<!-- isoreceived="20090318211317" -->
<!-- sent="Wed, 18 Mar 2009 13:12:24 -0800" -->
<!-- isosent="20090318211224" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="49C163B8.6080205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49C12401.4030002_at_sun.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 17:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5664.php">Tim Mattox: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5662.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5 posted"</a>
<li><strong>In reply to:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5664.php">Tim Mattox: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5664.php">Tim Mattox: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have access to the machine where my colleague ran.  On other 
<br>
machines, it appears that playing with eager or fragsize doesn't change 
<br>
much... and, in any case, OMPI bandwidth is up around memcpy bandwidth.  
<br>
So, maybe the first challenge is reproducing what he saw and/or getting 
<br>
access to his system.
<br>
<p>Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something like this. We can play with the eager size too, maybe 4K is 
</span><br>
<span class="quotelev2">&gt;&gt; too small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I am curious why the larger buffer sizes work better?  I am 
</span><br>
<span class="quotelev1">&gt; curious because we ran into a similar issue on one of our platforms 
</span><br>
<span class="quotelev1">&gt; and it turned out to be the non-temporal copy was not initiated until 
</span><br>
<span class="quotelev1">&gt; a large (64K) memcpy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 18, 2009, at 06:43 , Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The default values for the large message fragments are not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; optimized for the new generation processors. This might be 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something to investigate, in order to see if we can have the same 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bandwidth as they do or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you suggesting bumping up the btl_sm_max_send_size value from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32K to something greater?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 17, 2009, at 18:23 , Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A colleague of mine ran some microkernels on an 8-way Barcelona 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; box (Sun x2200M2 at 2.3 GHz).  Here are some performance 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comparisons with Scali.  The performance tests are modified 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; versions of the HPCC pingpong tests.  The OMPI version is the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk with my &quot;single-queue&quot; fixes... otherwise, OMPI latency at 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; higher np would be noticeably worse.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            latency(ns)   bandwidth(MB/s)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          (8-byte msgs)   (2M-byte msgs)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          =============    =============
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    np    Scali    OMPI    Scali    OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     2      327     661     1458    1295
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     4      369     670     1517    1287
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     8      414     758     1535    1294
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI latency is nearly 2x slower than Scali's.  Presumably, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;fastpath&quot; PML latency optimizations would help us a lot here.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thankfully, our latency is flat with np with the recent 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;single-queue&quot; fixes... otherwise our high-np latency story would 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be so much worse.  We're behind on bandwidth as well, though not 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as pitifully so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5664.php">Tim Mattox: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5662.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5 posted"</a>
<li><strong>In reply to:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5664.php">Tim Mattox: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5664.php">Tim Mattox: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
