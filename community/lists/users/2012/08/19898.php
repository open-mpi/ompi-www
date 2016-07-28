<?
$subject_val = "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 06:47:27 2012" -->
<!-- isoreceived="20120807104727" -->
<!-- sent="Tue, 7 Aug 2012 12:47:37 +0200" -->
<!-- isosent="20120807104737" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem." -->
<!-- id="2DB2156C-13E6-42A1-B7EE-A7CB92C0800A_at_eecs.utk.edu" -->
<!-- charset="iso-8859-2" -->
<!-- inreplyto="CAGAQqqOxri+yW=hw1CcRWio2jTRPkiYVYW058+7FkKZ_Ka3ETA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem.<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 06:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19899.php">Pawe³ Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Previous message:</strong> <a href="19897.php">Pawe&#179; Jaromin: "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>In reply to:</strong> <a href="19897.php">Pawe&#179; Jaromin: "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19899.php">Pawe³ Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Reply:</strong> <a href="19899.php">Pawe³ Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All MPI operations (including MPI_Send and MPI_Recv) consider any type of buffers (input and output) as a contiguous entity.
<br>
<p>Therefore, you have two options:
<br>
<p>1. Have a loop around MPI_Send &amp; MPI_Recv similar to the allocation section.
<br>
<p>2. Build an MPI Datatype representing the non-contiguous memory layout you really intend to send between peers.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Aug 7, 2012, at 10:33 , Pawe&#179; Jaromin wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, may be this is a stupid question, bat a have a big problem with
</span><br>
<span class="quotelev1">&gt; maloc() and  matrix arrays.
</span><br>
<span class="quotelev1">&gt; I want to make a program that do very simple thing like matriA *
</span><br>
<span class="quotelev1">&gt; matrixB = matrixC.
</span><br>
<span class="quotelev1">&gt; Because I need more matrix size than 100x100 (5000x5000), I have to
</span><br>
<span class="quotelev1">&gt; use maloc() for memory allocation.
</span><br>
<span class="quotelev1">&gt; First I tried this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The typical form for dynamically allocating an NxM array of type T is:
</span><br>
<span class="quotelev1">&gt; T **a = malloc(sizeof *a * N);
</span><br>
<span class="quotelev1">&gt; if (a)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; N; i++)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    a[i] = malloc(sizeof *a[i] * M);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; // the arrays are created before  split to nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No problem with create, fill array,but the problem started when I have
</span><br>
<span class="quotelev1">&gt; send and receive it.
</span><br>
<span class="quotelev1">&gt; Of course before  send I calculated &quot;cont&quot; for MPI_Send.
</span><br>
<span class="quotelev1">&gt; To be shore, that the count for MPI_Send i MPI_Recv is the same I also
</span><br>
<span class="quotelev1">&gt; send &quot;count&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; count = rows*matrix_size*sizeof (double); //part of matrix
</span><br>
<span class="quotelev1">&gt; MPI_Send(&amp;count, 1, MPI_INT, dest, mtype,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_Send(&amp;matrixA[offset][0], count, MPI_DOUBLE, dest, mtype, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from worker side the code looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;countA, 1, MPI_INT, source, mtype, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;matrixA[0][0], countA, MPI_DOUBLE, source, mtype,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An error looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] Failing at address: 0x88fa000
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 0] [0xc2740c]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x906c) [0x17606c]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6a1b) [0x173a1b]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x3ae6) [0x7b7ae6]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib/libopen-pal.so.0(opal_progress+0x81) [0x406fa1]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x48e5) [0x1718e5]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 6] /usr/lib/libmpi.so.0(MPI_Recv+0x165) [0x1ef9d5]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 7] macierz_V.02(main+0x927) [0x8049870]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 8] /lib/libc.so.6(__libc_start_main+0xe7)
</span><br>
<span class="quotelev1">&gt; [0xddfce7]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] [ 9] macierz_V.02() [0x8048b71]
</span><br>
<span class="quotelev1">&gt; [pawcioj-VirtualBox:01700] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 1700 on node
</span><br>
<span class="quotelev1">&gt; pawcioj-VirtualBox exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because I have no result, I tied do that by 1D array but the problem
</span><br>
<span class="quotelev1">&gt; seems similar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably I do something wrong, so I would like to ask you about advice
</span><br>
<span class="quotelev1">&gt; how do that proper or maybe link to useful tutorial.
</span><br>
<span class="quotelev1">&gt; I spend two weeks to find out how do that but unfortunately without result :(.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; pozdrawiam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pawe&#179; Jaromin
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19899.php">Pawe³ Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Previous message:</strong> <a href="19897.php">Pawe&#179; Jaromin: "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>In reply to:</strong> <a href="19897.php">Pawe&#179; Jaromin: "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19899.php">Pawe³ Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Reply:</strong> <a href="19899.php">Pawe³ Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
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
