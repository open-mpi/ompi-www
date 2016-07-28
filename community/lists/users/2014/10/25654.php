<?
$subject_val = "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 05:53:25 2014" -->
<!-- isoreceived="20141031095325" -->
<!-- sent="Fri, 31 Oct 2014 09:53:22 +0000" -->
<!-- isosent="20141031095322" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code" -->
<!-- id="8337B490252F0944BF1D38541059627E1736FAC3_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A30E5D79-E16B-412E-BAB0-02A1145209A1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug%20in%20OpenMPI-1.8.3:%20storage%20limition%20in%20shared%20memory%20allocation%20(MPI_WIN_ALLOCATE_SHARED)%20in%20Ftn-code"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-10-31 05:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25653.php">Brice Goglin: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25677.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25677.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers of OPENMPI,
<br>
<p>There remains a hanging observed in MPI_WIN_ALLOCATE_SHARED.
<br>
<p>But first: 
<br>
Thank you for your advices to employ     shmem_mmap_relocate_backing_file = 1
<br>
It indeed turned out, that the bad (but silent) allocations  by MPI_WIN_ALLOCATE_SHARED, which I observed in the past after ~140 MB of allocated shared memory, 
<br>
were indeed caused by  a too small available storage for the sharedmem backing files. Applying the MCA parameter resolved the problem.
<br>
<p>Now the allocation of shared data windows by  MPI_WIN_ALLOCATE_SHARED in the OPENMPI-1.8.3 release version works on both clusters!
<br>
I tested it both with my small sharedmem-Ftn-testprogram  as well as with our Ftn-CFD-code.
<br>
It worked  even when allocating 1000 shared data windows containing a total of 40 GB.  Very well.
<br>
<p>But now I come to the problem remaining:
<br>
According to the attached email of Jeff (see below) of 2014-10-24, 
<br>
we have alternatively installed and tested the bugfixed OPENMPI Nightly Tarball  of 2014-10-24  (openmpi-dev-176-g9334abc.tar.gz) on Cluster5 .
<br>
That version worked well, when our CFD-code was running on only 1 node.
<br>
But I observe now, that when running the CFD-code on 2 node with  2 processes per node,
<br>
after having allocated a total of 200 MB of data in 20 shared windows, the allocation of the 21-th window fails, 
<br>
because all 4 processes enter MPI_WIN_ALLOCATE_SHARED but never leave it. The code hangs in that routine, without any message.
<br>
<p>In contrast, that bug does NOT occur with the  OPENMPI-1.8.3 release version   with same program on same machine.
<br>
<p>That means for you:  
<br>
&nbsp;&nbsp;&nbsp;In openmpi-dev-176-g9334abc.tar.gz   the new-introduced  bugfix concerning the shared memory allocation may be not yet correctly coded ,
<br>
&nbsp;&nbsp;&nbsp;or that version contains another new bug in sharedmemory allocation  compared to the working(!) 1.8.3-release version.
<br>
<p>Greetings to you all
<br>
&nbsp;&nbsp;Michael Rachner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Freitag, 24. Oktober 2014 22:45
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code
<br>
<p>Nathan tells me that this may well be related to a fix that was literally just pulled into the v1.8 branch today:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/pull/56">https://github.com/open-mpi/ompi-release/pull/56</a>
<br>
<p>Would you mind testing any nightly tarball after tonight?  (i.e., the v1.8 tarballs generated tonight will be the first ones to contain this fix)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
<br>
<p><p><p>On Oct 24, 2014, at 11:46 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear developers of OPENMPI,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am running a small downsized Fortran-testprogram for shared memory allocation (using MPI_WIN_ALLOCATE_SHARED and  MPI_WIN_SHARED_QUERY) )
</span><br>
<span class="quotelev1">&gt; on only 1 node   of 2 different Linux-clusters with OPENMPI-1.8.3 and Intel-14.0.4 /Intel-13.0.1, respectively.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The program simply allocates a sequence of shared data windows, each consisting of 1 integer*4-array.
</span><br>
<span class="quotelev1">&gt; None of the windows is freed, so the amount of allocated data  in shared windows raises during the course of the execution.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; That worked well on the 1st cluster (Laki, having 8 procs per node))  
</span><br>
<span class="quotelev1">&gt; when allocating even 1000 shared windows each having 50000 integer*4 array elements, i.e. a total of  200 MBytes.
</span><br>
<span class="quotelev1">&gt; On the 2nd cluster (Cluster5, having 24 procs per node) it also worked on the login node, but it did NOT work on a compute node.
</span><br>
<span class="quotelev1">&gt; In that error case, there occurs something like an internal storage limit of ~ 140 MB for the total storage allocated in all shared windows.
</span><br>
<span class="quotelev1">&gt; When that limit is reached, all later shared memory allocations fail (but silently).
</span><br>
<span class="quotelev1">&gt; So the first attempt to use such a bad shared data window results in a bus error due to the bad storage address encountered.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; That strange behavior could be observed in the small testprogram but also with my large Fortran CFD-code.
</span><br>
<span class="quotelev1">&gt; If the error occurs, then it occurs with both codes, and both at a storage limit of  ~140 MB.
</span><br>
<span class="quotelev1">&gt; I found that this storage limit depends only weakly on  the number of 
</span><br>
<span class="quotelev1">&gt; processes (for np=2,4,8,16,24  it is: 144.4 , 144.0, 141.0, 137.0, 
</span><br>
<span class="quotelev1">&gt; 132.2 MB)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Note that the shared memory storage available on both clusters was very large (many GB of free memory).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is the error message when running with np=2 and an  array 
</span><br>
<span class="quotelev1">&gt; dimension of idim_1=50000  for the integer*4 array allocated per shared window on the compute node of Cluster5:
</span><br>
<span class="quotelev1">&gt; In that case, the error occurred at the 723-th shared window, which is the 1st badly allocated window in that case:
</span><br>
<span class="quotelev1">&gt; (722 successfully allocated shared windows * 50000 array elements * 4 
</span><br>
<span class="quotelev1">&gt; Bytes/el. = 144.4 MB)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;: ========on nodemaster: iwin=         722 :
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:  total storage [MByte] alloc. in shared windows so far:   144.400000000000
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;: =========== allocation of shared window no. iwin=         723
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:  starting now with idim_1=       50000
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;: ========on nodemaster for iwin=         723 : before writing on shared mem
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] *** Process received signal *** 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] Signal: Bus error (7) 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] Signal code: Non-existant physical 
</span><br>
<span class="quotelev1">&gt; address (2) [1,0]&lt;stderr&gt;:[r5i5n13:12597] Failing at address: 
</span><br>
<span class="quotelev1">&gt; 0x7fffe08da000 [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 0] 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:/lib64/libpthread.so.0(+0xf800)[0x7ffff6d67800]
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 1] ./a.out[0x408a8b] 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 2] ./a.out[0x40800c] 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 3] 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:/lib64/libc.so.6(__libc_start_main+0xe6)[0x7ffff69fec36]
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] [ 4] [1,0]&lt;stderr&gt;:./a.out[0x407f09] 
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:[r5i5n13:12597] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:libopen-pal.so.6   00007FFFF4B74580  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF7267F3E  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF733B555  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:libmpi.so.1        00007FFFF727DFFD  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:libmpi_mpifh.so.2  00007FFFF779BA03  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:a.out              0000000000408D15  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:a.out              000000000040800C  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:libc.so.6          00007FFFF69FEC36  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:a.out              0000000000407F09  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpiexec noticed that process rank 0 with PID 12597 on node 
</span><br>
<span class="quotelev1">&gt; r5i5n13 exited on signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The small Ftn-testprogram was built by   
</span><br>
<span class="quotelev1">&gt;   mpif90 sharedmemtest.f90
</span><br>
<span class="quotelev1">&gt;   mpiexec -np 2 -bind-to core -tag-output ./a.out
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Why does it work on the Laki  (both on login-node and on a compute 
</span><br>
<span class="quotelev1">&gt; node)  as well as on the login-node of Cluster5, but fails on an compute node of Cluster5?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt;    Michael Rachner
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25572.php">http://www.open-mpi.org/community/lists/users/2014/10/25572.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25580.php">http://www.open-mpi.org/community/lists/users/2014/10/25580.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25653.php">Brice Goglin: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25580.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25677.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25677.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
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
