<?
$subject_val = "[OMPI devel] Mercurial discussion in Chicago";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 16:26:43 2008" -->
<!-- isoreceived="20080430202643" -->
<!-- sent="Wed, 30 Apr 2008 15:26:33 -0500" -->
<!-- isosent="20080430202633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Mercurial discussion in Chicago" -->
<!-- id="F8F89E06-5E45-4236-994B-095A79F4C8E0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Mercurial discussion in Chicago<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-30 16:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3787.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had a good discussion this earlier today about Mercurial.  Here's  
<br>
the conclusions we came to:
<br>
<p>- We're a little nervous about the current state of Mercurial support  
<br>
tools; they seem a little immature at this point (e.g., the Trac  
<br>
Mercurial plugin is kinda weak).  As such, it seems like waiting for a  
<br>
little while before converting seems like a good idea.
<br>
<p>- In the interim, we'll do two things (specific details TBD):
<br>
<p>1. Setup a read-only Mercurial mirror of the OMPI SVN repository.  The  
<br>
general idea is that this could be an &quot;official&quot; Mercurial repo that  
<br>
is a) updated on a regular/automated basis (e.g., every hour or  
<br>
better), and b) is available for read-only to the world.  Commits  
<br>
still have to go through SVN.
<br>
<p>2. Setup an official way for OMPI core members to publish and  
<br>
collaborate on their own Mercurial repositories, probably similar to  
<br>
what is currently available on <a href="http://www.open-mpi.org/hg/">http://www.open-mpi.org/hg/</a>.  This  
<br>
would allow OMPI core members to publish their own &quot;/tmp-public&quot; HG  
<br>
repositories.
<br>
<p>The idea is to get actual, practical experience with Mercurial and be  
<br>
able to take advantage of some of the distributed / branching+merging  
<br>
functionality of Mercurial, build up concrete lists of what we like/ 
<br>
don't like about Mercurial, etc.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3787.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3785.php">Lenny Verkhovsky: "[OMPI devel] Fwd: Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
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
