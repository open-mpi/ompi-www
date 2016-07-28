<?
$subject_val = "[OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 06:57:01 2010" -->
<!-- isoreceived="20100216115701" -->
<!-- sent="Tue, 16 Feb 2010 12:46:50 +0100" -->
<!-- isosent="20100216114650" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH" -->
<!-- id="1266320810.2639.191.camel_at_frecb000730" -->
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
<strong>Subject:</strong> [OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-16 06:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7439.php">Jeff Squyres: "[OMPI devel] 1.5.0 could be soon"</a>
<li><strong>Previous message:</strong> <a href="7437.php">Bogdan Costescu: "[OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The mpivars.sh genereted in openmpi.spec might in some cases lead to a
<br>
LD_LIBRARY_PATH that contains a trailing &quot;:&quot;. This happens if the
<br>
LD_LIBRARY_PATH is originally unset.
<br>
This means that current directory is included in the search path for the
<br>
loader, which might not be the desired result.
<br>
<p>The following patch proposal fixes this potential issue by adding the
<br>
&quot;:&quot; only if LD_LIBRARY_PATH is already set.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p>diff -r 6609b6ba7637 contrib/dist/linux/openmpi.spec
<br>
--- a/contrib/dist/linux/openmpi.spec   Mon Feb 15 22:14:59 2010 +0000
<br>
+++ b/contrib/dist/linux/openmpi.spec   Tue Feb 16 12:44:41 2010 +0100
<br>
@@ -505,7 +505,7 @@ fi
<br>
<p>&nbsp;# LD_LIBRARY_PATH
<br>
&nbsp;if test -z &quot;\`echo \$LD_LIBRARY_PATH | grep %{_libdir}\`&quot;; then
<br>
-    LD_LIBRARY_PATH=%{_libdir}:\${LD_LIBRARY_PATH}
<br>
+    LD_LIBRARY_PATH=%{_libdir}\${LD_LIBRARY_PATH:+:}\${LD_LIBRARY_PATH}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH
<br>
&nbsp;fi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7439.php">Jeff Squyres: "[OMPI devel] 1.5.0 could be soon"</a>
<li><strong>Previous message:</strong> <a href="7437.php">Bogdan Costescu: "[OMPI devel] Rankfile related problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
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
