<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 20:43:38 2013" -->
<!-- isoreceived="20131106014338" -->
<!-- sent="Tue, 5 Nov 2013 20:42:38 -0500" -->
<!-- isosent="20131106014238" -->
<!-- name="Dominique Orban" -->
<!-- email="dominique.orban_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="etPan.52799eca.2f102fb5.ad_at_Aragorn" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
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
<strong>From:</strong> Dominique Orban (<em>dominique.orban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 20:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22916.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Maybe in reply to:</strong> <a href="22900.php">Dominique Orban: "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for your patience. Patching Makefile.in did the job. I submitted an updated formula to Homebrew.&#194;&#160;
<br>
<p>On 5 November, 2013 at 2:22:36 PM, Jeff Squyres (jsquyres) (jsquyres_at_[hidden]) wrote:  
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2013, at 11:00 AM, Dominique Orban  
</span><br>
<span class="quotelev1">&gt; wrote:  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; I'm installing in a fresh location and include/event2 is still  
</span><br>
<span class="quotelev1">&gt; there. I don't speak configure so I may be doing something wrong.  
</span><br>
<span class="quotelev1">&gt; It's enough to change the Makefile.am, isn't it?  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; No, it may well not be sufficient. If you don't have the same version  
</span><br>
<span class="quotelev1">&gt; of automake that we used to make the 1.7 tarball, then automake  
</span><br>
<span class="quotelev1">&gt; won't re-generate Makefile.in (and Makefile) from the Makefile.am  
</span><br>
<span class="quotelev1">&gt; during &quot;make&quot;, and therefore it'll still use the old rules to  
</span><br>
<span class="quotelev1">&gt; install the $prefix/include/event2 directory.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You'll probably need to patch the Makefile.in (to not install  
</span><br>
<span class="quotelev1">&gt; the event2 directory), then run configure, and then you'll be  
</span><br>
<span class="quotelev1">&gt; good. Ick. :-\  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On the trunk, I currently get no $prefix/include/event2 directory  
</span><br>
<span class="quotelev1">&gt; when I &quot;make install&quot;.  
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
<span class="quotelev1">&gt;  
</span><br>
<p>--&#194;&#160;  
<br>
Dominique
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22916.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Maybe in reply to:</strong> <a href="22900.php">Dominique Orban: "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
