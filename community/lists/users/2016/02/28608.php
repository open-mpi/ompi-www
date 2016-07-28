<?
$subject_val = "[OMPI users] Nonblocking neighborhood collectives with distributed graph creation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 29 10:17:44 2016" -->
<!-- isoreceived="20160229151744" -->
<!-- sent="Mon, 29 Feb 2016 10:17:42 -0500" -->
<!-- isosent="20160229151742" -->
<!-- name="Jun Kudo" -->
<!-- email="junkudo18_at_[hidden]" -->
<!-- subject="[OMPI users] Nonblocking neighborhood collectives with distributed graph creation" -->
<!-- id="CAO5ZQ3tgDbvsYJT6eJdnhwv2GKBa36F4O-74MJHmO7GxkbWLng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Nonblocking neighborhood collectives with distributed graph creation<br>
<strong>From:</strong> Jun Kudo (<em>junkudo18_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-29 10:17:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28609.php">Matthew Larkin: "[OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28607.php">Saliya Ekanayake: "[OMPI users] Java MPI Code for NAS Benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Reply:</strong> <a href="28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm trying to use the neighborhood collective communication capabilities
<br>
(MPI_Ineighbor_x) of MPI coupled with the distributed graph constructor
<br>
(MPI_Dist_graph_create_adjacent) but I'm encountering a segmentation fault
<br>
on a test case.
<br>
<p>I have attached a 'working' example where I create a MPI communicator with
<br>
a simple distributed graph topology where Rank 0 contains Node 0 that
<br>
communicates bi-directionally (receiving from and sending to) with Node 1
<br>
located on Rank 1.  I then attempt to send integer messages using the
<br>
neighborhood collective MPI_Ineighbor_alltoall.  The program run with the
<br>
command 'mpirun -n 2 ./simpleneighborhood' compiled with the latest
<br>
OpenMPI  (1.10.2) encounters a segmentation fault during the non-blocking
<br>
call.  The same program compiled with MPICH (3.2) runs without any problems
<br>
and with the expected results.  To muddy the waters a little more, the same
<br>
program compiled with OpenMPI but using the blocking neighborhood
<br>
collective, MPI_Neighbor_alltoall, seems to run just fine as well.
<br>
<p>I'm not really sure at this point if I'm making a simple mistake in the
<br>
construction of my test or if something is more fundamentally wrong.  I
<br>
would appreciate any insight into my problem!
<br>
<p>Thanks ahead of the time for help and let me know if I can provide anymore
<br>
information.
<br>
<p>Sincerely,
<br>
Jun
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28608/simpleneighborhood.cpp">simpleneighborhood.cpp</a>
</ul>
<!-- attachment="simpleneighborhood.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28609.php">Matthew Larkin: "[OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28607.php">Saliya Ekanayake: "[OMPI users] Java MPI Code for NAS Benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Reply:</strong> <a href="28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
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
