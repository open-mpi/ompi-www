<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 13:35:36 2007" -->
<!-- isoreceived="20070807173536" -->
<!-- sent="Tue, 07 Aug 2007 19:35:19 +0200" -->
<!-- isosent="20070807173519" -->
<!-- name="Michael Komm" -->
<!-- email="michael.komm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and PathScale problem" -->
<!-- id="200708071935.9312_at_centrum.cz" -->
<!-- charset="iso-8859-2" -->
<!-- inreplyto="46B89B66.1050809_at_math.uni-dortmund.de" -->
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
<strong>From:</strong> Michael Komm (<em>michael.komm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-07 13:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3832.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3830.php">Christian Becker: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>In reply to:</strong> <a href="3830.php">Christian Becker: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Christian it works just fine now!
<br>
I altered LIBRARY_PATH and LD_PATH but not this one :)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Michael
<br>
<p><p>______________________________________________________________
<br>
<span class="quotelev1">&gt; Od: christian.becker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Komu: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Datum: 07.08.2007 19:32
</span><br>
<span class="quotelev1">&gt; P&#248;edm&#236;t: Re: [OMPI users] OpenMPI and PathScale problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;you have to add the path to the openmpi libraries to the LD_LIBRARY_PATH
</span><br>
variable
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export LD_LIBRARY_PATH=/home/fort/usr//lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;should fix the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Bye,
</span><br>
<span class="quotelev1">&gt;Christian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Michael Komm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to make work the pathscale fortran compiler with OpenMPI on
</span><br>
a 64bit Linux machine and can't get passed a simple demo program. Here is
<br>
detailed info:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pathf90 -v
</span><br>
<span class="quotelev2">&gt;&gt; PathScale EKOPath(TM) Compiler Suite: Version 2.5
</span><br>
<span class="quotelev2">&gt;&gt; Built on: 2006-08-22 21:02:51 -0700
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; GNU gcc version 3.3.1 (PathScale 2.5 driver)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 --show
</span><br>
<span class="quotelev2">&gt;&gt; pathf90 -I/home/fort/usr//include -pthread -I/home/fort/usr//lib
</span><br>
-L/home/fort/usr//lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
<br>
-Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The OpenMPI version 1.2.3 resides in the /home/fort/usr/ directory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I compile a simple program using 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -o test test.f90
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get a binary all right but it has broken linked libraries
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ldd test
</span><br>
<span class="quotelev2">&gt;&gt;         libmpi_f90.so.0 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;         libmpi_f77.so.0 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;         libmpi.so.0 =&gt; /usr/lib64/lam/libmpi.so.0 (0x0000003db3600000)
</span><br>
<span class="quotelev2">&gt;&gt;         libopen-rte.so.0 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;         libopen-pal.so.0 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003db3200000)
</span><br>
<span class="quotelev2">&gt;&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003db9900000)
</span><br>
<span class="quotelev2">&gt;&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003db8400000)
</span><br>
<span class="quotelev2">&gt;&gt;         libmv.so.1 =&gt; /opt/pathscale/lib/2.5/libmv.so.1
</span><br>
(0x0000002a9557f000)
<br>
<span class="quotelev2">&gt;&gt;         libmpath.so.1 =&gt; /opt/pathscale/lib/2.5/libmpath.so.1
</span><br>
(0x0000002a956a8000)
<br>
<span class="quotelev2">&gt;&gt;         libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003db3000000)
</span><br>
<span class="quotelev2">&gt;&gt;         libpathfortran.so.1 =&gt;
</span><br>
/opt/pathscale/lib/2.5/libpathfortran.so.1 (0x0000002a957c9000)
<br>
<span class="quotelev2">&gt;&gt;         libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0
</span><br>
(0x0000003db3800000)
<br>
<span class="quotelev2">&gt;&gt;         libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003db2d00000)
</span><br>
<span class="quotelev2">&gt;&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003db2900000)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The demo program fails to start due to missing shared libraries. In
</span><br>
addition the pathf90 uses some lame mpi library instead of openMPI! Any
<br>
ideas on where the problem could be?
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                                      Michael
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; Mgr. Michael Komm
</span><br>
<span class="quotelev2">&gt;&gt; Tokamak Department
</span><br>
<span class="quotelev2">&gt;&gt; Institute of Plasma Physics of Academy of Sciences of Czech Republic
</span><br>
<span class="quotelev2">&gt;&gt; E-mail:komm_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Za Slovankou 3 
</span><br>
<span class="quotelev2">&gt;&gt; 182 00 
</span><br>
<span class="quotelev2">&gt;&gt; PRAGUE 8 
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3832.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3830.php">Christian Becker: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>In reply to:</strong> <a href="3830.php">Christian Becker: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<!-- nextthread="start" -->
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
