<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 23:31:32 2015" -->
<!-- isoreceived="20150626033132" -->
<!-- sent="Thu, 25 Jun 2015 20:31:18 -0700" -->
<!-- isosent="20150626033118" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="CAAvDA166rhZ-80fy6u+qtoor5QzVFi6jjryunvwjBak6P1BZeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16K9EfF3hdc=Zi0ZQ4H4MpO_0++LXA8Akw2rK6MdjBheg_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 23:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17543.php">Howard Pritchard: "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>Previous message:</strong> <a href="17541.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17541.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 25, 2015 at 5:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 25, 2015 at 4:59 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case, mca_coll_hcoll module is linked with the proprietary
</span><br>
<span class="quotelev2">&gt;&gt; libhcoll.so.
</span><br>
<span class="quotelev2">&gt;&gt; the ml symbols are defined in both mca_coll_ml.so and libhcoll.so
</span><br>
<span class="quotelev2">&gt;&gt; i am not sure (i blame my poor understanding of linkers) this is an error
</span><br>
<span class="quotelev2">&gt;&gt; if
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is configure'd with --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will run the test now on a system w/ Mellanox's libhcoll and report what
</span><br>
<span class="quotelev1">&gt; I find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Gilles,
<br>
<p>I had originally missed the fact that the conflicts were between Open MPI
<br>
code and &quot;vendor code&quot;.
<br>
Otherwise I don't think I'd have put forward the --disable-dlopen
<br>
suggestion.
<br>
However, as promised I tried the experiment.
<br>
<p>I find that having both coll:ml and coll:hcoll in a --disable-dlopen build
<br>
this does NOT result in failures linking libmpi nor in linking an MPI
<br>
application.  So, having Jenkins (for instance) testing in this way would
<br>
not have exposed this problem.
<br>
<p>To sure I was testing what I thought I was:
<br>
<p>I did confirm that I get a SEGV running hello_c (from the examples subdir)
<br>
unless I use &quot;-mca coll ^hcoll&quot;.
<br>
<p>I tried using &quot;-mca coll ^ml&quot; but still get a SEGV that appears to show
<br>
coll:hcoll invoking functions in coll_ml_module.c, just as I do with no mca
<br>
options at all.
<br>
<p>Note I did this all with the released 1.8.6 tarball.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17543.php">Howard Pritchard: "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>Previous message:</strong> <a href="17541.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17541.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
