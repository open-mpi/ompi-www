<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 17:00:18 2011" -->
<!-- isoreceived="20111207220018" -->
<!-- sent="Wed, 7 Dec 2011 17:00:09 -0500" -->
<!-- isosent="20111207220009" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="CAHwLALPWBpAEnh3i5opJT6TDPfN+XQH3trMtCX0aKmDXiOje5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEA5A2D4-8F08-4403-B967-B92E118EAF32_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-07 17:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17910.php">tim: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are using hwloc-1.2.2 for topology binding in Open Grid
<br>
Scheduler/Grid Engine 2011.11, and a user is encountering similar
<br>
issues:
<br>
<p><a href="http://gridengine.org/pipermail/users/2011-December/002126.html">http://gridengine.org/pipermail/users/2011-December/002126.html</a>
<br>
<p>In Open MPI, there is the configure switch &quot;--without-libnuma&quot; to turn
<br>
libnuma off. But since Open MPI uses hwloc internally, I think there
<br>
still is a dependency on libnuma even if &quot;--without-libnuma&quot; is used
<br>
to build Open MPI. Also, as hwloc does not have a configure switch
<br>
that disables libnuma, seems like libnuma is always used when the
<br>
hwloc configure script detects its presence.
<br>
<p>So my question is, are there plans to add a configure switch in hwloc
<br>
to disable libnuma??
<br>
<p>Thanks,
<br>
Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><p>On Fri, Sep 30, 2011 at 8:03 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 29, 2011, at 12:45 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I add --without-hwloc in addition to --without-libnuma, then it builds. &#160;Is that a reasonable thing to do? &#160;Is there a better workaround? &#160;This 'hwloc' module looks like it might be important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a note of explanation: hwloc is effectively our replacement for libnuma. &#160;You might want to check out hwloc (the standalone software package) -- it has a CLI and is quite useful for administrating servers, even outside of an HPC environment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc may use libnuma under the covers; that's where this issue is coming from (i.e., OMPI may still use libnuma -- it's just now doing so indirectly, instead of directly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, if there's something wrong with my configure line, let me know what to improve. Otherwise, as weird as &quot;--enable-mca-no-build=maffinity --disable-io-romio --enable-static --disable-shared&quot; may look, I am not trying to build fully static binaries. I have unavoidable need to build OpenMPI on certain machines and then transfer the executables to other machines that are compatable but not identical, and over the years these are the minimal set of configure flags necessary to make that possible. I may revisit these choices at some point, but if they are supposed to work, then I'd rather just keep using them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your configure line looks fine to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW/heads up: in the 1.7 series, we're going to be ignoring the $F77 and $FFLAGS variables; we'll *only* be using $FC and $FCFLAGS. &#160;There's still plenty of time before this hits mainstream, but I figured I'd let you know it's coming. &#160;:-)
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
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17910.php">tim: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
