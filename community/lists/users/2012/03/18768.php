<?
$subject_val = "Re: [OMPI users] invalid write in opal_generic_simple_unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 15:43:29 2012" -->
<!-- isoreceived="20120314194329" -->
<!-- sent="Wed, 14 Mar 2012 12:43:25 -0700" -->
<!-- isosent="20120314194325" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] invalid write in opal_generic_simple_unpack" -->
<!-- id="269EA6E0-9411-4E59-813E-33089AB3D271_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Py04AMbMidVRsREB-F8zMWqsm8xq=XzUv9sekXBH1A6B=rFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] invalid write in opal_generic_simple_unpack<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 15:43:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Previous message:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18764.php">Patrik Jonsson: "[OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Reply:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2012, at 9:38 AM, Patrik Jonsson wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to track down a spurious segmentation fault that I'm
</span><br>
<span class="quotelev1">&gt; getting with my MPI application. I tried using valgrind, and after
</span><br>
<span class="quotelev1">&gt; suppressing the 25,000 errors in PMPI_Init_thread and associated
</span><br>
<span class="quotelev1">&gt; Init/Finalize functions,
</span><br>
<p>I haven't looked at these in a while, but the last time I looked, many/most of them came from one of several sources:
<br>
<p>- OS-bypass network mechanisms (i.e., the memory is ok, but valgrind isn't aware of it)
<br>
- weird optimizations from the compiler (particularly from non-gcc compilers)
<br>
- weird optimizations in glib or other support libraries
<br>
- Open MPI sometimes specifically has &quot;holes&quot; of uninitialized data that we memcpy (long story short: it can be faster to copy a large region that contains a hole rather than doing 2 memcopies of the fully-initialized regions)
<br>
<p>Other than what you cited below, are you seeing others?  What version of Open MPI is this?  Did you --enable-valgrind when you configured Open MPI?  This can reduce a bunch of these kinds of warnings.
<br>
<p><span class="quotelev1">&gt; I'm left with an uninitialized write in
</span><br>
<span class="quotelev1">&gt; PMPI_Isend (which I saw is not unexpected), plus this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==11541== Thread 1:
</span><br>
<span class="quotelev1">&gt; ==11541== Invalid write of size 1
</span><br>
<span class="quotelev1">&gt; ==11541==    at 0x4A09C9F: _intel_fast_memcpy (mc_replace_strmem.c:650)
</span><br>
<p>That doesn't seem right.  It's an *invalid* write, not an *uninitialized* access.  Could be serious.
<br>
<p><span class="quotelev1">&gt; ==11541==    by 0x5093447: opal_generic_simple_unpack
</span><br>
<span class="quotelev1">&gt; (opal_datatype_unpack.c:420)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x508D642: opal_convertor_unpack (opal_convertor.c:302)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x4F8FD1A: mca_pml_ob1_recv_frag_callback_match
</span><br>
<span class="quotelev1">&gt; (pml_ob1_recvfrag.c:217)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x4ED51BD: mca_btl_tcp_endpoint_recv_handler
</span><br>
<span class="quotelev1">&gt; (btl_tcp_endpoint.c:718)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x509644F: opal_event_loop (event.c:766)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x507FA50: opal_progress (opal_progress.c:189)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x4E95AFE: ompi_request_default_test (req_test.c:88)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x4EB8077: PMPI_Test (ptest.c:61)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x78C4339: boost::mpi::request::test() (in
</span><br>
<span class="quotelev1">&gt; /n/home00/pjonsson/lib/libboost_mpi.so.1
</span><br>
<span class="quotelev1">&gt; .48.0)
</span><br>
<p>It looks like this is happening in the TCP receive handler; it received some data from a TCP socket and is trying to copy it to the final, MPI-specified receive buffer.
<br>
<p>If you can attach the debugger here, per chance, it might be useful to verify that OMPI is copying to the target buffer that was assumedly specified in a prior call to MPI_IRECV (and also double check that this buffer is still valid).
<br>
<p><span class="quotelev1">&gt; ==11541==    by 0x4B5DA3:
</span><br>
<span class="quotelev1">&gt; mcrx::mpi_master&lt;test_xfer&gt;::process_handshakes()
</span><br>
<span class="quotelev1">&gt; (mpi_master_impl.h:216)
</span><br>
<span class="quotelev1">&gt; ==11541==    by 0x4B5557: mcrx::mpi_master&lt;test_xfer&gt;::run()
</span><br>
<span class="quotelev1">&gt; (mpi_master_impl.h:541)
</span><br>
<span class="quotelev1">&gt; ==11541==  Address 0x7feffb327 is just below the stack ptr.  To
</span><br>
<span class="quotelev1">&gt; suppress, use: --workaround-gcc296-
</span><br>
<span class="quotelev1">&gt; bugs=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test in question tests for a single int being sent between the
</span><br>
<span class="quotelev1">&gt; tasks. This is done using the Boost::MPI skeleton/content mechanism,
</span><br>
<span class="quotelev1">&gt; and the receive is done to an element of a std::vector, so there's no
</span><br>
<span class="quotelev1">&gt; reason it should unpack anywhere near the stack ptr. However, an int
</span><br>
<span class="quotelev1">&gt; should be size 4.
</span><br>
<p>Is there any chance that you can provide a small reproducer in C without all the Boost stuff?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Previous message:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18764.php">Patrik Jonsson: "[OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Reply:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
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
