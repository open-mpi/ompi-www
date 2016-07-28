<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 00:31:00 2015" -->
<!-- isoreceived="20150626043100" -->
<!-- sent="Thu, 25 Jun 2015 21:30:54 -0700" -->
<!-- isosent="20150626043054" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="CAMD57ocGwdAvVi7kpMvaNWCspOfNhxY7Erz0PqBmYxPGPW6=Ww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA166rhZ-80fy6u+qtoor5QzVFi6jjryunvwjBak6P1BZeA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 00:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>In reply to:</strong> <a href="17542.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crud - thanks Paul! Mellanox is working on a fix (renaming the symbols in
<br>
their proprietary library so they don't conflict). If they can release that
<br>
soon, I'm hoping to avoid having to release a quick 1.8.7 to fix the
<br>
problem from inside OMPI (i.e., removing one of the conflicting plugins).
<br>
<p><p><p>On Thu, Jun 25, 2015 at 8:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 25, 2015 at 5:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 25, 2015 at 4:59 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, mca_coll_hcoll module is linked with the proprietary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libhcoll.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the ml symbols are defined in both mca_coll_ml.so and libhcoll.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i am not sure (i blame my poor understanding of linkers) this is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI is configure'd with --disable-dlopen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will run the test now on a system w/ Mellanox's libhcoll and report
</span><br>
<span class="quotelev2">&gt;&gt; what I find.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had originally missed the fact that the conflicts were between Open MPI
</span><br>
<span class="quotelev1">&gt; code and &quot;vendor code&quot;.
</span><br>
<span class="quotelev1">&gt; Otherwise I don't think I'd have put forward the --disable-dlopen
</span><br>
<span class="quotelev1">&gt; suggestion.
</span><br>
<span class="quotelev1">&gt; However, as promised I tried the experiment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find that having both coll:ml and coll:hcoll in a --disable-dlopen build
</span><br>
<span class="quotelev1">&gt; this does NOT result in failures linking libmpi nor in linking an MPI
</span><br>
<span class="quotelev1">&gt; application.  So, having Jenkins (for instance) testing in this way would
</span><br>
<span class="quotelev1">&gt; not have exposed this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To sure I was testing what I thought I was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did confirm that I get a SEGV running hello_c (from the examples subdir)
</span><br>
<span class="quotelev1">&gt; unless I use &quot;-mca coll ^hcoll&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using &quot;-mca coll ^ml&quot; but still get a SEGV that appears to show
</span><br>
<span class="quotelev1">&gt; coll:hcoll invoking functions in coll_ml_module.c, just as I do with no mca
</span><br>
<span class="quotelev1">&gt; options at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note I did this all with the released 1.8.6 tarball.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17542.php">http://www.open-mpi.org/community/lists/devel/2015/06/17542.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>In reply to:</strong> <a href="17542.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17562.php">Devendar Bureddy: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
