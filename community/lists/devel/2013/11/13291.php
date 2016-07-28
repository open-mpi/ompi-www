<?
$subject_val = "Re: [OMPI devel] What to do about openib/ofacm/cpc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 16:59:34 2013" -->
<!-- isoreceived="20131115215934" -->
<!-- sent="Fri, 15 Nov 2013 15:59:40 -0600" -->
<!-- isosent="20131115215940" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] What to do about openib/ofacm/cpc" -->
<!-- id="5286994C.7020200_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="814EF47E-F6E8-4404-B698-C95758262F57_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] What to do about openib/ofacm/cpc<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 16:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Previous message:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13254.php">Jeff Squyres (jsquyres): "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Reply:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/14/2013 12:16 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Nov 14, 2013, at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev2">&gt;&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<span class="quotelev1">&gt; FWIW, I recall that when Cisco was testing UDCM (a long time ago -- before we threw away our IB gear...), we found bugs in UDCM that only showed up with really large numbers of MTT tests running UDCM (i.e., 10K+ tests a night, especially with lots of UDCM-based jobs running concurrently on the same cluster).  These types of bugs didn't show up in casual testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has that happened with the new/fixed UDCM?  Cisco is no longer in a position to test this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev2">&gt;&gt; Pasha created ofacm because some of the collective components now need to forge connections. So he created the common/ofacm code to meet those needs, with the intention of someday replacing the openib cpc's with the new common code. However, this was stalled by the iWarp issue, and so it fell off the table.
</span><br>
<p>Perhaps if Pasha or somebody else proficient in the OMPI code could help 
<br>
out, then the iWARP CPC could be moved.  W/O help from OMPI developers, 
<br>
its going to take me a very long time...
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We now have two duplicate ways of doing the same thing, but with code in two different places. :-(
</span><br>
<span class="quotelev1">&gt; FWIW, the iWARP vendors have repeatedly been warned that ofacm is going to take over, and unless they supply patches, iWarp will stop working in Open MPI.  I know for a fact that they are very aware of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my $0.02 is that ofacm should take over -- let's get rid of CPC and have openib use the ofacm.  The iWarp folks can play catch up if/when they want to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, I'm not in this part of the code base any more, so it's not really my call -- just my $0.02...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can't we leave the openib rdma CPC code as is until we can get the 
<br>
rdmacm CPC moved into OFACM.  What is the harm with that exactly? I 
<br>
mean, if no iWARP devices support these accelerated MPI collectives, 
<br>
then leave the rdmacm CPC in the openib btl so we can at least support 
<br>
iWARP via the openib BTL...
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Previous message:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13254.php">Jeff Squyres (jsquyres): "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Reply:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
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
