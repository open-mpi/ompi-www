<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 20:53:26 2008" -->
<!-- isoreceived="20080321005326" -->
<!-- sent="Thu, 20 Mar 2008 17:53:17 -0700" -->
<!-- isosent="20080321005317" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="adave3gx5he.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="26B78B15-FE1B-40C5-9CE7-B765DBF8436E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Switching away from SVN?<br>
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 20:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3483.php">Ralph H Castain: "[OMPI devel] RFC: Removal of orte_sys_info structure"</a>
<li><strong>In reply to:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;<a href="http://utsl.gen.nz/talks/git-svn/intro.html">http://utsl.gen.nz/talks/git-svn/intro.html</a>&gt; has some interesting
<br>
info about svn-&gt;git conversions (and svn vs. next-gen distibuted
<br>
systems in general).
<br>
<p>Also, out of curiousity I tried doing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;git-svn clone --stdlayout <a href="http://svn.open-mpi.org/svn/ompi/">http://svn.open-mpi.org/svn/ompi/</a>
<br>
<p>and it seemed to work fine (git-svn is part of the main git
<br>
distribution).  The only obvious thing missing is that you would
<br>
probably want to set up an author file for a real conversion, so that
<br>
you get real names instead of just &quot;jsquyres&quot;.  It took a while to
<br>
run, mostly because it has to grab each svn changeset one by one.
<br>
<p>The interesting thing is that a checkout of the current ompi tree
<br>
seems to be about 37 MB, while .git directory of my repository, which
<br>
has the entire history of all branches of the svn repository plus
<br>
1.6MB of svn metadata is 36 MB.  And git can do fun stuff like
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;git diff v1.1..v1.2
<br>
<p>in half a second (it generates a 274858 line diff).  It can generate
<br>
the full 116320 line (11164 commit) log of the trunk in .3 seconds.
<br>
<p>Jeff, if you want to see the repository, it is in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/data/home/roland/ompi.git
<br>
<p>Feel free to make it available however you want (it's your data of course).
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3483.php">Ralph H Castain: "[OMPI devel] RFC: Removal of orte_sys_info structure"</a>
<li><strong>In reply to:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
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
