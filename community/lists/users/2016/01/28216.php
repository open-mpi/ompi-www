<?
$subject_val = "[OMPI users] Put/Get semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 11:51:09 2016" -->
<!-- isoreceived="20160106165109" -->
<!-- sent="Wed, 6 Jan 2016 16:51:02 +0000" -->
<!-- isosent="20160106165102" -->
<!-- name="Palmer, Bruce J" -->
<!-- email="Bruce.Palmer_at_[hidden]" -->
<!-- subject="[OMPI users] Put/Get semantics" -->
<!-- id="61BD36C35043184BB5E9C6E07E2C74AB1A5CEC67_at_EX10MBOX02.pnnl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Put/Get semantics<br>
<strong>From:</strong> Palmer, Bruce J (<em>Bruce.Palmer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 11:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28217.php">Matt Thompson: "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28215.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28242.php">Jeff Hammond: "Re: [OMPI users] Put/Get semantics"</a>
<li><strong>Reply:</strong> <a href="28242.php">Jeff Hammond: "Re: [OMPI users] Put/Get semantics"</a>
<li><strong>Maybe reply:</strong> <a href="28248.php">Palmer, Bruce J: "Re: [OMPI users] Put/Get semantics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm trying to compare the semantics of MPI RMA with those of ARMCI. I've written a small test program that writes data to a remote processor and then reads the data back to the original processor. In ARMCI, you should be able to do this since operations to the same remote processor are completed in the same order that they are requested on the calling processor. I've implemented this two different ways using MPI RMA. The first is to call MPI_Win_lock to create a shared lock on the remote processor, then MPI_Put/MPI_Get to initiate the data transfer and finally MPI_Win_unlock to force completion of the data transfer. My understanding is that this should allow you to write and then read data to the same process, since the first triplet
<br>
MPI_Win_lock
<br>
MPI_Put
<br>
MPI_Win_unlock
<br>
must be completed both locally and remotely before the unlock call completes. The calls in the second triplet
<br>
MPI_Win_lock
<br>
MPI_Get
<br>
MPI_Win_unlock
<br>
cannot start until the first triplet is done, so if both the put and the get refer to the same data on the same remote processor, then it should work.
<br>
The second implementation uses request-based RMA and starts by calling MPI_Win_lock_all collectively on the window when it is created and MPI_Win_unlock_all when it is destroy so that the window is always in a passive synchronization epoch. The put is implement by calling MPI_Rput followed by calling MPI_Wait on the handle returned from the MPI_Rput call. Similarly, get is implemented by calling MPI_Rget followed by MPI_Wait. The wait call guarantees that the operation is completed locally and the data can then be used. However, from what I understand of the standard, it doesn't say anything about the ordering of the operations so conceivably the put could execute remotely before the get. Inserting an MPI_Win_flush_all between the MPI_Rput and MPI_Rget should guarantee that the operations are ordered.
<br>
I've written the test program so that it can use either the lock or request-based implementations and I've also included an option that inserts a fence/flush plus barrier operation between put and get. The different configurations can be set up by defining some preprocessor symbols at the top of the program.  The program loops over the test repeatedly and the current number of loops is set at 2000. The results I get running on a Linux cluster with an Infiniband network using OpenMPI-1.10.1 on 2 processors on 2 different SMP nodes are as follows:
<br>
Using OpenMPI-1.8.3:
<br>
Request-based implementation without synchronization: 9 successes out of 10 runs
<br>
Request-based implementation with synchronization: 19 successes out of 20 runs
<br>
Lock-based implementation without synchronization: 1 success out of 10 runs
<br>
Lock-based implementation with synchronization: 1 success out of 10 runs
<br>
Using OpenMPI-1.10.1
<br>
Request-based implementation without synchronization: 2 successes out of 10 runs
<br>
Request-based implementation with synchronization: 8 successes out of 10 runs
<br>
Lock-based implementation without synchronization: 4 successes out of 10 runs
<br>
Lock-based implementation with synchronization: 2 successes out of 10 runs
<br>
Except for the request-based implementation without synchronization (in this case a call to MPI_Win_flush_all), I would expect these to all succeed. Is there some fault to my thinking here? I've attached the test program
<br>
Bruce Palmer
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28216/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28216/testmpi.c">testmpi.c</a>
</ul>
<!-- attachment="testmpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28217.php">Matt Thompson: "[OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28215.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28242.php">Jeff Hammond: "Re: [OMPI users] Put/Get semantics"</a>
<li><strong>Reply:</strong> <a href="28242.php">Jeff Hammond: "Re: [OMPI users] Put/Get semantics"</a>
<li><strong>Maybe reply:</strong> <a href="28248.php">Palmer, Bruce J: "Re: [OMPI users] Put/Get semantics"</a>
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
