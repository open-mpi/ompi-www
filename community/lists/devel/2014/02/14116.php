<?
$subject_val = "Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 09:00:12 2014" -->
<!-- isoreceived="20140212140012" -->
<!-- sent="Wed, 12 Feb 2014 14:00:10 +0000" -->
<!-- isosent="20140212140010" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM" -->
<!-- id="DFDD43B3-4DE2-4BF3-9BEB-ACBE51F1C449_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16svnFn-6Tj3RGJ6GF5SztvxHCvVfV4-hS_HvBbNfRAGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and	EPERM<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 09:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14117.php">Ralph Castain: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>Previous message:</strong> <a href="14115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14065.php">Paul Hargrove: "[OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch was applied to both trunk and v1.7; thanks Paul.
<br>
<p>On Feb 9, 2014, at 7:36 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I found the source of the problem, and a solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is r30612, in which Jeff thought he had fixed the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- opal/util/path.c    (revision 30611)
</span><br>
<span class="quotelev1">&gt; +++ opal/util/path.c    (revision 30612)
</span><br>
<span class="quotelev1">&gt; @@ -515,12 +515,17 @@
</span><br>
<span class="quotelev1">&gt;      } while (-1 == vfsrc &amp;&amp; ESTALE == errno &amp;&amp; (0 &lt; --trials));
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    /* In case some error with the current filename, try the directory */
</span><br>
<span class="quotelev1">&gt; +    /* In case some error with the current filename, try the parent
</span><br>
<span class="quotelev1">&gt; +       directory */
</span><br>
<span class="quotelev1">&gt;      if (-1 == fsrc &amp;&amp; -1 == vfsrc) {
</span><br>
<span class="quotelev1">&gt;          char * last_sep;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((10, 0, &quot;opal_path_nfs: stat(v)fs on file:%s failed errno:%d directory:%s\n&quot;,
</span><br>
<span class="quotelev1">&gt;                               fname, errno, file));
</span><br>
<span class="quotelev1">&gt; +        if (EPERM == errno) {
</span><br>
<span class="quotelev1">&gt; +            free(file);
</span><br>
<span class="quotelev1">&gt; +            return false;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          last_sep = strrchr(file, OPAL_PATH_SEP[0]);
</span><br>
<span class="quotelev1">&gt;          /* Stop the search, when we have searched past root '/' */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The new code to handle EPERM isn't reachable in general because fsrc and vfsrc aren't initialized and thus won't both be -1 unless both calls have run and failed.  However, on many/most systems only one of the two calls exist.  If I weren't passing --enable-debug to all my builds, I suspect I'd have seen an used-uninitialized warning for the &quot;if&quot; (which is a product of other recent fixes in this function, r30198 on trunk).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following fixes the problem for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- opal/util/path.c~   2014-02-09 23:52:37.764571000 +0100
</span><br>
<span class="quotelev1">&gt; +++ opal/util/path.c    2014-02-09 23:53:21.800383233 +0100
</span><br>
<span class="quotelev1">&gt; @@ -471,7 +471,8 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  #if !defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt; -    int fsrc, vfsrc;
</span><br>
<span class="quotelev1">&gt; +    int fsrc = -1;
</span><br>
<span class="quotelev1">&gt; +    int vfsrc = -1;
</span><br>
<span class="quotelev1">&gt;      int trials;
</span><br>
<span class="quotelev1">&gt;      char * file = strdup (fname);
</span><br>
<span class="quotelev1">&gt;  #if defined(USE_STATFS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 8, 2014 at 10:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sounds like it - I'll take a peek and see if I can spot it, otherwise will have to wait for Jeff next week
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2014, at 9:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A test of Friday night's trunk tarball is failing in the same manner.
</span><br>
<span class="quotelev2">&gt;&gt; So, the CMR isn't the issue - the problem was never (fully?) fixed in trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 7, 2014 at 9:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I tested the 1.7 tarball tonight.
</span><br>
<span class="quotelev2">&gt;&gt; Jeff had indicated (<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13785.php">http://www.open-mpi.org/community/lists/devel/2014/01/13785.php</a>) that the problem I had reported w/ opal_path_nfs() and EPERM had been fixed in the trunk.
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
<span class="quotelev2">&gt;&gt; I don't currently know if the problem was every fixed on the trunk, but should know by morning.
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
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14117.php">Ralph Castain: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>Previous message:</strong> <a href="14115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14065.php">Paul Hargrove: "[OMPI devel] [PATCH] Re: Still having issues w/ opal_path_nfs and EPERM"</a>
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
