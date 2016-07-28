<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:26:52 2008" -->
<!-- isoreceived="20080922172652" -->
<!-- sent="Mon, 22 Sep 2008 13:26:46 -0400" -->
<!-- isosent="20080922172646" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600" -->
<!-- id="C4FD4D96.252E4%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="09EA4897-DE1F-463A-84A0-466A30C3F806_at_cisco.com" -->
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
<strong>Date:</strong> 2008-09-22 13:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This check in was in error - I had not realized that the checkout was from
<br>
the 1.3 branch, so we will fix this, and put these into the trunk (1.4).  We
<br>
are going to bring in some limited multi-cluster support - limited is the
<br>
operative word.
<br>
<p>Rich
<br>
<p><p>On 9/22/08 12:50 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I notice that Ken Matney (the committer) is not on the devel list; I
</span><br>
<span class="quotelev1">&gt; added him explicitly to the CC line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken: please see below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 12:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Whoa! We made a decision NOT to support multi-cluster apps in OMPI
</span><br>
<span class="quotelev2">&gt;&gt; over a year ago!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please remove this from 1.3 - we should discuss if/when this would
</span><br>
<span class="quotelev2">&gt;&gt; even be allowed in the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2008, at 10:35 AM, matney_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: matney
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008-09-22 12:35:54 EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 19600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19600">https://svn.open-mpi.org/trac/ompi/changeset/19600</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added member to orte_node_t to enable multi-cluster jobs in ALPS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduled systems (like Cray XT).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branches/v1.3/orte/runtime/orte_globals.h |     4 ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: branches/v1.3/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- branches/v1.3/orte/runtime/orte_globals.h (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ branches/v1.3/orte/runtime/orte_globals.h 2008-09-22 12:35:54
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -222,6 +222,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /** Username on this node, if specified */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   char *username;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   char *slot_list;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /** Clustername (machine name of cluster) on which this node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        resides.  ALPS scheduled systems need this to enable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        multi-cluster support.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char *clustername;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } orte_node_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_node_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4681.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
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
