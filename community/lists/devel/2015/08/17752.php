<?
$subject_val = "[OMPI devel] 1.10.0rc3 - cannot build libfabic support static?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 15 01:17:10 2015" -->
<!-- isoreceived="20150815051710" -->
<!-- sent="Fri, 14 Aug 2015 22:17:04 -0700" -->
<!-- isosent="20150815051704" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc3 - cannot build libfabic support static?" -->
<!-- id="CAAvDA17Ab3VSYoDH65KqMw5kefjpquh=NJCZEqUYQNhxQDg=-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-15 01:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17751.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Linux/x86-64 system I have configure with
<br>
<p>--enable-debug --with-verbs --with-portals4=[path] --with-libfabric=[path]
<br>
--with-tm=[path] --disable-io-romio
<br>
<p>Configured that way all is fine.  However, if I additionally pass
<br>
<p>--enable-static --disable-shared
<br>
<p>the I see the following build failure:
<br>
<p>/bin/sh ../../../libtool  --tag=CC   --mode=link gcc -DOTFMERGE_MPI   -g
<br>
-O2
<br>
&nbsp;-L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs
<br>
-L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/contrib/vt/vt/../../../.libs
<br>
-o otfmerge-mpi otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o
<br>
../../../otflib/libopen-trace-format.la ../../../otfauxlib/libotfaux.la
<br>
-lmpi
<br>
libtool: link: gcc -DOTFMERGE_MPI -g -O2 -o otfmerge-mpi
<br>
otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o
<br>
&nbsp;-L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs
<br>
-L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/contrib/vt/vt/../../../.libs
<br>
../../../otflib/.libs/libopen-trace-format.a
<br>
../../../otfauxlib/.libs/libotfaux.a
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a
<br>
-L/usr/common/ftg/ptl4/lib -L/usr/syscom/opt/torque/4.1.4/lib
<br>
/usr/common/ftg/ptl4/lib/libportals.so /usr/common/ftg/ptl4/lib/libev.so
<br>
-libverbs -lrdmacm -lbsd-compat
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/orte/.libs/libopen-rte.a
<br>
/usr/syscom/opt/torque/4.1.4/lib/libtorque.so -lxml2 -lz -lcrypto -lssl
<br>
-lpthread
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/opal/.libs/libopen-pal.a
<br>
-ldl -lrt -lm -lutil -pthread -Wl,-rpath -Wl,/usr/common/ftg/ptl4/lib
<br>
-Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):
<br>
In function `fi_allocinfo':
<br>
/usr/common/ftg/libfabric/1.1.0rc2p1/include/rdma/fabric.h:365: undefined
<br>
reference to `fi_dupinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):
<br>
In function `ompi_mtl_ofi_component_init':
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:257:
<br>
undefined reference to `fi_getinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:264:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:288:
<br>
undefined reference to `fi_fabric'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:292:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:308:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:326:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:347:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:360:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:373:
<br>
more undefined references to `fi_strerror' follow
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):
<br>
In function `ompi_mtl_ofi_component_init':
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:404:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:406:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:415:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:454:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:457:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi.o):
<br>
In function `ompi_mtl_ofi_del_procs':
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi.c:147:
<br>
undefined reference to `fi_strerror'
<br>
collect2: error: ld returned 1 exit status
<br>
<p>This is with the 1.1.0 release of libfabric, in which both the .a and .so
<br>
have been installed.
<br>
As an experiment I tried removing the .so from the libfabric installation.
<br>
When I did that, then the normal build (w/o &quot;--enable-static
<br>
--disable-shared&quot;) still builds correctly.
<br>
<p>So, I suspect something might be amiss in how Open MPI is linking.
<br>
In particular I see the link command has contains the path to the Portals4
<br>
library directory no less than 3 times in addition to the full paths to
<br>
libportals.so and its associated libev.so.
<br>
Meanwhile, there is not a single reference in the link command to the
<br>
libfabric lib directory or to libfabric.*.
<br>
<p>Knowing Jeff wears hats in both the Open MPI and Open Fabrics camps, I am
<br>
hoping he can make sense of this.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17752/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17751.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
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
