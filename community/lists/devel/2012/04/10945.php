<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 30 17:06:22 2012" -->
<!-- isoreceived="20120430210622" -->
<!-- sent="Mon, 30 Apr 2012 14:06:17 -0700" -->
<!-- isosent="20120430210617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="B527B9E8-976E-48C6-8F02-6F7614E7301D_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A2A5E8C_at_GEORGE.Emea.Arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-30 17:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10946.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2012, at 2:04 PM, Leif Lindholm wrote:
<br>
<p><span class="quotelev1">&gt; My only question mark was with regards to the lack of out-of-line assembly implementations for the older architecture versions (as in &quot;I don't know whether people would care about that or not&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does apply cleanly-ish (non-interactively) on top of 1.5.5, but I don't know if any further drops off 1.5 are planned?
</span><br>
<p>No, 1.5.5 was the end of that line.
<br>
<p>Let me explain our versioning:
<br>
<p>- 1.odd numbers (1.5.x) are &quot;Feature&quot; series.
<br>
- 1.even numbers (1.6.x) are &quot;Stable&quot; series.  
<br>
<p>1.6 is just a re-naming from the 1.5 series (i.e., it's not a new branch from the trunk).  It represents the maturity of a feature series.  Once it transitions to 1.6/stable, no new features can be added/removed -- only bug fixes.
<br>
<p>See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> if you care for more info.
<br>
<p>So I committed the ARM patch against the trunk and filed a CMR for 1.6.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10946.php">Hjelm, Nathan T: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10944.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
