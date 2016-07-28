<?
$subject_val = "Re: [OMPI devel] Prepping for 1.8.4 release";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 12:25:44 2014" -->
<!-- isoreceived="20141106172544" -->
<!-- sent="Thu, 6 Nov 2014 09:25:39 -0800" -->
<!-- isosent="20141106172539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Prepping for 1.8.4 release" -->
<!-- id="402FFE65-E122-420E-9969-71FF0097045B_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z8=+ThQzVgZ926T0w2r9vS=vi2uMWJzTi-ULPchHauR5Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 12:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16240.php">Mike Dubman: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16238.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>In reply to:</strong> <a href="16238.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, my bad - somehow, it showed up on the github pull request list for ompi-release. I&#226;&#128;&#153;ll remove it.
<br>
<p><span class="quotelev1">&gt; On Nov 6, 2014, at 9:19 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We filed an RFC for the trunk at Jeff's request. This is a new feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 6, 2014 at 12:13 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden] &lt;mailto:jladd.mlnx_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yalla is only in trunk. Unless you want us to push it to 1.8.4 - we won't object :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 6, 2014 at 11:46 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hey folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the NEWS I have for 1.8.4 so far - please respond with any additions/mods you would like to suggest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1.8.4
</span><br>
<span class="quotelev1">&gt; +-----
</span><br>
<span class="quotelev1">&gt; +- Removed inadvertent change that set --enable-mpi-thread-multiple &quot;on&quot;
</span><br>
<span class="quotelev1">&gt; +  by default, thus impacting performance for non-threaded apps
</span><br>
<span class="quotelev1">&gt; +- Significantly reduced startup time by optimizing internal hash table
</span><br>
<span class="quotelev1">&gt; +  implementation
</span><br>
<span class="quotelev1">&gt; +- Fixed segfault in neighborhood collectives under certain use-cases
</span><br>
<span class="quotelev1">&gt; +- Fixed Solaris support
</span><br>
<span class="quotelev1">&gt; +- Fixed PMI configure tests for certain Slurm installation patterns
</span><br>
<span class="quotelev1">&gt; +- Fixed param registration issue in Java bindings
</span><br>
<span class="quotelev1">&gt; +- Several man page fixes
</span><br>
<span class="quotelev1">&gt; +- Silence several warnings and close some memory leaks
</span><br>
<span class="quotelev1">&gt; +- Add new PML to improve MXM performance
</span><br>
<span class="quotelev1">&gt; +- Re-enabled the use of CMA and knem in the shared memory BTL
</span><br>
<span class="quotelev1">&gt; +- Updated mpirun manpage to correctly explain new map/rank/binding options
</span><br>
<span class="quotelev1">&gt; +- Numerous updates and performance improvements to OSHMEM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16235.php">http://www.open-mpi.org/community/lists/devel/2014/11/16235.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16235.php">http://www.open-mpi.org/community/lists/devel/2014/11/16235.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16238.php">http://www.open-mpi.org/community/lists/devel/2014/11/16238.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16238.php">http://www.open-mpi.org/community/lists/devel/2014/11/16238.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16240.php">Mike Dubman: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16238.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
<li><strong>In reply to:</strong> <a href="16238.php">Joshua Ladd: "Re: [OMPI devel] Prepping for 1.8.4 release"</a>
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
