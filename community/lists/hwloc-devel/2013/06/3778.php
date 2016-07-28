<?
$subject_val = "Re: [hwloc-devel] Move to git?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 06:23:27 2013" -->
<!-- isoreceived="20130604102327" -->
<!-- sent="Tue, 04 Jun 2013 12:23:22 +0200" -->
<!-- isosent="20130604102322" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Move to git?" -->
<!-- id="51ADC01A.7090502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F658E4E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Move to git?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 06:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3779.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Previous message:</strong> <a href="3777.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3777.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3780.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Reply:</strong> <a href="3780.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Reply:</strong> <a href="3787.php">Nathan Hjelm: "Re: [hwloc-devel] Move to git?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I switched Open-MX and KNEM from SVN to GIT, I basically just
<br>
pushed my git-svn clone. But I had to manually convert some svn
<br>
tags/branches. IIRC, the main reason is that git-svn has a strange way
<br>
to name svn branches in git.
<br>
<p>We may also have to pass --authors-file to git svn clone so that SVN
<br>
logins are converted into proper git author names.
<br>
<p>Brice
<br>
<p><p><p><p>Le 04/06/2013 12:14, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok.  This is kinda what I assumed your response would be.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me talk to Dave Goodell later today, who just recently went through converting MPICH from SVN -&gt; Git, and see what kinds of things we need to do to get the ball rolling here, and what kinds of dragons we should expect to encounter along the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2013, at 11:17 PM, Brice Goglin &lt;brice.goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +1000 !!!!!
</span><br>
<span class="quotelev2">&gt;&gt; I already use git-svn for most of my hwloc work. But I still need svn for backports, and that wastes a lot of my time.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; We're having a discussion (again :-) ) about moving OMPI to a DVCS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The short conclusion of the long conversation is: the OMPI dev community would be much more comfortable moving to a DVCS if they could see some success with other OMPI projects (e.g., hwloc and/or MTT).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would hwloc be interested in moving to git?  This would mean:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. converting the existing svn to git
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; including all historical log messages that refer to &quot;rXXXX&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 2. converting the existing trac to git
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; including all trac tickets, comments, and wiki pages that refer to &quot;rXXXX&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OMPI devs -- who are mostly unfamiliar with git -- would like to see some close-to-home successes with git over a period of time that don't require heavy administrative maintenance over time (one of the pushback issues was that some organizations have hired full-time people to
</span><br>
<span class="quotelev2">&gt;&gt; maintain/fix git repositories when they break/become unusable).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interested?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3779.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Previous message:</strong> <a href="3777.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3777.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3780.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Reply:</strong> <a href="3780.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Reply:</strong> <a href="3787.php">Nathan Hjelm: "Re: [hwloc-devel] Move to git?"</a>
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
