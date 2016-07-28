<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 10:19:21 2008" -->
<!-- isoreceived="20081001141921" -->
<!-- sent="Wed, 1 Oct 2008 16:19:17 +0200 (CEST)" -->
<!-- isosent="20081001141917" -->
<!-- name="saparicio_at_[hidden]" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="1222870766.0000_at_hypermail.dummy" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> <a href="mailto:saparicio_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20with%20MPI_Send%20and%20MPI_Recv"><em>saparicio_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-10-01 10:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6804.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6798.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is the WiFi connection!
<br>
<p>We were connecting the computers using WiFi, we have changed to a cable
<br>
connection and the program is working.
<br>
<p>It seems that the port that MPI_Send and MPI_Recv use is closed.
<br>
<p>Do you know which port use these commands?
<br>
<p>Thank you,
<br>
<p>Sofia
<br>
<span class="quotelev1">&gt; On Sep 30, 2008, at 12:02 PM, Sofia Aparicio Secanellas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. From prior mails, you do not seem to have iptables running to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; block any ports -- is there any other port blocking software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running, perchance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not think so. What can I do to be sure that I do not have any
</span><br>
<span class="quotelev2">&gt;&gt; other port blocking software running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test that random TCP ports can connect to each other.  Perhaps
</span><br>
<span class="quotelev1">&gt; something like this on computer 1:
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
<span class="quotelev1">&gt; receives are pending, but not *why*.  Well, let's see the results of
</span><br>
<span class="quotelev1">&gt; the &quot;nc&quot; test from above before deciding how to move onward...
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6804.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6798.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
