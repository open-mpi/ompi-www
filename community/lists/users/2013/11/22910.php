<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 11:05:52 2013" -->
<!-- isoreceived="20131105160552" -->
<!-- sent="Tue, 5 Nov 2013 16:05:33 +0000" -->
<!-- isosent="20131105160533" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="23725D4F-9236-4E96-9032-8F63F15E2A1D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="etPan.52791294.7443d575.ad_at_Aragorn" -->
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
<strong>Date:</strong> 2013-11-05 11:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2013, at 7:44 AM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for patch. Unless I'm completely confused, it is still not resolving the issue. I downloaded Open-MPI 1.7.3 and replaced the Makefile.am with the one obtained from a fresh svn checkout (I checked that your changes are in there).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But `make install` still leaves me with an `event2` subdirectory of `include`. I used the `--without-devel-headers` configure flag to be sure.
</span><br>
<p>Are you installing over an old install, and &quot;event2&quot; is just left over from a previous installation?  We won't remove old stuff from $prefix during &quot;make install&quot;.
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
<li><strong>Next message:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22909.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
