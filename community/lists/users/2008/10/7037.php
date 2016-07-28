<?
$subject_val = "[OMPI users] Can OpenMPI support multiple compilers?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 20:19:30 2008" -->
<!-- isoreceived="20081020001930" -->
<!-- sent="Mon, 20 Oct 2008 08:19:39 +0800" -->
<!-- isosent="20081020001939" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="[OMPI users] Can OpenMPI support multiple compilers?" -->
<!-- id="OF990E5959.D2C05D30-ON482574E8.00007CDE-482574E8.0001C5CA_at_cn.ibm.com" -->
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
<strong>Subject:</strong> [OMPI users] Can OpenMPI support multiple compilers?<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 20:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7036.php">Wen Hao Wang: "[OMPI users] test OpenMPI without Internet access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Reply:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I have openmpi 1.2.5 installed on SLES10 SP2. These packages should be
<br>
compiled with gcc compilers. Now I have installed Intel C++ and Fortran
<br>
compilers on my cluster. Can openmpi use Intel compilers withour
<br>
recompiling?
<br>
<p>I tried to use environment variable to indicate Intel compiler, but it
<br>
seems the mpi commands still wanted to use gcc ones.
<br>
LS21-08:/opt/intel/fce/10.1.018/bin # mpif77 --showme
<br>
gfortran -I/usr/lib64/mpi/gcc/openmpi/include -pthread
<br>
-L/usr/lib64/mpi/gcc/openmpi/lib64 -lmpi_f77 -lmpi -lopen-rte -lopen-pal
<br>
-ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
LS21-08:/opt/intel/fce/10.1.018/bin # export F77=/opt/intel/fce/10.1.018
<br>
/bin/ifort
<br>
LS21-08:/opt/intel/fce/10.1.018/bin # rpm -e gcc-fortran-4.1.2
<br>
_20070115-0.21
<br>
LS21-08:/opt/intel/fce/10.1.018/bin # mpif77 /LTC/matmul-for-intel.f
<br>
--------------------------------------------------------------------------
<br>
The Open MPI wrapper compiler was unable to find the specified compiler
<br>
gfortran in your PATH.
<br>
<p>Note that this compiler was either specified at configure time or in
<br>
one of several possible environment variables.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Is it possible to change openmpi's underlying compiler? Thus I can use
<br>
multiple compilers on one machine.
<br>
<p>Thanks in advance!
<br>
<p>Steven Wang
<br>
Email: wangwhao_at_[hidden]
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7036.php">Wen Hao Wang: "[OMPI users] test OpenMPI without Internet access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Reply:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
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
