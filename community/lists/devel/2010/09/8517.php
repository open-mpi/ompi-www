<?
$subject_val = "[OMPI devel] SVN / Mercurial";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 20:42:55 2010" -->
<!-- isoreceived="20100922004255" -->
<!-- sent="Tue, 21 Sep 2010 20:42:50 -0400" -->
<!-- isosent="20100922004250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] SVN / Mercurial" -->
<!-- id="993C2723-9FE1-4BC2-84BA-1BF01DF8D80F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] SVN / Mercurial<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 20:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Previous message:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It came up on the call today, so I thought I'd throw out some references here on the list...
<br>
<p>A while ago, we investigated moving the OMPI development away from SVN and to a 100% Mercurial solution.  We ended up not doing this for a few reasons:
<br>
<p>1. We actually kinda like the combo SVN+Mercurial solution that we use now.  A bunch of us OMPI developers use variants on &quot;combo&quot; schemes, the most common of which we documented on the wiki:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a>
<br>
<p>2. Perhaps we're reflecting our CVS/SVN backgrounds, but we didn't like the fact that if you do a bunch of &quot;private&quot; commits internally, when you push your final set of changes back up to the public mainline, all those private commits are listed.  Instead, we tend to prefer to make bunches of short-lived branches off the OMPI public mainline, do a bunch of private development, and then bring that functionality back to the OMPI mainline in a (series of) public commits.  There's no need to show all the internal &quot;just committing so that I can synchronize to another cluster&quot; kinds of commits.
<br>
<p>That being said, there are actually (at least) two ways to avoid exposing these kinds of internal commits: mercurial queues and rebasing.  But we didn't think the OMPI developer community would be wild about these options.  We could be wrong, of course, but that was our assessment at the time.
<br>
<p>-----
<br>
<p>So there ya go.  :-)  We still love Mercurial and use it every day, but we've been fairly happy with our SVN+Mercurial solutions.
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
<li><strong>Next message:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Previous message:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
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
