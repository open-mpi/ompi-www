<?
$subject_val = "[OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 07:09:00 2015" -->
<!-- isoreceived="20150601110900" -->
<!-- sent="Mon, 1 Jun 2015 13:06:58 +0200 (CEST)" -->
<!-- isosent="20150601110658" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88" -->
<!-- id="201506011106.t51B6wQp008928_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 07:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27009.php">Siegmar Gross: "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<li><strong>Previous message:</strong> <a href="27007.php">Siegmar Gross: "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-v1.10-dev-41-g57faa88 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the following error
<br>
on all platforms with cc.
<br>
<p>...
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_cc/ompi/mc
<br>
a/osc/pt2pt'
<br>
&nbsp;&nbsp;CC       osc_pt2pt_module.lo
<br>
&quot;../../../../../openmpi-v1.10-dev-41-g57faa88/opal/include/opal/sys/amd64/atomic.h&quot;, 
<br>
line 136: warning: parameter in inline asm statement unused: %3
<br>
&quot;../../../../../openmpi-v1.10-dev-41-g57faa88/opal/include/opal/sys/amd64/atomic.h&quot;, 
<br>
line 182: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-41-g57faa88/opal/include/opal/sys/amd64/atomic.h&quot;, 
<br>
line 203: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-41-g57faa88/opal/include/opal/sys/amd64/atomic.h&quot;, 
<br>
line 224: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-41-g57faa88/opal/include/opal/sys/amd64/atomic.h&quot;, 
<br>
line 245: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_header.h&quot;, 
<br>
line 389: improper member use: proc_arch
<br>
cc: acomp failed for 
<br>
../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_module.c
<br>
make[2]: *** [osc_pt2pt_module.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_cc/ompi/mc
<br>
a/osc/pt2pt'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_cc/ompi'
<br>
make: *** [check-recursive] Error 1
<br>
linpc1 openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_cc 148 
<br>
<p><p>I would be grateful, if somebody could fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27009.php">Siegmar Gross: "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<li><strong>Previous message:</strong> <a href="27007.php">Siegmar Gross: "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
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
