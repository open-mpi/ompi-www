<?
$subject_val = "[OMPI users] OpenMPI with blcr problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 13:40:47 2014" -->
<!-- isoreceived="20141201184047" -->
<!-- sent="Mon, 1 Dec 2014 11:39:53 -0700" -->
<!-- isosent="20141201183953" -->
<!-- name="Dewan Ibtesham (Shafi)" -->
<!-- email="dewan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with blcr problem" -->
<!-- id="CAKfG0+o_hzu3-gi40vz7JztSA-0QD8J2N0hpgFyAhmdQSC6b3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with blcr problem<br>
<strong>From:</strong> Dewan Ibtesham (Shafi) (<em>dewan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 13:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25898.php">Jörg Stiller: "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25899.php">Dewan Ibtesham (Shafi): "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Maybe reply:</strong> <a href="25899.php">Dewan Ibtesham (Shafi): "Re: [OMPI users] OpenMPI with blcr problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build blcr with openmpi. I have done it before without any
<br>
problem with earlier versions of openMPI but having problem on
<br>
1.8.3
<br>
<p>When I tried to configure, I get the following warning
<br>
<p>&quot;configure:298525: WARNING: unrecognized options: --with-ft, --with-blcr&quot;
<br>
<p>./configure --help also doesn't provide any blcr related inputs.
<br>
<p>I went ahead and built it anyway and the following libraries are generated
<br>
instead of blcr specific ones.
<br>
<p>mca_crs_none.la
<br>
mca_crs_none.so
<br>
<p>Attached is the config log.
<br>
<p>Thank you
<br>
<p>DI
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25897/config.log.tgz">config.log.tgz</a>
</ul>
<!-- attachment="config.log.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25898.php">Jörg Stiller: "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="25896.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25899.php">Dewan Ibtesham (Shafi): "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Maybe reply:</strong> <a href="25899.php">Dewan Ibtesham (Shafi): "Re: [OMPI users] OpenMPI with blcr problem"</a>
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
