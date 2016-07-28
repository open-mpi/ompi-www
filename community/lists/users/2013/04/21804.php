<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 14:47:09 2013" -->
<!-- isoreceived="20130426184709" -->
<!-- sent="Fri, 26 Apr 2013 18:47:05 +0000" -->
<!-- isosent="20130426184705" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C2A7F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5179349F.10309_at_earthlink.net" -->
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
<strong>Date:</strong> 2013-04-26 14:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21803.php">Mehmet Belgin: "[OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24525.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2013, at 9:50 AM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just downloaded 1.7.1.  The new files in the use-mpi-f08 look great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However the use-mpi-tkr and use-mpi-ignore-tkr directories don't fare so well.  Literally all the interfaces are still 'ierr'.
</span><br>
<p>Oy.  I probably should have realized that before I sent it to you...
<br>
<p><span class="quotelev1">&gt; While I realize that both the F90 mpi module and interface checking, were optional prior to MPI 3.0, the final argument has been called 'ierror' since MPI 1!  This really should be fixed.
</span><br>
<p>Will do.  I just talked to my Fortran partner in crime on the OMPI project (Craig Rasmussen), and he agreed to add it to his to-do list.  It might take a little time to get done, but I'll open a bug on it so that it's not forgotten.
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
<li><strong>Next message:</strong> <a href="21805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21803.php">Mehmet Belgin: "[OMPI users] ADIOI Lock problems on NFS and Panasas with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24525.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
