<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:47:06 2009" -->
<!-- isoreceived="20090625204706" -->
<!-- sent="Thu, 25 Jun 2009 13:46:56 -0700" -->
<!-- isosent="20090625204656" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="4A43E240.8070009_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0906251514480.2932_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL flow management<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Previous message:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, Eugene, and I had a long discussion this morning on the sm BTL 
</span><br>
<span class="quotelev1">&gt; flow management issues and came to a couple of conclusions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff, Eugene, and I are all convinced that Eugene's addition of 
</span><br>
<span class="quotelev1">&gt; polling the receive queue to drain acks when sends start backing up is 
</span><br>
<span class="quotelev1">&gt; required for deadlock avoidance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * We're also convinced that George's proposal, while a good idea in 
</span><br>
<span class="quotelev1">&gt; general, is not sufficient.  The send path doesn't appear to 
</span><br>
<span class="quotelev1">&gt; sufficiently progress the btl to avoid the deadlocks we're seeing with 
</span><br>
<span class="quotelev1">&gt; the SM btl today.  Therefore, while I still recommend sizing the fifo 
</span><br>
<span class="quotelev1">&gt; appropriately and limiting the freelist size, I think it's not 
</span><br>
<span class="quotelev1">&gt; sufficient to solve all problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Finally, it took an hour, but we did determine one of the major 
</span><br>
<span class="quotelev1">&gt; differences between 1.2.8 and 1.3.0 in terms of sm is how messages 
</span><br>
<span class="quotelev1">&gt; were pulled off the FIFO.  In 1.2.8 (and all earlier versions), we 
</span><br>
<span class="quotelev1">&gt; return from btl_progress after a single message is received (ack or 
</span><br>
<span class="quotelev1">&gt; message) or the fifo was empty.  In 1.3.0 (pre-srq work Eugene did), 
</span><br>
<span class="quotelev1">&gt; we changed to completely draining all queues before returning from 
</span><br>
<span class="quotelev1">&gt; btl_progress.  This has led to a situation where a single call to 
</span><br>
<span class="quotelev1">&gt; btl_progress can make a large number of callbacks into the PML 
</span><br>
<span class="quotelev1">&gt; (900,000 times in one of Eugene's test case).  The change was made to 
</span><br>
<span class="quotelev1">&gt; resolve an issue Terry was having with performance of a benchmark.  
</span><br>
<span class="quotelev1">&gt; We've decided that it would be adventageous to try something between 
</span><br>
<span class="quotelev1">&gt; the two points and drain X number of messages from the queue, then 
</span><br>
<span class="quotelev1">&gt; return, where X is 100 or so at most.  This should cover the 
</span><br>
<span class="quotelev1">&gt; performance issues Terry saw, but still not cause the huge number of 
</span><br>
<span class="quotelev1">&gt; messages added to the unexpected queue with a single call to 
</span><br>
<span class="quotelev1">&gt; MPI_Recv.  Since a recv that is matched on the unexpected queue 
</span><br>
<span class="quotelev1">&gt; doesn't result in a call to opal_progress, this should help balance 
</span><br>
<span class="quotelev1">&gt; the load a little bit better.  Eugene's going to take a stab at 
</span><br>
<span class="quotelev1">&gt; implementing this short term.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the combination of Euegene's deadlock avoidance fix and the 
</span><br>
<span class="quotelev1">&gt; careful queue draining should make me comfortable enough to start 
</span><br>
<span class="quotelev1">&gt; another round of testing, but at least explains the bottom line issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>IMHO, one should never process an unbounded number of elements from any 
<br>
FIFO/socket/CQ/etc. because doing so risks starving other channels (some 
<br>
of which might not exist yet at the time the work-without-bound code is 
<br>
written).  So, I think Brian's proposal (drain &lt;= X; for 1 &lt; X &lt; inf) is 
<br>
the correct approach, regardless of any of the other present concerns 
<br>
w.r.t the sm blt.
<br>
<p>In my own non-MPI experience, I have found that selection of such an X 
<br>
is usually not a big deal - just find a value large enough to 
<br>
effectively hide the cost of &quot;entry&quot; (analogy: if you hold a mutex the 
<br>
critical section should be dominated by the work &quot;inside&quot;, not the cost 
<br>
of the lock/unlock operations).  Once X is big enough that &quot;entry&quot; is 
<br>
nominally free, then the type of performance issues I suspect Terry was 
<br>
seeing will fade away.  Beyond that point, further increases in X bring 
<br>
rapidly diminishing returns in my experience, and risk starving some 
<br>
other code path.
<br>
<p>crude heuristic: start at X=2 and keep doubling it until performance of 
<br>
the benchmark that concerned Terry are within a standard deviation 
<br>
(difference is &quot;in the noise&quot;) at X and X*2 (or within some other 
<br>
tolerance of ones choice ).  Then, of course, use the lower value, X 
<br>
(not X*2).
<br>
<p>-Paul
<br>
<p>P.S.  If there are other code paths that process elements without bound, 
<br>
they probably deserve some scrutiny while this idea is fresh on people's 
<br>
minds.
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Previous message:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
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
