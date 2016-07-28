<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:22:25 2008" -->
<!-- isoreceived="20080930142225" -->
<!-- sent="Tue, 30 Sep 2008 10:22:18 -0400" -->
<!-- isosent="20080930142218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome" -->
<!-- id="B919A730-E80C-412B-AD71-AD22B9BC60A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0A9D7319-787B-4CFC-A32F-A3175441972D_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 10:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6788.php">Andr&#233; Gaul: "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6747.php">Robert Kubrick: "[OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 26, 2008, at 1:45 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure how should I interpret this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [local:17344] *** An error occurred in MPI_Testsome
</span><br>
<span class="quotelev1">&gt; [local:17344] *** on communicator MPI COMMUNICATOR 5 CREATE FROM 0
</span><br>
<span class="quotelev1">&gt; [local:17344] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [local:17344] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 17338 on node local exited  
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am assuming that the error was triggered because one of the  
</span><br>
<span class="quotelev1">&gt; buffers I set in the MPI_Recv_init() calls can not contain the  
</span><br>
<span class="quotelev1">&gt; incoming message.
</span><br>
<p>Sorry for the delay in replying.
<br>
<p>This is likely the cause -- MPI defines this as a run-time error.
<br>
<p><span class="quotelev1">&gt; However, I don't understand why job rank 0 terminates first. The  
</span><br>
<span class="quotelev1">&gt; only process that contains a call to MPI_Testsome has actually rank  
</span><br>
<span class="quotelev1">&gt; 3, and it's receiving messages from rank 0.
</span><br>
<p>The aborting process sends a message to kill all the other processes  
<br>
in the job before it dies itself (i.e., to obey the semantics of an  
<br>
MPI abort).  Hence, it's likely that there's a race going on here and  
<br>
process 0 dies before 3, so mpirun reports that first.
<br>
<p><span class="quotelev1">&gt; Also I think it would be a good idea to print the message tag in the  
</span><br>
<span class="quotelev1">&gt; error log.
</span><br>
<p><p>Mm.  Good point.  I'll file this as a feature request -- we have  
<br>
centralized error reporting for the abort sequence, so it'll take a  
<br>
little noodling to get that in there.  Probably won't happen for v1.3[. 
<br>
0], but that's good real-world feedback to have.  Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6788.php">Andr&#233; Gaul: "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6747.php">Robert Kubrick: "[OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
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
