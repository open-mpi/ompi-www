<?
$subject_val = "Re: [OMPI devel] Problems with some IBM neighbor tests";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 11:30:22 2015" -->
<!-- isoreceived="20150403153022" -->
<!-- sent="Fri, 3 Apr 2015 15:30:15 +0000" -->
<!-- isosent="20150403153015" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problems with some IBM neighbor tests" -->
<!-- id="cc64ceb27bc2463c9613876b892e80df_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1427983470384.43659_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problems with some IBM neighbor tests<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 11:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17180.php">Ralph Castain: "[OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17178.php">Rolf vandeVaart: "[OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>In reply to:</strong> <a href="17178.php">Rolf vandeVaart: "[OMPI devel] Problems with some IBM neighbor tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ended up looking at this and it was a bug in this set of tests.  Needed to check for MPI_COMM_NULL in a few places.
<br>
This has been fixed.
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Thursday, April 02, 2015 10:10 AM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] Problems with some IBM neighbor tests
<br>
<p><p>I just recently bumped running some tests from np=4 to np=6.  I am now seeing failures on the following tests in the ibm/collective directory.
<br>
<p>ineighbor_allgather, ineighbor_allgatherv, ineighbor_alltoall, ineighbor_alltoallv, ineighbor_alltoallw
<br>
<p>neighbor_allfather, neighbor_allgatherv, neighbor_alltoall, neighbor_alltoallv, neighbor_alltoallw
<br>
<p><p><p>The test fails like this:
<br>
<p>[rvandevaart_at_drossetti-ivy4 collective]$ mpirun -np 6 ineighbor_allgather
<br>
Testing MPI_Neighbor_allgather on cartesian communicator
<br>
[drossetti-ivy4:26205] *** An error occurred in MPI_Cart_coords
<br>
[drossetti-ivy4:26205] *** reported by process [3563978753,4]
<br>
[drossetti-ivy4:26205] *** on communicator MPI_COMM_WORLD
<br>
[drossetti-ivy4:26205] *** MPI_ERR_COMM: invalid communicator
<br>
[drossetti-ivy4:26205] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[drossetti-ivy4:26205] ***    and potentially your MPI job)
<br>
Pass!
<br>
<p>However, these tests appear to pass for multiples of 4 like np=4, 8, 12, 16, 20, etc...
<br>
<p><p><p>Anyone know if this bug in test or in library?  This happens on both 1.8 and master.
<br>
<p>Thanks,
<br>
<p>Rolf
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17180.php">Ralph Castain: "[OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17178.php">Rolf vandeVaart: "[OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>In reply to:</strong> <a href="17178.php">Rolf vandeVaart: "[OMPI devel] Problems with some IBM neighbor tests"</a>
<!-- nextthread="start" -->
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
