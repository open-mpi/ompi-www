<?
$subject_val = "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 16:48:57 2009" -->
<!-- isoreceived="20090828204857" -->
<!-- sent="Fri, 28 Aug 2009 13:48:52 -0700" -->
<!-- isosent="20090828204852" -->
<!-- name="James Gao" -->
<!-- email="james_at_[hidden]" -->
<!-- subject="[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers" -->
<!-- id="137a2bc20908281348l7eab3b37j3b4ce72586fbe953_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Heterogeneous SLURM cluster segfaults on large transfers<br>
<strong>From:</strong> James Gao (<em>james_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 16:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10515.php">Daniel Spångberg: "[OMPI users] Very different speed of collective tuned algorithms for alltoallv"</a>
<li><strong>Previous message:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone, I've been having a pretty odd issue with Slurm and
<br>
openmpi the last few days. I just set up a heterogeneous cluster with
<br>
Slurm consisting of P4 32 bit machines and a few new i7 64 bit
<br>
machines, all running the latest version of Ubuntu linux. I compiled
<br>
the latest OpenMPI 1.3.3 with the flags
<br>
<p>./configure --enable-heterogeneous --with-threads --with-slurm
<br>
--with-memory-manager --with-openib --without-udapl
<br>
--disable-openib-ibcm
<br>
<p>I also made a trivial test program:
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#define LEN 12000000
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size, rank, i, len = LEN;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (argc &gt; 1) len = atoi(argv[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Size: %d, &quot;, len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *greeting = malloc(sizeof(char)*len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i = 0; i &lt; len-1; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;greeting[i] = ' ';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;greeting[len-1] = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(greeting, len, MPI_BYTE, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rank: %d\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(greeting);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I run this with salloc -n 28 mpirun -n 28 mpitest on my slurm cluster.
<br>
At 12,000,000 characters, this command works exactly as expected, no
<br>
issues at all. However, beyond a certain critical limit somewhere
<br>
around 16,000,000 characters, the program will consistently segfault
<br>
with this error message:
<br>
<p>salloc -n 28 -p all mpiexec -n 28 mpitest 16500000
<br>
salloc: Granted job allocation 234
<br>
[ibogaine:24883] *** Process received signal ***
<br>
[ibogaine:24883] Signal: Segmentation fault (11)
<br>
[ibogaine:24883] Signal code: Address not mapped (1)
<br>
[ibogaine:24883] Failing at address: 0x101a60f58
<br>
[ibogaine:24883] [ 0] /lib/libpthread.so.0 [0x7f6c00405080]
<br>
[ibogaine:24883] [ 1] /usr/local/lib/openmpi/mca_pml_ob1.so [0x7f6bfd9dff68]
<br>
[ibogaine:24883] [ 2] /usr/local/lib/openmpi/mca_btl_tcp.so [0x7f6bfcf3ec7c]
<br>
[ibogaine:24883] [ 3] /usr/local/lib/libopen-pal.so.0 [0x7f6c00ed5ee8]
<br>
[ibogaine:24883] [ 4]
<br>
/usr/local/lib/libopen-pal.so.0(opal_progress+0xa1) [0x7f6c00eca7b1]
<br>
[ibogaine:24883] [ 5] /usr/local/lib/libmpi.so.0 [0x7f6c013a185d]
<br>
[ibogaine:24883] [ 6] /usr/local/lib/openmpi/mca_coll_tuned.so [0x7f6bfc10c29c]
<br>
[ibogaine:24883] [ 7] /usr/local/lib/openmpi/mca_coll_tuned.so [0x7f6bfc10c9eb]
<br>
[ibogaine:24883] [ 8] /usr/local/lib/openmpi/mca_coll_tuned.so [0x7f6bfc10295c]
<br>
[ibogaine:24883] [ 9] /usr/local/lib/openmpi/mca_coll_sync.so [0x7f6bfc31b35a]
<br>
[ibogaine:24883] [10] /usr/local/lib/libmpi.so.0(MPI_Bcast+0xa3)
<br>
[0x7f6c013b78c3]
<br>
[ibogaine:24883] [11] mpitest(main+0xd4) [0x400bc0]
<br>
[ibogaine:24883] [12] /lib/libc.so.6(__libc_start_main+0xe6) [0x7f6c000a25a6]
<br>
[ibogaine:24883] [13] mpitest [0x400a29]
<br>
[ibogaine:24883] *** End of error message ***
<br>
<p>As far as I can tell, the segfault occurs on the root node doing the
<br>
broadcast. This error only occurs when I try to send across
<br>
heterogeneous sections. If I only communicate between homogeneous
<br>
subsets of the cluster, I can go as far as 120,000,000 characters
<br>
without issue. However, a hard &quot;limit&quot; seems to occur somewhere just
<br>
under 16,000,000 characters across the heterogeneous cluster. Any
<br>
ideas?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10515.php">Daniel Spångberg: "[OMPI users] Very different speed of collective tuned algorithms for alltoallv"</a>
<li><strong>Previous message:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
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
