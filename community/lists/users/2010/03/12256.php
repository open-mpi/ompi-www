<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 04:51:27 2010" -->
<!-- isoreceived="20100305095127" -->
<!-- sent="Fri, 5 Mar 2010 10:51:01 +0100" -->
<!-- isosent="20100305095101" -->
<!-- name="TRINH Minh Hieu" -->
<!-- email="mhtrinh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)" -->
<!-- id="698a35c61003050151m32c19843vd6617a832fea9e30_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A5519F4A-AE12-485B-AAED-F16C05430914_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-03-05 04:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12255.php">&#194;&#237;&#201;&#217;&#189;&#220;: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12253.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12755.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12755.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank you for those informations.
<br>
For the moment, I didn't encountered those problems yet. Maybe because, my
<br>
program don't use much memory (100MB) and the master machine have huge RAM
<br>
(8GB).
<br>
So meanwhile, the solution seems to be the parameter &quot;btl_tcp_eager_limit&quot;
<br>
but a cleaner solution is very welcome :-)
<br>
<p>&nbsp;&nbsp;&nbsp;TMHieu
<br>
<p>2010/3/5 Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setting the eager limit to such a drastically high value will have the
</span><br>
effect of generating gigantic memory consumption for unexpected messages.
<br>
Any message you send which does not have a preposted ready recv will
<br>
mallocate 150mb of temporary storage, and will be memcopied from that
<br>
internal buffer to the recv buffer when the recv is posted. You should
<br>
expect very poor bandwidth and probably crash/abort due to memory exhaustion
<br>
on the receivers.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Aurelien Bouteiller
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; University of Tennessee
</span><br>
<span class="quotelev1">&gt; Knoxville, TN, USA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 4 mars 2010 &#195;&#160; 09:02, TRINH Minh Hieu a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
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
wrote:
<br>
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
<span class="quotelev3">&gt;&gt;&gt;    TMHieu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you configure Open MPI with --enable-heterogeneous?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     if (me == 0 ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         for (int pe=1; pe&lt;nprocs; pe++)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 printf(&quot;Receiving from proc %d : &quot;,pe);
</span><br>
fflush(stdout);
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             printf(&quot;OK\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         printf(&quot;All done.\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ======== code ================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I got segmentation fault with n=10000 but no error with n=1000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have 2 machines :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sbtn155 : Intel Xeon,         x86_64
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
hetero.i686.o
<br>
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
hetero.x86_64.o
<br>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received signal
</span><br>
***
<br>
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
[0x2aaaad8d7908]
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so
</span><br>
[0x2aaaae2fc6e3]
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0
</span><br>
[0x2aaaaafe39db]
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
[0x2aaaad8d4b25]
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2aaaaab30f9b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
[0x3fa421e074]
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sbtn155:26386] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 26386 on node sbtn155
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    M. TRINH Minh Hieu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    F-30207 Bagnols-sur-C&#195;&#168;ze, FRANCE
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12255.php">&#194;&#237;&#201;&#217;&#189;&#220;: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12253.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12755.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12755.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
