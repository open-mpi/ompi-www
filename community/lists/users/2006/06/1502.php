<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 16:45:39 2006" -->
<!-- isoreceived="20060629204539" -->
<!-- sent="Thu, 29 Jun 2006 16:45:39 -0400" -->
<!-- isosent="20060629204539" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1 backward compatible?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9D8F_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 16:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1463.php">Dani&#235;l Mantione: "[OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have tried this before I replied.  I had a further thought (after I replied, of course) -- I was wondering if one of our components had a reference to ompi_comm_world (and not your application) and that caused the problem.  If you installed 1.1 over 1.0.2 and didn't uninstall first, an old component (e.g., pml_teg) could have something like this.
<br>
<p>But then I just tried this and I was unable to replicate the problem.  Specifically:
<br>
<p>- make 1.0
<br>
- install 1.0
<br>
- compile sample MPI app
<br>
- mpirun sample MPI app to ensure it works
<br>
- make 1.1 with the same prefix as 1.0
<br>
- install 1.1 over 1.0 (i.e., without uninstalling 1.0 first)
<br>
- mpirun sample MPI app -- expect it to fail like yours
<br>
<p>But mine succeeded with no linking errors.
<br>
<p>Can you send a recipe to reproduce this error?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres 
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 29, 2006 4:25 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.1 backward compatible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you may have caught us in an unintentional breakage.  
</span><br>
<span class="quotelev1">&gt; If your Open MPI was compiled as shared libraries and dynamic 
</span><br>
<span class="quotelev1">&gt; shared objects (the default), this error should not have 
</span><br>
<span class="quotelev1">&gt; happened since we did not change mpi.h.  So there must be a 
</span><br>
<span class="quotelev1">&gt; second-order effect going on here (somehow the size of a 
</span><br>
<span class="quotelev1">&gt; back-end data structure caused a problem.  Hrm.). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'll look into this, because for where all of OMPI's 
</span><br>
<span class="quotelev1">&gt; functionality is in shared libraries and components, the 
</span><br>
<span class="quotelev1">&gt; user's application should be isolated from internal changes 
</span><br>
<span class="quotelev1">&gt; like this (i.e., and we can provide forward compatibility).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that something deeper is going on, so let us go 
</span><br>
<span class="quotelev1">&gt; investigate and come back with a more definitive statement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Dani&#235;l Mantione
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, June 27, 2006 11:09 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] OpenMPI 1.1 backward compatible?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 27 Jun 2006, PeterKjellstr&#246;m wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Monday 26 June 2006 16:55, Dani&#235;l Mantione wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Just tried out OpenMPI 1.1. First impression is that it 
</span><br>
<span class="quotelev2">&gt; &gt; doesn't seem to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; be able to run OpenMPI 1.0.2 executables. The result of 
</span><br>
<span class="quotelev2">&gt; &gt; such an attempt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; can be seen below.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is it right that OpenMPI 1.1 cannot run 1.0.2 
</span><br>
<span class="quotelev1">&gt; executables? If yes,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; shouldn't the major version of the library have been increased?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I'm not entierly mistaken OpenMPI (like LAM before it) 
</span><br>
<span class="quotelev2">&gt; &gt; requires you to 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rebuild your applications when switching version. This goes 
</span><br>
<span class="quotelev2">&gt; &gt; for _ANY_ version 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; even minor ones.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, no, the FAQ promises that applications will continue to work:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 10. We just upgraded our version of Open MPI; do I need to 
</span><br>
<span class="quotelev2">&gt; &gt; recompile all my MPI apps?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It is unlikely. Most MPI applications solely interact with 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI through the standardized MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; API and the constant values it publishes in mpi.h. The 
</span><br>
<span class="quotelev2">&gt; &gt; MPI-2 API will not change until the MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Forum changes it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We will try hard to make Open MPI's mpi.h stable such that 
</span><br>
<span class="quotelev2">&gt; &gt; the values will not change from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; release-to-release. While we cannot guarantee that they 
</span><br>
<span class="quotelev2">&gt; &gt; will stay the same forever, we'll try hard
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to make it so.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So, it it a bug that things break? Or was it intentional?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dani&#235;l
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1463.php">Dani&#235;l Mantione: "[OMPI users] OpenMPI 1.1 backward compatible?"</a>
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
