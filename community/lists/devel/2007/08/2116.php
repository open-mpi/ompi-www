<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 10:36:31 2007" -->
<!-- isoreceived="20070813143631" -->
<!-- sent="Mon, 13 Aug 2007 10:36:19 -0400" -->
<!-- isosent="20070813143619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="30DA553B-44A6-4E8C-9DD7-2A529071DA01_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070813103635.GD23182_at_minantech.com" -->
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
<strong>Date:</strong> 2007-08-13 10:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2109.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 6:36 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Pallas, Presta (as i know) also use static rank. So lets start to fix
</span><br>
<span class="quotelev2">&gt;&gt; all &quot;bogus&quot; benchmarks :-) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; All benchmarks are bogus. I have better optimization. Check a name of
</span><br>
<span class="quotelev1">&gt; executable and if this is some know benchmark send one byte instead of
</span><br>
<span class="quotelev1">&gt; real message. 3D driver do this why can't we.
</span><br>
<p>Because we'd end up in an arms race of benchmark argv[0] name and  
<br>
what is hard-coded in Open MPI.  Users/customers/partners would soon  
<br>
enough figure out that this is what we're doing and either use &quot;mv&quot;  
<br>
or &quot;ln -s&quot; to get around our hack and see the real numbers anyway.
<br>
<p>In short: it's an even dirtier trick than header caching (for  
<br>
example), and we'd get beat up about it.
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
<li><strong>Next message:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2109.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2118.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
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
