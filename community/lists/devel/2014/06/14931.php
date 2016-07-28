<?
$subject_val = "Re: [OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 09:31:37 2014" -->
<!-- isoreceived="20140601133137" -->
<!-- sent="Sun, 1 Jun 2014 13:31:35 +0000" -->
<!-- isosent="20140601133135" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB/usNIC errors" -->
<!-- id="13AF61F2-3AE4-41A4-AD2D-59C9051E9B2F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ2Qj5ohA0Xaycjzj8nN3rUCCaHT9q7Hn7CK4h02cbTX3NXzaw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB/usNIC errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 09:31:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14932.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14930.php">Ralph Castain: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14933.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should also be fixed when we stop firing up the usnic connectivity checker when there are no usNICs present.
<br>

<br>
On Jun 1, 2014, at 9:12 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-06-01 14:24 GMT+07:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_btl_openib_use_eager_rdma=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I test your approach. Both:
</span><br>
<span class="quotelev1">&gt; a) export OMPI_MCA_btl_openib_use_eager_rdma=0 
</span><br>
<span class="quotelev1">&gt; b) applying your patch and run without &quot;export OMPI_MCA_btl_openib_use_eager_rdma=0&quot; 
</span><br>
<span class="quotelev1">&gt; works well for me. 
</span><br>
<span class="quotelev1">&gt; This fixes first part of the problem: when OMPI_MCA_btl=&quot;openib,self&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However once I comment out this statement thus giving OMPI the right to deside which BTL to use program hangs again. Here is additional information that can be useful:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If I set 1 slot per node this problem doesn't rise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If I use at least 2 cores per node I can see this hang. 
</span><br>
<span class="quotelev1">&gt; Here is the backtraces for all branches of hanged program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank = 0
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000039522df343 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f1e4fb01605 in poll_dispatch (base=0x13973b0, tv=0x7fff2595ce50)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f1e4faf601c in opal_libevent2021_event_base_loop (base=0x13973b0, flags=3)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/event.c:1631
</span><br>
<span class="quotelev1">&gt; #3  0x00007f1e4fa9870a in opal_progress () at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt; #4  0x00007f1e500beb51 in ompi_mpi_init (argc=1, argv=0x7fff2595d158, requested=0, provided=0x7fff2595cfc8)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:641
</span><br>
<span class="quotelev1">&gt; #5  0x00007f1e500f425e in PMPI_Init (argc=0x7fff2595d02c, argv=0x7fff2595d020) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400a6e in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank = 1
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000039522accdd in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00000039522e1e54 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; GOTCHA &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; #2  0x00007fae7a6a7f4d in ompi_btl_usnic_connectivity_client_init () at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/usnic/btl_usnic_cclient.c:92
</span><br>
<span class="quotelev1">&gt; #3  0x00007fae7a6a4b72 in usnic_component_init (num_btl_modules=0x7fffc0a67cc8, want_progress_threads=false, want_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/usnic/btl_usnic_component.c:461
</span><br>
<span class="quotelev1">&gt; #4  0x00007fae7ed9958f in mca_btl_base_select (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/base/btl_base_select.c:113
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; GOTCHA &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; #5  0x00007fae7b5e6b48 in mca_bml_r2_component_init (priority=0x7fffc0a67d84, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/bml/r2/bml_r2_component.c:88
</span><br>
<span class="quotelev1">&gt; #6  0x00007fae7ed98362 in mca_bml_base_init (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/bml/base/bml_base_init.c:69
</span><br>
<span class="quotelev1">&gt; #7  0x00007fae79e2dcb5 in mca_pml_ob1_component_init (priority=0x7fffc0a67eb0, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/pml/ob1/pml_ob1_component.c:271
</span><br>
<span class="quotelev1">&gt; #8  0x00007fae7edc0251 in mca_pml_base_select (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/pml/base/pml_base_select.c:127
</span><br>
<span class="quotelev1">&gt; #9  0x00007fae7ed2b9e9 in ompi_mpi_init (argc=1, argv=0x7fffc0a681c8, requested=0, provided=0x7fffc0a68038)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:611
</span><br>
<span class="quotelev1">&gt; #10 0x00007fae7ed6125e in PMPI_Init (argc=0x7fffc0a6809c, argv=0x7fffc0a68090) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000400a6e in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank=2
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000038e38df343 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fa403413605 in poll_dispatch (base=0x25e33b0, tv=0x7fff1a081be0)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007fa40340801c in opal_libevent2021_event_base_loop (base=0x25e33b0, flags=3)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/event.c:1631
</span><br>
<span class="quotelev1">&gt; #3  0x00007fa4033aa70a in opal_progress () at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt; #4  0x00007fa4039d0b51 in ompi_mpi_init (argc=1, argv=0x7fff1a081ee8, requested=0, provided=0x7fff1a081d58)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:641
</span><br>
<span class="quotelev1">&gt; #5  0x00007fa403a0625e in PMPI_Init (argc=0x7fff1a081dbc, argv=0x7fff1a081db0) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400a6e in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank=3
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000038e38df343 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f1ad8de7605 in poll_dispatch (base=0x21a73b0, tv=0x7fff0fa9f7f0)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f1ad8ddc01c in opal_libevent2021_event_base_loop (base=0x21a73b0, flags=3)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/event.c:1631
</span><br>
<span class="quotelev1">&gt; #3  0x00007f1ad8d7e70a in opal_progress () at /home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/runtime/opal_progress.c:169
</span><br>
<span class="quotelev1">&gt; #4  0x00007f1ad93a4b51 in ompi_mpi_init (argc=1, argv=0x7fff0fa9faf8, requested=0, provided=0x7fff0fa9f968)
</span><br>
<span class="quotelev1">&gt;     at /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:641
</span><br>
<span class="quotelev1">&gt; #5  0x00007f1ad93da25e in PMPI_Init (argc=0x7fff0fa9f9cc, argv=0x7fff0fa9f9c0) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400a6e in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14928.php">http://www.open-mpi.org/community/lists/devel/2014/06/14928.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14932.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14930.php">Ralph Castain: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14933.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
