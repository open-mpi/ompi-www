<?
$subject_val = "[OMPI users] nonblock alternative to MPI_Win_complete";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 10:59:47 2011" -->
<!-- isoreceived="20110218155947" -->
<!-- sent="Fri, 18 Feb 2011 16:59:41 +0100" -->
<!-- isosent="20110218155941" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="[OMPI users] nonblock alternative to MPI_Win_complete" -->
<!-- id="AANLkTik1VafbFMW-UFxAz_Wev7EunAhWvdu+Ex_e2FfZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] nonblock alternative to MPI_Win_complete<br>
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 10:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15656.php">Xianglong Kong: "[OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Probably this issue has been discussed at length before but unfortunately I
<br>
did not find any threads (on this site or anywhere else) on this topic, if
<br>
you are able to provide me with links to earlier discussions on this topic,
<br>
please do not hesitate)
<br>
<p>Is there an alternative to MPI_Win_complete that does not 'enforce
<br>
completion of preceding RMS calls at the origin' (as said on pag 353 of the
<br>
mpi-2.2 standard) ?
<br>
<p>I would like to know if I can reuse the buffer I gave to MPI_Put but without
<br>
blocking on it, if the MPI lib is still using it, I want to be able to
<br>
continue (and use another buffer).
<br>
<p>thanks,
<br>
<p>toon
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15656.php">Xianglong Kong: "[OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
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
