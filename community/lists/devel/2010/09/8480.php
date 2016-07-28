<?
$subject_val = "Re: [OMPI devel] Autogen improvements: ready for blast off";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 09:49:16 2010" -->
<!-- isoreceived="20100913134916" -->
<!-- sent="Mon, 13 Sep 2010 07:49:06 -0600" -->
<!-- isosent="20100913134906" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen improvements: ready for blast off" -->
<!-- id="EB994EFC-ADE2-453D-A5C2-FAF033C4791B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="824EA16F-2ABB-4598-8DEF-4335FB17D23D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Autogen improvements: ready for blast off<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 09:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<li><strong>Previous message:</strong> <a href="8479.php">Jeff Squyres: "[OMPI devel] Updating copyright notices"</a>
<li><strong>In reply to:</strong> <a href="8478.php">Jeff Squyres: "[OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to correct: I will almost certainly not be on this week's call, and will definitely not be on for the next two weeks either.
<br>
<p>A last-minute concern raised by Jeff makes it doubtful this will come into the trunk any time soon, and may see it delayed for more than a year until we are ready for a 1.7 series. Unclear at this time as I don't understand the nature of his concern, and communication is difficult across the globe.
<br>
<p>For now, we can safely table this issue. It isn't coming in anytime soon.
<br>
<p><p>On Sep 12, 2010, at 2:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; (Terry: please add this to the agenda for the Tuesday call -- Ralph will talk about it since I may not be on the call)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph sent a mail a while ago describing improvements to autogen and the build process that Brian, Ralph, and I have been working on.  We think this work is now complete, and would like to bring it back to the SVN trunk.  Here's the bitbucket where this stuff lives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://bitbucket.org/rhc/ompi-agen">http://bitbucket.org/rhc/ompi-agen</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'd like to bring this stuff in to the SVN trunk by the end of the week.  Please examine our changes and/or test the things you care about in the bitbucket.  The SVN commit to the trunk will look large mainly because it makes almost-identical changes in many Makefile.am's and configure.m4's (and we removed all configure.params files).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ********************************************************
</span><br>
<span class="quotelev1">&gt; *** THE MOST IMPORTANT THING DEVELOPERS NEED TO KNOW ***
</span><br>
<span class="quotelev1">&gt; ********************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;IMPORTANT&gt;
</span><br>
<span class="quotelev1">&gt; If your component has a configure.m4 file, it MUST call AC_CONFIG_FILES for your Makefile.am!  (and/or any files that you want configure to generate).  We converted all existing configure.m4 files -- the ompi/mca/btl/tcp/configure.m4 is a nice simple example to see what I mean.
</span><br>
<span class="quotelev1">&gt; &lt;/IMPORTANT&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's some other changes and improvements, but most of them are behind the scenes.  We'll update the relevant wiki pages with all the other details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We understand that Mellanox may have some changes to their local branch of the OMPI build system; it is unknown whether they conflict with our new stuff or not.  Mellanox is out for ~2 weeks for holidays; we'd like to bring this stuff in to the SVN trunk sooner rather than waiting 2 weeks and letting the branch get overly stale.  Of course, when Mellanox does update and get the new stuff, if there are any problems, I'm happy to work through the issues with them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<li><strong>Previous message:</strong> <a href="8479.php">Jeff Squyres: "[OMPI devel] Updating copyright notices"</a>
<li><strong>In reply to:</strong> <a href="8478.php">Jeff Squyres: "[OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Reply:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
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
