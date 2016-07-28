<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 11:55:48 2006" -->
<!-- isoreceived="20061017155548" -->
<!-- sent="Tue, 17 Oct 2006 11:55:28 -0400" -->
<!-- isosent="20061017155528" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA0353986A_at_WS-BCO-MSE7.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F8EE677D406514ABE53EF9C0934A666061BA2AD_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-17 11:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1998.php">Brian Budge: "[OMPI users] Degraded mode with oversubscription not giving good performance"</a>
<li><strong>Previous message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>In reply to:</strong> <a href="1993.php">Laurent.POREZ_at_[hidden]: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My problem is that when I run on the build with --with-threads=posix,
<br>
--enable-mpi-threads, and --enable-progress-threads it doesn't get past
<br>
the init when I use more than one machine.  It either hangs on MPI_Init
<br>
or outputs the message &quot;mca_btl_sm_component_init: mkfifo failed with
<br>
errno=17&quot; for each of the non-head nodes.
<br>
<p>My nodes are dual processors, so if I specify my hosts as only 1 node
<br>
and use either 1 or 2 processes, it works fine.  As soon as I try to run
<br>
the program on more than just 1 machine, the problem occurs.
<br>
<p>I'm using OpenMPI 1.1.1.  I'm fairly new to it, so I couldn't answer
<br>
your questions.
<br>
<p>______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Laurent.POREZ_at_[hidden]
<br>
Sent: Tuesday, October 17, 2006 2:30 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support
<br>
<p>Hi, 
<br>
<p>Could you explain what's wrong with thread support ?
<br>
Does it hang, or something else ?
<br>
<p>I'm developping an application using multiple processes with multiple
<br>
threads, and I have to use MPI to make process communicate. Typically, I
<br>
will have to use the following functions :
<br>
- MPI_Comm_spawn_multiple, 
<br>
- MPI_Bsend, MPI_Recv, MPI_Irecv, MPI_Test
<br>
- MPI_Barrier
<br>
- MPI_Allgather
<br>
<p>Can this work with the actual version of Open-MPI (1.1.1) or a later
<br>
one, or even with  an other MPI library (free or commercial) ?
<br>
Do I have to think about giving up MPI ?
<br>
<p>Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1998.php">Brian Budge: "[OMPI users] Degraded mode with oversubscription not giving good performance"</a>
<li><strong>Previous message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>In reply to:</strong> <a href="1993.php">Laurent.POREZ_at_[hidden]: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
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
