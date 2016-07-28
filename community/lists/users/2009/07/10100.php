<?
$subject_val = "[OMPI users] Installation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 11:35:37 2009" -->
<!-- isoreceived="20090727153537" -->
<!-- sent="Mon, 27 Jul 2009 08:35:28 -0700" -->
<!-- isosent="20090727153528" -->
<!-- name="jacob Balthazor" -->
<!-- email="jcb344_at_[hidden]" -->
<!-- subject="[OMPI users] Installation problems" -->
<!-- id="a902047b0907270835xabb9e23ne4e90308c3065156_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Installation problems<br>
<strong>From:</strong> jacob Balthazor (<em>jcb344_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 11:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10101.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10099.php">Ricardo Fonseca: "[OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10101.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10101.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10113.php">Alexey Sokolov: "Re: [OMPI users] Installation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please help me out as I cannot figure out from all the online
<br>
documentation why my cluster wont work.
<br>
<p>1) I started with two computers with a fresh install of Fedora 10.
<br>
2) Created two user accounts on the two computers with the same user name.
<br>
3) Created an rsa keyed ssh between the two computers going both directions,
<br>
so that each computer can log into one another without being prompted for a
<br>
password.
<br>
4) Installed openmpi on both via yum with the command &quot;yum install openmpi
<br>
openmpi-devel openmpi-libs&quot;.
<br>
5) Compiled and ran hello.c with a host file containing the IP addresses of
<br>
both computers with slot numbers. But openmpi only hangs for minutes, until
<br>
I kill it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am able to run hello.c locally and even with a hostfile containing
<br>
only the local machines address, but am not able to started a multi node
<br>
program from either computer. Have I done all the correct steps, am I
<br>
missing something?
<br>
<p>- Jacob B.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10101.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10099.php">Ricardo Fonseca: "[OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10101.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10101.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10113.php">Alexey Sokolov: "Re: [OMPI users] Installation problems"</a>
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
