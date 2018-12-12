<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "What is the vader BTL?";

$anchor[] = "what-is-vader";

$a[] = "The [vader] BTL is a low-latency, high-bandwidth
mechanism for transferring data between two processes via shared memory.
This BTL can only be used between processes executing on the same node.

Beginning with the v1.8 series, the [vader] BTL replaces the [sm] BTL unless
the local system lacks the required support or the user specifically request
the latter be used. At this time, [vader] requires CMA support which is typically
found in more current kernels. Thus, systems based on older kernels may default
to the slower [sm] BTL.";


/////////////////////////////////////////////////////////////////////////

$q[] = "What is the sm BTL?";

$anchor[] = "what-is-sm";

$a[] = "The [sm] BTL (shared-memory Byte Transfer Layer) is a low-latency, high-bandwidth
mechanism for transferring data between two processes via shared memory.
This BTL can only be used between processes executing on the same node.

The [sm] BTL has high exclusivity.  That is, if one process can reach another
process via [sm], then no other BTL will be considered for that connection.

Note that with Open MPI v1.3.2, the [sm] so-called \"FIFOs\" were reimplemented and
the sizing of the shared-memory area was changed.  So, much of this FAQ will
distinguish between releases up to Open MPI v1.3.1 and releases starting with Open MPI v1.3.2.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify use of sm for MPI messages?";

$anchor[] = "sm-btl";

$a[] = "Typically, it is unnecessary to do so;  OMPI will use the best BTL available
for each communication.

Nevertheless, you may use the MCA parameter [btl].  You should also specify the
[self] BTL for communications between a process and itself.  Further, if not all
processes in your job will run on the same, single node, then you also need
to specify a BTL for internode communications.  For example:

<geshi bash>
shell$ mpirun <font color=red>--mca btl self,sm,tcp</font> -np 16 ./a.out
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the sm BTL work?";

$anchor[] = "how-does-sm-BTL-work";

$a[] = "A point-to-point user message is broken up by the PML into fragments.
The [sm] BTL only has to transfer individual fragments.  The steps are:
<ul>
<li> The sender pulls a shared-memory fragment out of one of its _free lists._
     Each process has one free list for smaller (e.g., 4Kbyte) _eager_
     fragments and another free list for larger (e.g., 32Kbyte) _max_ fragments.
<li> The sender packs the user-message fragment into this shared-memory
     fragment, including any header information.
<li> The sender posts a pointer to this shared fragment into the
     appropriate FIFO (first-in-first-out) queue of the receiver.
<li> The receiver polls its FIFO(s).  When it finds a new fragment
     pointer, it unpacks data out of the shared-memory fragment and notifies
     the sender that the shared fragment is ready for reuse (to be
     returned to the sender's free list).
</ul>

On each node where an MPI job has two or more processes running, the job creates
a file that each process <code>mmap</code>s into its address space.  Shared-memory
resources that the job needs &mdash; such as FIFOs and fragment free lists &mdash; are
allocated from this shared-memory area.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why does my MPI job no longer start when there are too many processes on
one node?";

$anchor[] = "large-job-startup";

$a[] = "If you are using Open MPI v1.3.1 or earlier, it is possible that the shared-memory
area set aside for your job was not created large enough.  Make sure you're running
in 64-bit mode (compiled with [-m64]) and set the MCA parameter mpool_sm_max_size
to be very large &mdash; even several Gbytes.  Exactly how large is discussed further
<a href=\"#how-much-need\">below</a>.

Regardless of which OMPI release you're using, make sure that there is sufficient
space for a large file to back the shared memory &mdash; typically in [/tmp].";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning MPI performance?";

$anchor[] = "sm-params";

$a[] = "The [ompi_info] command can display all the parameters available for the
[sm] BTL and [sm] mpool:

<geshi bash>
shell$ ompi_info <font color=red><strong>--param  btl  sm</strong></font>
shell$ ompi_info <font color=red><strong>--param mpool sm</strong></font>
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I tune these parameters to improve performance?";

$anchor[] = "more-sm";

$a[] = "Mostly, the default values of the MCA parameters have already
been chosen to give good performance.  To improve performance further
is a little bit of an art.  Sometimes, it's a matter of trading off
performance for memory.

<ul>
<li> [btl_sm_eager_limit]:
If message data plus header information fits within this limit, the
message is sent \"eagerly\"... &mdash; that is, a sender attempts to write
its entire message to shared buffers without waiting for a receiver to
be ready.  Above this size, a sender will only write the first part of
a message, then wait for the receiver to acknowledge its ready before
continuing.  Eager sends _can_ improve performance by decoupling
senders from receivers.</li>

<li> [btl_sm_max_send_size]:
Large messages are sent in fragments of this size.  Larger segments
_can_ lead to greater efficiencies, though they could perhaps also
inhibit pipelining between sender and receiver.</li>

<li> [btl_sm_num_fifos]:
Starting in Open MPI v1.3.2, this is the number of FIFOs per receiving
process.  By default, there is only one FIFO per process.
Conceivably, if many senders are all sending to the same process and
contending for a single FIFO, there will be congestion.  If there are
many FIFOs, however, the receiver must poll more FIFOs to find
in-coming messages.  Therefore, you might try increasing this
parameter slightly if you have _many_ (at least dozens) of processes
all sending to the same process.  For example, if 100 senders are all
contending for a single FIFO for a particular receiver, it may suffice
to increase [btl_sm_num_fifos] from 1 to 2.</li>

<li> [btl_sm_fifo_size]:
Starting in Open MPI v1.3.2, FIFOs could no longer grow.  If you
believe the FIFO is getting congested because a process falls far
behind in reading in in-coming message fragments, increase this size
manually.</li>

<li> [btl_sm_free_list_num]:
This is the initial number of fragments on each (eager and max) free
list.  The free lists can grow in response to resource congestion, but
you can increase this parameter to pre-reserve space for more
fragments.</li>

<li> [mpool_sm_min_size]:
You can reserve headroom for the shared-memory area to grow by
increasing this parameter.</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where is the file that sm will mmap in?";

$anchor[] = "where-sm-file";

$a[] = "The file will be in the OMPI session directory, which is typically
something like [/tmp/openmpi-sessions-<i>myusername</i>@<i>mynodename</i>*] .
The file itself will have the name
[shared_mem_pool].<i>mynodename</i>.  For example, the full path could be
[/tmp/openmpi-sessions-myusername@node0_0/1543/1/shared_mem_pool.node0].

To place the session directory in a non-default location, use the MCA parameter
[orte_tmpdir_base].";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why am I seeing incredibly poor performance with the sm BTL?";

$anchor[] = "poor-sm-btl-performance";

$a[] = "The most common problem with the shared memory BTL is when the
Open MPI session directory is placed on a network filesystem (e.g., if
[/tmp] is not a local disk).  This is because the shared memory BTL
places a memory-mapped file in the Open MPI session directory (see <a
href=\"#where-sm-file\">this entry</a> for more details).  If the
session directory is located on a network filesystem, the shared
memory BTL latency will be extremely high.

Try not mounting [/tmp] as a network filesystem, and/or moving the Open
MPI session directory to a local filesystem.

Some users have reported success and possible performance
optimizations with having [/tmp] mounted as a \"tmpfs\" filesystem
(i.e., a RAM-based filesystem).  However, before doing configuring
your system this way, be aware of a few items:

<ol>
<li> Open MPI writes a few small meta data files into [/tmp] and may
therefore consume some extra memory that could have otherwise been
used for application instruction or data state.</li>
<li> If you use the \"filem\" system in Open MPI for moving
executables between nodes, these files are stored under [/tmp].</li>
<li> Open MPI's checkpoint / restart files can also be saved under
[/tmp].</li>
<li> If the Open MPI job is terminated abnormally, there are some
circumstances where files (including memory-mapped shared memory
files) can be left in [/tmp].  This can happen, for example, when a
resource manager forcibly kills an Open MPI job and does not give it
the chance to clean up [/tmp] files and directories.</li>
</ol>

Some users have reported success with configuring their resource
manager to run a script between jobs to forcibly empty the [/tmp]
directory.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I use SysV instead of mmap?";

$anchor[] = "SysV-vs-mmap";

$a[] = "In the 1.3 and 1.4 Open MPI series, shared memory is established
via [mmap].  In future releases, there _may_ be an option for using SysV
shared memory.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How much shared memory will my job use?";

$anchor[] = "how-much-use";

$a[] = "Your job will create a shared-memory area on each node where
it has two or more processes.  This area will be fixed during the
lifetime of your job.  Shared-memory allocations (for FIFOs and
fragment free lists) will be made in this area.  Here, we look at the
size of that shared-memory area.

If you want just one, hard number, then go with approximately 128
Mbytes per node per job, shared by all the job's processes on that
node.  That is, an OMPI job will need more than a few Mbytes per node,
but typically less than a few Gbytes.

Better yet, read on.

Up through Open MPI v1.3.1, the shared-memory file would basically be
sized thusly:

<geshi c>
nbytes = n * mpool_sm_per_peer_size
if ( nbytes < mpool_sm_min_size ) nbytes = mpool_sm_min_size
if ( nbytes > mpool_sm_max_size ) nbytes = mpool_sm_max_size
</gesih>

where [n] is the number of processes in the job running on that
particular node and the [mpool_sm_*] are MCA parameters.  For small
[n], this size is typically excessive.  For large [n] (e.g., 128 MPI
processes on the same node), this size may not be sufficient for the
job to start.

Starting in OMPI v1.3.2, a more sophisticated formula was introduced to
model more closely how much memory was actually needed.  That formula
is somewhat complicated and subject to change.  It guarantees that
there will be at least enough shared memory for the program to start
up and run.  See <a href=\"#how-much-need\">this FAQ item</a> to see
how much is needed.  Alternatively, the motivated user can examine the
OMPI source code to see the formula used &mdash; for example, here is the 
<a
href=\"https://github.com/open-mpi/ompi/blob/463f11f9937b084250751c29b1556e40148737b3/ompi/mca/btl/sm/btl_sm.c#L187-L255\">
formula in OMPI commit 463f11f</a>.

OMPI v1.3.2 also uses the MCA parameter [mpool_sm_min_size] to set a
minimum size &mdash; e.g., so that there is not only enough shared memory
for the job to start, but additionally headroom for further
shared-memory allocations (e.g., of more eager or max fragments).

Once the shared-memory area is established, it will not grow further
during the course of the MPI job's run.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How much shared memory do I need?";

$anchor[] = "how-much-need";

$a[] = "In most cases, OMPI will start your job with sufficient shared
memory.

Nevertheless, if OMPI doesn't get you enough shared memory (e.g.,
you're using OMPI v1.3.1 or earlier with roughly 128 processes or more
on a single node) or you want to trim shared-memory consumption, you
may want to know how much shared memory is really needed.

As we saw <a href=\"#how-does-sm-BTL-work\">earlier</a>, the shared
memory area contains:
<ul>
<li> FIFOs
<li> eager fragments
<li> max fragments
</ul>

In general, you _need_ only enough shared memory for the FIFOs and
fragments that are allocated during [MPI_Init()].

Beyond that, you might _want_ additional shared memory for performance
reasons, so that FIFOs and fragment lists can grow if your program's
message traffic encounters resource congestion.  Even if there is no
room to grow, however, your correctly written MPI program should still
run to complete in the face of congestion; performance simply degrades
somewhat.  Note that while shared-memory resources can grow after
[MPI_Init()], they cannot shrink.

So, how much shared memory is needed during [MPI_Init()] ?
You need approximately the total of:

<ul>
<li> FIFOs:
     <ul>
     <li> <i>(&le; Open MPI v1.3.1)</i>: &nbsp;&nbsp;&nbsp; [3 &times; n &times; n &times; pagesize]
     <li> <i>(&ge; Open MPI v1.3.2)</i>: &nbsp;&nbsp;&nbsp; [n &times; btl_sm_num_fifos &times; btl_sm_fifo_size &times; sizeof(void *)]
     </ul>
<li> eager fragments: &nbsp;&nbsp;&nbsp; [n &times; ( 2 &times; n + btl_sm_free_list_inc ) &times; btl_sm_eager_limit]
<li> max fragments: &nbsp;&nbsp;&nbsp; [n &times; btl_sm_free_list_num &times; btl_sm_max_send_size]
</ul>

where
<ul>
<li> [n] is the number of MPI processes in your job on the node
<li> [pagesize] is the OS page size (4K for Linux and 8K for Solaris)
<li> [btl_sm_*] are MCA parameters
</ul>";


/////////////////////////////////////////////////////////////////////////

$q[] = "How can I decrease my shared-memory usage?";

$anchor[] = "decrease-sm";

$a[] = "There are two parts to this question.

First, how does one reduce how big the [mmap] file is?  The answer is:
<ul>
<li> up to Open MPI v1.3.1:  reduce [mpool_sm_per_peer_size], [mpool_sm_min_size],
     and [mpool_sm_max_size]
<li> starting with Open MPI v1.3.2:  reduce [mpool_sm_min_size]
</ul>

Second, how does one reduce how much shared memory is needed?  (Just
making the [mmap] file smaller doesn't help if then your job won't
start up.)  The answers are:

<ul>
<li> For small values of [n] &mdash; that is, for few processes per node &mdash;
     shared-memory usage during [MPI_Init()] is predominantly for max free lists.
     So, you can reduce the MCA parameter [btl_sm_max_send_size].  Alternatively,
     you could reduce [btl_sm_free_list_num], but it is already pretty small by
     default.
<li> For large values of [n] &mdash; that is, for many processes per node &mdash; there
     are two cases:
     <ul>
     <li> up to Open MPI v1.3.1:  shared-memory usage is dominated by the
          FIFOs, which consume a certain number of pages.  Usage is
          high and cannot be reduced much via MCA parameter tuning.
     <li> starting with Open MPI v1.3.2:  shared-memory usage is dominated
          by the eager free lists.  So, you can reduce the MCA parameter
          [btl_sm_eager_limit].
     </ul>
</ul>";

