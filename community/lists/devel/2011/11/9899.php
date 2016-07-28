<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 14:15:12 2011" -->
<!-- isoreceived="20111104181512" -->
<!-- sent="Fri, 4 Nov 2011 14:15:07 -0400" -->
<!-- isosent="20111104181507" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431" -->
<!-- id="CALwSR2XMa0rZH9adRyR-Ek2zsfW95NQvO=KsR-vB-3GXQzeXGA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201111040015.pA40F8Rs028280_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 14:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9900.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Previous message:</strong> <a href="9898.php">Eugene Loh: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9900.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Reply:</strong> <a href="9900.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Maybe reply:</strong> <a href="9903.php">Graham, Richard L.: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I doubt you want to be using assert() here or anywhere in the
<br>
OMPI library. If the rem_info.rem_qps pointer is NULL, I would
<br>
think you want to do something other than just die.
<br>
And, in a production build, if it was to ever be null, things would
<br>
eventually crash right?  The ompi library should strive to never crash...
<br>
maybe print an error message and abort, but flat out crashing
<br>
seems wrong.
<br>
<p>I've been away from active OMPI development for awhile now so I
<br>
might be remembering this incorrectly, but isn't there some
<br>
policy/SOP on not using assert in the OMPI library code?
<br>
<p>Please excuse me while I return to being a silent/lurking ghost
<br>
of an OMPI developer.
<br>
<p>On Thu, Nov 3, 2011 at 8:15 PM,  &lt;cyeoh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: cyeoh
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-03 20:15:08 EDT (Thu, 03 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25431
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25431">https://svn.open-mpi.org/trac/ompi/changeset/25431</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Removes pointless memmove which because of a previous memcpy will always
</span><br>
<span class="quotelev1">&gt; have identical source and destination pointers. See #2871
</span><br>
<span class="quotelev1">&gt; Plugs a couple of minor memory leaks related to remote qp info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/btl/openib/btl_openib_endpoint.c &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 3 +++
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c | &#160; &#160;22 ++++++++++++----------
</span><br>
<span class="quotelev1">&gt; &#160; 2 files changed, 15 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_endpoint.c &#160; &#160; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_endpoint.c &#160; &#160; 2011-11-03 20:15:08 EDT (Thu, 03 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -452,6 +452,9 @@
</span><br>
<span class="quotelev1">&gt; &#160; &#160; free(endpoint-&gt;qps);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; endpoint-&gt;qps = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160;free(endpoint-&gt;rem_info.rem_qps);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160;free(endpoint-&gt;rem_info.rem_srqs);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; &#160; &#160; /* unregister xrc recv qp */
</span><br>
<span class="quotelev1">&gt; &#160;#if HAVE_XRC
</span><br>
<span class="quotelev1">&gt; &#160; &#160; if (0 != endpoint-&gt;xrc_recv_qp_num) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c &#160;(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c &#160;2011-11-03 20:15:08 EDT (Thu, 03 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -272,19 +272,14 @@
</span><br>
<span class="quotelev1">&gt; &#160;static int set_remote_info(mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;mca_btl_openib_rem_info_t* rem_info)
</span><br>
<span class="quotelev1">&gt; &#160;{
</span><br>
<span class="quotelev1">&gt; + &#160; &#160;/* Free up the memory pointed to by rem_qps before overwriting the pointer
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; in the following memcpy */
</span><br>
<span class="quotelev1">&gt; + &#160; &#160;free(endpoint-&gt;rem_info.rem_qps);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; &#160; &#160; /* copy the rem_info stuff */
</span><br>
<span class="quotelev1">&gt; &#160; &#160; memcpy(&amp;((mca_btl_openib_endpoint_t*) endpoint)-&gt;rem_info,
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;rem_info, sizeof(mca_btl_openib_rem_info_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &#160; &#160;/* copy over the rem qp info */
</span><br>
<span class="quotelev1">&gt; - &#160; &#160;/* per #2871, changed this from memcpy() to memmove() to handle
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; * the case of overlapping (or same) src/dest addresses.
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; * However, we still *should* figure out why the src and dest
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; * addresses are sometimes the same. */
</span><br>
<span class="quotelev1">&gt; - &#160; &#160;memmove(endpoint-&gt;rem_info.rem_qps,
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; rem_info-&gt;rem_qps, sizeof(mca_btl_openib_rem_qp_info_t) *
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; mca_btl_openib_component.num_qps);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; &#160; &#160; BTL_VERBOSE((&quot;Setting QP info, &#160;LID = %d&quot;, endpoint-&gt;rem_info.rem_lid));
</span><br>
<span class="quotelev1">&gt; &#160; &#160; return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &#160;}
</span><br>
<span class="quotelev1">&gt; @@ -671,7 +666,12 @@
</span><br>
<span class="quotelev1">&gt; &#160; &#160; uint8_t message_type;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; bool master;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &#160; &#160;/* start by unpacking data first so we know who is knocking at
</span><br>
<span class="quotelev1">&gt; + &#160; &#160;/* We later memcpy this whole structure. Make sure
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; that all the parameters are initialized, especially
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; the pointers */
</span><br>
<span class="quotelev1">&gt; + &#160; &#160;memset(&amp;rem_info,0, sizeof(rem_info));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#160; /* start by unpacking data first so we know who is knocking at
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;our door */
</span><br>
<span class="quotelev1">&gt; &#160; &#160; BTL_VERBOSE((&quot;unpacking %d of %d\n&quot;, cnt, OPAL_UINT8));
</span><br>
<span class="quotelev1">&gt; &#160; &#160; rc = opal_dss.unpack(buffer, &amp;message_type, &amp;cnt, OPAL_UINT8);
</span><br>
<span class="quotelev1">&gt; @@ -857,6 +857,7 @@
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;to CONNECTING, and then reply with our QP
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;information */
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; if (master) {
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; assert(rem_info.rem_qps != NULL);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; rc = reply_start_connect(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; } else {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; rc = oob_module_start_connect(ib_endpoint-&gt;endpoint_local_cpc,
</span><br>
<span class="quotelev1">&gt; @@ -879,6 +880,7 @@
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; case MCA_BTL_IB_CONNECTING :
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; assert(rem_info.rem_qps != NULL);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; set_remote_info(ib_endpoint, &amp;rem_info);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; if (OMPI_SUCCESS != (rc = qp_connect_all(ib_endpoint))) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; BTL_ERROR((&quot;endpoint connect error: %d&quot;, rc));
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
&#160;timattox_at_[hidden] || tmattox_at_[hidden]
&#160; &#160; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9900.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Previous message:</strong> <a href="9898.php">Eugene Loh: "Re: [OMPI devel] ibm/io/file_status_get_count"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9900.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Reply:</strong> <a href="9900.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
<li><strong>Maybe reply:</strong> <a href="9903.php">Graham, Richard L.: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25431"</a>
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
