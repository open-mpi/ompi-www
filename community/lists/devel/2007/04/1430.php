<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 11:08:15 2007" -->
<!-- isoreceived="20070418150815" -->
<!-- sent="Wed, 18 Apr 2007 09:08:10 -0600 (MDT)" -->
<!-- isosent="20070418150810" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="12106.128.165.0.81.1176908890.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA02B372_at_exil.voltaire.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 11:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1431.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1429.php">Jeff Squyres: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch is so that you can pass in hex in addition to decimal, right?  I
<br>
think that makes sense.  But since we're switching to strtol, it might
<br>
also make sense to add some error detection while we're at it.  Not a huge
<br>
deal, but it would be nice :).
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to add a patch to opal mca.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch replaces an 'atoi' call with a 'strtol' call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it's O.K with everyone I'll submit this patch by the end of the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- opal/mca/base/mca_base_param.c     (revision 14391)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/base/mca_base_param.c  (working copy)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1673,7 +1673,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (NULL != param-&gt;mbp_env_var_name &amp;&amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        NULL != (env = getenv(param-&gt;mbp_env_var_name))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (MCA_BASE_PARAM_TYPE_INT == param-&gt;mbp_type) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -      storage-&gt;intval = atoi(env);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +      storage-&gt;intval = (int)strtol(env,(char**)NULL,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      } else if (MCA_BASE_PARAM_TYPE_STRING == param-&gt;mbp_type) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        storage-&gt;stringval = strdup(env);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1714,7 +1714,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (0 == strcmp(fv-&gt;mbpfv_param, param-&gt;mbp_full_name)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              if (MCA_BASE_PARAM_TYPE_INT == param-&gt;mbp_type) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  if (NULL != fv-&gt;mbpfv_value) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -                    param-&gt;mbp_file_value.intval =
</span><br>
<span class="quotelev1">&gt; atoi(fv-&gt;mbpfv_value);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                    param-&gt;mbp_file_value.intval =
</span><br>
<span class="quotelev1">&gt; (int)strtol(fv-&gt;mbpfv_value,(char**)NULL,0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      param-&gt;mbp_file_value.intval = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sharon.
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
<li><strong>Next message:</strong> <a href="1431.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1429.php">Jeff Squyres: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
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
