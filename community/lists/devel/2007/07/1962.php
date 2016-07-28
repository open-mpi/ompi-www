<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 10:14:00 2007" -->
<!-- isoreceived="20070720141400" -->
<!-- sent="Fri, 20 Jul 2007 10:13:54 -0400" -->
<!-- isosent="20070720141354" -->
<!-- name="Rolf.Vandevaart_at_[hidden]" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Name resolution" -->
<!-- id="46A0C322.3070709_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2C6009A.358D%rhc_at_lanl.gov" -->
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
<strong>From:</strong> <a href="mailto:Rolf.Vandevaart_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Name%20resolution"><em>Rolf.Vandevaart_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-07-20 10:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1961.php">Ralph Castain: "[OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Ralph Castain: "[OMPI devel] Name resolution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Reply:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings:
<br>
Ralph brings up some good points here.    I have a few thoughts/experiences.
<br>
First, I like the way things are behaving now.  In fact, I take full 
<br>
advantage
<br>
of the fact the different aliases for a node are treated as different nodes
<br>
to do some scalability testing.  It is in this way that I fake out the 
<br>
ORTE and
<br>
have it start multiple daemons on a node.  (We had a similar feature in our
<br>
old ClusterTools runtime environment to get multiple daemons running
<br>
on a single node)
<br>
<p>For example, I do this to get 4 orteds running on &quot;alachua&quot;.
<br>
<p>mpirun -np 4 -host alachua,alachua-1,alachua-2,alachua-3 hostname
<br>
<p>All of the above resolve to the same IP address. 
<br>
<p>Secondly, I would not want us to make any change that negatively affects
<br>
scalability.  If we do decide to make a change, then we need a flag to
<br>
revert to the original behaviour.
<br>
<p>Lastly, I guess I have two questions.
<br>
1. Are you sure that Open MPI behaves in &quot;unexpected ways?&quot;  This all
<br>
worked fine for me as I stated above.
<br>
2. Do you have any more details on the cost of &quot;resolving every name&quot;?
<br>
Which API is it that causes the problems?  I only ask because I have
<br>
been trying to understand some of the NIS traffic I see when running
<br>
on my cluster.
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;Yo all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;A recent email thread on the devel list involved (in part) the question of
</span><br>
<span class="quotelev1">&gt;hostname resolution. [Note: I have a fix for the localhost problem described
</span><br>
<span class="quotelev1">&gt;in that thread - just need to chase down a memory corruption problem, so it
</span><br>
<span class="quotelev1">&gt;won't come into the trunk until next week]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is a problem that has troubled us since the beginning, and we have gone
</span><br>
<span class="quotelev1">&gt;back-and-forth on solutions. Rather than just throwing another code change
</span><br>
<span class="quotelev1">&gt;into the system, Jeff and I thought it might be a good idea to seek input
</span><br>
<span class="quotelev1">&gt;from the community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The problem is that our system requires a consistent way of identifying
</span><br>
<span class="quotelev1">&gt;nodes so we can tell if, for example, we already have a daemon on that node.
</span><br>
<span class="quotelev1">&gt;We currently do that via a string hostname. This appears to work just fine
</span><br>
<span class="quotelev1">&gt;in managed environments as the allocators are (usually?) consistent in how
</span><br>
<span class="quotelev1">&gt;they name a node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, users are frequently not consistent, which causes a problem. For
</span><br>
<span class="quotelev1">&gt;example, users can create a hostfile entry for &quot;foo.bar.net&quot;, and then put
</span><br>
<span class="quotelev1">&gt;&quot;-host foo&quot; on their command line. In Open MPI, these will be treated as two
</span><br>
<span class="quotelev1">&gt;completely separate nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the past, we attempted to solve this by actually resolving every name
</span><br>
<span class="quotelev1">&gt;provided to us. However, resolving names of remote hosts can be a very
</span><br>
<span class="quotelev1">&gt;expensive function call, especially at scale. One solution we considered was
</span><br>
<span class="quotelev1">&gt;to only do this for non-managed environments - i.e., when provided names in
</span><br>
<span class="quotelev1">&gt;a hostfile or via -host. This was rejected on the grounds that it penalized
</span><br>
<span class="quotelev1">&gt;people who used those mechanisms and, in many cases, wasn't necessary
</span><br>
<span class="quotelev1">&gt;because users were careful to avoid ambiguity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But that leaves us with an unsolved problem that can cause Open MPI to
</span><br>
<span class="quotelev1">&gt;behave in unexpected ways, including possibly hanging. Of course, we could
</span><br>
<span class="quotelev1">&gt;just check names for matches in that first network name field - this would
</span><br>
<span class="quotelev1">&gt;solve the &quot;foo&quot; vs &quot;foo.bar.net&quot; problem, but creates a vulnerability (what
</span><br>
<span class="quotelev1">&gt;if we have both &quot;foo.bar.net&quot; and &quot;foo.no-bar.net&quot; in our hostfile?) that
</span><br>
<span class="quotelev1">&gt;may or may not be acceptable (I'm sure it is at least uncommon for an MPI
</span><br>
<span class="quotelev1">&gt;app to cross subnet boundaries, but maybe someone is really doing this in
</span><br>
<span class="quotelev1">&gt;some rsh-based cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Or we could go back to fully resolving names provided via non-managed
</span><br>
<span class="quotelev1">&gt;channels. Or we just tell people that &quot;you *must* be consistent in how you
</span><br>
<span class="quotelev1">&gt;identify nodes&quot;. Or....?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any input would be appreciated.
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1961.php">Ralph Castain: "[OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Ralph Castain: "[OMPI devel] Name resolution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Reply:</strong> <a href="1963.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
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
