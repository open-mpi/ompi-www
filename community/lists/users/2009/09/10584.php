<?
$subject_val = "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 04:42:34 2009" -->
<!-- isoreceived="20090908084234" -->
<!-- sent="Tue, 8 Sep 2009 10:42:29 +0200" -->
<!-- isosent="20090908084229" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&amp;gt; Segmentation fault" -->
<!-- id="F8C57A77-0164-4394-BB51-3DF111AE8D57_at_onera.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.14673.1252398424.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 04:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10585.php">Charles Salvia: "[OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>Previous message:</strong> <a href="10583.php">Mallikarjuna Shastry: "[OMPI users] problem in using blcr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10590.php">Marcus Herrmann: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="10590.php">Marcus Herrmann: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Maybe reply:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>After installing Snow Leopard, I rebulit openMPI  1.3.3 and wrap intel  
<br>
Compilers v 11.1.058. To do this, I used that small shell script :
<br>
<p>#! /bin/bash
<br>
./configure --prefix=/usr/local/openmpi-1.3.3- 
<br>
i64                                             \
<br>
CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
F77=/opt/intel/Compiler/11.1/058/bin/intel64/ 
<br>
ifort                                            \
<br>
FC=/opt/intel/Compiler/11.1/058/bin/intel64/ifort             \
<br>
CC=/opt/intel/Compiler/11.1/058/bin/intel64/icc              \
<br>
CXX=/opt/intel/Compiler/11.1/058/bin/intel64/icpc
<br>
<p>make
<br>
make install
<br>
<p><p>This seems to work but, when I try to use openMPI, I have a  
<br>
Segmentation Fault
<br>
<p>mpic++ -showme   -&gt;  Segmentation fault
<br>
mpif90 -showme   -&gt;  Segmentation fault
<br>
ompi_info -&gt;  Segmentation fault
<br>
...
<br>
<p><p>Remark :
<br>
<p>I don't beleive it is a problem with dynamic library, as you can see  
<br>
my DYLD_LIBRARY_PATH path seems to be weel defined :
<br>
<p>echo $DYLD_LIBRARY_PATH
<br>
:/opt/intel/Compiler/11.1/058/lib/:/opt/intel/Compiler/11.1/058/lib/ 
<br>
intel64/:/opt/intel/Compiler/11.1/058/Frameworks/mkl/lib/em64t:/usr/ 
<br>
local/openmpi-1.3.3-i64/lib:/usr/local/vtk-5.4.2/lib/vtk-5.4
<br>
<p><p>@+
<br>
Christophe Peyret
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10585.php">Charles Salvia: "[OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>Previous message:</strong> <a href="10583.php">Mallikarjuna Shastry: "[OMPI users] problem in using blcr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10590.php">Marcus Herrmann: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="10590.php">Marcus Herrmann: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Maybe reply:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
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
