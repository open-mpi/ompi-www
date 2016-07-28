<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 09:21:37 2007" -->
<!-- isoreceived="20070417132137" -->
<!-- sent="Tue, 17 Apr 2007 09:21:16 -0400" -->
<!-- isosent="20070417132116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (no subject)" -->
<!-- id="0513EBAB-3EBE-4E8F-92C3-F22CB638E8C1_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA02B371_at_exil.voltaire.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-17 09:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1426.php">Sharon Melamed: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="1426.php">Sharon Melamed: "[OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't you also need to cast the return of strtol() to an int?
<br>
<p>On Apr 17, 2007, at 9:12 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added an MCA parameter and I want the user to apply an Hex value  
</span><br>
<span class="quotelev1">&gt; to this parameter (0x&#133;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to do so I needed to change the &#145;atoi&#146; call in the  
</span><br>
<span class="quotelev1">&gt; mca_base_param.c file to &#145;strtol&#146; call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: Can this code run on all platforms?
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
<span class="quotelev1">&gt; +      storage-&gt;intval = strtol(env,(char**)NULL,0);
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
<span class="quotelev1">&gt; -                    param-&gt;mbp_file_value.intval = atoi(fv- 
</span><br>
<span class="quotelev2">&gt; &gt;mbpfv_value);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                    param-&gt;mbp_file_value.intval = strtol(fv- 
</span><br>
<span class="quotelev2">&gt; &gt;mbpfv_value,(char**)NULL,0);
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1426.php">Sharon Melamed: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="1426.php">Sharon Melamed: "[OMPI devel] (no subject)"</a>
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
