<?
$subject_val = "[OMPI users] MPI_LB in a recursive type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 22:57:37 2015" -->
<!-- isoreceived="20150826025737" -->
<!-- sent="Tue, 25 Aug 2015 21:57:27 -0500 (CDT)" -->
<!-- isosent="20150826025727" -->
<!-- name="Roy Stogner" -->
<!-- email="roystgnr_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_LB in a recursive type" -->
<!-- id="alpine.LRH.2.20.1508252135110.24154_at_spark.ices.utexas.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_LB in a recursive type<br>
<strong>From:</strong> Roy Stogner (<em>roystgnr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 22:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27496.php">Brice Goglin: "[OMPI users] EuroMPI 2015 Call for Participation - Early deadline Sept 1st"</a>
<li><strong>Previous message:</strong> <a href="27494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does make run autoconfig?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Reply:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Maybe reply:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may be a general MPI question rather than an OpenMPI-specific
<br>
question.  I apologize if I've picked the wrong mailing list for such,
<br>
and in that case I'd welcome being redirected to a more appropriate
<br>
forum.
<br>
<p>I'm trying to debug a problem in a much more complex system, but
<br>
I've boiled it down to a ~100 line MPI-1 test case which exhibits
<br>
similarly unexpected behavior.  The test case first uses
<br>
MPI_Type_struct to create a data type corresponding to a 2D point (two
<br>
doubles), then again to create a heterogenous pair of a single double
<br>
preceding the 2D point data type.
<br>
<p>If I use a single block to create the inner data type, then the result
<br>
works as expected for all operations I've tested.
<br>
<p>If I use MPI_LB to indicate a lower bound of 0 on the inner data type
<br>
(which I believe should be redundant in this case, but which can be
<br>
necessary for more intricate data types in the complex system), then
<br>
the result fails.
<br>
<p>Specifically, the recursive data type then gives corrupt results when
<br>
communicating vectors of these pairs, and even without communication
<br>
we can see unexpected behavior by querying its extents: A triplet of
<br>
doubles should begin at byte 0 and end at byte 24, but querying
<br>
MPI_Type_lb gives a beginning at byte 8 if MPI_LB has been used in the
<br>
construction.
<br>
<p>Running mpicxx on the attached file (equivalently, the code pasted at
<br>
<a href="https://github.com/libMesh/libmesh/issues/631#issuecomment-134800297">https://github.com/libMesh/libmesh/issues/631#issuecomment-134800297</a>
<br>
in case file attachments get stripped here) demonstrates the problem
<br>
on my (64-bit) system.  For simplicity the displacements here are
<br>
hard-coded rather than portable, but the original MPI_Address and
<br>
MPI_Get_address based routines failed in the same way.
<br>
<p>Our full system only fails with MPICH2, but that may just have been
<br>
luck?  With this test case I'm seeing failures with both MPICH2 and
<br>
OpenMPI and so I've got to assume my own code is at fault.  Any help
<br>
would be appreciated.  If there's anything I can do to make the issue
<br>
easier to replicate please let me know.
<br>
<p>Thanks,
<br>
<pre>
---
Roy Stogner

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27495/recursive_datatype.C">recursive_datatype.C</a>
</ul>
<!-- attachment="recursive_datatype.C" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27496.php">Brice Goglin: "[OMPI users] EuroMPI 2015 Call for Participation - Early deadline Sept 1st"</a>
<li><strong>Previous message:</strong> <a href="27494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does make run autoconfig?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Reply:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Maybe reply:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
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
