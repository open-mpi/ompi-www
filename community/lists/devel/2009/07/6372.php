<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 17:29:09 2009" -->
<!-- isoreceived="20090701212909" -->
<!-- sent="Wed, 1 Jul 2009 17:28:29 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20090701212829" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548" -->
<!-- id="alpine.WNT.2.00.0907011712590.3316_at_ICL-PC" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="71d2d8cc0907011349q2c85a5cdy2903dcef9433b88e_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-01 17:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I know why it didn't cause problems with SLURM and TORQUE. The 
<br>
routing was wrong, so the message was at one point forwarded to the HNP. 
<br>
As the HNP has direct connections with all other processes, it was able to 
<br>
correctly deliver the message. The only visible impact was 2 more jumps in 
<br>
for all messages directed to the last daemon, which might only have a 
<br>
minimal impact on performance.
<br>
<p>Based on the content of the email related to the commit, I think this will 
<br>
fix the problem. Unfortunately, our svn servers seems to have some 
<br>
troubles right now (i.e. it doesn't respond at all), so I can't test it. 
<br>
I'll do it as soon as the svn server is back online.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Wed, 1 Jul 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Believe this is now fixed with r21582 - let me know if it now works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the problem. It was indeed miscounting the number of daemons in the system, though apparently
</span><br>
<span class="quotelev1">&gt; this wasn't causing problems for slurm and torque (still investigating why since it should have).
</span><br>
<span class="quotelev1">&gt; Unfortunately, just changing the index caused shared memory to think everyone was remote, so the fix was a
</span><br>
<span class="quotelev1">&gt; tad more involved - though not particularly difficult.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 1, 2009 at 2:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       Hmmm...I'll take a look. It seems to be working for me under Torque and SLURM, though I cannot
</span><br>
<span class="quotelev1">&gt;       vouch for the tree launch. The problem with letting the index start at 0 is it breaks other
</span><br>
<span class="quotelev1">&gt;       things, so I'll have to see about fixing the routing schemes, or find some compromise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Thanks for the heads up.
</span><br>
<span class="quotelev1">&gt;       Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 1, 2009 at 1:49 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       This commit break several components in OMPI, mainly the routing schemes and the tree
</span><br>
<span class="quotelev1">&gt;       launch. The part with the problem is the reduction of the number of declared daemons on
</span><br>
<span class="quotelev1">&gt;       the second part of the commit, where you change the boundary for the for loop from 0 to
</span><br>
<span class="quotelev1">&gt;       1. As a result the number of daemons was decreased by one (I guess in order to exclude
</span><br>
<span class="quotelev1">&gt;       the HNP), which is not something that the routing implementations tolerate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Setting the loop boundary back to 0 seems to fix all problems. Please reconsider your
</span><br>
<span class="quotelev1">&gt;       patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On Fri, 26 Jun 2009, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Author: rhc
</span><br>
<span class="quotelev1">&gt;             Date: 2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt;             New Revision: 21548
</span><br>
<span class="quotelev1">&gt;             URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21548">https://svn.open-mpi.org/trac/ompi/changeset/21548</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Log:
</span><br>
<span class="quotelev1">&gt;             Cleanup some indexing bugs so that shared memory can function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Text files modified:
</span><br>
<span class="quotelev1">&gt;             &#160;trunk/orte/util/nidmap.c | &#160; &#160;12 +++++++-----
</span><br>
<span class="quotelev1">&gt;             &#160;1 files changed, 7 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev1">&gt;             ==============================================================================
</span><br>
<span class="quotelev1">&gt;             --- trunk/orte/util/nidmap.c &#160; &#160;(original)
</span><br>
<span class="quotelev1">&gt;             +++ trunk/orte/util/nidmap.c &#160; &#160;2009-06-26 18:07:25 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt;             @@ -341,10 +341,10 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;/* pack every nodename individually */
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;for (i=1; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160; &#160; &#160;if (NULL == (node =
</span><br>
<span class="quotelev1">&gt;             (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160; &#160; &#160; &#160; &#160;continue;
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160;if (!orte_keep_fqdn_hostnames) {
</span><br>
<span class="quotelev1">&gt;             - &#160; &#160; &#160; &#160; &#160; &#160;if (NULL == (node =
</span><br>
<span class="quotelev1">&gt;             (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev1">&gt;             - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;continue;
</span><br>
<span class="quotelev1">&gt;             - &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;nodename = strdup(node-&gt;name);
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;if (NULL != (ptr = strchr(nodename, '.'))) {
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*ptr = '\0';
</span><br>
<span class="quotelev1">&gt;             @@ -553,6 +553,8 @@
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160;ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160;return rc;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;}
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160;/* set the daemon to 0 */
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160;node-&gt;daemon = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;/* loop over nodes and unpack the raw nodename */
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev1">&gt;             @@ -570,7 +572,7 @@
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             - &#160; &#160;/* unpack the daemon names */
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160;/* unpack the daemon vpids */
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;vpids = (orte_vpid_t*)malloc(num_nodes * sizeof(orte_vpid_t));
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;n=num_nodes;
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf, vpids, &amp;n, ORTE_VPID))) {
</span><br>
<span class="quotelev1">&gt;             @@ -581,7 +583,7 @@
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; * daemons in the system
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; */
</span><br>
<span class="quotelev1">&gt;             &#160; &#160;num_daemons = 0;
</span><br>
<span class="quotelev1">&gt;             - &#160; &#160;for (i=0; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev1">&gt;             + &#160; &#160;for (i=1; i &lt; num_nodes; i++) {
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160;if (NULL != (ndptr =
</span><br>
<span class="quotelev1">&gt;             (orte_nid_t*)opal_pointer_array_get_item(&amp;orte_nidmap, i))) {
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;ndptr-&gt;daemon = vpids[i];
</span><br>
<span class="quotelev1">&gt;             &#160; &#160; &#160; &#160; &#160; &#160;if (ORTE_VPID_INVALID != vpids[i]) {
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             svn mailing list
</span><br>
<span class="quotelev1">&gt;             svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt;       hope.&quot;
</span><br>
<span class="quotelev1">&gt;       &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Martin Luther King
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       devel mailing list
</span><br>
<span class="quotelev1">&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6371.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Reply:</strong> <a href="6373.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
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
