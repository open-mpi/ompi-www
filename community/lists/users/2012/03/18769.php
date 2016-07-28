<?
$subject_val = "Re: [OMPI users] invalid write in opal_generic_simple_unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 16:07:05 2012" -->
<!-- isoreceived="20120314200705" -->
<!-- sent="Wed, 14 Mar 2012 16:06:41 -0400" -->
<!-- isosent="20120314200641" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="Re: [OMPI users] invalid write in opal_generic_simple_unpack" -->
<!-- id="CA+Py04Cq-RYLVja7sSi53B-ghGVhR-MOJ=f3qvytdNUyauwPFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="269EA6E0-9411-4E59-813E-33089AB3D271_at_cisco.com" -->
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
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 16:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Previous message:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Reply:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 14, 2012 at 3:43 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mar 14, 2012, at 9:38 AM, Patrik Jonsson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to track down a spurious segmentation fault that I'm
</span><br>
<span class="quotelev2">&gt;&gt; getting with my MPI application. I tried using valgrind, and after
</span><br>
<span class="quotelev2">&gt;&gt; suppressing the 25,000 errors in PMPI_Init_thread and associated
</span><br>
<span class="quotelev2">&gt;&gt; Init/Finalize functions,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't looked at these in a while, but the last time I looked, many/most of them came from one of several sources:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OS-bypass network mechanisms (i.e., the memory is ok, but valgrind isn't aware of it)
</span><br>
<span class="quotelev1">&gt; - weird optimizations from the compiler (particularly from non-gcc compilers)
</span><br>
<span class="quotelev1">&gt; - weird optimizations in glib or other support libraries
</span><br>
<span class="quotelev1">&gt; - Open MPI sometimes specifically has &quot;holes&quot; of uninitialized data that we memcpy (long story short: it can be faster to copy a large region that contains a hole rather than doing 2 memcopies of the fully-initialized regions)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than what you cited below, are you seeing others? &#160;What version of Open MPI is this? &#160;Did you --enable-valgrind when you configured Open MPI? &#160;This can reduce a bunch of these kinds of warnings.
</span><br>
<p>I didn't install OpenMPI myself, but I doubt it was configured with this.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm left with an uninitialized write in
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Isend (which I saw is not unexpected), plus this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== Thread 1:
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== Invalid write of size 1
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;at 0x4A09C9F: _intel_fast_memcpy (mc_replace_strmem.c:650)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That doesn't seem right. &#160;It's an *invalid* write, not an *uninitialized* access. &#160;Could be serious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x5093447: opal_generic_simple_unpack
</span><br>
<span class="quotelev2">&gt;&gt; (opal_datatype_unpack.c:420)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x508D642: opal_convertor_unpack (opal_convertor.c:302)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x4F8FD1A: mca_pml_ob1_recv_frag_callback_match
</span><br>
<span class="quotelev2">&gt;&gt; (pml_ob1_recvfrag.c:217)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x4ED51BD: mca_btl_tcp_endpoint_recv_handler
</span><br>
<span class="quotelev2">&gt;&gt; (btl_tcp_endpoint.c:718)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x509644F: opal_event_loop (event.c:766)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x507FA50: opal_progress (opal_progress.c:189)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x4E95AFE: ompi_request_default_test (req_test.c:88)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x4EB8077: PMPI_Test (ptest.c:61)
</span><br>
<span class="quotelev2">&gt;&gt; ==11541== &#160; &#160;by 0x78C4339: boost::mpi::request::test() (in
</span><br>
<span class="quotelev2">&gt;&gt; /n/home00/pjonsson/lib/libboost_mpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt; .48.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like this is happening in the TCP receive handler; it received some data from a TCP socket and is trying to copy it to the final, MPI-specified receive buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can attach the debugger here, per chance, it might be useful to verify that OMPI is copying to the target buffer that was assumedly specified in a prior call to MPI_IRECV (and also double check that this buffer is still valid).
</span><br>
<p>The problem was that there were many sends and this error was
<br>
spurious, so it was hard to know whether I stopped in the right
<br>
unpack.
<br>
<p>I think I tracked it down, though. The problem was in the boost.mpi
<br>
&quot;skeleton/content&quot; feature (which has bitten me in the past).
<br>
Essentially, any serialization operator that uses a temporary will
<br>
silently give incorrect results when using skeleton/content, because
<br>
the get_content operator captures the location of the temporary when
<br>
building the custom MPI data type, which then causes the data to get
<br>
deposited in some invalid location.
<br>
<p>There is scant documentation of this feature and the above conclusion
<br>
is my own, but I'm pretty sure it's correct. Even the built-in boost
<br>
serializations aren't safe. Serializing an enum, for example, uses a
<br>
temporary and will thus not work correctly with these operators.
<br>
<p><span class="quotelev1">&gt; Is there any chance that you can provide a small reproducer in C without all the Boost stuff?
</span><br>
<p>As is clear from the above, no. The problem was in my code and boost.
<br>
<p>I do have a more general question, though: Is there a good way to back
<br>
out the location of the request object if I stop deep in the bowels of
<br>
MPI. As I understand it, just because the user-level call is a certain
<br>
MPI_Test doesn't mean that under the hood it's working on other
<br>
requests, but this nonlocality makes it difficult to track down
<br>
errors.
<br>
<p>Thanks,
<br>
<p>/Patrik
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Previous message:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18768.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>Reply:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
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
