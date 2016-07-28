<?
$subject_val = "[OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 18:33:59 2011" -->
<!-- isoreceived="20110324223359" -->
<!-- sent="Fri, 25 Mar 2011 01:33:52 +0300" -->
<!-- isosent="20110324223352" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so" -->
<!-- id="AANLkTim6gtrEfqHtcc2w1a=cZ=Ubp_EFGwnPDwHzXSKp_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 18:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15987.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15985.php">McCalla, Mac: "Re: [OMPI users] intel compiler linking issue and issue ofenvironment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>Reply:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm wondering if anybody have seen something similar, and have you
<br>
succeeded to run your application compiled by openmpi-pgi-1.4.2 with
<br>
the following warnings:
<br>
<p>/usr/bin/ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_'
<br>
changed from 4 in foo.o to 8 in lib/libfoolib2.so
<br>
/usr/bin/ld: Warning: size of symbol `mpi_fortran_argv_null_' changed
<br>
from 1 in foo.o to 8 in lib/libfoolib2.so
<br>
/usr/bin/ld: Warning: alignment 16 of symbol `_mpl_message_mod_0_' in
<br>
lib/libfoolib1.so is smaller than 32 in foo.o
<br>
/usr/bin/ld: Warning: alignment 16 of symbol `_mpl_abort_mod_0_' in
<br>
lib/libfoolib1.so is smaller than 32 in foo.o
<br>
/usr/bin/ld: Warning: alignment 16 of symbol `_mpl_ioinit_mod_0_' in
<br>
lib/libfoolib1.so is smaller than 32 in foo.o
<br>
/usr/bin/ld: Warning: alignment 16 of symbol `_mpl_gatherv_mod_6_' in
<br>
lib/libfoolib1.so is smaller than 32 in foo.o
<br>
<p>Symbols names look like being internal to OpenMPI, there was one
<br>
similar issue in archive back in 2006:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/11057">https://svn.open-mpi.org/trac/ompi/changeset/11057</a> could it be hit
<br>
again?
<br>
<p>Thanks,
<br>
- D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15987.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15985.php">McCalla, Mac: "Re: [OMPI users] intel compiler linking issue and issue ofenvironment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>Reply:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
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
