<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 09:34:44 2006" -->
<!-- isoreceived="20060510133444" -->
<!-- sent="Wed, 10 May 2006 09:33:36 -0400" -->
<!-- isosent="20060510133336" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling with NAG f95" -->
<!-- id="4E8175D3-FFA7-4566-8567-5E4FFAD71122_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 09:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1229.php">Gurhan Ozen: "[OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1227.php">Michael Creel: "[OMPI users] version 1.0.2 on latest parallelknoppix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<li><strong>Maybe reply:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone been able to build openmpi-1.0.2 with the NAG fortran  
<br>
compilers?  I have been trying with no luck, here is what i have  
<br>
tried and the resulting errors.
<br>
<p>export FC=f95
<br>
./configure --prefix=/home/software/rhel4/openmpi-1.0.2/nag --with- 
<br>
tm=/home/software/torque-2.0.0p8
<br>
make
<br>
<p>./scripts/mpi_ssend_init_f90.f90.sh /usr/local/src/openmpi-1.0.2.nag- 
<br>
pgi/ompi/mpi/f90 &gt; mpi_ssend_init_f90.f90
<br>
/afs/engin.umich.edu/caen/rhel_4/nag/bin/f95 -I../../../include - 
<br>
I../../../include -I.  -c -o mpi_address_f90.o  mpi_address_f90.f90
<br>
Error: mpi_address_f90.f90: Inconsistent data types for argument 1 to  
<br>
MPI_ADDRESS from MPI_ADDRESS0DL2 and MPI_ADDRESS0DL1
<br>
Error: mpi_address_f90.f90: Inconsistent data types for argument 1 to  
<br>
MPI_ADDRESS from MPI_ADDRESS0DL4 and MPI_ADDRESS0DL1
<br>
......snip.....
<br>
<p>any many more similar messages about &quot;Inconsistent data types&quot;
<br>
I dont know if it matters, but I have tried both pgi 6.1 for the c  
<br>
compiler and gcc 3.4.5
<br>
On RHEL-4 on AMD Opteron
<br>
<p>Thanks
<br>
Brock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1229.php">Gurhan Ozen: "[OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1227.php">Michael Creel: "[OMPI users] version 1.0.2 on latest parallelknoppix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<li><strong>Maybe reply:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
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
