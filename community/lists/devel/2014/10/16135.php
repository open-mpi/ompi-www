<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 14:37:27 2014" -->
<!-- isoreceived="20141030183727" -->
<!-- sent="Thu, 30 Oct 2014 18:37:25 +0000" -->
<!-- isosent="20141030183725" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="1587006D-EF61-41DF-9647-B47364252C19_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="A271D1A1-ECFF-4D59-BE54-B0A06E2A25CA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] enable-smp-locks affects PSM performance<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 14:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16136.php">Gilles Gouaillardet: "[OMPI devel] btl/openib and MPI_Intercomm_create on the same host"</a>
<li><strong>Previous message:</strong> <a href="16134.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2014, at 12:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe we did this in the trunk to try and force thread-safety implementation, but I don&#146;t believe it was intended to transition to the release branch. The only thread-related requirement on the release branch is that libevent be configured with thread-support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone know of a reason why multi-threads would be &#147;on&#148; by default in 1.8?
</span><br>
<p>No.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16136.php">Gilles Gouaillardet: "[OMPI devel] btl/openib and MPI_Intercomm_create on the same host"</a>
<li><strong>Previous message:</strong> <a href="16134.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
