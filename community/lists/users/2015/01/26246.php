<?
$subject_val = "[OMPI users] vector type";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 17:16:11 2015" -->
<!-- isoreceived="20150131221611" -->
<!-- sent="Sat, 31 Jan 2015 23:16:10 +0100" -->
<!-- isosent="20150131221610" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] vector type" -->
<!-- id="CAG8o1y4szUv1aVXN+Ot7PYh6g1PVMTi90HxQ=-jfeeH2FSb_tA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] vector type<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 17:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26247.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>Previous message:</strong> <a href="26245.php">Michael Di Domenico: "[OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26248.php">Nick Papior Andersen: "Re: [OMPI users] vector type"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26248.php">Nick Papior Andersen: "Re: [OMPI users] vector type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
here how I create a 2D vector type to send 3D array element:
<br>
<p>(in the attachment)
<br>
<p>The vectors are:
<br>
real*4  AA(4,5,3), BB(4,5,3)
<br>
In my idea both AA and BB have three elements (last columns) and each
<br>
elements has (4x5) features.
<br>
<p>1) What do you think?
<br>
<p>2) why I can not send AA(1,1,2:3) as
<br>
&nbsp;call MPI_SEND(AA(1,1,2:3), 2, rowtype, 1, 300, MPI_COMM_WORLD, ierr)
<br>
<p>Thanks a lot
<br>
<p>Diego
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26246/example3D.f90">example3D.f90</a>
</ul>
<!-- attachment="example3D.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26247.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>Previous message:</strong> <a href="26245.php">Michael Di Domenico: "[OMPI users] slurm openmpi 1.8.3 core bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26248.php">Nick Papior Andersen: "Re: [OMPI users] vector type"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26248.php">Nick Papior Andersen: "Re: [OMPI users] vector type"</a>
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
