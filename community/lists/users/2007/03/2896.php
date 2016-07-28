<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 04:13:47 2007" -->
<!-- isoreceived="20070323081347" -->
<!-- sent="Fri, 23 Mar 2007 09:13:34 +0100" -->
<!-- isosent="20070323081334" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?" -->
<!-- id="200703230913.34643.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4603561A.90601_at_sandia.gov" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 04:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<li><strong>Previous message:</strong> <a href="2895.php">Jeffrey Stephen: "[OMPI users] error in MPI_Waitall"</a>
<li><strong>In reply to:</strong> <a href="2894.php">Curtis Janssen: "[OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Curtis,
<br>
yes, done with ompi-trunk:
<br>
Apart from --enable-mpi-threads --enable-progress-threads, You need to compile 
<br>
Open MPI with --enable-mca-no-build=memory-ptmalloc2 ; and of course the 
<br>
usual options for debugging (--enable-debug) and the options for 
<br>
icc/ifort/icpc:
<br>
CFLAGS='-debug all -inline-debug-info -tcheck'
<br>
CXXFLAGS='-debug all -inline-debug-info -tcheck'
<br>
FFLAGS='-debug all -tcheck'
<br>
LDFLAGS='-tcheck'
<br>
<p>Then, as You already noted, run the application with --mca btl tcp,sm,self:
<br>
mpirun --mca tcp,sm,self -np 2            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tcheck_cl                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--reinstrument                     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-u all                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-c                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-d '/tmp/hpcraink_$$__tc_cl_cache' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-f html                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-o 'tc_mpi_test_suite_$$.html'     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-p 'file=tc_mpi_test_suite_%H_%I,  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pad=128,                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delay=2,                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stall=2'                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./mpi_test_suite -j 2 -r FULL -t 'Ring Ibsend' -d MPI_INT
<br>
<p>-- the reinstrument is not really necessary, also setting the padding and 
<br>
delay for startup of threads; shortenign the delay for stalls to 2 seconds 
<br>
alos does not trigger any deadlocks.
<br>
<p>This was with icc-9.1 and itt-3.0 23205.
<br>
<p>Hope this helps,
<br>
Rainer
<br>
<p>On Friday 23 March 2007 05:22, Curtis Janssen wrote:
<br>
<span class="quotelev1">&gt; I'm interested in getting OpenMPI working with a multi-threaded
</span><br>
<span class="quotelev1">&gt; application (MPI_THREAD_MULTIPLE is required).  I'm trying the trunk
</span><br>
<span class="quotelev1">&gt; from a couple weeks ago (1.3a1r14001) compiled for multi-threading and
</span><br>
<span class="quotelev1">&gt; threaded progress, and have had success with some small cases.  Larger
</span><br>
<span class="quotelev1">&gt; cases with the same algorithms fail (they work with MPICH2 1.0.5/TCP and
</span><br>
<span class="quotelev1">&gt; other thread-safe MPIs, so I don't think it is an application bug).  I
</span><br>
<span class="quotelev1">&gt; don't mind doing a little work to track down the problem, so I'm trying
</span><br>
<span class="quotelev1">&gt; to use the Intel Thread Checker.  I have the thread checker working with
</span><br>
<span class="quotelev1">&gt; my application when using Intel's MPI, but with OpenMPI it hangs.
</span><br>
<span class="quotelev1">&gt; OpenMPI is compiled for OFED 1.1, but I'm overriding communications with
</span><br>
<span class="quotelev1">&gt; &quot;-gmca btl self,tcp&quot; in the hope that OpenMPI won't do anything funky
</span><br>
<span class="quotelev1">&gt; that would cause the thread checker problems (like RMDA or writes from
</span><br>
<span class="quotelev1">&gt; other processes into shared memory segments).  Has anybody used the
</span><br>
<span class="quotelev1">&gt; Intel Thread Checker with OpenMPI successfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Curt
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<li><strong>Previous message:</strong> <a href="2895.php">Jeffrey Stephen: "[OMPI users] error in MPI_Waitall"</a>
<li><strong>In reply to:</strong> <a href="2894.php">Curtis Janssen: "[OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
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
