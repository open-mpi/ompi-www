<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 12:22:20 2009" -->
<!-- isoreceived="20090501162220" -->
<!-- sent="Fri, 01 May 2009 09:21:50 -0700" -->
<!-- isosent="20090501162150" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="49FB219E.2030809_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49FA3164.7020301_at_sun.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 12:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9154.php">Gus Correa: "[OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9152.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<li><strong>In reply to:</strong> <a href="../../2009/04/9150.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9171.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="9171.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So far, I'm unable to reproduce this problem.  I haven't exactly 
<br>
reproduced your test conditions, but then I can't.  At a minimum, I 
<br>
don't have exactly the code you ran (and not convinced I want to!).  So:
<br>
<p>*) Can you reproduce the problem with the stand-alone test case I sent out?
<br>
*) Does the problem correlate with OMPI version?  (I.e., 1.3.1 versus 
<br>
1.3.2.)
<br>
*) Does the problem occur at lower np?
<br>
*) Does the problem correlate with the compiler version?  (I.e., GCC 4.4 
<br>
versus 4.3.3.)
<br>
*) What is the failure rate?  How many times should I expect to run to 
<br>
see failures?
<br>
*) How large is N?
<br>
<p>Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; I have successfully compiled and installed openmpi 1.3.2 on a 8 
</span><br>
<span class="quotelev2">&gt;&gt; socket quad-core machine from Sun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have used both Gcc-4.4 and Gcc-4.3.3 during the compilation phase 
</span><br>
<span class="quotelev2">&gt;&gt; but when I try to run simple MPI programs processes hangs. Actually 
</span><br>
<span class="quotelev2">&gt;&gt; this is the kernel of the application I am trying to run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     total = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;     for(i=0; i&lt;N-1; i++){
</span><br>
<span class="quotelev2">&gt;&gt;         // printf(&quot;%d\n&quot;, i);
</span><br>
<span class="quotelev2">&gt;&gt;         if(i&gt;0)
</span><br>
<span class="quotelev2">&gt;&gt;             MPI_Sendrecv(A[i-1], N, MPI_FLOAT, top, 0, row, N, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;         for(k=0; k&lt;N; k++)
</span><br>
<span class="quotelev2">&gt;&gt;             A[i][k] = (A[i][k] + A[i+1][k] + row[k])/3;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     total = MPI_Wtime() - total;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know if this kernel is sufficient to reproduce the problem?  
</span><br>
<span class="quotelev1">&gt; How large is N?  Evidently, it's greater than 1600, but I'm still 
</span><br>
<span class="quotelev1">&gt; curious how big.  What are top and bottom?  Are they rank+1 and rank-1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sometimes the program terminates correctly, sometimes don't!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roughly, what fraction of runs hang?  50%?  1%?  &lt;0.1%?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running the program using the shared memory module because I am 
</span><br>
<span class="quotelev2">&gt;&gt; using just one multi-core with the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl self,sm --np 32 ./my_prog prob_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea if this fails at lower np?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I print the index number during the program execution I can see 
</span><br>
<span class="quotelev2">&gt;&gt; that program stop running around index value 1600... but it actually 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't crash. It just stops! :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run the program under strace to see what's going on and this is the 
</span><br>
<span class="quotelev2">&gt;&gt; output:
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; futex(0x2b20c02d9790, FUTEX_WAKE, 1)    = 1
</span><br>
<span class="quotelev2">&gt;&gt; futex(0x2aaaaafcf2b0, FUTEX_WAKE, 1)    = 0
</span><br>
<span class="quotelev2">&gt;&gt; readv(100, 
</span><br>
<span class="quotelev2">&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev2">&gt;&gt; 36}], 1) = 36
</span><br>
<span class="quotelev2">&gt;&gt; readv(100, 
</span><br>
<span class="quotelev2">&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\4\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 
</span><br>
<span class="quotelev2">&gt;&gt; 1) = 28
</span><br>
<span class="quotelev2">&gt;&gt; futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
</span><br>
<span class="quotelev2">&gt;&gt; futex(0x2aaaaafcf5e0, FUTEX_WAIT, 2, NULL) = -1 EAGAIN (Resource 
</span><br>
<span class="quotelev2">&gt;&gt; temporarily unavailable)
</span><br>
<span class="quotelev2">&gt;&gt; futex(0x2aaaaafcf5e0, FUTEX_WAKE, 1)    = 0
</span><br>
<span class="quotelev2">&gt;&gt; writev(102, 
</span><br>
<span class="quotelev2">&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\4\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev2">&gt;&gt; 36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; 28}], 2) = 64
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, {fd=55, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, {fd=0, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=100, events=POLLIN, revents=POLLIN}, ...], 39, 
</span><br>
<span class="quotelev2">&gt;&gt; 1000) = 1
</span><br>
<span class="quotelev2">&gt;&gt; readv(100, 
</span><br>
<span class="quotelev2">&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev2">&gt;&gt; 36}], 1) = 36
</span><br>
<span class="quotelev2">&gt;&gt; readv(100, 
</span><br>
<span class="quotelev2">&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 
</span><br>
<span class="quotelev2">&gt;&gt; 1) = 28
</span><br>
<span class="quotelev2">&gt;&gt; futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
</span><br>
<span class="quotelev2">&gt;&gt; writev(109, 
</span><br>
<span class="quotelev2">&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\7\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev2">&gt;&gt; 36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; 28}], 2) = 64
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, {fd=55, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, {fd=0, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=100, events=POLLIN}, ...], 39, 1000) = 1
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, {fd=55, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, events=POLLIN}, 
</span><br>
<span class="quotelev2">&gt;&gt; {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, {fd=0, 
</span><br>
<span class="quotelev2">&gt;&gt; events=POLLIN}, {fd=100, events=POLLIN}, ...], 39, 1000) = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the program keep printing this poll() call till I stop it!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program runs perfectly with my old configuration which was 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3.1 compiled with Gcc-4.4. Actually I see the same problem 
</span><br>
<span class="quotelev2">&gt;&gt; when I compile Openmpi-1.3.1 with Gcc 4.4. Is there any conflict 
</span><br>
<span class="quotelev2">&gt;&gt; which arise when gcc-4.4 is used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand this.  It runs well with 1.3.1/4.4, but you see the 
</span><br>
<span class="quotelev1">&gt; same problem with 1.3.1/4.4?  I'm confused:  you do or don't see the 
</span><br>
<span class="quotelev1">&gt; problem with 1.3.1/4.4?  What do you think is the crucial factor 
</span><br>
<span class="quotelev1">&gt; here?  OMPI rev or GCC rev?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I can replicate all of your test system (hardware, etc.), 
</span><br>
<span class="quotelev1">&gt; but some sanity tests on what I have so far have turned up clean.  I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define N 40000
</span><br>
<span class="quotelev1">&gt; #define M 40000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   int np, me, i, top, bottom;
</span><br>
<span class="quotelev1">&gt;   float sbuf[N], rbuf[N];
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   top    = me + 1;   if ( top  &gt;= np ) top    -= np;
</span><br>
<span class="quotelev1">&gt;   bottom = me - 1;   if ( bottom &lt; 0 ) bottom += np;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for ( i = 0; i &lt; N; i++ ) sbuf[i] = 0;
</span><br>
<span class="quotelev1">&gt;   for ( i = 0; i &lt; N; i++ ) rbuf[i] = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   for ( i = 0; i &lt; M - 1; i++ )
</span><br>
<span class="quotelev1">&gt;     MPI_Sendrecv(sbuf, N, MPI_FLOAT, top   , 0,
</span><br>
<span class="quotelev1">&gt;                  rbuf, N, MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9154.php">Gus Correa: "[OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9152.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<li><strong>In reply to:</strong> <a href="../../2009/04/9150.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9171.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="9171.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
