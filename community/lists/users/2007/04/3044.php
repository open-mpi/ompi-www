<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  8 01:46:03 2007" -->
<!-- isoreceived="20070408054603" -->
<!-- sent="Sun, 08 Apr 2007 00:45:55 -0500" -->
<!-- isosent="20070408054555" -->
<!-- name="Nathan Graham" -->
<!-- email="neomus0_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI and NPB3.2.1" -->
<!-- id="BAY101-F18DEF6C0599A71DD871621F05A0_at_phx.gbl" -->
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
<strong>From:</strong> Nathan Graham (<em>neomus0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-08 01:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3045.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3043.php">Adrian Knoth: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>Reply:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been trying to get NPB3.2.1 to run with OMPI version 1.2 over several 
<br>
nodes.  I have been running into the problem below.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Nathan
<br>
<p>[ngraham_at_phoenix bin]$ mpirun -np 16 --hostfile MyHostFile --mca btl 
<br>
self,sm,openib bt.B.16.mpi_io_full
<br>
<p><p>NAS Parallel Benchmarks 3.2 -- BT Benchmark
<br>
<p>No input file inputbt.data. Using compiled defaults
<br>
Size: 102x102x102
<br>
Iterations: 200    dt:   0.000300
<br>
Number of active processes:    16
<br>
<p>BTIO -- FULL MPI-IO write interval:  5
<br>
<p>ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outADIOI_NFS_OPEN (line 
<br>
55): **filenoexist btio.full.outADIOI_NFS_OPEN (line 55): **filenoexist 
<br>
btio.full.outADIO_OPEN (line 273): **oremote_fail
<br>
Error opening file
<br>
Error opening file
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
Error opening file
<br>
ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outADIOI_NFS_OPEN (line 
<br>
55): **filenoexist btio.full.outMPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outADIOI_NFS_OPEN (line 
<br>
55): **filenoexist btio.full.outMPI_FILE_CLOSE (line 51): **iobadfh
<br>
Error opening file
<br>
Error opening file
<br>
Error opening file
<br>
Error opening file
<br>
Error opening file
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
Error opening file
<br>
Error opening file
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
Error opening file
<br>
ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outMPI_FILE_CLOSE (line 
<br>
51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
Error opening file
<br>
Error opening file
<br>
Error opening file
<br>
Error opening file
<br>
Error opening file
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
<p>_________________________________________________________________
<br>
The average US Credit Score is 675. The cost to see yours: $0 by Experian. 
<br>
<a href="http://www.freecreditreport.com/pm/default.aspx?sc=660600&amp;bcd=EMAILFOOTERAVERAGE">http://www.freecreditreport.com/pm/default.aspx?sc=660600&amp;bcd=EMAILFOOTERAVERAGE</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3045.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3043.php">Adrian Knoth: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>Reply:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
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
