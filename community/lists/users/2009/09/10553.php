<?
$subject_val = "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 03:55:13 2009" -->
<!-- isoreceived="20090902075513" -->
<!-- sent="Wed, 2 Sep 2009 10:55:08 +0300" -->
<!-- isosent="20090902075508" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers" -->
<!-- id="337F2B5E-B5BF-454C-831F-FE8BEA28EB98_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="137a2bc20908281348l7eab3b37j3b4ce72586fbe953_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 03:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10554.php">Attila Börcs: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>Previous message:</strong> <a href="10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10514.php">James Gao: "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10594.php">James: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Reply:</strong> <a href="10594.php">James: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try without the --with-threads configure argument?
<br>
<p>On Aug 28, 2009, at 11:48 PM, James Gao wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone, I've been having a pretty odd issue with Slurm and
</span><br>
<span class="quotelev1">&gt; openmpi the last few days. I just set up a heterogeneous cluster with
</span><br>
<span class="quotelev1">&gt; Slurm consisting of P4 32 bit machines and a few new i7 64 bit
</span><br>
<span class="quotelev1">&gt; machines, all running the latest version of Ubuntu linux. I compiled
</span><br>
<span class="quotelev1">&gt; the latest OpenMPI 1.3.3 with the flags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-heterogeneous --with-threads --with-slurm
</span><br>
<span class="quotelev1">&gt; --with-memory-manager --with-openib --without-udapl
</span><br>
<span class="quotelev1">&gt; --disable-openib-ibcm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also made a trivial test program:
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define LEN 12000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;         int size, rank, i, len = LEN;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (argc &gt; 1) len = atoi(argv[1]);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Size: %d, &quot;, len);
</span><br>
<span class="quotelev1">&gt;         char *greeting = malloc(sizeof(char)*len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;                 for ( i = 0; i &lt; len-1; i++)
</span><br>
<span class="quotelev1">&gt;                         greeting[i] = ' ';
</span><br>
<span class="quotelev1">&gt;                 greeting[len-1] = '\0';
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Bcast(greeting, len, MPI_BYTE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;rank: %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         free(greeting);
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run this with salloc -n 28 mpirun -n 28 mpitest on my slurm cluster.
</span><br>
<span class="quotelev1">&gt; At 12,000,000 characters, this command works exactly as expected, no
</span><br>
<span class="quotelev1">&gt; issues at all. However, beyond a certain critical limit somewhere
</span><br>
<span class="quotelev1">&gt; around 16,000,000 characters, the program will consistently segfault
</span><br>
<span class="quotelev1">&gt; with this error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc -n 28 -p all mpiexec -n 28 mpitest 16500000
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 234
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] Failing at address: 0x101a60f58
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 0] /lib/libpthread.so.0 [0x7f6c00405080]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 1] /usr/local/lib/openmpi/mca_pml_ob1.so  
</span><br>
<span class="quotelev1">&gt; [0x7f6bfd9dff68]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 2] /usr/local/lib/openmpi/mca_btl_tcp.so  
</span><br>
<span class="quotelev1">&gt; [0x7f6bfcf3ec7c]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 3] /usr/local/lib/libopen-pal.so.0 [0x7f6c00ed5ee8]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopen-pal.so.0(opal_progress+0xa1) [0x7f6c00eca7b1]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 5] /usr/local/lib/libmpi.so.0 [0x7f6c013a185d]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 6] /usr/local/lib/openmpi/mca_coll_tuned.so  
</span><br>
<span class="quotelev1">&gt; [0x7f6bfc10c29c]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 7] /usr/local/lib/openmpi/mca_coll_tuned.so  
</span><br>
<span class="quotelev1">&gt; [0x7f6bfc10c9eb]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 8] /usr/local/lib/openmpi/mca_coll_tuned.so  
</span><br>
<span class="quotelev1">&gt; [0x7f6bfc10295c]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [ 9] /usr/local/lib/openmpi/mca_coll_sync.so  
</span><br>
<span class="quotelev1">&gt; [0x7f6bfc31b35a]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [10] /usr/local/lib/libmpi.so.0(MPI_Bcast+0xa3)
</span><br>
<span class="quotelev1">&gt; [0x7f6c013b78c3]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [11] mpitest(main+0xd4) [0x400bc0]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [12] /lib/libc.so.6(__libc_start_main+0xe6)  
</span><br>
<span class="quotelev1">&gt; [0x7f6c000a25a6]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] [13] mpitest [0x400a29]
</span><br>
<span class="quotelev1">&gt; [ibogaine:24883] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I can tell, the segfault occurs on the root node doing the
</span><br>
<span class="quotelev1">&gt; broadcast. This error only occurs when I try to send across
</span><br>
<span class="quotelev1">&gt; heterogeneous sections. If I only communicate between homogeneous
</span><br>
<span class="quotelev1">&gt; subsets of the cluster, I can go as far as 120,000,000 characters
</span><br>
<span class="quotelev1">&gt; without issue. However, a hard &quot;limit&quot; seems to occur somewhere just
</span><br>
<span class="quotelev1">&gt; under 16,000,000 characters across the heterogeneous cluster. Any
</span><br>
<span class="quotelev1">&gt; ideas?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10554.php">Attila Börcs: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>Previous message:</strong> <a href="10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10514.php">James Gao: "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10594.php">James: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Reply:</strong> <a href="10594.php">James: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
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
