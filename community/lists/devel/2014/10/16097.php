<?
$subject_val = "Re: [OMPI devel] errno and reentrance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 06:36:50 2014" -->
<!-- isoreceived="20141027103650" -->
<!-- sent="Mon, 27 Oct 2014 03:36:48 -0700" -->
<!-- isosent="20141027103648" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] errno and reentrance" -->
<!-- id="CAAvDA15oTtbqUBtXEUkKowE2kvfr43BZjSEgqHzkmwUA6ebWZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="544E14DB.3070403_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] errno and reentrance<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 06:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16098.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Previous message:</strong> <a href="16096.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>In reply to:</strong> <a href="16096.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16098.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Reply:</strong> <a href="16098.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I responded too quickly, not thinking that this test is pretty quick and
<br>
doesn't require that I try sparc, ppc, ia64, etc.
<br>
So my results:
<br>
<p>Solaris-{10,11}:
<br>
&nbsp;&nbsp;With &quot;cc&quot; I agree with your findings (need -D_REENTRANT for correct
<br>
behavior).
<br>
&nbsp;&nbsp;With gcc either &quot;-pthread&quot; or &quot;-D_REENTRANT&quot; gave correct behavior
<br>
<p>NetBSD-5:
<br>
&nbsp;&nbsp;Got &quot;KO: error 4 (0)&quot; no matter what I tried
<br>
<p>Linux,  FreeBSD-{9,10}, NetBSD-6, OpenBSD-5:
<br>
&nbsp;&nbsp;Using &quot;-pthread&quot; or &quot;-lpthread&quot; was necessary to link, and sufficient for
<br>
correct results.
<br>
<p>MacOSX-10.{5,6,7,8}:
<br>
&nbsp;&nbsp;No compiler options were required for 'cc' (which has been gcc, llvm-gcc
<br>
and clang through those OS revs)
<br>
<p>Though I have access, I did not try compute nodes on BG/Q or Cray X{E,K,C}.
<br>
Let me know if any of those are of significant concern.
<br>
<p>I no longer have AIX or IRIX access.
<br>
<p>-Paul
<br>
<p><p>On Mon, Oct 27, 2014 at 2:48 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Thanks Paul !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/10/27 18:47, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 27, 2014 at 2:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Paul, since you have access to many platforms, could you please run this
</span><br>
<span class="quotelev1">&gt; test with and without -D_REENTRANT / -D_THREAD_SAFE
</span><br>
<span class="quotelev1">&gt; and tell me where the program produces incorrect behaviour (output is
</span><br>
<span class="quotelev1">&gt; KO...) without the flag ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a lot of things due between now and the SC14 conference.
</span><br>
<span class="quotelev1">&gt; I've added this test to my to-do list, but cannot be sure of how soon I'll
</span><br>
<span class="quotelev1">&gt; be able to get results back to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feel free to remind me off-list,
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16095.php">http://www.open-mpi.org/community/lists/devel/2014/10/16095.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16096.php">http://www.open-mpi.org/community/lists/devel/2014/10/16096.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16098.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Previous message:</strong> <a href="16096.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>In reply to:</strong> <a href="16096.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16098.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Reply:</strong> <a href="16098.php">Gilles Gouaillardet: "Re: [OMPI devel] errno and reentrance"</a>
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
