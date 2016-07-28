<?
$subject_val = "[OMPI devel] SVN tags/branch question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:40:00 2012" -->
<!-- isoreceived="20121211154000" -->
<!-- sent="Tue, 11 Dec 2012 10:39:55 -0500" -->
<!-- isosent="20121211153955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] SVN tags/branch question" -->
<!-- id="F56F79F2-4E0F-4239-AC33-E8075F333012_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] SVN tags/branch question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-11 10:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to re-issue the 1.6.x SRPMs with new spec files (because there have been bugs in them since at least 1.6.0 -- I'm not concerned with the 1.5.x series).  All the spec file stuff is stored in the SVN tree under contrib/dist/linux.  The spec file is named &quot;openmpi.spec&quot;.
<br>
<p>So here's my question -- where should I save this new stuff?
<br>
<p>1. in the general v1.6 branch, under the names openmpi-&lt;VERSION&gt;.spec
<br>
2. in the tag branch for each release, under the name openmpi.spec
<br>
3. ...?
<br>
<p>I'm leaning towards #1.  Does anyone else have an opinion here?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="11845.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: Enable thread support by default"</a>
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
