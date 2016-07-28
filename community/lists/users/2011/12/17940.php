<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 14:29:36 2011" -->
<!-- isoreceived="20111212192936" -->
<!-- sent="Mon, 12 Dec 2011 12:29:07 -0700" -->
<!-- isosent="20111212192907" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="CAPkgxcwTyTjSSDKLKYTcGO7GJ1XriGqYVp5iWeBA_biZaVNJ0w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE647B5.9000106_at_atmos.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_BCAST and fortran subarrays<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 14:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17941.php">Erin Rasmussen: "[OMPI users] Specifying GPU on mpi"</a>
<li><strong>Previous message:</strong> <a href="17939.php">V. Ram: "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The interface to MPI_Bcast does not specify a assumed-shape-array dummy
<br>
first argument. Consequently, as David points out, the compiler makes a
<br>
contiguous temporary copy of the array section to pass to the routine. If
<br>
using ifort, try the &quot;-check arg_temp_created&quot; compiler option to verify
<br>
creation of temporary arrays.
<br>
<p>On Mon, Dec 12, 2011 at 11:28 AM, David Warren
<br>
&lt;warren_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I do similar things using ifort and it creates temporary arrays when
</span><br>
<span class="quotelev1">&gt; necessary and it all works.
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17940/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17941.php">Erin Rasmussen: "[OMPI users] Specifying GPU on mpi"</a>
<li><strong>Previous message:</strong> <a href="17939.php">V. Ram: "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
