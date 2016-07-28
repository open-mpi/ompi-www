<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 02:25:08 2010" -->
<!-- isoreceived="20100305072508" -->
<!-- sent="Fri, 5 Mar 2010 02:24:58 -0500" -->
<!-- isosent="20100305072458" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)" -->
<!-- id="A5519F4A-AE12-485B-AAED-F16C05430914_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="698a35c61003040602v6009cf89g599898a387bef8c0_at_mail.gmail.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 02:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12254.php">马少杰: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12252.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12254.php">马少杰: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12254.php">马少杰: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>setting the eager limit to such a drastically high value will have the effect of generating gigantic memory consumption for unexpected messages. Any message you send which does not have a preposted ready recv will mallocate 150mb of temporary storage, and will be memcopied from that internal buffer to the recv buffer when the recv is posted. You should expect very poor bandwidth and probably crash/abort due to memory exhaustion on the receivers.
<br>
<p>Aurelien
<br>
<pre>
--
Dr. Aurelien Bouteiller
Innovative Computing Laboratory
University of Tennessee
Knoxville, TN, USA
 
Le 4 mars 2010 &#224; 09:02, TRINH Minh Hieu a &#233;crit :
&gt; Hi,
&gt; 
&gt; I have some new discovery about this problem :
&gt; 
&gt; It seems that the array size sendable from a 32bit to 64bit machines
&gt; is proportional to the parameter &quot;btl_tcp_eager_limit&quot;
&gt; When I set it to 200 000 000 (2e08 bytes, about 190MB), I can send an
&gt; array up to 2e07 double (152MB).
&gt; 
&gt; I didn't found much informations about btl_tcp_eager_limit other than
&gt; in the &quot;ompi_info --all&quot; command. If I let it at 2e08, will it impacts
&gt; the performance of OpenMPI ?
&gt; 
&gt; It may be noteworth also that if the master (rank 0) is a 32bit
&gt; machines, I don't have segfault. I can send big array with small
&gt; &quot;btl_tcp_eager_limit&quot; from a 64bit machine to a 32bit one.
&gt; 
&gt; Do I have to move this thread to devel mailing list ?
&gt; 
&gt; Regards,
&gt; 
&gt;   TMHieu
&gt; 
&gt; On Tue, Mar 2, 2010 at 2:54 PM, TRINH Minh Hieu &lt;mhtrinh_at_[hidden]&gt; wrote:
&gt;&gt; Hello,
&gt;&gt; 
&gt;&gt; Yes, I compiled OpenMPI with --enable-heterogeneous. More precisely I
&gt;&gt; compiled with :
&gt;&gt; $ ./configure --prefix=/tmp/openmpi --enable-heterogeneous
&gt;&gt; --enable-cxx-exceptions --enable-shared
&gt;&gt; --enable-orterun-prefix-by-default
&gt;&gt; $ make all install
&gt;&gt; 
&gt;&gt; I attach the output of ompi_info of my 2 machines.
&gt;&gt; 
&gt;&gt;    TMHieu
&gt;&gt; 
&gt;&gt; On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Did you configure Open MPI with --enable-heterogeneous?
&gt;&gt;&gt; 
&gt;&gt;&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Hello,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I have some problems running MPI on my heterogeneous cluster. More
&gt;&gt;&gt;&gt; precisley i got segmentation fault when sending a large array (about
&gt;&gt;&gt;&gt; 10000) of double from a i686 machine to a x86_64 machine. It does not
&gt;&gt;&gt;&gt; happen with small array. Here is the send/recv code source (complete
&gt;&gt;&gt;&gt; source is in attached file) :
&gt;&gt;&gt;&gt; ========code ================
&gt;&gt;&gt;&gt;     if (me == 0 ) {
&gt;&gt;&gt;&gt;         for (int pe=1; pe&lt;nprocs; pe++)
&gt;&gt;&gt;&gt;         {
&gt;&gt;&gt;&gt;                 printf(&quot;Receiving from proc %d : &quot;,pe); fflush(stdout);
&gt;&gt;&gt;&gt;             d=(double *)malloc(sizeof(double)*n);
&gt;&gt;&gt;&gt;             MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
&gt;&gt;&gt;&gt;             printf(&quot;OK\n&quot;); fflush(stdout);
&gt;&gt;&gt;&gt;         }
&gt;&gt;&gt;&gt;         printf(&quot;All done.\n&quot;);
&gt;&gt;&gt;&gt;     }
&gt;&gt;&gt;&gt;     else {
&gt;&gt;&gt;&gt;       d=(double *)malloc(sizeof(double)*n);
&gt;&gt;&gt;&gt;       MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
&gt;&gt;&gt;&gt;     }
&gt;&gt;&gt;&gt; ======== code ================
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I got segmentation fault with n=10000 but no error with n=1000
&gt;&gt;&gt;&gt; I have 2 machines :
&gt;&gt;&gt;&gt; sbtn155 : Intel Xeon,         x86_64
&gt;&gt;&gt;&gt; sbtn211 : Intel Pentium 4, i686
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; The code is compiled in x86_64 and i686 machine, using OpenMPI 1.4.1,
&gt;&gt;&gt;&gt; installed in /tmp/openmpi :
&gt;&gt;&gt;&gt; [mhtrinh_at_sbtn211 heterogenous]$ make hetero
&gt;&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.i686.o
&gt;&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
&gt;&gt;&gt;&gt; hetero.i686.o -o hetero.i686 -lm
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; [mhtrinh_at_sbtn155 heterogenous]$ make hetero
&gt;&gt;&gt;&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.x86_64.o
&gt;&gt;&gt;&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
&gt;&gt;&gt;&gt; hetero.x86_64.o -o hetero.x86_64 -lm
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I run with the code using appfile and got thoses error :
&gt;&gt;&gt;&gt; $ cat appfile
&gt;&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
&gt;&gt;&gt;&gt; --host sbtn155 -np 1 hetero.x86_64
&gt;&gt;&gt;&gt; --host sbtn211 -np 1 hetero.i686
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; $ mpirun -hetero --app appfile
&gt;&gt;&gt;&gt; Input array length :
&gt;&gt;&gt;&gt; 10000
&gt;&gt;&gt;&gt; Receiving from proc 1 : OK
&gt;&gt;&gt;&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received signal ***
&gt;&gt;&gt;&gt; [sbtn155:26386] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt; [sbtn155:26386] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt; [sbtn155:26386] Failing at address: 0x200627bd8
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d7908]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so [0x2aaaae2fc6e3]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0 [0x2aaaaafe39db]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 4]
&gt;&gt;&gt;&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d4b25]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
&gt;&gt;&gt;&gt; [0x2aaaaab30f9b]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3fa421e074]
&gt;&gt;&gt;&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
&gt;&gt;&gt;&gt; [sbtn155:26386] *** End of error message ***
&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 26386 on node sbtn155
&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Am I missing an option in order to run in heterogenous cluster ?
&gt;&gt;&gt;&gt; MPI_Send/Recv have limit array size when using heterogeneous cluster ?
&gt;&gt;&gt;&gt; Thanks for your help. Regards
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; ============================================
&gt;&gt;&gt;&gt;    M. TRINH Minh Hieu
&gt;&gt;&gt;&gt;    CEA, IBEB, SBTN/LIRM,
&gt;&gt;&gt;&gt;    F-30207 Bagnols-sur-C&#232;ze, FRANCE
&gt;&gt;&gt;&gt; ============================================
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; &lt;hetero.c.bz2&gt;_______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12254.php">马少杰: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12252.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12237.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12254.php">马少杰: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12254.php">马少杰: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
