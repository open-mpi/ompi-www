<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 16:31:32 2007" -->
<!-- isoreceived="20070723203132" -->
<!-- sent="Mon, 23 Jul 2007 13:31:27 -0700 (PDT)" -->
<!-- isosent="20070723203127" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_HOME" -->
<!-- id="904632.85738.qm_at_web57615.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 16:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Reply:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
openmpi-1.2.3 compiled on Debian Linux amd64 etch with 
<br>
<p>./configure CC=/opt/intel/cce/9.1.042/bin/icc
<br>
CXX=/opt/intel/cce/9.1.042/bin/icpc F77=/opt/intel/fce/9.1.036/bin/ifort
<br>
FC=/opt/intel/fce/9.1.036/bin/ifort --with-libnuma=/usr/lib
<br>
<p>ompi_info |grep libnuma
<br>
<p>ompi_info |grep maffinity
<br>
<p>reported OK, though an attempt to install Amber9 parallel, at
<br>
<p>./configure -openmpi ifort_x86_64
<br>
<p>reported:
<br>
<p>Error, MPI_HOME must be set.
<br>
<p>OK, for my installation and bash it should be
<br>
<p>export MPI_HOME=/usr/local/openmpi-1.2.3
<br>
<p>Not tried, because the above Error message also contained:
<br>
<p>Set it where the location of the include/ and lib/ subdirectories containing
<br>
mpi.f
<br>
libmpi.a
<br>
liblam.a
<br>
liblamf77mpi.a
<br>
<p>which was confusing to me. None of these libraries on my system and I never
<br>
advocated lam
<br>
<p>Thanks for helping
<br>
<p>francesco pietra
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Fussy? Opinionated? Impossible to please? Perfect.  Join Yahoo!'s user panel and lay it on us. <a href="http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7">http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Reply:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
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
