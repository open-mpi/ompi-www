<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 15:59:45 2008" -->
<!-- isoreceived="20080922195945" -->
<!-- sent="Mon, 22 Sep 2008 13:59:37 -0600" -->
<!-- isosent="20080922195937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600" -->
<!-- id="DD70526B-111D-4A4E-964E-3F65394918DB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="537C6C0940C6C143AA46A88946B854170F08DCD8_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 15:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4685.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Maybe in reply to:</strong> <a href="4678.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a very long drawn-out discussion about this early in 2007.  
<br>
Rather than rehash all that, I'll try to summarize it here. It may get  
<br>
confusing - it helped a whole lot to be in a room with a whiteboard.  
<br>
There were also presentations on the subject - I believe the slides  
<br>
may still be in the docs repository.
<br>
<p>Because terminology quickly gets confusing, we adopted a slightly  
<br>
different one for these discussions. We talk about OMPI being a  
<br>
&quot;single cell&quot; system - i.e., jobs executed via mpirun can only span  
<br>
nodes that are reachable by that mpirun. In a typical managed  
<br>
environment, a cell aligns quite well with a &quot;cluster&quot;. In an  
<br>
unmanaged environment where the user provides a hostfile, the cell  
<br>
will contain all nodes specified in the hostfile.
<br>
<p>We don't filter or abort for non-matching hostnames - if mpirun can  
<br>
launch on that node, then great. What we don't support is asking  
<br>
mpirun to remotely execute another mpirun on the frontend of another  
<br>
cell in order to launch procs on the nodes in -that- cell, nor do we  
<br>
ask mpirun to in any way manage (or even know about) any procs running  
<br>
on a remote cell.
<br>
<p>I see what you are saying about the ALPS node name. However, the field  
<br>
you want to add doesn't have anything to do with accept/connect. The  
<br>
orte_node_t object is used solely by mpirun to keep track of the node  
<br>
pool it controls - i.e., the nodes upon which it is launching jobs.  
<br>
Thus, the mpirun on cluster A will have &quot;nidNNNN&quot; entries it got from  
<br>
its allocation, and the mpirun on cluster B will have &quot;nidNNNN&quot;  
<br>
entries it got from its allocation - but the two mpiruns will never  
<br>
exchange that information, nor will the mpirun on cluster A ever have  
<br>
a need to know the node entries for cluster B. Each mpirun launches  
<br>
and manages procs -only- on the nodes in its own allocation.
<br>
<p>I agree you will have issues when doing the connect/accept modex as  
<br>
the nodenames are exchanged and are no longer unique in your scenario.  
<br>
However, that info stays in the  ompi_proc_t - it never gets  
<br>
communicated to the ORTE layer as we couldn't care less down there  
<br>
about the remote procs since they are under the control of a different  
<br>
mpirun. So if you need to add a cluster id field for this purpose, it  
<br>
needs to go in ompi_proc_t - not in the orte structures.
<br>
<p>And for that, you probably need to discuss it with the MPI team as  
<br>
changes to ompi_proc_t will likely generate considerable discussion.
<br>
<p>FWIW: this is one reason I warned Galen about the problems in reviving  
<br>
multi-cluster operations again. We used to deal with multi-cells in  
<br>
the process name itself, but all that support has been removed from  
<br>
OMPI.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p>On Sep 22, 2008, at 1:39 PM, Matney Sr, Kenneth D. wrote:
<br>
<p><span class="quotelev1">&gt; I may be opening a can of worms...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, what prevents a user from running across clusters in a &quot;normal
</span><br>
<span class="quotelev1">&gt; OMPI&quot;, i.e., non-ALPS environment?  When he puts hosts into his
</span><br>
<span class="quotelev1">&gt; hostfile, does it parse and abort/filter non-matching hostnames?  The
</span><br>
<span class="quotelev1">&gt; problem for ALPS based systems is that nodes are addressed via NID,PID
</span><br>
<span class="quotelev1">&gt; pairs at the portals level.  Thus, these are unique only within a
</span><br>
<span class="quotelev1">&gt; cluster.  In point of fact, I could rewrite all of the ALPS support to
</span><br>
<span class="quotelev1">&gt; identify the nodes by &quot;cluster_id&quot;.NID.  It would be a bit inefficient
</span><br>
<span class="quotelev1">&gt; within a cluster because, we would have to extract the NID from this
</span><br>
<span class="quotelev1">&gt; syntax as we go down to the portals layer.  It also would lead to a
</span><br>
<span class="quotelev1">&gt; larger degree of change within the OMPI ALPS code base.  However, I  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; give ALPS-based systems the same feature set as the rest of the world.
</span><br>
<span class="quotelev1">&gt; It just is more efficient to use an additional pointer in the
</span><br>
<span class="quotelev1">&gt; orte_node_t structure and results is a far simpler code structure.   
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; makes it easier to maintain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only thing that &quot;this change&quot; really does is to identify the  
</span><br>
<span class="quotelev1">&gt; cluster
</span><br>
<span class="quotelev1">&gt; under which the ALPS allocation is made.  If you are addressing a node
</span><br>
<span class="quotelev1">&gt; in another cluster, (e.g., via accept/connect), the clustername/NID  
</span><br>
<span class="quotelev1">&gt; pair
</span><br>
<span class="quotelev1">&gt; is unique for ALPS as a hostname on a cluster node is unique between
</span><br>
<span class="quotelev1">&gt; clusters.  If you do a gethostname() on a normal cluster node, you are
</span><br>
<span class="quotelev1">&gt; going to get mynameNNNNN, or something similar.  If you do a
</span><br>
<span class="quotelev1">&gt; gethostname() on an ALPS node, you are going to get nidNNNNN; there is
</span><br>
<span class="quotelev1">&gt; no differentiation between cluster A and cluster B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps, my earlier comment was not accurate.  In reality, it provides
</span><br>
<span class="quotelev1">&gt; the same degree of identification for ALPS nodes as hostname provides
</span><br>
<span class="quotelev1">&gt; for normal clusters.  From your perspective, it is immaterial that it
</span><br>
<span class="quotelev1">&gt; also would allow us to support our limited form of multi-cluster
</span><br>
<span class="quotelev1">&gt; support.  However, of and by itself, it only provides the same level  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; identification as is done for other cluster nodes.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, September 22, 2008 2:33 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Cc: Matney Sr, Kenneth D.
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue isn't with adding a string. The question is whether or not
</span><br>
<span class="quotelev1">&gt; OMPI is to support one job running across multiple clusters. We made a
</span><br>
<span class="quotelev1">&gt; conscious decision (after lengthy discussions on OMPI core and ORTE
</span><br>
<span class="quotelev1">&gt; mailing lists, plus several telecons) to not do so - we require that
</span><br>
<span class="quotelev1">&gt; the job execute on a single cluster, while allowing connect/accept to
</span><br>
<span class="quotelev1">&gt; occur between jobs on different clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is difficult to understand why we need a string (or our old &quot;cell
</span><br>
<span class="quotelev1">&gt; id&quot;) to tell us which cluster we are on if we are only following that
</span><br>
<span class="quotelev1">&gt; operating model. From the commit comment, and from what I know of the
</span><br>
<span class="quotelev1">&gt; system, the only rationale for adding such a designator is to shift
</span><br>
<span class="quotelev1">&gt; back to the one-mpirun-spanning-multiple-cluster model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we are now going to make that change, then it merits a similar
</span><br>
<span class="quotelev1">&gt; level of consideration as the last decision to move away from that
</span><br>
<span class="quotelev1">&gt; model. Making that move involves considerably more than just adding a
</span><br>
<span class="quotelev1">&gt; cluster id string. You may think that now, but the next step is
</span><br>
<span class="quotelev1">&gt; inevitably to bring back remote launch, killing jobs on all clusters
</span><br>
<span class="quotelev1">&gt; when one cluster has a problem, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before we go down this path and re-open Pandora's box, we should at
</span><br>
<span class="quotelev1">&gt; least agree that is what we intend to do...or agree on what hard
</span><br>
<span class="quotelev1">&gt; constraints we will place on multi-cluster operations. Frankly, I'm
</span><br>
<span class="quotelev1">&gt; tired of bouncing back-and-forth on even the most basic design
</span><br>
<span class="quotelev1">&gt; decisions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 11:55 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What Ken put in is what is needed for the limited multi-cluster
</span><br>
<span class="quotelev2">&gt;&gt; capabilities
</span><br>
<span class="quotelev2">&gt;&gt; we need, just one additional string.  I don't think there is a need
</span><br>
<span class="quotelev2">&gt;&gt; for any
</span><br>
<span class="quotelev2">&gt;&gt; discussion of such a small change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/22/08 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We really should discuss that as a group first - there is quite a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of code required to actually support multi-clusters that has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; removed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our operational model that was agreed to quite a while ago is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun can -only- extend over a single &quot;cell&quot;. You can connect/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple mpiruns that are sitting on different cells, but you cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execute a single mpirun across multiple cells.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please keep this on your own development branch for now. Bringing it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into the trunk will require discussion as this changes the operating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model, and has significant code consequences when we look at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abnormal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminations, comm_spawn, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 22, 2008, at 11:26 AM, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This check in was in error - I had not realized that the checkout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the 1.3 branch, so we will fix this, and put these into the trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1.4).  We
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are going to bring in some limited multi-cluster support - limited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operative word.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 9/22/08 12:50 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I notice that Ken Matney (the committer) is not on the devel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list; I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; added him explicitly to the CC line.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ken: please see below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 12:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Whoa! We made a decision NOT to support multi-cluster apps in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; over a year ago!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please remove this from 1.3 - we should discuss if/when this  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; even be allowed in the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 10:35 AM, matney_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Author: matney
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: 2008-09-22 12:35:54 EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 19600
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19600">https://svn.open-mpi.org/trac/ompi/changeset/19600</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Added member to orte_node_t to enable multi-cluster jobs in ALPS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduled systems (like Cray XT).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; branches/v1.3/orte/runtime/orte_globals.h |     4 ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Modified: branches/v1.3/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- branches/v1.3/orte/runtime/orte_globals.h (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +++ branches/v1.3/orte/runtime/orte_globals.h 2008-09-22  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12:35:54
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -222,6 +222,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /** Username on this node, if specified */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; char *username;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; char *slot_list;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +    /** Clustername (machine name of cluster) on which this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +        resides.  ALPS scheduled systems need this to enable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +        multi-cluster support.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +    char *clustername;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; } orte_node_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_node_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4685.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Maybe in reply to:</strong> <a href="4678.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
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
