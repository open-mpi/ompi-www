<?
$subject_val = "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 07:39:14 2011" -->
<!-- isoreceived="20110330113914" -->
<!-- sent="Wed, 30 Mar 2011 06:39:07 -0500" -->
<!-- isosent="20110330113907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so" -->
<!-- id="2C19B1EB-7312-422B-BA20-AECE7B4CDEE8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTik5RUtpm6-=VmQwznkRRK2iJ54Yff=AOmuNELBy_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 07:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16055.php">Hellmüller  Roman: "[OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Previous message:</strong> <a href="16053.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I have seen this problem before, it *usually* indicated a mismatch of Open MPI versions that were not ABI compatible.  I.e., the application was compiled and linked against Open MPI version X, but then at run time, it found the shared libraries for Open MPI version Y -- and X is not ABI compatible with Y.
<br>
<p>That being said:
<br>
<p><span class="quotelev2">&gt;&gt; Warning: size of symbol `mpi_fortran_argv_null_' changed
</span><br>
<span class="quotelev2">&gt;&gt; from 1 in foo.o to 8 in lib/libfoolib2.so
</span><br>
<p>Doesn't sound like a version mismatch problem.  A quick check through the history of OMPI's source code reveals that mpi_fortran_argv_null has been a (char*) since way back in v1.2.x days.  So I'm curious as to how it could have a size of 1.
<br>
<p>How did you compile foo.o?
<br>
<p><p><p>On Mar 27, 2011, at 5:41 PM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; I checked that this issue is not caused by using different compile
</span><br>
<span class="quotelev1">&gt; options for different libraries. There is a set of libraries and
</span><br>
<span class="quotelev1">&gt; executable compiled with mpif90, and this warning comes for
</span><br>
<span class="quotelev1">&gt; executable's object and one of libraries...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/3/25 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering if anybody have seen something similar, and have you
</span><br>
<span class="quotelev2">&gt;&gt; succeeded to run your application compiled by openmpi-pgi-1.4.2 with
</span><br>
<span class="quotelev2">&gt;&gt; the following warnings:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_'
</span><br>
<span class="quotelev2">&gt;&gt; changed from 4 in foo.o to 8 in lib/libfoolib2.so
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: size of symbol `mpi_fortran_argv_null_' changed
</span><br>
<span class="quotelev2">&gt;&gt; from 1 in foo.o to 8 in lib/libfoolib2.so
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_message_mod_0_' in
</span><br>
<span class="quotelev2">&gt;&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_abort_mod_0_' in
</span><br>
<span class="quotelev2">&gt;&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_ioinit_mod_0_' in
</span><br>
<span class="quotelev2">&gt;&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Warning: alignment 16 of symbol `_mpl_gatherv_mod_6_' in
</span><br>
<span class="quotelev2">&gt;&gt; lib/libfoolib1.so is smaller than 32 in foo.o
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Symbols names look like being internal to OpenMPI, there was one
</span><br>
<span class="quotelev2">&gt;&gt; similar issue in archive back in 2006:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/11057">https://svn.open-mpi.org/trac/ompi/changeset/11057</a> could it be hit
</span><br>
<span class="quotelev2">&gt;&gt; again?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - D.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="16055.php">Hellmüller  Roman: "[OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Previous message:</strong> <a href="16053.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16020.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- nextthread="start" -->
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
