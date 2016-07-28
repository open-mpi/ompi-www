<?
$subject_val = "[OMPI devel] RTE Issue III: Collective communications across daemons";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:19:36 2007" -->
<!-- isoreceived="20071204151936" -->
<!-- sent="Tue, 04 Dec 2007 08:19:24 -0700" -->
<!-- isosent="20071204151924" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RTE Issue III: Collective communications across daemons" -->
<!-- id="C37ABE0C.B786%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RTE Issue III: Collective communications across daemons<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2712.php">Lisandro Dalcin: "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>Previous message:</strong> <a href="2710.php">Ralph H Castain: "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Reply:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
III. Collective communications across daemons
<br>
A few months ago, we deliberately extended the abstraction between the RTE
<br>
and MPI layers to reduce their interaction. This has generally been
<br>
perceived as a good thing, but it did have a cost: namely, it increased the
<br>
communications required during launch. In prior OMPI versions, we took
<br>
advantage of tighter integration to aggregate RTE and MPI communications
<br>
required during startup - this was lost in the abstraction effort.
<br>
<p>We have since been working to reduce the resulting &quot;abstraction penalty&quot;. We
<br>
have managed to achieve communication performance that scales linearly with
<br>
the number of nodes. Further improvements, though, depend upon our ability
<br>
to do quasi-collective communications in the RTE.
<br>
<p>Collectives in the RTE are complicated by the current requirement to support
<br>
non-MPI applications (topic of another email), and by the fact that not
<br>
every node participates in a given operation. The former issue is reflected
<br>
in the fact that the RTE (and hence, the daemon) cannot know if the
<br>
application process is going to call Init or not - hence, the logic in the
<br>
daemon must not block on any communication during launch since the proc may
<br>
completely execute and terminate without ever calling Init. Thus, entering a
<br>
collective to, for example, collect RML contact info is problematic as that
<br>
info may never become available - and so, the HNP -cannot- enter a
<br>
collective call to wait for its arrival.
<br>
<p>The latter issue exists for even MPI jobs. Consider the case of a single
<br>
process job that comm_spawns a child job onto other nodes. The RTE will
<br>
launch daemons on the new nodes, and then broadcast the &quot;launch procs&quot;
<br>
command across all the daemons (this is done to exploit a scalable comm
<br>
procedure). Thus, the daemon on the initial node will see the launch
<br>
command, but will know it is not participating and hence take no action.
<br>
<p>If we now attempt to perform a collective communication (say, to collect RML
<br>
contact info), we face four interacting obstacles:
<br>
<p>(a) the initial daemon isn't launching anything this time, and so won't know
<br>
it has to participate. This can obviously be resolved since it will
<br>
certainly know that a launch is being conducted, so we could have it simply
<br>
go ahead and call the appropriate collective at that time;
<br>
<p>(b) the launch of the local procs is conducted asynchronously - hence, no
<br>
daemon can know when another daemon has completed the launch and thus is
<br>
ready to communicate;
<br>
<p>(c) the failure of any local launch can generate an error response back to
<br>
the daemons with orders to kill their procs, exit, or other things. The
<br>
daemons must, therefore, not be in blocking communication calls as this will
<br>
prevent them from responding as directed; and
<br>
<p>(d) the daemons may not be fully connected - hence, any collective must
<br>
&quot;follow&quot; the communication topology.
<br>
<p>What we could use is a quasi-collective &quot;gather&quot; based on non-blocking
<br>
receives that preserves the daemons' ability to respond to unexpected
<br>
commands such as &quot;kill/exit&quot;. If someone is interested in working on this,
<br>
please contact me for a fuller description of the problem.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2712.php">Lisandro Dalcin: "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>Previous message:</strong> <a href="2710.php">Ralph H Castain: "[OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Reply:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
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
