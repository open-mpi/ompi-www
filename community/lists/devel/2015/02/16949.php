<?
$subject_val = "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 08:54:55 2015" -->
<!-- isoreceived="20150206135455" -->
<!-- sent="Fri, 06 Feb 2015 22:54:47 +0900" -->
<!-- isosent="20150206135447" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test" -->
<!-- id="ljujpv3tf8qi3ytlmir4x3qe.1423230887662_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] Master hangs in opal_fifo test" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 08:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16950.php">Ralph Castain: "[OMPI devel] PMIx support in ORTE"</a>
<li><strong>Previous message:</strong> <a href="16948.php">George Bosilca: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Reply:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Can you point me to an other project that uses 128 bits atomics ?
<br>
<p>In my tests, i noticed that the volatile keyword is (one of) the trigger of the compiler bug.
<br>
At this stage, i could not see anything wrong in ompi, plus this is working fine with recent gcc and icc, so i concluded this is an icc bug, that is now fixed, so all ompi can do is hide the symptom.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;My feeling is that the current patch hide the symptoms without addressing the real issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As a side note: The compiler incriminated in this thread, works perfectly for 128 bits atomic operations in other projects where I use atomic LIFO &amp; FIFO (but not the one from OMPI as I already raised my concerns about this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;PS: Why are there totally non-related comments about FIFO in the opal_lifo.h (starting line 61)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Feb 4, 2015 at 11:30 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Paul and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i just pushed <a href="https://github.com/open-mpi/ompi/commit/b42e3441294e9fe787fe8e9ad7403d5b8e465163">https://github.com/open-mpi/ompi/commit/b42e3441294e9fe787fe8e9ad7403d5b8e465163</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;when a buggy compiler is detected, configure now forces OPAL_HAVE_CMPXCHG16B=0
</span><br>
<span class="quotelev1">&gt;this is enough to make opal_lifo test and make check happy again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2015/02/04 17:26, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Paul, my previous email was misleading. what i really meant is the opal_fifo test works fine with icc 2013u5 (the release before 2013sp1) and icc 2013sp1u2 and later so even if the reproducer fails with icc older that 2013sp1u2, that might not impact ompi since for other reasons, the bug is not hit for example, with icc 2013u5, OPAL_HAVE_CMPXCHG16B=0 so ompi stays away from the compiler bug. Cheers, Gilles On 2015/02/04 17:15, Paul Hargrove wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Giles, Who says only 2 version are effected? I have access to 9 revisions of icc. Using your reduced case I find 7 that fail and only 2 (the latest two) that pass. Discounting icc-12 (which can't compile the test) that makes 6 versions effected by the bug (not 2). -Paul $ for x in 12.1.5.339 13.0.0.079 13.0.1.117 13.1.2.183 13.1.3.192 14.0.0.080 14.0.1.106 14.0.2.144 15.0.1.133; do module swap intel intel/$x ; echo @ Testing Intel compiler version $x; icc conftest.c &amp;&amp; ./a.out &amp;&amp; echo PASS ; done @ Testing Intel compiler version 12.1.5.339 conftest.c(10): error: identifier &quot;__int128_t&quot; is undefined __int128_t value; ^ compilation aborted for conftest.c (code 2) @ Testing Intel compiler version 13.0.0.079 a.out: conftest.c:36: main: Assertion `a.value == b.value' failed. Aborted @ Testing Intel compiler version 13.0.1.117 a.out: conftest.c:36: main: Assertion `a.value == b.value' failed. Aborted @ Testing Intel compiler version 13.1.2.183 a.out: conftest.c:36: main: Assertion `a.value == b.value' failed. Aborted @ Testing Intel compiler version 13.1.3.192 a.out: conftest.c:36: main: Assertion `a.value == b.value' failed. Aborted @ Testing Intel compiler version 14.0.0.080 a.out: conftest.c:36: main: Assertion `a.value == b.value' failed. Aborted @ Testing Intel compiler version 14.0.1.106 a.out: conftest.c:36: main: Assertion `a.value == b.value' failed. Aborted @ Testing Intel compiler version 14.0.2.144 PASS @ Testing Intel compiler version 15.0.1.133 PASS On Tue, Feb 3, 2015 at 11:45 PM, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nathan, imho, this is a compiler bug and only two versions are affected : - intel icc 14.0.0.080 (aka 2013sp1) - intel icc 14.0.1.106 (aka 2013sp1u1) /* note the bug only occurs with -O1 and higher optimization levels */ here is attached a simple reproducer a simple workaround is to configure with ac_cv_type___int128=0 Cheers, Gilles On 2015/02/04 4:17, Nathan Hjelm wrote: Thats the second report involving icc 14. I will dig into this later this week. -Nathan On Mon, Feb 02, 2015 at 11:03:41PM -0800, Paul Hargrove wrote: I have seen opal_fifo hang on 2 distinct systems + Linux/ppc32 with xlc-11.1 + Linux/x86-64 with icc-14.0.1.106 I have no explanation to offer for either hang. No &quot;weird&quot; configure options were passed to either. -Paul -- Paul H. Hargrove PHHargrove_at_[hidden] Computer Languages &amp; Systems Software (CLaSS) Group Computer Science Department Tel: +1-510-495-2352 Lawrence Berkeley National Laboratory Fax: +1-510-486-6900 _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16911.php">http://www.open-mpi.org/community/lists/devel/2015/02/16911.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16920.php">http://www.open-mpi.org/community/lists/devel/2015/02/16920.php</a> _______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16921.php">http://www.open-mpi.org/community/lists/devel/2015/02/16921.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16922.php">http://www.open-mpi.org/community/lists/devel/2015/02/16922.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16923.php">http://www.open-mpi.org/community/lists/devel/2015/02/16923.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16926.php">http://www.open-mpi.org/community/lists/devel/2015/02/16926.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16950.php">Ralph Castain: "[OMPI devel] PMIx support in ORTE"</a>
<li><strong>Previous message:</strong> <a href="16948.php">George Bosilca: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Reply:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
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
