<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 09:57:22 2006" -->
<!-- isoreceived="20061108145722" -->
<!-- sent="Wed, 8 Nov 2006 09:57:18 -0500 (EST)" -->
<!-- isosent="20061108145718" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="Pine.LNX.4.64.0611080918470.24818_at_grizzly.cita.utoronto.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4551D664.5080602_at_sicortex.com" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 09:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2156.php">shane kennedy: "[OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Previous message:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 8 Nov 2006, Larry Stewart wrote:
<br>
<span class="quotelev1">&gt; Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI model assumes you don't have a &quot;shared memory&quot; system..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; therefore it is &quot;message passing&quot; oriented, and not designed to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perform optimally on shared memory systems (like SMPs, or numa-CCs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For many programs with both MPI and shared memory implementations, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI version runs faster on SMPs and numa-CCs. Why? See the previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paragraph...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course it does..its faster to copy data in main memory than it is
</span><br>
<span class="quotelev2">&gt;&gt; to do it thought any kind of network interface. You can optimize you
</span><br>
<span class="quotelev2">&gt;&gt; message passing implementation to a couple of memory to memory copies
</span><br>
<span class="quotelev2">&gt;&gt; when ranks are on the same node. In the worst case, even if using
</span><br>
<span class="quotelev2">&gt;&gt; local IP addresses to communicate between peers/ranks (in the same
</span><br>
<span class="quotelev2">&gt;&gt; node), the operating  system doesn't even touch the interface.. it
</span><br>
<span class="quotelev2">&gt;&gt; will just copy data from a tcp sender buffer to a tcp receiver
</span><br>
<span class="quotelev2">&gt;&gt; buffer.. in the end - that's always faster than going through a
</span><br>
<span class="quotelev2">&gt;&gt; phisical network link.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; There are a lot of papers about the relative merits of a mixed shared
</span><br>
<span class="quotelev1">&gt; memory and
</span><br>
<span class="quotelev1">&gt; MPI model - OpenMP on-node and MPI inter-node, for example.  Generally they
</span><br>
<span class="quotelev1">&gt; seem to show that MPI is at least as good.
</span><br>
<p>The conventional wisdom of pure MPI being as good as hybrid models is primarily driven by the fact that people haven't had much incentive to re-write their algorithms to support both models.   It's a lot easier to focus only on MPI, hence the limited (and lightly tested) support for MPI_THREAD_MULTIPLE and asynchronous progress in Open-MPI.
<br>
<p>If current HPC trends continue into the future there is going to be increased motivation to implement fine-grained parallelism in addition to MPI.  As an example, the amount of RAM/node doesn't seem to be increasing as fast as the number of cores/node, so pure MPI codes which use a significant amount of memory for buffers (domain decomposition algorithms are a good example) will not scale to as large of a problem size as hybrid implementations in weak-scaling scenarios.
<br>
<p>Hugh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2156.php">shane kennedy: "[OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Previous message:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2154.php">Larry Stewart: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
