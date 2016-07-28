<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 10:31:17 2007" -->
<!-- isoreceived="20070720143117" -->
<!-- sent="Fri, 20 Jul 2007 08:31:02 -0600" -->
<!-- isosent="20070720143102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Name resolution" -->
<!-- id="C2C62346.359A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A0C322.3070709_at_Sun.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 10:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Previous message:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Reply:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/20/07 8:13 AM, &quot;Rolf.Vandevaart_at_[hidden]&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings:
</span><br>
<span class="quotelev1">&gt; Ralph brings up some good points here.    I have a few thoughts/experiences.
</span><br>
<span class="quotelev1">&gt; First, I like the way things are behaving now.  In fact, I take full
</span><br>
<span class="quotelev1">&gt; advantage
</span><br>
<span class="quotelev1">&gt; of the fact the different aliases for a node are treated as different nodes
</span><br>
<span class="quotelev1">&gt; to do some scalability testing.  It is in this way that I fake out the
</span><br>
<span class="quotelev1">&gt; ORTE and
</span><br>
<span class="quotelev1">&gt; have it start multiple daemons on a node.  (We had a similar feature in our
</span><br>
<span class="quotelev1">&gt; old ClusterTools runtime environment to get multiple daemons running
</span><br>
<span class="quotelev1">&gt; on a single node)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, I do this to get 4 orteds running on &quot;alachua&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host alachua,alachua-1,alachua-2,alachua-3 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of the above resolve to the same IP address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Secondly, I would not want us to make any change that negatively affects
</span><br>
<span class="quotelev1">&gt; scalability.  If we do decide to make a change, then we need a flag to
</span><br>
<span class="quotelev1">&gt; revert to the original behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lastly, I guess I have two questions.
</span><br>
<span class="quotelev1">&gt; 1. Are you sure that Open MPI behaves in &quot;unexpected ways?&quot;  This all
</span><br>
<span class="quotelev1">&gt; worked fine for me as I stated above.
</span><br>
<p>Here's the problem. The system sends its launch message to every daemon.
<br>
That message specifies what exec to run on each *node* - not what exec each
<br>
daemon should run since we only map to nodes and expect only one daemon to
<br>
be on that node. So if you have multiple daemons sitting on the same node,
<br>
they each will launch a copy of the procs for that node.
<br>
<p>In your case, hostname couldn't care less so it isn't a problem. However,
<br>
for an MPI job, you would now have multiple procs sharing the same name -
<br>
which causes havoc.
<br>
<p><p><span class="quotelev1">&gt; 2. Do you have any more details on the cost of &quot;resolving every name&quot;?
</span><br>
<span class="quotelev1">&gt; Which API is it that causes the problems?  I only ask because I have
</span><br>
<span class="quotelev1">&gt; been trying to understand some of the NIS traffic I see when running
</span><br>
<span class="quotelev1">&gt; on my cluster.
</span><br>
<p>I honestly don't recall details at the moment - it was a couple of years ago
<br>
when we last tried that option. If I recall correctly (Jeff's infamous
<br>
IIRC), it involved doing a dns_lookup on every hostname, which meant that
<br>
the HNP was banging away on your local dns server. This would take a few
<br>
seconds for a few tens of nodes due to traffic contention at the dns server
<br>
on some of the clusters we were using at the time, so there was concern over
<br>
scalability.
<br>
<p>But I may be mis-remembering. If someone can/wants to run a quick test code
<br>
to measure the time required, that might be useful info. My guess, though,
<br>
is that this might have scaling issues. Again, we could only require this in
<br>
specific cases - maybe when we have -host specified? Just fishing here...
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A recent email thread on the devel list involved (in part) the question of
</span><br>
<span class="quotelev2">&gt;&gt; hostname resolution. [Note: I have a fix for the localhost problem described
</span><br>
<span class="quotelev2">&gt;&gt; in that thread - just need to chase down a memory corruption problem, so it
</span><br>
<span class="quotelev2">&gt;&gt; won't come into the trunk until next week]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a problem that has troubled us since the beginning, and we have gone
</span><br>
<span class="quotelev2">&gt;&gt; back-and-forth on solutions. Rather than just throwing another code change
</span><br>
<span class="quotelev2">&gt;&gt; into the system, Jeff and I thought it might be a good idea to seek input
</span><br>
<span class="quotelev2">&gt;&gt; from the community.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that our system requires a consistent way of identifying
</span><br>
<span class="quotelev2">&gt;&gt; nodes so we can tell if, for example, we already have a daemon on that node.
</span><br>
<span class="quotelev2">&gt;&gt; We currently do that via a string hostname. This appears to work just fine
</span><br>
<span class="quotelev2">&gt;&gt; in managed environments as the allocators are (usually?) consistent in how
</span><br>
<span class="quotelev2">&gt;&gt; they name a node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, users are frequently not consistent, which causes a problem. For
</span><br>
<span class="quotelev2">&gt;&gt; example, users can create a hostfile entry for &quot;foo.bar.net&quot;, and then put
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-host foo&quot; on their command line. In Open MPI, these will be treated as two
</span><br>
<span class="quotelev2">&gt;&gt; completely separate nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the past, we attempted to solve this by actually resolving every name
</span><br>
<span class="quotelev2">&gt;&gt; provided to us. However, resolving names of remote hosts can be a very
</span><br>
<span class="quotelev2">&gt;&gt; expensive function call, especially at scale. One solution we considered was
</span><br>
<span class="quotelev2">&gt;&gt; to only do this for non-managed environments - i.e., when provided names in
</span><br>
<span class="quotelev2">&gt;&gt; a hostfile or via -host. This was rejected on the grounds that it penalized
</span><br>
<span class="quotelev2">&gt;&gt; people who used those mechanisms and, in many cases, wasn't necessary
</span><br>
<span class="quotelev2">&gt;&gt; because users were careful to avoid ambiguity.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But that leaves us with an unsolved problem that can cause Open MPI to
</span><br>
<span class="quotelev2">&gt;&gt; behave in unexpected ways, including possibly hanging. Of course, we could
</span><br>
<span class="quotelev2">&gt;&gt; just check names for matches in that first network name field - this would
</span><br>
<span class="quotelev2">&gt;&gt; solve the &quot;foo&quot; vs &quot;foo.bar.net&quot; problem, but creates a vulnerability (what
</span><br>
<span class="quotelev2">&gt;&gt; if we have both &quot;foo.bar.net&quot; and &quot;foo.no-bar.net&quot; in our hostfile?) that
</span><br>
<span class="quotelev2">&gt;&gt; may or may not be acceptable (I'm sure it is at least uncommon for an MPI
</span><br>
<span class="quotelev2">&gt;&gt; app to cross subnet boundaries, but maybe someone is really doing this in
</span><br>
<span class="quotelev2">&gt;&gt; some rsh-based cluster).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or we could go back to fully resolving names provided via non-managed
</span><br>
<span class="quotelev2">&gt;&gt; channels. Or we just tell people that &quot;you *must* be consistent in how you
</span><br>
<span class="quotelev2">&gt;&gt; identify nodes&quot;. Or....?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any input would be appreciated.
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
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="1964.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<li><strong>Previous message:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<li><strong>In reply to:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Reply:</strong> <a href="1965.php">Ralph Castain: "Re: [OMPI devel] Name resolution"</a>
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
