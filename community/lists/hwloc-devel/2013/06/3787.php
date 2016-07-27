<?
$subject_val = "Re: [hwloc-devel] Move to git?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 10:06:05 2013" -->
<!-- isoreceived="20130604140605" -->
<!-- sent="Tue, 04 Jun 2013 08:05:36 -0600" -->
<!-- isosent="20130604140536" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Move to git?" -->
<!-- id="58D0A5B5-4DD1-4463-81E5-062496305F54_at_mac.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51ADC01A.7090502_at_inria.fr" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 10:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Previous message:</strong> <a href="3786.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3778.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Reply:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look at svn2git. It takes care of some the the tag/branch naming problems. If you use it make sure to pass the --metadata option to get the git-svn-id's in the commit messages.
<br>
<p>-Nathan
<br>
<p>On Jun 4, 2013, at 4:23 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When I switched Open-MX and KNEM from SVN to GIT, I basically just
</span><br>
<span class="quotelev1">&gt; pushed my git-svn clone. But I had to manually convert some svn
</span><br>
<span class="quotelev1">&gt; tags/branches. IIRC, the main reason is that git-svn has a strange way
</span><br>
<span class="quotelev1">&gt; to name svn branches in git.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We may also have to pass --authors-file to git svn clone so that SVN
</span><br>
<span class="quotelev1">&gt; logins are converted into proper git author names.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Previous message:</strong> <a href="3786.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3778.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Reply:</strong> <a href="3788.php">David Beer: "Re: [hwloc-devel] Move to git?"</a>
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
