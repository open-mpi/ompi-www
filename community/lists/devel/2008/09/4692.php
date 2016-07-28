<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:12:29 2008" -->
<!-- isoreceived="20080923141229" -->
<!-- sent="Tue, 23 Sep 2008 10:12:20 -0400" -->
<!-- isosent="20080923141220" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600" -->
<!-- id="C4FE7184.253DE%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D8C3EF.8050005_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 10:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4693.php">Lenny Verkhovsky: "[OMPI devel] #1506"</a>
<li><strong>Previous message:</strong> <a href="4691.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4691.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4697.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4697.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me make the point that adding a data structure is much less
<br>
destabilization to the tree than the routine day-to-day changes that go on
<br>
in the tree.
<br>
<p>Rich
<br>
<p><p>On 9/23/08 6:24 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I think the point is that as a group, we consciously, deliberately,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and painfully decided not to support multi-cluster.  And as a result,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; we ripped out a lot of supporting code.  Starting down this path again
</span><br>
<span class="quotelev3">&gt;&gt; &gt; will likely result in a) re-opening all the discussions, b) re-adding
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a lot of code (or code effectively similar to what was there before).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Let's not forget that there were many unsolved problems surrounding
</span><br>
<span class="quotelev3">&gt;&gt; &gt; multi-cluster last time, too.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It was also pointed out in Ralph's mails that, at least from the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; descriptions provided, adding the field in orte_node_t does not
</span><br>
<span class="quotelev3">&gt;&gt; &gt; actually solve the problem that ORNL is trying to solve.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If we, as a group, decide to re-add all this stuff, then a) recognize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that we are flip-flopping *again* on this issue, and b) it will take a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lot of coding effort to do so.  I do think that since this was a group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; decision last time, it should be a group decision this time, too.  If
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this does turn out to be as large of a sub-project as described, I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; would be opposed to the development occurring on the trunk; hg trees
</span><br>
<span class="quotelev3">&gt;&gt; &gt; are perfect for this kind of stuff.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I personally have no customers who are doing cross-cluster kinds of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; things, so I don't personally care if cross-cluster functionality
</span><br>
<span class="quotelev3">&gt;&gt; &gt; works its way [back] in.  But I recognize that OMPI core members are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; investigating it.  So the points I'm making are procedural; I have no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; real dog in this fight...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I agree with Jeff that this is perfect for an hg tree.  Though I also
</span><br>
<span class="quotelev1">&gt; don't have a dog in this fight but I have a cat that would rather stay
</span><br>
<span class="quotelev1">&gt; comfortably sleeping and not have someone step on its tail :-).   In
</span><br>
<span class="quotelev1">&gt; other words knock yourself out but please don't destabilize the trunk.
</span><br>
<span class="quotelev1">&gt; Of course that begs the question what happens when the hg tree is done
</span><br>
<span class="quotelev1">&gt; and working?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 22, 2008, at 4:40 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; There is NO need to have this discussion again, it was painful enough
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; last time. From my perspective I do not understand why are you making
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; so much noise on this one. How a 4 lines change in some ALPS specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; files (Cray system very specific to ORNL) can generate more than 3 A4
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pages of emails, is still something out of my perception.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; If they want to do multi-cluster and they do not break anything in
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ORTE/OMPI and they do not ask other people to do it for them why
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; trying to stop them ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On Sep 22, 2008, at 3:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; There was a very long drawn-out discussion about this early in 2007.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Rather than rehash all that, I'll try to summarize it here. It may
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; get confusing - it helped a whole lot to be in a room with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; whiteboard. There were also presentations on the subject - I believe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; the slides may still be in the docs repository.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Because terminology quickly gets confusing, we adopted a slightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; different one for these discussions. We talk about OMPI being a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; &quot;single cell&quot; system - i.e., jobs executed via mpirun can only span
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; nodes that are reachable by that mpirun. In a typical managed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; environment, a cell aligns quite well with a &quot;cluster&quot;. In an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; unmanaged environment where the user provides a hostfile, the cell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; will contain all nodes specified in the hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; We don't filter or abort for non-matching hostnames - if mpirun can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; launch on that node, then great. What we don't support is asking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; mpirun to remotely execute another mpirun on the frontend of another
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; cell in order to launch procs on the nodes in -that- cell, nor do we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; ask mpirun to in any way manage (or even know about) any procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; running on a remote cell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I see what you are saying about the ALPS node name. However, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; field you want to add doesn't have anything to do with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; accept/connect. The orte_node_t object is used solely by mpirun to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; keep track of the node pool it controls - i.e., the nodes upon which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; it is launching jobs. Thus, the mpirun on cluster A will have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; &quot;nidNNNN&quot; entries it got from its allocation, and the mpirun on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; cluster B will have &quot;nidNNNN&quot; entries it got from its allocation -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; but the two mpiruns will never exchange that information, nor will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; the mpirun on cluster A ever have a need to know the node entries
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; for cluster B. Each mpirun launches and manages procs -only- on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; nodes in its own allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I agree you will have issues when doing the connect/accept modex as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; the nodenames are exchanged and are no longer unique in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; scenario. However, that info stays in the  ompi_proc_t - it never
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; gets communicated to the ORTE layer as we couldn't care less down
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; there about the remote procs since they are under the control of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; different mpirun. So if you need to add a cluster id field for this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; purpose, it needs to go in ompi_proc_t - not in the orte structures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; And for that, you probably need to discuss it with the MPI team as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; changes to ompi_proc_t will likely generate considerable discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; FWIW: this is one reason I warned Galen about the problems in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; reviving multi-cluster operations again. We used to deal with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; multi-cells in the process name itself, but all that support has
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; been removed from OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; On Sep 22, 2008, at 1:39 PM, Matney Sr, Kenneth D. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; I may be opening a can of worms...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; But, what prevents a user from running across clusters in a &quot;normal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; OMPI&quot;, i.e., non-ALPS environment?  When he puts hosts into his
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; hostfile, does it parse and abort/filter non-matching hostnames?  The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; problem for ALPS based systems is that nodes are addressed via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NID,PID
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; pairs at the portals level.  Thus, these are unique only within a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; cluster.  In point of fact, I could rewrite all of the ALPS support
</span><br>
to
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; identify the nodes by &quot;cluster_id&quot;.NID.  It would be a bit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; inefficient
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; within a cluster because, we would have to extract the NID from this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; syntax as we go down to the portals layer.  It also would lead to a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; larger degree of change within the OMPI ALPS code base.  However, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; give ALPS-based systems the same feature set as the rest of the &gt;&gt;&gt;&gt;&gt;
</span><br>
world.
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; It just is more efficient to use an additional pointer in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; orte_node_t structure and results is a far simpler code structure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; makes it easier to maintain.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The only thing that &quot;this change&quot; really does is to identify the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; under which the ALPS allocation is made.  If you are addressing a
</span><br>
node
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; in another cluster, (e.g., via accept/connect), the clustername/NID
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; pair
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; is unique for ALPS as a hostname on a cluster node is unique between
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; clusters.  If you do a gethostname() on a normal cluster node, you
</span><br>
are
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; going to get mynameNNNNN, or something similar.  If you do a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; gethostname() on an ALPS node, you are going to get nidNNNNN; there
</span><br>
is
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; no differentiation between cluster A and cluster B.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Perhaps, my earlier comment was not accurate.  In reality, it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; provides
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; the same degree of identification for ALPS nodes as hostname provides
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; for normal clusters.  From your perspective, it is immaterial that it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; also would allow us to support our limited form of multi-cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; support.  However, of and by itself, it only provides the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; level of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; identification as is done for other cluster nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Ken
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; From: Ralph Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Sent: Monday, September 22, 2008 2:33 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Cc: Matney Sr, Kenneth D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The issue isn't with adding a string. The question is whether or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; OMPI is to support one job running across multiple clusters. We made
</span><br>
a
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; conscious decision (after lengthy discussions on OMPI core and ORTE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; mailing lists, plus several telecons) to not do so - we require that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; the job execute on a single cluster, while allowing connect/accept to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; occur between jobs on different clusters.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; It is difficult to understand why we need a string (or our old &quot;cell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; id&quot;) to tell us which cluster we are on if we are only following that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; operating model. From the commit comment, and from what I know of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; system, the only rationale for adding such a designator is to shift
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; back to the one-mpirun-spanning-multiple-cluster model.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; If we are now going to make that change, then it merits a similar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; level of consideration as the last decision to move away from that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; model. Making that move involves considerably more than just adding a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; cluster id string. You may think that now, but the next step is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; inevitably to bring back remote launch, killing jobs on all clusters
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; when one cluster has a problem, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Before we go down this path and re-open Pandora's box, we should at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; least agree that is what we intend to do...or agree on what hard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; constraints we will place on multi-cluster operations. Frankly, I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; tired of bouncing back-and-forth on even the most basic design
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; decisions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On Sep 22, 2008, at 11:55 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; What Ken put in is what is needed for the limited multi-cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; capabilities
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; we need, just one additional string.  I don't think there is a need
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; for any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; discussion of such a small change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; On 9/22/08 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; We really should discuss that as a group first - there is quite a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; bit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; of code required to actually support multi-clusters that has been
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; removed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Our operational model that was agreed to quite a while ago is
</span><br>
that
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; mpirun can -only- extend over a single &quot;cell&quot;. You can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; connect/accept
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; multiple mpiruns that are sitting on different cells, but you
</span><br>
cannot
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; execute a single mpirun across multiple cells.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Please keep this on your own development branch for now. Bringing
</span><br>
it
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; into the trunk will require discussion as this changes the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; operating
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; model, and has significant code consequences when we look at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; abnormal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; terminations, comm_spawn, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 11:26 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; This check in was in error - I had not realized that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; was from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the 1.3 branch, so we will fix this, and put these into the
</span><br>
trunk
<br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (1.4).  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; are going to bring in some limited multi-cluster support -
</span><br>
limited
<br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; operative word.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 9/22/08 12:50 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I notice that Ken Matney (the committer) is not on the devel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; list; I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; added him explicitly to the CC line.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ken: please see below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 12:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Whoa! We made a decision NOT to support multi-cluster apps
</span><br>
in
<br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over a year ago!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please remove this from 1.3 - we should discuss if/when
</span><br>
this
<br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; even be allowed in the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 10:35 AM, matney_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Author: matney
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: 2008-09-22 12:35:54 EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 19600
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19600">https://svn.open-mpi.org/trac/ompi/changeset/19600</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Added member to orte_node_t to enable multi-cluster jobs
</span><br>
in ALPS
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduled systems (like Cray XT).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branches/v1.3/orte/runtime/orte_globals.h |     4 ++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Modified: branches/v1.3/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- branches/v1.3/orte/runtime/orte_globals.h (original)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +++ branches/v1.3/orte/runtime/orte_globals.h 2008-09-22
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12:35:54
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -222,6 +222,10 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /** Username on this node, if specified */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; char *username;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; char *slot_list;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +    /** Clustername (machine name of cluster) on which
</span><br>
this
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +        resides.  ALPS scheduled systems need this to
</span><br>
enable
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +        multi-cluster support.  */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +    char *clustername;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; } orte_node_t;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_node_t);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4693.php">Lenny Verkhovsky: "[OMPI devel] #1506"</a>
<li><strong>Previous message:</strong> <a href="4691.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4691.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4697.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4697.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
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
