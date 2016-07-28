<?
$subject_val = "[OMPI users] Program abortion at a simple MPI_Get Programm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 16:00:18 2014" -->
<!-- isoreceived="20140617200018" -->
<!-- sent="Tue, 17 Jun 2014 19:59:06 +0000" -->
<!-- isosent="20140617195906" -->
<!-- name="Florian Hahner" -->
<!-- email="home_at_[hidden]" -->
<!-- subject="[OMPI users] Program abortion at a simple MPI_Get Programm" -->
<!-- id="76DAAE9E5453B643B37266E0F9FAC2E621B40873_at_homeserver.homenet.local" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Program abortion at a simple MPI_Get Programm<br>
<strong>From:</strong> Florian Hahner (<em>home_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-17 15:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Previous message:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Reply:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Maybe reply:</strong> <a href="24674.php">Siegmar Gross: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello MPI users,
<br>
<p>first of all i want to introduce myself.  My name is Florian Hahner and I'm studying applied computer science in Fulda, Germany. In our class 'parallel computing' I'm working at a MPI-2 Project to show the benefits and the working method of one-sided communications.
<br>
<p>I wrote a litte MPI program to demonstrate the mpi_get() function (see attachment).
<br>
<p>The idea behind the program is that a master process with rank 0 fills an integer array with the size of MPI_Comm_size with values. The other processes should MPI_GET the value from this shared int array at the index of their rank.
<br>
<p>We could compile the code, but execution will raise an error.
<br>
<p>We compile and run it with several MPI implementations (LAMMPI, MPICH ) and get every time errors. Host system is:  5.10 Generic_150400-10 sun4u sparc SUNW,SPARC-Enterprise Solaris
<br>
<p>PS: I've some information are missing, please fill free to ask!
<br>
<p>Best Regards
<br>
<p>Florian Hahner
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24668/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24668/beispiel2_flo.c">beispiel2_flo.c</a>
</ul>
<!-- attachment="beispiel2_flo.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Previous message:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Reply:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>Maybe reply:</strong> <a href="24674.php">Siegmar Gross: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
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
