<?
$subject_val = "Re: [OMPI devel] Multi-Rail and Open IB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:15:31 2007" -->
<!-- isoreceived="20071109181531" -->
<!-- sent="Fri, 9 Nov 2007 13:15:21 -0500" -->
<!-- isosent="20071109181521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-Rail and Open IB BTL" -->
<!-- id="8A6DF206-F056-4087-8BED-1F1898365BF2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4734A242.3050804_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-Rail and Open IB BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 13:15:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don --
<br>
<p>Are you asking what *does* it do, or what *should* a BTL do?
<br>
<p>On Nov 9, 2007, at 1:09 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Gleb,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another question.  What about the case of one node with 2 ports and  
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt; node with one port.  Does the open ib btl allow the side with 2  
</span><br>
<span class="quotelev1">&gt; ports to
</span><br>
<span class="quotelev1">&gt; establish two  endpoints to the single remote port?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 01, 2007 at 11:15:21AM -0400, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How would the openib btl handle the following scenario:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Two nodes, each with two ports, all ports are on the same subnet  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would striping occur over 4 connections or 2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only two connections will be created.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If 2 is it equal distribution or are both local ports connected to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same remote port?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Equal distribution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2601.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
