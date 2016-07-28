<?
$subject_val = "Re: [OMPI users] Seg fault in MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 17:08:09 2015" -->
<!-- isoreceived="20151016210809" -->
<!-- sent="Fri, 16 Oct 2015 21:07:48 +0000" -->
<!-- isosent="20151016210748" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault in MPI_FINALIZE" -->
<!-- id="09890D25-0B4F-4FE2-8D7F-821D55D966D9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAbhqc41_TtzZXSAjhkQRLW9d=vyD-BcqRLcm_oWtL09JqDObA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 17:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27890.php">Ray Sheppard: "[OMPI users] Odd pipe error"</a>
<li><strong>Previous message:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27918.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using Intel 16, yes, 1.10.1 would be a good choice.
<br>
<p>If you're not using Fortran, you can disable the MPI Fortran bindings, and you should be ok, too.
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 16, 2015, at 3:54 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Jeff, Kevin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't Kevin wait for 1.10.1 with the intel 16 compiler? 
</span><br>
<span class="quotelev1">&gt; A bugfix for intel 16 has been committed with fb49a2d71ed9115be892e8a22643d9a1c069a8f9.
</span><br>
<span class="quotelev1">&gt; (At least I am anxiously awaiting the 1.10.1 because I cannot get my builds to complete successfully)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-10-16 19:33 GMT+00:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 16, 2015, at 3:25 PM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I cannot nail this down any better because this happens like every other night, with about 1 out of a hundred jobs. Can anyone think of a reason why the job would seg fault in MPI_FINALIZE, but only under conditions where the jobs are tightly packed onto our cluster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There have been a bunch of fixes in the ORTE / MPI_FINALIZE areas of Open MPI since 1.8.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any chance you can upgrade to 1.8.8, or, better yet, 1.10.0?  (note that even though it's 1.10, it's actually effectively a continuation of the v1.8 series -- the v1.10 series does not represent a new fork from our development master -- see the full version/roadmap details here, if you're interested: <a href="http://blogs.cisco.com/performance/open-mpi-new-versioning-scheme-and-roadmap">http://blogs.cisco.com/performance/open-mpi-new-versioning-scheme-and-roadmap</a>).
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27887.php">http://www.open-mpi.org/community/lists/users/2015/10/27887.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27888.php">http://www.open-mpi.org/community/lists/users/2015/10/27888.php</a>
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
<li><strong>Next message:</strong> <a href="27890.php">Ray Sheppard: "[OMPI users] Odd pipe error"</a>
<li><strong>Previous message:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27918.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
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
