<?
$subject_val = "[OMPI devel] Make Error: io_romio_ad_wait.c";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 18 21:00:04 2009" -->
<!-- isoreceived="20090119020004" -->
<!-- sent="Sun, 18 Jan 2009 20:59:58 -0500" -->
<!-- isosent="20090119015958" -->
<!-- name="Jeremy Espenshade" -->
<!-- email="jeremy.espenshade_at_[hidden]" -->
<!-- subject="[OMPI devel] Make Error: io_romio_ad_wait.c" -->
<!-- id="ae4c35670901181759n728a7d85ub23689254afd784c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Make Error: io_romio_ad_wait.c<br>
<strong>From:</strong> Jeremy Espenshade (<em>jeremy.espenshade_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-18 20:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5227.php">Timothy Hayes: "[OMPI devel] When can I use OOB channel?"</a>
<li><strong>Previous message:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<li><strong>Reply:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I am attempting to cross compile OpenMPI 1.2.8 for a PowerPC 440 linux 2.6
<br>
target on an x86-based CentOS 5.2 build machine. Configure works fine with
<br>
the following command settings (with or without fortran) where
<br>
CROSS_COMPILE=ppc_4xx- and points to a DENX ELDK cross compile environment.
<br>
I have successfully built and deployed several applications including
<br>
OpenSSH, so the cross compiler appears to be solid.
<br>
<p>./configure CC=${CROSS_COMPILE}gcc
<br>
--exec-prefix=/home/jeremy/xilinx/workspace/rfs/ --host=powerpc-linux
<br>
--build=i686-linux --disable-strip --disable-mpi-f90 --disable-mpi-f77
<br>
<p>And when I 'make all', it fails with the following output:
<br>
<p>...
<br>
libtool: compile:  ppc_4xx-gcc -DHAVE_CONFIG_H -I. -I../../adio/include
<br>
-DOMPI_BUILDING=1
<br>
-I/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/../../../../..
<br>
-I/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/../../../../../opal/include
<br>
-I../../../../../../../opal/include -I../../../../../../../ompi/include
<br>
-I/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/include
<br>
-I/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/adio/include
<br>
-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
-D_LARGEFILE64_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_ROMIOCONF_H
<br>
-DHAVE_ROMIOCONF_H -I../../include -MT io_romio_ad_wait.lo -MD -MP -MF
<br>
.deps/io_romio_ad_wait.Tpo -c io_romio_ad_wait.c  -fPIC -DPIC -o
<br>
.libs/io_romio_ad_wait.o
<br>
io_romio_ad_wait.c: In function 'ADIOI_GEN_IOComplete':
<br>
io_romio_ad_wait.c:59: warning: passing argument 1 of 'aio_suspend' makes
<br>
pointer from integer without a cast
<br>
io_romio_ad_wait.c:59: warning: passing argument 2 of 'aio_suspend' makes
<br>
integer from pointer without a cast
<br>
io_romio_ad_wait.c:59: error: too few arguments to function 'aio_suspend'
<br>
io_romio_ad_wait.c:62: error: 'tmp1' undeclared (first use in this function)
<br>
io_romio_ad_wait.c:62: error: (Each undeclared identifier is reported only
<br>
once
<br>
io_romio_ad_wait.c:62: error: for each function it appears in.)
<br>
make[5]: *** [io_romio_ad_wait.lo] Error 1
<br>
make[5]: Leaving directory
<br>
`/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/adio/common'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory
<br>
`/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/adio'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory
<br>
`/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/jeremy/Desktop/openmpi-1.2.8/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I've attached the config.log, config.out, and make.out output records. I
<br>
would appreciate any suggestions that you may have.
<br>
Thanks,
<br>
Jeremy
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5226/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5227.php">Timothy Hayes: "[OMPI devel] When can I use OOB channel?"</a>
<li><strong>Previous message:</strong> <a href="5225.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<li><strong>Reply:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
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
