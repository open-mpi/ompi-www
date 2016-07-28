<?
$subject_val = "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 13:22:47 2009" -->
<!-- isoreceived="20090915172247" -->
<!-- sent="Tue, 15 Sep 2009 19:22:56 +0200" -->
<!-- isosent="20090915172256" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?" -->
<!-- id="1253035376.7142.110.camel_at_hp-laptop" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 13:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Previous message:</strong> <a href="6834.php">Jeff Squyres: "[OMPI devel] Fixed sm coll bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Reply:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was running IMB these days and noticed that Open MPI refuses to use
<br>
the Infiniband interconnects. I compiled Open MPI with 
<br>
<p>../configure --prefix=... CC=/opt/intel/cce/10.1.015/bin/icc
<br>
CXX=/opt/intel/cce/10.1.015/bin/icpc
<br>
CPP=&quot;/opt/intel/cce/10.1.015/bin/icc -E&quot;
<br>
FC=/opt/intel/fce/10.1.015/bin/ifort
<br>
F90=/opt/intel/fce/10.1.015/bin/ifort
<br>
F77=/opt/intel/fce/10.1.015/bin/ifort --enable-mpi-f90
<br>
--with-tm=/usr/pbs/ --enable-mpi-threads=yes
<br>
--enable-contrib-no-build=vt --with-openib=/usr/
<br>
<p>However, I could never get Infiniband to be used :
<br>
<p>mpirun --mca btl openib,self,sm   -np 2
<br>
--bynode  /home_nfs/home_dichevk/tests/IMB/IMB_3.1/src-OpenMPI/IMB-MPI1 
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[5881,1],0]) is on host: nv11
<br>
&nbsp;&nbsp;Process 2 ([[5881,1],1]) is on host: nv12
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv11:17093] Abort before MPI_INIT completed successfully; not able to
<br>
guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv12:24383] Abort before MPI_INIT completed successfully; not able to
<br>
guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 17093 on
<br>
node nv11 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[nv11:17092] 1 more process has sent help message help-mca-bml-r2.txt /
<br>
unreachable proc
<br>
[nv11:17092] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
[nv11:17092] 1 more process has sent help message help-mpi-runtime /
<br>
mpi_init:startup:internal-failure
<br>
<p><p><p>Then I noticed some code and comments in
<br>
ompi/mca/btl/openib/btl_openib_component.c which seem to disable this
<br>
component when MPI_THREAD_MULTIPLE is used for the initialization (as is
<br>
the case with IMB). Is that intentional ?
<br>
<p>Best regards,
<br>
Kiril
<br>
<p><p><pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Previous message:</strong> <a href="6834.php">Jeff Squyres: "[OMPI devel] Fixed sm coll bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Reply:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
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
