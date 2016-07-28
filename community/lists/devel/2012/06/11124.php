<?
$subject_val = "Re: [OMPI devel] ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 18:01:58 2012" -->
<!-- isoreceived="20120619220158" -->
<!-- sent="Wed, 20 Jun 2012 00:01:50 +0200" -->
<!-- isosent="20120619220150" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE" -->
<!-- id="BB1CDE03-C2AB-4003-9896-9DD34CB53417_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="91965210-F861-44A6-9B37-1DC804B3F3D2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTE<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 18:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11125.php">Eugene Loh: "[OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Previous message:</strong> <a href="11123.php">Jeff Squyres: "[OMPI devel] SSL certificates changing"</a>
<li><strong>In reply to:</strong> <a href="11112.php">Ralph Castain: "[OMPI devel] ORTE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been through similar processes quite a few times, with the result we all know today. Such a major change should not be done without thoughtful analysis, a careful consideration of all the potential drawbacks and benefits and, of course, the consideration of all competing approaches offering equivalent capabilities but with less impact.
<br>
<p>Moreover, now that we're moving toward the [long expected] interposition framework, I hope we will have the decency to avoid pushing major runtime interface changes, here or in other unexpected commit, before the changes required for the interposition are suitably progressed. Once we achieve the interposition goal, I guess we will apply the same rules and constraints to all potential runtimes that offer their functionalities to us (Open MPI).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 16, 2012, at 12:08 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Over the next month, there will be significant changes to ORTE both in terms of framework APIs and internal behavior. This work will focus on a few areas:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. launch scalability and timing. I try to review our status on this whenever we prepare for the start of a new release series, and as usual this prompted some work in this area. Most of the effort will focus on development of the async modex functionality described in a separate email thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. access to the BTLs, which we recently agreed to move to the OPAL layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. memory footprint reduction, particularly the removal or minimization of per-proc data stored in every process (e.g., retaining a complete copy of all modex info for all ranks in each process, regardless of communication needs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was my understanding that others interested in ORTE had forked their code bases and were not tracking the main developer's trunk. However, at the recent developers meeting, this understanding was altered as it appears other groups are actually attempting to track the trunk, resolving conflicts behind the scenes. In an attempt to aid these groups, I thought it might help if I outlined what will be happening in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The biggest anticipated changes lie in the modex and RML/OOB areas. I've outlined the async modex changes in a separate email thread. One additional element of that work will be the porting of the &quot;db&quot; (database) framework back from the ORCM project to ORTE. This framework provides a &quot;hook&quot; for researchers working on distributed, high-performance databases to investigate alternative ways of scalably supporting our modex information in a fault-tolerant manner. Eventually, the work in areas such as distributed hash-tables (DHTs) used in ORCM may make its way back to OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to scalability, the modex work is intended to contribute to the memory reduction goal. The primary emphasis here will be on changing from having each process retain complete knowledge of the contact info, locality, etc. for every process in the job, to a strategy of only caching info for processes with which the proc actually is communicating. We may look at removing all per-proc caching of info (perhaps using a shared memory model), but that has performance implications and needs further investigation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As part of that effort, we will be removing the nidmap/pidmap constructs and storing that info in the same database being used by the modex, thus collapsing the grpcomm and ess APIs by consolidating the access to proc-related data in the &quot;db&quot; API. The grpcomm framework will retain responsibility for executing RTE collective operations such as modex, but the data will be stored in the db. Likewise, the ess will no longer be used to access data such as a proc's locality - instead, that data will be obtained from the db, however it is stored or where it is located.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The modex work is tentatively slated for the 1.7 series, though how much of it gets there remains to be seen. The work is being done in a bitbucket repo: <a href="https://bitbucket.org/rhc/ompi-modex">https://bitbucket.org/rhc/ompi-modex</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes to the RML/OOB are largely driven by the long-standing need to cleanup/refactor that code, the need to support async progress on messaging, and the upcoming availability of the BTLs. This code has served us well for quite some time, but the to-do list has grown over the years, including the desire for better support of multi-NIC environments. The work will require significant changes to the RML and OOB framework APIs, including:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the removal of blocking sends (a persistent source of trouble over the years)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * moving receive matching logic to the RML layer, thus simplifying the OOB components and making them look more like the BTLs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * adding a UDP component (ported back from ORCM) to the OOB, along with creating retransmit and flow control support frameworks in OPAL (modeled after the ORCM version) to handle unreliable transports in both BTL (which will also receive a UDP component) and OOB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * converting the OOB to a standalone (i.e., no longer opened and inited from inside the RML), multi-select framework that supports multiple transports
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * allowing each OOB component to return an array of modules, one for each interface (ala the BTL) - this obviously has implications for the &quot;comm failed&quot; error response as a failed connection to one OOB module may not mean complete loss of connectivity or process death
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * changing the URI construct/parsing methods for the initial contact info that goes on the orted cmd line to reflect the above changes, allowing multiple OOB modules to contribute to it while retaining the ability to limit overall string size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * altering the OOBs to use the modex construct for exchange of endpoint info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * shifting the routing responsibilities from the RML to the OOB level to accommodate connectionless transports. The OOB module will determine if routing is required and send the message accordingly. When received, the message will be &quot;promoted&quot; to the RML layer, thus allowing the routing process to decide the best transport to use from that point forward (e.g., continuing to route the message, or shifting to a connectionless transport to send the message directly to its destination).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * adding support for OOB failover, with each module in an OOB component attempting to send a message via alternative modules if a module is unable to complete transmission, and then returning the message to the RML for rescheduling on another transport if no module can successfully complete the operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * adding heartbeat support for situations where a connectionless transport is the sole contact point between daemons - we already have heartbeat capability in the code base, but need the proper hooks to ensure it is active when needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This work is definitely pointed at the 2.0 series (not 1.7), and will begin entering the trunk after the branch. The work is being done in another bitbucket repo: <a href="https://bitbucket.org/rhc/ompi-oob">https://bitbucket.org/rhc/ompi-oob</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11125.php">Eugene Loh: "[OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Previous message:</strong> <a href="11123.php">Jeff Squyres: "[OMPI devel] SSL certificates changing"</a>
<li><strong>In reply to:</strong> <a href="11112.php">Ralph Castain: "[OMPI devel] ORTE"</a>
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
