<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 07:59:23 2007" -->
<!-- isoreceived="20070418115923" -->
<!-- sent="Wed, 18 Apr 2007 07:58:59 -0400" -->
<!-- isosent="20070418115859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="709BBAF0-4A6B-42D3-991E-780BA2268488_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 07:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1430.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1431.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1431.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 18, 2007, at 7:55 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; I want to add a patch to opal mca.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch replaces an &#145;atoi&#146; call with a &#145;strtol&#146; call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it&#146;s O.K with everyone I&#146;ll submit this patch by the end of the  
</span><br>
<span class="quotelev1">&gt; week.
</span><br>
<p>With the (int) cast, I'm ok with it now.  :-)
<br>
<p>The man pages on Linux, OSX, and Solaris all describe similar  
<br>
functionality, so I think you should be ok.
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; -                    param-&gt;mbp_file_value.intval = atoi(fv- 
</span><br>
<span class="quotelev2">&gt; &gt;mbpfv_value);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                    param-&gt;mbp_file_value.intval = (int)strtol(fv- 
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
<li><strong>Next message:</strong> <a href="1430.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1428.php">Sharon Melamed: "[OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1431.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Reply:</strong> <a href="1431.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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
