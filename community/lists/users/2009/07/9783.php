<?
$subject_val = "Re: [OMPI users] Disconnections";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 18:01:02 2009" -->
<!-- isoreceived="20090701220102" -->
<!-- sent="Wed, 1 Jul 2009 16:00:47 -0600" -->
<!-- isosent="20090701220047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Disconnections" -->
<!-- id="D5F5B1F8-8718-4611-9A5D-99F991CDF798_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C6711EB9.3014%daniel.miles_at_rnanetworks.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 18:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9784.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9782.php">Daniel Miles: "[OMPI users] Disconnections"</a>
<li><strong>In reply to:</strong> <a href="9782.php">Daniel Miles: "[OMPI users] Disconnections"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 1, 2009, at 3:10 PM, Daniel Miles wrote:
<br>
<p><span class="quotelev1">&gt; Hi, everybody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m having trouble where one of my client nodes crashes while I have  
</span><br>
<span class="quotelev1">&gt; an MPI job on it. When this happens, the mpirun process on the head  
</span><br>
<span class="quotelev1">&gt; node never returns.
</span><br>
<p>This shouldn't happen - we should cleanly abort. What version are you  
<br>
using?
<br>
<p><span class="quotelev1">&gt; I can kill it with a SIGINT (ctrl-c) and it still cleans up its  
</span><br>
<span class="quotelev1">&gt; child processes on the remaining healthy client nodes but I don&#146;t  
</span><br>
<span class="quotelev1">&gt; get any of the results from those client processes.
</span><br>
<p>At the moment, we sigterm the remaining healthy children when you ctrl- 
<br>
c. I do believe that Rolf (Sun) put some code in our development trunk  
<br>
that first hits the procs with a signal that they can catch to cleanup  
<br>
before being whacked, but that isn't in a release yet (assuming I  
<br>
remember it right anyway). If I'm mis-remembering, I can certainly add  
<br>
that capability.
<br>
<p>Sounds like something we should do, assuming the MPI std allows it  
<br>
(and mechanics work out).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have any ideas about how I could create a more fault- 
</span><br>
<span class="quotelev1">&gt; tolerant MPI job? In an ideal world, my head node would report that  
</span><br>
<span class="quotelev1">&gt; it lost the connection to a client node and keep going as if that  
</span><br>
<span class="quotelev1">&gt; client never existed (so that the results of the job are what they  
</span><br>
<span class="quotelev1">&gt; would have been if the crashed-node wasn&#146;t part of the job to begin  
</span><br>
<span class="quotelev1">&gt; with).
</span><br>
<p><p>That would be nice...but I'm not sure anyone knows how to do that  
<br>
right now. The problem is that MPI operations involving ranks on that  
<br>
client node will suddenly hang without warning, and there is no way to  
<br>
know that something is wrong.
<br>
<p>There is work going on to enable what you describe, but it is still in  
<br>
the research phase.
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-9783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9784.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9782.php">Daniel Miles: "[OMPI users] Disconnections"</a>
<li><strong>In reply to:</strong> <a href="9782.php">Daniel Miles: "[OMPI users] Disconnections"</a>
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
