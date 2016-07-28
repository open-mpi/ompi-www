<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 08:55:11 2010" -->
<!-- isoreceived="20100302135511" -->
<!-- sent="Tue, 2 Mar 2010 14:54:46 +0100" -->
<!-- isosent="20100302135446" -->
<!-- name="TRINH Minh Hieu" -->
<!-- email="mhtrinh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)" -->
<!-- id="698a35c61003020554j34048527q71ceb764ed8797c_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AA1DF726-57F9-47E6-AE8C-60B97907056F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)<br>
<strong>From:</strong> TRINH Minh Hieu (<em>mhtrinh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 08:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Yes, I compiled OpenMPI with --enable-heterogeneous. More precisely I
<br>
compiled with :
<br>
$ ./configure --prefix=/tmp/openmpi --enable-heterogeneous
<br>
--enable-cxx-exceptions --enable-shared
<br>
--enable-orterun-prefix-by-default
<br>
$ make all install
<br>
<p>I attach the output of ompi_info of my 2 machines.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;TMHieu
<br>
<p>On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Did you configure Open MPI with --enable-heterogeneous?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have some problems running MPI on my heterogeneous cluster. More
</span><br>
<span class="quotelev2">&gt;&gt; precisley i got segmentation fault when sending a large array (about
</span><br>
<span class="quotelev2">&gt;&gt; 10000) of double from a i686 machine to a x86_64 machine. It does not
</span><br>
<span class="quotelev2">&gt;&gt; happen with small array. Here is the send/recv code source (complete
</span><br>
<span class="quotelev2">&gt;&gt; source is in attached file) :
</span><br>
<span class="quotelev2">&gt;&gt; ========code ================
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; if (me == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; for (int pe=1; pe&lt;nprocs; pe++)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;Receiving from proc %d : &quot;,pe); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;OK\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;All done.\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; else {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev2">&gt;&gt; ======== code ================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got segmentation fault with n=10000 but no error with n=1000
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 machines :
</span><br>
<span class="quotelev2">&gt;&gt; sbtn155 : Intel Xeon, &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; x86_64
</span><br>
<span class="quotelev2">&gt;&gt; sbtn211 : Intel Pentium 4, i686
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code is compiled in x86_64 and i686 machine, using OpenMPI 1.4.1,
</span><br>
<span class="quotelev2">&gt;&gt; installed in /tmp/openmpi :
</span><br>
<span class="quotelev2">&gt;&gt; [mhtrinh_at_sbtn211 heterogenous]$ make hetero
</span><br>
<span class="quotelev2">&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.i686.o
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev2">&gt;&gt; hetero.i686.o -o hetero.i686 -lm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [mhtrinh_at_sbtn155 heterogenous]$ make hetero
</span><br>
<span class="quotelev2">&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.x86_64.o
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev2">&gt;&gt; hetero.x86_64.o -o hetero.x86_64 -lm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run with the code using appfile and got thoses error :
</span><br>
<span class="quotelev2">&gt;&gt; $ cat appfile
</span><br>
<span class="quotelev2">&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; --host sbtn211 -np 1 hetero.i686
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -hetero --app appfile
</span><br>
<span class="quotelev2">&gt;&gt; Input array length :
</span><br>
<span class="quotelev2">&gt;&gt; 10000
</span><br>
<span class="quotelev2">&gt;&gt; Receiving from proc 1 : OK
</span><br>
<span class="quotelev2">&gt;&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] Failing at address: 0x200627bd8
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d7908]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so [0x2aaaae2fc6e3]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0 [0x2aaaaafe39db]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d4b25]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaab30f9b]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3fa421e074]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
</span><br>
<span class="quotelev2">&gt;&gt; [sbtn155:26386] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 26386 on node sbtn155
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing an option in order to run in heterogenous cluster ?
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send/Recv have limit array size when using heterogeneous cluster ?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help. Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ============================================
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;M. TRINH Minh Hieu
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
</span><br>
<span class="quotelev2">&gt;&gt; ============================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hetero.c.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12198/ompi_info.x86_64">ompi_info.x86_64</a>
</ul>
<!-- attachment="ompi_info.x86_64" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12198/ompi_info.i686">ompi_info.i686</a>
</ul>
<!-- attachment="ompi_info.i686" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12197.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
