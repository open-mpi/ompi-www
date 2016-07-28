<?
$subject_val = "[OMPI users] HPL with OpenMPI: Do I have a memory leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 13:17:02 2009" -->
<!-- isoreceived="20090501171702" -->
<!-- sent="Fri, 01 May 2009 13:16:53 -0400" -->
<!-- isosent="20090501171653" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] HPL with OpenMPI: Do I have a memory leak?" -->
<!-- id="49FB2E85.7040309_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] HPL with OpenMPI: Do I have a memory leak?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 13:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Reply:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Reply:</strong> <a href="9161.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI and HPC experts
<br>
<p>This may or may not be the right forum to post this,
<br>
and I am sorry to bother those that think it is not.
<br>
<p>I am trying to run the HPL benchmark on our cluster,
<br>
compiling it with Gnu and linking to
<br>
GotoBLAS (1.26) and OpenMPI (1.3.1),
<br>
both also Gnu-compiled.
<br>
<p>I have got failures that suggest a memory leak when the
<br>
problem size is large, but still within the memory limits
<br>
recommended by HPL.
<br>
The problem only happens when &quot;openib&quot; is among the OpenMPI
<br>
MCA parameters (and the problem size is large).
<br>
Any help is appreciated.
<br>
<p>Here is a description of what happens.
<br>
<p>For starters I am trying HPL on a single node, to get a feeling for
<br>
the right parameters (N &amp; NB, P &amp; Q, etc) on dual-socked quad-core
<br>
AMD Opteron 2376 &quot;Shanghai&quot;
<br>
<p>The HPL recommendation is to use close to 80% of your physical memory,
<br>
to reach top Gigaflop performance.
<br>
Our physical memory on a node is 16GB, and this gives a problem size
<br>
N=40,000 to keep the 80% memory use.
<br>
I tried several block sizes, somewhat correlated to the size of the
<br>
processor cache:  NB=64 80 96 128 ...
<br>
<p>When I run HPL with N=20,000 or smaller all works fine,
<br>
and the HPL run completes, regardless of whether &quot;openib&quot;
<br>
is present or not on my MCA parameters.
<br>
<p>However, moving when I move N=40,000, or even N=35,000,
<br>
the run starts OK with NB=64,
<br>
but as NB is switched to larger values
<br>
the total memory use increases in jumps (as shown by Ganglia),
<br>
and becomes uneven across the processors (as shown by &quot;top&quot;).
<br>
The problem happens if &quot;openib&quot; is among the MCA parameters,
<br>
but doesn't happen if I remove &quot;openib&quot; from the MCA list and use
<br>
only &quot;sm,self&quot;.
<br>
<p>For N=35,000, when NB reaches 96 memory use is already above the 
<br>
physical limit
<br>
(16GB), having increased from 12.5GB to over 17GB.
<br>
For N=40,000 the problem happens even earlier, with NB=80.
<br>
At this point memory swapping kicks in,
<br>
and eventually the run dies with memory allocation errors:
<br>
<p>================================================================================
<br>
T/V                N    NB     P     Q               Time 
<br>
&nbsp;&nbsp;&nbsp;Gflops
<br>
--------------------------------------------------------------------------------
<br>
WR01L2L4       35000   128     8     1             539.66 
<br>
5.297e+01
<br>
--------------------------------------------------------------------------------
<br>
||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=        0.0043992 
<br>
...... PASSED
<br>
HPL ERROR from process # 0, on line 172 of function HPL_pdtest:
<br>
<span class="quotelev3"> &gt;&gt;&gt; [7,0] Memory allocation failed for A, x and b. Skip. &lt;&lt;&lt;
</span><br>
...
<br>
<p>***
<br>
<p>The code snippet that corresponds to HPL_pdest.c is this,
<br>
although the leak is probably somewhere else:
<br>
<p>/*
<br>
&nbsp;&nbsp;* Allocate dynamic memory
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vptr = (void*)malloc( ( (size_t)(ALGO-&gt;align) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(size_t)(mat.ld+1) * (size_t)(mat.nq) ) *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(double) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;info[0] = (vptr == NULL); info[1] = myrow; info[2] = mycol;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(void) HPL_all_reduce( (void *)(info), 3, HPL_INT, HPL_max,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRID-&gt;all_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( info[0] != 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( ( myrow == 0 ) &amp;&amp; ( mycol == 0 ) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HPL_pwarn( TEST-&gt;outfp, __LINE__, &quot;HPL_pdtest&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;[%d,%d] %s&quot;, info[1], info[2],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Memory allocation failed for A, x and b. Skip.&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TEST-&gt;kskip)++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>***
<br>
<p>I found this continued increase in memory use rather strange,
<br>
and suggestive of a memory leak in one of the codes being used.
<br>
<p>Everything (OpenMPI, GotoBLAS, and HPL)
<br>
was compiled using Gnu only (gcc, gfortran, g++).
<br>
<p>I haven't changed anything on the compiler's memory model,
<br>
i.e., I haven't used or changed the &quot;-mcmodel&quot; flag of gcc
<br>
(I don't know if the Makefiles on HPL, GotoBLAS, and OpenMPI use it.)
<br>
<p>No additional load is present on the node,
<br>
other than the OS (Linux CentOS 5.2), HPL is running alone.
<br>
<p>The cluster has Infiniband.
<br>
However, I am running on a single node.
<br>
<p>The surprising thing is that if I run on shared memory only
<br>
(-mca btl sm,self) there is no memory problem,
<br>
the memory use is stable at about 13.9GB,
<br>
and the run completes.
<br>
So, there is a way around to run on a single node.
<br>
(Actually shared memory is presumably the way to go on a single node.)
<br>
<p>However, if I introduce IB (-mca btl openib,sm,self)
<br>
among the MCA btl parameters, then memory use blows up.
<br>
<p>This is bad news for me, because I want to extend the experiment
<br>
to run HPL also across the whole cluster using IB,
<br>
which is actually the ultimate goal of HPL, of course!
<br>
It also suggests that the problem is somehow related to Infiniband,
<br>
maybe hidden under OpenMPI.
<br>
<p>Here is the mpiexec command I use (with and without openib):
<br>
<p>/path/to/openmpi/bin/mpiexec \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-prefix /the/run/directory \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 8 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl [openib,]sm,self \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xhpl
<br>
<p><p>Any help, insights, suggestions, reports of previous experiences,
<br>
are much appreciated.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Reply:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Reply:</strong> <a href="9161.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
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
