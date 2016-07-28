<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 08:24:09 2012" -->
<!-- isoreceived="20120127132409" -->
<!-- sent="Fri, 27 Jan 2012 08:24:05 -0500" -->
<!-- isosent="20120127132405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM" -->
<!-- id="98C4BBB6-1536-4FE4-BF31-4A5F438F7B74_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F2239E6.4040704_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 08:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Previous message:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>In reply to:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10268.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]"</a>
<li><strong>Reply:</strong> <a href="10268.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 27, 2012, at 12:45 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; On this cluster, statfs() is returning ENOENT, which is breaking opal_path_nfs().
</span><br>
<span class="quotelev1">&gt; So, these results are with test/opal/util/opal_path_nfs.c &quot;disabled&quot;.
</span><br>
<p>Paul -- can you explain this a little more?  There should be logic in there to effectively handle ENOENT's, meaning that if we get a non-ESTALE error, we try again with the directory name.  This is repeated until we get to &quot;/&quot; -- so there should definitely be at least one case where statfs() is *not* returning ENOENT.
<br>
<p>Is that not happening?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Previous message:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>In reply to:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10268.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]"</a>
<li><strong>Reply:</strong> <a href="10268.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]"</a>
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
