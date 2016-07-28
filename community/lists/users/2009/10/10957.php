<?
$subject_val = "[OMPI users] MPI_INIT failure while building coinor-ipopt";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 24 17:01:15 2009" -->
<!-- isoreceived="20091024210115" -->
<!-- sent="Sat, 24 Oct 2009 17:01:06 -0400" -->
<!-- isosent="20091024210106" -->
<!-- name="Roberto C. S&#225;nchez" -->
<!-- email="roberto_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_INIT failure while building coinor-ipopt" -->
<!-- id="20091024210106.GD9563_at_connexer.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_INIT failure while building coinor-ipopt<br>
<strong>From:</strong> Roberto C. S&#225;nchez (<em>roberto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-24 17:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Previous message:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Reply:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am in the process of packaging coinor-ipopt for Debian.  The build
<br>
process fails during the 'make test' phase.  The error message referense
<br>
otre_init, ompi_mpi_init and MPI_INIT.  I have already asked on the
<br>
ipopt mailing list [0].  However, that query has not received any
<br>
replies.  I thought that perhaps I would ask here and see if anyone on
<br>
this list could offer some insight.
<br>
<p>I have attached the following:
<br>
<p>- the output of Debian package build 
<br>
- the specific output from the 'make test' step
<br>
- the output of 'ompi_info --all'
<br>
<p>Any pointers would be much appreciated.
<br>
<p>Regards,
<br>
<p>-Roberto
<br>
<p>[0] <a href="http://list.coin-or.org/pipermail/ipopt/2009-October/001730.html">http://list.coin-or.org/pipermail/ipopt/2009-October/001730.html</a>
<br>
<p><pre>
-- 
Roberto C. S&#225;nchez
<a href="http://people.connexer.com/~roberto">http://people.connexer.com/~roberto</a>
<a href="http://www.connexer.com">http://www.connexer.com</a>



</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10957/build.out.bz2">build.out.bz2</a>
</ul>
<!-- attachment="build.out.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10957/make_test.out.bz2">make_test.out.bz2</a>
</ul>
<!-- attachment="make_test.out.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10957/ompi_info.out.bz2">ompi_info.out.bz2</a>
</ul>
<!-- attachment="ompi_info.out.bz2" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10957/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Previous message:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Reply:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
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
