<?
$subject_val = "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 09:26:48 2008" -->
<!-- isoreceived="20080621132648" -->
<!-- sent="Sat, 21 Jun 2008 09:26:36 -0400" -->
<!-- isosent="20080621132636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts" -->
<!-- id="5EF1738A-8193-4E0C-BC75-2AFD38617E24_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="865886.81138.qm_at_web57608.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 09:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>Previous message:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>In reply to:</strong> <a href="5850.php">Bill Johnstone: "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying to this -- mails sometimes pile up in  
<br>
my INBOX and I don't get to reply to them all in a timely fashion.
<br>
<p>Yes, you can expect this to be much better in the v1.3 series.  If you  
<br>
have a few cycles, you might want to test a nightly trunk tarball  
<br>
snapshot in some of your problematic cases and see if it's better.   
<br>
We've had a little instability in trunk tarballs over the last week,  
<br>
so you might want to wait until next week to give it a shot.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><p>On Jun 9, 2008, at 10:50 AM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; Hello OMPI devs,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently running OMPI v 1.2.4 .  It didn't seem that any bugs  
</span><br>
<span class="quotelev1">&gt; which affect me or my users were fixed in 1.2.5 and 1.2.6, so I  
</span><br>
<span class="quotelev1">&gt; haven't upgraded yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I was initially getting started with OpenMPI, I had some  
</span><br>
<span class="quotelev1">&gt; problems which I was able to solve, but one still remains.  As I  
</span><br>
<span class="quotelev1">&gt; mentioned in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/07/3716.php">http://www.open-mpi.org/community/lists/users/2007/07/3716.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when there is a non-graceful exit on any of the MPI jobs, mpirun  
</span><br>
<span class="quotelev1">&gt; hangs.  As an example, I have a code that I run which, when it has a  
</span><br>
<span class="quotelev1">&gt; trivial runtime error (e.g., some small mistake in the input file)  
</span><br>
<span class="quotelev1">&gt; dies yielding messages to the screen like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node1.x86-64:28556] MPI_ABORT invoked on rank 0 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but mpirun never exits, and Ctrl+C won't kill it.  I have to resort  
</span><br>
<span class="quotelev1">&gt; to kill -9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now that I'm running under SLURM, this is worse because there is no  
</span><br>
<span class="quotelev1">&gt; nice way to manually clear individual jobs off the controller.  So  
</span><br>
<span class="quotelev1">&gt; even if I manually kill mpirun on the failed job, slurmctld still  
</span><br>
<span class="quotelev1">&gt; thinks its running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain replied to the previously-linked message:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/07/3718.php">http://www.open-mpi.org/community/lists/users/2007/07/3718.php</a>  
</span><br>
<span class="quotelev1">&gt; indicating that he thought he knew why this was happening and that  
</span><br>
<span class="quotelev1">&gt; it was or would likely be fixed in the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point, I just want to know: can I look forward to this being  
</span><br>
<span class="quotelev1">&gt; fixed in the upcoming v 1.3 series?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't mean that to sound ungrateful: *many thanks* to the OMPI  
</span><br>
<span class="quotelev1">&gt; devs for what you've already given the community at large.  I'm just  
</span><br>
<span class="quotelev1">&gt; a bit frustrated because we seem to run a lot of codes on our  
</span><br>
<span class="quotelev1">&gt; cluster that abort at one time or another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>Previous message:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>In reply to:</strong> <a href="5850.php">Bill Johnstone: "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
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
