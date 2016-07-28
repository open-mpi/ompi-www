<?
$subject_val = "Re: [OMPI users] Problems compiling OPENMPI !!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 08:18:51 2008" -->
<!-- isoreceived="20080422121851" -->
<!-- sent="Tue, 22 Apr 2008 08:18:25 -0400" -->
<!-- isosent="20080422121825" -->
<!-- name="koppole_at_[hidden]" -->
<!-- email="koppole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OPENMPI !!" -->
<!-- id="8CA728A19270F72-4C0-5765_at_webmail-dd08.sysops.aol.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problems compiling OPENMPI !!" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OPENMPI !!<br>
<strong>From:</strong> <a href="mailto:koppole_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20compiling%20OPENMPI%20!!"><em>koppole_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-22 08:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5441.php">Hans Wurst: "Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5439.php">Simon Hammond: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Maybe in reply to:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5442.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5442.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5448.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Yes. my C++ compiler works quite well. I have compiled and run a number 
<br>
of programs with it. Further more, I could comfortably install mpich2 
<br>
with this compiler with no problems.
<br>
<p><p><p>What is surprising is : during configure ... I get:
<br>
<p>......
<br>
<p>=========================================================================
<br>
===
<br>
<p>== Modular Component Architecture (MCA) setup
<br>
<p>=========================================================================
<br>
===
<br>
<p>checking for subdir args...  
<br>
'--prefix=/usr/people/camm/kopposa1/openmpi' 'FC=ifort64' 'F77=ifort64' 
<br>
'F95=ifort64' 'CC=icc64'
<br>
<p>&nbsp;'CXX=icpc'
<br>
<p>checking for gcc... gcc
<br>
<p>checking whether we are using the GNU Objective C compiler... yes
<br>
<p>checking whether gcc accepts -g... yes
<br>
<p>.......
<br>
<p><p><p>Intel C compiler is not a gnu objective C compiler. I don't know why 
<br>
openmpi thinks that this is a GNU Compiler.
<br>
<p><p><p>Thanks for your time,
<br>
<p>Cheers,
<br>
<p>Sampath.
<br>
<p><p><p><p><p>From: Jeff Squyres (jsquyres_at_[hidden])
<br>
<p>Date: 2008-04-22 08:05:16
<br>
<p><p><p>Is your C++ compiler installer properly? Can you build and run other C
<br>
<p>++ programs that use the STL?
<br>
<p><p><p><p><p>-----Original Message-----
<br>
<p>From: koppole_at_[hidden]
<br>
<p>To: users_at_[hidden]
<br>
<p>Sent: Tue, 22 Apr 2008 11:01 am
<br>
<p>Subject: Problems compiling OPENMPI !!
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Hello there,
<br>
<p><p><p><p><p>I downloaded openmpi-1.2.5.tar and &quot;un-tar&quot;'ed it with tar -xvf
<br>
<p>openmpi-1.2.5.tar which created a directory openmpi-1.2.5.
<br>
<p><p><p><p><p><p><p><p><p>I then created a build directory and called
<br>
<p><p><p><p><p>../openmpi-1.2.5/configure --prefix=$home/openmpi FC=ifort64
<br>
<p>F77=ifort64 F95=ifort64 CC=icc64 CXX=icpc | &amp; tee config.out
<br>
<p><p><p><p><p><p><p><p><p>Everything went fine.
<br>
<p><p><p><p><p>I then said : make -j 8 | &amp; tee make.out and the compilation crashed
<br>
<p>with:
<br>
<p><p><p><p><p><p><p><p><p>/bin/sh ../../../libtool --tag=CXX   --mode=link icpc  -O3 -DNDEBUG
<br>
<p>-finline-functions -pthread  -export-dynamic   -o libmpi_cxx.la -rpath
<br>
<p>/usr/people/camm/kopposa1/openmpi/lib mpicxx.lo intercepts.lo comm.lo
<br>
<p>datatype.lo file.lo win.lo  -lnsl -lutil
<br>
<p><p><p><p><p>libtool: link: icpc -shared  .libs/mpicxx.o .libs/intercepts.o
<br>
<p>.libs/comm.o .libs/datatype.o .libs/file.o .libs/win.o   -lnsl -lutil
<br>
<p>-L/usr/prog/intel/cce/101015/lib
<br>
<p>-L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/
<br>
<p>-L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64 -limf -lsvml
<br>
<p>-lipgo /usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a
<br>
<p>-L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src
<br>
<p>-L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs
<br>
<p>-L/scratch/gcc/./gcc -L/lib/../lib64 -L/usr/lib/../lib64 -lm -lgcc
<br>
<p>-lintlc -lpthread -lgcc_s -lirc_s -ldl -lc  -pthread   -pthread
<br>
<p>-Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
<p><p><p><p><p>ld:
<br>
<p>/usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a(ios_init.o):
<br>
<p>relocation R_X86_64_32 against `pthread_cancel' can not be used when
<br>
<p>making a shared object; recompile with -fPIC
<br>
<p><p><p><p><p>/usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a: could not
<br>
<p>read symbols: Bad value
<br>
<p><p><p><p><p>make[3]: *** [libmpi_cxx.la] Error 1
<br>
<p><p><p><p><p>make[3]: Leaving directory `/scratch/openmpi/ompi/mpi/cxx'
<br>
<p><p><p><p><p>make[2]: *** [all-recursive] Error 1
<br>
<p><p><p><p><p>make[2]: Leaving directory `/scratch/openmpi/ompi/mpi'
<br>
<p><p><p><p><p>make[1]: *** [all-recursive] Error 1
<br>
<p><p><p><p><p>make[1]: Leaving directory `/scratch/openmpi/ompi'
<br>
<p><p><p><p><p>make: *** [all-recursive] Error 1
<br>
<p><p><p><p><p><p><p><p><p>FYI: I am attaching the zipped make.out and config.out files.
<br>
<p><p><p><p><p><p><p><p><p>Thanks a lot for your help,
<br>
<p><p><p><p><p>Cheers,
<br>
<p><p><p><p><p>Sampath.
<br>
<p><p><p><p><p><p><p><p><p>Sampath Koppole,
<br>
<p><p><p><p><p>The Computational Molecular Biophysics Group,
<br>
<p><p><p><p><p>Interdisciplinary Center for Scientific Computing (IWR),
<br>
<p><p><p><p><p>368, Im Neuenheimer Feld,
<br>
<p><p><p><p><p>Heidelberg. D-69120.
<br>
<p><p><p><p><p>Germany.
<br>
<p><p><p><p><p>Web Home : <a href="http://www.sampath.koppole.com">http://www.sampath.koppole.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5441.php">Hans Wurst: "Re: [OMPI users] Problems with program-execution with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5439.php">Simon Hammond: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Maybe in reply to:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5442.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5442.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5448.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Reply:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
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
