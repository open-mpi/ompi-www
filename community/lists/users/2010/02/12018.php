<?
$subject_val = "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 01:38:28 2010" -->
<!-- isoreceived="20100205063828" -->
<!-- sent="Thu, 4 Feb 2010 23:38:23 -0700 (MST)" -->
<!-- isosent="20100205063823" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="56681.130.55.127.2.1265351903.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B6B0175.7020704_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround<br>
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 01:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12017.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing, Damien,
<br>
<p><span class="quotelev1">&gt; If you already have an x86 solution, and you want to have
</span><br>
<span class="quotelev1">&gt; another for x64, you have to start over from the CMake-GUI, select the
</span><br>
<span class="quotelev1">&gt; 64 bit generator, i.e. &quot;Visual Studio 9 2008 64bit&quot;, so that to generate
</span><br>
<span class="quotelev1">&gt; the a new solution in a different directory.
</span><br>
<p>That was the source of my problem.  I had overlooked the other Visual
<br>
Studio 9 2008 option, thinking there was just one for the package -- and
<br>
ended up thinking I had to switch using the configuration manager in
<br>
VS2008 itself.
<br>
<p>Thanks!
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12017.php">Ralph Castain: "Re: [OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
