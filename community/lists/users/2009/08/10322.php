<?
$subject_val = "Re: [OMPI users] Hooks for Collective's sync/transfer activity?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 10:45:38 2009" -->
<!-- isoreceived="20090812144538" -->
<!-- sent="Wed, 12 Aug 2009 10:46:10 -0400" -->
<!-- isosent="20090812144610" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hooks for Collective's sync/transfer activity?" -->
<!-- id="200908121046.10947.keller_at_ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="f51436a752f2c467f058be0aed754136.squirrel_at_webmail.univie.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hooks for Collective's sync/transfer activity?<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 10:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Previous message:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>In reply to:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Manfred,
<br>
this is more a MPI-Standardization question, Open MPI happens to be (the 
<br>
only?) one implementation providing Peruse,
<br>
<p>While there are people using Peruse event tracing to collect information on 
<br>
collectives in Open MPI, however, these are not in trunk.
<br>
The specification itself has not been taken up as a basis in the MPI3 Forum.
<br>
<p>Withing the MPI3-Tools working group, there is an effort called PIMPI.
<br>
Please check out
<br>
<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools</a>
<br>
<p>and specifically:
<br>
<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools/pimpi">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools/pimpi</a>
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>On Wednesday 12 August 2009 10:11:25 am Manfred Muecke wrote:
<br>
<span class="quotelev1">&gt; Hello *,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to understand in more detail how much time some collective
</span><br>
<span class="quotelev1">&gt; communication calls really spend waiting for the last process to enter. I
</span><br>
<span class="quotelev1">&gt; know this can be done by logging entry times for each process, but I
</span><br>
<span class="quotelev1">&gt; wonder if there is a better and more efficient way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The peruse interface allows exactly that for send/recv communication (see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-peruse/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-peruse/</a>). Unfortunately
</span><br>
<span class="quotelev1">&gt; the current peruse specification
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.mpi-peruse.org/current_peruse_spec.pdf">http://www.mpi-peruse.org/current_peruse_spec.pdf</a>) does not cover
</span><br>
<span class="quotelev1">&gt; collectives (but mentions them explicitly for future extensions).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know if there is a plan to go ahead with MPI peruse for
</span><br>
<span class="quotelev1">&gt; collectives (in general and specifically in OpenMPI)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there hooks in the OpenMPI collective's code which could be used to
</span><br>
<span class="quotelev1">&gt; hand-wire similar functionality?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Manfred
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>Previous message:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>In reply to:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
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
