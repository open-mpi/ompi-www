<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 14:33:29 2008" -->
<!-- isoreceived="20080922183329" -->
<!-- sent="Mon, 22 Sep 2008 12:33:20 -0600" -->
<!-- isosent="20080922183320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600" -->
<!-- id="1DC3F08A-FBE2-42DC-BD98-87B4595B4418_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4FD5459.252FD%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2008-09-22 14:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4684.php">Tim Mattox: "[OMPI devel] Commit access to 1.3 restricted to gatekeeper(s)"</a>
<li><strong>In reply to:</strong> <a href="4683.php">Richard Graham: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue isn't with adding a string. The question is whether or not  
<br>
OMPI is to support one job running across multiple clusters. We made a  
<br>
conscious decision (after lengthy discussions on OMPI core and ORTE  
<br>
mailing lists, plus several telecons) to not do so - we require that  
<br>
the job execute on a single cluster, while allowing connect/accept to  
<br>
occur between jobs on different clusters.
<br>
<p>It is difficult to understand why we need a string (or our old &quot;cell  
<br>
id&quot;) to tell us which cluster we are on if we are only following that  
<br>
operating model. From the commit comment, and from what I know of the  
<br>
system, the only rationale for adding such a designator is to shift  
<br>
back to the one-mpirun-spanning-multiple-cluster model.
<br>
<p>If we are now going to make that change, then it merits a similar  
<br>
level of consideration as the last decision to move away from that  
<br>
model. Making that move involves considerably more than just adding a  
<br>
cluster id string. You may think that now, but the next step is  
<br>
inevitably to bring back remote launch, killing jobs on all clusters  
<br>
when one cluster has a problem, etc.
<br>
<p>Before we go down this path and re-open Pandora's box, we should at  
<br>
least agree that is what we intend to do...or agree on what hard  
<br>
constraints we will place on multi-cluster operations. Frankly, I'm  
<br>
tired of bouncing back-and-forth on even the most basic design  
<br>
decisions.
<br>
<p>Ralph
<br>
<p><p><p>On Sep 22, 2008, at 11:55 AM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; What Ken put in is what is needed for the limited multi-cluster  
</span><br>
<span class="quotelev1">&gt; capabilities
</span><br>
<span class="quotelev1">&gt; we need, just one additional string.  I don't think there is a need  
</span><br>
<span class="quotelev1">&gt; for any
</span><br>
<span class="quotelev1">&gt; discussion of such a small change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/22/08 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We really should discuss that as a group first - there is quite a bit
</span><br>
<span class="quotelev2">&gt;&gt; of code required to actually support multi-clusters that has been
</span><br>
<span class="quotelev2">&gt;&gt; removed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our operational model that was agreed to quite a while ago is that
</span><br>
<span class="quotelev2">&gt;&gt; mpirun can -only- extend over a single &quot;cell&quot;. You can connect/accept
</span><br>
<span class="quotelev2">&gt;&gt; multiple mpiruns that are sitting on different cells, but you cannot
</span><br>
<span class="quotelev2">&gt;&gt; execute a single mpirun across multiple cells.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please keep this on your own development branch for now. Bringing it
</span><br>
<span class="quotelev2">&gt;&gt; into the trunk will require discussion as this changes the operating
</span><br>
<span class="quotelev2">&gt;&gt; model, and has significant code consequences when we look at abnormal
</span><br>
<span class="quotelev2">&gt;&gt; terminations, comm_spawn, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2008, at 11:26 AM, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This check in was in error - I had not realized that the checkout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 1.3 branch, so we will fix this, and put these into the trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1.4).  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are going to bring in some limited multi-cluster support - limited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operative word.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/22/08 12:50 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I notice that Ken Matney (the committer) is not on the devel  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list; I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; added him explicitly to the CC line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ken: please see below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 22, 2008, at 12:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Whoa! We made a decision NOT to support multi-cluster apps in OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; over a year ago!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please remove this from 1.3 - we should discuss if/when this would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; even be allowed in the trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 22, 2008, at 10:35 AM, matney_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Author: matney
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: 2008-09-22 12:35:54 EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 19600
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19600">https://svn.open-mpi.org/trac/ompi/changeset/19600</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Added member to orte_node_t to enable multi-cluster jobs in ALPS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; scheduled systems (like Cray XT).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branches/v1.3/orte/runtime/orte_globals.h |     4 ++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Modified: branches/v1.3/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --- branches/v1.3/orte/runtime/orte_globals.h (original)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +++ branches/v1.3/orte/runtime/orte_globals.h 2008-09-22 12:35:54
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -222,6 +222,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /** Username on this node, if specified */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; char *username;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; char *slot_list;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    /** Clustername (machine name of cluster) on which this node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +        resides.  ALPS scheduled systems need this to enable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +        multi-cluster support.  */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    char *clustername;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; } orte_node_t;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_node_t);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4684.php">Tim Mattox: "[OMPI devel] Commit access to 1.3 restricted to gatekeeper(s)"</a>
<li><strong>In reply to:</strong> <a href="4683.php">Richard Graham: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
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
