<?
$subject_val = "[OMPI users] MPI_Isend with no recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:27:31 2014" -->
<!-- isoreceived="20140716132731" -->
<!-- sent="Wed, 16 Jul 2014 15:27:06 +0200" -->
<!-- isosent="20140716132706" -->
<!-- name="Ziv Aginsky" -->
<!-- email="zivaginsky_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Isend with no recieve" -->
<!-- id="CAGmz4LHazOzMpGAXoV1f41S8dNuYA46+9iHHrryBrB1RK64HxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Isend with no recieve<br>
<strong>From:</strong> Ziv Aginsky (<em>zivaginsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 09:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24780.php">Ricardo Fern&#195;&#161;ndez-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a loop in which I will do some MPI_Isend. According to the MPI
<br>
standard, for every send you need a recv!!!!
<br>
<p>If one or several of my MPI_Isend have zero size buffer, should I still
<br>
have the mpi_recv or I can do it without recv? I mean on the processor
<br>
which I should recv the data I know priory that my buffer is with zero
<br>
size. Can I jump from MPI_Recv.
<br>
<p>The question is because of the format of the program I am using if it knows
<br>
that the receiving buffer is zero it will not call the routine which
<br>
contains mpi_Recv.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24780.php">Ricardo Fern&#195;&#161;ndez-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
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
