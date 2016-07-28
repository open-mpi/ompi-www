<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 15:13:03 2011" -->
<!-- isoreceived="20111208201303" -->
<!-- sent="Thu, 8 Dec 2011 15:12:58 -0500" -->
<!-- isosent="20111208201258" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'" -->
<!-- id="CD5FE033-D924-4257-AFC6-473C40F5FFCB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000001cc7f7e$395ee930$ac1cbb90$_at_net" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 15:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17913.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17478.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2011, at 10:35 AM, Ed Blosch wrote:
<br>
<p><span class="quotelev1">&gt; It IS the MPI application that is failing to link, not OpenMPI itself; my
</span><br>
<span class="quotelev1">&gt; e-mail was not well written; sorry Brice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The situation is this:  I am trying to compile using an OpenMPI 1.5.4 that
</span><br>
<span class="quotelev1">&gt; was built to be rooted in /release, but it is not placed there yet
</span><br>
<span class="quotelev1">&gt; (testing); it is currently under /builds/release.  I have set OPAL_PREFIX in
</span><br>
<span class="quotelev1">&gt; the environment, with the intention of helping the compiler wrappers work
</span><br>
<span class="quotelev1">&gt; right. Under /release, I currently have OpenMPI 1.4.3, whereas the OpenMPI
</span><br>
<span class="quotelev1">&gt; under /builds/release is 1.5.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I am getting is this:  The mpif90 wrapper (under
</span><br>
<span class="quotelev1">&gt; /builds/release/openmpi/bin) puts -I/release instead of -I/builds/release.
</span><br>
<span class="quotelev1">&gt; But it includes -L/builds/release.
</span><br>
<p>Can you tell me precisely how you built and installed OMPI, and then exactly how you're invoking mpif90?
<br>
<p>E.g., are you doing a &quot;make DESTDIR=/builds install&quot; kind of installation?
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
<li><strong>Next message:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17913.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17478.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
