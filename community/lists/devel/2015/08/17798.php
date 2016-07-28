<?
$subject_val = "Re: [OMPI devel] v1.10.0rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 12:41:05 2015" -->
<!-- isoreceived="20150823164105" -->
<!-- sent="Sun, 23 Aug 2015 09:41:00 -0700" -->
<!-- isosent="20150823164100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0rc4" -->
<!-- id="F849353F-28C1-4821-92C5-52BBE16C7EB4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17tT83wc3rdhrHn49nCfrkdZyAZ7sTneZ0G6GGkD6PY5w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-23 12:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17799.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17797.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Reply:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I found the missing flags and added them. Please try rc5
<br>
<p><p><span class="quotelev1">&gt; On Aug 22, 2015, at 5:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: master is OK with identical configure arguments.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 22, 2015 at 4:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Oops!  I spoke too soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configuration with &quot;--with-libfabric=[path] --enable-static --disable-shared&quot; is still causing problems.
</span><br>
<span class="quotelev1">&gt; Previously (<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17752.php">http://www.open-mpi.org/community/lists/devel/2015/08/17752.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17752.php">http://www.open-mpi.org/community/lists/devel/2015/08/17752.php</a>&gt;) I was seeing a failure to link otfmerge-mpi during the build of Open MPI.
</span><br>
<span class="quotelev1">&gt; Now I am instead seeing the (essentially identical) linker errors when compiling the examples:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o): In function `fi_allocinfo':/usr/common/ftg/libfabric/1.1.0/include/rdma/fabric.h:366: undefined reference to `fi_dupinfo'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o): In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:260: undefined reference to `fi_getinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:267: undefined reference to `fi_strerror'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:291: undefined reference to `fi_fabric'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:295: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:311: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:329: undefined reference to `fi_strerror'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:350: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:363: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_compone
</span><br>
<span class="quotelev1">&gt; nt.o):/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/
</span><br>
<span class="quotelev1">&gt; mtl/ofi/mtl_ofi_component.c:376: more undefined references to `fi_strerror' follow
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o): In function `ompi_mtl_ofi_component_init':
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:407: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:409: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:418: undefined reference to `fi_strerror'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:457: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:460: undefined reference to `fi_freeinfo'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi.o): In function `ompi_mtl_ofi_del_procs':
</span><br>
<span class="quotelev1">&gt; [and many more]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this is certainly not my first rodeo, I'll jump right to the --show output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc --show -g hello_c.c -o hello_c'
</span><br>
<span class="quotelev1">&gt; gcc -g hello_c.c -o hello_c -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/include -pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -L/usr/common/ftg/ptl4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath -Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib -Wl,--enable-new-dtags -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib -lmpi -lopen-rte -lopen-pal -lm -ldl -lrt -ltorque -libverbs -lportals -lrdmacm -lutil
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
<span class="quotelev1">&gt; On Sat, Aug 22, 2015 at 3:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; At this point I can confirm that all of my configurations that experienced failures with rc3 have passed with rc4.
</span><br>
<span class="quotelev1">&gt; I will report again after all tests have completed (likely on Sunday).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 22, 2015 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Final release candidate for v1.10.0:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know immediately if you see a problem - scheduled for release after the Tues telecon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17790.php">http://www.open-mpi.org/community/lists/devel/2015/08/17790.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17790.php">http://www.open-mpi.org/community/lists/devel/2015/08/17790.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17793.php">http://www.open-mpi.org/community/lists/devel/2015/08/17793.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17793.php">http://www.open-mpi.org/community/lists/devel/2015/08/17793.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17799.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17797.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0rc4 hcoll problem compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Reply:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
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
