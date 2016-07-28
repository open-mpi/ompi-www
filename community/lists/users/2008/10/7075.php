<?
$subject_val = "Re: [OMPI users] Can OpenMPI support multiple compilers?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:10:10 2008" -->
<!-- isoreceived="20081022181010" -->
<!-- sent="Wed, 22 Oct 2008 10:49:40 -0500" -->
<!-- isosent="20081022154940" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can OpenMPI support multiple compilers?" -->
<!-- id="1496BEF4-042E-4EBE-8EE7-B339C0E647EF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1224466447.5841.38.camel_at_rscpc28.anu.edu.au" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 11:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Previous message:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also check the FAQ on how to use the wrapper compilers -- there are  
<br>
ways to override at compile time, but be warned that it's not always  
<br>
what you want.  As Terry indicates, you probably want to have multiple  
<br>
OMPI installations -- one for each compiler.
<br>
<p>In particular, there are problems with mixing multiple Fortran  
<br>
compilers noted in OMPI's README file:
<br>
<p>- Open MPI will build bindings suitable for all common forms of
<br>
&nbsp;&nbsp;&nbsp;Fortran 77 compiler symbol mangling on platforms that support it
<br>
&nbsp;&nbsp;&nbsp;(e.g., Linux).  On platforms that do not support weak symbols (e.g.,
<br>
&nbsp;&nbsp;&nbsp;OS X), Open MPI will build Fortran 77 bindings just for the compiler
<br>
&nbsp;&nbsp;&nbsp;that Open MPI was configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;Hence, on platforms that support it, if you configure Open MPI with
<br>
&nbsp;&nbsp;&nbsp;a Fortran 77 compiler that uses one symbol mangling scheme, you can
<br>
&nbsp;&nbsp;&nbsp;successfully compile and link MPI Fortran 77 applications with a
<br>
&nbsp;&nbsp;&nbsp;Fortran 77 compiler that uses a different symbol mangling scheme.
<br>
<p>&nbsp;&nbsp;&nbsp;NOTE: For platforms that support the multi-Fortran-compiler bindings
<br>
&nbsp;&nbsp;&nbsp;(i.e., weak symbols are supported), due to limitations in the MPI
<br>
&nbsp;&nbsp;&nbsp;standard and in Fortran compilers, it is not possible to hide these
<br>
&nbsp;&nbsp;&nbsp;differences in all cases.  Specifically, the following two cases may
<br>
&nbsp;&nbsp;&nbsp;not be portable between different Fortran compilers:
<br>
<p>&nbsp;&nbsp;&nbsp;1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will only compare properly to Fortran applications that were
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;created with Fortran compilers that that use the same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name-mangling scheme as the Fortran compiler that Open MPI was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured with.
<br>
<p>&nbsp;&nbsp;&nbsp;2. Fortran compilers may have different values for the logical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. constant.  As such, any MPI function that uses the Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL type may only get .TRUE. values back that correspond to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the the .TRUE. value of the Fortran compiler that Open MPI was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured with.  Note that some Fortran compilers allow forcing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. to be 1 and .FALSE. to be 0.  For example, the Portland
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group compilers provide the &quot;-Munixlogical&quot; option, and Intel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compilers (version &gt;= 8.) provide the &quot;-fpscomp logicals&quot; option.
<br>
<p>&nbsp;&nbsp;&nbsp;You can use the ompi_info command to see the Fortran compiler that
<br>
&nbsp;&nbsp;&nbsp;Open MPI was configured with.
<br>
<p><p>On Oct 19, 2008, at 8:34 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; It happily supports multiple compilers on the same system, but not in
</span><br>
<span class="quotelev1">&gt; the way you mean.  You need another installation of OMPI (in,
</span><br>
<span class="quotelev1">&gt; say, /usr/lib64/mpi/intel) for icc/ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Select by path manipulation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2008-10-20 at 08:19 +0800, Wen Hao Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have openmpi 1.2.5 installed on SLES10 SP2. These packages should  
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; compiled with gcc compilers. Now I have installed Intel C++ and
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compilers on my cluster. Can openmpi use Intel compilers
</span><br>
<span class="quotelev2">&gt;&gt; withour recompiling?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to use environment variable to indicate Intel compiler, but  
</span><br>
<span class="quotelev2">&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; seems the mpi commands still wanted to use gcc ones.
</span><br>
<span class="quotelev2">&gt;&gt; LS21-08:/opt/intel/fce/10.1.018/bin # mpif77 --showme
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -I/usr/lib64/mpi/gcc/openmpi/include -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib64/mpi/gcc/openmpi/lib64 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; LS21-08:/opt/intel/fce/10.1.018/bin # export
</span><br>
<span class="quotelev2">&gt;&gt; F77=/opt/intel/fce/10.1.018/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; LS21-08:/opt/intel/fce/10.1.018/bin # rpm -e
</span><br>
<span class="quotelev2">&gt;&gt; gcc-fortran-4.1.2_20070115-0.21
</span><br>
<span class="quotelev2">&gt;&gt; LS21-08:/opt/intel/fce/10.1.018/bin # mpif77 /LTC/matmul-for-intel.f
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI wrapper compiler was unable to find the specified
</span><br>
<span class="quotelev2">&gt;&gt; compiler
</span><br>
<span class="quotelev2">&gt;&gt; gfortran in your PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that this compiler was either specified at configure time or in
</span><br>
<span class="quotelev2">&gt;&gt; one of several possible environment variables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to change openmpi's underlying compiler? Thus I can  
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; multiple compilers on one machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steven Wang
</span><br>
<span class="quotelev2">&gt;&gt; Email: wangwhao_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Previous message:</strong> <a href="7074.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<!-- nextthread="start" -->
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
