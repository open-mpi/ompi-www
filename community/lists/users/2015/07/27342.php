<?
$subject_val = "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 01:16:00 2015" -->
<!-- isoreceived="20150728051600" -->
<!-- sent="Tue, 28 Jul 2015 14:15:44 +0900" -->
<!-- isosent="20150728051544" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran" -->
<!-- id="55B71000.3070609_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMvdAsKRJR64kEKkK6r9t8+--kaj8UMs7K4Q-6nvuw67rZ=4Nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 01:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27343.php">Cristian RUIZ: "[OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>Previous message:</strong> <a href="27341.php">Syed Ahsan Ali: "[OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>In reply to:</strong> <a href="27341.php">Syed Ahsan Ali: "[OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27349.php">Syed Ahsan Ali: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>Reply:</strong> <a href="27349.php">Syed Ahsan Ali: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>you can run
<br>
zcat mpi.mod | head to confirm which gfortran was used to build the 
<br>
application
<br>
<p>GFORTRAN module version '10' =&gt; gcc 4.8.3
<br>
GFORTRAN module version '12' =&gt; gcc 4.9.2
<br>
GFORTRAN module version '14' =&gt; gcc 5.1.0
<br>
<p>i assume the failing command is mpifort ...
<br>
so you can run
<br>
mpifort -showme ...
<br>
to see the how gfortran is invoked.
<br>
<p>it is likely mpifort simply run gfortran, and your PATH does not point 
<br>
to gfortran 4.9.2
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/28/2015 1:47 PM, Syed Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; I am getting this error during installation of an application.
</span><br>
<span class="quotelev1">&gt; Apparently the error seems to be complaining about openmpi being
</span><br>
<span class="quotelev1">&gt; compiled with different version of gnu fortran but I am sure that it
</span><br>
<span class="quotelev1">&gt; was compiled with gcc-4.9.2. The same is also being used for
</span><br>
<span class="quotelev1">&gt; application compilation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi-1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27341.php">http://www.open-mpi.org/community/lists/users/2015/07/27341.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27343.php">Cristian RUIZ: "[OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>Previous message:</strong> <a href="27341.php">Syed Ahsan Ali: "[OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>In reply to:</strong> <a href="27341.php">Syed Ahsan Ali: "[OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27349.php">Syed Ahsan Ali: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>Reply:</strong> <a href="27349.php">Syed Ahsan Ali: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
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
