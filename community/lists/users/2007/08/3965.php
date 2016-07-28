<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 08:44:17 2007" -->
<!-- isoreceived="20070831124417" -->
<!-- sent="Fri, 31 Aug 2007 08:43:49 -0400" -->
<!-- isosent="20070831124349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch" -->
<!-- id="59E2EF81-CC36-434F-8722-E7376C253F5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 08:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3964.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3970.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2007, at 4:24 PM, Robert Latham wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm presently trying to add lustre support to open-mpi's romio  
</span><br>
<span class="quotelev2">&gt;&gt; using this
</span><br>
<span class="quotelev2">&gt;&gt; patch <a href="http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2">http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2</a>- 
</span><br>
<span class="quotelev2">&gt;&gt; v02.patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It basically applies, only a few C files have been renamed in open- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi, but
</span><br>
<span class="quotelev2">&gt;&gt; the autotools build system gives me headaches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Boy tell me about it (says the guy who's job it is to work on it).
</span><br>
<p>In hindsight, renaming the files may not have been a bit over the  
<br>
top.  We were trying to have strict adherence to our file/symbol  
<br>
prefix internal naming rules to guarantee collision-free code  
<br>
(especially since we're based on plugins).
<br>
<p>But it was very necessary to integrate ROMIO into our autotools setup  
<br>
for reasons too boring to go into here.
<br>
<p>I know that Brian (who has been working with Rob) has mentioned that  
<br>
he has some ideas about simplifying our ROMIO integration, but I  
<br>
don't think he's had any cycles to work on them (which is also why I  
<br>
suspect he has not answered this post, too).
<br>
<p><span class="quotelev2">&gt;&gt; Fine, adding a similar entry for lustre is easy, but now we need  
</span><br>
<span class="quotelev2">&gt;&gt; to define
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_XFS. So where does this come from?
</span><br>
<span class="quotelev2">&gt;&gt; There is romio/romio/Makefile.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know where you got BUILD_XFS.  In MPICH2, we don't use that
</span><br>
<span class="quotelev1">&gt; symbol anywhere.
</span><br>
<span class="quotelev1">&gt;
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
<p>They probably are.
<br>
<p><span class="quotelev2">&gt;&gt; Now lets assume I eventually find the proper autotools files to
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
<p>FWIW, OMPI has strict requirements on the versions of autotools that  
<br>
it uses:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
<br>
<p><span class="quotelev2">&gt;&gt; In principle I would have to distribute a patch that also patches
</span><br>
<span class="quotelev2">&gt;&gt; the auto-generated configure, automake.in, etc files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you understand already, that's untennable.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope the MPICH2 perspective on ROMIO's build system helps a bit, but
</span><br>
<span class="quotelev1">&gt; I think the integration with OpenMPI may have changed things somewhat.
</span><br>
<p>Continual re-integration of ROMIO is definitely a logistics problem  
<br>
that we have not solved.  And it's becoming a bigger problem.  :-(
<br>
<p>Normally, we're quite open to accepting patches to Open MPI to put  
<br>
them into the main distribution to ease the whole &quot;millions of MPI  
<br>
distros&quot; issue, but with ROMIO it becomes quite difficult because we  
<br>
have to source from Argonne's copy.  Trying to manage what patches  
<br>
need to go in is already quite difficult because:
<br>
<p>- ROMIO is not on our release schedule
<br>
- OMPI adds its own integration patches to ROMIO
<br>
- All the OMPI developers have other work to do ;-)
<br>
<p>Adding 3rd party patches in there for something that we already know  
<br>
is complex and understaffed has unfortunately been a low priority.  :-(
<br>
<p>One thing that may make things a little better is that Brian recently  
<br>
integrated some work onto the OMPI trunk that allows ROMIO to be  
<br>
built outside of OMPI.  Hence, if you have a standalone ROMIO, OMPI  
<br>
can use it.  I don't know the details (i.e., if you can still use  
<br>
mpi.h / MPI_Request / MPI_Test / MPI_Wait like you can with the  
<br>
default OMPI ROMIO integration) -- Brian will have to chime in here...
<br>
<p>So I don't know what the real solution is here -- I'm just trying to  
<br>
give some of the OMPI perspective.  Suggestions are welcome.   
<br>
Probably the best solution would be someone to volunteer to actually  
<br>
spend the cycles to maintain ROMIO in Open MPI (I am pretty sure that  
<br>
Brian simply does not have them)...
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
<li><strong>Next message:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3964.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3970.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
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
