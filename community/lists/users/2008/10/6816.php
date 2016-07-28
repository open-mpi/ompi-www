<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 19:44:02 2008" -->
<!-- isoreceived="20081001234402" -->
<!-- sent="Wed, 1 Oct 2008 19:43:53 -0400" -->
<!-- isosent="20081001234353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="F6879C8B-43B1-431D-9769-0A7A0A87E39A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="121FA0E931EE4D9CB4EBC7D1010CC565_at_aparicio1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 19:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Previous message:</strong> <a href="6815.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't think of any reason why Open MPI wouldn't work over a WiFi  
<br>
connection unless there's some weirdness in the wireless driver.
<br>
<p><p>On Oct 1, 2008, at 5:19 AM, Sofia Aparicio Secanellas wrote:
<br>
<p><span class="quotelev1">&gt; The problem is with the WiFi connection!
</span><br>
<span class="quotelev1">&gt; We were connecting the computers using WiFi, we have changed to a  
</span><br>
<span class="quotelev1">&gt; cable connection and the program is working.
</span><br>
<span class="quotelev1">&gt; It seems that the port that MPI_Send and MPI_Recv use are closed.
</span><br>
<span class="quotelev1">&gt; Do you know which port are using the MPI_Send and MPI_Recv commands?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----- From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 30, 2008 9:11 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2008, at 12:02 PM, Sofia Aparicio Secanellas wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. From prior mails, you do not seem to have iptables running to   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; block any ports -- is there any other port blocking software   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running, perchance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not think so. What can I do to be sure that I do not have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any  other port blocking software running?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test that random TCP ports can connect to each other.  Perhaps   
</span><br>
<span class="quotelev2">&gt;&gt; something like this on computer 1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; computer1$ nc -lp 123456
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then on your other computer:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; computer2$ telnet computer1 123456
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the &quot;telnet&quot; connects, then you should be able to type anything  
</span><br>
<span class="quotelev2">&gt;&gt; and have it appear on computer1 (where nc) is running.  Hit Ctrl-C  
</span><br>
<span class="quotelev2">&gt;&gt; in the window where &quot;nc&quot; is running to kill the connection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this works, then you likely do not have port blocking software  
</span><br>
<span class="quotelev2">&gt;&gt; running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I do to attach the MPI processes with a debugger?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have used before:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dbx - PID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the results that I have obtained were not very  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah yes, sorry, this thread has been so long that I missed that.  I  
</span><br>
<span class="quotelev2">&gt;&gt; see the stack traces, and like Terry said, it shows that the sends  
</span><br>
<span class="quotelev2">&gt;&gt; and receives are pending, but not *why*.  Well, let's see the  
</span><br>
<span class="quotelev2">&gt;&gt; results of  the &quot;nc&quot; test from above before deciding how to move  
</span><br>
<span class="quotelev2">&gt;&gt; onward...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this incoming message
</span><br>
<span class="quotelev2">&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
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
<li><strong>Next message:</strong> <a href="6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Previous message:</strong> <a href="6815.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
