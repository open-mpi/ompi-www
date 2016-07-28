<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 22:51:32 2006" -->
<!-- isoreceived="20060413025132" -->
<!-- sent="Wed, 12 Apr 2006 22:51:20 -0400" -->
<!-- isosent="20060413025120" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job running question" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF671B97_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] job running question" -->
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
<strong>Date:</strong> 2006-04-12 22:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1047.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1045.php">Jorge Parra: "[OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Maybe in reply to:</strong> <a href="0974.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] job running question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Adams Samuel 
</span><br>
<span class="quotelev1">&gt; D Contr AFRL/HEDR
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 12, 2006 11:14 AM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] job running question
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got it to work, but it didn't have anything to do with the 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; variables on the shell.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running CentOS 4.2, and the system has everything 
</span><br>
<span class="quotelev1">&gt; compiled with the GCC
</span><br>
<span class="quotelev1">&gt; 3.4, and it also has GCC 4.0 installed.  I was building ompi 
</span><br>
<span class="quotelev1">&gt; with GCC 4.0,
</span><br>
<span class="quotelev1">&gt; and I think it was having trouble with loading dynamic 
</span><br>
<span class="quotelev1">&gt; libraries since the
</span><br>
<span class="quotelev1">&gt; system is build with 3.4.  I am not sure if that is exactly 
</span><br>
<span class="quotelev1">&gt; the case, but I
</span><br>
<span class="quotelev1">&gt; recompiled ompi with GCC 3.4, and only used gfortran for FC.  
</span><br>
<span class="quotelev1">&gt; After that
</span><br>
<span class="quotelev1">&gt; things seemed to be working properly.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was my guess correct, or do you know the real reason why this is?
</span><br>
<p>I can't say for sure.  But mixing versions of libraries -- particularly
<br>
the versions of the shared libraries that the expect -- may lead to
<br>
unexpected results like this.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Also, does ompi have something similar to &quot;lamboot&quot; and 
</span><br>
<span class="quotelev1">&gt; &quot;recon&quot;, or is the
</span><br>
<p>Not yet.  It's on the to-do list.
<br>
<p><span class="quotelev1">&gt; only option is adding --hostfile or --host a,b to the mpirun command?
</span><br>
<p>At the moment, using a hostfile, supplying --host, or using a supported
<br>
scheduler (that effectively supplies an implicit hostfile) are the only
<br>
options.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1047.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1045.php">Jorge Parra: "[OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Maybe in reply to:</strong> <a href="0974.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] job running question"</a>
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
