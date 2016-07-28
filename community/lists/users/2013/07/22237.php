<?
$subject_val = "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 23:06:29 2013" -->
<!-- isoreceived="20130702030629" -->
<!-- sent="Mon, 1 Jul 2013 23:06:16 -0400" -->
<!-- isosent="20130702030616" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox" -->
<!-- id="20130702030616.GS25597_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox<br>
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 23:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<li><strong>Reply:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As described in the comments in the source, Gentoo's own version of
<br>
fakeroot, sandbox, also runs into hangs when malloc is overridden.
<br>
Sandbox environments can easily be detected by looking for SANDBOX_PID
<br>
in the environment.  When detected, employ the same fix used for
<br>
fakeroot.
<br>
<p>See <a href="https://bugs.gentoo.org/show_bug.cgi?id=462602">https://bugs.gentoo.org/show_bug.cgi?id=462602</a>
<br>
<pre>
---
 opal/mca/memory/linux/hooks.c | 11 +++++++++--
 1 file changed, 9 insertions(+), 2 deletions(-)
diff --git a/opal/mca/memory/linux/hooks.c b/opal/mca/memory/linux/hooks.c
index 6a1646f..ce91e76 100644
--- a/opal/mca/memory/linux/hooks.c
+++ b/opal/mca/memory/linux/hooks.c
@@ -747,9 +747,16 @@ static void opal_memory_linux_malloc_init_hook(void)
        &quot;fakeroot&quot; build environment that allocates memory during
        stat() (see <a href="http://bugs.debian.org/531522">http://bugs.debian.org/531522</a>).  It may not be
        necessary any more since we're using access(), not stat().  But
-       we'll leave the check, anyway. */
+       we'll leave the check, anyway.
+
+       This is also an issue when using Gentoo's version of 'fakeroot',
+       sandbox v2.5.  Sandbox environments can also be detected fairly
+       easily by looking for SANDBOX_PID.
+    */
+
     if (getenv(&quot;FAKEROOTKEY&quot;) != NULL ||
-        getenv(&quot;FAKED_MODE&quot;) != NULL) {
+        getenv(&quot;FAKED_MODE&quot;) != NULL ||
+        getenv(&quot;SANDBOX_PID&quot;) != NULL ) {
         return;
     }
 
-- 
1.8.1.5
-- 
Justin Bronder

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22237/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<li><strong>Reply:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
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
