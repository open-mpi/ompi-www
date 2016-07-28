<?
$subject_val = "Re: [OMPI users] libmpi_f90.so not being built";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 06:49:03 2009" -->
<!-- isoreceived="20090227114903" -->
<!-- sent="Fri, 27 Feb 2009 06:48:53 -0500" -->
<!-- isosent="20090227114853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi_f90.so not being built" -->
<!-- id="0B8FBDEC-F50E-4C94-8A19-7453EEA65786_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A7D0B1.1040903_at_coas.oregonstate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi_f90.so not being built<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 06:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8234.php">Markus Blatt: "[OMPI users] Problem with cascading derived data types"</a>
<li><strong>In reply to:</strong> <a href="8233.php">Tiago Silva: "[OMPI users] libmpi_f90.so not being built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Feb 27, 2009, at 6:38 AM, Tiago Silva wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build openmpi 1.3 on Cent_OS with gcc and the lahey  
</span><br>
<span class="quotelev1">&gt; f95 compiler with the following configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure F77=/share/apps/lf6481/bin/lfc FC=/share/apps/lf6481/bin/ 
</span><br>
<span class="quotelev1">&gt; lfc   --prefix=/opt/openmpi-1.3_lfc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I &quot;make install all&quot; the process fails to build libmpi_f90.la  
</span><br>
<span class="quotelev1">&gt; because  libmpi_f90.so.0 isn't found (see output at the end of the  
</span><br>
<span class="quotelev1">&gt; post). I can't grep any other mention to libmpi_f90.so being built  
</span><br>
<span class="quotelev1">&gt; in config.log or on the output from the make and indeed it is not on  
</span><br>
<span class="quotelev1">&gt; the build directory with the other shared libraries:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_server lfc]# find . -name &quot;libmpi*.so*&quot;
</span><br>
<span class="quotelev1">&gt; ./ompi/.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt; ./ompi/.libs/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; ./ompi/.libs/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; ./ompi/.libs/libmpi.so.0.0.0T
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/cxx/.libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/cxx/.libs/libmpi_cxx.so.0.0.0T
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/cxx/.libs/libmpi_cxx.so.0
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/cxx/.libs/libmpi_cxx.so
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/f77/.libs/libmpi_f77.so.0
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/f77/.libs/libmpi_f77.so.0.0.0
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/f77/.libs/libmpi_f77.so
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/f77/.libs/libmpi_f77.so.0.0.0T
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that shared libraries for f90 bindings should be built by  
</span><br>
<span class="quotelev1">&gt; default but even trying to force the f90 bindings with shared  
</span><br>
<span class="quotelev1">&gt; libraries didn't do the trick:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure F77=/share/apps/lf6481/bin/lfc FC=/share/apps/lf6481/bin/ 
</span><br>
<span class="quotelev1">&gt; lfc  F90=/share/apps/lf6481/bin/lfc --prefix=/opt/openmpi-1.3_lfc -- 
</span><br>
<span class="quotelev1">&gt; enable-shared --with-mpi_f90_size=medium --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any sugestions of what might be going wrong are most welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; TS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_server lfc]# tail install.out
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; f90'
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/root/builds/openmpi-1.3/lfc'
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/root/builds/openmpi-1.3/lfc'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=link /share/apps/lf6481/bin/lfc - 
</span><br>
<span class="quotelev1">&gt; I../../../omp
</span><br>
<span class="quotelev1">&gt; i/include -I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90 - 
</span><br>
<span class="quotelev1">&gt; export-dyn
</span><br>
<span class="quotelev1">&gt; amic   -o libmpi_f90.la -rpath /opt/openmpi-1.3_lfc/lib mpi.lo  
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.lo mpi
</span><br>
<span class="quotelev1">&gt; _comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo  
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f
</span><br>
<span class="quotelev1">&gt; 90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo ../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/libm
</span><br>
<span class="quotelev1">&gt; pi.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: /share/apps/lf6481/bin/lfc -shared  .libs/mpi.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.
</span><br>
<span class="quotelev1">&gt; o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_testsome
</span><br>
<span class="quotelev1">&gt; _f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_wtick_f90.o .l
</span><br>
<span class="quotelev1">&gt; ibs/mpi_wtime_f90.o    -rpath /root/builds/openmpi-1.3/lfc/ 
</span><br>
<span class="quotelev1">&gt; ompi/.libs -rpath /ro
</span><br>
<span class="quotelev1">&gt; ot/builds/openmpi-1.3/lfc/orte/.libs -rpath /root/builds/openmpi-1.3/ 
</span><br>
<span class="quotelev1">&gt; lfc/opal/.l
</span><br>
<span class="quotelev1">&gt; ibs -rpath /opt/openmpi-1.3_lfc/lib -L/root/builds/openmpi-1.3/lfc/ 
</span><br>
<span class="quotelev1">&gt; orte/.libs -L
</span><br>
<span class="quotelev1">&gt; /root/builds/openmpi-1.3/lfc/opal/.libs ../../../ompi/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so /root/buil
</span><br>
<span class="quotelev1">&gt; ds/openmpi-1.3/lfc/orte/.libs/libopen-rte.so /root/builds/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/lfc/opal/.
</span><br>
<span class="quotelev1">&gt; libs/libopen-pal.so -ldl -lnsl -lutil -lm    -pthread -soname  
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.0 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; ERROR --  Could not find specified object file libmpi_f90.so.0.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/root/builds/openmpi-1.3/lfc/ompi'
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
<li><strong>Next message:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8234.php">Markus Blatt: "[OMPI users] Problem with cascading derived data types"</a>
<li><strong>In reply to:</strong> <a href="8233.php">Tiago Silva: "[OMPI users] libmpi_f90.so not being built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
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
