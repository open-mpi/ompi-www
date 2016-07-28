<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 16:25:09 2006" -->
<!-- isoreceived="20060629202509" -->
<!-- sent="Thu, 29 Jun 2006 16:25:06 -0400" -->
<!-- isosent="20060629202506" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1 backward compatible?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9D79_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI 1.1 backward compatible?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 16:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1502.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1500.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 318, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1463.php">Dani&#235;l Mantione: "[OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Reply:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1541.php">Daniël Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you may have caught us in an unintentional breakage.  If your Open MPI was compiled as shared libraries and dynamic shared objects (the default), this error should not have happened since we did not change mpi.h.  So there must be a second-order effect going on here (somehow the size of a back-end data structure caused a problem.  Hrm.). 
<br>
<p>We'll look into this, because for where all of OMPI's functionality is in shared libraries and components, the user's application should be isolated from internal changes like this (i.e., and we can provide forward compatibility).
<br>
<p>I suspect that something deeper is going on, so let us go investigate and come back with a more definitive statement.
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Dani&#235;l Mantione
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 27, 2006 11:09 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.1 backward compatible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 27 Jun 2006, PeterKjellstr&#246;m wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Monday 26 June 2006 16:55, Dani&#235;l Mantione wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Just tried out OpenMPI 1.1. First impression is that it 
</span><br>
<span class="quotelev1">&gt; doesn't seem to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be able to run OpenMPI 1.0.2 executables. The result of 
</span><br>
<span class="quotelev1">&gt; such an attempt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can be seen below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is it right that OpenMPI 1.1 cannot run 1.0.2 executables? If yes,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shouldn't the major version of the library have been increased?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I'm not entierly mistaken OpenMPI (like LAM before it) 
</span><br>
<span class="quotelev1">&gt; requires you to 
</span><br>
<span class="quotelev2">&gt; &gt; rebuild your applications when switching version. This goes 
</span><br>
<span class="quotelev1">&gt; for _ANY_ version 
</span><br>
<span class="quotelev2">&gt; &gt; even minor ones.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, no, the FAQ promises that applications will continue to work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 10. We just upgraded our version of Open MPI; do I need to 
</span><br>
<span class="quotelev1">&gt; recompile all my MPI apps?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is unlikely. Most MPI applications solely interact with 
</span><br>
<span class="quotelev1">&gt; Open MPI through the standardized MPI
</span><br>
<span class="quotelev2">&gt; &gt; API and the constant values it publishes in mpi.h. The 
</span><br>
<span class="quotelev1">&gt; MPI-2 API will not change until the MPI
</span><br>
<span class="quotelev2">&gt; &gt; Forum changes it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We will try hard to make Open MPI's mpi.h stable such that 
</span><br>
<span class="quotelev1">&gt; the values will not change from
</span><br>
<span class="quotelev2">&gt; &gt; release-to-release. While we cannot guarantee that they 
</span><br>
<span class="quotelev1">&gt; will stay the same forever, we'll try hard
</span><br>
<span class="quotelev2">&gt; &gt; to make it so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, it it a bug that things break? Or was it intentional?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dani&#235;l
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1502.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1500.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 318, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1463.php">Dani&#235;l Mantione: "[OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Reply:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1541.php">Daniël Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
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
