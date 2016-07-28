<?
$subject_val = "[OMPI users] Problems compiling OPENMPI !!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 05:02:11 2008" -->
<!-- isoreceived="20080422090211" -->
<!-- sent="Tue, 22 Apr 2008 05:01:56 -0400" -->
<!-- isosent="20080422090156" -->
<!-- name="koppole_at_[hidden]" -->
<!-- email="koppole_at_[hidden]" -->
<!-- subject="[OMPI users] Problems compiling OPENMPI !!" -->
<!-- id="8CA726EA6AB2AB2-4C0-4E33_at_webmail-dd08.sysops.aol.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problems compiling OPENMPI !!<br>
<strong>From:</strong> <a href="mailto:koppole_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20compiling%20OPENMPI%20!!"><em>koppole_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-22 05:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5436.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5434.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5438.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5438.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Maybe reply:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there,
<br>
<p>I downloaded openmpi-1.2.5.tar and &quot;un-tar&quot;'ed it with tar -xvf 
<br>
openmpi-1.2.5.tar which created a directory openmpi-1.2.5.
<br>
<p><p><p>I then created a build directory and called
<br>
<p>../openmpi-1.2.5/configure --prefix=$home/openmpi FC=ifort64 
<br>
F77=ifort64 F95=ifort64 CC=icc64 CXX=icpc | &amp; tee config.out
<br>
<p><p><p>Everything went fine.
<br>
<p>I then said : make -j 8 | &amp; tee make.out and the compilation crashed 
<br>
with:
<br>
<p><p><p>/bin/sh ../../../libtool --tag=CXX   --mode=link icpc  -O3 -DNDEBUG 
<br>
-finline-functions -pthread  -export-dynamic   -o libmpi_cxx.la -rpath 
<br>
/usr/people/camm/kopposa1/openmpi/lib mpicxx.lo intercepts.lo comm.lo 
<br>
datatype.lo file.lo win.lo  -lnsl -lutil
<br>
<p>libtool: link: icpc -shared  .libs/mpicxx.o .libs/intercepts.o 
<br>
.libs/comm.o .libs/datatype.o .libs/file.o .libs/win.o   -lnsl -lutil 
<br>
-L/usr/prog/intel/cce/101015/lib 
<br>
-L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/ 
<br>
-L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64 -limf -lsvml 
<br>
-lipgo /usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a 
<br>
-L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src 
<br>
-L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs 
<br>
-L/scratch/gcc/./gcc -L/lib/../lib64 -L/usr/lib/../lib64 -lm -lgcc 
<br>
-lintlc -lpthread -lgcc_s -lirc_s -ldl -lc  -pthread   -pthread 
<br>
-Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
<p>ld: 
<br>
/usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a(ios_init.o): 
<br>
relocation R_X86_64_32 against `pthread_cancel' can not be used when 
<br>
making a shared object; recompile with -fPIC
<br>
<p>/usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a: could not 
<br>
read symbols: Bad value
<br>
<p>make[3]: *** [libmpi_cxx.la] Error 1
<br>
<p>make[3]: Leaving directory `/scratch/openmpi/ompi/mpi/cxx'
<br>
<p>make[2]: *** [all-recursive] Error 1
<br>
<p>make[2]: Leaving directory `/scratch/openmpi/ompi/mpi'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory `/scratch/openmpi/ompi'
<br>
<p>make: *** [all-recursive] Error 1
<br>
<p><p><p>FYI: I am attaching the zipped make.out and config.out files.
<br>
<p><p><p>Thanks a lot for your help,
<br>
<p>Cheers,
<br>
<p>Sampath.
<br>
<p><p><p>Sampath Koppole,
<br>
<p>The Computational Molecular Biophysics Group,                           
<br>
<p><p>Interdisciplinary Center for Scientific Computing (IWR),
<br>
<p>368, Im Neuenheimer Feld,
<br>
<p>Heidelberg. D-69120.
<br>
<p>Germany.
<br>
<p>Web Home : <a href="http://www.sampath.koppole.com">http://www.sampath.koppole.com</a>
<br>
<p><p><p><p>

<br><hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5435/config.out.tar.gz">config.out.tar.gz</a>
</ul>
<!-- attachment="config.out.tar.gz" -->
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5435/make.out.tar.gz">make.out.tar.gz</a>
</ul>
<!-- attachment="make.out.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5436.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5434.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5438.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5438.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Maybe reply:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
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
