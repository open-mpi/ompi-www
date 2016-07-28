<?
$subject_val = "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 11:07:22 2014" -->
<!-- isoreceived="20140124160722" -->
<!-- sent="Fri, 24 Jan 2014 16:07:20 +0000" -->
<!-- isosent="20140124160720" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources" -->
<!-- id="29CF587A-E621-4C24-950A-8A7F26EF23FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE13EFD8BD2E_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 11:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2014, at 10:21 AM, &quot;Fischer, Greg A.&quot; &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The reason for deleting the openmpi-1.6.5 installation was that I went back and installed openmpi-1.4.3 and the problem (mostly) went away. Openmpi-1.4.3 can run the simple tests without issue, but on my &quot;real&quot; program, I'm getting symbol lookup errors: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_paffinity_linux.so: undefined symbol: mca_base_param_reg_int
</span><br>
<p>This sounds like you are mixing 1.6.x and 1.4.x in the same installation tree.  This can definitely lead to sadness.
<br>
<p>More specifically: installing 1.6 over an existing 1.4 installation (and vice versa) is definitely NOT supported.  The set of plugins that the two install are different, and can lead to all manner of weird/undefined behavior.
<br>
<p>FWIW: I typically install Open MPI into a tree by itself.  And if I later want to remove that installation, I just &quot;rm -rf&quot; that tree.  Then I can install a different version of OMPI into that same tree (because the prior tree is completely gone).
<br>
<p>However, if you can't install OMPI into a tree by itself, you can &quot;make uninstall&quot; from the source tree, and that should surgically completely remove OMPI from the installation tree.  Then it is safe to install a different version of OMPI into that same tree.
<br>
<p>Can you verify that you had installed OMPI into completely clean trees?  If you didn't, I can imagine that causing the kinds of errors that you described.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Reply:</strong> <a href="23441.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
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
