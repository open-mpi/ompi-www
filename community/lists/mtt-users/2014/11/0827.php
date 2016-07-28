<?
$subject_val = "Re: [MTT users] Reporting results from offline runs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 04:43:09 2014" -->
<!-- isoreceived="20141126094309" -->
<!-- sent="Wed, 26 Nov 2014 10:43:06 +0100 (CET)" -->
<!-- isosent="20141126094306" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT users] Reporting results from offline runs" -->
<!-- id="22114213.685656.1416994986582.JavaMail.zimbra_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B37C3BCD-2807-44CB-9DB9-01744CD65297_at_cisco.com" -->
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
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 04:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0828.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0828.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Reply:</strong> <a href="0828.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Got it working with mtt-relay for one system, now.
<br>
<p>One open question:
<br>
Can mtt-relay handle with multiple mtts running in parallel on different systems?
<br>
Or do I need for each system a seperate mtt-relay service running?
<br>
<p>Regards
<br>
Christoph
<br>
<p>----- Original Message -----
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;MPI Testing Tool Users&quot; &lt;mtt-users_at_[hidden]&gt;
<br>
Sent: Tuesday, October 28, 2014 1:44:52 PM
<br>
Subject: Re: [MTT users] Reporting results from offline runs
<br>
<p>On Oct 27, 2014, at 9:02 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I gave these options a try.
</span><br>
<span class="quotelev1">&gt; Unfortunately the MTTDatabase module requires an URL to initialize - but if I provide an URL in the ini file, MTT tries to connect to this URL forever...
</span><br>
<span class="quotelev1">&gt; If I do not provide the URL the MTTDatabase module is skipped. Are there any additional/hidden options or environment variables? 
</span><br>
<p>Nope.  :-(
<br>
<p>You might need to add a patch to make this work.
<br>
<p>Submitting from disconnected scenarios was always envisioned, but I don't think it got used much in practice, so the code may not have ever been complete for this kind of scenario.
<br>
<p>Another possibility is to use the mtt-relay...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0825.php">http://www.open-mpi.org/community/lists/mtt-users/2014/10/0825.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0828.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0826.php">Jeff Squyres (jsquyres): "Re: [MTT users] Another whatami patch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0828.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Reply:</strong> <a href="0828.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
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
