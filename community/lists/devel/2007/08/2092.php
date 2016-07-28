<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 19:46:44 2007" -->
<!-- isoreceived="20070806234644" -->
<!-- sent="Mon, 6 Aug 2007 17:46:34 -0600" -->
<!-- isosent="20070806234634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot" -->
<!-- id="138C7304-9A2F-49D2-9FBA-E9122DE2A86E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070806204813.GA7874_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2007-08-06 19:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2091.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>In reply to:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2007, at 2:48 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This fixes the problem for us (we stole it from a libtool mailing
</span><br>
<span class="quotelev2">&gt;&gt; list post from a long time ago).  If this could be applied to the
</span><br>
<span class="quotelev2">&gt;&gt; Libtool development trunk, that would be great...  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch has two issues.  First a simple one, it should be
</span><br>
<span class="quotelev1">&gt;   sed -n '$p'
</span><br>
<span class="quotelev1">&gt; instead of `tail -n 1', for portability.  Second, and more  
</span><br>
<span class="quotelev1">&gt; importantly,
</span><br>
<span class="quotelev1">&gt; I remember to have tested the patch on some but not all compilers  
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev1">&gt; know do pretend to be g++ at times (icpc, pathCC?, pgCC?).  I hope  
</span><br>
<span class="quotelev1">&gt; none
</span><br>
<span class="quotelev1">&gt; of them (nor g++ either) get the idea of splitting long output  
</span><br>
<span class="quotelev1">&gt; lines of
</span><br>
<span class="quotelev1">&gt; `$CXX -v' with backslash-newline.
</span><br>
<p>FWIW, I've been regression testing OMPI with this patch against GNU,  
<br>
Intel 9.0, 9.1, pathscale, and the PGI compilers and it's been  
<br>
fine...  (of course, that doesn't imply anything about future  
<br>
behavior ;-) ).
<br>
<p><span class="quotelev1">&gt; Anyway, I'll put on my list throwing out another test round for the
</span><br>
<span class="quotelev1">&gt; patch.
</span><br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2091.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>In reply to:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
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
