<?
$subject_val = "Re: [OMPI devel] opal_lifo/opal_fifo fail with make distcheck";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 15:33:13 2014" -->
<!-- isoreceived="20141210203313" -->
<!-- sent="Wed, 10 Dec 2014 13:33:11 -0700" -->
<!-- isosent="20141210203311" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_lifo/opal_fifo fail with make distcheck" -->
<!-- id="20141210203311.GB61712_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6X0BA9b-ac4q73q7ptkFHKsG4zhFtvFwG_THzKrJ6x9w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_lifo/opal_fifo fail with make distcheck<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 15:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16498.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16496.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="16485.php">Howard Pritchard: "[OMPI devel] opal_lifo/opal_fifo fail with make distcheck"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The failure was due to the use of opal_init() in the tests. I thought it
<br>
was ok to use because it is used by other tests (which turned out to be
<br>
disabled) but that isn't the case. opal_init_util() has to be used
<br>
instead. I pushed a fix to master last night.
<br>
<p>-Nathan
<br>
<p>On Tue, Dec 09, 2014 at 03:35:27PM -0800, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt;    Hi Folks,
</span><br>
<span class="quotelev1">&gt;    I've tried running make distcheck on master and get failures for
</span><br>
<span class="quotelev1">&gt;    opal_fifo/opal_lifo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/global/u2/h/hpp/ompi/openmpi-gitclone/_build/test/class'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    make  check-TESTS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/global/u2/h/hpp/ompi/openmpi-gitclone/_build/test/class'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/global/u2/h/hpp/ompi/openmpi-gitclone/_build/test/class'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    FAIL: opal_lifo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    FAIL: opal_fifo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Has anyone else seen this?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Howard
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16485.php">http://www.open-mpi.org/community/lists/devel/2014/12/16485.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16497/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16498.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16496.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="16485.php">Howard Pritchard: "[OMPI devel] opal_lifo/opal_fifo fail with make distcheck"</a>
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
