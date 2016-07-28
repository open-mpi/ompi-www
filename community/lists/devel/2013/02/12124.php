<?
$subject_val = "[OMPI devel] RFC: Remove windows support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 11:10:32 2013" -->
<!-- isoreceived="20130218161032" -->
<!-- sent="Mon, 18 Feb 2013 16:10:26 +0000" -->
<!-- isosent="20130218161026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove windows support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F47D68_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove windows support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 11:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Previous message:</strong> <a href="12123.php">Ralph Castain: "[OMPI devel] RFC: orte_db moving to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Reply:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove all Windows code from the trunk.
<br>
<p>WHY: This issue keeps coming up over and over and over...
<br>
<p>WHERE: Throughout the tree.
<br>
<p>WHEN: Timeout: next Tuesday teleconf: 26 Feb, 2013
<br>
<p>More detail:
<br>
<p>It seems like every week, a new issue related to &quot;what do we do about the Windows code?&quot; comes up.  It came up again in the BTL discussions in Knoxville last week.  It keeps coming up in various ORTE discussions.  And so on.
<br>
<p>So let's just do it -- let's cut the cord.  We have no Windows maintainer any more, and we don't test on Windows.  So let's not pretend that we do.  There's two levels of Windows support that we can remove:
<br>
<p>1. Remove all the CMAKE stuff.  This is a no-brainer, IMNSHO -- it's broken and unmaintained on the trunk; it doesn't support all the new Fortran stuff, for example.  Who knows what else has bit rotted?
<br>
<p>&nbsp;&nbsp;==&gt; Removing this code can probably be done in a single SVN commit.
<br>
<p>2. Remove all Windows code.  This involves some wholesale removing of components as well as a bunch of #if code throughout the code base.
<br>
<p>&nbsp;&nbsp;==&gt; Removing this code can probably be done in multiple SVN commits:
<br>
<p>2a. Removing Windows-only components (which, given the rate of change that we are planning for the trunk, may well need to be re-written if they are ever re-introduced into the tree).
<br>
2b. Removing &quot;#if WINDOWS&quot; code (e.g., in opal/util/*, etc.).  This code may not be changing as much as the rest of the trunk, and may be suitable for svn reverting someday.
<br>
<p>This does kill Cygwin support, too.  I realize we have a downstream packager for Cygwin, but the fact that we can't get any developer support for Windows -- despite multiple appeals -- seems to imply that the Windows Open MPI audience is very, very small.  So while it feels a bit sad to kill it, it may still be the Right Thing to do.
<br>
<p>This is a proposal, and is open for discussion.
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
<li><strong>Next message:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Previous message:</strong> <a href="12123.php">Ralph Castain: "[OMPI devel] RFC: orte_db moving to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Reply:</strong> <a href="12125.php">marco atzeri: "Re: [OMPI devel] RFC: Remove windows support"</a>
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
