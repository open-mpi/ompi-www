<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 22:36:49 2009" -->
<!-- isoreceived="20090620023649" -->
<!-- sent="Fri, 19 Jun 2009 20:36:43 -0600" -->
<!-- isosent="20090620023643" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480" -->
<!-- id="71d2d8cc0906191936k7a9c7445h5df9ab3dd3985c07_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200906191850.n5JIo6sL007562_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 22:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6285.php">Eugene Loh: "[OMPI devel] OMPI performance competitiveness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6299.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry, but this change is incorrect.
<br>
If you look in orte/mca/ess/base/ess_base_std_orted.c, you will see that
<br>
-all- orteds, regardless of how they are launched, open and select the PLM.
<br>
<p>This change causes rsh launched daemons to
<br>
doubly-open/select the PLM, which is a very bad idea.
<br>
<p>Would you please revert this change?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Fri, Jun 19, 2009 at 12:50 PM, &lt;coti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: coti
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-19 14:50:06 EDT (Fri, 19 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21480
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21480">https://svn.open-mpi.org/trac/ompi/changeset/21480</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Initialize the PML if we are a non-HNP daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we do not initialize the PML, non-HNP daemons will not be able to use
</span><br>
<span class="quotelev1">&gt; its functions. For example, RSH needs it when the tree_spawn mode is
</span><br>
<span class="quotelev1">&gt; enabled: daemons call orte_pml.remote_spawn() function to spawn their
</span><br>
<span class="quotelev1">&gt; children in the deployment tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/env/ess_env_module.c |    14 ++++++++++++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 14 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/env/ess_env_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/env/ess_env_module.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/env/ess_env_module.c     2009-06-19 14:50:06 EDT
</span><br>
<span class="quotelev1">&gt; (Fri, 19 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -150,6 +150,20 @@
</span><br>
<span class="quotelev1">&gt;             goto error;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         opal_argv_free(hosts);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* in case we are asked to spawn remote daemons... */
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret = orte_plm_base_open())) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +            error = &quot;orte_plm_base_open&quot;;
</span><br>
<span class="quotelev1">&gt; +            goto error;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (ret = orte_plm_base_select())) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +            error = &quot;orte_plm_base_select&quot;;
</span><br>
<span class="quotelev1">&gt; +            goto error;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6285.php">Eugene Loh: "[OMPI devel] OMPI performance competitiveness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6288.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6299.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
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
