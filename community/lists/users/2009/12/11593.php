<?
$subject_val = "[OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 17:55:42 2009" -->
<!-- isoreceived="20091217225542" -->
<!-- sent="Fri, 18 Dec 2009 11:55:03 +1300" -->
<!-- isosent="20091217225503" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="[OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM" -->
<!-- id="2678f00e3443debc62e28824114b9d04.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20NetBSD%20OpenMPI%20-%20SGE%20-%20PETSc%20-%20PISM"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-17 17:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>Previous message:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>Reply:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>Reply:</strong> <a href="11595.php">Craig Tierney: "[OMPI users] Unable to run WRF on large core counts (1024+), queue pair error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A whole swathe of people have been made aware of the issues
<br>
that have arisen as a result of a researcher here looking to
<br>
run PISM, which sits on top of PETSc, which sits on top of
<br>
OpenMPI.
<br>
<p>I am happy to be able to inform you that the problems we were
<br>
seeing would seem to have been arising down at the OpenMPI
<br>
level.
<br>
<p>If I remove any acknowledgement of IPv6 within the OpenMPI
<br>
code, then both the PETSc examples and PISM application
<br>
have been seen to be running upon my initial 8-processor
<br>
parallel environment when submitted as an Sun Grid Engine
<br>
job.
<br>
<p>I guess this means that the PISM and PETSc guys can &quot;stand easy&quot;
<br>
whilst the OpenMPI community needs to follow up on why there's
<br>
a &quot;addr.sa_len=0&quot; creeping through the interface inspection
<br>
code (upon NetBSD at least) when it passes thru the various
<br>
IPv6 stanzas.
<br>
<p><p>Thanks for all the feedback on this from all the quarters,
<br>
Kevin
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
<li><strong>Next message:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>Previous message:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>Reply:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>Reply:</strong> <a href="11595.php">Craig Tierney: "[OMPI users] Unable to run WRF on large core counts (1024+), queue pair error"</a>
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
