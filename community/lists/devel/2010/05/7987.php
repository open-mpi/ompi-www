<?
$subject_val = "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 12:14:25 2010" -->
<!-- isoreceived="20100524161425" -->
<!-- sent="Mon, 24 May 2010 12:14:20 -0400" -->
<!-- isosent="20100524161420" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc" -->
<!-- id="3489A784-8FE1-48A1-8B26-36EE972DD570_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100524152604.GA19360_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 12:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7988.php">Sylvain Jeaugey: "[OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7986.php">Ethan Mallove: "[OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<li><strong>In reply to:</strong> <a href="7986.php">Ethan Mallove: "[OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are these 32 bit builds on 64 bit OS's?
<br>
<p>If so, you can track the issue here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/ticket/35">https://svn.open-mpi.org/trac/hwloc/ticket/35</a>
<br>
<p><p>On May 24, 2010, at 11:26 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; IU and Oracle GCC/Linux nightly trunk builds are both dying on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   Entering directory
</span><br>
<span class="quotelev1">&gt;   `.../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/src'
</span><br>
<span class="quotelev1">&gt;     CC     traversal.lo
</span><br>
<span class="quotelev1">&gt;     CC     topology.lo
</span><br>
<span class="quotelev1">&gt;     CC     topology-synthetic.lo
</span><br>
<span class="quotelev1">&gt;     CC     bind.lo
</span><br>
<span class="quotelev1">&gt;     CC     cpuset.lo
</span><br>
<span class="quotelev1">&gt;     CC     misc.lo
</span><br>
<span class="quotelev1">&gt;     CC     topology-xml.lo
</span><br>
<span class="quotelev1">&gt;     CC     topology-linux.lo
</span><br>
<span class="quotelev1">&gt;     CC     topology-x86.lo
</span><br>
<span class="quotelev1">&gt;   topology-x86.c: In function 'look_proc':
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   .../openmpi-1.7a1r23202/opal/mca/paffinity/hwloc/hwloc/include/private/cpuid.h:54:
</span><br>
<span class="quotelev1">&gt;   error: can't find a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt;   make[4]: *** [topology-x86.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1856">http://www.open-mpi.org/mtt/index.php?do_redir=1856</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7988.php">Sylvain Jeaugey: "[OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7986.php">Ethan Mallove: "[OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<li><strong>In reply to:</strong> <a href="7986.php">Ethan Mallove: "[OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
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
