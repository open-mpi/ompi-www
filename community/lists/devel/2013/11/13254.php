<?
$subject_val = "[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 13:16:35 2013" -->
<!-- isoreceived="20131114181635" -->
<!-- sent="Thu, 14 Nov 2013 18:16:31 +0000" -->
<!-- isosent="20131114181631" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)" -->
<!-- id="814EF47E-F6E8-4404-B698-C95758262F57_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B1CEB12-2A08-44AE-A1E7-33B774F39D90_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 13:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Previous message:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Reply:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Reply:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2013, at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support
</span><br>
<span class="quotelev2">&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<p>FWIW, I recall that when Cisco was testing UDCM (a long time ago -- before we threw away our IB gear...), we found bugs in UDCM that only showed up with really large numbers of MTT tests running UDCM (i.e., 10K+ tests a night, especially with lots of UDCM-based jobs running concurrently on the same cluster).  These types of bugs didn't show up in casual testing.
<br>
<p>Has that happened with the new/fixed UDCM?  Cisco is no longer in a position to test this.
<br>
<p><span class="quotelev2">&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans
</span><br>
<span class="quotelev2">&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha created ofacm because some of the collective components now need to forge connections. So he created the common/ofacm code to meet those needs, with the intention of someday replacing the openib cpc's with the new common code. However, this was stalled by the iWarp issue, and so it fell off the table.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We now have two duplicate ways of doing the same thing, but with code in two different places. :-(
</span><br>
<p>FWIW, the iWARP vendors have repeatedly been warned that ofacm is going to take over, and unless they supply patches, iWarp will stop working in Open MPI.  I know for a fact that they are very aware of this.
<br>
<p>So my $0.02 is that ofacm should take over -- let's get rid of CPC and have openib use the ofacm.  The iWarp folks can play catch up if/when they want to.  
<br>
<p>Of course, I'm not in this part of the code base any more, so it's not really my call -- just my $0.02...
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
<li><strong>Next message:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Previous message:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Reply:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Reply:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
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
