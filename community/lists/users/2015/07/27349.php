<?
$subject_val = "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 11:35:18 2015" -->
<!-- isoreceived="20150728153518" -->
<!-- sent="Tue, 28 Jul 2015 20:34:51 +0500" -->
<!-- isosent="20150728153451" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran" -->
<!-- id="CAMvdAs++=ZX3iTJywWc0V+XD_Bb9qVdTDxBviRhU3ubQ2EwV9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55B71000.3070609_at_rist.or.jp" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 11:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27350.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27342.php">Gilles Gouaillardet: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles
<br>
<p>It solved my issue. Your support is much appreciated.
<br>
<p>Ahsan
<br>
On Tue, Jul 28, 2015 at 10:15 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can run
</span><br>
<span class="quotelev1">&gt; zcat mpi.mod | head to confirm which gfortran was used to build the
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GFORTRAN module version '10' =&gt; gcc 4.8.3
</span><br>
<span class="quotelev1">&gt; GFORTRAN module version '12' =&gt; gcc 4.9.2
</span><br>
<span class="quotelev1">&gt; GFORTRAN module version '14' =&gt; gcc 5.1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i assume the failing command is mpifort ...
</span><br>
<span class="quotelev1">&gt; so you can run
</span><br>
<span class="quotelev1">&gt; mpifort -showme ...
</span><br>
<span class="quotelev1">&gt; to see the how gfortran is invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is likely mpifort simply run gfortran, and your PATH does not point to
</span><br>
<span class="quotelev1">&gt; gfortran 4.9.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/28/2015 1:47 PM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting this error during installation of an application.
</span><br>
<span class="quotelev2">&gt;&gt; Apparently the error seems to be complaining about openmpi being
</span><br>
<span class="quotelev2">&gt;&gt; compiled with different version of gnu fortran but I am sure that it
</span><br>
<span class="quotelev2">&gt;&gt; was compiled with gcc-4.9.2. The same is also being used for
</span><br>
<span class="quotelev2">&gt;&gt; application compilation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi-1.8.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27341.php">http://www.open-mpi.org/community/lists/users/2015/07/27341.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27342.php">http://www.open-mpi.org/community/lists/users/2015/07/27342.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27350.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27342.php">Gilles Gouaillardet: "Re: [OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<!-- nextthread="start" -->
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
