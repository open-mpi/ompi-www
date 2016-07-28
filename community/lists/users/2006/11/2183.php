<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 17 12:53:01 2006" -->
<!-- isoreceived="20061117175301" -->
<!-- sent="Fri, 17 Nov 2006 10:51:52 -0700" -->
<!-- isosent="20061117175152" -->
<!-- name="Victor Prosolin" -->
<!-- email="victor.prosolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime problem" -->
<!-- id="455DF6B8.1040301_at_gmail.com" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="mailman.21.1163782808.20585.users_at_open-mpi.org" -->
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
<strong>From:</strong> Victor Prosolin (<em>victor.prosolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-17 12:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<li><strong>Previous message:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From what you sent, it appears that Open MPI thinks your processes called
</span><br>
<span class="quotelev1">&gt; MPI_Abort (as opposed to segfaulting or some other failure mode). The system
</span><br>
<span class="quotelev1">&gt; appears to be operating exactly as it should - it just thinks your program
</span><br>
<span class="quotelev1">&gt; aborted the job - i.e., that one or more processes actually called MPI_Abort
</span><br>
<span class="quotelev1">&gt; for some reason.
</span><br>
<p>I do not see any other processes to produce an error or call MPI_Abort.
<br>
I even don't know which one of the 4 processes is the cause.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried running your code without valgrind? I'm wondering if the
</span><br>
<span class="quotelev1">&gt; valgrind interaction may be part of the problem.
</span><br>
<p>Yes, when I run it without valgrind I get the problem. With valgrind
<br>
there is no problem. I had hoped valgrind would help me identify the
<br>
problem.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a code path in your program that would lead to MPI_Abort? I'm
</span><br>
<span class="quotelev1">&gt; wondering if you have some logic that might abort if it encounters what it
</span><br>
<span class="quotelev1">&gt; believes is a problem. If so, you might put some output in that path to see
</span><br>
<span class="quotelev1">&gt; if you are traversing it. Then we would have some idea as to why the code
</span><br>
<span class="quotelev1">&gt; thinks it *should* abort.
</span><br>
<p>I do not call MPI_Abort explicitly anywhere in my code. And so far I
<br>
can't see any logic as to why it would be called anywhere in the code.
<br>
My code is actually quite simple MPI-wise - one process reads a config
<br>
file, then I call MPI_Bcast to deliver the configuration parameters to
<br>
other processes. Then I set subdomains and after that only use MPI_Send
<br>
and MPI_Recv for convergence checks and ghost shells exchange. But for
<br>
example with grid size 40x40x40 it doesn't even reach the computational
<br>
part.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2184.php">Lydia Heck: "[OMPI users] btl mx : file not found"</a>
<li><strong>Previous message:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
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
