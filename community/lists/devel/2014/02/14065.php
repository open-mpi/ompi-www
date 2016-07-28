<?
$subject_val = "[OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 19:36:03 2014" -->
<!-- isoreceived="20140210003603" -->
<!-- sent="Sun, 9 Feb 2014 16:36:01 -0800" -->
<!-- isosent="20140210003601" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM" -->
<!-- id="CAAvDA16svnFn-6Tj3RGJ6GF5SztvxHCvVfV4-hS_HvBbNfRAGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 19:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Previous message:</strong> <a href="14064.php">Paul Hargrove: "[OMPI devel] v1.7.5a1(regresion): MPI_Init crash on ppc/linux and sparc/solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14116.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM"</a>
<li><strong>Reply:</strong> <a href="14116.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the source of the problem, and a solution.
<br>
<p>The following is r30612, in which Jeff thought he had fixed the problem:
<br>
<p>--- opal/util/path.c    (revision 30611)
<br>
+++ opal/util/path.c    (revision 30612)
<br>
@@ -515,12 +515,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (-1 == vfsrc &amp;&amp; ESTALE == errno &amp;&amp; (0 &lt; --trials));
<br>
&nbsp;#endif
<br>
<p>-    /* In case some error with the current filename, try the directory */
<br>
+    /* In case some error with the current filename, try the parent
<br>
+       directory */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (-1 == fsrc &amp;&amp; -1 == vfsrc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char * last_sep;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((10, 0, &quot;opal_path_nfs: stat(v)fs on file:%s
<br>
failed errno:%d directory:%s\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fname, errno, file));
<br>
+        if (EPERM == errno) {
<br>
+            free(file);
<br>
+            return false;
<br>
+        }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;last_sep = strrchr(file, OPAL_PATH_SEP[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Stop the search, when we have searched past root '/' */
<br>
<p><p>The new code to handle EPERM isn't reachable in general because fsrc and
<br>
vfsrc aren't initialized and thus won't both be -1 unless both calls have
<br>
run and failed.  However, on many/most systems only one of the two calls
<br>
exist.  If I weren't passing --enable-debug to all my builds, I suspect I'd
<br>
have seen an used-uninitialized warning for the &quot;if&quot; (which is a product of
<br>
other recent fixes in this function, r30198 on trunk).
<br>
<p>The following fixes the problem for me:
<br>
<p>--- opal/util/path.c~   2014-02-09 23:52:37.764571000 +0100
<br>
+++ opal/util/path.c    2014-02-09 23:53:21.800383233 +0100
<br>
@@ -471,7 +471,8 @@
<br>
&nbsp;{
<br>
&nbsp;#if !defined(__WINDOWS__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
-    int fsrc, vfsrc;
<br>
+    int fsrc = -1;
<br>
+    int vfsrc = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int trials;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char * file = strdup (fname);
<br>
&nbsp;#if defined(USE_STATFS)
<br>
<p>-Paul
<br>
<p><p>On Sat, Feb 8, 2014 at 10:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like it - I'll take a peek and see if I can spot it, otherwise will
</span><br>
<span class="quotelev1">&gt; have to wait for Jeff next week
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2014, at 9:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A test of Friday night's trunk tarball is failing in the same manner.
</span><br>
<span class="quotelev1">&gt; So, the CMR isn't the issue - the problem was never (fully?) fixed in
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 7, 2014 at 9:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tested the 1.7 tarball tonight.
</span><br>
<span class="quotelev2">&gt;&gt; Jeff had indicated (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13785.php">http://www.open-mpi.org/community/lists/devel/2014/01/13785.php</a>) that
</span><br>
<span class="quotelev2">&gt;&gt; the problem I had reported w/ opal_path_nfs() and EPERM had been fixed in
</span><br>
<span class="quotelev2">&gt;&gt; the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; Trac ticket #4125 indicated the fix was CMRed to v1.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I still see the problem:
</span><br>
<span class="quotelev2">&gt;&gt;  Failure : Mismatch: input &quot;/users/course13/.gvfs&quot;, expected:0 got:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Failure : Mismatch: input &quot;/users/steineju/.gvfs&quot;, expected:0 got:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (2 of 20 failed)
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't currently know if the problem was every fixed on the trunk, but
</span><br>
<span class="quotelev2">&gt;&gt; should know by morning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Previous message:</strong> <a href="14064.php">Paul Hargrove: "[OMPI devel] v1.7.5a1(regresion): MPI_Init crash on ppc/linux and sparc/solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14116.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM"</a>
<li><strong>Reply:</strong> <a href="14116.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM"</a>
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
