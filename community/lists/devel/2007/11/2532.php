<?
$subject_val = "Re: [OMPI devel] Multi-Rail and Open IB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 11:18:56 2007" -->
<!-- isoreceived="20071101151856" -->
<!-- sent="Thu, 1 Nov 2007 17:18:50 +0200" -->
<!-- isosent="20071101151850" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-Rail and Open IB BTL" -->
<!-- id="20071101151850.GG2151_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4729ED89.2090100_at_Sun.COM" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 11:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2533.php">Richard Graham: "[OMPI devel] Changes to ompi_free_list initialization"</a>
<li><strong>Previous message:</strong> <a href="2531.php">Don Kerr: "[OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2531.php">Don Kerr: "[OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 01, 2007 at 11:15:21AM -0400, Don Kerr wrote:
<br>
<span class="quotelev1">&gt; How would the openib btl handle the following scenario:
</span><br>
<span class="quotelev1">&gt; Two nodes, each with two ports, all ports are on the same subnet and switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would striping occur over 4 connections or 2?
</span><br>
Only two connections will be created.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If 2 is it equal distribution or are both local ports connected to the 
</span><br>
<span class="quotelev1">&gt; same remote port?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Equal distribution.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2533.php">Richard Graham: "[OMPI devel] Changes to ompi_free_list initialization"</a>
<li><strong>Previous message:</strong> <a href="2531.php">Don Kerr: "[OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2531.php">Don Kerr: "[OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
