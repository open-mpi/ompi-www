<?
$subject_val = "Re: [OMPI users] getting fortran90 to compile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 12:33:28 2008" -->
<!-- isoreceived="20080713163328" -->
<!-- sent="Sun, 13 Jul 2008 12:32:18 -0400" -->
<!-- isosent="20080713163218" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting fortran90 to compile" -->
<!-- id="DF07D6FD-C746-41EC-A9FF-A3D24E492BC0_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9fdb08030807130858y26fae84dk375c95667dacd8d7_at_mail.gmail.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 12:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6069.php">Andreas Schäfer: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6067.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6071.php">Doug Reeder: "Re: [OMPI users] getting fortran90 to compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Use
<br>
<p>./configure --prefix=/path/blah/blah  FC=gfortran F77=gfortran
<br>
<p>I think configure will pick up on it?
<br>
FC and F77 need to point to the full executable, not just the install  
<br>
path of the compiler,  so if gfortran is not in your $PATH set it to  
<br>
the full path:
<br>
FC=/usr/bin/gfortran-4.2/bin/gfortran
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 13, 2008, at 11:58 AM, zach wrote:
<br>
<span class="quotelev1">&gt; I installed openmpi like
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;install dir&gt; FC=/usr/bin/gfortran-4.2
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i type
</span><br>
<span class="quotelev1">&gt; mpif90 file1.f90 file2.f90 file3.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am i doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zachary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6069.php">Andreas Schäfer: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>Previous message:</strong> <a href="6067.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6071.php">Doug Reeder: "Re: [OMPI users] getting fortran90 to compile"</a>
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
