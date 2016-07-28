<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 21:59:18 2006" -->
<!-- isoreceived="20060718015918" -->
<!-- sent="Mon, 17 Jul 2006 18:59:11 -0700" -->
<!-- isosent="20060718015911" -->
<!-- name="s anwar" -->
<!-- email="sanwar_at_[hidden]" -->
<!-- subject="[OMPI users] Why should the attached code wait on MPI_Bcast" -->
<!-- id="3e3c86f90607171859k54652623ya0e6ab4dbdc5cb81_at_mail.gmail.com" -->
<!-- charset="ANSI_X3.4-1968" -->
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
<strong>From:</strong> s anwar (<em>sanwar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 21:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1639.php">Manal Helal: "[OMPI users] MPI_Finalize runtime error"</a>
<li><strong>Previous message:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see attached source file.
<br>
<p>According to my understanding of MPI_Comm_spawn(), the intercommunicator
<br>
returned is the same as it is returned by MPI_Comm_get_parent() in the
<br>
spawned processes. I am assuming that there is one intercommunicator which
<br>
contains all the (spawned) child processes as well as the parent process. If
<br>
this is the case, then why does an MPI_Bcast() using such an
<br>
intercommunicator wait indefinately?
<br>
<p>Thanks.
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1638/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1638/test5.c">test5.c</a>
</ul>
<!-- attachment="test5.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1639.php">Manal Helal: "[OMPI users] MPI_Finalize runtime error"</a>
<li><strong>Previous message:</strong> <a href="1637.php">Caird, Andrew J: "Re: [OMPI users] TM fixes on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
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
