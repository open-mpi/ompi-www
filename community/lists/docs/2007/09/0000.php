<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 14:30:58 2007" -->
<!-- isoreceived="20070914183058" -->
<!-- sent="Fri, 14 Sep 2007 14:30:44 -0400" -->
<!-- isosent="20070914183044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI docs] Preliminary thoughts" -->
<!-- id="679EAC25-499D-48D5-847F-5110A7BB63BB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46EAD035.20302_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-14 14:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0001.php">Josh Hursey: "Re: [OMPI docs] Preliminary thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0001.php">Josh Hursey: "Re: [OMPI docs] Preliminary thoughts"</a>
<li><strong>Reply:</strong> <a href="0001.php">Josh Hursey: "Re: [OMPI docs] Preliminary thoughts"</a>
<li><strong>Reply:</strong> <a href="0002.php">Richard Friedman: "Re: [OMPI docs] Preliminary thoughts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm moving a thread that Richard and I were having to the list so  
<br>
that it can get archived / be public / etc.
<br>
<p>On Sep 14, 2007, at 2:17 PM, Richard Friedman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Do we want a separate SVN for the OMPI docs themselves, or should  
</span><br>
<span class="quotelev2">&gt;&gt; this stuff be a subdirectory off the main OMPI SVN repository?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Well, if we want to open this up to project members, we should  
</span><br>
<span class="quotelev1">&gt; follow whatever procedures you already have created for projects. I  
</span><br>
<span class="quotelev1">&gt; haven't gotten that far into the OpenMPI community to determine  
</span><br>
<span class="quotelev1">&gt; what's the best approach, but if you have already a way of  
</span><br>
<span class="quotelev1">&gt; differentiating projects, then we should look at this as just  
</span><br>
<span class="quotelev1">&gt; another project.
</span><br>
<p>This probably makes sense.  I think there's one minor drawback to  
<br>
having a separate SVN repo for docs and several benefits:
<br>
<p>1. Drawback: If we make it a separate project (i.e., different SVN  
<br>
repository), we have to do a little integration work when we make  
<br>
Open MPI tarballs.  But this is probably not a huge deal since the  
<br>
process to make an Open MPI tarball is already fully automated.
<br>
<p>2. Benefit: Making a separate SVN repository would make a clean  
<br>
separation between code developer committers and documentation  
<br>
committers.
<br>
<p>3. Benefit: With a separate SVN repository, the docs group can have  
<br>
their own Trac (bug tracking system) and wiki, vs. sharing the Trac/ 
<br>
wiki of the main OMPI developer group.
<br>
<p>The icky thing is that the OMPI group already has a heavily-populated- 
<br>
but-not-public SVN repository named &quot;ompi-docs&quot;.  It's full of  
<br>
academic papers written by the OMPI members (submitted to conferences  
<br>
and journals and the like), etc.  So we can't really use that name  
<br>
for a SVN repository.  ompi-documentation, perhaps?
<br>
<p>Thoughts?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0001.php">Josh Hursey: "Re: [OMPI docs] Preliminary thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0001.php">Josh Hursey: "Re: [OMPI docs] Preliminary thoughts"</a>
<li><strong>Reply:</strong> <a href="0001.php">Josh Hursey: "Re: [OMPI docs] Preliminary thoughts"</a>
<li><strong>Reply:</strong> <a href="0002.php">Richard Friedman: "Re: [OMPI docs] Preliminary thoughts"</a>
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
