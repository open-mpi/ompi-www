<?
$subject_val = "[OMPI devel] [PATCH] openmpi: get it built with newer autoconf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 10:59:36 2010" -->
<!-- isoreceived="20100818145936" -->
<!-- sent="Wed, 18 Aug 2010 16:59:32 +0200" -->
<!-- isosent="20100818145932" -->
<!-- name="Sebastian Andrzej Siewior" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] openmpi: get it built with newer autoconf" -->
<!-- id="20100818145932.GD14313_at_Chamillionaire.breakpoint.cc" -->
<!-- charset="iso-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] openmpi: get it built with newer autoconf<br>
<strong>From:</strong> Sebastian Andrzej Siewior (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 10:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8288.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server"</a>
<li><strong>Previous message:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8289.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Reply:</strong> <a href="8289.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Sebastian Andrzej Siewior &lt;bigeasy_at_[hidden]&gt;
<br>
<p>Reported as Debian bug #592892. AS_VAR_GET missbehaves in newer
<br>
autoconf. Since it is deprecated switch to AS_VAR_COPY which gets things
<br>
done right. Both are cursed.
<br>
<p>Signed-off-by: Sebastian Andrzej Siewior &lt;bigeasy_at_[hidden]&gt;
<br>
<pre>
---
 config/f77_get_alignment.m4 |    2 +-
 1 files changed, 1 insertions(+), 1 deletions(-)
diff --git a/config/f77_get_alignment.m4 b/config/f77_get_alignment.m4
index aa3d318..ba1fb96 100644
--- a/config/f77_get_alignment.m4
+++ b/config/f77_get_alignment.m4
@@ -90,7 +90,7 @@ EOF
                  AC_MSG_ERROR([Could not determine alignment of $1])])])
         rm -rf conftest*])
 
-    $2=AS_VAR_GET([type_var])
+    AS_VAR_COPY([$2], [type_var])
     AS_VAR_POPDEF([type_var])dnl
     OMPI_VAR_SCOPE_POP
 ])
-- 
1.5.6.5
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8288.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server"</a>
<li><strong>Previous message:</strong> <a href="8286.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8289.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Reply:</strong> <a href="8289.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
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
