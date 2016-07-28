<?
$subject_val = "Re: [OMPI devel] iWARP development";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 12 17:45:44 2013" -->
<!-- isoreceived="20131212224544" -->
<!-- sent="Thu, 12 Dec 2013 22:45:43 +0000" -->
<!-- isosent="20131212224543" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iWARP development" -->
<!-- id="67ECFECA-5582-44B7-A580-7C9C2F7CECCA_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F6DD95AFC46DD740A27EEE7B32F25E601BC24BCE_at_G4W3229.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iWARP development<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-12 17:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13426.php">Adrian Reber: "Re: [OMPI devel] OMPI developer's meeting today"</a>
<li><strong>Previous message:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>In reply to:</strong> <a href="13423.php">Prindeville, Philip: "Re: [OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2013, at 4:31 PM, &quot;Prindeville, Philip&quot; &lt;philip.prindeville_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think I understand.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ll pull a copy of trunk and dig around in there.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a reason that the code can&#146;t be gated by conditional compilation flags or detect the environment at run-time?
</span><br>
<p>I'm not sure what you're asking -- we have a bunch of code that is gated on #if's, and we have a lot of auto-detection at run-time.  That's kinda OMPI's mantra: look around the system at run time and use what it finds.  Meaning: I think what you're suggesting is already fairly common practice in this community.
<br>
<p>Are you thinking of modifying the openib BTL to do more things with SCTP as a lower-layer transport for iWARP (under verbs)?  To do so, you'll need to go outside the verbs API -- is that correct?
<br>
<p>I'll warn you that the openib BTL is fairly complex.  :-)  Indeed, if you want an iWARP+SCTP-specific transport, it *might* be worthwhile to do your own BTL...?  You might even be able to use openib as a starting point, strip out everything that iWARP doesn't need (i.e., all the IB/RoCE-specific stuff), have something quite a bit simpler than openib, and then add your SCTP stuff on that...?  Just an idle thought.
<br>
<p>Note that if you're going to contribute code back to Open MPI, we'll need a signed contributor's agreement (see <a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>).
<br>
<p><span class="quotelev1">&gt; Is there anything in the way of a set of verification tests?  
</span><br>
<p>We typically just use lots of standard MPI tests and benchmarks.
<br>
<p><span class="quotelev1">&gt; And what&#146;s the provenance of the SCTP code that&#146;s in trunk?
</span><br>
<p>It was originally written by U. British Columbia.  It doesn't use iWARP at all.  It also hasn't been maintained in quite a while -- I can't honestly say what its current state is (which is one of the reasons it was removed from the v1.7 release branch).
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
<li><strong>Next message:</strong> <a href="13426.php">Adrian Reber: "Re: [OMPI devel] OMPI developer's meeting today"</a>
<li><strong>Previous message:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>In reply to:</strong> <a href="13423.php">Prindeville, Philip: "Re: [OMPI devel] iWARP development"</a>
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
