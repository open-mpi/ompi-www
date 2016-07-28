<?
$subject_val = "[OMPI users] mpi_bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 10:43:37 2013" -->
<!-- isoreceived="20130906144337" -->
<!-- sent="Fri, 6 Sep 2013 15:42:54 +0100" -->
<!-- isosent="20130906144254" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_bcast" -->
<!-- id="CAOQ90zEnz3QSgNugraOfY4nNM3XR+59YfOvQaMXefHOwvwNF1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_bcast<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 10:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22613.php">Hugo Gagnon: "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22611.php">Lee-Ping Wang: "Re: [OMPI users] Changing directory from /tmp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there,
<br>
<p>In my fortran code, I used mpi_bcast to broadcast an array Q(21, 51,
<br>
140000) (the size for it is 150,000,000) from the root to all the nodes. I
<br>
found when I used this bcast subroutine, it code will be very slow and
<br>
sometimes it hangs there. Once I commented this array, this code speed is
<br>
normal. So I guess that the Q is too large to be broadcast using mpi_bcast.
<br>
Is my judgement correct?
<br>
<p>I think this array is required for my code, but now the troublesome thing
<br>
is that the speed is slow. Does anybody know how to alleviate this problem
<br>
? Or any other alternative problems to make this array Q broadcast from
<br>
root to other nodes?
<br>
<p>Thank you in advance.
<br>
<p>best regards,
<br>
Huangwei
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22613.php">Hugo Gagnon: "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22611.php">Lee-Ping Wang: "Re: [OMPI users] Changing directory from /tmp"</a>
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
