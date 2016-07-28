<?
$subject_val = "[OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 14:01:37 2010" -->
<!-- isoreceived="20100423180137" -->
<!-- sent="Fri, 23 Apr 2010 20:01:28 +0200" -->
<!-- isosent="20100423180128" -->
<!-- name="Francesco Iannone" -->
<!-- email="francesco.iannone_at_[hidden]" -->
<!-- subject="[OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue" -->
<!-- id="C7F7AD19.ED87%francesco.iannone_at_frascati.enea.it" -->
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
<strong>Subject:</strong> [OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue<br>
<strong>From:</strong> Francesco Iannone (<em>francesco.iannone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 14:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12760.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12758.php">Jeff Squyres: "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<li><strong>Reply:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all
<br>
<p>I rebuilt openmpi 1.4.1 with PGI 10.2.1 enabling the libpgnuma.a of PGI.
<br>
<p>Linux kernel 2.6.18-164.11.1.el5 #1 SMP Sat Jan 23 21:22:33 CET 2010 x86_64
<br>
x86_64 x86_64 GNU/Linux
<br>
<p>I have the follow problem to rebuild the package considering libnuma.a as
<br>
symbolic link to PGI NUMA library libpgnuma.a:
<br>
<p>/bin/sh ../../../libtool --tag=CC   --mode=link pgcc  -O -DNDEBUG
<br>
-export-dynamic   -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la -lnsl -lutil  -lpthread
<br>
libtool: link: pgcc -O -DNDEBUG -o .libs/opal_wrapper opal_wrapper.o
<br>
-Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so
<br>
-L/afs/efda-itm.eu/project/compilers/pgi10.2/linux86-64/2010/libso/ -lnuma
<br>
-ldl -lnsl -lutil -lpthread -Wl,-rpath -Wl,/opt/mpi/openmpi-1.4.1/pgi/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `mbind'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`numa_setlocal_memory'
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `numa_set_strict'
<br>
make[2]: *** [opal_wrapper] Error 2
<br>
make[2]: Leaving directory
<br>
`/afs/efda-itm.eu/project/mpi/openmpi-1.4.1_build_pgi/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/afs/efda-itm.eu/project/mpi/openmpi-1.4.1_build_pgi/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Attached you find the output of the configure and make zipped.
<br>
<p>Could somebody help me.
<br>
<p>Thanks in advance
<br>
<p>regards
<br>
<p>Dr. Francesco Iannone
<br>
Associazione EURATOM-ENEA sulla Fusione
<br>
C.R. ENEA Frascati
<br>
Via E. Fermi 45
<br>
00044 Frascati (Roma) Italy
<br>
phone 00-39-06-9400-5124
<br>
fax 00-39-06-9400-5524
<br>
mailto:francesco.iannone_at_[hidden]
<br>
<a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
<br>
<p><p><p>
<p><p>
<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12759/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>video/x-flv attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12759/build.tar.gz">build.tar.gz</a>
</ul>
<!-- attachment="build.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12760.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12758.php">Jeff Squyres: "Re: [OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<li><strong>Reply:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
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
