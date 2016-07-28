<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 22:43:08 2010" -->
<!-- isoreceived="20100623024308" -->
<!-- sent="Wed, 23 Jun 2010 14:43:02 +1200" -->
<!-- isosent="20100623024302" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM" -->
<!-- id="78f47bf899e041077e25b25b26d205b8.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1531174.1003331277247474827.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fortran%20-%20MPI_WORLD_COMM"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-06-22 22:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13395.php">Íõî£: "[OMPI users] about OpenMPI user-directed fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13392.php">Anthony Chan: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; This is basic fortran programming issue, you may want to consult
</span><br>
<span class="quotelev1">&gt; some fortran programming book.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<p>It is more an issue with understanding the usual implementations
<br>
of the MPI Fortran bindings, namely, having to include mpif.h in
<br>
ALL procedures that wish to make use of the MPI variables.
<br>
<p>The OP would be better advised to consult some MPI documentation.
<br>
<p>Most MPI documentation would:
<br>
<p>a) mention the recommendation of the use of mpif.h
<br>
b) tell one that MPI_Comm_World and bretheren in mpif.h are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran parameters
<br>
<p>You won't find that info by consulting some fortran programming
<br>
book.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13395.php">Íõî£: "[OMPI users] about OpenMPI user-directed fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13392.php">Anthony Chan: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
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
