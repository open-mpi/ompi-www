<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 17:53:51 2014" -->
<!-- isoreceived="20140729215351" -->
<!-- sent="Tue, 29 Jul 2014 15:53:50 -0600" -->
<!-- isosent="20140729215350" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib" -->
<!-- id="20140729215350.GH43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140729214220.849A915F83E_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 17:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh, you can not free from a memory location that has been registered
<br>
with the MCA variable system. It will likely SEGV when the component is
<br>
unloaded.
<br>
<p>You should call mca_base_var_get_value to get the source of the
<br>
value. The following should do it:
<br>
<p>vari = mca_base_var_find (&quot;opal&quot;, &quot;btl&quot;, &quot;openib&quot;, &quot;receive_queues&quot;);
<br>
<p>mca_base_var_get_value (vari, NULL, &amp;source, NULL);
<br>
<p>If the source is MCA_BASE_VAR_SOURCE_DEFAULT then the value was not
<br>
modified by a file, the enviornment, or MPI_T.
<br>
<p>-Nathan
<br>
<p>On Tue, Jul 29, 2014 at 05:42:20PM -0400, svn-commit-mailer_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-29 17:42:20 EDT (Tue, 29 Jul 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32346
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32346">https://svn.open-mpi.org/trac/ompi/changeset/32346</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; This fixes the OpenIB BTL receive queue selection logic in the trunk. Custom patch for 1.8.2 is provided in Refs #4816
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/btl/openib/btl_openib_component.c |    11 +++++++++++                             
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/btl/openib/btl_openib_mca.c       |    12 +++++++-----                            
</span><br>
<span class="quotelev1">&gt;    2 files changed, 18 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/btl/openib/btl_openib_component.c	Tue Jul 29 14:59:59 2014	(r32345)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/btl/openib/btl_openib_component.c	2014-07-29 17:42:20 EDT (Tue, 29 Jul 2014)	(r32346)
</span><br>
<span class="quotelev1">&gt; @@ -265,6 +265,17 @@
</span><br>
<span class="quotelev1">&gt;      opal_btl_openib_fd_finalize();
</span><br>
<span class="quotelev1">&gt;      opal_btl_openib_ini_finalize();
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    if (NULL != mca_btl_openib_component.receive_queues
</span><br>
<span class="quotelev1">&gt; +            &amp;&amp; BTL_OPENIB_RQ_SOURCE_DEFAULT ==
</span><br>
<span class="quotelev1">&gt; +                            mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev1">&gt; +        /*
</span><br>
<span class="quotelev1">&gt; +         * In that case, the string has not been duplicated during variable
</span><br>
<span class="quotelev1">&gt; +         * registration. So it won't be freed by the mca_base_var system.
</span><br>
<span class="quotelev1">&gt; +         * Free it here.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      if (NULL != mca_btl_openib_component.default_recv_qps) {
</span><br>
<span class="quotelev1">&gt;          free(mca_btl_openib_component.default_recv_qps);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/btl/openib/btl_openib_mca.c	Tue Jul 29 14:59:59 2014	(r32345)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/btl/openib/btl_openib_mca.c	2014-07-29 17:42:20 EDT (Tue, 29 Jul 2014)	(r32346)
</span><br>
<span class="quotelev1">&gt; @@ -661,12 +661,14 @@
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_component.default_recv_qps = default_qps;
</span><br>
<span class="quotelev1">&gt;      CHECK(reg_string(&quot;receive_queues&quot;, NULL,
</span><br>
<span class="quotelev1">&gt;                       &quot;Colon-delimited, comma-delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4&quot;,
</span><br>
<span class="quotelev1">&gt; -                     default_qps, &amp;mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt; +                     NULL, &amp;mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev1">&gt;                       0));
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev1">&gt; -        (0 == strcmp(default_qps,
</span><br>
<span class="quotelev1">&gt; -                     mca_btl_openib_component.receive_queues)) ?
</span><br>
<span class="quotelev1">&gt; -        BTL_OPENIB_RQ_SOURCE_DEFAULT : BTL_OPENIB_RQ_SOURCE_MCA;
</span><br>
<span class="quotelev1">&gt; +    if (NULL == mca_btl_openib_component.receive_queues) {
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_component.receive_queues = strdup(default_qps);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_component.receive_queues_source = BTL_OPENIB_RQ_SOURCE_DEFAULT;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_component.receive_queues_source = BTL_OPENIB_RQ_SOURCE_MCA;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      CHECK(reg_string(&quot;if_include&quot;, NULL,
</span><br>
<span class="quotelev1">&gt;                       &quot;Comma-delimited list of devices/ports to be used (e.g. \&quot;mthca0,mthca1:2\&quot;; empty value means to use all ports found).  Mutually exclusive with btl_openib_if_exclude.&quot;,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15330/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
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
