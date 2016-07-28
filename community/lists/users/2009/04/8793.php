<?
$subject_val = "Re: [OMPI users] libnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 16:24:54 2009" -->
<!-- isoreceived="20090406202454" -->
<!-- sent="Mon, 06 Apr 2009 16:24:50 -0400" -->
<!-- isosent="20090406202450" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma issue" -->
<!-- id="49DA6512.10304_at_ias.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="b87c422a0904030840p3231e4dxc7e749f6437cb757_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma issue<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 16:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8792.php">Prentice Bisbal: "Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8766.php">Francesco Pietra: "[OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; I am posting again more specifically because it may have been buried
</span><br>
<span class="quotelev1">&gt; in a more generic thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With debian linux amd64 lenny and openmpi-1.3.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure cc=/opt/intel/cce/10.1.015/bin/icc
</span><br>
<span class="quotelev1">&gt; cxx=/opt/intel/cce/10.1.015/bin/icpc
</span><br>
<span class="quotelev1">&gt; F77=/opt/intel/fce/10.1.015/bin/ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/10.1.015/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; failed because
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;expected file /usr/lib/include/numa.h was not found&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In debian amd64 lenny numa.h has a different location
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/numa.h&quot;. Attached is the config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate help in circumventing the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I believe you need
<br>
<p>--with-libnuma=/usr.
<br>
<p>The configure script then assumes the includes files are under
<br>
/usr/include and the libs are under /usr/lib
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8792.php">Prentice Bisbal: "Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8766.php">Francesco Pietra: "[OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
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
