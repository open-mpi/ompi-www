<?
$subject_val = "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  6 12:25:27 2009" -->
<!-- isoreceived="20090606162527" -->
<!-- sent="Sat, 6 Jun 2009 10:25:13 -0600" -->
<!-- isosent="20090606162513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oob-tcp problem, unreachable in orted_comm" -->
<!-- id="30A58B31-E662-48E7-8B86-FDE812F26286_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1244305107.7024.10.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] oob-tcp problem, unreachable in orted_comm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-06 12:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9558.php">Carlos Henrique da Silva Santos: "[OMPI users] MPI inside MPI"</a>
<li><strong>Previous message:</strong> <a href="9556.php">&#197;ke Sandgren: "[OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>In reply to:</strong> <a href="9556.php">&#197;ke Sandgren: "[OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I've started seeing this on clusters where the TCP stack is a  
<br>
little congested. We default to trying 60 times to send a message, but  
<br>
it is done in rapid succession and doesn't really provide a lot of time.
<br>
<p>Try setting -mca oob_tcp_peer_retries 1000 (or some number much bigger  
<br>
than 60). This has always fixed the problem so far.
<br>
<p>If it works, you might want to put it in the system default mca param  
<br>
file.
<br>
<p>On Jun 6, 2009, at 10:18 AM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; Just got this in a user job.
</span><br>
<span class="quotelev1">&gt; Any idea why it complains like this.
</span><br>
<span class="quotelev1">&gt; The original error was the infamous &quot;RETRY EXCEEDED ERROR&quot; but instead
</span><br>
<span class="quotelev1">&gt; of killing the job it showed this and never died.
</span><br>
<span class="quotelev1">&gt; I have never seen this happen before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi 1.3.2, built with intel 10.1
</span><br>
<span class="quotelev1">&gt; This binary is used ALOT (+50% of the system walltime) and has never
</span><br>
<span class="quotelev1">&gt; shown this specific problem and rarely the &quot;Retry exceeded error&quot;
</span><br>
<span class="quotelev1">&gt; either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [p-bc2503.hpc2n.umu.se:11892] [[34820,0],0]-[[34820,0],1] oob-tcp:
</span><br>
<span class="quotelev1">&gt; Communication
</span><br>
<span class="quotelev1">&gt; retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [p-bc2503.hpc2n.umu.se:11892] [[34820,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Unreachable
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev1">&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev1">&gt; [p-bc2503.hpc2n.umu.se:11892] [[34820,0],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Unreachable
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev1">&gt; orted/orted_comm.c at line 130
</span><br>
<span class="quotelev1">&gt; [p-bc2503.hpc2n.umu.se:11892] [[34820,0],0]-[[34820,0],1] oob-tcp:
</span><br>
<span class="quotelev1">&gt; Communication
</span><br>
<span class="quotelev1">&gt; retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9558.php">Carlos Henrique da Silva Santos: "[OMPI users] MPI inside MPI"</a>
<li><strong>Previous message:</strong> <a href="9556.php">&#197;ke Sandgren: "[OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>In reply to:</strong> <a href="9556.php">&#197;ke Sandgren: "[OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
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
