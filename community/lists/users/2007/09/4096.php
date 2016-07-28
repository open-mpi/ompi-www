<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 17:12:57 2007" -->
<!-- isoreceived="20070928211257" -->
<!-- sent="Fri, 28 Sep 2007 17:12:31 -0400" -->
<!-- isosent="20070928211231" -->
<!-- name="Daniel Rozenbaum" -->
<!-- email="drozenbaum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv" -->
<!-- id="46FD6E3F.4030507_at_yahoo.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46FC15E2.1050800_at_yahoo.com" -->
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
<strong>Date:</strong> 2007-09-28 17:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4097.php">Mostyn Lewis: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Previous message:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>In reply to:</strong> <a href="4079.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<tt>Good Open MPI gurus,<br>
<br>
I've further reduced the size of the experiment that reproduces the
problem. My array of requests now has just 10 entries, and by the time
the server gets stuck in MPI_Waitany(), and three of the clients are
stuck in MPI_Recv(), the array has three unprocessed Isend()'s and
three unprocessed Irecv()'s.<br>
<br>
I've upgraded to Open MPI 1.2.4, but this made no difference.<br>
<br>
Are there any internal logging or debugging facilities in Open MPI that
would allow me to further track the calls that eventually result in the
error in </tt><tt>mca_btl_tcp_frag_recv() ?<br>
<br>
Thanks,<br>
Daniel<br>
</tt><tt><br>
</tt><br>
Daniel Rozenbaum wrote:
<blockquote cite="mid:46FC15E2.1050800@yahoo.com" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <tt>Here's some more info on the problem I've been struggling with;
my
apologies for the lengthy posts, but I'm a little desperate here :-)<br>
  <br>
I was able to reduce the size of the experiment that reproduces the
problem, both in terms of input data size and the number of slots in
the cluster. The cluster now consists of 6 slots (5 clients), with two
of the clients running on the same node as the server and three others
on another node. This allowed me to follow <a moz-do-not-send="true"
 href="http://www.open-mpi.org/community/lists/users/2007/09/4062.php">Brian's
advice</a> and run the server and all the clients under gdb and make
sure none of the processes terminates (normally or abnormally) when the
server reports the "readv failed" errors; this is indeed the case.<br>
  <br>
I then followed <a moz-do-not-send="true"
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
  </tt></blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4097.php">Mostyn Lewis: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Previous message:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>In reply to:</strong> <a href="4079.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
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
