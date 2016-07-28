<?
$subject_val = "[OMPI users] --enable-progress-threads broken in 1.5.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 05:20:38 2011" -->
<!-- isoreceived="20110428092038" -->
<!-- sent="Thu, 28 Apr 2011 11:20:33 +0200" -->
<!-- isosent="20110428092033" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] --enable-progress-threads broken in 1.5.3?" -->
<!-- id="4DB93161.3080007_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] --enable-progress-threads broken in 1.5.3?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 05:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Previous message:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Reply:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI folks,
<br>
<p>I've tried to install /1.5.3 version with aktivated progress threads 
<br>
(just to try it out) in addition to --enable-mpi-threads. The 
<br>
installation was fine, I also could build binaries, but each mpiexec 
<br>
call hangs forever silently. With the very same configuration options 
<br>
but without --enable-progress-threads, everything runs fine.
<br>
<p>So I wonder about the --enable-progress-threads is broken, or maybe I 
<br>
did something wrong?
<br>
<p><p>The configuration line was:
<br>
<p>./configure --with-openib --with-lsf --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-mpi-threads 
<br>
--enable-progress-threads --enable-heterogeneous --enable-cxx-exceptions 
<br>
--enable-orterun-prefix-by-default &lt;........&gt;
<br>
<p>where &lt;........&gt; contain prefix and some compiler-specific stuff.
<br>
<p>All versions compilerd (GCC, Intel, PGI, Sun Studio compilers, 23bit and 
<br>
64bit) behaves the very same way.
<br>
<p><p>Best wishes,
<br>
<p>Paul
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16367/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Previous message:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Reply:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
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
