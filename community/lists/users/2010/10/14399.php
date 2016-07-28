<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 06:43:06 2010" -->
<!-- isoreceived="20101006104306" -->
<!-- sent="Wed, 6 Oct 2010 06:43:06 -0400" -->
<!-- isosent="20101006104306" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="9A58BA6E-8923-430A-89F5-479EA790453A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTingGAT1eZZRZnoho43ipGAjQYhiMTBOAZFK5Ln-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 06:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14400.php">jody: "[OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Previous message:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14377.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14403.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14403.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI will use shared memory to communicate between peers on the sane node - but that's hidden beneath the covers; it's not exposed via the MPI API. You just MPI-send and magic occurs and the receiver gets the message. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Oct 4, 2010, at 11:13 AM, &quot;Andrei Fokau&quot; &lt;andrei.fokau_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Does OMPI have shared memory capabilities (as it is mentioned in MPI-2)?
</span><br>
<span class="quotelev1">&gt; How can I use them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 25, 2010 at 23:19, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Here are some more details about our problem. We use a dozen of 4-processor nodes with 8 GB memory on each node. The code we run needs about 3 GB per processor, so we can load only 2 processors out of 4. The vast majority of those 3 GB is the same for each processor and is accessed continuously during calculation. In my original question I wasn't very clear asking about a possibility to use shared memory with Open MPI - in our case we do not need to have a remote access to the data, and it would be sufficient to share memory within each node only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, the possibility to access the data remotely (via mmap) is attractive because it would allow to store much larger arrays (up to 10 GB) at one remote place, meaning higher accuracy for our calculations. However, I believe that the access time would be too long for the data read so frequently, and therefore the performance would be lost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still hope that some of the subscribers to this mailing list have an experience of using Global Arrays. This library seems to be fine for our case, however I feel that there should be a simpler solution. Open MPI conforms with MPI-2 standard, and the later has a description of shared memory application. Do you see any other way for us to use shared memory (within node) apart of using Global Arrays?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 19:03, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think the 'middle ground' approach can be simplified even further if
</span><br>
<span class="quotelev1">&gt; the data file is in a shared device (e.g. NFS/Samba mount) that can be
</span><br>
<span class="quotelev1">&gt; mounted at the same location of the file system tree on all nodes. I
</span><br>
<span class="quotelev1">&gt; have never tried it, though and mmap()'ing a non-POSIX compliant file
</span><br>
<span class="quotelev1">&gt; system such as Samba might have issues I am unaware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I do not see why you should not be able to do this even if
</span><br>
<span class="quotelev1">&gt; the file is being written to as long as you call msync() before using
</span><br>
<span class="quotelev1">&gt; the mapped pages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 12:31 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It seems to me there are two extremes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One is that you replicate the data for each process.  This has the
</span><br>
<span class="quotelev2">&gt; &gt; disadvantage of consuming lots of memory &quot;unnecessarily.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another extreme is that shared data is distributed over all processes.  This
</span><br>
<span class="quotelev2">&gt; &gt; has the disadvantage of making at least some of the data less accessible,
</span><br>
<span class="quotelev2">&gt; &gt; whether in programming complexity and/or run-time performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not familiar with Global Arrays.  I was somewhat familiar with HPF.  I
</span><br>
<span class="quotelev2">&gt; &gt; think the natural thing to do with those programming models is to distribute
</span><br>
<span class="quotelev2">&gt; &gt; data over all processes, which may relieve the excessive memory consumption
</span><br>
<span class="quotelev2">&gt; &gt; you're trying to address but which may also just put you at a different
</span><br>
<span class="quotelev2">&gt; &gt; &quot;extreme&quot; of this spectrum.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The middle ground I think might make most sense would be to share data only
</span><br>
<span class="quotelev2">&gt; &gt; within a node, but to replicate the data for each node.  There are probably
</span><br>
<span class="quotelev2">&gt; &gt; multiple ways of doing this -- possibly even GA, I don't know.  One way
</span><br>
<span class="quotelev2">&gt; &gt; might be to use one MPI process per node, with OMP multithreading within
</span><br>
<span class="quotelev2">&gt; &gt; each process|node.  Or (and I thought this was the solution you were looking
</span><br>
<span class="quotelev2">&gt; &gt; for), have some idea which processes are collocal.  Have one process per
</span><br>
<span class="quotelev2">&gt; &gt; node create and initialize some shared memory -- mmap, perhaps, or SysV
</span><br>
<span class="quotelev2">&gt; &gt; shared memory.  Then, have its peers map the same shared memory into their
</span><br>
<span class="quotelev2">&gt; &gt; address spaces.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You asked what source code changes would be required.  It depends.  If
</span><br>
<span class="quotelev2">&gt; &gt; you're going to mmap shared memory in on each node, you need to know which
</span><br>
<span class="quotelev2">&gt; &gt; processes are collocal.  If you're willing to constrain how processes are
</span><br>
<span class="quotelev2">&gt; &gt; mapped to nodes, this could be easy.  (E.g., &quot;every 4 processes are
</span><br>
<span class="quotelev2">&gt; &gt; collocal&quot;.)  If you want to discover dynamically at run time which are
</span><br>
<span class="quotelev2">&gt; &gt; collocal, it would be harder.  The mmap stuff could be in a stand-alone
</span><br>
<span class="quotelev2">&gt; &gt; function of about a dozen lines.  If the shared area is allocated as one
</span><br>
<span class="quotelev2">&gt; &gt; piece, substituting the single malloc() call with a call to your mmap
</span><br>
<span class="quotelev2">&gt; &gt; function should be simple.  If you have many malloc()s you're trying to
</span><br>
<span class="quotelev2">&gt; &gt; replace, it's harder.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrei Fokau wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The data are read from a file and processed before calculations begin, so I
</span><br>
<span class="quotelev2">&gt; &gt; think that mapping will not work in our case.
</span><br>
<span class="quotelev2">&gt; &gt; Global Arrays look promising indeed. As I said, we need to put just a part
</span><br>
<span class="quotelev2">&gt; &gt; of data to the shared section. John, do you (or may be other users) have an
</span><br>
<span class="quotelev2">&gt; &gt; experience of working with GA?
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; When GA runs with MPI:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(..)      ! start MPI
</span><br>
<span class="quotelev2">&gt; &gt; GA_Initialize()   ! start global arrays
</span><br>
<span class="quotelev2">&gt; &gt; MA_Init(..)       ! start memory allocator
</span><br>
<span class="quotelev2">&gt; &gt;    .... do work
</span><br>
<span class="quotelev2">&gt; &gt; GA_Terminate()    ! tidy up global arrays
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize()    ! tidy up MPI
</span><br>
<span class="quotelev2">&gt; &gt;                   ! exit program
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Sep 24, 2010 at 13:44, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 24.09.2010 um 13:26 schrieb John Hearns:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On 24 September 2010 08:46, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; We use a C-program which consumes a lot of memory per process (up to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; few
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; GB), 99% of the data being the same for each process. So for us it
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; would be
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; quite reasonable to put that part of data in a shared memory.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.emsl.pnl.gov/docs/global/">http://www.emsl.pnl.gov/docs/global/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Is this eny help? Apologies if I'm talking through my hat.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was also thinking of this when I read &quot;data in a shared memory&quot; (besides
</span><br>
<span class="quotelev3">&gt; &gt;&gt; approaches like <a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>). Wasn't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this also one idea behind &quot;High Performance Fortran&quot; - running in parallel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; across nodes even without knowing that it's across nodes at all while
</span><br>
<span class="quotelev3">&gt; &gt;&gt; programming and access all data like it's being local.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14400.php">jody: "[OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Previous message:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14377.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14403.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14403.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
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
