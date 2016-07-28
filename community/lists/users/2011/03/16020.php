<?
$subject_val = "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 18:41:07 2011" -->
<!-- isoreceived="20110327224107" -->
<!-- sent="Mon, 28 Mar 2011 02:41:00 +0400" -->
<!-- isosent="20110327224100" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so" -->
<!-- id="AANLkTik5RUtpm6-=VmQwznkRRK2iJ54Yff=AOmuNELBy_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim6gtrEfqHtcc2w1a=cZ=Ubp_EFGwnPDwHzXSKp_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-27 18:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15986.php">Dmitry N. Mikushin: "[OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16054.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>Reply:</strong> <a href="16054.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I checked that this issue is not caused by using different compile
<br>
options for different libraries. There is a set of libraries and
<br>
executable compiled with mpif90, and this warning comes for
<br>
executable's object and one of libraries...
<br>
<p>2011/3/25 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm wondering if anybody have seen something similar, and have you
</span><br>
<span class="quotelev1">&gt; succeeded to run your application compiled by openmpi-pgi-1.4.2 with
</span><br>
<span class="quotelev1">&gt; the following warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_'
</span><br>
<span class="quotelev1">&gt; changed from 4 in foo.o to 8 in lib/libfoolib2.so
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `mpi_fortran_argv_null_' changed
</span><br>
<span class="quotelev1">&gt; from 1 in foo.o to 8 in lib/libfoolib2.so
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_message_mod_0_' in
</span><br>
<span class="quotelev1">&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_abort_mod_0_' in
</span><br>
<span class="quotelev1">&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_ioinit_mod_0_' in
</span><br>
<span class="quotelev1">&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_gatherv_mod_6_' in
</span><br>
<span class="quotelev1">&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Symbols names look like being internal to OpenMPI, there was one
</span><br>
<span class="quotelev1">&gt; similar issue in archive back in 2006:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/11057">https://svn.open-mpi.org/trac/ompi/changeset/11057</a> could it be hit
</span><br>
<span class="quotelev1">&gt; again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16021.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16019.php">David Zhang: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15986.php">Dmitry N. Mikushin: "[OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16054.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>Reply:</strong> <a href="16054.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
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
