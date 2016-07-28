<?
$subject_val = "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 02:26:29 2009" -->
<!-- isoreceived="20090303072629" -->
<!-- sent="Tue, 3 Mar 2009 08:26:24 +0100" -->
<!-- isosent="20090303072624" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak" -->
<!-- id="36ca99e90903022326y6ef029acsabf8465faac33035_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1235046585-20248-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 02:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5547.php">Jie Cai: "[OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<li><strong>Previous message:</strong> <a href="5545.php">Bert Wesarg: "[OMPI devel] help-orte-top.txt: add missing ["</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5465.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5552.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Reply:</strong> <a href="5552.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/2/19 Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free the memory alocated by the call to asprintf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;orte/tools/orte-ps/orte-ps.c | &#194;&#160; &#194;&#160;1 +
</span><br>
<span class="quotelev1">&gt; &#194;&#160;1 file changed, 1 insertion(+)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --quilt old/orte/tools/orte-ps/orte-ps.c new/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev1">&gt; --- old/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev1">&gt; +++ new/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev1">&gt; @@ -396,6 +396,7 @@ static int pretty_print(orte_ps_mpirun_i
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; len_hdr = strlen(header);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; printf(&quot;%s\n&quot;, header);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;free(header);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; for (i=0; i &lt; len_hdr; i++) {
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;%c&quot;, '-');
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ping.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5547.php">Jie Cai: "[OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<li><strong>Previous message:</strong> <a href="5545.php">Bert Wesarg: "[OMPI devel] help-orte-top.txt: add missing ["</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5465.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5552.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Reply:</strong> <a href="5552.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
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
