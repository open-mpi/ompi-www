<?
$subject_val = "Re: [OMPI users] Can OpenMPI support multiple compilers?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 21:34:18 2008" -->
<!-- isoreceived="20081020013418" -->
<!-- sent="Mon, 20 Oct 2008 12:34:07 +1100" -->
<!-- isosent="20081020013407" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can OpenMPI support multiple compilers?" -->
<!-- id="1224466447.5841.38.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="OF990E5959.D2C05D30-ON482574E8.00007CDE-482574E8.0001C5CA_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can OpenMPI support multiple compilers?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 21:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7041.php">Pedro G: "[OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7039.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="7037.php">Wen Hao Wang: "[OMPI users] Can OpenMPI support multiple compilers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Reply:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It happily supports multiple compilers on the same system, but not in
<br>
the way you mean.  You need another installation of OMPI (in,
<br>
say, /usr/lib64/mpi/intel) for icc/ifort.
<br>
<p>Select by path manipulation.
<br>
<p>On Mon, 2008-10-20 at 08:19 +0800, Wen Hao Wang wrote:
<br>
<span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have openmpi 1.2.5 installed on SLES10 SP2. These packages should be
</span><br>
<span class="quotelev1">&gt; compiled with gcc compilers. Now I have installed Intel C++ and
</span><br>
<span class="quotelev1">&gt; Fortran compilers on my cluster. Can openmpi use Intel compilers
</span><br>
<span class="quotelev1">&gt; withour recompiling?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to use environment variable to indicate Intel compiler, but it
</span><br>
<span class="quotelev1">&gt; seems the mpi commands still wanted to use gcc ones.
</span><br>
<span class="quotelev1">&gt; LS21-08:/opt/intel/fce/10.1.018/bin # mpif77 --showme
</span><br>
<span class="quotelev1">&gt; gfortran -I/usr/lib64/mpi/gcc/openmpi/include -pthread
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/mpi/gcc/openmpi/lib64 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; LS21-08:/opt/intel/fce/10.1.018/bin # export
</span><br>
<span class="quotelev1">&gt; F77=/opt/intel/fce/10.1.018/bin/ifort
</span><br>
<span class="quotelev1">&gt; LS21-08:/opt/intel/fce/10.1.018/bin # rpm -e
</span><br>
<span class="quotelev1">&gt; gcc-fortran-4.1.2_20070115-0.21
</span><br>
<span class="quotelev1">&gt; LS21-08:/opt/intel/fce/10.1.018/bin # mpif77 /LTC/matmul-for-intel.f
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The Open MPI wrapper compiler was unable to find the specified
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; gfortran in your PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this compiler was either specified at configure time or in
</span><br>
<span class="quotelev1">&gt; one of several possible environment variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to change openmpi's underlying compiler? Thus I can use
</span><br>
<span class="quotelev1">&gt; multiple compilers on one machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steven Wang
</span><br>
<span class="quotelev1">&gt; Email: wangwhao_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7041.php">Pedro G: "[OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7039.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="7037.php">Wen Hao Wang: "[OMPI users] Can OpenMPI support multiple compilers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Reply:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
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
