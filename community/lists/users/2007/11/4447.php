<?
$subject_val = "[OMPI users] MPI Spawn terminates application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:43:15 2007" -->
<!-- isoreceived="20071108004315" -->
<!-- sent="Thu, 08 Nov 2007 01:43:08 +0100" -->
<!-- isosent="20071108004308" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Spawn terminates application" -->
<!-- id="47325B9C.1080600_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 19:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4448.php">Brian Budge: "[OMPI users] multi-threaded MPI"</a>
<li><strong>Previous message:</strong> <a href="4446.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>Reply:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
when MPI_Spawn cannot launch an application for whatever reason, the
<br>
entire job is cancelled with some message like the following.
<br>
Is there a way to handle this nicely, e.g. by throwing an exception? I
<br>
understand, this does not work, when the job is first started with
<br>
mpirun, as there is no application yet to fall back on, but in case of a
<br>
running application, it should be possible to simply inform it that the
<br>
spawning request failed. Then the application could begin to handle the
<br>
error and terminate gracefully. I did enable C++ Exceptions btw, so I
<br>
guess this is not implemented. Is there a technical (e.g. architectural)
<br>
reason behind this, or simply a yet-to-be-added feature?
<br>
All the best,
<br>
Murat
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4448.php">Brian Budge: "[OMPI users] multi-threaded MPI"</a>
<li><strong>Previous message:</strong> <a href="4446.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>Reply:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
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
