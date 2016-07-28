<?
$subject_val = "[OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 06:18:37 2012" -->
<!-- isoreceived="20120131111837" -->
<!-- sent="Tue, 31 Jan 2012 11:18:15 +0000" -->
<!-- isosent="20120131111815" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)" -->
<!-- id="87wr88unm0.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 06:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18333.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18333.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is to help anyone else having this problem, as it doesn't seem to
<br>
be mentioned anywhere I can find, rather surprisingly.
<br>
<p>Core binding is broken on Interlagos with open-mpi 1.5.4.  I guess it
<br>
also bites on Magny-Cours, but all our systems are currently busy and I
<br>
can't check.
<br>
<p>It does work, at least basically, in 1.5.5rc1, but the release notes for
<br>
that don't give any indication.  Perhaps someone could mention
<br>
Interlagos in the notes, and any other hardware that might be affected
<br>
(presumably Magny-Cours and some Power if it's confusion introduced by
<br>
the extra NUMA level).
<br>
<p>As an example of the error, with 1.5.4 on 32-core Interlagos invoked
<br>
like
<br>
<p>&nbsp;&nbsp;mpirun -np 32 --bind-to-core --bycore  --report-bindings ...
<br>
<p>you get
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;[compute002:18153] [[14894,0],0] odls:default:fork binding child [[14894,1],15] to cpus 40000000
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;An invalid physical processor id was returned when attempting to
<br>
&nbsp;&nbsp;set processor affinity - please check to ensure that your system
<br>
&nbsp;&nbsp;supports such functionality. If so, then this is probably something
<br>
&nbsp;&nbsp;that should be reported to the OMPI developers.
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;...
<br>
<p>It works up to 16 cores.
<br>
<p>We seem to have issues even with 1.5.5rc1, but I'll try to get bug
<br>
reports into the tracker.  I hope the heads-up here is useful though.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18333.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18333.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
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
