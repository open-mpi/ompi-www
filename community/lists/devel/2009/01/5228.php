<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 06:57:01 2009" -->
<!-- isoreceived="20090120115701" -->
<!-- sent="Tue, 20 Jan 2009 06:56:53 -0500" -->
<!-- isosent="20090120115653" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4975BC05.7040002_at_sun.com" -->
<!-- charset="Big5" -->
<!-- inreplyto="C597B5B9.2D4DF%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 06:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5227.php">Timothy Hayes: "[OMPI devel] When can I use OOB channel?"</a>
<li><strong>In reply to:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Richard Graham wrote:
<br>
<span class="quotelev1">&gt; First, the performance improvements look really nice.
</span><br>
<span class="quotelev1">&gt; A few questions:
</span><br>
<span class="quotelev1">&gt; - How much of an abstraction violation does this introduce ? This
</span><br>
<span class="quotelev1">&gt; looks like the btl needs to start &#161;&#167;knowing&#161;&#168; about MPI level semantics.
</span><br>
<span class="quotelev1">&gt; Currently, the btl purposefully is ulp agnostic. I ask for 2 reasons
</span><br>
<span class="quotelev1">&gt; - you mention having the btl look at the match header (if I understood
</span><br>
<span class="quotelev1">&gt; correctly)
</span><br>
<span class="quotelev1">&gt; - not clear to me what you mean by returning the header to the list if
</span><br>
<span class="quotelev1">&gt; the irecv does not complete. If it does not complete, why not just
</span><br>
<span class="quotelev1">&gt; pass the header back for further processing, if all this is happening
</span><br>
<span class="quotelev1">&gt; at the pml level ?
</span><br>
<span class="quotelev1">&gt; - The measurements seem to be very dual process specific. Have you
</span><br>
<span class="quotelev1">&gt; looked at the impact of these changes on other applications at the
</span><br>
<span class="quotelev1">&gt; same process count ? &#161;&#167;Real&#161;&#168; apps would be interesting, but even hpl
</span><br>
<span class="quotelev1">&gt; would be a good start.
</span><br>
<span class="quotelev1">&gt; The current sm implementation is aimed only at small smp node count,
</span><br>
<span class="quotelev1">&gt; which was really the only relevant type of systems when this code was
</span><br>
<span class="quotelev1">&gt; written 5 years ago. For large core counts there is a rather simple
</span><br>
<span class="quotelev1">&gt; change that could be put in that is simple to implement, and will give
</span><br>
<span class="quotelev1">&gt; you flat scaling for the sort of tests you are running. If you replace
</span><br>
<span class="quotelev1">&gt; the fifo&#161;&#166;s with a single link list per process in shared memory, with
</span><br>
<span class="quotelev1">&gt; senders to this process adding match envelopes atomically, with each
</span><br>
<span class="quotelev1">&gt; process reading its own link list (multiple writers and single reader
</span><br>
<span class="quotelev1">&gt; in non-threaded situation) there will be only one place to poll,
</span><br>
<span class="quotelev1">&gt; regardless of the number of procs involved in the run. One still needs
</span><br>
<span class="quotelev1">&gt; other optimizations to lower the absolute latency &#161;V perhaps what you
</span><br>
<span class="quotelev1">&gt; have suggested. If one really has all N procs trying to write to the
</span><br>
<span class="quotelev1">&gt; same fifo at once, performance will stink because of contention, but
</span><br>
<span class="quotelev1">&gt; most apps don&#161;&#166;t have that behaviour.
</span><br>
If I remember correctly you can get a slow down with method you mention
<br>
above even with a handful (4-6 processes) writing to the same destination.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/17/09 1:48 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     *RFC: **sm Latency
</span><br>
<span class="quotelev1">&gt;     WHAT:* Introducing optimizations to reduce ping-pong latencies
</span><br>
<span class="quotelev1">&gt;     over the sm BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *WHY:* This is a visible benchmark of MPI performance. We can
</span><br>
<span class="quotelev1">&gt;     improve shared-memory latencies from 30% (if hardware latency is
</span><br>
<span class="quotelev1">&gt;     the limiting factor) to 2&#161;&#209; or more (if MPI software overhead is
</span><br>
<span class="quotelev1">&gt;     the limiting factor). At high process counts, the improvement can
</span><br>
<span class="quotelev1">&gt;     be 10&#161;&#209; or more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *WHERE:* Somewhat in the sm BTL, but very importantly also in the
</span><br>
<span class="quotelev1">&gt;     PML. Changes can be seen in ssh://www.open-mpi.org/~tdd/hg/fastpath.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *WHEN:* Upon acceptance. In time for OMPI 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *TIMEOUT:* February 6, 2009.
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     This RFC is being submitted by eugene.loh_at_sun.com.
</span><br>
<span class="quotelev1">&gt;     *WHY (details)
</span><br>
<span class="quotelev1">&gt;     *The sm BTL typically has the lowest hardware latencies of any
</span><br>
<span class="quotelev1">&gt;     BTL. Therefore, any OMPI software overhead we otherwise tolerate
</span><br>
<span class="quotelev1">&gt;     becomes glaringly obvious in sm latency measurements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In particular, MPI pingpong latencies are oft-cited performance
</span><br>
<span class="quotelev1">&gt;     benchmarks, popular indications of the quality of an MPI
</span><br>
<span class="quotelev1">&gt;     implementation. Competitive vendor MPIs optimize this metric
</span><br>
<span class="quotelev1">&gt;     aggressively, both for np=2 pingpongs and for pairwise pingpongs
</span><br>
<span class="quotelev1">&gt;     for high np (like the popular HPCC performance test suite).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Performance reported by HPCC include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * MPI_Send()/MPI_Recv() pingpong latency.
</span><br>
<span class="quotelev1">&gt;         * MPI_Send()/MPI_Recv() pingpong latency as the number of
</span><br>
<span class="quotelev1">&gt;           connections grows.
</span><br>
<span class="quotelev1">&gt;         * MPI_Sendrecv() latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The slowdown of latency as the number of sm connections grows
</span><br>
<span class="quotelev1">&gt;     becomes increasingly important on large SMPs and ever more
</span><br>
<span class="quotelev1">&gt;     prevalent many-core nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Other MPI implementations, such as Scali and Sun HPC ClusterTools
</span><br>
<span class="quotelev1">&gt;     6, introduced such optimizations years ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Performance measurements indicate that the speedups we can expect
</span><br>
<span class="quotelev1">&gt;     in OMPI with these optimizations range from 30% (np=2 measurements
</span><br>
<span class="quotelev1">&gt;     where hardware is the bottleneck) to 2&#161;&#209; (np=2 measurements where
</span><br>
<span class="quotelev1">&gt;     software is the bottleneck) to over 10&#161;&#209; (large np).
</span><br>
<span class="quotelev1">&gt;     *WHAT (details)
</span><br>
<span class="quotelev1">&gt;     *Introduce an optimized &quot;fast path&quot; for &quot;immediate&quot; sends and
</span><br>
<span class="quotelev1">&gt;     receives. Several actions are recommended here.
</span><br>
<span class="quotelev1">&gt;     *1. Invoke the **sm BTL sendi (send-immediate) function
</span><br>
<span class="quotelev1">&gt;     *Each BTL is allowed to define a &quot;send immediate&quot; (sendi)
</span><br>
<span class="quotelev1">&gt;     function. A BTL is not required to do so, however, in which case
</span><br>
<span class="quotelev1">&gt;     the PML calls the standard BTL send function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A sendi function has already been written for sm, but it has not
</span><br>
<span class="quotelev1">&gt;     been used due to insufficient testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The function should be reviewed, commented in, tested, and used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The changes are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * *File*: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt;         * *Declaration/Definition*: mca_btl_sm
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * Comment in the mca_btl_sm_sendi symbol instead of the NULL
</span><br>
<span class="quotelev1">&gt;           placeholder so that the already existing sendi function will
</span><br>
<span class="quotelev1">&gt;           be discovered and used by the PML.
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * *Function*: mca_btl_sm_sendi()
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * Review the existing sm sendi code. My suggestions include:
</span><br>
<span class="quotelev1">&gt;               o Drop the test against the eager limit since the PML
</span><br>
<span class="quotelev1">&gt;                 calls this function only when the eager limit is
</span><br>
<span class="quotelev1">&gt;                 respected.
</span><br>
<span class="quotelev1">&gt;               o Make sure the function has no side effects in the case
</span><br>
<span class="quotelev1">&gt;                 where it does not complete. See Open Issues
</span><br>
<span class="quotelev1">&gt;                 &lt;#OpenIssues&gt; , the final section of this document,
</span><br>
<span class="quotelev1">&gt;                 for further discussion of &quot;side effects&quot;.
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         * Mostly, I have reviewed the code and believe it's already
</span><br>
<span class="quotelev1">&gt;           suitable for use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           *2. Move the **sendi call up higher in the PML
</span><br>
<span class="quotelev1">&gt;           *Profiling pingpong tests, we find that not so much time is
</span><br>
<span class="quotelev1">&gt;           spent in the sm BTL. Rather, the PML consumes a lot of time
</span><br>
<span class="quotelev1">&gt;           preparing a &quot;send request&quot;. While these complex data
</span><br>
<span class="quotelev1">&gt;           structures are needed to track progress of a long message
</span><br>
<span class="quotelev1">&gt;           that will be sent in multiple chunks and progressed over
</span><br>
<span class="quotelev1">&gt;           multiple entries to and exits from the MPI library, managing
</span><br>
<span class="quotelev1">&gt;           this large data structure for an &quot;immediate&quot; send (one
</span><br>
<span class="quotelev1">&gt;           chunk, one call) is overkill. Latency can be reduced
</span><br>
<span class="quotelev1">&gt;           noticeably if one bypasses this data structure. This means
</span><br>
<span class="quotelev1">&gt;           invoking the sendi function as early as possible in the PML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           The changes are:
</span><br>
<span class="quotelev1">&gt;               o *File*: ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev1">&gt;               o *Function*: mca_pml_ob1_send()
</span><br>
<span class="quotelev1">&gt;              o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               o As soon as we enter the PML send function, try to call
</span><br>
<span class="quotelev1">&gt;                 the BTL sendi function. If this fails for whatever
</span><br>
<span class="quotelev1">&gt;                 reason, continue with the traditional PML send code
</span><br>
<span class="quotelev1">&gt;                 path. If it succeeds, then exit the PML and return up
</span><br>
<span class="quotelev1">&gt;                 to the calling layer without having to have wrestled
</span><br>
<span class="quotelev1">&gt;                 with the PML send-request data structure.
</span><br>
<span class="quotelev1">&gt;              o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               o For better software management, the attempt to find
</span><br>
<span class="quotelev1">&gt;                 and use a BTL sendi function can be organized into a
</span><br>
<span class="quotelev1">&gt;                 new mca_pml_ob1_sendi() function.
</span><br>
<span class="quotelev1">&gt;               o *File*: ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt;               o *Function*: mca_pml_ob1_send_request_start_copy()
</span><br>
<span class="quotelev1">&gt;              o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               o Remove this attempt to call the BTL sendi function,
</span><br>
<span class="quotelev1">&gt;                 since we've already tried to do so higher up in the PML.
</span><br>
<span class="quotelev1">&gt;                 *3. Introduce a BTL **recvi call
</span><br>
<span class="quotelev1">&gt;                 *While optimizing the send side of a pingpong
</span><br>
<span class="quotelev1">&gt;                 operation is helpful, it is less than half the job. At
</span><br>
<span class="quotelev1">&gt;                 least as many savings are possible on the receive side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Corresponding to what we've done on the send side, on
</span><br>
<span class="quotelev1">&gt;                 the receive side we can attempt, as soon as we've
</span><br>
<span class="quotelev1">&gt;                 entered the PML, to call a BTL recvi
</span><br>
<span class="quotelev1">&gt;                 (receive-immediate) function, bypassing the creation
</span><br>
<span class="quotelev1">&gt;                 of a complex &quot;receive request&quot; data structure that is
</span><br>
<span class="quotelev1">&gt;                 not needed if the receive can be completed immediately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Further, we can perform directed polling. OMPI
</span><br>
<span class="quotelev1">&gt;                 pingpong latencies grow significantly as the number of
</span><br>
<span class="quotelev1">&gt;                 sm connections increases, while competitors (Scali, in
</span><br>
<span class="quotelev1">&gt;                 any case) show absolutely flat latencies with
</span><br>
<span class="quotelev1">&gt;                 increasing np. The recvi function could check one
</span><br>
<span class="quotelev1">&gt;                 connection for the specified receive and exit quickly
</span><br>
<span class="quotelev1">&gt;                 if that message if found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 A BTL is granted considerable latitude in the proposed
</span><br>
<span class="quotelev1">&gt;                 recvi functions. The principle requirement is that the
</span><br>
<span class="quotelev1">&gt;                 recvi /either/ completes the specified receive
</span><br>
<span class="quotelev1">&gt;                 completely /or else/ behaves as if the function was
</span><br>
<span class="quotelev1">&gt;                 not called at all. (That is, one should be able to
</span><br>
<span class="quotelev1">&gt;                 revert to the traditional code path without having to
</span><br>
<span class="quotelev1">&gt;                 worry about any recvi side effects. So, for example,
</span><br>
<span class="quotelev1">&gt;                 if the recvi function encounters any fragments being
</span><br>
<span class="quotelev1">&gt;                 returned to the process, it is permitted to return
</span><br>
<span class="quotelev1">&gt;                 those fragments to the free list.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 While those are the &quot;hard requirements&quot; for recvi,
</span><br>
<span class="quotelev1">&gt;                 there are also some loose guidelines. Mostly, it is
</span><br>
<span class="quotelev1">&gt;                 understood that recvi should return &quot;quickly&quot; (a loose
</span><br>
<span class="quotelev1">&gt;                 term to be interpreted by the BTL). If recvi can
</span><br>
<span class="quotelev1">&gt;                 quickly complete the specified receive, great! If not,
</span><br>
<span class="quotelev1">&gt;                 it should return control to the PML, who can then
</span><br>
<span class="quotelev1">&gt;                 execute the traditional code path, which can handle
</span><br>
<span class="quotelev1">&gt;                 long messages (multiple chunks, multiple entries into
</span><br>
<span class="quotelev1">&gt;                 the MPI library) and execute other &quot;progress&quot; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 The changes are:
</span><br>
<span class="quotelev1">&gt;                     + *File*: ompi/mca/btl/btl.h
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + In this file, we add a typedef declaration for
</span><br>
<span class="quotelev1">&gt;                       what a generic recvi should look like:
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + typedef int (*mca_btl_base_module_recvi_fn_t)();
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + We also add a btl_recvi field so that a BTL can
</span><br>
<span class="quotelev1">&gt;                       register its recvi function, if any.
</span><br>
<span class="quotelev1">&gt;                     + *File*:
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/elan/btl_elan.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/gm/btl_gm.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/mx/btl_mx.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/ofud/btl_ofud.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/portals/btl_portals.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/sctp/btl_sctp.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/self/btl_self.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/template/btl_template.c
</span><br>
<span class="quotelev1">&gt;                     + ompi/mca/btl/udapl/btl_udapl.c
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + Each BTL must add a recvi field to its module.
</span><br>
<span class="quotelev1">&gt;                       In most cases, BTLs will not define a recvi
</span><br>
<span class="quotelev1">&gt;                       function, and the field will be set to NULL.
</span><br>
<span class="quotelev1">&gt;                     + *File*: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt;                     + *Function*: mca_btl_sm_recvi()
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + For the sm BTL, we set the field to the name of
</span><br>
<span class="quotelev1">&gt;                       the BTL's recvi function: mca_btl_sm_recvi. We
</span><br>
<span class="quotelev1">&gt;                       also add code to define the behavior of the
</span><br>
<span class="quotelev1">&gt;                       function.
</span><br>
<span class="quotelev1">&gt;                     + *File*: ompi/mca/btl/sm/btl_sm.h
</span><br>
<span class="quotelev1">&gt;                     + *Prototype*: mca_btl_sm_recvi()
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + We also add a prototype for the new function.
</span><br>
<span class="quotelev1">&gt;                     + *File*: ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev1">&gt;                     + *Function*: mca_pml_ob1_recv()
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + As soon as we enter the PML, we try to find and
</span><br>
<span class="quotelev1">&gt;                       use a BTL's recvi function. If we succeed, we
</span><br>
<span class="quotelev1">&gt;                       can exit the PML without having had invoked the
</span><br>
<span class="quotelev1">&gt;                       heavy-duty PML receive-request data structure.
</span><br>
<span class="quotelev1">&gt;                       If we fail, we simply revert to the traditional
</span><br>
<span class="quotelev1">&gt;                       PML receive code path, without having to worry
</span><br>
<span class="quotelev1">&gt;                       about any side effects that the failed recvi
</span><br>
<span class="quotelev1">&gt;                       might have left.
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + It is helpful to contain the recvi attempt in a
</span><br>
<span class="quotelev1">&gt;                       new mca_pml_ob1_recvi() function, which we add.
</span><br>
<span class="quotelev1">&gt;                     + *File*: ompi/class/ompi_fifo.h
</span><br>
<span class="quotelev1">&gt;                     + *Function*: ompi_fifo_probe_tail()
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     + We don't want recvi to leave any side effects if
</span><br>
<span class="quotelev1">&gt;                       it encounters a message it is not prepared to
</span><br>
<span class="quotelev1">&gt;                       handle. Therefore, we need to be able to see
</span><br>
<span class="quotelev1">&gt;                       what is on a FIFO without popping that entry off
</span><br>
<span class="quotelev1">&gt;                       the FIFO. Therefore, we add this new function
</span><br>
<span class="quotelev1">&gt;                       that probes the FIFO without disturbing it.
</span><br>
<span class="quotelev1">&gt;                       *4. Introduce an &quot;immediate&quot; data convertor
</span><br>
<span class="quotelev1">&gt;                       *One of our aims here is to reduce latency by
</span><br>
<span class="quotelev1">&gt;                       bypassing expensive PML send and receive request
</span><br>
<span class="quotelev1">&gt;                       data structures. Again, these structures are
</span><br>
<span class="quotelev1">&gt;                       useful when we intend to complete a message over
</span><br>
<span class="quotelev1">&gt;                       multiple chunks and multiple MPI library
</span><br>
<span class="quotelev1">&gt;                       invocations, but are overkill for a message that
</span><br>
<span class="quotelev1">&gt;                       can be completed all at once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       The same is true of data convertors. Convertors
</span><br>
<span class="quotelev1">&gt;                       pack user data into shared-memory buffers or
</span><br>
<span class="quotelev1">&gt;                       unpack them on the receive side. Convertors
</span><br>
<span class="quotelev1">&gt;                       allow a message to be sent in multiple chunks,
</span><br>
<span class="quotelev1">&gt;                       over the course of multiple unrelated MPI calls,
</span><br>
<span class="quotelev1">&gt;                       and for noncontiguous datatypes. These
</span><br>
<span class="quotelev1">&gt;                       sophisticated data structures are overkill in
</span><br>
<span class="quotelev1">&gt;                       some important cases, such as messages that are
</span><br>
<span class="quotelev1">&gt;                       handled in a single chunk and in a single MPI
</span><br>
<span class="quotelev1">&gt;                       call and consist of a single contiguous block of
</span><br>
<span class="quotelev1">&gt;                       data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       While data convertors are not typically too
</span><br>
<span class="quotelev1">&gt;                       expensive, for shared-memory latency, where all
</span><br>
<span class="quotelev1">&gt;                       other costs have been pared back to a minimum,
</span><br>
<span class="quotelev1">&gt;                       convertors become noticeable -- around 10%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       Therefore, we recognize special cases where we
</span><br>
<span class="quotelev1">&gt;                       can have barebones, minimal, data convertors. In
</span><br>
<span class="quotelev1">&gt;                       these cases, we initialize the convertor
</span><br>
<span class="quotelev1">&gt;                       structure minimally -- e.g., a buffer address, a
</span><br>
<span class="quotelev1">&gt;                       number of bytes to copy, and a flag indicating
</span><br>
<span class="quotelev1">&gt;                       that all other fields are uninitialized. If this
</span><br>
<span class="quotelev1">&gt;                       is not possible (e.g., because a non-contiguous
</span><br>
<span class="quotelev1">&gt;                       user-derived datatype is being used), the
</span><br>
<span class="quotelev1">&gt;                       &quot;immediate&quot; send or receive uses data convertors
</span><br>
<span class="quotelev1">&gt;                       normally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                       The changes are:
</span><br>
<span class="quotelev1">&gt;                           # *File*: ompi/datatype/convertor.h
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           # First, we add to the convertor flags a new
</span><br>
<span class="quotelev1">&gt;                             flag
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           # #define CONVERTOR_IMMEDIATE 0x10000000
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;                           # to identify a data convertor that has been
</span><br>
<span class="quotelev1">&gt;                             initialized only minimally.
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           # Further, we add three new functions:
</span><br>
<span class="quotelev1">&gt;                                 * ompi_convertor_immediate(): try to
</span><br>
<span class="quotelev1">&gt;                                   form an &quot;immediate&quot; convertor
</span><br>
<span class="quotelev1">&gt;                                 * ompi_convertor_immediate_pack(): use
</span><br>
<span class="quotelev1">&gt;                                   an &quot;immediate&quot; convertor to pack
</span><br>
<span class="quotelev1">&gt;                                 * ompi_convertor_immediate_unpack():
</span><br>
<span class="quotelev1">&gt;                                   use an &quot;immediate&quot; convertor to unpack
</span><br>
<span class="quotelev1">&gt;                           # *File*: ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt;                           # *Function*: mca_btl_sm_sendi and
</span><br>
<span class="quotelev1">&gt;                             mca_btl_sm_recvi
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           # Use the &quot;immediate&quot; convertor routines to
</span><br>
<span class="quotelev1">&gt;                             pack/unpack.
</span><br>
<span class="quotelev1">&gt;                           # *File*: ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev1">&gt;                             and ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           # Have the PML fast path try to construct an
</span><br>
<span class="quotelev1">&gt;                             &quot;immediate&quot; convertor.
</span><br>
<span class="quotelev1">&gt;                             *5. Introduce an &quot;immediate&quot; **MPI_Sendrecv()
</span><br>
<span class="quotelev1">&gt;                             *The optimizations described here should
</span><br>
<span class="quotelev1">&gt;                             be extended to MPI_Sendrecv() operations.
</span><br>
<span class="quotelev1">&gt;                             In particular, while MPI_Send() and
</span><br>
<span class="quotelev1">&gt;                             MPI_Recv() optimizations improve HPCC
</span><br>
<span class="quotelev1">&gt;                             &quot;pingpong&quot; latencies, we need
</span><br>
<span class="quotelev1">&gt;                             MPI_Sendrecv() optimizations to improve
</span><br>
<span class="quotelev1">&gt;                             HPCC &quot;ring&quot; latencies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             One challenge is the current OMPI MPI/PML
</span><br>
<span class="quotelev1">&gt;                             interface. Today, the OMPI MPI layer
</span><br>
<span class="quotelev1">&gt;                             breaks a Sendrecv call up into
</span><br>
<span class="quotelev1">&gt;                             Irecv/Send/Wait. This would seem to defeat
</span><br>
<span class="quotelev1">&gt;                             fast-path optimizations at least for the
</span><br>
<span class="quotelev1">&gt;                             receive. Some options include:
</span><br>
<span class="quotelev1">&gt;                                 * allow the MPI layer to call &quot;fast
</span><br>
<span class="quotelev1">&gt;                                   path&quot; operations
</span><br>
<span class="quotelev1">&gt;                                 * have the PML layer provide a
</span><br>
<span class="quotelev1">&gt;                                   Sendrecv interface
</span><br>
<span class="quotelev1">&gt;                                 * have the MPI layer emit
</span><br>
<span class="quotelev1">&gt;                                   Isend/Recv/Wait and see how
</span><br>
<span class="quotelev1">&gt;                                   effectively one can optimize the
</span><br>
<span class="quotelev1">&gt;                                   Isend operation in the PML for the
</span><br>
<span class="quotelev1">&gt;                                   &quot;immediate&quot; case
</span><br>
<span class="quotelev1">&gt;                             *Performance Measurements: Before Optimization
</span><br>
<span class="quotelev1">&gt;                             *More measurements are desirable, but here
</span><br>
<span class="quotelev1">&gt;                             is a sampling of data that I happen to
</span><br>
<span class="quotelev1">&gt;                             have from platforms that I happened to
</span><br>
<span class="quotelev1">&gt;                             have access to. This data characterizes
</span><br>
<span class="quotelev1">&gt;                             OMPI today, without fast-path optimizations.
</span><br>
<span class="quotelev1">&gt;                             *OMPI versus Other MPIs
</span><br>
<span class="quotelev1">&gt;                             *Here are pingpong latencies, in &#163;gsec,
</span><br>
<span class="quotelev1">&gt;                             measured with the OSU latency test for 0
</span><br>
<span class="quotelev1">&gt;                             and 8 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             0-byte 8-byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             OMPI 0.74 0.84 &#163;gsec
</span><br>
<span class="quotelev1">&gt;                             MPICH 0.70 0.77
</span><br>
<span class="quotelev1">&gt;                             We see OMPI lagging MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Scali and HP MPI are presumably
</span><br>
<span class="quotelev1">&gt;                             /considerably/ faster, but I have no
</span><br>
<span class="quotelev1">&gt;                             recent data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Among other things, one can see that there
</span><br>
<span class="quotelev1">&gt;                             is about a 10% penalty for invoking data
</span><br>
<span class="quotelev1">&gt;                             convertors.
</span><br>
<span class="quotelev1">&gt;                             *Scaling with Process Count
</span><br>
<span class="quotelev1">&gt;                             *Here are HPCC pingpong latencies from a
</span><br>
<span class="quotelev1">&gt;                             different, older, platform. Though only
</span><br>
<span class="quotelev1">&gt;                             two processes participate in the pingpong,
</span><br>
<span class="quotelev1">&gt;                             the HPCC test reports that latency for
</span><br>
<span class="quotelev1">&gt;                             different numbers of processes in the job.
</span><br>
<span class="quotelev1">&gt;                             We see that OMPI performance slows
</span><br>
<span class="quotelev1">&gt;                             dramatically as the number of processes is
</span><br>
<span class="quotelev1">&gt;                             increased. Scali (data not available) does
</span><br>
<span class="quotelev1">&gt;                             not show such a slowdown.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             np min avg max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             2 2.688 2.719 2.750 usec
</span><br>
<span class="quotelev1">&gt;                             4 2.812 2.875 3.000
</span><br>
<span class="quotelev1">&gt;                             6 2.875 3.050 3.250
</span><br>
<span class="quotelev1">&gt;                             8 2.875 3.299 3.625
</span><br>
<span class="quotelev1">&gt;                             10 2.875 3.447 3.812
</span><br>
<span class="quotelev1">&gt;                             12 3.063 3.687 4.375
</span><br>
<span class="quotelev1">&gt;                             16 2.687 4.093 5.063
</span><br>
<span class="quotelev1">&gt;                             20 2.812 4.492 6.000
</span><br>
<span class="quotelev1">&gt;                             24 3.125 5.026 6.562
</span><br>
<span class="quotelev1">&gt;                             28 3.250 5.326 7.250
</span><br>
<span class="quotelev1">&gt;                             32 3.500 5.830 8.375
</span><br>
<span class="quotelev1">&gt;                             36 3.750 6.199 8.938
</span><br>
<span class="quotelev1">&gt;                             40 4.062 6.753 10.187
</span><br>
<span class="quotelev1">&gt;                             The data show large min-max variations in
</span><br>
<span class="quotelev1">&gt;                             latency. These variations happen to depend
</span><br>
<span class="quotelev1">&gt;                             on sender and receiver ranks. Here are
</span><br>
<span class="quotelev1">&gt;                             latencies (rounded down to the nearst
</span><br>
<span class="quotelev1">&gt;                             &#163;gsec) for the np=40 case as a function of
</span><br>
<span class="quotelev1">&gt;                             sender and receiver rank:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             --------- rank of one process -----------&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             - 9 9 9 9 9 9 9 9 9 9 9 9 9 8 8 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             6 7 8 7 7 7 7 7 6 7 7 7 6 7 7 7 7 6 7
</span><br>
<span class="quotelev1">&gt;                             9 - 9 9 9 9 9 9 9 9 8 8 8 8 8 8 7 7 7 7 8
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 7 7 7 7 7 6 7 6 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             9 9 - 9 9 9 9 9 9 9 8 9 7 7 7 8 9 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 7 8 6 7 7 7 7 7 7 6 7 7 6
</span><br>
<span class="quotelev1">&gt;                             9 910 - 9 9 9 8 8 8 7 9 7 8 7 7 7 8 8 7 7
</span><br>
<span class="quotelev1">&gt;                             8 7 7 6 7 7 7 7 7 6 6 7 6 7 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             9 9 9 9 - 9 9 9 8 8 8 7 7 8 7 8 8 8 7 7 7
</span><br>
<span class="quotelev1">&gt;                             8 8 7 6 6 7 8 7 7 6 6 7 7 6 7 7 6 7 7
</span><br>
<span class="quotelev1">&gt;                             9 9 9 9 9 - 9 9 9 8 7 7 8 8 8 7 8 7 7 8 8
</span><br>
<span class="quotelev1">&gt;                             6 7 7 6 7 7 7 7 6 6 6 7 7 7 7 6 6 6 6
</span><br>
<span class="quotelev1">&gt;                             9 9 9 9 9 9 - 9 9 8 9 8 8 8 7 8 8 7 8 6 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 6 7 7 6 7 6 7 6 7 7 6 7 6
</span><br>
<span class="quotelev1">&gt;                             9 9 9 9 9 9 9 - 9 8 8 8 8 9 8 7 8 7 8 7 7
</span><br>
<span class="quotelev1">&gt;                             6 7 7 7 7 7 6 7 7 7 7 7 7 7 7 6 7 7 7
</span><br>
<span class="quotelev1">&gt;                             9 9 8 9 9 8 8 9 - 7 9 9 9 7 7 7 8 8 8 7 7
</span><br>
<span class="quotelev1">&gt;                             7 6 7 7 7 6 7 6 6 6 6 7 6 7 6 6 6 7 6
</span><br>
<span class="quotelev1">&gt;                             9 9 9 9 7 7 8 8 8 - 8 9 8 7 7 7 8 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 6 7 6 7 6 7 7 6 7 7 6 6 6
</span><br>
<span class="quotelev1">&gt;                             9 9 9 9 9 8 9 9 7 9 - 8 7 8 7 7 6 8 7 7 7
</span><br>
<span class="quotelev1">&gt;                             6 7 7 7 7 7 7 6 6 6 6 7 7 7 6 6 7 7 6
</span><br>
<span class="quotelev1">&gt;                             | 9 8 8 9 8 7 8 8 8 8 7 - 9 7 7 8 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 6 6 6 7 6 7 6 6 6 7 7 6 6 7 6 7 5
</span><br>
<span class="quotelev1">&gt;                             | 8 8 9 8 9 7 7 8 8 7 7 8 - 7 8 9 8 7 7 7
</span><br>
<span class="quotelev1">&gt;                             6 6 7 7 7 7 7 6 7 6 7 7 7 6 7 6 6 6 6 6
</span><br>
<span class="quotelev1">&gt;                             | 8 8 8 8 8 9 7 8 8 7 7 7 7 - 8 8 8 8 7 7
</span><br>
<span class="quotelev1">&gt;                             7 6 7 7 7 6 6 6 6 7 7 7 7 6 6 6 6 6 5 6
</span><br>
<span class="quotelev1">&gt;                             | 6 7 9 9 9 7 7 8 7 7 8 7 8 7 - 6 8 7 7 7
</span><br>
<span class="quotelev1">&gt;                             8 7 7 7 7 6 6 7 7 7 6 7 6 7 7 6 6 6 4 5
</span><br>
<span class="quotelev1">&gt;                             | 7 7 6 8 7 8 8 8 7 7 8 7 8 9 7 - 7 7 7 8
</span><br>
<span class="quotelev1">&gt;                             7 7 6 7 7 7 7 6 7 6 7 6 6 6 6 6 6 5 5 5
</span><br>
<span class="quotelev1">&gt;                             7 9 7 8 9 7 8 7 8 8 8 7 7 7 7 7 - 7 8 7 8
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 7 7 6 6 7 6 6 6 4 5 5 5 5
</span><br>
<span class="quotelev1">&gt;                             rank 8 8 8 7 9 7 8 7 7 7 8 7 7 7 7 7 8 - 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 7 6 7 7 7 6 6 7 7 6 6 6 6 5 4 5
</span><br>
<span class="quotelev1">&gt;                             of 7 7 7 8 6 8 6 7 8 7 6 7 7 7 7 7 7 7 - 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 6 7 6 6 6 6 6 6 6 6 6 5 5 4
</span><br>
<span class="quotelev1">&gt;                             the 8 7 8 8 7 8 8 7 7 7 7 7 7 7 7 7 7 7 8
</span><br>
<span class="quotelev1">&gt;                             - 7 7 7 7 7 7 7 6 7 6 6 6 6 5 5 5 5 5 4 4
</span><br>
<span class="quotelev1">&gt;                             other 8 7 7 8 7 7 7 7 8 7 7 7 8 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             7 7 - 7 7 6 7 7 7 7 6 6 7 6 6 6 5 5 5 5 5 5
</span><br>
<span class="quotelev1">&gt;                             process 7 6 6 7 7 7 8 7 7 6 6 7 6 7 6 7 8
</span><br>
<span class="quotelev1">&gt;                             7 7 8 7 - 7 7 7 7 7 7 6 6 6 6 6 5 5 5 4 4 4 4
</span><br>
<span class="quotelev1">&gt;                             7 8 7 7 7 7 7 7 8 8 7 7 7 7 7 6 7 6 7 7 7
</span><br>
<span class="quotelev1">&gt;                             7 - 7 7 7 7 6 6 6 4 5 5 6 4 4 4 6 5 5
</span><br>
<span class="quotelev1">&gt;                             | 7 6 7 7 7 6 6 7 6 8 7 8 7 7 7 7 7 7 7 7
</span><br>
<span class="quotelev1">&gt;                             7 7 7 - 7 6 6 6 6 5 5 5 6 5 4 4 5 5 4 4
</span><br>
<span class="quotelev1">&gt;                             | 7 7 7 6 7 7 7 7 8 7 6 7 6 6 7 6 6 6 6 7
</span><br>
<span class="quotelev1">&gt;                             6 7 7 7 - 6 6 6 5 5 5 5 5 4 4 5 6 4 5 4
</span><br>
<span class="quotelev1">&gt;                             | 6 7 7 7 7 7 7 7 8 8 8 7 7 7 6 7 7 7 6 6
</span><br>
<span class="quotelev1">&gt;                             7 7 7 6 5 - 6 5 6 6 5 5 5 4 5 5 5 4 4 4
</span><br>
<span class="quotelev1">&gt;                             | 7 7 6 7 7 7 7 8 7 7 7 7 6 7 7 7 7 7 6 7
</span><br>
<span class="quotelev1">&gt;                             6 6 6 5 5 4 - 5 5 5 4 5 5 5 4 5 5 4 4 4
</span><br>
<span class="quotelev1">&gt;                             | 7 7 7 8 7 6 7 6 7 7 7 7 7 6 7 7 7 7 6 6
</span><br>
<span class="quotelev1">&gt;                             6 6 6 4 6 4 5 - 5 4 4 5 4 4 5 5 5 4 4 4
</span><br>
<span class="quotelev1">&gt;                             V 7 6 8 7 7 6 6 7 6 7 7 7 7 7 6 7 7 6 6 6
</span><br>
<span class="quotelev1">&gt;                             7 6 6 5 6 5 5 4 - 4 5 5 4 4 4 4 4 4 4 5
</span><br>
<span class="quotelev1">&gt;                             6 6 6 6 6 6 7 8 7 6 7 7 7 7 6 6 7 6 6 5 5
</span><br>
<span class="quotelev1">&gt;                             6 6 5 5 6 5 5 4 - 5 4 4 4 4 4 4 6 4 4
</span><br>
<span class="quotelev1">&gt;                             6 6 6 7 6 7 7 7 7 6 7 7 6 6 7 7 7 6 6 6 6
</span><br>
<span class="quotelev1">&gt;                             6 5 4 4 4 5 4 4 4 - 5 5 4 4 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;                             7 6 7 6 6 6 7 7 7 6 7 7 6 6 6 7 6 6 6 5 6
</span><br>
<span class="quotelev1">&gt;                             5 5 5 5 4 4 4 5 5 6 - 4 4 4 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;                             7 7 6 6 6 6 6 7 7 7 6 7 6 7 7 7 6 6 5 5 4
</span><br>
<span class="quotelev1">&gt;                             5 5 4 4 4 4 5 4 4 5 4 - 4 4 4 5 4 4 4
</span><br>
<span class="quotelev1">&gt;                             7 6 7 6 6 6 6 6 7 7 7 7 6 7 6 6 6 6 6 5 5
</span><br>
<span class="quotelev1">&gt;                             4 5 4 4 4 4 4 4 4 4 4 4 - 5 4 4 4 4 5
</span><br>
<span class="quotelev1">&gt;                             7 6 7 7 7 8 7 7 6 6 6 7 6 6 6 6 5 5 4 5 5
</span><br>
<span class="quotelev1">&gt;                             5 4 4 5 4 4 4 4 4 4 4 4 4 - 4 4 4 4 4
</span><br>
<span class="quotelev1">&gt;                             7 6 7 6 7 6 6 6 6 6 7 7 6 6 6 6 5 5 5 4 4
</span><br>
<span class="quotelev1">&gt;                             4 4 4 5 4 4 4 4 4 4 4 4 4 4 - 4 4 4 4
</span><br>
<span class="quotelev1">&gt;                             8 6 6 7 7 7 7 8 7 6 6 7 6 6 6 6 5 4 5 4 5
</span><br>
<span class="quotelev1">&gt;                             5 4 5 4 4 5 4 4 4 4 5 5 4 4 4 - 4 4 4
</span><br>
<span class="quotelev1">&gt;                             7 7 7 6 7 7 6 7 6 6 7 6 6 6 6 5 4 5 4 5 4
</span><br>
<span class="quotelev1">&gt;                             4 4 4 4 4 4 4 4 5 4 4 4 4 4 4 4 - 4 4
</span><br>
<span class="quotelev1">&gt;                             7 7 7 7 7 6 7 7 6 7 7 7 7 5 4 5 5 4 5 5 4
</span><br>
<span class="quotelev1">&gt;                             4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 - 4
</span><br>
<span class="quotelev1">&gt;                             7 6 7 7 6 7 6 6 6 6 6 6 6 6 5 5 6 4 4 5 4
</span><br>
<span class="quotelev1">&gt;                             5 4 5 4 4 4 4 5 4 4 4 5 4 4 4 4 4 4 -
</span><br>
<span class="quotelev1">&gt;                             We see that there is a strong dependence
</span><br>
<span class="quotelev1">&gt;                             on process rank. Presumably, this is due
</span><br>
<span class="quotelev1">&gt;                             to our polling loop. That is, even if we
</span><br>
<span class="quotelev1">&gt;                             receive our message, we still have to poll
</span><br>
<span class="quotelev1">&gt;                             the higher numbered ranks before we
</span><br>
<span class="quotelev1">&gt;                             complete the receive operation.
</span><br>
<span class="quotelev1">&gt;                             *Performance Measurements: After Optimization
</span><br>
<span class="quotelev1">&gt;                             *We consider three metrics:
</span><br>
<span class="quotelev1">&gt;                                 * HPCC &quot;pingpong&quot; latency
</span><br>
<span class="quotelev1">&gt;                                 * OSU latency (0 bytes)
</span><br>
<span class="quotelev1">&gt;                                 * OSU latency (8 bytes)
</span><br>
<span class="quotelev1">&gt;                             We report data for:
</span><br>
<span class="quotelev1">&gt;                                 * OMPI &quot;out of the box&quot;
</span><br>
<span class="quotelev1">&gt;                                 * after implementation of steps 1-2
</span><br>
<span class="quotelev1">&gt;                                   (send side)
</span><br>
<span class="quotelev1">&gt;                                 * after implementation of steps 1-3
</span><br>
<span class="quotelev1">&gt;                                   (send and receive sides)
</span><br>
<span class="quotelev1">&gt;                                 * after implementation of steps 1-4
</span><br>
<span class="quotelev1">&gt;                                   (send and receive sides, plus data
</span><br>
<span class="quotelev1">&gt;                                   convertor)
</span><br>
<span class="quotelev1">&gt;                             The data are from machines that I just
</span><br>
<span class="quotelev1">&gt;                             happened to have available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             There is a bit of noise in these results,
</span><br>
<span class="quotelev1">&gt;                             but the implications, based on these and
</span><br>
<span class="quotelev1">&gt;                             other measurements, are:
</span><br>
<span class="quotelev1">&gt;                                 * There is some improvement from the
</span><br>
<span class="quotelev1">&gt;                                   send side.
</span><br>
<span class="quotelev1">&gt;                                 * There is more improvement from the
</span><br>
<span class="quotelev1">&gt;                                   receive side.
</span><br>
<span class="quotelev1">&gt;                                 * The data convertor improvements help
</span><br>
<span class="quotelev1">&gt;                                   a little more (a few percent) for
</span><br>
<span class="quotelev1">&gt;                                   non-null messages.
</span><br>
<span class="quotelev1">&gt;                                 * The degree of improvement depends on
</span><br>
<span class="quotelev1">&gt;                                   how fast the CPU is relative to the
</span><br>
<span class="quotelev1">&gt;                                   memory -- that is, how important
</span><br>
<span class="quotelev1">&gt;                                   software overheads are versus
</span><br>
<span class="quotelev1">&gt;                                   hardware latency.
</span><br>
<span class="quotelev1">&gt;                                       o If the CPU is fast (and
</span><br>
<span class="quotelev1">&gt;                                         hardware latency is the
</span><br>
<span class="quotelev1">&gt;                                         bottleneck), these
</span><br>
<span class="quotelev1">&gt;                                         improvements are less -- say,
</span><br>
<span class="quotelev1">&gt;                                         20-30%.
</span><br>
<span class="quotelev1">&gt;                                       o If the CPU is slow (and
</span><br>
<span class="quotelev1">&gt;                                         software costs are the
</span><br>
<span class="quotelev1">&gt;                                         bottleneck), the improvements
</span><br>
<span class="quotelev1">&gt;                                         are more dramatic -- nearly a
</span><br>
<span class="quotelev1">&gt;                                         factor of 2 for non-null
</span><br>
<span class="quotelev1">&gt;                                         messages.
</span><br>
<span class="quotelev1">&gt;                                 * As np is increased, latency stays
</span><br>
<span class="quotelev1">&gt;                                   flat. This can represent a 10&#161;&#209; or
</span><br>
<span class="quotelev1">&gt;                                   more improvement over out-of-the-box
</span><br>
<span class="quotelev1">&gt;                                   OMPI.
</span><br>
<span class="quotelev1">&gt;                             *V20z
</span><br>
<span class="quotelev1">&gt;                             *Here are results for a V20z
</span><br>
<span class="quotelev1">&gt;                             (burl-ct-v20z-11):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             HPCC OSU0 OSU8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             out of box 838 770 850 nsec
</span><br>
<span class="quotelev1">&gt;                             Steps 1-2 862 770 860
</span><br>
<span class="quotelev1">&gt;                             Steps 1-3 670 610 670
</span><br>
<span class="quotelev1">&gt;                             Steps 1-4 642 580 610
</span><br>
<span class="quotelev1">&gt;                             *F6900
</span><br>
<span class="quotelev1">&gt;                             *Here are np=2 results from a 1.05-GHz
</span><br>
<span class="quotelev1">&gt;                             (1.2?) UltraSPARC-IV F6900 server:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             HPCC OSU0 OSU8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             out of box 3430 2770 3340 nsec
</span><br>
<span class="quotelev1">&gt;                             Steps 1-2 2940 2660 3090
</span><br>
<span class="quotelev1">&gt;                             Steps 1-3 1854 1650 1880
</span><br>
<span class="quotelev1">&gt;                             Steps 1-4 1660 1640 1750
</span><br>
<span class="quotelev1">&gt;                             Here is the dependence on process count
</span><br>
<span class="quotelev1">&gt;                             using HPCC:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             OMPI
</span><br>
<span class="quotelev1">&gt;                             &quot;out of the box&quot; optimized
</span><br>
<span class="quotelev1">&gt;                             comm ----------------- -----------------
</span><br>
<span class="quotelev1">&gt;                             size min avg max min avg max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             2 2688 2719 2750 1750 1781 1812 nsec
</span><br>
<span class="quotelev1">&gt;                             4 2812 2875 3000 1750 1802 1812
</span><br>
<span class="quotelev1">&gt;                             6 2875 3050 3250 1687 1777 1812
</span><br>
<span class="quotelev1">&gt;                             8 2875 3299 3625 1687 1773 1812
</span><br>
<span class="quotelev1">&gt;                             10 2875 3447 3812 1687 1789 1812
</span><br>
<span class="quotelev1">&gt;                             12 3063 3687 4375 1687 1796 1813
</span><br>
<span class="quotelev1">&gt;                             16 2687 4093 5063 1500 1784 1875
</span><br>
<span class="quotelev1">&gt;                             20 2812 4492 6000 1687 1788 1875
</span><br>
<span class="quotelev1">&gt;                             24 3125 5026 6562 1562 1776 1875
</span><br>
<span class="quotelev1">&gt;                             28 3250 5326 7250 1500 1764 1813
</span><br>
<span class="quotelev1">&gt;                             32 3500 5830 8375 1562 1755 1875
</span><br>
<span class="quotelev1">&gt;                             36 3750 6199 8938 1562 1755 1875
</span><br>
<span class="quotelev1">&gt;                             40 4062 6753 10187 1500 1742 1812
</span><br>
<span class="quotelev1">&gt;                             Note:
</span><br>
<span class="quotelev1">&gt;                                 * At np=2, these optimizations lead to
</span><br>
<span class="quotelev1">&gt;                                   a 2&#161;&#209; improvement in shared-memory
</span><br>
<span class="quotelev1">&gt;                                   latency.
</span><br>
<span class="quotelev1">&gt;                                 * Non-null messages incur more than a
</span><br>
<span class="quotelev1">&gt;                                   10% penalty, which is largely
</span><br>
<span class="quotelev1">&gt;                                   addressed by our data-convertor
</span><br>
<span class="quotelev1">&gt;                                   optimization.
</span><br>
<span class="quotelev1">&gt;                                 * At larger np, we maintain our fast
</span><br>
<span class="quotelev1">&gt;                                   performance while OMPI &quot;out of the
</span><br>
<span class="quotelev1">&gt;                                   box&quot; keeps slowing down more and
</span><br>
<span class="quotelev1">&gt;                                   more and more.
</span><br>
<span class="quotelev1">&gt;                             *M9000
</span><br>
<span class="quotelev1">&gt;                             *Here are results for a 128-core M9000. I
</span><br>
<span class="quotelev1">&gt;                             think the system has:
</span><br>
<span class="quotelev1">&gt;                                 * 2 hardware threads per core (but we
</span><br>
<span class="quotelev1">&gt;                                   only use one hardware thread per core)
</span><br>
<span class="quotelev1">&gt;                                 * 4 cores per socket
</span><br>
<span class="quotelev1">&gt;                                 * 4 sockets per board
</span><br>
<span class="quotelev1">&gt;                                 * 4 boards per (half?)
</span><br>
<span class="quotelev1">&gt;                                 * 2 (halves?) per system
</span><br>
<span class="quotelev1">&gt;                             As one separates the sender and receiver,
</span><br>
<span class="quotelev1">&gt;                             hardware latency increases. Here is the
</span><br>
<span class="quotelev1">&gt;                             hierarchy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             latency (nsec) bandwidth (Mbyte/sec)
</span><br>
<span class="quotelev1">&gt;                             out-of-box fastpath out-of-box fastpath
</span><br>
<span class="quotelev1">&gt;                             (on-socket?) 810 480 2000 2000
</span><br>
<span class="quotelev1">&gt;                             (on-board?) 2050 1820 1900 1900
</span><br>
<span class="quotelev1">&gt;                             (half?) 3030 2840 1680 1680
</span><br>
<span class="quotelev1">&gt;                             3150 2960 1660 1660
</span><br>
<span class="quotelev1">&gt;                             Note:
</span><br>
<span class="quotelev1">&gt;                                 * Latency benefits some hundreds of
</span><br>
<span class="quotelev1">&gt;                                   nsecs with fastpath.
</span><br>
<span class="quotelev1">&gt;                                 * This latency improvement is striking
</span><br>
<span class="quotelev1">&gt;                                   when the hardware latency is small,
</span><br>
<span class="quotelev1">&gt;                                   but less noticeable as as the
</span><br>
<span class="quotelev1">&gt;                                   hardware latency increases.
</span><br>
<span class="quotelev1">&gt;                                 * Bandwidth is not very sensitive to
</span><br>
<span class="quotelev1">&gt;                                   hardware latency (due to prefetch)
</span><br>
<span class="quotelev1">&gt;                                   and not at all to fast-path
</span><br>
<span class="quotelev1">&gt;                                   optimizations.
</span><br>
<span class="quotelev1">&gt;                             Here are HPCC pingpong latencies for
</span><br>
<span class="quotelev1">&gt;                             increasing process counts:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             out-of-box fastpath
</span><br>
<span class="quotelev1">&gt;                             np ----------------- -----------------
</span><br>
<span class="quotelev1">&gt;                             min avg max min avg max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             2 812 812 812 499 499 499
</span><br>
<span class="quotelev1">&gt;                             4 874 921 999 437 494 562
</span><br>
<span class="quotelev1">&gt;                             8 937 1847 2624 437 1249 1874
</span><br>
<span class="quotelev1">&gt;                             16 1062 2430 2937 437 1557 1937
</span><br>
<span class="quotelev1">&gt;                             32 1562 3850 5437 375 2211 2875
</span><br>
<span class="quotelev1">&gt;                             64 2687 8329 15874 437 2535 3062
</span><br>
<span class="quotelev1">&gt;                             80 3499 16854 41749 374 2647 3437
</span><br>
<span class="quotelev1">&gt;                             96 3812 31159 100812 374 2717 3437
</span><br>
<span class="quotelev1">&gt;                             128 5187 125774 335187 437 2793 3499
</span><br>
<span class="quotelev1">&gt;                             The improvements are tremendous:
</span><br>
<span class="quotelev1">&gt;                                 * At low np, latencies are low since
</span><br>
<span class="quotelev1">&gt;                                   sender and receiver can be
</span><br>
<span class="quotelev1">&gt;                                   colocated. Nevertheless, fast-path
</span><br>
<span class="quotelev1">&gt;                                   optimizations provided a nearly 2&#161;&#209;
</span><br>
<span class="quotelev1">&gt;                                   improvement.
</span><br>
<span class="quotelev1">&gt;                                 * As np increases, fast-path latency
</span><br>
<span class="quotelev1">&gt;                                   also increases, but this is due to
</span><br>
<span class="quotelev1">&gt;                                   higher hardware latencies. Indeed,
</span><br>
<span class="quotelev1">&gt;                                   the &quot;min&quot; numbers even drop a
</span><br>
<span class="quotelev1">&gt;                                   little. The &quot;max&quot; fast-path numbers
</span><br>
<span class="quotelev1">&gt;                                   basically only represent the
</span><br>
<span class="quotelev1">&gt;                                   increase in hardware latency.
</span><br>
<span class="quotelev1">&gt;                                 * As np increases, OMPI &quot;out of the
</span><br>
<span class="quotelev1">&gt;                                   box&quot; latency suffers
</span><br>
<span class="quotelev1">&gt;                                   catastrophically. Not only is there
</span><br>
<span class="quotelev1">&gt;                                   the issue of more connections to
</span><br>
<span class="quotelev1">&gt;                                   poll, but the polling behaviors of
</span><br>
<span class="quotelev1">&gt;                                   non-participating processes wreak
</span><br>
<span class="quotelev1">&gt;                                   havoc on the performance of measured
</span><br>
<span class="quotelev1">&gt;                                   processes.
</span><br>
<span class="quotelev1">&gt;                                *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 * We can separate the two sources of
</span><br>
<span class="quotelev1">&gt;                                   latency degradation by putting the
</span><br>
<span class="quotelev1">&gt;                                   np-2 non-participating processes to
</span><br>
<span class="quotelev1">&gt;                                   sleep. In that case, latency only
</span><br>
<span class="quotelev1">&gt;                                   rises to about 10-20 &#163;gsec. So,
</span><br>
<span class="quotelev1">&gt;                                   polling of many connections causes a
</span><br>
<span class="quotelev1">&gt;                                   substantial rise in latency, while
</span><br>
<span class="quotelev1">&gt;                                   the disturbance of hard-poll loops
</span><br>
<span class="quotelev1">&gt;                                   on system performance is responsible
</span><br>
<span class="quotelev1">&gt;                                   for even more degradation.
</span><br>
<span class="quotelev1">&gt;                                   Actually, even bandwidth benefits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                   out-of-box fastpath
</span><br>
<span class="quotelev1">&gt;                                   np -------------- -------------
</span><br>
<span class="quotelev1">&gt;                                   min avg max min avg max
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                   2 2015 2034 2053 2028 2039 2051
</span><br>
<span class="quotelev1">&gt;                                   4 2002 2043 2077 1993 2032 2065
</span><br>
<span class="quotelev1">&gt;                                   8 1888 1959 2035 1897 1969 2088
</span><br>
<span class="quotelev1">&gt;                                   16 1863 1934 2046 1856 1937 2066
</span><br>
<span class="quotelev1">&gt;                                   32 1626 1796 2038 1581 1798 2068
</span><br>
<span class="quotelev1">&gt;                                   64 1557 1709 1969 1591 1729 2084
</span><br>
<span class="quotelev1">&gt;                                   80 1439 1619 1902 1561 1706 2059
</span><br>
<span class="quotelev1">&gt;                                   96 1281 1452 1722 1500 1689 2005
</span><br>
<span class="quotelev1">&gt;                                   128 677 835 1276 893 1671 1906
</span><br>
<span class="quotelev1">&gt;                                   Here, we see that even bandwidth
</span><br>
<span class="quotelev1">&gt;                                   suffers &quot;out of the box&quot; as the
</span><br>
<span class="quotelev1">&gt;                                   number of hard-spinning processes
</span><br>
<span class="quotelev1">&gt;                                   increases. Note the degradation in
</span><br>
<span class="quotelev1">&gt;                                   &quot;out-of-box&quot; average bandwidths as
</span><br>
<span class="quotelev1">&gt;                                   np increases. In contrast, the
</span><br>
<span class="quotelev1">&gt;                                   &quot;fastpath&quot; average holds up well.
</span><br>
<span class="quotelev1">&gt;                                   (The np=128 min fastpath number 893
</span><br>
<span class="quotelev1">&gt;                                   Mbyte/sec is poor, but analysis
</span><br>
<span class="quotelev1">&gt;                                   shows it to be a measurement outlier.)
</span><br>
<span class="quotelev1">&gt;                                   *MPI_Sendrecv()
</span><br>
<span class="quotelev1">&gt;                                   *We should also get these
</span><br>
<span class="quotelev1">&gt;                                   optimizations into MPI_Sendrecv() in
</span><br>
<span class="quotelev1">&gt;                                   order to speed up the HPCC &quot;ring&quot;
</span><br>
<span class="quotelev1">&gt;                                   results. E.g., here are latencies in
</span><br>
<span class="quotelev1">&gt;                                   &#163;gsecs for a performance measurement
</span><br>
<span class="quotelev1">&gt;                                   based on HPCC &quot;ring&quot; tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                   ==================================================
</span><br>
<span class="quotelev1">&gt;                                   np=64
</span><br>
<span class="quotelev1">&gt;                                   natural random
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                   &quot;out of box&quot; 11.7 10.9
</span><br>
<span class="quotelev1">&gt;                                   fast path 8.3 6.2
</span><br>
<span class="quotelev1">&gt;                                   fast path and 100 warmups 3.5 3.6
</span><br>
<span class="quotelev1">&gt;                                   ==================================================
</span><br>
<span class="quotelev1">&gt;                                   np=128 latency
</span><br>
<span class="quotelev1">&gt;                                   natural random
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                   &quot;out of box&quot; 242.9 226.1
</span><br>
<span class="quotelev1">&gt;                                   fast path 56.6 37.0
</span><br>
<span class="quotelev1">&gt;                                   fast path and 100 warmups 4.2 4.1
</span><br>
<span class="quotelev1">&gt;                                   ==================================================
</span><br>
<span class="quotelev1">&gt;                                   There happen to be two problems here:
</span><br>
<span class="quotelev1">&gt;                                       o We need fast-path
</span><br>
<span class="quotelev1">&gt;                                         optimizations in
</span><br>
<span class="quotelev1">&gt;                                         MPI_Sendrecv() for improved
</span><br>
<span class="quotelev1">&gt;                                         performance.
</span><br>
<span class="quotelev1">&gt;                                       o The MPI collective operation
</span><br>
<span class="quotelev1">&gt;                                         preceding the &quot;ring&quot;
</span><br>
<span class="quotelev1">&gt;                                         measurement has &quot;ragged&quot; exit
</span><br>
<span class="quotelev1">&gt;                                         times. So, the &quot;ring&quot; timing
</span><br>
<span class="quotelev1">&gt;                                         starts well before all of the
</span><br>
<span class="quotelev1">&gt;                                         processes have entered that
</span><br>
<span class="quotelev1">&gt;                                         measurement. This is a
</span><br>
<span class="quotelev1">&gt;                                         separate OMPI performance
</span><br>
<span class="quotelev1">&gt;                                         problem that must be handled
</span><br>
<span class="quotelev1">&gt;                                         as well for good HPCC results.
</span><br>
<span class="quotelev1">&gt;                                   *Open Issues
</span><br>
<span class="quotelev1">&gt;                                   *Here are some open issues:
</span><br>
<span class="quotelev1">&gt;                                       o *Side effects*. Should the
</span><br>
<span class="quotelev1">&gt;                                         sendi and recvi functions
</span><br>
<span class="quotelev1">&gt;                                         leave any side effects if they
</span><br>
<span class="quotelev1">&gt;                                         do not complete the specified
</span><br>
<span class="quotelev1">&gt;                                         operation?
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o To my taste, they should not.
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o Currently, however, the sendi
</span><br>
<span class="quotelev1">&gt;                                         function is expected to
</span><br>
<span class="quotelev1">&gt;                                         allocate a descriptor if it
</span><br>
<span class="quotelev1">&gt;                                         can, even if it cannot
</span><br>
<span class="quotelev1">&gt;                                         complete the entire send
</span><br>
<span class="quotelev1">&gt;                                         operation.
</span><br>
<span class="quotelev1">&gt;                                       o *recvi**: BTL and match
</span><br>
<span class="quotelev1">&gt;                                         header*. An in-coming message
</span><br>
<span class="quotelev1">&gt;                                         starts with a &quot;match header&quot;,
</span><br>
<span class="quotelev1">&gt;                                         with such data as MPI source
</span><br>
<span class="quotelev1">&gt;                                         rank, MPI communicator, and
</span><br>
<span class="quotelev1">&gt;                                         MPI tag for performing MPI
</span><br>
<span class="quotelev1">&gt;                                         message matching. Presumably,
</span><br>
<span class="quotelev1">&gt;                                         the BTL knows nothing about
</span><br>
<span class="quotelev1">&gt;                                         this header. Message matching
</span><br>
<span class="quotelev1">&gt;                                         is performed, for example, via
</span><br>
<span class="quotelev1">&gt;                                         PML callback functions. We are
</span><br>
<span class="quotelev1">&gt;                                         aggressively trying to
</span><br>
<span class="quotelev1">&gt;                                         optimize this code path,
</span><br>
<span class="quotelev1">&gt;                                         however, so we should consider
</span><br>
<span class="quotelev1">&gt;                                         alternatives to that approach.
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o One alternative is simply for
</span><br>
<span class="quotelev1">&gt;                                         the BTL to perform a
</span><br>
<span class="quotelev1">&gt;                                         byte-by-byte comparison
</span><br>
<span class="quotelev1">&gt;                                         between the received header
</span><br>
<span class="quotelev1">&gt;                                         and the specified header. The
</span><br>
<span class="quotelev1">&gt;                                         PML already tells the BTL how
</span><br>
<span class="quotelev1">&gt;                                         many bytes are in the header.
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o One problem with this approach
</span><br>
<span class="quotelev1">&gt;                                         is that the fast path would
</span><br>
<span class="quotelev1">&gt;                                         not be able to support the
</span><br>
<span class="quotelev1">&gt;                                         wildcard tag MPI_ANY_TAG.
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o Further, it leaves open the
</span><br>
<span class="quotelev1">&gt;                                         question how one extracts
</span><br>
<span class="quotelev1">&gt;                                         information (such as source or
</span><br>
<span class="quotelev1">&gt;                                         tag) from this header for the
</span><br>
<span class="quotelev1">&gt;                                         MPI_Status structure.
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o We can imagine a variety of
</span><br>
<span class="quotelev1">&gt;                                         solutions here, but so far
</span><br>
<span class="quotelev1">&gt;                                         we've implemented a very
</span><br>
<span class="quotelev1">&gt;                                         simple (even if
</span><br>
<span class="quotelev1">&gt;                                         architecturally distasteful)
</span><br>
<span class="quotelev1">&gt;                                         solution: we hardwire
</span><br>
<span class="quotelev1">&gt;                                         information (previously
</span><br>
<span class="quotelev1">&gt;                                         private to the PML) about the
</span><br>
<span class="quotelev1">&gt;                                         match header into the BTL.
</span><br>
<span class="quotelev1">&gt;                                      o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       o That approach can be replaced
</span><br>
<span class="quotelev1">&gt;                                         with other solutions.
</span><br>
<span class="quotelev1">&gt;                                       o *MPI_Sendrecv()** support*. As
</span><br>
<span class="quotelev1">&gt;                                         discussed earlier, we should
</span><br>
<span class="quotelev1">&gt;                                         support fast-path
</span><br>
<span class="quotelev1">&gt;                                         optimizations for &quot;immediate&quot;
</span><br>
<span class="quotelev1">&gt;                                         send-receive operations.
</span><br>
<span class="quotelev1">&gt;                                         Again, this may entail some
</span><br>
<span class="quotelev1">&gt;                                         movement of current OMPI
</span><br>
<span class="quotelev1">&gt;                                         architectural boundaries.
</span><br>
<span class="quotelev1">&gt;                                         Other optimizations that are
</span><br>
<span class="quotelev1">&gt;                                         needed for good HPCC results
</span><br>
<span class="quotelev1">&gt;                                         include:
</span><br>
<span class="quotelev1">&gt;                                             + reducing the degradation
</span><br>
<span class="quotelev1">&gt;                                               due to hard spin waits
</span><br>
<span class="quotelev1">&gt;                                             + improving the
</span><br>
<span class="quotelev1">&gt;                                               performance of
</span><br>
<span class="quotelev1">&gt;                                               collective operations
</span><br>
<span class="quotelev1">&gt;                                               (which &quot;artificially&quot;
</span><br>
<span class="quotelev1">&gt;                                               degrade HPCC &quot;ring&quot; test
</span><br>
<span class="quotelev1">&gt;                                               results)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5227.php">Timothy Hayes: "[OMPI devel] When can I use OOB channel?"</a>
<li><strong>In reply to:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
