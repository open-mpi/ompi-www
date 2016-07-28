<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 12:05:40 2007" -->
<!-- isoreceived="20070807160540" -->
<!-- sent="Tue, 07 Aug 2007 18:05:24 +0200" -->
<!-- isosent="20070807160524" -->
<!-- name="Michael Komm" -->
<!-- email="michael.komm_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and PathScale problem" -->
<!-- id="200708071805.14793_at_centrum.cz" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-08-07 12:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Previous message:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Reply:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Reply:</strong> <a href="3830.php">Christian Becker: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to make work the pathscale fortran compiler with OpenMPI on a 64bit Linux machine and can't get passed a simple demo program. Here is detailed info:
<br>
<p>pathf90 -v
<br>
PathScale EKOPath(TM) Compiler Suite: Version 2.5
<br>
Built on: 2006-08-22 21:02:51 -0700
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 2.5 driver)
<br>
<p>mpif90 --show
<br>
pathf90 -I/home/fort/usr//include -pthread -I/home/fort/usr//lib -L/home/fort/usr//lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>The OpenMPI version 1.2.3 resides in the /home/fort/usr/ directory.
<br>
<p>When I compile a simple program using 
<br>
<p>mpif90 -o test test.f90
<br>
<p>I get a binary all right but it has broken linked libraries
<br>
<p>ldd test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f90.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib64/lam/libmpi.so.0 (0x0000003db3600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003db3200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003db9900000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003db8400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmv.so.1 =&gt; /opt/pathscale/lib/2.5/libmv.so.1 (0x0000002a9557f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpath.so.1 =&gt; /opt/pathscale/lib/2.5/libmpath.so.1 (0x0000002a956a8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003db3000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpathfortran.so.1 =&gt; /opt/pathscale/lib/2.5/libpathfortran.so.1 (0x0000002a957c9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000003db3800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003db2d00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003db2900000)
<br>
<p>The demo program fails to start due to missing shared libraries. In addition the pathf90 uses some lame mpi library instead of openMPI! Any ideas on where the problem could be?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Michael
<br>
<p>********************************************************************
<br>
Mgr. Michael Komm
<br>
Tokamak Department
<br>
Institute of Plasma Physics of Academy of Sciences of Czech Republic
<br>
E-mail:komm_at_[hidden]
<br>
Za Slovankou 3 
<br>
182 00 
<br>
PRAGUE 8 
<br>
********************************************************************
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Previous message:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Reply:</strong> <a href="3829.php">Tim Prins: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
<li><strong>Reply:</strong> <a href="3830.php">Christian Becker: "Re: [OMPI users] OpenMPI and PathScale problem"</a>
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
