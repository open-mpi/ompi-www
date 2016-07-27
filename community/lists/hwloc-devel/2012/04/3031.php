<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 10:58:54 2012" -->
<!-- isoreceived="20120425145854" -->
<!-- sent="Wed, 25 Apr 2012 16:58:48 +0200" -->
<!-- isosent="20120425145848" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="20120425145848.GT29782_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1403380533.108647.1335365723352.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo-nox strikes back<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 10:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3030.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe in reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3033.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3033.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 25 Apr 2012 16:55:23 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 10:48 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW: Having lstopo plugins for output would obviate the need for having two executable names.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, it seems overkill to me.  It makes sense to me to have both
</span><br>
<span class="quotelev2">&gt; &gt; xlstopo and lstopo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ick.  FWIW, I dislike having two executables.  I like having one executable that can adapt itself to whatever is loaded / available on the system.  :-)
</span><br>
<p>It already adapts itself, here.  The issue is that the user has to
<br>
install an X version to get potential for X support.  Which brings X.
<br>
If you do this with plugins, and you want automatic adaptation to
<br>
whether X is there, you'll have to install the plugin (it can't install
<br>
itself magically). And then that brings X too...
<br>
<p><span class="quotelev1">&gt; But if I'm in the minority, no problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I'm not, I can work on a patch to see if it would be horribly disruptive...
</span><br>
<p>It would most probably not be, we already use a backend style, so it's a
<br>
matter of putting the code in separate plugins.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3030.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe in reply to:</strong> <a href="3022.php">Brice Goglin: "[hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3033.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3033.php">Jeff Squyres: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
