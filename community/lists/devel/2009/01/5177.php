<?
$subject_val = "Re: [OMPI devel] RFC: Fragmented sm Allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 08:54:27 2009" -->
<!-- isoreceived="20090114135427" -->
<!-- sent="Wed, 14 Jan 2009 06:54:18 -0700" -->
<!-- isosent="20090114135418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fragmented sm Allocations" -->
<!-- id="A8E48A8F-D2A8-4DBB-9343-2AF62AAE9B25_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220901140405m724a66edkb50f08e1763b1dc2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Fragmented sm Allocations<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 08:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5178.php">Ralph Castain: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>In reply to:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't reviewed the code either, but really do appreciate someone  
<br>
taking the time for such a thorough analysis of the problems we have  
<br>
all observed for some time!
<br>
<p>Thanks Eugene!!
<br>
<p><p>On Jan 14, 2009, at 5:05 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Great analysis and suggested changes!  I've not had a chance yet
</span><br>
<span class="quotelev1">&gt; to look at your hg branch, so this sin't a code review...  Barring a
</span><br>
<span class="quotelev1">&gt; bad code review, I'd say these changes should all go in the trunk
</span><br>
<span class="quotelev1">&gt; for inclusion in 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/1/14 Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RFC: Fragmented sm Allocations
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Dealing with the fragmented allocations of sm BTL FIFO circular
</span><br>
<span class="quotelev2">&gt;&gt; buffers (CB) during MPI_Init().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Improve handling of error codes.
</span><br>
<span class="quotelev2">&gt;&gt; Automate the sizing of the mmap file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: To reduce consumption of shared memory, making job startup  
</span><br>
<span class="quotelev2">&gt;&gt; more robust,
</span><br>
<span class="quotelev2">&gt;&gt; and possibly improving the scalability of startup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: In mca_btl_sm_add_procs(), there is a loop over calls to
</span><br>
<span class="quotelev2">&gt;&gt; ompi_fifo_init(). This is where CBs are initialized one at a time,
</span><br>
<span class="quotelev2">&gt;&gt; components of a CB allocated individually. Changes can be seen in
</span><br>
<span class="quotelev2">&gt;&gt; ssh://www.open-mpi.org/~eugene/hg/sm-allocation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Upon acceptance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: January 30, 2009.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY (details)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sm BTL establishes a FIFO for each non-self, on-node  
</span><br>
<span class="quotelev2">&gt;&gt; connection. Each
</span><br>
<span class="quotelev2">&gt;&gt; FIFO is initialized during MPI_Init() with a circular buffer (CB).  
</span><br>
<span class="quotelev2">&gt;&gt; (More CBs
</span><br>
<span class="quotelev2">&gt;&gt; can be added later in program execution if a FIFO runs out of room.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A CB has different components that are used in different ways:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;wrapper&quot; is read by both sender and receiver, but is rarely  
</span><br>
<span class="quotelev2">&gt;&gt; written.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;queue&quot; (FIFO entries) is accessed by both the sender and  
</span><br>
<span class="quotelev2">&gt;&gt; receiver.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;head&quot; is accessed by the sender.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;tail&quot; is accessed by the receiver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For performance reasons, a CB is not allocated as one large data  
</span><br>
<span class="quotelev2">&gt;&gt; structure.
</span><br>
<span class="quotelev2">&gt;&gt; Rather, these components are laid out separately in memory and the  
</span><br>
<span class="quotelev2">&gt;&gt; wrapper
</span><br>
<span class="quotelev2">&gt;&gt; has pointers to the various locations. Performance considerations  
</span><br>
<span class="quotelev2">&gt;&gt; include:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; false sharing: a component used by one process should not share a  
</span><br>
<span class="quotelev2">&gt;&gt; cacheline
</span><br>
<span class="quotelev2">&gt;&gt; with another component that is modified by another process
</span><br>
<span class="quotelev2">&gt;&gt; NUMA: certain components should perhaps be mapped preferentially to  
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt; pages that are close to the processes that access these components
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, the sm BTL handles these issues by allocating each  
</span><br>
<span class="quotelev2">&gt;&gt; component of
</span><br>
<span class="quotelev2">&gt;&gt; each CB its own page. (Actually, it couples tails and queues  
</span><br>
<span class="quotelev2">&gt;&gt; together.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As the number of on-node processes grows, however, the shared-memory
</span><br>
<span class="quotelev2">&gt;&gt; allocation skyrockets. E.g., let's say there are n processes on- 
</span><br>
<span class="quotelev2">&gt;&gt; node. There
</span><br>
<span class="quotelev2">&gt;&gt; are therefore n(n-1) = O(n2) FIFOs, each with 3 allocations  
</span><br>
<span class="quotelev2">&gt;&gt; (wrapper, head,
</span><br>
<span class="quotelev2">&gt;&gt; and tail/queue). The shared-memory allocation for CBs becomes 3n2  
</span><br>
<span class="quotelev2">&gt;&gt; pages. For
</span><br>
<span class="quotelev2">&gt;&gt; large n, this dominates the shared-memory consumption, even though  
</span><br>
<span class="quotelev2">&gt;&gt; most of
</span><br>
<span class="quotelev2">&gt;&gt; the CB allocation is unused. E.g., a 12-byte &quot;head&quot; ends up  
</span><br>
<span class="quotelev2">&gt;&gt; consuming a full
</span><br>
<span class="quotelev2">&gt;&gt; memory page!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not only is the 3n2-page allocation large, but it is also not  
</span><br>
<span class="quotelev2">&gt;&gt; tunable via
</span><br>
<span class="quotelev2">&gt;&gt; any MCA parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Large shared-memory consumption has led to some number of start-up  
</span><br>
<span class="quotelev2">&gt;&gt; and other
</span><br>
<span class="quotelev2">&gt;&gt; user problems. E.g., the e-mail thread at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4882.php">http://www.open-mpi.org/community/lists/devel/2008/11/4882.php</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT (details)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Several actions are recommended here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Cacheline Rather than Pagesize Alignment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first set of changes reduces pagesize to cacheline alignment.  
</span><br>
<span class="quotelev2">&gt;&gt; Though
</span><br>
<span class="quotelev2">&gt;&gt; mapping to pages is motivated by NUMA locality, note:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code already has NUMA locality optimizations (maffinity and  
</span><br>
<span class="quotelev2">&gt;&gt; mpools)
</span><br>
<span class="quotelev2">&gt;&gt; anyhow.
</span><br>
<span class="quotelev2">&gt;&gt; There is no data that I'm aware of substantiating the benefits of  
</span><br>
<span class="quotelev2">&gt;&gt; locality
</span><br>
<span class="quotelev2">&gt;&gt; optimizations in this context.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More to the point, I've tried some such experiments myself. I had two
</span><br>
<span class="quotelev2">&gt;&gt; processes communicating via shared memory on a large SMP that had a  
</span><br>
<span class="quotelev2">&gt;&gt; large
</span><br>
<span class="quotelev2">&gt;&gt; difference between remote and local memory access times. I timed the
</span><br>
<span class="quotelev2">&gt;&gt; roundtrip latency for pingpongs between the processes. That time was
</span><br>
<span class="quotelev2">&gt;&gt; correlated to the relative separation between the two processes,  
</span><br>
<span class="quotelev2">&gt;&gt; and not at
</span><br>
<span class="quotelev2">&gt;&gt; all to the placement of the physical memory backing the shared  
</span><br>
<span class="quotelev2">&gt;&gt; variables. It
</span><br>
<span class="quotelev2">&gt;&gt; did not matter if the memory was local to the sender or receiver or  
</span><br>
<span class="quotelev2">&gt;&gt; remote
</span><br>
<span class="quotelev2">&gt;&gt; from both! (E.g., colocal processes showed fast timings even if the  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; memory were remote to both processes.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My results do not prove that all NUMA platforms behave in the same  
</span><br>
<span class="quotelev2">&gt;&gt; way. My
</span><br>
<span class="quotelev2">&gt;&gt; point is only that, though I understand the logic behind locality
</span><br>
<span class="quotelev2">&gt;&gt; optimizations for FIFO placement, the only data I am aware of does  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; substantiate that logic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The changes are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev2">&gt;&gt; Function: mca_mpool_sm_alloc()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Use the alignment requested by the caller rather than adding  
</span><br>
<span class="quotelev2">&gt;&gt; additional
</span><br>
<span class="quotelev2">&gt;&gt; pagesize alignment as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev2">&gt;&gt; Function: ompi_fifo_init() and ompi_fifo_write_to_head()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Align ompi_cb_fifo_wrapper_t structure on cacheline rather than page.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/class/ompi_circular_buffer_fifo.h
</span><br>
<span class="quotelev2">&gt;&gt; Function: ompi_cb_fifo_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Align the two calls to mpool_alloc on cacheline rather than page.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Aggregated Allocation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another option is to lay out all the CBs at once and aggregate their
</span><br>
<span class="quotelev2">&gt;&gt; allocations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have the added benefit of reducing lock contention during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(). On the one hand, the 3n2 CB allocations during MPI_Init()
</span><br>
<span class="quotelev2">&gt;&gt; contend for a single mca_common_sm_mmap-&gt;map_seg-&gt;seg_lock lock. On  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; other hand, I know so far of no data showing that this lock  
</span><br>
<span class="quotelev2">&gt;&gt; contention is
</span><br>
<span class="quotelev2">&gt;&gt; impairing start-up scalability.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The objectives here would be to consolidate many CB components  
</span><br>
<span class="quotelev2">&gt;&gt; together
</span><br>
<span class="quotelev2">&gt;&gt; subject to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; queues should be local to receivers
</span><br>
<span class="quotelev2">&gt;&gt; heads should be local to senders
</span><br>
<span class="quotelev2">&gt;&gt; tails should be local to receivers
</span><br>
<span class="quotelev2">&gt;&gt; wrappers should not share cachelines with heads or tails
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In sum, for process myrank, the FIFO allocation in shared memory  
</span><br>
<span class="quotelev2">&gt;&gt; during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init() looks something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_fifo_t   from  0  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_fifo_t   from  1  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_fifo_t   from  2  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    ...
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_fifo_t   from n-1 to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    --- cacheline boundary ---
</span><br>
<span class="quotelev2">&gt;&gt;    queue of pointers, for CB from  0  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    queue of pointers, for CB from  1  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    queue of pointers, for CB from  2  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    ...
</span><br>
<span class="quotelev2">&gt;&gt;    queue of pointers, for CB from n-1 to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    --- cacheline boundary ---
</span><br>
<span class="quotelev2">&gt;&gt;    head for CB from myrank to  0
</span><br>
<span class="quotelev2">&gt;&gt;    tail for CB from  0  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    head for CB from myrank to  1
</span><br>
<span class="quotelev2">&gt;&gt;    tail for CB from  1  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    head for CB from myrank to  2
</span><br>
<span class="quotelev2">&gt;&gt;    tail for CB from  2  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    ...
</span><br>
<span class="quotelev2">&gt;&gt;    head for CB from myrank to n-1
</span><br>
<span class="quotelev2">&gt;&gt;    tail for CB from n-1 to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    --- cacheline boundary ---
</span><br>
<span class="quotelev2">&gt;&gt;    wrapper, CB from  0  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    wrapper, CB from  1  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    wrapper, CB from  2  to myrank
</span><br>
<span class="quotelev2">&gt;&gt;    ...
</span><br>
<span class="quotelev2">&gt;&gt;    wrapper, CB from n-1 to myrank
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that out-bound heads and in-bound tails are interwoven. There  
</span><br>
<span class="quotelev2">&gt;&gt; should be
</span><br>
<span class="quotelev2">&gt;&gt; no false sharing, however, even if multiple heads and tails share  
</span><br>
<span class="quotelev2">&gt;&gt; the same
</span><br>
<span class="quotelev2">&gt;&gt; cacheline, since they're all accessed by the same process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For multi-threaded processes, however, it is conceivable that  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; threads will be passing many messages to different peers. So, for
</span><br>
<span class="quotelev2">&gt;&gt; multi-threaded jobs, we spread heads and tails out onto their own
</span><br>
<span class="quotelev2">&gt;&gt; cachelines. Consuming the extra shared memory in the multi-threaded  
</span><br>
<span class="quotelev2">&gt;&gt; case is
</span><br>
<span class="quotelev2">&gt;&gt; probably tolerable since the on-node-process count will be lower.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The changes are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/class/ompi_circular_buffer_fifo.h
</span><br>
<span class="quotelev2">&gt;&gt; Function: ompi_cb_fifo_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead of having ompi_cb_fifo_init() allocate each component of a CB
</span><br>
<span class="quotelev2">&gt;&gt; separately, change the interface to allow the caller function to  
</span><br>
<span class="quotelev2">&gt;&gt; pass an
</span><br>
<span class="quotelev2">&gt;&gt; array of addresses in. These addresses will be assumed to be  
</span><br>
<span class="quotelev2">&gt;&gt; allocated and
</span><br>
<span class="quotelev2">&gt;&gt; should be used for the CB components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the &quot;array of addresses&quot; is NULL, then we allocate the CB  
</span><br>
<span class="quotelev2">&gt;&gt; components as
</span><br>
<span class="quotelev2">&gt;&gt; before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is pseudocode to illustrate this change. We replace
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     fifo-&gt;head = mpool_alloc(...);   /* allocate head */
</span><br>
<span class="quotelev2">&gt;&gt;     if ( NULL == fifo-&gt;head )
</span><br>
<span class="quotelev2">&gt;&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if ( NULL != cb_addr ) {
</span><br>
<span class="quotelev2">&gt;&gt;         fifo-&gt;head = cb_addr[1];         /* use supplied address, if
</span><br>
<span class="quotelev2">&gt;&gt; available */
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;         fifo-&gt;head = mpool_alloc(...);   /* allocate head */
</span><br>
<span class="quotelev2">&gt;&gt;         if ( NULL == fifo-&gt;head )
</span><br>
<span class="quotelev2">&gt;&gt;             return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev2">&gt;&gt; Function: ompi_fifo_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Change the interface to ompi_fifo_init() to allow the caller to  
</span><br>
<span class="quotelev2">&gt;&gt; supply
</span><br>
<span class="quotelev2">&gt;&gt; addresses to use for CB components rather than having callees  
</span><br>
<span class="quotelev2">&gt;&gt; allocate
</span><br>
<span class="quotelev2">&gt;&gt; memory for them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Use such a supplied address, if available, when allocating the FIFO  
</span><br>
<span class="quotelev2">&gt;&gt; (not CB)
</span><br>
<span class="quotelev2">&gt;&gt; head.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Function: ompi_fifo_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Change the call in ompi_fifo_write_to_head() to ompi_cb_fifo_init()  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; reflect the new interface, passing NULL as the new argument.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev2">&gt;&gt; Function: compute_initial_cb_fifo_space() and
</span><br>
<span class="quotelev2">&gt;&gt; compute_initial_cb_fifo_addrs()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Add these two functions to compute how much space will be needed  
</span><br>
<span class="quotelev2">&gt;&gt; for the
</span><br>
<span class="quotelev2">&gt;&gt; aggregated CB allocation and to compute addresses for individual CB
</span><br>
<span class="quotelev2">&gt;&gt; components for a particular sender and receiver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Function: sm_btl_first_time_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Increase the allocation of FIFOs (call to mpool_calloc) to include  
</span><br>
<span class="quotelev2">&gt;&gt; room for
</span><br>
<span class="quotelev2">&gt;&gt; the CBs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Function: mca_btl_sm_add_procs()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compute the addresses where CB components should be and pass them  
</span><br>
<span class="quotelev2">&gt;&gt; into
</span><br>
<span class="quotelev2">&gt;&gt; ompi_fifo_init().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These changes impact only the allocation of CBs during MPI_Init().  
</span><br>
<span class="quotelev2">&gt;&gt; If FIFOs
</span><br>
<span class="quotelev2">&gt;&gt; are grown later during program execution, they will continue to have
</span><br>
<span class="quotelev2">&gt;&gt; components allocated in a fragmented manner.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Free List Return Codes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is unrelated to FIFOs, but is related to more robust handling of
</span><br>
<span class="quotelev2">&gt;&gt; shared-memory allocation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The function sm_btl_first_time_init() should test the return values  
</span><br>
<span class="quotelev2">&gt;&gt; when it
</span><br>
<span class="quotelev2">&gt;&gt; allocates free lists. It currently does not test return values,  
</span><br>
<span class="quotelev2">&gt;&gt; proceeding
</span><br>
<span class="quotelev2">&gt;&gt; without a hiccup even if those allocations indicate an error. The  
</span><br>
<span class="quotelev2">&gt;&gt; proposed
</span><br>
<span class="quotelev2">&gt;&gt; change is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev2">&gt;&gt; Function: sm_btl_first_time_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test the return codes from the calls to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_free_list_init_new()
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_free_list_init_new()
</span><br>
<span class="quotelev2">&gt;&gt;     opal_free_list_init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; returning non-successful error status in case of error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Better Automatic Sizing of mmap File
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, the size of the file to be mmaped is governed by three MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_max_size
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_min_size (default 128 Mbytes)
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_per_peer_size (default 32 Mbytes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, the file size is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     min(mpool_sm_max_size,
</span><br>
<span class="quotelev2">&gt;&gt;     max(mpool_sm_min_size,
</span><br>
<span class="quotelev2">&gt;&gt;     n * mpool_sm_per_peer_size))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This file size is a poor approximation for the actual amount of  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; memory needed by an application during MPI_Init(). E.g., at n=2,  
</span><br>
<span class="quotelev2">&gt;&gt; the file is
</span><br>
<span class="quotelev2">&gt;&gt; 128M even though less than 1M is needed. At large n, however, the  
</span><br>
<span class="quotelev2">&gt;&gt; file is
</span><br>
<span class="quotelev2">&gt;&gt; insufficiently small.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead, we should add code that produces a better estimate of how  
</span><br>
<span class="quotelev2">&gt;&gt; much
</span><br>
<span class="quotelev2">&gt;&gt; shared memory will be needed during MPI_Init().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding the MCA parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_max_size: default should be 0 (no limit)
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_min_size: default should be 0 (no limit)
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_per_peer_size: should be eliminated
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More accurate sizing could help reduce the problems users see  
</span><br>
<span class="quotelev2">&gt;&gt; starting sm
</span><br>
<span class="quotelev2">&gt;&gt; jobs with large on-node-process counts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One problem is that the size of the shared file is set by mpool_sm,  
</span><br>
<span class="quotelev2">&gt;&gt; but
</span><br>
<span class="quotelev2">&gt;&gt; information about how much shared memory needs to be allocated during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init() is in btl_sm. Since OMPI doesn't easily allow components  
</span><br>
<span class="quotelev2">&gt;&gt; to call
</span><br>
<span class="quotelev2">&gt;&gt; one another, we're stuck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supporting Data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Memory Consumption
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Memory consumption can be measured or modeled. (I have a byte- 
</span><br>
<span class="quotelev2">&gt;&gt; accurate
</span><br>
<span class="quotelev2">&gt;&gt; model.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are some comparisons for the case of:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1024 on-node processes
</span><br>
<span class="quotelev2">&gt;&gt; 8-byte pointers (LP64 execution model)
</span><br>
<span class="quotelev2">&gt;&gt; 4K eager limit
</span><br>
<span class="quotelev2">&gt;&gt; 32K chunk size
</span><br>
<span class="quotelev2">&gt;&gt; 128-byte cacheline size
</span><br>
<span class="quotelev2">&gt;&gt; 4K (Linux) or 8K (Solaris) page size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are breakdowns of the shared-memory allocations during  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init() in
</span><br>
<span class="quotelev2">&gt;&gt; units of 106 bytes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      pagesize alignment   cacheline
</span><br>
<span class="quotelev2">&gt;&gt;                      ------------------   alignment
</span><br>
<span class="quotelev2">&gt;&gt;  description        8K pages   4K pages
</span><br>
<span class="quotelev2">&gt;&gt;  ===============
</span><br>
<span class="quotelev2">&gt;&gt;  CB wrappers           8,682      4,391        235
</span><br>
<span class="quotelev2">&gt;&gt;  CB queues+tails       9,822      5,531      1,374
</span><br>
<span class="quotelev2">&gt;&gt;  CB heads              8,632      4,341        184
</span><br>
<span class="quotelev2">&gt;&gt;  eager freelists       9,171      9,032      8,898
</span><br>
<span class="quotelev2">&gt;&gt;  other                   370        362        355
</span><br>
<span class="quotelev2">&gt;&gt;  ---------------
</span><br>
<span class="quotelev2">&gt;&gt;  total                36,677     23,658     11,046
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is, with pagesize alignment, the CB allocations consume over  
</span><br>
<span class="quotelev2">&gt;&gt; 3n2 pages
</span><br>
<span class="quotelev2">&gt;&gt; and dominate, even though most of that space is unused.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The next biggest contributor is the eager freelists. There are 2n2  
</span><br>
<span class="quotelev2">&gt;&gt; eager
</span><br>
<span class="quotelev2">&gt;&gt; fragments, each 4K (the eager limit), costing (approximately) 8  
</span><br>
<span class="quotelev2">&gt;&gt; Gbytes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With cacheline alignment:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Overall consumption drops by over 2&#215; compared to 4K pages and over 3&#215;
</span><br>
<span class="quotelev2">&gt;&gt; compared to 8K pages.
</span><br>
<span class="quotelev2">&gt;&gt; The remaining leading category (eager freelists) can now be scaled  
</span><br>
<span class="quotelev2">&gt;&gt; down by
</span><br>
<span class="quotelev2">&gt;&gt; adjusting an existing MCA parameter btl_sm_eager_limit.
</span><br>
<span class="quotelev2">&gt;&gt; For that matter, the second leading category (CB queues) can also  
</span><br>
<span class="quotelev2">&gt;&gt; be scaled
</span><br>
<span class="quotelev2">&gt;&gt; down by adjusting an existing MCA parameter btl_sm_size_of_cb_queue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are results when we not only drop from page-size to cacheline
</span><br>
<span class="quotelev2">&gt;&gt; alignment, but we also aggregate CB allocations:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  106 bytes          description
</span><br>
<span class="quotelev2">&gt;&gt;  =========          ===============
</span><br>
<span class="quotelev2">&gt;&gt;      1,250          FIFOs and CBs
</span><br>
<span class="quotelev2">&gt;&gt;      8,899          eager freelists
</span><br>
<span class="quotelev2">&gt;&gt;        270          max freelists
</span><br>
<span class="quotelev2">&gt;&gt;     ------          ---------------
</span><br>
<span class="quotelev2">&gt;&gt;     10,418          total
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With no more pagesize dependence and little more cacheline  
</span><br>
<span class="quotelev2">&gt;&gt; dependence, one
</span><br>
<span class="quotelev2">&gt;&gt; could really start to shoehorn big jobs into a small shared-memory  
</span><br>
<span class="quotelev2">&gt;&gt; area.
</span><br>
<span class="quotelev2">&gt;&gt; E.g., consider bumping the eager limit down to 256 bytes, the size  
</span><br>
<span class="quotelev2">&gt;&gt; of a CB
</span><br>
<span class="quotelev2">&gt;&gt; queue to 16 entries, and the chunk size to 8K. Then, shared-memory
</span><br>
<span class="quotelev2">&gt;&gt; consumption for 1024 processes looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  106 bytes          description
</span><br>
<span class="quotelev2">&gt;&gt;  =========          ===============
</span><br>
<span class="quotelev2">&gt;&gt;        311          FIFOs and CBs
</span><br>
<span class="quotelev2">&gt;&gt;        544          eager freelists
</span><br>
<span class="quotelev2">&gt;&gt;         68          max freelists
</span><br>
<span class="quotelev2">&gt;&gt;     ------          ---------------
</span><br>
<span class="quotelev2">&gt;&gt;        924          total
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ping-Pong Latency
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We can also look at performance. Here are OSU latency results for  
</span><br>
<span class="quotelev2">&gt;&gt; short
</span><br>
<span class="quotelev2">&gt;&gt; messages on a Sun v20z. The absolute numbers are less important  
</span><br>
<span class="quotelev2">&gt;&gt; than the
</span><br>
<span class="quotelev2">&gt;&gt; relative difference between the two sets:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     bytes  before     after
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       0      0.85     0.84  &#181;sec
</span><br>
<span class="quotelev2">&gt;&gt;       1      0.97     0.99
</span><br>
<span class="quotelev2">&gt;&gt;       2      0.97     0.98
</span><br>
<span class="quotelev2">&gt;&gt;       4      0.97     0.98
</span><br>
<span class="quotelev2">&gt;&gt;       8      0.97     0.99
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a penalty for non-null messages due to OMPI &quot;data  
</span><br>
<span class="quotelev2">&gt;&gt; convertors&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Importantly, to within the reproducibility of the measurements, it is
</span><br>
<span class="quotelev2">&gt;&gt; unclear if there is any slowdown that one can attribute to the  
</span><br>
<span class="quotelev2">&gt;&gt; changes.
</span><br>
<span class="quotelev2">&gt;&gt; (Results are the median of 5 measurements. The values look smooth,  
</span><br>
<span class="quotelev2">&gt;&gt; but the
</span><br>
<span class="quotelev2">&gt;&gt; error bars, which are difficult to characterize, are probably  
</span><br>
<span class="quotelev2">&gt;&gt; greater than
</span><br>
<span class="quotelev2">&gt;&gt; the 0.01-0.02 &#181;sec differences seen here.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other Considerations
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simply going from pagesize alignment to cacheline alignment should  
</span><br>
<span class="quotelev2">&gt;&gt; be a
</span><br>
<span class="quotelev2">&gt;&gt; relatively unintrusive code change and effect most of the reduction  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; shared-memory allocation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also aggregating allocations is more intrusive, but has a few more
</span><br>
<span class="quotelev2">&gt;&gt; advantages, including:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Slight further reduction in the amount of shared memory allocated.
</span><br>
<span class="quotelev2">&gt;&gt; Less lock contention as the number of allocation is reduced from  
</span><br>
<span class="quotelev2">&gt;&gt; O(n2) to
</span><br>
<span class="quotelev2">&gt;&gt; O(n), possibly improving start-up performance.
</span><br>
<span class="quotelev2">&gt;&gt; Can provide memory locality even on systems that don't have maffinity
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be nice to size the mmap file automatically better than  
</span><br>
<span class="quotelev2">&gt;&gt; what is
</span><br>
<span class="quotelev2">&gt;&gt; done today, but (as noted) I haven't yet figured out how to make  
</span><br>
<span class="quotelev2">&gt;&gt; the btl_sm
</span><br>
<span class="quotelev2">&gt;&gt; and mpool_sm components talk to each other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My proposed code changes need more testing, especially in the case of
</span><br>
<span class="quotelev2">&gt;&gt; multiple memory nodes per node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It remains unclear to me if error codes are being treated properly  
</span><br>
<span class="quotelev2">&gt;&gt; in the
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm_add_procs() code. E.g., if one process is unable to  
</span><br>
<span class="quotelev2">&gt;&gt; allocate
</span><br>
<span class="quotelev2">&gt;&gt; memory in the shared area, should all processes fail?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5178.php">Ralph Castain: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>In reply to:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
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
