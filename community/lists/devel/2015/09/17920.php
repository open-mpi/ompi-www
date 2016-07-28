<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 21:50:10 2015" -->
<!-- isoreceived="20150903015010" -->
<!-- sent="Thu, 3 Sep 2015 10:50:05 +0900" -->
<!-- isosent="20150903015005" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="55E7A74D.8060008_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7240D54E-14C1-4534-91C2-F7320B2205D1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 21:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17919.php">Ralph Castain: "[OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17919.php">Ralph Castain: "[OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>what about automatically *not* building PSM2 if PSM is built and PSM2 is 
<br>
not explicitly required ?
<br>
/* in order to be future proof, we could even do that only if we detect 
<br>
a symbol conflict */
<br>
we could abort if ompi is configure'd with both --with-psm and 
<br>
--with-psm2, or simply do nothing
<br>
(the end user might know what he/she is doing, and there will be nothing 
<br>
to do on the ompi side
<br>
&nbsp;&nbsp;when this gets fixed by the PSM folks)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/3/2015 10:21 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I regret to say that 1.10.0 is hitting an issue with at least one upstream distro. Apparently, there is a symbol conflict between the PSM and PSM2 libraries that precludes building both of those MTLs at the same time. This is leading the distro to push for release of two OMPI 1.10.0 builds - one with PSM and the other with PSM2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMO, this is a very undesirable situation. I agree with the distro that delaying release for some significant time as this would impact everyone else&#226;&#128;&#153;s users. Therefore, assuming that the PSM team is unable to quickly resolve the problem in their libraries, my inclination is to release an immediate 1.10.1 with the PSM2 MTL removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17919.php">http://www.open-mpi.org/community/lists/devel/2015/09/17919.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17919.php">Ralph Castain: "[OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17919.php">Ralph Castain: "[OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
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
