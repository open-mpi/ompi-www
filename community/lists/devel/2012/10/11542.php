<?
$subject_val = "[OMPI devel] Continued Windows support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 11:51:34 2012" -->
<!-- isoreceived="20121002155134" -->
<!-- sent="Tue, 2 Oct 2012 11:51:36 -0400" -->
<!-- isosent="20121002155136" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Continued Windows support" -->
<!-- id="1F8F419F-1F13-4AD9-ACCE-D41FEA120901_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Continued Windows support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 11:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11543.php">Eugene Loh: "[OMPI devel] nightly tarballs"</a>
<li><strong>Previous message:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11549.php">Sandra Guija: "[OMPI devel]  Open-mpi in red hat 7.3"</a>
<li><strong>Reply:</strong> <a href="11549.php">Sandra Guija: "[OMPI devel]  Open-mpi in red hat 7.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am saddened to announce that Shiqing will be leaving the Open MPI community at the end of this month.  He's moving on to other projects that do not involve Open MPI.  Shiqing has single-handedly been supporting Open MPI on Windows for quite some time, and he's been doing a fantastic job of it.  Thanks for all the work, Shiqing!
<br>
<p>For the v1.6 series, even if we don't get a Windows-support-guy replacement for Shiqing, I think we'll be ok -- it's just bug fixes, and they're getting smaller.  So I'm guessing/hoping that we won't break Windows support.  If someone can volunteer to make Windows binaries (Damien?) for subsequent v1.6.x releases, I think we should be in good shape.
<br>
<p>For the v1.7 series, I think we've got a larger problem.  There's a bunch of things that are currently broken for Windows on the SVN trunk and v1.7 branch (e.g., the Win Verbs BTL, the new Fortran stuff, etc.).  
<br>
<p>*** Are there any volunteers to pick up Windows support for v1.7 and/or beyond?
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
<li><strong>Next message:</strong> <a href="11543.php">Eugene Loh: "[OMPI devel] nightly tarballs"</a>
<li><strong>Previous message:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11549.php">Sandra Guija: "[OMPI devel]  Open-mpi in red hat 7.3"</a>
<li><strong>Reply:</strong> <a href="11549.php">Sandra Guija: "[OMPI devel]  Open-mpi in red hat 7.3"</a>
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
