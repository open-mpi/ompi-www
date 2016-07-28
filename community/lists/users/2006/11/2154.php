<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 08:06:51 2006" -->
<!-- isoreceived="20061108130651" -->
<!-- sent="Wed, 08 Nov 2006 08:06:44 -0500" -->
<!-- isosent="20061108130644" -->
<!-- name="Larry Stewart" -->
<!-- email="larry.stewart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="4551D664.5080602_at_sicortex.com" -->
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
<strong>From:</strong> Larry Stewart (<em>larry.stewart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 08:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
<br>
<span class="quotelev1">&gt; H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI model assumes you don't have a &quot;shared memory&quot; system..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore it is &quot;message passing&quot; oriented, and not designed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perform optimally on shared memory systems (like SMPs, or numa-CCs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; For many programs with both MPI and shared memory implementations, the
</span><br>
<span class="quotelev2">&gt;&gt; MPI version runs faster on SMPs and numa-CCs. Why? See the previous
</span><br>
<span class="quotelev2">&gt;&gt; paragraph...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course it does..its faster to copy data in main memory than it is
</span><br>
<span class="quotelev1">&gt; to do it thought any kind of network interface. You can optimize you
</span><br>
<span class="quotelev1">&gt; message passing implementation to a couple of memory to memory copies
</span><br>
<span class="quotelev1">&gt; when ranks are on the same node. In the worst case, even if using
</span><br>
<span class="quotelev1">&gt; local IP addresses to communicate between peers/ranks (in the same
</span><br>
<span class="quotelev1">&gt; node), the operating  system doesn't even touch the interface.. it
</span><br>
<span class="quotelev1">&gt; will just copy data from a tcp sender buffer to a tcp receiver
</span><br>
<span class="quotelev1">&gt; buffer.. in the end - that's always faster than going through a
</span><br>
<span class="quotelev1">&gt; phisical network link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
There are a lot of papers about the relative merits of a mixed shared
<br>
memory and
<br>
MPI model - OpenMP on-node and MPI inter-node, for example.  Generally they
<br>
seem to show that MPI is at least as good.
<br>
<p>It isn't true that copying data in main memory (with a CPU) is always
<br>
faster than
<br>
the NIC.  Several effects arise:  when you copy between address spaces,
<br>
then the OS overhead
<br>
of making a shared memory region can be high,  the CPUs may not be as
<br>
good at copying
<br>
as the NIC, having the CPU do it can trash the caches, and leave the
<br>
copied data in the
<br>
wrong cache altogether, and having the CPU do it loses the parallelism
<br>
you can get
<br>
by letting a separate processor (the NIC) do the work.
<br>
<p>-Larry
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2154/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2153.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Reply:</strong> <a href="2155.php">Hugh Merz: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
