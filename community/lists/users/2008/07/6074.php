<?
$subject_val = "Re: [OMPI users] getting fortran90 to compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 07:01:44 2008" -->
<!-- isoreceived="20080714110144" -->
<!-- sent="Mon, 14 Jul 2008 07:01:37 -0400" -->
<!-- isosent="20080714110137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting fortran90 to compile" -->
<!-- id="07EE1D1E-D0BD-49EC-9432-D521A51F17B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="695B7BFB-FC5E-4931-BB4E-2473F9D32F31_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] getting fortran90 to compile<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 07:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6073.php">Terry Frankcombe: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6071.php">Doug Reeder: "Re: [OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6073.php">Terry Frankcombe: "Re: [OMPI users] getting fortran90 to compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 13, 2008, at 2:06 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; I believe you need to ad F90=/usr/bin/gfortran-4.2 (or something  
</span><br>
<span class="quotelev1">&gt; similar) to the configure arguments, FC= just gets f77 support.
</span><br>
<p>A minor clarification:
<br>
<p>- FC is for the Fortran 90 compiler
<br>
- F77 is for the Fortran 77 compiler
<br>
<p>(we didn't make these names up; they're the GNU Autotools standard  
<br>
names)
<br>
<p>It sounds like Open MPI specifically decided not to build F90  
<br>
support.  The output from configure will specifically state why it  
<br>
chose not to build F90 support; this is the first place to check.
<br>
<p>See <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>.
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
<li><strong>Next message:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6073.php">Terry Frankcombe: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6071.php">Doug Reeder: "Re: [OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6073.php">Terry Frankcombe: "Re: [OMPI users] getting fortran90 to compile"</a>
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
