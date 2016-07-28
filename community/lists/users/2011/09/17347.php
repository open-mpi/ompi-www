<?
$subject_val = "[OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 22:23:49 2011" -->
<!-- isoreceived="20110920022349" -->
<!-- sent="Tue, 20 Sep 2011 09:23:44 +0700" -->
<!-- isosent="20110920022344" -->
<!-- name="Ole Nielsen" -->
<!-- email="ole.moller.nielsen_at_[hidden]" -->
<!-- subject="[OMPI users] MPI hangs on multiple nodes" -->
<!-- id="CALcLSfonKTtkp9L8XMTFg_4LRFYP2o1qXVNXykiCMC5gq=oVQg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALcLSfpeQfvrMJ0xqx5gWj8VwuJKRjUpxnQ8UnS2W0_Bj9cYCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Ole Nielsen (<em>ole.moller.nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 22:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17348.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17346.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="17434.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all - and sorry for the multiple postings, but I have more information.
<br>
<p>1: After a reboot of two nodes I ran again, and the inter-node freeze didn't
<br>
happen until the third iteration. I take that to mean that the basic
<br>
communication works, but that something is saturating. Is there some notion
<br>
of buffer size somewhere in the MPI system that could explain this?
<br>
2: The nodes have 4 ethernet cards each. Could the mapping be a problem?
<br>
3: The cpus are running at a 100% for all processes involved in the freeze
<br>
4: The same test program (
<br>
<a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>) works fine
<br>
when run within one node so the problem must be with MPI and/or our network.
<br>
<p>5: The network and ssh works otherwise fine.
<br>
<p><p>Again many thanks for any hint that can get us going again. The main thing
<br>
we need is some diagnostics that may point to what causes this problem for
<br>
MPI.
<br>
Cheers
<br>
Ole Nielsen
<br>
<p>------
<br>
<p>Here's the output which shows the freeze in the third iteration:
<br>
<p>nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host
<br>
node5,node6 --npernode 2 a.out
<br>
Number of processes = 4
<br>
Test repeated 3 times for reliability
<br>
I am process 2 on node node6
<br>
P2: Waiting to receive from to P1
<br>
P2: Sending to to P3
<br>
I am process 3 on node node6
<br>
P3: Waiting to receive from to P2
<br>
I am process 1 on node node5
<br>
P1: Waiting to receive from to P0
<br>
P1: Sending to to P2
<br>
P1: Waiting to receive from to P0
<br>
I am process 0 on node node5
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P3
<br>
P2: Waiting to receive from to P1
<br>
P3: Sending to to P0
<br>
P3: Waiting to receive from to P2
<br>
P1: Sending to to P2
<br>
P0: Received from to P3
<br>
Run 2 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P3
<br>
P1: Waiting to receive from to P0
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17348.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17346.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="17434.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
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
