<?
$subject_val = "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 10:40:19 2012" -->
<!-- isoreceived="20121212154019" -->
<!-- sent="Wed, 12 Dec 2012 16:33:11 +0100 (CET)" -->
<!-- isosent="20121212153311" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux" -->
<!-- id="201212121533.qBCFXBKR009466_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 10:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20928.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
<li><strong>Previous message:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20932.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Reply:</strong> <a href="20932.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Maybe reply:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build openmpi-1.6.4a1r27643 on several platforms
<br>
(Solaris Sparc, Solaris x86_64, and Linux x86_64) with Solaris
<br>
Studio C (Sun C 5.12) in 32 and 64 bit mode. &quot;configure&quot; broke
<br>
on Linux (openSuSE Linux 12.1) for the 32 bit version with the
<br>
following error:
<br>
<p>...
<br>
checking if Fortran 77 compiler supports INTEGER*16... yes
<br>
checking size of Fortran 77 INTEGER*16... configure: error:
<br>
&nbsp;&nbsp;Could not determine size of INTEGER*16
<br>
linpc1 openmpi-1.6.4-Linux.x86_64.32_cc 144 
<br>
<p><p>I could compile a 32 bit version of openmpi-1.9a1r27668 on the
<br>
machine without problems.
<br>
<p>linpc1 openmpi-1.9-Linux.x86_64.32_cc 148 grep &quot;INTEGER\*16&quot; 
<br>
log.configure.Linux.x86_64.32_cc
<br>
checking if Fortran compiler supports INTEGER*16... no
<br>
linpc1 openmpi-1.9-Linux.x86_64.32_cc 149 
<br>
<p>Does anybody have an idea why &quot;configure&quot; broke for
<br>
openmpi-1.6.4a1r27643 and how I can fix the problem? Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20928.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
<li><strong>Previous message:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20932.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Reply:</strong> <a href="20932.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Maybe reply:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
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
