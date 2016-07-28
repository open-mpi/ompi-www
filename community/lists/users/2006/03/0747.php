<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 22:18:26 2006" -->
<!-- isoreceived="20060302031826" -->
<!-- sent="Wed, 1 Mar 2006 19:20:36 -0800" -->
<!-- isosent="20060302032036" -->
<!-- name="Brignone, Sergio" -->
<!-- email="sbrignone_at_[hidden]" -->
<!-- subject="[OMPI users] Spawn and Disconnect" -->
<!-- id="9F338D4AF3BC914798EA790B4A342F9E015896EE_at_nexs0015.nexant.com" -->
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
<strong>From:</strong> Brignone, Sergio (<em>sbrignone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 22:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Maybe reply:</strong> <a href="0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>&nbsp;
<br>
<p>I am trying to run a master/slave set. 
<br>
<p>Because of the nature of the problem I need to start and stop (kill)
<br>
some slaves. 
<br>
<p>The problem is that as soon as one of the slave dies, the master dies
<br>
also.
<br>
<p>&nbsp;
<br>
<p>This is what I am doing:
<br>
<p>&nbsp;
<br>
<p>MASTER:
<br>
<p>&nbsp;
<br>
<p>MPI_Init(...)
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_spawn(slave1,...,nslave1,...,intercomm1);
<br>
<p>&nbsp;
<br>
<p>MPI_Barrier(intercomm1);
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_disconnect(&amp;intercomm1);
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_spawn(slave2,...,nslave2,...,intercomm2);
<br>
<p>&nbsp;
<br>
<p>MPI_Barrier(intercomm2);
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_disconnect(&amp;intercomm2);
<br>
<p>&nbsp;
<br>
<p>MPI_Finalize();
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>SLAVE:
<br>
<p>&nbsp;
<br>
<p>MPI_Init(...)
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_get_parent(&amp;intercomm);
<br>
<p>&nbsp;
<br>
<p>(does something)
<br>
<p>&nbsp;
<br>
<p>MPI_Barrier(intercomm);
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_disconnect(&amp;intercomm);
<br>
<p>&nbsp;
<br>
<p>&nbsp;MPI_Finalize();
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>The issue is that as soon as the first set of slaves calls MPI_Finalize,
<br>
the master dies also (it dies right after
<br>
MPI_Comm_disconnect(&amp;intercomm1) )
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>What am I doing wrong?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>&nbsp;
<br>
<p>Sergio
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Maybe reply:</strong> <a href="0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
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
