<?
$subject_val = "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 12:35:21 2011" -->
<!-- isoreceived="20111103163521" -->
<!-- sent="Thu, 3 Nov 2011 12:35:16 -0400" -->
<!-- isosent="20111103163516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="F0B64ED6-AA03-4112-9C6C-526FF22D6010_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB27C538DB11_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 12:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17678.php">Ralph Castain: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17663.php">Blosch, Edwin L: "[OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2011, at 7:31 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m getting this message below which is observing correctly that /tmp is NFS-mounted.   But there is no other directory which has user or group write permissions.  So I think I&#146;m kind of stuck, and it sounds like a serious issue.
</span><br>
<p>That does kinda suck.  :-\
<br>
<p><span class="quotelev1">&gt; Before I ask the administrators to change their image, i.e. mount this partition under /work instead of /tmp, I&#146;d like to ask if anyone is using OpenMPI on a state-less cluster, and are there any gotchas with regards to performance of OpenMPI, i.e. like handling of /tmp, that one would need to know?
</span><br>
<p>I don't have much empirical information here -- I know that some people have done this (make /tmp be NFS-mounted).  I think there are at least some issues with this, though -- many applications believe that a sufficient condition for uniqueness in /tmp is to simply append your PID to a filename.  But this may no longer be true if /tmp is shared across multiple OS instances.
<br>
<p>I don't have a specific case where this is problematic, but it's not a large stretch to imagine that this could happen in practice with random applications that make temp files in /tmp.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17678.php">Ralph Castain: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17663.php">Blosch, Edwin L: "[OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
