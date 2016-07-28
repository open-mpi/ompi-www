<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 16:25:01 2007" -->
<!-- isoreceived="20070830202501" -->
<!-- sent="Thu, 30 Aug 2007 15:24:57 -0500" -->
<!-- isosent="20070830202457" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch" -->
<!-- id="20070830202457.GI25905_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fasal5$gfu$1_at_sea.gmane.org" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 16:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3955.php">George Bosilca: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3953.php">Ralph H Castain: "Re: [OMPI users] Circumvent --host or dynamically read host info?"</a>
<li><strong>In reply to:</strong> <a href="3923.php">Bernd Schubert: "[OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3965.php">Jeff Squyres: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Reply:</strong> <a href="3965.php">Jeff Squyres: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Reply:</strong> <a href="3970.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Aug 26, 2007 at 06:44:18PM +0200, Bernd Schubert wrote:
<br>
<span class="quotelev1">&gt; I'm presently trying to add lustre support to open-mpi's romio using this
</span><br>
<span class="quotelev1">&gt; patch <a href="http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2-v02.patch">http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2-v02.patch</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It basically applies, only a few C files have been renamed in open-mpi, but
</span><br>
<span class="quotelev1">&gt; the autotools build system gives me headaches.
</span><br>
<p>Boy tell me about it (says the guy who's job it is to work on it).
<br>
<p><span class="quotelev1">&gt; Fine, adding a similar entry for lustre is easy, but now we need to define
</span><br>
<span class="quotelev1">&gt; BUILD_XFS. So where does this come from?
</span><br>
<span class="quotelev1">&gt; There is romio/romio/Makefile.in 
</span><br>
<p>I don't know where you got BUILD_XFS.  In MPICH2, we don't use that
<br>
symbol anywhere. 
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; BUILD_UFS_FALSE = @BUILD_UFS_FALSE@
</span><br>
<span class="quotelev1">&gt; BUILD_UFS_TRUE = @BUILD_UFS_TRUE@
</span><br>
<span class="quotelev1">&gt; BUILD_XFS_FALSE = @BUILD_XFS_FALSE@
</span><br>
<span class="quotelev1">&gt; BUILD_XFS_TRUE = @BUILD_XFS_TRUE@
</span><br>
<span class="quotelev1">&gt; CC = @CC@
</span><br>
<p>These look like OpenMPI additions.  Perhaps they can chime in.
<br>
<p>In MPICH2-land we build up FILE_SYS_DIRS in configure.in, and then do
<br>
a &quot;for dir in $FILE_SYS_DIRS&quot;, with each directory contributing some
<br>
.o files to the io library.  Hey, it works.
<br>
<p><span class="quotelev1">&gt; Not a single line about filesystems, *grumble*.
</span><br>
<p>Again speaking about MPICH2 land, all fileystem logic (such as it is)
<br>
lives in configure.in.  it's regrettably scattered amongst some
<br>
architecture-specific sections. 
<br>
<p><span class="quotelev1">&gt; Now lets assume I eventually find the proper autotools files to
</span><br>
<span class="quotelev1">&gt; patch lustre support in, how can I distribute that patch? 
</span><br>
<p>Distribute changes to the primary sources.  i.e. fix configure.in or
<br>
Makefile.am and let autotools regenerate the necessary files.
<br>
ROMIO's got an AC_PREREQ in there, so things can't go horribly bad
<br>
<p>(like in the old days when people would try to autoconf ROMIO's
<br>
ancient autoconf-1.7 era configure with autoconf-2.13 -- you heard me.
<br>
You think it's bad now?  Why, back in '00 you were lucky if you ... ok
<br>
you get the idea. i'll quit with the old man bit.)  
<br>
<p><span class="quotelev1">&gt; In principle I would have to distribute a patch that also patches
</span><br>
<span class="quotelev1">&gt; the auto-generated configure, automake.in, etc files. 
</span><br>
<p>As you understand already, that's untennable.
<br>
<p><span class="quotelev1">&gt; Any plans for a sane build system?
</span><br>
<p>I'm not proud of how ROMIO's configure.in has evolved over the years.
<br>
not proud at all.  But I can gaurantee you that the alternatives are
<br>
worse.  Don't speak to me of scons and cmake!  
<br>
<p>I hope the MPICH2 perspective on ROMIO's build system helps a bit, but
<br>
I think the integration with OpenMPI may have changed things somewhat.
<br>
<p>Good luck
<br>
==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3955.php">George Bosilca: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3953.php">Ralph H Castain: "Re: [OMPI users] Circumvent --host or dynamically read host info?"</a>
<li><strong>In reply to:</strong> <a href="3923.php">Bernd Schubert: "[OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3965.php">Jeff Squyres: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Reply:</strong> <a href="3965.php">Jeff Squyres: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Reply:</strong> <a href="3970.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
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
