<?
$subject_val = "[OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 09:53:52 2009" -->
<!-- isoreceived="20090601135352" -->
<!-- sent="Mon, 1 Jun 2009 07:53:47 -0600" -->
<!-- isosent="20090601135347" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk is broken" -->
<!-- id="71d2d8cc0906010653q17512ea9ic892e60b21ce7b50_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 09:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I'm getting the following build failures this morning - looks like something
<br>
crept in over the weekend?
<br>
<p>ompi/peruse/Makefile.am:19: WANT_PERUSE does not appear in AM_CONDITIONAL
<br>
ompi/Makefile.am:155:   `ompi/peruse/Makefile.am' included from here
<br>
ompi/Makefile.am: installing `config/depcomp'
<br>
ompi/mpi/f90/Makefile.am:242: OMPI_WANT_BUILD_F90_SMALL does not appear in
<br>
AM_CONDITIONAL
<br>
ompi/mpi/f90/Makefile.am:245: OMPI_WANT_BUILD_F90_MEDIUM does not appear in
<br>
AM_CONDITIONAL
<br>
ompi/mpi/f90/Makefile.am:248: OMPI_WANT_BUILD_F90_LARGE does not appear in
<br>
AM_CONDITIONAL
<br>
test/peruse/Makefile.am:19: WANT_PERUSE does not appear in AM_CONDITIONAL
<br>
<p><p>Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
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
