<?
$subject_val = "[OMPI users] How to reduce Isend &amp; Irecv bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 13:28:31 2013" -->
<!-- isoreceived="20130501172831" -->
<!-- sent="Wed, 1 May 2013 13:28:26 -0400" -->
<!-- isosent="20130501172826" -->
<!-- name="Thomas Watson" -->
<!-- email="exascale.system_at_[hidden]" -->
<!-- subject="[OMPI users] How to reduce Isend &amp;amp; Irecv bandwidth?" -->
<!-- id="CAKj9NDm2woy9O4KT1PJfF3JfvFyYHnXxOTvO7+V-PtSDj7=Ynw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to reduce Isend &amp; Irecv bandwidth?<br>
<strong>From:</strong> Thomas Watson (<em>exascale.system_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 13:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21842.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21842.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21842.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a program where each MPI rank hosts a set of data blocks. After
<br>
doing computation over *some of* its local data blocks, each MPI rank needs
<br>
to exchange data with other ranks. Note that the computation may involve
<br>
only a subset of the data blocks on a MPI rank. The data exchange is
<br>
achieved at each MPI rank through Isend and Irecv and then Waitall to
<br>
complete the requests. Each pair of Isend and Irecv exchanges a
<br>
corresponding pair of data blocks at different ranks. Right now, we do
<br>
Isend/Irecv for EVERY block!
<br>
<p>The idea is that because the computation at a rank may only involves a
<br>
subset of blocks, we could mark those blocks as dirty during the
<br>
computation. And to reduce data exchange bandwidth, we could only exchanges
<br>
those *dirty* pairs across ranks.
<br>
<p>The problem is: if a rank does not compute on a block 'm', and if it does
<br>
not call Isend for 'm', then the receiving rank must somehow know this and
<br>
either a) does not call Irecv for 'm' as well, or b) let Irecv for 'm' fail
<br>
gracefully.
<br>
<p>My questions are:
<br>
1. how Irecv will behave (actually how MPI_Waitall will behave) if the
<br>
corresponding Isend is missing?
<br>
<p>2. If we still post Isend for 'm', but because we really do not need to
<br>
send any data for 'm', can I just set a &quot;flag&quot; in Isend so that MPI_Waitall
<br>
on the receiving side will &quot;cancel&quot; the corresponding Irecv immediately?
<br>
For example, I can set the count in Isend to 0, and on the receiving side,
<br>
when MPI_Waitall see a message with empty payload, it reclaims the
<br>
corresponding Irecv? In my code, the correspondence between a pair of Isend
<br>
and Irecv is established by a matching TAG.
<br>
<p>Thanks!
<br>
<p>Jacky
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21842.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21842.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21842.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
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
