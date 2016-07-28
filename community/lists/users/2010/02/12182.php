<?
$subject_val = "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 28 13:22:52 2010" -->
<!-- isoreceived="20100228182252" -->
<!-- sent="Sun, 28 Feb 2010 19:22:27 +0100" -->
<!-- isosent="20100228182227" -->
<!-- name="TRINH Minh Hieu" -->
<!-- email="mhtrinh_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)" -->
<!-- id="698a35c61002281022x5758df43v9dfc5077ca3b286a_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)<br>
<strong>From:</strong> TRINH Minh Hieu (<em>mhtrinh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-28 13:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12183.php">Fernando Lemos: "[OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12181.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12187.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12187.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12188.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have some problems running MPI on my heterogeneous cluster. More
<br>
precisley i got segmentation fault when sending a large array (about
<br>
10000) of double from a i686 machine to a x86_64 machine. It does not
<br>
happen with small array. Here is the send/recv code source (complete
<br>
source is in attached file) :
<br>
========code ================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int pe=1; pe&lt;nprocs; pe++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Receiving from proc %d : &quot;,pe); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d=(double *)malloc(sizeof(double)*n);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;OK\n&quot;); fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;All done.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d=(double *)malloc(sizeof(double)*n);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
======== code ================
<br>
<p>I got segmentation fault with n=10000 but no error with n=1000
<br>
I have 2 machines :
<br>
sbtn155 : Intel Xeon,         x86_64
<br>
sbtn211 : Intel Pentium 4, i686
<br>
<p>The code is compiled in x86_64 and i686 machine, using OpenMPI 1.4.1,
<br>
installed in /tmp/openmpi :
<br>
[mhtrinh_at_sbtn211 heterogenous]$ make hetero
<br>
gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.i686.o
<br>
/tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
<br>
hetero.i686.o -o hetero.i686 -lm
<br>
<p>[mhtrinh_at_sbtn155 heterogenous]$ make hetero
<br>
gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.x86_64.o
<br>
/tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
<br>
hetero.x86_64.o -o hetero.x86_64 -lm
<br>
<p>I run with the code using appfile and got thoses error :
<br>
$ cat appfile
<br>
--host sbtn155 -np 1 hetero.x86_64
<br>
--host sbtn155 -np 1 hetero.x86_64
<br>
--host sbtn211 -np 1 hetero.i686
<br>
<p>$ mpirun -hetero --app appfile
<br>
Input array length :
<br>
10000
<br>
Receiving from proc 1 : OK
<br>
Receiving from proc 2 : [sbtn155:26386] *** Process received signal ***
<br>
[sbtn155:26386] Signal: Segmentation fault (11)
<br>
[sbtn155:26386] Signal code: Address not mapped (1)
<br>
[sbtn155:26386] Failing at address: 0x200627bd8
<br>
[sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
<br>
[sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d7908]
<br>
[sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so [0x2aaaae2fc6e3]
<br>
[sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0 [0x2aaaaafe39db]
<br>
[sbtn155:26386] [ 4]
<br>
/tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
<br>
[sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d4b25]
<br>
[sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
<br>
[0x2aaaaab30f9b]
<br>
[sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
<br>
[sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3fa421e074]
<br>
[sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
<br>
[sbtn155:26386] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 26386 on node sbtn155
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Am I missing an option in order to run in heterogenous cluster ?
<br>
MPI_Send/Recv have limit array size when using heterogeneous cluster ?
<br>
Thanks for your help. Regards
<br>
<p><pre>
-- 
============================================
   M. TRINH Minh Hieu
   CEA, IBEB, SBTN/LIRM,
   F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
============================================

</pre>
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12182/hetero.c.bz2">hetero.c.bz2</a>
</ul>
<!-- attachment="hetero.c.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12183.php">Fernando Lemos: "[OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12181.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12187.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12187.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12188.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
