<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 15:46:35 2007" -->
<!-- isoreceived="20071005194635" -->
<!-- sent="Fri, 5 Oct 2007 21:46:31 +0200" -->
<!-- isosent="20071005194631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --mca btl_base_debug" -->
<!-- id="567B39A2-AB7A-45CA-87B8-4E5D4CD5D495_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47024B14.3090409_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-05 15:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Previous message:</strong> <a href="2385.php">Richard Graham: "[OMPI devel] FW: Meeting at SC'07"</a>
<li><strong>In reply to:</strong> <a href="2374.php">Rolf.Vandevaart_at_[hidden]: "[OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Reply:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2007, at 3:43 PM, Rolf.Vandevaart_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I propose that we drop the mca parameter &quot;btl_base_debug&quot;.   It is  
</span><br>
<span class="quotelev1">&gt; an added
</span><br>
<span class="quotelev1">&gt; level of complexity that does not provide any benefit.  In fact, the
</span><br>
<span class="quotelev1">&gt; debug/verbose code in the btl_base_open.c is such that we can never  
</span><br>
<span class="quotelev1">&gt; turn on verbose messages.
</span><br>
<p>Heh -- I assume that this is an RFC, right?  :-)
<br>
<p><span class="quotelev1">&gt; A quick research of the other base components in the OMPI area show  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; none of them have a *_base_debug mca parameter.  They only have a  
</span><br>
<span class="quotelev1">&gt; *_base_verbose parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will plan on making this change but just thought I would check  
</span><br>
<span class="quotelev1">&gt; and see if
</span><br>
<span class="quotelev1">&gt; there is some historical or other reason why btl_base_debug should  
</span><br>
<span class="quotelev1">&gt; *not*
</span><br>
<span class="quotelev1">&gt; be removed.
</span><br>
<span class="quotelev1">&gt; (This came up as I was trying to figure out how to turn on  
</span><br>
<span class="quotelev1">&gt; verbosity for
</span><br>
<span class="quotelev1">&gt; the MX problem reported on the users list. )
</span><br>
<p>I don't really have an opinion either way, but I think you can turn  
<br>
on *some* debug messages by setting btl_base_verbose to (for example)  
<br>
100.  It looks like these messages are mainly in the BTL base  
<br>
selection logic and the openib BTL.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Previous message:</strong> <a href="2385.php">Richard Graham: "[OMPI devel] FW: Meeting at SC'07"</a>
<li><strong>In reply to:</strong> <a href="2374.php">Rolf.Vandevaart_at_[hidden]: "[OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Reply:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
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
