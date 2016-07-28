<?
$subject_val = "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 11:33:04 2012" -->
<!-- isoreceived="20120807153304" -->
<!-- sent="Tue, 07 Aug 2012 17:32:56 +0200" -->
<!-- isosent="20120807153256" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem." -->
<!-- id="50213528.2060107_at_gmail.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="CAGAQqqPDyhnDTQ0H+R-BH-H3BcjvycUmWPTbNF5XFuU=aii+gQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 11:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19899.php">Pawe&#179; Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>In reply to:</strong> <a href="19899.php">Pawe&#179; Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look at  this  declaration:
<br>
<p>int MPI_Send(void *buf, int count, MPI_Datatype datatype, int dest, int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm)
<br>
<p>here*&quot;count&quot; is the**number of elements* (not bytes!) in the send buffer (nonnegative integer)
<br>
<p>Your &quot;count&quot; was defined as
<br>
<p>count = rows*matrix_size*sizeof (double);
<br>
and seems to be erroneous;
<br>
variable &quot;count&quot; cannot depend on the size of the matrix element!
<br>
<p>Z Koza
<br>
<p>On Aug 7, 2012, at 10:33 , Pawe&#179; Jaromin wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, may be this is a stupid question, bat a have a big problem with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maloc() and  matrix arrays.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to make a program that do very simple thing like matriA *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrixB = matrixC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because I need more matrix size than 100x100 (5000x5000), I have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use maloc() for memory allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First I tried this way:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The typical form for dynamically allocating an NxM array of type T is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; T **a = malloc(sizeof *a * N);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   for (i = 0; i &lt; N; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a[i] = malloc(sizeof *a[i] * M);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // the arrays are created before  split to nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No problem with create, fill array,but the problem started when I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send and receive it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course before  send I calculated &quot;cont&quot; for MPI_Send.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be shore, that the count for MPI_Send i MPI_Recv is the same I also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send &quot;count&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; count = rows*matrix_size*sizeof (double); //part of matrix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send(&amp;count, 1, MPI_INT, dest, mtype,MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send(&amp;matrixA[offset][0], count, MPI_DOUBLE, dest, mtype, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from worker side the code looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Recv(&amp;countA, 1, MPI_INT, source, mtype, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Recv(&amp;matrixA[0][0], countA, MPI_DOUBLE, source, mtype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An error looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] Failing at address: 0x88fa000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 0] [0xc2740c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x906c) [0x17606c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6a1b) [0x173a1b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x3ae6) [0x7b7ae6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/libopen-pal.so.0(opal_progress+0x81) [0x406fa1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x48e5) [0x1718e5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 6] /usr/lib/libmpi.so.0(MPI_Recv+0x165) [0x1ef9d5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 7] macierz_V.02(main+0x927) [0x8049870]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 8] /lib/libc.so.6(__libc_start_main+0xe7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xddfce7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] [ 9] macierz_V.02() [0x8048b71]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pawcioj-VirtualBox:01700] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 1700 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pawcioj-VirtualBox exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because I have no result, I tied do that by 1D array but the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Probably I do something wrong, so I would like to ask you about advice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how do that proper or maybe link to useful tutorial.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I spend two weeks to find out how do that but unfortunately without result :(.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pozdrawiam
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pawe&#179; Jaromin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19899.php">Pawe&#179; Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>In reply to:</strong> <a href="19899.php">Pawe&#179; Jaromin: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
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
