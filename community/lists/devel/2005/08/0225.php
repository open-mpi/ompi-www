<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 24 23:48:46 2005" -->
<!-- isoreceived="20050825044846" -->
<!-- sent="Wed, 24 Aug 2005 22:48:31 -0600" -->
<!-- isosent="20050825044831" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="1313F7E2-6A1F-44FB-B105-B31D6264E7B3_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050825022137.GH1685_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-24 23:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Troy Benjegerdes: "OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Troy,
<br>
<p>Tim and I would like to discuss this with you as well. One thing I  
<br>
would ask, are you using the btl_mvapi_leave_pinned=1 option?  
<br>
otherwise it is not a apples to apples comparison.
<br>
<p>- Galen
<br>
On Aug 24, 2005, at 8:21 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; I have some Netpipe graphs of OpenMPI and Mviapich on OpenIB gen2 on
</span><br>
<span class="quotelev1">&gt; Opteron systems, one with PCI-X IB cards, and the other with PCI- 
</span><br>
<span class="quotelev1">&gt; Express
</span><br>
<span class="quotelev1">&gt; DDR IB cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to chat with someone who fill me in a bit on what's going on
</span><br>
<span class="quotelev1">&gt; with performance, and how the BTL for IB is implemented. One thing I'd
</span><br>
<span class="quotelev1">&gt; like to try is modifying the kernel to allow 95% of physical memory to
</span><br>
<span class="quotelev1">&gt; be registered for IB, and see how much of a difference this makes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also toying with the idea of writing an OpenIB BTL module for
</span><br>
<span class="quotelev1">&gt; Netpipe, so I can evaluate the BTL layer performance directly without
</span><br>
<span class="quotelev1">&gt; any MPI overhead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also get the following messages on startup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev1">&gt;     [0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev1">&gt;     No hca's found on this host!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something strange is going on, because it is finding at least 1 IB
</span><br>
<span class="quotelev1">&gt; port, given the performance numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Troy Benjegerdes                'da hozer'                 
</span><br>
<span class="quotelev1">&gt; hozer_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somone asked me why I work on this free (<a href="http://www.fsf.org/">http://www.fsf.org/</a> 
</span><br>
<span class="quotelev1">&gt; philosophy/)
</span><br>
<span class="quotelev1">&gt; software stuff and not get a real job. Charles Shultz had the best  
</span><br>
<span class="quotelev1">&gt; answer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Why do musicians compose symphonies and poets write poems? They do it
</span><br>
<span class="quotelev1">&gt; because life wouldn't have any meaning for them if they didn't.  
</span><br>
<span class="quotelev1">&gt; That's why
</span><br>
<span class="quotelev1">&gt; I draw cartoons. It's my life.&quot; -- Charles Shultz
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Troy Benjegerdes: "OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
