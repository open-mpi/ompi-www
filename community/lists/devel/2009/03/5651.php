<?
$subject_val = "Re: [OMPI devel] OMPI vs Scali performance comparisons";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 19:07:11 2009" -->
<!-- isoreceived="20090317230711" -->
<!-- sent="Tue, 17 Mar 2009 19:07:06 -0400" -->
<!-- isosent="20090317230706" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI vs Scali performance comparisons" -->
<!-- id="E7FD839BAFD8CA499213A6EE26F2368004CB6C_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] OMPI vs Scali performance comparisons" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 19:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Maybe in reply to:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still think that the pml fast path fixes would be good. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
Sent: Tue Mar 17 18:23:18 2009
<br>
Subject: [OMPI devel] OMPI vs Scali performance comparisons
<br>

<br>
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

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;latency(ns)   bandwidth(MB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(8-byte msgs)   (2M-byte msgs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=============    =============
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np    Scali    OMPI    Scali    OMPI
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      327     661     1458    1295
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      369     670     1517    1287
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8      414     758     1535    1294
<br>

<br>
OMPI latency is nearly 2x slower than Scali's.  Presumably, &quot;fastpath&quot; 
<br>
PML latency optimizations would help us a lot here.  Thankfully, our 
<br>
latency is flat with np with the recent &quot;single-queue&quot; fixes... 
<br>
otherwise our high-np latency story would be so much worse.  We're 
<br>
behind on bandwidth as well, though not as pitifully so.
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5652.php">George Bosilca: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Maybe in reply to:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Reply:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
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
