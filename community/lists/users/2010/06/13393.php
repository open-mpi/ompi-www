<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 19:04:22 2010" -->
<!-- isoreceived="20100622230422" -->
<!-- sent="Tue, 22 Jun 2010 19:04:18 -0400" -->
<!-- isosent="20100622230418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction" -->
<!-- id="80E942B8-E66B-476E-BD12-7D95E178E783_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f676a9ec2d93.4c21051e_at_mssm.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 19:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13394.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13392.php">Anthony Chan: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2010, at 6:46 PM, Mihaly Mezei wrote:
<br>
<p><span class="quotelev1">&gt; I just tried adding the include statement, but this is what I got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  lapis.mssm.edu % mpif90 -o mpi0 mpi0.f
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-1.4.1/include/mpif-common.h(402): error #6406: Conflicting attributes or multiple declaration of name.   [MPI_COMM_WORLD]
</span><br>
<span class="quotelev1">&gt;       parameter (MPI_COMM_WORLD=0)
</span><br>
<span class="quotelev1">&gt; -----------------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for mpi0.f (code 1)
</span><br>
<p>I'm guessing you didn't rename the parameter of the function (in your original source code, you had named a parameter MPI_COMM_WORLD).  That would cause a conflict.  In general, it's a Bad Item to name parameters -- or any symbols, really -- with an MPI_* prefix.  The MPI_* prefix is reserved for the MPI library.
<br>
<p>So you actually had a few problems:
<br>
<p>- naming a parameter MPI_COMM_WORLD (causing a conflict when including mpif.h)
<br>
- not including mpif.h in the subroutine (resulting in MPI_INTEGER having an undefined value)
<br>
- you passed a MPI_COMM_WORLD in both a common block (through an intermediate integer) and as a parameter; I'm guessing that was just iterating through your testing, but just to be clear -- you only need one or the other, not both (or just including &quot;mpif.h&quot; if you know you're going to use MPI_COMM_WORLD)
<br>
<p>FWIW, I'd strongly recommend using &quot;IMPLICIT NONE&quot; in your code to prevent accidental use of variables without defined values, etc.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13394.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13392.php">Anthony Chan: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
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
