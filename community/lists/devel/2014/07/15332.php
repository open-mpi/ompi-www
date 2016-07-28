<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 18:12:19 2014" -->
<!-- isoreceived="20140729221219" -->
<!-- sent="Tue, 29 Jul 2014 16:12:18 -0600" -->
<!-- isosent="20140729221218" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib" -->
<!-- id="20140729221218.GI43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z96z+zA5E+ZDAPAbBRLrg=wwiGpyMXofqzTLQjA3tsW6Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-29 18:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15333.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15333.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="15333.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah. Though it would be best to just check the source when you need to
<br>
see if it should come from the ini. Then if we need to set the value
<br>
from the ini either use mca_base_var_set_value or be sure to strdup when
<br>
changing the receive_queues value.
<br>
<p>The thing to remember is the use may do this:
<br>
<p>MPI_T_init_thread ();
<br>
set btl_openib_receive_queues using the MPI_T_cvar interface
<br>
MPI_Init ()
<br>
<p>And you need to catch that case.
<br>
<p>-Nathan
<br>
<p>On Tue, Jul 29, 2014 at 06:06:33PM -0400, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt;    Thanks, Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This is a user's patch. So, if I understand correctly, the best thing
</span><br>
<span class="quotelev1">&gt;    would be to:
</span><br>
<span class="quotelev1">&gt;    vari = mca_base_var_find (&quot;opal&quot;, &quot;btl&quot;, &quot;openib&quot;, &quot;receive_queues&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mca_base_var_get_value (vari, NULL, &amp;source, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.
</span><br>
<span class="quotelev1">&gt;    receive_queues_source = source
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Instead of doing this weird strcmp which assumes that if the variable
</span><br>
<span class="quotelev1">&gt;    value is the same as the default, then it was not passed in as an MCA
</span><br>
<span class="quotelev1">&gt;    param.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.
</span><br>
<span class="quotelev1">&gt;    receive_queues_source = source
</span><br>
<span class="quotelev2">&gt;    &gt; -        (0 == strcmp(default_qps,
</span><br>
<span class="quotelev2">&gt;    &gt; -                     mca_btl_openib_component.receive_queues)) ?
</span><br>
<span class="quotelev2">&gt;    &gt; -        BTL_OPENIB_RQ_SOURCE_DEFAULT : BTL_OPENIB_RQ_SOURCE_MCA;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Tue, Jul 29, 2014 at 5:53 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Josh, you can not free from a memory location that has been registered
</span><br>
<span class="quotelev1">&gt;      with the MCA variable system. It will likely SEGV when the component is
</span><br>
<span class="quotelev1">&gt;      unloaded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      You should call mca_base_var_get_value to get the source of the
</span><br>
<span class="quotelev1">&gt;      value. The following should do it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      vari = mca_base_var_find (&quot;opal&quot;, &quot;btl&quot;, &quot;openib&quot;, &quot;receive_queues&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      mca_base_var_get_value (vari, NULL, &amp;source, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      If the source is MCA_BASE_VAR_SOURCE_DEFAULT then the value was not
</span><br>
<span class="quotelev1">&gt;      modified by a file, the enviornment, or MPI_T.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Tue, Jul 29, 2014 at 05:42:20PM -0400, svn-commit-mailer_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev2">&gt;      &gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev2">&gt;      &gt; Date: 2014-07-29 17:42:20 EDT (Tue, 29 Jul 2014)
</span><br>
<span class="quotelev2">&gt;      &gt; New Revision: 32346
</span><br>
<span class="quotelev2">&gt;      &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32346">https://svn.open-mpi.org/trac/ompi/changeset/32346</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Log:
</span><br>
<span class="quotelev2">&gt;      &gt; This fixes the OpenIB BTL receive queue selection logic in the trunk.
</span><br>
<span class="quotelev1">&gt;      Custom patch for 1.8.2 is provided in Refs #4816
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;      &gt;    trunk/opal/mca/btl/openib/btl_openib_component.c |    11
</span><br>
<span class="quotelev1">&gt;      +++++++++++
</span><br>
<span class="quotelev2">&gt;      &gt;    trunk/opal/mca/btl/openib/btl_openib_mca.c       |    12
</span><br>
<span class="quotelev1">&gt;      +++++++-----
</span><br>
<span class="quotelev2">&gt;      &gt;    2 files changed, 18 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Modified: trunk/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev1">&gt;      ==============================================================================
</span><br>
<span class="quotelev2">&gt;      &gt; --- trunk/opal/mca/btl/openib/btl_openib_component.c  Tue Jul 29
</span><br>
<span class="quotelev1">&gt;      14:59:59 2014        (r32345)
</span><br>
<span class="quotelev2">&gt;      &gt; +++ trunk/opal/mca/btl/openib/btl_openib_component.c  2014-07-29
</span><br>
<span class="quotelev1">&gt;      17:42:20 EDT (Tue, 29 Jul 2014)      (r32346)
</span><br>
<span class="quotelev2">&gt;      &gt; @@ -265,6 +265,17 @@
</span><br>
<span class="quotelev2">&gt;      &gt;      opal_btl_openib_fd_finalize();
</span><br>
<span class="quotelev2">&gt;      &gt;      opal_btl_openib_ini_finalize();
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; +    if (NULL != mca_btl_openib_component.receive_queues
</span><br>
<span class="quotelev2">&gt;      &gt; +            &amp;&amp; BTL_OPENIB_RQ_SOURCE_DEFAULT ==
</span><br>
<span class="quotelev2">&gt;      &gt; +                          
</span><br>
<span class="quotelev1">&gt;       mca_btl_openib_component.receive_queues_source) {
</span><br>
<span class="quotelev2">&gt;      &gt; +        /*
</span><br>
<span class="quotelev2">&gt;      &gt; +         * In that case, the string has not been duplicated during
</span><br>
<span class="quotelev1">&gt;      variable
</span><br>
<span class="quotelev2">&gt;      &gt; +         * registration. So it won't be freed by the mca_base_var
</span><br>
<span class="quotelev1">&gt;      system.
</span><br>
<span class="quotelev2">&gt;      &gt; +         * Free it here.
</span><br>
<span class="quotelev2">&gt;      &gt; +         */
</span><br>
<span class="quotelev2">&gt;      &gt; +        free(mca_btl_openib_component.receive_queues);
</span><br>
<span class="quotelev2">&gt;      &gt; +    }
</span><br>
<span class="quotelev2">&gt;      &gt; +
</span><br>
<span class="quotelev2">&gt;      &gt;      if (NULL != mca_btl_openib_component.default_recv_qps) {
</span><br>
<span class="quotelev2">&gt;      &gt;          free(mca_btl_openib_component.default_recv_qps);
</span><br>
<span class="quotelev2">&gt;      &gt;      }
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Modified: trunk/opal/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev1">&gt;      ==============================================================================
</span><br>
<span class="quotelev2">&gt;      &gt; --- trunk/opal/mca/btl/openib/btl_openib_mca.c        Tue Jul 29
</span><br>
<span class="quotelev1">&gt;      14:59:59 2014        (r32345)
</span><br>
<span class="quotelev2">&gt;      &gt; +++ trunk/opal/mca/btl/openib/btl_openib_mca.c        2014-07-29
</span><br>
<span class="quotelev1">&gt;      17:42:20 EDT (Tue, 29 Jul 2014)      (r32346)
</span><br>
<span class="quotelev2">&gt;      &gt; @@ -661,12 +661,14 @@
</span><br>
<span class="quotelev2">&gt;      &gt;      mca_btl_openib_component.default_recv_qps = default_qps;
</span><br>
<span class="quotelev2">&gt;      &gt;      CHECK(reg_string(&quot;receive_queues&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;      &gt;                       &quot;Colon-delimited, comma-delimited list of
</span><br>
<span class="quotelev1">&gt;      receive queues: P,4096,8,6,4:P,32768,8,6,4&quot;,
</span><br>
<span class="quotelev2">&gt;      &gt; -                     default_qps,
</span><br>
<span class="quotelev1">&gt;      &amp;mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;      &gt; +                     NULL, &amp;mca_btl_openib_component.receive_queues,
</span><br>
<span class="quotelev2">&gt;      &gt;                       0));
</span><br>
<span class="quotelev2">&gt;      &gt; -    mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev2">&gt;      &gt; -        (0 == strcmp(default_qps,
</span><br>
<span class="quotelev2">&gt;      &gt; -                     mca_btl_openib_component.receive_queues)) ?
</span><br>
<span class="quotelev2">&gt;      &gt; -        BTL_OPENIB_RQ_SOURCE_DEFAULT : BTL_OPENIB_RQ_SOURCE_MCA;
</span><br>
<span class="quotelev2">&gt;      &gt; +    if (NULL == mca_btl_openib_component.receive_queues) {
</span><br>
<span class="quotelev2">&gt;      &gt; +        mca_btl_openib_component.receive_queues =
</span><br>
<span class="quotelev1">&gt;      strdup(default_qps);
</span><br>
<span class="quotelev2">&gt;      &gt; +        mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev1">&gt;      BTL_OPENIB_RQ_SOURCE_DEFAULT;
</span><br>
<span class="quotelev2">&gt;      &gt; +    } else {
</span><br>
<span class="quotelev2">&gt;      &gt; +        mca_btl_openib_component.receive_queues_source =
</span><br>
<span class="quotelev1">&gt;      BTL_OPENIB_RQ_SOURCE_MCA;
</span><br>
<span class="quotelev2">&gt;      &gt; +    }
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      CHECK(reg_string(&quot;if_include&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;      &gt;                       &quot;Comma-delimited list of devices/ports to be
</span><br>
<span class="quotelev1">&gt;      used (e.g. \&quot;mthca0,mthca1:2\&quot;; empty value means to use all ports
</span><br>
<span class="quotelev1">&gt;      found).  Mutually exclusive with btl_openib_if_exclude.&quot;,
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15330.php">http://www.open-mpi.org/community/lists/devel/2014/07/15330.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15331.php">http://www.open-mpi.org/community/lists/devel/2014/07/15331.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15332/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15333.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="15331.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15333.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="15333.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
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
