<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 02:52:37 2009" -->
<!-- isoreceived="20090414065237" -->
<!-- sent="Tue, 14 Apr 2009 08:52:29 +0200" -->
<!-- isosent="20090414065229" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="1239691949.7289.5.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="49E3C131.50703_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 02:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-04-13 at 16:48 -0600, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; Seeing the following building openmpi 1.3.1 on CentOS 5.3 with PGI pgf90 
</span><br>
<span class="quotelev1">&gt; 8.0-5 fortran compiler:
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
</span><br>
<span class="quotelev1">&gt; checking for PTHREAD_MUTEX_ERRORCHECK... yes
</span><br>
<span class="quotelev1">&gt; checking for working POSIX threads package... no
</span><br>
<p><span class="quotelev1">&gt; Is there any way to get the PGI Fortran compiler to support threads for 
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<p>I recommend adding the attached pthread.h into pgi's internal include
<br>
dir.
<br>
The pthread.h in newer distros is VERY VERY GCC-centric and when using
<br>
any other compiler it very often fails to do the &quot;right&quot; thing.
<br>
<p>This pthread.h sets needed GCC-isms before parsing the real pthread.h.
<br>
<p>At least we haven't had any problems with getting openmpi and pgi to
<br>
work correctly together since.
<br>
(I found this problem when building openmpi 1.2.something)
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>

</pre>
<p>
<p><hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8888/pthread.h__charset_utf-8">pthread.h__charset_utf-8</a>
</ul>
<!-- attachment="pthread.h__charset_utf-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8887.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8890.php">Jean-Michel Beuken: "[OMPI users]  XLF and 1.3.1"</a>
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
