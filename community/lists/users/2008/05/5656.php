<?
$subject_val = "Re: [OMPI users] Compiler Choice in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 20:43:23 2008" -->
<!-- isoreceived="20080513004323" -->
<!-- sent="Mon, 12 May 2008 20:43:14 -0400" -->
<!-- isosent="20080513004314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiler Choice in openmpi" -->
<!-- id="72F09140-EA87-4DC0-A46F-5D557BF61AE0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFFE417794.ECCCE86F-ON48257446.001121AF-48257446.0014EF90_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiler Choice in openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 20:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Previous message:</strong> <a href="5655.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>In reply to:</strong> <a href="5649.php">Wen Hao Wang: "[OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5670.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5670.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2008, at 12:00 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; 1. How can I change/set Fortran compiler used after installing  
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.2.5-2 on RHEL5.2 Server with x86_32 arch. The  
</span><br>
<span class="quotelev1">&gt; rpm has been shipped RHEL images. I directly installed the rpms  
</span><br>
<span class="quotelev1">&gt; without compiling the source code. Now all mpi* compiler wrappers  
</span><br>
<span class="quotelev1">&gt; point to GNU compilers. I need change to use Intel compilers by  
</span><br>
<span class="quotelev1">&gt; default. How should I do? I caught one message about configuration  
</span><br>
<span class="quotelev1">&gt; files /etc/openmpi-mca-params.conf and $HOME/.openmpi/mca- 
</span><br>
<span class="quotelev1">&gt; params.conf. Not sure whether these two files can help. While I  
</span><br>
<span class="quotelev1">&gt; failed to find detailed explanation for them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You really need to compile Open MPI from source for this;  
<br>
unfortunately, there are several aspects of Open MPI that are tied to  
<br>
the specific compiler chain that is used.  Specifically: you *might*  
<br>
be able to get away without re-compiling Open MPI, but I wouldn't  
<br>
advise it.
<br>
<p>You can download the OMPI source tarball from the main web site and  
<br>
configure it with the following to specify the intel compiler suite:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc FC=ifort F77=ifort ...
<br>
<p>You may want to list other configure options, such as --prefix, -- 
<br>
enable-mpirun-prefix-by-default, etc.
<br>
<span class="quotelev1">&gt; 2. Can I use Intel compiler and GNU compiler together?
</span><br>
<span class="quotelev1">&gt; I am not sure whether I can use two types of compiler to compile one  
</span><br>
<span class="quotelev1">&gt; program. For example, use GNU c/c++ compiler and Intel Fortran  
</span><br>
<span class="quotelev1">&gt; compiler together to compile my project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, there are cases where this works.  But if possible, it's  
<br>
generally easiest to simply use a single compiler toolset (e.g., all  
<br>
Intel or all GNU).  More specifically, unless you have a *need* to mix  
<br>
the compilers, just use a single toolset.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Previous message:</strong> <a href="5655.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>In reply to:</strong> <a href="5649.php">Wen Hao Wang: "[OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5670.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5670.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
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
