<?
$subject_val = "[OMPI users] MPI_Iallgatherv performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 22:55:10 2013" -->
<!-- isoreceived="20130615025510" -->
<!-- sent="Sat, 15 Jun 2013 10:54:36 +0800" -->
<!-- isosent="20130615025436" -->
<!-- name="Zehan Cui" -->
<!-- email="zehan.cui_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Iallgatherv performance" -->
<!-- id="CALr9+a7AqbBhJC625EhJBzLk47nj-uZb2qs2+KTH7ekyzauwhQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Iallgatherv performance<br>
<strong>From:</strong> Zehan Cui (<em>zehan.cui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 22:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22104.php">Vanja Z: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="22102.php">Hayato KUNIIE: "[OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OpenMPI-1.7.1 is announce support MPI-3 functionality such as non-blocking
<br>
collectives.
<br>
<p>I have test MPI_Iallgatherv on a 8-node cluster, however, I got bad
<br>
performance. The MPI_Iallgatherv block the program for even longer time
<br>
than traditional MPI_Allgatherv.
<br>
<p>Following is the test pseudo-code and result.
<br>
<p>===========================
<br>
<p>Using MPI_Allgatherv:
<br>
<p>for( i=0; i&lt;8; i++ )
<br>
{
<br>
&nbsp;&nbsp;// computation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_begin );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;computation;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comp_time += (t_end - t_begin);
<br>
<p>&nbsp;&nbsp;// communication
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_begin = t_end;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgatherv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm_time += (t_end - t_begin);
<br>
}
<br>
<p>result:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comp_time = 811,630 us
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm_time = 342,284 us
<br>
<p>--------------------------------------------
<br>
<p>Using MPI_Iallgatherv:
<br>
<p>for( i=0; i&lt;8; i++ )
<br>
{
<br>
&nbsp;&nbsp;// computation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_begin );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;computation;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comp_time += (t_end - t_begin);
<br>
<p>&nbsp;&nbsp;// communication
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_begin = t_end;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iallgatherv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytime( t_end );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm_time += (t_end - t_begin);
<br>
}
<br>
<p>// wait for non-blocking allgather to complete
<br>
mytime( t_begin );
<br>
for( i=0; i&lt;8; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait;
<br>
mytime( t_end );
<br>
wait_time = t_end - t_begin;
<br>
<p>result:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comp_time = 817,397 us
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm_time = 1,183,511 us
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wait_time = 1,294,330 us
<br>
<p>==============================
<br>
<p><span class="quotelev1">&gt;From the result, we can tell that MPI_Iallgatherv block the program for
</span><br>
1,183,511 us, much longer than that of MPI_Allgatherv, which is 342,284 us.
<br>
Even worse, it still take 1,294,330 us to wait for the non-blocking
<br>
MPI_Iallgatherv to finish.
<br>
<p><p>- Zehan Cui
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22104.php">Vanja Z: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="22102.php">Hayato KUNIIE: "[OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
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
