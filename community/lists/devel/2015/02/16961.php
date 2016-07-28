<?
$subject_val = "Re: [OMPI devel] Master assert failure on Linux/PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 09:46:16 2015" -->
<!-- isoreceived="20150209144616" -->
<!-- sent="Mon, 9 Feb 2015 20:16:16 +0530" -->
<!-- isosent="20150209144616" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master assert failure on Linux/PPC64" -->
<!-- id="CAMQsnobfTTFScrtoPnLR7k_m9pJQm6ywMTUu0ouao5gNQr0fLg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMQsnoadXedFz4_KdxaY3_WMq5Ua2v-=Qb6Um4=b-5=_0FcB3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master assert failure on Linux/PPC64<br>
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 09:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16962.php">George Bosilca: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16960.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I opened a github issue to track this -
<br>
<a href="https://github.com/open-mpi/ompi/issues/383">https://github.com/open-mpi/ompi/issues/383</a>
<br>
<p>--Nysal
<br>
<p>On Fri, Feb 6, 2015 at 11:36 AM, Nysal Jan K A &lt;jnysal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It seems the ompi_free_list_init() in libnbc_open() failed for some
</span><br>
<span class="quotelev1">&gt; reason. That would explain why mca_coll_libnbc_component.active_requests is
</span><br>
<span class="quotelev1">&gt; not initialized and hence crash in libnbc_close().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might help, but still doesn't explain why the free list
</span><br>
<span class="quotelev1">&gt; initialization failed:
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/coll/libnbc/coll_libnbc_component.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/coll/libnbc/coll_libnbc_component.c
</span><br>
<span class="quotelev1">&gt; index 1a2a81a..2d7b82c 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/coll/libnbc/coll_libnbc_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/coll/libnbc/coll_libnbc_component.c
</span><br>
<span class="quotelev1">&gt; @@ -88,6 +88,7 @@ libnbc_open(void)
</span><br>
<span class="quotelev1">&gt;      int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;mca_coll_libnbc_component.requests, ompi_free_list_t);
</span><br>
<span class="quotelev1">&gt; +    OBJ_CONSTRUCT(&amp;mca_coll_libnbc_component.active_requests,
</span><br>
<span class="quotelev1">&gt; opal_list_t);
</span><br>
<span class="quotelev1">&gt;      ret = ompi_free_list_init(&amp;mca_coll_libnbc_component.requests,
</span><br>
<span class="quotelev1">&gt;                                sizeof(ompi_coll_libnbc_request_t),
</span><br>
<span class="quotelev1">&gt;                                OBJ_CLASS(ompi_coll_libnbc_request_t),
</span><br>
<span class="quotelev1">&gt; @@ -97,7 +98,6 @@ libnbc_open(void)
</span><br>
<span class="quotelev1">&gt;                                NULL);
</span><br>
<span class="quotelev1">&gt;      if (OMPI_SUCCESS != ret) return ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    OBJ_CONSTRUCT(&amp;mca_coll_libnbc_component.active_requests,
</span><br>
<span class="quotelev1">&gt; opal_list_t);
</span><br>
<span class="quotelev1">&gt;      /* note: active comms is the number of communicators who have had
</span><br>
<span class="quotelev1">&gt;         a non-blocking collective started */
</span><br>
<span class="quotelev1">&gt;      mca_coll_libnbc_component.active_comms = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like an issue with detecting the proper L2 cache line size on
</span><br>
<span class="quotelev1">&gt; power.
</span><br>
<span class="quotelev1">&gt; I'll take a look over the weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 8:58 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a Linux/PPC64 system I see the failure below from a build of the
</span><br>
<span class="quotelev2">&gt;&gt; current master tarball.
</span><br>
<span class="quotelev2">&gt;&gt; This build was configured with
</span><br>
<span class="quotelev2">&gt;&gt;    --prefix=... --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;   CFLAGS=-m64 --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev2">&gt;&gt;   CXXFLAGS=-m64 --with-wrapper-cxxflags=-m64 \
</span><br>
<span class="quotelev2">&gt;&gt;   FCFLAGS=-m64 --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if putting &quot;-m64&quot; in both the *FLAGS and wrapper flags is
</span><br>
<span class="quotelev2">&gt;&gt; required, but am confident the error is unrelated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] mca: base: components_open: component coll / libnbc
</span><br>
<span class="quotelev2">&gt;&gt; open function failed
</span><br>
<span class="quotelev2">&gt;&gt; ring_c:
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/openmpi-dev-803-g5919b63/ompi/mca/coll/libnbc/coll_libnbc_component.c:118:
</span><br>
<span class="quotelev2">&gt;&gt; libnbc_close: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
</span><br>
<span class="quotelev2">&gt;&gt; ((opal_object_t *)
</span><br>
<span class="quotelev2">&gt;&gt; (&amp;mca_coll_libnbc_component.active_requests))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 0] [0x3fff8bd90478]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 1] /lib64/libc.so.6(gsignal-0x155030)[0x3fff8b9fc510]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 2] /lib64/libc.so.6(abort-0x150094)[0x3fff8ba01be4]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 3] /lib64/libc.so.6(+0x572ac)[0x3fff8b9f22ac]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__assert_fail-0x15ddac)[0x3fff8b9f239c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/openmpi/mca_coll_libnbc.so(+0x9088)[0x3fff8a190088]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_component_close-0xed5e8)[0x3fff8b758308]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(+0xa9c5c)[0x3fff8b757c5c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_components_open-0xee088)[0x3fff8b757778]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_open-0xdc3f8)[0x3fff8b76a620]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(ompi_mpi_init-0x12d5fc)[0x3fff8bc33d14]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(MPI_Init-0xe4734)[0x3fff8bc821bc]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [12] examples/ring_c[0x10000a20]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [13] /lib64/libc.so.6(+0x47b6c)[0x3fff8b9e2b6c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] [14]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x16caf8)[0x3fff8b9e2d98]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08534] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] mca: base: components_open: component coll / libnbc
</span><br>
<span class="quotelev2">&gt;&gt; open function failed
</span><br>
<span class="quotelev2">&gt;&gt; ring_c:
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/openmpi-dev-803-g5919b63/ompi/mca/coll/libnbc/coll_libnbc_component.c:118:
</span><br>
<span class="quotelev2">&gt;&gt; libnbc_close: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
</span><br>
<span class="quotelev2">&gt;&gt; ((opal_object_t *)
</span><br>
<span class="quotelev2">&gt;&gt; (&amp;mca_coll_libnbc_component.active_requests))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 0] [0x3fff99e30478]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 1] /lib64/libc.so.6(gsignal-0x155030)[0x3fff99a9c510]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 2] /lib64/libc.so.6(abort-0x150094)[0x3fff99aa1be4]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 3] /lib64/libc.so.6(+0x572ac)[0x3fff99a922ac]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__assert_fail-0x15ddac)[0x3fff99a9239c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/openmpi/mca_coll_libnbc.so(+0x9088)[0x3fff98230088]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_component_close-0xed5e8)[0x3fff997f8308]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(+0xa9c5c)[0x3fff997f7c5c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_components_open-0xee088)[0x3fff997f7778]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libopen-pal.so.0(mca_base_framework_open-0xdc3f8)[0x3fff9980a620]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(ompi_mpi_init-0x12d5fc)[0x3fff99cd3d14]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-ppc64/INST/lib/libmpi.so.0(MPI_Init-0xe4734)[0x3fff99d221bc]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [12] examples/ring_c[0x10000a20]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [13] /lib64/libc.so.6(+0x47b6c)[0x3fff99a82b6c]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] [14]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x16caf8)[0x3fff99a82d98]
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-k-422:08535] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 0 on node pcp-k-422 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16902.php">http://www.open-mpi.org/community/lists/devel/2015/02/16902.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16962.php">George Bosilca: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16960.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<!-- nextthread="start" -->
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
