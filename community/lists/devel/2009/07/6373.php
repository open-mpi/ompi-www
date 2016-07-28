<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 17:45:24 2009" -->
<!-- isoreceived="20090701214524" -->
<!-- sent="Wed, 1 Jul 2009 15:45:09 -0600" -->
<!-- isosent="20090701214509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548" -->
<!-- id="8ED9DF97-6F5E-4C19-9F75-FE9D4E3B5BC2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.WNT.2.00.0907011712590.3316_at_ICL-PC" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 17:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 1, 2009, at 3:28 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think I know why it didn't cause problems with SLURM and TORQUE.  
</span><br>
<span class="quotelev1">&gt; The routing was wrong, so the message was at one point forwarded to  
</span><br>
<span class="quotelev1">&gt; the HNP. As the HNP has direct connections with all other processes,  
</span><br>
<span class="quotelev1">&gt; it was able to correctly deliver the message. The only visible  
</span><br>
<span class="quotelev1">&gt; impact was 2 more jumps in for all messages directed to the last  
</span><br>
<span class="quotelev1">&gt; daemon, which might only have a minimal impact on performance.
</span><br>
<p>Aha! Good analysis - thanks! We weren't looking at startup performance  
<br>
today, just running big jobs to test for MPI issues.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on the content of the email related to the commit, I think  
</span><br>
<span class="quotelev1">&gt; this will fix the problem. Unfortunately, our svn servers seems to  
</span><br>
<span class="quotelev1">&gt; have some troubles right now (i.e. it doesn't respond at all), so I  
</span><br>
<span class="quotelev1">&gt; can't test it. I'll do it as soon as the svn server is back online.
</span><br>
<p>Okay, let me know. I'll test some more here.
<br>
<p>Thanks again for catching it.
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 1 Jul 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Believe this is now fixed with r21582 - let me know if it now works  
</span><br>
<span class="quotelev2">&gt;&gt; for you.
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the problem. It was indeed miscounting the number of  
</span><br>
<span class="quotelev2">&gt;&gt; daemons in the system, though apparently
</span><br>
<span class="quotelev2">&gt;&gt; this wasn't causing problems for slurm and torque (still  
</span><br>
<span class="quotelev2">&gt;&gt; investigating why since it should have).
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, just changing the index caused shared memory to  
</span><br>
<span class="quotelev2">&gt;&gt; think everyone was remote, so the fix was a
</span><br>
<span class="quotelev2">&gt;&gt; tad more involved - though not particularly difficult.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 1, 2009 at 2:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      Hmmm...I'll take a look. It seems to be working for me under  
</span><br>
<span class="quotelev2">&gt;&gt; Torque and SLURM, though I cannot
</span><br>
<span class="quotelev2">&gt;&gt;      vouch for the tree launch. The problem with letting the index  
</span><br>
<span class="quotelev2">&gt;&gt; start at 0 is it breaks other
</span><br>
<span class="quotelev2">&gt;&gt;      things, so I'll have to see about fixing the routing schemes,  
</span><br>
<span class="quotelev2">&gt;&gt; or find some compromise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Thanks for the heads up.
</span><br>
<span class="quotelev2">&gt;&gt;      Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 1, 2009 at 1:49 PM, George Bosilca  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      This commit break several components in OMPI, mainly the  
</span><br>
<span class="quotelev2">&gt;&gt; routing schemes and the tree
</span><br>
<span class="quotelev2">&gt;&gt;      launch. The part with the problem is the reduction of the  
</span><br>
<span class="quotelev2">&gt;&gt; number of declared daemons on
</span><br>
<span class="quotelev2">&gt;&gt;      the second part of the commit, where you change the boundary  
</span><br>
<span class="quotelev2">&gt;&gt; for the for loop from 0 to
</span><br>
<span class="quotelev2">&gt;&gt;      1. As a result the number of daemons was decreased by one (I  
</span><br>
<span class="quotelev2">&gt;&gt; guess in order to exclude
</span><br>
<span class="quotelev2">&gt;&gt;      the HNP), which is not something that the routing  
</span><br>
<span class="quotelev2">&gt;&gt; implementations tolerate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Setting the loop boundary back to 0 seems to fix all problems.  
</span><br>
<span class="quotelev2">&gt;&gt; Please reconsider your
</span><br>
<span class="quotelev2">&gt;&gt;      patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      On Fri, 26 Jun 2009, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt;            Date: 2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt;            New Revision: 21548
</span><br>
<span class="quotelev2">&gt;&gt;            URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21548">https://svn.open-mpi.org/trac/ompi/changeset/21548</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Log:
</span><br>
<span class="quotelev2">&gt;&gt;            Cleanup some indexing bugs so that shared memory can  
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;             trunk/orte/util/nidmap.c |    12 +++++++-----
</span><br>
<span class="quotelev2">&gt;&gt;             1 files changed, 7 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev2">&gt;&gt;             
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;            --- trunk/orte/util/nidmap.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt;            +++ trunk/orte/util/nidmap.c    2009-06-26 18:07:25 EDT  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt;            @@ -341,10 +341,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               /* pack every nodename individually */
</span><br>
<span class="quotelev2">&gt;&gt;               for (i=1; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;            +        if (NULL == (node =
</span><br>
<span class="quotelev2">&gt;&gt;             
</span><br>
<span class="quotelev2">&gt;&gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev2">&gt;&gt;            +            continue;
</span><br>
<span class="quotelev2">&gt;&gt;            +        }
</span><br>
<span class="quotelev2">&gt;&gt;                   if (!orte_keep_fqdn_hostnames) {
</span><br>
<span class="quotelev2">&gt;&gt;            -            if (NULL == (node =
</span><br>
<span class="quotelev2">&gt;&gt;             
</span><br>
<span class="quotelev2">&gt;&gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev2">&gt;&gt;            -                continue;
</span><br>
<span class="quotelev2">&gt;&gt;            -            }
</span><br>
<span class="quotelev2">&gt;&gt;                       nodename = strdup(node-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt;                       if (NULL != (ptr = strchr(nodename, '.'))) {
</span><br>
<span class="quotelev2">&gt;&gt;                           *ptr = '\0';
</span><br>
<span class="quotelev2">&gt;&gt;            @@ -553,6 +553,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                   ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;                   return rc;
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;            +    /* set the daemon to 0 */
</span><br>
<span class="quotelev2">&gt;&gt;            +    node-&gt;daemon = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               /* loop over nodes and unpack the raw nodename */
</span><br>
<span class="quotelev2">&gt;&gt;               for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;            @@ -570,7 +572,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                   }
</span><br>
<span class="quotelev2">&gt;&gt;               }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            -    /* unpack the daemon names */
</span><br>
<span class="quotelev2">&gt;&gt;            +    /* unpack the daemon vpids */
</span><br>
<span class="quotelev2">&gt;&gt;               vpids = (orte_vpid_t*)malloc(num_nodes *  
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(orte_vpid_t));
</span><br>
<span class="quotelev2">&gt;&gt;               n=num_nodes;
</span><br>
<span class="quotelev2">&gt;&gt;               if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf,  
</span><br>
<span class="quotelev2">&gt;&gt; vpids, &amp;n, ORTE_VPID))) {
</span><br>
<span class="quotelev2">&gt;&gt;            @@ -581,7 +583,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                * daemons in the system
</span><br>
<span class="quotelev2">&gt;&gt;                */
</span><br>
<span class="quotelev2">&gt;&gt;               num_daemons = 0;
</span><br>
<span class="quotelev2">&gt;&gt;            -    for (i=0; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;            +    for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;                   if (NULL != (ndptr =
</span><br>
<span class="quotelev2">&gt;&gt;            (orte_nid_t*)opal_pointer_array_get_item(&amp;orte_nidmap,  
</span><br>
<span class="quotelev2">&gt;&gt; i))) {
</span><br>
<span class="quotelev2">&gt;&gt;                       ndptr-&gt;daemon = vpids[i];
</span><br>
<span class="quotelev2">&gt;&gt;                       if (ORTE_VPID_INVALID != vpids[i]) {
</span><br>
<span class="quotelev2">&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;            svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt;            svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt;      hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                       Martin Luther King
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                  Martin Luther  
</span><br>
<span class="quotelev1">&gt; King_______________________________________________
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
<li><strong>Next message:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
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
