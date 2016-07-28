<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  7 17:38:43 2005" -->
<!-- isoreceived="20051007223843" -->
<!-- sent="Fri, 7 Oct 2005 18:38:36 -0400" -->
<!-- isosent="20051007223836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="--host option to orterun" -->
<!-- id="500225e56144397c33254bbc019ab397_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-07 17:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0432.php">Jeff Squyres: "Branch for 1.0"</a>
<li><strong>Previous message:</strong> <a href="../../2005/09/0430.php">Jeff Squyres: "Valgrind 3.0.1 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh and I have just brought over the changes from a branch where we 
<br>
were working to make orterun's --host option work properly.  --host now 
<br>
has clearly defined semantics and we think it follows the Law of Least 
<br>
Astonishment -- see the FAQ for details on exactly how to use it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
<br>
<p>We tested it in several environments (no scheduler, PBS, SLURM, BProc, 
<br>
hostfile), and we think we caught all the corner cases, but would 
<br>
appreciate if others could give it a whirl.
<br>
<p>There's still some more cleanup with RDS/RAS/RMAPS to do after 1.0, but 
<br>
I think we now have a working --host and that's the most important 
<br>
thing.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0432.php">Jeff Squyres: "Branch for 1.0"</a>
<li><strong>Previous message:</strong> <a href="../../2005/09/0430.php">Jeff Squyres: "Valgrind 3.0.1 available"</a>
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
