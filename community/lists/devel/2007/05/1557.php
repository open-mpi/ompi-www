<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 05:12:18 2007" -->
<!-- isoreceived="20070518091218" -->
<!-- sent="Fri, 18 May 2007 12:12:13 +0300" -->
<!-- isosent="20070518091213" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="20070518091213.GC32628_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="464CA056.1000901_at_myri.com" -->
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
<strong>Date:</strong> 2007-05-18 05:12:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 17, 2007 at 02:35:02PM -0400, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On the other hand, since the MPI standard explicitly says you're not  
</span><br>
<span class="quotelev2">&gt; &gt; allowed to call fork() or system() during the MPI application and  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it ? The MPI spec says that you should not access buffers that have 
</span><br>
<span class="quotelev1">&gt; been committed to MPI (pending asynchronous send or recv buffer for 
</span><br>
<span class="quotelev1">&gt; example). It does not care about page boundary and pinning side effects.
</span><br>
That is exactly what I am trying to achieve by proposed change. Child
<br>
will not be bale to touch memory that was committed to MPI in time of
<br>
fork(), but all other memory will be safe. This is not the case
<br>
currently with IB (even when registration cache is _not_ in use).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fork() problem is due to memory registration aggravated by 
</span><br>
<span class="quotelev1">&gt; registration cache. Memory registration in itself is a hack from the OS 
</span><br>
<span class="quotelev1">&gt; point of view, and you already know a lot about the various problems 
</span><br>
<span class="quotelev1">&gt; related to registration cache.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The right way to fix the fork problem is to fix the memory registration 
</span><br>
<span class="quotelev1">&gt; problem in the OS itself. It's not going to happen anytime soon, so it 
</span><br>
<span class="quotelev1">&gt; requires another hack (forcing VM duplication of registered pages at 
</span><br>
<span class="quotelev1">&gt; fork time).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
