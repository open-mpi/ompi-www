<?
$subject_val = "[OMPI devel] Fast MPI startup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 15:30:35 2014" -->
<!-- isoreceived="20140826193035" -->
<!-- sent="Tue, 26 Aug 2014 12:29:57 -0700" -->
<!-- isosent="20140826192957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fast MPI startup" -->
<!-- id="63BC57C7-CCD3-4FF7-B570-780D72DBC9BB_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fast MPI startup<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 15:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey folks
<br>
<p>I've had a few questions lately about how ORCM plans to support fast MPI startup, so I figured I'd pass along some notes on the matter. Nothing secret or hush-hush about it - these are things we've discussed in the OMPI world a few times, and have simply adopted/implemented in ORCM. Indeed, the early steps are now in OMPI or soon to come over there.
<br>
<p>There are a few key elements to the revised wireup plan, some of which are implemented in ORCM and some in OMPI:
<br>
<p>* more scalable barrier algorithms in the RTE. We took a first step towards this with the PMIx modifications, and Mellanox is working on the next phase. I have a final follow-on phase that will further reduce the time required for a cross-cluster barrier to a very low level. When completed, we expect to have this executing in rather short time intervals (we'll provide numbers as we measure them)
<br>
<p>* RM management of connection information. Much of the data we modex around is actually &quot;static&quot; - e.g., we send NIC-level info on GIDs and LIDs for Infiniband. These do change upon restart of the respective fabric manager, but that is a rare and detectable occurrence. Now that the BTLs are in the OPAL layer and thus accessible from outside of MPI, ORCM's daemons are querying the BTLs for this non-job-level information and including it in their inventory report. Thus, each daemon now has access to all that info at time-zero, and there is no longer a need to include it in the modex. The table is being provided on a shared memory basis to each process by the daemon to minimize the memory footprint.
<br>
<p>* RM assignment of rendezvous endpoints. Most fabrics utilize either connectionless endpoints, or have a rendezvous protocol whereby two procs can exchange a handshake for dynamic assignment of endpoints. In either case, ORCM's daemons will query the fabric at startup to identify assignable endpoints, and then assign them on a node-rank basis to processes as they are launched. Procs can then use the provided table to lookup the endpoint info for any peer in the system, and connect to it as desired. The table is again being provided on a shared memory basis by the daemon.
<br>
<p>* conversion of BTLs to only call modex_recv on first message instead of at startup. This is required not only for improvement of startup times, but also for dealing with memory footprint as we get to ever larger scale. The fact is that most MPI apps only involve a rank talking to a small subset of its peers. Thus, having each rank &quot;grab&quot; all endpoint info for every other process in the job at startup wastes both time and memory as most of that data will never be used. Some of the BTLs already have been modified for this mode of operation, and the PMIx change takes advantage of it when only those BTLs are used. This becomes less of an issue for fabrics where the RM can fully manage endpoints, but is a significant enhancement for situations where we cannot do so.
<br>
<p>* distributed mapping. Right now, mpirun computes the entire process map and sends it around to all the daemons, who then extract their list of local processes to start. This results in a fairly large launch message. The next update coming in a couple of weeks will shift that burden to the daemons by having mpirun send only the app_context info to the daemons. Each daemon will independently compute the map, spawning its own local procs as they are computed. This will result in a much smaller launch message and help further parallelize the procedure.
<br>
<p>* use of faster transports. ORCM's daemons will utilize the fabric during job startup to move messages and barriers around, and then fallback to the OOB transport for any communication during job execution in order to minimize interference with the application. 
<br>
<p>It'll take time to get all this integrated with OMPI (all done in plugins so other RMs can integrate as required/available), but we hope to have most of this available in the next 6-8 months.
<br>
<p>HTH - always happy to provide more detail, and/or welcome contributions
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
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
