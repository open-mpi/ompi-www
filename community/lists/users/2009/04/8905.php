<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 11:18:51 2009" -->
<!-- isoreceived="20090414151851" -->
<!-- sent="Tue, 14 Apr 2009 09:18:44 -0600" -->
<!-- isosent="20090414151844" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="49E4A954.8000209_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E4A5DF.2030006_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 11:18:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8904.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8907.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; ./configure LIBS=-lgcc_eh ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did the trick.
</span><br>
<p>Spoke too soon.  This leads to:
<br>
<p>/bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include 
<br>
-I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90  -fastsse -fPIC 
<br>
&nbsp;&nbsp;-export-dynamic -Wl,-z,noexecstack  -o libmpi_f90.la -rpath 
<br>
/opt/openmpi/1.3.1-pgf-64/lib mpi.lo mpi_sizeof.lo 
<br>
mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo 
<br>
mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo 
<br>
&nbsp;&nbsp;&nbsp;../../../ompi/libmpi.la -lnsl -lutil -lgcc_eh -lm
<br>
libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o 
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o 
<br>
-Wl,-rpath 
<br>
-Wl,/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/ompi/.libs 
<br>
-Wl,-rpath 
<br>
-Wl,/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/orte/.libs 
<br>
-Wl,-rpath 
<br>
-Wl,/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/opal/.libs 
<br>
-Wl,-rpath -Wl,/opt/openmpi/1.3.1-pgf-64/lib 
<br>
-L/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/orte/.libs 
<br>
-L/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/opal/.libs 
<br>
../../../ompi/.libs/libmpi.so 
<br>
/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/orte/.libs/libopen-rte.so 
<br>
/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil -lgcc_eh -lm  -Wl,-z -Wl,noexecstack   -pthread 
<br>
-Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
<br>
pgf90-Error-Unknown switch: -pthread
<br>
<p>Looks like libtool is adding -pthread because it sees that you use 
<br>
-pthread to link C programs and assumes that all linkers use it.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8904.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8907.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
