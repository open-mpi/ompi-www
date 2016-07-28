<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 13:23:46 2013" -->
<!-- isoreceived="20131114182346" -->
<!-- sent="Thu, 14 Nov 2013 18:23:35 +0000" -->
<!-- isosent="20131114182335" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)" -->
<!-- id="CEAA62D2.1549D%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 13:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13256.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13254.php">Jeff Squyres (jsquyres): "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>In reply to:</strong> <a href="13254.php">Jeff Squyres (jsquyres): "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13257.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Reply:</strong> <a href="13257.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/14/13 11:16 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Nov 14, 2013, at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know
</span><br>
<span class="quotelev2">&gt;&gt;about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FWIW, I recall that when Cisco was testing UDCM (a long time ago --
</span><br>
<span class="quotelev1">&gt;before we threw away our IB gear...), we found bugs in UDCM that only
</span><br>
<span class="quotelev1">&gt;showed up with really large numbers of MTT tests running UDCM (i.e., 10K+
</span><br>
<span class="quotelev1">&gt;tests a night, especially with lots of UDCM-based jobs running
</span><br>
<span class="quotelev1">&gt;concurrently on the same cluster).  These types of bugs didn't show up in
</span><br>
<span class="quotelev1">&gt;casual testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Has that happened with the new/fixed UDCM?  Cisco is no longer in a
</span><br>
<span class="quotelev1">&gt;position to test this.
</span><br>
<p>Neither are we at Sandia, unfortunately.  I only have 16 nodes for nightly
<br>
testing, and only 8 of those are always running Linux, so that doesn't
<br>
help much on the stress test.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pasha created ofacm because some of the collective components now need
</span><br>
<span class="quotelev2">&gt;&gt;to forge connections. So he created the common/ofacm code to meet those
</span><br>
<span class="quotelev2">&gt;&gt;needs, with the intention of someday replacing the openib cpc's with the
</span><br>
<span class="quotelev2">&gt;&gt;new common code. However, this was stalled by the iWarp issue, and so it
</span><br>
<span class="quotelev2">&gt;&gt;fell off the table.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We now have two duplicate ways of doing the same thing, but with code
</span><br>
<span class="quotelev2">&gt;&gt;in two different places. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FWIW, the iWARP vendors have repeatedly been warned that ofacm is going
</span><br>
<span class="quotelev1">&gt;to take over, and unless they supply patches, iWarp will stop working in
</span><br>
<span class="quotelev1">&gt;Open MPI.  I know for a fact that they are very aware of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So my $0.02 is that ofacm should take over -- let's get rid of CPC and
</span><br>
<span class="quotelev1">&gt;have openib use the ofacm.  The iWarp folks can play catch up if/when
</span><br>
<span class="quotelev1">&gt;they want to.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Of course, I'm not in this part of the code base any more, so it's not
</span><br>
<span class="quotelev1">&gt;really my call -- just my $0.02...
</span><br>
<p>Of course, that doesn't help with the core issue; we can't have a
<br>
regression w.r.t XRC support between 1.7.3 and 1.7.4.  But I agree, I'm
<br>
fine with only fixing this in one place.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13256.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13254.php">Jeff Squyres (jsquyres): "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>In reply to:</strong> <a href="13254.php">Jeff Squyres (jsquyres): "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13257.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Reply:</strong> <a href="13257.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
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
