<?
$subject_val = "Re: [OMPI devel] ompi master, libfabric and static libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 12:30:17 2015" -->
<!-- isoreceived="20150116173017" -->
<!-- sent="Fri, 16 Jan 2015 17:30:15 +0000" -->
<!-- isosent="20150116173015" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi master, libfabric and static libraries" -->
<!-- id="EFC37326-99B2-4183-A5B4-19904C8DE9BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="391B1272-581D-49AE-97A4-B51165A33816_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi master, libfabric and static libraries<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 12:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16794.php">George Bosilca: "Re: [OMPI devel] Failures"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should now finally be fixed.
<br>
<p><span class="quotelev1">&gt; On Dec 22, 2014, at 12:29 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2014, at 5:16 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MTT reported some errors when building some test suites :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2219">http://mtt.open-mpi.org/index.php?do_redir=2219</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the root cause was some missing flags in the wrappers.
</span><br>
<span class="quotelev2">&gt;&gt; i fixed that in 8976dcf6101412f6bd0080764d19a3e9d4edf570
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; there is now a second issue :
</span><br>
<span class="quotelev2">&gt;&gt; libfabric requires libnl, but the -lnl flag is not passed to the mpi
</span><br>
<span class="quotelev2">&gt;&gt; wrappers.
</span><br>
<span class="quotelev2">&gt;&gt; could you please have a look at this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff's on vacation and may not be checking email very frequently.  I think he'll be back full time on January 5th.  I'll take a look at this issue, but I haven't been closely keeping track of his libfabric integration work, so I can't guarantee that I'll get it fixed before I disappear for the Cisco/USA holiday period on December 24th.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16714.php">http://www.open-mpi.org/community/lists/devel/2014/12/16714.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16794.php">George Bosilca: "Re: [OMPI devel] Failures"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
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
