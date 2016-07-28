<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 15:03:02 2010" -->
<!-- isoreceived="20100305200302" -->
<!-- sent="Fri, 5 Mar 2010 15:02:57 -0500" -->
<!-- isosent="20100305200257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="7F830764-C6F7-4114-89EB-D8B135827E8E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8FC77D79-9775-4008-B277-D98A1692056C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 15:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12264.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12262.php">Ralph Castain: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12262.php">Ralph Castain: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12264.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12264.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12364.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 2:38 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; CALL SYSTEM(&quot;cd &quot; // TRIM(dir) // &quot; ; mpirun -machinefile ./machinefile -np 1 /home01/group/Execute/DLPOLY.X &gt; job.out 2&gt; job.err ; cd - &gt; /dev/null&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is guaranteed not to work. The problem is that mpirun sets environmental variables for the original launch. Your system call carries over those envars, causing mpirun to become confused.
</span><br>
<p>You should be able to use MPI_COMM_SPAWN to launch this MPI job.  Check the man page for MPI_COMM_SPANW; I believe we have info keys to specify things like what hosts to launch on, etc.
<br>
<p><span class="quotelev2">&gt;&gt; Do you think MPI_COMM_SPAWN can help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's the only method supported by the MPI standard. If you need it to block until this new executable completes, you could use a barrier or other MPI method to determine it.
</span><br>
<p>I believe that the user said they wanted to use the same cores as their original MPI job occupies for the new job -- they basically want the old job to block until the new job completes.  Keep in mind that OMPI busy-polls waiting for progress, so you might actually get hosed here (two procs competing for time on the same core).
<br>
<p>I'm not immediately thinking of a good way to avoid this issue -- perhaps you could kludge something up such that the parent job polls on sleep() and checking to see if a message has arrived from the child (i.e., the last thing the child does before it calls MPI_FINALIZE is to send a message to its parents and then MPI_COMM_DISCONNECT from its parents).  If the parent finds that it has a message from the child(ren), it can MPI_COMM_DISCONNECT and continue processing.
<br>
<p>Kinda hackey, but it might work...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12264.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12262.php">Ralph Castain: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12262.php">Ralph Castain: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12264.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12264.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12364.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
