<?
$subject_val = "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 20:00:44 2009" -->
<!-- isoreceived="20090502000044" -->
<!-- sent="Fri, 01 May 2009 20:00:33 -0400" -->
<!-- isosent="20090502000033" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?" -->
<!-- id="49FB8D21.5020007_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7ADD3FA62176CB4588006774C1CCA43B480234_at_ausx3mps336.aus.amer.dell.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 20:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9169.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9167.php">Brian W. Barrett: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>In reply to:</strong> <a href="9161.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jacob
<br>
<p>Thank you very much for the suggestions and insight.
<br>
<p>On an idle node MemFree is about 15599152 kB (14.8GB).
<br>
Applying the &quot;80%&quot; rule to it, I get a problem size N=38,440.
<br>
However, the HPL run fails with the memory leak problem
<br>
even if I use N=35,000,
<br>
with openib among the MCA btl parameters.
<br>
You may have seen another message by Brian Barret explaining a possible
<br>
reason for the problem, and suggesting a workaround.
<br>
I haven't tried it yet, but I will.
<br>
<p>I read about the HPL preference for &quot;square&quot; PxQ processor grids.
<br>
On a single node the fastest runs are 2x4,
<br>
but 1x8 is often times competitive also, coming second or third,
<br>
although it is not &quot;square&quot; at all.
<br>
I would guess this has much to do with
<br>
the physical 2-socket-4-core layout, or not?
<br>
I would also guess that the best processor grid is likely to
<br>
be quite different when the whole cluster is used, right?
<br>
How can one use the 2x4 fastest processor grid layout on a single node
<br>
to infer the fastest processor grid for the cluster?
<br>
<p>The best I got so far was 80% efficiency, less than your &quot;at least 85%&quot;.
<br>
So, I certainly have more work to do.
<br>
<p>GotoBLAS was compiled with Gnu, no special optimization flags,
<br>
other than what the distribution Makefiles already have.
<br>
OpenMPI was also compiled with Gnu, but I used the CFLAGS=FFLAGS=:
<br>
<p>-march=amdfam10 -O3 -finline-functions -funroll-loops -mfpmath=sse
<br>
<p>As I used mpicc and mpif77 to compile HPL, I presume it inherited these
<br>
flags also, right?
<br>
<p>However, I already read comments on other mailing lists
<br>
that &quot;-march=adfam10&quot; is not really the best choice for
<br>
Barcelona (and I wonder if it is for Shanghai),
<br>
although gcc says it tailored for that architecture.
<br>
What &quot;-march&quot; is really the fastest?
<br>
<p>Any suggestions in this area of compilers and optimization?
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>JACOB_LIBERMAN_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For single node runs, don't bother specifying the btl.  Openmpi should select the best option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beyond that, the &quot;80% total RAM&quot; recommendation is misleading. Base your N off the memfree rather than memtotal. IB can reserve quite a bit.  Verify your /etc/security/limits.conf limits allow sufficient locking.  (Try unlimited) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, P should be smaller than Q, and squarer values are recommended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Shanghai, OpenMPI, GotoBLAS expect single node efficiency of a least 85% given decent tuning.  If the distribution continues to look strange, there are more things to check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Jacob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, May 01, 2009 12:17 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] HPL with OpenMPI: Do I have a memory leak?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi OpenMPI and HPC experts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may or may not be the right forum to post this,
</span><br>
<span class="quotelev2">&gt;&gt; and I am sorry to bother those that think it is not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run the HPL benchmark on our cluster,
</span><br>
<span class="quotelev2">&gt;&gt; compiling it with Gnu and linking to
</span><br>
<span class="quotelev2">&gt;&gt; GotoBLAS (1.26) and OpenMPI (1.3.1),
</span><br>
<span class="quotelev2">&gt;&gt; both also Gnu-compiled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have got failures that suggest a memory leak when the
</span><br>
<span class="quotelev2">&gt;&gt; problem size is large, but still within the memory limits
</span><br>
<span class="quotelev2">&gt;&gt; recommended by HPL.
</span><br>
<span class="quotelev2">&gt;&gt; The problem only happens when &quot;openib&quot; is among the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameters (and the problem size is large).
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a description of what happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For starters I am trying HPL on a single node, to get a feeling for
</span><br>
<span class="quotelev2">&gt;&gt; the right parameters (N &amp; NB, P &amp; Q, etc) on dual-socked quad-core
</span><br>
<span class="quotelev2">&gt;&gt; AMD Opteron 2376 &quot;Shanghai&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The HPL recommendation is to use close to 80% of your physical memory,
</span><br>
<span class="quotelev2">&gt;&gt; to reach top Gigaflop performance.
</span><br>
<span class="quotelev2">&gt;&gt; Our physical memory on a node is 16GB, and this gives a problem size
</span><br>
<span class="quotelev2">&gt;&gt; N=40,000 to keep the 80% memory use.
</span><br>
<span class="quotelev2">&gt;&gt; I tried several block sizes, somewhat correlated to the size of the
</span><br>
<span class="quotelev2">&gt;&gt; processor cache:  NB=64 80 96 128 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run HPL with N=20,000 or smaller all works fine,
</span><br>
<span class="quotelev2">&gt;&gt; and the HPL run completes, regardless of whether &quot;openib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; is present or not on my MCA parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, moving when I move N=40,000, or even N=35,000,
</span><br>
<span class="quotelev2">&gt;&gt; the run starts OK with NB=64,
</span><br>
<span class="quotelev2">&gt;&gt; but as NB is switched to larger values
</span><br>
<span class="quotelev2">&gt;&gt; the total memory use increases in jumps (as shown by Ganglia),
</span><br>
<span class="quotelev2">&gt;&gt; and becomes uneven across the processors (as shown by &quot;top&quot;).
</span><br>
<span class="quotelev2">&gt;&gt; The problem happens if &quot;openib&quot; is among the MCA parameters,
</span><br>
<span class="quotelev2">&gt;&gt; but doesn't happen if I remove &quot;openib&quot; from the MCA list and use
</span><br>
<span class="quotelev2">&gt;&gt; only &quot;sm,self&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For N=35,000, when NB reaches 96 memory use is already above the
</span><br>
<span class="quotelev2">&gt;&gt; physical limit
</span><br>
<span class="quotelev2">&gt;&gt; (16GB), having increased from 12.5GB to over 17GB.
</span><br>
<span class="quotelev2">&gt;&gt; For N=40,000 the problem happens even earlier, with NB=80.
</span><br>
<span class="quotelev2">&gt;&gt; At this point memory swapping kicks in,
</span><br>
<span class="quotelev2">&gt;&gt; and eventually the run dies with memory allocation errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; T/V                N    NB     P     Q               Time
</span><br>
<span class="quotelev2">&gt;&gt;    Gflops
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; WR01L2L4       35000   128     8     1             539.66
</span><br>
<span class="quotelev2">&gt;&gt; 5.297e+01
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; ||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=        0.0043992
</span><br>
<span class="quotelev2">&gt;&gt; ...... PASSED
</span><br>
<span class="quotelev2">&gt;&gt; HPL ERROR from process # 0, on line 172 of function HPL_pdtest:
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; [7,0] Memory allocation failed for A, x and b. Skip. &lt;&lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code snippet that corresponds to HPL_pdest.c is this,
</span><br>
<span class="quotelev2">&gt;&gt; although the leak is probably somewhere else:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;   * Allocate dynamic memory
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt;     vptr = (void*)malloc( ( (size_t)(ALGO-&gt;align) +
</span><br>
<span class="quotelev2">&gt;&gt;                             (size_t)(mat.ld+1) * (size_t)(mat.nq) ) *
</span><br>
<span class="quotelev2">&gt;&gt;                           sizeof(double) );
</span><br>
<span class="quotelev2">&gt;&gt;     info[0] = (vptr == NULL); info[1] = myrow; info[2] = mycol;
</span><br>
<span class="quotelev2">&gt;&gt;     (void) HPL_all_reduce( (void *)(info), 3, HPL_INT, HPL_max,
</span><br>
<span class="quotelev2">&gt;&gt;                            GRID-&gt;all_comm );
</span><br>
<span class="quotelev2">&gt;&gt;     if( info[0] != 0 )
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;        if( ( myrow == 0 ) &amp;&amp; ( mycol == 0 ) )
</span><br>
<span class="quotelev2">&gt;&gt;           HPL_pwarn( TEST-&gt;outfp, __LINE__, &quot;HPL_pdtest&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                      &quot;[%d,%d] %s&quot;, info[1], info[2],
</span><br>
<span class="quotelev2">&gt;&gt;                      &quot;Memory allocation failed for A, x and b. Skip.&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;        (TEST-&gt;kskip)++;
</span><br>
<span class="quotelev2">&gt;&gt;        return;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this continued increase in memory use rather strange,
</span><br>
<span class="quotelev2">&gt;&gt; and suggestive of a memory leak in one of the codes being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything (OpenMPI, GotoBLAS, and HPL)
</span><br>
<span class="quotelev2">&gt;&gt; was compiled using Gnu only (gcc, gfortran, g++).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't changed anything on the compiler's memory model,
</span><br>
<span class="quotelev2">&gt;&gt; i.e., I haven't used or changed the &quot;-mcmodel&quot; flag of gcc
</span><br>
<span class="quotelev2">&gt;&gt; (I don't know if the Makefiles on HPL, GotoBLAS, and OpenMPI use it.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No additional load is present on the node,
</span><br>
<span class="quotelev2">&gt;&gt; other than the OS (Linux CentOS 5.2), HPL is running alone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The cluster has Infiniband.
</span><br>
<span class="quotelev2">&gt;&gt; However, I am running on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surprising thing is that if I run on shared memory only
</span><br>
<span class="quotelev2">&gt;&gt; (-mca btl sm,self) there is no memory problem,
</span><br>
<span class="quotelev2">&gt;&gt; the memory use is stable at about 13.9GB,
</span><br>
<span class="quotelev2">&gt;&gt; and the run completes.
</span><br>
<span class="quotelev2">&gt;&gt; So, there is a way around to run on a single node.
</span><br>
<span class="quotelev2">&gt;&gt; (Actually shared memory is presumably the way to go on a single node.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if I introduce IB (-mca btl openib,sm,self)
</span><br>
<span class="quotelev2">&gt;&gt; among the MCA btl parameters, then memory use blows up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is bad news for me, because I want to extend the experiment
</span><br>
<span class="quotelev2">&gt;&gt; to run HPL also across the whole cluster using IB,
</span><br>
<span class="quotelev2">&gt;&gt; which is actually the ultimate goal of HPL, of course!
</span><br>
<span class="quotelev2">&gt;&gt; It also suggests that the problem is somehow related to Infiniband,
</span><br>
<span class="quotelev2">&gt;&gt; maybe hidden under OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the mpiexec command I use (with and without openib):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /path/to/openmpi/bin/mpiexec \
</span><br>
<span class="quotelev2">&gt;&gt;          -prefix /the/run/directory \
</span><br>
<span class="quotelev2">&gt;&gt;          -np 8 \
</span><br>
<span class="quotelev2">&gt;&gt;          -mca btl [openib,]sm,self \
</span><br>
<span class="quotelev2">&gt;&gt;          xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help, insights, suggestions, reports of previous experiences,
</span><br>
<span class="quotelev2">&gt;&gt; are much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9169.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9167.php">Brian W. Barrett: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>In reply to:</strong> <a href="9161.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
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
