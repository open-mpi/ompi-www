<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 12:46:00 2012" -->
<!-- isoreceived="20120627164600" -->
<!-- sent="Wed, 27 Jun 2012 12:45:55 -0400" -->
<!-- isosent="20120627164555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="7B91D712-BAD3-4C4C-8837-8242266B26FD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1340782584.69616.YahooMailNeo_at_web125703.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 12:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19680.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you verify that the exact same mpif77 / mpif90 is being invoked from within your Makefile as is invoked when you do it manually at a shell prompt?
<br>
<p><p>On Jun 27, 2012, at 3:36 AM, Mohamad Ali Rostami wrote:
<br>
<p><span class="quotelev1">&gt; Something strange,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By adding all the libraries which I found from mpif90/mpif77 --showme,
</span><br>
<span class="quotelev1">&gt; Fortran 77 version worked finally,
</span><br>
<span class="quotelev1">&gt; but Fortran 90 version still has the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_init' at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any idea??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 25, 2012 10:22 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI Problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    mpif90 my_application.f90 -o my_application
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, as I told you out of make file, it works.
</span><br>
<span class="quotelev2">&gt; &gt; The problem is something strange in the make file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry; I must have mis-parsed your issue, then.  So just to make sure I understand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ mpif90 my_application.f90 -o my_application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works fine, but:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ make
</span><br>
<span class="quotelev1">&gt; ...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; doesn't work.  Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that is picked up by your shell.  Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19680.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19682.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
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
