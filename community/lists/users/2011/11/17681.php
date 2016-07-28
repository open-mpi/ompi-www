<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 13:44:23 2011" -->
<!-- isoreceived="20111103174423" -->
<!-- sent="Thu, 03 Nov 2011 11:36:48 -0600" -->
<!-- isosent="20111103173648" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5431E29_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0B64ED6-AA03-4112-9C6C-526FF22D6010_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 13:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17677.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17684.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cross-thread response here, as this is related to the shared-memory thread:
<br>
<p>Yes it sucks, so that's what led me to post my original question: If /dev/shm isn't the right place to put the session file, and /tmp is NFS-mounted, then what IS the &quot;right&quot; way to set up a diskless cluster?  I don't think the idea of tempfs sounds very appealing, after reading the discussion in FAQ #8 about shared-memory usage. We definitely have a job-queueing system and jobs are very often killed using qdel, and writing a post-script handler is way beyond the level of involvement or expertise we can expect from our sys admins.
<br>
<p>Surely there's some reasonable guidance that can be offered to work around an issue that is so disabling.
<br>
<p>A related question would be: How is it that HP-MPI works just fine on this cluster as it is configured now?  Are they doing something different for shared memory communications?
<br>
<p><p>Thanks
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Thursday, November 03, 2011 11:35 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage
<br>
<p>On Nov 1, 2011, at 7:31 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting this message below which is observing correctly that /tmp is NFS-mounted.   But there is no other directory which has user or group write permissions.  So I think I'm kind of stuck, and it sounds like a serious issue.
</span><br>
<p>That does kinda suck.  :-\
<br>
<p><span class="quotelev1">&gt; Before I ask the administrators to change their image, i.e. mount this partition under /work instead of /tmp, I'd like to ask if anyone is using OpenMPI on a state-less cluster, and are there any gotchas with regards to performance of OpenMPI, i.e. like handling of /tmp, that one would need to know?
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17677.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17684.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
