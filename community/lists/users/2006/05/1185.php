<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 23:57:53 2006" -->
<!-- isoreceived="20060502035753" -->
<!-- sent="Mon, 1 May 2006 23:57:53 -0400" -->
<!-- isosent="20060502035753" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.0.2 configure problem" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A7963_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openmpi-1.0.2 configure problem" -->
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
<strong>Date:</strong> 2006-05-01 23:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Previous message:</strong> <a href="1184.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Maybe in reply to:</strong> <a href="1181.php">Michael Kluskens: "[OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1199.php">Michael Kluskens: "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Reply:</strong> <a href="1199.php">Michael Kluskens: "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just fixed the INTERCOMM_MERGE/logical issue on the trunk and the v1.1
<br>
branch -- can you give it a whirl there?
<br>
<p>I ask because this issue is a bug that we fixed on the trunk (and
<br>
therefore v1.1) and didn't back-port it to v1.0.  There's actually quite
<br>
a few of these F90 fixes on the trunk/v1.1 branch that we did not
<br>
back-port to v1.0 (e.g., most of the other logical fixes) mainly because
<br>
we thought you were the main consumer of the F90 MPI API (and therefore
<br>
it wasn't worth it to back port :-) ).  If you need all these fixes in
<br>
v1.0, we can spend the time to do the back-port, but would prefer not to
<br>
if possible.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 01, 2006 6:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports integer(selected_int_kind 
</span><br>
<span class="quotelev1">&gt; (2))... yes
</span><br>
<span class="quotelev1">&gt; checking size of FORTRAN integer(selected_int_kind(2))... unknown
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Source code: openmpi-1.0.2 stable
</span><br>
<span class="quotelev1">&gt; OS X 10.4.5 with g95 (Apr 27 2006)
</span><br>
<span class="quotelev1">&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find this rather surprising given that I have been regularly  
</span><br>
<span class="quotelev1">&gt; building nightly snapshots of Open MPI 1.1 and 1.2 (the other bug is  
</span><br>
<span class="quotelev1">&gt; preventing me from using them at the moment till either I change my  
</span><br>
<span class="quotelev1">&gt; code or the bugs gets fixed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Previous message:</strong> <a href="1184.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Maybe in reply to:</strong> <a href="1181.php">Michael Kluskens: "[OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1199.php">Michael Kluskens: "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Reply:</strong> <a href="1199.php">Michael Kluskens: "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
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
