<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 08:03:19 2007" -->
<!-- isoreceived="20070720120319" -->
<!-- sent="Fri, 20 Jul 2007 06:03:06 -0600" -->
<!-- isosent="20070720120306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Name resolution" -->
<!-- id="C2C6009A.358D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-20 08:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Reply:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>A recent email thread on the devel list involved (in part) the question of
<br>
hostname resolution. [Note: I have a fix for the localhost problem described
<br>
in that thread - just need to chase down a memory corruption problem, so it
<br>
won't come into the trunk until next week]
<br>
<p>This is a problem that has troubled us since the beginning, and we have gone
<br>
back-and-forth on solutions. Rather than just throwing another code change
<br>
into the system, Jeff and I thought it might be a good idea to seek input
<br>
from the community.
<br>
<p>The problem is that our system requires a consistent way of identifying
<br>
nodes so we can tell if, for example, we already have a daemon on that node.
<br>
We currently do that via a string hostname. This appears to work just fine
<br>
in managed environments as the allocators are (usually?) consistent in how
<br>
they name a node.
<br>
<p>However, users are frequently not consistent, which causes a problem. For
<br>
example, users can create a hostfile entry for &quot;foo.bar.net&quot;, and then put
<br>
&quot;-host foo&quot; on their command line. In Open MPI, these will be treated as two
<br>
completely separate nodes.
<br>
<p>In the past, we attempted to solve this by actually resolving every name
<br>
provided to us. However, resolving names of remote hosts can be a very
<br>
expensive function call, especially at scale. One solution we considered was
<br>
to only do this for non-managed environments - i.e., when provided names in
<br>
a hostfile or via -host. This was rejected on the grounds that it penalized
<br>
people who used those mechanisms and, in many cases, wasn't necessary
<br>
because users were careful to avoid ambiguity.
<br>
<p>But that leaves us with an unsolved problem that can cause Open MPI to
<br>
behave in unexpected ways, including possibly hanging. Of course, we could
<br>
just check names for matches in that first network name field - this would
<br>
solve the &quot;foo&quot; vs &quot;foo.bar.net&quot; problem, but creates a vulnerability (what
<br>
if we have both &quot;foo.bar.net&quot; and &quot;foo.no-bar.net&quot; in our hostfile?) that
<br>
may or may not be acceptable (I'm sure it is at least uncommon for an MPI
<br>
app to cross subnet boundaries, but maybe someone is really doing this in
<br>
some rsh-based cluster).
<br>
<p>Or we could go back to fully resolving names provided via non-managed
<br>
channels. Or we just tell people that &quot;you *must* be consistent in how you
<br>
identify nodes&quot;. Or....?
<br>
<p>Any input would be appreciated.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Previous message:</strong> <a href="1960.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15533"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
<li><strong>Reply:</strong> <a href="1962.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Name resolution"</a>
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
