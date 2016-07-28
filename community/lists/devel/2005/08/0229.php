<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 09:40:56 2005" -->
<!-- isoreceived="20050825144056" -->
<!-- sent="Thu, 25 Aug 2005 09:40:54 -0500" -->
<!-- isosent="20050825144054" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050825144054.GJ1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 09:40:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this the right command line for this?
<br>
<p>mpirun -mca btl_openib_leave_pinned 1 -np 2 -host opteron1,opteron2
<br>
./NPmpi-openmpi -o /tmp/foo
<br>
<p>On Wed, Aug 24, 2005 at 10:48:31PM -0600, Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; Hi Troy,
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
<span class="quotelev2">&gt; &gt;I have some Netpipe graphs of OpenMPI and Mviapich on OpenIB gen2 on
</span><br>
<span class="quotelev2">&gt; &gt;Opteron systems, one with PCI-X IB cards, and the other with PCI- 
</span><br>
<span class="quotelev2">&gt; &gt;Express
</span><br>
<span class="quotelev2">&gt; &gt;DDR IB cards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'd like to chat with someone who fill me in a bit on what's going on
</span><br>
<span class="quotelev2">&gt; &gt;with performance, and how the BTL for IB is implemented. One thing I'd
</span><br>
<span class="quotelev2">&gt; &gt;like to try is modifying the kernel to allow 95% of physical memory to
</span><br>
<span class="quotelev2">&gt; &gt;be registered for IB, and see how much of a difference this makes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am also toying with the idea of writing an OpenIB BTL module for
</span><br>
<span class="quotelev2">&gt; &gt;Netpipe, so I can evaluate the BTL layer performance directly without
</span><br>
<span class="quotelev2">&gt; &gt;any MPI overhead.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I also get the following messages on startup:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt; &gt;uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev2">&gt; &gt;    [0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev2">&gt; &gt;    No hca's found on this host!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Something strange is going on, because it is finding at least 1 IB
</span><br>
<span class="quotelev2">&gt; &gt;port, given the performance numbers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-- 
</span><br>
<span class="quotelev2">&gt; &gt;---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt;----
</span><br>
<span class="quotelev2">&gt; &gt;Troy Benjegerdes                'da hozer'                 
</span><br>
<span class="quotelev2">&gt; &gt;hozer_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Somone asked me why I work on this free (<a href="http://www.fsf.org/">http://www.fsf.org/</a> 
</span><br>
<span class="quotelev2">&gt; &gt;philosophy/)
</span><br>
<span class="quotelev2">&gt; &gt;software stuff and not get a real job. Charles Shultz had the best  
</span><br>
<span class="quotelev2">&gt; &gt;answer:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&quot;Why do musicians compose symphonies and poets write poems? They do it
</span><br>
<span class="quotelev2">&gt; &gt;because life wouldn't have any meaning for them if they didn't.  
</span><br>
<span class="quotelev2">&gt; &gt;That's why
</span><br>
<span class="quotelev2">&gt; &gt;I draw cartoons. It's my life.&quot; -- Charles Shultz
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
--------------------------------------------------------------------------
Troy Benjegerdes                'da hozer'                hozer_at_[hidden]  
Somone asked me why I work on this free (<a href="http://www.fsf.org/philosophy/">http://www.fsf.org/philosophy/</a>)
software stuff and not get a real job. Charles Shultz had the best answer:
&quot;Why do musicians compose symphonies and poets write poems? They do it
because life wouldn't have any meaning for them if they didn't. That's why
I draw cartoons. It's my life.&quot; -- Charles Shultz
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
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
