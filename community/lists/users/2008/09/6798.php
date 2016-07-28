<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 15:11:33 2008" -->
<!-- isoreceived="20080930191133" -->
<!-- sent="Tue, 30 Sep 2008 15:11:27 -0400" -->
<!-- isosent="20080930191127" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="A25E587F-B15F-4321-A2E6-BE6FB46FB9A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2FEFB88069FE4E719E8A6AF752A84FA4_at_aparicio1" -->
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
<strong>Date:</strong> 2008-09-30 15:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Previous message:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6801.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6801.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6804.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6805.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2008, at 12:02 PM, Sofia Aparicio Secanellas wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. From prior mails, you do not seem to have iptables running to  
</span><br>
<span class="quotelev2">&gt;&gt; block any ports -- is there any other port blocking software  
</span><br>
<span class="quotelev2">&gt;&gt; running, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not think so. What can I do to be sure that I do not have any  
</span><br>
<span class="quotelev1">&gt; other port blocking software running?
</span><br>
<p>Test that random TCP ports can connect to each other.  Perhaps  
<br>
something like this on computer 1:
<br>
<p>computer1$ nc -lp 123456
<br>
<p>Then on your other computer:
<br>
<p>computer2$ telnet computer1 123456
<br>
<p>If the &quot;telnet&quot; connects, then you should be able to type anything and  
<br>
have it appear on computer1 (where nc) is running.  Hit Ctrl-C in the  
<br>
window where &quot;nc&quot; is running to kill the connection.
<br>
<p>If this works, then you likely do not have port blocking software  
<br>
running.
<br>
<p><span class="quotelev1">&gt; How can I do to attach the MPI processes with a debugger?
</span><br>
<span class="quotelev1">&gt; I have used before:
</span><br>
<span class="quotelev1">&gt; dbx - PID
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt; It seems that the results that I have obtained were not very helpful.
</span><br>
<p><p>Ah yes, sorry, this thread has been so long that I missed that.  I see  
<br>
the stack traces, and like Terry said, it shows that the sends and  
<br>
receives are pending, but not *why*.  Well, let's see the results of  
<br>
the &quot;nc&quot; test from above before deciding how to move onward...
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
<li><strong>Next message:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Previous message:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6801.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6801.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6804.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6805.php">saparicio_at_[hidden]: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6806.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
