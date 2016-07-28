<?
$subject_val = "[OMPI devel] IB pow wow notes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 19:54:33 2007" -->
<!-- isoreceived="20071127005433" -->
<!-- sent="Mon, 26 Nov 2007 19:54:26 -0500" -->
<!-- isosent="20071127005426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] IB pow wow notes" -->
<!-- id="DD3E10D4-483B-4ED5-9AE7-8560A6B5B5DA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] IB pow wow notes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-26 19:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2665.php">Jeff Squyres: "[OMPI devel] vt-integration"</a>
<li><strong>Previous message:</strong> <a href="2663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI OF Pow Wow Notes
<br>
26 Nov 2007
<br>
<p>---------------------------------------------------------------------------
<br>
<p>Discussion of current / upcoming work:
<br>
<p>OCG (Chelsio):
<br>
- Did a bunch of udapl work, but abandoned it.  Will commit it to a
<br>
&nbsp;&nbsp;&nbsp;tmp branch if anyone cares (likely not).
<br>
- They have been directed to move to the verbs API; will be starting
<br>
&nbsp;&nbsp;&nbsp;on that next week.
<br>
<p>Cisco:
<br>
- likely to get more involved in PML/BTL issues since Galen + Brian
<br>
&nbsp;&nbsp;&nbsp;now transferring out of these areas.
<br>
- race between Chelsio / Cisco as to who implements RDMA CM connect PC
<br>
&nbsp;&nbsp;&nbsp;first (more on this below).  May involve some changes to the connect
<br>
&nbsp;&nbsp;&nbsp;PC interface.
<br>
- Re-working libevent and progress engine stuff with George
<br>
<p>LLNL:
<br>
- Andrew Friedley leaving LLNL in 3 weeks
<br>
- UD code more of less functional, but working on reliability stuff
<br>
&nbsp;&nbsp;&nbsp;down in the BTL.  That part is not quite working yet.
<br>
- When he leaves LLNL, UD BTL may become unmaintained.
<br>
<p>IBM:
<br>
- Has an interest in NUNAs
<br>
- May be interested in maintaining the UD BTL; worried about scale.
<br>
<p>Mellanox:
<br>
- Just finished first implementation of XRC
<br>
- Now working on QA issues with XRC: testing with multiple subnets,
<br>
&nbsp;&nbsp;&nbsp;different numbers of HCAs/ports on different hosts, etc.
<br>
<p>Sun:
<br>
- Currently working full steam ahead on UDAPL.
<br>
- Will likely join in openib BTL/etc. when Sun's verbs stack is ready.
<br>
- Will *hopefully* get early access to Sun's verbs stack for testing /
<br>
&nbsp;&nbsp;&nbsp;compatibility issues before the stack becomes final.
<br>
<p>ORNL:
<br>
- Mostly working on non-PML/BTL issues these days.
<br>
- Galen's advice: get progress thread working for best IB overlap and
<br>
&nbsp;&nbsp;&nbsp;real application performance.
<br>
<p>Voltaire:
<br>
- Working on XRC improvements
<br>
- Working on message coalescing.  Only sees benefit if you drastically
<br>
&nbsp;&nbsp;&nbsp;reduce the number of available buffers and credits -- i.e., be much
<br>
&nbsp;&nbsp;&nbsp;more like openib BTL before BSRQ (2 buffer sizes: large and small,
<br>
&nbsp;&nbsp;&nbsp;and have very few small buffer credits).
<br>
&nbsp;&nbsp;&nbsp;&lt;lots of discussion about message coalescing; this will be worth at
<br>
&nbsp;&nbsp;&nbsp;least an FAQ item to explain all the trade-offs.  There could be
<br>
&nbsp;&nbsp;&nbsp;non-artificial benefits for coalescing at scale because of limiting
<br>
&nbsp;&nbsp;&nbsp;the number of credits&gt;
<br>
- Moving HCA initializing stuff to a common area to share it with
<br>
&nbsp;&nbsp;&nbsp;collective components.
<br>
<p>---------------------------------------------------------------------------
<br>
<p>Discussion of various &quot;moving forward&quot; proposals:
<br>
<p>- ORNL, Cisco, Mellanox discussing how to reduce cost of memory
<br>
&nbsp;&nbsp;&nbsp;registration.  Currently running some benchmarks to figure out where
<br>
&nbsp;&nbsp;&nbsp;the bottlenecks are.  Cheap registration would *help* (but not
<br>
&nbsp;&nbsp;&nbsp;completely solve) overlap issues by reducing the number of sync
<br>
&nbsp;&nbsp;&nbsp;points -- e.g., always just do one big RDMA operation (vs. the
<br>
&nbsp;&nbsp;&nbsp;pipeline protocol).
<br>
<p>- Some discussion of a UD-based connect PC.  Gleb mentions that what
<br>
&nbsp;&nbsp;&nbsp;was proposed is effectively the same as the IBTA CM (i.e., ibcm).
<br>
&nbsp;&nbsp;&nbsp;Jeff will go investigate.
<br>
<p>- Gleb also mentions that the connect PC needs to be based on the
<br>
&nbsp;&nbsp;&nbsp;endpoint, not the entire module (for non-uniform hardware
<br>
&nbsp;&nbsp;&nbsp;networks).  Jeff took a to-do item to fix.  Probably needs to be
<br>
&nbsp;&nbsp;&nbsp;done for v1.3.
<br>
<p>- To UD or not to UD?  Lots of discussion on this.
<br>
<p>&nbsp;&nbsp;&nbsp;- Some data has been presented by OSU showing that UD drops don't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;happen often.  Their tests were run in a large non-blocking
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;network.  Some in the group feel that in a busy blocking network,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UD drops will be [much] more common (there is at least some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;evidence that in a busy non-blocking network, drops *are* rare).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This issue affects how we design the recovery of UD drops: if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;drops are rare, recovery can be arbitrarily expensive.  If drops
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are not rare, recovery needs to be at least somewhat efficient.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If drops are frequent, recovery needs to be cheap/fast/easy.
<br>
<p>&nbsp;&nbsp;&nbsp;- Mellanox is investigating why ibv_rc_pingpong gives better
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bandwidth than ibv_ud_pingpong (i.e., UD bandwidth is poor).
<br>
<p>&nbsp;&nbsp;&nbsp;- Discuss the possibility of doing connection caching: only allow so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;many RC connections at a time.  Maintain an LRU of RC connections.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When you need to close one, also recycle (or free) all of its
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;posted buffers.
<br>
<p>&nbsp;&nbsp;&nbsp;- Discussion of MVAPICH technique for large UD messages: &quot;[receiver]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zero copy UD&quot;.  Send a match header; receiver picks a UD QP from a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ready pool and sends it back to the sender.  Fragments from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user's buffer are posted to that QP on the receiver, so the sender
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sends straight into the receiver's target buffer.  This scheme
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assumes no drops.  For OMPI, this scheme also requires more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;complexity from our current multi-device striping method: we'd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want to stripe across large contiguous portions of the message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(vs. round robining small fragments from the message).
<br>
<p>&nbsp;&nbsp;&nbsp;- One point specifically discussed: long message alltoall at scale
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i.e., large numbers of MPI processes).  Andrew Friedley is going
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to ask around LLNL if anyone does this, but our guess is no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because each host would need a *ton* of RAM to do this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(num_procs_per_node * num_procs_total * length_of_buffer).  Our
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;suspicion is that alltoall for short messages is much more common
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(and still, by far, not the most common MPI collective).
<br>
<p>&nbsp;&nbsp;&nbsp;- One proposal:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Use UD for short messages (except for peers that switch to eager
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RDMA)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Always use RC for long messages, potentially with connection
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caching+fast IB connect (ibcm?)
<br>
<p>&nbsp;&nbsp;&nbsp;- Another proposal: let OSU keep forging ahead with UD and see what
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;they come up with.  I.e., let them figure out if UD is worth it or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not.
<br>
<p>&nbsp;&nbsp;&nbsp;- End result: it's not 100% clear that UD is a &quot;win&quot; yet -- there
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are many unanswered questions.
<br>
<p>- Make new PML that is essentially &quot;CM+matching&quot;, send entire messages
<br>
&nbsp;&nbsp;&nbsp;down to lower layer instead of having the PML do the fragmenting:
<br>
<p>&nbsp;&nbsp;&nbsp;- Rationale:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- pretty simple PML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- allow lower layer to do more optimizations based on full
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;knowledge of the specific network being used
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- networks get CM-like benefits without having to &quot;natively&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support shmem (because matching will still be done in the PML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and there will be a lower layer/component for shmem)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- [possibly] remove some stuff from current code in ob1 that is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not necessary in IB/OF (Gleb didn't think that this would be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;useful; most of OB1 is there to support IB/OF)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- not force other networks to same model as IB/OF (i.e., when we  
<br>
want
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new things in IB/OF, we have to go change all the other BTLs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; ^^ I forgot to mention this point on the call today
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- if we go towards a combined RC+UD OF protocol, the current OB1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is not good at this because the BTL flags will have to &quot;lie&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;about whether a given endpoint is capable of RDMA or not.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Gleb mentioned that it doesn't matter what the PML thinks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;even if the PML tells the BTL to RDMA PUT/GET, the BTL can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;emulate it if it isn't supported (e.g., if an endpoint
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switches between RD and UD)
<br>
<p>&nbsp;&nbsp;&nbsp;- Jeff sees this as a code re-org, not so much as a re-write.
<br>
<p>&nbsp;&nbsp;&nbsp;- Gleb is skeptical on the value of this; it may be more valuable if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we go towards a blended UD+RC protocol, though.
<br>
<p>The phone bridge started kicking people off at this point (after we
<br>
went 30+ minutes beyond the scheduled end time).  So no conclusions
<br>
were reached.  This discussion probably needs to continue in e-mail,
<br>
etc.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2665.php">Jeff Squyres: "[OMPI devel] vt-integration"</a>
<li><strong>Previous message:</strong> <a href="2663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
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
