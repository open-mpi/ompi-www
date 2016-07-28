<?
$subject_val = "Re: [OMPI devel] What to do about openib/ofacm/cpc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 18:13:46 2013" -->
<!-- isoreceived="20131115231346" -->
<!-- sent="Fri, 15 Nov 2013 15:12:40 -0800" -->
<!-- isosent="20131115231240" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] What to do about openib/ofacm/cpc" -->
<!-- id="B6D0623B-AFD3-4DB4-9954-F002FDEEC927_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5286994C.7020200_at_opengridcomputing.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 18:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Previous message:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>In reply to:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Reply:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 15, 2013, at 1:59 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 11/14/2013 12:16 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I recall that when Cisco was testing UDCM (a long time ago -- before we threw away our IB gear...), we found bugs in UDCM that only showed up with really large numbers of MTT tests running UDCM (i.e., 10K+ tests a night, especially with lots of UDCM-based jobs running concurrently on the same cluster).  These types of bugs didn't show up in casual testing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has that happened with the new/fixed UDCM?  Cisco is no longer in a position to test this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha created ofacm because some of the collective components now need to forge connections. So he created the common/ofacm code to meet those needs, with the intention of someday replacing the openib cpc's with the new common code. However, this was stalled by the iWarp issue, and so it fell off the table.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps if Pasha or somebody else proficient in the OMPI code could help out, then the iWARP CPC could be moved.  W/O help from OMPI developers, its going to take me a very long time...
</span><br>
<p>I believe we would all be willing to provide advice - we just have no way of testing.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We now have two duplicate ways of doing the same thing, but with code in two different places. :-(
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, the iWARP vendors have repeatedly been warned that ofacm is going to take over, and unless they supply patches, iWarp will stop working in Open MPI.  I know for a fact that they are very aware of this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So my $0.02 is that ofacm should take over -- let's get rid of CPC and have openib use the ofacm.  The iWarp folks can play catch up if/when they want to.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I'm not in this part of the code base any more, so it's not really my call -- just my $0.02...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can't we leave the openib rdma CPC code as is until we can get the rdmacm CPC moved into OFACM.  What is the harm with that exactly? I mean, if no iWARP devices support these accelerated MPI collectives, then leave the rdmacm CPC in the openib btl so we can at least support iWARP via the openib BTL...
</span><br>
<p>I see no reason why we can't just push the rdma over to ofacm - I'd prefer that to leaving the code in the openib btl. Forcing the openib btl to use both cpc's from ofacm AND its own would be ugly.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Previous message:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>In reply to:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>Reply:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
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
