<?
$subject_val = "Re: [OMPI devel] RFC: Fragmented sm Allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 09:50:40 2009" -->
<!-- isoreceived="20090114145040" -->
<!-- sent="Wed, 14 Jan 2009 09:50:32 -0500" -->
<!-- isosent="20090114145032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Fragmented sm Allocations" -->
<!-- id="FA9EFA0B-B914-4D89-B2F7-5384186849F4_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 09:50:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>In reply to:</strong> <a href="5172.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoa, this analysis rocks.  :-)  I'm going through trying to grok it  
<br>
all...
<br>
<p>Just wanted to say: kudos for this.
<br>
<p>On Jan 14, 2009, at 1:14 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RFC: Fragmented sm Allocations
</span><br>
<span class="quotelev1">&gt; WHAT: Dealing with the fragmented allocations of sm BTL FIFO  
</span><br>
<span class="quotelev1">&gt; circular buffers (CB) during MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; Improve handling of error codes.
</span><br>
<span class="quotelev1">&gt; 	&#149; Automate the sizing of the mmap file.
</span><br>
<span class="quotelev1">&gt; WHY: To reduce consumption of shared memory, making job startup more  
</span><br>
<span class="quotelev1">&gt; robust, and possibly improving the scalability of startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: In mca_btl_sm_add_procs(), there is a loop over calls to  
</span><br>
<span class="quotelev1">&gt; ompi_fifo_init(). This is where CBs are initialized one at a time,  
</span><br>
<span class="quotelev1">&gt; components of a CB allocated individually. Changes can be seen in ssh://www.open-mpi.org/ 
</span><br>
<span class="quotelev1">&gt; ~eugene/hg/sm-allocation.
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
<span class="quotelev1">&gt; WHY (details)
</span><br>
<span class="quotelev1">&gt; The sm BTL establishes a FIFO for each non-self, on-node connection.  
</span><br>
<span class="quotelev1">&gt; Each FIFO is initialized during MPI_Init() with a circular buffer  
</span><br>
<span class="quotelev1">&gt; (CB). (More CBs can be added later in program execution if a FIFO  
</span><br>
<span class="quotelev1">&gt; runs out of room.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A CB has different components that are used in different ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; The &quot;wrapper&quot; is read by both sender and receiver, but is rarely  
</span><br>
<span class="quotelev1">&gt; written.
</span><br>
<span class="quotelev1">&gt; 	&#149; The &quot;queue&quot; (FIFO entries) is accessed by both the sender and  
</span><br>
<span class="quotelev1">&gt; receiver.
</span><br>
<span class="quotelev1">&gt; 	&#149; The &quot;head&quot; is accessed by the sender.
</span><br>
<span class="quotelev1">&gt; 	&#149; The &quot;tail&quot; is accessed by the receiver.
</span><br>
<span class="quotelev1">&gt; For performance reasons, a CB is not allocated as one large data  
</span><br>
<span class="quotelev1">&gt; structure. Rather, these components are laid out separately in  
</span><br>
<span class="quotelev1">&gt; memory and the wrapper has pointers to the various locations.  
</span><br>
<span class="quotelev1">&gt; Performance considerations include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; false sharing: a component used by one process should not share a  
</span><br>
<span class="quotelev1">&gt; cacheline with another component that is modified by another process
</span><br>
<span class="quotelev1">&gt; 	&#149; NUMA: certain components should perhaps be mapped preferentially  
</span><br>
<span class="quotelev1">&gt; to memory pages that are close to the processes that access these  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; Currently, the sm BTL handles these issues by allocating each  
</span><br>
<span class="quotelev1">&gt; component of each CB its own page. (Actually, it couples tails and  
</span><br>
<span class="quotelev1">&gt; queues together.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the number of on-node processes grows, however, the shared-memory  
</span><br>
<span class="quotelev1">&gt; allocation skyrockets. E.g., let's say there are n processes on- 
</span><br>
<span class="quotelev1">&gt; node. There are therefore n(n-1) = O(n2) FIFOs, each with 3  
</span><br>
<span class="quotelev1">&gt; allocations (wrapper, head, and tail/queue). The shared-memory  
</span><br>
<span class="quotelev1">&gt; allocation for CBs becomes 3n2 pages. For large n, this dominates  
</span><br>
<span class="quotelev1">&gt; the shared-memory consumption, even though most of the CB allocation  
</span><br>
<span class="quotelev1">&gt; is unused. E.g., a 12-byte &quot;head&quot; ends up consuming a full memory  
</span><br>
<span class="quotelev1">&gt; page!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not only is the 3n2-page allocation large, but it is also not  
</span><br>
<span class="quotelev1">&gt; tunable via any MCA parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Large shared-memory consumption has led to some number of start-up  
</span><br>
<span class="quotelev1">&gt; and other user problems. E.g., the e-mail thread at <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4882.php">http://www.open-mpi.org/community/lists/devel/2008/11/4882.php</a> 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT (details)
</span><br>
<span class="quotelev1">&gt; Several actions are recommended here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Cacheline Rather than Pagesize Alignment
</span><br>
<span class="quotelev1">&gt; The first set of changes reduces pagesize to cacheline alignment.  
</span><br>
<span class="quotelev1">&gt; Though mapping to pages is motivated by NUMA locality, note:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; The code already has NUMA locality optimizations (maffinity and  
</span><br>
<span class="quotelev1">&gt; mpools) anyhow.
</span><br>
<span class="quotelev1">&gt; 	&#149; There is no data that I'm aware of substantiating the benefits of  
</span><br>
<span class="quotelev1">&gt; locality optimizations in this context.
</span><br>
<span class="quotelev1">&gt; More to the point, I've tried some such experiments myself. I had  
</span><br>
<span class="quotelev1">&gt; two processes communicating via shared memory on a large SMP that  
</span><br>
<span class="quotelev1">&gt; had a large difference between remote and local memory access times.  
</span><br>
<span class="quotelev1">&gt; I timed the roundtrip latency for pingpongs between the processes.  
</span><br>
<span class="quotelev1">&gt; That time was correlated to the relative separation between the two  
</span><br>
<span class="quotelev1">&gt; processes, and not at all to the placement of the physical memory  
</span><br>
<span class="quotelev1">&gt; backing the shared variables. It did not matter if the memory was  
</span><br>
<span class="quotelev1">&gt; local to the sender or receiver or remote from both! (E.g., colocal  
</span><br>
<span class="quotelev1">&gt; processes showed fast timings even if the shared memory were remote  
</span><br>
<span class="quotelev1">&gt; to both processes.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My results do not prove that all NUMA platforms behave in the same  
</span><br>
<span class="quotelev1">&gt; way. My point is only that, though I understand the logic behind  
</span><br>
<span class="quotelev1">&gt; locality optimizations for FIFO placement, the only data I am aware  
</span><br>
<span class="quotelev1">&gt; of does not substantiate that logic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The changes are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; File: ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev1">&gt; Function: mca_mpool_sm_alloc()
</span><br>
<span class="quotelev1">&gt; Use the alignment requested by the caller rather than adding  
</span><br>
<span class="quotelev1">&gt; additional pagesize alignment as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_fifo_init() and ompi_fifo_write_to_head()
</span><br>
<span class="quotelev1">&gt; Align ompi_cb_fifo_wrapper_t structure on cacheline rather than page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; File: ompi/class/ompi_circular_buffer_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_cb_fifo_init()
</span><br>
<span class="quotelev1">&gt; Align the two calls to mpool_alloc on cacheline rather than page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Aggregated Allocation
</span><br>
<span class="quotelev1">&gt; Another option is to lay out all the CBs at once and aggregate their  
</span><br>
<span class="quotelev1">&gt; allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have the added benefit of reducing lock contention during  
</span><br>
<span class="quotelev1">&gt; MPI_Init(). On the one hand, the 3n2 CB allocations during  
</span><br>
<span class="quotelev1">&gt; MPI_Init() contend for a single mca_common_sm_mmap-&gt;map_seg- 
</span><br>
<span class="quotelev2">&gt; &gt;seg_lock lock. On the other hand, I know so far of no data showing  
</span><br>
<span class="quotelev1">&gt; that this lock contention is impairing start-up scalability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The objectives here would be to consolidate many CB components  
</span><br>
<span class="quotelev1">&gt; together subject to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; queues should be local to receivers
</span><br>
<span class="quotelev1">&gt; 	&#149; heads should be local to senders
</span><br>
<span class="quotelev1">&gt; 	&#149; tails should be local to receivers
</span><br>
<span class="quotelev1">&gt; 	&#149; wrappers should not share cachelines with heads or tails
</span><br>
<span class="quotelev1">&gt; In sum, for process myrank, the FIFO allocation in shared memory  
</span><br>
<span class="quotelev1">&gt; during MPI_Init() looks something like this:
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
<span class="quotelev1">&gt; Note that out-bound heads and in-bound tails are interwoven. There  
</span><br>
<span class="quotelev1">&gt; should be no false sharing, however, even if multiple heads and  
</span><br>
<span class="quotelev1">&gt; tails share the same cacheline, since they're all accessed by the  
</span><br>
<span class="quotelev1">&gt; same process.
</span><br>
<span class="quotelev1">&gt; For multi-threaded processes, however, it is conceivable that  
</span><br>
<span class="quotelev1">&gt; different threads will be passing many messages to different peers.  
</span><br>
<span class="quotelev1">&gt; So, for multi-threaded jobs, we spread heads and tails out onto  
</span><br>
<span class="quotelev1">&gt; their own cachelines. Consuming the extra shared memory in the multi- 
</span><br>
<span class="quotelev1">&gt; threaded case is probably tolerable since the on-node-process count  
</span><br>
<span class="quotelev1">&gt; will be lower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The changes are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; File: ompi/class/ompi_circular_buffer_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_cb_fifo_init()
</span><br>
<span class="quotelev1">&gt; Instead of having ompi_cb_fifo_init() allocate each component of a  
</span><br>
<span class="quotelev1">&gt; CB separately, change the interface to allow the caller function to  
</span><br>
<span class="quotelev1">&gt; pass an array of addresses in. These addresses will be assumed to be  
</span><br>
<span class="quotelev1">&gt; allocated and should be used for the CB components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the &quot;array of addresses&quot; is NULL, then we allocate the CB  
</span><br>
<span class="quotelev1">&gt; components as before.
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
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;      if ( NULL != cb_addr ) {
</span><br>
<span class="quotelev1">&gt;          fifo-&gt;head = cb_addr[1];         /* use supplied address,  
</span><br>
<span class="quotelev1">&gt; if available */
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
<span class="quotelev1">&gt; 	&#149; File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev1">&gt; Function: ompi_fifo_init()
</span><br>
<span class="quotelev1">&gt; Change the interface to ompi_fifo_init() to allow the caller to  
</span><br>
<span class="quotelev1">&gt; supply addresses to use for CB components rather than having callees  
</span><br>
<span class="quotelev1">&gt; allocate memory for them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use such a supplied address, if available, when allocating the FIFO  
</span><br>
<span class="quotelev1">&gt; (not CB) head.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function: ompi_fifo_init()
</span><br>
<span class="quotelev1">&gt; Change the call in ompi_fifo_write_to_head() to ompi_cb_fifo_init()  
</span><br>
<span class="quotelev1">&gt; to reflect the new interface, passing NULL as the new argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; Function: compute_initial_cb_fifo_space() and  
</span><br>
<span class="quotelev1">&gt; compute_initial_cb_fifo_addrs()
</span><br>
<span class="quotelev1">&gt; Add these two functions to compute how much space will be needed for  
</span><br>
<span class="quotelev1">&gt; the aggregated CB allocation and to compute addresses for individual  
</span><br>
<span class="quotelev1">&gt; CB components for a particular sender and receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function: sm_btl_first_time_init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Increase the allocation of FIFOs (call to mpool_calloc) to include  
</span><br>
<span class="quotelev1">&gt; room for the CBs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function: mca_btl_sm_add_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compute the addresses where CB components should be and pass them  
</span><br>
<span class="quotelev1">&gt; into ompi_fifo_init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These changes impact only the allocation of CBs during MPI_Init().  
</span><br>
<span class="quotelev1">&gt; If FIFOs are grown later during program execution, they will  
</span><br>
<span class="quotelev1">&gt; continue to have components allocated in a fragmented manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Free List Return Codes
</span><br>
<span class="quotelev1">&gt; This is unrelated to FIFOs, but is related to more robust handling  
</span><br>
<span class="quotelev1">&gt; of shared-memory allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The function sm_btl_first_time_init() should test the return values  
</span><br>
<span class="quotelev1">&gt; when it allocates free lists. It currently does not test return  
</span><br>
<span class="quotelev1">&gt; values, proceeding without a hiccup even if those allocations  
</span><br>
<span class="quotelev1">&gt; indicate an error. The proposed change is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; Function: sm_btl_first_time_init()
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
<span class="quotelev1">&gt; returning non-successful error status in case of error.
</span><br>
<span class="quotelev1">&gt; 4. Better Automatic Sizing of mmap File
</span><br>
<span class="quotelev1">&gt; Currently, the size of the file to be mmaped is governed by three  
</span><br>
<span class="quotelev1">&gt; MCA parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; mpool_sm_max_size
</span><br>
<span class="quotelev1">&gt; 	&#149; mpool_sm_min_size (default 128 Mbytes)
</span><br>
<span class="quotelev1">&gt; 	&#149; mpool_sm_per_peer_size (default 32 Mbytes)
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
<span class="quotelev1">&gt; This file size is a poor approximation for the actual amount of  
</span><br>
<span class="quotelev1">&gt; shared memory needed by an application during MPI_Init(). E.g., at  
</span><br>
<span class="quotelev1">&gt; n=2, the file is 128M even though less than 1M is needed. At large  
</span><br>
<span class="quotelev1">&gt; n, however, the file is insufficiently small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, we should add code that produces a better estimate of how  
</span><br>
<span class="quotelev1">&gt; much shared memory will be needed during MPI_Init().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the MCA parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; mpool_sm_max_size: default should be 0 (no limit)
</span><br>
<span class="quotelev1">&gt; 	&#149; mpool_sm_min_size: default should be 0 (no limit)
</span><br>
<span class="quotelev1">&gt; 	&#149; mpool_sm_per_peer_size: should be eliminated
</span><br>
<span class="quotelev1">&gt; More accurate sizing could help reduce the problems users see  
</span><br>
<span class="quotelev1">&gt; starting sm jobs with large on-node-process counts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One problem is that the size of the shared file is set by mpool_sm,  
</span><br>
<span class="quotelev1">&gt; but information about how much shared memory needs to be allocated  
</span><br>
<span class="quotelev1">&gt; during MPI_Init() is in btl_sm. Since OMPI doesn't easily allow  
</span><br>
<span class="quotelev1">&gt; components to call one another, we're stuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supporting Data Memory Consumption
</span><br>
<span class="quotelev1">&gt; Memory consumption can be measured or modeled. (I have a byte- 
</span><br>
<span class="quotelev1">&gt; accurate model.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are some comparisons for the case of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; 1024 on-node processes
</span><br>
<span class="quotelev1">&gt; 	&#149; 8-byte pointers (LP64 execution model)
</span><br>
<span class="quotelev1">&gt; 	&#149; 4K eager limit
</span><br>
<span class="quotelev1">&gt; 	&#149; 32K chunk size
</span><br>
<span class="quotelev1">&gt; 	&#149; 128-byte cacheline size
</span><br>
<span class="quotelev1">&gt; 	&#149; 4K (Linux) or 8K (Solaris) page size
</span><br>
<span class="quotelev1">&gt; Here are breakdowns of the shared-memory allocations during  
</span><br>
<span class="quotelev1">&gt; MPI_Init() in units of 106 bytes:
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
<span class="quotelev1">&gt; That is, with pagesize alignment, the CB allocations consume over  
</span><br>
<span class="quotelev1">&gt; 3n2 pages and dominate, even though most of that space is unused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The next biggest contributor is the eager freelists. There are 2n2  
</span><br>
<span class="quotelev1">&gt; eager fragments, each 4K (the eager limit), costing (approximately)  
</span><br>
<span class="quotelev1">&gt; 8 Gbytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With cacheline alignment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; Overall consumption drops by over 2&#215; compared to 4K pages and  
</span><br>
<span class="quotelev1">&gt; over 3&#215; compared to 8K pages.
</span><br>
<span class="quotelev1">&gt; 	&#149; The remaining leading category (eager freelists) can now be  
</span><br>
<span class="quotelev1">&gt; scaled down by adjusting an existing MCA parameter btl_sm_eager_limit.
</span><br>
<span class="quotelev1">&gt; 	&#149; For that matter, the second leading category (CB queues) can also  
</span><br>
<span class="quotelev1">&gt; be scaled down by adjusting an existing MCA parameter  
</span><br>
<span class="quotelev1">&gt; btl_sm_size_of_cb_queue.
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
<span class="quotelev1">&gt; With no more pagesize dependence and little more cacheline  
</span><br>
<span class="quotelev1">&gt; dependence, one could really start to shoehorn big jobs into a small  
</span><br>
<span class="quotelev1">&gt; shared-memory area. E.g., consider bumping the eager limit down to  
</span><br>
<span class="quotelev1">&gt; 256 bytes, the size of a CB queue to 16 entries, and the chunk size  
</span><br>
<span class="quotelev1">&gt; to 8K. Then, shared-memory consumption for 1024 processes looks like  
</span><br>
<span class="quotelev1">&gt; this:
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
<span class="quotelev1">&gt; Ping-Pong Latency
</span><br>
<span class="quotelev1">&gt; We can also look at performance. Here are OSU latency results for  
</span><br>
<span class="quotelev1">&gt; short messages on a Sun v20z. The absolute numbers are less  
</span><br>
<span class="quotelev1">&gt; important than the relative difference between the two sets:
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
<span class="quotelev1">&gt; There is a penalty for non-null messages due to OMPI &quot;data  
</span><br>
<span class="quotelev1">&gt; convertors&quot;. Importantly, to within the reproducibility of the  
</span><br>
<span class="quotelev1">&gt; measurements, it is unclear if there is any slowdown that one can  
</span><br>
<span class="quotelev1">&gt; attribute to the changes. (Results are the median of 5 measurements.  
</span><br>
<span class="quotelev1">&gt; The values look smooth, but the error bars, which are difficult to  
</span><br>
<span class="quotelev1">&gt; characterize, are probably greater than the 0.01-0.02 &#181;sec  
</span><br>
<span class="quotelev1">&gt; differences seen here.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other Considerations
</span><br>
<span class="quotelev1">&gt; Simply going from pagesize alignment to cacheline alignment should  
</span><br>
<span class="quotelev1">&gt; be a relatively unintrusive code change and effect most of the  
</span><br>
<span class="quotelev1">&gt; reduction in shared-memory allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also aggregating allocations is more intrusive, but has a few more  
</span><br>
<span class="quotelev1">&gt; advantages, including:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; Slight further reduction in the amount of shared memory allocated.
</span><br>
<span class="quotelev1">&gt; 	&#149; Less lock contention as the number of allocation is reduced from  
</span><br>
<span class="quotelev1">&gt; O(n2) to O(n), possibly improving start-up performance.
</span><br>
<span class="quotelev1">&gt; 	&#149; Can provide memory locality even on systems that don't have  
</span><br>
<span class="quotelev1">&gt; maffinity support.
</span><br>
<span class="quotelev1">&gt; It would be nice to size the mmap file automatically better than  
</span><br>
<span class="quotelev1">&gt; what is done today, but (as noted) I haven't yet figured out how to  
</span><br>
<span class="quotelev1">&gt; make the btl_sm and mpool_sm components talk to each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My proposed code changes need more testing, especially in the case  
</span><br>
<span class="quotelev1">&gt; of multiple memory nodes per node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It remains unclear to me if error codes are being treated properly  
</span><br>
<span class="quotelev1">&gt; in the mca_btl_sm_add_procs() code. E.g., if one process is unable  
</span><br>
<span class="quotelev1">&gt; to allocate memory in the shared area, should all processes fail?  
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>In reply to:</strong> <a href="5172.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
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
