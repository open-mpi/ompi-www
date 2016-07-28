<?
$subject_val = "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 15:17:16 2009" -->
<!-- isoreceived="20090908191716" -->
<!-- sent="Tue, 8 Sep 2009 12:17:11 -0700" -->
<!-- isosent="20090908191711" -->
<!-- name="James" -->
<!-- email="jamesgao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers" -->
<!-- id="137a2bc20909081217j38813939lafb18a48f2cd1d64_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="337F2B5E-B5BF-454C-831F-FE8BEA28EB98_at_cisco.com" -->
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
<strong>From:</strong> James (<em>jamesgao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 15:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10595.php">Terry Frankcombe: "Re: [OMPI users] SVD with mpi"</a>
<li><strong>Previous message:</strong> <a href="10593.php">Douglas Guptill: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Sorry it took so long to respond - recompiling everything across the cluster
<br>
took a while. Without the --with-threads config flag, it seems to work a
<br>
little better - the limit still exists, there is still the same segfault,
<br>
but now it's up around 21,000,000 characters, instead of 16,000,000.
<br>
<p>Any ideas?
<br>
<p>-James
<br>
<p>On Wed, Sep 2, 2009 at 12:55 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you try without the --with-threads configure argument?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2009, at 11:48 PM, James Gao wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi everyone, I've been having a pretty odd issue with Slurm and
</span><br>
<span class="quotelev2">&gt;&gt; openmpi the last few days. I just set up a heterogeneous cluster with
</span><br>
<span class="quotelev2">&gt;&gt; Slurm consisting of P4 32 bit machines and a few new i7 64 bit
</span><br>
<span class="quotelev2">&gt;&gt; machines, all running the latest version of Ubuntu linux. I compiled
</span><br>
<span class="quotelev2">&gt;&gt; the latest OpenMPI 1.3.3 with the flags
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-heterogeneous --with-threads --with-slurm
</span><br>
<span class="quotelev2">&gt;&gt; --with-memory-manager --with-openib --without-udapl
</span><br>
<span class="quotelev2">&gt;&gt; --disable-openib-ibcm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also made a trivial test program:
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define LEN 12000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;        int size, rank, i, len = LEN;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if (argc &gt; 1) len = atoi(argv[1]);
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;Size: %d, &quot;, len);
</span><br>
<span class="quotelev2">&gt;&gt;        char *greeting = malloc(sizeof(char)*len);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                for ( i = 0; i &lt; len-1; i++)
</span><br>
<span class="quotelev2">&gt;&gt;                        greeting[i] = ' ';
</span><br>
<span class="quotelev2">&gt;&gt;                greeting[len-1] = '\0';
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Bcast(greeting, len, MPI_BYTE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;rank: %d\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;        free(greeting);
</span><br>
<span class="quotelev2">&gt;&gt;        return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run this with salloc -n 28 mpirun -n 28 mpitest on my slurm cluster.
</span><br>
<span class="quotelev2">&gt;&gt; At 12,000,000 characters, this command works exactly as expected, no
</span><br>
<span class="quotelev2">&gt;&gt; issues at all. However, beyond a certain critical limit somewhere
</span><br>
<span class="quotelev2">&gt;&gt; around 16,000,000 characters, the program will consistently segfault
</span><br>
<span class="quotelev2">&gt;&gt; with this error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; salloc -n 28 -p all mpiexec -n 28 mpitest 16500000
</span><br>
<span class="quotelev2">&gt;&gt; salloc: Granted job allocation 234
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] Failing at address: 0x101a60f58
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 0] /lib/libpthread.so.0 [0x7f6c00405080]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 1] /usr/local/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6bfd9dff68]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 2] /usr/local/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6bfcf3ec7c]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 3] /usr/local/lib/libopen-pal.so.0 [0x7f6c00ed5ee8]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/libopen-pal.so.0(opal_progress+0xa1) [0x7f6c00eca7b1]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 5] /usr/local/lib/libmpi.so.0 [0x7f6c013a185d]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 6] /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6bfc10c29c]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 7] /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6bfc10c9eb]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 8] /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6bfc10295c]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [ 9] /usr/local/lib/openmpi/mca_coll_sync.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6bfc31b35a]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [10] /usr/local/lib/libmpi.so.0(MPI_Bcast+0xa3)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6c013b78c3]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [11] mpitest(main+0xd4) [0x400bc0]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [12] /lib/libc.so.6(__libc_start_main+0xe6)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6c000a25a6]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] [13] mpitest [0x400a29]
</span><br>
<span class="quotelev2">&gt;&gt; [ibogaine:24883] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can tell, the segfault occurs on the root node doing the
</span><br>
<span class="quotelev2">&gt;&gt; broadcast. This error only occurs when I try to send across
</span><br>
<span class="quotelev2">&gt;&gt; heterogeneous sections. If I only communicate between homogeneous
</span><br>
<span class="quotelev2">&gt;&gt; subsets of the cluster, I can go as far as 120,000,000 characters
</span><br>
<span class="quotelev2">&gt;&gt; without issue. However, a hard &quot;limit&quot; seems to occur somewhere just
</span><br>
<span class="quotelev2">&gt;&gt; under 16,000,000 characters across the heterogeneous cluster. Any
</span><br>
<span class="quotelev2">&gt;&gt; ideas?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10595.php">Terry Frankcombe: "Re: [OMPI users] SVD with mpi"</a>
<li><strong>Previous message:</strong> <a href="10593.php">Douglas Guptill: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
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
