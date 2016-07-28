<?
$subject_val = "[OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 17 01:43:58 2009" -->
<!-- isoreceived="20090117064358" -->
<!-- sent="Fri, 16 Jan 2009 22:48:06 -0800" -->
<!-- isosent="20090117064806" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: sm Latency" -->
<!-- id="49717F26.2000402_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-17 01:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5223.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe reply:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe reply:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<head><title>RFC: sm Latency</title></head>
<body bgcolor=white>

<h1>RFC: <tt>sm</tt> Latency</h1>

<p>
<b>WHAT:</b>  Introducing optimizations to reduce ping-pong
latencies over the <tt>sm</tt> BTL.

<p>
<b>WHY:</b>  This is a visible benchmark of MPI performance.
We can improve shared-memory latencies from 30% (if hardware
latency is the limiting factor) to 2&times; or more (if MPI
software overhead is the limiting factor).  At high process
counts, the improvement can be 10&times; or more.

<p>
<b>WHERE:</b>  Somewhat in the <tt>sm</tt> BTL, but very importantly
also in the PML.  Changes can be seen in
<tt>ssh://www.open-mpi.org/~tdd/hg/fastpath</tt>.

<p>
<b>WHEN:</b>  Upon acceptance.  In time for OMPI 1.4.

<p>
<b>TIMEOUT:</b>  February 6, 2009.

<hr>

<p>
This RFC is being submitted by
<a href=mailto:eugene.loh@sun.com>eugene.loh@sun.com</a>.

<h1>WHY (details)</h1>

<p>
The <tt>sm</tt> BTL typically has the lowest hardware latencies
of any BTL.  Therefore, any OMPI software overhead we otherwise
tolerate becomes glaringly obvious in <tt>sm</tt> latency measurements.

<p>
In particular, MPI pingpong latencies are oft-cited performance
benchmarks, popular indications of the quality of an MPI implementation.
Competitive vendor MPIs optimize this metric aggressively, both
for <tt>np</tt>=2 pingpongs and for pairwise pingpongs for high
<tt>np</tt> (like the popular HPCC performance test suite).

<p>
Performance reported by HPCC include:
<ul>
<li> <tt>MPI_Send()</tt>/<tt>MPI_Recv()</tt> pingpong latency.
<li> <tt>MPI_Send()</tt>/<tt>MPI_Recv()</tt> pingpong latency
     as the number of connections grows.
<li> <tt>MPI_Sendrecv()</tt> latency.
</ul>

<p>
The slowdown of latency as the number of <tt>sm</tt> connections
grows becomes increasingly important on large SMPs and ever more
prevalent many-core nodes.

<p>
Other MPI implementations, such as Scali and Sun HPC ClusterTools 6,
introduced such optimizations years ago.

<p>
Performance measurements indicate that the speedups we can expect
in OMPI with these optimizations range from 30% (<tt>np=2</tt>
measurements where hardware is the bottleneck) to 2&times;
(<tt>np=2</tt> measurements where software is the bottleneck) to
over 10&times; (large <tt>np</tt>).


<h1>WHAT (details)</h1>

<p>
Introduce an optimized "fast path" for "immediate" sends and receives.
Several actions are recommended here.

<h3>1.  Invoke the <tt>sm</tt> BTL <tt>sendi</tt> (send-immediate) function</h3>

<p>
Each BTL is allowed to define a "send immediate" (<tt>sendi</tt>)
function.  A BTL is not required to do so, however, in which case
the PML calls the standard BTL send function.

<p>
A <tt>sendi</tt> function has already been written for <tt>sm</tt>,
but it has not been used due to insufficient testing.

<p>
The function should be reviewed, commented in, tested, and used.

<p>
The changes are:
<ul>
<li> <b>File</b>: <tt>ompi/mca/btl/sm/btl_sm.c</tt><br>
     <b>Declaration/Definition</b>: <tt>mca_btl_sm</tt><br>
     <p>
     Comment in the <tt>mca_btl_sm_sendi</tt> symbol
     instead of the <tt>NULL</tt> placeholder so that the
     already existing <tt>sendi</tt> function will be discovered
     and used by the PML.
     <p>
     <b>Function</b>: <tt>mca_btl_sm_sendi()</tt><br>
     <p>
     Review the existing <tt>sm</tt> <tt>sendi</tt> code.
     My suggestions include:
     <ul>
     <li> Drop the test against the eager limit since the PML
          calls this function only when the eager limit is
          respected.
     <li> Make sure the function has no side effects in the
          case where it does not complete.  See
          <a href=#OpenIssues>Open Issues</a>, the final
          section of this document, for further discussion
          of "side effects".
     </ul>
     <p>
     Mostly, I have reviewed the code and believe it's
     already suitable for use.
</ul>

<h3>2.  Move the <tt>sendi</tt> call up higher in the PML</h3>

<p>
Profiling pingpong tests, we find that not so much time is spent
in the <tt>sm</tt> BTL.  Rather, the PML consumes a lot of time
preparing a "send request".  While these complex data structures
are needed to track progress of a long message that will be sent
in multiple chunks and progressed over multiple entries to and
exits from the MPI library, managing this large data structure
for an "immediate" send (one chunk, one call) is overkill.  Latency
can be reduced noticeably if one bypasses this data structure.
This means invoking the <tt>sendi</tt> function as early as
possible in the PML.

<p>
The changes are:
<ul>
<li> <b>File</b>: <tt>ompi/mca/pml/ob1/pml_ob1_isend.c</tt><br>
     <b>Function</b>: <tt>mca_pml_ob1_send()</tt><br>
     <p>
     As soon as we enter the PML send function, try to call
     the BTL <tt>sendi</tt> function.  If this fails for whatever
     reason, continue with the traditional PML send code path.
     If it succeeds, then exit the PML and return up to the calling
     layer without having to have wrestled with the PML send-request
     data structure.
     <p>
     For better software management, the attempt to find and
     use a BTL <tt>sendi</tt> function can be organized into
     a new <tt>mca_pml_ob1_sendi()</tt> function.
<li> <b>File</b>: <tt>ompi/mca/pml/ob1/pml_ob1_sendreq.c</tt><br>
     <b>Function</b>: <tt>mca_pml_ob1_send_request_start_copy()</tt><br>
     <p>
     Remove this attempt to call the BTL <tt>sendi</tt> function,
     since we've already tried to do so higher up in the PML.
</ul>

<h3>3.  Introduce a BTL <tt>recvi</tt> call</h3>

<p>
While optimizing the send side of a pingpong operation is helpful,
it is less than half the job.  At least as many savings are possible
on the receive side.

<p>
Corresponding to what we've done on the send side, on the receive
side we can attempt, as soon as we've entered the PML, to call a
BTL <tt>recvi</tt> (receive-immediate) function, bypassing the
creation of a complex "receive request" data structure that is
not needed if the receive can be completed immediately.

<p>
Further, we can perform directed polling.  OMPI pingpong latencies
grow significantly as the number of <tt>sm</tt> connections increases,
while competitors (Scali, in any case) show absolutely flat latencies
with increasing <tt>np</tt>.  The <tt>recvi</tt> function could check
one connection for the specified receive and exit quickly if that
message if found.

<p>
A BTL is granted considerable latitude in the proposed <tt>recvi</tt>
functions.  The principle requirement is that the <tt>recvi</tt>
<i>either</i> completes the specified receive completely <i>or else</i>
behaves as if the function was not called at all.  (That is, one should
be able to revert to the traditional code path without having to worry
about any <tt>recvi</tt> side effects.  So, for example, if the
<tt>recvi</tt> function encounters any fragments being returned to
the process, it is permitted to return those fragments to the free list.)

<p>
While those are the "hard requirements" for <tt>recvi</tt>, there
are also some loose guidelines.  Mostly, it is understood that
<tt>recvi</tt> should return "quickly" (a loose term to be interpreted
by the BTL).  If <tt>recvi</tt> can quickly complete the specified
receive, great!  If not, it should return control to the PML, who
can then execute the traditional code path, which can handle long
messages (multiple chunks, multiple entries into the MPI library)
and execute other "progress" functions.

<p>
The changes are:
<ul>
<li> <b>File</b>: <tt>ompi/mca/btl/btl.h</tt><br>
     <p>
     In this file, we add a <tt>typedef</tt> declaration
     for what a generic <tt>recvi</tt> should look like:
     <pre>
     typedef int (*mca_btl_base_module_recvi_fn_t)();
     </pre>
     <p>
     We also add a <tt>btl_recvi</tt> field so that a BTL
     can register its <tt>recvi</tt> function, if any.
<li> <b>File</b>:<br>
     <tt>ompi/mca/btl/elan/btl_elan.c</tt><br>
     <tt>ompi/mca/btl/gm/btl_gm.c</tt><br>
     <tt>ompi/mca/btl/mx/btl_mx.c</tt><br>
     <tt>ompi/mca/btl/ofud/btl_ofud.c</tt><br>
     <tt>ompi/mca/btl/openib/btl_openib.c</tt><br>
     <tt>ompi/mca/btl/portals/btl_portals.c</tt><br>
     <tt>ompi/mca/btl/sctp/btl_sctp.c</tt><br>
     <tt>ompi/mca/btl/self/btl_self.c</tt><br>
     <tt>ompi/mca/btl/sm/btl_sm.c</tt><br>
     <tt>ompi/mca/btl/tcp/btl_tcp.c</tt><br>
     <tt>ompi/mca/btl/template/btl_template.c</tt><br>
     <tt>ompi/mca/btl/udapl/btl_udapl.c</tt><br>
     <p>
     Each BTL must add a <tt>recvi</tt> field to its module.
     In most cases, BTLs will not define a
     <tt>recvi</tt> function, and the field will be set to
     <tt>NULL</tt>.
<li> <b>File</b>: <tt>ompi/mca/btl/sm/btl_sm.c</tt><br>
     <b>Function</b>: <tt>mca_btl_sm_recvi()</tt><br>
     <p>
     For the <tt>sm</tt> BTL, we set the
     field to the name of the BTL's <tt>recvi</tt>
     function: <tt>mca_btl_sm_recvi</tt>.
     We also add code to define the behavior of the function.
<li> <b>File</b>: <tt>ompi/mca/btl/sm/btl_sm.h</tt><br>
     <b>Prototype</b>: <tt>mca_btl_sm_recvi()</tt><br>
     <p>
     We also add a prototype for the new function.
<li> <b>File</b>: <tt>ompi/mca/pml/ob1/pml_ob1_irecv.c</tt><br>
     <b>Function</b>: <tt>mca_pml_ob1_recv()</tt><br>
     <p>
     As soon as we enter the PML, we try to find and use
     a BTL's <tt>recvi</tt> function.  If we succeed, we
     can exit the PML without having had invoked the heavy-duty
     PML receive-request data structure.  If we fail, we
     simply revert to the traditional PML receive code path,
     without having to worry about any side effects that the
     failed <tt>recvi</tt> might have left.
     <p>
     It is helpful to contain the <tt>recvi</tt> attempt
     in a new <tt>mca_pml_ob1_recvi()</tt> function, which
     we add.
<li> <b>File</b>: <tt>ompi/class/ompi_fifo.h</tt><br>
     <b>Function</b>: <tt>ompi_fifo_probe_tail()</tt><br>
     <p>
     We don't want <tt>recvi</tt> to leave any side effects
     if it encounters a message it is not prepared to handle.
     Therefore, we need to be able to see what is on a FIFO
     without popping that entry off the FIFO.  Therefore, we
     add this new function that probes the FIFO without
     disturbing it.
</ul>

<h3>4.  Introduce an "immediate" data convertor</h3>

<p>
One of our aims here is to reduce
latency by bypassing expensive PML send and receive request data
structures.  Again, these structures are useful when we intend
to complete a message over multiple chunks and multiple MPI
library invocations, but are overkill for a message that can be
completed all at once.

<p>
The same is true of data convertors.  Convertors pack user data
into shared-memory buffers or unpack them on the receive side.
Convertors allow a message to be sent in multiple chunks, over
the course of multiple unrelated MPI calls, and for noncontiguous
datatypes.  These sophisticated data structures are overkill in
some important cases, such as messages that are handled in a
single chunk and in a single MPI call and consist of a single
contiguous block of data.

<p>
While data convertors are not typically too expensive, for
shared-memory latency, where all other costs have been pared back
to a minimum, convertors become noticeable -- around 10%.

<p>
Therefore, we recognize special cases where we can have barebones,
minimal, data convertors.  In these cases, we initialize the
convertor structure minimally -- e.g., a buffer address, a
number of bytes to copy, and a flag indicating that all other
fields are uninitialized.  If this is not possible (e.g., because
a non-contiguous user-derived datatype is being used), the
"immediate" send or receive uses data convertors normally.

<p>
The changes are:
<ul>
<li> <b>File</b>: <tt>ompi/datatype/convertor.h</tt><br>
     <p>
     First, we add to the convertor flags a new flag
     <pre>
     #define CONVERTOR_IMMEDIATE        0x10000000
     </pre>
     to identify a data convertor that has been initialized
     only minimally.
     <p>
     Further, we add three new functions:
     <ul>
     <li> <tt>ompi_convertor_immediate()</tt>:
          try to form an "immediate" convertor
     <li> <tt>ompi_convertor_immediate_pack()</tt>:
          use an "immediate" convertor to pack
     <li> <tt>ompi_convertor_immediate_unpack()</tt>:
          use an "immediate" convertor to unpack
     </ul>
<li> <b>File</b>: <tt>ompi/mca/btl/sm/btl_sm.c</tt><br>
     <b>Function</b>: <tt>mca_btl_sm_sendi</tt> and
                      <tt>mca_btl_sm_recvi</tt><br>
     <p>
     Use the "immediate" convertor routines to pack/unpack.
<li> <b>File</b>: <tt>ompi/mca/pml/ob1/pml_ob1_isend.c</tt> and
                  <tt>ompi/mca/pml/ob1/pml_ob1_irecv.c</tt><br>
     <p>
     Have the PML fast path try to construct an "immediate"
     convertor.
</ul>

<h3>5.  Introduce an "immediate" <tt>MPI_Sendrecv()</tt></h3>

<p>
The optimizations described here should be extended to
<tt>MPI_Sendrecv()</tt> operations.  In particular, while
<tt>MPI_Send()</tt> and <tt>MPI_Recv()</tt> optimizations
improve HPCC "pingpong" latencies, we need <tt>MPI_Sendrecv()</tt>
optimizations to improve HPCC "ring" latencies.

<p>
One challenge is the current OMPI MPI/PML interface.  Today,
the OMPI MPI layer breaks a <tt>Sendrecv</tt> call up into
<tt>Irecv</tt>/<tt>Send</tt>/<tt>Wait</tt>.  This would seem
to defeat fast-path optimizations at least for the receive.
Some options include:
<ul>
<li> allow the MPI layer to call "fast path" operations
<li> have the PML layer provide a <tt>Sendrecv</tt> interface
<li> have the MPI layer emit <tt>Isend</tt>/<tt>Recv</tt>/<tt>Wait</tt>
     and see how effectively one can optimize the <tt>Isend</tt>
     operation in the PML for the "immediate" case
</ul>

<h1>Performance Measurements:  Before Optimization</h1>

<p>
More measurements are desirable, but here is a sampling of data
that I happen to have from platforms that I happened to have access
to.  This data characterizes OMPI today, without fast-path optimizations.

<h3>OMPI versus Other MPIs</h3>

<p>
Here are pingpong latencies, in &micro;sec, measured with
the OSU latency test for 0 and 8 bytes.
<pre>
                       0-byte  8-byte

     OMPI              0.74    0.84  &micro;sec
     MPICH             0.70    0.77
</pre>

<p>
We see OMPI lagging MPICH.

<p>
Scali and HP MPI are presumably <i>considerably</i> faster,
but I have no recent data.

<p>
Among other things, one can see that there is about a 10%
penalty for invoking data convertors.

<h3>Scaling with Process Count</h3>

<p>
Here are HPCC pingpong latencies from a different, older,
platform.  Though only two processes participate in the pingpong,
the HPCC test reports that latency for different numbers of
processes in the job.  We see that OMPI performance slows
dramatically as the number of processes is increased.
Scali (data not available) does not show such a slowdown.
<pre>
     np    min    avg    max

      2   2.688  2.719  2.750 usec
      4   2.812  2.875  3.000
      6   2.875  3.050  3.250
      8   2.875  3.299  3.625
     10   2.875  3.447  3.812
     12   3.063  3.687  4.375
     16   2.687  4.093  5.063
     20   2.812  4.492  6.000
     24   3.125  5.026  6.562
     28   3.250  5.326  7.250
     32   3.500  5.830  8.375
     36   3.750  6.199  8.938
     40   4.062  6.753 10.187
</pre>

<p>
The data show large min-max variations in latency.  These variations
happen to depend on sender and receiver ranks.  Here are latencies
(rounded down to the nearst &micro;sec) for the <tt>np</tt>=40 case
as a function of sender and receiver rank:
<pre>
                                    ---------   rank of one process   ----------->

                     - 9 9 9 9 9 9 9 9 9 9 9 9 9 8 8 7 7 7 7 7 6 7 8 7 7 7 7 7 6 7 7 7 6 7 7 7 7 6 7
                     9 - 9 9 9 9 9 9 9 9 8 8 8 8 8 8 7 7 7 7 8 7 7 7 7 7 6 7 7 7 7 7 6 7 6 7 7 7 7 7
                     9 9 - 9 9 9 9 9 9 9 8 9 7 7 7 8 9 7 7 7 7 7 7 7 7 7 6 7 8 6 7 7 7 7 7 7 6 7 7 6
                     9 910 - 9 9 9 8 8 8 7 9 7 8 7 7 7 8 8 7 7 8 7 7 6 7 7 7 7 7 6 6 7 6 7 7 7 7 7 7
                     9 9 9 9 - 9 9 9 8 8 8 7 7 8 7 8 8 8 7 7 7 8 8 7 6 6 7 8 7 7 6 6 7 7 6 7 7 6 7 7
                     9 9 9 9 9 - 9 9 9 8 7 7 8 8 8 7 8 7 7 8 8 6 7 7 6 7 7 7 7 6 6 6 7 7 7 7 6 6 6 6
                     9 9 9 9 9 9 - 9 9 8 9 8 8 8 7 8 8 7 8 6 7 7 7 7 7 7 6 6 7 7 6 7 6 7 6 7 7 6 7 6
                     9 9 9 9 9 9 9 - 9 8 8 8 8 9 8 7 8 7 8 7 7 6 7 7 7 7 7 6 7 7 7 7 7 7 7 7 6 7 7 7
                     9 9 8 9 9 8 8 9 - 7 9 9 9 7 7 7 8 8 8 7 7 7 6 7 7 7 6 7 6 6 6 6 7 6 7 6 6 6 7 6
                     9 9 9 9 7 7 8 8 8 - 8 9 8 7 7 7 8 7 7 7 7 7 7 7 7 7 6 6 7 6 7 6 7 7 6 7 7 6 6 6
                     9 9 9 9 9 8 9 9 7 9 - 8 7 8 7 7 6 8 7 7 7 6 7 7 7 7 7 7 6 6 6 6 7 7 7 6 6 7 7 6
           |         9 8 8 9 8 7 8 8 8 8 7 - 9 7 7 8 7 7 7 7 7 7 7 6 6 6 7 6 7 6 6 6 7 7 6 6 7 6 7 5
           |         8 8 9 8 9 7 7 8 8 7 7 8 - 7 8 9 8 7 7 7 6 6 7 7 7 7 7 6 7 6 7 7 7 6 7 6 6 6 6 6
           |         8 8 8 8 8 9 7 8 8 7 7 7 7 - 8 8 8 8 7 7 7 6 7 7 7 6 6 6 6 7 7 7 7 6 6 6 6 6 5 6
           |         6 7 9 9 9 7 7 8 7 7 8 7 8 7 - 6 8 7 7 7 8 7 7 7 7 6 6 7 7 7 6 7 6 7 7 6 6 6 4 5
           |         7 7 6 8 7 8 8 8 7 7 8 7 8 9 7 - 7 7 7 8 7 7 6 7 7 7 7 6 7 6 7 6 6 6 6 6 6 5 5 5
                     7 9 7 8 9 7 8 7 8 8 8 7 7 7 7 7 - 7 8 7 8 7 7 7 7 7 6 7 7 6 6 7 6 6 6 4 5 5 5 5
         rank        8 8 8 7 9 7 8 7 7 7 8 7 7 7 7 7 8 - 7 7 7 7 7 7 7 6 7 7 7 6 6 7 7 6 6 6 6 5 4 5
          of         7 7 7 8 6 8 6 7 8 7 6 7 7 7 7 7 7 7 - 7 7 7 7 7 7 6 6 7 6 6 6 6 6 6 6 6 6 5 5 4
         the         8 7 8 8 7 8 8 7 7 7 7 7 7 7 7 7 7 7 8 - 7 7 7 7 7 7 7 6 7 6 6 6 6 5 5 5 5 5 4 4
        other        8 7 7 8 7 7 7 7 8 7 7 7 8 7 7 7 7 7 7 7 - 7 7 6 7 7 7 7 6 6 7 6 6 6 5 5 5 5 5 5
       process       7 6 6 7 7 7 8 7 7 6 6 7 6 7 6 7 8 7 7 8 7 - 7 7 7 7 7 7 6 6 6 6 6 5 5 5 4 4 4 4
                     7 8 7 7 7 7 7 7 8 8 7 7 7 7 7 6 7 6 7 7 7 7 - 7 7 7 7 6 6 6 4 5 5 6 4 4 4 6 5 5
           |         7 6 7 7 7 6 6 7 6 8 7 8 7 7 7 7 7 7 7 7 7 7 7 - 7 6 6 6 6 5 5 5 6 5 4 4 5 5 4 4
           |         7 7 7 6 7 7 7 7 8 7 6 7 6 6 7 6 6 6 6 7 6 7 7 7 - 6 6 6 5 5 5 5 5 4 4 5 6 4 5 4
           |         6 7 7 7 7 7 7 7 8 8 8 7 7 7 6 7 7 7 6 6 7 7 7 6 5 - 6 5 6 6 5 5 5 4 5 5 5 4 4 4
           |         7 7 6 7 7 7 7 8 7 7 7 7 6 7 7 7 7 7 6 7 6 6 6 5 5 4 - 5 5 5 4 5 5 5 4 5 5 4 4 4
           |         7 7 7 8 7 6 7 6 7 7 7 7 7 6 7 7 7 7 6 6 6 6 6 4 6 4 5 - 5 4 4 5 4 4 5 5 5 4 4 4
           V         7 6 8 7 7 6 6 7 6 7 7 7 7 7 6 7 7 6 6 6 7 6 6 5 6 5 5 4 - 4 5 5 4 4 4 4 4 4 4 5
                     6 6 6 6 6 6 7 8 7 6 7 7 7 7 6 6 7 6 6 5 5 6 6 5 5 6 5 5 4 - 5 4 4 4 4 4 4 6 4 4
                     6 6 6 7 6 7 7 7 7 6 7 7 6 6 7 7 7 6 6 6 6 6 5 4 4 4 5 4 4 4 - 5 5 4 4 4 4 4 4 4
                     7 6 7 6 6 6 7 7 7 6 7 7 6 6 6 7 6 6 6 5 6 5 5 5 5 4 4 4 5 5 6 - 4 4 4 4 4 4 4 4
                     7 7 6 6 6 6 6 7 7 7 6 7 6 7 7 7 6 6 5 5 4 5 5 4 4 4 4 5 4 4 5 4 - 4 4 4 5 4 4 4
                     7 6 7 6 6 6 6 6 7 7 7 7 6 7 6 6 6 6 6 5 5 4 5 4 4 4 4 4 4 4 4 4 4 - 5 4 4 4 4 5
                     7 6 7 7 7 8 7 7 6 6 6 7 6 6 6 6 5 5 4 5 5 5 4 4 5 4 4 4 4 4 4 4 4 4 - 4 4 4 4 4
                     7 6 7 6 7 6 6 6 6 6 7 7 6 6 6 6 5 5 5 4 4 4 4 4 5 4 4 4 4 4 4 4 4 4 4 - 4 4 4 4
                     8 6 6 7 7 7 7 8 7 6 6 7 6 6 6 6 5 4 5 4 5 5 4 5 4 4 5 4 4 4 4 5 5 4 4 4 - 4 4 4
                     7 7 7 6 7 7 6 7 6 6 7 6 6 6 6 5 4 5 4 5 4 4 4 4 4 4 4 4 4 5 4 4 4 4 4 4 4 - 4 4
                     7 7 7 7 7 6 7 7 6 7 7 7 7 5 4 5 5 4 5 5 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 - 4
                     7 6 7 7 6 7 6 6 6 6 6 6 6 6 5 5 6 4 4 5 4 5 4 5 4 4 4 4 5 4 4 4 5 4 4 4 4 4 4 -
</pre>

<p>
We see that there is a strong dependence on process rank.
Presumably, this is due to our polling loop.  That is, even
if we receive our message, we still have to poll the higher
numbered ranks before we complete the receive operation.

<h1>Performance Measurements:  After Optimization</h1>

<p>
We consider three metrics:
<ul>
<li> HPCC "pingpong" latency
<li> OSU latency (0 bytes)
<li> OSU latency (8 bytes)
</ul>

<p>
We report data for:
<ul>
<li> OMPI "out of the box"
<li> after implementation of steps 1-2 (send side)
<li> after implementation of steps 1-3 (send and receive sides)
<li> after implementation of steps 1-4 (send and receive sides, plus data convertor)
</ul>

<p>
The data are from machines that I just happened to have
available.

<p>
There is a bit of noise in these results, but the implications,
based on these and other measurements, are:
<ul>
<li> There is some improvement from the send side.
<li> There is more improvement from the receive side.
<li> The data convertor improvements help a little more (a few percent)
     for non-null messages.
<li> The degree of improvement depends on how fast the CPU is relative
     to the memory --  that is, how important software overheads are
     versus hardware latency.
     <ul>
     <li> If the CPU is fast (and hardware latency is the bottleneck),
          these improvements are less -- say, 20-30%.
     <li> If the CPU is slow (and software costs are the bottleneck),
          the improvements are more dramatic --
          nearly a factor of 2 for non-null messages.
     </ul>
<li> As <tt>np</tt> is increased, latency stays flat.  This can
     represent a 10&times; or more improvement over out-of-the-box OMPI.
</ul>

<h3>V20z</h3>

<p>
Here are results for a V20z (<tt>burl-ct-v20z-11</tt>):
<pre>
                  HPCC OSU0 OSU8

   out of box      838  770  850   nsec
   Steps 1-2       862  770  860
   Steps 1-3       670  610  670
   Steps 1-4       642  580  610
</pre>

<h3>F6900</h3>

<p>
Here are np=2 results from a 1.05-GHz (1.2?) UltraSPARC-IV F6900 server:
<pre>
                  HPCC OSU0 OSU8

   out of box     3430 2770 3340   nsec
   Steps 1-2      2940 2660 3090
   Steps 1-3      1854 1650 1880
   Steps 1-4      1660 1640 1750
</pre>

<p>
Here is the dependence on process count using HPCC:
<pre>
                   OMPI
             "out of the box"            optimized
 comm       -----------------       -----------------
 size         min   avg   max         min   avg   max

    2        2688  2719  2750        1750  1781  1812   nsec
    4        2812  2875  3000        1750  1802  1812
    6        2875  3050  3250        1687  1777  1812
    8        2875  3299  3625        1687  1773  1812
   10        2875  3447  3812        1687  1789  1812
   12        3063  3687  4375        1687  1796  1813
   16        2687  4093  5063        1500  1784  1875
   20        2812  4492  6000        1687  1788  1875
   24        3125  5026  6562        1562  1776  1875
   28        3250  5326  7250        1500  1764  1813
   32        3500  5830  8375        1562  1755  1875
   36        3750  6199  8938        1562  1755  1875
   40        4062  6753 10187        1500  1742  1812
</pre>

<p>
Note:
<ul>
<li> At <tt>np</tt>=2, these optimizations lead to a 2&times;
     improvement in shared-memory latency.
<li> Non-null messages incur more than a 10% penalty,
     which is largely addressed by our data-convertor
     optimization.
<li> At larger <tt>np</tt>, we maintain our fast performance
     while OMPI "out of the box" keeps slowing down more and
     more and more.
</ul>

<h3>M9000</h3>

<p>
Here are results for a 128-core M9000.  I think the system has:
<ul>
<li> 2 hardware threads per core (but we only use one hardware thread per core)
<li> 4 cores per socket
<li> 4 sockets per board
<li> 4 boards per (half?)
<li> 2 (halves?) per system
</ul>

<p>
As one separates the sender and receiver, hardware latency increases.
Here is the hierarchy:
<pre>
                     latency (nsec)       bandwidth (Mbyte/sec)
                 out-of-box  fastpath     out-of-box  fastpath
   (on-socket?)      810        480          2000       2000
    (on-board?)     2050       1820          1900       1900
        (half?)     3030       2840          1680       1680
                    3150       2960          1660       1660
</pre>

<p>
Note:
<ul>
<li> Latency benefits some hundreds of nsecs with fastpath.
<li> This latency improvement is striking when the hardware
     latency is small, but less noticeable as as the hardware
     latency increases.
<li> Bandwidth is not very sensitive to hardware latency
     (due to prefetch) and not at all to fast-path optimizations.
</ul>

<p>
Here are HPCC pingpong latencies for increasing process counts:
<pre>
             out-of-box             fastpath
     np  -----------------     -----------------
         min    avg    max     min    avg    max

      2  812    812    812     499    499    499
      4  874    921    999     437    494    562
      8  937   1847   2624     437   1249   1874
     16 1062   2430   2937     437   1557   1937
     32 1562   3850   5437     375   2211   2875
     64 2687   8329  15874     437   2535   3062
     80 3499  16854  41749     374   2647   3437
     96 3812  31159 100812     374   2717   3437
    128 5187 125774 335187     437   2793   3499
</pre>

<p>
The improvements are tremendous:
<ul>
<li> At low <tt>np</tt>, latencies are low since sender and
     receiver can be colocated.  Nevertheless, fast-path
     optimizations provided a nearly 2&times; improvement.
<li> As <tt>np</tt> increases, fast-path latency also increases,
     but this is due to higher hardware latencies.  Indeed,
     the "min" numbers even drop a little.  The "max" fast-path
     numbers basically only represent the increase in hardware
     latency.
<li> As <tt>np</tt> increases, OMPI "out of the box" latency
     suffers catastrophically.  Not only is there the issue
     of more connections to poll, but the polling behaviors
     of non-participating processes wreak havoc on the performance
     of measured processes.
     <p>
     We can separate the two sources of latency degradation by
     putting the <tt>np</tt>-2 non-participating processes to sleep.
     In that case, latency only rises to about 10-20 &micro;sec.
     So, polling of many connections causes a substantial rise
     in latency, while the disturbance of hard-poll loops on
     system performance is responsible for even more degradation.
</ul>

<p>
Actually, even bandwidth benefits:
<pre>
            out-of-box          fastpath
     np   --------------      -------------
           min  avg  max      min  avg  max

      2   2015 2034 2053     2028 2039 2051
      4   2002 2043 2077     1993 2032 2065
      8   1888 1959 2035     1897 1969 2088
     16   1863 1934 2046     1856 1937 2066
     32   1626 1796 2038     1581 1798 2068
     64   1557 1709 1969     1591 1729 2084
     80   1439 1619 1902     1561 1706 2059
     96   1281 1452 1722     1500 1689 2005
    128    677  835 1276      893 1671 1906
</pre>

<p>
Here, we see that even bandwidth suffers "out of the box"
as the number of hard-spinning processes increases.  Note
the degradation in "out-of-box" average bandwidths as <tt>np</tt>
increases.  In contrast, the "fastpath" average holds up well.
(The <tt>np</tt>=128 min fastpath number 893 Mbyte/sec is poor,
but analysis shows it to be a measurement outlier.)

<h3><tt>MPI_Sendrecv()</tt></h3>

<p>
We should also get these optimizations into <tt>MPI_Sendrecv()</tt> in
order to speed up the HPCC "ring" results.  E.g., here are latencies
in &micro;secs for a performance measurement based on HPCC "ring" tests.
<pre>
==================================================
np=64
                                            natural random

"out of box"                                   11.7   10.9
fast path                                       8.3    6.2
fast path and 100 warmups                       3.5    3.6
==================================================
np=128 latency
                                            natural random

"out of box"                                  242.9  226.1
fast path                                      56.6   37.0
fast path and 100 warmups                       4.2    4.1
==================================================
</pre>

<p>
There happen to be two problems here:
<ul>
<li> We need fast-path optimizations in <tt>MPI_Sendrecv()</tt>
     for improved performance.
<li> The MPI collective operation preceding the "ring" measurement
     has "ragged" exit times.  So, the "ring" timing starts well
     before all of the processes have entered that measurement.
     This is a separate OMPI performance problem that must be
     handled as well for good HPCC results.
</ul>

<h1>Open Issues</h1>

<p>
Here are some open issues:
<ul>
<li> <b>Side effects</b>.  Should the <tt>sendi</tt> and
     <tt>recvi</tt> functions leave any side effects if they
     do not complete the specified operation?
     <p>
     To my taste, they should not.
     <p>
     Currently, however, the <tt>sendi</tt> function is expected
     to allocate a descriptor if it can, even if it cannot
     complete the entire send operation.
<li> <b><tt>recvi</tt>:  BTL and match header</b>.
     An in-coming message starts
     with a "match header", with such data as MPI source rank,
     MPI communicator, and MPI tag for performing MPI message
     matching.  Presumably, the BTL knows nothing about this
     header.  Message matching is performed, for example, via
     PML callback functions.  We are aggressively trying to
     optimize this code path, however, so we should consider
     alternatives to that approach.
     <p>
     One alternative is simply for the BTL to perform a byte-by-byte
     comparison between the received header and the specified
     header.  The PML already tells the BTL how many bytes are
     in the header.
     <p>
     One problem with this approach is that the fast path would
     not be able to support the wildcard tag <tt>MPI_ANY_TAG</tt>.
     <p>
     Further, it leaves open the question how one extracts information
     (such as source or tag) from this header for the <tt>MPI_Status</tt>
     structure.
     <p>
     We can imagine a variety of solutions here, but so far
     we've implemented a very simple (even if architecturally
     distasteful) solution:  we hardwire information (previously
     private to the PML) about the match header into the BTL.
     <p>
     That approach can be replaced with other solutions.
<li> <b><tt>MPI_Sendrecv()</tt> support</b>.  As discussed
     earlier, we should support fast-path optimizations for
     "immediate" send-receive operations.  Again, this may
     entail some movement of current OMPI architectural
     boundaries.
</ul>

<p>
Other optimizations that are needed for good HPCC results
include:
<ul>
<li> reducing the degradation due to hard spin waits
<li> improving the performance of collective operations
     (which "artificially" degrade HPCC "ring" test results)
</ul>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5223.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe reply:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe reply:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
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
