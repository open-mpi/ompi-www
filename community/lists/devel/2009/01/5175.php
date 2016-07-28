<?
$subject_val = "Re: [OMPI devel] RFC: Fragmented sm Allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 07:05:50 2009" -->
<!-- isoreceived="20090114120550" -->
<!-- sent="Wed, 14 Jan 2009 07:05:45 -0500" -->
<!-- isosent="20090114120545" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fragmented sm Allocations" -->
<!-- id="ea86ce220901140405m724a66edkb50f08e1763b1dc2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="496D82D3.2090102_at_sun.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 07:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5174.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5172.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5177.php">Ralph Castain: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Reply:</strong> <a href="5177.php">Ralph Castain: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great analysis and suggested changes!  I've not had a chance yet
<br>
to look at your hg branch, so this sin't a code review...  Barring a
<br>
bad code review, I'd say these changes should all go in the trunk
<br>
for inclusion in 1.4.
<br>
<p>2009/1/14 Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RFC: Fragmented sm Allocations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Dealing with the fragmented allocations of sm BTL FIFO circular
</span><br>
<span class="quotelev1">&gt; buffers (CB) during MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Improve handling of error codes.
</span><br>
<span class="quotelev1">&gt; Automate the sizing of the mmap file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: To reduce consumption of shared memory, making job startup more robust,
</span><br>
<span class="quotelev1">&gt; and possibly improving the scalability of startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: In mca_btl_sm_add_procs(), there is a loop over calls to
</span><br>
<span class="quotelev1">&gt; ompi_fifo_init(). This is where CBs are initialized one at a time,
</span><br>
<span class="quotelev1">&gt; components of a CB allocated individually. Changes can be seen in
</span><br>
<span class="quotelev1">&gt; ssh://www.open-mpi.org/~eugene/hg/sm-allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Upon acceptance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: January 30, 2009.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY (details)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sm BTL establishes a FIFO for each non-self, on-node connection. Each
</span><br>
<span class="quotelev1">&gt; FIFO is initialized during MPI_Init() with a circular buffer (CB). (More CBs
</span><br>
<span class="quotelev1">&gt; can be added later in program execution if a FIFO runs out of room.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A CB has different components that are used in different ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;wrapper&quot; is read by both sender and receiver, but is rarely written.
</span><br>
<span class="quotelev1">&gt; The &quot;queue&quot; (FIFO entries) is accessed by both the sender and receiver.
</span><br>
<span class="quotelev1">&gt; The &quot;head&quot; is accessed by the sender.
</span><br>
<span class="quotelev1">&gt; The &quot;tail&quot; is accessed by the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For performance reasons, a CB is not allocated as one large data structure.
</span><br>
<span class="quotelev1">&gt; Rather, these components are laid out separately in memory and the wrapper
</span><br>
<span class="quotelev1">&gt; has pointers to the various locations. Performance considerations include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; false sharing: a component used by one process should not share a cacheline
</span><br>
<span class="quotelev1">&gt; with another component that is modified by another process
</span><br>
<span class="quotelev1">&gt; NUMA: certain components should perhaps be mapped preferentially to memory
</span><br>
<span class="quotelev1">&gt; pages that are close to the processes that access these components
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, the sm BTL handles these issues by allocating each component of
</span><br>
<span class="quotelev1">&gt; each CB its own page. (Actually, it couples tails and queues together.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the number of on-node processes grows, however, the shared-memory
</span><br>
<span class="quotelev1">&gt; allocation skyrockets. E.g., let's say there are n processes on-node. There
</span><br>
<span class="quotelev1">&gt; are therefore n(n-1) = O(n2) FIFOs, each with 3 allocations (wrapper, head,
</span><br>
<span class="quotelev1">&gt; and tail/queue). The shared-memory allocation for CBs becomes 3n2 pages. For
</span><br>
<span class="quotelev1">&gt; large n, this dominates the shared-memory consumption, even though most of
</span><br>
<span class="quotelev1">&gt; the CB allocation is unused. E.g., a 12-byte &quot;head&quot; ends up consuming a full
</span><br>
<span class="quotelev1">&gt; memory page!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not only is the 3n2-page allocation large, but it is also not tunable via
</span><br>
<span class="quotelev1">&gt; any MCA parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Large shared-memory consumption has led to some number of start-up and other
</span><br>
<span class="quotelev1">&gt; user problems. E.g., the e-mail thread at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4882.php">http://www.open-mpi.org/community/lists/devel/2008/11/4882.php</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT (details)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several actions are recommended here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Cacheline Rather than Pagesize Alignment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first set of changes reduces pagesize to cacheline alignment. Though
</span><br>
<span class="quotelev1">&gt; mapping to pages is motivated by NUMA locality, note:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code already has NUMA locality optimizations (maffinity and mpools)
</span><br>
<span class="quotelev1">&gt; anyhow.
</span><br>
<span class="quotelev1">&gt; There is no data that I'm aware of substantiating the benefits of locality
</span><br>
<span class="quotelev1">&gt; optimizations in this context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More to the point, I've tried some such experiments myself. I had two
</span><br>
<span class="quotelev1">&gt; processes communicating via shared memory on a large SMP that had a large
</span><br>
<span class="quotelev1">&gt; difference between remote and local memory access times. I timed the
</span><br>
<span class="quotelev1">&gt; roundtrip latency for pingpongs between the processes. That time was
</span><br>
<span class="quotelev1">&gt; correlated to the relative separation between the two processes, and not at
</span><br>
<span class="quotelev1">&gt; all to the placement of the physical memory backing the shared variables. It
</span><br>
<span class="quotelev1">&gt; did not matter if the memory was local to the sender or receiver or remote
</span><br>
<span class="quotelev1">&gt; from both! (E.g., colocal processes showed fast timings even if the shared
</span><br>
<span class="quotelev1">&gt; memory were remote to both processes.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My results do not prove that all NUMA platforms behave in the same way. My
</span><br>
<span class="quotelev1">&gt; point is only that, though I understand the logic behind locality
</span><br>
<span class="quotelev1">&gt; optimizations for FIFO placement, the only data I am aware of does not
</span><br>
<span class="quotelev1">&gt; substantiate that logic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The changes are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev1">&gt; Function: mca_mpool_sm_alloc()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use the alignment requested by the caller rather than adding additional
</span><br>
<span class="quotelev1">&gt; pagesize alignment as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_fifo_init() and ompi_fifo_write_to_head()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Align ompi_cb_fifo_wrapper_t structure on cacheline rather than page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/class/ompi_circular_buffer_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_cb_fifo_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Align the two calls to mpool_alloc on cacheline rather than page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Aggregated Allocation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another option is to lay out all the CBs at once and aggregate their
</span><br>
<span class="quotelev1">&gt; allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have the added benefit of reducing lock contention during
</span><br>
<span class="quotelev1">&gt; MPI_Init(). On the one hand, the 3n2 CB allocations during MPI_Init()
</span><br>
<span class="quotelev1">&gt; contend for a single mca_common_sm_mmap-&gt;map_seg-&gt;seg_lock lock. On the
</span><br>
<span class="quotelev1">&gt; other hand, I know so far of no data showing that this lock contention is
</span><br>
<span class="quotelev1">&gt; impairing start-up scalability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The objectives here would be to consolidate many CB components together
</span><br>
<span class="quotelev1">&gt; subject to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; queues should be local to receivers
</span><br>
<span class="quotelev1">&gt; heads should be local to senders
</span><br>
<span class="quotelev1">&gt; tails should be local to receivers
</span><br>
<span class="quotelev1">&gt; wrappers should not share cachelines with heads or tails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In sum, for process myrank, the FIFO allocation in shared memory during
</span><br>
<span class="quotelev1">&gt; MPI_Init() looks something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ompi_fifo_t   from  0  to myrank
</span><br>
<span class="quotelev1">&gt;     ompi_fifo_t   from  1  to myrank
</span><br>
<span class="quotelev1">&gt;     ompi_fifo_t   from  2  to myrank
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     ompi_fifo_t   from n-1 to myrank
</span><br>
<span class="quotelev1">&gt;     --- cacheline boundary ---
</span><br>
<span class="quotelev1">&gt;     queue of pointers, for CB from  0  to myrank
</span><br>
<span class="quotelev1">&gt;     queue of pointers, for CB from  1  to myrank
</span><br>
<span class="quotelev1">&gt;     queue of pointers, for CB from  2  to myrank
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     queue of pointers, for CB from n-1 to myrank
</span><br>
<span class="quotelev1">&gt;     --- cacheline boundary ---
</span><br>
<span class="quotelev1">&gt;     head for CB from myrank to  0
</span><br>
<span class="quotelev1">&gt;     tail for CB from  0  to myrank
</span><br>
<span class="quotelev1">&gt;     head for CB from myrank to  1
</span><br>
<span class="quotelev1">&gt;     tail for CB from  1  to myrank
</span><br>
<span class="quotelev1">&gt;     head for CB from myrank to  2
</span><br>
<span class="quotelev1">&gt;     tail for CB from  2  to myrank
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     head for CB from myrank to n-1
</span><br>
<span class="quotelev1">&gt;     tail for CB from n-1 to myrank
</span><br>
<span class="quotelev1">&gt;     --- cacheline boundary ---
</span><br>
<span class="quotelev1">&gt;     wrapper, CB from  0  to myrank
</span><br>
<span class="quotelev1">&gt;     wrapper, CB from  1  to myrank
</span><br>
<span class="quotelev1">&gt;     wrapper, CB from  2  to myrank
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     wrapper, CB from n-1 to myrank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that out-bound heads and in-bound tails are interwoven. There should be
</span><br>
<span class="quotelev1">&gt; no false sharing, however, even if multiple heads and tails share the same
</span><br>
<span class="quotelev1">&gt; cacheline, since they're all accessed by the same process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For multi-threaded processes, however, it is conceivable that different
</span><br>
<span class="quotelev1">&gt; threads will be passing many messages to different peers. So, for
</span><br>
<span class="quotelev1">&gt; multi-threaded jobs, we spread heads and tails out onto their own
</span><br>
<span class="quotelev1">&gt; cachelines. Consuming the extra shared memory in the multi-threaded case is
</span><br>
<span class="quotelev1">&gt; probably tolerable since the on-node-process count will be lower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The changes are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/class/ompi_circular_buffer_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_cb_fifo_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of having ompi_cb_fifo_init() allocate each component of a CB
</span><br>
<span class="quotelev1">&gt; separately, change the interface to allow the caller function to pass an
</span><br>
<span class="quotelev1">&gt; array of addresses in. These addresses will be assumed to be allocated and
</span><br>
<span class="quotelev1">&gt; should be used for the CB components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the &quot;array of addresses&quot; is NULL, then we allocate the CB components as
</span><br>
<span class="quotelev1">&gt; before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is pseudocode to illustrate this change. We replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      fifo-&gt;head = mpool_alloc(...);   /* allocate head */
</span><br>
<span class="quotelev1">&gt;      if ( NULL == fifo-&gt;head )
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if ( NULL != cb_addr ) {
</span><br>
<span class="quotelev1">&gt;          fifo-&gt;head = cb_addr[1];         /* use supplied address, if
</span><br>
<span class="quotelev1">&gt; available */
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          fifo-&gt;head = mpool_alloc(...);   /* allocate head */
</span><br>
<span class="quotelev1">&gt;          if ( NULL == fifo-&gt;head )
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_fifo_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change the interface to ompi_fifo_init() to allow the caller to supply
</span><br>
<span class="quotelev1">&gt; addresses to use for CB components rather than having callees allocate
</span><br>
<span class="quotelev1">&gt; memory for them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use such a supplied address, if available, when allocating the FIFO (not CB)
</span><br>
<span class="quotelev1">&gt; head.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function: ompi_fifo_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change the call in ompi_fifo_write_to_head() to ompi_cb_fifo_init() to
</span><br>
<span class="quotelev1">&gt; reflect the new interface, passing NULL as the new argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; Function: compute_initial_cb_fifo_space() and
</span><br>
<span class="quotelev1">&gt; compute_initial_cb_fifo_addrs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Add these two functions to compute how much space will be needed for the
</span><br>
<span class="quotelev1">&gt; aggregated CB allocation and to compute addresses for individual CB
</span><br>
<span class="quotelev1">&gt; components for a particular sender and receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function: sm_btl_first_time_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Increase the allocation of FIFOs (call to mpool_calloc) to include room for
</span><br>
<span class="quotelev1">&gt; the CBs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function: mca_btl_sm_add_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compute the addresses where CB components should be and pass them into
</span><br>
<span class="quotelev1">&gt; ompi_fifo_init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These changes impact only the allocation of CBs during MPI_Init(). If FIFOs
</span><br>
<span class="quotelev1">&gt; are grown later during program execution, they will continue to have
</span><br>
<span class="quotelev1">&gt; components allocated in a fragmented manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Free List Return Codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is unrelated to FIFOs, but is related to more robust handling of
</span><br>
<span class="quotelev1">&gt; shared-memory allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The function sm_btl_first_time_init() should test the return values when it
</span><br>
<span class="quotelev1">&gt; allocates free lists. It currently does not test return values, proceeding
</span><br>
<span class="quotelev1">&gt; without a hiccup even if those allocations indicate an error. The proposed
</span><br>
<span class="quotelev1">&gt; change is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; Function: sm_btl_first_time_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test the return codes from the calls to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_init_new()
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_init_new()
</span><br>
<span class="quotelev1">&gt;      opal_free_list_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; returning non-successful error status in case of error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Better Automatic Sizing of mmap File
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, the size of the file to be mmaped is governed by three MCA
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size
</span><br>
<span class="quotelev1">&gt; mpool_sm_min_size (default 128 Mbytes)
</span><br>
<span class="quotelev1">&gt; mpool_sm_per_peer_size (default 32 Mbytes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, the file size is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      min(mpool_sm_max_size,
</span><br>
<span class="quotelev1">&gt;      max(mpool_sm_min_size,
</span><br>
<span class="quotelev1">&gt;      n * mpool_sm_per_peer_size))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This file size is a poor approximation for the actual amount of shared
</span><br>
<span class="quotelev1">&gt; memory needed by an application during MPI_Init(). E.g., at n=2, the file is
</span><br>
<span class="quotelev1">&gt; 128M even though less than 1M is needed. At large n, however, the file is
</span><br>
<span class="quotelev1">&gt; insufficiently small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, we should add code that produces a better estimate of how much
</span><br>
<span class="quotelev1">&gt; shared memory will be needed during MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the MCA parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size: default should be 0 (no limit)
</span><br>
<span class="quotelev1">&gt; mpool_sm_min_size: default should be 0 (no limit)
</span><br>
<span class="quotelev1">&gt; mpool_sm_per_peer_size: should be eliminated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More accurate sizing could help reduce the problems users see starting sm
</span><br>
<span class="quotelev1">&gt; jobs with large on-node-process counts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One problem is that the size of the shared file is set by mpool_sm, but
</span><br>
<span class="quotelev1">&gt; information about how much shared memory needs to be allocated during
</span><br>
<span class="quotelev1">&gt; MPI_Init() is in btl_sm. Since OMPI doesn't easily allow components to call
</span><br>
<span class="quotelev1">&gt; one another, we're stuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supporting Data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory Consumption
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory consumption can be measured or modeled. (I have a byte-accurate
</span><br>
<span class="quotelev1">&gt; model.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are some comparisons for the case of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1024 on-node processes
</span><br>
<span class="quotelev1">&gt; 8-byte pointers (LP64 execution model)
</span><br>
<span class="quotelev1">&gt; 4K eager limit
</span><br>
<span class="quotelev1">&gt; 32K chunk size
</span><br>
<span class="quotelev1">&gt; 128-byte cacheline size
</span><br>
<span class="quotelev1">&gt; 4K (Linux) or 8K (Solaris) page size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are breakdowns of the shared-memory allocations during MPI_Init() in
</span><br>
<span class="quotelev1">&gt; units of 106 bytes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       pagesize alignment   cacheline
</span><br>
<span class="quotelev1">&gt;                       ------------------   alignment
</span><br>
<span class="quotelev1">&gt;   description        8K pages   4K pages
</span><br>
<span class="quotelev1">&gt;   ===============
</span><br>
<span class="quotelev1">&gt;   CB wrappers           8,682      4,391        235
</span><br>
<span class="quotelev1">&gt;   CB queues+tails       9,822      5,531      1,374
</span><br>
<span class="quotelev1">&gt;   CB heads              8,632      4,341        184
</span><br>
<span class="quotelev1">&gt;   eager freelists       9,171      9,032      8,898
</span><br>
<span class="quotelev1">&gt;   other                   370        362        355
</span><br>
<span class="quotelev1">&gt;   ---------------
</span><br>
<span class="quotelev1">&gt;   total                36,677     23,658     11,046
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, with pagesize alignment, the CB allocations consume over 3n2 pages
</span><br>
<span class="quotelev1">&gt; and dominate, even though most of that space is unused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The next biggest contributor is the eager freelists. There are 2n2 eager
</span><br>
<span class="quotelev1">&gt; fragments, each 4K (the eager limit), costing (approximately) 8 Gbytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With cacheline alignment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Overall consumption drops by over 2&#215; compared to 4K pages and over 3&#215;
</span><br>
<span class="quotelev1">&gt; compared to 8K pages.
</span><br>
<span class="quotelev1">&gt; The remaining leading category (eager freelists) can now be scaled down by
</span><br>
<span class="quotelev1">&gt; adjusting an existing MCA parameter btl_sm_eager_limit.
</span><br>
<span class="quotelev1">&gt; For that matter, the second leading category (CB queues) can also be scaled
</span><br>
<span class="quotelev1">&gt; down by adjusting an existing MCA parameter btl_sm_size_of_cb_queue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are results when we not only drop from page-size to cacheline
</span><br>
<span class="quotelev1">&gt; alignment, but we also aggregate CB allocations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   106 bytes          description
</span><br>
<span class="quotelev1">&gt;   =========          ===============
</span><br>
<span class="quotelev1">&gt;       1,250          FIFOs and CBs
</span><br>
<span class="quotelev1">&gt;       8,899          eager freelists
</span><br>
<span class="quotelev1">&gt;         270          max freelists
</span><br>
<span class="quotelev1">&gt;      ------          ---------------
</span><br>
<span class="quotelev1">&gt;      10,418          total
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With no more pagesize dependence and little more cacheline dependence, one
</span><br>
<span class="quotelev1">&gt; could really start to shoehorn big jobs into a small shared-memory area.
</span><br>
<span class="quotelev1">&gt; E.g., consider bumping the eager limit down to 256 bytes, the size of a CB
</span><br>
<span class="quotelev1">&gt; queue to 16 entries, and the chunk size to 8K. Then, shared-memory
</span><br>
<span class="quotelev1">&gt; consumption for 1024 processes looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   106 bytes          description
</span><br>
<span class="quotelev1">&gt;   =========          ===============
</span><br>
<span class="quotelev1">&gt;         311          FIFOs and CBs
</span><br>
<span class="quotelev1">&gt;         544          eager freelists
</span><br>
<span class="quotelev1">&gt;          68          max freelists
</span><br>
<span class="quotelev1">&gt;      ------          ---------------
</span><br>
<span class="quotelev1">&gt;         924          total
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ping-Pong Latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can also look at performance. Here are OSU latency results for short
</span><br>
<span class="quotelev1">&gt; messages on a Sun v20z. The absolute numbers are less important than the
</span><br>
<span class="quotelev1">&gt; relative difference between the two sets:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      bytes  before     after
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        0      0.85     0.84  &#181;sec
</span><br>
<span class="quotelev1">&gt;        1      0.97     0.99
</span><br>
<span class="quotelev1">&gt;        2      0.97     0.98
</span><br>
<span class="quotelev1">&gt;        4      0.97     0.98
</span><br>
<span class="quotelev1">&gt;        8      0.97     0.99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a penalty for non-null messages due to OMPI &quot;data convertors&quot;.
</span><br>
<span class="quotelev1">&gt; Importantly, to within the reproducibility of the measurements, it is
</span><br>
<span class="quotelev1">&gt; unclear if there is any slowdown that one can attribute to the changes.
</span><br>
<span class="quotelev1">&gt; (Results are the median of 5 measurements. The values look smooth, but the
</span><br>
<span class="quotelev1">&gt; error bars, which are difficult to characterize, are probably greater than
</span><br>
<span class="quotelev1">&gt; the 0.01-0.02 &#181;sec differences seen here.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other Considerations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simply going from pagesize alignment to cacheline alignment should be a
</span><br>
<span class="quotelev1">&gt; relatively unintrusive code change and effect most of the reduction in
</span><br>
<span class="quotelev1">&gt; shared-memory allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also aggregating allocations is more intrusive, but has a few more
</span><br>
<span class="quotelev1">&gt; advantages, including:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Slight further reduction in the amount of shared memory allocated.
</span><br>
<span class="quotelev1">&gt; Less lock contention as the number of allocation is reduced from O(n2) to
</span><br>
<span class="quotelev1">&gt; O(n), possibly improving start-up performance.
</span><br>
<span class="quotelev1">&gt; Can provide memory locality even on systems that don't have maffinity
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be nice to size the mmap file automatically better than what is
</span><br>
<span class="quotelev1">&gt; done today, but (as noted) I haven't yet figured out how to make the btl_sm
</span><br>
<span class="quotelev1">&gt; and mpool_sm components talk to each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My proposed code changes need more testing, especially in the case of
</span><br>
<span class="quotelev1">&gt; multiple memory nodes per node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It remains unclear to me if error codes are being treated properly in the
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_add_procs() code. E.g., if one process is unable to allocate
</span><br>
<span class="quotelev1">&gt; memory in the shared area, should all processes fail?
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5174.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5172.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5177.php">Ralph Castain: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Reply:</strong> <a href="5177.php">Ralph Castain: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
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
