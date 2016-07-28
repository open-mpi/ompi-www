<?
$subject_val = "Re: [OMPI devel] RFC: rewrite of ORTE OOB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 21:47:02 2013" -->
<!-- isoreceived="20130515014702" -->
<!-- sent="Tue, 14 May 2013 18:46:55 -0700" -->
<!-- isosent="20130515014655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: rewrite of ORTE OOB" -->
<!-- id="875F1F4B-D682-4B6F-AAF2-8F74A7D13C8C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0C869D4A-D982-46C6-A2C2-D213CD526193_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: rewrite of ORTE OOB<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 21:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12387.php">Nathan Hjelm: "[OMPI devel] RFC: Remove old MCA parameter system from trunk"</a>
<li><strong>Previous message:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>In reply to:</strong> <a href="12381.php">Ralph Castain: "[OMPI devel] RFC: rewrite of ORTE OOB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have placed a tarball of this branch for those willing to MTT it:
<br>
<p><a href="http://www.open-mpi.org/~rhc/openmpi-1.9.tar.bz2">http://www.open-mpi.org/~rhc/openmpi-1.9.tar.bz2</a>
<br>
<p>I will update if/when major changes are made.
<br>
<p><p>On May 13, 2013, at 9:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As most of you know, I have been working for quite some time on rewriting the OOB. It is now getting close to being ready to be committed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I am changing jobs on May 20th (starting a position at Intel) that will cause a hopefully short &quot;service interruption&quot; in my ability to contribute code to OMPI. I have started the legal paperwork to resolve that situation and have the backing of my new management, but these things always take time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ordinarily, I would simply hold off the commit until the paperwork was completed. However, after talking with a few people in the community, the changes are important and desirable enough to get this into the trunk without the indefinite delay. I can continue to help debug even after my status changes - just cannot directly contribute code. So I have committed the code to the OMPI repository in a public temporary branch. Once the community believes the code is ready, Jeff can merge it back to the trunk if I'm not able to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT:    Rewrite of ORTE OOB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:       Support asynchronous progress and a host of other features
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:    TBD (will discuss at weekly telecon and/or on mailing list)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SYNOPSIS:
</span><br>
<span class="quotelev1">&gt; The current OOB has served us well, but a number of limitations have been identified over the years. Specifically:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * it is only progressed when called via opal_progress, which can lead to hangs or recursive calls into libevent (which is not supported by that code)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * we've had issues when multiple NICs are available as the code doesn't &quot;shift&quot; messages between transports - thus, all nodes had to be available via the same TCP interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the OOB &quot;unloads&quot; incoming opal_buffer_t objects during the transmission, thus preventing use of OBJ_RETAIN in the code when repeatedly sending the same message to multiple recipients
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * there is no failover mechanism across NICs - if the selected NIC (or its attached switch) fails, we are forced to abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * only one transport (i.e., component) can be &quot;active&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The revised OOB resolves these problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * async progress is used for all application processes, with the progress thread blocking in the event library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * each available NIC is supported by its own TCP module. The ability to asynchronously progress each module independently is provided, but not enabled by default (a runtime MCA parameter turns it &quot;on&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * multi-address NICs (e.g., a NIC with both an IPv4 and IPv6 address, or with virtual interfaces) are supported - reachability is determined by comparing the contact info for a peer against all addresses within the range covered by the address/mask pairs for the NIC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * a message that arrives on one NIC is automatically shifted to whatever NIC that is connected to the next &quot;hop&quot; if that peer cannot be reached by the incoming NIC. If no TCP module will reach the peer, then the OOB attempts to send the message via all other available components - if none can reach the peer, then an &quot;error&quot; is reported back to the RML, which then calls the errmgr for instructions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * opal_buffer_t now conforms to standard object rules re OBJ_RETAIN as we no longer &quot;unload&quot; the incoming object
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * NIC failure is reported to the TCP component, which then tries to resend the message across any other available TCP NIC. If that doesn't work, then the message is given back to the OOB base to try using other components. If all that fails, then the error is reported to the RML, which reports to the errmgr for instructions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * obviously from the above, multiple OOB components (e.g., TCP and UD) can be active in parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the matching code has been moved to the RML (and out of the OOB/TCP component) so it is independent of transport
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * routing is done by the individual OOB modules (as opposed to the RML). Thus, both routed and non-routed transports can simultaneously be active
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * all blocking send/recv APIs have been removed. Everything operates asynchronously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; KNOWN LIMITATIONS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * although provision is made for component failover as described above, the code for doing so has not been implemented yet. At the moment, if all connections for a given component fail, the errmgr is notified of a &quot;lost connection&quot;, which by default results in termination of the job if it was a lifeline
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the IPv6 code is present and compiles, but has not been tested as I don't have access to any IPv6-enabled cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * routing is performed at the individual module level, yet the active routed component is selected on a global basis. We probably should update that to reflect that different transports may need/choose to route in different ways
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * obviously, not every error path has been tested nor necessarily covered
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * determining abnormal termination is more challenging than in the old code as we now potentially have multiple ways of connecting to a process. Ideally, we would declare &quot;connection failed&quot; when *all* transports can no longer reach the process, but that requires some additional (possibly complex) code. For now, the code replicates the old behavior only somewhat modified - i.e., if a module sees its connection fail, it checks to see if it is a lifeline. If so, it notifies the errmgr that the lifeline is lost - otherwise, it notifies the errmgr that a non-lifeline connection was lost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * reachability is determined solely on the basis of a shared subnet address/mask - more sophisticated algorithms (e.g., the one used in the tcp btl) are required to handle routing via gateways
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the RML needs to assign sequence numbers to each message on a per-peer basis. The receiving RML will then deliver messages in order, thus preventing out-of-order messaging in the case where messages travel across different transports or a message needs to be redirected/resent due to failure of a NIC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is in <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/oob2">https://svn.open-mpi.org/svn/ompi/tmp-public/oob2</a>. It isn't fully done yet (I'm still working on the above &quot;limitations&quot;), but I wanted to provide as much time as possible for the RFC and begin the review process as soon as possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will be providing &quot;theory of operation&quot; on the wiki. I'm somewhat hampered by an injury to one arm, so it will take a bit for me to complete. In brief, the primary design point is that all operations are executed within events. This avoids the need to turn &quot;on&quot; OPAL thread support, thus allowing ORTE to provide async progress and thread safety without impacting the performance of the MPI layer itself. However, it means you have to be aware of what event base you are in and only access the data within that base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12387.php">Nathan Hjelm: "[OMPI devel] RFC: Remove old MCA parameter system from trunk"</a>
<li><strong>Previous message:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>In reply to:</strong> <a href="12381.php">Ralph Castain: "[OMPI devel] RFC: rewrite of ORTE OOB"</a>
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
