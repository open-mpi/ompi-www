<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 17:04:10 2007" -->
<!-- isoreceived="20070712210410" -->
<!-- sent="Thu, 12 Jul 2007 15:04:01 -0600" -->
<!-- isosent="20070712210401" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Major reduction in ORTE" -->
<!-- id="C2BBF361.9EFA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 17:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1872.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Previous message:</strong> <a href="1870.php">Galen Shipman: "[OMPI devel] OMPI_FREE_LIST improvements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1872.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Reply:</strong> <a href="1872.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Reply:</strong> <a href="1873.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>As we are discussing functional requirements for the upcoming 1.3 release, I
<br>
was asked to provide a little info about what is going to be happening to
<br>
the ORTE part of the code base over the remainder of this year.
<br>
<p>Short answer: there will be a major code revision to reduce ORTE to the
<br>
minimum required to support Open MPI. This includes (a) a major design
<br>
change away from event-driven programming that will result in the
<br>
consolidation of several frameworks and removal of at least two others; and
<br>
(b) general cleanup to reduce memory footprint, startup message size, and
<br>
other areas.
<br>
<p><p>Longer explanation:
<br>
<p>At the beginning of the Open MPI project, it was quickly determined that
<br>
nobody (myself perhaps excepted) really wanted to build/maintain the RTE
<br>
underpinning Open MPI. We were, after all, primarily interested in MPI.
<br>
Hence, we thought it would be a good thing if we could define an RTE that
<br>
would be of adequate general interest to attract partners whose primary
<br>
focus would be extension and support of the RTE itself.
<br>
<p>Well, after several years, it is clear that the original idea isn't going to
<br>
work (for a variety of reasons that aren't worth recounting here). We
<br>
therefore decided recently that it is time to accept the inevitable, quit
<br>
trying to support a more general RTE, and instead spend some effort reducing
<br>
the ORTE layer down to its most basic requirements. In particular, we want
<br>
to make the code easier to maintain and debug, faster and more scalable for
<br>
startup, and less vulnerable to race conditions.
<br>
<p>In its essence, the plan consists of the following:
<br>
<p>1. remove the cellid from the process name as the code will solely be a
<br>
single-cluster system. Other interested parties have offered to provide an
<br>
overlayer that will cross-connect Open MPI instances across clusters - we
<br>
will work with them to help facilitate the necessary hooks, but won't
<br>
duplicate that connectivity internally.
<br>
<p>2. remove the RDS framework. All discovery and allocation will be done in a
<br>
single step in the RAS. We will revise the RAS to allow better co-existence
<br>
of resource manager specified allocations and hostfiles (more on that
<br>
later).
<br>
<p>3. Eliminate the GPR framework, or at the very least, removal of the
<br>
subscribe/trigger functionality from it. We will be moving away from the
<br>
current event-driven architecture to reduce our exposure to race conditions
<br>
and eliminate the complexity caused by recursive callbacks due to trigger
<br>
events. We will explore globalized data storage in simplified arrays as an
<br>
alternative to the GPR database - initial tests support the idea, but
<br>
further work needs to be done. We know that people like the Eclipse PTP team
<br>
need access to certain data - we will work with them to figure out the best
<br>
way to do so given the changes to/departure of the GPR.
<br>
<p>4. Consolidate the NS, PLS, RMGR, and SMR framework functionality into a
<br>
single process lifecycle management (PLM) framework. PLM components will
<br>
still call the ERRMGR to deal with response to process failures, and will
<br>
assume responsibility for storing their own data. The SCHEMA framework will
<br>
be eliminated as part of this change. We will move some functions (e.g.,
<br>
orte_abort) that are currently in the runtime and util areas into the PLM
<br>
components as appropriate.
<br>
<p>5. Each framework will have logic in their respective &quot;open&quot; function that
<br>
specifically prevents them from performing component_open unless we are on
<br>
the HNP. If we are not on the HNP, an #if ORTE_WANT_NO_SUPPORT will force
<br>
the use of a &quot;no_op&quot; module that does nothing, but whose return codes will
<br>
indicate that an error did not occur. If that is not set, then a proxy
<br>
module will be utilized that provides appropriate communications to the HNP
<br>
to support remote applications. This will reduce memory footprints (since no
<br>
components will be opened) and allow us to simply pass-through MCA params to
<br>
all processes while ensuring proper functionality is available. Note that
<br>
environments like CNOS may still require special components in some of the
<br>
frameworks as the &quot;no_op&quot; may not be suitable for all API functions.
<br>
<p>6. the SDS framework will not only support name discovery, but will hold all
<br>
backend operations required during startup. For example, the contents of the
<br>
message now sent back to the new PLM by each process will be dependent upon
<br>
environment. Hence, a one-to-one correspondence will be established between
<br>
PLM and SDS components.
<br>
<p>7. consolidate the data in the MPI startup message (currently delivered at
<br>
STG1 stagegate). For example, any data in the MPI startup message that needs
<br>
to be indexed will be sent in an array sorted by vpid (no need to send the
<br>
entire list of process name structs). Whereas before we couldn't take
<br>
advantage of our knowledge of the message contents since it was generated by
<br>
the GPR (which by design had no insight into the data), we will now exploit
<br>
our knowledge to ensure the message is only that required by the specific
<br>
environment. We will look at, for example, the direct one-to-one
<br>
correspondence of PLM to SDS to see how this can best be implemented.
<br>
<p><p>Other things (e.g., routing of RML messages) are either already under
<br>
development or under discussion - we will provide more info on these as they
<br>
move along.
<br>
<p>As always, any thoughts/suggestions are welcomed.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1872.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Previous message:</strong> <a href="1870.php">Galen Shipman: "[OMPI devel] OMPI_FREE_LIST improvements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1872.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Reply:</strong> <a href="1872.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Reply:</strong> <a href="1873.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
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
