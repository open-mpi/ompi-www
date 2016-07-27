<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 13:10:32 2007" -->
<!-- isoreceived="20070906171032" -->
<!-- sent="Thu, 6 Sep 2007 13:10:27 -0400" -->
<!-- isosent="20070906171027" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] First cut at MTT web pages" -->
<!-- id="20070906171026.GU12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2665FE9-5658-4D00-95C0-9205B107752C_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 13:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Ethan Mallove: "[MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Josh Hursey: "Re: [MTT devel] [MTT users]   Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Jeff Squyres: "[MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Jeff Squyres: "Re: [MTT devel] First cut at MTT web pages"</a>
<li><strong>Reply:</strong> <a href="0091.php">Jeff Squyres: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep/06/2007 08:35:01AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I put up a skeleton of the MTT web pages on the OMPI web site, but  
</span><br>
<span class="quotelev1">&gt; didn't link to them from anywhere.  This actually involved changing a  
</span><br>
<span class="quotelev1">&gt; bunch of infrastructure because we published the name /projects/mtt/  
</span><br>
<span class="quotelev1">&gt; in the paper but PLPA was under /software/plpa/.  So I had to move  
</span><br>
<span class="quotelev1">&gt; PLPA to be under /projects/plpa/....etc.  You probably don't care  
</span><br>
<span class="quotelev1">&gt; about the details.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, /projects/mtt/ now exists and has skeleton content.  I even  
</span><br>
<span class="quotelev1">&gt; put up dummy tarballs (that are empty).  Two things to note:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. There are 3 places where I have links to MTT content on the OMPI  
</span><br>
<span class="quotelev1">&gt; web site.  If you are in a personal checkout (i.e., if the first two  
</span><br>
<span class="quotelev1">&gt; chars of REQUEST_URI are &quot;/~&quot;), the links will show up and be noted  
</span><br>
<span class="quotelev1">&gt; with &quot;(FIX)&quot; in red.  If you're on the live OMPI web site, the links  
</span><br>
<span class="quotelev1">&gt; don't show up (yet).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Our OMPI MTT testing results are in /mtt/ -- the MTT project site  
</span><br>
<span class="quotelev1">&gt; is /projects/mtt/.  This actually creates a problem for the left-hand  
</span><br>
<span class="quotelev1">&gt; navigation scheme because it looks at the basename of the subdir to  
</span><br>
<span class="quotelev1">&gt; know when to print the sub-menus.  For example, if you view a  
</span><br>
<span class="quotelev1">&gt; personal checkout and go to /projects/mtt/, you'll see the MTT  
</span><br>
<span class="quotelev1">&gt; project sub-menu listed twice on the left.  I could add a hackaround  
</span><br>
<span class="quotelev1">&gt; in the PHP of the OMPI web site, but thinking about it a little, I  
</span><br>
<span class="quotelev1">&gt; wonder if it would be better to simply move the OMPI MTT testing  
</span><br>
<span class="quotelev1">&gt; results to /testing/ (with an appropriate apache-level redirects left  
</span><br>
<span class="quotelev1">&gt; at /mtt/ so that all old permalinks and whatnot continue to work).   
</span><br>
<p>PHP issues aside, I think having these two is confusing:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/mtt">http://www.open-mpi.org/projects/mtt</a>
<br>
<p>Nothing in the first link indicates test results (that was
<br>
something I liked about &quot;reporter.php&quot; :-)) So yes, I favor 
<br>
renaming mtt/index.php.
<br>
<p><p><span class="quotelev1">&gt; We'll need to get everyone to update their client INI files, though  
</span><br>
<span class="quotelev1">&gt; -- I'm not sure that LWP will understand a POST redirect...?
</span><br>
<p>Can't we move mtt/index.php to mtt/results/index.php or
<br>
mtt/testing/index.php (I prefer &quot;results&quot;), and leave
<br>
mtt/submit/index.php alone?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Ethan Mallove: "[MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Josh Hursey: "Re: [MTT devel] [MTT users]   Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Jeff Squyres: "[MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Jeff Squyres: "Re: [MTT devel] First cut at MTT web pages"</a>
<li><strong>Reply:</strong> <a href="0091.php">Jeff Squyres: "Re: [MTT devel] First cut at MTT web pages"</a>
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
