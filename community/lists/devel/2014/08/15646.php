<?
$subject_val = "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 00:06:08 2014" -->
<!-- isoreceived="20140814040608" -->
<!-- sent="Thu, 14 Aug 2014 00:06:06 -0400" -->
<!-- isosent="20140814040606" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics" -->
<!-- id="CAMJJpkUkc9QAzvA4Ae+-i5jo4kiFh9Qk0gD3nvviNX9agGy=SQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15tORKsEiU2FnowuB3pdvD8MUyD0yN_+mFAri5r0VL=sQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 00:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15647.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>In reply to:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15648.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Reply:</strong> <a href="15648.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The atomic.h file should also be trimmed of the SPARC relique.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>Index: opal/include/opal/sys/atomic.h
<br>
===================================================================
<br>
--- opal/include/opal/sys/atomic.h (revision 32531)
<br>
+++ opal/include/opal/sys/atomic.h (working copy)
<br>
@@ -162,8 +162,6 @@
<br>
&nbsp;#include &quot;opal/sys/powerpc/atomic.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_POWERPC64
<br>
&nbsp;#include &quot;opal/sys/powerpc/atomic.h&quot;
<br>
-#elif OPAL_ASSEMBLY_ARCH == OMPI_SPARC
<br>
-#include &quot;opal/sys/sparc/atomic.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_SPARCV9_32
<br>
&nbsp;#include &quot;opal/sys/sparcv9/atomic.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_SPARCV9_64
<br>
<p><p>On Thu, Aug 14, 2014 at 12:01 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Fix confirmed using the nightly tarball (v1.8rc5r32531).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2014 at 6:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Paul - fixed in r32530
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 13, 2014 at 2:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When configured with --enable-osx-builtin-atomics
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC       asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/Paul/OMPI/openmpi-1.8.2rc4-macos10.8-x86-clang-atomics/openmpi-1.8.2rc4/opal/asm/asm.c:21:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/Paul/OMPI/openmpi-1.8.2rc4-macos10.8-x86-clang-atomics/openmpi-1.8.2rc4/opal/include/opal/sys/atomic.h:145:10:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fatal error: 'opal/sys/osx/atomic.h' file not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/sys/osx/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 error generated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I reported the same issue to George in the trunk last week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I am 95% certain one just needs to cmr r32390 (commit msg == 'Dont
</span><br>
<span class="quotelev3">&gt;&gt;&gt; miss the Os X atomics on &quot;make dist&quot;')
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15642.php">http://www.open-mpi.org/community/lists/devel/2014/08/15642.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15644.php">http://www.open-mpi.org/community/lists/devel/2014/08/15644.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15645.php">http://www.open-mpi.org/community/lists/devel/2014/08/15645.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15647.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>In reply to:</strong> <a href="15645.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15648.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Reply:</strong> <a href="15648.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
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
