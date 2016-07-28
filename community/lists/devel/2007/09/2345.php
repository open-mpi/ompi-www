<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 11:29:04 2007" -->
<!-- isoreceived="20070920152904" -->
<!-- sent="Thu, 20 Sep 2007 11:28:53 -0400" -->
<!-- isosent="20070920152853" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Malloc segfaulting?" -->
<!-- id="DC14A2E1-133E-466B-B5A1-9B43D2AC4997_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46F26F4A.7070502_at_cs.indiana.edu" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 11:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2346.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually means something have been freed twice.
<br>
<p>Aurelien
<br>
<p>Le 20 sept. 07 &#224; 09:02, Tim Prins a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our nightly runs with the trunk I have started seeing cases  
</span><br>
<span class="quotelev1">&gt; where we
</span><br>
<span class="quotelev1">&gt; appear to be segfaulting within/below malloc. Below is a typical  
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this appears to only happen on the trunk, when we use  
</span><br>
<span class="quotelev1">&gt; openib,
</span><br>
<span class="quotelev1">&gt; and are in 32 bit mode. It seems to happen randomly at a very low
</span><br>
<span class="quotelev1">&gt; frequency (59 out of about 60,000 32 bit openib runs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could be a problem with our machine, and has showed up since I
</span><br>
<span class="quotelev1">&gt; started testing 32bit ofed 10 days ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, just curious if anyone had any ideas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [odin011:04084] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [odin011:04084] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [odin011:04084] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [odin011:04084] Failing at address: 0xf7cbea68
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 1]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/libopen-pal.so.0(malloc+0x82)
</span><br>
<span class="quotelev1">&gt; [0xf7e882d2]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 2]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/libopen-rte.so.0(orte_hash_table_set_proc+0xfa)
</span><br>
<span class="quotelev1">&gt; [0xf7ec57aa]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 3]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_peer_lookup+0x11d)
</span><br>
<span class="quotelev1">&gt; [0xf7cbcebd]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 4]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_send_nb+0x1f)
</span><br>
<span class="quotelev1">&gt; [0xf7cbfccf]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 5]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_rml_oob.so(orte_rml_oob_send_buffer_nb 
</span><br>
<span class="quotelev1">&gt; +0x25a)
</span><br>
<span class="quotelev1">&gt; [0xf7cddfda]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 6]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0xf7c145f1]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 7]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0xf7c146e9]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 8]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_openib_endpoint_send+0x345)
</span><br>
<span class="quotelev1">&gt; [0xf7c0e155]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [ 9]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_btl_openib.so(mca_btl_openib_send+0x3e)
</span><br>
<span class="quotelev1">&gt; [0xf7c0718e]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [10]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_request_start_copy+0x17b)
</span><br>
<span class="quotelev1">&gt; [0xf7c3c4bb]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [11]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x27c)
</span><br>
<span class="quotelev1">&gt; [0xf7c35adc]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [12]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_gather_intra_basic_linear+0x65)
</span><br>
<span class="quotelev1">&gt; [0xf7bc72a5]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [13]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_gather_intra_dec_fixed+0x16a)
</span><br>
<span class="quotelev1">&gt; [0xf7bba2aa]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [14]
</span><br>
<span class="quotelev1">&gt; /san/homedirs/mpiteam/mtt-runs/odin/20070919-Nightly/pb_4/installs/ 
</span><br>
<span class="quotelev1">&gt; eiso/install/lib/libmpi.so.0(MPI_Gather+0x18c)
</span><br>
<span class="quotelev1">&gt; [0xf7f62b6c]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [15] src/MPI_Gather_c(main+0x5fd) [0x804a101]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [16] /lib/tls/libc.so.6(__libc_start_main+0xd3)  
</span><br>
<span class="quotelev1">&gt; [0xf7d0fde3]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] [17] src/MPI_Gather_c [0x8049a81]
</span><br>
<span class="quotelev1">&gt; [odin011:04084] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2346.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
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
