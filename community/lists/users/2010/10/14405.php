<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 11:15:13 2010" -->
<!-- isoreceived="20101006151513" -->
<!-- sent="Wed, 6 Oct 2010 11:15:05 -0400" -->
<!-- isosent="20101006151505" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="OF7A8D91F9.274344CE-ON852577B4.004E79AC-852577B4.0053C7AB_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AANLkTimm-piayrG45FeQ0QFQpNm8pXZaHmanqAKBZ0-d_at_mail.gmail.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 11:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14406.php">David Turner: "[OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14404.php">Jeff Squyres: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14403.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you use MPI message passing in your application, the MPI library 
<br>
decides how to deliver the message. The &quot;magic&quot; is simply that when sender 
<br>
process and receiver process are on the same node (shared memory domain) 
<br>
the library uses shared memory to deliver the message from process to 
<br>
process.  When the sender process and receiver process are on different 
<br>
nodes, some interconnect method is used.
<br>
<p>The MPI API does not have any explicit recognition of shared memory. If 
<br>
you are thinking of the MPI 1sided when you mention &quot;MPI-2 shared memory&quot;, 
<br>
we should be clear that MPI 1-sided communication is only vaguely similar 
<br>
to shared memory and only provide access through MPI calls (MPI_Put, 
<br>
MPI_Get and MPI_Aaccumulate) and does not magically created shared memory 
<br>
that you can load/store.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
10/06/2010 10:12 AM
<br>
Subject:
<br>
Re: [OMPI users] Shared memory
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Currently we run a code on a cluster with distributed memory, and this 
<br>
code needs a lot of memory. Part of the data stored in memory is the same 
<br>
for each process, but it is organized as one array - we can split it if 
<br>
necessary. So far no magic occurred for us. What do we need to do to make 
<br>
the magic working?
<br>
<p><p>On Wed, Oct 6, 2010 at 12:43, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; 
<br>
wrote:
<br>
Open MPI will use shared memory to communicate between peers on the sane 
<br>
node - but that's hidden beneath the covers; it's not exposed via the MPI 
<br>
API. You just MPI-send and magic occurs and the receiver gets the 
<br>
message. 
<br>
<p>On Oct 4, 2010, at 11:13 AM, &quot;Andrei Fokau&quot; &lt;andrei.fokau_at_[hidden]&gt; 
<br>
wrote:
<br>
Does OMPI have shared memory capabilities (as it is mentioned in MPI-2)?
<br>
How can I use them?
<br>
<p>On Sat, Sep 25, 2010 at 23:19, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt; 
<br>
wrote:
<br>
Here are some more details about our problem. We use a dozen of 
<br>
4-processor nodes with 8 GB memory on each node. The code we run needs 
<br>
about 3 GB per processor, so we can load only 2 processors out of 4. The 
<br>
vast majority of those 3 GB is the same for each processor and is 
<br>
accessed continuously during calculation. In my original question I wasn't 
<br>
very clear asking about a possibility to use shared memory with Open MPI - 
<br>
in our case we do not need to have a remote access to the data, and it 
<br>
would be sufficient to share memory within each node only.
<br>
<p>Of course, the possibility to access the data remotely (via mmap) is 
<br>
attractive because it would allow to store much larger arrays (up to 10 
<br>
GB) at one remote place, meaning higher accuracy for our calculations. 
<br>
However, I believe that the access time would be too long for the data 
<br>
read so frequently, and therefore the performance would be lost.
<br>
<p>I still hope that some of the subscribers to this mailing list have an 
<br>
experience of using Global Arrays. This library seems to be fine for our 
<br>
case, however I feel that there should be a simpler solution. Open MPI 
<br>
conforms with MPI-2 standard, and the later has a description of shared 
<br>
memory application. Do you see any other way for us to use shared memory 
<br>
(within node) apart of using Global Arrays?
<br>
<p>On Fri, Sep 24, 2010 at 19:03, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
I think the 'middle ground' approach can be simplified even further if
<br>
the data file is in a shared device (e.g. NFS/Samba mount) that can be
<br>
mounted at the same location of the file system tree on all nodes. I
<br>
have never tried it, though and mmap()'ing a non-POSIX compliant file
<br>
system such as Samba might have issues I am unaware of.
<br>
<p>However, I do not see why you should not be able to do this even if
<br>
the file is being written to as long as you call msync() before using
<br>
the mapped pages.
<br>
<p>Durga
<br>
<p><p>On Fri, Sep 24, 2010 at 12:31 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; 
<br>
wrote:
<br>
<span class="quotelev1">&gt; It seems to me there are two extremes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One is that you replicate the data for each process.  This has the
</span><br>
<span class="quotelev1">&gt; disadvantage of consuming lots of memory &quot;unnecessarily.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another extreme is that shared data is distributed over all processes.  
</span><br>
This
<br>
<span class="quotelev1">&gt; has the disadvantage of making at least some of the data less 
</span><br>
accessible,
<br>
<span class="quotelev1">&gt; whether in programming complexity and/or run-time performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not familiar with Global Arrays.  I was somewhat familiar with HPF.  
</span><br>
I
<br>
<span class="quotelev1">&gt; think the natural thing to do with those programming models is to 
</span><br>
distribute
<br>
<span class="quotelev1">&gt; data over all processes, which may relieve the excessive memory 
</span><br>
consumption
<br>
<span class="quotelev1">&gt; you're trying to address but which may also just put you at a different
</span><br>
<span class="quotelev1">&gt; &quot;extreme&quot; of this spectrum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The middle ground I think might make most sense would be to share data 
</span><br>
only
<br>
<span class="quotelev1">&gt; within a node, but to replicate the data for each node.  There are 
</span><br>
probably
<br>
<span class="quotelev1">&gt; multiple ways of doing this -- possibly even GA, I don't know.  One way
</span><br>
<span class="quotelev1">&gt; might be to use one MPI process per node, with OMP multithreading within
</span><br>
<span class="quotelev1">&gt; each process|node.  Or (and I thought this was the solution you were 
</span><br>
looking
<br>
<span class="quotelev1">&gt; for), have some idea which processes are collocal.  Have one process per
</span><br>
<span class="quotelev1">&gt; node create and initialize some shared memory -- mmap, perhaps, or SysV
</span><br>
<span class="quotelev1">&gt; shared memory.  Then, have its peers map the same shared memory into 
</span><br>
their
<br>
<span class="quotelev1">&gt; address spaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You asked what source code changes would be required.  It depends.  If
</span><br>
<span class="quotelev1">&gt; you're going to mmap shared memory in on each node, you need to know 
</span><br>
which
<br>
<span class="quotelev1">&gt; processes are collocal.  If you're willing to constrain how processes 
</span><br>
are
<br>
<span class="quotelev1">&gt; mapped to nodes, this could be easy.  (E.g., &quot;every 4 processes are
</span><br>
<span class="quotelev1">&gt; collocal&quot;.)  If you want to discover dynamically at run time which are
</span><br>
<span class="quotelev1">&gt; collocal, it would be harder.  The mmap stuff could be in a stand-alone
</span><br>
<span class="quotelev1">&gt; function of about a dozen lines.  If the shared area is allocated as one
</span><br>
<span class="quotelev1">&gt; piece, substituting the single malloc() call with a call to your mmap
</span><br>
<span class="quotelev1">&gt; function should be simple.  If you have many malloc()s you're trying to
</span><br>
<span class="quotelev1">&gt; replace, it's harder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrei Fokau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The data are read from a file and processed before calculations begin, 
</span><br>
so I
<br>
<span class="quotelev1">&gt; think that mapping will not work in our case.
</span><br>
<span class="quotelev1">&gt; Global Arrays look promising indeed. As I said, we need to put just a 
</span><br>
part
<br>
<span class="quotelev1">&gt; of data to the shared section. John, do you (or may be other users) have 
</span><br>
an
<br>
<span class="quotelev1">&gt; experience of working with GA?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a>
</span><br>
<span class="quotelev1">&gt; When GA runs with MPI:
</span><br>
<span class="quotelev1">&gt; MPI_Init(..)      ! start MPI
</span><br>
<span class="quotelev1">&gt; GA_Initialize()   ! start global arrays
</span><br>
<span class="quotelev1">&gt; MA_Init(..)       ! start memory allocator
</span><br>
<span class="quotelev1">&gt;    .... do work
</span><br>
<span class="quotelev1">&gt; GA_Terminate()    ! tidy up global arrays
</span><br>
<span class="quotelev1">&gt; MPI_Finalize()    ! tidy up MPI
</span><br>
<span class="quotelev1">&gt;                   ! exit program
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 13:44, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.09.2010 um 13:26 schrieb John Hearns:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 24 September 2010 08:46, Andrei Fokau &lt;andrei.fokau_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We use a C-program which consumes a lot of memory per process (up to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; few
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; GB), 99% of the data being the same for each process. So for us it
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; would be
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; quite reasonable to put that part of data in a shared memory.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.emsl.pnl.gov/docs/global/">http://www.emsl.pnl.gov/docs/global/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this eny help? Apologies if I'm talking through my hat.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was also thinking of this when I read &quot;data in a shared memory&quot; 
</span><br>
(besides
<br>
<span class="quotelev2">&gt;&gt; approaches like <a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>). 
</span><br>
Wasn't
<br>
<span class="quotelev2">&gt;&gt; this also one idea behind &quot;High Performance Fortran&quot; - running in 
</span><br>
parallel
<br>
<span class="quotelev2">&gt;&gt; across nodes even without knowing that it's across nodes at all while
</span><br>
<span class="quotelev2">&gt;&gt; programming and access all data like it's being local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14405/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14406.php">David Turner: "[OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14404.php">Jeff Squyres: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14403.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
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
