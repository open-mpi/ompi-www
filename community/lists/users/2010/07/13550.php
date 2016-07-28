<?
$subject_val = "[OMPI users] mpirun hang up randomly";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 01:25:36 2010" -->
<!-- isoreceived="20100709052536" -->
<!-- sent="Fri, 9 Jul 2010 10:55:11 +0530" -->
<!-- isosent="20100709052511" -->
<!-- name="Harichand M V" -->
<!-- email="harichandmv_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hang up randomly" -->
<!-- id="AANLkTil7EHiNZqz1DhZoUpBowxrc8mYaWTEGPh93B2tu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hang up randomly<br>
<strong>From:</strong> Harichand M V (<em>harichandmv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 01:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13551.php">Andreas Schäfer: "[OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13553.php">Ralph Castain: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>Reply:</strong> <a href="13553.php">Ralph Castain: "Re: [OMPI users] mpirun hang up randomly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am getting hang ups in mpi job randomly.
<br>
<p><p>..............
<br>
...........
<br>
&nbsp;&nbsp;IT:20760 CF:   0.7743 Time:  1540.0 MaxMin:20.69/5  :20.12/12
<br>
&nbsp;&nbsp;IT:20770 CF:   0.7734 Time:  1560.2 MaxMin:20.50/1  :19.31/5
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 9399 on node node1 exited on
<br>
signal 1 (Hangup).
<br>
--------------------------------------------------------------------------
<br>
[node1:09356] filem:rsh: close()
<br>
[node1:09356] mca: base: close: component rsh closed
<br>
[node1:09356] mca: base: close: unloading component rsh
<br>
[node1:09356] mca: base: close: component default closed
<br>
[node1:09356] mca: base: close: unloading component default
<br>
[node1:09356] mca: base: close: component hnp closed
<br>
[node1:09356] mca: base: close: unloading component hnp
<br>
[node1:09356] mca: base: close: component round_robin closed
<br>
[node1:09356] mca: base: close: unloading component round_robin
<br>
[node1:09356] mca: base: close: component rsh closed
<br>
[node1:09356] mca: base: close: unloading component rsh
<br>
[node1:09356] mca: base: close: component default closed
<br>
[node1:09356] mca: base: close: unloading component default
<br>
[node1:09356] mca: base: close: component bad closed
<br>
[node1:09356] mca: base: close: unloading component bad
<br>
[node1:09356] mca: base: close: unloading component binomial
<br>
[node1:09356] mca: base: close: component tcp closed
<br>
[node1:09356] mca: base: close: unloading component tcp
<br>
[node1:09356] mca: base: close: component oob closed
<br>
[node1:09356] mca: base: close: unloading component oob
<br>
[node1:09356] mca: base: close: unloading component auto_detect
<br>
[node1:09356] mca: base: close: unloading component linux
<br>
<p>I am using open mpi version 1.2.7 over infiniband.
<br>
I was running the application over 15 nodes.
<br>
<p>job is started using nohup to run it in back ground.
<br>
<p>Thanks in advance
<br>
Harichand M V
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13551.php">Andreas Schäfer: "[OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13553.php">Ralph Castain: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>Reply:</strong> <a href="13553.php">Ralph Castain: "Re: [OMPI users] mpirun hang up randomly"</a>
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
