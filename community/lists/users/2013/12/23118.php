<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 15:47:30 2013" -->
<!-- isoreceived="20131202204730" -->
<!-- sent="Mon, 2 Dec 2013 20:47:22 +0000" -->
<!-- isosent="20131202204722" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting." -->
<!-- id="CFA34528-25B2-496A-B101-24432D5B9A38_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOkcFK104b=Ax=kcc4UYTTCWzhA90DWpc9_TQ3sgdWmJMeeoMA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 15:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23119.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23119.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23119.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2013, at 3:00 PM, Raiden Hasegawa &lt;raiden.hasegawa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Jeff.  The compiler does in fact work when running the troublesome line in ./configure.
</span><br>
<p>Errr... I'm not sure how to parse that.  The config.log you cited shows that the compiler does *not* work in configure:
<br>
<p>-----
<br>
configure:29606: checking if Fortran compiler works
<br>
configure:29635: /usr/local/bin/gfortran -o conftest    conftest.f  &gt;&amp;5
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;__gfortran_set_options&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in cccSAmNO.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: error: ld returned 1 exit status
<br>
configure:29635: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
|       program main
<br>
|
<br>
|       end
<br>
configure:29651: result: no
<br>
configure:29665: error: Could not run a simple Fortran program.  Aborting.
<br>
-----
<br>
<p>Did you typo and mean that the compiler does work when outside of configure, and fails when it is inside configure?
<br>
<p><span class="quotelev1">&gt; I haven't set either FC, FCFLAGS nor do I have LD_LIBRARY_PATH set in my .bashrc.  Do you have any thoughts on what environmental variable may trip this up?
</span><br>
<p>Do you have DYLD_LIBRARY_PATH set?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23119.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="23117.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23119.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23119.php">Raiden Hasegawa: "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
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
