<?
$subject_val = "[OMPI devel] Improvements to &quot;mpi_leave_pinned&quot; behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 10:41:57 2009" -->
<!-- isoreceived="20090821144157" -->
<!-- sent="Fri, 21 Aug 2009 10:41:49 -0400" -->
<!-- isosent="20090821144149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Improvements to &amp;quot;mpi_leave_pinned&amp;quot; behavior" -->
<!-- id="63A57AC0-A87C-47E3-983D-8AC19C1389B6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Improvements to &quot;mpi_leave_pinned&quot; behavior<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 10:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6695.php">Jeff Squyres: "[OMPI devel] Fwd: Upgrading of the OSL SVN server and trac"</a>
<li><strong>Previous message:</strong> <a href="6693.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6698.php">Ashley Pittman: "Re: [OMPI devel] Improvements to &quot;mpi_leave_pinned&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="6698.php">Ashley Pittman: "Re: [OMPI devel] Improvements to &quot;mpi_leave_pinned&quot; behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roland has pushed his new Linux &quot;ummunotify&quot; kernel upstream (i.e.,  
<br>
it's in his -next git branch):
<br>
<p><a href="http://git.kernel.org/?p=linux/kernel/git/roland/infiniband.git;a=commit;h=2fadea9acc19674c07ae7a9d90758f4b9b793940">http://git.kernel.org/?p=linux/kernel/git/roland/infiniband.git;a=commit;h=2fadea9acc19674c07ae7a9d90758f4b9b793940</a>
<br>
<p>It's not yet guaranteed that it will be accepted, but it looks good so  
<br>
far.  With some bug fixes from Pasha/Mellanox and Lenny+Mike/Voltaire,  
<br>
I think it's ready for wide-spread testing (I mailed some of you  
<br>
yesterday asking for specific testing).  I'm asking all to give the  
<br>
prototype code a whirl to shake out any remaining design bugs.
<br>
<p>I describe the issue that we're fixing in my new MPI-themed blog:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://blogs.cisco.com/ciscotalk/performance/comments/better_linux_memory_tracking">http://blogs.cisco.com/ciscotalk/performance/comments/better_linux_memory_tracking</a>
<br>
<p>The HG where this OMPI work is being done is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ummunot/">http://bitbucket.org/jsquyres/ummunot/</a>
<br>
<p>You need to have a very recent Linux kernel (2.6.31+) and Roland's  
<br>
umunotify module installed/running.  Build the OMPI HG tree with the  
<br>
&quot;--enable-mca-no-build=memory-ptmalloc2&quot; to disable ptmalloc2 and  
<br>
enable the ummunotify stuff.
<br>
<p>This hack-ish &quot;disable ptmalloc2&quot; step is only necessary while we're  
<br>
shaking out the design issues.  I'm halfway through merging the ummunot 
<br>
+ptmalloc2 code into a new opal/mca/memory component named &quot;linux&quot;.   
<br>
This component will choose at run time whether to use ptmalloc2 or the  
<br>
ummunotify stuff (i.e., the --enable-mca-no-build... step won't be  
<br>
necessary when all is said and done; a default OMPI Linux build will  
<br>
do the Right Things).
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6695.php">Jeff Squyres: "[OMPI devel] Fwd: Upgrading of the OSL SVN server and trac"</a>
<li><strong>Previous message:</strong> <a href="6693.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6698.php">Ashley Pittman: "Re: [OMPI devel] Improvements to &quot;mpi_leave_pinned&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="6698.php">Ashley Pittman: "Re: [OMPI devel] Improvements to &quot;mpi_leave_pinned&quot; behavior"</a>
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
