<?
$subject_val = "[hwloc-devel] Slowly moving to git";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 11:45:46 2014" -->
<!-- isoreceived="20140409154546" -->
<!-- sent="Wed, 9 Apr 2014 15:45:44 +0000" -->
<!-- isosent="20140409154544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Slowly moving to git" -->
<!-- id="A8740C21-2772-4D19-B3B3-7DA9C9D55C3E_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Slowly moving to git<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-09 11:45:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4125.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-155-gdf844ff)"</a>
<li><strong>Previous message:</strong> <a href="4123.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-9-g684c027)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As many of you have noticed, we've been moving more repositories from SVN to git.  This email is a summary of where we are and what the (current) overall plan is. 
<br>
<p>So far, the following repos are hosted in the Open MPI community at github:
<br>
<p>1. hwloc (integrated with Trac at IU)
<br>
2. hwloc-debian
<br>
3. netloc (integrated with Trac at IU)
<br>
4. OMPI user-level documentation
<br>
5. ompi-www
<br>
<p>The last one was just moved yesterday.  All have diff emails sent from IU (because github will not send diff emails).
<br>
<p>In short: we are slowly moving all of our SVN repos to git because git has some nicer features than SVN (we've discussed these reasons ad nauseam; I won't repeat them here).
<br>
<p>We're moving them to github instead of hosting them at IU because github *focuses* on git hosting.  They have far more resources dedicated to making slick git/web collaboration tools than IU.  IU has actually been pretty awesome to the Open MPI community over the years, but asking them to build up an entirely new git-hosting/collaboration infrastructure seems like asking for too much.  Github already exists and is pretty good.
<br>
<p>Keep in mind that we're doing this migration fairly slowly.  We're trying to learn with the smaller sub-projects first.  ***Remember that it's not just about migrating from SVN to git, but also migrating a fair amount of infrastructure, too: SVN history, Trac data, automated tarball building, ...etc.  And don't forget that the repo history and Trac data all needs to be selectively edited during the conversion to replace things like &quot;r1234&quot; in commit messages and trac comments to a git hash.
<br>
<p>The hwloc SVN-&gt;git conversion was a major learning point; we have a bunch of conversion scripts that resulted from that effort.  Those scripts will play a large part in converting the remaining SVN repos to git.
<br>
<p>As part of this overall effort, I've listed all the parts of infrastructure that the overall Open MPI project uses on a wiki page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/infrastructure">https://svn.open-mpi.org/trac/ompi/wiki/infrastructure</a>
<br>
<p>Upcoming plans:
<br>
<p>1. IU is working to upgrade the Trac/Github integration (probably next week).
<br>
<p>2. Ralph is going to populate an orcm github repo in the Open MPI github community (later this week/next week); that will be repo #6.
<br>
<p>3. IU is also working to upgrade the Github diff email integration (probably next week).
<br>
<p>4. The MTT SVN repo is probably the next target for conversion.  The ompi-www repo didn't have a Trac, and we didn't bother to import any of the SVN history, so the conversion was &quot;relatively simple&quot;.  But MTT will be another full-blown conversion (history and Trac and all), and will help us refine the scripts / procedures we used from the hwloc conversion.
<br>
<p>5. After that, the ompi-tests SVN repo is a good target for conversion.  This repo has the property of being private, however, and private repos cost money on github ($300/year is the lowest tier).  We'll have to talk about/figure out who is going to pay for that.
<br>
<p>6. Perhaps by this summer we'll be able to start talking about converting the main OMPI SVN to git.  This repo is, by far, the biggest of the OMPI repos (in terms of number of commits), and will likely take the most time/effort to convert.  We'll also need to talk about:
<br>
<p>- how to handle permissions on release branches (git doesn't have the same kind of directory-based permissions that we do in SVN)
<br>
- end-of-life the bitbucket/hg mirror
<br>
<p>Hope this helps explain the current direction.  Please feel free to reply with questions / comments / offers to help.  :-)
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
<li><strong>Next message:</strong> <a href="4125.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-155-gdf844ff)"</a>
<li><strong>Previous message:</strong> <a href="4123.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-9-g684c027)"</a>
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
