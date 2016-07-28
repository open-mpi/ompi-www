<?
$subject_val = "Re: [OMPI devel] v1.10.0rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 20:25:14 2015" -->
<!-- isoreceived="20150823002514" -->
<!-- sent="Sat, 22 Aug 2015 17:25:10 -0700" -->
<!-- isosent="20150823002510" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0rc4" -->
<!-- id="CAAvDA17tT83wc3rdhrHn49nCfrkdZyAZ7sTneZ0G6GGkD6PY5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15eQk+mm9rCugn6zO4ScSdjuib_8femkCigfapiUJYbeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10.0rc4<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-22 20:25:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17794.php">Paul Hargrove: "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17792.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>In reply to:</strong> <a href="17792.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17798.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Reply:</strong> <a href="17798.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: master is OK with identical configure arguments.
<br>
-Paul
<br>
<p>On Sat, Aug 22, 2015 at 4:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oops!  I spoke too soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuration with &quot;--with-libfabric=[path] --enable-static
</span><br>
<span class="quotelev1">&gt; --disable-shared&quot; is still causing problems.
</span><br>
<span class="quotelev1">&gt; Previously (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17752.php">http://www.open-mpi.org/community/lists/devel/2015/08/17752.php</a>) I was
</span><br>
<span class="quotelev1">&gt; seeing a failure to link otfmerge-mpi during the build of Open MPI.
</span><br>
<span class="quotelev1">&gt; Now I am instead seeing the (essentially identical) linker errors when
</span><br>
<span class="quotelev1">&gt; compiling the examples:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o):
</span><br>
<span class="quotelev1">&gt; In function
</span><br>
<span class="quotelev1">&gt; `fi_allocinfo':/usr/common/ftg/libfabric/1.1.0/include/rdma/fabric.h:366:
</span><br>
<span class="quotelev1">&gt; undefined reference to
</span><br>
<span class="quotelev1">&gt; `fi_dupinfo'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:260:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_getinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:267:
</span><br>
<span class="quotelev1">&gt; undefined reference to
</span><br>
<span class="quotelev1">&gt; `fi_strerror'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:291:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_fabric'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:295:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:311:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:329:
</span><br>
<span class="quotelev1">&gt; undefined reference to
</span><br>
<span class="quotelev1">&gt; `fi_strerror'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:350:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:363:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_compone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nt.o):/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/
</span><br>
<span class="quotelev1">&gt; mtl/ofi/mtl_ofi_component.c:376: more undefined references to
</span><br>
<span class="quotelev1">&gt; `fi_strerror' follow
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:407:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:409:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:418:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:457:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:460:
</span><br>
<span class="quotelev1">&gt; undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi.o):
</span><br>
<span class="quotelev1">&gt; In function `ompi_mtl_ofi_del_procs':
</span><br>
<span class="quotelev1">&gt; [and many more]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this is certainly not my first rodeo, I'll jump right to the --show
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc --show -g hello_c.c -o hello_c'
</span><br>
<span class="quotelev1">&gt; gcc -g hello_c.c -o hello_c
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/include
</span><br>
<span class="quotelev1">&gt; -pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -L/usr/common/ftg/ptl4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -lm -ldl -lrt -ltorque -libverbs -lportals
</span><br>
<span class="quotelev1">&gt; -lrdmacm -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can send config.log and configure output off-list to whomever asks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 22, 2015 at 3:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point I can confirm that all of my configurations that
</span><br>
<span class="quotelev2">&gt;&gt; experienced failures with rc3 have passed with rc4.
</span><br>
<span class="quotelev2">&gt;&gt; I will report again after all tests have completed (likely on Sunday).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Aug 22, 2015 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Final release candidate for v1.10.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know immediately if you see a problem - scheduled for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release after the Tues telecon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17790.php">http://www.open-mpi.org/community/lists/devel/2015/08/17790.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17794.php">Paul Hargrove: "[OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17792.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>In reply to:</strong> <a href="17792.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17798.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Reply:</strong> <a href="17798.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc4"</a>
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
