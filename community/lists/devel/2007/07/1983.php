<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 10:42:04 2007" -->
<!-- isoreceived="20070724144204" -->
<!-- sent="Tue, 24 Jul 2007 08:41:27 -0600" -->
<!-- isosent="20070724144127" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="A2092D0F-3DA7-4184-82B0-FEA792E782AE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070724142807.GE2775_at_minantech.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-24 10:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2007, at 8:28 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jul 24, 2007 at 11:20:11AM -0300, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 7/23/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have any opinions on this?  If not, I'll go implement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option #1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, Jeff... just reading this. I think your option #1 is the
</span><br>
<span class="quotelev2">&gt;&gt; better. However, I want to warn you about to issues:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * In my Linux FC6 box, malloc(0) return different pointers for each
</span><br>
<span class="quotelev2">&gt;&gt; call. In fact, I believe this is a requeriment for malloc, in the  
</span><br>
<span class="quotelev2">&gt;&gt; case
</span><br>
<span class="quotelev1">&gt; man malloc tells me this:
</span><br>
<span class="quotelev1">&gt; &quot;If size was equal to 0, either NULL or a pointer suitable to be  
</span><br>
<span class="quotelev1">&gt; passed to free()
</span><br>
<span class="quotelev1">&gt; is returned&quot;. So may be we should just return NULL and be done with  
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<p>Which is also what POSIX says:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.opengroup.org/onlinepubs/009695399/functions/malloc.html">http://www.opengroup.org/onlinepubs/009695399/functions/malloc.html</a>
<br>
<p>I vote with gleb -- return NULL, don't set errno, and be done with  
<br>
it.  The way I read the advice to implementors, this would be a legal  
<br>
response to a 0 byte request.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
