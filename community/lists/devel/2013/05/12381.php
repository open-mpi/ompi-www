<?
$subject_val = "[OMPI devel] RFC: rewrite of ORTE OOB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 00:00:10 2013" -->
<!-- isoreceived="20130514040010" -->
<!-- sent="Mon, 13 May 2013 21:00:01 -0700" -->
<!-- isosent="20130514040001" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: rewrite of ORTE OOB" -->
<!-- id="0C869D4A-D982-46C6-A2C2-D213CD526193_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: rewrite of ORTE OOB<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 00:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12382.php">Jeff Squyres (jsquyres): "[OMPI devel] Openib + common/verbs CPC consolidation"</a>
<li><strong>Previous message:</strong> <a href="12380.php">Larry Baker: "Re: [OMPI devel] June OMPI developer's meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
<li><strong>Reply:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>As most of you know, I have been working for quite some time on rewriting the OOB. It is now getting close to being ready to be committed.
<br>
<p>Unfortunately, I am changing jobs on May 20th (starting a position at Intel) that will cause a hopefully short &quot;service interruption&quot; in my ability to contribute code to OMPI. I have started the legal paperwork to resolve that situation and have the backing of my new management, but these things always take time.
<br>
<p>Ordinarily, I would simply hold off the commit until the paperwork was completed. However, after talking with a few people in the community, the changes are important and desirable enough to get this into the trunk without the indefinite delay. I can continue to help debug even after my status changes - just cannot directly contribute code. So I have committed the code to the OMPI repository in a public temporary branch. Once the community believes the code is ready, Jeff can merge it back to the trunk if I'm not able to do so.
<br>
<p><p>WHAT:    Rewrite of ORTE OOB
<br>
<p>WHY:       Support asynchronous progress and a host of other features
<br>
<p>WHEN:    TBD (will discuss at weekly telecon and/or on mailing list)
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
<p>* each available NIC is supported by its own TCP module. The ability to asynchronously progress each module independently is provided, but not enabled by default (a runtime MCA parameter turns it &quot;on&quot;)
<br>
<p>* multi-address NICs (e.g., a NIC with both an IPv4 and IPv6 address, or with virtual interfaces) are supported - reachability is determined by comparing the contact info for a peer against all addresses within the range covered by the address/mask pairs for the NIC.
<br>
<p>* a message that arrives on one NIC is automatically shifted to whatever NIC that is connected to the next &quot;hop&quot; if that peer cannot be reached by the incoming NIC. If no TCP module will reach the peer, then the OOB attempts to send the message via all other available components - if none can reach the peer, then an &quot;error&quot; is reported back to the RML, which then calls the errmgr for instructions.
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
<p>* although provision is made for component failover as described above, the code for doing so has not been implemented yet. At the moment, if all connections for a given component fail, the errmgr is notified of a &quot;lost connection&quot;, which by default results in termination of the job if it was a lifeline
<br>
<p>* the IPv6 code is present and compiles, but has not been tested as I don't have access to any IPv6-enabled cluster
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
<p><p>The code is in <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/oob2">https://svn.open-mpi.org/svn/ompi/tmp-public/oob2</a>. It isn't fully done yet (I'm still working on the above &quot;limitations&quot;), but I wanted to provide as much time as possible for the RFC and begin the review process as soon as possible.
<br>
<p>I will be providing &quot;theory of operation&quot; on the wiki. I'm somewhat hampered by an injury to one arm, so it will take a bit for me to complete. In brief, the primary design point is that all operations are executed within events. This avoids the need to turn &quot;on&quot; OPAL thread support, thus allowing ORTE to provide async progress and thread safety without impacting the performance of the MPI layer itself. However, it means you have to be aware of what event base you are in and only access the data within that base.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12382.php">Jeff Squyres (jsquyres): "[OMPI devel] Openib + common/verbs CPC consolidation"</a>
<li><strong>Previous message:</strong> <a href="12380.php">Larry Baker: "Re: [OMPI devel] June OMPI developer's meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
<li><strong>Reply:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
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
