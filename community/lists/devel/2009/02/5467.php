<?
$subject_val = "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:29:55 2009" -->
<!-- isoreceived="20090219122955" -->
<!-- sent="Thu, 19 Feb 2009 13:29:43 +0100" -->
<!-- isosent="20090219122943" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length." -->
<!-- id="1235046585-20248-3-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length.<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 07:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5468.php">Bert Wesarg: "[OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line."</a>
<li><strong>Previous message:</strong> <a href="5466.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5555.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5555.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
<br>
<p>asprintf returns the length of the written header, use this as the length.
<br>
<p>Regards,
<br>
Bert Wesarg
<br>
<p><pre>
---
 orte/tools/orte-ps/orte-ps.c |    3 +--
 1 file changed, 1 insertion(+), 2 deletions(-)
diff --quilt old/orte/tools/orte-ps/orte-ps.c new/orte/tools/orte-ps/orte-ps.c
--- old/orte/tools/orte-ps/orte-ps.c
+++ new/orte/tools/orte-ps/orte-ps.c
@@ -392,8 +392,7 @@ static int pretty_print(orte_ps_mpirun_i
     /*
      * Print header
      */
-    asprintf(&amp;header, &quot;Information from mpirun %s&quot;, ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
-    len_hdr = strlen(header);
+    len_hdr = asprintf(&amp;header, &quot;Information from mpirun %s&quot;, ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
     
     printf(&quot;\n\n%s\n&quot;, header);
     free(header);
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5468.php">Bert Wesarg: "[OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line."</a>
<li><strong>Previous message:</strong> <a href="5466.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5555.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5555.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
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
