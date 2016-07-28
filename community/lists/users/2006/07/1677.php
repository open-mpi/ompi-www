<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 25 11:13:19 2006" -->
<!-- isoreceived="20060725151319" -->
<!-- sent="Tue, 25 Jul 2006 17:13:14 +0200" -->
<!-- isosent="20060725151314" -->
<!-- name="Gunnar Johansson" -->
<!-- email="gunjo81_at_[hidden]" -->
<!-- subject="[OMPI users] MPI application fails with errno 113" -->
<!-- id="c8c0af0607250813y2d2c7a56x59c1eca27f96e38f_at_mail.gmail.com" -->
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
<strong>From:</strong> Gunnar Johansson (<em>gunjo81_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-25 11:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1678.php">robertmcbroom_at_[hidden]: "[OMPI users] Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="1676.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Call for Participation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We have set up OpenMPI over a set of 5 machines (2 dual CPU) and get this
<br>
error when trying to start an MPI application with more than 5 processes:
<br>
<p>[0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
<p>Anything below 5 proc. works great. We have set the btl_tcp_if_include and
<br>
and the oob_tcp_include to the correct interface to use on each machine.
<br>
Anything else we can try / diagnostics to run to provide more info about the
<br>
problem?
<br>
<p>Thanks, Gunnar Johansson
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1677/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1678.php">robertmcbroom_at_[hidden]: "[OMPI users] Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="1676.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Call for Participation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
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
