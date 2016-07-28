<?
$subject_val = "Re: [OMPI devel] RTE Issue III: Collective communications across daemons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 11:04:20 2007" -->
<!-- isoreceived="20071205160420" -->
<!-- sent="Wed, 05 Dec 2007 09:04:03 -0700" -->
<!-- isosent="20071205160403" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue III: Collective communications across daemons" -->
<!-- id="C37C1A03.B7D4%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4756CA21.4040609_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Issue III: Collective communications across daemons<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 11:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>In reply to:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/5/07 8:56 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The latter issue exists for even MPI jobs. Consider the case of a single
</span><br>
<span class="quotelev2">&gt;&gt; process job that comm_spawns a child job onto other nodes. The RTE will
</span><br>
<span class="quotelev2">&gt;&gt; launch daemons on the new nodes, and then broadcast the &quot;launch procs&quot;
</span><br>
<span class="quotelev2">&gt;&gt; command across all the daemons (this is done to exploit a scalable comm
</span><br>
<span class="quotelev2">&gt;&gt; procedure). Thus, the daemon on the initial node will see the launch
</span><br>
<span class="quotelev2">&gt;&gt; command, but will know it is not participating and hence take no action.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we're doing something that is inherently non-scalable to take
</span><br>
<span class="quotelev1">&gt; advantage of scalable routines? It seems that in most cases we only want
</span><br>
<span class="quotelev1">&gt; to send the info to the daemons that need it, even if this means
</span><br>
<span class="quotelev1">&gt; unicasting the message.
</span><br>
<p><p>Um...we are taking advantage of known scalable communication algorithms to
<br>
broadcast a message that in the typical case is required by all recipients.
<br>
It is only in comm_spawn that some participants in the broadcast may not
<br>
take action based on the message's contents.
<br>
<p>The issue is more in terms of collectives going the other direction - i.e.,
<br>
collectively gathering info from across all the daemons and reporting it to
<br>
the HNP. This is required for synchronization - e.g., ensuring that we don't
<br>
return from a spawn function call until the procs are launched so the user
<br>
can know &quot;it is okay to proceed&quot;.
<br>
<p>The problem is, in the case of comm_spawn, some of the daemons -might- not
<br>
participate in the launch, but we would like them to participate in the
<br>
collective to return info to the HNP as part of a scalable comm algorithm.
<br>
Can it be done? I think so - it may just take a little tricky programming.
<br>
Just needs to be proven.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I don't quite understand the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; III. Collective communications across daemons
</span><br>
<span class="quotelev2">&gt;&gt; A few months ago, we deliberately extended the abstraction between the RTE
</span><br>
<span class="quotelev2">&gt;&gt; and MPI layers to reduce their interaction. This has generally been
</span><br>
<span class="quotelev2">&gt;&gt; perceived as a good thing, but it did have a cost: namely, it increased the
</span><br>
<span class="quotelev2">&gt;&gt; communications required during launch. In prior OMPI versions, we took
</span><br>
<span class="quotelev2">&gt;&gt; advantage of tighter integration to aggregate RTE and MPI communications
</span><br>
<span class="quotelev2">&gt;&gt; required during startup - this was lost in the abstraction effort.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have since been working to reduce the resulting &quot;abstraction penalty&quot;. We
</span><br>
<span class="quotelev2">&gt;&gt; have managed to achieve communication performance that scales linearly with
</span><br>
<span class="quotelev2">&gt;&gt; the number of nodes. Further improvements, though, depend upon our ability
</span><br>
<span class="quotelev2">&gt;&gt; to do quasi-collective communications in the RTE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Collectives in the RTE are complicated by the current requirement to support
</span><br>
<span class="quotelev2">&gt;&gt; non-MPI applications (topic of another email), and by the fact that not
</span><br>
<span class="quotelev2">&gt;&gt; every node participates in a given operation. The former issue is reflected
</span><br>
<span class="quotelev2">&gt;&gt; in the fact that the RTE (and hence, the daemon) cannot know if the
</span><br>
<span class="quotelev2">&gt;&gt; application process is going to call Init or not - hence, the logic in the
</span><br>
<span class="quotelev2">&gt;&gt; daemon must not block on any communication during launch since the proc may
</span><br>
<span class="quotelev2">&gt;&gt; completely execute and terminate without ever calling Init. Thus, entering a
</span><br>
<span class="quotelev2">&gt;&gt; collective to, for example, collect RML contact info is problematic as that
</span><br>
<span class="quotelev2">&gt;&gt; info may never become available - and so, the HNP -cannot- enter a
</span><br>
<span class="quotelev2">&gt;&gt; collective call to wait for its arrival.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The latter issue exists for even MPI jobs. Consider the case of a single
</span><br>
<span class="quotelev2">&gt;&gt; process job that comm_spawns a child job onto other nodes. The RTE will
</span><br>
<span class="quotelev2">&gt;&gt; launch daemons on the new nodes, and then broadcast the &quot;launch procs&quot;
</span><br>
<span class="quotelev2">&gt;&gt; command across all the daemons (this is done to exploit a scalable comm
</span><br>
<span class="quotelev2">&gt;&gt; procedure). Thus, the daemon on the initial node will see the launch
</span><br>
<span class="quotelev2">&gt;&gt; command, but will know it is not participating and hence take no action.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we now attempt to perform a collective communication (say, to collect RML
</span><br>
<span class="quotelev2">&gt;&gt; contact info), we face four interacting obstacles:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (a) the initial daemon isn't launching anything this time, and so won't know
</span><br>
<span class="quotelev2">&gt;&gt; it has to participate. This can obviously be resolved since it will
</span><br>
<span class="quotelev2">&gt;&gt; certainly know that a launch is being conducted, so we could have it simply
</span><br>
<span class="quotelev2">&gt;&gt; go ahead and call the appropriate collective at that time;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (b) the launch of the local procs is conducted asynchronously - hence, no
</span><br>
<span class="quotelev2">&gt;&gt; daemon can know when another daemon has completed the launch and thus is
</span><br>
<span class="quotelev2">&gt;&gt; ready to communicate;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (c) the failure of any local launch can generate an error response back to
</span><br>
<span class="quotelev2">&gt;&gt; the daemons with orders to kill their procs, exit, or other things. The
</span><br>
<span class="quotelev2">&gt;&gt; daemons must, therefore, not be in blocking communication calls as this will
</span><br>
<span class="quotelev2">&gt;&gt; prevent them from responding as directed; and
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (d) the daemons may not be fully connected - hence, any collective must
</span><br>
<span class="quotelev2">&gt;&gt; &quot;follow&quot; the communication topology.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What we could use is a quasi-collective &quot;gather&quot; based on non-blocking
</span><br>
<span class="quotelev2">&gt;&gt; receives that preserves the daemons' ability to respond to unexpected
</span><br>
<span class="quotelev2">&gt;&gt; commands such as &quot;kill/exit&quot;. If someone is interested in working on this,
</span><br>
<span class="quotelev2">&gt;&gt; please contact me for a fuller description of the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>In reply to:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
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
