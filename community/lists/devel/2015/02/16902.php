<?
$subject_val = "[OMPI devel] Master assert failure on Linux/PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 22:28:48 2015" -->
<!-- isoreceived="20150203032848" -->
<!-- sent="Mon, 2 Feb 2015 19:28:46 -0800" -->
<!-- isosent="20150203032846" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master assert failure on Linux/PPC64" -->
<!-- id="CAAvDA16CyJnHBTKr849EtPzitArer41JTPFrEKRkncLB13A=DQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master assert failure on Linux/PPC64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 22:28:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16903.php">Paul Hargrove: "[OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64"</a>
<li><strong>Previous message:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>Reply:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Linux/PPC64 system I see the failure below from a build of the current
<br>
master tarball.
<br>
This build was configured with
<br>
&nbsp;&nbsp;&nbsp;--prefix=... --enable-debug \
<br>
&nbsp;&nbsp;CFLAGS=-m64 --with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;CXXFLAGS=-m64 --with-wrapper-cxxflags=-m64 \
<br>
&nbsp;&nbsp;FCFLAGS=-m64 --with-wrapper-fcflags=-m64
<br>
<p>I am not sure if putting &quot;-m64&quot; in both the *FLAGS and wrapper flags is
<br>
required, but am confident the error is unrelated.
<br>
<p>-Paul
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
[pcp-k-422:08534] mca: base: components_open: component coll / libnbc open
<br>
function failed
<br>
ring_c:
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/openmpi-dev-803-g5919b63/ompi/mca/coll/libnbc/coll_libnbc_component.c:118:
<br>
libnbc_close: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
<br>
((opal_object_t *)
<br>
(&amp;mca_coll_libnbc_component.active_requests))-&gt;obj_magic_id' failed.
<br>
[pcp-k-422:08534] *** Process received signal ***
<br>
[pcp-k-422:08534] Signal: Aborted (6)
<br>
[pcp-k-422:08534] Signal code:  (-6)
<br>
[pcp-k-422:08534] [ 0] [0x3fff8bd90478]
<br>
[pcp-k-422:08534] [ 1] /lib64/libc.so.6(gsignal-0x155030)[0x3fff8b9fc510]
<br>
[pcp-k-422:08534] [ 2] /lib64/libc.so.6(abort-0x150094)[0x3fff8ba01be4]
<br>
[pcp-k-422:08534] [ 3] /lib64/libc.so.6(+0x572ac)[0x3fff8b9f22ac]
<br>
[pcp-k-422:08534] [ 4]
<br>
/lib64/libc.so.6(__assert_fail-0x15ddac)[0x3fff8b9f239c]
<br>
[pcp-k-422:08534] [ 5]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/openmpi/mca_coll_libnbc.so(+0x9088)[0x3fff8a190088]
<br>
[pcp-k-422:08534] [ 6]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_component_close-0xed5e8)[0x3fff8b758308]
<br>
[pcp-k-422:08534] [ 7]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(+0xa9c5c)[0x3fff8b757c5c]
<br>
[pcp-k-422:08534] [ 8]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_components_open-0xee088)[0x3fff8b757778]
<br>
[pcp-k-422:08534] [ 9]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_open-0xdc3f8)[0x3fff8b76a620]
<br>
[pcp-k-422:08534] [10]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(ompi_mpi_init-0x12d5fc)[0x3fff8bc33d14]
<br>
[pcp-k-422:08534] [11]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(MPI_Init-0xe4734)[0x3fff8bc821bc]
<br>
[pcp-k-422:08534] [12] examples/ring_c[0x10000a20]
<br>
[pcp-k-422:08534] [13] /lib64/libc.so.6(+0x47b6c)[0x3fff8b9e2b6c]
<br>
[pcp-k-422:08534] [14]
<br>
/lib64/libc.so.6(__libc_start_main-0x16caf8)[0x3fff8b9e2d98]
<br>
[pcp-k-422:08534] *** End of error message ***
<br>
[pcp-k-422:08535] mca: base: components_open: component coll / libnbc open
<br>
function failed
<br>
ring_c:
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/openmpi-dev-803-g5919b63/ompi/mca/coll/libnbc/coll_libnbc_component.c:118:
<br>
libnbc_close: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
<br>
((opal_object_t *)
<br>
(&amp;mca_coll_libnbc_component.active_requests))-&gt;obj_magic_id' failed.
<br>
[pcp-k-422:08535] *** Process received signal ***
<br>
[pcp-k-422:08535] Signal: Aborted (6)
<br>
[pcp-k-422:08535] Signal code:  (-6)
<br>
[pcp-k-422:08535] [ 0] [0x3fff99e30478]
<br>
[pcp-k-422:08535] [ 1] /lib64/libc.so.6(gsignal-0x155030)[0x3fff99a9c510]
<br>
[pcp-k-422:08535] [ 2] /lib64/libc.so.6(abort-0x150094)[0x3fff99aa1be4]
<br>
[pcp-k-422:08535] [ 3] /lib64/libc.so.6(+0x572ac)[0x3fff99a922ac]
<br>
[pcp-k-422:08535] [ 4]
<br>
/lib64/libc.so.6(__assert_fail-0x15ddac)[0x3fff99a9239c]
<br>
[pcp-k-422:08535] [ 5]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/openmpi/mca_coll_libnbc.so(+0x9088)[0x3fff98230088]
<br>
[pcp-k-422:08535] [ 6]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_component_close-0xed5e8)[0x3fff997f8308]
<br>
[pcp-k-422:08535] [ 7]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(+0xa9c5c)[0x3fff997f7c5c]
<br>
[pcp-k-422:08535] [ 8]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_components_open-0xee088)[0x3fff997f7778]
<br>
[pcp-k-422:08535] [ 9]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_open-0xdc3f8)[0x3fff9980a620]
<br>
[pcp-k-422:08535] [10]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(ompi_mpi_init-0x12d5fc)[0x3fff99cd3d14]
<br>
[pcp-k-422:08535] [11]
<br>
/home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(MPI_Init-0xe4734)[0x3fff99d221bc]
<br>
[pcp-k-422:08535] [12] examples/ring_c[0x10000a20]
<br>
[pcp-k-422:08535] [13] /lib64/libc.so.6(+0x47b6c)[0x3fff99a82b6c]
<br>
[pcp-k-422:08535] [14]
<br>
/lib64/libc.so.6(__libc_start_main-0x16caf8)[0x3fff99a82d98]
<br>
[pcp-k-422:08535] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 0 on node pcp-k-422 exited on
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16903.php">Paul Hargrove: "[OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64"</a>
<li><strong>Previous message:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>Reply:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
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
