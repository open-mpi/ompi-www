<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 06:34:28 2010" -->
<!-- isoreceived="20100307113428" -->
<!-- sent="Sun, 7 Mar 2010 05:34:21 -0600" -->
<!-- isosent="20100307113421" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705670F_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 06:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Previous message:</strong> <a href="12266.php">Gijsbert Wiesenekker: "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ibm and sun (oracle) have probably done the most heterogeneous testing, but its probably not as stable as our homogeneous code paths.
<br>

<br>
Terry/brad - do you have any insight here?
<br>

<br>
Yes, setting eager limit high can impact performance. Its the amount of data that ompi will send eagerly without waiting for an ack from the receiver. There are several secondary performance effects that can occur if you are using sockets for transport and/or your program is only loosely synchronized. If your prog is tightly synchronous, it may not have too huge of an overall perf impact. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Thu Mar 04 09:02:19 2010
<br>
Subject: Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)
<br>

<br>
Hi,
<br>

<br>
I have some new discovery about this problem :
<br>

<br>
It seems that the array size sendable from a 32bit to 64bit machines
<br>
is proportional to the parameter &quot;btl_tcp_eager_limit&quot;
<br>
When I set it to 200 000 000 (2e08 bytes, about 190MB), I can send an
<br>
array up to 2e07 double (152MB).
<br>

<br>
I didn't found much informations about btl_tcp_eager_limit other than
<br>
in the &quot;ompi_info --all&quot; command. If I let it at 2e08, will it impacts
<br>
the performance of OpenMPI ?
<br>

<br>
It may be noteworth also that if the master (rank 0) is a 32bit
<br>
machines, I don't have segfault. I can send big array with small
<br>
&quot;btl_tcp_eager_limit&quot; from a 64bit machine to a 32bit one.
<br>

<br>
Do I have to move this thread to devel mailing list ?
<br>

<br>
Regards,
<br>

<br>
&nbsp;&nbsp;&nbsp;TMHieu
<br>

<br>
On Tue, Mar 2, 2010 at 2:54 PM, TRINH Minh Hieu &lt;mhtrinh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I compiled OpenMPI with --enable-heterogeneous. More precisely I
</span><br>
<span class="quotelev1">&gt; compiled with :
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/tmp/openmpi --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; $ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach the output of ompi_info of my 2 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;TMHieu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Did you configure Open MPI with --enable-heterogeneous?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have some problems running MPI on my heterogeneous cluster. More
</span><br>
<span class="quotelev3">&gt;&gt;&gt; precisley i got segmentation fault when sending a large array (about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10000) of double from a i686 machine to a x86_64 machine. It does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happen with small array. Here is the send/recv code source (complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source is in attached file) :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========code ================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; if (me == 0 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; for (int pe=1; pe&lt;nprocs; pe++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;Receiving from proc %d : &quot;,pe); fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;OK\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; printf(&quot;All done.\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======== code ================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got segmentation fault with n=10000 but no error with n=1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have 2 machines :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sbtn155 : Intel Xeon, &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sbtn211 : Intel Pentium 4, i686
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code is compiled in x86_64 and i686 machine, using OpenMPI 1.4.1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed in /tmp/openmpi :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mhtrinh_at_sbtn211 heterogenous]$ make hetero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.i686.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hetero.i686.o -o hetero.i686 -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mhtrinh_at_sbtn155 heterogenous]$ make hetero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.x86_64.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hetero.x86_64.o -o hetero.x86_64 -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run with the code using appfile and got thoses error :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host sbtn211 -np 1 hetero.i686
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -hetero --app appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Input array length :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Receiving from proc 1 : OK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] Failing at address: 0x200627bd8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d7908]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so [0x2aaaae2fc6e3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0 [0x2aaaaafe39db]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d4b25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2aaaaab30f9b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3fa421e074]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sbtn155:26386] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 26386 on node sbtn155
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing an option in order to run in heterogenous cluster ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/Recv have limit array size when using heterogeneous cluster ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help. Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160;M. TRINH Minh Hieu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160;CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160; &#194;&#160;F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;hetero.c.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Previous message:</strong> <a href="12266.php">Gijsbert Wiesenekker: "[OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
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
