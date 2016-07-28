<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 19:17:31 2009" -->
<!-- isoreceived="20090430231731" -->
<!-- sent="Thu, 30 Apr 2009 16:16:52 -0700" -->
<!-- isosent="20090430231652" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="49FA3164.7020301_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49F9BB26.5080504_at_dps.uibk.ac.at" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 19:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9156.php">David Wong: "[OMPI users] compilation application with openmpi question"</a>
<li><strong>Previous message:</strong> <a href="9154.php">Simone Pellegrini: "[OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="9154.php">Simone Pellegrini: "[OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm responsible for some sm changes in 1.3.2, so I can try looking at 
<br>
this.  Some questions below:
<br>
<p>Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I have successfully compiled and installed openmpi 1.3.2 on a 8 socket 
</span><br>
<span class="quotelev1">&gt; quad-core machine from Sun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used both Gcc-4.4 and Gcc-4.3.3 during the compilation phase 
</span><br>
<span class="quotelev1">&gt; but when I try to run simple MPI programs processes hangs. Actually 
</span><br>
<span class="quotelev1">&gt; this is the kernel of the application I am trying to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     total = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;     for(i=0; i&lt;N-1; i++){
</span><br>
<span class="quotelev1">&gt;         // printf(&quot;%d\n&quot;, i);
</span><br>
<span class="quotelev1">&gt;         if(i&gt;0)
</span><br>
<span class="quotelev1">&gt;             MPI_Sendrecv(A[i-1], N, MPI_FLOAT, top, 0, row, N, 
</span><br>
<span class="quotelev1">&gt; MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;         for(k=0; k&lt;N; k++)
</span><br>
<span class="quotelev1">&gt;             A[i][k] = (A[i][k] + A[i+1][k] + row[k])/3;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     total = MPI_Wtime() - total;
</span><br>
<p>Do you know if this kernel is sufficient to reproduce the problem?  How 
<br>
large is N?  Evidently, it's greater than 1600, but I'm still curious 
<br>
how big.  What are top and bottom?  Are they rank+1 and rank-1?
<br>
<p><span class="quotelev1">&gt; Sometimes the program terminates correctly, sometimes don't!
</span><br>
<p>Roughly, what fraction of runs hang?  50%?  1%?  &lt;0.1%?
<br>
<p><span class="quotelev1">&gt; I am running the program using the shared memory module because I am 
</span><br>
<span class="quotelev1">&gt; using just one multi-core with the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm --np 32 ./my_prog prob_size
</span><br>
<p>Any idea if this fails at lower np?
<br>
<p><span class="quotelev1">&gt; If I print the index number during the program execution I can see 
</span><br>
<span class="quotelev1">&gt; that program stop running around index value 1600... but it actually 
</span><br>
<span class="quotelev1">&gt; doesn't crash. It just stops! :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run the program under strace to see what's going on and this is the 
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; futex(0x2b20c02d9790, FUTEX_WAKE, 1)    = 1
</span><br>
<span class="quotelev1">&gt; futex(0x2aaaaafcf2b0, FUTEX_WAKE, 1)    = 0
</span><br>
<span class="quotelev1">&gt; readv(100, 
</span><br>
<span class="quotelev1">&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev1">&gt; 36}], 1) = 36
</span><br>
<span class="quotelev1">&gt; readv(100, 
</span><br>
<span class="quotelev1">&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\4\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 1) 
</span><br>
<span class="quotelev1">&gt; = 28
</span><br>
<span class="quotelev1">&gt; futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
</span><br>
<span class="quotelev1">&gt; futex(0x2aaaaafcf5e0, FUTEX_WAIT, 2, NULL) = -1 EAGAIN (Resource 
</span><br>
<span class="quotelev1">&gt; temporarily unavailable)
</span><br>
<span class="quotelev1">&gt; futex(0x2aaaaafcf5e0, FUTEX_WAKE, 1)    = 0
</span><br>
<span class="quotelev1">&gt; writev(102, 
</span><br>
<span class="quotelev1">&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\4\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev1">&gt; 36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
</span><br>
<span class="quotelev1">&gt; 28}], 2) = 64
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, {fd=55, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, {fd=0, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=100, events=POLLIN, revents=POLLIN}, ...], 39, 
</span><br>
<span class="quotelev1">&gt; 1000) = 1
</span><br>
<span class="quotelev1">&gt; readv(100, 
</span><br>
<span class="quotelev1">&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev1">&gt; 36}], 1) = 36
</span><br>
<span class="quotelev1">&gt; readv(100, 
</span><br>
<span class="quotelev1">&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 1) 
</span><br>
<span class="quotelev1">&gt; = 28
</span><br>
<span class="quotelev1">&gt; futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
</span><br>
<span class="quotelev1">&gt; writev(109, 
</span><br>
<span class="quotelev1">&gt; [{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\7\0\0\0\4\0\0\0\34&quot;..., 
</span><br>
<span class="quotelev1">&gt; 36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
</span><br>
<span class="quotelev1">&gt; 28}], 2) = 64
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, {fd=55, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, {fd=0, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=100, events=POLLIN}, ...], 39, 1000) = 1
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=27, events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=39, events=POLLIN}, {fd=44, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=48, events=POLLIN}, {fd=50, events=POLLIN}, {fd=55, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=83, events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=94, events=POLLIN}, {fd=99, events=POLLIN}, 
</span><br>
<span class="quotelev1">&gt; {fd=103, events=POLLIN}, {fd=105, events=POLLIN}, {fd=0, 
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=100, events=POLLIN}, ...], 39, 1000) = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the program keep printing this poll() call till I stop it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program runs perfectly with my old configuration which was OpenMPI 
</span><br>
<span class="quotelev1">&gt; 1.3.1 compiled with Gcc-4.4. Actually I see the same problem when I 
</span><br>
<span class="quotelev1">&gt; compile Openmpi-1.3.1 with Gcc 4.4. Is there any conflict which arise 
</span><br>
<span class="quotelev1">&gt; when gcc-4.4 is used?
</span><br>
<p>I don't understand this.  It runs well with 1.3.1/4.4, but you see the 
<br>
same problem with 1.3.1/4.4?  I'm confused:  you do or don't see the 
<br>
problem with 1.3.1/4.4?  What do you think is the crucial factor here?  
<br>
OMPI rev or GCC rev?
<br>
<p>I'm not sure I can replicate all of your test system (hardware, etc.), 
<br>
but some sanity tests on what I have so far have turned up clean.  I run:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define N 40000
<br>
#define M 40000
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int np, me, i, top, bottom;
<br>
&nbsp;&nbsp;float sbuf[N], rbuf[N];
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
<p>&nbsp;&nbsp;top    = me + 1;   if ( top  &gt;= np ) top    -= np;
<br>
&nbsp;&nbsp;bottom = me - 1;   if ( bottom &lt; 0 ) bottom += np;
<br>
<p>&nbsp;&nbsp;for ( i = 0; i &lt; N; i++ ) sbuf[i] = 0;
<br>
&nbsp;&nbsp;for ( i = 0; i &lt; N; i++ ) rbuf[i] = 0;
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;for ( i = 0; i &lt; M - 1; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(sbuf, N, MPI_FLOAT, top   , 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf, N, MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Can you reproduce your problem with this test case?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9156.php">David Wong: "[OMPI users] compilation application with openmpi question"</a>
<li><strong>Previous message:</strong> <a href="9154.php">Simone Pellegrini: "[OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="9154.php">Simone Pellegrini: "[OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
