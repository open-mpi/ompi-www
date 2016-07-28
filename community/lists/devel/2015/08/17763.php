<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 16:14:06 2015" -->
<!-- isoreceived="20150819201406" -->
<!-- sent="Wed, 19 Aug 2015 20:14:02 +0000" -->
<!-- isosent="20150819201402" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?" -->
<!-- id="96928A59-06B9-4677-B534-7F64E7DCD0D9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14xvFEh0goM-d5WZKye9=nvPbuXU88vjb6EJ9gqs1MD_Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-19 16:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17762.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17762.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p>It *is* a little odd, though, that the portals flags are showing up in the OFI MTL linker line -- they probably shouldn't be.  Todd K. is looking into it.
<br>
<p><p><span class="quotelev1">&gt; On Aug 19, 2015, at 4:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have determined that the problem persists without the --with-portals4.
</span><br>
<span class="quotelev1">&gt; I will send the requested log files and output off-list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 19, 2015 at 12:01 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unable to replicate this behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I also don't have the portals libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send your configure output, config.log, and full &quot;make V=1&quot; output?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 15, 2015, at 1:17 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On a Linux/x86-64 system I have configure with
</span><br>
<span class="quotelev2">&gt; &gt; --enable-debug --with-verbs --with-portals4=[path] --with-libfabric=[path] --with-tm=[path] --disable-io-romio
</span><br>
<span class="quotelev2">&gt; &gt; Configured that way all is fine.  However, if I additionally pass
</span><br>
<span class="quotelev2">&gt; &gt; --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt; &gt; the I see the following build failure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -DOTFMERGE_MPI   -g -O2  -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/contrib/vt/vt/../../../.libs -o otfmerge-mpi otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o ../../../otflib/libopen-trace-format.la ../../../otfauxlib/libotfaux.la -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: gcc -DOTFMERGE_MPI -g -O2 -o otfmerge-mpi otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o  -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/contrib/vt/vt/../../../.libs ../../../otflib/.libs/libopen-trace-format.a ../../../otfauxlib/.libs/libotfaux.a /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a -L/usr/common/ftg/ptl4/lib -L/usr/syscom/opt/torque/4.1.4/lib /usr/common/ftg/ptl4/lib/libportals.so /usr/common/ftg/ptl4/lib/libev.so -libverbs -lrdmacm -lbsd-compat /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/orte/.libs/libopen-rte.a /usr/syscom/opt/torque/4.1.4/lib/libtorque.so -lxml2 -lz -lcrypto -lssl -lpthread /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthrea
</span><br>
<span class="quotelev1">&gt;  d -Wl,-rpath -Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o): In function `fi_allocinfo':
</span><br>
<span class="quotelev2">&gt; &gt; /usr/common/ftg/libfabric/1.1.0rc2p1/include/rdma/fabric.h:365: undefined reference to `fi_dupinfo'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o): In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:257: undefined reference to `fi_getinfo'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:264: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:288: undefined reference to `fi_fabric'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:292: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:308: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:326: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:347: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:360: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o):/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:373: more undefined references to `fi_strerror' follow
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi_component.o): In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:404: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:406: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:415: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:454: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi_component.c:457: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/BLD/ompi/.libs/libmpi.a(mtl_ofi.o): In function `ompi_mtl_ofi_del_procs':
</span><br>
<span class="quotelev2">&gt; &gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc3-linux-x86_64-static/openmpi-1.10.0rc3/ompi/mca/mtl/ofi/mtl_ofi.c:147: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev2">&gt; &gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is with the 1.1.0 release of libfabric, in which both the .a and .so have been installed.
</span><br>
<span class="quotelev2">&gt; &gt; As an experiment I tried removing the .so from the libfabric installation.
</span><br>
<span class="quotelev2">&gt; &gt; When I did that, then the normal build (w/o &quot;--enable-static --disable-shared&quot;) still builds correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I suspect something might be amiss in how Open MPI is linking.
</span><br>
<span class="quotelev2">&gt; &gt; In particular I see the link command has contains the path to the Portals4 library directory no less than 3 times in addition to the full paths to libportals.so and its associated libev.so.
</span><br>
<span class="quotelev2">&gt; &gt; Meanwhile, there is not a single reference in the link command to the libfabric lib directory or to libfabric.*.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Knowing Jeff wears hats in both the Open MPI and Open Fabrics camps, I am hoping he can make sense of this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17752.php">http://www.open-mpi.org/community/lists/devel/2015/08/17752.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17761.php">http://www.open-mpi.org/community/lists/devel/2015/08/17761.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17762.php">http://www.open-mpi.org/community/lists/devel/2015/08/17762.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17762.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17762.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
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
