<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 12:46:16 2008" -->
<!-- isoreceived="20080922164616" -->
<!-- sent="Mon, 22 Sep 2008 10:46:08 -0600" -->
<!-- isosent="20080922164608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600" -->
<!-- id="03049CE2-1443-4C41-985C-4240694921D6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809221635.m8MGZuUA027090_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2008-09-22 12:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4677.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Maybe reply:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoa! We made a decision NOT to support multi-cluster apps in OMPI  
<br>
over a year ago!
<br>
<p>Please remove this from 1.3 - we should discuss if/when this would  
<br>
even be allowed in the trunk.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 22, 2008, at 10:35 AM, matney_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: matney
</span><br>
<span class="quotelev1">&gt; Date: 2008-09-22 12:35:54 EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 19600
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19600">https://svn.open-mpi.org/trac/ompi/changeset/19600</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Added member to orte_node_t to enable multi-cluster jobs in ALPS
</span><br>
<span class="quotelev1">&gt; scheduled systems (like Cray XT).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;  branches/v1.3/orte/runtime/orte_globals.h |     4 ++++
</span><br>
<span class="quotelev1">&gt;  1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/orte/runtime/orte_globals.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/orte/runtime/orte_globals.h	2008-09-22 12:35:54  
</span><br>
<span class="quotelev1">&gt; EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -222,6 +222,10 @@
</span><br>
<span class="quotelev1">&gt;    /** Username on this node, if specified */
</span><br>
<span class="quotelev1">&gt;    char *username;
</span><br>
<span class="quotelev1">&gt;    char *slot_list;
</span><br>
<span class="quotelev1">&gt; +    /** Clustername (machine name of cluster) on which this node
</span><br>
<span class="quotelev1">&gt; +        resides.  ALPS scheduled systems need this to enable
</span><br>
<span class="quotelev1">&gt; +        multi-cluster support.  */
</span><br>
<span class="quotelev1">&gt; +    char *clustername;
</span><br>
<span class="quotelev1">&gt; } orte_node_t;
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_node_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4677.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Reply:</strong> <a href="4679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Maybe reply:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
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
