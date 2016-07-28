<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 20:52:17 2013" -->
<!-- isoreceived="20131106015217" -->
<!-- sent="Wed, 6 Nov 2013 01:52:15 +0000" -->
<!-- isosent="20131106015215" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="86BB9813-74F3-41C6-8D60-339B45680FA8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="etPan.52799eca.2f102fb5.ad_at_Aragorn" -->
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
<strong>Date:</strong> 2013-11-05 20:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent -- thank you!
<br>
<p>The real fix will be in 1.7.4.
<br>
<p><p>On Nov 5, 2013, at 5:42 PM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Many thanks for your patience. Patching Makefile.in did the job. I submitted an updated formula to Homebrew. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5 November, 2013 at 2:22:36 PM, Jeff Squyres (jsquyres) (jsquyres_at_[hidden]) wrote:  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2013, at 11:00 AM, Dominique Orban  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm installing in a fresh location and include/event2 is still  
</span><br>
<span class="quotelev2">&gt;&gt; there. I don't speak configure so I may be doing something wrong.  
</span><br>
<span class="quotelev2">&gt;&gt; It's enough to change the Makefile.am, isn't it?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, it may well not be sufficient. If you don't have the same version  
</span><br>
<span class="quotelev2">&gt;&gt; of automake that we used to make the 1.7 tarball, then automake  
</span><br>
<span class="quotelev2">&gt;&gt; won't re-generate Makefile.in (and Makefile) from the Makefile.am  
</span><br>
<span class="quotelev2">&gt;&gt; during &quot;make&quot;, and therefore it'll still use the old rules to  
</span><br>
<span class="quotelev2">&gt;&gt; install the $prefix/include/event2 directory.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You'll probably need to patch the Makefile.in (to not install  
</span><br>
<span class="quotelev2">&gt;&gt; the event2 directory), then run configure, and then you'll be  
</span><br>
<span class="quotelev2">&gt;&gt; good. Ick. :-\  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the trunk, I currently get no $prefix/include/event2 directory  
</span><br>
<span class="quotelev2">&gt;&gt; when I &quot;make install&quot;.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --  
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres  
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]  
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --   
</span><br>
<span class="quotelev1">&gt; Dominique
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
<li><strong>Next message:</strong> <a href="22919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
