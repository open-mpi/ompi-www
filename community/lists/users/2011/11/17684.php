<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 14:14:19 2011" -->
<!-- isoreceived="20111103181419" -->
<!-- sent="Thu, 3 Nov 2011 14:14:15 -0400" -->
<!-- isosent="20111103181415" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="39566FE8-1C6B-45D5-A84F-79EFB83D37D9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5431E29_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 14:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17685.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17683.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2011, at 1:36 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Yes it sucks, so that's what led me to post my original question: If /dev/shm isn't the right place to put the session file, and /tmp is NFS-mounted, then what IS the &quot;right&quot; way to set up a diskless cluster?  I don't think the idea of tempfs sounds very appealing, after reading the discussion in FAQ #8 about shared-memory usage. We definitely have a job-queueing system and jobs are very often killed using qdel, and writing a post-script handler is way beyond the level of involvement or expertise we can expect from our sys admins.
</span><br>
<p>In the upcoming OMPI v1.7, we revamped the shared memory setup code such that it'll actually use /dev/shm properly, or use some other mechanism other than a mmap file backed in a real filesystem.  So the issue goes away.  But it doesn't help you yet.  :-\
<br>
<p><span class="quotelev1">&gt; Surely there's some reasonable guidance that can be offered to work around an issue that is so disabling.
</span><br>
<p>Other than the shared memory file, the session directory shouldn't be large.  So keeping it in a tmpfs should be ok.  It's just that putting the shared memory in a tmpfs has the potential to cost you &quot;twice&quot;: the actual shared memory itself, and then taking up space in tmpfs (although I have not verified this myself -- perhaps Linux is smart enough to not do this?).
<br>
<p>Are there *no* local disk on the machines at all?
<br>
<p><span class="quotelev1">&gt; A related question would be: How is it that HP-MPI works just fine on this cluster as it is configured now?  Are they doing something different for shared memory communications?
</span><br>
<p>They're probably either not warning you about the issue or not using mmaped files that are backed in a filesystem (warning you about the issue is actually a relatively new feature in OMPI, IIRC -- since 1.0, IIRC, OMPI has used mmap files in a filesystem).
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
<li><strong>Next message:</strong> <a href="17685.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17683.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
