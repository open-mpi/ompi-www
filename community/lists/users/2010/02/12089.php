<?
$subject_val = "[OMPI users] Error while configuring openmpi with pgi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 06:18:29 2010" -->
<!-- isoreceived="20100216111829" -->
<!-- sent="Tue, 16 Feb 2010 16:31:08 +0530 (IST)" -->
<!-- isosent="20100216110108" -->
<!-- name="vighnesh_at_[hidden]" -->
<!-- email="vighnesh_at_[hidden]" -->
<!-- subject="[OMPI users] Error while configuring openmpi with pgi" -->
<!-- id="34511.10.101.11.74.1266318068.squirrel_at_www.aero.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error while configuring openmpi with pgi<br>
<strong>From:</strong> <a href="mailto:vighnesh_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error%20while%20configuring%20openmpi%20with%20pgi"><em>vighnesh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-02-16 06:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12088.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12098.php">Jeff Squyres: "Re: [OMPI users] Error while configuring openmpi with pgi"</a>
<li><strong>Reply:</strong> <a href="12098.php">Jeff Squyres: "Re: [OMPI users] Error while configuring openmpi with pgi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I am using PGI compiler version 7.2.4, in my Linux cluster, configured
<br>
with MPICH1. I tried to configure OPENMPI-1.3.3 with this PGI compiler,
<br>
but with no success. While performing #make it gives the following
<br>
error:
<br>
<p>___________________________________________________________________________
<br>
<p>Making install in scripts
<br>
make[4]: Entering directory `/tmp/openmpi-1.3.3/ompi/mpi/f90/scripts'
<br>
make[5]: Entering directory `/tmp/openmpi-1.3.3/ompi/mpi/f90/scripts'
<br>
make[5]: Nothing to be done for `install-exec-am'.
<br>
make[5]: Nothing to be done for `install-data-am'.
<br>
make[5]: Leaving directory `/tmp/openmpi-1.3.3/ompi/mpi/f90/scripts'
<br>
make[4]: Leaving directory `/tmp/openmpi-1.3.3/ompi/mpi/f90/scripts'
<br>
make[4]: Entering directory `/tmp/openmpi-1.3.3/ompi/mpi/f90'
<br>
/bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include
<br>
-I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90    -export-dynamic
<br>
&nbsp;&nbsp;-o libmpi_f90.la -rpath
<br>
/share/apps/pgi-7.2.4/linux86-64/7.2/mpi/openmpi/lib mpi.lo mpi_sizeof.lo
<br>
mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
<br>
mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo  
<br>
../../../ompi/libmpi.la -lnsl -lutil  -lm
<br>
libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o  
<br>
-Wl,-rpath -Wl,/tmp/openmpi-1.3.3/ompi/.libs -Wl,-rpath
<br>
-Wl,/tmp/openmpi-1.3.3/orte/.libs -Wl,-rpath
<br>
-Wl,/tmp/openmpi-1.3.3/opal/.libs -Wl,-rpath
<br>
-Wl,/share/apps/pgi-7.2.4/linux86-64/7.2/mpi/openmpi/lib
<br>
-L/tmp/openmpi-1.3.3/orte/.libs -L/tmp/openmpi-1.3.3/opal/.libs
<br>
../../../ompi/.libs/libmpi.so /tmp/openmpi-1.3.3/orte/.libs/libopen-rte.so
<br>
/tmp/openmpi-1.3.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm   
<br>
-pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
<br>
pgf90-Error-Unknown switch: -pthread
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
make[4]: Leaving directory `/tmp/openmpi-1.3.3/ompi/mpi/f90'
<br>
make[3]: *** [install-recursive] Error 1
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.3/ompi/mpi/f90'
<br>
make[2]: *** [install] Error 2
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.3/ompi/mpi/f90'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.3.3/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
____________________________________________________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;Can anyone please help me in solving this problem.
<br>
<p>Thankyou,
<br>
<p>Regards,
<br>
Vighnesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Previous message:</strong> <a href="12088.php">Ralph Castain: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12098.php">Jeff Squyres: "Re: [OMPI users] Error while configuring openmpi with pgi"</a>
<li><strong>Reply:</strong> <a href="12098.php">Jeff Squyres: "Re: [OMPI users] Error while configuring openmpi with pgi"</a>
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
