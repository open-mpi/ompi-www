<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 10:28:13 2007" -->
<!-- isoreceived="20070724142813" -->
<!-- sent="Tue, 24 Jul 2007 17:28:07 +0300" -->
<!-- isosent="20070724142807" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="20070724142807.GE2775_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7ba66e40707240720l621ff7b9h74bf58a7a81fd78_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-24 10:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1983.php">Brian Barrett: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 24, 2007 at 11:20:11AM -0300, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 7/23/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone have any opinions on this?  If not, I'll go implement
</span><br>
<span class="quotelev2">&gt; &gt; option #1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, Jeff... just reading this. I think your option #1 is the
</span><br>
<span class="quotelev1">&gt; better. However, I want to warn you about to issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * In my Linux FC6 box, malloc(0) return different pointers for each
</span><br>
<span class="quotelev1">&gt; call. In fact, I believe this is a requeriment for malloc, in the case
</span><br>
man malloc tells me this:
<br>
&quot;If size was equal to 0, either NULL or a pointer suitable to be passed to free()
<br>
is returned&quot;. So may be we should just return NULL and be done with it?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1980.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1982.php">George Bosilca: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1983.php">Brian Barrett: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
