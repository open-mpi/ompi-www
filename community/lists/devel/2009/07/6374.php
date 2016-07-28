<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 18:01:07 2009" -->
<!-- isoreceived="20090701220107" -->
<!-- sent="Wed, 1 Jul 2009 18:00:55 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20090701220055" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548" -->
<!-- id="alpine.WNT.2.00.0907011800250.4032_at_galaxia" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8ED9DF97-6F5E-4C19-9F75-FE9D4E3B5BC2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-07-01 18:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 1 Jul 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, let me know. I'll test some more here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Problem fixed.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; Thanks again for catching it.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 1 Jul 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Believe this is now fixed with r21582 - let me know if it now works for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for the problem. It was indeed miscounting the number of daemons in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the system, though apparently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this wasn't causing problems for slurm and torque (still investigating why 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since it should have).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, just changing the index caused shared memory to think 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everyone was remote, so the fix was a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tad more involved - though not particularly difficult.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 1, 2009 at 2:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hmmm...I'll take a look. It seems to be working for me under Torque 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and SLURM, though I cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     vouch for the tree launch. The problem with letting the index start at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 is it breaks other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     things, so I'll have to see about fixing the routing schemes, or find 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some compromise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks for the heads up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 1, 2009 at 1:49 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     This commit break several components in OMPI, mainly the routing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schemes and the tree
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     launch. The part with the problem is the reduction of the number of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declared daemons on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the second part of the commit, where you change the boundary for the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for loop from 0 to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     1. As a result the number of daemons was decreased by one (I guess in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order to exclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the HNP), which is not something that the routing implementations 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tolerate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Setting the loop boundary back to 0 seems to fix all problems. Please 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reconsider your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Fri, 26 Jun 2009, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Date: 2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           New Revision: 21548
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21548">https://svn.open-mpi.org/trac/ompi/changeset/21548</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Cleanup some indexing bugs so that shared memory can function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            trunk/orte/util/nidmap.c |    12 +++++++-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            1 files changed, 7 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           --- trunk/orte/util/nidmap.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +++ trunk/orte/util/nidmap.c    2009-06-26 18:07:25 EDT (Fri, 26 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jun 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           @@ -341,10 +341,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              /* pack every nodename individually */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              for (i=1; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +        if (NULL == (node =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +            continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  if (!orte_keep_fqdn_hostnames) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           -            if (NULL == (node =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           -                continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           -            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      nodename = strdup(node-&gt;name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      if (NULL != (ptr = strchr(nodename, '.'))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          *ptr = '\0';
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           @@ -553,6 +553,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +    /* set the daemon to 0 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +    node-&gt;daemon = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              /* loop over nodes and unpack the raw nodename */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           @@ -570,7 +572,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           -    /* unpack the daemon names */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +    /* unpack the daemon vpids */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              vpids = (orte_vpid_t*)malloc(num_nodes * 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizeof(orte_vpid_t));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              n=num_nodes;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf, vpids, &amp;n, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_VPID))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           @@ -581,7 +583,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               * daemons in the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              num_daemons = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           -    for (i=0; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           +    for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  if (NULL != (ndptr =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           (orte_nid_t*)opal_pointer_array_get_item(&amp;orte_nidmap, i))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      ndptr-&gt;daemon = vpids[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      if (ORTE_VPID_INVALID != vpids[i]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     hope.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      Martin Luther King
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                 Martin Luther 
</span><br>
<span class="quotelev2">&gt;&gt; King_______________________________________________
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
<li><strong>Next message:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
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
