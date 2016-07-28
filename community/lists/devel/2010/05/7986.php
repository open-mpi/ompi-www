<?
$subject_val = "[OMPI devel] GCC Linux trunk build errors in paffinity/hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 11:26:11 2010" -->
<!-- isoreceived="20100524152611" -->
<!-- sent="Mon, 24 May 2010 11:26:05 -0400" -->
<!-- isosent="20100524152605" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[OMPI devel] GCC Linux trunk build errors in paffinity/hwloc" -->
<!-- id="20100524152604.GA19360_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 11:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<li><strong>Previous message:</strong> <a href="7985.php">Josh Hursey: "Re: [OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<li><strong>Reply:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IU and Oracle GCC/Linux nightly trunk builds are both dying on:
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Entering directory
<br>
&nbsp;&nbsp;`.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/src'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     traversal.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     topology.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     topology-synthetic.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     bind.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     cpuset.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     misc.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     topology-xml.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     topology-linux.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC     topology-x86.lo
<br>
&nbsp;&nbsp;topology-x86.c: In function 'look_proc':
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
<br>
&nbsp;&nbsp;error: can't find a register in class 'BREG' while reloading 'asm'
<br>
&nbsp;&nbsp;make[4]: *** [topology-x86.lo] Error 1
<br>
<p><a href="http://www.open-mpi.org/mtt/index.php?do_redir=1856">http://www.open-mpi.org/mtt/index.php?do_redir=1856</a>
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<li><strong>Previous message:</strong> <a href="7985.php">Josh Hursey: "Re: [OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<li><strong>Reply:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
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
