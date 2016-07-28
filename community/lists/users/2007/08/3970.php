<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 17:00:34 2007" -->
<!-- isoreceived="20070831210034" -->
<!-- sent="Fri, 31 Aug 2007 23:00:08 +0200" -->
<!-- isosent="20070831210008" -->
<!-- name="Bernd Schubert" -->
<!-- email="bernd-schubert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch" -->
<!-- id="fb9vgp$mqt$1_at_sea.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070830202457.GI25905_at_mcs.anl.gov" -->
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
<strong>From:</strong> Bernd Schubert (<em>bernd-schubert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 17:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/3971.php">Corey Putkunz: "[OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Previous message:</strong> <a href="3969.php">Mauricio Vacas: "[OMPI users] MPI Migration"</a>
<li><strong>In reply to:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robert Latham wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, Aug 26, 2007 at 06:44:18PM +0200, Bernd Schubert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm presently trying to add lustre support to open-mpi's romio using this
</span><br>
<span class="quotelev2">&gt;&gt; patch <a href="http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2-v02.patch">http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2-v02.patch</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It basically applies, only a few C files have been renamed in open-mpi,
</span><br>
<span class="quotelev2">&gt;&gt; but the autotools build system gives me headaches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Boy tell me about it (says the guy who's job it is to work on it).
</span><br>
<p>I don't know much about it myself, I only read a discussion about it on the
<br>
lustre mailing list.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fine, adding a similar entry for lustre is easy, but now we need to
</span><br>
<span class="quotelev2">&gt;&gt; define BUILD_XFS. So where does this come from?
</span><br>
<span class="quotelev2">&gt;&gt; There is romio/romio/Makefile.in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know where you got BUILD_XFS.  In MPICH2, we don't use that
</span><br>
<span class="quotelev1">&gt; symbol anywhere.
</span><br>
<p>This was supposed to be BUILD_LUSTRE, taken as example from BUILD_XFS. I was
<br>
a bit overworked that weekend.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_UFS_FALSE = @BUILD_UFS_FALSE@
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_UFS_TRUE = @BUILD_UFS_TRUE@
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_XFS_FALSE = @BUILD_XFS_FALSE@
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_XFS_TRUE = @BUILD_XFS_TRUE@
</span><br>
<span class="quotelev2">&gt;&gt; CC = @CC@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These look like OpenMPI additions.  Perhaps they can chime in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In MPICH2-land we build up FILE_SYS_DIRS in configure.in, and then do
</span><br>
<span class="quotelev1">&gt; a &quot;for dir in $FILE_SYS_DIRS&quot;, with each directory contributing some
</span><br>
<span class="quotelev1">&gt; .o files to the io library.  Hey, it works.
</span><br>
<p>Yes, the patch from ft.ornl.gov also does it that way, well its for mpich2.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not a single line about filesystems, *grumble*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again speaking about MPICH2 land, all fileystem logic (such as it is)
</span><br>
<span class="quotelev1">&gt; lives in configure.in.  it's regrettably scattered amongst some
</span><br>
<span class="quotelev1">&gt; architecture-specific sections.
</span><br>
<p>To make it short, I could get everything to compile and to work (though more
<br>
or less a brute force way), but I'm still not pleased with the performance.
<br>
So far I didn't have the time yet to investigate the reason why the
<br>
performance is still low, though, I suspect openmpi/ofed problems, because
<br>
as long as I run the computations on a single system without
<br>
networking/infiniband the i/o performance is rather good.
<br>
I first need to figure out why writing to nfs-exported lustre is slow and
<br>
then I will care about MPI. Well, I already know the reason for the nfs
<br>
problem, now I need to write a proper patch. I guess I will start to work
<br>
on the MPI problem on Wednesday.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now lets assume I eventually find the proper autotools files to
</span><br>
<span class="quotelev2">&gt;&gt; patch lustre support in, how can I distribute that patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Distribute changes to the primary sources.  i.e. fix configure.in or
</span><br>
<span class="quotelev1">&gt; Makefile.am and let autotools regenerate the necessary files.
</span><br>
<span class="quotelev1">&gt; ROMIO's got an AC_PREREQ in there, so things can't go horribly bad
</span><br>
<p>So I need to write an explanation what to do after applying the patch? Who
<br>
actually reads documentation ;) ?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (like in the old days when people would try to autoconf ROMIO's
</span><br>
<span class="quotelev1">&gt; ancient autoconf-1.7 era configure with autoconf-2.13 -- you heard me.
</span><br>
<span class="quotelev1">&gt; You think it's bad now?  Why, back in '00 you were lucky if you ... ok
</span><br>
<span class="quotelev1">&gt; you get the idea. i'll quit with the old man bit.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In principle I would have to distribute a patch that also patches
</span><br>
<span class="quotelev2">&gt;&gt; the auto-generated configure, automake.in, etc files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you understand already, that's untennable.
</span><br>
<p>Well, the original patch does it that way.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any plans for a sane build system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not proud of how ROMIO's configure.in has evolved over the years.
</span><br>
<span class="quotelev1">&gt; not proud at all.  But I can gaurantee you that the alternatives are
</span><br>
<span class="quotelev1">&gt; worse.  Don't speak to me of scons and cmake!
</span><br>
<p>I would have suggested cmake. Whats so bad about it?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope the MPICH2 perspective on ROMIO's build system helps a bit, but
</span><br>
<span class="quotelev1">&gt; I think the integration with OpenMPI may have changed things somewhat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck
</span><br>
<p>Thanks!
<br>
<p>Cheers,
<br>
Bernd
<br>
<p><p>PS: The patch is here:
<br>
<a href="http://www.pci.uni-heidelberg.de/tc/usr/bernd/downloads/lustre/openmpi/">http://www.pci.uni-heidelberg.de/tc/usr/bernd/downloads/lustre/openmpi/</a>
<br>
<p>Apply it and then run in ompi/mca/io/romio/romio/
<br>
<p>aclocal
<br>
autoheader
<br>
autoconf
<br>
libtoolize --force
<br>
automake -a -c
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/3971.php">Corey Putkunz: "[OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Previous message:</strong> <a href="3969.php">Mauricio Vacas: "[OMPI users] MPI Migration"</a>
<li><strong>In reply to:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
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
