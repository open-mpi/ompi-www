<?
$subject_val = "[hwloc-devel] commit messages";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 08:15:41 2013" -->
<!-- isoreceived="20130928121541" -->
<!-- sent="Sat, 28 Sep 2013 14:15:38 +0200" -->
<!-- isosent="20130928121538" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] commit messages" -->
<!-- id="5246C86A.3010709_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] commit messages<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 08:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Previous message:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Reply:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's discuss some rules for commit messages. I used svn propedit often
<br>
in the past, that's not possible anymore once pushed to the main git repo.
<br>
<p>1) Obviously we should follow the commit log convention:
<br>
<p>one short line description (less than 80 chars)
<br>
&lt;blank line&gt;
<br>
full description
<br>
<p><p>2) When backporting patches between public branches, use git cherry-pick
<br>
*-x* so that the old commit ID is recorded is the new commit log. If
<br>
you're working in your private branches, this may not be needed (if the
<br>
old commit ID may change before you actually push it).
<br>
<p>3) Configure your username and email properly before commtting.
<br>
<p>git config user.email &lt;foo_at_bar&gt;
<br>
git config user.name &quot;First Last&quot;
<br>
<p>This goes into .git/config. Add --global to make these global for all
<br>
your git repos (goes into ~/.gitconfig)
<br>
<p>What else?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Previous message:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Reply:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
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
