<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  6 11:35:46 2010" -->
<!-- isoreceived="20100306163546" -->
<!-- sent="Sat, 6 Mar 2010 16:35:40 +0000" -->
<!-- isosent="20100306163540" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="SNT110-W711141ED67256345CCB208B370_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-03-06 11:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12263.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12263.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your kind help so far.
<br>
<p>Following your suggestions I've been trying to figure out MPI_COMM_SPAWN, but it's at the edge of my understanding so it's not easy.
<br>
<p>I read that the changing of directories can be achieved using info keys, however these are very cryptic: I can't seem to find any precise information anywhere about how to use them. I tried the following: 
<br>
<p>-------------------------------------
<br>
WRITE(crank,'(I1)') irank
<br>
dir=&quot;test-&quot; // crank
<br>
<p>CALL SYSTEM(&quot;mkdir &quot; // dir)
<br>
<p>CALL MPI_COMM_SPAWN(&quot;mpitest-2.ex&quot;,MPI_ARGV_NULL,1,&quot;wdir ./&quot; // dir,irank,MPI_COMM_SELF,ierr)
<br>
---------------------------------------
<br>
<p>MPI_ARGV_NULL: there are no arguments to mpitest-2.ex
<br>
<p>1: I want to spawn 1 process per original process (the original process sitting idle, maybe waiting for a return parameter from its child - have not figured out how to achieve communication between the two processes yet, but that's the next step)
<br>
<p>&quot;wdir ./test-1&quot; (for example): the directory in which the new process should run. I don't think this is correct, but as I say, I can't find precise information about the info keys (at least, in a way that I can understand it) - can anyone help me here?
<br>
<p>irank: the current rank of the process, so every process spawns its own process
<br>
<p>MPI_COMM_SELF: I assume this is the new name for the child processes, like MPI_COMM_WORLD.
<br>
<p>ierr: error value
<br>
<p>So it compiles, but crashes once I reach the spawn command.
<br>
<p>Can you help?
<br>
Thank you very much.
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
Tell us your greatest, weirdest and funniest Hotmail stories
<br>
<a href="http://clk.atdmt.com/UKM/go/195013117/direct/01/">http://clk.atdmt.com/UKM/go/195013117/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12264/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12263.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12263.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
