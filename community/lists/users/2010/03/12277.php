<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 09:57:09 2010" -->
<!-- isoreceived="20100308145709" -->
<!-- sent="Mon, 8 Mar 2010 15:56:43 +0100" -->
<!-- isosent="20100308145643" -->
<!-- name="TRINH Minh Hieu" -->
<!-- email="mhtrinh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)" -->
<!-- id="698a35c61003080656k740bc266ke4766b2a1d00df4f_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B94ED16.4090908_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)<br>
<strong>From:</strong> TRINH Minh Hieu (<em>mhtrinh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-08 09:56:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12278.php">Richard Treumann: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>Previous message:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>In reply to:</strong> <a href="12275.php">Terry Dontje: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12300.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="12300.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I changed the test code (hetero.c, in attach) so that the master (where data
<br>
is centralized) can be rank 1 or 2.
<br>
I tested with a master,rank 2 or rank 1 : same probleme, when the master is
<br>
a 64bit machine, as soon as it receive data from a 32bit machines it got
<br>
segfault. no probleme with a 32bit master. It seems to not be rank dependent
<br>
...
<br>
<p>Regards,
<br>
<p><p>On Mon, Mar 8, 2010 at 1:27 PM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; We (Oracle) have not done that much extensive limits testing going between
</span><br>
<span class="quotelev1">&gt; 32 to 64bit applications.  Most of the testing we've done is more around
</span><br>
<span class="quotelev1">&gt; endianess (SPARC vs x86_64).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though the below is kind of interesting.  Sounds like the eager limit isn't
</span><br>
<span class="quotelev1">&gt; being normalized on the 64 bit machines.  Though a 32 bit rank 0 solving the
</span><br>
<span class="quotelev1">&gt; problem also is very interesting, I wonder if that is not more due to which
</span><br>
<span class="quotelev1">&gt; rank is send and receiving?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sun, 7 Mar 2010 05:34:21 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Segmentation fault when Send/Recv
</span><br>
<span class="quotelev2">&gt;&gt;        onheterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;58D723FE08DC6A4398E6596E38F3FA1705670F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ibm and sun (oracle) have probably done the most heterogeneous testing,
</span><br>
<span class="quotelev2">&gt;&gt; but its probably not as stable as our homogeneous code paths.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry/brad - do you have any insight here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, setting eager limit high can impact performance. Its the amount of
</span><br>
<span class="quotelev2">&gt;&gt; data that ompi will send eagerly without waiting for an ack from the
</span><br>
<span class="quotelev2">&gt;&gt; receiver. There are several secondary performance effects that can occur if
</span><br>
<span class="quotelev2">&gt;&gt; you are using sockets for transport and/or your program is only loosely
</span><br>
<span class="quotelev2">&gt;&gt; synchronized. If your prog is tightly synchronous, it may not have too huge
</span><br>
<span class="quotelev2">&gt;&gt; of an overall perf impact.
</span><br>
<span class="quotelev2">&gt;&gt; -jms
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thu Mar 04 09:02:19 2010
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Segmentation fault when Send/Recv
</span><br>
<span class="quotelev2">&gt;&gt; onheterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have some new discovery about this problem :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the array size sendable from a 32bit to 64bit machines
</span><br>
<span class="quotelev2">&gt;&gt; is proportional to the parameter &quot;btl_tcp_eager_limit&quot;
</span><br>
<span class="quotelev2">&gt;&gt; When I set it to 200 000 000 (2e08 bytes, about 190MB), I can send an
</span><br>
<span class="quotelev2">&gt;&gt; array up to 2e07 double (152MB).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't found much informations about btl_tcp_eager_limit other than
</span><br>
<span class="quotelev2">&gt;&gt; in the &quot;ompi_info --all&quot; command. If I let it at 2e08, will it impacts
</span><br>
<span class="quotelev2">&gt;&gt; the performance of OpenMPI ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It may be noteworth also that if the master (rank 0) is a 32bit
</span><br>
<span class="quotelev2">&gt;&gt; machines, I don't have segfault. I can send big array with small
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_eager_limit&quot; from a 64bit machine to a 32bit one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I have to move this thread to devel mailing list ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   TMHieu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Mar 2, 2010 at 2:54 PM, TRINH Minh Hieu &lt;mhtrinh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I compiled OpenMPI with --enable-heterogeneous. More precisely I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled with :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./configure --prefix=/tmp/openmpi --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attach the output of ompi_info of my 2 machines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ? ?TMHieu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you configure Open MPI with --enable-heterogeneous?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have some problems running MPI on my heterogeneous cluster. More
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; precisley i got segmentation fault when sending a large array (about
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10000) of double from a i686 machine to a x86_64 machine. It does not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happen with small array. Here is the send/recv code source (complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source is in attached file) :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ========code ================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? if (me == 0 ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? for (int pe=1; pe&lt;nprocs; pe++)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? ? ? ? ? printf(&quot;Receiving from proc %d : &quot;,pe); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? ? ? d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? ? ? MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? ? ? printf(&quot;OK\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? ? printf(&quot;All done.\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? ? MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ? }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ======== code ================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I got segmentation fault with n=10000 but no error with n=1000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have 2 machines :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sbtn155 : Intel Xeon, ? ? ? ? x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sbtn211 : Intel Pentium 4, i686
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The code is compiled in x86_64 and i686 machine, using OpenMPI 1.4.1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installed in /tmp/openmpi :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mhtrinh_at_sbtn211 heterogenous]$ make hetero
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hetero.i686.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hetero.i686.o -o hetero.i686 -lm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mhtrinh_at_sbtn155 heterogenous]$ make hetero
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hetero.x86_64.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hetero.x86_64.o -o hetero.x86_64 -lm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I run with the code using appfile and got thoses error :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat appfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --host sbtn211 -np 1 hetero.i686
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun -hetero --app appfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Input array length :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Receiving from proc 1 : OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] Failing at address: 0x200627bd8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2aaaad8d7908]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2aaaae2fc6e3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0 [0x2aaaaafe39db]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2aaaad8d4b25]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2aaaaab30f9b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x3fa421e074]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 26386 on node sbtn155
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am I missing an option in order to run in heterogenous cluster ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Send/Recv have limit array size when using heterogeneous cluster ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your help. Regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ?M. TRINH Minh Hieu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ?CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ? ?F-30207 Bagnols-sur-C?ze, FRANCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;hetero.c.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  **************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
============================================
  M. TRINH Minh Hieu
  CEA, IBEB, SBTN/LIRM,
  F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
============================================

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12277/hetero.c">hetero.c</a>
</ul>
<!-- attachment="hetero.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12278.php">Richard Treumann: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>Previous message:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>In reply to:</strong> <a href="12275.php">Terry Dontje: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12300.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="12300.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
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
