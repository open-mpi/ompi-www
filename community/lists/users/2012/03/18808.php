<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:18:51 2012" -->
<!-- isoreceived="20120320141851" -->
<!-- sent="Tue, 20 Mar 2012 14:18:28 +0000" -->
<!-- isosent="20120320141828" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?" -->
<!-- id="CB8E08ED.B4B4%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8F7B8C59-0ED3-46B1-AA3F-1F50216C5DA3_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 10:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18807.php">Gunter, David O: "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18807.php">Gunter, David O: "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/20/12 10:06 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I need to build ompi-1.4.3 (or the newer 1.4.5) with an older Intel 10.0
</span><br>
<span class="quotelev1">&gt;compiler, but on a newer system in which the default g++ headers are
</span><br>
<span class="quotelev1">&gt;incompatible with Intel. Thus the C and Fortran compilers function
</span><br>
<span class="quotelev1">&gt;normally but the Intel C++ compiler fails to build even a simple &quot;hello
</span><br>
<span class="quotelev1">&gt;world&quot; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there a way to build OMPI without a C++ compiler?  I tried using the
</span><br>
<span class="quotelev1">&gt;--disable-mpi-cxx and --disable-mpi-cxx-seek flags but these are just for
</span><br>
<span class="quotelev1">&gt;the resulting bindings. The configure step still continues to search for
</span><br>
<span class="quotelev1">&gt;a working C++ compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, I know I can upgrade the Intel compiler but we don't have that as an
</span><br>
<span class="quotelev1">&gt;option in this case.
</span><br>
<p>Unfortunately, you're a bit out of luck.  Open MPI 1.4.x requires C++ even
<br>
if you're not building the C++ bindings.  This is not true of 1.5.x and
<br>
later.
<br>
<p>If you don't need the C++ bindings, I would build Open MPI with GNU C and
<br>
C++ and Intel Fortran.  After building, edit
<br>
&lt;PREFIX&gt;/share/openmpi/mpicc-wrapper-data.txt to change the compiler=gcc
<br>
line to compiler=&lt;intel C compiler&gt;.  There's not going to be much
<br>
performance difference between the two compilers for Open MPI itself.  GNU
<br>
C and Intel C are link compatible, so that should work out for you and the
<br>
users will never be the wiser.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18807.php">Gunter, David O: "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18807.php">Gunter, David O: "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
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
