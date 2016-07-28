<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 13:43:01 2007" -->
<!-- isoreceived="20071003174301" -->
<!-- sent="Wed, 03 Oct 2007 13:41:55 -0400" -->
<!-- isosent="20071003174155" -->
<!-- name="Daniel Rozenbaum" -->
<!-- email="drozenbaum_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck" -->
<!-- id="4703D463.5020203_at_yahoo.com" -->
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
<strong>From:</strong> Daniel Rozenbaum (<em>drozenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 13:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4145.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4143.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Reply:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
</head>
<body bgcolor="#ffffff" text="#000000">
<tt>Hi again,<br>
<br>
I'm trying to debug the problem I <a moz-do-not-send="true"
 href="http://www.open-mpi.org/community/lists/users/2007/09/4096.php">posted
on</a> several times recently; I thought I'd try asking a more focused
question:<br>
<br>
I have the following sequence in the client code:<br>
</tt>
<blockquote><tt>MPI_Status stat;</tt><br>
  <tt>ret = MPI_Probe(0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;stat);</tt><br>
  <tt>assert(ret == MPI_SUCCESS);</tt><br>
  <tt>ret = MPI_Get_elements(&amp;stat, MPI_BYTE, &amp;count);</tt><br>
  <tt>assert(ret == MPI_SUCCESS);</tt><br>
  <tt>char *buffer = malloc(count);</tt><br>
  <tt>assert(buffer != NULL);</tt><br>
  <tt>ret = MPI_Recv((void *)buffer, count, MPI_BYTE, 0, stat.MPI_TAG,
MPI_COMM_WORLD, MPI_STATUS_IGNORE);</tt><br>
  <tt>assert(ret == MPI_SUCCESS);</tt><br>
  <tt>fprintf(stderr, "MPI_Recv done\n");</tt><br>
  <tt>&lt;proceed to taking action on the received buffer, send
response to server&gt;</tt><br>
</blockquote>
<tt>Each MPI_ call in the lines above is surrounded by debug prints
that print out the client's rank, current time, the action about to be
taken with all its parameters' values, and the action's result. After
the first cycle (receive message from server -- process it -- send
response -- wait for next message) works out as
expected, the next cycle get stuck in MPI_Recv. What I get in my debug
prints is more or less the following:<br>
</tt>
<blockquote><tt>MPI_Probe(source= 0, tag= MPI_ANY_TAG, comm=
MPI_COMM_WORKD, status= &lt;address1&gt;)</tt><br>
  <tt>MPI_Probe done, source= 0, tag= 2, error= 0</tt><br>
  <tt>MPI_Get_elements(status= &lt;address1&gt;, dtype= MPI_BYTE,
count= &lt;address2&gt;)</tt><br>
  <tt>MPI_Get_elements done, count= 2731776</tt><br>
  <tt>MPI_Recv(buf= &lt;address3&gt;, count= 2731776, dtype= MPI_BYTE,
src= 0, tag= 2, comm= MPI_COMM_WORLD, stat= MPI_STATUS_IGNORE)</tt><br>
  <tt>&lt;nothing beyond this point. Some time afterwards there're
"readv failed" errors in server's stderr&gt;</tt><br>
</blockquote>
<tt>My question then is this - what would cause MPI_Recv to not return,
after the immediately preceding MPI_Probe and MPI_Get_elements return
properly?<br>
<br>
Thanks,<br>
Daniel<br>
<br>
<br>
</tt>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4145.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4143.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Reply:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
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
