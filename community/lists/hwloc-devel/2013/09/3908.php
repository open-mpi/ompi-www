<?
$subject_val = "Re: [hwloc-devel] commit messages";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 08:24:03 2013" -->
<!-- isoreceived="20130928122403" -->
<!-- sent="Sat, 28 Sep 2013 14:23:59 +0200" -->
<!-- isosent="20130928122359" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] commit messages" -->
<!-- id="5246CA5F.8010508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8F810A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] commit messages<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 08:23:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3909.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Previous message:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>In reply to:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3909.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Reply:</strong> <a href="3909.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't login on Trac. Requested a new password, doesn't work either.
<br>
<p>Brice
<br>
<p><p>Le 28/09/2013 14:19, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; This sounds good.  Can you add this to the trac wiki?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (e.g., MPICH did something like this when they converted to git)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2013, at 8:15 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's discuss some rules for commit messages. I used svn propedit often
</span><br>
<span class="quotelev2">&gt;&gt; in the past, that's not possible anymore once pushed to the main git repo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Obviously we should follow the commit log convention:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; one short line description (less than 80 chars)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;blank line&gt;
</span><br>
<span class="quotelev2">&gt;&gt; full description
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) When backporting patches between public branches, use git cherry-pick
</span><br>
<span class="quotelev2">&gt;&gt; *-x* so that the old commit ID is recorded is the new commit log. If
</span><br>
<span class="quotelev2">&gt;&gt; you're working in your private branches, this may not be needed (if the
</span><br>
<span class="quotelev2">&gt;&gt; old commit ID may change before you actually push it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Configure your username and email properly before commtting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; git config user.email &lt;foo_at_bar&gt;
</span><br>
<span class="quotelev2">&gt;&gt; git config user.name &quot;First Last&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This goes into .git/config. Add --global to make these global for all
</span><br>
<span class="quotelev2">&gt;&gt; your git repos (goes into ~/.gitconfig)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What else?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3909.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Previous message:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>In reply to:</strong> <a href="3907.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3909.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
<li><strong>Reply:</strong> <a href="3909.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] commit messages"</a>
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
