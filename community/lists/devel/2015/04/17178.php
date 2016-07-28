<?
$subject_val = "[OMPI devel] Problems with some IBM neighbor tests";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 10:09:52 2015" -->
<!-- isoreceived="20150402140952" -->
<!-- sent="Thu, 2 Apr 2015 14:09:51 +0000" -->
<!-- isosent="20150402140951" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Problems with some IBM neighbor tests" -->
<!-- id="1427983470384.43659_at_nvidia.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Problems with some IBM neighbor tests<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-02 10:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17177.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Update master tarballs to latest GNU Autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>Reply:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just recently bumped running some tests from np=4 to np=6.  I am now seeing failures on the following tests in the ibm/collective directory.
<br>
<p>ineighbor_allgather, ineighbor_allgatherv, ineighbor_alltoall, ineighbor_alltoallv, ineighbor_alltoallw
<br>
<p>neighbor_allfather, neighbor_allgatherv, neighbor_alltoall, neighbor_alltoallv, neighbor_alltoallw
<br>
<p><p>The test fails like this:
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
<p><p>Anyone know if this bug in test or in library?  This happens on both 1.8 and master.
<br>
<p>Thanks,
<br>
<p>Rolf
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17177.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Update master tarballs to latest GNU Autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>Reply:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
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
