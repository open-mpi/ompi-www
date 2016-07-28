<?
$subject_val = "[OMPI users] round-robin scheduling question [hostfile]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 03:25:12 2009" -->
<!-- isoreceived="20090220082512" -->
<!-- sent="Fri, 20 Feb 2009 17:25:04 +0900" -->
<!-- isosent="20090220082504" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="[OMPI users] round-robin scheduling question [hostfile]" -->
<!-- id="499E68E0.2020205_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] round-robin scheduling question [hostfile]<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 03:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>According to FAQ 14 (How do I control how my processes are scheduled across nodes?) [<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>], it says that the default scheduling policy is by slot and not by node.  I'm curious why the default is &quot;by slot&quot; since I am thinking of explicitly specifying by node but I'm wondering if there is an issue which I haven't considered.  
<br>
<p>I would think that one reason for &quot;by node&quot; is to distribute HDD access across machines [as is the case for me since my program is HDD access intensive].  Or perhaps I am mistaken?  I'm now thinking that &quot;by slot&quot; is the default because processes with ranks that are close together might do similar tasks and you would want them on the same node?  Is that the reason?
<br>
<p>Also, at the end of this FAQ, it says &quot;NOTE:  This is the scheduling policy in Open MPI because of a long historical precendent...&quot; --  does this &quot;This&quot; refer to &quot;the fact that there are two scheduling policies&quot; or &quot;the fact that 'by slot' is the default&quot;?  If the latter, then that explains why &quot;by slot&quot; is the default, I guess...
<br>
<p>Thank you!
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8139.php">Ralph Castain: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
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
