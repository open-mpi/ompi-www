<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 17:19:04 2007" -->
<!-- isoreceived="20070322211904" -->
<!-- sent="Thu, 22 Mar 2007 17:18:53 -0400" -->
<!-- isosent="20070322211853" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] Buffered sends" -->
<!-- id="3071ED1A-3638-483E-93D3-8EF854A5D530_at_ieee.org" -->
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
<strong>Date:</strong> 2007-03-22 17:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2889.php">George Bosilca: "Re: [OMPI users] Buffered sends"</a>
<li><strong>Previous message:</strong> <a href="2887.php">Geoff Galitz: "[OMPI users] hostfile syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2889.php">George Bosilca: "Re: [OMPI users] Buffered sends"</a>
<li><strong>Reply:</strong> <a href="2889.php">George Bosilca: "Re: [OMPI users] Buffered sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there known issue with buffered sends in OpenMPI 1.1.4?
<br>
<p>I changed a single send which is called thousands of times from  
<br>
MPI_SEND (&amp; MPI_ISEND) to MPI_BSEND (&amp; MPI_IBSEND) and my Fortran 90  
<br>
code slowed down by a factor of 10.
<br>
<p>I've looked at several references and I can't see where I'm making a  
<br>
mistake.  The MPI_SEND is for MPI_PACKED data, so it's first  
<br>
parameter is an allocated character array.  I also allocated a  
<br>
character array for the buffer passed to MPI_BUFFER_ATTACH.
<br>
<p>Looking at the model implementation in a reference they give a model  
<br>
of using MPI_PACKED inside MPI_BSEND, I was wondering if this could  
<br>
be a problem, i.e. packing packed data?
<br>
<p>Michael
<br>
<p>ps. I have to use OpenMPI 1.1.4 to maintain compatibility with a  
<br>
major HPC center.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2889.php">George Bosilca: "Re: [OMPI users] Buffered sends"</a>
<li><strong>Previous message:</strong> <a href="2887.php">Geoff Galitz: "[OMPI users] hostfile syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2889.php">George Bosilca: "Re: [OMPI users] Buffered sends"</a>
<li><strong>Reply:</strong> <a href="2889.php">George Bosilca: "Re: [OMPI users] Buffered sends"</a>
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
