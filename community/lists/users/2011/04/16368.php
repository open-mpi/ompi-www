<?
$subject_val = "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 08:00:22 2011" -->
<!-- isoreceived="20110428120022" -->
<!-- sent="Thu, 28 Apr 2011 08:00:16 -0400" -->
<!-- isosent="20110428120016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --enable-progress-threads broken in 1.5.3?" -->
<!-- id="932AD19A-819C-4AD6-90F8-D74F18A3C74A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB93161.3080007_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] --enable-progress-threads broken in 1.5.3?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 08:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16369.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_create prevents external socket connections"</a>
<li><strong>Previous message:</strong> <a href="16367.php">Paul Kapinos: "[OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16367.php">Paul Kapinos: "[OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Reply:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is quite likely that --enable-progress-threads is broken.  I think it's even disabled in 1.4.x; I wonder if we should do the same in 1.5.x...
<br>
<p><p>On Apr 28, 2011, at 5:20 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi OpenMPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried to install /1.5.3 version with aktivated progress threads (just to try it out) in addition to --enable-mpi-threads. The installation was fine, I also could build binaries, but each mpiexec call hangs forever silently. With the very same configuration options but without --enable-progress-threads, everything runs fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I wonder about the --enable-progress-threads is broken, or maybe I did something wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configuration line was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib --with-lsf --with-devel-headers --enable-contrib-no-build=vt --enable-mpi-threads --enable-progress-threads --enable-heterogeneous --enable-cxx-exceptions --enable-orterun-prefix-by-default &lt;........&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where &lt;........&gt; contain prefix and some compiler-specific stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All versions compilerd (GCC, Intel, PGI, Sun Studio compilers, 23bit and 64bit) behaves the very same way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="16369.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_create prevents external socket connections"</a>
<li><strong>Previous message:</strong> <a href="16367.php">Paul Kapinos: "[OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16367.php">Paul Kapinos: "[OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Reply:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
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
