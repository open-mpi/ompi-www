<?
$subject_val = "[OMPI users] invalid write in opal_generic_simple_unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 12:39:16 2012" -->
<!-- isoreceived="20120314163916" -->
<!-- sent="Wed, 14 Mar 2012 12:38:52 -0400" -->
<!-- isosent="20120314163852" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="[OMPI users] invalid write in opal_generic_simple_unpack" -->
<!-- id="CA+Py04AMbMidVRsREB-F8zMWqsm8xq=XzUv9sekXBH1A6B=rFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] invalid write in opal_generic_simple_unpack<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 12:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18765.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Reply:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to track down a spurious segmentation fault that I'm
<br>
getting with my MPI application. I tried using valgrind, and after
<br>
suppressing the 25,000 errors in PMPI_Init_thread and associated
<br>
Init/Finalize functions, I'm left with an uninitialized write in
<br>
PMPI_Isend (which I saw is not unexpected), plus this:
<br>
<p>==11541== Thread 1:
<br>
==11541== Invalid write of size 1
<br>
==11541==    at 0x4A09C9F: _intel_fast_memcpy (mc_replace_strmem.c:650)
<br>
==11541==    by 0x5093447: opal_generic_simple_unpack
<br>
(opal_datatype_unpack.c:420)
<br>
==11541==    by 0x508D642: opal_convertor_unpack (opal_convertor.c:302)
<br>
==11541==    by 0x4F8FD1A: mca_pml_ob1_recv_frag_callback_match
<br>
(pml_ob1_recvfrag.c:217)
<br>
==11541==    by 0x4ED51BD: mca_btl_tcp_endpoint_recv_handler
<br>
(btl_tcp_endpoint.c:718)
<br>
==11541==    by 0x509644F: opal_event_loop (event.c:766)
<br>
==11541==    by 0x507FA50: opal_progress (opal_progress.c:189)
<br>
==11541==    by 0x4E95AFE: ompi_request_default_test (req_test.c:88)
<br>
==11541==    by 0x4EB8077: PMPI_Test (ptest.c:61)
<br>
==11541==    by 0x78C4339: boost::mpi::request::test() (in
<br>
/n/home00/pjonsson/lib/libboost_mpi.so.1
<br>
.48.0)
<br>
==11541==    by 0x4B5DA3:
<br>
mcrx::mpi_master&lt;test_xfer&gt;::process_handshakes()
<br>
(mpi_master_impl.h:216)
<br>
==11541==    by 0x4B5557: mcrx::mpi_master&lt;test_xfer&gt;::run()
<br>
(mpi_master_impl.h:541)
<br>
==11541==  Address 0x7feffb327 is just below the stack ptr.  To
<br>
suppress, use: --workaround-gcc296-
<br>
bugs=yes
<br>
<p>The test in question tests for a single int being sent between the
<br>
tasks. This is done using the Boost::MPI skeleton/content mechanism,
<br>
and the receive is done to an element of a std::vector, so there's no
<br>
reason it should unpack anywhere near the stack ptr. However, an int
<br>
should be size 4.
<br>
<p>This looks suspicious given that the segfault would usually happen in
<br>
one of the calls to PMPI_Test. If somehow the data is unpacked to
<br>
somewhere around the stack pointer, that certainly seems like a
<br>
possible cause.
<br>
<p>If anyone can give me some ideas for what could cause this and how to
<br>
track it down, I'd appreciate it. I'm running out of ideas here.
<br>
<p>Regards,
<br>
<p>/Patrik J.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18765.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Reply:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
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
