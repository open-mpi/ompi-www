<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 13:31:46 2014" -->
<!-- isoreceived="20140820173146" -->
<!-- sent="Wed, 20 Aug 2014 17:31:45 +0000" -->
<!-- isosent="20140820173145" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp" -->
<!-- id="E4EE36AD-21D5-47F9-87D7-D91172D8FC76_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140820165536.7593315FD27_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 13:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15669.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2014, at 11:55 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2014-08-20 12:55:36 EDT (Wed, 20 Aug 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32556
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32556">https://svn.open-mpi.org/trac/ompi/changeset/32556</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Track down the last piece of the connection problem. It appears that
</span><br>
<span class="quotelev1">&gt; providing a netmask of 0 to opal_net_samenetwork results in everything
</span><br>
<span class="quotelev1">&gt; looking like it is on the same network. Hence, we were not retaining any
</span><br>
<span class="quotelev1">&gt; of the alternative addresses, so we had no other way to check them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Refs #4870
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp.c            |     8 +++++++-                                
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/tcp/oob_tcp_connection.c |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   2 files changed, 8 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.c	Tue Aug 19 22:48:47 2014	(r32555)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.c	2014-08-20 12:55:36 EDT (Wed, 20 Aug 2014)	(r32556)
</span><br>
<span class="quotelev1">&gt; @@ -282,6 +282,8 @@
</span><br>
<span class="quotelev1">&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (AF_INET != pop-&gt;af_family) {
</span><br>
<span class="quotelev1">&gt; +            opal_output_verbose(20, orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; +	                        &quot;%s NOT AF_INET&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev1">&gt;         goto cleanup;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -306,8 +308,12 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* do we already have this address? */
</span><br>
<span class="quotelev1">&gt;     OPAL_LIST_FOREACH(maddr, &amp;peer-&gt;addrs, mca_oob_tcp_addr_t) {
</span><br>
<span class="quotelev1">&gt; -        if (opal_net_samenetwork(&amp;inaddr, (struct sockaddr*)&amp;maddr-&gt;addr, 0)) {
</span><br>
<span class="quotelev1">&gt; +        /* require only that the subnet be the same */
</span><br>
<span class="quotelev1">&gt; +        if (opal_net_samenetwork(&amp;inaddr, (struct sockaddr*)&amp;maddr-&gt;addr, 24)) {
</span><br>
<p>So... what if I have my hosts on a 10.123.0.0/16 network or some other network with a non-24-bit netmask?
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15669.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
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
