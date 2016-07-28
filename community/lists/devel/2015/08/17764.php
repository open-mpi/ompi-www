<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 17:01:38 2015" -->
<!-- isoreceived="20150819210138" -->
<!-- sent="Wed, 19 Aug 2015 16:01:36 -0500" -->
<!-- isosent="20150819210136" -->
<!-- name="Todd Kordenbrock" -->
<!-- email="thkgcode_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?" -->
<!-- id="CAEGOymB_ExX3C7PbAGd07uWL6HOu8UuyGVeMDJFEWu-F5GE4TA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="96928A59-06B9-4677-B534-7F64E7DCD0D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?<br>
<strong>From:</strong> Todd Kordenbrock (<em>thkgcode_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-19 17:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17763.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17763.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The linker error that Paul posted isn't an OFI MTL specific linker line.
<br>
It is the linker line for otfmerge-mpi from VampirTrace package.  Portals4
<br>
just shows up as an external library the same as OFI or torque.
<br>
<p>As far as the 3 occurrences of the Portals4 path in that linker line, it
<br>
breaks down as one -L and two -rpath.  I think the -rpath shows up twice
<br>
because Portals4 depends on libev.so which is installed in the same place
<br>
as libportals.so and you get one -rpath for each lib.  I'll see if that can
<br>
be deduped.
<br>
<p><p>todd
<br>
<p><p><p>On Wed, Aug 19, 2015 at 3:14 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It *is* a little odd, though, that the portals flags are showing up in the
</span><br>
<span class="quotelev1">&gt; OFI MTL linker line -- they probably shouldn't be.  Todd K. is looking into
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 19, 2015, at 4:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have determined that the problem persists without the --with-portals4.
</span><br>
<span class="quotelev2">&gt; &gt; I will send the requested log files and output off-list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Aug 19, 2015 at 12:01 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Paul --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm unable to replicate this behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But I also don't have the portals libraries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you send your configure output, config.log, and full &quot;make V=1&quot;
</span><br>
<span class="quotelev1">&gt; output?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 15, 2015, at 1:17 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On a Linux/x86-64 system I have configure with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-debug --with-verbs --with-portals4=[path]
</span><br>
<span class="quotelev1">&gt; --with-libfabric=[path] --with-tm=[path] --disable-io-romio
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Configured that way all is fine.  However, if I additionally pass
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-static --disable-shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the I see the following build failure:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -DOTFMERGE_MPI
</span><br>
<span class="quotelev1">&gt;  -g -O2
</span><br>
<span class="quotelev1">&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs
</span><br>
<span class="quotelev1">&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev1">&gt; -o otfmerge-mpi otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev1">&gt; ../../../otflib/libopen-trace-format.la ../../../otfauxlib/libotfaux.la
</span><br>
<span class="quotelev1">&gt; -lmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libtool: link: gcc -DOTFMERGE_MPI -g -O2 -o otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev1">&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs
</span><br>
<span class="quotelev1">&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/contrib/vt/vt/../../../.libs
</span><br>
<span class="quotelev1">&gt; ../../../otflib/.libs/libopen-trace-format.a
</span><br>
<span class="quotelev1">&gt; ../../../otfauxlib/.libs/libotfaux.a
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a
</span><br>
<span class="quotelev1">&gt; -L/usr/common/ftg/ptl4/lib -L/usr/syscom/opt/torque/4.1.4/lib
</span><br>
<span class="quotelev1">&gt; /usr/common/ftg/ptl4/lib/libportals.so /usr/common/ftg/ptl4/lib/libev.so
</span><br>
<span class="quotelev1">&gt; -libverbs -lrdmacm -lbsd-compat
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /usr/syscom/opt/torque/4.1.4/lib/libtorque.so -lxml2 -lz -lcrypto -lssl
</span><br>
<span class="quotelev1">&gt; -lpthread
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/opal/.libs/libopen-pal.a
</span><br>
<span class="quotelev1">&gt; -ldl -lrt -lm -lutil -pthr
</span><br>
<span class="quotelev1">&gt;  ea
</span><br>
<span class="quotelev2">&gt; &gt;  d -Wl,-rpath -Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):
</span><br>
<span class="quotelev1">&gt; In function `fi_allocinfo':
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/common/ftg/libfabric/1.1.0rc2p1/include/rdma/fabric.h:365:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_dupinfo'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:257:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_getinfo'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:264:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:288:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_fabric'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:292:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:308:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:326:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:347:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:360:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:373:
</span><br>
<span class="quotelev1">&gt; more undefined references to `fi_strerror' follow
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:404:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:406:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:415:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:454:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:457:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_mtl_ofi_del_procs':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi.c:147:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is with the 1.1.0 release of libfabric, in which both the .a and
</span><br>
<span class="quotelev1">&gt; .so have been installed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As an experiment I tried removing the .so from the libfabric
</span><br>
<span class="quotelev1">&gt; installation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When I did that, then the normal build (w/o &quot;--enable-static
</span><br>
<span class="quotelev1">&gt; --disable-shared&quot;) still builds correctly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, I suspect something might be amiss in how Open MPI is linking.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In particular I see the link command has contains the path to the
</span><br>
<span class="quotelev1">&gt; Portals4 library directory no less than 3 times in addition to the full
</span><br>
<span class="quotelev1">&gt; paths to libportals.so and its associated libev.so.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Meanwhile, there is not a single reference in the link command to the
</span><br>
<span class="quotelev1">&gt; libfabric lib directory or to libfabric.*.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Knowing Jeff wears hats in both the Open MPI and Open Fabrics camps, I
</span><br>
<span class="quotelev1">&gt; am hoping he can make sense of this.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17752.php">http://www.open-mpi.org/community/lists/devel/2015/08/17752.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17761.php">http://www.open-mpi.org/community/lists/devel/2015/08/17761.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17762.php">http://www.open-mpi.org/community/lists/devel/2015/08/17762.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17763.php">http://www.open-mpi.org/community/lists/devel/2015/08/17763.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17764/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17763.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17763.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17765.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
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
