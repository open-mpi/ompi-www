<?
$subject_val = "[OMPI users] update to problem with rankfiles";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 04:09:26 2014" -->
<!-- isoreceived="20140811080926" -->
<!-- sent="Mon, 11 Aug 2014 10:08:47 +0200 (CEST)" -->
<!-- isosent="20140811080847" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] update to problem with rankfiles" -->
<!-- id="201408110808.s7B88lw7021739_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] update to problem with rankfiles<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 04:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24968.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.8.2rc4r32485 on my machines
<br>
(Solaris 10 Sparc (tyr), Solaris 10 x86_64 (sunpc0, sunpc1),
<br>
openSUSE Linux 12.1 x86_64 (linpc0, linpc1)) with Sun C 5.12.
<br>
Today I was playing around a little bit more with rankfiles
<br>
and found the following things which may be helpful tracking
<br>
down the error. I use variations of the following rankfile
<br>
(I remove a line and adapt ranks). Many rankfiles work fine
<br>
and a few break.
<br>
<p>tyr openmpi_1.7.x_or_newer 180 cat x-linpc0_linpc1_sunpc1_tyr 
<br>
rank 0=linpc0 slot=0:0-1;1:0-1
<br>
rank 1=linpc1 slot=1:0
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=tyr slot=1:0
<br>
<p>The above rankfile still breaks..
<br>
<p>tyr openmpi_1.7.x_or_newer 186 mpiexec --report-bindings -np 4 -rf x-linpc0_linpc1_sunpc1_tyr hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;Variable     : hwloc_base_report_bindings
<br>
&nbsp;&nbsp;Value        : 1,1
<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
[tyr.informatik.hs-fulda.de:21651] MCW rank 3 bound to socket 1[core 1[hwt 0]]: [.][B]
<br>
tyr.informatik.hs-fulda.de
<br>
[linpc0:21338] MCW rank 0 is not bound (or bound to all available processors)
<br>
[linpc1:16906] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
linpc0
<br>
linpc1
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 187 
<br>
<p><p>tyr openmpi_1.7.x_or_newer 191 mpiexec --report-bindings -np 3 -rf x-linpc0_linpc1_tyr hostname
<br>
[tyr.informatik.hs-fulda.de:21685] MCW rank 2 bound to socket 1[core 1[hwt 0]]: [.][B]
<br>
tyr.informatik.hs-fulda.de
<br>
[linpc0:21607] MCW rank 0 is not bound (or bound to all available processors)
<br>
linpc0
<br>
[linpc1:17168] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
linpc1
<br>
tyr openmpi_1.7.x_or_newer 192 
<br>
<p><p>tyr openmpi_1.7.x_or_newer 193 mpiexec --report-bindings -np 3 -rf x-linpc0_sunpc1_tyr hostname
<br>
[tyr.informatik.hs-fulda.de:21695] MCW rank 2 bound to socket 1[core 1[hwt 0]]: [.][B]
<br>
tyr.informatik.hs-fulda.de
<br>
[linpc0:21673] MCW rank 0 is not bound (or bound to all available processors)
<br>
linpc0
<br>
[sunpc1:25457] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 194 
<br>
<p><p>tyr openmpi_1.7.x_or_newer 195 mpiexec --report-bindings -np 3 -rf x-linpc0_linpc1_sunpc1 hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;Variable     : hwloc_base_report_bindings
<br>
&nbsp;&nbsp;Value        : 1,1
<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
[linpc0:21743] MCW rank 0 is not bound (or bound to all available processors)
<br>
[linpc1:17240] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
linpc1
<br>
linpc0
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 196 
<br>
<p><p>tyr openmpi_1.7.x_or_newer 197 mpiexec --report-bindings -np 2 -rf x-linpc0_sunpc1 hostname
<br>
[linpc0:21836] MCW rank 0 is not bound (or bound to all available processors)
<br>
linpc0
<br>
[sunpc1:25521] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 198 
<br>
<p><p>tyr openmpi_1.7.x_or_newer 199 mpiexec --report-bindings -np 2 -rf x-linpc1_sunpc1 hostname
<br>
[linpc1:17335] MCW rank 0 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
linpc1
<br>
[sunpc1:25583] MCW rank 1 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 200 
<br>
<p><p>I would be grateful if somebody can fix the problem. Can I provide
<br>
anything else? Thank you very much any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24968.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
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
