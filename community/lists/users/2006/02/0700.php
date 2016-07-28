<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 09:35:46 2006" -->
<!-- isoreceived="20060224143546" -->
<!-- sent="Fri, 24 Feb 2006 15:26:03 +0100" -->
<!-- isosent="20060224142603" -->
<!-- name="Benoit Semelin" -->
<!-- email="benoit.semelin_at_[hidden]" -->
<!-- subject="[OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95" -->
<!-- id="43FF177B.1030807_at_obspm.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Benoit Semelin (<em>benoit.semelin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 09:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have problems installing Open-mpi on a quadri-opteron workstation.
<br>
<p>The configuring script fails alltogether with intel fortran. That's
<br>
presumably because intel fortran works on opterons in 32 bits mode only.
<br>
<p>The installation works fine with g95 and gfortran (provided I specify
<br>
the 64 library in LD_LIBRARY_PATH in the case of gfortran)
<br>
<p>But then, when I compile my code with mpif90, it takes about 15 minutes.
<br>
<p>I have the same result on another (quadri dual-core) opteron workstation.
<br>
<p><p><p>On the other hand compilation takes only about 10 seconds on a pentium 4
<br>
2.6 Ghz PC ( open-mpi + ifort).
<br>
<p>Has anyone tried open-mpi on Opteron ? Did you have the same problem?
<br>
<p>Any ideas would be appreciated.
<br>
<p>Benoit Semelin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Brian Barrett: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
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
