<?
$subject_val = "Re: [OMPI users] ompi mca mxm version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 07:42:10 2012" -->
<!-- isoreceived="20120509114210" -->
<!-- sent="Wed, 9 May 2012 14:41:44 +0300" -->
<!-- isosent="20120509114144" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi mca mxm version" -->
<!-- id="CAL3GGtof4wUgBrsxmwdNoJ_v2JEAqr2fufZ8a9mew5O8SyWTCg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9014FCE-5F7A-4280-B876-A75FFD3AAC6B_at_uwa.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi mca mxm version<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 07:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19227.php">Simone Pellegrini: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19225.php">Derek Gerstmann: "[OMPI users] ompi mca mxm version"</a>
<li><strong>In reply to:</strong> <a href="19225.php">Derek Gerstmann: "[OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you need latest OMPI 1.6.x and latest MXM (
<br>
<a href="ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar">ftp://bgate.mellanox.com/hpc/mxm/v1.1/mxm_1.1.1067.tar</a>)
<br>
<p><p><p>On Wed, May 9, 2012 at 6:02 AM, Derek Gerstmann
<br>
&lt;derek.gerstmann_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; What versions of OpenMPI and the Mellanox MXM libraries have been tested
</span><br>
<span class="quotelev1">&gt; and verified to work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently trying to build OpenMPI v1.5.5 against the MXM 1.0.601
</span><br>
<span class="quotelev1">&gt; (included in the MLNX_OFED_LINUX-1.5.3-3.0.0 distribution) and are getting
</span><br>
<span class="quotelev1">&gt; build errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, there's a single undefined type (mxm_wait_t) being used in
</span><br>
<span class="quotelev1">&gt; the OpenMPI tree:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        openmpi-1.5.5/ompi/mca/mtl/mxm/mtl_mxm_send.c:44        mxm_wait_t
</span><br>
<span class="quotelev1">&gt; wait;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no mxm_wait_t defined anywhere in the current MXM API
</span><br>
<span class="quotelev1">&gt; (/opt/mellanox/mxm/include/mxm/api), which suggests a version mismatch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenMPI v1.6 branch has a note in the readme saying &quot;Minor Fixes for
</span><br>
<span class="quotelev1">&gt; Mellanox MXM&quot; were added, but the same undefined mxm_wait_t is still being
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What versions of OpenMPI and MXM are verified to work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -[dg]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Derek Gerstmann, PhD Student
</span><br>
<span class="quotelev1">&gt; The University of Western Australia (UWA)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; w: <a href="http://local.ivec.uwa.edu.au/~derek">http://local.ivec.uwa.edu.au/~derek</a>
</span><br>
<span class="quotelev1">&gt; e: derek.gerstmann [at] icrar.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19227.php">Simone Pellegrini: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19225.php">Derek Gerstmann: "[OMPI users] ompi mca mxm version"</a>
<li><strong>In reply to:</strong> <a href="19225.php">Derek Gerstmann: "[OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
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
