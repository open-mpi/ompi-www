<?
$subject_val = "Re: [OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 09:12:44 2014" -->
<!-- isoreceived="20140601131244" -->
<!-- sent="Sun, 1 Jun 2014 20:12:43 +0700" -->
<!-- isosent="20140601131243" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB/usNIC errors" -->
<!-- id="CAJ2Qj5ohA0Xaycjzj8nN3rUCCaHT9q7Hn7CK4h02cbTX3NXzaw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5ujFeF3ST9peGFNnDf1MTKw29F2wGYH-HTOBadurzS9wQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 09:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14929.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14927.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14933.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2014-06-01 14:24 GMT+07:00 Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; export OMPI_MCA_btl_openib_use_eager_rdma=0
</span><br>
<p><p>Gilles,
<br>
<p>I test your approach. Both:
<br>
a) export OMPI_MCA_btl_openib_use_eager_rdma=0
<br>
b) applying your patch and run without &quot;export
<br>
OMPI_MCA_btl_openib_use_eager_rdma=0&quot;
<br>
works well for me.
<br>
This fixes first part of the problem: when OMPI_MCA_btl=&quot;openib,self&quot;
<br>
<p>However once I comment out this statement thus giving OMPI the right to
<br>
deside which BTL to use program hangs again. Here is additional information
<br>
that can be useful:
<br>
<p>1. If I set 1 slot per node this problem doesn't rise.
<br>
<p>2. If I use at least 2 cores per node I can see this hang.
<br>
Here is the backtraces for all branches of hanged program:
<br>
<p>rank = 0
<br>
(gdb) bt
<br>
#0  0x00000039522df343 in poll () from /lib64/libc.so.6
<br>
#1  0x00007f1e4fb01605 in poll_dispatch (base=0x13973b0, tv=0x7fff2595ce50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#2  0x00007f1e4faf601c in opal_libevent2021_event_base_loop
<br>
(base=0x13973b0, flags=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/event.c:1631
<br>
#3  0x00007f1e4fa9870a in opal_progress () at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/runtime/opal_progress.c:169
<br>
#4  0x00007f1e500beb51 in ompi_mpi_init (argc=1, argv=0x7fff2595d158,
<br>
requested=0, provided=0x7fff2595cfc8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:641
<br>
#5  0x00007f1e500f425e in PMPI_Init (argc=0x7fff2595d02c,
<br>
argv=0x7fff2595d020) at pinit.c:84
<br>
#6  0x0000000000400a6e in main ()
<br>
<p>rank = 1
<br>
(gdb) bt
<br>
*#0  0x00000039522accdd in nanosleep () from /lib64/libc.so.6*
<br>
*#1  0x00000039522e1e54 in usleep () from /lib64/libc.so.6*
<br>
*&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; GOTCHA &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;*
<br>
*#2  0x00007fae7a6a7f4d in ompi_btl_usnic_connectivity_client_init () at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/usnic/btl_usnic_cclient.c:92*
<br>
#3  0x00007fae7a6a4b72 in usnic_component_init
<br>
(num_btl_modules=0x7fffc0a67cc8, want_progress_threads=false,
<br>
want_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/usnic/btl_usnic_component.c:461
<br>
#4  0x00007fae7ed9958f in mca_btl_base_select
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/base/btl_base_select.c:113
<br>
*&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; GOTCHA &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;*
<br>
#5  0x00007fae7b5e6b48 in mca_bml_r2_component_init
<br>
(priority=0x7fffc0a67d84, enable_progress_threads=false,
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/bml/r2/bml_r2_component.c:88
<br>
#6  0x00007fae7ed98362 in mca_bml_base_init (enable_progress_threads=false,
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/bml/base/bml_base_init.c:69
<br>
#7  0x00007fae79e2dcb5 in mca_pml_ob1_component_init
<br>
(priority=0x7fffc0a67eb0, enable_progress_threads=false,
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/pml/ob1/pml_ob1_component.c:271
<br>
#8  0x00007fae7edc0251 in mca_pml_base_select
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/pml/base/pml_base_select.c:127
<br>
#9  0x00007fae7ed2b9e9 in ompi_mpi_init (argc=1, argv=0x7fffc0a681c8,
<br>
requested=0, provided=0x7fffc0a68038)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:611
<br>
#10 0x00007fae7ed6125e in PMPI_Init (argc=0x7fffc0a6809c,
<br>
argv=0x7fffc0a68090) at pinit.c:84
<br>
#11 0x0000000000400a6e in main ()
<br>
<p>rank=2
<br>
(gdb) bt
<br>
#0  0x00000038e38df343 in poll () from /lib64/libc.so.6
<br>
#1  0x00007fa403413605 in poll_dispatch (base=0x25e33b0, tv=0x7fff1a081be0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#2  0x00007fa40340801c in opal_libevent2021_event_base_loop
<br>
(base=0x25e33b0, flags=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/event.c:1631
<br>
#3  0x00007fa4033aa70a in opal_progress () at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/runtime/opal_progress.c:169
<br>
#4  0x00007fa4039d0b51 in ompi_mpi_init (argc=1, argv=0x7fff1a081ee8,
<br>
requested=0, provided=0x7fff1a081d58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:641
<br>
#5  0x00007fa403a0625e in PMPI_Init (argc=0x7fff1a081dbc,
<br>
argv=0x7fff1a081db0) at pinit.c:84
<br>
#6  0x0000000000400a6e in main ()
<br>
<p><p>rank=3
<br>
(gdb) bt
<br>
#0  0x00000038e38df343 in poll () from /lib64/libc.so.6
<br>
#1  0x00007f1ad8de7605 in poll_dispatch (base=0x21a73b0, tv=0x7fff0fa9f7f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#2  0x00007f1ad8ddc01c in opal_libevent2021_event_base_loop
<br>
(base=0x21a73b0, flags=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/mca/event/libevent2021/libevent/event.c:1631
<br>
#3  0x00007f1ad8d7e70a in opal_progress () at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/opal/runtime/opal_progress.c:169
<br>
#4  0x00007f1ad93a4b51 in ompi_mpi_init (argc=1, argv=0x7fff0fa9faf8,
<br>
requested=0, provided=0x7fff0fa9f968)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/runtime/ompi_mpi_init.c:641
<br>
#5  0x00007f1ad93da25e in PMPI_Init (argc=0x7fff0fa9f9cc,
<br>
argv=0x7fff0fa9f9c0) at pinit.c:84
<br>
#6  0x0000000000400a6e in main ()
<br>
<p><p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14929.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14927.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14933.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
