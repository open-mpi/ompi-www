<?
$subject_val = "Re: [OMPI users] Using a rankfile for ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 14:53:45 2010" -->
<!-- isoreceived="20100518185345" -->
<!-- sent="Tue, 18 May 2010 14:53:41 -0400" -->
<!-- isosent="20100518185341" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using a rankfile for ompi-restart" -->
<!-- id="D09E035E-68BB-4362-BD5C-27ECBC97E597_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="w2m9108753b1004081034y70a09588u150340e54a84a38c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using a rankfile for ompi-restart<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 14:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12590.php">Fernando Lemos: "[OMPI users] Using a rankfile for ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Reply:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the delay in replying, more below)
<br>
<p>On Apr 8, 2010, at 1:34 PM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noticed that ompi-restart doesn't support the --rankfile option.
</span><br>
<span class="quotelev1">&gt; It only supports --hostfile/--machinefile. Is there any reason
</span><br>
<span class="quotelev1">&gt; --rankfile isn't supported?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suppose you have a cluster without a shared file system. When one node
</span><br>
<span class="quotelev1">&gt; fails, you transfer its checkpoint to a spare node and invoke
</span><br>
<span class="quotelev1">&gt; ompi-restart. In 1.5, ompi-restart automagically handles this
</span><br>
<span class="quotelev1">&gt; situation (if you supply a hostfile) and is able to restart the
</span><br>
<span class="quotelev1">&gt; process, but I'm afraid it might not always be able to find the
</span><br>
<span class="quotelev1">&gt; checkpoints this way. If you could specify to ompi-restart where the
</span><br>
<span class="quotelev1">&gt; ranks are (and thus where the checkpoints are), then maybe restart
</span><br>
<span class="quotelev1">&gt; would always work as long (as long as you've specified the location of
</span><br>
<span class="quotelev1">&gt; the checkpoints correctly), or maybe ompi-restart would be faster.
</span><br>
<p>We can easily add the --rankfile option to ompi-restart. I filed a  
<br>
ticket to add this option, and assess if there are other options that  
<br>
we should pass along (e.g., --npernode, --byhost). I should be able to  
<br>
fix this in the next week or so, but the ticket is linked below so you  
<br>
can follow the progress.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2413">https://svn.open-mpi.org/trac/ompi/ticket/2413</a>
<br>
<p>Most of the ompi-restart parameters are passed directly to the mpirun  
<br>
command. ompi-restart is mostly a wrapper around mpirun that is able  
<br>
to parse the metadata and create the appcontext file. I wonder if a  
<br>
more general parameter like '--mpirun-args ...' might make sense so  
<br>
users don't have to wait on me to expose the interface they need.
<br>
<p>Donno. What do you think? Should I create a '--mpirun-args' option or  
<br>
duplicate all of the mpirun command line parameters, or some  
<br>
combination of the two.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<li><strong>Next message:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12590.php">Fernando Lemos: "[OMPI users] Using a rankfile for ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Reply:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
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
