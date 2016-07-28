<?
$subject_val = "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:29:54 2009" -->
<!-- isoreceived="20090219122954" -->
<!-- sent="Thu, 19 Feb 2009 13:29:42 +0100" -->
<!-- isosent="20090219122942" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak" -->
<!-- id="1235046585-20248-2-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 07:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5467.php">Bert Wesarg: "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<li><strong>Previous message:</strong> <a href="5465.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
<br>
<p><p><pre>
---
 orte/tools/orte-ps/orte-ps.c |    4 ++--
 1 file changed, 2 insertions(+), 2 deletions(-)
diff --quilt old/orte/tools/orte-ps/orte-ps.c new/orte/tools/orte-ps/orte-ps.c
--- old/orte/tools/orte-ps/orte-ps.c
+++ new/orte/tools/orte-ps/orte-ps.c
@@ -392,10 +392,10 @@ static int pretty_print(orte_ps_mpirun_i
     /*
      * Print header
      */
-    asprintf(&amp;header, &quot;\n\nInformation from mpirun %s&quot;, ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
+    asprintf(&amp;header, &quot;Information from mpirun %s&quot;, ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
     len_hdr = strlen(header);
     
-    printf(&quot;%s\n&quot;, header);
+    printf(&quot;\n\n%s\n&quot;, header);
     free(header);
     for (i=0; i &lt; len_hdr; i++) {
         printf(&quot;%c&quot;, '-');
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5467.php">Bert Wesarg: "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<li><strong>Previous message:</strong> <a href="5465.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
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
