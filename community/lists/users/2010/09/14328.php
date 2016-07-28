<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 13:03:13 2010" -->
<!-- isoreceived="20100924170313" -->
<!-- sent="Fri, 24 Sep 2010 13:03:08 -0400" -->
<!-- isosent="20100924170308" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="AANLkTinvirkACgPKRM1hVxNWCp3nEj1TJb2xbLFpDfsP_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C9CD255.6080501_at_oracle.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 13:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14329.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14327.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14326.php">Eugene Loh: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14331.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14331.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><p>On Fri, Sep 24, 2010 at 12:31 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It seems to me there are two extremes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One is that you replicate the data for each process.&#160; This has the
</span><br>
<span class="quotelev1">&gt; disadvantage of consuming lots of memory &quot;unnecessarily.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another extreme is that shared data is distributed over all processes.&#160; This
</span><br>
<span class="quotelev1">&gt; has the disadvantage of making at least some of the data less accessible,
</span><br>
<span class="quotelev1">&gt; whether in programming complexity and/or run-time performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not familiar with Global Arrays.&#160; I was somewhat familiar with HPF.&#160; I
</span><br>
<span class="quotelev1">&gt; think the natural thing to do with those programming models is to distribute
</span><br>
<span class="quotelev1">&gt; data over all processes, which may relieve the excessive memory consumption
</span><br>
<span class="quotelev1">&gt; you're trying to address but which may also just put you at a different
</span><br>
<span class="quotelev1">&gt; &quot;extreme&quot; of this spectrum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The middle ground I think might make most sense would be to share data only
</span><br>
<span class="quotelev1">&gt; within a node, but to replicate the data for each node.&#160; There are probably
</span><br>
<span class="quotelev1">&gt; multiple ways of doing this -- possibly even GA, I don't know.&#160; One way
</span><br>
<span class="quotelev1">&gt; might be to use one MPI process per node, with OMP multithreading within
</span><br>
<span class="quotelev1">&gt; each process|node.&#160; Or (and I thought this was the solution you were looking
</span><br>
<span class="quotelev1">&gt; for), have some idea which processes are collocal.&#160; Have one process per
</span><br>
<span class="quotelev1">&gt; node create and initialize some shared memory -- mmap, perhaps, or SysV
</span><br>
<span class="quotelev1">&gt; shared memory.&#160; Then, have its peers map the same shared memory into their
</span><br>
<span class="quotelev1">&gt; address spaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You asked what source code changes would be required.&#160; It depends.&#160; If
</span><br>
<span class="quotelev1">&gt; you're going to mmap shared memory in on each node, you need to know which
</span><br>
<span class="quotelev1">&gt; processes are collocal.&#160; If you're willing to constrain how processes are
</span><br>
<span class="quotelev1">&gt; mapped to nodes, this could be easy.&#160; (E.g., &quot;every 4 processes are
</span><br>
<span class="quotelev1">&gt; collocal&quot;.)&#160; If you want to discover dynamically at run time which are
</span><br>
<span class="quotelev1">&gt; collocal, it would be harder.&#160; The mmap stuff could be in a stand-alone
</span><br>
<span class="quotelev1">&gt; function of about a dozen lines.&#160; If the shared area is allocated as one
</span><br>
<span class="quotelev1">&gt; piece, substituting the single malloc() call with a call to your mmap
</span><br>
<span class="quotelev1">&gt; function should be simple.&#160; If you have many malloc()s you're trying to
</span><br>
<span class="quotelev1">&gt; replace, it's harder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrei Fokau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The data are read from a file and processed before calculations begin, so I
</span><br>
<span class="quotelev1">&gt; think that mapping will not work in our case.
</span><br>
<span class="quotelev1">&gt; Global Arrays look promising indeed. As I said, we need to put just a part
</span><br>
<span class="quotelev1">&gt; of data to the shared section. John, do you (or may be other users) have an
</span><br>
<span class="quotelev1">&gt; experience of working with GA?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a>
</span><br>
<span class="quotelev1">&gt; When GA runs with MPI:
</span><br>
<span class="quotelev1">&gt; MPI_Init(..) &#160; &#160; &#160;! start MPI
</span><br>
<span class="quotelev1">&gt; GA_Initialize() &#160; ! start global arrays
</span><br>
<span class="quotelev1">&gt; MA_Init(..) &#160; &#160; &#160; ! start memory allocator
</span><br>
<span class="quotelev1">&gt; &#160;&#160; .... do work
</span><br>
<span class="quotelev1">&gt; GA_Terminate() &#160; &#160;! tidy up global arrays
</span><br>
<span class="quotelev1">&gt; MPI_Finalize() &#160; &#160;! tidy up MPI
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;! exit program
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 13:44, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.09.2010 um 13:26 schrieb John Hearns:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 24 September 2010 08:46, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt;
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
<span class="quotelev2">&gt;&gt; I was also thinking of this when I read &quot;data in a shared memory&quot; (besides
</span><br>
<span class="quotelev2">&gt;&gt; approaches like <a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>). Wasn't
</span><br>
<span class="quotelev2">&gt;&gt; this also one idea behind &quot;High Performance Fortran&quot; - running in parallel
</span><br>
<span class="quotelev2">&gt;&gt; across nodes even without knowing that it's across nodes at all while
</span><br>
<span class="quotelev2">&gt;&gt; programming and access all data like it's being local.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14329.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14327.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14326.php">Eugene Loh: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14331.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14331.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
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
