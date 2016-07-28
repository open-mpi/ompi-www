<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 11:00:49 2010" -->
<!-- isoreceived="20101213160049" -->
<!-- sent="Mon, 13 Dec 2010 11:00:45 -0500" -->
<!-- isosent="20101213160045" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="20101213110045.32228_at_web005.roc2.bluetie.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 11:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15105.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15103.php">Kechagias Apostolos: "[OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15105.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15105.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15107.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't understand 1 thing though and would appreciate your comments.
<br>
&#194;&#160;
<br>
In various interfaces, like network sockets, or threads waiting for data from somewhere, there are various solutions based on _not_ checking the state of the socket or some sort of &#194;&#160;queue continuously, but sort of getting _interrupted_ when there is data around, or like condition variables for threads.
<br>
I am not very clear on these points, but it seems that in these contexts, continuous polling is avoided and so actual CPU usage is usually not close to 100%.
<br>
&#194;&#160;
<br>
Why can't something similar be implemented with broadcast for e.g.?
<br>
&#194;&#160;
<br>
-----Original Message-----
<br>
From: &quot;Jeff Squyres&quot; [jsquyres_at_[hidden]]
<br>
Date: 13/12/2010 03:55 PM
<br>
To: &quot;Open MPI Users&quot; 
<br>
Subject: Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu
<br>
<p>I think there *was* a decision and it effectively changed how sched_yield() effectively operates, and that it may not do what we expect any more.
<br>
<p>See this thread (the discussion of Linux/sched_yield() comes in the later messages):
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/07/13729.php">http://www.open-mpi.org/community/lists/users/2010/07/13729.php</a>
<br>
<p>I believe there's similar threads in the MPICH mailing list archives; that's why Dave posted on the OMPI list about it.
<br>
<p>We briefly discussed replacing OMPI's sched_yield() with a usleep(1), but it was shot down.
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15105.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15103.php">Kechagias Apostolos: "[OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15105.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15105.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15107.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
