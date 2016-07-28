<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 20:39:20 2006" -->
<!-- isoreceived="20061108013920" -->
<!-- sent="Tue, 7 Nov 2006 17:39:15 -0800" -->
<!-- isosent="20061108013915" -->
<!-- name="Greg Lindahl" -->
<!-- email="greg.lindahl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="20061108013915.GB2872_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f058a9c30611070902g1a7e1d5excdf2db7986357652_at_mail.gmail.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>greg.lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-07 20:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 07, 2006 at 05:02:54PM +0000, Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
<br>
<p><span class="quotelev1">&gt; if your aplication is on one given node, sharing data is better than
</span><br>
<span class="quotelev1">&gt; copying data.
</span><br>
<p>Unless sharing data repeatedly leads you to false sharing and a loss
<br>
in performance.
<br>
<p><span class="quotelev1">&gt; the MPI model assumes you don't have a &quot;shared memory&quot; system..
</span><br>
<span class="quotelev1">&gt; therefore it is &quot;message passing&quot; oriented, and not designed to
</span><br>
<span class="quotelev1">&gt; perform optimally on shared memory systems (like SMPs, or numa-CCs).
</span><br>
<p>For many programs with both MPI and shared memory implementations, the
<br>
MPI version runs faster on SMPs and numa-CCs. Why? See the previous
<br>
paragraph...
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2147.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2149.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
