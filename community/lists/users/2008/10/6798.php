<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 03:28:28 2008" -->
<!-- isoreceived="20081001072828" -->
<!-- sent="Wed, 1 Oct 2008 09:28:07 +0200" -->
<!-- isosent="20081001072807" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="760590F571AA4098B35FA29B67DBB710_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A25E587F-B15F-4321-A2E6-BE6FB46FB9A2_at_cisco.com" -->
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
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 03:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6799.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="../../2008/09/6797.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="../../2008/09/6795.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6801.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried with
<br>
nc -lp 9999
<br>
and it was working pefectly everything I write on computer2 I can see on 
<br>
computer1.
<br>
<p>Thank you very much.
<br>
<p>Sof&#237;a
<br>
----- Original Message ----- 
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, September 30, 2008 9:11 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; On Sep 30, 2008, at 12:02 PM, Sofia Aparicio Secanellas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. From prior mails, you do not seem to have iptables running to  block 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any ports -- is there any other port blocking software  running, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perchance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not think so. What can I do to be sure that I do not have any  other 
</span><br>
<span class="quotelev2">&gt;&gt; port blocking software running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test that random TCP ports can connect to each other.  Perhaps  something 
</span><br>
<span class="quotelev1">&gt; like this on computer 1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; computer1$ nc -lp 123456
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then on your other computer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; computer2$ telnet computer1 123456
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the &quot;telnet&quot; connects, then you should be able to type anything and 
</span><br>
<span class="quotelev1">&gt; have it appear on computer1 (where nc) is running.  Hit Ctrl-C in the 
</span><br>
<span class="quotelev1">&gt; window where &quot;nc&quot; is running to kill the connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this works, then you likely do not have port blocking software 
</span><br>
<span class="quotelev1">&gt; running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I do to attach the MPI processes with a debugger?
</span><br>
<span class="quotelev2">&gt;&gt; I have used before:
</span><br>
<span class="quotelev2">&gt;&gt; dbx - PID
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the results that I have obtained were not very helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah yes, sorry, this thread has been so long that I missed that.  I see 
</span><br>
<span class="quotelev1">&gt; the stack traces, and like Terry said, it shows that the sends and 
</span><br>
<span class="quotelev1">&gt; receives are pending, but not *why*.  Well, let's see the results of  the 
</span><br>
<span class="quotelev1">&gt; &quot;nc&quot; test from above before deciding how to move onward...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this incoming message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a> 
</span><br>
<p><p><p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6799.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="../../2008/09/6797.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="../../2008/09/6795.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6801.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
