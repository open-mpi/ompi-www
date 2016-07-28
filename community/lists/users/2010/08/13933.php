<?
$subject_val = "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 05:12:14 2010" -->
<!-- isoreceived="20100809091214" -->
<!-- sent="Mon, 09 Aug 2010 09:59:59 +0200" -->
<!-- isosent="20100809075959" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround" -->
<!-- id="4C5FB57F.8090203_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C5C7183.7040607_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 03:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>Previous message:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<li><strong>In reply to:</strong> <a href="13921.php">Damien: "[OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi Damien,
<br>
<p>It is the user's responsibility to make sure the consistency of CMake 
<br>
and VS build types, but you can't change this setting from CMake in 
<br>
order to change it automatically in VS, it's a nature of using CMake.
<br>
<p><p>Shiqing
<br>
<p><p>On 2010-8-6 10:33 PM, Damien wrote:
<br>
<span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a small hiccup in building a Windows version of 1.5-rc5.  When 
</span><br>
<span class="quotelev1">&gt; you configure in the CMake GUI, you can ask for a Debug or Release 
</span><br>
<span class="quotelev1">&gt; project before you hit Generate.  If you ask for a Debug project, you 
</span><br>
<span class="quotelev1">&gt; can still change it to Release in Visual Studio, and it will build 
</span><br>
<span class="quotelev1">&gt; successfully.  BUT: the Install project will fail, because it tries to 
</span><br>
<span class="quotelev1">&gt; install libopen-pald.pdb (possibly others too, I didn't check).  It's 
</span><br>
<span class="quotelev1">&gt; a minor thing, only nuisance value.  If you set a Release project in 
</span><br>
<span class="quotelev1">&gt; CMake, everything works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13934.php">Nysal Jan: "Re: [OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>Previous message:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<li><strong>In reply to:</strong> <a href="13921.php">Damien: "[OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
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
