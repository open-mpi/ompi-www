<?
$subject_val = "Re: [OMPI devel] errno and reentrance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 06:50:00 2014" -->
<!-- isoreceived="20141027105000" -->
<!-- sent="Mon, 27 Oct 2014 19:49:59 +0900" -->
<!-- isosent="20141027104959" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] errno and reentrance" -->
<!-- id="544E2357.2000603_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15oTtbqUBtXEUkKowE2kvfr43BZjSEgqHzkmwUA6ebWZQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 06:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16099.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16097.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>In reply to:</strong> <a href="16097.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p>so the simplest way is to force -D_REENTRANT on Solaris, i will do that !
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/27 19:36, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I responded too quickly, not thinking that this test is pretty quick and
</span><br>
<span class="quotelev1">&gt; doesn't require that I try sparc, ppc, ia64, etc.
</span><br>
<span class="quotelev1">&gt; So my results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solaris-{10,11}:
</span><br>
<span class="quotelev1">&gt;   With &quot;cc&quot; I agree with your findings (need -D_REENTRANT for correct
</span><br>
<span class="quotelev1">&gt; behavior).
</span><br>
<span class="quotelev1">&gt;   With gcc either &quot;-pthread&quot; or &quot;-D_REENTRANT&quot; gave correct behavior
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NetBSD-5:
</span><br>
<span class="quotelev1">&gt;   Got &quot;KO: error 4 (0)&quot; no matter what I tried
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux,  FreeBSD-{9,10}, NetBSD-6, OpenBSD-5:
</span><br>
<span class="quotelev1">&gt;   Using &quot;-pthread&quot; or &quot;-lpthread&quot; was necessary to link, and sufficient for
</span><br>
<span class="quotelev1">&gt; correct results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MacOSX-10.{5,6,7,8}:
</span><br>
<span class="quotelev1">&gt;   No compiler options were required for 'cc' (which has been gcc, llvm-gcc
</span><br>
<span class="quotelev1">&gt; and clang through those OS revs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though I have access, I did not try compute nodes on BG/Q or Cray X{E,K,C}.
</span><br>
<span class="quotelev1">&gt; Let me know if any of those are of significant concern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I no longer have AIX or IRIX access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 27, 2014 at 2:48 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks Paul !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/10/27 18:47, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 27, 2014 at 2:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Paul, since you have access to many platforms, could you please run this
</span><br>
<span class="quotelev2">&gt;&gt; test with and without -D_REENTRANT / -D_THREAD_SAFE
</span><br>
<span class="quotelev2">&gt;&gt; and tell me where the program produces incorrect behaviour (output is
</span><br>
<span class="quotelev2">&gt;&gt; KO...) without the flag ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a lot of things due between now and the SC14 conference.
</span><br>
<span class="quotelev2">&gt;&gt; I've added this test to my to-do list, but cannot be sure of how soon I'll
</span><br>
<span class="quotelev2">&gt;&gt; be able to get results back to you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Feel free to remind me off-list,
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16095.php">http://www.open-mpi.org/community/lists/devel/2014/10/16095.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16096.php">http://www.open-mpi.org/community/lists/devel/2014/10/16096.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16097.php">http://www.open-mpi.org/community/lists/devel/2014/10/16097.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16099.php">Ralph Castain: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16097.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>In reply to:</strong> <a href="16097.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
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
