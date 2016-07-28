<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 10:41:28 2007" -->
<!-- isoreceived="20070724144128" -->
<!-- sent="Tue, 24 Jul 2007 10:41:19 -0400" -->
<!-- isosent="20070724144119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="69401624-30FD-4DAF-9B04-5D96F5F116A5_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-24 10:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1983.php">Brian Barrett: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1983.php">Brian Barrett: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with Gleb. Calling malloc with size 0 is just bad practice.  
<br>
As the returned memory is not supposed to be suitable for any use  
<br>
[fact that we can not verify as there is at least one byte] why  
<br>
returning anything else than NULL ? Returning NULL will make the  
<br>
application segfault, which is a good hint for the user that  
<br>
something wasn't right somewhere. Moreover, returning some special  
<br>
memory will force us to check in most MPI functions that this  
<br>
particular pointer is not used [similar to MPI_BOTTOM], which is a  
<br>
huge amount of code.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 24, 2007, at 10:28 AM, Gleb Natapov wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1983.php">Brian Barrett: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1981.php">Gleb Natapov: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1983.php">Brian Barrett: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
