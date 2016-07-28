<?
$subject_val = "[OMPI users] specifying hosts in mpi_spawn()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 20:41:56 2008" -->
<!-- isoreceived="20080530004156" -->
<!-- sent="Thu, 29 May 2008 21:41:50 -0300" -->
<!-- isosent="20080530004150" -->
<!-- name="Bruno Coutinho" -->
<!-- email="coutinho_at_[hidden]" -->
<!-- subject="[OMPI users] specifying hosts in mpi_spawn()" -->
<!-- id="a8d96dec0805291741g15bcab19m9828a3598de3e9c6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] specifying hosts in mpi_spawn()<br>
<strong>From:</strong> Bruno Coutinho (<em>coutinho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 20:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5769.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>Reply:</strong> <a href="5769.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How mpi handles the host string passed in the info argument to
<br>
mpi_comm_spawn() ?
<br>
<p>if I set host to:
<br>
&quot;host1,host2,host3,host2,host2,host1&quot;
<br>
<p>then ranks 0 and 5 will run in host1, ranks 1,3,4 in host 2 and rank 3 in
<br>
host3?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5763.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Previous message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5769.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>Reply:</strong> <a href="5769.php">Ralph H Castain: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
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
