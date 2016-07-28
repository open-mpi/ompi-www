<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 16:43:33 2007" -->
<!-- isoreceived="20070927204333" -->
<!-- sent="Thu, 27 Sep 2007 16:43:14 -0400" -->
<!-- isosent="20070927204314" -->
<!-- name="Daniel Rozenbaum" -->
<!-- email="drozenbaum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv" -->
<!-- id="46FC15E2.1050800_at_yahoo.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46F19444.8080305_at_yahoo.com" -->
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
<strong>From:</strong> Daniel Rozenbaum (<em>drozenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 16:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4080.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4078.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>In reply to:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4096.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4096.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<tt>Here's some more info on the problem I've been struggling with; my
apologies for the lengthy posts, but I'm a little desperate here :-)<br>
<br>
I was able to reduce the size of the experiment that reproduces the
problem, both in terms of input data size and the number of slots in
the cluster. The cluster now consists of 6 slots (5 clients), with two
of the clients running on the same node as the server and three others
on another node. This allowed me to follow <a
 href="http://www.open-mpi.org/community/lists/users/2007/09/4062.php">Brian's
advice</a> and run the server and all the clients under gdb and make
sure none of the processes terminates (normally or abnormally) when the
server reports the "readv failed" errors; this is indeed the case.<br>
<br>
I then followed <a
 href="http://www.open-mpi.org/community/lists/users/2007/09/4039.php">Jeff's
advice</a> and added a debug loop just prior to the server calling
MPI_Waitany(), identifying the entries in the requests array which are
not
MPI_REQUEST_NULL, and then tracing back these
requests. What I found was the following:<br>
<br>
At some point during the run, the server calls MPI_Waitany() on an
array of requests consisting of 96 elements, and gets stuck in it
forever; the only thing that happens at some point thereafter is that
the server reports a couple of "readv failed" errors:<br>
</tt><tt><br>
[host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
mca_btl_tcp_frag_recv: readv failed with errno=110<br>
[host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
mca_btl_tcp_frag_recv: readv failed with errno=110<br>
</tt><br>
<tt>According to my debug prints, just before that last call to
MPI_Waitany() the array requests[] contains 38 entries which are not
MPI_REQUEST_NULL. Half of these entries correspond to calls to Isend(),
half to Irecv(). Specifically, for example, entries
4,14,24,34,44,54,64,74,84,94 are used for Isend()'s from server to
client #3 (of 5), and entries 5,15,...,95 are used for Irecv() for the
same client.<br>
<br>
I traced back what's going on, for instance, with requests[4]. As I
mentioned, it corresponds to a call to MPI_Isend() initiated by the
server to client #3 (of 5). By the time the server gets stuck in
Waitany(), this client has already correctly processed the first
Isend() from master in requests[4], returned its response in
requests[5], and the server received this response properly. After
receiving this response, the server Isend()'s the next task to this
client in requests[4], and this is correctly reflected in "requests[4]
!= MPI_REQUESTS_NULL" just before the last call to Waitany(), but for
some reason this send doesn't seem to go any further.<br>
<br>
Looking at all other requests[] corresponding to Isend()'s initiated by
the server to the same client (14,24,...,94), they're all also not
MPI_REQUEST_NULL, and are not going any further either.<br>
</tt><tt><br>
One thing that might be important is that the messages the server is
sending to the clients in my experiment are quite large, ranging from
hundreds of Kbytes to several Mbytes, the largest being around 9
Mbytes. The largest messages take place at the beginning of the run and
are processed correctly though.<br>
<br>
Also, I ran the same experiment on another cluster that uses slightly
different
hardware and network infrastructure, and could not reproduce the
problem.<br>
<br>
Hope at least some of the above makes some sense. Any additional advice
would be greatly appreciated!<br>
Many thanks,<br>
Daniel<br>
<br>
<br>
</tt>Daniel Rozenbaum wrote:
<blockquote cite="mid:46F19444.8080305@yahoo.com" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
  <tt>I'm now running the same experiment under valgrind. It's probably
going to run for a few days, but interestingly what I'm seeing now is
that while running under valgrind's memcheck, the app has been
reporting much more of these "recv failed" errors, and not only on the
server node:<br>
  <br>
[host1][0,1,0]<br>
[host4][0,1,13]<br>
[host5][0,1,18]<br>
[host8][0,1,30]<br>
[host10][0,1,36]<br>
[host12][0,1,46]<br>
  <br>
If in the original run I got 3 such messages, in the valgrind'ed run I
got about 45 so far, and the app still has about 75% of the work left.<br>
  <br>
I'm checking while all this is happening, and all the client processes
are still running, none exited early.<br>
  <br>
I've been analyzing the debug output in my original experiment, and it
does look like the server never receives any new messages from two of
the clients after the "recv failed" messages appear. If my analysis is
correct, these two clients ran on the same host. It might be the case
then that the messages with the next tasks to execute that the server
attempted to send to these two clients never reached them, or were
never sent. Interesting though that there were two additional clients
on the same host, and those seem to have kept working all along, until
the app got stuck.<br>
  <br>
Once this valgrind experiment is over, I'll proceed to your other
suggestion about the debug loop on the server side checking for any of
the requests the app is waiting for being MPI_REQUEST_NULL.<br>
  <br>
Many thanks,<br>
Daniel<br>
  <br>
  </tt><br>
Jeff Squyres wrote:
  <blockquote cite="mid:231BAB35-0ACD-42DB-9C39-1731537C3064@cisco.com"
 type="cite">
    <pre wrap="">On Sep 17, 2007, at 11:26 AM, Daniel Rozenbaum wrote:

  </pre>
    <blockquote type="cite">
      <pre wrap="">What seems to be happening is this: the code of the server is  
written in
such a manner that the server knows how many "responses" it's supposed
to receive from all the clients, so when all the calculation tasks  
have
been distributed, the server enters a loop inside which it calls
MPI_Waitany on an array of handles until it receives all the  
results it
expects. However, from my debug prints it looks like all the clients
think they've sent all the results they could, and they're now all
sitting in MPI_Probe, waiting for the server to send out the next
instruction (which is supposed to contain a message indicating the end
of the run). So, the server is stuck in MPI_Waitany() while all the
clients are stuck in MPI_Probe().
    </pre>
    </blockquote>
    <pre wrap=""><!---->
On the server side, try putting in a debug loop and see if any of the  
requests that your app is waiting for are not MPI_REQUEST_NULL (it's  
not a value of 0 -- you'll need to compare against  
MPI_REQUEST_NULL).  If there are any, see if you can trace backwards  
to see what request it is.

  </pre>
    <blockquote type="cite">
      <pre wrap="">I was wondering if you could comment on the "readv failed" messages  
I'm
seeing in the server's stderr:

[host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
mca_btl_tcp_frag_recv: readv failed with errno=110

I'm seeing a few of these along the server's run, with errno=110
("Connection timed out" according to the "perl -e 'die$!=errno'"  
method
I found in OpenMPI FAQs), and I've also seen errno=113 ("No route to
host"). Could this mean there's an occasional infrastructure  
problem? It
would be strange, as it would then seem that this particular run  
somehow
triggers it?.. Could these messages also mean that some messages got
lost due to these errors, and that's why the server thinks it still  
has
some results to receive while the clients think they've sent  
everything out?
    </pre>
    </blockquote>
    <pre wrap=""><!---->
That is all possible.  Sorry I missed that message in your original  
message -- it's basically a message saying that MPI_COMM_WORLD rank 0  
got a timeout from one of the peers that it shouldn't have.

You're sure that none of your processes are exiting early, right?   
You said they were all waiting in MPI_Probe, but I just wanted to  
double check that they're all still running.

Unfortunately, our error message is not very clear about which host  
it lost the connection with -- after you see that message, do you see  
incoming communications from all the slaves, or only some of them?

  </pre>
  </blockquote>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4080.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4078.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>In reply to:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4096.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4096.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
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
