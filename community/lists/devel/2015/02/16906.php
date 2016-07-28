<?
$subject_val = "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 00:12:38 2015" -->
<!-- isoreceived="20150203051238" -->
<!-- sent="Mon, 2 Feb 2015 21:12:36 -0800" -->
<!-- isosent="20150203051236" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared" -->
<!-- id="CAMD57ofp1TkoQHNmSoX1BhS0xyje-YV7iwD1bN8fpbNLsnLeeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14p6w1Teavy-63KDzqNFAZY10B4+9RwfGH=y9O6ztMoBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 00:12:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16907.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>In reply to:</strong> <a href="16899.php">Paul Hargrove: "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scratching my head over this one - I can replicate it, but need to think a
<br>
bit on how to solve it.
<br>
<p><p>On Mon, Feb 2, 2015 at 7:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a Mac OSX 10.8 system, where cc is clang.
</span><br>
<span class="quotelev1">&gt; I have no problems with a default build from the current master tarball.
</span><br>
<span class="quotelev1">&gt; However, a static-only build leads to a link failure on opal_wrapper.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configured with
</span><br>
<span class="quotelev1">&gt;   --prefix=... --enable-debug CC=cc CXX=c++ --enable-static
</span><br>
<span class="quotelev1">&gt; --disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failing portion of &quot;make V=1&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link cc  -g -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing   -export-dynamic    -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -g -finline-functions -fno-strict-aliasing -o
</span><br>
<span class="quotelev1">&gt; opal_wrapper opal_wrapper.o  ../../../opal/.libs/libopen-pal.a -lm
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_pmix&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _opal_get_proc_hostname in libopen-pal.a(proc.o)
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; clang: error: linker command failed with exit code 1 (use -v to see
</span><br>
<span class="quotelev1">&gt; invocation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16899.php">http://www.open-mpi.org/community/lists/devel/2015/02/16899.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16906/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16907.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>In reply to:</strong> <a href="16899.php">Paul Hargrove: "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<!-- nextthread="start" -->
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
