<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 11:33:26 2009" -->
<!-- isoreceived="20090414153326" -->
<!-- sent="Tue, 14 Apr 2009 11:33:17 -0400" -->
<!-- isosent="20090414153317" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="49E4ACBD.4050006_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49E4A954.8000209_at_cora.nwra.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 11:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8908.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8905.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8904.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Orion
<br>
<p>That's exactly what happened to me.
<br>
Configured OK, failed on make because of &quot;-pthread&quot;.
<br>
See my message from a minute ago, and this thread,
<br>
for a workaround suggested by Jeff Squyres,
<br>
of stripping off &quot;-phtread&quot; from the pgf90 flags:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">http://www.open-mpi.org/community/lists/users/2009/04/8724.php</a>
<br>
<p>There is a little script in the above message to do the job.
<br>
<p>I hope it helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure LIBS=-lgcc_eh ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; did the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Spoke too soon.  This leads to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90  -fastsse -fPIC 
</span><br>
<span class="quotelev1">&gt;  -export-dynamic -Wl,-z,noexecstack  -o libmpi_f90.la -rpath 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.3.1-pgf-64/lib mpi.lo mpi_sizeof.lo 
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo 
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo 
</span><br>
<span class="quotelev1">&gt;   ../../../ompi/libmpi.la -lnsl -lutil -lgcc_eh -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/ompi/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/opal/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/opt/openmpi/1.3.1-pgf-64/lib 
</span><br>
<span class="quotelev1">&gt; -L/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -L/scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/opal/.libs 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev1">&gt; /scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; /scratch/orion/redhat/openmpi-pgf-1.3.1/openmpi-1.3.1/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil -lgcc_eh -lm  -Wl,-z -Wl,noexecstack   -pthread 
</span><br>
<span class="quotelev1">&gt; -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like libtool is adding -pthread because it sees that you use 
</span><br>
<span class="quotelev1">&gt; -pthread to link C programs and assumes that all linkers use it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8908.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8906.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8905.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8904.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
