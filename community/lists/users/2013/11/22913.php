<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 14:22:37 2013" -->
<!-- isoreceived="20131105192237" -->
<!-- sent="Tue, 5 Nov 2013 19:22:31 +0000" -->
<!-- isosent="20131105192231" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="78C1B183-29BB-4745-B4A1-DC2D871A2D52_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="etPan.52794091.61b303af.ad_at_Aragorn" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 14:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Previous message:</strong> <a href="22912.php">Jeremiah Willcock: "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>In reply to:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2013, at 11:00 AM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm installing in a fresh location and include/event2 is still there. I don't speak configure so I may be doing something wrong. It's enough to change the Makefile.am, isn't it?
</span><br>
<p>No, it may well not be sufficient.  If you don't have the same version of automake that we used to make the 1.7 tarball, then automake won't re-generate Makefile.in (and Makefile) from the Makefile.am during &quot;make&quot;, and therefore it'll still use the old rules to install the $prefix/include/event2 directory.
<br>
<p>You'll probably need to patch the Makefile.in (to not install the event2 directory), then run configure, and then you'll be good.  Ick.  :-\
<br>
<p>On the trunk, I currently get no $prefix/include/event2 directory when I &quot;make install&quot;.
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
<li><strong>Next message:</strong> <a href="22914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Previous message:</strong> <a href="22912.php">Jeremiah Willcock: "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>In reply to:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
