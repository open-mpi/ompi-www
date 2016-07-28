<?
$subject_val = "Re: [OMPI devel] RTE Issue III: Collective communications across daemons";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:56:19 2007" -->
<!-- isoreceived="20071205155619" -->
<!-- sent="Wed, 05 Dec 2007 10:56:17 -0500" -->
<!-- isosent="20071205155617" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue III: Collective communications across daemons" -->
<!-- id="4756CA21.4040609_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C37ABE0C.B786%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 10:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Previous message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2711.php">Ralph H Castain: "[OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Reply:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The latter issue exists for even MPI jobs. Consider the case of a single
</span><br>
<span class="quotelev1">&gt; process job that comm_spawns a child job onto other nodes. The RTE will
</span><br>
<span class="quotelev1">&gt; launch daemons on the new nodes, and then broadcast the &quot;launch procs&quot;
</span><br>
<span class="quotelev1">&gt; command across all the daemons (this is done to exploit a scalable comm
</span><br>
<span class="quotelev1">&gt; procedure). Thus, the daemon on the initial node will see the launch
</span><br>
<span class="quotelev1">&gt; command, but will know it is not participating and hence take no action.
</span><br>
<p>So we're doing something that is inherently non-scalable to take
<br>
advantage of scalable routines? It seems that in most cases we only want
<br>
to send the info to the daemons that need it, even if this means
<br>
unicasting the message.
<br>
<p>I guess I don't quite understand the problem.
<br>
<p>Tim
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; III. Collective communications across daemons
</span><br>
<span class="quotelev1">&gt; A few months ago, we deliberately extended the abstraction between the RTE
</span><br>
<span class="quotelev1">&gt; and MPI layers to reduce their interaction. This has generally been
</span><br>
<span class="quotelev1">&gt; perceived as a good thing, but it did have a cost: namely, it increased the
</span><br>
<span class="quotelev1">&gt; communications required during launch. In prior OMPI versions, we took
</span><br>
<span class="quotelev1">&gt; advantage of tighter integration to aggregate RTE and MPI communications
</span><br>
<span class="quotelev1">&gt; required during startup - this was lost in the abstraction effort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have since been working to reduce the resulting &quot;abstraction penalty&quot;. We
</span><br>
<span class="quotelev1">&gt; have managed to achieve communication performance that scales linearly with
</span><br>
<span class="quotelev1">&gt; the number of nodes. Further improvements, though, depend upon our ability
</span><br>
<span class="quotelev1">&gt; to do quasi-collective communications in the RTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Collectives in the RTE are complicated by the current requirement to support
</span><br>
<span class="quotelev1">&gt; non-MPI applications (topic of another email), and by the fact that not
</span><br>
<span class="quotelev1">&gt; every node participates in a given operation. The former issue is reflected
</span><br>
<span class="quotelev1">&gt; in the fact that the RTE (and hence, the daemon) cannot know if the
</span><br>
<span class="quotelev1">&gt; application process is going to call Init or not - hence, the logic in the
</span><br>
<span class="quotelev1">&gt; daemon must not block on any communication during launch since the proc may
</span><br>
<span class="quotelev1">&gt; completely execute and terminate without ever calling Init. Thus, entering a
</span><br>
<span class="quotelev1">&gt; collective to, for example, collect RML contact info is problematic as that
</span><br>
<span class="quotelev1">&gt; info may never become available - and so, the HNP -cannot- enter a
</span><br>
<span class="quotelev1">&gt; collective call to wait for its arrival.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The latter issue exists for even MPI jobs. Consider the case of a single
</span><br>
<span class="quotelev1">&gt; process job that comm_spawns a child job onto other nodes. The RTE will
</span><br>
<span class="quotelev1">&gt; launch daemons on the new nodes, and then broadcast the &quot;launch procs&quot;
</span><br>
<span class="quotelev1">&gt; command across all the daemons (this is done to exploit a scalable comm
</span><br>
<span class="quotelev1">&gt; procedure). Thus, the daemon on the initial node will see the launch
</span><br>
<span class="quotelev1">&gt; command, but will know it is not participating and hence take no action.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we now attempt to perform a collective communication (say, to collect RML
</span><br>
<span class="quotelev1">&gt; contact info), we face four interacting obstacles:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) the initial daemon isn't launching anything this time, and so won't know
</span><br>
<span class="quotelev1">&gt; it has to participate. This can obviously be resolved since it will
</span><br>
<span class="quotelev1">&gt; certainly know that a launch is being conducted, so we could have it simply
</span><br>
<span class="quotelev1">&gt; go ahead and call the appropriate collective at that time;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) the launch of the local procs is conducted asynchronously - hence, no
</span><br>
<span class="quotelev1">&gt; daemon can know when another daemon has completed the launch and thus is
</span><br>
<span class="quotelev1">&gt; ready to communicate;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (c) the failure of any local launch can generate an error response back to
</span><br>
<span class="quotelev1">&gt; the daemons with orders to kill their procs, exit, or other things. The
</span><br>
<span class="quotelev1">&gt; daemons must, therefore, not be in blocking communication calls as this will
</span><br>
<span class="quotelev1">&gt; prevent them from responding as directed; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (d) the daemons may not be fully connected - hence, any collective must
</span><br>
<span class="quotelev1">&gt; &quot;follow&quot; the communication topology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we could use is a quasi-collective &quot;gather&quot; based on non-blocking
</span><br>
<span class="quotelev1">&gt; receives that preserves the daemons' ability to respond to unexpected
</span><br>
<span class="quotelev1">&gt; commands such as &quot;kill/exit&quot;. If someone is interested in working on this,
</span><br>
<span class="quotelev1">&gt; please contact me for a fuller description of the problem.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Previous message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2711.php">Ralph H Castain: "[OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Reply:</strong> <a href="2723.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
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
