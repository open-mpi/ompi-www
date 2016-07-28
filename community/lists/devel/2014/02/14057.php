<?
$subject_val = "[OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 20:22:31 2014" -->
<!-- isoreceived="20140209012231" -->
<!-- sent="Sat, 8 Feb 2014 17:22:29 -0800" -->
<!-- isosent="20140209012229" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux" -->
<!-- id="CAAvDA15sY=UwMxZkC=rqM_xdDRahYuy-Yn09VFBS3bUYhzycFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 20:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14058.php">Paul Hargrove: "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Previous message:</strong> <a href="14056.php">Paul Hargrove: "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14058.php">Paul Hargrove: "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Reply:</strong> <a href="14058.php">Paul Hargrove: "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Reply:</strong> <a href="14114.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing the current v1.7 tarball (1.7.5a1r30634), I get a failure when
<br>
building the oshmem examples.
<br>
I've confirmed that the same problem exists on trunk (so not a problem with
<br>
the CMR).
<br>
<p>[...]
<br>
mpifort -g ring_usempi.f90 -o ring_usempi
<br>
** ring   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file ring_usempi.f90.
<br>
make[2]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[1]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[1]: Entering directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
shmemcc -g hello_oshmem_c.c -o hello_oshmem
<br>
make[2]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
shmemcc -g ring_oshmem_c.c -o ring_oshmem
<br>
make[2]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
shmemfort -g hello_oshmemfh.f90 -o hello_oshmemfh
<br>
** hello_oshmem   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file hello_oshmemfh.f90.
<br>
make[2]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh
<br>
** ring_oshmem   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file ring_oshmemfh.f90.
<br>
ring_oshmemfh.o: In function `ring_oshmem':
<br>
/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:33:
<br>
undefined reference to `shmem_put8'
<br>
/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:46:
<br>
undefined reference to `shmem_int8_wait_until'
<br>
/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:55:
<br>
undefined reference to `shmem_put8'
<br>
make[2]: *** [ring_oshmemfh] Error 1
<br>
make[2]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make[1]: *** [oshmem] Error 2
<br>
make[1]: Leaving directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
<br>
make: *** [all] Error 2
<br>
<p>The link of ring_oshmemfh is failing with undefined references to
<br>
shmem_put8 and shmem_int8_wait_until.
<br>
The relevant portion of &quot;make&quot; output in the example dir is shown above.
<br>
Note that ring_usempi linked fine, indicating that F90 MPI bindings are
<br>
fine.
<br>
Additionally, ring_oshmem linked file, indicating that C language OSHMEM
<br>
bindings are fine, too.
<br>
<p>In case it is relevant: this build is configured with
<br>
&nbsp;&nbsp;--enable-static --enable-shared --enable-mpi-fortran=usempi --disable-vt
<br>
<p>The &quot;--enable-static --enable-shared&quot; flags are just to make for a more
<br>
thorough test.
<br>
However, retesting without --enable-static did not resolve the problem.
<br>
<p>The --enable-mpi-fortran flag is necessary because the F08 bindings don't
<br>
build with this compiler (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13802.php">http://www.open-mpi.org/community/lists/devel/2014/01/13802.php</a>).
<br>
<p>The --disable-vt flag is necessary because the compiler crashes building VT.
<br>
<p>Some misc bits of info:
<br>
<p>$ shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh --show
<br>
xlf -g ring_oshmemfh.f90 -o ring_oshmemfh
<br>
-I/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/include
<br>
-I/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/lib
<br>
-Wl,-rpath
<br>
-Wl,/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/lib
<br>
-loshmem -lmpi_mpifh -lmpi -lm -lnuma -ldl -lrt -lnsl -lutil -lpthread
<br>
<p>$ nm INST/lib/liboshmem.so | grep shmem_put8
<br>
0009eab0 t 00000000.plt_pic32.shmem_put8_f
<br>
00063f20 T shmem_put8_
<br>
00063fa0 T shmem_put8__
<br>
00063e00 T shmem_put8_f
<br>
$ nm INST/lib/liboshmem.a | grep shmem_put8
<br>
shmem_put8_f.o:
<br>
00000120 T shmem_put8_
<br>
000001a0 T shmem_put8__
<br>
00000000 T shmem_put8_f
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14058.php">Paul Hargrove: "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Previous message:</strong> <a href="14056.php">Paul Hargrove: "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14058.php">Paul Hargrove: "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Reply:</strong> <a href="14058.php">Paul Hargrove: "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Reply:</strong> <a href="14114.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux"</a>
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
