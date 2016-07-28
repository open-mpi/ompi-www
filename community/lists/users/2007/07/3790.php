<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 30 01:47:19 2007" -->
<!-- isoreceived="20070730054719" -->
<!-- sent="Mon, 30 Jul 2007 15:47:04 +1000" -->
<!-- isosent="20070730054704" -->
<!-- name="Juan Carlos Guzman" -->
<!-- email="juan.guzman_at_[hidden]" -->
<!-- subject="[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions" -->
<!-- id="B823A70C-2913-4CA6-B18C-E59C50ABDAED_at_csiro.au" -->
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
<strong>From:</strong> Juan Carlos Guzman (<em>juan.guzman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-30 01:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3791.php">S.Sundar Raman: "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3800.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Does anyone know the maximum buffer size I can use in MPI_Send()  
<br>
(MPI_Recv) function?. I was doing some testing using two nodes on my  
<br>
cluster to measure the point-to-point MPI message rate depending on  
<br>
size. The test program exchanges MPI_FLOAT datatypes between two  
<br>
nodes. I was able to send up to 4 GB of data (500 Mega MPI_FLOATs)  
<br>
before the process crashed with a segmentation fault message.
<br>
<p>Is the maximum size of the message limited by the sizeof(int) * sizeof 
<br>
(MPI data type) used in the MPI_Send()/MPI_Recv() functions?
<br>
<p>My cluster has openmpi 1.2.3 installed. Each node has 2 x dual core  
<br>
AMD Opteron and 12 GB RAM.
<br>
<p>Thanks in advance.
<br>
&nbsp;&nbsp;&nbsp;Juan-Carlos.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3791.php">S.Sundar Raman: "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3800.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
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
