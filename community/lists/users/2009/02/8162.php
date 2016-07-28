<?
$subject_val = "Re: [OMPI users] How to quit asynchronous processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 14:20:49 2009" -->
<!-- isoreceived="20090223192049" -->
<!-- sent="Mon, 23 Feb 2009 14:20:42 -0500" -->
<!-- isosent="20090223192042" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to quit asynchronous processes" -->
<!-- id="OF6AA4DCFA.7D3EDB3E-ON85257566.0066FF3C-85257566.006A4411_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="180492.84803.qm_at_web76201.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to quit asynchronous processes<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 14:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8163.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="8161.php">Jeff Squyres: "Re: [OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>In reply to:</strong> <a href="8154.php">Tee Wen Kai: "[OMPI users] How to quit asynchronous processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not 100% sure I understand your situation.  It it this?
<br>
<p>Process A has an ongoing stream of inputs. For each input unit, A does some
<br>
processing and then passes on work to B via a message.  B receives the
<br>
message from A and does some additional work before sending a message to C.
<br>
C receives the message from B and does more work before spitting out an
<br>
answer.  At any time, whoever is interested in the answers coming from C
<br>
can tell C to quit spitting out answers and shut down the pipeline.
<br>
<p>Is this right?
<br>
<p>If so, I think the best answer is to let the shutdown flow through the same
<br>
pipeline, flushing the messages ahead of the shutdown.  The reason for this
<br>
is that an MPI program cannot be cleanly terminated until all sends are
<br>
matched by receives.  If A has tried to send a message to B but B has not
<br>
yet received it and you try to terminate B, you guarantee A cannot
<br>
terminate cleanly.
<br>
<p>If the message A sends B and the message B sends C can be designed to
<br>
indicate &quot;shutdown&quot; then here is the clean solution.  For example, if you
<br>
know the first word of a working message is always a positive number, you
<br>
could send a message that has a -1 in the first word to indicated
<br>
&quot;shutdown&quot;. As each message arrives at B or C, the first step is to check
<br>
for -1.
<br>
<p>When C is told to shut down, it sends a message to A that says &quot;flush the
<br>
pipe&quot;.  Before each time A picks up a new input to process, A does an
<br>
Iprobe for a &quot;flush the pipe&quot; message from C . If C has sent a &quot;flush the
<br>
pipe&quot; message, A receives that message, A discards the input, sends a
<br>
&quot;shutdown&quot; to B and calls MPI_Finalize.  Each time B gets a message from A
<br>
it looks to see if the message is a &quot;shutdown&quot; or real work.  If it is a
<br>
&quot;shutdown&quot;, B forwards the &quot;shutdown&quot;  to C and B calls MPI_Finalize.  Each
<br>
time C gets a message from B it looks to see if the message is a &quot;shutdown&quot;
<br>
or real work.  If it is a &quot;shutdown&quot;, then C calls MPI_Finalize.
<br>
<p>The pipeline has been flushed so none of them has an unmatched send or
<br>
receive.  A and B are waiting in MPI_Finalize by the time C actually calls
<br>
MPI_Finalize so everything cleans up neatly.
<br>
<p><p><p><p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/22/2009 10:49:27 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [OMPI users] How to quit asynchronous processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tee Wen Kai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 02/22/2009 10:50 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to teewenkai, Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have three processes A,B &amp; C. A will receive some data and process
</span><br>
<span class="quotelev1">&gt; and after that will pass results to B. Thereafter, A will go back to
</span><br>
<span class="quotelev1">&gt; get data and process and prepare to send them to B again. Same goes
</span><br>
<span class="quotelev1">&gt; for B to C where C will provide the final output. As all the
</span><br>
<span class="quotelev1">&gt; processes are running asynchronously, I can't find a method to quit
</span><br>
<span class="quotelev1">&gt; all processes gracefully. I have tried to use C to issue MPI_Abort
</span><br>
<span class="quotelev1">&gt; when quit command is received with processes A and B entering the
</span><br>
<span class="quotelev1">&gt; SIGTERM handler to free all the allocated memories. However, the
</span><br>
<span class="quotelev1">&gt; processes may be in the midst of a communication when SIGTERM signal
</span><br>
<span class="quotelev1">&gt; is raise, resulting in some error msg like &quot;remote connection close&quot;
</span><br>
<span class="quotelev1">&gt; etc. To prevent such error messages from displaying, I couldn't use
</span><br>
<span class="quotelev1">&gt; MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seek your advice on methods to quit asynchonous processes properly
</span><br>
<span class="quotelev1">&gt; without all these error messages. And I would also like to find out
</span><br>
<span class="quotelev1">&gt; what will be the outcome eventually if I don't close the processes
</span><br>
<span class="quotelev1">&gt; with an MPI_Finalize command, will it lead to eventual memory leak etc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Wenkai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get your preferred Email name!
</span><br>
<span class="quotelev1">&gt; Now you can @ymail.com and @rocketmail.com.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8163.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="8161.php">Jeff Squyres: "Re: [OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>In reply to:</strong> <a href="8154.php">Tee Wen Kai: "[OMPI users] How to quit asynchronous processes"</a>
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
