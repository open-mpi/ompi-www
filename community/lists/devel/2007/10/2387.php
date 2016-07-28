<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 16:05:10 2007" -->
<!-- isoreceived="20071005200510" -->
<!-- sent="Fri, 05 Oct 2007 16:08:35 -0400" -->
<!-- isosent="20071005200835" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --mca btl_base_debug" -->
<!-- id="470699C3.4060004_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="567B39A2-AB7A-45CA-87B8-4E5D4CD5D495_at_cisco.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-05 16:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Previous message:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>In reply to:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Reply:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 2, 2007, at 3:43 PM, Rolf.Vandevaart_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I propose that we drop the mca parameter &quot;btl_base_debug&quot;.   It is  
</span><br>
<span class="quotelev2">&gt;&gt; an added
</span><br>
<span class="quotelev2">&gt;&gt; level of complexity that does not provide any benefit.  In fact, the
</span><br>
<span class="quotelev2">&gt;&gt; debug/verbose code in the btl_base_open.c is such that we can never  
</span><br>
<span class="quotelev2">&gt;&gt; turn on verbose messages.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heh -- I assume that this is an RFC, right?  :-)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It seemed kind of small for an RFC, but maybe it is.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; A quick research of the other base components in the OMPI area show  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; none of them have a *_base_debug mca parameter.  They only have a  
</span><br>
<span class="quotelev2">&gt;&gt; *_base_verbose parameter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will plan on making this change but just thought I would check  
</span><br>
<span class="quotelev2">&gt;&gt; and see if
</span><br>
<span class="quotelev2">&gt;&gt; there is some historical or other reason why btl_base_debug should  
</span><br>
<span class="quotelev2">&gt;&gt; *not*
</span><br>
<span class="quotelev2">&gt;&gt; be removed.
</span><br>
<span class="quotelev2">&gt;&gt; (This came up as I was trying to figure out how to turn on  
</span><br>
<span class="quotelev2">&gt;&gt; verbosity for
</span><br>
<span class="quotelev2">&gt;&gt; the MX problem reported on the users list. )
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really have an opinion either way, but I think you can turn  
</span><br>
<span class="quotelev1">&gt; on *some* debug messages by setting btl_base_verbose to (for example)  
</span><br>
<span class="quotelev1">&gt; 100.  It looks like these messages are mainly in the BTL base  
</span><br>
<span class="quotelev1">&gt; selection logic and the openib BTL.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Jeff, can you verify that you can get something out with 
<br>
btl_base_verbose?  My experience is that
<br>
it has no effect at all.  After writing the earlier message I realized 
<br>
that btl_base_debug is the one
<br>
that affects what comes out.  But as I said, this is different then all 
<br>
the other frameworks and was
<br>
a source of confusion for me.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Previous message:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>In reply to:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Reply:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
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
