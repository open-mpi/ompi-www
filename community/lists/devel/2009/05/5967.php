<?
$subject_val = "[OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 10:27:13 2009" -->
<!-- isoreceived="20090506142713" -->
<!-- sent="Wed, 6 May 2009 08:27:03 -0600" -->
<!-- isosent="20090506142703" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Revise paffinity method?" -->
<!-- id="1347DA84-82CC-48D3-BE42-DABC12A34244_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Revise paffinity method?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 10:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have used several different methods for binding processes over the  
<br>
years. Our current method is based on having the orted pass  
<br>
environmental parameters to the individual processes when it fork/ 
<br>
exec's them, and then having each process bind itself to the specified  
<br>
processor(s) during MPI_Init via a call to the OPAL paffinity framework.
<br>
<p>It was noted earlier this week on the user mailing list that not  
<br>
binding the process until it calls MPI_Init has some disadvantages - I  
<br>
have added some that we have previously discussed:
<br>
<p>1. the process is free to move around -until- it calls MPI_Init, thus  
<br>
possibly conflicting with other processes on the node that have  
<br>
already called MPI_Init and been bound.
<br>
<p>2. memory allocated by the process prior to calling MPI_Init may not  
<br>
be local to the eventual processor the process is bound to, thus  
<br>
hurting performance
<br>
<p>3. while we support non-MPI applications, our current method will not  
<br>
bind them. This was actually one of the problems that motivated the  
<br>
user list discussion as the user was testing with &quot;hostname&quot; and  
<br>
failing to see it bound. While we can argue that we are Open -MPI-,  
<br>
there is a little issue here with &quot;user surprise&quot;.
<br>
<p>4. from the user mailing list, it was clear that some users at least  
<br>
expected the process to be bound from start of execution. Eugene did  
<br>
note on one such discussion that he has seen similar behavior (i.e.,  
<br>
not bound until MPI_Init) on other MPI implementations, but I think  
<br>
fairly questioned whether or not this was the right way to go.
<br>
<p>I am sure others can think of more issues - this isn't meant to be an  
<br>
exhaustive list.
<br>
<p>I should note that we never see these problems in our tests because  
<br>
they always call MPI_Init right away at the beginning of the program.  
<br>
I admit that many of our local applications do the same - however,  
<br>
many of them also do setup memory regions prior to calling MPI_Init,  
<br>
which does reflect Eugene's use-case.
<br>
<p>Any thoughts on this? Should we change it?
<br>
<p>If so, who wants to be involved in the re-design? I'm pretty sure it  
<br>
would require some modification of the paffinity framework, plus some  
<br>
minor mods to the odls framework and (since you cannot bind a process  
<br>
other than yourself) addition of a new small &quot;proxy&quot; script that would  
<br>
bind-then-exec each process started by the orted (Eugene posted a  
<br>
candidate on the user list, though we will have to deal with some  
<br>
system-specific issues in it).
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5966.php">Josh Hursey: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
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
