<?
$subject_val = "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 18:02:52 2012" -->
<!-- isoreceived="20120807220252" -->
<!-- sent="Tue, 7 Aug 2012 18:02:51 -0400" -->
<!-- isosent="20120807220251" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?" -->
<!-- id="18D32E940D8E4FF1964C55153B213BF9_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20120807162119.GL16771_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 18:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>In reply to:</strong> <a href="19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Reply:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, 7 August, 2012 at 12:21 PM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; Hi. Known problem in the ROMIO MPI-IO implementation (which OpenMPI
</span><br>
<span class="quotelev1">&gt; uses). Been on my list of &quot;things to fix&quot; for a while. 
</span><br>
<p>Ok, thanks. I'm glad it's not just us.
<br>
<p>Is there a timescale for this being fixed? Because if it's a long term thing, I would suggest it might be worth putting a FAQ entry on it or something similar? Especially as it's quite contradictory to most peoples interpretation of the specification. Maybe it's already listed as a known problem somewhere, and I just missed it - it took quite a while before I stopped thinking it was an issue with my code.
<br>
<p>Is there a better workaround than just splitting the MPI_File_read up into multiple reads of  &lt;2^31 bytes? We're actually trying to read in a distributed array, and the workaround awkwardly requires the creation and reading of multiple darray types, each designed to read in the correct number of blocks less than 2^31 bytes. This seems like it could be a bit fragile.
<br>
<p>Thanks again,
<br>
Richard
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>In reply to:</strong> <a href="19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Reply:</strong> <a href="19907.php">Rayson Ho: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
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
