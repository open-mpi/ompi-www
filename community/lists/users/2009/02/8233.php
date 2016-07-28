<?
$subject_val = "[OMPI users] libmpi_f90.so not being built";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 06:38:35 2009" -->
<!-- isoreceived="20090227113835" -->
<!-- sent="Fri, 27 Feb 2009 11:38:25 +0000" -->
<!-- isosent="20090227113825" -->
<!-- name="Tiago Silva" -->
<!-- email="tsilva_at_[hidden]" -->
<!-- subject="[OMPI users] libmpi_f90.so not being built" -->
<!-- id="49A7D0B1.1040903_at_coas.oregonstate.edu" -->
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
<strong>Subject:</strong> [OMPI users] libmpi_f90.so not being built<br>
<strong>From:</strong> Tiago Silva (<em>tsilva_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 06:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8234.php">Markus Blatt: "[OMPI users] Problem with cascading derived data types"</a>
<li><strong>Previous message:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8235.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Reply:</strong> <a href="8235.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Reply:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to build openmpi 1.3 on Cent_OS with gcc and the lahey f95 
<br>
compiler with the following configuration:
<br>
<p>./configure F77=/share/apps/lf6481/bin/lfc FC=/share/apps/lf6481/bin/lfc 
<br>
&nbsp;&nbsp;&nbsp;--prefix=/opt/openmpi-1.3_lfc
<br>
<p>When I &quot;make install all&quot; the process fails to build libmpi_f90.la 
<br>
because  libmpi_f90.so.0 isn't found (see output at the end of the 
<br>
post). I can't grep any other mention to libmpi_f90.so being built in 
<br>
config.log or on the output from the make and indeed it is not on the 
<br>
build directory with the other shared libraries:
<br>
<p>[root_at_server lfc]# find . -name &quot;libmpi*.so*&quot;
<br>
./ompi/.libs/libmpi.so
<br>
./ompi/.libs/libmpi.so.0
<br>
./ompi/.libs/libmpi.so.0.0.0
<br>
./ompi/.libs/libmpi.so.0.0.0T
<br>
./ompi/mpi/cxx/.libs/libmpi_cxx.so.0.0.0
<br>
./ompi/mpi/cxx/.libs/libmpi_cxx.so.0.0.0T
<br>
./ompi/mpi/cxx/.libs/libmpi_cxx.so.0
<br>
./ompi/mpi/cxx/.libs/libmpi_cxx.so
<br>
./ompi/mpi/f77/.libs/libmpi_f77.so.0
<br>
./ompi/mpi/f77/.libs/libmpi_f77.so.0.0.0
<br>
./ompi/mpi/f77/.libs/libmpi_f77.so
<br>
./ompi/mpi/f77/.libs/libmpi_f77.so.0.0.0T
<br>
<p><p>I believe that shared libraries for f90 bindings should be built by 
<br>
default but even trying to force the f90 bindings with shared libraries 
<br>
didn't do the trick:
<br>
<p>./configure F77=/share/apps/lf6481/bin/lfc FC=/share/apps/lf6481/bin/lfc 
<br>
&nbsp;&nbsp;F90=/share/apps/lf6481/bin/lfc --prefix=/opt/openmpi-1.3_lfc 
<br>
--enable-shared --with-mpi_f90_size=medium --enable-mpi-f90
<br>
<p>Any sugestions of what might be going wrong are most welcome.
<br>
<p>Thanks,
<br>
TS
<br>
<p>[root_at_server lfc]# tail install.out
<br>
make[4]: Entering directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
<br>
make[5]: Entering directory `/root/builds/openmpi-1.3/lfc'
<br>
make[5]: Leaving directory `/root/builds/openmpi-1.3/lfc'
<br>
/bin/sh ../../../libtool   --mode=link /share/apps/lf6481/bin/lfc 
<br>
-I../../../omp
<br>
i/include -I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90 
<br>
-export-dyn
<br>
amic   -o libmpi_f90.la -rpath /opt/openmpi-1.3_lfc/lib mpi.lo 
<br>
mpi_sizeof.lo mpi
<br>
_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo 
<br>
mpi_waitall_f
<br>
90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo 
<br>
../../../ompi/libm
<br>
pi.la -lnsl -lutil  -lm
<br>
libtool: link: /share/apps/lf6481/bin/lfc -shared  .libs/mpi.o 
<br>
.libs/mpi_sizeof.
<br>
o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o 
<br>
.libs/mpi_testsome
<br>
_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o 
<br>
.libs/mpi_wtick_f90.o .l
<br>
ibs/mpi_wtime_f90.o    -rpath /root/builds/openmpi-1.3/lfc/ompi/.libs 
<br>
-rpath /ro
<br>
ot/builds/openmpi-1.3/lfc/orte/.libs -rpath 
<br>
/root/builds/openmpi-1.3/lfc/opal/.l
<br>
ibs -rpath /opt/openmpi-1.3_lfc/lib 
<br>
-L/root/builds/openmpi-1.3/lfc/orte/.libs -L
<br>
/root/builds/openmpi-1.3/lfc/opal/.libs ../../../ompi/.libs/libmpi.so 
<br>
/root/buil
<br>
ds/openmpi-1.3/lfc/orte/.libs/libopen-rte.so 
<br>
/root/builds/openmpi-1.3/lfc/opal/.
<br>
libs/libopen-pal.so -ldl -lnsl -lutil -lm    -pthread -soname 
<br>
libmpi_f90.so.0 -o
<br>
&nbsp;&nbsp;.libs/libmpi_f90.so.0.0.0
<br>
ERROR --  Could not find specified object file libmpi_f90.so.0.
<br>
make[4]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
<br>
make[3]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
<br>
make[2]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
<br>
make[1]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi'
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8234.php">Markus Blatt: "[OMPI users] Problem with cascading derived data types"</a>
<li><strong>Previous message:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8235.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Reply:</strong> <a href="8235.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Reply:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
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
