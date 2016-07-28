<?
$subject_val = "Re: [OMPI users] check point restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 15:51:39 2013" -->
<!-- isoreceived="20130719195139" -->
<!-- sent="Fri, 19 Jul 2013 12:51:31 -0700" -->
<!-- isosent="20130719195131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] check point restart" -->
<!-- id="C7B6AE1F-6DC4-4435-BC76-B43EE98C7D20_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51E99670.2060600_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] check point restart<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 15:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22346.php">Kevin H. Hobbs: "[OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22344.php">Lloyd Brown: "Re: [OMPI users] check point restart"</a>
<li><strong>In reply to:</strong> <a href="22344.php">Lloyd Brown: "Re: [OMPI users] check point restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<li><strong>Reply:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 19, 2013, at 12:41 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I know that in the past it has been supported via toolkits like BLCR,
</span><br>
<span class="quotelev1">&gt; but I don't know the current level of support, to be honest.  I think I
</span><br>
<span class="quotelev1">&gt; heard somewhere that the checkpoint/restart support in OpenMPI was going
</span><br>
<span class="quotelev1">&gt; away in some fashion.
</span><br>
<p>It is still somewhat there thru the 1.6 series, but may have suffered some bitrot in the latest 1.6 release(s). The developer who maintained that functionality has taken on another position, so support isn't as strong as it was. Currently, it isn't available in the 1.7 series.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, if you have the ability to set up application-aware,
</span><br>
<span class="quotelev1">&gt; application-specific checkpointing, it will be a much better solution
</span><br>
<span class="quotelev1">&gt; than something that's application-agnostic.  The checkpoint files will
</span><br>
<span class="quotelev1">&gt; be smaller (the application knows what in memory is important, and what
</span><br>
<span class="quotelev1">&gt; isn't), coordination will be better between processes, you have some
</span><br>
<span class="quotelev1">&gt; level of assurance that you won't have PID conflicts or problems when
</span><br>
<span class="quotelev1">&gt; the PID ends up different, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect someone on the list can answer your question about the
</span><br>
<span class="quotelev1">&gt; built-in checkpoint/restart code better than I can.  But in general, if
</span><br>
<span class="quotelev1">&gt; you have a choice between checkpointing external and internal to your
</span><br>
<span class="quotelev1">&gt; application, choose the application-internal checkpointing.
</span><br>
<p>Definitely agree - internal is much better. I don't understand the comment about printing and recompiling. Usually, people just have the app write its intermediate results to a file, and provide a cmd line option pointing to that file upon restart so the app knows to read and start from that point. The app requires a routine to read the file and set itself up to continue, but that's a one-time implementation thing.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/19/2013 01:34 PM, Erik Nelson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I run mpi on an NSF computer. One of the conditions of use is that jobs
</span><br>
<span class="quotelev2">&gt;&gt; are limited to 24 hr
</span><br>
<span class="quotelev2">&gt;&gt; duration to provide democratic allotment to its users.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A long program can require many restarts, so it becomes necessary to
</span><br>
<span class="quotelev2">&gt;&gt; store the state of the 
</span><br>
<span class="quotelev2">&gt;&gt; program in memory, print it, recompile, and and read the state to start
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I seem to remember a simpler approach (check point restart?) in which
</span><br>
<span class="quotelev2">&gt;&gt; the state of the .exe
</span><br>
<span class="quotelev2">&gt;&gt; code is saved and then simply restarted from its current position.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there something like this for restarting an mpi program?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Erik
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt;&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt;&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt;&gt; f : 214 645 5948
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22346.php">Kevin H. Hobbs: "[OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22344.php">Lloyd Brown: "Re: [OMPI users] check point restart"</a>
<li><strong>In reply to:</strong> <a href="22344.php">Lloyd Brown: "Re: [OMPI users] check point restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<li><strong>Reply:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
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
