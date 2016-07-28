<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 09:50:30 2013" -->
<!-- isoreceived="20130425135030" -->
<!-- sent="Thu, 25 Apr 2013 06:50:23 -0700" -->
<!-- isosent="20130425135023" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="5179349F.10309_at_earthlink.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4404F3F3_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 09:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21790.php">MHPC 2013: "[OMPI users] CfP 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<li><strong>In reply to:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I just downloaded 1.7.1.  The new files in the use-mpi-f08 look great!
<br>
<p>However the use-mpi-tkr and use-mpi-ignore-tkr directories don't fare so 
<br>
well.  Literally all the interfaces are still 'ierr'.
<br>
<p>While I realize that both the F90 mpi module and interface checking, 
<br>
were optional prior to MPI 3.0, the final argument has been called 
<br>
'ierror' since MPI 1!  This really should be fixed.
<br>
<p>Walter
<br>
<p>On 04/24/2013 06:08 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Can you try v1.7.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We did a major Fortran revamp in the 1.7.x series to bring it up to speed with MPI-3 Fortran stuff (at least mostly).  I mention MPI-3 because the name-based parameter passing stuff wasn't guaranteed until MPI-3.  I think 1.7.x should have gotten all the name-based parameter passing stuff correct (please let me know if you find any bugs!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be clear: it is unlikely that we'll be updating the Fortran support in the 1.6.x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2013, at 8:52 PM, W Spector &lt;w6ws_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;   wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The MPI Standard specifies to use 'ierror' for the final argument in most Fortran MPI calls.  However the Openmpi f90 module defines it as being 'ierr'.  This messes up those who want to use keyword=value syntax in their calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just checked the latest 1.6.4 release and it is still broken.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this something that can be fixed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Walter
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21790.php">MHPC 2013: "[OMPI users] CfP 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<li><strong>In reply to:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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
