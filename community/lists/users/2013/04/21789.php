<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 21:08:20 2013" -->
<!-- isoreceived="20130425010820" -->
<!-- sent="Thu, 25 Apr 2013 01:08:13 +0000" -->
<!-- isosent="20130425010813" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4404F3F3_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51787E47.2090803_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] ierr vs ierror in F90 mpi module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 21:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21790.php">MHPC 2013: "[OMPI users] CfP 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<li><strong>Previous message:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<li><strong>In reply to:</strong> <a href="21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try v1.7.1?
<br>
<p>We did a major Fortran revamp in the 1.7.x series to bring it up to speed with MPI-3 Fortran stuff (at least mostly).  I mention MPI-3 because the name-based parameter passing stuff wasn't guaranteed until MPI-3.  I think 1.7.x should have gotten all the name-based parameter passing stuff correct (please let me know if you find any bugs!).
<br>
<p>Just to be clear: it is unlikely that we'll be updating the Fortran support in the 1.6.x series.
<br>
<p><p>On Apr 24, 2013, at 8:52 PM, W Spector &lt;w6ws_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI Standard specifies to use 'ierror' for the final argument in most Fortran MPI calls.  However the Openmpi f90 module defines it as being 'ierr'.  This messes up those who want to use keyword=value syntax in their calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked the latest 1.6.4 release and it is still broken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this something that can be fixed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Walter
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
<li><strong>Next message:</strong> <a href="21790.php">MHPC 2013: "[OMPI users] CfP 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<li><strong>Previous message:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<li><strong>In reply to:</strong> <a href="21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
