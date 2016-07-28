<?
$subject_val = "Re: [OMPI users] build failure with NAG Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 17:23:57 2016" -->
<!-- isoreceived="20160126222357" -->
<!-- sent="Wed, 27 Jan 2016 07:23:55 +0900" -->
<!-- isosent="20160126222355" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build failure with NAG Fortran" -->
<!-- id="CAAkFZ5ubtSOgQU7cTm9HKPGdC0i5+wUYh4Tt+Tp4Pr=MQb4uaQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87zivscqfg.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] build failure with NAG Fortran<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 17:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28390.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28388.php">Dave Love: "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)"</a>
<li><strong>In reply to:</strong> <a href="28385.php">Dave Love: "[OMPI users] build failure with NAG Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>This is a known issue, and it is being discussed at
<br>
<a href="https://github.com/open-mpi/ompi/issues/1284">https://github.com/open-mpi/ompi/issues/1284</a>
<br>
and was initially reported at
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2016/01/18470.php">http://www.open-mpi.org/community/lists/devel/2016/01/18470.php</a>
<br>
<p>for the time being, you can refer to the blog post for a workaround
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, January 27, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building 1.10.2 with the NAG Fortran compiler version 6.0 fails with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   libtool: compile:  nagfor -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I. -I. -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/mpi/fortran/use-mpi-tkr -c
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.f90  -PIC -o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev1">&gt;   NAG Fortran Compiler Release 6.0(Hibiya) Build 1028
</span><br>
<span class="quotelev1">&gt;   Error: mpi_comm_spawn_multiple_f90.f90: Argument 3 to
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN_MULTIPLE has data type DOUBLE PRECISION in reference from
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN_MULTIPLEN and CHARACTER in reference from
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN_MULTIPLEA
</span><br>
<span class="quotelev1">&gt;   [NAG Fortran Compiler error termination, 1 error]
</span><br>
<span class="quotelev1">&gt;   make[2]: *** [mpi_comm_spawn_multiple_f90.lo] Error 1
</span><br>
<span class="quotelev1">&gt;   make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/tmp/openmpi-1.10.2/ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after configuring with the defaults (on RHEL6, although I doubt that
</span><br>
<span class="quotelev1">&gt; matters).  I don't have time to debug it at the moment.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28385.php">http://www.open-mpi.org/community/lists/users/2016/01/28385.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28390.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28388.php">Dave Love: "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)"</a>
<li><strong>In reply to:</strong> <a href="28385.php">Dave Love: "[OMPI users] build failure with NAG Fortran"</a>
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
