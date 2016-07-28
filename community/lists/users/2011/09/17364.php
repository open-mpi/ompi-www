<?
$subject_val = "[OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 13:16:58 2011" -->
<!-- isoreceived="20110920171658" -->
<!-- sent="Tue, 20 Sep 2011 11:16:44 -0600" -->
<!-- isosent="20110920171644" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FB9DBCB_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 13:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17363.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Reply:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Reply:</strong> <a href="17430.php">Jeff Squyres: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble building 1.4.3 using PGI 10.9.  I searched the list archives briefly but I didn't stumble across anything that looked like the same problem, so I thought I'd ask if an expert might recognize the nature of the problem here.
<br>
<p>The configure command:
<br>
<p>./configure --prefix=/release/openmpi-pgi --without-tm --without-sge --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --with-mpi-f90-size=small --enable-static --disable-shared --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc 'CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend' 'CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend' F77=/appserv/pgi/linux86-64/10.9/bin/pgf95 'FFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical' FC=/appserv/pgi/linux86-64/10.9/bin/pgf95 'FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical' 'LDFLAGS= -Bstatic_pgi'
<br>
<p>The place where the build eventually dies:
<br>
<p>/bin/sh ../../../libtool --tag=CXX   --mode=link /appserv/pgi/linux86-64/10.9/bin/pgCC  -DNDEBUG   -O2 -Mcache_align -Minfo -Msignextend -Msignextend  -version-info 0:1:0 -export-dynamic  -Bstatic_pgi  -o libmpi_cxx.la -rpath /release/cfd/openmpi-pgi/lib mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
<br>
libtool: link: tpldir=Template.dir
<br>
libtool: link:  rm -rf Template.dir
<br>
libtool: link:  /appserv/pgi/linux86-64/10.9/bin/pgCC --prelink_objects --instantiation_dir Template.dir   mpicxx.o intercepts.o comm.o datatype.o win.o file.o
<br>
pgCC-Warning-prelink_objects switch is deprecated
<br>
pgCC-Warning-instantiation_dir switch is deprecated
<br>
/usr/lib64/crt1.o: In function `_start':
<br>
/usr/src/packages/BUILD/glibc-2.9/csu/../sysdeps/x86_64/elf/start.S:109: undefined reference to `main'
<br>
mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
<br>
(.text+0x49): undefined reference to `ompi_mpi_errors_are_fatal'
<br>
mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
<br>
(.text+0x62): undefined reference to `ompi_mpi_errors_return'
<br>
mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
<br>
(.text+0x7b): undefined reference to `ompi_mpi_errors_throw_exceptions'
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17363.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Reply:</strong> <a href="17365.php">Blosch, Edwin L: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Reply:</strong> <a href="17430.php">Jeff Squyres: "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
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
