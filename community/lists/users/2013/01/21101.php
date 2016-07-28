<?
$subject_val = "[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 02:03:48 2013" -->
<!-- isoreceived="20130111070348" -->
<!-- sent="Fri, 11 Jan 2013 07:57:06 +0100 (CET)" -->
<!-- isosent="20130111065706" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10" -->
<!-- id="201301110657.r0B6v6PT023031_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 01:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<li><strong>Maybe reply:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I tried to build openmpi-1.6.4a1r27766 on Solaris 10 Sparc and
<br>
x86_64 with Sun C 5.12 and gcc-4.7.1 and got the following error
<br>
for all combinations.
<br>
<p>...
<br>
&nbsp;&nbsp;CC     vt_execwrap.lo
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 187: warning: implicit function declaration: VTTHRD_MALLOC_TRACING_ENABLED
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 358: undefined symbol: environ
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 358: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 410: undefined symbol: environ
<br>
&quot;../../../../../../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c&quot;,
<br>
&nbsp;&nbsp;line 410: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
cc: acomp failed for .../openmpi-1.6.4a1r27766/ompi/contrib/vt/vt/vtlib/vt_execwrap.c
<br>
make[5]: *** [vt_execwrap.lo] Error 1
<br>
make[5]: Leaving directory `.../ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
...
<br>
<p><p>I would be grateful if you could solve the problem. Thank you
<br>
very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<li><strong>Maybe reply:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
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
