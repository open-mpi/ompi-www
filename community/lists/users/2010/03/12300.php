<?
$subject_val = "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 10:16:13 2010" -->
<!-- isoreceived="20100310151613" -->
<!-- sent="Wed, 10 Mar 2010 07:16:07 -0800" -->
<!-- isosent="20100310151607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)" -->
<!-- id="2605270D-67DD-43B2-8CBE-789CA02DC5F8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="698a35c61003080656k740bc266ke4766b2a1d00df4f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 10:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12299.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12277.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since we don't have an obvious answer for this, I have filed ticket 2236 to track this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2336">https://svn.open-mpi.org/trac/ompi/ticket/2336</a>
<br>
<p><p>On Mar 8, 2010, at 6:56 AM, TRINH Minh Hieu wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I changed the test code (hetero.c, in attach) so that the master (where data is centralized) can be rank 1 or 2. 
</span><br>
<span class="quotelev1">&gt; I tested with a master,rank 2 or rank 1 : same probleme, when the master is a 64bit machine, as soon as it receive data from a 32bit machines it got segfault. no probleme with a 32bit master. It seems to not be rank dependent ... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 8, 2010 at 1:27 PM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; We (Oracle) have not done that much extensive limits testing going between 32 to 64bit applications.  Most of the testing we've done is more around endianess (SPARC vs x86_64).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though the below is kind of interesting.  Sounds like the eager limit isn't being normalized on the 64 bit machines.  Though a 32 bit rank 0 solving the problem also is very interesting, I wonder if that is not more due to which rank is send and receiving?
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
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Sun, 7 Mar 2010 05:34:21 -0600
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segmentation fault when Send/Recv
</span><br>
<span class="quotelev1">&gt;        onheterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;58D723FE08DC6A4398E6596E38F3FA1705670F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ibm and sun (oracle) have probably done the most heterogeneous testing, but its probably not as stable as our homogeneous code paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Terry/brad - do you have any insight here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, setting eager limit high can impact performance. Its the amount of data that ompi will send eagerly without waiting for an ack from the receiver. There are several secondary performance effects that can occur if you are using sockets for transport and/or your program is only loosely synchronized. If your prog is tightly synchronous, it may not have too huge of an overall perf impact. 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thu Mar 04 09:02:19 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segmentation fault when Send/Recv onheterogeneouscluster (32/64 bit machines)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some new discovery about this problem :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the array size sendable from a 32bit to 64bit machines
</span><br>
<span class="quotelev1">&gt; is proportional to the parameter &quot;btl_tcp_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt; When I set it to 200 000 000 (2e08 bytes, about 190MB), I can send an
</span><br>
<span class="quotelev1">&gt; array up to 2e07 double (152MB).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't found much informations about btl_tcp_eager_limit other than
</span><br>
<span class="quotelev1">&gt; in the &quot;ompi_info --all&quot; command. If I let it at 2e08, will it impacts
</span><br>
<span class="quotelev1">&gt; the performance of OpenMPI ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It may be noteworth also that if the master (rank 0) is a 32bit
</span><br>
<span class="quotelev1">&gt; machines, I don't have segfault. I can send big array with small
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_eager_limit&quot; from a 64bit machine to a 32bit one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do I have to move this thread to devel mailing list ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   TMHieu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 2, 2010 at 2:54 PM, TRINH Minh Hieu &lt;mhtrinh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
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
<span class="quotelev1">&gt; ? ?TMHieu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 2, 2010 at 1:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; Did you configure Open MPI with --enable-heterogeneous?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2010, at 1:22 PM, TRINH Minh Hieu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some problems running MPI on my heterogeneous cluster. More
</span><br>
<span class="quotelev1">&gt; precisley i got segmentation fault when sending a large array (about
</span><br>
<span class="quotelev1">&gt; 10000) of double from a i686 machine to a x86_64 machine. It does not
</span><br>
<span class="quotelev1">&gt; happen with small array. Here is the send/recv code source (complete
</span><br>
<span class="quotelev1">&gt; source is in attached file) :
</span><br>
<span class="quotelev1">&gt; ========code ================
</span><br>
<span class="quotelev1">&gt; ? ? if (me == 0 ) {
</span><br>
<span class="quotelev1">&gt; ? ? ? ? for (int pe=1; pe&lt;nprocs; pe++)
</span><br>
<span class="quotelev1">&gt; ? ? ? ? {
</span><br>
<span class="quotelev1">&gt; ? ? ? ? ? ? ? ? printf(&quot;Receiving from proc %d : &quot;,pe); fflush(stdout);
</span><br>
<span class="quotelev1">&gt; ? ? ? ? ? ? d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev1">&gt; ? ? ? ? ? ? MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev1">&gt; ? ? ? ? ? ? printf(&quot;OK\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev1">&gt; ? ? ? ? }
</span><br>
<span class="quotelev1">&gt; ? ? ? ? printf(&quot;All done.\n&quot;);
</span><br>
<span class="quotelev1">&gt; ? ? }
</span><br>
<span class="quotelev1">&gt; ? ? else {
</span><br>
<span class="quotelev1">&gt; ? ? ? d=(double *)malloc(sizeof(double)*n);
</span><br>
<span class="quotelev1">&gt; ? ? ? MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; ? ? }
</span><br>
<span class="quotelev1">&gt; ======== code ================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got segmentation fault with n=10000 but no error with n=1000
</span><br>
<span class="quotelev1">&gt; I have 2 machines :
</span><br>
<span class="quotelev1">&gt; sbtn155 : Intel Xeon, ? ? ? ? x86_64
</span><br>
<span class="quotelev1">&gt; sbtn211 : Intel Pentium 4, i686
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is compiled in x86_64 and i686 machine, using OpenMPI 1.4.1,
</span><br>
<span class="quotelev1">&gt; installed in /tmp/openmpi :
</span><br>
<span class="quotelev1">&gt; [mhtrinh_at_sbtn211 heterogenous]$ make hetero
</span><br>
<span class="quotelev1">&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.i686.o
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev1">&gt; hetero.i686.o -o hetero.i686 -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mhtrinh_at_sbtn155 heterogenous]$ make hetero
</span><br>
<span class="quotelev1">&gt; gcc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include -c hetero.c -o hetero.x86_64.o
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi/bin/mpicc -Wall -I. -std=c99 -O3 -I/tmp/openmpi/include
</span><br>
<span class="quotelev1">&gt; hetero.x86_64.o -o hetero.x86_64 -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run with the code using appfile and got thoses error :
</span><br>
<span class="quotelev1">&gt; $ cat appfile
</span><br>
<span class="quotelev1">&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev1">&gt; --host sbtn155 -np 1 hetero.x86_64
</span><br>
<span class="quotelev1">&gt; --host sbtn211 -np 1 hetero.i686
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -hetero --app appfile
</span><br>
<span class="quotelev1">&gt; Input array length :
</span><br>
<span class="quotelev1">&gt; 10000
</span><br>
<span class="quotelev1">&gt; Receiving from proc 1 : OK
</span><br>
<span class="quotelev1">&gt; Receiving from proc 2 : [sbtn155:26386] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] Failing at address: 0x200627bd8
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 0] /lib64/libpthread.so.0 [0x3fa4e0e540]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 1] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d7908]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 2] /tmp/openmpi/lib/openmpi/mca_btl_tcp.so [0x2aaaae2fc6e3]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 3] /tmp/openmpi/lib/libopen-pal.so.0 [0x2aaaaafe39db]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 4]
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aaaaafd8b9e]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 5] /tmp/openmpi/lib/openmpi/mca_pml_ob1.so [0x2aaaad8d4b25]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 6] /tmp/openmpi/lib/libmpi.so.0(MPI_Recv+0x13b)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab30f9b]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 7] hetero.x86_64(main+0xde) [0x400cbe]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3fa421e074]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] [ 9] hetero.x86_64 [0x400b29]
</span><br>
<span class="quotelev1">&gt; [sbtn155:26386] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 26386 on node sbtn155
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I missing an option in order to run in heterogenous cluster ?
</span><br>
<span class="quotelev1">&gt; MPI_Send/Recv have limit array size when using heterogeneous cluster ?
</span><br>
<span class="quotelev1">&gt; Thanks for your help. Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; ? ?M. TRINH Minh Hieu
</span><br>
<span class="quotelev1">&gt; ? ?CEA, IBEB, SBTN/LIRM,
</span><br>
<span class="quotelev1">&gt; ? ?F-30207 Bagnols-sur-C?ze, FRANCE
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;hetero.c.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  **************************************
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
<span class="quotelev1">&gt;   F-30207 Bagnols-sur-C&#232;ze, FRANCE
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; &lt;hetero.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12299.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12277.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
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
