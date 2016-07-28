<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 08:05:37 2010" -->
<!-- isoreceived="20100610120537" -->
<!-- sent="Thu, 10 Jun 2010 08:05:32 -0400" -->
<!-- isosent="20100610120532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="824EA702-8A79-422B-A303-2E2829361BB1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C10A5CA.3080705_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 08:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8092.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2010, at 4:43 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; One should not ignore the option of POSIX shared memory: shm_open() and
</span><br>
<span class="quotelev1">&gt; shm_unlink().  When present this mechanism usually does not suffer from
</span><br>
<span class="quotelev1">&gt; the small (eg 32MB) limits of SysV, and uses a &quot;filename&quot; (in an
</span><br>
<span class="quotelev1">&gt; abstract namespace) which can portably be up 14 characters in length. 
</span><br>
<span class="quotelev1">&gt; Because shm_unlink() may be called as soon as the final process has done
</span><br>
<span class="quotelev1">&gt; its shm_open() one can get approximately the safety of the IPC_RMID
</span><br>
<span class="quotelev1">&gt; mechanism, but w/o being restricted to Linux.
</span><br>
<p>FWIW, with the infrastructure work that Sam did, it would probably be the work of about an hour or two to add shm_open()/etc. into the common sm stuff.
<br>
<p><span class="quotelev1">&gt; I have used POSIX shared memory for another project and found it works
</span><br>
<span class="quotelev1">&gt; well on Linux, Solaris (10 and Open), FreeBSD and AIX.  That is probably
</span><br>
<span class="quotelev1">&gt; a narrow coverage than SysV, but still worth consideration IMHO.  With
</span><br>
<span class="quotelev1">&gt; mmap(), SysV and POSIX (plus XPMEM on the SGI Altix) as mechanisms for
</span><br>
<span class="quotelev1">&gt; sharing memory between processes, I think we have an argument for a
</span><br>
<span class="quotelev1">&gt; full-blown &quot;shared pages&quot; framework as opposed to just a &quot;mpi_common_sm&quot;
</span><br>
<span class="quotelev1">&gt; MCA parameter.  That brings all the  benefits like possibly &quot;failing
</span><br>
<span class="quotelev1">&gt; over&quot; from one component to another (otherwise less desired) one if some
</span><br>
<span class="quotelev1">&gt; limit is exceeded.  For instance, SysV could (for a given set of
</span><br>
<span class="quotelev1">&gt; priorities) be used by default, but mmap-on-real-fs could be
</span><br>
<span class="quotelev1">&gt; automatically selected when the requested/required size exceeds the
</span><br>
<span class="quotelev1">&gt; shmmax value.
</span><br>
<p>That's more-or-less what Sam did.
<br>
<p>Sam -- if the shmat stuff fails because the limits are too low, it'll (silently) fall back to the mmap module, right?
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
<li><strong>Next message:</strong> <a href="8092.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
