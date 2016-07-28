<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 09:02:03 2007" -->
<!-- isoreceived="20070920130203" -->
<!-- sent="Thu, 20 Sep 2007 09:02:02 -0400" -->
<!-- isosent="20070920130202" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Malloc segfaulting?" -->
<!-- id="46F26F4A.7070502_at_cs.indiana.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 09:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>In our nightly runs with the trunk I have started seeing cases where we 
<br>
appear to be segfaulting within/below malloc. Below is a typical output.
<br>
<p>Note that this appears to only happen on the trunk, when we use openib, 
<br>
and are in 32 bit mode. It seems to happen randomly at a very low 
<br>
frequency (59 out of about 60,000 32 bit openib runs).
<br>
<p>This could be a problem with our machine, and has showed up since I 
<br>
started testing 32bit ofed 10 days ago.
<br>
<p>Anyways, just curious if anyone had any ideas.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p><pre>
--
[odin011:04084] *** Process received signal ***
[odin011:04084] Signal: Segmentation fault (11)
[odin011:04084] Signal code: Invalid permissions (2)
[odin011:04084] Failing at address: 0xf7cbea68
[odin011:04084] [ 0] [0xffffe600]
[odin011:04084] [ 1]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/libopen-pal.so.0(malloc+0x82)
[0xf7e882d2]
[odin011:04084] [ 2]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/libopen-rte.so.0(orte_hash_table_set_proc+0xfa)
[0xf7ec57aa]
[odin011:04084] [ 3]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_peer_lookup+0x11d)
[0xf7cbcebd]
[odin011:04084] [ 4]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_send_nb+0x1f)
[0xf7cbfccf]
[odin011:04084] [ 5]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_rml_oob.so(orte_rml_oob_send_buffer_nb+0x25a)
[0xf7cddfda]
[odin011:04084] [ 6]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_btl_openib.so
[0xf7c145f1]
[odin011:04084] [ 7]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_btl_openib.so
[0xf7c146e9]
[odin011:04084] [ 8]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_endpoint_send+0x345)
[0xf7c0e155]
[odin011:04084] [ 9]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_send+0x3e)
[0xf7c0718e]
[odin011:04084] [10]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x17b)
[0xf7c3c4bb]
[odin011:04084] [11]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x27c)
[0xf7c35adc]
[odin011:04084] [12]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_gather_intra_basic_linear+0x65)
[0xf7bc72a5]
[odin011:04084] [13]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_gather_intra_dec_fixed+0x16a)
[0xf7bba2aa]
[odin011:04084] [14]
/san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/eiso/install/lib/libmpi.so.0(MPI_Gather+0x18c)
[0xf7f62b6c]
[odin011:04084] [15] src/MPI_Gather_c(main+0x5fd) [0x804a101]
[odin011:04084] [16] /lib/tls/libc.so.6(__libc_start_main+0xd3) [0xf7d0fde3]
[odin011:04084] [17] src/MPI_Gather_c [0x8049a81]
[odin011:04084] *** End of error message ***
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
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
