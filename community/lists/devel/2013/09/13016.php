<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 14:03:17 2013" -->
<!-- isoreceived="20130930180317" -->
<!-- sent="Mon, 30 Sep 2013 18:03:14 +0000" -->
<!-- isosent="20130930180314" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F90D516_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALwSR2VnFopjkHLPNpBkJ7X1Uf9EKsPkAtMTZSGiGBjMc_F4Ug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 14:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intel compiler builds broken"</a>
<li><strong>Previous message:</strong> <a href="13015.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll"</a>
<li><strong>In reply to:</strong> <a href="13015.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per some off-list emails, the commit message was referring to alignment issues when RTE_DEBUG was set to 1.
<br>
<p>I agree: it wasn't the most descriptive/accurate commit message.  :-\
<br>
<p><p>On Sep 30, 2013, at 11:05 AM, Tim Mattox &lt;tmattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FYI - The description does not seem to match the contents of this change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 30, 2013 at 2:18 AM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-09-30 02:18:12 EDT (Mon, 30 Sep 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 29293
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29293">https://svn.open-mpi.org/trac/ompi/changeset/29293</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; fix memory corruption
</span><br>
<span class="quotelev2">&gt;&gt; cmr:v1.7.3:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c |    15 ---------------
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 0 insertions(+), 15 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c  Sun Sep 29 17:52:52 2013        (r29292)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c  2013-09-30 02:18:12 EDT (Mon, 30 Sep 2013)      (r29293)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,8 +36,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -#define RTE_DEBUG 0
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;hcoll_dte.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;hcoll_api.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;hcoll_constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -167,9 +165,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_communicator_t *comm = (ompi_communicator_t *)grp_h;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -    assert(ec_h.group == grp_h);
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;     if (NULL == ec_h.handle &amp;&amp; -1 != ec_h.rank) {
</span><br>
<span class="quotelev2">&gt;&gt;         fprintf(stderr,&quot;***Error in hcolrte_rml_recv_nb: wrong null argument: &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 &quot;ec_h.handle = %p, ec_h.rank = %d\n&quot;,ec_h.handle,ec_h.rank);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -241,10 +236,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_communicator_t *comm = (ompi_communicator_t *)grp_h;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -    assert(ec_h.group == grp_h);
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;     if (! ec_h.handle) {
</span><br>
<span class="quotelev2">&gt;&gt;         fprintf(stderr,&quot;***Error in hcolrte_rml_send_nb: wrong null argument: &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 &quot;ec_h.handle = %p, ec_h.rank = %d\n&quot;,ec_h.handle,ec_h.rank);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -338,9 +329,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_communicator_t *comm = (ompi_communicator_t *)grp_h;
</span><br>
<span class="quotelev2">&gt;&gt;     for (i=0; i&lt;num_ec; i++){
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_proc_t *proc = ompi_comm_peer_lookup(comm,ec_indexes[i]);
</span><br>
<span class="quotelev2">&gt;&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -        ec_handles[i].group = grp_h;
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;         ec_handles[i].rank = ec_indexes[i];
</span><br>
<span class="quotelev2">&gt;&gt;         ec_handles[i].handle = (void *)proc;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -354,9 +342,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_proc_t *my_proc = ompi_comm_peer_lookup(comm,my_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     ec_handle-&gt;handle = (void *)my_proc;
</span><br>
<span class="quotelev2">&gt;&gt;     ec_handle-&gt;rank = my_rank;
</span><br>
<span class="quotelev2">&gt;&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -    ec_handle-&gt;group = grp_h;
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;     return HCOLL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - tmattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intel compiler builds broken"</a>
<li><strong>Previous message:</strong> <a href="13015.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll"</a>
<li><strong>In reply to:</strong> <a href="13015.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll"</a>
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
