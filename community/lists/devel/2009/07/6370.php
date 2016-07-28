<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 16:06:41 2009" -->
<!-- isoreceived="20090701200641" -->
<!-- sent="Wed, 1 Jul 2009 14:06:33 -0600" -->
<!-- isosent="20090701200633" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548" -->
<!-- id="71d2d8cc0907011306x454150f0pebd822582e58a716_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.WNT.2.00.0907011545080.3316_at_ICL-PC" -->
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
<strong>Date:</strong> 2009-07-01 16:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6369.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6369.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...I'll take a look. It seems to be working for me under Torque and
<br>
SLURM, though I cannot vouch for the tree launch. The problem with letting
<br>
the index start at 0 is it breaks other things, so I'll have to see about
<br>
fixing the routing schemes, or find some compromise.
<br>
<p>Thanks for the heads up.
<br>
Ralph
<br>
<p><p>On Wed, Jul 1, 2009 at 1:49 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit break several components in OMPI, mainly the routing schemes
</span><br>
<span class="quotelev1">&gt; and the tree launch. The part with the problem is the reduction of the
</span><br>
<span class="quotelev1">&gt; number of declared daemons on the second part of the commit, where you
</span><br>
<span class="quotelev1">&gt; change the boundary for the for loop from 0 to 1. As a result the number of
</span><br>
<span class="quotelev1">&gt; daemons was decreased by one (I guess in order to exclude the HNP), which is
</span><br>
<span class="quotelev1">&gt; not something that the routing implementations tolerate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting the loop boundary back to 0 seems to fix all problems. Please
</span><br>
<span class="quotelev1">&gt; reconsider your patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 26 Jun 2009, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21548
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21548">https://svn.open-mpi.org/trac/ompi/changeset/21548</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Cleanup some indexing bugs so that shared memory can function
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/nidmap.c |    12 +++++++-----
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 7 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/nidmap.c    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/nidmap.c    2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -341,10 +341,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* pack every nodename individually */
</span><br>
<span class="quotelev2">&gt;&gt;    for (i=1; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (NULL == (node =
</span><br>
<span class="quotelev2">&gt;&gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev2">&gt;&gt; +            continue;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;        if (!orte_keep_fqdn_hostnames) {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (NULL == (node =
</span><br>
<span class="quotelev2">&gt;&gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev2">&gt;&gt; -                continue;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt;            nodename = strdup(node-&gt;name);
</span><br>
<span class="quotelev2">&gt;&gt;            if (NULL != (ptr = strchr(nodename, '.'))) {
</span><br>
<span class="quotelev2">&gt;&gt;                *ptr = '\0';
</span><br>
<span class="quotelev2">&gt;&gt; @@ -553,6 +553,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;        return rc;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; +    /* set the daemon to 0 */
</span><br>
<span class="quotelev2">&gt;&gt; +    node-&gt;daemon = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* loop over nodes and unpack the raw nodename */
</span><br>
<span class="quotelev2">&gt;&gt;    for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -570,7 +572,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* unpack the daemon names */
</span><br>
<span class="quotelev2">&gt;&gt; +    /* unpack the daemon vpids */
</span><br>
<span class="quotelev2">&gt;&gt;    vpids = (orte_vpid_t*)malloc(num_nodes * sizeof(orte_vpid_t));
</span><br>
<span class="quotelev2">&gt;&gt;    n=num_nodes;
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf, vpids, &amp;n, ORTE_VPID)))
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -581,7 +583,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     * daemons in the system
</span><br>
<span class="quotelev2">&gt;&gt;     */
</span><br>
<span class="quotelev2">&gt;&gt;    num_daemons = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -    for (i=0; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +    for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;        if (NULL != (ndptr =
</span><br>
<span class="quotelev2">&gt;&gt; (orte_nid_t*)opal_pointer_array_get_item(&amp;orte_nidmap, i))) {
</span><br>
<span class="quotelev2">&gt;&gt;            ndptr-&gt;daemon = vpids[i];
</span><br>
<span class="quotelev2">&gt;&gt;            if (ORTE_VPID_INVALID != vpids[i]) {
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                  Martin Luther King
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6369.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6369.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
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
