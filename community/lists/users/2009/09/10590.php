<?
$subject_val = "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 10:11:05 2009" -->
<!-- isoreceived="20090908141105" -->
<!-- sent="Tue, 8 Sep 2009 07:10:50 -0700" -->
<!-- isosent="20090908141050" -->
<!-- name="Marcus Herrmann" -->
<!-- email="marcus.herrmann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&amp;gt; Segmentation fault" -->
<!-- id="52515ACC-6E3E-4BEA-AE91-89B587A7C24F_at_asu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F8C57A77-0164-4394-BB51-3DF111AE8D57_at_onera.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault<br>
<strong>From:</strong> Marcus Herrmann (<em>marcus.herrmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 10:10:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>In reply to:</strong> <a href="10584.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christophe,
<br>
the 11.1.058 compilers are not (yet) compatible with snow leopard. See  
<br>
the Intel compiler Forums. The gnu compilers however work.
<br>
<p>Marcus
<br>
<p>On Sep 8, 2009, at 1:42 AM, Christophe Peyret &lt;christophe.peyret_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After installing Snow Leopard, I rebulit openMPI  1.3.3 and wrap  
</span><br>
<span class="quotelev1">&gt; intel Compilers v 11.1.058. To do this, I used that small shell  
</span><br>
<span class="quotelev1">&gt; script :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/bash
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi-1.3.3- 
</span><br>
<span class="quotelev1">&gt; i64                                             \
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; F77=/opt/intel/Compiler/11.1/058/bin/intel64/ 
</span><br>
<span class="quotelev1">&gt; ifort                                            \
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/Compiler/11.1/058/bin/intel64/ifort             \
</span><br>
<span class="quotelev1">&gt; CC=/opt/intel/Compiler/11.1/058/bin/intel64/icc              \
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/Compiler/11.1/058/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to work but, when I try to use openMPI, I have a  
</span><br>
<span class="quotelev1">&gt; Segmentation Fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ -showme   -&gt;  Segmentation fault
</span><br>
<span class="quotelev1">&gt; mpif90 -showme   -&gt;  Segmentation fault
</span><br>
<span class="quotelev1">&gt; ompi_info -&gt;  Segmentation fault
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remark :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't beleive it is a problem with dynamic library, as you can see  
</span><br>
<span class="quotelev1">&gt; my DYLD_LIBRARY_PATH path seems to be weel defined :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; :/opt/intel/Compiler/11.1/058/lib/:/opt/intel/Compiler/11.1/058/lib/ 
</span><br>
<span class="quotelev1">&gt; intel64/:/opt/intel/Compiler/11.1/058/Frameworks/mkl/lib/em64t:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/openmpi-1.3.3-i64/lib:/usr/local/vtk-5.4.2/lib/vtk-5.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @+
</span><br>
<span class="quotelev1">&gt; Christophe Peyret
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>In reply to:</strong> <a href="10584.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
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
