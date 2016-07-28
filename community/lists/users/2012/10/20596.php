<?
$subject_val = "[OMPI users] bug (?) opal_path_access incorrect call";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 04:56:26 2012" -->
<!-- isoreceived="20121031085626" -->
<!-- sent="Wed, 31 Oct 2012 09:56:19 +0100" -->
<!-- isosent="20121031085619" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI users] bug (?) opal_path_access incorrect call" -->
<!-- id="5090E7B3.3070802_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] bug (?) opal_path_access incorrect call<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 04:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20597.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20595.php">Aleksej Saushev: "Re: [OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20599.php">Ralph Castain: "Re: [OMPI users] bug (?) opal_path_access incorrect call"</a>
<li><strong>Reply:</strong> <a href="20599.php">Ralph Castain: "Re: [OMPI users] bug (?) opal_path_access incorrect call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
looking on a solution for
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/10/20495.php">http://www.open-mpi.org/community/lists/users/2012/10/20495.php</a>
<br>
<p>I noticed that the issue disappears on 1.6.2 with the patch:
<br>
<p>----------------------------------------------------------------
<br>
--- opal/util/path.c~   2012-04-03 16:29:52.000000000 +0200
<br>
+++ opal/util/path.c    2012-10-30 20:31:43.772749400 +0100
<br>
@@ -82,7 +82,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If absolute path is given, return it without searching. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( opal_path_is_absolute(fname) ) {
<br>
-        return opal_path_access(fname, &quot;&quot;, mode);
<br>
+        return opal_path_access(fname, NULL , mode);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Initialize. */
<br>
----------------------------------------------------------------
<br>
<p><p>For what I can see on the function body, the test on path
<br>
is expecting path to be a null pointer and not a
<br>
pointer to an empty strings
<br>
<p>----------------------------------------------------------------
<br>
char *opal_path_access(char *fname, char *path, int mode)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *fullpath = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct stat buf;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Allocate space for the full pathname. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == path) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fullpath = opal_os_path(false, fname, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fullpath = opal_os_path(false, path, fname, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == fullpath)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
----------------------------------------------------------------
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20597.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20595.php">Aleksej Saushev: "Re: [OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20599.php">Ralph Castain: "Re: [OMPI users] bug (?) opal_path_access incorrect call"</a>
<li><strong>Reply:</strong> <a href="20599.php">Ralph Castain: "Re: [OMPI users] bug (?) opal_path_access incorrect call"</a>
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
