<?
$subject_val = "[OMPI devel] MPI_Pack &amp; MPI_Unpack Performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 10:31:11 2010" -->
<!-- isoreceived="20100519143111" -->
<!-- sent="Wed, 19 May 2010 09:31:06 -0500" -->
<!-- isosent="20100519143106" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Pack &amp;amp; MPI_Unpack Performance" -->
<!-- id="AANLkTildSh50oQD3fAv1fzPjPquXCEnWiumzzHlhoHxf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Pack &amp; MPI_Unpack Performance<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 10:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7978.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the MPITypes paper (Processing MPI Datatypes Outside MPI), page 7:
<br>
<p>Test: Vector
<br>
Element type: float
<br>
MPICH2:   1788.85 MB/sec
<br>
OpenMPI:  1088.01 MB/sec &lt;- *
<br>
MPITypes: 1789.37 MB/sec
<br>
Manual Copy: 1791.59 MB/sec
<br>
<p>Test: YZ Face
<br>
Element type: float
<br>
MPICH2:   145.32 MB/sec
<br>
OpenMPI:   93.08 MB/sec &lt;- *
<br>
MPITypes: 145.32 MB/sec
<br>
Manual Copy: 143.68 MB/sec
<br>
<p>Size: 0.25 MB
<br>
Extent:63.99 MB
<br>
<p>The paper can be downloaded at:
<br>
<a href="http://press.mcs.anl.gov/mpitypes/">http://press.mcs.anl.gov/mpitypes/</a>
<br>
<p>Is anyone working on this performance issue, or has it been fixed
<br>
already?? If not, I will check with the authors and try to get the
<br>
source code of the benchmark...
<br>
<p>Rayson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7978.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7976.php">Sylvain Jeaugey: "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
