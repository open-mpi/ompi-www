<?
$subject_val = "[OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 20:14:49 2014" -->
<!-- isoreceived="20141111011449" -->
<!-- sent="Mon, 10 Nov 2014 17:14:47 -0800" -->
<!-- isosent="20141111011447" -->
<!-- name="David A. Schneider" -->
<!-- email="davidsch_at_[hidden]" -->
<!-- subject="[OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?" -->
<!-- id="54616307.5020703_at_slac.stanford.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?<br>
<strong>From:</strong> David A. Schneider (<em>davidsch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 20:14:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25739.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25737.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<li><strong>Reply:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am implementing a hub/servers MPI application. Each of the servers can 
<br>
get tied up waiting for some data, then they do an MPI Send to the hub. 
<br>
It is relatively simple for me to have the hub waiting around doing a 
<br>
Recv from ANY_SOURCE. The hub can get busy working with the data. What 
<br>
I'm worried about is skipping data from one of the servers. How likely 
<br>
is this scenario:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server 1 and 2 do Send's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hub does Recv and ends up getting data from server 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while hub busy, server 1 gets more data, does another Send
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when hub does its next Recv, it gets the more recent server 1 data 
<br>
rather than the older server2
<br>
<p>I don't need a guarantee that the order the Send's occur is the order 
<br>
the ANY_SOURCE processes them (though it would be nice), but if I new in 
<br>
practice it will be close to the order they are sent, I may go with the 
<br>
above. However if it is likely I could skip over data from one of the 
<br>
servers, I need to implement something more complicated. Which I think 
<br>
would be this pattern:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;servers each do Send's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hub does an Irecv for each server
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hub does a Waitany on all server requests
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;upon completion of one server request, hub does a Test on all the 
<br>
others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of all the Irecv's that have completed, hub selects the oldest 
<br>
server data (there is timing tag in the server data)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hub communicates with the server it just chose, has it start a new 
<br>
Send, hub a new Irecv
<br>
<p>This requires more complex code, and my first effort crashed inside the 
<br>
Waitany call in a way that I'm finding difficult to debug. I am using 
<br>
the Python bindings mpi4py - so I have less control over buffers being used.
<br>
<p>I just posted this on stackoverflow also, but maybe this is a better 
<br>
place to post?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25739.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25737.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<li><strong>Reply:</strong> <a href="25755.php">George Bosilca: "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
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
