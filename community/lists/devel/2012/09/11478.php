<?
$subject_val = "[OMPI devel] OMPI git / mercurial mirrors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 13:23:48 2012" -->
<!-- isoreceived="20120907172348" -->
<!-- sent="Fri, 7 Sep 2012 13:23:44 -0400" -->
<!-- isosent="20120907172344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI git / mercurial mirrors" -->
<!-- id="CF47F8D3-96EB-4176-8370-920BFACC2529_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI git / mercurial mirrors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 13:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11479.php">Jeff Squyres: "[OMPI devel] 1.6.2rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="11477.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shortly after we launched the git SVN mirror, we noticed that it was only updating the trunk (master) branch, and not any of the others.
<br>
<p>With the help of an engineer at Mellanox (thanks, Eugene!), we've got it back online.
<br>
<p>In the process, I had to kill the original git repo at github and re-seed it from scratch -- sorry.  But it now appears to be updating all branches properly (<a href="https://github.com/open-mpi/ompi-svn-mirror/">https://github.com/open-mpi/ompi-svn-mirror/</a>).
<br>
<p>Also, the Mercurial repo has been wholly moved to Bitbucket (<a href="https://bitbucket.org/ompiteam/ompi-svn-mirror">https://bitbucket.org/ompiteam/ompi-svn-mirror</a>).  It, too, mirrors all the SVN branches.  The old mirror on www.open-mpi.org is still around (and updated), but will disappear someday.  If you're using the Mercurial mirror, you are highly encouraged to switch to the Bitbucket mirror.
<br>
<p>Enjoy.
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
<li><strong>Next message:</strong> <a href="11479.php">Jeff Squyres: "[OMPI devel] 1.6.2rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="11477.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
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
