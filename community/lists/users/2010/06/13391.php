<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:52:57 2010" -->
<!-- isoreceived="20100622225257" -->
<!-- sent="Wed, 23 Jun 2010 10:52:51 +1200" -->
<!-- isosent="20100622225251" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction" -->
<!-- id="8321a65a6bb1ef25cb824b7d5e4c33c6.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="79AE6774-5420-4C22-8A46-7AEB3657DC7A_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fortran%20-%20MPI_WORLD_COMM%20-%20correction"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-06-22 18:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13392.php">Anthony Chan: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I think the problem is that you didn't include mpif.h in testsubr().
</span><br>
<span class="quotelev1">&gt; Hence, the value of MPI_INTEGER was undefined -- I don't think it's a
</span><br>
<span class="quotelev1">&gt; problem with the value of MPI_Comm.
</span><br>
<p>That's correct.
<br>
<p>You also don't then need to pass MPI_Comm_World around, it is a
<br>
parameter defined in mpif-common.h which gets included by mpif.h .
<br>
<p><p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13392.php">Anthony Chan: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
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
