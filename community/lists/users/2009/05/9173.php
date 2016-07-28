<?
$subject_val = "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 00:38:40 2009" -->
<!-- isoreceived="20090504043840" -->
<!-- sent="Sun, 3 May 2009 22:38:33 -0600" -->
<!-- isosent="20090504043833" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?" -->
<!-- id="8E272977-EA75-4664-B8B3-04ADFA681EA7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49FBA22D.8020404_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 00:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9174.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9172.php">Le Duy Khanh: "Re: [OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>In reply to:</strong> <a href="9169.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9161.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus -
<br>
<p>Thanks for the info - it pretty much confirms my suspicion.  In 1.3.0  
<br>
and 1.3.1, we configured the glibc memory allocator to not give memory  
<br>
back to the OS.  If most of the allocations are similarly sized or  
<br>
small, this all works out, because the allocator reuses the old  
<br>
allocations.  However, when the allocations are large (like in HPL)  
<br>
and differ in size between allocate / free cycles (like in HPL with  
<br>
different NBs), the allocator has a real hard time reusing old  
<br>
allocations and ends up allocating more and more memory.
<br>
<p>Anyway, we deal with the InfiniBand pinning problem in a different,  
<br>
hopefully less broken, way for 1.3.2 and later, so this particular  
<br>
problem should go away with the upgrade.  If not, please let us know  
<br>
as we're trying to minimize the impact our pin cache has on real  
<br>
applications.  Sometimes, this doesn't work as we intended, which is  
<br>
how we ended up with the issues you ran into.  We were trying to fix a  
<br>
different issue related to linkers that existed in 1.0 - 1.2.x, and  
<br>
did, only to break something else.  1.3.2 takes yet another approach,  
<br>
which we believe is more flexible than both previous approaches.
<br>
<p>Good luck!
<br>
<p>Brian
<br>
<p><p>On May 1, 2009, at 7:30 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for the instant help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried &quot;-mca btl openib,sm,self&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;-mca mpi_leave_pinned 0&quot; together (still with OpenMPI 1.3.1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far so good, it passed through two NB cases/linear system  
</span><br>
<span class="quotelev1">&gt; solutions,
</span><br>
<span class="quotelev1">&gt; it is running the third NB, and the memory use hasn't increased.
</span><br>
<span class="quotelev1">&gt; On the failed runs the second NB already used more memory than the  
</span><br>
<span class="quotelev1">&gt; first, and the third would blow up memory use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the run was bound do fail it would be swapping memory at this  
</span><br>
<span class="quotelev1">&gt; point, and it is not.
</span><br>
<span class="quotelev1">&gt; This is a good sign, I hope I am not speaking too early,
</span><br>
<span class="quotelev1">&gt; but it looks like your suggestion fixed the problem.
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was interesting to observe using Ganglia
</span><br>
<span class="quotelev1">&gt; that on the failed runs the memory use &quot;jumps&quot;
</span><br>
<span class="quotelev1">&gt; happened whenever HPL switched from one NB to another.
</span><br>
<span class="quotelev1">&gt; Every NB transition (i.e., time HPL started to solve a
</span><br>
<span class="quotelev1">&gt; new linear system, and probably generated a new random matrix)
</span><br>
<span class="quotelev1">&gt; the memory use would jump to a (significantly) higher value.
</span><br>
<span class="quotelev1">&gt; Anyway, this is just is in case the info tells you something about  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; might be going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will certainly follow your advice and upgrade to OpenMPI 1.3.2,
</span><br>
<span class="quotelev1">&gt; which I just downloaded.
</span><br>
<span class="quotelev1">&gt; You guys are prolific, a new edition per month! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks!
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gus -
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.3.0 &amp; 1.3.1 attempted to use some controls in the glibc  
</span><br>
<span class="quotelev2">&gt;&gt; malloc implementation to handle memory registration caching for  
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand. Unfortunately, it was not only bugging in that it  
</span><br>
<span class="quotelev2">&gt;&gt; didn't work, but it also has the side effect that certain memory  
</span><br>
<span class="quotelev2">&gt;&gt; usage patterns can cause the memory allocator to use much more  
</span><br>
<span class="quotelev2">&gt;&gt; memory than it normally would.  The configuration options were set  
</span><br>
<span class="quotelev2">&gt;&gt; any time the openib module was loaded, even if it wasn't used in  
</span><br>
<span class="quotelev2">&gt;&gt; communication.  Can you try running with the extra option:
</span><br>
<span class="quotelev2">&gt;&gt;  -mca mpi_leave_pinned 0
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing that will fix the problem.  If you're using  
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand, you probably want to upgrade to 1.3.2, as there are  
</span><br>
<span class="quotelev2">&gt;&gt; known data corruption issues in 1.3.0 and 1.3.1 with openib.
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 1 May 2009, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for the prompt answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for being so confusing on my original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I am saying that the inclusion of openib is causing the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It runs with &quot;sm,self&quot;, it fails with &quot;openib,sm,self&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am as puzzled as you are, because I thought the &quot;openib&quot; parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was simply ignored when running on a single node, exactly like you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; said.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After your message arrived, I ran HPL once more with &quot;openib&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just in case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure enough it failed just as I described.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And yes, all the procs run on a single node in both cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't seem to be a problem caused by a particular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node hardware either, as I already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried three different nodes with similar results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, I successfully ran HPL across the whole cluster two days ago,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with IB (&quot;openib,sm,self&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but using a modest (for the cluster) problem size: N=50,000.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The total cluster memory is 24*16=384GB,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which gives a max HPL problem size N=195,000.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have yet to try the large problem on the whole cluster,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I am afraid I will stumble on the same memory problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally, on your email you use the syntax &quot;btl=openib,sm,self&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with an &quot;=&quot; sign between the btl key and its values.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the mpiexec man page uses the syntax &quot;btl openib,sm,self&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a blank space between the btl key and its values.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been following the man page syntax.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;=&quot; sign doesn't seem to work, and aborts with the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;No executable was specified on the mpiexec command line.&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could this possibly be the issue (say, wrong parsing of mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are running on a single node, then btl=openib,sm,self  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be equivalent to btl=sm,self. OMPI is smart enough to know  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not to use IB if you are on a single node, and instead uses the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared memory subsystem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you saying that the inclusion of openib is causing a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; difference in behavior, even though all procs are on the same  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node??
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just want to ensure I understand the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, May 1, 2009 at 11:16 AM, Gus Correa  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Hi OpenMPI and HPC experts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    This may or may not be the right forum to post this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and I am sorry to bother those that think it is not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I am trying to run the HPL benchmark on our cluster,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    compiling it with Gnu and linking to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    GotoBLAS (1.26) and OpenMPI (1.3.1),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    both also Gnu-compiled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I have got failures that suggest a memory leak when the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    problem size is large, but still within the memory limits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    recommended by HPL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The problem only happens when &quot;openib&quot; is among the OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MCA parameters (and the problem size is large).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Any help is appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Here is a description of what happens.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    For starters I am trying HPL on a single node, to get a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feeling for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    the right parameters (N &amp; NB, P &amp; Q, etc) on dual-socked quad- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    AMD Opteron 2376 &quot;Shanghai&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The HPL recommendation is to use close to 80% of your physical  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    to reach top Gigaflop performance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Our physical memory on a node is 16GB, and this gives a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    N=40,000 to keep the 80% memory use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I tried several block sizes, somewhat correlated to the size  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    processor cache:  NB=64 80 96 128 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    When I run HPL with N=20,000 or smaller all works fine,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and the HPL run completes, regardless of whether &quot;openib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    is present or not on my MCA parameters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    However, moving when I move N=40,000, or even N=35,000,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    the run starts OK with NB=64,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    but as NB is switched to larger values
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    the total memory use increases in jumps (as shown by Ganglia),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and becomes uneven across the processors (as shown by &quot;top&quot;).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The problem happens if &quot;openib&quot; is among the MCA parameters,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    but doesn't happen if I remove &quot;openib&quot; from the MCA list and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    only &quot;sm,self&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    For N=35,000, when NB reaches 96 memory use is already above the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    physical limit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    (16GB), having increased from 12.5GB to over 17GB.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    For N=40,000 the problem happens even earlier, with NB=80.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    At this point memory swapping kicks in,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and eventually the run dies with memory allocation errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    T/V                N    NB     P     Q               Time   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gflops
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    WR01L2L4       35000   128     8     1             539.66  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5.297e+01
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=         
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0043992
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ...... PASSED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    HPL ERROR from process # 0, on line 172 of function HPL_pdtest:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;     &gt;&gt;&gt; [7,0] Memory allocation failed for A, x and b. Skip. &lt;&lt;&lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The code snippet that corresponds to HPL_pdest.c is this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    although the leak is probably somewhere else:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     * Allocate dynamic memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      vptr = (void*)malloc( ( (size_t)(ALGO-&gt;align) +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                              (size_t)(mat.ld+1) * (size_t) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mat.nq) ) *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                            sizeof(double) );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      info[0] = (vptr == NULL); info[1] = myrow; info[2] = mycol;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      (void) HPL_all_reduce( (void *)(info), 3, HPL_INT, HPL_max,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             GRID-&gt;all_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if( info[0] != 0 )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if( ( myrow == 0 ) &amp;&amp; ( mycol == 0 ) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            HPL_pwarn( TEST-&gt;outfp, __LINE__, &quot;HPL_pdtest&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       &quot;[%d,%d] %s&quot;, info[1], info[2],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       &quot;Memory allocation failed for A, x and b.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Skip.&quot; );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (TEST-&gt;kskip)++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I found this continued increase in memory use rather strange,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and suggestive of a memory leak in one of the codes being used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Everything (OpenMPI, GotoBLAS, and HPL)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    was compiled using Gnu only (gcc, gfortran, g++).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I haven't changed anything on the compiler's memory model,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    i.e., I haven't used or changed the &quot;-mcmodel&quot; flag of gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    (I don't know if the Makefiles on HPL, GotoBLAS, and OpenMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use it.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    No additional load is present on the node,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    other than the OS (Linux CentOS 5.2), HPL is running alone.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The cluster has Infiniband.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    However, I am running on a single node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    The surprising thing is that if I run on shared memory only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    (-mca btl sm,self) there is no memory problem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    the memory use is stable at about 13.9GB,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    and the run completes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    So, there is a way around to run on a single node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    (Actually shared memory is presumably the way to go on a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; single node.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    However, if I introduce IB (-mca btl openib,sm,self)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    among the MCA btl parameters, then memory use blows up.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    This is bad news for me, because I want to extend the experiment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    to run HPL also across the whole cluster using IB,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    which is actually the ultimate goal of HPL, of course!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    It also suggests that the problem is somehow related to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Infiniband,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    maybe hidden under OpenMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Here is the mpiexec command I use (with and without openib):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /path/to/openmpi/bin/mpiexec \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           -prefix /the/run/directory \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           -np 8 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           -mca btl [openib,]sm,self \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Any help, insights, suggestions, reports of previous  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; experiences,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    are much appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9174.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9172.php">Le Duy Khanh: "Re: [OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>In reply to:</strong> <a href="9169.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9161.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
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
