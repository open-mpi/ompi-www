<?
$subject_val = "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 19:47:06 2012" -->
<!-- isoreceived="20120113004706" -->
<!-- sent="Fri, 13 Jan 2012 11:17:00 +1030" -->
<!-- isosent="20120113004700" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl" -->
<!-- id="20120113111700.583d0080_at_Gantu.yeoh.info" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F0F649C.1080002_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 19:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Previous message:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>In reply to:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris,
<br>
<p>On Fri, 13 Jan 2012 09:54:20 +1100
<br>
Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/01/12 20:34, Christopher Yeoh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cross Memory Attach (CMA) is a pair of new syscalls
</span><br>
<span class="quotelev2">&gt; &gt; (process_vm_readv and process_vm_writev) which allow for fast
</span><br>
<span class="quotelev2">&gt; &gt; intranode communication. It has added to the Linux 3.2 kernel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any figures comparing some code with and without CMA ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Here's some benchmarking results I did a while back on a single 64-way
<br>
(SMT) POWER6 box.
<br>
<p>HPCC results:
<br>
=============
<br>
<p>MB/s			Num Processes	
<br>
Naturally Ordered	4	8	16	32
<br>
Base			1235	935	622	419
<br>
CMA			4741	3769	1977	703
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
MB/s			Num Processes	
<br>
Randomly Ordered	4	8	16	32
<br>
Base			1227	947	638	412
<br>
CMA			4666	3682	1978	710
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
MB/s			Num Processes	
<br>
Max Ping Pong		4	8	16	32
<br>
Base			2028	1938	1928	1882
<br>
CMA			7424	7510	7598	7708
<br>
<p><p>NPB:
<br>
====
<br>
BT - 12% improvement
<br>
FT - 15% improvement
<br>
IS - 30% improvement
<br>
SP - 34% improvement
<br>
<p>IMB:
<br>
===
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Ping Pong - ~30% improvement
<br>
Ping Ping - ~120% improvement
<br>
SendRecv - ~100% improvement
<br>
Exchange - ~150% improvement
<br>
Gather(v) - ~20% improvement
<br>
Scatter(v) - ~20% improvement
<br>
AlltoAll(v) - 30-50% improvement
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Previous message:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>In reply to:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
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
