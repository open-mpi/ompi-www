<?
$subject_val = "[OMPI users] How to &quot;guess&quot; the incoming data type ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 25 10:31:57 2010" -->
<!-- isoreceived="20100425143157" -->
<!-- sent="Sun, 25 Apr 2010 15:46:08 +0200" -->
<!-- isosent="20100425134608" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre.ledru_at_[hidden]" -->
<!-- subject="[OMPI users] How to &amp;quot;guess&amp;quot; the incoming data type ?" -->
<!-- id="1272203168.4867.8257.camel_at_zlarin" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] How to &quot;guess&quot; the incoming data type ?<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre.ledru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-25 09:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12769.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12770.php">Trent Creekmore: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12770.php">Trent Creekmore: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12773.php">Eugene Loh: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12789.php">Dave Love: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I am currently extending an application with MPI capabilities. 
<br>
This high-level application allows users to use dynamic types. Therefor,
<br>
on the slaves, I have no way to know what the master will send me.
<br>
<p>Therefor, in the slave side, I need to &quot;guess&quot; what I am receiving.
<br>
<p>For example, I am using contiguous data on the master defined this way:
<br>
<p>MPI_Datatype matrixOfDouble;
<br>
MPI_Type_contiguous(size, MPI_DOUBLE, &amp;matrixOfDouble);
<br>
MPI_Type_commit(&amp;matrixOfDouble);
<br>
<p>sent this way:
<br>
double A[] = {1,3,3,2,3,4};
<br>
MPI_Send(&amp;A, 1, matrixOfDouble, i, TAG, MPI_COMM_WORLD);
<br>
<p><p>On the slave, in my example, since I know I am going to receive a
<br>
matrixOfDouble, I can do the following:
<br>
MPI_Probe( MPI_ANY_SOURCE, TAG, MPI_COMM_WORLD, &amp;stat );
<br>
MPI_Get_elements( &amp;stat, matrixOfDouble, &amp;count);
<br>
double BRecv[count];
<br>
MPI_Recv(BRecv, BUFSIZE, matrixOfDouble, i, TAG, MPI_COMM_WORLD, &amp;stat)
<br>
<p>I would like to know if (and how) it is possible on the slave side to
<br>
know that the received type is matrixOfDouble ?
<br>
<p>If it is not possible, is there any other way in MPI ?
<br>
(I would like to avoid a extra master=&gt; slave message to send the type).
<br>
<p>Thanks
<br>
Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12769.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12770.php">Trent Creekmore: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12770.php">Trent Creekmore: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12773.php">Eugene Loh: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Reply:</strong> <a href="12789.php">Dave Love: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
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
