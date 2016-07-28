<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 17 16:20:19 2009" -->
<!-- isoreceived="20090117212019" -->
<!-- sent="Sat, 17 Jan 2009 16:20:09 -0500" -->
<!-- isosent="20090117212009" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="C597B5B9.2D4DF%rlgraham_at_ornl.gov" -->
<!-- charset="Big5" -->
<!-- inreplyto="49717F26.2000402_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-17 16:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5226.php">Jeremy Espenshade: "[OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<li><strong>Previous message:</strong> <a href="5224.php">Eugene Loh: "[OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5224.php">Eugene Loh: "[OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5228.php">Terry Dontje: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5228.php">Terry Dontje: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, the performance improvements look really nice.
<br>
A few questions:
<br>
&nbsp;&nbsp;- How much of an abstraction violation does this introduce ?  This looks
<br>
like the btl needs to start &#161;&#167;knowing&#161;&#168; about MPI level semantics.  Currently,
<br>
the btl purposefully is ulp agnostic.  I ask for 2 reasons
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- you mention having the btl look at the match header (if I
<br>
understood correctly)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- not clear to me what you mean by returning the header to the list
<br>
if the irecv does not complete.  If it does not complete, why not just pass
<br>
the header back for further processing, if all this is happening at the pml
<br>
level ?
<br>
&nbsp;&nbsp;- The measurements seem to be very dual process specific.  Have you looked
<br>
at the impact of these changes on other applications at the same process
<br>
count ?  &#161;&#167;Real&#161;&#168; apps would be interesting, but even hpl would be a good
<br>
start. 
<br>
&nbsp;&nbsp;The current sm implementation is aimed only at small smp node count, which
<br>
was really the only relevant type of systems when this code was written 5
<br>
years ago.  For large core counts there is a rather simple change that could
<br>
be put in that is simple to implement, and will give you flat scaling for
<br>
the sort of tests you are running.  If you replace the fifo&#161;&#166;s with a single
<br>
link list per process in shared memory, with senders to this process adding
<br>
match envelopes atomically, with each process reading its own link list
<br>
(multiple writers and single reader in non-threaded situation) there will be
<br>
only one place to poll, regardless of the number of procs involved in the
<br>
run.  One still needs other optimizations to lower the absolute latency &#161;V
<br>
perhaps what you have suggested.  If one really has all N procs trying to
<br>
write to the same fifo at once, performance will stink because of
<br>
contention, but most apps don&#161;&#166;t have that behaviour.
<br>
<p>Rich
<br>
<p><p>On 1/17/09 1:48 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RFC: sm Latency
</span><br>
<span class="quotelev1">&gt; WHAT:  Introducing optimizations to reduce ping-pong latencies over the sm
</span><br>
<span class="quotelev1">&gt; BTL. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:  This is a visible benchmark of MPI performance. We can improve
</span><br>
<span class="quotelev1">&gt; shared-memory latencies from 30% (if hardware latency is the limiting factor)
</span><br>
<span class="quotelev1">&gt; to 2&#161;&#209; or more (if MPI software overhead is the limiting factor).  At high
</span><br>
<span class="quotelev1">&gt; process counts, the improvement can be 10&#161;&#209; or more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE:  Somewhat in the sm BTL, but very importantly also in the PML.  Changes
</span><br>
<span class="quotelev1">&gt; can be seen in ssh://www.open-mpi.org/~tdd/hg/fastpath.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:  Upon acceptance.  In time for OMPI 1.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT:  February 6, 2009.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This RFC is being submitted by eugene.loh_at_sun.com.
</span><br>
<span class="quotelev1">&gt; WHY (details)
</span><br>
<span class="quotelev1">&gt; The sm BTL typically has the lowest hardware latencies of any BTL.  Therefore,
</span><br>
<span class="quotelev1">&gt; any OMPI software overhead we otherwise tolerate becomes glaringly obvious in
</span><br>
<span class="quotelev1">&gt; sm latency measurements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular, MPI pingpong latencies are oft-cited performance benchmarks,
</span><br>
<span class="quotelev1">&gt; popular indications of the quality of an MPI implementation. Competitive
</span><br>
<span class="quotelev1">&gt; vendor MPIs optimize this metric aggressively, both for np=2 pingpongs and for
</span><br>
<span class="quotelev1">&gt; pairwise pingpongs for high np (like the popular HPCC performance test suite).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Performance reported by HPCC include:
</span><br>
<span class="quotelev1">&gt; *  MPI_Send()/MPI_Recv() pingpong latency.
</span><br>
<span class="quotelev1">&gt; *  MPI_Send()/MPI_Recv() pingpong latency as the number of connections grows.
</span><br>
<span class="quotelev1">&gt; *  MPI_Sendrecv() latency.
</span><br>
<span class="quotelev1">&gt; The slowdown of latency as the number of sm connections grows becomes
</span><br>
<span class="quotelev1">&gt; increasingly important on large SMPs and ever more prevalent many-core nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other MPI implementations, such as Scali and Sun HPC ClusterTools 6,
</span><br>
<span class="quotelev1">&gt; introduced such optimizations years ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Performance measurements indicate that the speedups we can expect in OMPI with
</span><br>
<span class="quotelev1">&gt; these optimizations range from 30% (np=2 measurements where hardware is the
</span><br>
<span class="quotelev1">&gt; bottleneck) to 2&#161;&#209; (np=2 measurements where software is the bottleneck) to over
</span><br>
<span class="quotelev1">&gt; 10&#161;&#209; (large np). 
</span><br>
<span class="quotelev1">&gt; WHAT (details)
</span><br>
<span class="quotelev1">&gt; Introduce an optimized &quot;fast path&quot; for &quot;immediate&quot; sends and receives. Several
</span><br>
<span class="quotelev1">&gt; actions are recommended here.
</span><br>
<span class="quotelev1">&gt; 1.  Invoke the sm BTL sendi (send-immediate) function
</span><br>
<span class="quotelev1">&gt; Each BTL is allowed to define a &quot;send immediate&quot; (sendi) function.  A BTL is
</span><br>
<span class="quotelev1">&gt; not required to do so, however, in which case the PML calls the standard BTL
</span><br>
<span class="quotelev1">&gt; send function. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A sendi function has already been written for sm, but it has not been used due
</span><br>
<span class="quotelev1">&gt; to insufficient testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The function should be reviewed, commented in, tested, and used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes are: 
</span><br>
<span class="quotelev1">&gt; *  File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt; *  Declaration/Definition: mca_btl_sm
</span><br>
<span class="quotelev1">&gt; *  
</span><br>
<span class="quotelev1">&gt; * 
</span><br>
<span class="quotelev1">&gt; *  Comment in the mca_btl_sm_sendi symbol instead of the NULL placeholder so
</span><br>
<span class="quotelev1">&gt; that the already existing sendi function will be discovered and used by the
</span><br>
<span class="quotelev1">&gt; PML. 
</span><br>
<span class="quotelev1">&gt; * 
</span><br>
<span class="quotelev1">&gt; *  Function: mca_btl_sm_sendi()
</span><br>
<span class="quotelev1">&gt; *  
</span><br>
<span class="quotelev1">&gt; * 
</span><br>
<span class="quotelev1">&gt; *  Review the existing sm sendi code. My suggestions include:
</span><br>
<span class="quotelev2">&gt;&gt; *  Drop the test against the eager limit since the PML calls this function
</span><br>
<span class="quotelev2">&gt;&gt; only when the eager limit is respected.
</span><br>
<span class="quotelev2">&gt;&gt; *  Make sure the function has no side effects in the case where it does not
</span><br>
<span class="quotelev2">&gt;&gt; complete.  See Open Issues &lt;#OpenIssues&gt; , the final section of this
</span><br>
<span class="quotelev2">&gt;&gt; document, for further discussion of &quot;side effects&quot;.
</span><br>
<span class="quotelev1">&gt; *  
</span><br>
<span class="quotelev1">&gt; * 
</span><br>
<span class="quotelev1">&gt; *  Mostly, I have reviewed the code and believe it's already suitable for use.
</span><br>
<span class="quotelev2">&gt;&gt; 2.  Move the sendi call up higher in the PML
</span><br>
<span class="quotelev2">&gt;&gt; Profiling pingpong tests, we find that not so much time is spent in the sm
</span><br>
<span class="quotelev2">&gt;&gt; BTL.  Rather, the PML consumes a lot of time preparing a &quot;send request&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; While these complex data structures are needed to track progress of a long
</span><br>
<span class="quotelev2">&gt;&gt; message that will be sent in multiple chunks and progressed over multiple
</span><br>
<span class="quotelev2">&gt;&gt; entries to and exits from the MPI library, managing this large data structure
</span><br>
<span class="quotelev2">&gt;&gt; for an &quot;immediate&quot; send (one chunk, one call) is overkill.  Latency can be
</span><br>
<span class="quotelev2">&gt;&gt; reduced noticeably if one bypasses this data structure. This means invoking
</span><br>
<span class="quotelev2">&gt;&gt; the sendi function as early as possible in the PML.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The changes are:
</span><br>
<span class="quotelev2">&gt;&gt; *  File: ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev2">&gt;&gt; *  Function: mca_pml_ob1_send()
</span><br>
<span class="quotelev2">&gt;&gt; *  
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; *  As soon as we enter the PML send function, try to call the BTL sendi
</span><br>
<span class="quotelev2">&gt;&gt; function.  If this fails for whatever reason, continue with the traditional
</span><br>
<span class="quotelev2">&gt;&gt; PML send code path. If it succeeds, then exit the PML and return up to the
</span><br>
<span class="quotelev2">&gt;&gt; calling layer without having to have wrestled with the PML send-request data
</span><br>
<span class="quotelev2">&gt;&gt; structure. 
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; *  For better software management, the attempt to find and use a BTL sendi
</span><br>
<span class="quotelev2">&gt;&gt; function can be organized into a new mca_pml_ob1_sendi() function.
</span><br>
<span class="quotelev2">&gt;&gt; *  File: ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev2">&gt;&gt; *  Function: mca_pml_ob1_send_request_start_copy()
</span><br>
<span class="quotelev2">&gt;&gt; *  
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; *  Remove this attempt to call the BTL sendi function, since we've already
</span><br>
<span class="quotelev2">&gt;&gt; tried to do so higher up in the PML.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.  Introduce a BTL recvi call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While optimizing the send side of a pingpong operation is helpful, it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; less than half the job.  At least as many savings are possible on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive side. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Corresponding to what we've done on the send side, on the receive side we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can attempt, as soon as we've entered the PML, to call a BTL recvi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (receive-immediate) function, bypassing the creation of a complex &quot;receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request&quot; data structure that is not needed if the receive can be completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Further, we can perform directed polling.  OMPI pingpong latencies grow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; significantly as the number of sm connections increases, while competitors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Scali, in any case) show absolutely flat latencies with increasing np.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recvi function could check one connection for the specified receive and exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quickly if that message if found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A BTL is granted considerable latitude in the proposed recvi functions.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; principle requirement is that the recvi either completes the specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive completely or else behaves as if the function was not called at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (That is, one should be able to revert to the traditional code path without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having to worry about any recvi side effects.  So, for example, if the recvi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function encounters any fragments being returned to the process, it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; permitted to return those fragments to the free list.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While those are the &quot;hard requirements&quot; for recvi, there are also some loose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guidelines.  Mostly, it is understood that recvi should return &quot;quickly&quot; (a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loose term to be interpreted by the BTL).  If recvi can quickly complete the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified receive, great!  If not, it should return control to the PML, who
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can then execute the traditional code path, which can handle long messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (multiple chunks, multiple entries into the MPI library) and execute other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;progress&quot; functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The changes are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  File: ompi/mca/btl/btl.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  In this file, we add a typedef declaration for what a generic recvi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should look like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *      typedef int (*mca_btl_base_module_recvi_fn_t)();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  We also add a btl_recvi field so that a BTL can register its recvi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function, if any.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  File: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/elan/btl_elan.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/gm/btl_gm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/mx/btl_mx.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/ofud/btl_ofud.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/portals/btl_portals.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/template/btl_template.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  ompi/mca/btl/udapl/btl_udapl.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  Each BTL must add a recvi field to its module. In most cases, BTLs will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not define a recvi function, and the field will be set to NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  Function: mca_btl_sm_recvi()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  For the sm BTL, we set the field to the name of the BTL's recvi function:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_sm_recvi. We also add code to define the behavior of the function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  File: ompi/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  Prototype: mca_btl_sm_recvi()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  We also add a prototype for the new function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  File: ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  Function: mca_pml_ob1_recv()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  As soon as we enter the PML, we try to find and use a BTL's recvi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function.  If we succeed, we can exit the PML without having had invoked the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heavy-duty PML receive-request data structure.  If we fail, we simply revert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the traditional PML receive code path, without having to worry about any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side effects that the failed recvi might have left.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  It is helpful to contain the recvi attempt in a new mca_pml_ob1_recvi()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function, which we add.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  File: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  Function: ompi_fifo_probe_tail()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  We don't want recvi to leave any side effects if it encounters a message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is not prepared to handle. Therefore, we need to be able to see what is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a FIFO without popping that entry off the FIFO.  Therefore, we add this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new function that probes the FIFO without disturbing it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.  Introduce an &quot;immediate&quot; data convertor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One of our aims here is to reduce latency by bypassing expensive PML send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and receive request data structures.  Again, these structures are useful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when we intend to complete a message over multiple chunks and multiple MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; library invocations, but are overkill for a message that can be completed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all at once. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The same is true of data convertors.  Convertors pack user data into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared-memory buffers or unpack them on the receive side. Convertors allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a message to be sent in multiple chunks, over the course of multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unrelated MPI calls, and for noncontiguous datatypes.  These sophisticated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data structures are overkill in some important cases, such as messages that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are handled in a single chunk and in a single MPI call and consist of a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; single contiguous block of data.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While data convertors are not typically too expensive, for shared-memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latency, where all other costs have been pared back to a minimum,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; convertors become noticeable -- around 10%.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Therefore, we recognize special cases where we can have barebones, minimal,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data convertors.  In these cases, we initialize the convertor structure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; minimally -- e.g., a buffer address, a number of bytes to copy, and a flag
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; indicating that all other fields are uninitialized.  If this is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible (e.g., because a non-contiguous user-derived datatype is being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used), the &quot;immediate&quot; send or receive uses data convertors normally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The changes are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  File: ompi/datatype/convertor.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  First, we add to the convertor flags a new flag
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *      #define CONVERTOR_IMMEDIATE        0x10000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  to identify a data convertor that has been initialized only minimally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  Further, we add three new functions:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  ompi_convertor_immediate(): try to form an &quot;immediate&quot; convertor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  ompi_convertor_immediate_pack(): use an &quot;immediate&quot; convertor to pack
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  ompi_convertor_immediate_unpack(): use an &quot;immediate&quot; convertor to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unpack 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  File: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  Function: mca_btl_sm_sendi and mca_btl_sm_recvi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  Use the &quot;immediate&quot; convertor routines to pack/unpack.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  File: ompi/mca/pml/ob1/pml_ob1_isend.c and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  Have the PML fast path try to construct an &quot;immediate&quot; convertor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5.  Introduce an &quot;immediate&quot; MPI_Sendrecv()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The optimizations described here should be extended to MPI_Sendrecv()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operations.  In particular, while MPI_Send() and MPI_Recv() optimizations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; improve HPCC &quot;pingpong&quot; latencies, we need MPI_Sendrecv() optimizations to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; improve HPCC &quot;ring&quot; latencies.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One challenge is the current OMPI MPI/PML interface.  Today, the OMPI MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; layer breaks a Sendrecv call up into Irecv/Send/Wait.  This would seem to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; defeat fast-path optimizations at least for the receive. Some options
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; include: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  allow the MPI layer to call &quot;fast path&quot; operations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  have the PML layer provide a Sendrecv interface
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  have the MPI layer emit Isend/Recv/Wait and see how effectively one can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; optimize the Isend operation in the PML for the &quot;immediate&quot; case
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Performance Measurements:  Before Optimization
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; More measurements are desirable, but here is a sampling of data that I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happen to have from platforms that I happened to have access to.  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data characterizes OMPI today, without fast-path optimizations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI versus Other MPIs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are pingpong latencies, in &#163;gsec, measured with the OSU latency test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for 0 and 8 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        0-byte  8-byte
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      OMPI              0.74    0.84  &#163;gsec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPICH             0.70    0.77
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We see OMPI lagging MPICH.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scali and HP MPI are presumably considerably faster, but I have no recent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Among other things, one can see that there is about a 10% penalty for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; invoking data convertors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scaling with Process Count
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are HPCC pingpong latencies from a different, older, platform.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Though only two processes participate in the pingpong, the HPCC test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reports that latency for different numbers of processes in the job.  We
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see that OMPI performance slows dramatically as the number of processes is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; increased. Scali (data not available) does not show such a slowdown.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      np    min    avg    max
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       2   2.688  2.719  2.750 usec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       4   2.812  2.875  3.000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       6   2.875  3.050  3.250
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       8   2.875  3.299  3.625
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      10   2.875  3.447  3.812
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      12   3.063  3.687  4.375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      16   2.687  4.093  5.063
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      20   2.812  4.492  6.000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      24   3.125  5.026  6.562
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      28   3.250  5.326  7.250
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      32   3.500  5.830  8.375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      36   3.750  6.199  8.938
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      40   4.062  6.753 10.187
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The data show large min-max variations in latency.  These variations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happen to depend on sender and receiver ranks.  Here are latencies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (rounded down to the nearst &#163;gsec) for the np=40 case as a function of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sender and receiver rank:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                     ---------   rank of one process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      - 9 9 9 9 9 9 9 9 9 9 9 9 9 8 8 7 7 7 7 7 6 7 8 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 6 7 7 7 6 7 7 7 7 6 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 - 9 9 9 9 9 9 9 9 8 8 8 8 8 8 7 7 7 7 8 7 7 7 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 7 7 7 6 7 6 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 - 9 9 9 9 9 9 9 8 9 7 7 7 8 9 7 7 7 7 7 7 7 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 8 6 7 7 7 7 7 7 6 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 910 - 9 9 9 8 8 8 7 9 7 8 7 7 7 8 8 7 7 8 7 7 6 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 7 6 6 7 6 7 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 9 9 - 9 9 9 8 8 8 7 7 8 7 8 8 8 7 7 7 8 8 7 6 6 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8 7 7 6 6 7 7 6 7 7 6 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 9 9 9 - 9 9 9 8 7 7 8 8 8 7 8 7 7 8 8 6 7 7 6 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 6 6 6 7 7 7 7 6 6 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 9 9 9 9 - 9 9 8 9 8 8 8 7 8 8 7 8 6 7 7 7 7 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 7 6 7 6 7 6 7 7 6 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 9 9 9 9 9 - 9 8 8 8 8 9 8 7 8 7 8 7 7 6 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 7 7 7 7 7 7 7 6 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 8 9 9 8 8 9 - 7 9 9 9 7 7 7 8 8 8 7 7 7 6 7 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 6 6 6 6 7 6 7 6 6 6 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 9 9 7 7 8 8 8 - 8 9 8 7 7 7 8 7 7 7 7 7 7 7 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 6 7 6 7 7 6 7 7 6 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      9 9 9 9 9 8 9 9 7 9 - 8 7 8 7 7 6 8 7 7 7 6 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 6 6 6 6 7 7 7 6 6 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         9 8 8 9 8 7 8 8 8 8 7 - 9 7 7 8 7 7 7 7 7 7 7 6 6 6 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 6 6 6 7 7 6 6 7 6 7 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         8 8 9 8 9 7 7 8 8 7 7 8 - 7 8 9 8 7 7 7 6 6 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 6 7 7 7 6 7 6 6 6 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         8 8 8 8 8 9 7 8 8 7 7 7 7 - 8 8 8 8 7 7 7 6 7 7 7 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 6 7 7 7 7 6 6 6 6 6 5 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         6 7 9 9 9 7 7 8 7 7 8 7 8 7 - 6 8 7 7 7 8 7 7 7 7 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 7 6 7 6 7 7 6 6 6 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         7 7 6 8 7 8 8 8 7 7 8 7 8 9 7 - 7 7 7 8 7 7 6 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 6 7 6 6 6 6 6 6 5 5 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 9 7 8 9 7 8 7 8 8 8 7 7 7 7 7 - 7 8 7 8 7 7 7 7 7 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 6 6 7 6 6 6 4 5 5 5 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          rank        8 8 8 7 9 7 8 7 7 7 8 7 7 7 7 7 8 - 7 7 7 7 7 7 7 6 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 7 6 6 7 7 6 6 6 6 5 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           of         7 7 7 8 6 8 6 7 8 7 6 7 7 7 7 7 7 7 - 7 7 7 7 7 7 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 6 6 6 6 6 6 6 6 6 5 5 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          the         8 7 8 8 7 8 8 7 7 7 7 7 7 7 7 7 7 7 8 - 7 7 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 7 6 6 6 6 5 5 5 5 5 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         other        8 7 7 8 7 7 7 7 8 7 7 7 8 7 7 7 7 7 7 7 - 7 7 6 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 6 6 7 6 6 6 5 5 5 5 5 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        process       7 6 6 7 7 7 8 7 7 6 6 7 6 7 6 7 8 7 7 8 7 - 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7 6 6 6 6 6 5 5 5 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 8 7 7 7 7 7 7 8 8 7 7 7 7 7 6 7 6 7 7 7 7 - 7 7 7 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 6 6 4 5 5 6 4 4 4 6 5 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         7 6 7 7 7 6 6 7 6 8 7 8 7 7 7 7 7 7 7 7 7 7 7 - 7 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 6 5 5 5 6 5 4 4 5 5 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         7 7 7 6 7 7 7 7 8 7 6 7 6 6 7 6 6 6 6 7 6 7 7 7 - 6 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6 5 5 5 5 5 4 4 5 6 4 5 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         6 7 7 7 7 7 7 7 8 8 8 7 7 7 6 7 7 7 6 6 7 7 7 6 5 - 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5 6 6 5 5 5 4 5 5 5 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         7 7 6 7 7 7 7 8 7 7 7 7 6 7 7 7 7 7 6 7 6 6 6 5 5 4 -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5 5 5 4 5 5 5 4 5 5 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            |         7 7 7 8 7 6 7 6 7 7 7 7 7 6 7 7 7 7 6 6 6 6 6 4 6 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 5 4 4 5 4 4 5 5 5 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            V         7 6 8 7 7 6 6 7 6 7 7 7 7 7 6 7 7 6 6 6 7 6 6 5 6 5 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 - 4 5 5 4 4 4 4 4 4 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      6 6 6 6 6 6 7 8 7 6 7 7 7 7 6 6 7 6 6 5 5 6 6 5 5 6 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5 4 - 5 4 4 4 4 4 4 6 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      6 6 6 7 6 7 7 7 7 6 7 7 6 6 7 7 7 6 6 6 6 6 5 4 4 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 4 - 5 5 4 4 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 6 7 6 6 6 7 7 7 6 7 7 6 6 6 7 6 6 6 5 6 5 5 5 5 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 5 5 6 - 4 4 4 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 7 6 6 6 6 6 7 7 7 6 7 6 7 7 7 6 6 5 5 4 5 5 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5 4 4 5 4 - 4 4 4 5 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 6 7 6 6 6 6 6 7 7 7 7 6 7 6 6 6 6 6 5 5 4 5 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 4 4 4 4 - 5 4 4 4 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 6 7 7 7 8 7 7 6 6 6 7 6 6 6 6 5 5 4 5 5 5 4 4 5 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 4 4 4 4 4 - 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 6 7 6 7 6 6 6 6 6 7 7 6 6 6 6 5 5 5 4 4 4 4 4 5 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 4 4 4 4 4 4 - 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      8 6 6 7 7 7 7 8 7 6 6 7 6 6 6 6 5 4 5 4 5 5 4 5 4 4 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 4 4 5 5 4 4 4 - 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 7 7 6 7 7 6 7 6 6 7 6 6 6 6 5 4 5 4 5 4 4 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 5 4 4 4 4 4 4 4 - 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 7 7 7 7 6 7 7 6 7 7 7 7 5 4 5 5 4 5 5 4 4 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 4 4 4 4 4 4 4 4 4 4 - 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      7 6 7 7 6 7 6 6 6 6 6 6 6 6 5 5 6 4 4 5 4 5 4 5 4 4 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 5 4 4 4 5 4 4 4 4 4 4 -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We see that there is a strong dependence on process rank. Presumably, this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is due to our polling loop.  That is, even if we receive our message, we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; still have to poll the higher numbered ranks before we complete the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receive operation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Performance Measurements:  After Optimization
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We consider three metrics:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  HPCC &quot;pingpong&quot; latency
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  OSU latency (0 bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  OSU latency (8 bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We report data for:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  OMPI &quot;out of the box&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  after implementation of steps 1-2 (send side)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  after implementation of steps 1-3 (send and receive sides)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  after implementation of steps 1-4 (send and receive sides, plus data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; convertor) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The data are from machines that I just happened to have available.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is a bit of noise in these results, but the implications, based on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; these and other measurements, are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  There is some improvement from the send side.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  There is more improvement from the receive side.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  The data convertor improvements help a little more (a few percent) for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; non-null messages.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  The degree of improvement depends on how fast the CPU is relative to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the memory --  that is, how important software overheads are versus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hardware latency.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  If the CPU is fast (and hardware latency is the bottleneck), these
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; improvements are less -- say, 20-30%.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  If the CPU is slow (and software costs are the bottleneck), the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; improvements are more dramatic -- nearly a factor of 2 for non-null
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; messages. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  As np is increased, latency stays flat.  This can represent a 10&#161;&#209; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more improvement over out-of-the-box OMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; V20z
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are results for a V20z (burl-ct-v20z-11):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   HPCC OSU0 OSU8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    out of box      838  770  850   nsec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Steps 1-2       862  770  860
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Steps 1-3       670  610  670
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Steps 1-4       642  580  610
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; F6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are np=2 results from a 1.05-GHz (1.2?) UltraSPARC-IV F6900 server:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   HPCC OSU0 OSU8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    out of box     3430 2770 3340   nsec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Steps 1-2      2940 2660 3090
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Steps 1-3      1854 1650 1880
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Steps 1-4      1660 1640 1750
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the dependence on process count using HPCC:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              &quot;out of the box&quot;            optimized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  comm       -----------------       -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  size         min   avg   max         min   avg   max
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     2        2688  2719  2750        1750  1781  1812   nsec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     4        2812  2875  3000        1750  1802  1812
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     6        2875  3050  3250        1687  1777  1812
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     8        2875  3299  3625        1687  1773  1812
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    10        2875  3447  3812        1687  1789  1812
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    12        3063  3687  4375        1687  1796  1813
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    16        2687  4093  5063        1500  1784  1875
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    20        2812  4492  6000        1687  1788  1875
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    24        3125  5026  6562        1562  1776  1875
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    28        3250  5326  7250        1500  1764  1813
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    32        3500  5830  8375        1562  1755  1875
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    36        3750  6199  8938        1562  1755  1875
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    40        4062  6753 10187        1500  1742  1812
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  At np=2, these optimizations lead to a 2&#161;&#209; improvement in shared-memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; latency. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  Non-null messages incur more than a 10% penalty, which is largely
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; addressed by our data-convertor optimization.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  At larger np, we maintain our fast performance while OMPI &quot;out of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; box&quot; keeps slowing down more and more and more.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; M9000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are results for a 128-core M9000.  I think the system has:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  2 hardware threads per core (but we only use one hardware thread per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  4 cores per socket
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  4 sockets per board
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  4 boards per (half?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  2 (halves?) per system
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As one separates the sender and receiver, hardware latency increases. Here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is the hierarchy:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                      latency (nsec)       bandwidth (Mbyte/sec)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  out-of-box  fastpath     out-of-box  fastpath
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    (on-socket?)      810        480          2000       2000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     (on-board?)     2050       1820          1900       1900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         (half?)     3030       2840          1680       1680
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     3150       2960          1660       1660
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  Latency benefits some hundreds of nsecs with fastpath.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  This latency improvement is striking when the hardware latency is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; small, but less noticeable as as the hardware latency increases.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  Bandwidth is not very sensitive to hardware latency (due to prefetch)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and not at all to fast-path optimizations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are HPCC pingpong latencies for increasing process counts:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              out-of-box             fastpath
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      np  -----------------     -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          min    avg    max     min    avg    max
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       2  812    812    812     499    499    499
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       4  874    921    999     437    494    562
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       8  937   1847   2624     437   1249   1874
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      16 1062   2430   2937     437   1557   1937
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      32 1562   3850   5437     375   2211   2875
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      64 2687   8329  15874     437   2535   3062
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      80 3499  16854  41749     374   2647   3437
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      96 3812  31159 100812     374   2717   3437
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     128 5187 125774 335187     437   2793   3499
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The improvements are tremendous:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  At low np, latencies are low since sender and receiver can be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; colocated.  Nevertheless, fast-path optimizations provided a nearly 2&#161;&#209;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; improvement. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  As np increases, fast-path latency also increases, but this is due to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; higher hardware latencies.  Indeed, the &quot;min&quot; numbers even drop a little.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The &quot;max&quot; fast-path numbers basically only represent the increase in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hardware latency.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  As np increases, OMPI &quot;out of the box&quot; latency suffers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; catastrophically.  Not only is there the issue of more connections to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; poll, but the polling behaviors of non-participating processes wreak havoc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on the performance of measured processes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  We can separate the two sources of latency degradation by putting the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; np-2 non-participating processes to sleep. In that case, latency only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rises to about 10-20 &#163;gsec. So, polling of many connections causes a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; substantial rise in latency, while the disturbance of hard-poll loops on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system performance is responsible for even more degradation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Actually, even bandwidth benefits:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             out-of-box          fastpath
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      np   --------------      -------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            min  avg  max      min  avg  max
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       2   2015 2034 2053     2028 2039 2051
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       4   2002 2043 2077     1993 2032 2065
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       8   1888 1959 2035     1897 1969 2088
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      16   1863 1934 2046     1856 1937 2066
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      32   1626 1796 2038     1581 1798 2068
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      64   1557 1709 1969     1591 1729 2084
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      80   1439 1619 1902     1561 1706 2059
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      96   1281 1452 1722     1500 1689 2005
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     128    677  835 1276      893 1671 1906
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here, we see that even bandwidth suffers &quot;out of the box&quot; as the number
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of hard-spinning processes increases.  Note the degradation in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;out-of-box&quot; average bandwidths as np increases.  In contrast, the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;fastpath&quot; average holds up well. (The np=128 min fastpath number 893
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mbyte/sec is poor, but analysis shows it to be a measurement outlier.)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Sendrecv()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We should also get these optimizations into MPI_Sendrecv() in order to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; speed up the HPCC &quot;ring&quot; results.  E.g., here are latencies in &#163;gsecs for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a performance measurement based on HPCC &quot;ring&quot; tests.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; np=64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                             natural random
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;out of box&quot;                                   11.7   10.9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fast path                                       8.3    6.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fast path and 100 warmups                       3.5    3.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; np=128 latency
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                             natural random
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;out of box&quot;                                  242.9  226.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fast path                                      56.6   37.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fast path and 100 warmups                       4.2    4.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There happen to be two problems here:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  We need fast-path optimizations in MPI_Sendrecv() for improved
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  The MPI collective operation preceding the &quot;ring&quot; measurement has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;ragged&quot; exit times.  So, the &quot;ring&quot; timing starts well before all of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes have entered that measurement. This is a separate OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performance problem that must be handled as well for good HPCC results.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open Issues
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here are some open issues:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  Side effects.  Should the sendi and recvi functions leave any side
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; effects if they do not complete the specified operation?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  To my taste, they should not.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  Currently, however, the sendi function is expected to allocate a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; descriptor if it can, even if it cannot complete the entire send
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; operation. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  recvi:  BTL and match header. An in-coming message starts with a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;match header&quot;, with such data as MPI source rank, MPI communicator, and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI tag for performing MPI message matching.  Presumably, the BTL knows
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nothing about this header.  Message matching is performed, for example,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; via PML callback functions.  We are aggressively trying to optimize this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code path, however, so we should consider alternatives to that approach.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  One alternative is simply for the BTL to perform a byte-by-byte
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; comparison between the received header and the specified header.  The PML
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; already tells the BTL how many bytes are in the header.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  One problem with this approach is that the fast path would not be able
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to support the wildcard tag MPI_ANY_TAG.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  Further, it leaves open the question how one extracts information
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (such as source or tag) from this header for the MPI_Status structure.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  We can imagine a variety of solutions here, but so far we've
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; implemented a very simple (even if architecturally distasteful) solution:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we hardwire information (previously private to the PML) about the match
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; header into the BTL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  That approach can be replaced with other solutions.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *  MPI_Sendrecv() support.  As discussed earlier, we should support
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fast-path optimizations for &quot;immediate&quot; send-receive operations.  Again,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this may entail some movement of current OMPI architectural boundaries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Other optimizations that are needed for good HPCC results include:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *  reducing the degradation due to hard spin waits
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *  improving the performance of collective operations (which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;artificially&quot; degrade HPCC &quot;ring&quot; test results)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5226.php">Jeremy Espenshade: "[OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<li><strong>Previous message:</strong> <a href="5224.php">Eugene Loh: "[OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5224.php">Eugene Loh: "[OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5228.php">Terry Dontje: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5228.php">Terry Dontje: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
