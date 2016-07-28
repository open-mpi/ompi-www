<?
$subject_val = "[OMPI users] `return EXIT_FAILURE;` triggers error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 16:48:24 2014" -->
<!-- isoreceived="20140903204824" -->
<!-- sent="Wed, 3 Sep 2014 22:48:03 +0200" -->
<!-- isosent="20140903204803" -->
<!-- name="Nico Schl&#195;&#182;mer" -->
<!-- email="nico.schloemer_at_[hidden]" -->
<!-- subject="[OMPI users] `return EXIT_FAILURE;` triggers error message" -->
<!-- id="CAK6Z60cAJ-2iKrrn_MHP3cggsix57JdxU_f0MTWshPNs6OwwkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] `return EXIT_FAILURE;` triggers error message<br>
<strong>From:</strong> Nico Schl&#195;&#182;mer (<em>nico.schloemer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 16:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>Previous message:</strong> <a href="25250.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>Reply:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>with OpenMPI 1.6.5 (default Debian/Ubuntu), I'm running the program
<br>
<p>```
<br>
#include &lt;cstdlib&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main( int argc, char* argv[] )
<br>
{
<br>
&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return EXIT_FAILURE;
<br>
}
<br>
```
<br>
that unconditionally returns an error flag. When executing this, I'm
<br>
somewhat surprised to get
<br>
```
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
```
<br>
no matter with how many processes I run this. Returning EXIT_FAILURE
<br>
seems harmless enough.
<br>
Needless to say, this does not happen for EXIT_SUCCESS, or in serial
<br>
execution (without mpiexec).
<br>
<p>Is this expected behavior? Has this changed in later versions of OpenMPI?
<br>
<p>Cheers,
<br>
Nico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>Previous message:</strong> <a href="25250.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>Reply:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
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
