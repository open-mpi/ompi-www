<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 14:35:22 2007" -->
<!-- isoreceived="20070914183522" -->
<!-- sent="Fri, 14 Sep 2007 14:35:18 -0400" -->
<!-- isosent="20070914183518" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Preliminary thoughts" -->
<!-- id="1736E502-156D-4A93-B5CA-7E009CB8D499_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="679EAC25-499D-48D5-847F-5110A7BB63BB_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-14 14:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Richard Friedman: "Re: [OMPI docs] Preliminary thoughts"</a>
<li><strong>Previous message:</strong> <a href="0000.php">Jeff Squyres: "[OMPI docs] Preliminary thoughts"</a>
<li><strong>In reply to:</strong> <a href="0000.php">Jeff Squyres: "[OMPI docs] Preliminary thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0002.php">Richard Friedman: "Re: [OMPI docs] Preliminary thoughts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>There is already a svn repository called 'ompi-design' that contains  
<br>
some starter docs that haven't been touched [LAM/MPI user guide latex  
<br>
infrastructure]. This repository was created a little over a year  
<br>
ago, but I think I'm the only one that has used it (for some brief  
<br>
checkpoint/restart documentation).
<br>
<p>We could clean that repository out, and change permissions on it if  
<br>
folks wanted.
<br>
<p>Just a thought,
<br>
Josh
<br>
<p>On Sep 14, 2007, at 2:30 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm moving a thread that Richard and I were having to the list so
</span><br>
<span class="quotelev1">&gt; that it can get archived / be public / etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2007, at 2:17 PM, Richard Friedman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we want a separate SVN for the OMPI docs themselves, or should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this stuff be a subdirectory off the main OMPI SVN repository?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, if we want to open this up to project members, we should
</span><br>
<span class="quotelev2">&gt;&gt; follow whatever procedures you already have created for projects. I
</span><br>
<span class="quotelev2">&gt;&gt; haven't gotten that far into the OpenMPI community to determine
</span><br>
<span class="quotelev2">&gt;&gt; what's the best approach, but if you have already a way of
</span><br>
<span class="quotelev2">&gt;&gt; differentiating projects, then we should look at this as just
</span><br>
<span class="quotelev2">&gt;&gt; another project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This probably makes sense.  I think there's one minor drawback to
</span><br>
<span class="quotelev1">&gt; having a separate SVN repo for docs and several benefits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Drawback: If we make it a separate project (i.e., different SVN
</span><br>
<span class="quotelev1">&gt; repository), we have to do a little integration work when we make
</span><br>
<span class="quotelev1">&gt; Open MPI tarballs.  But this is probably not a huge deal since the
</span><br>
<span class="quotelev1">&gt; process to make an Open MPI tarball is already fully automated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Benefit: Making a separate SVN repository would make a clean
</span><br>
<span class="quotelev1">&gt; separation between code developer committers and documentation
</span><br>
<span class="quotelev1">&gt; committers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Benefit: With a separate SVN repository, the docs group can have
</span><br>
<span class="quotelev1">&gt; their own Trac (bug tracking system) and wiki, vs. sharing the Trac/
</span><br>
<span class="quotelev1">&gt; wiki of the main OMPI developer group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The icky thing is that the OMPI group already has a heavily-populated-
</span><br>
<span class="quotelev1">&gt; but-not-public SVN repository named &quot;ompi-docs&quot;.  It's full of
</span><br>
<span class="quotelev1">&gt; academic papers written by the OMPI members (submitted to conferences
</span><br>
<span class="quotelev1">&gt; and journals and the like), etc.  So we can't really use that name
</span><br>
<span class="quotelev1">&gt; for a SVN repository.  ompi-documentation, perhaps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
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
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Richard Friedman: "Re: [OMPI docs] Preliminary thoughts"</a>
<li><strong>Previous message:</strong> <a href="0000.php">Jeff Squyres: "[OMPI docs] Preliminary thoughts"</a>
<li><strong>In reply to:</strong> <a href="0000.php">Jeff Squyres: "[OMPI docs] Preliminary thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0002.php">Richard Friedman: "Re: [OMPI docs] Preliminary thoughts"</a>
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
