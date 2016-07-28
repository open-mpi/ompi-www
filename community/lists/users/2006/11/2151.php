<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 03:25:28 2006" -->
<!-- isoreceived="20061108082528" -->
<!-- sent="Wed, 8 Nov 2006 13:55:18 +0530" -->
<!-- isosent="20061108082518" -->
<!-- name="Sunil Patil" -->
<!-- email="sunillp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="4fb5e0640611080025q2143b190qce348f4213b3db14_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62C91D25-9371-4F7B-A47D-58846E4AEC8B_at_cs.utk.edu" -->
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
<strong>From:</strong> Sunil Patil (<em>sunillp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 03:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2150.php">George Bosilca: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2150.php">George Bosilca: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How does Open MPI use shared memory for communication between two processes
<br>
on the same host meaning who creates the shared memory?
<br>
<p>Both the processes running on the host have their own private buffers. So
<br>
buf1 sent by Process 1 should reach buf2 of Process 2. How is this handled?
<br>
<p>Is it that buf1 is first copied into Shared Memory allocated by Open MPI and
<br>
then from shared memory into buf2 OR
<br>
is it that application (process) creates a Shared Memory and indicates to
<br>
Open MPI to use this for communication with the other process on the same
<br>
host OR is it that we have to use &quot;allocation&quot; routines provided by Open MPI
<br>
and Open MPI internally makes all the memory as Shared so that processes on
<br>
the same host can simply use it.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2150.php">George Bosilca: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2150.php">George Bosilca: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
