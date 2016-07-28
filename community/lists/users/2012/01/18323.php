<?
$subject_val = "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 18:41:38 2012" -->
<!-- isoreceived="20120130234138" -->
<!-- sent="Tue, 31 Jan 2012 00:41:24 +0100" -->
<!-- isosent="20120130234124" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile" -->
<!-- id="6D428561-EB16-48EB-ABEF-91786E6AE74E_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="39B5ED61E7BFC24FA8277B6DE92A9A3F04428F31_at_fkimlki01.enterprise.afmc.ds.af.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 18:41:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>Previous message:</strong> <a href="18322.php">Cable, Sam B Civ USAF AFMC AFRL/RVBXI: "[OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>In reply to:</strong> <a href="18322.php">Cable, Sam B Civ USAF AFMC AFRL/RVBXI: "[OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>Reply:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2012 um 00:24 schrieb Cable, Sam B Civ USAF AFMC AFRL/RVBXI:
<br>
<p><span class="quotelev1">&gt; I need to build OpenMPI with Portland Group Fortran.  I need to add a flag to the pgf90 linker command that is run when mpif90 is invoked.  I have tried configuring with LDFLAGS and &#150;with-wrapper-ldflags, but nothing works.  I am thinking that surely there is a way to get non-default flags put into the pgf90 command, but I am out of options, as far as I can tell.  Anyone know how to do this?  Thanks.
</span><br>
<p>Do you need it all the time? There is a preferences file which will always be applied called ~/.mypgirc, I suggest to ask in the pgroup forum for the detailed syntax for your case (I think it's still undocumented and only mentioned in the user's guide briefly on page 14/15). In my case the syntax they suggested was: 
<br>
<p>set POSTOPTIONS=$ifn(-tp,-tp=k8-64);
<br>
<p>to always compile for a common AMD64 platform, independent where the compiler runs on and w/o command line options; maybe you can adjust it for your case along the brief description in the user's guide.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>Previous message:</strong> <a href="18322.php">Cable, Sam B Civ USAF AFMC AFRL/RVBXI: "[OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>In reply to:</strong> <a href="18322.php">Cable, Sam B Civ USAF AFMC AFRL/RVBXI: "[OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
<li><strong>Reply:</strong> <a href="18324.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and pgf90 -- adding flags to mpif90 compile"</a>
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
