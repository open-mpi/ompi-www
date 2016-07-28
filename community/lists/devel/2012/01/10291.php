<?
$subject_val = "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:25:32 2012" -->
<!-- isoreceived="20120131202532" -->
<!-- sent="Tue, 31 Jan 2012 15:25:27 -0500" -->
<!-- isosent="20120131202527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed" -->
<!-- id="CD91E0B2-52FD-4F63-A297-7FF71722444D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F284C9E.4060003_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10290.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>In reply to:</strong> <a href="10290.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 3:18 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Looks like you /almost/ got it this time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For opal/util/path.c you only fixed 1 out of 3 instances of defined(linux).
</span><br>
<span class="quotelev1">&gt; So, now it fails to compile ('buf' is undefined) rather than failing one test at &quot;make check&quot;.
</span><br>
<p>Crud.  Missed the others.  :-(
<br>
<p><span class="quotelev1">&gt; And, by the way the fix you did apply:
</span><br>
<span class="quotelev1">&gt;   &quot;defined(linux) || defined(__linux) || defined(__linux__)&quot;
</span><br>
<span class="quotelev1">&gt; is probably overkill.
</span><br>
<p>Yea, I know.  :-)
<br>
<p><span class="quotelev1">&gt; As I had noted toward the bottom of <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10268.php">http://www.open-mpi.org/community/lists/devel/2012/01/10268.php</a> , there are many instances of &quot;defined(__linux__)&quot; that seem to work fine.  So, that alone should be fine.
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 11:21 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hot on the heels of rc3, rc4 is out:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The main differences are the 8 issues that Paul Hargrove mentioned:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make v1.4 configure fail on OS X 10.3 and earlier
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fix opal/util/path.c for Linux with old compilers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; README updates for the Sun compilers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; README updates noting systems that are no longer supported
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fix assembly generation code on BSD in v1.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10290.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>In reply to:</strong> <a href="10290.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
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
