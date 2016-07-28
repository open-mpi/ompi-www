<?
$subject_val = "[OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 23 18:27:52 2013" -->
<!-- isoreceived="20131223232752" -->
<!-- sent="Mon, 23 Dec 2013 18:27:52 -0500" -->
<!-- isosent="20131223232752" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10" -->
<!-- id="52B8C6F8.9020509_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-23 18:27:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Previous message:</strong> <a href="23283.php">Javier Garcia Blas: "[OMPI users] Call for Workshops: EuroMPI/ASIA 2014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Reply:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI experts
<br>
<p>I have been using OMPI 1.6.5 built with gcc 4.4.7 and
<br>
PGI pgfortran 11.10 to successfully compile and run
<br>
a large climate modeling program (CESM) in several
<br>
different configurations.
<br>
<p>However, today I hit a segmentation fault when running a new model 
<br>
configuration.
<br>
[In the climate modeling jargon, a program is called a &quot;model&quot;.]
<br>
<p>This is somewhat unpleasant because that OMPI build
<br>
is a central piece of the production CESM model setup available
<br>
to all users in our two clusters at this point.
<br>
I have other OMPI 1.6.5 builds, with other compilers, but that one
<br>
was working very well with CESM, until today.
<br>
<p>Unless I am misinterpreting it, the error message,
<br>
reproduced below, seems to indicate the problem
<br>
happened inside the OMPI library.
<br>
Or not?
<br>
<p>Other details:
<br>
<p>Nodes are AMD Opteron 6376 x86_64, interconnect is Infiniband QDR,
<br>
OS is stock CentOS 6.4, kernel 2.6.32-358.2.1.el6.x86_64.
<br>
The program is compiled with the OMPI wrappers (mpicc and mpif90),
<br>
and somewhat conservative optimization flags:
<br>
<p>FFLAGS       := $(CPPDEFS) -i4 -gopt -Mlist -Mextend -byteswapio 
<br>
-Minform=inform -traceback -O2 -Mvect=nosse -Kieee
<br>
<p>Is this a known issue?
<br>
Any clues on how to address it?
<br>
<p>Thank you for your help,
<br>
Gus Correa
<br>
<p>**************** error message *******************
<br>
<p>[1,31]&lt;stderr&gt;:[node30:17008] *** Process received signal ***
<br>
[1,31]&lt;stderr&gt;:[node30:17008] Signal: Segmentation fault (11)
<br>
[1,31]&lt;stderr&gt;:[node30:17008] Signal code: Address not mapped (1)
<br>
[1,31]&lt;stderr&gt;:[node30:17008] Failing at address: 0x17
<br>
[1,31]&lt;stderr&gt;:[node30:17008] [ 0] /lib64/libpthread.so.0(+0xf500) 
<br>
[0x2b788ef9f500]
<br>
[1,31]&lt;stderr&gt;:[node30:17008] [ 1] 
<br>
/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(+0x100ee3) 
<br>
[0x2b788e200ee3]
<br>
[1,31]&lt;stderr&gt;:[node30:17008] [ 2] 
<br>
/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x111) 
<br>
[0x2b788e203771]
<br>
[1,31]&lt;stderr&gt;:[node30:17008] [ 3] 
<br>
/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x97) 
<br>
[0x2b788e2046d7]
<br>
[1,31]&lt;stderr&gt;:[node30:17008] [ 4] 
<br>
/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x8b) 
<br>
[0x2b788e2052ab]
<br>
[1,31]&lt;stderr&gt;:[node30:17008] [ 5] ./ccsm.exe(pgf90_auto_alloc+0x73) 
<br>
[0xe2c4c3]
<br>
[1,31]&lt;stderr&gt;:[node30:17008] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 31 with PID 17008 on node node30 
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Previous message:</strong> <a href="23283.php">Javier Garcia Blas: "[OMPI users] Call for Workshops: EuroMPI/ASIA 2014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Reply:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
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
