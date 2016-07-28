<?
$subject_val = "[OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 23:25:23 2012" -->
<!-- isoreceived="20121031032523" -->
<!-- sent="Tue, 30 Oct 2012 20:25:18 -0700" -->
<!-- isosent="20121031032518" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}" -->
<!-- id="CAAvDA14KDHh7EtK8_GxfP=shqa0g620tjTYwam4vZzZ7bSbEdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 23:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11695.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - build failure w/ gcc-3.4.6/x86-64 (regression)"</a>
<li><strong>Previous message:</strong> <a href="11693.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My OpenBSD-5.1 testers for both i386 and amd64 are failing the same tests
<br>
as I reported a few minutes ago with respect to FreeBSD-6.3.
<br>
<p>Unlike FreeBSD-6.3, this is &quot;modern&quot; system with OpenBSD 5.1 having been
<br>
released Feb 2012.
<br>
<p>On both platforms I have builds w/ gcc-4.2.1 and with llvm-gcc-4.2.1.
<br>
All 4 combinations of arch/compiler SEGV on the same 3 datatype tests.
<br>
<p>UNLIKE the FreeBSD-6.3 failures, the backtraces (though still numeric) have
<br>
only a depth of 10 (at least in the cases I sampled at random in my limited
<br>
time).
<br>
<p>FWIW: NetBSD-5.1 looks fine on both i386 and amd64 h/w.
<br>
<p>-Paul
<br>
<p>On Tue, Oct 30, 2012 at 8:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On my FreeBSD-6.3/amd64 platform I see &quot;make check&quot; failing 3 tests under
</span><br>
<span class="quotelev1">&gt; test/datatype (see below). Of course &quot;make&quot; stops after that, making it
</span><br>
<span class="quotelev1">&gt; possible that additional tests might fail later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, my records do show that the v1.5 branch was just fine on this
</span><br>
<span class="quotelev1">&gt; machine, as was the trunk on or about Feb 21, 2012.  So, unless the failing
</span><br>
<span class="quotelev1">&gt; tests are new THIS IS A REGRESSION.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Newer FreeBSD-7.2/amd64, FreeBSD-8.2/amd64 and FreeBSD-9.0/amd64 are all
</span><br>
<span class="quotelev1">&gt; OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The failures:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep -B1 ^FAIL $HOME/OMPI/openmpi-1.7rc5-freebsd6-amd64/LOG/check.log
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; FAIL: position
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; FAIL: ddt_test
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; FAIL: ddt_raw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using gdb to get a backtrace from the generated core files shows a stack
</span><br>
<span class="quotelev1">&gt; over 1300 frames deep, which I suspect is either evidence of a corrupted
</span><br>
<span class="quotelev1">&gt; stack (buffer overflow?) or of infinite recursion.  There are no symbols
</span><br>
<span class="quotelev1">&gt; with the backtrace, just numeric addresses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a rather old system
</span><br>
<span class="quotelev1">&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.4.6 [FreeBSD] 20060305
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 30, 2012 at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have posted the next release candidate (rc5) for the 1.7.0 release in
</span><br>
<span class="quotelev2">&gt;&gt; the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please put it thru the wringer to help us validate it prior to release
</span><br>
<span class="quotelev2">&gt;&gt; later this month. We think this looks pretty complete, pending someone
</span><br>
<span class="quotelev2">&gt;&gt; finding a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11695.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - build failure w/ gcc-3.4.6/x86-64 (regression)"</a>
<li><strong>Previous message:</strong> <a href="11693.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64"</a>
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
