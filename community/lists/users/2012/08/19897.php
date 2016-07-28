<?
$subject_val = "[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 04:33:19 2012" -->
<!-- isoreceived="20120807083319" -->
<!-- sent="Tue, 7 Aug 2012 10:33:14 +0200" -->
<!-- isosent="20120807083314" -->
<!-- name="Pawe&#179; Jaromin" -->
<!-- email="jaromin.pawel_at_[hidden]" -->
<!-- subject="[OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem." -->
<!-- id="CAGAQqqOxri+yW=hw1CcRWio2jTRPkiYVYW058+7FkKZ_Ka3ETA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-2" -->
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
<strong>Subject:</strong> [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem.<br>
<strong>From:</strong> Pawe&#179; Jaromin (<em>jaromin.pawel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 04:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19898.php">George Bosilca: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Previous message:</strong> <a href="19896.php">Paul Romano: "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19898.php">George Bosilca: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Reply:</strong> <a href="19898.php">George Bosilca: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Sorry, may be this is a stupid question, bat a have a big problem with
<br>
maloc() and  matrix arrays.
<br>
I want to make a program that do very simple thing like matriA *
<br>
matrixB = matrixC.
<br>
Because I need more matrix size than 100x100 (5000x5000), I have to
<br>
use maloc() for memory allocation.
<br>
First I tried this way:
<br>
<p>The typical form for dynamically allocating an NxM array of type T is:
<br>
T **a = malloc(sizeof *a * N);
<br>
if (a)
<br>
{
<br>
&nbsp;&nbsp;for (i = 0; i &lt; N; i++)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a[i] = malloc(sizeof *a[i] * M);
<br>
&nbsp;&nbsp;}
<br>
}
<br>
// the arrays are created before  split to nodes
<br>
<p>No problem with create, fill array,but the problem started when I have
<br>
send and receive it.
<br>
Of course before  send I calculated &quot;cont&quot; for MPI_Send.
<br>
To be shore, that the count for MPI_Send i MPI_Recv is the same I also
<br>
send &quot;count&quot;.
<br>
<p>count = rows*matrix_size*sizeof (double); //part of matrix
<br>
MPI_Send(&amp;count, 1, MPI_INT, dest, mtype,MPI_COMM_WORLD);
<br>
MPI_Send(&amp;matrixA[offset][0], count, MPI_DOUBLE, dest, mtype, MPI_COMM_WORLD);
<br>
<p>from worker side the code looks like:
<br>
<p>MPI_Recv(&amp;countA, 1, MPI_INT, source, mtype, MPI_COMM_WORLD, &amp;status);
<br>
MPI_Recv(&amp;matrixA[0][0], countA, MPI_DOUBLE, source, mtype,
<br>
MPI_COMM_WORLD, &amp;status);
<br>
<p><p>An error looks like:
<br>
<p>[pawcioj-VirtualBox:01700] *** Process received signal ***
<br>
[pawcioj-VirtualBox:01700] Signal: Segmentation fault (11)
<br>
[pawcioj-VirtualBox:01700] Signal code: Address not mapped (1)
<br>
[pawcioj-VirtualBox:01700] Failing at address: 0x88fa000
<br>
[pawcioj-VirtualBox:01700] [ 0] [0xc2740c]
<br>
[pawcioj-VirtualBox:01700] [ 1]
<br>
/usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x906c) [0x17606c]
<br>
[pawcioj-VirtualBox:01700] [ 2]
<br>
/usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6a1b) [0x173a1b]
<br>
[pawcioj-VirtualBox:01700] [ 3]
<br>
/usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x3ae6) [0x7b7ae6]
<br>
[pawcioj-VirtualBox:01700] [ 4]
<br>
/usr/lib/libopen-pal.so.0(opal_progress+0x81) [0x406fa1]
<br>
[pawcioj-VirtualBox:01700] [ 5]
<br>
/usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x48e5) [0x1718e5]
<br>
[pawcioj-VirtualBox:01700] [ 6] /usr/lib/libmpi.so.0(MPI_Recv+0x165) [0x1ef9d5]
<br>
[pawcioj-VirtualBox:01700] [ 7] macierz_V.02(main+0x927) [0x8049870]
<br>
[pawcioj-VirtualBox:01700] [ 8] /lib/libc.so.6(__libc_start_main+0xe7)
<br>
[0xddfce7]
<br>
[pawcioj-VirtualBox:01700] [ 9] macierz_V.02() [0x8048b71]
<br>
[pawcioj-VirtualBox:01700] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 1700 on node
<br>
pawcioj-VirtualBox exited on signal 11 (Segmentation fault).
<br>
<p><p>Because I have no result, I tied do that by 1D array but the problem
<br>
seems similar.
<br>
<p>Probably I do something wrong, so I would like to ask you about advice
<br>
how do that proper or maybe link to useful tutorial.
<br>
I spend two weeks to find out how do that but unfortunately without result :(.
<br>
<p><p><p><pre>
-- 
------------------
pozdrawiam
Pawe&#179; Jaromin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19898.php">George Bosilca: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Previous message:</strong> <a href="19896.php">Paul Romano: "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19898.php">George Bosilca: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>Reply:</strong> <a href="19898.php">George Bosilca: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
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
