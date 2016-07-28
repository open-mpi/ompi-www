<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 16:31:06 2007" -->
<!-- isoreceived="20070417203106" -->
<!-- sent="Tue, 17 Apr 2007 16:30:52 -0400" -->
<!-- isosent="20070417203052" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.1.4 vs. 1.2" -->
<!-- id="70B9EBE8-534B-44EB-B64F-29739B88F126_at_ieee.org" -->
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
<strong>Date:</strong> 2007-04-17 16:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Previous message:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Reply:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To maintain compatibility with a major HPC center I upgraded(?) from  
<br>
OpenMPI 1.1.4 to OpenMPI 1.2 on my local cluster.
<br>
<p>In testing on my local cluster, 13 dual-Opteron Linux boxes with dual  
<br>
gigabit ethernet, I discovered that my program runs slower using  
<br>
OpenMPI 1.2 then OpenMPI 1.1.4 (780.3 versus 402.4 seconds with 3  
<br>
processes--tested twice to be certain).
<br>
<p>This particular version of my program was designed to minimize the  
<br>
amount of communications and the only MPI calls that get used a lot  
<br>
are MPI_SEND and MPI_RECV with MPI_PACKED data (so MPI_PACK and  
<br>
MPI_UNPACK also get used a lot).
<br>
<p>Was there a known problem with OpenMPI 1.2 (r14027) and ethernet  
<br>
communication that got fixed later?
<br>
<p>The same executable run at the major center seems fine, but they have  
<br>
Myrinet.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Previous message:</strong> <a href="3078.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Reply:</strong> <a href="3080.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
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
