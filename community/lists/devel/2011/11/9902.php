<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 19:55:48 2011" -->
<!-- isoreceived="20111104235548" -->
<!-- sent="Fri, 4 Nov 2011 17:55:40 -0600" -->
<!-- isosent="20111104235540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431" -->
<!-- id="58299205-28EA-4291-BA43-DA55F64ACF50_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAD9D526.80F1%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 19:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9903.php">Graham, Richard L.: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Previous message:</strong> <a href="9901.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>In reply to:</strong> <a href="9901.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9903.php">Graham, Richard L.: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: assert is used throughout the codebase, including orte and opal. I see no reason why it shouldn't be used here as well.
<br>
<p><p>On Nov 4, 2011, at 5:45 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Why not?  I use asserts all the time in OMPI code.  A quick grep in
</span><br>
<span class="quotelev1">&gt; ompi/mca says I'm not alone.  There are a whole bunch of places where I
</span><br>
<span class="quotelev1">&gt; &quot;know&quot; a fact, such as a pointer never being NULL or consistency checks
</span><br>
<span class="quotelev1">&gt; between two values.  These don't need to run in production; I've
</span><br>
<span class="quotelev1">&gt; theoretically tested the crap out of the code before then.  But they are
</span><br>
<span class="quotelev1">&gt; really useful when developing and debugging later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my $0.02.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/4/11 5:18 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +1 -- we shouldn't be using assert().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 4, 2011, at 2:15 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I doubt you want to be using assert() here or anywhere in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI library. If the rem_info.rem_qps pointer is NULL, I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think you want to do something other than just die.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And, in a production build, if it was to ever be null, things would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eventually crash right?  The ompi library should strive to never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; crash...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe print an error message and abort, but flat out crashing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been away from active OMPI development for awhile now so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be remembering this incorrectly, but isn't there some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; policy/SOP on not using assert in the OMPI library code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please excuse me while I return to being a silent/lurking ghost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of an OMPI developer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Nov 3, 2011 at 8:15 PM,  &lt;cyeoh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: cyeoh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2011-11-03 20:15:08 EDT (Thu, 03 Nov 2011)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 25431
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25431">https://svn.open-mpi.org/trac/ompi/changeset/25431</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Removes pointless memmove which because of a previous memcpy will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; always
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have identical source and destination pointers. See #2871
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Plugs a couple of minor memory leaks related to remote qp info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_endpoint.c            |     3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c |    22
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ++++++++++++----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  2 files changed, 15 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_endpoint.c     (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_endpoint.c     2011-11-03
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 20:15:08 EDT (Thu, 03 Nov 2011)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -452,6 +452,9 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    free(endpoint-&gt;qps);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    endpoint-&gt;qps = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    free(endpoint-&gt;rem_info.rem_qps);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    free(endpoint-&gt;rem_info.rem_srqs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* unregister xrc recv qp */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #if HAVE_XRC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (0 != endpoint-&gt;xrc_recv_qp_num) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2011-11-03 20:15:08 EDT (Thu, 03 Nov 2011)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -272,19 +272,14 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static int set_remote_info(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                           mca_btl_openib_rem_info_t* rem_info)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* Free up the memory pointed to by rem_qps before overwriting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the pointer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +       in the following memcpy */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    free(endpoint-&gt;rem_info.rem_qps);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* copy the rem_info stuff */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    memcpy(&amp;((mca_btl_openib_endpoint_t*) endpoint)-&gt;rem_info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           rem_info, sizeof(mca_btl_openib_rem_info_t));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* copy over the rem qp info */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* per #2871, changed this from memcpy() to memmove() to handle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     * the case of overlapping (or same) src/dest addresses.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     * However, we still *should* figure out why the src and dest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     * addresses are sometimes the same. */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    memmove(endpoint-&gt;rem_info.rem_qps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -           rem_info-&gt;rem_qps, sizeof(mca_btl_openib_rem_qp_info_t) *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -           mca_btl_openib_component.num_qps);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    BTL_VERBOSE((&quot;Setting QP info,  LID = %d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endpoint-&gt;rem_info.rem_lid));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -671,7 +666,12 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    uint8_t message_type;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    bool master;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* start by unpacking data first so we know who is knocking at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* We later memcpy this whole structure. Make sure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +       that all the parameters are initialized, especially
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +       the pointers */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    memset(&amp;rem_info,0, sizeof(rem_info));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +   /* start by unpacking data first so we know who is knocking at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       our door */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT8));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    rc = opal_dss.unpack(buffer, &amp;message_type, &amp;cnt, OPAL_UINT8);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -857,6 +857,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               to CONNECTING, and then reply with our QP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               information */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if (master) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +               assert(rem_info.rem_qps != NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                rc = reply_start_connect(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                rc =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oob_module_start_connect(ib_endpoint-&gt;endpoint_local_cpc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -879,6 +880,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        case MCA_BTL_IB_CONNECTING :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +           assert(rem_info.rem_qps != NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            set_remote_info(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if (OMPI_SUCCESS != (rc = qp_connect_all(ib_endpoint))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                BTL_ERROR((&quot;endpoint connect error: %d&quot;, rc));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9903.php">Graham, Richard L.: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Previous message:</strong> <a href="9901.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>In reply to:</strong> <a href="9901.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9903.php">Graham, Richard L.: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
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
