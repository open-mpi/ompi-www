<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 24 21:21:39 2005" -->
<!-- isoreceived="20050825022139" -->
<!-- sent="Wed, 24 Aug 2005 21:21:37 -0500" -->
<!-- isosent="20050825022137" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="OpenIB results" -->
<!-- id="20050825022137.GH1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2005-08-24 21:21:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0221.php">David Daniel: "Open MPI over IB in action"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some Netpipe graphs of OpenMPI and Mviapich on OpenIB gen2 on
<br>
Opteron systems, one with PCI-X IB cards, and the other with PCI-Express
<br>
DDR IB cards.
<br>
<p>I'd like to chat with someone who fill me in a bit on what's going on
<br>
with performance, and how the BTL for IB is implemented. One thing I'd
<br>
like to try is modifying the kernel to allow 95% of physical memory to
<br>
be registered for IB, and see how much of a difference this makes.
<br>
<p>I am also toying with the idea of writing an OpenIB BTL module for
<br>
Netpipe, so I can evaluate the BTL layer performance directly without
<br>
any MPI overhead.
<br>
<p>I also get the following messages on startup:
<br>
<p>libibverbs: Warning: no userspace device-specific driver found for
<br>
uverbs0 driver search path: /usr/lib/infiniband
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No hca's found on this host!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Something strange is going on, because it is finding at least 1 IB
<br>
port, given the performance numbers.
<br>
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
<li><strong>Next message:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0221.php">David Daniel: "Open MPI over IB in action"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
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
