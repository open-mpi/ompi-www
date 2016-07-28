<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 10:39:39 2007" -->
<!-- isoreceived="20070813143939" -->
<!-- sent="Mon, 13 Aug 2007 17:39:34 +0300" -->
<!-- isosent="20070813143934" -->
<!-- name="Gleb Natapov" -->
<!-- email="gleb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="20070813143934.GC26964_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30DA553B-44A6-4E8C-9DD7-2A529071DA01_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>gleb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 10:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2116.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 13, 2007 at 10:36:19AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 13, 2007, at 6:36 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pallas, Presta (as i know) also use static rank. So lets start to fix
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all &quot;bogus&quot; benchmarks :-) ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; All benchmarks are bogus. I have better optimization. Check a name of
</span><br>
<span class="quotelev2">&gt; &gt; executable and if this is some know benchmark send one byte instead of
</span><br>
<span class="quotelev2">&gt; &gt; real message. 3D driver do this why can't we.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because we'd end up in an arms race of benchmark argv[0] name and  
</span><br>
<span class="quotelev1">&gt; what is hard-coded in Open MPI.  Users/customers/partners would soon  
</span><br>
<span class="quotelev1">&gt; enough figure out that this is what we're doing and either use &quot;mv&quot;  
</span><br>
<span class="quotelev1">&gt; or &quot;ln -s&quot; to get around our hack and see the real numbers anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short: it's an even dirtier trick than header caching (for  
</span><br>
<span class="quotelev1">&gt; example), and we'd get beat up about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
That was joke :) (But 3D drivers really do such things :( )
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2116.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
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
