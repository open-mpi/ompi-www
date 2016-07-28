<?
$subject_val = "Re: [OMPI devel] Slurm direct-launch is broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 00:38:33 2014" -->
<!-- isoreceived="20141016043833" -->
<!-- sent="Thu, 16 Oct 2014 13:38:40 +0900" -->
<!-- isosent="20141016043840" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Slurm direct-launch is broken on trunk" -->
<!-- id="543F4BD0.80103_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02CF1D3B-E67E-416D-898A-2F639C441565_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Slurm direct-launch is broken on trunk<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 00:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16053.php">Ralph Castain: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>In reply to:</strong> <a href="16046.php">Ralph Castain: "[OMPI devel] Slurm direct-launch is broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16053.php">Ralph Castain: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Reply:</strong> <a href="16053.php">Ralph Castain: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>the issue occurs when &quot;pushing&quot; a message that is larger than 255 bytes,
<br>
and i fixed it.
<br>
<p>/* i am not sure anyone broke this, and fwiw, git blames blamed you */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>$ git show 27dcca0bb20d8f42b4d048758ef4ff14ca0d79b9
<br>
commit 27dcca0bb20d8f42b4d048758ef4ff14ca0d79b9
<br>
Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
Date:   Thu Oct 16 13:29:32 2014 +0900
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pmi/s1: fix large keys
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do not overwrite the PMI key when pushing a message that does
<br>
&nbsp;&nbsp;&nbsp;&nbsp;not fit within 255 bytes
<br>
<p>diff --git a/opal/mca/pmix/base/pmix_base_fns.c
<br>
b/opal/mca/pmix/base/pmix_base_fns.c
<br>
index 56609c5..56c13ba 100644
<br>
--- a/opal/mca/pmix/base/pmix_base_fns.c
<br>
+++ b/opal/mca/pmix/base/pmix_base_fns.c
<br>
@@ -144,7 +144,7 @@ int opal_pmix_base_commit_packed( char*
<br>
buffer_to_put, int data_to_put,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (left = strlen (encoded_data), tmp = encoded_data ; left ; ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t value_size = vallen &gt; left ? left : vallen - 1;
<br>
&nbsp;
<br>
-        sprintf (tmp_key, &quot;key%d&quot;, *pack_key);
<br>
+        sprintf (tmp_key, &quot;key%d&quot;, pkey);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == (pmikey = setup_key(&amp;OPAL_PROC_MY_NAME, tmp_key,
<br>
vallen))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ERROR_LOG(OPAL_ERR_BAD_PARAM);
<br>
<p><p>On 2014/10/16 3:33, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; When attempting to launch via srun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bend001:03708] pmix: get all keys for proc 327680 in KVS 5.0
</span><br>
<span class="quotelev1">&gt; [bend001:03708] GETTING KEY 327680-key0
</span><br>
<span class="quotelev1">&gt; [bend001:03708] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
</span><br>
<span class="quotelev1">&gt; [bend001:03708] UNSUPPORTED TYPE 0
</span><br>
<span class="quotelev1">&gt; [bend001:03708] OPAL ERROR: Error in file pmix_s1.c at line 458
</span><br>
<span class="quotelev1">&gt; [bend001:03709] [[5,0],2] pmix:s1 barrier complete
</span><br>
<span class="quotelev1">&gt; [bend001:03709] pmix: get all keys for proc 327680 in KVS 5.0
</span><br>
<span class="quotelev1">&gt; [bend001:03709] GETTING KEY 327680-key0
</span><br>
<span class="quotelev1">&gt; [bend001:03709] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
</span><br>
<span class="quotelev1">&gt; [bend001:03709] UNSUPPORTED TYPE 0
</span><br>
<span class="quotelev1">&gt; [bend001:03709] OPAL ERROR: Error in file pmix_s1.c at line 458
</span><br>
<span class="quotelev1">&gt; [bend001:03708] [[5,0],1] pmix:s1 called get for key pmix.hname
</span><br>
<span class="quotelev1">&gt; [bend001:03708] pmix: get all keys for proc 327680 in KVS 5.0
</span><br>
<span class="quotelev1">&gt; [bend001:03708] GETTING KEY 327680-key0
</span><br>
<span class="quotelev1">&gt; [bend001:03708] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
</span><br>
<span class="quotelev1">&gt; [bend001:03708] UNSUPPORTED TYPE 0
</span><br>
<span class="quotelev1">&gt; [bend001:03708] [[5,0],1] pmix:s1 got key pmix.hname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like someone broke the common code for decoding keys. Could you please fix it?
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16046.php">http://www.open-mpi.org/community/lists/devel/2014/10/16046.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16053.php">Ralph Castain: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>In reply to:</strong> <a href="16046.php">Ralph Castain: "[OMPI devel] Slurm direct-launch is broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16053.php">Ralph Castain: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Reply:</strong> <a href="16053.php">Ralph Castain: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
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
