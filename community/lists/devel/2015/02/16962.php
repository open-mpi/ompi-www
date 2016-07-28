<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 14:39:54 2015" -->
<!-- isoreceived="20150209193954" -->
<!-- sent="Mon, 9 Feb 2015 14:39:52 -0500" -->
<!-- isosent="20150209193952" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test" -->
<!-- id="CAMJJpkUcRYOR6Z9N0aRmPcqbWMsh5Um+LXiE+UtLg4m-B99tCQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dd5101yrpaqgf29dtll2a789.1423275120860_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 14:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16961.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>In reply to:</strong> <a href="16959.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 6, 2015 at 9:12 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot acces parsec : http error 403 :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Our webserver was down over the weekend. Please try again.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand your point of view.
</span><br>
<span class="quotelev1">&gt; Back to the opal_lifo test, and if i remember correctly, it hangs in the
</span><br>
<span class="quotelev1">&gt; non multi threaded part : the very first pop loops forever since cas always
</span><br>
<span class="quotelev1">&gt; fails in comparing values that are equal indeed.
</span><br>
<span class="quotelev1">&gt; Though there is a possibility the problem comes from ompi, and we are just
</span><br>
<span class="quotelev1">&gt; lucky it works with recent icc, i would not go &quot;all in&quot; with this ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And as you pointed, even if the problem does come from the compiler, that
</span><br>
<span class="quotelev1">&gt; does not mean ompi algo are necessarily correct.
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
<span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 6, 2015 at 8:54 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you point me to an other project that uses 128 bits atomics ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/parsec/">http://icl.cs.utk.edu/parsec/</a>. It heavily uses lock-free structures, and
</span><br>
<span class="quotelev1">&gt; the 128 bits atomics are the safest and fastest way to implement them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my tests, i noticed that the volatile keyword is (one of) the trigger
</span><br>
<span class="quotelev2">&gt;&gt; of the compiler bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I usually use it for the location to be atomically changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this stage, i could not see anything wrong in ompi, plus this is
</span><br>
<span class="quotelev2">&gt;&gt; working fine with recent gcc and icc, so i concluded this is an icc bug,
</span><br>
<span class="quotelev2">&gt;&gt; that is now fixed, so all ompi can do is hide the symptom.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These issues are pretty tricky to trigger, we need special race conditions
</span><br>
<span class="quotelev1">&gt; while manipulating pointers. There are tens of papers about how to
</span><br>
<span class="quotelev1">&gt; correctly implement FIFOs with CAS2, and even after peer reviews some of
</span><br>
<span class="quotelev1">&gt; them turned out to be incorrect. What I am saying is that we are quick to
</span><br>
<span class="quotelev1">&gt; blame these failures on the icc compiler, while we have no formal proof
</span><br>
<span class="quotelev1">&gt; that the FIFO algorithm in Open MPI is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My feeling is that the current patch hide the symptoms without addressing
</span><br>
<span class="quotelev2">&gt;&gt; the real issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a side note: The compiler incriminated in this thread, works perfectly
</span><br>
<span class="quotelev2">&gt;&gt; for 128 bits atomic operations in other projects where I use atomic LIFO &amp;
</span><br>
<span class="quotelev2">&gt;&gt; FIFO (but not the one from OMPI as I already raised my concerns about this).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: Why are there totally non-related comments about FIFO in the
</span><br>
<span class="quotelev2">&gt;&gt; opal_lifo.h (starting line 61)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 4, 2015 at 11:30 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul and all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i just pushed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/b42e3441294e9fe787fe8e9ad7403d5b8e465163">https://github.com/open-mpi/ompi/commit/b42e3441294e9fe787fe8e9ad7403d5b8e465163</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when a buggy compiler is detected, configure now forces
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_HAVE_CMPXCHG16B=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is enough to make opal_lifo test and make check happy again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2015/02/04 17:26, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my previous email was misleading.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what i really meant is the opal_fifo test works fine with icc 2013u5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (the release before 2013sp1) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icc 2013sp1u2 and later
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so even if the reproducer fails with icc older that 2013sp1u2, that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might not impact ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since for other reasons, the bug is not hit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example, with icc 2013u5, OPAL_HAVE_CMPXCHG16B=0 so ompi stays away
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the compiler bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2015/02/04 17:15, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Giles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Who says only 2 version are effected?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have access to 9 revisions of icc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using your reduced case I find 7 that fail and only 2 (the latest two) that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Discounting icc-12 (which can't compile the test) that makes 6 versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; effected by the bug (not 2).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ for x in 12.1.5.339 13.0.0.079 13.0.1.117 13.1.2.183 13.1.3.192
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14.0.0.080 14.0.1.106 14.0.2.144 15.0.1.133; do module swap intel intel/$x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ; echo @ Testing Intel compiler version $x; icc conftest.c &amp;&amp; ./a.out &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo PASS ; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 12.1.5.339
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.c(10): error: identifier &quot;__int128_t&quot; is undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       __int128_t value;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 13.0.0.079
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 13.0.1.117
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 13.1.2.183
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 13.1.3.192
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 14.0.0.080
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 14.0.1.106
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 14.0.2.144
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PASS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @ Testing Intel compiler version 15.0.1.133
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PASS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 3, 2015 at 11:45 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Nathan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imho, this is a compiler bug and only two versions are affected :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - intel icc 14.0.0.080 (aka 2013sp1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - intel icc 14.0.1.106 (aka 2013sp1u1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* note the bug only occurs with -O1 and higher optimization levels */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is attached a simple reproducer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a simple workaround is to configure with ac_cv_type___int128=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2015/02/04 4:17, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thats the second report involving icc 14. I will dig into this later
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Feb 02, 2015 at 11:03:41PM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I have seen opal_fifo hang on 2 distinct systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     + Linux/ppc32 with xlc-11.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     + Linux/x86-64 with icc-14.0.1.106
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I have no explanation to offer for either hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    No &quot;weird&quot; configure options were passed to either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16911.php">http://www.open-mpi.org/community/lists/devel/2015/02/16911.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16920.php">http://www.open-mpi.org/community/lists/devel/2015/02/16920.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/02/16921.php">http://www.open-mpi.org/community/lists/devel/2015/02/16921.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16922.php">http://www.open-mpi.org/community/lists/devel/2015/02/16922.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16923.php">http://www.open-mpi.org/community/lists/devel/2015/02/16923.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16926.php">http://www.open-mpi.org/community/lists/devel/2015/02/16926.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16949.php">http://www.open-mpi.org/community/lists/devel/2015/02/16949.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16959.php">http://www.open-mpi.org/community/lists/devel/2015/02/16959.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16962/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16963.php">Dave Turner: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16961.php">Nysal Jan K A: "Re: [OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>In reply to:</strong> <a href="16959.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
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
