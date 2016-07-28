<?
$subject_val = "Re: [hwloc-devel] Move to git?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 15:19:22 2013" -->
<!-- isoreceived="20130612191922" -->
<!-- sent="Wed, 12 Jun 2013 19:19:14 +0000" -->
<!-- isosent="20130612191914" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Move to git?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F680139_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51B8B575.6040802_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 15:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3803.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5665)"</a>
<li><strong>Previous message:</strong> <a href="3801.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3801.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Go ahead and push now.
<br>
<p>I started my git discussions with Dave, but haven't finished them yet.  I don't think DongInn has done his part at IU yet.  I think this will take a short while to get done; it won't happen immediately.
<br>
<p><p>On Jun 12, 2013, at 1:52 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you have any svn/git plan in the very near future? I will have a
</span><br>
<span class="quotelev1">&gt; couple fixes to push in the next days. So if you're going to switch to
</span><br>
<span class="quotelev1">&gt; git soon, please let me know, I'll wait and commit later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 04/06/2013 12:14, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Ok.  This is kinda what I assumed your response would be.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me talk to Dave Goodell later today, who just recently went through converting MPICH from SVN -&gt; Git, and see what kinds of things we need to do to get the ball rolling here, and what kinds of dragons we should expect to encounter along the way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 3, 2013, at 11:17 PM, Brice Goglin &lt;brice.goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1000 !!!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I already use git-svn for most of my hwloc work. But I still need svn for backports, and that wastes a lot of my time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're having a discussion (again :-) ) about moving OMPI to a DVCS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The short conclusion of the long conversation is: the OMPI dev community would be much more comfortable moving to a DVCS if they could see some success with other OMPI projects (e.g., hwloc and/or MTT).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would hwloc be interested in moving to git?  This would mean:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. converting the existing svn to git
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; including all historical log messages that refer to &quot;rXXXX&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. converting the existing trac to git
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; including all trac tickets, comments, and wiki pages that refer to &quot;rXXXX&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OMPI devs -- who are mostly unfamiliar with git -- would like to see some close-to-home successes with git over a period of time that don't require heavy administrative maintenance over time (one of the pushback issues was that some organizations have hired full-time people to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maintain/fix git repositories when they break/become unusable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interested?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3803.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5665)"</a>
<li><strong>Previous message:</strong> <a href="3801.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3801.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
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
