<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 13:50:46 2014" -->
<!-- isoreceived="20140820175046" -->
<!-- sent="Wed, 20 Aug 2014 10:50:28 -0700" -->
<!-- isosent="20140820175028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp" -->
<!-- id="221A3E74-E6E5-47D2-AE28-B58E05697DEE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E4EE36AD-21D5-47F9-87D7-D91172D8FC76_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 13:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15670.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15670.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not much - this is only used to decide if we need to keep both addresses. I may just remove it and keep all addresses, frankly, as the test doesn't seem to be working as it should
<br>
<p>On Aug 20, 2014, at 10:31 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 20, 2014, at 11:55 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-08-20 12:55:36 EDT (Wed, 20 Aug 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 32556
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32556">https://svn.open-mpi.org/trac/ompi/changeset/32556</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Track down the last piece of the connection problem. It appears that
</span><br>
<span class="quotelev2">&gt;&gt; providing a netmask of 0 to opal_net_samenetwork results in everything
</span><br>
<span class="quotelev2">&gt;&gt; looking like it is on the same network. Hence, we were not retaining any
</span><br>
<span class="quotelev2">&gt;&gt; of the alternative addresses, so we had no other way to check them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Refs #4870
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp.c            |     8 +++++++-                                
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/oob/tcp/oob_tcp_connection.c |     1 +                                       
</span><br>
<span class="quotelev2">&gt;&gt;  2 files changed, 8 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp.c	Tue Aug 19 22:48:47 2014	(r32555)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp.c	2014-08-20 12:55:36 EDT (Wed, 20 Aug 2014)	(r32556)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -282,6 +282,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                        ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (AF_INET != pop-&gt;af_family) {
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_output_verbose(20, orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt; +	                        &quot;%s NOT AF_INET&quot;, ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt;&gt;        goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -306,8 +308,12 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* do we already have this address? */
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_LIST_FOREACH(maddr, &amp;peer-&gt;addrs, mca_oob_tcp_addr_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (opal_net_samenetwork(&amp;inaddr, (struct sockaddr*)&amp;maddr-&gt;addr, 0)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* require only that the subnet be the same */
</span><br>
<span class="quotelev2">&gt;&gt; +        if (opal_net_samenetwork(&amp;inaddr, (struct sockaddr*)&amp;maddr-&gt;addr, 24)) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So... what if I have my hosts on a 10.123.0.0/16 network or some other network with a non-24-bit netmask?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15670.php">http://www.open-mpi.org/community/lists/devel/2014/08/15670.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15670.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15670.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
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
