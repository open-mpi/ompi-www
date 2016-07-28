<?
$subject_val = "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 11:48:27 2012" -->
<!-- isoreceived="20120220164827" -->
<!-- sent="Mon, 20 Feb 2012 11:48:21 -0500" -->
<!-- isosent="20120220164821" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)" -->
<!-- id="A1871A61-03D5-463F-B9DC-CA4EFB98AA97_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ehtrsxyy.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 11:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10500.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Reply:</strong> <a href="10500.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VT guys --
<br>
<p>Can you have a look at this?  I don't know if &lt;sys/wait.h&gt; needs to be protected or not, but it looks like it's needed.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Aleksej Saushev &lt;asau_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)
</span><br>
<span class="quotelev1">&gt; Date: February 18, 2012 3:11:49 PM EST
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Reply-To: asau_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WEXITSTATUS is defined in &lt;sys/wait.h&gt;, see the patch attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Sorry, I couldn't find simple mail interface for bug reports.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>

<br><p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; HE CE3OH...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10498/patch-ompi_contrib_vt_vt_extlib_otf_tools_otfprofile_clustering.cpp">patch-ompi_contrib_vt_vt_extlib_otf_tools_otfprofile_clustering.cpp</a>
</ul>
<!-- attachment="patch-ompi_contrib_vt_vt_extlib_otf_tools_otfprofile_clustering.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10500.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Reply:</strong> <a href="10500.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
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
