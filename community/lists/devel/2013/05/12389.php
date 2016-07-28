<?
$subject_val = "[OMPI devel] RFC: dead code removal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 20:24:54 2013" -->
<!-- isoreceived="20130516002454" -->
<!-- sent="Thu, 16 May 2013 00:24:48 +0000" -->
<!-- isosent="20130516002448" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: dead code removal" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F624B18_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: dead code removal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 20:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12390.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12388.php">Ralph Castain: "[OMPI devel] 1.7.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12390.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Reply:</strong> <a href="12390.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove a bunch of &quot;set but not used&quot; variables / dead code
<br>
<p>WHY: Because it's dead code
<br>
<p>WHERE: All over, but NOT the BTL ALLOC macros (per prior argu^H^H^H^Hdiscussion)
<br>
<p>WHEN: Tomorrow (16 May 2013), COB
<br>
<p>More detail:
<br>
<p>gcc 4.7.x squawks a lot about &quot;set but unused&quot; variables.  I took a sweep through and removed a bunch of them -- they're all obviously dead code.
<br>
<p>I did *not*, however, remove the setting of rc in the various BTL/OOB ALLOC_FRAG macros, per prior disagreements in emails about this.  Perhaps someone else will find a compromise for that someday -- this patch is not about fixing those warnings.  This patch is only about removing the obvious set-but-really-never-used variables.
<br>
<p>Short timeout because this is actually pretty trivial, but it does touch other people's code, so I wanted people to see it / get a heads-up before I committed.  Patch attached.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12389/dead-code-removal-trunk.diff">dead-code-removal-trunk.diff</a>
</ul>
<!-- attachment="dead-code-removal-trunk.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12390.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12388.php">Ralph Castain: "[OMPI devel] 1.7.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12390.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Reply:</strong> <a href="12390.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
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
