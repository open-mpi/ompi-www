<?
$subject_val = "[OMPI devel] RFC: Fragmented sm Allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 01:10:34 2009" -->
<!-- isoreceived="20090114061034" -->
<!-- sent="Tue, 13 Jan 2009 22:14:43 -0800" -->
<!-- isosent="20090114061443" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Fragmented sm Allocations" -->
<!-- id="496D82D3.2090102_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Fragmented sm Allocations<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 01:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5173.php">Matthias Jurenz: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Reply:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Reply:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<head><title>RFC: Fragmented sm Allocations</title></head>
<body bgcolor=white>

<h1>RFC: Fragmented sm Allocations</h1>

<p>
<b>WHAT:</b>  Dealing with the fragmented allocations of sm BTL FIFO
circular buffers (CB) during MPI_Init().

<p>
Also:
<ul>
<li> Improve handling of error codes.
<li> Automate the sizing of the <tt>mmap</tt> file.
</ul>

<p>
<b>WHY:</b>  To reduce consumption of shared memory, making job startup
more robust, and possibly improving the scalability of startup.

<p>
<b>WHERE:</b> In <tt>mca_btl_sm_add_procs()</tt>, there is a loop
over calls to <tt>ompi_fifo_init()</tt>.  This is where CBs are
initialized one at a time, components of a CB allocated individually.
Changes can be seen in
<tt>ssh://www.open-mpi.org/~eugene/hg/sm-allocation</tt>.

<p>
<b>WHEN:</b>  Upon acceptance.

<p>
<b>TIMEOUT:</b>  January 30, 2009.

<hr>

<h1>WHY (details)</h1>

<p>
The <tt>sm</tt> BTL establishes a FIFO for each non-self, on-node
connection.  Each FIFO is initialized during <tt>MPI_Init()</tt>
with a circular buffer (CB).  (More CBs can be added later in
program execution if a FIFO runs out of room.)

<p>
A CB has different components that are used in different ways:
<ul>
<li> The "wrapper" is read by both sender and receiver,
     but is rarely written.
<li> The "queue" (FIFO entries) is accessed by both the
     sender and receiver.
<li> The "head" is accessed by the sender.
<li> The "tail" is accessed by the receiver.
</ul>

<p>
For performance reasons, a CB is not allocated as one large data structure.
Rather, these components are laid out separately in memory and the
wrapper has pointers to the various locations.  Performance
considerations include:
<ul>
<li> false sharing: a component used by one process should
     not share a cacheline with another component that is
     modified by another process
<li> NUMA: certain components should perhaps be mapped
     preferentially to memory pages that are close to the
     processes that access these components
</ul>

<p>
Currently, the <tt>sm</tt> BTL handles these issues by allocating
each component of each CB its own page.  (Actually, it couples
tails and queues together.)

<p>
As the number of on-node processes grows, however, the shared-memory
allocation skyrockets.  E.g., let's say there are <i>n</i> processes
on-node.  There are therefore <i>n</i>(<i>n</i>-1) = O(<i>n</i><sup>2</sup>)
FIFOs, each with 3 allocations (wrapper, head, and tail/queue).  The
shared-memory allocation for CBs becomes 3<i>n</i><sup>2</sup> pages.
For large <i>n</i>, this dominates the shared-memory consumption,
even though most of the CB allocation is unused.  E.g., a 12-byte
"head" ends up consuming a full memory page!

<p>
Not only is the 3<i>n</i><sup>2</sup>-page allocation large, but it
is also not tunable via any MCA parameters.

<p>
Large shared-memory consumption has led to some number of
start-up and other user problems.  E.g., the e-mail thread at
<a href=http://www.open-mpi.org/community/lists/devel/2008/11/4882.php>http://www.open-mpi.org/community/lists/devel/2008/11/4882.php</a>.

<h1>WHAT (details)</h1>

<p>
Several actions are recommended here.

<h3>1.  Cacheline Rather than Pagesize Alignment</h3>

<p>
The first set of changes reduces pagesize to cacheline alignment.
Though mapping to pages is motivated by NUMA locality, note:
<ul>
<li> The code already has NUMA locality optimizations
     (<tt>maffinity</tt> and <tt>mpool</tt>s) anyhow.
<li> There is no data that I'm aware of substantiating the
     benefits of locality optimizations in this context.
     <center><table border width=60%><tr><td>
     <p>
     More to the point, I've tried some such experiments myself.
     I had two processes communicating via shared memory on a
     large SMP that had a large difference between remote and local
     memory access times.  I timed the roundtrip latency for
     pingpongs between the processes.  That time was correlated
     to the relative separation between the two processes, and
     not at all to the placement of the physical memory backing
     the shared variables.  It did not matter if the memory was
     local to the sender or receiver or remote from both!  (E.g.,
     colocal processes showed fast timings even if the shared
     memory were remote to both processes.)
     <p>
     My results do not prove that all NUMA platforms behave in the
     same way.  My point is only that, though I understand the
     logic behind locality optimizations for FIFO placement, the
     only data I am aware of does not substantiate that logic.
     </td></tr></table></center>
</ul>

<p>
The changes are:
<ul>
<li> <b>File</b>: <tt>ompi/mca/mpool/sm/mpool_sm_module.c</tt><br>
     <b>Function</b>: <tt>mca_mpool_sm_alloc()</tt><br>
     <p>
     Use the alignment requested by the caller rather than
     adding additional pagesize alignment as well.
<li> <b>File</b>: <tt>ompi/class/ompi_fifo.h</tt><br>
     <b>Function</b>: <tt>ompi_fifo_init()</tt>
                  and <tt>ompi_fifo_write_to_head()</tt><br>
     <p>
     Align ompi_cb_fifo_wrapper_t structure on cacheline rather than page.
<li> <b>File</b>: <tt>ompi/class/ompi_circular_buffer_fifo.h</tt><br>
     <b>Function</b>: <tt>ompi_cb_fifo_init()</tt><br>
     <p>
     Align the two calls to mpool_alloc on cacheline rather than page.
</ul>

<h3>2.  Aggregated Allocation</h3>

<p>
Another option is to lay out all the CBs at once and aggregate
their allocations.

<p>
This may have the added benefit of reducing lock contention during
<tt>MPI_Init()</tt>.  On the one hand, the 3<i>n</i><sup>2</sup> CB
allocations during <tt>MPI_Init()</tt> contend for a single
<tt>mca_common_sm_mmap->map_seg->seg_lock</tt> lock.  On the other
hand, I know so far of no data showing that this lock contention
is impairing start-up scalability.

<p>
The objectives here would be to consolidate many CB components together
subject to:
<ul>
<li> queues should be local to receivers
<li> heads should be local to senders
<li> tails should be local to receivers
<li> wrappers should not share cachelines with heads or tails
</ul>

<p>
In sum, for process <tt>myrank</tt>, the FIFO allocation in shared
memory during <tt>MPI_Init()</tt> looks something like this:
<pre>
    ompi_fifo_t   from  0  to myrank
    ompi_fifo_t   from  1  to myrank
    ompi_fifo_t   from  2  to myrank
    ...
    ompi_fifo_t   from n-1 to myrank
    <i>--- cacheline boundary ---</i>
    queue of pointers, for CB from  0  to myrank
    queue of pointers, for CB from  1  to myrank
    queue of pointers, for CB from  2  to myrank
    ...
    queue of pointers, for CB from n-1 to myrank
    <i>--- cacheline boundary ---</i>
    head for CB from myrank to  0
    tail for CB from  0  to myrank
    head for CB from myrank to  1
    tail for CB from  1  to myrank
    head for CB from myrank to  2
    tail for CB from  2  to myrank
    ...
    head for CB from myrank to n-1
    tail for CB from n-1 to myrank
    <i>--- cacheline boundary ---</i>
    wrapper, CB from  0  to myrank
    wrapper, CB from  1  to myrank
    wrapper, CB from  2  to myrank
    ...
    wrapper, CB from n-1 to myrank
</pre>

<p>
<center><table border width=60%><tr><td>
Note that out-bound heads and in-bound tails are interwoven.  There
should be no false sharing, however, even if multiple heads and tails
share the same cacheline, since they're all accessed by the same process.
<p>
For multi-threaded processes, however, it is conceivable that different
threads will be passing many messages to different peers.  So, for
multi-threaded jobs, we spread heads and tails out onto their own
cachelines.  Consuming the extra shared memory in the multi-threaded
case is probably tolerable since the on-node-process count will be
lower.
</td></tr></table></center>

<p>
The changes are:
<ul>
<li> <b>File</b>: <tt>ompi/class/ompi_circular_buffer_fifo.h</tt><br>
     <b>Function</b>: <tt>ompi_cb_fifo_init()</tt><br>
     <p>
     Instead of having <tt>ompi_cb_fifo_init()</tt> allocate each
     component of a CB separately, change the interface to allow
     the caller function to pass an array of addresses in.  These
     addresses will be assumed to be allocated and should be used
     for the CB components.
     <p>
     If the "array of addresses" is <tt>NULL</tt>, then we allocate
     the CB components as before.
     <p>
     Here is pseudocode to illustrate this change.  We replace
     <pre>
     fifo->head = mpool_alloc(...);   /* allocate head */
     if ( NULL == fifo->head )
         return OMPI_ERR_OUT_OF_RESOURCE;
     </pre>
     with
     <pre>
     if ( NULL != cb_addr ) {
         fifo->head = cb_addr[1];         /* use supplied address, if available */
     } else {
         fifo->head = mpool_alloc(...);   /* allocate head */
         if ( NULL == fifo->head )
             return OMPI_ERR_OUT_OF_RESOURCE;
     }
     </pre>
<li> <b>File</b>: <tt>ompi/class/ompi_fifo.h</tt><br>
     <b>Function</b>: <tt>ompi_fifo_init()</tt><br>
     <p>
     Change the interface to <tt>ompi_fifo_init()</tt> to allow
     the caller to supply addresses to use for CB components
     rather than having callees allocate memory for them.
     <p>
     Use such a supplied address, if available, when allocating
     the FIFO (not CB) head.
     <p>
     <b>Function</b>: <tt>ompi_fifo_init()</tt><br>
     <p>
     Change the call in <tt>ompi_fifo_write_to_head()</tt>
     to <tt>ompi_cb_fifo_init()</tt> to reflect the new
     interface, passing <tt>NULL</tt> as the new argument.
<li> <b>File</b>: <tt>ompi/mca/btl/sm/btl_sm.c</tt><br>
     <b>Function</b>: <tt>compute_initial_cb_fifo_space()</tt> and
     <tt>compute_initial_cb_fifo_addrs()</tt><br>
     <p>
     Add these two functions to compute how much space will be
     needed for the aggregated CB allocation and to compute
     addresses for individual CB components for a particular
     sender and receiver.
     <p>
     <b>Function</b>: <tt>sm_btl_first_time_init()</tt>
     <p>
     Increase the allocation of FIFOs (call to <tt>mpool_calloc</tt>)
     to include room for the CBs.
     <p>
     <b>Function</b>: <tt>mca_btl_sm_add_procs()</tt>
     <p>
     Compute the addresses where CB components should be and
     pass them into <tt>ompi_fifo_init()</tt>.
</ul>

<p>
These changes impact only the allocation of CBs during <tt>MPI_Init()</tt>.
If FIFOs are grown later during program execution, they will continue
to have components allocated in a fragmented manner.

<h3>3.  Free List Return Codes</h3>

<p>
This is unrelated to FIFOs, but is related to more robust handling
of shared-memory allocation.

<p>
The function <tt>sm_btl_first_time_init()</tt> should test the return
values when it allocates free lists.  It currently does not test return
values, proceeding without a hiccup even if those allocations indicate
an error.  The proposed change is:
<ul>
<li> <b>File</b>: <tt>ompi/mca/btl/sm/btl_sm.c</tt><br>
     <b>Function</b>: <tt>sm_btl_first_time_init()</tt>
     <p>
     Test the return codes from the calls to:
     <pre>
     ompi_free_list_init_new()
     ompi_free_list_init_new()
     opal_free_list_init()
     </pre>
     returning non-successful error status in case of error.
</ul>

<h3>4.  Better Automatic Sizing of <tt>mmap</tt> File</h3>

<p>
Currently, the size of the file to be <tt>mmap</tt>ed is governed
by three MCA parameters:
<ul>
<li> <tt>mpool_sm_max_size</tt>
<li> <tt>mpool_sm_min_size</tt>
     (default 128 Mbytes)
<li> <tt>mpool_sm_per_peer_size</tt>
     (default 32 Mbytes)
</ul>

<p>
Specifically, the file size is
<pre>
     min(<tt>mpool_sm_max_size</tt>,
     max(<tt>mpool_sm_min_size</tt>,
     <i>n</i> * <tt>mpool_sm_per_peer_size</tt>))
</pre>

<p>
This file size is a poor approximation for the actual amount of
shared memory needed by an application during <tt>MPI_Init()</tt>.
E.g., at <i>n</i>=2, the file is 128M even though less than 1M is needed.
At large <i>n</i>, however, the file is insufficiently small.

<p>
Instead, we should add code that produces a better estimate of how
much shared memory will be needed during <tt>MPI_Init()</tt>.

<p>
Regarding the MCA parameters:
<ul>
<li> <tt>mpool_sm_max_size</tt>: default should be 0 (no limit)
<li> <tt>mpool_sm_min_size</tt>: default should be 0 (no limit)
<li> <tt>mpool_sm_per_peer_size</tt>: should be eliminated
</ul>

<p>
More accurate sizing could help reduce the problems users see
starting <tt>sm</tt> jobs with large on-node-process counts.

<p>
One problem is that the size of the shared file is set by
<tt>mpool_sm</tt>, but information about how much shared memory
needs to be allocated during <tt>MPI_Init()</tt> is in <tt>btl_sm</tt>.
Since OMPI doesn't easily allow components to call one another,
we're stuck.

<h1>Supporting Data</h1>

<h3>Memory Consumption</h3>

<p>
Memory consumption can be measured or modeled.
(I have a byte-accurate model.)

<p>
Here are some comparisons for the case of:
<ul>
<li> 1024 on-node processes
<li> 8-byte pointers (LP64 execution model)
<li> 4K eager limit
<li> 32K chunk size
<li> 128-byte cacheline size
<li> 4K (Linux) or 8K (Solaris) page size
</ul>

<p>
Here are breakdowns of the shared-memory allocations during <tt>MPI_Init()</tt>
in units of 10<sup>6</sup> bytes:
<pre>
                      pagesize alignment   cacheline
                      ------------------   alignment
  description        8K pages   4K pages
  ===============
  CB wrappers           8,682      4,391        235
  CB queues+tails       9,822      5,531      1,374
  CB heads              8,632      4,341        184
  eager freelists       9,171      9,032      8,898
  other                   370        362        355
  ---------------
  total                36,677     23,658     11,046
</pre>

<p>
That is, with pagesize alignment, the CB allocations consume over
3<i>n</i><sup>2</sup> pages and dominate, even though most of that
space is unused.

<p>
The next biggest contributor is the eager freelists.  There are
2<i>n</i><sup>2</sup> eager fragments, each 4K (the eager limit),
costing (approximately) 8 Gbytes.

<p>
With cacheline alignment:
<ul>
<li> Overall consumption drops by over 2&times; compared to
     4K pages and over 3&times; compared to 8K pages.
<li> The remaining leading category (eager freelists) can
     now be scaled down by adjusting an existing MCA parameter
     <tt>btl_sm_eager_limit</tt>.
<li> For that matter, the second leading category (CB queues)
     can also be scaled down by adjusting an existing MCA
     parameter <tt>btl_sm_size_of_cb_queue</tt>.
</ul>

<p>
Here are results when we not only drop from page-size to
cacheline alignment, but we also aggregate CB allocations:
<pre>
  10<sup>6</sup> bytes          description
  =========          ===============
      1,250          FIFOs and CBs
      8,899          eager freelists
        270          max freelists
     ------          ---------------
     10,418          total
</pre>

<p>
With no more pagesize dependence and little more cacheline
dependence, one could really start to shoehorn big jobs into
a small shared-memory area.  E.g., consider bumping the eager
limit down to 256 bytes, the size of a CB queue to 16 entries,
and the chunk size to 8K.  Then, shared-memory consumption for
1024 processes looks like this:
<pre>
  10<sup>6</sup> bytes          description
  =========          ===============
        311          FIFOs and CBs
        544          eager freelists
         68          max freelists
     ------          ---------------
        924          total
</pre>

<h3>Ping-Pong Latency</h3>

<p>
We can also look at performance.  Here are OSU latency results
for short messages on a Sun v20z.  The absolute numbers are
less important than the relative difference between the two
sets:
<pre>
     bytes  before     after

       0      0.85     0.84  &micro;sec
       1      0.97     0.99
       2      0.97     0.98
       4      0.97     0.98
       8      0.97     0.99
</pre>

<p>
There is a penalty for non-null messages due to OMPI "data convertors".
Importantly, to within the reproducibility of the measurements, it
is unclear if there is any slowdown that one can attribute to the
changes.  (Results are the median of 5 measurements.  The values
look smooth, but the error bars, which are difficult to characterize,
are probably greater than the 0.01-0.02 &micro;sec differences seen
here.)

<h1>Other Considerations</h1>

<p>
Simply going from pagesize alignment to cacheline alignment
should be a relatively unintrusive code change and effect most
of the reduction in shared-memory allocation.

<p>
Also aggregating allocations is more intrusive, but has a few more
advantages, including:
<ul>
<li> Slight further reduction in the amount of shared memory
     allocated.
<li> Less lock contention as the number of allocation is
     reduced from O(<i>n</i><sup>2</sup>) to O(<i>n</i>),
     possibly improving start-up performance.
<li> Can provide memory locality even on systems that
     don't have <tt>maffinity</tt> support.
</ul>

<p>
It would be nice to size the <tt>mmap</tt> file automatically
better than what is done today, but (as noted) I haven't yet
figured out how to make the <tt>btl_sm</tt> and <tt>mpool_sm</tt>
components talk to each other.

<p>
My proposed code changes need more testing, especially in the
case of multiple memory nodes per node.

<p>
It remains unclear to me if error codes are being treated
properly in the <tt>mca_btl_sm_add_procs()</tt> code.  E.g.,
if one process is unable to allocate memory in the shared
area, should all processes fail?
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5173.php">Matthias Jurenz: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Reply:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Reply:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
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
