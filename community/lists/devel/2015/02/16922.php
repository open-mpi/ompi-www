<?
$subject_val = "Re: [OMPI devel] Master hangs in opal_fifo test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 03:15:32 2015" -->
<!-- isoreceived="20150204081532" -->
<!-- sent="Wed, 4 Feb 2015 00:15:30 -0800" -->
<!-- isosent="20150204081530" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master hangs in opal_fifo test" -->
<!-- id="CAAvDA16XZGxZ5M+FpaDXgCL9A2eUYEwmePc6qYrozPHn9wRksw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54D1CE21.9010701_at_iferc.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-04 03:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16923.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16921.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16921.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16923.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Reply:</strong> <a href="16923.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Giles,
<br>
<p>Who says only 2 version are effected?
<br>
<p>I have access to 9 revisions of icc.
<br>
Using your reduced case I find 7 that fail and only 2 (the latest two) that
<br>
pass.
<br>
Discounting icc-12 (which can't compile the test) that makes 6 versions
<br>
effected by the bug (not 2).
<br>
<p>-Paul
<br>
<p>$ for x in 12.1.5.339 13.0.0.079 13.0.1.117 13.1.2.183 13.1.3.192
<br>
14.0.0.080 14.0.1.106 14.0.2.144 15.0.1.133; do module swap intel intel/$x
<br>
; echo @ Testing Intel compiler version $x; icc conftest.c &amp;&amp; ./a.out &amp;&amp;
<br>
echo PASS ; done
<br>
@ Testing Intel compiler version 12.1.5.339
<br>
conftest.c(10): error: identifier &quot;__int128_t&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__int128_t value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for conftest.c (code 2)
<br>
@ Testing Intel compiler version 13.0.0.079
<br>
a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
<br>
Aborted
<br>
@ Testing Intel compiler version 13.0.1.117
<br>
a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
<br>
Aborted
<br>
@ Testing Intel compiler version 13.1.2.183
<br>
a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
<br>
Aborted
<br>
@ Testing Intel compiler version 13.1.3.192
<br>
a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
<br>
Aborted
<br>
@ Testing Intel compiler version 14.0.0.080
<br>
a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
<br>
Aborted
<br>
@ Testing Intel compiler version 14.0.1.106
<br>
a.out: conftest.c:36: main: Assertion `a.value == b.value' failed.
<br>
Aborted
<br>
@ Testing Intel compiler version 14.0.2.144
<br>
PASS
<br>
@ Testing Intel compiler version 15.0.1.133
<br>
PASS
<br>
<p>On Tue, Feb 3, 2015 at 11:45 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Nathan,
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16921.php">http://www.open-mpi.org/community/lists/devel/2015/02/16921.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16923.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16921.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16921.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16923.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Reply:</strong> <a href="16923.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
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
