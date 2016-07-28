<?
$subject_val = "Re: [OMPI devel] Slurm direct-launch is broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 00:54:07 2014" -->
<!-- isoreceived="20141016045407" -->
<!-- sent="Wed, 15 Oct 2014 21:54:03 -0700" -->
<!-- isosent="20141016045403" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Slurm direct-launch is broken on trunk" -->
<!-- id="48F6DBB8-AA0C-4833-9842-FB42BC34C242_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="543F4BD0.80103_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 00:54:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16054.php">Artem Polyakov: "[OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Previous message:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2014, at 9:38 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the issue occurs when &quot;pushing&quot; a message that is larger than 255 bytes,
</span><br>
<span class="quotelev1">&gt; and i fixed it.
</span><br>
<p>Kewl - thanks
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* i am not sure anyone broke this, and fwiw, git blames blamed you */
</span><br>
<p>I did the commit from the pmix branch, so it will list me for all those lines. However, I only worked on the native component, so I'm not sure who might have worked on that section or what testing they might have done prior to the commit to the trunk. Hence my request.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ git show 27dcca0bb20d8f42b4d048758ef4ff14ca0d79b9
</span><br>
<span class="quotelev1">&gt; commit 27dcca0bb20d8f42b4d048758ef4ff14ca0d79b9
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Thu Oct 16 13:29:32 2014 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    pmi/s1: fix large keys
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    do not overwrite the PMI key when pushing a message that does
</span><br>
<span class="quotelev1">&gt;    not fit within 255 bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/pmix/base/pmix_base_fns.c
</span><br>
<span class="quotelev1">&gt; b/opal/mca/pmix/base/pmix_base_fns.c
</span><br>
<span class="quotelev1">&gt; index 56609c5..56c13ba 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/pmix/base/pmix_base_fns.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/pmix/base/pmix_base_fns.c
</span><br>
<span class="quotelev1">&gt; @@ -144,7 +144,7 @@ int opal_pmix_base_commit_packed( char*
</span><br>
<span class="quotelev1">&gt; buffer_to_put, int data_to_put,
</span><br>
<span class="quotelev1">&gt;     for (left = strlen (encoded_data), tmp = encoded_data ; left ; ) {
</span><br>
<span class="quotelev1">&gt;         size_t value_size = vallen &gt; left ? left : vallen - 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        sprintf (tmp_key, &quot;key%d&quot;, *pack_key);
</span><br>
<span class="quotelev1">&gt; +        sprintf (tmp_key, &quot;key%d&quot;, pkey);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (NULL == (pmikey = setup_key(&amp;OPAL_PROC_MY_NAME, tmp_key,
</span><br>
<span class="quotelev1">&gt; vallen))) {
</span><br>
<span class="quotelev1">&gt;             OPAL_ERROR_LOG(OPAL_ERR_BAD_PARAM);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/10/16 3:33, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When attempting to launch via srun:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] pmix: get all keys for proc 327680 in KVS 5.0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] GETTING KEY 327680-key0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] UNSUPPORTED TYPE 0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] OPAL ERROR: Error in file pmix_s1.c at line 458
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03709] [[5,0],2] pmix:s1 barrier complete
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03709] pmix: get all keys for proc 327680 in KVS 5.0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03709] GETTING KEY 327680-key0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03709] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03709] UNSUPPORTED TYPE 0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03709] OPAL ERROR: Error in file pmix_s1.c at line 458
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] [[5,0],1] pmix:s1 called get for key pmix.hname
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] pmix: get all keys for proc 327680 in KVS 5.0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] GETTING KEY 327680-key0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] Read data AcG1peC5obmFtZQAwMwAwMDA4AGJlbmQwMDEAcG1peC5scmFuawAwZAAwMDAyAAAAcG1peC5ucmFuawAwZAAwMA  -
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] UNSUPPORTED TYPE 0
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:03708] [[5,0],1] pmix:s1 got key pmix.hname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looks like someone broke the common code for decoding keys. Could you please fix it?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16046.php">http://www.open-mpi.org/community/lists/devel/2014/10/16046.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16052.php">http://www.open-mpi.org/community/lists/devel/2014/10/16052.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16054.php">Artem Polyakov: "[OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Previous message:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="16052.php">Gilles Gouaillardet: "Re: [OMPI devel] Slurm direct-launch is broken on trunk"</a>
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
