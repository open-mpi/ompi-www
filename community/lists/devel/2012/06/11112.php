<?
$subject_val = "[OMPI devel] ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 16 06:08:35 2012" -->
<!-- isoreceived="20120616100835" -->
<!-- sent="Sat, 16 Jun 2012 04:08:27 -0600" -->
<!-- isosent="20120616100827" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE" -->
<!-- id="91965210-F861-44A6-9B37-1DC804B3F3D2_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] ORTE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-16 06:08:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11111.php">Eugene Loh: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11124.php">George Bosilca: "Re: [OMPI devel] ORTE"</a>
<li><strong>Reply:</strong> <a href="11124.php">George Bosilca: "Re: [OMPI devel] ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Over the next month, there will be significant changes to ORTE both in terms of framework APIs and internal behavior. This work will focus on a few areas:
<br>
<p>1. launch scalability and timing. I try to review our status on this whenever we prepare for the start of a new release series, and as usual this prompted some work in this area. Most of the effort will focus on development of the async modex functionality described in a separate email thread.
<br>
<p>2. access to the BTLs, which we recently agreed to move to the OPAL layer.
<br>
<p>3. memory footprint reduction, particularly the removal or minimization of per-proc data stored in every process (e.g., retaining a complete copy of all modex info for all ranks in each process, regardless of communication needs).
<br>
<p>It was my understanding that others interested in ORTE had forked their code bases and were not tracking the main developer's trunk. However, at the recent developers meeting, this understanding was altered as it appears other groups are actually attempting to track the trunk, resolving conflicts behind the scenes. In an attempt to aid these groups, I thought it might help if I outlined what will be happening in the near future.
<br>
<p><p>The biggest anticipated changes lie in the modex and RML/OOB areas. I've outlined the async modex changes in a separate email thread. One additional element of that work will be the porting of the &quot;db&quot; (database) framework back from the ORCM project to ORTE. This framework provides a &quot;hook&quot; for researchers working on distributed, high-performance databases to investigate alternative ways of scalably supporting our modex information in a fault-tolerant manner. Eventually, the work in areas such as distributed hash-tables (DHTs) used in ORCM may make its way back to OMPI.
<br>
<p>In addition to scalability, the modex work is intended to contribute to the memory reduction goal. The primary emphasis here will be on changing from having each process retain complete knowledge of the contact info, locality, etc. for every process in the job, to a strategy of only caching info for processes with which the proc actually is communicating. We may look at removing all per-proc caching of info (perhaps using a shared memory model), but that has performance implications and needs further investigation.
<br>
<p>As part of that effort, we will be removing the nidmap/pidmap constructs and storing that info in the same database being used by the modex, thus collapsing the grpcomm and ess APIs by consolidating the access to proc-related data in the &quot;db&quot; API. The grpcomm framework will retain responsibility for executing RTE collective operations such as modex, but the data will be stored in the db. Likewise, the ess will no longer be used to access data such as a proc's locality - instead, that data will be obtained from the db, however it is stored or where it is located.
<br>
<p>The modex work is tentatively slated for the 1.7 series, though how much of it gets there remains to be seen. The work is being done in a bitbucket repo: <a href="https://bitbucket.org/rhc/ompi-modex">https://bitbucket.org/rhc/ompi-modex</a>
<br>
<p><p>Changes to the RML/OOB are largely driven by the long-standing need to cleanup/refactor that code, the need to support async progress on messaging, and the upcoming availability of the BTLs. This code has served us well for quite some time, but the to-do list has grown over the years, including the desire for better support of multi-NIC environments. The work will require significant changes to the RML and OOB framework APIs, including:
<br>
<p>* the removal of blocking sends (a persistent source of trouble over the years)
<br>
<p>* moving receive matching logic to the RML layer, thus simplifying the OOB components and making them look more like the BTLs.
<br>
<p>* adding a UDP component (ported back from ORCM) to the OOB, along with creating retransmit and flow control support frameworks in OPAL (modeled after the ORCM version) to handle unreliable transports in both BTL (which will also receive a UDP component) and OOB
<br>
<p>* converting the OOB to a standalone (i.e., no longer opened and inited from inside the RML), multi-select framework that supports multiple transports
<br>
<p>* allowing each OOB component to return an array of modules, one for each interface (ala the BTL) - this obviously has implications for the &quot;comm failed&quot; error response as a failed connection to one OOB module may not mean complete loss of connectivity or process death
<br>
<p>* changing the URI construct/parsing methods for the initial contact info that goes on the orted cmd line to reflect the above changes, allowing multiple OOB modules to contribute to it while retaining the ability to limit overall string size
<br>
<p>* altering the OOBs to use the modex construct for exchange of endpoint info
<br>
<p>* shifting the routing responsibilities from the RML to the OOB level to accommodate connectionless transports. The OOB module will determine if routing is required and send the message accordingly. When received, the message will be &quot;promoted&quot; to the RML layer, thus allowing the routing process to decide the best transport to use from that point forward (e.g., continuing to route the message, or shifting to a connectionless transport to send the message directly to its destination).
<br>
<p>* adding support for OOB failover, with each module in an OOB component attempting to send a message via alternative modules if a module is unable to complete transmission, and then returning the message to the RML for rescheduling on another transport if no module can successfully complete the operation.
<br>
<p>* adding heartbeat support for situations where a connectionless transport is the sole contact point between daemons - we already have heartbeat capability in the code base, but need the proper hooks to ensure it is active when needed.
<br>
<p>This work is definitely pointed at the 2.0 series (not 1.7), and will begin entering the trunk after the branch. The work is being done in another bitbucket repo: <a href="https://bitbucket.org/rhc/ompi-oob">https://bitbucket.org/rhc/ompi-oob</a>
<br>
<p><p>HTH
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11111.php">Eugene Loh: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11124.php">George Bosilca: "Re: [OMPI devel] ORTE"</a>
<li><strong>Reply:</strong> <a href="11124.php">George Bosilca: "Re: [OMPI devel] ORTE"</a>
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
