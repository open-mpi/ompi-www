<?
$subject_val = "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 21:30:30 2009" -->
<!-- isoreceived="20090502013030" -->
<!-- sent="Fri, 01 May 2009 21:30:21 -0400" -->
<!-- isosent="20090502013021" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?" -->
<!-- id="49FBA22D.8020404_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.1.10.0905011723380.20741_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2009-05-01 21:30:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9170.php">Le Duy Khanh: "[OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>Previous message:</strong> <a href="9168.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Brian W. Barrett: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9170.php">Le Duy Khanh: "[OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>Reply:</strong> <a href="9170.php">Le Duy Khanh: "[OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>Reply:</strong> <a href="9173.php">Brian Barrett: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
<p>Thank you very much for the instant help!
<br>
<p>I just tried &quot;-mca btl openib,sm,self&quot; and
<br>
&quot;-mca mpi_leave_pinned 0&quot; together (still with OpenMPI 1.3.1).
<br>
<p>So far so good, it passed through two NB cases/linear system solutions,
<br>
it is running the third NB, and the memory use hasn't increased.
<br>
On the failed runs the second NB already used more memory than the 
<br>
first, and the third would blow up memory use.
<br>
<p>If the run was bound do fail it would be swapping memory at this point, 
<br>
and it is not.
<br>
This is a good sign, I hope I am not speaking too early,
<br>
but it looks like your suggestion fixed the problem.
<br>
Thanks!
<br>
<p>It was interesting to observe using Ganglia
<br>
that on the failed runs the memory use &quot;jumps&quot;
<br>
happened whenever HPL switched from one NB to another.
<br>
Every NB transition (i.e., time HPL started to solve a
<br>
new linear system, and probably generated a new random matrix)
<br>
the memory use would jump to a (significantly) higher value.
<br>
Anyway, this is just is in case the info tells you something about what
<br>
might be going on.
<br>
<p>I will certainly follow your advice and upgrade to OpenMPI 1.3.2,
<br>
which I just downloaded.
<br>
You guys are prolific, a new edition per month! :)
<br>
<p>Many thanks!
<br>
Gus Correa
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; Gus -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.3.0 &amp; 1.3.1 attempted to use some controls in the glibc 
</span><br>
<span class="quotelev1">&gt; malloc implementation to handle memory registration caching for 
</span><br>
<span class="quotelev1">&gt; InfiniBand. Unfortunately, it was not only bugging in that it didn't 
</span><br>
<span class="quotelev1">&gt; work, but it also has the side effect that certain memory usage patterns 
</span><br>
<span class="quotelev1">&gt; can cause the memory allocator to use much more memory than it normally 
</span><br>
<span class="quotelev1">&gt; would.  The configuration options were set any time the openib module 
</span><br>
<span class="quotelev1">&gt; was loaded, even if it wasn't used in communication.  Can you try 
</span><br>
<span class="quotelev1">&gt; running with the extra option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   -mca mpi_leave_pinned 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing that will fix the problem.  If you're using InfiniBand, you 
</span><br>
<span class="quotelev1">&gt; probably want to upgrade to 1.3.2, as there are known data corruption 
</span><br>
<span class="quotelev1">&gt; issues in 1.3.0 and 1.3.1 with openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 1 May 2009, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for the prompt answer.
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for being so confusing on my original message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I am saying that the inclusion of openib is causing the difference
</span><br>
<span class="quotelev2">&gt;&gt; in behavior.
</span><br>
<span class="quotelev2">&gt;&gt; It runs with &quot;sm,self&quot;, it fails with &quot;openib,sm,self&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; I am as puzzled as you are, because I thought the &quot;openib&quot; parameter
</span><br>
<span class="quotelev2">&gt;&gt; was simply ignored when running on a single node, exactly like you said.
</span><br>
<span class="quotelev2">&gt;&gt; After your message arrived, I ran HPL once more with &quot;openib&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; just in case.
</span><br>
<span class="quotelev2">&gt;&gt; Sure enough it failed just as I described.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And yes, all the procs run on a single node in both cases.
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't seem to be a problem caused by a particular
</span><br>
<span class="quotelev2">&gt;&gt; node hardware either, as I already
</span><br>
<span class="quotelev2">&gt;&gt; tried three different nodes with similar results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I successfully ran HPL across the whole cluster two days ago,
</span><br>
<span class="quotelev2">&gt;&gt; with IB (&quot;openib,sm,self&quot;),
</span><br>
<span class="quotelev2">&gt;&gt; but using a modest (for the cluster) problem size: N=50,000.
</span><br>
<span class="quotelev2">&gt;&gt; The total cluster memory is 24*16=384GB,
</span><br>
<span class="quotelev2">&gt;&gt; which gives a max HPL problem size N=195,000.
</span><br>
<span class="quotelev2">&gt;&gt; I have yet to try the large problem on the whole cluster,
</span><br>
<span class="quotelev2">&gt;&gt; but I am afraid I will stumble on the same memory problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, on your email you use the syntax &quot;btl=openib,sm,self&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; with an &quot;=&quot; sign between the btl key and its values.
</span><br>
<span class="quotelev2">&gt;&gt; However, the mpiexec man page uses the syntax &quot;btl openib,sm,self&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; with a blank space between the btl key and its values.
</span><br>
<span class="quotelev2">&gt;&gt; I've been following the man page syntax.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;=&quot; sign doesn't seem to work, and aborts with the error:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;No executable was specified on the mpiexec command line.&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Could this possibly be the issue (say, wrong parsing of mca options)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are running on a single node, then btl=openib,sm,self would be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent to btl=sm,self. OMPI is smart enough to know not to use IB 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you are on a single node, and instead uses the shared memory 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subsystem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you saying that the inclusion of openib is causing a difference 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in behavior, even though all procs are on the same node??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just want to ensure I understand the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 1, 2009 at 11:16 AM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi OpenMPI and HPC experts
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     This may or may not be the right forum to post this,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and I am sorry to bother those that think it is not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I am trying to run the HPL benchmark on our cluster,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     compiling it with Gnu and linking to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     GotoBLAS (1.26) and OpenMPI (1.3.1),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     both also Gnu-compiled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I have got failures that suggest a memory leak when the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     problem size is large, but still within the memory limits
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     recommended by HPL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The problem only happens when &quot;openib&quot; is among the OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MCA parameters (and the problem size is large).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Any help is appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Here is a description of what happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     For starters I am trying HPL on a single node, to get a feeling for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the right parameters (N &amp; NB, P &amp; Q, etc) on dual-socked quad-core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     AMD Opteron 2376 &quot;Shanghai&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The HPL recommendation is to use close to 80% of your physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to reach top Gigaflop performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Our physical memory on a node is 16GB, and this gives a problem size
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     N=40,000 to keep the 80% memory use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I tried several block sizes, somewhat correlated to the size of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     processor cache:  NB=64 80 96 128 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     When I run HPL with N=20,000 or smaller all works fine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and the HPL run completes, regardless of whether &quot;openib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     is present or not on my MCA parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     However, moving when I move N=40,000, or even N=35,000,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the run starts OK with NB=64,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     but as NB is switched to larger values
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the total memory use increases in jumps (as shown by Ganglia),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and becomes uneven across the processors (as shown by &quot;top&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The problem happens if &quot;openib&quot; is among the MCA parameters,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     but doesn't happen if I remove &quot;openib&quot; from the MCA list and use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     only &quot;sm,self&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     For N=35,000, when NB reaches 96 memory use is already above the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     physical limit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (16GB), having increased from 12.5GB to over 17GB.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     For N=40,000 the problem happens even earlier, with NB=80.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     At this point memory swapping kicks in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and eventually the run dies with memory allocation errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ================================================================================ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     T/V                N    NB     P     Q               Time  Gflops
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     WR01L2L4       35000   128     8     1             539.66 5.297e+01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=        0.0043992
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...... PASSED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     HPL ERROR from process # 0, on line 172 of function HPL_pdtest:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;      &gt;&gt;&gt; [7,0] Memory allocation failed for A, x and b. Skip. &lt;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The code snippet that corresponds to HPL_pdest.c is this,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     although the leak is probably somewhere else:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      * Allocate dynamic memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       vptr = (void*)malloc( ( (size_t)(ALGO-&gt;align) +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               (size_t)(mat.ld+1) * (size_t)(mat.nq) ) *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             sizeof(double) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       info[0] = (vptr == NULL); info[1] = myrow; info[2] = mycol;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       (void) HPL_all_reduce( (void *)(info), 3, HPL_INT, HPL_max,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              GRID-&gt;all_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if( info[0] != 0 )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if( ( myrow == 0 ) &amp;&amp; ( mycol == 0 ) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             HPL_pwarn( TEST-&gt;outfp, __LINE__, &quot;HPL_pdtest&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        &quot;[%d,%d] %s&quot;, info[1], info[2],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        &quot;Memory allocation failed for A, x and b. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Skip.&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          (TEST-&gt;kskip)++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I found this continued increase in memory use rather strange,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and suggestive of a memory leak in one of the codes being used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Everything (OpenMPI, GotoBLAS, and HPL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     was compiled using Gnu only (gcc, gfortran, g++).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I haven't changed anything on the compiler's memory model,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     i.e., I haven't used or changed the &quot;-mcmodel&quot; flag of gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (I don't know if the Makefiles on HPL, GotoBLAS, and OpenMPI use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     No additional load is present on the node,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     other than the OS (Linux CentOS 5.2), HPL is running alone.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The cluster has Infiniband.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     However, I am running on a single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The surprising thing is that if I run on shared memory only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (-mca btl sm,self) there is no memory problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the memory use is stable at about 13.9GB,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and the run completes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     So, there is a way around to run on a single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (Actually shared memory is presumably the way to go on a single 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     However, if I introduce IB (-mca btl openib,sm,self)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     among the MCA btl parameters, then memory use blows up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     This is bad news for me, because I want to extend the experiment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to run HPL also across the whole cluster using IB,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     which is actually the ultimate goal of HPL, of course!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     It also suggests that the problem is somehow related to Infiniband,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     maybe hidden under OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Here is the mpiexec command I use (with and without openib):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /path/to/openmpi/bin/mpiexec \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            -prefix /the/run/directory \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            -np 8 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            -mca btl [openib,]sm,self \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            xhpl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Any help, insights, suggestions, reports of previous experiences,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     are much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9170.php">Le Duy Khanh: "[OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>Previous message:</strong> <a href="9168.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Brian W. Barrett: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9170.php">Le Duy Khanh: "[OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>Reply:</strong> <a href="9170.php">Le Duy Khanh: "[OMPI users] [Technical Question] Implement Record&amp;Replay Mechanism in MPI_Send(), MPI_Recv() and MPI_Barier()"</a>
<li><strong>Reply:</strong> <a href="9173.php">Brian Barrett: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
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
