<?
$subject_val = "[OMPI users] Configuration problem or network problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 22:09:56 2009" -->
<!-- isoreceived="20090707020956" -->
<!-- sent="Tue, 7 Jul 2009 10:08:58 +0800" -->
<!-- isosent="20090707020858" -->
<!-- name="Zou, Lin (GE, Research, Consultant)" -->
<!-- email="Lin.Zou_at_[hidden]" -->
<!-- subject="[OMPI users] Configuration problem or network problem?" -->
<!-- id="0332CB5EB6327940B291055AAD964221048FDC71_at_SHAMLVEM02.e2k.ad.ge.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Configuration problem or network problem?<br>
<strong>From:</strong> Zou, Lin (GE, Research, Consultant) (<em>Lin.Zou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 22:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9847.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The system I use is a PS3 cluster, with 16 PS3s and a PowerPC as a
<br>
headnode, they are connected by a high speed switch.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;There are point-to-point communication functions( MPI_Send and
<br>
MPI_Recv ), the data size is about 40KB, and a lot of computings which
<br>
will consume a long time(about 1 sec)in a loop.The co-processor in PS3
<br>
can take care of the computation, the main processor take care of
<br>
point-to-point communication,so the computing and communication can
<br>
overlap.The communication funtions should return much faster than
<br>
computing function.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;My question is that after some circles, the time consumed by
<br>
communication functions in a PS3 will increase heavily, and the whole
<br>
cluster's sync state will corrupt.When I decrease the computing time,
<br>
this situation just disappeare.I am very confused about this.
<br>
I think there is a mechanism in OpenMPI that cause this case, does
<br>
everyone get this situation before? 
<br>
I use &quot;mpirun --mca btl tcp, self -np 17 --hostfile ...&quot;, is there
<br>
something i should added?
<br>
Lin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9847.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
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
