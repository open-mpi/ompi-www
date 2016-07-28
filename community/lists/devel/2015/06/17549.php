<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 01:48:22 2015" -->
<!-- isoreceived="20150626054822" -->
<!-- sent="Fri, 26 Jun 2015 14:48:10 +0900" -->
<!-- isosent="20150626054810" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="558CE79A.8020304_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 01:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17542.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i assume you ran the test with Open MPI configured with 
<br>
--disable-dlopen, right ?
<br>
<p>--disable-dlopen is like forcing coll_ml to be loaded first, hence the 
<br>
crash, even with --mca coll ^ml
<br>
<p>without --disable-dlopen, and with default coll_ml_priority=0, the crash 
<br>
only occurs if coll_ml is loaded before coll_hcoll.
<br>
<p><p>Folks,
<br>
<p>as far as i understand, the behavior depends on how plugins are 
<br>
enumerated and this is system dependent
<br>
(by default, Daniel got a crash, but i got none ...)
<br>
should we sort the plugins by name/library name so we do not fall into 
<br>
this kind of system dependent issues ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/26/2015 12:31 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 25, 2015 at 5:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, Jun 25, 2015 at 4:59 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         In this case, mca_coll_hcoll module is linked with the
</span><br>
<span class="quotelev1">&gt;         proprietary libhcoll.so.
</span><br>
<span class="quotelev1">&gt;         the ml symbols are defined in both mca_coll_ml.so and libhcoll.so
</span><br>
<span class="quotelev1">&gt;         i am not sure (i blame my poor understanding of linkers) this
</span><br>
<span class="quotelev1">&gt;         is an error if
</span><br>
<span class="quotelev1">&gt;         Open MPI is configure'd with --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I will run the test now on a system w/ Mellanox's libhcoll and
</span><br>
<span class="quotelev1">&gt;     report what I find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had originally missed the fact that the conflicts were between Open 
</span><br>
<span class="quotelev1">&gt; MPI code and &quot;vendor code&quot;.
</span><br>
<span class="quotelev1">&gt; Otherwise I don't think I'd have put forward the --disable-dlopen 
</span><br>
<span class="quotelev1">&gt; suggestion.
</span><br>
<span class="quotelev1">&gt; However, as promised I tried the experiment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find that having both coll:ml and coll:hcoll in a --disable-dlopen 
</span><br>
<span class="quotelev1">&gt; build this does NOT result in failures linking libmpi nor in linking 
</span><br>
<span class="quotelev1">&gt; an MPI application.  So, having Jenkins (for instance) testing in this 
</span><br>
<span class="quotelev1">&gt; way would not have exposed this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To sure I was testing what I thought I was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did confirm that I get a SEGV running hello_c (from the examples 
</span><br>
<span class="quotelev1">&gt; subdir) unless I use &quot;-mca coll ^hcoll&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using &quot;-mca coll ^ml&quot; but still get a SEGV that appears to 
</span><br>
<span class="quotelev1">&gt; show coll:hcoll invoking functions in coll_ml_module.c, just as I do 
</span><br>
<span class="quotelev1">&gt; with no mca options at all.
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
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17542.php">http://www.open-mpi.org/community/lists/devel/2015/06/17542.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17542.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
