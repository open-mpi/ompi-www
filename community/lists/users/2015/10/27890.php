<?
$subject_val = "[OMPI users] Odd pipe error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 17 10:29:31 2015" -->
<!-- isoreceived="20151017142931" -->
<!-- sent="Sat, 17 Oct 2015 10:29:24 -0400" -->
<!-- isosent="20151017142924" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="[OMPI users] Odd pipe error" -->
<!-- id="56225B44.5000900_at_iu.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Odd pipe error<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-17 10:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Previous message:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Reply:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Maybe reply:</strong> <a href="27892.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
&nbsp;&nbsp;&nbsp;We run a Cray XE/XT-7.  For normal (ESM) use, Cray supplies 
<br>
integrated MPI libraries.  However, for cluster compatibility mode, we 
<br>
build OpenMPI to use.  Generally we use 1.8.4 but some old packages, 
<br>
like Jaguar, are tied to an old version (1.4.5).  At the last maint, 
<br>
they all started breaking so I rebuilt them.  Version 1.8.4 rebuilt fine 
<br>
and runs fine.  However, even a simple application, recompiled by the 
<br>
new package, fails in 1.4.5 with the error below.  I have tried a number 
<br>
of different configure options.   The current one follows this note.  I 
<br>
am hoping someone could tell what needs to be done to 1.4.5 to build the 
<br>
way 1.8.4 did (i.e. without the pipe error).  Thanks in advance for any 
<br>
insights.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>./configure CXX=g++ CC=gcc FC=gfortran CFLAGS=&quot;-O2&quot; F77=gfortran 
<br>
FCFLAGS=&quot;-O2&quot; --enable-shared --enable-static  --with-tm=no 
<br>
--with-threads=posix  --without-openib --enable-mca-no-build=btl-openib 
<br>
--with-gnu-ld --prefix=/N/soft/cle5/openmpi/gnu/1.4.5
<br>
<p><p>:~/testdir&gt; !mpirun
<br>
mpirun -np 8 -machinefile test_machine hellompi
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it encountered 
<br>
an error:
<br>
<p>Error: pipe function call failed when setting up I/O forwarding subsystem
<br>
Node: nid00819
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Previous message:</strong> <a href="27889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Reply:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Maybe reply:</strong> <a href="27892.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
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
