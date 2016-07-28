<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 02:21:37 2014" -->
<!-- isoreceived="20140801062137" -->
<!-- sent="Fri, 1 Aug 2014 02:21:34 -0400" -->
<!-- isosent="20140801062134" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="CAMJJpkUi96vuhUz215COptTd17h9iOitRU0wsnC19S3JMp5=Xg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15xXzMkqqD2pBSXfXFWfJ+AuOzk8CenF0hKo75FWgQCFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 02:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15435.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>Previous message:</strong> <a href="15433.php">Ralph Castain: "[OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15420.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15445.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15445.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case someone else want to play with the new atomics here is the most
<br>
up-to-date patch.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Thu, Jul 31, 2014 at 10:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a failure with your patch applied on PPC64/Linux and gcc-4.4.6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/BLD/opal/asm'
</span><br>
<span class="quotelev1">&gt;   CC       asm.lo
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/asm/asm.c:21:0:
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/include/opal/sys/atomic.h:374:9:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'opal_atomic_cmpset_rel_64'
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/include/opal/sys/powerpc/atomic.h:214:19:
</span><br>
<span class="quotelev1">&gt; note: previous definition of 'opal_atomic_cmpset_rel_64' was here
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/include/opal/sys/atomic.h:374:9:
</span><br>
<span class="quotelev1">&gt; warning: 'opal_atomic_cmpset_rel_64' used but never defined [enabled by
</span><br>
<span class="quotelev1">&gt; default]
</span><br>
<span class="quotelev1">&gt; make[2]: *** [asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: the patch applied cleanly to trunk except the portion
</span><br>
<span class="quotelev1">&gt; changing opal/include/opal/sys/osx/atomic.h, which does not exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is
</span><br>
<span class="quotelev2">&gt;&gt; needed for these less common architectures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 7:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul, I know you have a pretty diverse range computers. Can you try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compile and run a &#226;&#128;&#156;make check&#226;&#128;&#157; with the following patch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subset of those is still supported).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add SPARC (v8plus and v9) to that list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Future Technologies Group
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15411.php">http://www.open-mpi.org/community/lists/devel/2014/07/15411.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15412.php">http://www.open-mpi.org/community/lists/devel/2014/07/15412.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15420.php">http://www.open-mpi.org/community/lists/devel/2014/07/15420.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15434/atomics.patch">atomics.patch</a>
</ul>
<!-- attachment="atomics.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15435.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>Previous message:</strong> <a href="15433.php">Ralph Castain: "[OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15420.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15445.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15445.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
