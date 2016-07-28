<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 11:23:56 2013" -->
<!-- isoreceived="20131202162356" -->
<!-- sent="Mon, 2 Dec 2013 16:23:54 +0000" -->
<!-- isosent="20131202162354" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting." -->
<!-- id="6AD62DBE-EB96-400D-A3A1-1C41D4B3F5CF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOkcFK2RnxNwiLPAw02VWV0ROR51LpdfaRLL6qeBMMy+7zqZbg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 11:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23110.php">Raiden Hasegawa: "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your Fortran compiler installation is borked.  Have you tested with the same test program that configure used?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>Put that in a simple &quot;conftest.f&quot; file, and try the same invocation line that configure used:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/bin/gfortran -o conftest    conftest.f
<br>
<p>Does that work?
<br>
<p>If that works and does not yield the same error that configure saw, then perhaps there is some environment variable(s) that are/were present when you run configure that are not present when you try the test manually...?
<br>
<p><p>On Dec 1, 2013, at 8:51 AM, Raiden Hasegawa &lt;raiden.hasegawa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All, new to the list here.  I'm running into an error while trying to configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ ./configure --prefix=/usr/local/Cellar/open-mpi/1.7.3 --disable-silent-rules --enable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a blurb from the config.log (which I have attached as well):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:29606: checking if Fortran compiler works
</span><br>
<span class="quotelev1">&gt; configure:29635: /usr/local/bin/gfortran -o conftest    conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;__gfortran_set_options&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in cccSAmNO.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:29635: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt; configure:29651: result: no
</span><br>
<span class="quotelev1">&gt; configure:29665: error: Could not run a simple Fortran program.  Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tested my gfortran compiler on some simple &quot;Hello World&quot; programs and it works just fine.  I am having trouble diagnosing the problem and any and all help would be appreciated.  Here are my specs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mac os x 10.8.4
</span><br>
<span class="quotelev1">&gt; gcc and gfortran 4.8.2 (both installed using homebrew)
</span><br>
<span class="quotelev1">&gt; open-mpi 1.7.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Raiden
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23113.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23110.php">Raiden Hasegawa: "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
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
