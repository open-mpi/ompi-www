<?
$subject_val = "Re: [OMPI users] check point restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 15:41:42 2013" -->
<!-- isoreceived="20130719194142" -->
<!-- sent="Fri, 19 Jul 2013 13:41:36 -0600" -->
<!-- isosent="20130719194136" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] check point restart" -->
<!-- id="51E99670.2060600_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAM=Ogih40C6r9HXZ+ADkKeHNpGq3OGqxNk-ApNh3=4nEb1a=RA_at_mail.gmail.com" -->
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
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 15:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<li><strong>Previous message:</strong> <a href="22343.php">Erik Nelson: "[OMPI users] check point restart"</a>
<li><strong>In reply to:</strong> <a href="22343.php">Erik Nelson: "[OMPI users] check point restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<li><strong>Reply:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know that in the past it has been supported via toolkits like BLCR,
<br>
but I don't know the current level of support, to be honest.  I think I
<br>
heard somewhere that the checkpoint/restart support in OpenMPI was going
<br>
away in some fashion.
<br>
<p>In any case, if you have the ability to set up application-aware,
<br>
application-specific checkpointing, it will be a much better solution
<br>
than something that's application-agnostic.  The checkpoint files will
<br>
be smaller (the application knows what in memory is important, and what
<br>
isn't), coordination will be better between processes, you have some
<br>
level of assurance that you won't have PID conflicts or problems when
<br>
the PID ends up different, etc.
<br>
<p>I suspect someone on the list can answer your question about the
<br>
built-in checkpoint/restart code better than I can.  But in general, if
<br>
you have a choice between checkpointing external and internal to your
<br>
application, choose the application-internal checkpointing.
<br>
<p><p><p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 07/19/2013 01:34 PM, Erik Nelson wrote:
<br>
<span class="quotelev1">&gt; I run mpi on an NSF computer. One of the conditions of use is that jobs
</span><br>
<span class="quotelev1">&gt; are limited to 24 hr
</span><br>
<span class="quotelev1">&gt; duration to provide democratic allotment to its users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A long program can require many restarts, so it becomes necessary to
</span><br>
<span class="quotelev1">&gt; store the state of the 
</span><br>
<span class="quotelev1">&gt; program in memory, print it, recompile, and and read the state to start
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I seem to remember a simpler approach (check point restart?) in which
</span><br>
<span class="quotelev1">&gt; the state of the .exe
</span><br>
<span class="quotelev1">&gt; code is saved and then simply restarted from its current position.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something like this for restarting an mpi program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Erik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Nelson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev1">&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev1">&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p : 214 645 5981
</span><br>
<span class="quotelev1">&gt; f : 214 645 5948
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<li><strong>Previous message:</strong> <a href="22343.php">Erik Nelson: "[OMPI users] check point restart"</a>
<li><strong>In reply to:</strong> <a href="22343.php">Erik Nelson: "[OMPI users] check point restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<li><strong>Reply:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
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
