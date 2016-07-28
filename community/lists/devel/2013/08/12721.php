<?
$subject_val = "[OMPI devel] RFC: rewrite of ORTE OOB - reissued";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 17:37:33 2013" -->
<!-- isoreceived="20130814213733" -->
<!-- sent="Wed, 14 Aug 2013 14:37:29 -0700" -->
<!-- isosent="20130814213729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: rewrite of ORTE OOB - reissued" -->
<!-- id="2B83511D-6330-46E9-B76F-39D10330C6C9_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: rewrite of ORTE OOB - reissued<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 17:37:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12722.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12720.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*** THIS RFC INCLUDES A MINOR CHANGE TO THE MPI-RTE INTERFACE ***
<br>
<p>Note: during the course of this work, it was necessary to completely separate the MPI and RTE progress engines. There were multiple places in the MPI layer where ORTE_WAIT_FOR_COMPLETION was being used. A new OMPI_WAIT_FOR_COMPLETION macro was created (defined in ompi/mca/rte/rte.h) that simply cycles across opal_progress until the provided flag becomes false. Places where the MPI layer blocked waiting for RTE to complete an event have been modified to use this macro.
<br>
<p>***************************************************************************************
<br>
<p>I am reissuing this RFC because of the time that has passed since its original release. Since its initial release and review, I have debugged it further to ensure it fully supports tests like loop_spawn. It therefore seems ready for merge back to the trunk. Given its prior review, I have set the timeout for one week.
<br>
<p>The code is in  <a href="https://bitbucket.org/rhc/ompi-oob2">https://bitbucket.org/rhc/ompi-oob2</a>
<br>
<p><p>WHAT:    Rewrite of ORTE OOB
<br>
<p>WHY:       Support asynchronous progress and a host of other features
<br>
<p>WHEN:    Wed, August 21
<br>
<p>SYNOPSIS:
<br>
The current OOB has served us well, but a number of limitations have been identified over the years. Specifically:
<br>
<p>* it is only progressed when called via opal_progress, which can lead to hangs or recursive calls into libevent (which is not supported by that code)
<br>
<p>* we've had issues when multiple NICs are available as the code doesn't &quot;shift&quot; messages between transports - thus, all nodes had to be available via the same TCP interface.
<br>
<p>* the OOB &quot;unloads&quot; incoming opal_buffer_t objects during the transmission, thus preventing use of OBJ_RETAIN in the code when repeatedly sending the same message to multiple recipients
<br>
<p>* there is no failover mechanism across NICs - if the selected NIC (or its attached switch) fails, we are forced to abort
<br>
<p>* only one transport (i.e., component) can be &quot;active&quot;
<br>
<p><p>The revised OOB resolves these problems:
<br>
<p>* async progress is used for all application processes, with the progress thread blocking in the event library
<br>
<p>* each available TCP NIC is supported by its own TCP module. The ability to asynchronously progress each module independently is provided, but not enabled by default (a runtime MCA parameter turns it &quot;on&quot;)
<br>
<p>* multi-address TCP NICs (e.g., a NIC with both an IPv4 and IPv6 address, or with virtual interfaces) are supported - reachability is determined by comparing the contact info for a peer against all addresses within the range covered by the address/mask pairs for the NIC.
<br>
<p>* a message that arrives on one TCP NIC is automatically shifted to whatever NIC that is connected to the next &quot;hop&quot; if that peer cannot be reached by the incoming NIC. If no TCP module will reach the peer, then the OOB attempts to send the message via all other available components - if none can reach the peer, then an &quot;error&quot; is reported back to the RML, which then calls the errmgr for instructions.
<br>
<p>* opal_buffer_t now conforms to standard object rules re OBJ_RETAIN as we no longer &quot;unload&quot; the incoming object
<br>
<p>* NIC failure is reported to the TCP component, which then tries to resend the message across any other available TCP NIC. If that doesn't work, then the message is given back to the OOB base to try using other components. If all that fails, then the error is reported to the RML, which reports to the errmgr for instructions
<br>
<p>* obviously from the above, multiple OOB components (e.g., TCP and UD) can be active in parallel
<br>
<p>* the matching code has been moved to the RML (and out of the OOB/TCP component) so it is independent of transport
<br>
<p>* routing is done by the individual OOB modules (as opposed to the RML). Thus, both routed and non-routed transports can simultaneously be active
<br>
<p>* all blocking send/recv APIs have been removed. Everything operates asynchronously.
<br>
<p><p>KNOWN LIMITATIONS:
<br>
<p>* although provision is made for component failover as described above, the code for doing so has not been fully implemented yet. At the moment, if all connections for a given peer fail, the errmgr is notified of a &quot;lost connection&quot;, which by default results in termination of the job if it was a lifeline
<br>
<p>* the IPv6 code is present and compiles, but is not complete. Since the current IPv6 support in the OOB doesn't work anyway, I don't consider this a blocker
<br>
<p>* routing is performed at the individual module level, yet the active routed component is selected on a global basis. We probably should update that to reflect that different transports may need/choose to route in different ways
<br>
<p>* obviously, not every error path has been tested nor necessarily covered
<br>
<p>* determining abnormal termination is more challenging than in the old code as we now potentially have multiple ways of connecting to a process. Ideally, we would declare &quot;connection failed&quot; when *all* transports can no longer reach the process, but that requires some additional (possibly complex) code. For now, the code replicates the old behavior only somewhat modified - i.e., if a module sees its connection fail, it checks to see if it is a lifeline. If so, it notifies the errmgr that the lifeline is lost - otherwise, it notifies the errmgr that a non-lifeline connection was lost.
<br>
<p>* reachability is determined solely on the basis of a shared subnet address/mask - more sophisticated algorithms (e.g., the one used in the tcp btl) are required to handle routing via gateways
<br>
<p>* the RML needs to assign sequence numbers to each message on a per-peer basis. The receiving RML will then deliver messages in order, thus preventing out-of-order messaging in the case where messages travel across different transports or a message needs to be redirected/resent due to failure of a NIC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12722.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12720.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
