<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 06:48:53 2013" -->
<!-- isoreceived="20130425104853" -->
<!-- sent="Thu, 25 Apr 2013 10:48:48 +0000" -->
<!-- isosent="20130425104848" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC440502C3_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="79491A89-B0AA-495C-9194-3CB7B1E2F3ED_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 06:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12305.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Previous message:</strong> <a href="12303.php">George Bosilca: "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>In reply to:</strong> <a href="12291.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12316.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12316.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Orion --
<br>
<p>I would just caution against using Open MPI with a thread-enabled libevent.  In most cases, the performance impact wouldn't matter, but the whole point of MPI is to be high performance.  The current 1.7 series does *not* use a thread-enabled libevent because it detracts from performance.  Hence, using a thread-enabled libevent detracts from Open MPI's main purpose.
<br>
<p>If Open MPI is suddenly bundled with a thread-enabled libevent, *performance will go down* and users will be unhappy.  We have learned painfully over the years that users expect good performance out of the box -- if they have get &quot;bad&quot; performance out of the box and have to do something special to enable &quot;good&quot; performance, they'll be annoyed and blame Open MPI.
<br>
<p>So I would request that you do *not* link Open MPI against a thread-enabled libevent until we are able integrate such functionality properly, and take measures to mitigate the performance implications (which likely won't be until at least the 1.9 series).
<br>
<p><p><p>On Apr 23, 2013, at 6:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2013, at 3:23 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/17/2013 03:40 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 17, 2013, at 1:19 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So other than openmpi expecting to work with a specific version of libevent, I'm not seeing compelling reason why bundling is necessary (at least for Fedora packaging).  If there is, please let me know.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'd hate to make a Fedora-specific change and then have users complain because of things like performance degradation on that platform. As Jeff pointed out, this is how we've distributed OMPI on every platform since day one - I'm not hearing a compelling reason to change that policy. We'd have to discuss any such request at our next weekly meeting (Tues mornings).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You've raised a good question - I'll bring it up at the next meeting and see what people think.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anything to report?  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes - we discussed it and will look into the possibility of supporting an external libevent in the future. May take awhile for us to get around to it, though, and cannot guarantee that we can do it - but we will see if it can be done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12305.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Previous message:</strong> <a href="12303.php">George Bosilca: "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>In reply to:</strong> <a href="12291.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12316.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12316.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
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
