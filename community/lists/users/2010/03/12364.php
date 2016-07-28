<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 08:12:51 2010" -->
<!-- isoreceived="20100316121251" -->
<!-- sent="Tue, 16 Mar 2010 12:12:41 +0000" -->
<!-- isosent="20100316121241" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="SNT110-W299F42C0152BA99778943F8B2D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7F830764-C6F7-4114-89EB-D8B135827E8E_at_cisco.com" -->
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
<strong>From:</strong> abc def (<em>cannonjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-16 08:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12365.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12363.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>In reply to:</strong> <a href="12263.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Following advice on other branches of this thread, I've managed to get to the point where I can spawn the second program. I've also managed to ensure that I'm running in an open-mpi environment during the testing.
<br>
<p>I would like to run my next steps by everyone in case anyone with more experience knows a better way:
<br>
<p>1. Since Spawn is non-blocking, but I need the parent to wait until the child completes, I am thinking there must be a way to pass a variable from the child to the parent just prior to the FINALIZE command in the child, to signal that the parent can pick up the output files from the child. Am I right in assuming that the message from the child to the parent will go to the correct parent process? The value of &quot;parent&quot; in &quot;CALL MPI_COMM_GET_PARENT(parent, ierr)&quot; is the same in all spawned processes, which is why I ask this question.
<br>
<p>2. By launching the parent with the &quot;--mca mpi_yield_when_idle 1&quot; option, the child should be able to take CPU power from any blocked parent process, thus avoiding the busy-poll problem mentioned below. If each host has 4 processors and I'm running on 2 hosts (ie, 8 processors in total), then I also assume that the spawned child will launch on the same host as the associated parent?
<br>
<p>Does anyone have any better suggestions? Since I'm quite new to this, I thought it might be best to check...
<br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Fri, 5 Mar 2010 15:02:57 -0500
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 2:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CALL SYSTEM(&quot;cd &quot; // TRIM(dir) // &quot; ; mpirun -machinefile ./machinefile -np 1 /home01/group/Execute/DLPOLY.X &gt; job.out 2&gt; job.err ; cd - &gt; /dev/null&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That is guaranteed not to work. The problem is that mpirun sets environmental variables for the original launch. Your system call carries over those envars, causing mpirun to become confused.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should be able to use MPI_COMM_SPAWN to launch this MPI job.  Check the man page for MPI_COMM_SPANW; I believe we have info keys to specify things like what hosts to launch on, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you think MPI_COMM_SPAWN can help?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's the only method supported by the MPI standard. If you need it to block until this new executable completes, you could use a barrier or other MPI method to determine it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that the user said they wanted to use the same cores as their original MPI job occupies for the new job -- they basically want the old job to block until the new job completes.  Keep in mind that OMPI busy-polls waiting for progress, so you might actually get hosed here (two procs competing for time on the same core).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not immediately thinking of a good way to avoid this issue -- perhaps you could kludge something up such that the parent job polls on sleep() and checking to see if a message has arrived from the child (i.e., the last thing the child does before it calls MPI_FINALIZE is to send a message to its parents and then MPI_COMM_DISCONNECT from its parents).  If the parent finds that it has a message from the child(ren), it can MPI_COMM_DISCONNECT and continue processing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kinda hackey, but it might work...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Do you have a story that started on Hotmail? Tell us now
<br>
<a href="http://clk.atdmt.com/UKM/go/195013117/direct/01/">http://clk.atdmt.com/UKM/go/195013117/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12365.php">Shiqing Fan: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12363.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows: problems running on a second system."</a>
<li><strong>In reply to:</strong> <a href="12263.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
