<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 22:21:53 2007" -->
<!-- isoreceived="20070718022153" -->
<!-- sent="Tue, 17 Jul 2007 20:21:38 -0600" -->
<!-- isosent="20070718022138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] FW:  Major reduction in ORTE" -->
<!-- id="C2C2D552.351A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84122C85-148B-476F-985F-5CE3E6658BC7_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 22:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Previous message:</strong> <a href="1917.php">Ralph Castain: "[OMPI devel] Hostfile changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>This was discussed at some length in the weekly core developers telecon -
<br>
with the discussion continued in a dedicated follow-on telecon later this
<br>
afternoon. The consensus of those participating in the dedicated telecon was
<br>
that this plan should be followed, and that the proposed cellid commit in
<br>
step 1 go forward.
<br>
<p>We also agreed that work done on these steps would be done in tmp branches
<br>
so the results could be evaluated and tested prior to commit into the OMPI
<br>
trunk. I would like to emphasize that this (IMHO) is a practice that should
<br>
be employed for any non-trivial change.
<br>
<p>As we step through the proposed changes, we will inform the group of our
<br>
progress and details of planned implementations as they become clearer. As I
<br>
hopefully made clear during the follow-on telecon, we don't have detailed
<br>
answers to how each of these will be done, particularly as we look deeper
<br>
into the progression. However, the first few steps are pretty clear and,
<br>
once implemented, should yield insight into the following steps.
<br>
<p>FYI: I sent a note to the devel and core-devel lists pointing to the Trac
<br>
ticket describing the planned hostfile changes to be implemented in step 2.
<br>
Please provide comments on that work as desired.
<br>
<p>Our expected timetable remains to complete these proposed changes by the
<br>
Oct-Nov timeframe, barring any unforeseen obstacles.
<br>
<p>Thanks again for everyone's comments and participation. Please feel free to
<br>
request updates/info, and/or to make further suggestions.
<br>
<p>Ralph
<br>
<p><p>------ Forwarded Message
<br>
From: Brian Barrett &lt;bbarrett_at_[hidden]&gt;
<br>
Date: Tue, 17 Jul 2007 14:06:44 -0600
<br>
To: Ralph Castian &lt;rhc_at_[hidden]&gt;
<br>
Subject: Fwd: [OMPI devel] Major reduction in ORTE
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: July 12, 2007 3:04:01 PM MDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Core Developers &lt;devel-core_at_[hidden]&gt;, Open MPI
</span><br>
<span class="quotelev1">&gt; Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Major reduction in ORTE
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As we are discussing functional requirements for the upcoming 1.3
</span><br>
<span class="quotelev1">&gt; release, I
</span><br>
<span class="quotelev1">&gt; was asked to provide a little info about what is going to be
</span><br>
<span class="quotelev1">&gt; happening to
</span><br>
<span class="quotelev1">&gt; the ORTE part of the code base over the remainder of this year.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short answer: there will be a major code revision to reduce ORTE to
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; minimum required to support Open MPI. This includes (a) a major design
</span><br>
<span class="quotelev1">&gt; change away from event-driven programming that will result in the
</span><br>
<span class="quotelev1">&gt; consolidation of several frameworks and removal of at least two
</span><br>
<span class="quotelev1">&gt; others; and
</span><br>
<span class="quotelev1">&gt; (b) general cleanup to reduce memory footprint, startup message
</span><br>
<span class="quotelev1">&gt; size, and
</span><br>
<span class="quotelev1">&gt; other areas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Longer explanation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the beginning of the Open MPI project, it was quickly determined
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; nobody (myself perhaps excepted) really wanted to build/maintain
</span><br>
<span class="quotelev1">&gt; the RTE
</span><br>
<span class="quotelev1">&gt; underpinning Open MPI. We were, after all, primarily interested in
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt; Hence, we thought it would be a good thing if we could define an
</span><br>
<span class="quotelev1">&gt; RTE that
</span><br>
<span class="quotelev1">&gt; would be of adequate general interest to attract partners whose
</span><br>
<span class="quotelev1">&gt; primary
</span><br>
<span class="quotelev1">&gt; focus would be extension and support of the RTE itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, after several years, it is clear that the original idea isn't
</span><br>
<span class="quotelev1">&gt; going to
</span><br>
<span class="quotelev1">&gt; work (for a variety of reasons that aren't worth recounting here). We
</span><br>
<span class="quotelev1">&gt; therefore decided recently that it is time to accept the
</span><br>
<span class="quotelev1">&gt; inevitable, quit
</span><br>
<span class="quotelev1">&gt; trying to support a more general RTE, and instead spend some effort
</span><br>
<span class="quotelev1">&gt; reducing
</span><br>
<span class="quotelev1">&gt; the ORTE layer down to its most basic requirements. In particular,
</span><br>
<span class="quotelev1">&gt; we want
</span><br>
<span class="quotelev1">&gt; to make the code easier to maintain and debug, faster and more
</span><br>
<span class="quotelev1">&gt; scalable for
</span><br>
<span class="quotelev1">&gt; startup, and less vulnerable to race conditions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In its essence, the plan consists of the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. remove the cellid from the process name as the code will solely
</span><br>
<span class="quotelev1">&gt; be a
</span><br>
<span class="quotelev1">&gt; single-cluster system. Other interested parties have offered to
</span><br>
<span class="quotelev1">&gt; provide an
</span><br>
<span class="quotelev1">&gt; overlayer that will cross-connect Open MPI instances across
</span><br>
<span class="quotelev1">&gt; clusters - we
</span><br>
<span class="quotelev1">&gt; will work with them to help facilitate the necessary hooks, but won't
</span><br>
<span class="quotelev1">&gt; duplicate that connectivity internally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. remove the RDS framework. All discovery and allocation will be
</span><br>
<span class="quotelev1">&gt; done in a
</span><br>
<span class="quotelev1">&gt; single step in the RAS. We will revise the RAS to allow better co-
</span><br>
<span class="quotelev1">&gt; existence
</span><br>
<span class="quotelev1">&gt; of resource manager specified allocations and hostfiles (more on that
</span><br>
<span class="quotelev1">&gt; later).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Eliminate the GPR framework, or at the very least, removal of the
</span><br>
<span class="quotelev1">&gt; subscribe/trigger functionality from it. We will be moving away
</span><br>
<span class="quotelev1">&gt; from the
</span><br>
<span class="quotelev1">&gt; current event-driven architecture to reduce our exposure to race
</span><br>
<span class="quotelev1">&gt; conditions
</span><br>
<span class="quotelev1">&gt; and eliminate the complexity caused by recursive callbacks due to
</span><br>
<span class="quotelev1">&gt; trigger
</span><br>
<span class="quotelev1">&gt; events. We will explore globalized data storage in simplified
</span><br>
<span class="quotelev1">&gt; arrays as an
</span><br>
<span class="quotelev1">&gt; alternative to the GPR database - initial tests support the idea, but
</span><br>
<span class="quotelev1">&gt; further work needs to be done. We know that people like the Eclipse
</span><br>
<span class="quotelev1">&gt; PTP team
</span><br>
<span class="quotelev1">&gt; need access to certain data - we will work with them to figure out
</span><br>
<span class="quotelev1">&gt; the best
</span><br>
<span class="quotelev1">&gt; way to do so given the changes to/departure of the GPR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Consolidate the NS, PLS, RMGR, and SMR framework functionality
</span><br>
<span class="quotelev1">&gt; into a
</span><br>
<span class="quotelev1">&gt; single process lifecycle management (PLM) framework. PLM components
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; still call the ERRMGR to deal with response to process failures,
</span><br>
<span class="quotelev1">&gt; and will
</span><br>
<span class="quotelev1">&gt; assume responsibility for storing their own data. The SCHEMA
</span><br>
<span class="quotelev1">&gt; framework will
</span><br>
<span class="quotelev1">&gt; be eliminated as part of this change. We will move some functions
</span><br>
<span class="quotelev1">&gt; (e.g.,
</span><br>
<span class="quotelev1">&gt; orte_abort) that are currently in the runtime and util areas into
</span><br>
<span class="quotelev1">&gt; the PLM
</span><br>
<span class="quotelev1">&gt; components as appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Each framework will have logic in their respective &quot;open&quot;
</span><br>
<span class="quotelev1">&gt; function that
</span><br>
<span class="quotelev1">&gt; specifically prevents them from performing component_open unless we
</span><br>
<span class="quotelev1">&gt; are on
</span><br>
<span class="quotelev1">&gt; the HNP. If we are not on the HNP, an #if ORTE_WANT_NO_SUPPORT will
</span><br>
<span class="quotelev1">&gt; force
</span><br>
<span class="quotelev1">&gt; the use of a &quot;no_op&quot; module that does nothing, but whose return
</span><br>
<span class="quotelev1">&gt; codes will
</span><br>
<span class="quotelev1">&gt; indicate that an error did not occur. If that is not set, then a proxy
</span><br>
<span class="quotelev1">&gt; module will be utilized that provides appropriate communications to
</span><br>
<span class="quotelev1">&gt; the HNP
</span><br>
<span class="quotelev1">&gt; to support remote applications. This will reduce memory footprints
</span><br>
<span class="quotelev1">&gt; (since no
</span><br>
<span class="quotelev1">&gt; components will be opened) and allow us to simply pass-through MCA
</span><br>
<span class="quotelev1">&gt; params to
</span><br>
<span class="quotelev1">&gt; all processes while ensuring proper functionality is available.
</span><br>
<span class="quotelev1">&gt; Note that
</span><br>
<span class="quotelev1">&gt; environments like CNOS may still require special components in some
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; frameworks as the &quot;no_op&quot; may not be suitable for all API functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. the SDS framework will not only support name discovery, but will
</span><br>
<span class="quotelev1">&gt; hold all
</span><br>
<span class="quotelev1">&gt; backend operations required during startup. For example, the
</span><br>
<span class="quotelev1">&gt; contents of the
</span><br>
<span class="quotelev1">&gt; message now sent back to the new PLM by each process will be
</span><br>
<span class="quotelev1">&gt; dependent upon
</span><br>
<span class="quotelev1">&gt; environment. Hence, a one-to-one correspondence will be established
</span><br>
<span class="quotelev1">&gt; between
</span><br>
<span class="quotelev1">&gt; PLM and SDS components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7. consolidate the data in the MPI startup message (currently
</span><br>
<span class="quotelev1">&gt; delivered at
</span><br>
<span class="quotelev1">&gt; STG1 stagegate). For example, any data in the MPI startup message
</span><br>
<span class="quotelev1">&gt; that needs
</span><br>
<span class="quotelev1">&gt; to be indexed will be sent in an array sorted by vpid (no need to
</span><br>
<span class="quotelev1">&gt; send the
</span><br>
<span class="quotelev1">&gt; entire list of process name structs). Whereas before we couldn't take
</span><br>
<span class="quotelev1">&gt; advantage of our knowledge of the message contents since it was
</span><br>
<span class="quotelev1">&gt; generated by
</span><br>
<span class="quotelev1">&gt; the GPR (which by design had no insight into the data), we will now
</span><br>
<span class="quotelev1">&gt; exploit
</span><br>
<span class="quotelev1">&gt; our knowledge to ensure the message is only that required by the
</span><br>
<span class="quotelev1">&gt; specific
</span><br>
<span class="quotelev1">&gt; environment. We will look at, for example, the direct one-to-one
</span><br>
<span class="quotelev1">&gt; correspondence of PLM to SDS to see how this can best be implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other things (e.g., routing of RML messages) are either already under
</span><br>
<span class="quotelev1">&gt; development or under discussion - we will provide more info on
</span><br>
<span class="quotelev1">&gt; these as they
</span><br>
<span class="quotelev1">&gt; move along.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As always, any thoughts/suggestions are welcomed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<p><p>------ End of Forwarded Message
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Previous message:</strong> <a href="1917.php">Ralph Castain: "[OMPI devel] Hostfile changes"</a>
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
