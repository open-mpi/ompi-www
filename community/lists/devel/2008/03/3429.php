<?
$subject_val = "[OMPI devel] Missing symbol with DR PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 15:03:12 2008" -->
<!-- isoreceived="20080311190312" -->
<!-- sent="Tue, 11 Mar 2008 15:03:12 -0400" -->
<!-- isosent="20080311190312" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="[OMPI devel] Missing symbol with DR PML" -->
<!-- id="47D6D770.1060708_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Missing symbol with DR PML<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 15:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Previous message:</strong> <a href="3428.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Reply:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running a several different trunk checkouts and I always see this 
<br>
error when running with the DR PML:
<br>
<p>$ mpirun -np 2 -mca pml dr ./NPmpi
<br>
0: sif
<br>
1: sif
<br>
./NPmpi: symbol lookup error: 
<br>
/u/afriedle/local/x86_64/ompi-trunk3/lib/openmpi/mca_pml_dr.so: 
<br>
undefined symbol: ompi_seq_tracker_check_duplicate
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 21139 on
<br>
node sif.cs.indiana.edu calling &quot;abort&quot;. This may have caused other 
<br>
processes
<br>
in the application to be terminated by signals sent by mpirun
<br>
(as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>I'm looking at the code and I see no explanation for this.  Seems like a 
<br>
build/installation error, but I'm seeing this on a clean trunk checkout 
<br>
on two different machines.  Anyone know what's going on?  Can anyone 
<br>
reproduce this?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Previous message:</strong> <a href="3428.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Reply:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
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
