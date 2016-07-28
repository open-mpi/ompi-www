<?
$subject_val = "[OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 21:22:58 2014" -->
<!-- isoreceived="20141212022258" -->
<!-- sent="Fri, 12 Dec 2014 00:22:56 -0200" -->
<!-- isosent="20141212022256" -->
<!-- name="Alex A. Schmidt" -->
<!-- email="aas_at_[hidden]" -->
<!-- subject="[OMPI users] MPI inside MPI (still)" -->
<!-- id="CAGs3GVYCMVUXFgE9RfKqKEurWz4BhvT65D3izVR5EJKj+1Mwyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI inside MPI (still)<br>
<strong>From:</strong> Alex A. Schmidt (<em>aas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 21:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
<p>Regarding to this previous post
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009,
<br>
I wonder if the reply
<br>
from Ralph Castain is still valid. My need is similar but quite simpler:
<br>
to make a system call from an openmpi fortran application to run a
<br>
third party openmpi application. I don't need to exchange mpi messages
<br>
with the application. I just need to read the resulting output file
<br>
generated
<br>
by it. I have tried to do the following system call from my fortran openmpi
<br>
code:
<br>
<p>call system(&quot;sh -c 'mpirun -n 2 app_name&quot;)
<br>
<p>but I get
<br>
<p>**********************************************************
<br>
<p>Open MPI does not support recursive calls of mpirun
<br>
<p>**********************************************************
<br>
<p>Is there a way to make this work?
<br>
<p>Best regards,
<br>
<p>Alex
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
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
