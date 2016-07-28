<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  7 02:45:40 2013" -->
<!-- isoreceived="20131007064540" -->
<!-- sent="Mon, 7 Oct 2013 12:15:40 +0530" -->
<!-- isosent="20131007064540" -->
<!-- name="San B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="CAC2jn-SAXmb2idRTMKFEFnjGgLeAfrQxbCau7CNszYWRtsp8ng_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> San B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-07 02:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22769.php">Reuti: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22767.php">Ralph Castain: "Re: [OMPI users] Open MPI + DMTCP for checkpoint and restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22769.php">Reuti: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22774.php">Iliev, Hristo: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm facing a  performance issue with a scientific application(Fortran). The
<br>
issue is, it runs faster on single node but runs very slow on multiple
<br>
nodes. For example, a 16 core job on single node finishes in 1hr 2mins, but
<br>
the same job on two nodes (i.e. 8 cores per node &amp; remaining 8 cores kept
<br>
free) takes 3hr 20mins. The code is compiled with ifort-13.1.1,
<br>
openmpi-1.4.5 and intel MKL libraries - lapack, blas, scalapack, blacs &amp;
<br>
fftw. What could be the problem here with?
<br>
Is it possible to do any tuning in OpenMPI? FY More info: The cluster has
<br>
Intel Sandybridge processor (E5-2670), infiniband and Hyperthreading is
<br>
Enabled. Jobs are submitted thru LSF scheduler.
<br>
<p>Does HyperThreading causing any problem here?
<br>
<p><p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22768/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22769.php">Reuti: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22767.php">Ralph Castain: "Re: [OMPI users] Open MPI + DMTCP for checkpoint and restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22769.php">Reuti: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22774.php">Iliev, Hristo: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
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
