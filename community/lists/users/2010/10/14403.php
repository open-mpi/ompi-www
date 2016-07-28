<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 10:09:24 2010" -->
<!-- isoreceived="20101006140924" -->
<!-- sent="Wed, 6 Oct 2010 16:08:33 +0200" -->
<!-- isosent="20101006140833" -->
<!-- name="Andrei Fokau" -->
<!-- email="andrei.fokau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="AANLkTimm-piayrG45FeQ0QFQpNm8pXZaHmanqAKBZ0-d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A58BA6E-8923-430A-89F5-479EA790453A_at_cisco.com" -->
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
<strong>From:</strong> Andrei Fokau (<em>andrei.fokau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 10:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14404.php">Jeff Squyres: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14402.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14399.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14405.php">Richard Treumann: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14405.php">Richard Treumann: "Re: [OMPI users] Shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently we run a code on a cluster with distributed memory, and this code
<br>
needs a lot of memory. Part of the data stored in memory is the same for
<br>
each process, but it is organized as one array - we can split it if
<br>
necessary. So far no magic occurred for us. What do we need to do to make
<br>
the magic working?
<br>
<p><p>On Wed, Oct 6, 2010 at 12:43, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI will use shared memory to communicate between peers on the sane
</span><br>
<span class="quotelev1">&gt; node - but that's hidden beneath the covers; it's not exposed via the MPI
</span><br>
<span class="quotelev1">&gt; API. You just MPI-send and magic occurs and the receiver gets the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2010, at 11:13 AM, &quot;Andrei Fokau&quot; &lt;andrei.fokau_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does OMPI have shared memory capabilities (as it is mentioned in MPI-2)?
</span><br>
<span class="quotelev1">&gt; How can I use them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 25, 2010 at 23:19, Andrei Fokau &lt;&lt;andrei.fokau_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; andrei.fokau_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are some more details about our problem. We use a dozen of
</span><br>
<span class="quotelev2">&gt;&gt; 4-processor nodes with 8 GB memory on each node. The code we run needs about
</span><br>
<span class="quotelev2">&gt;&gt; 3 GB per processor, so we can load only 2 processors out of 4. The vast
</span><br>
<span class="quotelev2">&gt;&gt; majority of those 3 GB is the same for each processor and is
</span><br>
<span class="quotelev2">&gt;&gt; accessed continuously during calculation. In my original question I wasn't
</span><br>
<span class="quotelev2">&gt;&gt; very clear asking about a possibility to use shared memory with Open MPI -
</span><br>
<span class="quotelev2">&gt;&gt; in our case we do not need to have a remote access to the data, and it
</span><br>
<span class="quotelev2">&gt;&gt; would be sufficient to share memory within each node only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, the possibility to access the data remotely (via mmap) is
</span><br>
<span class="quotelev2">&gt;&gt; attractive because it would allow to store much larger arrays (up to 10 GB)
</span><br>
<span class="quotelev2">&gt;&gt; at one remote place, meaning higher accuracy for our calculations. However,
</span><br>
<span class="quotelev2">&gt;&gt; I believe that the access time would be too long for the data read so
</span><br>
<span class="quotelev2">&gt;&gt; frequently, and therefore the performance would be lost.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I still hope that some of the subscribers to this mailing list have an
</span><br>
<span class="quotelev2">&gt;&gt; experience of using Global Arrays. This library seems to be fine for our
</span><br>
<span class="quotelev2">&gt;&gt; case, however I feel that there should be a simpler solution. Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; conforms with MPI-2 standard, and the later has a description of shared
</span><br>
<span class="quotelev2">&gt;&gt; memory application. Do you see any other way for us to use shared memory
</span><br>
<span class="quotelev2">&gt;&gt; (within node) apart of using Global Arrays?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 24, 2010 at 19:03, Durga Choudhury &lt; &lt;dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the 'middle ground' approach can be simplified even further if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the data file is in a shared device (e.g. NFS/Samba mount) that can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mounted at the same location of the file system tree on all nodes. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have never tried it, though and mmap()'ing a non-POSIX compliant file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system such as Samba might have issues I am unaware of.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I do not see why you should not be able to do this even if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the file is being written to as long as you call msync() before using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mapped pages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Sep 24, 2010 at 12:31 PM, Eugene Loh &lt; &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It seems to me there are two extremes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; One is that you replicate the data for each process.  This has the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; disadvantage of consuming lots of memory &quot;unnecessarily.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Another extreme is that shared data is distributed over all processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; has the disadvantage of making at least some of the data less
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accessible,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; whether in programming complexity and/or run-time performance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm not familiar with Global Arrays.  I was somewhat familiar with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPF.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; think the natural thing to do with those programming models is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribute
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; data over all processes, which may relieve the excessive memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consumption
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; you're trying to address but which may also just put you at a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;extreme&quot; of this spectrum.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The middle ground I think might make most sense would be to share data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; within a node, but to replicate the data for each node.  There are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; multiple ways of doing this -- possibly even GA, I don't know.  One way
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; might be to use one MPI process per node, with OMP multithreading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; within
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; each process|node.  Or (and I thought this was the solution you were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for), have some idea which processes are collocal.  Have one process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; node create and initialize some shared memory -- mmap, perhaps, or SysV
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; shared memory.  Then, have its peers map the same shared memory into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; address spaces.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; You asked what source code changes would be required.  It depends.  If
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; you're going to mmap shared memory in on each node, you need to know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; processes are collocal.  If you're willing to constrain how processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mapped to nodes, this could be easy.  (E.g., &quot;every 4 processes are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; collocal&quot;.)  If you want to discover dynamically at run time which are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; collocal, it would be harder.  The mmap stuff could be in a stand-alone
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; function of about a dozen lines.  If the shared area is allocated as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; piece, substituting the single malloc() call with a call to your mmap
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; function should be simple.  If you have many malloc()s you're trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; replace, it's harder.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Andrei Fokau wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The data are read from a file and processed before calculations begin,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; think that mapping will not work in our case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Global Arrays look promising indeed. As I said, we need to put just a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; part
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; of data to the shared section. John, do you (or may be other users)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have an
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; experience of working with GA?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &lt;<a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; When GA runs with MPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Init(..)      ! start MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; GA_Initialize()   ! start global arrays
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MA_Init(..)       ! start memory allocator
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    .... do work
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; GA_Terminate()    ! tidy up global arrays
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Finalize()    ! tidy up MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;                   ! exit program
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Fri, Sep 24, 2010 at 13:44, Reuti &lt; &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Am 24.09.2010 um 13:26 schrieb John Hearns:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt; &gt; On 24 September 2010 08:46, Andrei Fokau &lt;&lt;andrei.fokau_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; andrei.fokau_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &gt;&gt; &gt;&gt; We use a C-program which consumes a lot of memory per process (up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &gt;&gt; &gt;&gt; few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &gt;&gt; &gt;&gt; GB), 99% of the data being the same for each process. So for us it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &gt;&gt; &gt;&gt; would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &gt;&gt; &gt;&gt; quite reasonable to put that part of data in a shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt; &gt; &lt;<a href="http://www.emsl.pnl.gov/docs/global/">http://www.emsl.pnl.gov/docs/global/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.emsl.pnl.gov/docs/global/">http://www.emsl.pnl.gov/docs/global/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt; &gt; Is this eny help? Apologies if I'm talking through my hat.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I was also thinking of this when I read &quot;data in a shared memory&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (besides
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; approaches like &lt;<a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>). Wasn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; this also one idea behind &quot;High Performance Fortran&quot; - running in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; across nodes even without knowing that it's across nodes at all while
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; programming and access all data like it's being local.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14404.php">Jeff Squyres: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14402.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14399.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14405.php">Richard Treumann: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14405.php">Richard Treumann: "Re: [OMPI users] Shared memory"</a>
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
