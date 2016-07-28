<?
$subject_val = "Re: [OMPI devel] Multi-Rail and Open IB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:09:15 2007" -->
<!-- isoreceived="20071109180915" -->
<!-- sent="Fri, 09 Nov 2007 13:09:06 -0500" -->
<!-- isosent="20071109180906" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-Rail and Open IB BTL" -->
<!-- id="4734A242.3050804_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071101151850.GG2151_at_minantech.com" -->
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
<strong>Date:</strong> 2007-11-09 13:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2600.php">Jeff Squyres: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2532.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>Another question.  What about the case of one node with 2 ports and one 
<br>
node with one port.  Does the open ib btl allow the side with 2 ports to 
<br>
establish two  endpoints to the single remote port?
<br>
<p>-DON
<br>
<p>Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;On Thu, Nov 01, 2007 at 11:15:21AM -0400, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;How would the openib btl handle the following scenario:
</span><br>
<span class="quotelev2">&gt;&gt;Two nodes, each with two ports, all ports are on the same subnet and switch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Would striping occur over 4 connections or 2?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Only two connections will be created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;If 2 is it equal distribution or are both local ports connected to the 
</span><br>
<span class="quotelev2">&gt;&gt;same remote port?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Equal distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;			Gleb.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Previous message:</strong> <a href="2600.php">Jeff Squyres: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2532.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2602.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
