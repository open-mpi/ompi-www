<?
$subject_val = "Re: [OMPI users] 'AINT' undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 04:21:40 2016" -->
<!-- isoreceived="20160511082140" -->
<!-- sent="Wed, 11 May 2016 08:21:20 +0000" -->
<!-- isosent="20160511082120" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'AINT' undeclared" -->
<!-- id="1462954881289.1423_at_umb.sk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1462895526275.53893_at_umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'AINT' undeclared<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 04:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29172.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29170.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ad:  <a href="https://www.open-mpi.org/community/lists/users/2016/05/29166.php">https://www.open-mpi.org/community/lists/users/2016/05/29166.php</a>
<br>
<p>Yes ! The the PGI stuff in path was the  reason ... the OpenMPI build with GNU was taking PGI preprocessor.
<br>
<p>I unloaded the PGI module (and Intel module to be sure) and the OpenMPI 1.10.1 static build with GNU compilers went well.
<br>
<p>Miro
<br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29172.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29170.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
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
