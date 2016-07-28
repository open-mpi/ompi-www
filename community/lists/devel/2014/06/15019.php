<?
$subject_val = "[OMPI devel] Fortran busted on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:41:47 2014" -->
<!-- isoreceived="20140619154147" -->
<!-- sent="Thu, 19 Jun 2014 15:41:46 +0000" -->
<!-- isosent="20140619154146" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran busted on trunk" -->
<!-- id="A952BBF3-E058-407C-A173-EA67E60360E6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran busted on trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 11:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15020.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran busted on trunk"</a>
<li><strong>Reply:</strong> <a href="15025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran busted on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you svn up right now, you should:
<br>
<p>1. Disable building the Fortran bindings.  I missed a case in all my testing; there's brokenness with older versions of gfortran.
<br>
<p>2. You'll also get SVN conflicts in the ompi/mpi/fortran tree.  This is because some .f90 files that used to be generated are now directly in SVN.  You'll probably want to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rm -rf ompi/mpi/fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;svn revert -R ompi/mpi/fortran
<br>
<p>And then re-autogen/etc.
<br>
<p>I'll send another mail around when #1 is fixed.
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
<li><strong>Next message:</strong> <a href="15020.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran busted on trunk"</a>
<li><strong>Reply:</strong> <a href="15025.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran busted on trunk"</a>
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
