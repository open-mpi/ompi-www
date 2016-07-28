<?
$subject_val = "[OMPI users] MPI Blocking Routines and Memory Leaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 12:55:06 2009" -->
<!-- isoreceived="20090325165506" -->
<!-- sent="Wed, 25 Mar 2009 17:55:01 +0100" -->
<!-- isosent="20090325165501" -->
<!-- name="Simon K&#246;stlin" -->
<!-- email="kiyu0.83_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Blocking Routines and Memory Leaks" -->
<!-- id="576b8700903250955x51bb0deck8838ad36eaebf54_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI Blocking Routines and Memory Leaks<br>
<strong>From:</strong> Simon K&#246;stlin (<em>kiyu0.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 12:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Previous message:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Reply:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Reply:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm new to MPI and I've got a question about blocking routines like the
<br>
Send-, Wait-Function and so on. I wrote a parallel program that uses the
<br>
blocking Send and the Nonblocking Isend function. Now my question: If I'm
<br>
sending something with the blocking Send function it should block the
<br>
process until the other process received the message. I think that works so
<br>
far. But I'm also sending a message to the process itself and my programm
<br>
doesn't block. So does MPI not block if I'm sending a message to the same
<br>
process from which I'm sending the message and it is a blocking routine? The
<br>
same happens if I'm sending with a non-blocking Isend and do a
<br>
request.Wait() on the send request after each send operation. So it doesn't
<br>
block if I'm sending the message to itself. I'm wondering about that because
<br>
the Recv function will occur only after all messages have been sent. It's ok
<br>
that it works, because I need to send a message to the process itself for
<br>
simplicity. I'm only wondering why this works.
<br>
<p>Another question I have is about a memory leak. I got a heavy memory leak if
<br>
I did not a request.Wait() on the send request before the Isend function and
<br>
didn't wait until the last Isend operation completed. But all messages were
<br>
arrived if I do the request.Wait() or not. Now I'm doing a request.Wait()
<br>
before each Isend function and my memory isn't increasing much, but still a
<br>
bit. Do I have to do something else on the blocking Send function? And is
<br>
there a function in MPI to clean up its buffers in a running application
<br>
without using the Finalize function.
<br>
<p>Thank you for your help so far.
<br>
<p>Greets,
<br>
Simon
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8584/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Previous message:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Reply:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Reply:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
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
