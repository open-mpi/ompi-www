<?
$subject_val = "[OMPI users] Behavior of MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 12:25:57 2009" -->
<!-- isoreceived="20091115172557" -->
<!-- sent="Sun, 15 Nov 2009 12:25:53 -0500" -->
<!-- isosent="20091115172553" -->
<!-- name="Charles Salvia" -->
<!-- email="chsalvia_at_[hidden]" -->
<!-- subject="[OMPI users] Behavior of MPI_Send" -->
<!-- id="afc7dbc60911150925i454993f8u56a15e6063507c8a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Behavior of MPI_Send<br>
<strong>From:</strong> Charles Salvia (<em>chsalvia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 12:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<li><strong>Reply:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused about the required behavior of MPI_Send() using TCP sockets.
<br>
Does a call to MPI_Send() block until the receiving process actually
<br>
receives the message, or does MPI_Send() only block until the send operation
<br>
completes locally?  In other words, does the sender actually have to wait
<br>
for an ACK from the receiver to proceed?
<br>
<p>-Charles Salvia
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<li><strong>Reply:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
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
