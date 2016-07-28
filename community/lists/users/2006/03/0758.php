<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 13:55:08 2006" -->
<!-- isoreceived="20060302185508" -->
<!-- sent="Thu, 02 Mar 2006 11:55:03 -0700" -->
<!-- isosent="20060302185503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and Disconnect" -->
<!-- id="44073F87.6070807_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44072909.2020700_at_cs.uh.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 13:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
We expect to have much better support for the entire comm_spawn process
in the next incarnation of the RTE. I don't expect that to be included
in a release, however, until 1.1 (Jeff may be able to give you an
estimate for when that will happen).<br>
<br>
Jeff et al may be able to give you access to an early non-release
version sooner, if better comm_spawn support is a critical issue and
you don't mind being patient with the inevitable bugs in such versions.<br>
<br>
Ralph<br>
<br>
<br>
Edgar Gabriel wrote:
<blockquote cite="mid44072909.2020700@cs.uh.edu" type="cite">
  <pre wrap="">Open MPI currently does not fully support a proper disconnection of 
parent and child processes. Thus, if a child dies/aborts, the parents 
will abort as well, despite of calling MPI_Comm_disconnect. (The new RTE 
will have better support for these operations, Ralph/Jeff can probably 
give a better estimate when this will be available.)

However, what should not happen is, that if the child calls MPI_Finalize 
(so not a violent death but a proper shutdown), the parent goes down at 
the same time. Let me check that as well...

Brignone, Sergio wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Hi everybody,

 

I am trying to run a master/slave set.

Because of the nature of the problem I need to start and stop (kill) 
some slaves.

The problem is that as soon as one of the slave dies, the master dies also.

 

This is what I am doing:

 

MASTER:

 

MPI_Init(...)

 

MPI_Comm_spawn(slave1,...,nslave1,...,intercomm1);

 

MPI_Barrier(intercomm1);

 

MPI_Comm_disconnect(&amp;intercomm1);

 

MPI_Comm_spawn(slave2,...,nslave2,...,intercomm2);

 

MPI_Barrier(intercomm2);

 

MPI_Comm_disconnect(&amp;intercomm2);

 

MPI_Finalize();

 

 

 

 

 

SLAVE:

 

MPI_Init(...)

 

MPI_Comm_get_parent(&amp;intercomm);

 

(does something)

 

MPI_Barrier(intercomm);

 

MPI_Comm_disconnect(&amp;intercomm);

 

 MPI_Finalize();

 

 

 

The issue is that as soon as the first set of slaves calls MPI_Finalize, 
the master dies also (it dies right after MPI_Comm_disconnect(&amp;intercomm1) )

 

 

What am I doing wrong?

 

Thanks

 

Sergio

 

 


------------------------------------------------------------------------

_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
    </pre>
  </blockquote>
  <pre wrap=""><!---->

_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="0769.php">Jean Latour: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
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
