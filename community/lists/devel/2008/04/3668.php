<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 13:55:30 2008" -->
<!-- isoreceived="20080405175530" -->
<!-- sent="Sat, 5 Apr 2008 19:55:37 +0200" -->
<!-- isosent="20080405175537" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="200804051955.37519.debian_at_pinguinkiste.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="adahcf3my94.fsf_at_cisco.com" -->
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
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-05 13:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3669.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3667.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Mittwoch, 19. M&#228;rz 2008 00:02:47 schrieb Roland Dreier:
<br>
<span class="quotelev1">&gt; As an ompi bystander, I would strongly endorse a switch away from svn.
</span><br>
<span class="quotelev1">&gt; I think that git, hg and bzr are all roughly equivalent -- they each
</span><br>
<span class="quotelev1">&gt; have their enthusiastic partisans, but in reality they're all probably
</span><br>
<span class="quotelev1">&gt; fine.  And the difference between svn and any of the newer distributed
</span><br>
<span class="quotelev1">&gt; systems, especially for a big codebase like ompi, is pretty huge.
</span><br>
<p>Speaking as an Debian OpenMPI maintainer, I as well endorse a switch away from 
<br>
SVN since it will make package maintainance more easy for us. Most Debian 
<br>
maintainers tend to use git (if they use a DVCS), Ubuntu seems to prefer bzr, 
<br>
but I can't say about others. Of course, you should use the systems you 
<br>
prefer but it may be worth to consider the preferences of distributors. 
<br>
Debian has quite sophisticated tools for packaging for almost all DVCS, so it 
<br>
is not really an issue which one you'll choose from Debian's point of view. 
<br>
(I personally prefer git over all others. I'm a git fan-boy. Don't know 
<br>
Dirk's opinion on that.) I use git for my packaging work on OpenMPI, although 
<br>
we have a SVN repo. ;)
<br>
<p>Anyway, switching away from SVN would ease the work on both sides, since 
<br>
patches/commits can easily merged between our repositories. Features like 
<br>
cherry-picking can be very useful here. Also, git's feature to export/import 
<br>
commits via email helps a lot, as I can tell from experience. Reducing the 
<br>
time to integrate changes/patches is definately worth switching to an DVCS.
<br>
<p>Best regards
<br>
Manuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3669.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3667.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
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
