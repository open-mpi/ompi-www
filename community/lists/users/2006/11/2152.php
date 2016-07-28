<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 07:25:31 2006" -->
<!-- isoreceived="20061108122531" -->
<!-- sent="Wed, 8 Nov 2006 12:25:20 +0000" -->
<!-- isosent="20061108122520" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="f058a9c30611080425o70f499a9r6dc174d51f926d4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061108013915.GB2872_at_greglaptop.internal.keyresearch.com" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 07:25:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2161.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 11/8/06, Greg Lindahl &lt;greg.lindahl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Tue, Nov 07, 2006 at 05:02:54PM +0000, Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; if your aplication is on one given node, sharing data is better than
</span><br>
<span class="quotelev2">&gt; &gt; copying data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless sharing data repeatedly leads you to false sharing and a loss
</span><br>
<span class="quotelev1">&gt; in performance.
</span><br>
<p><p>what does that mean.. I did not understand that.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; the MPI model assumes you don't have a &quot;shared memory&quot; system..
</span><br>
<span class="quotelev2">&gt; &gt; therefore it is &quot;message passing&quot; oriented, and not designed to
</span><br>
<span class="quotelev2">&gt; &gt; perform optimally on shared memory systems (like SMPs, or numa-CCs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For many programs with both MPI and shared memory implementations, the
</span><br>
<span class="quotelev1">&gt; MPI version runs faster on SMPs and numa-CCs. Why? See the previous
</span><br>
<span class="quotelev1">&gt; paragraph...
</span><br>
<p>Of course it does..its faster to copy data in main memory than it is
<br>
to do it thought any kind of network interface. You can optimize you
<br>
message passing implementation to a couple of memory to memory copies
<br>
when ranks are on the same node. In the worst case, even if using
<br>
local IP addresses to communicate between peers/ranks (in the same
<br>
node), the operating  system doesn't even touch the interface.. it
<br>
will just copy data from a tcp sender buffer to a tcp receiver
<br>
buffer.. in the end - that's always faster than going through a
<br>
phisical network link.
<br>
<p><p><p>But you still have a message passing api that is doing memory to
<br>
memory copies.. its a worse framework to do memory copies than a api
<br>
designed just for that.
<br>
One could argue that MPI is more than a message passing api, since it
<br>
provides also APIs to apply operators to the data..
<br>
<p><p>But, for instance.. try to benchmark real applications with a MPI and
<br>
posix threads implementations in the same numa-cc or big SMP machine..
<br>
my bet is that posix threads implementation is going to be faster..
<br>
There are always exceptions.. like having a very well designed MPI
<br>
application, but a terrible posix threads one.. or design that's just
<br>
not that adaptable to a posix threads programming model (or a MPI
<br>
model).
<br>
<p><p><pre>
-- 
Miguel Sousa Filipe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2151.php">Sunil Patil: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2148.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2161.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
