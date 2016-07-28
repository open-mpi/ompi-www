<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 11:05:45 2013" -->
<!-- isoreceived="20130930150545" -->
<!-- sent="Mon, 30 Sep 2013 11:05:43 -0400" -->
<!-- isosent="20130930150543" -->
<!-- name="Tim Mattox" -->
<!-- email="tmattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll" -->
<!-- id="CALwSR2VnFopjkHLPNpBkJ7X1Uf9EKsPkAtMTZSGiGBjMc_F4Ug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130930061813.B863D160B0A_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll<br>
<strong>From:</strong> Tim Mattox (<em>tmattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 11:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll"</a>
<li><strong>Previous message:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll"</a>
<li><strong>Reply:</strong> <a href="13016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI - The description does not seem to match the contents of this change.
<br>
<p>On Mon, Sep 30, 2013 at 2:18 AM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-09-30 02:18:12 EDT (Mon, 30 Sep 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29293
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29293">https://svn.open-mpi.org/trac/ompi/changeset/29293</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix memory corruption
</span><br>
<span class="quotelev1">&gt; cmr:v1.7.3:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c |    15 ---------------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 0 insertions(+), 15 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c  Sun Sep 29 17:52:52 2013        (r29292)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/hcoll/coll_hcoll_rte.c  2013-09-30 02:18:12 EDT (Mon, 30 Sep 2013)      (r29293)
</span><br>
<span class="quotelev1">&gt; @@ -36,8 +36,6 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define RTE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  #include &quot;hcoll_dte.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;hcoll_api.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;hcoll_constants.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -167,9 +165,6 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      ompi_communicator_t *comm = (ompi_communicator_t *)grp_h;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev1">&gt; -    assert(ec_h.group == grp_h);
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;      if (NULL == ec_h.handle &amp;&amp; -1 != ec_h.rank) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr,&quot;***Error in hcolrte_rml_recv_nb: wrong null argument: &quot;
</span><br>
<span class="quotelev1">&gt;                  &quot;ec_h.handle = %p, ec_h.rank = %d\n&quot;,ec_h.handle,ec_h.rank);
</span><br>
<span class="quotelev1">&gt; @@ -241,10 +236,6 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      ompi_communicator_t *comm = (ompi_communicator_t *)grp_h;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev1">&gt; -    assert(ec_h.group == grp_h);
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      if (! ec_h.handle) {
</span><br>
<span class="quotelev1">&gt;          fprintf(stderr,&quot;***Error in hcolrte_rml_send_nb: wrong null argument: &quot;
</span><br>
<span class="quotelev1">&gt;                  &quot;ec_h.handle = %p, ec_h.rank = %d\n&quot;,ec_h.handle,ec_h.rank);
</span><br>
<span class="quotelev1">&gt; @@ -338,9 +329,6 @@
</span><br>
<span class="quotelev1">&gt;      ompi_communicator_t *comm = (ompi_communicator_t *)grp_h;
</span><br>
<span class="quotelev1">&gt;      for (i=0; i&lt;num_ec; i++){
</span><br>
<span class="quotelev1">&gt;          ompi_proc_t *proc = ompi_comm_peer_lookup(comm,ec_indexes[i]);
</span><br>
<span class="quotelev1">&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev1">&gt; -        ec_handles[i].group = grp_h;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;          ec_handles[i].rank = ec_indexes[i];
</span><br>
<span class="quotelev1">&gt;          ec_handles[i].handle = (void *)proc;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -354,9 +342,6 @@
</span><br>
<span class="quotelev1">&gt;      ompi_proc_t *my_proc = ompi_comm_peer_lookup(comm,my_rank);
</span><br>
<span class="quotelev1">&gt;      ec_handle-&gt;handle = (void *)my_proc;
</span><br>
<span class="quotelev1">&gt;      ec_handle-&gt;rank = my_rank;
</span><br>
<span class="quotelev1">&gt; -#if RTE_DEBUG
</span><br>
<span class="quotelev1">&gt; -    ec_handle-&gt;group = grp_h;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;      return HCOLL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - tmattox_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll"</a>
<li><strong>Previous message:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll"</a>
<li><strong>Reply:</strong> <a href="13016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 -	trunk/ompi/mca/coll/hcoll"</a>
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
