<?
$subject_val = "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 07:08:56 2015" -->
<!-- isoreceived="20150601110856" -->
<!-- sent="Mon, 1 Jun 2015 13:06:43 +0200 (CEST)" -->
<!-- isosent="20150601110643" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88" -->
<!-- id="201506011106.t51B6hlM008922_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 07:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27008.php">Siegmar Gross: "[OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="27006.php">Manoj Vaghela: "[OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27016.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Reply:</strong> <a href="27016.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Reply:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
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
on all platforms with gcc.
<br>
<p>...
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc/omp
<br>
i/mca/osc/pt2pt'
<br>
&nbsp;&nbsp;CC       osc_pt2pt_module.lo
<br>
In file included from 
<br>
../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt.h:39:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_module.c
<br>
:23:
<br>
../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_header.h
<br>
: In function 'osc_pt2pt_hton_intr':
<br>
../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_header.h
<br>
:389:21: error: 'opal_list_item_t' has no member named 'proc_arch'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!(proc-&gt;super.proc_arch &amp; OPAL_ARCH_ISBIGENDIAN))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [osc_pt2pt_module.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc/omp
<br>
i/mca/osc/pt2pt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc/omp
<br>
i'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc 149 
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
<li><strong>Next message:</strong> <a href="27008.php">Siegmar Gross: "[OMPI users] cc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="27006.php">Manoj Vaghela: "[OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27016.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Reply:</strong> <a href="27016.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Reply:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
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
