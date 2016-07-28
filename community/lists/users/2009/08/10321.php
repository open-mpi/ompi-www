<?
$subject_val = "[OMPI users] Hooks for Collective's sync/transfer activity?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 10:11:30 2009" -->
<!-- isoreceived="20090812141130" -->
<!-- sent="Wed, 12 Aug 2009 16:11:25 +0200" -->
<!-- isosent="20090812141125" -->
<!-- name="Manfred Muecke" -->
<!-- email="manfred.muecke_at_[hidden]" -->
<!-- subject="[OMPI users] Hooks for Collective's sync/transfer activity?" -->
<!-- id="f51436a752f2c467f058be0aed754136.squirrel_at_webmail.univie.ac.at" -->
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
<strong>Subject:</strong> [OMPI users] Hooks for Collective's sync/transfer activity?<br>
<strong>From:</strong> Manfred Muecke (<em>manfred.muecke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 10:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Previous message:</strong> <a href="10320.php">Allen Barnett: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Reply:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Reply:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello *,
<br>
<p>I would like to understand in more detail how much time some collective
<br>
communication calls really spend waiting for the last process to enter. I
<br>
know this can be done by logging entry times for each process, but I
<br>
wonder if there is a better and more efficient way.
<br>
<p>The peruse interface allows exactly that for send/recv communication (see
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-peruse/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-peruse/</a>). Unfortunately
<br>
the current peruse specification
<br>
(<a href="http://www.mpi-peruse.org/current_peruse_spec.pdf">http://www.mpi-peruse.org/current_peruse_spec.pdf</a>) does not cover
<br>
collectives (but mentions them explicitly for future extensions).
<br>
<p>Does anyone know if there is a plan to go ahead with MPI peruse for
<br>
collectives (in general and specifically in OpenMPI)?
<br>
<p>Are there hooks in the OpenMPI collective's code which could be used to
<br>
hand-wire similar functionality?
<br>
<p>Thanks, Manfred
<br>
<p><pre>
-- 
Manfred M&#195;&#188;cke                         rlcta.univie.ac.at
Research Lab Computational Technologies and Applications
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Previous message:</strong> <a href="10320.php">Allen Barnett: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Reply:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Reply:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
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
