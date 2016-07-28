<?
$subject_val = "Re: [OMPI devel] IB pow wow notes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 19:48:59 2007" -->
<!-- isoreceived="20071206004859" -->
<!-- sent="Sun, 02 Dec 2007 17:11:18 -0500" -->
<!-- isosent="20071202221118" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB pow wow notes" -->
<!-- id="C37897B7.1176C%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DD3E10D4-483B-4ED5-9AE7-8560A6B5B5DA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IB pow wow notes<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-02 17:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Previous message:</strong> <a href="2736.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2664.php">Jeff Squyres: "[OMPI devel] IB pow wow notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Reply:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One question &#173; there is a mention a new pml that is essentially CM+matching.
<br>
Why is this no just another instance of CM ?
<br>
<p>Rich
<br>
<p><p>On 11/26/07 7:54 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OMPI OF Pow Wow Notes
</span><br>
<span class="quotelev1">&gt; 26 Nov 2007
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Discussion of current / upcoming work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OCG (Chelsio):
</span><br>
<span class="quotelev1">&gt; - Did a bunch of udapl work, but abandoned it.  Will commit it to a
</span><br>
<span class="quotelev1">&gt;    tmp branch if anyone cares (likely not).
</span><br>
<span class="quotelev1">&gt; - They have been directed to move to the verbs API; will be starting
</span><br>
<span class="quotelev1">&gt;    on that next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cisco:
</span><br>
<span class="quotelev1">&gt; - likely to get more involved in PML/BTL issues since Galen + Brian
</span><br>
<span class="quotelev1">&gt;    now transferring out of these areas.
</span><br>
<span class="quotelev1">&gt; - race between Chelsio / Cisco as to who implements RDMA CM connect PC
</span><br>
<span class="quotelev1">&gt;    first (more on this below).  May involve some changes to the connect
</span><br>
<span class="quotelev1">&gt;    PC interface.
</span><br>
<span class="quotelev1">&gt; - Re-working libevent and progress engine stuff with George
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LLNL:
</span><br>
<span class="quotelev1">&gt; - Andrew Friedley leaving LLNL in 3 weeks
</span><br>
<span class="quotelev1">&gt; - UD code more of less functional, but working on reliability stuff
</span><br>
<span class="quotelev1">&gt;    down in the BTL.  That part is not quite working yet.
</span><br>
<span class="quotelev1">&gt; - When he leaves LLNL, UD BTL may become unmaintained.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IBM:
</span><br>
<span class="quotelev1">&gt; - Has an interest in NUNAs
</span><br>
<span class="quotelev1">&gt; - May be interested in maintaining the UD BTL; worried about scale.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox:
</span><br>
<span class="quotelev1">&gt; - Just finished first implementation of XRC
</span><br>
<span class="quotelev1">&gt; - Now working on QA issues with XRC: testing with multiple subnets,
</span><br>
<span class="quotelev1">&gt;    different numbers of HCAs/ports on different hosts, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun:
</span><br>
<span class="quotelev1">&gt; - Currently working full steam ahead on UDAPL.
</span><br>
<span class="quotelev1">&gt; - Will likely join in openib BTL/etc. when Sun's verbs stack is ready.
</span><br>
<span class="quotelev1">&gt; - Will *hopefully* get early access to Sun's verbs stack for testing /
</span><br>
<span class="quotelev1">&gt;    compatibility issues before the stack becomes final.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORNL:
</span><br>
<span class="quotelev1">&gt; - Mostly working on non-PML/BTL issues these days.
</span><br>
<span class="quotelev1">&gt; - Galen's advice: get progress thread working for best IB overlap and
</span><br>
<span class="quotelev1">&gt;    real application performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Voltaire:
</span><br>
<span class="quotelev1">&gt; - Working on XRC improvements
</span><br>
<span class="quotelev1">&gt; - Working on message coalescing.  Only sees benefit if you drastically
</span><br>
<span class="quotelev1">&gt;    reduce the number of available buffers and credits -- i.e., be much
</span><br>
<span class="quotelev1">&gt;    more like openib BTL before BSRQ (2 buffer sizes: large and small,
</span><br>
<span class="quotelev1">&gt;    and have very few small buffer credits).
</span><br>
<span class="quotelev1">&gt;    &lt;lots of discussion about message coalescing; this will be worth at
</span><br>
<span class="quotelev1">&gt;    least an FAQ item to explain all the trade-offs.  There could be
</span><br>
<span class="quotelev1">&gt;    non-artificial benefits for coalescing at scale because of limiting
</span><br>
<span class="quotelev1">&gt;    the number of credits&gt;
</span><br>
<span class="quotelev1">&gt; - Moving HCA initializing stuff to a common area to share it with
</span><br>
<span class="quotelev1">&gt;    collective components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Discussion of various &quot;moving forward&quot; proposals:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ORNL, Cisco, Mellanox discussing how to reduce cost of memory
</span><br>
<span class="quotelev1">&gt;    registration.  Currently running some benchmarks to figure out where
</span><br>
<span class="quotelev1">&gt;    the bottlenecks are.  Cheap registration would *help* (but not
</span><br>
<span class="quotelev1">&gt;    completely solve) overlap issues by reducing the number of sync
</span><br>
<span class="quotelev1">&gt;    points -- e.g., always just do one big RDMA operation (vs. the
</span><br>
<span class="quotelev1">&gt;    pipeline protocol).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Some discussion of a UD-based connect PC.  Gleb mentions that what
</span><br>
<span class="quotelev1">&gt;    was proposed is effectively the same as the IBTA CM (i.e., ibcm).
</span><br>
<span class="quotelev1">&gt;    Jeff will go investigate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Gleb also mentions that the connect PC needs to be based on the
</span><br>
<span class="quotelev1">&gt;    endpoint, not the entire module (for non-uniform hardware
</span><br>
<span class="quotelev1">&gt;    networks).  Jeff took a to-do item to fix.  Probably needs to be
</span><br>
<span class="quotelev1">&gt;    done for v1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - To UD or not to UD?  Lots of discussion on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Some data has been presented by OSU showing that UD drops don't
</span><br>
<span class="quotelev1">&gt;      happen often.  Their tests were run in a large non-blocking
</span><br>
<span class="quotelev1">&gt;      network.  Some in the group feel that in a busy blocking network,
</span><br>
<span class="quotelev1">&gt;      UD drops will be [much] more common (there is at least some
</span><br>
<span class="quotelev1">&gt;      evidence that in a busy non-blocking network, drops *are* rare).
</span><br>
<span class="quotelev1">&gt;      This issue affects how we design the recovery of UD drops: if
</span><br>
<span class="quotelev1">&gt;      drops are rare, recovery can be arbitrarily expensive.  If drops
</span><br>
<span class="quotelev1">&gt;      are not rare, recovery needs to be at least somewhat efficient.
</span><br>
<span class="quotelev1">&gt;      If drops are frequent, recovery needs to be cheap/fast/easy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Mellanox is investigating why ibv_rc_pingpong gives better
</span><br>
<span class="quotelev1">&gt;      bandwidth than ibv_ud_pingpong (i.e., UD bandwidth is poor).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Discuss the possibility of doing connection caching: only allow so
</span><br>
<span class="quotelev1">&gt;      many RC connections at a time.  Maintain an LRU of RC connections.
</span><br>
<span class="quotelev1">&gt;      When you need to close one, also recycle (or free) all of its
</span><br>
<span class="quotelev1">&gt;      posted buffers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Discussion of MVAPICH technique for large UD messages: &quot;[receiver]
</span><br>
<span class="quotelev1">&gt;      zero copy UD&quot;.  Send a match header; receiver picks a UD QP from a
</span><br>
<span class="quotelev1">&gt;      ready pool and sends it back to the sender.  Fragments from the
</span><br>
<span class="quotelev1">&gt;      user's buffer are posted to that QP on the receiver, so the sender
</span><br>
<span class="quotelev1">&gt;      sends straight into the receiver's target buffer.  This scheme
</span><br>
<span class="quotelev1">&gt;      assumes no drops.  For OMPI, this scheme also requires more
</span><br>
<span class="quotelev1">&gt;      complexity from our current multi-device striping method: we'd
</span><br>
<span class="quotelev1">&gt;      want to stripe across large contiguous portions of the message
</span><br>
<span class="quotelev1">&gt;      (vs. round robining small fragments from the message).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - One point specifically discussed: long message alltoall at scale
</span><br>
<span class="quotelev1">&gt;      (i.e., large numbers of MPI processes).  Andrew Friedley is going
</span><br>
<span class="quotelev1">&gt;      to ask around LLNL if anyone does this, but our guess is no
</span><br>
<span class="quotelev1">&gt;      because each host would need a *ton* of RAM to do this:
</span><br>
<span class="quotelev1">&gt;      (num_procs_per_node * num_procs_total * length_of_buffer).  Our
</span><br>
<span class="quotelev1">&gt;      suspicion is that alltoall for short messages is much more common
</span><br>
<span class="quotelev1">&gt;      (and still, by far, not the most common MPI collective).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - One proposal:
</span><br>
<span class="quotelev1">&gt;      - Use UD for short messages (except for peers that switch to eager
</span><br>
<span class="quotelev1">&gt;        RDMA)
</span><br>
<span class="quotelev1">&gt;      - Always use RC for long messages, potentially with connection
</span><br>
<span class="quotelev1">&gt;        caching+fast IB connect (ibcm?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Another proposal: let OSU keep forging ahead with UD and see what
</span><br>
<span class="quotelev1">&gt;      they come up with.  I.e., let them figure out if UD is worth it or
</span><br>
<span class="quotelev1">&gt;      not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - End result: it's not 100% clear that UD is a &quot;win&quot; yet -- there
</span><br>
<span class="quotelev1">&gt;      are many unanswered questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Make new PML that is essentially &quot;CM+matching&quot;, send entire messages
</span><br>
<span class="quotelev1">&gt;    down to lower layer instead of having the PML do the fragmenting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Rationale:
</span><br>
<span class="quotelev1">&gt;      - pretty simple PML
</span><br>
<span class="quotelev1">&gt;      - allow lower layer to do more optimizations based on full
</span><br>
<span class="quotelev1">&gt;        knowledge of the specific network being used
</span><br>
<span class="quotelev1">&gt;      - networks get CM-like benefits without having to &quot;natively&quot;
</span><br>
<span class="quotelev1">&gt;        support shmem (because matching will still be done in the PML
</span><br>
<span class="quotelev1">&gt;        and there will be a lower layer/component for shmem)
</span><br>
<span class="quotelev1">&gt;      - [possibly] remove some stuff from current code in ob1 that is
</span><br>
<span class="quotelev1">&gt;        not necessary in IB/OF (Gleb didn't think that this would be
</span><br>
<span class="quotelev1">&gt;        useful; most of OB1 is there to support IB/OF)
</span><br>
<span class="quotelev1">&gt;      - not force other networks to same model as IB/OF (i.e., when we
</span><br>
<span class="quotelev1">&gt; want
</span><br>
<span class="quotelev1">&gt;        new things in IB/OF, we have to go change all the other BTLs)
</span><br>
<span class="quotelev1">&gt;        --&gt; ^^ I forgot to mention this point on the call today
</span><br>
<span class="quotelev1">&gt;      - if we go towards a combined RC+UD OF protocol, the current OB1
</span><br>
<span class="quotelev1">&gt;        is not good at this because the BTL flags will have to &quot;lie&quot;
</span><br>
<span class="quotelev1">&gt;        about whether a given endpoint is capable of RDMA or not.
</span><br>
<span class="quotelev1">&gt;        --&gt; Gleb mentioned that it doesn't matter what the PML thinks;
</span><br>
<span class="quotelev1">&gt;            even if the PML tells the BTL to RDMA PUT/GET, the BTL can
</span><br>
<span class="quotelev1">&gt;            emulate it if it isn't supported (e.g., if an endpoint
</span><br>
<span class="quotelev1">&gt;            switches between RD and UD)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Jeff sees this as a code re-org, not so much as a re-write.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Gleb is skeptical on the value of this; it may be more valuable if
</span><br>
<span class="quotelev1">&gt;      we go towards a blended UD+RC protocol, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The phone bridge started kicking people off at this point (after we
</span><br>
<span class="quotelev1">&gt; went 30+ minutes beyond the scheduled end time).  So no conclusions
</span><br>
<span class="quotelev1">&gt; were reached.  This discussion probably needs to continue in e-mail,
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Previous message:</strong> <a href="2736.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2664.php">Jeff Squyres: "[OMPI devel] IB pow wow notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Reply:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
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
