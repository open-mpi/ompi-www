<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 13:09:10 2010" -->
<!-- isoreceived="20101008170910" -->
<!-- sent="Fri, 8 Oct 2010 13:09:05 -0400" -->
<!-- isosent="20101008170905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="2A9212F7-F95C-4023-9156-DA7E41149736_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTim58B6KYmVYX8d3dnFuz+3GTdNqpc7-=TEHG2qS_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 13:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14423.php">Ed Peddycoart: "[OMPI users] OpenMPI and glut"</a>
<li><strong>Previous message:</strong> <a href="14421.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14421.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2010, at 1:00 PM, G&#246;tz Waschk wrote:
<br>
<p><span class="quotelev1">&gt; I have solved this problem myself. The trick is not to use the
</span><br>
<span class="quotelev1">&gt; compiler wrappers but icc and ifort directly. But in that case you'll
</span><br>
<span class="quotelev1">&gt; have to link to libmpi_f77 manually and set the variable RUNPARALLEL
</span><br>
<span class="quotelev1">&gt; to a working mpirun command.
</span><br>
<p>Strange.
<br>
<p>Be sure to see: <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14423.php">Ed Peddycoart: "[OMPI users] OpenMPI and glut"</a>
<li><strong>Previous message:</strong> <a href="14421.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14421.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14426.php">Gus Correa: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
