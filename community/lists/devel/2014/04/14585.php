<?
$subject_val = "Re: [OMPI devel] openmpi and XRC API from ofed-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 10:01:54 2014" -->
<!-- isoreceived="20140423140154" -->
<!-- sent="Wed, 23 Apr 2014 08:01:58 -0600" -->
<!-- isosent="20140423140158" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi and XRC API from ofed-3.12" -->
<!-- id="20140423140158.GA1132_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5357B909.2010105_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi and XRC API from ofed-3.12<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 10:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Previous message:</strong> <a href="14584.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14583.php">Piotr Lesnicki: "[OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we plan to fix support for XRC due to the changes in 3.12. It will
<br>
probably not happen before 1.8.2 though.
<br>
<p>-Nathan
<br>
<p>On Wed, Apr 23, 2014 at 02:58:49PM +0200, Piotr Lesnicki wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In OFED-3.12 the API for XRC has changed. I did not find
</span><br>
<span class="quotelev1">&gt; corresponding changes in Open MPI: for example the function
</span><br>
<span class="quotelev1">&gt; 'ibv_create_xrc_rcv_qp()' queried in openmpi configure script no
</span><br>
<span class="quotelev1">&gt; longer exists in ofed-3.12-rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any plans to support the new XRC API ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Piotr
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14583.php">http://www.open-mpi.org/community/lists/devel/2014/04/14583.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14585/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Previous message:</strong> <a href="14584.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14583.php">Piotr Lesnicki: "[OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="14587.php">Paul Hargrove: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
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
