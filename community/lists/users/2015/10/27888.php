<?
$subject_val = "Re: [OMPI users] Seg fault in MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 15:55:15 2015" -->
<!-- isoreceived="20151016195515" -->
<!-- sent="Fri, 16 Oct 2015 19:54:52 +0000" -->
<!-- isosent="20151016195452" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault in MPI_FINALIZE" -->
<!-- id="CAAbhqc41_TtzZXSAjhkQRLW9d=vyD-BcqRLcm_oWtL09JqDObA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E173DECE-85F9-4F3F-A528-F6CDD68F983B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Seg fault in MPI_FINALIZE<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 15:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@Jeff, Kevin
<br>
<p>Shouldn't Kevin wait for 1.10.1 with the intel 16 compiler?
<br>
A bugfix for intel 16 has been committed with
<br>
fb49a2d71ed9115be892e8a22643d9a1c069a8f9.
<br>
(At least I am anxiously awaiting the 1.10.1 because I cannot get my builds
<br>
to complete successfully)
<br>
<p><p><p>2015-10-16 19:33 GMT+00:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev2">&gt; &gt; On Oct 16, 2015, at 3:25 PM, McGrattan, Kevin B. Dr. &lt;
</span><br>
<span class="quotelev1">&gt; kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I cannot nail this down any better because this happens like every other
</span><br>
<span class="quotelev1">&gt; night, with about 1 out of a hundred jobs. Can anyone think of a reason why
</span><br>
<span class="quotelev1">&gt; the job would seg fault in MPI_FINALIZE, but only under conditions where
</span><br>
<span class="quotelev1">&gt; the jobs are tightly packed onto our cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There have been a bunch of fixes in the ORTE / MPI_FINALIZE areas of Open
</span><br>
<span class="quotelev1">&gt; MPI since 1.8.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any chance you can upgrade to 1.8.8, or, better yet, 1.10.0?
</span><br>
<span class="quotelev1">&gt; (note that even though it's 1.10, it's actually effectively a continuation
</span><br>
<span class="quotelev1">&gt; of the v1.8 series -- the v1.10 series does not represent a new fork from
</span><br>
<span class="quotelev1">&gt; our development master -- see the full version/roadmap details here, if
</span><br>
<span class="quotelev1">&gt; you're interested:
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/open-mpi-new-versioning-scheme-and-roadmap">http://blogs.cisco.com/performance/open-mpi-new-versioning-scheme-and-roadmap</a>
</span><br>
<span class="quotelev1">&gt; ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27887.php">http://www.open-mpi.org/community/lists/users/2015/10/27887.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
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
