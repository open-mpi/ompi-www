<?
$subject_val = "[OMPI users] One more pgi+libtool issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 12:01:58 2011" -->
<!-- isoreceived="20110722160158" -->
<!-- sent="Fri, 22 Jul 2011 18:01:54 +0200" -->
<!-- isosent="20110722160154" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] One more pgi+libtool issue" -->
<!-- id="4E299EF2.2050706_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] One more pgi+libtool issue<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 12:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16971.php">Paul Kapinos: "[OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<li><strong>Previous message:</strong> <a href="16969.php">Paul Kapinos: "[OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>One more libtool/openMPI issue.
<br>
<p>Installing OpenMPI in version 1.4.3 using the 11.7 PGI compilers in 32 
<br>
bit, I get a compilation error:
<br>
<p>------------------------------------------------------------------------------
<br>
../../../ompi/.libs/libmpi.so: could not read symbols: File in wrong format
<br>
gmake[2]: *** [libmpi_cxx.la] Error 2
<br>
gmake[2]: Leaving directory 
<br>
`/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/ompi/mpi/cxx'
<br>
------------------------------------------------------------------------------
<br>
<p>invoking just the same link line as in my previous mail (I didn't 
<br>
realize the real error by first time, sorry):
<br>
<p>------------------------------------------------------------------------------
<br>
libtool: link:  pgCC --prelink_objects --instantiation_dir Template.dir 
<br>
&nbsp;&nbsp;&nbsp;.libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
<br>
.libs/win.o .libs/file.o   -Wl,--rpath 
<br>
-Wl,/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/ompi/.libs 
<br>
-Wl,--rpath 
<br>
-Wl,/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/orte/.libs 
<br>
-Wl,--rpath 
<br>
-Wl,/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/opal/.libs 
<br>
-Wl,--rpath -Wl,/opt/MPI/openmpi-1.4.3/linux/pgi/lib/lib32 
<br>
-L/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/orte/.libs 
<br>
-L/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/opal/.libs 
<br>
-L/opt/lsf/8.0/linux2.6-glibc2.3-x86/lib ../../../ompi/.libs/libmpi.so 
<br>
/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/orte/.libs/libopen-rte.so 
<br>
/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil
<br>
------------------------------------------------------------------------------
<br>
<p>So, ../../../ompi/.libs/libmpi.so is 32bit file, the pgCC defaults to 
<br>
64bit, and there is no -m32 swith in the command line.
<br>
<p>BUT, in the configure line (below) I get the -m32 flag!! So, where is 
<br>
the -m32 thing lost? Did I do something in a wrong way?
<br>
<p>Best wishes and a nice weekend,
<br>
<p>Paul Kapinos
<br>
<p>P.S. again, the some more logs downloadable from here: 
<br>
<a href="https://gigamove.rz.rwth-aachen.de/d/id/xoQ2DnUDf4Trjo">https://gigamove.rz.rwth-aachen.de/d/id/xoQ2DnUDf4Trjo</a>
<br>
<p><p><p><p>------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;$ ./configure --with-openib --with-lsf --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-heterogeneous 
<br>
--enable-cxx-exceptions --enable-orterun-prefix-by-default 
<br>
CFLAGS=-fastsse -m32  CXXFLAGS=-fastsse -m32  FFLAGS=-fastsse -m32 
<br>
FCFLAGS=-fastsse -m32  LDFLAGS=-fastsse -m32 
<br>
-L/opt/lsf/8.0/linux2.6-glibc2.3-x86/lib 
<br>
--prefix=/opt/MPI/openmpi-1.4.3/linux/pgi 
<br>
--mandir=/opt/MPI/openmpi-1.4.3/linux/pgi/man 
<br>
--bindir=/opt/MPI/openmpi-1.4.3/linux/pgi/bin/32 
<br>
--libdir=/opt/MPI/openmpi-1.4.3/linux/pgi/lib/lib32 
<br>
--includedir=/opt/MPI/openmpi-1.4.3/linux/pgi/include/32 CC=pgcc 
<br>
CXX=pgCC F77=pgf77 FC=pgf90 --enable-ltdl-convenience --no-create 
<br>
--no-recursion
<br>
------------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16970/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16971.php">Paul Kapinos: "[OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<li><strong>Previous message:</strong> <a href="16969.php">Paul Kapinos: "[OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)"</a>
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
