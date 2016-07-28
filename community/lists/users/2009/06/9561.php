<?
$subject_val = "Re: [OMPI users] Spawn and OpenFabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  7 21:19:29 2009" -->
<!-- isoreceived="20090608011929" -->
<!-- sent="Sun, 07 Jun 2009 21:19:19 -0400" -->
<!-- isosent="20090608011919" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and OpenFabrics" -->
<!-- id="1244423960.3239.388.camel_at_alpaca.lan" -->
<!-- inreplyto="F9D7DA3E-BBB1-479B-8AF3-2B50F8D21928_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn and OpenFabrics<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-07 21:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9560.php">Ralph Castain: "Re: [OMPI users] MPI inside MPI"</a>
<li><strong>In reply to:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK. I appreciate the suggestion and will definitely try it out.
<br>
<p>Thanks,
<br>
Allen
<br>
<p><p>On Fri, 2009-06-05 at 10:14 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 3:26 PM, Allen Barnett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I
</span><br>
<span class="quotelev2">&gt; &gt; guess what I'm asking is if I will have to make my partitioner an
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI program as well?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you use MPI_COMM_SPAWN with the 1.2 series, yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another less attractive but functional solution would be to do what I  
</span><br>
<span class="quotelev1">&gt; did for the new command notifier due in the OMPI v1.5 series  
</span><br>
<span class="quotelev1">&gt; (&quot;notifier&quot; = subsystem to notify external agents when OMPI detects  
</span><br>
<span class="quotelev1">&gt; something wrong, like write to the syslog, send an email, write to a  
</span><br>
<span class="quotelev1">&gt; sysadmin mysql db, etc., &quot;command&quot; = plugin that simply forks and runs  
</span><br>
<span class="quotelev1">&gt; whatever command you want).  During MPI_INIT, the fork notifier pre- 
</span><br>
<span class="quotelev1">&gt; forks a dummy process.  This dummy process then waits for commands via  
</span><br>
<span class="quotelev1">&gt; a pipe.  When the parent (MPI process itself) wants to fork a child,  
</span><br>
<span class="quotelev1">&gt; it sends the argv to exec down the pipe and has the child process  
</span><br>
<span class="quotelev1">&gt; actually do the fork and exec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Proxying all the fork requests through a secondary process like this  
</span><br>
<span class="quotelev1">&gt; avoids all the problems with registered memory in the child process.   
</span><br>
<span class="quotelev1">&gt; This is icky, but it is an unfortunately necessity for OS-bypass/ 
</span><br>
<span class="quotelev1">&gt; registration-based networks like OpenFabrics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In your case, you'd want to pre-fork before calling MPI_INIT.  But the  
</span><br>
<span class="quotelev1">&gt; rest of the technique is pretty much the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have a look at the code in this tree if it helps:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/orte/mca/notifier/command">https://svn.open-mpi.org/trac/ompi/browser/trunk/orte/mca/notifier/command</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9562.php">shan axida: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9560.php">Ralph Castain: "Re: [OMPI users] MPI inside MPI"</a>
<li><strong>In reply to:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
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
