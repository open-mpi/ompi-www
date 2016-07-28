<?
$subject_val = "Re: [OMPI devel] Master hangs in opal_fifo test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 02:03:54 2015" -->
<!-- isoreceived="20150206070354" -->
<!-- sent="Fri, 6 Feb 2015 02:03:52 -0500" -->
<!-- isosent="20150206070352" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master hangs in opal_fifo test" -->
<!-- id="CAMJJpkUVXh9U0h4vENr8bgtup2TTReS9T1JeLRfeeTjoEuAAeQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54D2F1D2.40500_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master hangs in opal_fifo test<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 02:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16949.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>In reply to:</strong> <a href="16926.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My feeling is that the current patch hide the symptoms without addressing
<br>
the real issue.
<br>
<p>As a side note: The compiler incriminated in this thread, works perfectly
<br>
for 128 bits atomic operations in other projects where I use atomic LIFO &amp;
<br>
FIFO (but not the one from OMPI as I already raised my concerns about this).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: Why are there totally non-related comments about FIFO in the
<br>
opal_lifo.h (starting line 61)?
<br>
<p>On Wed, Feb 4, 2015 at 11:30 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Paul and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just pushed
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/b42e3441294e9fe787fe8e9ad7403d5b8e465163">https://github.com/open-mpi/ompi/commit/b42e3441294e9fe787fe8e9ad7403d5b8e465163</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when a buggy compiler is detected, configure now forces
</span><br>
<span class="quotelev1">&gt; OPAL_HAVE_CMPXCHG16B=0
</span><br>
<span class="quotelev1">&gt; this is enough to make opal_lifo test and make check happy again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015/02/04 17:26, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my previous email was misleading.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what i really meant is the opal_fifo test works fine with icc 2013u5
</span><br>
<span class="quotelev1">&gt; (the release before 2013sp1) and
</span><br>
<span class="quotelev1">&gt; icc 2013sp1u2 and later
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so even if the reproducer fails with icc older that 2013sp1u2, that
</span><br>
<span class="quotelev1">&gt; might not impact ompi
</span><br>
<span class="quotelev1">&gt; since for other reasons, the bug is not hit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, with icc 2013u5, OPAL_HAVE_CMPXCHG16B=0 so ompi stays away
</span><br>
<span class="quotelev1">&gt; from the compiler bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015/02/04 17:15, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Giles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Who says only 2 version are effected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have access to 9 revisions of icc.
</span><br>
<span class="quotelev1">&gt; Using your reduced case I find 7 that fail and only 2 (the latest two) that
</span><br>
<span class="quotelev1">&gt; pass.
</span><br>
<span class="quotelev1">&gt; Discounting icc-12 (which can't compile the test) that makes 6 versions
</span><br>
<span class="quotelev1">&gt; effected by the bug (not 2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ for x in 12.1.5.339 13.0.0.079 13.0.1.117 13.1.2.183 13.1.3.192
</span><br>
<span class="quotelev1">&gt; 14.0.0.080 14.0.1.106 14.0.2.144 15.0.1.133; do module swap intel intel/$x
</span><br>
<span class="quotelev1">&gt; ; echo @ Testing Intel compiler version $x; icc conftest.c &amp;&amp; ./a.out &amp;&amp;
</span><br>
<span class="quotelev1">&gt; echo PASS ; done
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 12.1.5.339
</span><br>
<span class="quotelev1">&gt; conftest.c(10): error: identifier &quot;__int128_t&quot; is undefined
</span><br>
<span class="quotelev1">&gt;       __int128_t value;
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 13.0.0.079
</span><br>
<span class="quotelev1">&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 13.0.1.117
</span><br>
<span class="quotelev1">&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 13.1.2.183
</span><br>
<span class="quotelev1">&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 13.1.3.192
</span><br>
<span class="quotelev1">&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 14.0.0.080
</span><br>
<span class="quotelev1">&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 14.0.1.106
</span><br>
<span class="quotelev1">&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 14.0.2.144
</span><br>
<span class="quotelev1">&gt; PASS
</span><br>
<span class="quotelev1">&gt; @ Testing Intel compiler version 15.0.1.133
</span><br>
<span class="quotelev1">&gt; PASS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 11:45 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; imho, this is a compiler bug and only two versions are affected :
</span><br>
<span class="quotelev1">&gt; - intel icc 14.0.0.080 (aka 2013sp1)
</span><br>
<span class="quotelev1">&gt; - intel icc 14.0.1.106 (aka 2013sp1u1)
</span><br>
<span class="quotelev1">&gt; /* note the bug only occurs with -O1 and higher optimization levels */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached a simple reproducer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a simple workaround is to configure with ac_cv_type___int128=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015/02/04 4:17, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thats the second report involving icc 14. I will dig into this later
</span><br>
<span class="quotelev1">&gt; this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 02, 2015 at 11:03:41PM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have seen opal_fifo hang on 2 distinct systems
</span><br>
<span class="quotelev1">&gt;     + Linux/ppc32 with xlc-11.1
</span><br>
<span class="quotelev1">&gt;     + Linux/x86-64 with icc-14.0.1.106
</span><br>
<span class="quotelev1">&gt;    I have no explanation to offer for either hang.
</span><br>
<span class="quotelev1">&gt;    No &quot;weird&quot; configure options were passed to either.
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16911.php">http://www.open-mpi.org/community/lists/devel/2015/02/16911.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16920.php">http://www.open-mpi.org/community/lists/devel/2015/02/16920.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/02/16921.php">http://www.open-mpi.org/community/lists/devel/2015/02/16921.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16922.php">http://www.open-mpi.org/community/lists/devel/2015/02/16922.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16923.php">http://www.open-mpi.org/community/lists/devel/2015/02/16923.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16926.php">http://www.open-mpi.org/community/lists/devel/2015/02/16926.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16949.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16947.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>In reply to:</strong> <a href="16926.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
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
