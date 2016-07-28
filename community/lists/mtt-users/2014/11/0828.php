<?
$subject_val = "Re: [MTT users] Reporting results from offline runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 08:06:55 2014" -->
<!-- isoreceived="20141127130655" -->
<!-- sent="Thu, 27 Nov 2014 13:06:54 +0000" -->
<!-- isosent="20141127130654" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Reporting results from offline runs" -->
<!-- id="DA6BA61D-CE5C-4CD4-A310-706F860A456E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22114213.685656.1416994986582.JavaMail.zimbra_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [MTT users] Reporting results from offline runs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-27 08:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/07/0829.php">Zhi Ming BJ Wang: "[MTT users] Apply for an ompi-tests username/password"</a>
<li><strong>Previous message:</strong> <a href="0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>In reply to:</strong> <a href="0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, IIRC, it should be able to handle multiple simultaneous MTT clients.
<br>
<p>It's fairly dirt-simple: it basically listens for socket connections and then opens up a socket up to the URL that you defined, and then just acts as a proxy/passthru.
<br>
<p><p><p>On Nov 26, 2014, at 4:43 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Got it working with mtt-relay for one system, now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One open question:
</span><br>
<span class="quotelev1">&gt; Can mtt-relay handle with multiple mtts running in parallel on different systems?
</span><br>
<span class="quotelev1">&gt; Or do I need for each system a seperate mtt-relay service running?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;MPI Testing Tool Users&quot; &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 28, 2014 1:44:52 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] Reporting results from offline runs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2014, at 9:02 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I gave these options a try.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately the MTTDatabase module requires an URL to initialize - but if I provide an URL in the ini file, MTT tries to connect to this URL forever...
</span><br>
<span class="quotelev2">&gt;&gt; If I do not provide the URL the MTTDatabase module is skipped. Are there any additional/hidden options or environment variables? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might need to add a patch to make this work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Submitting from disconnected scenarios was always envisioned, but I don't think it got used much in practice, so the code may not have ever been complete for this kind of scenario.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another possibility is to use the mtt-relay...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0825.php">http://www.open-mpi.org/community/lists/mtt-users/2014/10/0825.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0827.php">http://www.open-mpi.org/community/lists/mtt-users/2014/11/0827.php</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/07/0829.php">Zhi Ming BJ Wang: "[MTT users] Apply for an ompi-tests username/password"</a>
<li><strong>Previous message:</strong> <a href="0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>In reply to:</strong> <a href="0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
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
