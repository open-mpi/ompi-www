<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 07:39:54 2006" -->
<!-- isoreceived="20061108123954" -->
<!-- sent="Wed, 8 Nov 2006 12:39:47 +0000" -->
<!-- isosent="20061108123947" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="f058a9c30611080439h31f75279hc38fa50c36c748f0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f058a9c30611080425o70f499a9r6dc174d51f926d4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-11-08 07:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/8/06, Miguel Figueiredo Mascarenhas Sousa Filipe
<br>
&lt;miguel.filipe_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/8/06, Greg Lindahl &lt;greg.lindahl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Nov 07, 2006 at 05:02:54PM +0000, Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if your aplication is on one given node, sharing data is better than
</span><br>
<span class="quotelev3">&gt; &gt; &gt; copying data.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unless sharing data repeatedly leads you to false sharing and a loss
</span><br>
<span class="quotelev2">&gt; &gt; in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what does that mean.. I did not understand that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the MPI model assumes you don't have a &quot;shared memory&quot; system..
</span><br>
<span class="quotelev3">&gt; &gt; &gt; therefore it is &quot;message passing&quot; oriented, and not designed to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; perform optimally on shared memory systems (like SMPs, or numa-CCs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For many programs with both MPI and shared memory implementations, the
</span><br>
<span class="quotelev2">&gt; &gt; MPI version runs faster on SMPs and numa-CCs. Why? See the previous
</span><br>
<span class="quotelev2">&gt; &gt; paragraph...
</span><br>
<p>I miss understood what you've said.
<br>
<p>The reasons I see for that are:
<br>
1) have aplication design MPI oriented...
<br>
and adapt that design to a shared memory implementation afterwards.
<br>
(using a mpi programming model on a shared memory aplication.)
<br>
2) cases where the problem space is better solved using a MPI
<br>
programming model oriented solution.
<br>
<p>Shared memory, or multi-threading program development requires a
<br>
diferent programming model.
<br>
The MPI model can be better suited to some tasks, than the
<br>
multi-threading approach.
<br>
And vice-versa.
<br>
<p><p><p><span class="quotelev1">&gt; But, for instance.. try to benchmark real applications with a MPI and
</span><br>
<span class="quotelev1">&gt; posix threads implementations in the same numa-cc or big SMP machine..
</span><br>
<span class="quotelev1">&gt; my bet is that posix threads implementation is going to be faster..
</span><br>
<span class="quotelev1">&gt; There are always exceptions.. like having a very well designed MPI
</span><br>
<span class="quotelev1">&gt; application, but a terrible posix threads one.. or design that's just
</span><br>
<span class="quotelev1">&gt; not that adaptable to a posix threads programming model (or a MPI
</span><br>
<span class="quotelev1">&gt; model).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Miguel Sousa Filipe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Miguel Sousa Filipe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
