<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 21:44:12 2010" -->
<!-- isoreceived="20100320014412" -->
<!-- sent="Sat, 20 Mar 2010 01:44:06 +0000" -->
<!-- isosent="20100320014406" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="SNT110-W5B601640061196C8133B48B290_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF26D6A07B.B17688BB-ON852576E9.005E23FF-852576E9.005FAD83_at_us.ibm.com" -->
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
<strong>Date:</strong> 2010-03-19 21:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>In reply to:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12393.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12393.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you again for your kind replies.
<br>
With your help I'm tantalisingly close to getting it working.
<br>
<p>I have successfully implemented MPI_COMM_SPAWN into my program, and it launches the external program. Returning from the external program however is proving problematic, which I think may be linked to the MPI_FINALIZE command in the child.
<br>
<p>The following portion of the code launches the child:
<br>
<p>----------------------------
<br>
INCLUDE 'mpif.h'
<br>
INTEGER :: info, ierr, child_comm
<br>
INTEGER :: errorcode_array(1)
<br>
<p><p>WRITE(crank,'(I4)') irank
<br>
<p>CALL MPI_INFO_CREATE(info, ierr) ! Prepare MPI INFO field
<br>
CALL MPI_INFO_SET(info, &quot;wdir&quot;, &quot;/home01/user/path/&quot; // dir, ierr) ! Set the working directory for the external simulation
<br>
CALL MPI_COMM_SPAWN(&quot;/home01/user/Execute/DLPOLY-intel-4-openmpi.X&quot;,MPI_ARGV_NULL,1,info,irank,MPI_COMM_WORLD,child_comm,errorcode_array,ierr)
<br>
<p>CALL MPI_COMM_DISCONNECT(child_comm,ierr)
<br>
<p>&lt;&gt; Loop to check if files exist indicating that the above simulation has finished - the loop is then exited when these files exist &lt;&gt;
<br>
-------------------------------------------
<br>
<p>The checking loop includes bash &quot;sleep&quot; commands, which seems to allow the child to use much of the CPU.
<br>
<p>The situation is that there are multiple passes of this subroutine by each process. The first pass of this subroutine is with a long child (~30s) and then subsequent passes are with short childs (~1s).
<br>
<p>Without the inclusion of the DISCONNECT command, a strange error occurs in the child process - it tries to write a file to the &quot;/&quot; directory (and gets &quot;permission denied&quot; of course) when this file is usually written to the directory set by wdir in INFO_SET. I have never ever had this problem before in any other situation. This doesn't occur on the first pass, but only after about 20-40 passes.
<br>
<p>With the inclusion of the DISCONNECT command, the parent processes ramp back up to 100% CPU after completion of their respective childs, but nothing happens. No error messages or anything - they are just running the CPUs at 100% without seeming to do anything. This happens on the 1st pass.
<br>
<p>I included the  DISCONNECT in an attempt to prevent a FINALIZE command in the child from causing an error, as Dick suggested.
<br>
<p>If anyone can help with this last step I'd really appreciate it. I think this is the last chance now; after this, I have no other ideas on how to get it working.
<br>
<p>Thank you very much.
<br>
<p>By the way, related to the comment about the processes being connected, a test of MPI_BARRIER across the child and parent was unsuccessful: the child and parent did not wait for each other with the following commands:
<br>
CALL MPI_BARRIER(MPI_COMM_WORLD,ierr) ! in parent
<br>
CALL MPI_BARRIER(MPI_COMM_WORLD,ierr) ! in child
<br>
<p><p><p>To: users_at_[hidden]
<br>
From: treumann_at_[hidden]
<br>
Date: Wed, 17 Mar 2010 13:25:03 -0400
<br>
Subject: Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)
<br>
<p><p>abc def
<br>
<p><p><p>When the parent does a spawn call, it presumably blocks until the child  tasks have called MPI_Init.  The standard allows some flexibility on this but at least after spawn, the spawn side must be able to issue communication calls involving the children and expect them to work.
<br>
<p><p><p>What you seem to be missing is that when a parent has spawned a set of children, the parent tasks and child tasks are connected. If you want the children to do an MPI_Finalize and actually finish before the parent calls MPI_Finalize, you must use MPI_Comm_disconnect on the intercommunicator between the spawn side and the children.
<br>
<p><p><p>The MPI standard makes MPI_Finalize collective across all currently connected processes so you cannot assume the children will return from MPI_Finalize until the parent process have entered MPI_Finalize.
<br>
<p><p><p>MPI_Comm_disconnect makes the parent and children independent so an MPI_Finalize by the children can return and the processes end, even though the parent continues on.
<br>
<p><p><p>In your example, perhaps the best approach is to have the children call MPI_Barrier after the file is written and have the parent call MPI_Barrier before the file is read. Have both parent and children call MPI_Comm_disconnect before the parent does another spawn so the children can finalize and go away.
<br>
<p>&nbsp;
<br>
<p><p><p>Dick Treumann  -  MPI Team           
<br>
<p>IBM Systems &amp; Technology Group
<br>
<p>Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
<p>Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p><p>Jeff Squyres ---03/17/2010 12:21:20 PM---On Mar 16, 2010, at 5:12 AM, abc def wrote: &gt; 1. Since Spawn is non-blocking, but I need the parent
<br>
<p><p><p><p><p><p><p>From:
<br>
<p>Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><p><p>To:
<br>
<p>&quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
<p><p><p>Date:
<br>
<p>03/17/2010 12:21 PM
<br>
<p><p><p>Subject:
<br>
<p>Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)
<br>
<p><p><p>Sent by:
<br>
<p>users-bounces_at_[hidden]
<br>
<p><p><p><p><p><p><p><p>On Mar 16, 2010, at 5:12 AM, abc def wrote:
<br>
<p><p><p><span class="quotelev1">&gt; 1. Since Spawn is non-blocking, but I need the parent to wait until the child completes, I am thinking there must be a way to pass a variable from the child to the parent just prior to the FINALIZE command in the child, to signal that the parent can pick up the output files from the child. Am I right in assuming that the message from the child to the parent will go to the correct parent process? The value of &quot;parent&quot; in &quot;CALL MPI_COMM_GET_PARENT(parent, ierr)&quot; is the same in all spawned processes, which is why I ask this question.
</span><br>
<p><p><p>Yes, you can MPI_SEND (etc.) between the parents and children, just like you would expect.  Just be aware that the communicator between the parents and children is an *inter*communicator -- so you need to express the source/destination in terms of the &quot;other&quot; group.  Check out the MPI spec for a description of intercommunicators.
<br>
<p><p><p><span class="quotelev1">&gt; 2. By launching the parent with the &quot;--mca mpi_yield_when_idle 1&quot; option, the child should be able to take CPU power from any blocked parent process, thus avoiding the busy-poll problem mentioned below.
</span><br>
<p><p><p>Somewhat.  Note that the parents aren't blocked -- they *are* busy polling, but they call yield() in every pool loop.  
<br>
<p><p><p><span class="quotelev1">&gt; If each host has 4 processors and I'm running on 2 hosts (ie, 8 processors in total), then I also assume that the spawned child will launch on the same host as the associated parent?
</span><br>
<p><p><p>If you have told Open MPI about 8 process slots and are using all of them, then spawned processes will start overlaying the original process slots -- effectively in the same order.
<br>
<p><p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 		 	   		  
_________________________________________________________________
We want to hear all your funny, exciting and crazy Hotmail stories. Tell us now
<a href="http://clk.atdmt.com/UKM/go/195013117/direct/01/">http://clk.atdmt.com/UKM/go/195013117/direct/01/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12384/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12385.php">Jeff Squyres: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>In reply to:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12393.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12393.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
