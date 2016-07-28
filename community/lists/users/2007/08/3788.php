<?
$subject_val = "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 11:38:44 2007" -->
<!-- isoreceived="20070801153844" -->
<!-- sent="Wed, 1 Aug 2007 21:08:39 +0530" -->
<!-- isosent="20070801153839" -->
<!-- name="S.Sundar Raman" -->
<!-- email="sundar02_at_[hidden]" -->
<!-- subject="[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system" -->
<!-- id="3c20c5bc0708010838l4623bef8ka2a82803f5afb084_at_mail.gmail.com" -->
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
<strong>From:</strong> S.Sundar Raman (<em>sundar02_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-01 11:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="../../2007/07/3787.php">Juan Carlos Guzman: "[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3792.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Reply:</strong> <a href="3792.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear openmpi users,
<br>
i m trying to compile openmpi with pgf90 compiler in AMD opteron system.
<br>
i followed the procedure given in the mailer archives.
<br>
i found the following problem.
<br>
please kindly help me in this regard and i m eagerly waiting for your reply
<br>
<p>make[2]: Entering directory `/usr/local/openmpi-1.2.3/ompi/mpi/f90'
<br>
<p>/bin/sh ../../../libtool --mode=link pgf90 -I../../../ompi/include
<br>
-I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90 -export-dynamic -o
<br>
libmpi_f90.la -rpath /usr/local/mpi/lib mpi.lo mpi_sizeof.lo
<br>
mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
<br>
mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo
<br>
-lnsl -lutil -lm
<br>
<p>libtool: link: pgf90 -shared -fPIC -Mnomain .libs/mpi.o .libs/mpi_sizeof.o
<br>
.libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o
<br>
.libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o
<br>
.libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o -lnsl -lutil -lm -Wl,-soname
<br>
-Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
<br>
<p>/usr/bin/ld: .libs/mpi.o: relocation R_X86_64_PC32 against `__pgio_ini' can
<br>
not be used when making a shared object; recompile with -fPIC
<br>
<p>/usr/bin/ld: final link failed: Bad value
<br>
<p>make[2]: *** [libmpi_f90.la] Error 2
<br>
<p>make[2]: Leaving directory `/usr/local/openmpi-1.2.3/ompi/mpi/f90'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory `/usr/local/openmpi-1.2.3/ompi/mpi/f90'
<br>
<p>make: *** [all] Error 2
<br>
<p><p><p><p><pre>
-- 
S.Sundar Raman
Chemical Lab,
CLRI
Chennai-20
ph: 044-24411830
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-3788/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="../../2007/07/3787.php">Juan Carlos Guzman: "[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3792.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Reply:</strong> <a href="3792.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
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
