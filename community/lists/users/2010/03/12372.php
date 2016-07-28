<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 12:19:58 2010" -->
<!-- isoreceived="20100317161958" -->
<!-- sent="Wed, 17 Mar 2010 09:19:51 -0700" -->
<!-- isosent="20100317161951" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="13EE64A7-E92E-4C32-AE1F-0E09D92CD5E7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT110-W299F42C0152BA99778943F8B2D0_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-03-17 12:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12373.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>In reply to:</strong> <a href="12364.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2010, at 5:12 AM, abc def wrote:
<br>
<p><span class="quotelev1">&gt; 1. Since Spawn is non-blocking, but I need the parent to wait until the child completes, I am thinking there must be a way to pass a variable from the child to the parent just prior to the FINALIZE command in the child, to signal that the parent can pick up the output files from the child. Am I right in assuming that the message from the child to the parent will go to the correct parent process? The value of &quot;parent&quot; in &quot;CALL MPI_COMM_GET_PARENT(parent, ierr)&quot; is the same in all spawned processes, which is why I ask this question.
</span><br>
<p>Yes, you can MPI_SEND (etc.) between the parents and children, just like you would expect.  Just be aware that the communicator between the parents and children is an *inter*communicator -- so you need to express the source/destination in terms of the &quot;other&quot; group.  Check out the MPI spec for a description of intercommunicators.
<br>
<p><span class="quotelev1">&gt; 2. By launching the parent with the &quot;--mca mpi_yield_when_idle 1&quot; option, the child should be able to take CPU power from any blocked parent process, thus avoiding the busy-poll problem mentioned below.
</span><br>
<p>Somewhat.  Note that the parents aren't blocked -- they *are* busy polling, but they call yield() in every pool loop.  
<br>
<p><span class="quotelev1">&gt; If each host has 4 processors and I'm running on 2 hosts (ie, 8 processors in total), then I also assume that the spawned child will launch on the same host as the associated parent?
</span><br>
<p>If you have told Open MPI about 8 process slots and are using all of them, then spawned processes will start overlaying the original process slots -- effectively in the same order.
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
<li><strong>Next message:</strong> <a href="12373.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12371.php">Tim Prince: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>In reply to:</strong> <a href="12364.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12376.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
