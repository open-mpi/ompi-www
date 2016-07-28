<?
$subject_val = "[OMPI users] qsub error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 15:34:27 2013" -->
<!-- isoreceived="20130214203427" -->
<!-- sent="Thu, 14 Feb 2013 14:34:22 -0600" -->
<!-- isosent="20130214203422" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="[OMPI users] qsub error" -->
<!-- id="CAM=Ogij_LgY0t-zcJKo5gTvf8zL9-oC6u8_sp0inJi-z6NZW6Q_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAM=Ogii1OVof5rw=-CQaQpN5rGOkFES7Vd5TzR-6J3AfDAOBeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] qsub error<br>
<strong>From:</strong> Erik Nelson (<em>nelsonerikd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 15:34:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21406.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Maybe reply:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm encountering an error using qsub that none of us can figure out. MPI
<br>
C++ programs seem to
<br>
run fine when executed from the command line, but for some reason when I
<br>
submit them through
<br>
the queue I get a strange error message ..
<br>
<p><p>[compute-3-12.local][[58672,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
<p>connect() to 2002:8170:6c2f:b:21d:9ff:fefd:7d94 failed: Permission denied
<br>
(13)
<br>
<p><p>the compute node 3-12 doesn't matter (the error can generate from any of
<br>
the nodes, and I'm
<br>
guessing that 3-12 is the parent node here).
<br>
<p>To check if there was some problem with my own code, I created a simple
<br>
'hello world' program
<br>
(see attached files).
<br>
<p>Again, the program runs fine from the command line but fails in qsub with
<br>
the same sort of error
<br>
message.
<br>
<p>I have included (i) the code (ii) the job script for qsub, and (iii) the
<br>
&quot;.o&quot; file from qsub for the
<br>
&quot;hello world&quot; program.
<br>
<p>These don't look like MPI errors, but rather some conflict with, maybe,
<br>
secure communication
<br>
accross nodes.
<br>
<p>Is there something simple I can do to fix this?
<br>
<p>Thanks,
<br>
<p>Erik Nelson
<br>
<p>Howard Hughes Medical Institute
<br>
6001 Forest Park Blvd., Room ND10.124
<br>
Dallas, Texas 75235-9050
<br>
<p>p : 214 645 5981
<br>
f : 214 645 5948
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21405/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21405/hello.cpp">hello.cpp</a>
</ul>
<!-- attachment="hello.cpp" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21405/hello.job">hello.job</a>
</ul>
<!-- attachment="hello.job" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21405/hello.job.o5822590">hello.job.o5822590</a>
</ul>
<!-- attachment="hello.job.o5822590" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21406.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21404.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Maybe reply:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
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
