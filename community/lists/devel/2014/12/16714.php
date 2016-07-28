<?
$subject_val = "Re: [OMPI devel] ompi master, libfabric and static libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:30:04 2014" -->
<!-- isoreceived="20141222173004" -->
<!-- sent="Mon, 22 Dec 2014 17:29:57 +0000" -->
<!-- isosent="20141222172957" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi master, libfabric and static libraries" -->
<!-- id="391B1272-581D-49AE-97A4-B51165A33816_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5497FD76.5000505_at_iferc.org" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 12:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16715.php">Howard Pritchard: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Previous message:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>In reply to:</strong> <a href="16712.php">Gilles Gouaillardet: "[OMPI devel] ompi master, libfabric and static libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 22, 2014, at 5:16 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTT reported some errors when building some test suites :
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2219">http://mtt.open-mpi.org/index.php?do_redir=2219</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause was some missing flags in the wrappers.
</span><br>
<span class="quotelev1">&gt; i fixed that in 8976dcf6101412f6bd0080764d19a3e9d4edf570
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is now a second issue :
</span><br>
<span class="quotelev1">&gt; libfabric requires libnl, but the -lnl flag is not passed to the mpi
</span><br>
<span class="quotelev1">&gt; wrappers.
</span><br>
<span class="quotelev1">&gt; could you please have a look at this ?
</span><br>
<p>Jeff's on vacation and may not be checking email very frequently.  I think he'll be back full time on January 5th.  I'll take a look at this issue, but I haven't been closely keeping track of his libfabric integration work, so I can't guarantee that I'll get it fixed before I disappear for the Cisco/USA holiday period on December 24th.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16715.php">Howard Pritchard: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Previous message:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>In reply to:</strong> <a href="16712.php">Gilles Gouaillardet: "[OMPI devel] ompi master, libfabric and static libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
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
