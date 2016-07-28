<?
$subject_val = "[OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 18:23:44 2009" -->
<!-- isoreceived="20090317222344" -->
<!-- sent="Tue, 17 Mar 2009 14:23:18 -0800" -->
<!-- isosent="20090317222318" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="49C022D6.1010501_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49BFF40F.9050202_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI vs Scali performance comparisons<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 18:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5649.php">Rainer Keller: "[OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Maybe reply:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A colleague of mine ran some microkernels on an 8-way Barcelona box (Sun 
<br>
x2200M2 at 2.3 GHz).  Here are some performance comparisons with Scali. 
<br>
&nbsp;&nbsp;The performance tests are modified versions of the HPCC pingpong 
<br>
tests.  The OMPI version is the trunk with my &quot;single-queue&quot; fixes... 
<br>
otherwise, OMPI latency at higher np would be noticeably worse.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;latency(ns)   bandwidth(MB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(8-byte msgs)   (2M-byte msgs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=============    =============
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np    Scali    OMPI    Scali    OMPI
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      327     661     1458    1295
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      369     670     1517    1287
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8      414     758     1535    1294
<br>
<p>OMPI latency is nearly 2x slower than Scali's.  Presumably, &quot;fastpath&quot; 
<br>
PML latency optimizations would help us a lot here.  Thankfully, our 
<br>
latency is flat with np with the recent &quot;single-queue&quot; fixes... 
<br>
otherwise our high-np latency story would be so much worse.  We're 
<br>
behind on bandwidth as well, though not as pitifully so.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5649.php">Rainer Keller: "[OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Maybe reply:</strong> <a href="5651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
