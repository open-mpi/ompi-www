<?
$subject_val = "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 14 15:51:00 2010" -->
<!-- isoreceived="20100914195100" -->
<!-- sent="Tue, 14 Sep 2010 15:50:51 -0400" -->
<!-- isosent="20100914195051" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc" -->
<!-- id="4C8FD21B.1040302_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C8FCA67.1070901_at_apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-14 15:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14232.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>In reply to:</strong> <a href="14229.php">Axel Schweiger: "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14233.php">Prentice Bisbal: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Axel
<br>
<p>This is an old problem, apparently with libtool.
<br>
A workaround is to configure OpenMPI with
<br>
F77 and FC='pgf90 -noswitcherror'.
<br>
Worth trying.
<br>
<p>I hope this helps,
<br>
Gus Correa
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
<p><p>Axel Schweiger wrote:
<br>
<span class="quotelev1">&gt;  Trying to build a hybrid OpenMPI with PGI fortran and gcc to support 
</span><br>
<span class="quotelev1">&gt; WRF model
</span><br>
<span class="quotelev1">&gt; The problem appears to be due to a -pthread switch passed to pgfortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: pgfortran -shared  -fpic -Mnomain  .libs/mpi.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/axel/AxboxInstall/openmpi-1.4.2/ompi/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/axel/AxboxInstall/openmpi-1.4.2/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/axel/AxboxInstall/openmpi-1.4.2/opal/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/opt/openmpi-pgi-gcc-1.42/lib 
</span><br>
<span class="quotelev1">&gt; -L/home/axel/AxboxInstall/openmpi-1.4.2/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -L/home/axel/AxboxInstall/openmpi-1.4.2/opal/.libs 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so 
</span><br>
<span class="quotelev1">&gt; /home/axel/AxboxInstall/openmpi-1.4.2/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; /home/axel/AxboxInstall/openmpi-1.4.2/opal/.libs/libopen-pal.so -ldl 
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o 
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; pgfortran-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There has been discussion on this issue and the below solution 
</span><br>
<span class="quotelev1">&gt; suggested. This doesn't appear to work for the 10.8
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/04/8911.php">http://www.open-mpi.org/community/lists/users/2009/04/8911.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was a previous thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">http://www.open-mpi.org/community/lists/users/2009/03/8687.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; suggesting other solutions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wondering if there is a better solution right now? Building 1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Axel
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
<li><strong>Next message:</strong> <a href="14232.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>In reply to:</strong> <a href="14229.php">Axel Schweiger: "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14233.php">Prentice Bisbal: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
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
