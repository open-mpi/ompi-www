<?
$subject_val = "Re: [OMPI devel] cosmetic misleading mpirun error message";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 20:24:32 2015" -->
<!-- isoreceived="20150826002432" -->
<!-- sent="Wed, 26 Aug 2015 00:24:30 +0000" -->
<!-- isosent="20150826002430" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cosmetic misleading mpirun error message" -->
<!-- id="9D8D7D3A-87D0-439F-BE30-B0043023743F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D843AA600_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cosmetic misleading mpirun error message<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 20:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17854.php">Cabral, Matias A: "[OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>In reply to:</strong> <a href="17854.php">Cabral, Matias A: "[OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17858.php">Gilles Gouaillardet: "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Reply:</strong> <a href="17858.php">Gilles Gouaillardet: "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fair point.
<br>

<br>
I don't know if there's an easy way to fix that, though.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Aug 25, 2015, at 6:01 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Playing with the 1.10.0 (just released) build I found a cosmetic misleading error message in mpirun. If by mistake you type -hosts (with an extra  &#226;&#128;&#156;s&#226;&#128;&#157;), the error message complains about an actually not being used. Typing the parameters correctly fixes the issue J
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m&gt; mpirun --allow-run-as-root -hosts m7,m8 -np 2  osu_latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun: Error: unknown option &quot;-o&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Type 'mpirun --help' for usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17854.php">http://www.open-mpi.org/community/lists/devel/2015/08/17854.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17854.php">Cabral, Matias A: "[OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>In reply to:</strong> <a href="17854.php">Cabral, Matias A: "[OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17858.php">Gilles Gouaillardet: "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Reply:</strong> <a href="17858.php">Gilles Gouaillardet: "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
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
