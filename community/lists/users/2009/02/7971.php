<?
$subject_val = "[OMPI users] MPI_Test bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 05:37:45 2009" -->
<!-- isoreceived="20090205103745" -->
<!-- sent="Thu, 5 Feb 2009 11:37:40 +0100" -->
<!-- isosent="20090205103740" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Test bug?" -->
<!-- id="3a37617f0902050237q5fde6f1aidd0ddb741e27e13e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Test bug?<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 05:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7970.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="8068.php">Jeff Squyres: "Re: [OMPI users] MPI_Test bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developer,
<br>
i have found a very strange behaviour of MPI_Test. I'm using OpenMPI
<br>
1.2 over Infiniband interconnection net.
<br>
<p>I've tried to implement net check with a series of MPI_Irecv and
<br>
MPI_Send  beetwen processors, testing with MPI_Wait the end of Irecv.
<br>
For strange reasons, i've noted that, when i launch the test in one
<br>
node, it works well. If i launch over 2 or more procs over different
<br>
nodes, MPI_Test fails many time before to tell that the IRecv is
<br>
finished.
<br>
<p>I've tried that it fails also after one minutes, with very small
<br>
buffer( less than eager limit). It's impossible that the communication
<br>
is pending after one minutes, with 10 integer sended. To solve this,
<br>
I need to implement a loop over MPI_Test, and only after 3 or 4
<br>
MPI_Test it returns that IRecv finished successful. Is it possible
<br>
that MPI_Test needs to call many time also if the communication is
<br>
already finished?
<br>
<p>In attach you have my simple C test program.
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7971/mpi_test5.c">mpi_test5.c</a>
</ul>
<!-- attachment="mpi_test5.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7970.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="7972.php">jody: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>Reply:</strong> <a href="8068.php">Jeff Squyres: "Re: [OMPI users] MPI_Test bug?"</a>
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
