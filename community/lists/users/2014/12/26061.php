<?
$subject_val = "[OMPI users] send partial vector from all to all + ALLGATHERV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 10:19:25 2014" -->
<!-- isoreceived="20141223151925" -->
<!-- sent="Tue, 23 Dec 2014 16:19:24 +0100" -->
<!-- isosent="20141223151924" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] send partial vector from all to all + ALLGATHERV" -->
<!-- id="CAG8o1y6EKMyGBKcJT2c2oye79CCE45WFWC+EWScAwumSKgLztQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] send partial vector from all to all + ALLGATHERV<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-23 10:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26062.php">Diego Avesani: "Re: [OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<li><strong>Previous message:</strong> <a href="26060.php">Diego Avesani: "Re: [OMPI users] best function to send data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26062.php">Diego Avesani: "Re: [OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<li><strong>Reply:</strong> <a href="26062.php">Diego Avesani: "Re: [OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear,
<br>
<p>I my program, I have created a vector and each processor assigns a value to
<br>
a part of it:
<br>
<p>*do i=MPI%start,MPI%end*
<br>
*        sendbuf(i)=MPI%rank*
<br>
* enddo*
<br>
<p>*MPI%start *and* MPI%end* define the starting and ending positions in the
<br>
vector.
<br>
<p>Now, I would like that each processor knows all the value in the vector. I
<br>
think that the best solution could be to use MPI_ALLGATHERV:
<br>
<p>CALL
<br>
MPI_ALLGATHERV(sendbuf(MPI%start:MPI%end),MPI%nmc,MPI_INTEGER,MCrank,display,MPI_INTEGER,COMM_CART,MPI%iErr)
<br>
<p>What could be wrong? Do you have some suggestions for debugging? Have I
<br>
correctly understood ALLGATHERV?
<br>
<p>Thanks a lot
<br>
<p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26062.php">Diego Avesani: "Re: [OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<li><strong>Previous message:</strong> <a href="26060.php">Diego Avesani: "Re: [OMPI users] best function to send data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26062.php">Diego Avesani: "Re: [OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<li><strong>Reply:</strong> <a href="26062.php">Diego Avesani: "Re: [OMPI users] send partial vector from all to all + ALLGATHERV"</a>
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
