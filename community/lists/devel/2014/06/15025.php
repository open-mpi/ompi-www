<?
$subject_val = "Re: [OMPI devel] Fortran busted on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 14:13:13 2014" -->
<!-- isoreceived="20140619181313" -->
<!-- sent="Thu, 19 Jun 2014 18:13:12 +0000" -->
<!-- isosent="20140619181312" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran busted on trunk" -->
<!-- id="BDBE1446-AC1D-458A-BA09-2B1526338660_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A952BBF3-E058-407C-A173-EA67E60360E6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran busted on trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 14:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15024.php">Ralph Castain: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>In reply to:</strong> <a href="15019.php">Jeff Squyres (jsquyres): "[OMPI devel] Fortran busted on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r32048 should have fixed the problem.
<br>
<p><p>On Jun 19, 2014, at 11:41 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you svn up right now, you should:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Disable building the Fortran bindings.  I missed a case in all my testing; there's brokenness with older versions of gfortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. You'll also get SVN conflicts in the ompi/mpi/fortran tree.  This is because some .f90 files that used to be generated are now directly in SVN.  You'll probably want to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    rm -rf ompi/mpi/fortran
</span><br>
<span class="quotelev1">&gt;    svn revert -R ompi/mpi/fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then re-autogen/etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll send another mail around when #1 is fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15024.php">Ralph Castain: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>In reply to:</strong> <a href="15019.php">Jeff Squyres (jsquyres): "[OMPI devel] Fortran busted on trunk"</a>
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
