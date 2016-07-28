<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 11:26:23 2007" -->
<!-- isoreceived="20070306162623" -->
<!-- sent="Tue, 6 Mar 2007 11:26:04 -0500" -->
<!-- isosent="20070306162604" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_PACK very slow?" -->
<!-- id="CF5A5CC8-5912-4481-ADF5-ED2202B7FB58_at_ieee.org" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 11:26:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Reply:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a section of code were I need to send 8 separate integers via  
<br>
BCAST.
<br>
<p>Initially I was just putting the 8 integers into an array and then  
<br>
sending that array.
<br>
<p>I just tried using MPI_PACK on those 8 integers and I'm seeing a  
<br>
massive slow down in the code, I have a lot of other communication  
<br>
and this section is being used only 5 times.  I went from 140 seconds  
<br>
to 277 seconds on 16 processors using TCP via a dual gigabit ethernet  
<br>
setup (I'm the only user working on this system today).
<br>
<p>This was run with OpenMPI 1.1.2 to maintain compatibility with a  
<br>
major HPC site.
<br>
<p>Is there a know problem with MPI_PACK/UNPACK in OpenMPI?
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Reply:</strong> <a href="2765.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
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
