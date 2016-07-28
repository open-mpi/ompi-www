<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 13:56:37 2013" -->
<!-- isoreceived="20131114185637" -->
<!-- sent="Thu, 14 Nov 2013 10:55:37 -0800" -->
<!-- isosent="20131114185537" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)" -->
<!-- id="F66C57CD-0914-4CF4-BED2-19B2E2086284_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEAA62D2.1549D%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 13:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13256.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the core problem: it isn't a question of &quot;if&quot; some of these things should be resolved, but &quot;who&quot;. They've been around for a very long time, but nobody has the time or will to fix them. I have no access to such machines, so all I can do is verify that it sorta compiles and is consistent with the code base. I can't verify that it works, nor debug it.
<br>
<p>Guess my point is that someone who cares needs to cleanup the cpc vs ofacm problem and get whatever connection managers we want to support working. I removed the oob and xoob ones because (a) they don't work, and (b) I'm tired of repeatedly having to explain that to people.
<br>
<p><p>On Nov 14, 2013, at 10:23 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 11/14/13 11:16 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I recall that when Cisco was testing UDCM (a long time ago --
</span><br>
<span class="quotelev2">&gt;&gt; before we threw away our IB gear...), we found bugs in UDCM that only
</span><br>
<span class="quotelev2">&gt;&gt; showed up with really large numbers of MTT tests running UDCM (i.e., 10K+
</span><br>
<span class="quotelev2">&gt;&gt; tests a night, especially with lots of UDCM-based jobs running
</span><br>
<span class="quotelev2">&gt;&gt; concurrently on the same cluster).  These types of bugs didn't show up in
</span><br>
<span class="quotelev2">&gt;&gt; casual testing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has that happened with the new/fixed UDCM?  Cisco is no longer in a
</span><br>
<span class="quotelev2">&gt;&gt; position to test this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neither are we at Sandia, unfortunately.  I only have 16 nodes for nightly
</span><br>
<span class="quotelev1">&gt; testing, and only 8 of those are always running Linux, so that doesn't
</span><br>
<span class="quotelev1">&gt; help much on the stress test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha created ofacm because some of the collective components now need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to forge connections. So he created the common/ofacm code to meet those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs, with the intention of someday replacing the openib cpc's with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new common code. However, this was stalled by the iWarp issue, and so it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fell off the table.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We now have two duplicate ways of doing the same thing, but with code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in two different places. :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, the iWARP vendors have repeatedly been warned that ofacm is going
</span><br>
<span class="quotelev2">&gt;&gt; to take over, and unless they supply patches, iWarp will stop working in
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI.  I know for a fact that they are very aware of this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So my $0.02 is that ofacm should take over -- let's get rid of CPC and
</span><br>
<span class="quotelev2">&gt;&gt; have openib use the ofacm.  The iWarp folks can play catch up if/when
</span><br>
<span class="quotelev2">&gt;&gt; they want to.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I'm not in this part of the code base any more, so it's not
</span><br>
<span class="quotelev2">&gt;&gt; really my call -- just my $0.02...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, that doesn't help with the core issue; we can't have a
</span><br>
<span class="quotelev1">&gt; regression w.r.t XRC support between 1.7.3 and 1.7.4.  But I agree, I'm
</span><br>
<span class="quotelev1">&gt; fine with only fixing this in one place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13256.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13291.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
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
