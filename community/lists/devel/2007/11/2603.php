<?
$subject_val = "Re: [OMPI devel] Multi-Rail and Open IB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:24:17 2007" -->
<!-- isoreceived="20071109182417" -->
<!-- sent="Fri, 09 Nov 2007 13:24:02 -0500" -->
<!-- isosent="20071109182402" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-Rail and Open IB BTL" -->
<!-- id="4734A5C2.2030907_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8A6DF206-F056-4087-8BED-1F1898365BF2_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 13:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2604.php">Brad Penoff: "[OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
both, I was thinking of listing what I think are multi-rail requirements 
<br>
but wanted to understand what the current state of things are
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Don --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are you asking what *does* it do, or what *should* a BTL do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 9, 2007, at 1:09 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Gleb,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Another question.  What about the case of one node with 2 ports and  
</span><br>
<span class="quotelev2">&gt;&gt;one
</span><br>
<span class="quotelev2">&gt;&gt;node with one port.  Does the open ib btl allow the side with 2  
</span><br>
<span class="quotelev2">&gt;&gt;ports to
</span><br>
<span class="quotelev2">&gt;&gt;establish two  endpoints to the single remote port?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Thu, Nov 01, 2007 at 11:15:21AM -0400, Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;How would the openib btl handle the following scenario:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Two nodes, each with two ports, all ports are on the same subnet  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;and switch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Would striping occur over 4 connections or 2?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Only two connections will be created.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;If 2 is it equal distribution or are both local ports connected to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;same remote port?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Equal distribution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2604.php">Brad Penoff: "[OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
