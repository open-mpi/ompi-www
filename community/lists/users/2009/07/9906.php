<?
$subject_val = "Re: [OMPI users] Problems in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 05:19:59 2009" -->
<!-- isoreceived="20090710091959" -->
<!-- sent="Fri, 10 Jul 2009 10:20:05 +0100" -->
<!-- isosent="20090710092005" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in OpenMPI" -->
<!-- id="1247217605.15356.83.camel_at_alpha" -->
<!-- inreplyto="1e8c69dc0907092140x299c065ar549f81d642c5a53a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in OpenMPI<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 05:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9907.php">Jalel Chergui (LIMSI-CNRS) <Jalel.Chergui_at_[hidden]: "[OMPI users] MPI_Intercomm_create: peer_leader process"</a>
<li><strong>Previous message:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<li><strong>In reply to:</strong> <a href="9903.php">Yin Feng: "[OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-07-09 at 23:40 -0500, Yin Feng wrote:
<br>
<span class="quotelev1">&gt; I am a beginner in MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran an example code using OpenMPI and it seems work.
</span><br>
<span class="quotelev1">&gt; And then I tried a parallel example in PETSc tutorials folder (ex5).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ex5
</span><br>
<span class="quotelev1">&gt; It can do but the results are not as accurate as just running ex5.
</span><br>
<span class="quotelev1">&gt; Is that thing normal?
</span><br>
<p>Not as accurate or just different?  Different is normal and in light of
<br>
that accurate is itself a vague concept.
<br>
<p><span class="quotelev1">&gt; After that, send this job to supercomputer which allocates me 4 nodes
</span><br>
<span class="quotelev1">&gt; and each node has 8 processors. When I check load on each node, I
</span><br>
<span class="quotelev1">&gt; found:
</span><br>
<p><span class="quotelev1">&gt; Does anyone have any idea about this?
</span><br>
<p>I'd say it's obvious all 32 processes have been located on the same
<br>
node, what was the mpirun command you issued and the contents of the
<br>
machinefile you used?
<br>
<p>Running &quot;orte-ps&quot; on the machine where the mpirun command is running
<br>
will tell you the hostname where every rank is running or if you want
<br>
more information (load, cpu usage etc) you can use padb, the link for
<br>
which is in my signature.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9907.php">Jalel Chergui (LIMSI-CNRS) <Jalel.Chergui_at_[hidden]: "[OMPI users] MPI_Intercomm_create: peer_leader process"</a>
<li><strong>Previous message:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<li><strong>In reply to:</strong> <a href="9903.php">Yin Feng: "[OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
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
