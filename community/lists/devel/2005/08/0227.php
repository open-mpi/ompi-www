<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 05:57:50 2005" -->
<!-- isoreceived="20050825105750" -->
<!-- sent="Thu, 25 Aug 2005 06:57:47 -0400" -->
<!-- isosent="20050825105747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="6eec2966d311834d65274dcc7921f996_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1313F7E2-6A1F-44FB-B105-B31D6264E7B3_at_cs.unm.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 05:57:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen --
<br>
<p>When you guys return to the office, it's probably worthwhile to see if 
<br>
it's possible to set leave_pinned to 1 automatically if the memory 
<br>
hooks are being set properly (Brian keeps explaining this stuff to me, 
<br>
but it's so complicated that the details quickly fall out of my brain 
<br>
;-) ).
<br>
<p><p>On Aug 25, 2005, at 12:48 AM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Hi Troy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim and I would like to discuss this with you as well. One thing I
</span><br>
<span class="quotelev1">&gt; would ask, are you using the btl_mvapi_leave_pinned=1 option?
</span><br>
<span class="quotelev1">&gt; otherwise it is not a apples to apples comparison.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2005, at 8:21 PM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have some Netpipe graphs of OpenMPI and Mviapich on OpenIB gen2 on
</span><br>
<span class="quotelev2">&gt;&gt; Opteron systems, one with PCI-X IB cards, and the other with PCI-
</span><br>
<span class="quotelev2">&gt;&gt; Express
</span><br>
<span class="quotelev2">&gt;&gt; DDR IB cards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to chat with someone who fill me in a bit on what's going on
</span><br>
<span class="quotelev2">&gt;&gt; with performance, and how the BTL for IB is implemented. One thing I'd
</span><br>
<span class="quotelev2">&gt;&gt; like to try is modifying the kernel to allow 95% of physical memory to
</span><br>
<span class="quotelev2">&gt;&gt; be registered for IB, and see how much of a difference this makes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am also toying with the idea of writing an OpenIB BTL module for
</span><br>
<span class="quotelev2">&gt;&gt; Netpipe, so I can evaluate the BTL layer performance directly without
</span><br>
<span class="quotelev2">&gt;&gt; any MPI overhead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also get the following messages on startup:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt;&gt; uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev2">&gt;&gt;     [0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev2">&gt;&gt;     No hca's found on this host!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something strange is going on, because it is finding at least 1 IB
</span><br>
<span class="quotelev2">&gt;&gt; port, given the performance numbers.
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
