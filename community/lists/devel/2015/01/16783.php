<?
$subject_val = "[OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 13:30:51 2015" -->
<!-- isoreceived="20150115183051" -->
<!-- sent="Thu, 15 Jan 2015 19:30:50 +0100" -->
<!-- isosent="20150115183050" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] Another Open MPI &amp;lt;-&amp;gt; PSM question (MPI_Isend()/MPI_Cancel())" -->
<!-- id="20150115183050.GF16124_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 13:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Reply:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doing 
<br>
<p>MPI_Isend()
<br>
<p>followed by a
<br>
<p>MPI_Cancel()
<br>
<p>fails on my PSM based system with 1.8.4 like this:
<br>
<p>n040108:0.1.Cannot cancel send requests (req=0x2b6279787f80)
<br>
n040108:0.0.Cannot cancel send requests (req=0x2b3a3dc92f80)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[58364,1],1]
<br>
&nbsp;&nbsp;Exit code:    255
<br>
--------------------------------------------------------------------------
<br>
<p>Is this something PSM actually cannot do or an Open MPI error?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Reply:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
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
