<?
$subject_val = "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 14:47:17 2009" -->
<!-- isoreceived="20090501184717" -->
<!-- sent="Fri, 1 May 2009 13:47:12 -0500" -->
<!-- isosent="20090501184712" -->
<!-- name="JACOB_LIBERMAN_at_[hidden]" -->
<!-- email="JACOB_LIBERMAN_at_[hidden]" -->
<!-- subject="Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?" -->
<!-- id="7ADD3FA62176CB4588006774C1CCA43B480234_at_ausx3mps336.aus.amer.dell.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="49FB2E85.7040309_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> <a href="mailto:JACOB_LIBERMAN_at_[hidden]?Subject=Re:%20[OMPI%20users]%20HPL%20with%20OpenMPI:%20Do%20I%20have%20a%20memory%20leak?"><em>JACOB_LIBERMAN_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-01 14:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9162.php">Kritiraj Sajadah: "[OMPI users] Checkpointing configuration problem"</a>
<li><strong>Previous message:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>In reply to:</strong> <a href="9159.php">Gus Correa: "[OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9168.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Reply:</strong> <a href="9168.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>For single node runs, don't bother specifying the btl.  Openmpi should select the best option.
<br>
<p>Beyond that, the &quot;80% total RAM&quot; recommendation is misleading. Base your N off the memfree rather than memtotal. IB can reserve quite a bit.  Verify your /etc/security/limits.conf limits allow sufficient locking.  (Try unlimited) 
<br>
<p>Finally, P should be smaller than Q, and squarer values are recommended.
<br>
<p>With Shanghai, OpenMPI, GotoBLAS expect single node efficiency of a least 85% given decent tuning.  If the distribution continues to look strange, there are more things to check.
<br>
<p>Thanks, Jacob
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 01, 2009 12:17 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] HPL with OpenMPI: Do I have a memory leak?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi OpenMPI and HPC experts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may or may not be the right forum to post this,
</span><br>
<span class="quotelev1">&gt; and I am sorry to bother those that think it is not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run the HPL benchmark on our cluster,
</span><br>
<span class="quotelev1">&gt; compiling it with Gnu and linking to
</span><br>
<span class="quotelev1">&gt; GotoBLAS (1.26) and OpenMPI (1.3.1),
</span><br>
<span class="quotelev1">&gt; both also Gnu-compiled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have got failures that suggest a memory leak when the
</span><br>
<span class="quotelev1">&gt; problem size is large, but still within the memory limits
</span><br>
<span class="quotelev1">&gt; recommended by HPL.
</span><br>
<span class="quotelev1">&gt; The problem only happens when &quot;openib&quot; is among the OpenMPI
</span><br>
<span class="quotelev1">&gt; MCA parameters (and the problem size is large).
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a description of what happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For starters I am trying HPL on a single node, to get a feeling for
</span><br>
<span class="quotelev1">&gt; the right parameters (N &amp; NB, P &amp; Q, etc) on dual-socked quad-core
</span><br>
<span class="quotelev1">&gt; AMD Opteron 2376 &quot;Shanghai&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The HPL recommendation is to use close to 80% of your physical memory,
</span><br>
<span class="quotelev1">&gt; to reach top Gigaflop performance.
</span><br>
<span class="quotelev1">&gt; Our physical memory on a node is 16GB, and this gives a problem size
</span><br>
<span class="quotelev1">&gt; N=40,000 to keep the 80% memory use.
</span><br>
<span class="quotelev1">&gt; I tried several block sizes, somewhat correlated to the size of the
</span><br>
<span class="quotelev1">&gt; processor cache:  NB=64 80 96 128 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run HPL with N=20,000 or smaller all works fine,
</span><br>
<span class="quotelev1">&gt; and the HPL run completes, regardless of whether &quot;openib&quot;
</span><br>
<span class="quotelev1">&gt; is present or not on my MCA parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, moving when I move N=40,000, or even N=35,000,
</span><br>
<span class="quotelev1">&gt; the run starts OK with NB=64,
</span><br>
<span class="quotelev1">&gt; but as NB is switched to larger values
</span><br>
<span class="quotelev1">&gt; the total memory use increases in jumps (as shown by Ganglia),
</span><br>
<span class="quotelev1">&gt; and becomes uneven across the processors (as shown by &quot;top&quot;).
</span><br>
<span class="quotelev1">&gt; The problem happens if &quot;openib&quot; is among the MCA parameters,
</span><br>
<span class="quotelev1">&gt; but doesn't happen if I remove &quot;openib&quot; from the MCA list and use
</span><br>
<span class="quotelev1">&gt; only &quot;sm,self&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For N=35,000, when NB reaches 96 memory use is already above the
</span><br>
<span class="quotelev1">&gt; physical limit
</span><br>
<span class="quotelev1">&gt; (16GB), having increased from 12.5GB to over 17GB.
</span><br>
<span class="quotelev1">&gt; For N=40,000 the problem happens even earlier, with NB=80.
</span><br>
<span class="quotelev1">&gt; At this point memory swapping kicks in,
</span><br>
<span class="quotelev1">&gt; and eventually the run dies with memory allocation errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; =========
</span><br>
<span class="quotelev1">&gt; T/V                N    NB     P     Q               Time
</span><br>
<span class="quotelev1">&gt;    Gflops
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; WR01L2L4       35000   128     8     1             539.66
</span><br>
<span class="quotelev1">&gt; 5.297e+01
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; ||Ax-b||_oo/(eps*(||A||_oo*||x||_oo+||b||_oo)*N)=        0.0043992
</span><br>
<span class="quotelev1">&gt; ...... PASSED
</span><br>
<span class="quotelev1">&gt; HPL ERROR from process # 0, on line 172 of function HPL_pdtest:
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; [7,0] Memory allocation failed for A, x and b. Skip. &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code snippet that corresponds to HPL_pdest.c is this,
</span><br>
<span class="quotelev1">&gt; although the leak is probably somewhere else:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;   * Allocate dynamic memory
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;     vptr = (void*)malloc( ( (size_t)(ALGO-&gt;align) +
</span><br>
<span class="quotelev1">&gt;                             (size_t)(mat.ld+1) * (size_t)(mat.nq) ) *
</span><br>
<span class="quotelev1">&gt;                           sizeof(double) );
</span><br>
<span class="quotelev1">&gt;     info[0] = (vptr == NULL); info[1] = myrow; info[2] = mycol;
</span><br>
<span class="quotelev1">&gt;     (void) HPL_all_reduce( (void *)(info), 3, HPL_INT, HPL_max,
</span><br>
<span class="quotelev1">&gt;                            GRID-&gt;all_comm );
</span><br>
<span class="quotelev1">&gt;     if( info[0] != 0 )
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;        if( ( myrow == 0 ) &amp;&amp; ( mycol == 0 ) )
</span><br>
<span class="quotelev1">&gt;           HPL_pwarn( TEST-&gt;outfp, __LINE__, &quot;HPL_pdtest&quot;,
</span><br>
<span class="quotelev1">&gt;                      &quot;[%d,%d] %s&quot;, info[1], info[2],
</span><br>
<span class="quotelev1">&gt;                      &quot;Memory allocation failed for A, x and b. Skip.&quot; );
</span><br>
<span class="quotelev1">&gt;        (TEST-&gt;kskip)++;
</span><br>
<span class="quotelev1">&gt;        return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found this continued increase in memory use rather strange,
</span><br>
<span class="quotelev1">&gt; and suggestive of a memory leak in one of the codes being used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything (OpenMPI, GotoBLAS, and HPL)
</span><br>
<span class="quotelev1">&gt; was compiled using Gnu only (gcc, gfortran, g++).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't changed anything on the compiler's memory model,
</span><br>
<span class="quotelev1">&gt; i.e., I haven't used or changed the &quot;-mcmodel&quot; flag of gcc
</span><br>
<span class="quotelev1">&gt; (I don't know if the Makefiles on HPL, GotoBLAS, and OpenMPI use it.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No additional load is present on the node,
</span><br>
<span class="quotelev1">&gt; other than the OS (Linux CentOS 5.2), HPL is running alone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cluster has Infiniband.
</span><br>
<span class="quotelev1">&gt; However, I am running on a single node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The surprising thing is that if I run on shared memory only
</span><br>
<span class="quotelev1">&gt; (-mca btl sm,self) there is no memory problem,
</span><br>
<span class="quotelev1">&gt; the memory use is stable at about 13.9GB,
</span><br>
<span class="quotelev1">&gt; and the run completes.
</span><br>
<span class="quotelev1">&gt; So, there is a way around to run on a single node.
</span><br>
<span class="quotelev1">&gt; (Actually shared memory is presumably the way to go on a single node.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if I introduce IB (-mca btl openib,sm,self)
</span><br>
<span class="quotelev1">&gt; among the MCA btl parameters, then memory use blows up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is bad news for me, because I want to extend the experiment
</span><br>
<span class="quotelev1">&gt; to run HPL also across the whole cluster using IB,
</span><br>
<span class="quotelev1">&gt; which is actually the ultimate goal of HPL, of course!
</span><br>
<span class="quotelev1">&gt; It also suggests that the problem is somehow related to Infiniband,
</span><br>
<span class="quotelev1">&gt; maybe hidden under OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the mpiexec command I use (with and without openib):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /path/to/openmpi/bin/mpiexec \
</span><br>
<span class="quotelev1">&gt;          -prefix /the/run/directory \
</span><br>
<span class="quotelev1">&gt;          -np 8 \
</span><br>
<span class="quotelev1">&gt;          -mca btl [openib,]sm,self \
</span><br>
<span class="quotelev1">&gt;          xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help, insights, suggestions, reports of previous experiences,
</span><br>
<span class="quotelev1">&gt; are much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="9162.php">Kritiraj Sajadah: "[OMPI users] Checkpointing configuration problem"</a>
<li><strong>Previous message:</strong> <a href="9160.php">Ralph Castain: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>In reply to:</strong> <a href="9159.php">Gus Correa: "[OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9168.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Reply:</strong> <a href="9168.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
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
