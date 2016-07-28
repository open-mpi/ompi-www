<?
$subject_val = "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 16:16:43 2011" -->
<!-- isoreceived="20110308211643" -->
<!-- sent="Tue, 8 Mar 2011 16:16:39 -0500" -->
<!-- isosent="20110308211639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441" -->
<!-- id="B5423E2B-039E-44AF-9A41-CB728F3CD21E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6FFB92.5030008_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 16:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15817.php">Amos Leffler: "[OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>In reply to:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15826.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try as I might, I cannot reproduce this error.  :-(
<br>
<p>I only have the intel compiler version 11.x, though -- not 12.
<br>
<p>Can you change your test to use MPI_Reduce_local with INTEGER8 and see if the problem still occurs?  (it probably will, but it is a significantly simpler code path to get down to the INTEGER8 SUM operation back-end)
<br>
<p>If so, can you attach a debugger and see why Open MPI thinks it doesn't have an op for the (INTEGER8, SUM) combination?  
<br>
<p>I'm sorry -- this is the best that I can offer since I can't reproduce the problem myself.  :-(
<br>
<p><p>On Mar 3, 2011, at 3:35 PM, Harald Anlauf wrote:
<br>
<p><span class="quotelev1">&gt; Please find attached the output of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; make all
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; ompi_info -all
</span><br>
<span class="quotelev1">&gt; mpif90 -v mpiallreducetest.f90
</span><br>
<span class="quotelev1">&gt; ldd a.out
</span><br>
<span class="quotelev1">&gt; ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System: OpenSuse Linux 11.1 on Core2Duo, i686
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compiler is:
</span><br>
<span class="quotelev1">&gt; Intel(R) Fortran Compiler XE for applications running on IA-32, Version
</span><br>
<span class="quotelev1">&gt; 12.0.1.107 Build 20101116
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (The problem is the same with gfortran 4.6 (prerelease).)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Harald
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15817.php">Amos Leffler: "[OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15815.php">Eugene Loh: "Re: [OMPI users] multi-threaded programming"</a>
<li><strong>In reply to:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15826.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
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
