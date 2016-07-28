<?
$subject_val = "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 21:16:26 2014" -->
<!-- isoreceived="20140814011626" -->
<!-- sent="Wed, 13 Aug 2014 18:16:25 -0700" -->
<!-- isosent="20140814011625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics" -->
<!-- id="CAMD57ocN_HgNvfs11020atpb9ENRos3Fnz1qs7CejG4NN+uFrw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14PWfcR1DtrMc6b19BwydtRTaVrsmvdz_Ri=xxDPPGigw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 21:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15643.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15642.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Reply:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul - fixed in r32530
<br>
<p><p><p>On Wed, Aug 13, 2014 at 2:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When configured with --enable-osx-builtin-atomics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt;   CC       asm.lo
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /Users/Paul/OMPI/openmpi-1.8.2rc4-macos10.8-x86-clang-atomics/openmpi-1.8.2rc4/opal/asm/asm.c:21:
</span><br>
<span class="quotelev1">&gt; /Users/Paul/OMPI/openmpi-1.8.2rc4-macos10.8-x86-clang-atomics/openmpi-1.8.2rc4/opal/include/opal/sys/atomic.h:145:10:
</span><br>
<span class="quotelev1">&gt; fatal error: 'opal/sys/osx/atomic.h' file not found
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/osx/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt;          ^
</span><br>
<span class="quotelev1">&gt; 1 error generated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I reported the same issue to George in the trunk last week.
</span><br>
<span class="quotelev1">&gt; So, I am 95% certain one just needs to cmr r32390 (commit msg == 'Dont
</span><br>
<span class="quotelev1">&gt; miss the Os X atomics on &quot;make dist&quot;')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15642.php">http://www.open-mpi.org/community/lists/devel/2014/08/15642.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15643.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15642.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Reply:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
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
