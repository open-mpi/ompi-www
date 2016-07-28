<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 12:16:07 2010" -->
<!-- isoreceived="20100423161607" -->
<!-- sent="Fri, 23 Apr 2010 20:15:58 +0400" -->
<!-- isosent="20100423161558" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)" -->
<!-- id="1272039358.4818.137.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="698a35c61003050151m32c19843vd6617a832fea9e30_at_mail.gmail.com" -->
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
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 12:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12756.php">Orion Poplawski: "[OMPI users] Trouble using rankfile with gridengine"</a>
<li><strong>Previous message:</strong> <a href="12754.php">Eugene Loh: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
It seems that this was really a bug. It was recently fixed in repository
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/23030">https://svn.open-mpi.org/trac/ompi/changeset/23030</a>
<br>
and will likely be fixed in next 1.4 release.
<br>
<p>Here is corresponding thread in ompi-devel:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/04/7787.php">http://www.open-mpi.org/community/lists/devel/2010/04/7787.php</a>
<br>
<p>&#208;&#146; &#208;&#159;&#209;&#130;&#208;&#189;, 05/03/2010 &#208;&#178; 10:51 +0100, TRINH Minh Hieu &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for those informations. 
</span><br>
<span class="quotelev1">&gt; For the moment, I didn't encountered those problems yet. Maybe
</span><br>
<span class="quotelev1">&gt; because, my program don't use much memory (100MB) and the master
</span><br>
<span class="quotelev1">&gt; machine have huge RAM (8GB).
</span><br>
<span class="quotelev1">&gt; So meanwhile, the solution seems to be the parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_eager_limit&quot; but a cleaner solution is very welcome :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    TMHieu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/3/5 Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; setting the eager limit to such a drastically high value will have
</span><br>
<span class="quotelev1">&gt; the effect of generating gigantic memory consumption for unexpected
</span><br>
<span class="quotelev1">&gt; messages. Any message you send which does not have a preposted ready
</span><br>
<span class="quotelev1">&gt; recv will mallocate 150mb of temporary storage, and will be memcopied
</span><br>
<span class="quotelev1">&gt; from that internal buffer to the recv buffer when the recv is posted.
</span><br>
<span class="quotelev1">&gt; You should expect very poor bandwidth and probably crash/abort due to
</span><br>
<span class="quotelev1">&gt; memory exhaustion on the receivers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Aurelien Bouteiller
</span><br>
<span class="quotelev2">&gt; &gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; University of Tennessee
</span><br>
<span class="quotelev2">&gt; &gt; Knoxville, TN, USA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 4 mars 2010 &#195;&#160; 09:02, TRINH Minh Hieu a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have some new discovery about this problem :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems that the array size sendable from a 32bit to 64bit
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is proportional to the parameter &quot;btl_tcp_eager_limit&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I set it to 200 000 000 (2e08 bytes, about 190MB), I can send
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; array up to 2e07 double (152MB).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I didn't found much informations about btl_tcp_eager_limit other
</span><br>
<span class="quotelev1">&gt; than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in the &quot;ompi_info --all&quot; command. If I let it at 2e08, will it
</span><br>
<span class="quotelev1">&gt; impacts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the performance of OpenMPI ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It may be noteworth also that if the master (rank 0) is a 32bit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machines, I don't have segfault. I can send big array with small
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;btl_tcp_eager_limit&quot; from a 64bit machine to a 32bit one.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do I have to move this thread to devel mailing list ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   TMHieu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Mar 2, 2010 at 2:54 PM, TRINH Minh Hieu &lt;mhtrinh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yes, I compiled OpenMPI with --enable-heterogeneous. More
</span><br>
<span class="quotelev1">&gt; precisely I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compiled with :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ ./configure --prefix=/tmp/openmpi --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-cxx-exceptions --enable-shared
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ make all install
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I attach the output of ompi_info of my 2 machines.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    TMHieu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Did you configure Open MPI with --enable-heterogeneous?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have some problems running MPI on my heterogeneous cluster.
</span><br>
<span class="quotelev1">&gt; More
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; precisley i got segmentation fault when sending a large array
</span><br>
<span class="quotelev1">&gt; (about
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 10000) of double from a i686 machine to a x86_64 machine. It
</span><br>
<span class="quotelev1">&gt; does not
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; happen with small array. Here is the send/recv code source
</span><br>
<span class="quotelev1">&gt; (complete
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; source is in attached file) :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ========code ================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     if (me == 0 ) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         for (int pe=1; pe&lt;nprocs; pe++)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 printf(&quot;Receiving from proc %d : &quot;,pe);
</span><br>
<span class="quotelev1">&gt; fflush(stdout);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;             d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;             printf(&quot;OK\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         printf(&quot;All done.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     else {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======== code ================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I got segmentation fault with n=10000 but no error with n=1000
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have 2 machines :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; sbtn155 : Intel Xeon,         x86_64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; sbtn211 : Intel Pentium 4, i686
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The code is compiled in x86_64 and i686 machine, using OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.4.1,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; installed in /tmp/openmpi :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mhtrinh_at_sbtn211 heterogenous]$ make hetero
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o
</span><br>
<span class="quotelev1">&gt; hetero.i686.o
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3
</span><br>
<span class="quotelev1">&gt; -I/tmp/openmpi/include
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; hetero.i686.o -o hetero.i686 -lm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mhtrinh_at_sbtn155 heterogenous]$ make hetero
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o
</span><br>
<span class="quotelev1">&gt; hetero.x86_64.o
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3
</span><br>
<span class="quotelev1">&gt; -I/tmp/openmpi/include
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; hetero.x86_64.o -o hetero.x86_64 -lm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I run with the code using appfile and got thoses error :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ cat appfile
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --host sbtn211 -np 1 hetero.i686
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ mpirun -hetero --app appfile
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Input array length :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 10000
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Receiving from proc 1 : OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received
</span><br>
<span class="quotelev1">&gt; signal ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] Failing at address: 0x200627bd8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaad8d7908]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaae2fc6e3]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafe39db]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 4]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafd8b9e]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaad8d4b25]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv
</span><br>
<span class="quotelev1">&gt; +0x13b)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [0x2aaaaab30f9b]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3fa421e074]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [sbtn155:26386] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 26386 on node
</span><br>
<span class="quotelev1">&gt; sbtn155
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Am I missing an option in order to run in heterogenous cluster ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MPI_Send/Recv have limit array size when using heterogeneous
</span><br>
<span class="quotelev1">&gt; cluster ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks for your help. Regards
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    M. TRINH Minh Hieu
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;hetero.c.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;   M. TRINH Minh Hieu
</span><br>
<span class="quotelev1">&gt;   CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev1">&gt;   F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
</span><br>
<span class="quotelev1">&gt; ============================================
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
<p><p><pre>
-- 
Kind regards,
Timur Magomedov
Senior C++ Developer
DevelopOnBox LLC / Zodiac Interactive
<a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12756.php">Orion Poplawski: "[OMPI users] Trouble using rankfile with gridengine"</a>
<li><strong>Previous message:</strong> <a href="12754.php">Eugene Loh: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
