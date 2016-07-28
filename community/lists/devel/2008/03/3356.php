<?
$subject_val = "Re: [OMPI devel] Fwd: OpenMPI changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 16:38:15 2008" -->
<!-- isoreceived="20080304213815" -->
<!-- sent="Tue, 4 Mar 2008 16:37:42 -0500" -->
<!-- isosent="20080304213742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenMPI changes" -->
<!-- id="9723505F-BF48-4B16-80E2-38BA37E3D800_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6F7C2A16-90E7-46D4-85BA-9D74945E94E6_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: OpenMPI changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 16:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3357.php">Ralph H Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<li><strong>In reply to:</strong> <a href="3353.php">Greg Watson: "[OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3357.php">Ralph H Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Reply:</strong> <a href="3357.php">Ralph H Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Reply:</strong> <a href="3358.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg --
<br>
<p>I admit to being a bit puzzled here.  Ralph sent around RFCs about  
<br>
these changes many months ago.  Everyone said they didn't want this  
<br>
functionality -- it was seen as excess functionality that Open MPI  
<br>
didn't want or need -- so it was all removed.
<br>
<p>As such, I have to agree with Ralph that it is an &quot;enhancement&quot; to re- 
<br>
add the functionality.  That being said, patches are always welcome!   
<br>
IBM has signed the OMPI 3rd party contribution agreement, so it could  
<br>
be contributed directly.
<br>
<p>Sidenote: I was also under the impression that PTP was being re-geared  
<br>
towards STCI and moving away from ORTE anyway.  Is this incorrect?
<br>
<p><p><p>On Mar 4, 2008, at 3:24 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph informs me that significant functionality has been removed from
</span><br>
<span class="quotelev1">&gt; ORTE in 1.3. Unfortunately this functionality was being used by PTP to
</span><br>
<span class="quotelev1">&gt; provide support for OMPI, and without it, it seems unlikely that PTP
</span><br>
<span class="quotelev1">&gt; will be able to work with 1.3. Apparently restoring this lost
</span><br>
<span class="quotelev1">&gt; functionality is an &quot;enhancement&quot; of 1.3, and so is something that
</span><br>
<span class="quotelev1">&gt; will not necessarily be done. Having worked with OMPI from a very
</span><br>
<span class="quotelev1">&gt; early stage to ensure that we were able to provide robust support, I
</span><br>
<span class="quotelev1">&gt; must say it is a bit disappointing that this approach is being taken.
</span><br>
<span class="quotelev1">&gt; I hope that the community will view this &quot;enhancement&quot; as worthwhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/29/08 7:13 AM, &quot;Gregory R Watson&quot; &lt;grw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote on 02/29/2008 12:18:39 AM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 02/29/08 12:18 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gregory R Watson/Watson/IBM_at_IBMUS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Re: OpenMPI changes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All of the prior options (and some new ones) for spawning a job
</span><br>
<span class="quotelev2">&gt;&gt; are fully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supported in the new interface. Instead of setting them with
</span><br>
<span class="quotelev2">&gt;&gt; &quot;attributes&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you create an orte_job_t object and just fill them in. This is
</span><br>
<span class="quotelev2">&gt;&gt; precisely how
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun does it - you can look at that code if you want an
</span><br>
<span class="quotelev2">&gt;&gt; example, though it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is somewhat complex. Alternatively, you can look at the way it is
</span><br>
<span class="quotelev2">&gt;&gt; done for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm_spawn, which may be more analogous to your situation - that
</span><br>
<span class="quotelev2">&gt;&gt; code is in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/dpm/orte.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All the tools library does is communicate the job object to the
</span><br>
<span class="quotelev2">&gt;&gt; target
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; persistent daemon so it can do the work. This way, you don't have
</span><br>
<span class="quotelev2">&gt;&gt; to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the frameworks, deal directly with the plm interface, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alternatively, you are welcome to do a full orte_init and use the
</span><br>
<span class="quotelev2">&gt;&gt; frameworks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yourself - there is no requirement to use the library. I only
</span><br>
<span class="quotelev2">&gt;&gt; offer it as an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; alternative.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I can tell, neither API provides the same functionality
</span><br>
<span class="quotelev2">&gt;&gt; as that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available in 1.2. While this might be beneficial for OMPI-specific
</span><br>
<span class="quotelev2">&gt;&gt; activities,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the changes appear to severely limit the interaction of tools with
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime. At this point, I can't see either interface supporting PTP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I went ahead and added a notification capability to the system -
</span><br>
<span class="quotelev2">&gt;&gt; took about
</span><br>
<span class="quotelev2">&gt;&gt; 30 minutes. I can provide notice of job and process state changes
</span><br>
<span class="quotelev2">&gt;&gt; since I
</span><br>
<span class="quotelev2">&gt;&gt; see those. Node state changes, however, are different - I can notify
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; them, but we have no way of seeing them. None of the environments we
</span><br>
<span class="quotelev2">&gt;&gt; support
</span><br>
<span class="quotelev2">&gt;&gt; tell us when a node fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know that the tool library works because it uses the identical
</span><br>
<span class="quotelev2">&gt;&gt; APIs as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm_spawn and mpirun. I have also tested them by building my own
</span><br>
<span class="quotelev2">&gt;&gt; tools.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's a big difference being on a code path that *must* work
</span><br>
<span class="quotelev2">&gt;&gt; because it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used by core components, to one that is provided as an add-on for
</span><br>
<span class="quotelev2">&gt;&gt; external
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools. I may be worrying needlessly if this new interface becomes an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;officially supported&quot; API. Is that planned? At a minimum, it
</span><br>
<span class="quotelev2">&gt;&gt; seems like it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going to complicate your testing process, since you're going to
</span><br>
<span class="quotelev2">&gt;&gt; need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide a separate set of tests that exercise this interface
</span><br>
<span class="quotelev2">&gt;&gt; independent of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the rest of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is an officially supported API. Testing is not as big a problem
</span><br>
<span class="quotelev2">&gt;&gt; as you
</span><br>
<span class="quotelev2">&gt;&gt; might expect since the library exercises the same code paths as
</span><br>
<span class="quotelev2">&gt;&gt; mpirun and
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn. Like I said, I have written my own tools that exercise  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; library - no problem using them as tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We do not launch an orted for any tool-library query. All we do is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicate the query to the target persistent daemon or mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; Those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; entities have recv's posted to catch any incoming messages and
</span><br>
<span class="quotelev2">&gt;&gt; execute the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You are correct that we no longer have event driven notification
</span><br>
<span class="quotelev2">&gt;&gt; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system. I repeatedly asked the community (on both devel and core
</span><br>
<span class="quotelev2">&gt;&gt; lists) for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; input on that question, and received no indications that anyone
</span><br>
<span class="quotelev2">&gt;&gt; wanted it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supported. It can be added back into the system, but would
</span><br>
<span class="quotelev2">&gt;&gt; require the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; approval of the OMPI community. I don't know how problematic that
</span><br>
<span class="quotelev2">&gt;&gt; would be -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there is a lot of concern over the amount of memory, overhead,
</span><br>
<span class="quotelev2">&gt;&gt; and potential
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reliability issues that surround event notification. If you want
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; capability, I suggest we discuss it, come up with a plan that
</span><br>
<span class="quotelev2">&gt;&gt; deals with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those issues, and then take a proposal to the devel list for
</span><br>
<span class="quotelev2">&gt;&gt; discussion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As for reliability, the objectives of the last year's effort were
</span><br>
<span class="quotelev2">&gt;&gt; precisely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scalability and reliability. We did a lot of work to eliminate
</span><br>
<span class="quotelev2">&gt;&gt; recursive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deadlocks and improve the reliability of the code. Our current
</span><br>
<span class="quotelev2">&gt;&gt; testing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; indicates we had considerable success in that regard,
</span><br>
<span class="quotelev2">&gt;&gt; particularly with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recursion elimination commit earlier today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would be happy to work with you to meet the PTP's needs - we'll
</span><br>
<span class="quotelev2">&gt;&gt; just need
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to work with the OMPI community to ensure everyone buys into the
</span><br>
<span class="quotelev2">&gt;&gt; plan. If it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would help, I could come and review the new arch with the team (I
</span><br>
<span class="quotelev2">&gt;&gt; already
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gave a presentation on it to IBM Rochester MN) and discuss required
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enhancements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PTP's needs have not changed since 1.0. From our perspective, the
</span><br>
<span class="quotelev2">&gt;&gt; 1.3 branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply removes functionality that is required for PTP to support
</span><br>
<span class="quotelev2">&gt;&gt; OMPI. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems strange that we need &quot;approval of the OMPI community&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; continue to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality that has been available since 1.0. In any case,
</span><br>
<span class="quotelev2">&gt;&gt; there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunately no resources to work on the kind of re-engineering
</span><br>
<span class="quotelev2">&gt;&gt; that appears
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be required to support 1.3, even if it did provide the
</span><br>
<span class="quotelev2">&gt;&gt; functionality we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I have to be driven by the OMPI community's requirements
</span><br>
<span class="quotelev2">&gt;&gt; since they
</span><br>
<span class="quotelev2">&gt;&gt; pay my salary :-)  What they need is a &quot;lean, mean, OMPI machine&quot; as
</span><br>
<span class="quotelev2">&gt;&gt; they
</span><br>
<span class="quotelev2">&gt;&gt; say, and (for some reason) they view the debugger community as
</span><br>
<span class="quotelev2">&gt;&gt; consisting of
</span><br>
<span class="quotelev2">&gt;&gt; folks like totalview, vampirtrace, etc. - all of whom get involved
</span><br>
<span class="quotelev2">&gt;&gt; (either
</span><br>
<span class="quotelev2">&gt;&gt; directly or via one of the OMPI members) in the requirements
</span><br>
<span class="quotelev2">&gt;&gt; discussions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can't argue with business decisions, though. I gather there was some
</span><br>
<span class="quotelev2">&gt;&gt; mention
</span><br>
<span class="quotelev2">&gt;&gt; of PTP at the recent LANL/IBM RR meeting, so I'll let people know
</span><br>
<span class="quotelev2">&gt;&gt; that PTP
</span><br>
<span class="quotelev2">&gt;&gt; won't be an option on RR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I'll see if there is any interest here in adding 1.3 support to
</span><br>
<span class="quotelev2">&gt;&gt; PTP
</span><br>
<span class="quotelev2">&gt;&gt; ourselves - from looking at your code, I think it would take about a
</span><br>
<span class="quotelev2">&gt;&gt; day,
</span><br>
<span class="quotelev2">&gt;&gt; assuming someone more familiar with PTP will work with me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Take care
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3357.php">Ralph H Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3355.php">Jeff Squyres: "Re: [OMPI devel] getting config.guess/config.sub from upstream"</a>
<li><strong>In reply to:</strong> <a href="3353.php">Greg Watson: "[OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3357.php">Ralph H Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Reply:</strong> <a href="3357.php">Ralph H Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Reply:</strong> <a href="3358.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
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
