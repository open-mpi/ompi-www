<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 11:15:09 2009" -->
<!-- isoreceived="20090318151509" -->
<!-- sent="Wed, 18 Mar 2009 11:14:59 -0400" -->
<!-- isosent="20090318151459" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="73D23853-6DC6-429E-80E8-31167168A0AE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C0D03F.2000807_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-18 11:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5659.php">Jeff Squyres: "[OMPI devel] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>In reply to:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something like this. We can play with the eager size too, maybe 4K is  
<br>
too small.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 18, 2009, at 06:43 , Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The default values for the large message fragments are not  
</span><br>
<span class="quotelev2">&gt;&gt; optimized for the new generation processors. This might be  
</span><br>
<span class="quotelev2">&gt;&gt; something to investigate, in order to see if we can have the same  
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth as they do or not.
</span><br>
<span class="quotelev1">&gt; Are you suggesting bumping up the btl_sm_max_send_size value from  
</span><br>
<span class="quotelev1">&gt; 32K to something greater?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2009, at 18:23 , Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A colleague of mine ran some microkernels on an 8-way Barcelona  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; box (Sun x2200M2 at 2.3 GHz).  Here are some performance  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comparisons with Scali.  The performance tests are modified  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of the HPCC pingpong tests.  The OMPI version is the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk with my &quot;single-queue&quot; fixes... otherwise, OMPI latency at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; higher np would be noticeably worse.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            latency(ns)   bandwidth(MB/s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          (8-byte msgs)   (2M-byte msgs)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          =============    =============
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    np    Scali    OMPI    Scali    OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     2      327     661     1458    1295
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     4      369     670     1517    1287
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     8      414     758     1535    1294
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI latency is nearly 2x slower than Scali's.  Presumably,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;fastpath&quot; PML latency optimizations would help us a lot here.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thankfully, our latency is flat with np with the recent &quot;single- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queue&quot; fixes... otherwise our high-np latency story would be so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much worse.  We're behind on bandwidth as well, though not as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pitifully so.
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
<li><strong>Next message:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5659.php">Jeff Squyres: "[OMPI devel] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>In reply to:</strong> <a href="5657.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5661.php">Terry Dontje: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
