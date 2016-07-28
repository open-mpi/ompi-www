<?
$subject_val = "[OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 14:51:24 2012" -->
<!-- isoreceived="20120503185124" -->
<!-- sent="Thu, 3 May 2012 11:51:16 -0700" -->
<!-- isosent="20120503185116" -->
<!-- name="Don Armstrong" -->
<!-- email="don_at_[hidden]" -->
<!-- subject="[OMPI users] MPI over tcp" -->
<!-- id="20120503185116.GI3458_at_rzlab.ucr.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI over tcp<br>
<strong>From:</strong> Don Armstrong (<em>don_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 14:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm attempting to use MPI over tcp; the attached (rather trivial) code
<br>
gets stuck in MPI_Send. Looking at TCP dumps indicates that the TCP
<br>
connection is made successfully to the right port, but the actual data
<br>
doesn't appear to be sent.
<br>
<p>I'm beginning to suspect that there's some basic problem with my
<br>
configuration, or an underlying bug in TCP message passing in MPI. Any
<br>
suggestions to try (or a response indicating that MPI over TCP
<br>
actually works, and that it's some problem with my setup) appreciated.
<br>
<p>The relevant portion of the hostfile looks like this:
<br>
<p>archimedes.int.donarmstrong.com slots=2
<br>
krel.int.donarmstrong.com slots=8
<br>
<p>and the output of the run and tcpdump is attached.
<br>
<p>Thanks in advance.
<br>
<p><p>Don Armstrong
<br>
<p><pre>
-- 
[T]he question of whether Machines Can Think, [...] is about as
relevant as the question of whether Submarines Can Swim.
 -- Edsger W. Dijkstra &quot;The threats to computing science&quot;
<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>



</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19178/mpi_test.c">mpi_test.c</a>
</ul>
<!-- attachment="mpi_test.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19178/mpi_test_log.txt">mpi_test_log.txt</a>
</ul>
<!-- attachment="mpi_test_log.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19178/tcpdump_output">tcpdump_output</a>
</ul>
<!-- attachment="tcpdump_output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
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
