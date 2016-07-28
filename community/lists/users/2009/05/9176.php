<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 04:37:07 2009" -->
<!-- isoreceived="20090504083707" -->
<!-- sent="Mon, 04 May 2009 10:37:00 +0200" -->
<!-- isosent="20090504083700" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="49FEA92C.9010301_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49FB219E.2030809_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 04:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9177.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9175.php">jan: "[OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>In reply to:</strong> <a href="9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
sorry for the delay but I did some additional experiments to found out 
<br>
whether the problem was openmpi or gcc!
<br>
<p>In attach u will find the program that causes the problem before mentioned.
<br>
I compile the program with the following line:
<br>
<p>$HOME/openmpi-1.3.2-gcc44/bin/mpicc -O3 -g -Wall -fmessage-length=0 -m64 
<br>
bug.c -o bug
<br>
<p>When I run the program using mpi 1.3.2 compiled with gcc44 in the 
<br>
following way:
<br>
<p>$HOME/openmpi-1.3.2-gcc44/bin/mpirun --mca btl self,sm --np 32 ./bug 1024
<br>
<p>The program just hangs... and never terminates! I am running on a SMP 
<br>
machine with 32 cores, actually it is a Sun Fire X4600 X2. (8 quad-core 
<br>
Barcelona AMD chips), the OS is CentOS 5 and the kernel is 
<br>
2.6.18-92.el5.src-PAPI (patched with PAPI).
<br>
I use a N of 1024, and if I print out the value of the iterator i, 
<br>
sometimes it stops around 165, other times around 520... and it doesn't 
<br>
make any sense.
<br>
<p>If I run the program (and it's important to notice I don't recompile it, 
<br>
I just use another mpirun from a different mpi version) the program 
<br>
works fine. I did some experiments during the weekend and if I use 
<br>
openmpi-1.3.2 compiled with gcc433 everything works fine.
<br>
<p>So I really think the problem is strictly related to the usage of 
<br>
gcc-4.4.0! ...and it doesn't depends from OpenMPI as the program hangs 
<br>
even when I use gcc 1.3.1 compiled with gcc 4.4!
<br>
<p>I hope everything is clear now.
<br>
<p>regards, Simone
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; So far, I'm unable to reproduce this problem.  I haven't exactly 
</span><br>
<span class="quotelev1">&gt; reproduced your test conditions, but then I can't.  At a minimum, I 
</span><br>
<span class="quotelev1">&gt; don't have exactly the code you ran (and not convinced I want to!).  So:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) Can you reproduce the problem with the stand-alone test case I sent 
</span><br>
<span class="quotelev1">&gt; out?
</span><br>
<span class="quotelev1">&gt; *) Does the problem correlate with OMPI version?  (I.e., 1.3.1 versus 
</span><br>
<span class="quotelev1">&gt; 1.3.2.)
</span><br>
<span class="quotelev1">&gt; *) Does the problem occur at lower np?
</span><br>
<span class="quotelev1">&gt; *) Does the problem correlate with the compiler version?  (I.e., GCC 
</span><br>
<span class="quotelev1">&gt; 4.4 versus 4.3.3.)
</span><br>
<span class="quotelev1">&gt; *) What is the failure rate?  How many times should I expect to run to 
</span><br>
<span class="quotelev1">&gt; see failures?
</span><br>
<span class="quotelev1">&gt; *) How large is N?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simone Pellegrini wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have successfully compiled and installed openmpi 1.3.2 on a 8 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket quad-core machine from Sun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have used both Gcc-4.4 and Gcc-4.3.3 during the compilation phase 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but when I try to run simple MPI programs processes hangs. Actually 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is the kernel of the application I am trying to run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     total = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for(i=0; i&lt;N-1; i++){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         // printf(&quot;%d\n&quot;, i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if(i&gt;0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_Sendrecv(A[i-1], N, MPI_FLOAT, top, 0, row, N, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         for(k=0; k&lt;N; k++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             A[i][k] = (A[i][k] + A[i+1][k] + row[k])/3;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     total = MPI_Wtime() - total;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if this kernel is sufficient to reproduce the problem?  
</span><br>
<span class="quotelev2">&gt;&gt; How large is N?  Evidently, it's greater than 1600, but I'm still 
</span><br>
<span class="quotelev2">&gt;&gt; curious how big.  What are top and bottom?  Are they rank+1 and rank-1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sometimes the program terminates correctly, sometimes don't!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Roughly, what fraction of runs hang?  50%?  1%?  &lt;0.1%?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running the program using the shared memory module because I am 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using just one multi-core with the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca btl self,sm --np 32 ./my_prog prob_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea if this fails at lower np?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I print the index number during the program execution I can see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that program stop running around index value 1600... but it actually 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't crash. It just stops! :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run the program under strace to see what's going on and this is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; futex(0x2b20c02d9790, FUTEX_WAKE, 1)    = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; futex(0x2aaaaafcf2b0, FUTEX_WAKE, 1)    = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv(100, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 36}], 1) = 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv(100, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\4\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) = 28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; futex(0x2aaaaafcf5e0, FUTEX_WAIT, 2, NULL) = -1 EAGAIN (Resource 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; temporarily unavailable)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; futex(0x2aaaaafcf5e0, FUTEX_WAKE, 1)    = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; writev(102, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\4\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 28}], 2) = 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=11, events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=37, events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=55, events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=72, events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=92, events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=0, events=POLLIN}, {fd=100, events=POLLIN, revents=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...], 39, 1000) = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv(100, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 36}], 1) = 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv(100, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) = 28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; writev(109, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\7\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 28}], 2) = 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=11, events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=37, events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=55, events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=72, events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=92, events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=0, events=POLLIN}, {fd=100, events=POLLIN}, ...], 39, 1000) = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=11, events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=37, events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=55, events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=72, events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=92, events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}, {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {fd=0, events=POLLIN}, {fd=100, events=POLLIN}, ...], 39, 1000) = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the program keep printing this poll() call till I stop it!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program runs perfectly with my old configuration which was 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.3.1 compiled with Gcc-4.4. Actually I see the same problem 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I compile Openmpi-1.3.1 with Gcc 4.4. Is there any conflict 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which arise when gcc-4.4 is used?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand this.  It runs well with 1.3.1/4.4, but you see 
</span><br>
<span class="quotelev2">&gt;&gt; the same problem with 1.3.1/4.4?  I'm confused:  you do or don't see 
</span><br>
<span class="quotelev2">&gt;&gt; the problem with 1.3.1/4.4?  What do you think is the crucial factor 
</span><br>
<span class="quotelev2">&gt;&gt; here?  OMPI rev or GCC rev?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I can replicate all of your test system (hardware, 
</span><br>
<span class="quotelev2">&gt;&gt; etc.), but some sanity tests on what I have so far have turned up 
</span><br>
<span class="quotelev2">&gt;&gt; clean.  I run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define N 40000
</span><br>
<span class="quotelev2">&gt;&gt; #define M 40000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;   int np, me, i, top, bottom;
</span><br>
<span class="quotelev2">&gt;&gt;   float sbuf[N], rbuf[N];
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   top    = me + 1;   if ( top  &gt;= np ) top    -= np;
</span><br>
<span class="quotelev2">&gt;&gt;   bottom = me - 1;   if ( bottom &lt; 0 ) bottom += np;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   for ( i = 0; i &lt; N; i++ ) sbuf[i] = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   for ( i = 0; i &lt; N; i++ ) rbuf[i] = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   for ( i = 0; i &lt; M - 1; i++ )
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Sendrecv(sbuf, N, MPI_FLOAT, top   , 0,
</span><br>
<span class="quotelev2">&gt;&gt;                  rbuf, N, MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
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
<p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9176/bug.c">bug.c</a>
</ul>
<!-- attachment="bug.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9177.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9175.php">jan: "[OMPI users] Fw: users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>In reply to:</strong> <a href="9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
