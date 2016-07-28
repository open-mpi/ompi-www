<?
$subject_val = "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 09:21:28 2010" -->
<!-- isoreceived="20100507132128" -->
<!-- sent="Fri, 7 May 2010 09:21:22 -0400" -->
<!-- isosent="20100507132122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided" -->
<!-- id="C43C6F46-7DC1-46B1-BAEB-284FD5ADF7A5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1273143813.7804.270.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 09:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12918.php">Ake Sandgren: "[OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you send a short reproducer code of the problem? 
<br>
<p>I have not heard of this, but we have not extensively tests the entire OMPI code base with threading support enabled.
<br>
<p><p>On May 6, 2010, at 7:03 AM, Ake Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a code that trips on this fairly often. I've seen cases where it
</span><br>
<span class="quotelev1">&gt; works but mostly it gets stuck here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual mpi call is call mpi_file_open(...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently just wondering if there has been other reports on/anyone
</span><br>
<span class="quotelev1">&gt; have seen deadlock in mpi-io parts of the code or if this most likely
</span><br>
<span class="quotelev1">&gt; caused by our setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi version is 1.4.2 (fails with 1.3.3 too)
</span><br>
<span class="quotelev1">&gt; Filesystem used is GPFS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi built with mpi-threads but without progress-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12918.php">Ake Sandgren: "[OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
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
