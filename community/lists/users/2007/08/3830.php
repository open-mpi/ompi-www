<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 12:18:52 2007" -->
<!-- isoreceived="20070807161852" -->
<!-- sent="Tue, 07 Aug 2007 18:18:46 +0200" -->
<!-- isosent="20070807161846" -->
<!-- name="Christian Becker" -->
<!-- email="christian.becker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and PathScale problem" -->
<!-- id="46B89B66.1050809_at_math.uni-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200708071805.14793_at_centrum.cz" -->
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
<strong>From:</strong> Christian Becker (<em>christian.becker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-07 12:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3831.php">Michael Komm: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Previous message:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>In reply to:</strong> <a href="3828.php">Michael Komm: "[OMPI users] OpenMPI and PathScale problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3831.php">Michael Komm: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Reply:</strong> <a href="3831.php">Michael Komm: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael,
<br>
<p>you have to add the path to the openmpi libraries to the LD_LIBRARY_PATH variable
<br>
<p>export LD_LIBRARY_PATH=/home/fort/usr//lib
<br>
<p>should fix the problem.
<br>
<p>Bye,
<br>
Christian
<br>
<p>Michael Komm wrote:
<br>
<span class="quotelev1">&gt; I'm trying to make work the pathscale fortran compiler with OpenMPI on a 64bit Linux machine and can't get passed a simple demo program. Here is detailed info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pathf90 -v
</span><br>
<span class="quotelev1">&gt; PathScale EKOPath(TM) Compiler Suite: Version 2.5
</span><br>
<span class="quotelev1">&gt; Built on: 2006-08-22 21:02:51 -0700
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; GNU gcc version 3.3.1 (PathScale 2.5 driver)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 --show
</span><br>
<span class="quotelev1">&gt; pathf90 -I/home/fort/usr//include -pthread -I/home/fort/usr//lib -L/home/fort/usr//lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenMPI version 1.2.3 resides in the /home/fort/usr/ directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I compile a simple program using 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 -o test test.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a binary all right but it has broken linked libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd test
</span><br>
<span class="quotelev1">&gt;         libmpi_f90.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libmpi_f77.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /usr/lib64/lam/libmpi.so.0 (0x0000003db3600000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003db3200000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003db9900000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003db8400000)
</span><br>
<span class="quotelev1">&gt;         libmv.so.1 =&gt; /opt/pathscale/lib/2.5/libmv.so.1 (0x0000002a9557f000)
</span><br>
<span class="quotelev1">&gt;         libmpath.so.1 =&gt; /opt/pathscale/lib/2.5/libmpath.so.1 (0x0000002a956a8000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003db3000000)
</span><br>
<span class="quotelev1">&gt;         libpathfortran.so.1 =&gt; /opt/pathscale/lib/2.5/libpathfortran.so.1 (0x0000002a957c9000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000003db3800000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003db2d00000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003db2900000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The demo program fails to start due to missing shared libraries. In addition the pathf90 uses some lame mpi library instead of openMPI! Any ideas on where the problem could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                      Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; Mgr. Michael Komm
</span><br>
<span class="quotelev1">&gt; Tokamak Department
</span><br>
<span class="quotelev1">&gt; Institute of Plasma Physics of Academy of Sciences of Czech Republic
</span><br>
<span class="quotelev1">&gt; E-mail:komm_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Za Slovankou 3 
</span><br>
<span class="quotelev1">&gt; 182 00 
</span><br>
<span class="quotelev1">&gt; PRAGUE 8 
</span><br>
<span class="quotelev1">&gt; ********************************************************************
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3831.php">Michael Komm: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Previous message:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>In reply to:</strong> <a href="3828.php">Michael Komm: "[OMPI users] OpenMPI and PathScale problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3831.php">Michael Komm: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Reply:</strong> <a href="3831.php">Michael Komm: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
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
