<?
$subject_val = "Re: [OMPI devel] v1.10.0rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 19:33:29 2015" -->
<!-- isoreceived="20150822233329" -->
<!-- sent="Sat, 22 Aug 2015 16:33:24 -0700" -->
<!-- isosent="20150822233324" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0rc4" -->
<!-- id="CAAvDA15eQk+mm9rCugn6zO4ScSdjuib_8femkCigfapiUJYbeg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA1578NOziCBaY2kVzV6Vq8nh+b9Rz8vM4g_pjF7ZGp4Vnw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-22 19:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Previous message:</strong> <a href="17791.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Reply:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  I spoke too soon.
<br>
<p>The configuration with &quot;--with-libfabric=[path] --enable-static
<br>
--disable-shared&quot; is still causing problems.
<br>
Previously (<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17752.php">http://www.open-mpi.org/community/lists/devel/2015/08/17752.php</a>)
<br>
I was seeing a failure to link otfmerge-mpi during the build of Open MPI.
<br>
Now I am instead seeing the (essentially identical) linker errors when
<br>
compiling the examples:
<br>
<p>$ mpicc -g    hello_c.c   -o hello_c
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o):
<br>
In function
<br>
`fi_allocinfo':/usr/common/ftg/libfabric/1.1.0/include/rdma/fabric.h:366:
<br>
undefined reference to
<br>
`fi_dupinfo'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o):
<br>
In function `ompi_mtl_ofi_component_init':
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:260:
<br>
undefined reference to `fi_getinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:267:
<br>
undefined reference to
<br>
`fi_strerror'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:291:
<br>
undefined reference to `fi_fabric'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:295:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:311:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:329:
<br>
undefined reference to
<br>
`fi_strerror'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:350:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:363:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_compone
<br>
nt.o):/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/
<br>
mtl/ofi/mtl_ofi_component.c:376: more undefined references to `fi_strerror'
<br>
follow
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi_component.o):
<br>
In function `ompi_mtl_ofi_component_init':
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:407:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:409:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:418:
<br>
undefined reference to `fi_strerror'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:457:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/openmpi-1.10.0rc4/ompi/mca/mtl/ofi/mtl_ofi_component.c:460:
<br>
undefined reference to `fi_freeinfo'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib/libmpi.a(mtl_ofi.o):
<br>
In function `ompi_mtl_ofi_del_procs':
<br>
[and many more]
<br>
<p>Since this is certainly not my first rodeo, I'll jump right to the --show
<br>
output:
<br>
<p>$ mpicc --show -g hello_c.c -o hello_c'
<br>
gcc -g hello_c.c -o hello_c
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/include
<br>
-pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -L/usr/common/ftg/ptl4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/common/ftg/ptl4/lib -Wl,-rpath
<br>
-Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc4-linux-x86_64-static/INST/lib
<br>
-lmpi -lopen-rte -lopen-pal -lm -ldl -lrt -ltorque -libverbs -lportals
<br>
-lrdmacm -lutil
<br>
<p>I can send config.log and configure output off-list to whomever asks.
<br>
<p>-Paul
<br>
<p>On Sat, Aug 22, 2015 at 3:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At this point I can confirm that all of my configurations that experienced
</span><br>
<span class="quotelev1">&gt; failures with rc3 have passed with rc4.
</span><br>
<span class="quotelev1">&gt; I will report again after all tests have completed (likely on Sunday).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 22, 2015 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Final release candidate for v1.10.0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know immediately if you see a problem - scheduled for
</span><br>
<span class="quotelev2">&gt;&gt; release after the Tues telecon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17790.php">http://www.open-mpi.org/community/lists/devel/2015/08/17790.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Previous message:</strong> <a href="17791.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>Reply:</strong> <a href="17793.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
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
