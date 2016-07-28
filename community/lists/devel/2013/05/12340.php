<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 22:39:32 2013" -->
<!-- isoreceived="20130502023932" -->
<!-- sent="Wed, 1 May 2013 19:39:24 -0700" -->
<!-- isosent="20130502023924" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="16EDE0D8-B352-4407-BEFA-A608DC048C53_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5181D050.6050404_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using external libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 22:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12341.php">Christopher Samuel: "[OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Previous message:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2013, at 7:32 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 04/29/2013 11:04 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 27, 2013, at 7:37 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/26/2013 08:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 26, 2013, at 7:40 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So it looks like I will need to shortly be looking at how to link against an external libevent.  Any help with that would be greatly appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As I said, I'll take a look at it, but can't commit to having it available any time soon. It isn't something I would suggest someone try who isn't fully versed in OMPI's code base.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, I'm not looking forward to it.  I get to at least wait until the non-threaded version of libevent is available.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hate to see someone suffer, so I went ahead and added the external libevent connection this morning. Not trivial, but it seems to work. It is in our developer's trunk if you want to test it. As Jeff has said, we would prefer you not do this until the 1.9 series is released, and we won't be porting this change to the 1.7 series anyway.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just put it in so we can begin the investigation, and we always appreciate input and help in exploring the impacts!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great!  I'll try to take a look at next week.
</span><br>
<p>You might wait a bit - Jeff is working on corner cases for it, so things will likely change. I'm not sure when he expects to finish.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed another message about using a threaded libevent after all on the devel list.  What is the status of that?  Do we still need to produce a non-threaded libevent in Fedora?
</span><br>
<p>I would hold off. I've been running some tests, and it looks to me like it punishes TCP messaging, but not too much (around 1%). Can't vouch that there won't be other problems, but it may prove to be okay. Let's see what happens once Jeff completes his work.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
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
<li><strong>Next message:</strong> <a href="12341.php">Christopher Samuel: "[OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Previous message:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
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
