<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 15:49:48 2009" -->
<!-- isoreceived="20090701194948" -->
<!-- sent="Wed, 1 Jul 2009 15:49:38 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20090701194938" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548" -->
<!-- id="alpine.WNT.2.00.0907011545080.3316_at_ICL-PC" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906262207.n5QM7Qg3030063_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 15:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6370.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6368.php">Jeff Squyres: "[OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6370.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6370.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This commit break several components in OMPI, mainly the routing schemes 
<br>
and the tree launch. The part with the problem is the reduction of the 
<br>
number of declared daemons on the second part of the commit, where you 
<br>
change the boundary for the for loop from 0 to 1. As a result the number 
<br>
of daemons was decreased by one (I guess in order to exclude the HNP), 
<br>
which is not something that the routing implementations tolerate.
<br>
<p>Setting the loop boundary back to 0 seems to fix all problems. Please 
<br>
reconsider your patch.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Fri, 26 Jun 2009, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21548
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21548">https://svn.open-mpi.org/trac/ompi/changeset/21548</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Cleanup some indexing bugs so that shared memory can function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/nidmap.c |    12 +++++++-----
</span><br>
<span class="quotelev1">&gt;   1 files changed, 7 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/util/nidmap.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/util/nidmap.c	2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -341,10 +341,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* pack every nodename individually */
</span><br>
<span class="quotelev1">&gt;     for (i=1; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt; +        if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;         if (!orte_keep_fqdn_hostnames) {
</span><br>
<span class="quotelev1">&gt; -            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev1">&gt; -                continue;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt;             nodename = strdup(node-&gt;name);
</span><br>
<span class="quotelev1">&gt;             if (NULL != (ptr = strchr(nodename, '.'))) {
</span><br>
<span class="quotelev1">&gt;                 *ptr = '\0';
</span><br>
<span class="quotelev1">&gt; @@ -553,6 +553,8 @@
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    /* set the daemon to 0 */
</span><br>
<span class="quotelev1">&gt; +    node-&gt;daemon = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* loop over nodes and unpack the raw nodename */
</span><br>
<span class="quotelev1">&gt;     for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev1">&gt; @@ -570,7 +572,7 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* unpack the daemon names */
</span><br>
<span class="quotelev1">&gt; +    /* unpack the daemon vpids */
</span><br>
<span class="quotelev1">&gt;     vpids = (orte_vpid_t*)malloc(num_nodes * sizeof(orte_vpid_t));
</span><br>
<span class="quotelev1">&gt;     n=num_nodes;
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf, vpids, &amp;n, ORTE_VPID))) {
</span><br>
<span class="quotelev1">&gt; @@ -581,7 +583,7 @@
</span><br>
<span class="quotelev1">&gt;      * daemons in the system
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     num_daemons = 0;
</span><br>
<span class="quotelev1">&gt; -    for (i=0; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev1">&gt; +    for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev1">&gt;         if (NULL != (ndptr = (orte_nid_t*)opal_pointer_array_get_item(&amp;orte_nidmap, i))) {
</span><br>
<span class="quotelev1">&gt;             ndptr-&gt;daemon = vpids[i];
</span><br>
<span class="quotelev1">&gt;             if (ORTE_VPID_INVALID != vpids[i]) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6370.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6368.php">Jeff Squyres: "[OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6370.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6370.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
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
