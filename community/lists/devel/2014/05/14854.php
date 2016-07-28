<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 13:23:12 2014" -->
<!-- isoreceived="20140527172312" -->
<!-- sent="Tue, 27 May 2014 10:23:08 -0700" -->
<!-- isosent="20140527172308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="E2C12C79-F99B-4FCE-8F07-66552DAE531B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.01.1405271222190.16134_at_tigger.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 13:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14855.php">Ralph Castain: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14853.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14852.php">Thomas Naughton: "[OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have mixed thoughts on this request. We have a policy of only including things in the code base that are of general utility - i.e., that should be generally distributed across the community. This component is only applicable to ORNL, and it would therefore seem more sensible to have it continue to be maintained there.
<br>
<p>I'm unaware of anyone outside of ORNL that regularly tests for ompi-rte abstraction violations, and I suspect that your internal tests are the right place for catching them as nobody else really seems to care. It isn't clear to me how adding this component directly to the general code base impacts that operation. The original PMI component in the ompi/rte framework wasn't intended to provide an alternative method for building OMPI - it was solely created to support the development of that framework and had no intended utility beyond that time (hence the RFC to remove it to avoid user confusion as we just saw on the user mailing list).
<br>
<p><p>On May 27, 2014, at 9:25 AM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:   because it will simplify our maintenance &amp; provide an alt. reference
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a component we currently maintain outside of the ompi tree to
</span><br>
<span class="quotelev1">&gt; support using OMPI with an alternate runtime system.  This will also
</span><br>
<span class="quotelev1">&gt; provide an alternate component to ORTE, which was motivation for PMI
</span><br>
<span class="quotelev1">&gt; component in related RFC.   We build/test nightly and it occasionally
</span><br>
<span class="quotelev1">&gt; catches ompi-rte abstraction violations, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Research Associate                                   (865) 576-4184
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14855.php">Ralph Castain: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14853.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14852.php">Thomas Naughton: "[OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14856.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
