<?
$subject_val = "Re: [OMPI users] fortran mpi io malloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  1 10:15:46 2006" -->
<!-- isoreceived="20060501141546" -->
<!-- sent="Mon, 1 May 2006 10:15:45 -0400" -->
<!-- isosent="20060501141545" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran mpi io malloc error" -->
<!-- id="D8515434-B0BB-4836-ACFB-F8C7B5443874_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="220e12410604281039n63a0fff8h8f1ce041059dad6_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 10:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1171.php">Douglas Kojetin: "[OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>In reply to:</strong> <a href="../../2006/04/1161.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1175.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Reply:</strong> <a href="1175.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2006, at 1:39 PM, Bernard Knaepen wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am trying to install/run open-mpi on a Macbook Pro running MacOSX
</span><br>
<span class="quotelev1">&gt; 10.4.6, *with* fortran support.
</span><br>
<span class="quotelev1">&gt; I am using Intel Fortran Compiler 9.1 (professional edition).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compilation/installation went fine, except that the ifort compiler was
</span><br>
<span class="quotelev1">&gt; not recognized as the f90 compiler by the romio configure script.
</span><br>
<span class="quotelev1">&gt; Therefore, I explicitely set the F90 compiler to ifort in the romio
</span><br>
<span class="quotelev1">&gt; configure script.
</span><br>
<p>Are you trying to use Open MPI or LAM/MPI?  You said Open MPI in your  
<br>
mail, but all the attached files were for LAM/MPI.  You might want to  
<br>
make sure you aren't mixing the two when trying to build your  
<br>
application -- using mpi.h from LAM/MPI and the libraries from Open  
<br>
MPI (or building against one and running against the other) would  
<br>
result in bad things happening.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1171.php">Douglas Kojetin: "[OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>In reply to:</strong> <a href="../../2006/04/1161.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1175.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Reply:</strong> <a href="1175.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
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
