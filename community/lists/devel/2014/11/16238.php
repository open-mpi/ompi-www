<?
$subject_val = "Re: [OMPI devel] Prepping for 1.8.4 release";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 12:19:52 2014" -->
<!-- isoreceived="20141106171952" -->
<!-- sent="Thu, 6 Nov 2014 12:19:50 -0500" -->
<!-- isosent="20141106171950" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Prepping for 1.8.4 release" -->
<!-- id="CAG4F6z8=+ThQzVgZ926T0w2r9vS=vi2uMWJzTi-ULPchHauR5Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z9ixN3sOyZ0b+oLyPNFOubtvKmpoPsiCDyGnSKBbZM8pQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Prepping for 1.8.4 release<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 12:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16239.php">Ralph Castain: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Previous message:</strong> <a href="16237.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>In reply to:</strong> <a href="16237.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16239.php">Ralph Castain: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Reply:</strong> <a href="16239.php">Ralph Castain: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We filed an RFC for the trunk at Jeff's request. This is a new feature.
<br>
<p><p>Josh
<br>
<p>On Thu, Nov 6, 2014 at 12:13 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yalla is only in trunk. Unless you want us to push it to 1.8.4 - we won't
</span><br>
<span class="quotelev1">&gt; object :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 6, 2014 at 11:46 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the NEWS I have for 1.8.4 so far - please respond with any
</span><br>
<span class="quotelev2">&gt;&gt; additions/mods you would like to suggest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +1.8.4
</span><br>
<span class="quotelev2">&gt;&gt; +-----
</span><br>
<span class="quotelev2">&gt;&gt; +- Removed inadvertent change that set --enable-mpi-thread-multiple &quot;on&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +  by default, thus impacting performance for non-threaded apps
</span><br>
<span class="quotelev2">&gt;&gt; +- Significantly reduced startup time by optimizing internal hash table
</span><br>
<span class="quotelev2">&gt;&gt; +  implementation
</span><br>
<span class="quotelev2">&gt;&gt; +- Fixed segfault in neighborhood collectives under certain use-cases
</span><br>
<span class="quotelev2">&gt;&gt; +- Fixed Solaris support
</span><br>
<span class="quotelev2">&gt;&gt; +- Fixed PMI configure tests for certain Slurm installation patterns
</span><br>
<span class="quotelev2">&gt;&gt; +- Fixed param registration issue in Java bindings
</span><br>
<span class="quotelev2">&gt;&gt; +- Several man page fixes
</span><br>
<span class="quotelev2">&gt;&gt; +- Silence several warnings and close some memory leaks
</span><br>
<span class="quotelev2">&gt;&gt; +- Add new PML to improve MXM performance
</span><br>
<span class="quotelev2">&gt;&gt; +- Re-enabled the use of CMA and knem in the shared memory BTL
</span><br>
<span class="quotelev2">&gt;&gt; +- Updated mpirun manpage to correctly explain new map/rank/binding
</span><br>
<span class="quotelev2">&gt;&gt; options
</span><br>
<span class="quotelev2">&gt;&gt; +- Numerous updates and performance improvements to OSHMEM
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16235.php">http://www.open-mpi.org/community/lists/devel/2014/11/16235.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16239.php">Ralph Castain: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Previous message:</strong> <a href="16237.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>In reply to:</strong> <a href="16237.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16239.php">Ralph Castain: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>Reply:</strong> <a href="16239.php">Ralph Castain: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
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
