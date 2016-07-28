<?
$subject_val = "[OMPI users] MPI_Barrier() consuming CPU cycles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 18:55:16 2009" -->
<!-- isoreceived="20091204235516" -->
<!-- sent="Fri, 4 Dec 2009 16:54:52 -0700" -->
<!-- isosent="20091204235452" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Barrier() consuming CPU cycles" -->
<!-- id="dcf611bd0912041554n43761649uce3fa8936ac02ccd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Barrier() consuming CPU cycles<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 18:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Previous message:</strong> <a href="11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Reply:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>in our code we use a very short front-end program to drive a larger set of
<br>
codes that do our calculations. Right in the beginning of the front-end, we
<br>
have an if() statement such that only the rank 0 front-end does something,
<br>
and the other ranks go right away to an MPI_Barrier() statement, waiting for
<br>
the rank 0 front-end to finish. The rank 0 front-end then goes ahead and
<br>
does its thing by calling the other codes with MPI_Comm_spawn().
<br>
<p>We noticed that the rank &gt; 0 copies of the front-end consume a lot of CPU
<br>
while they are waiting at the MPI_Barrier(). This is obviously not what we
<br>
had intended. From previous discussion on this list I understand that the
<br>
CPU consumption stems from the aggressive polling frequency of the
<br>
MPI_Barrier() function. While I understand that there are a lot of
<br>
situations where a high polling frequency in MPI_Barrier() is useful, the
<br>
situation we are in is not one of them.
<br>
<p>Is our master and slave programming model such an unusual way of using MPI?
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Previous message:</strong> <a href="11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>Reply:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
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
