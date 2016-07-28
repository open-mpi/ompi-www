<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 07:00:17 2012" -->
<!-- isoreceived="20120601110017" -->
<!-- sent="Fri, 1 Jun 2012 07:00:12 -0400" -->
<!-- isosent="20120601110012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="DF31BB64-B489-4144-9F2C-0FAF6C42FFA2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkgxczwztEpmATosUVxdHpmhHtXK4cut7pCd6cpQjQBE-EcLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 07:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19408.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19406.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try running:
<br>
<p>which mpirun
<br>
ssh cl2n022 which mpirun
<br>
ssh cl2n010 which mpirun
<br>
<p>and
<br>
<p>ldd your_mpi_executable
<br>
ssh cl2n022 which mpirun
<br>
ssh cl2n010 which mpirun
<br>
<p>Compare the results and ensure that you're finding the same mpirun on all nodes, and the same libmpi.so on all nodes.  There may well be another Open MPI installed in some non-default location of which you're unaware.
<br>
<p><p>On May 31, 2012, at 8:21 PM, Edmund Sumbar wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the tip Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wish it was that simple. Unfortunately, this is the only version installed. When I added --prefix to the mpiexec command line, I still got a seg fault, but without the backtrace. Oh well, I'll keep trying (compiler upgrade etc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cl2n022:03057] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cl2n022:03057] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cl2n022:03057] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cl2n022:03057] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line 2342
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line 2342
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line 2342
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n022:03048] [[45689,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line 2342
</span><br>
<span class="quotelev1">&gt; [cl2n010:16470] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cl2n010:16470] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cl2n010:16470] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cl2n010:16470] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 32 with PID 3057 on node cl2n022 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 31, 2012 at 2:54 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; This type of error usually means that you are inadvertently mixing versions of Open MPI (e.g., version A.B.C on one node and D.E.F on another node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; University of Alberta
</span><br>
<span class="quotelev1">&gt; +1 780 492 9360
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19408.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19406.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19415.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
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
