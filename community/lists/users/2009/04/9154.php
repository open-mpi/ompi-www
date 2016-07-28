<?
$subject_val = "[OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 10:52:28 2009" -->
<!-- isoreceived="20090430145228" -->
<!-- sent="Thu, 30 Apr 2009 16:52:22 +0200" -->
<!-- isosent="20090430145222" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="49F9BB26.5080504_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 10:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I have successfully compiled and installed openmpi 1.3.2 on a 8 socket 
<br>
quad-core machine from Sun.
<br>
<p>I have used both Gcc-4.4 and Gcc-4.3.3 during the compilation phase but 
<br>
when I try to run simple MPI programs processes hangs. Actually this is 
<br>
the kernel of the application I am trying to run:
<br>
<p>MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;total = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;N-1; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// printf(&quot;%d\n&quot;, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i&gt;0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(A[i-1], N, MPI_FLOAT, top, 0, row, N, 
<br>
MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(k=0; k&lt;N; k++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A[i][k] = (A[i][k] + A[i+1][k] + row[k])/3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;total = MPI_Wtime() - total;
<br>
<p>Sometimes the program terminates correctly, sometimes don't! I am 
<br>
running the program using the shared memory module because I am using 
<br>
just one multi-core with the following command:
<br>
<p>mpirun --mca btl self,sm --np 32 ./my_prog prob_size
<br>
<p>If I print the index number during the program execution I can see that 
<br>
program stop running around index value 1600... but it actually doesn't 
<br>
crash. It just stops! :(
<br>
<p>I run the program under strace to see what's going on and this is the 
<br>
output:
<br>
[...]
<br>
futex(0x2b20c02d9790, FUTEX_WAKE, 1)    = 1
<br>
futex(0x2aaaaafcf2b0, FUTEX_WAKE, 1)    = 0
<br>
readv(100, 
<br>
[{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
<br>
36}], 1) = 36
<br>
readv(100, [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\4\0\0\0jj\0\0\0\1\0\0\0&quot;, 
<br>
28}], 1) = 28
<br>
futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
<br>
futex(0x2aaaaafcf5e0, FUTEX_WAIT, 2, NULL) = -1 EAGAIN (Resource 
<br>
temporarily unavailable)
<br>
futex(0x2aaaaafcf5e0, FUTEX_WAKE, 1)    = 0
<br>
writev(102, 
<br>
[{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\4\0\0\0\4\0\0\0\34&quot;..., 
<br>
36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 
<br>
2) = 64
<br>
poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
<br>
events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, {fd=27, 
<br>
events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, events=POLLIN}, {fd=39, 
<br>
events=POLLIN}, {fd=44, events=POLLIN}, {fd=48, events=POLLIN}, {fd=50, 
<br>
events=POLLIN}, {fd=55, events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, 
<br>
events=POLLIN}, {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
<br>
events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, {fd=83, 
<br>
events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, events=POLLIN}, {fd=94, 
<br>
events=POLLIN}, {fd=99, events=POLLIN}, {fd=103, events=POLLIN}, 
<br>
{fd=105, events=POLLIN}, {fd=0, events=POLLIN}, {fd=100, events=POLLIN, 
<br>
revents=POLLIN}, ...], 39, 1000) = 1
<br>
readv(100, 
<br>
[{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0\0\0\0\4\0\0\0\34&quot;..., 
<br>
36}], 1) = 36
<br>
readv(100, [{&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 
<br>
28}], 1) = 28
<br>
futex(0x19e93fd8, FUTEX_WAKE, 1)        = 1
<br>
writev(109, 
<br>
[{&quot;n\267\0\1\0\0\0\0n\267\0\0\0\0\0\0n\267\0\1\0\0\0\7\0\0\0\4\0\0\0\34&quot;..., 
<br>
36}, {&quot;n\267\0\1\0\0\0\0n\267\0\1\0\0\0\7\0\0\0jj\0\0\0\1\0\0\0&quot;, 28}], 
<br>
2) = 64
<br>
poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
<br>
events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, {fd=27, 
<br>
events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, events=POLLIN}, {fd=39, 
<br>
events=POLLIN}, {fd=44, events=POLLIN}, {fd=48, events=POLLIN}, {fd=50, 
<br>
events=POLLIN}, {fd=55, events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, 
<br>
events=POLLIN}, {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
<br>
events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, {fd=83, 
<br>
events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, events=POLLIN}, {fd=94, 
<br>
events=POLLIN}, {fd=99, events=POLLIN}, {fd=103, events=POLLIN}, 
<br>
{fd=105, events=POLLIN}, {fd=0, events=POLLIN}, {fd=100, events=POLLIN}, 
<br>
...], 39, 1000) = 1
<br>
poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=7, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=11, 
<br>
events=POLLIN}, {fd=21, events=POLLIN}, {fd=25, events=POLLIN}, {fd=27, 
<br>
events=POLLIN}, {fd=33, events=POLLIN}, {fd=37, events=POLLIN}, {fd=39, 
<br>
events=POLLIN}, {fd=44, events=POLLIN}, {fd=48, events=POLLIN}, {fd=50, 
<br>
events=POLLIN}, {fd=55, events=POLLIN}, {fd=59, events=POLLIN}, {fd=61, 
<br>
events=POLLIN}, {fd=66, events=POLLIN}, {fd=70, events=POLLIN}, {fd=72, 
<br>
events=POLLIN}, {fd=77, events=POLLIN}, {fd=81, events=POLLIN}, {fd=83, 
<br>
events=POLLIN}, {fd=88, events=POLLIN}, {fd=92, events=POLLIN}, {fd=94, 
<br>
events=POLLIN}, {fd=99, events=POLLIN}, {fd=103, events=POLLIN}, 
<br>
{fd=105, events=POLLIN}, {fd=0, events=POLLIN}, {fd=100, events=POLLIN}, 
<br>
...], 39, 1000) = 1
<br>
<p>and the program keep printing this poll() call till I stop it!
<br>
<p>The program runs perfectly with my old configuration which was OpenMPI 
<br>
1.3.1 compiled with Gcc-4.4. Actually I see the same problem when I 
<br>
compile Openmpi-1.3.1 with Gcc 4.4. Is there any conflict which arise 
<br>
when gcc-4.4 is used?
<br>
<p>Regards, Simone
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9153.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
