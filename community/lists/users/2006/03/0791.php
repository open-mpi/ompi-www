<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  7 12:29:57 2006" -->
<!-- isoreceived="20060307172957" -->
<!-- sent="Tue, 7 Mar 2006 09:32:14 -0800" -->
<!-- isosent="20060307173214" -->
<!-- name="Brignone, Sergio" -->
<!-- email="sbrignone_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and Disconnect" -->
<!-- id="9F338D4AF3BC914798EA790B4A342F9E015C26DC_at_nexs0015.nexant.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Spawn and Disconnect" -->
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
<strong>Date:</strong> 2006-03-07 12:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0792.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0790.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0747.php">Brignone, Sergio: "[OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0792.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="0792.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Edgar, Ralph and Jean.
<br>
<p>It seems to me that the problem I am having is related to the operating
<br>
system or MPI configuration or compiler or all of them (I am using
<br>
Solaris).
<br>
<p>For example, the F90 as well as the C++ interfaces could not be compiled
<br>
(I had to configure MPI without them). 
<br>
<p>I converted Jean's example to F77 and tested. It didn't work (off
<br>
course, you can always claim that I didn't convert them right ...); in
<br>
fact it seems I got errors in the Fortran to C conversion of strings
<br>
(the program fils1 exists but notice the error: it concatenates all
<br>
strings. This looks to me that the F to C conversion is not correct).
<br>
So I am assuming that the problems are related to my particular
<br>
environment. 
<br>
<p>I will debug and see what the problem is.
<br>
<p>Thanks for your help.
<br>
<p>Sergio Brignone
<br>
<p><p><p>bash-2.03$ perem
<br>
&nbsp;PR : rank =  0  size =  1
<br>
&nbsp;PR : I am running on PE 0
<br>
&nbsp;PR : I am before the spawning of fils1 on PE 1 
<br>
------------------------------------------------------------------------
<br>
<pre>
--
Could not execute the executable &quot;./fils1 ./fils2 ./fils3 ./fils4 &quot;: No
such file or directory
This could mean that your PATH or executable name is wrong, or that you
do not
have the necessary permissions.  Please ensure that the executable is
able to be
found and executed.
------------------------------------------------------------------------
--
-----Original Message-----
From: Jean Latour [mailto:latour_at_[hidden]] 
Sent: Friday, March 03, 2006 1:50 AM
To: rhc_at_[hidden]; Open MPI Users
Subject: Re: [OMPI users] Spawn and Disconnect
Just to add an example that may help  to this &quot;disconnect&quot; discussion :
Attached is the code of a test that does the following (and it works 
perfectly with OpenMPI 1.0.1)
 1) master spawns slave1
 2) master spawns slave2
 3) exechange messages between master and slaves over intercommunicator
 4) slave1 disconnects from master and finalize
 5) slave2 disconnects from master and finalize
(the processors used by slave 1 and slave 2 can now be re-used by new 
spawned processes)
 6) master spawns slave3, and then slave4
 7) slave3 and slave4 have NO direct communicator, but they can create 
one through the Open-Port
mechanism and the MPI_Connect / MPI_Accept functions.
The port number is relayed through the master.
 8) slave3 and slave4 create this direct communicator and do some 
pingpong over it
 9) slave3 and slave4 disconnect from each other on this direct
communicator
10) slave3 and slave4 disconnect from master an finalize
11) master finalize
Hope it helps
Best regards,
Jean Latour
Ralph Castain wrote:
&gt; We expect to have much better support for the entire comm_spawn 
&gt; process in the next incarnation of the RTE. I don't expect that to be 
&gt; included in a release, however, until 1.1 (Jeff may be able to give 
&gt; you an estimate for when that will happen).
&gt;
&gt; Jeff et al may be able to give you access to an early non-release 
&gt; version sooner, if better comm_spawn support is a critical issue and 
&gt; you don't mind being patient with the inevitable bugs in such
versions.
&gt;
&gt; Ralph
&gt;
&gt;
&gt; Edgar Gabriel wrote:
&gt;
&gt;&gt;Open MPI currently does not fully support a proper disconnection of 
&gt;&gt;parent and child processes. Thus, if a child dies/aborts, the parents 
&gt;&gt;will abort as well, despite of calling MPI_Comm_disconnect. (The new
RTE 
&gt;&gt;will have better support for these operations, Ralph/Jeff can probably
&gt;&gt;give a better estimate when this will be available.)
&gt;&gt;
&gt;&gt;However, what should not happen is, that if the child calls
MPI_Finalize 
&gt;&gt;(so not a violent death but a proper shutdown), the parent goes down
at 
&gt;&gt;the same time. Let me check that as well...
&gt;&gt;
&gt;&gt;Brignone, Sergio wrote:
&gt;&gt;
&gt;&gt;  
&gt;&gt;
&gt;&gt;&gt;Hi everybody,
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;I am trying to run a master/slave set.
&gt;&gt;&gt;
&gt;&gt;&gt;Because of the nature of the problem I need to start and stop (kill) 
&gt;&gt;&gt;some slaves.
&gt;&gt;&gt;
&gt;&gt;&gt;The problem is that as soon as one of the slave dies, the master dies
also.
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;This is what I am doing:
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MASTER:
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Init(...)
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Comm_spawn(slave1,...,nslave1,...,intercomm1);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Barrier(intercomm1);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Comm_disconnect(&amp;intercomm1);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Comm_spawn(slave2,...,nslave2,...,intercomm2);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Barrier(intercomm2);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Comm_disconnect(&amp;intercomm2);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Finalize();
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;SLAVE:
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Init(...)
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Comm_get_parent(&amp;intercomm);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;(does something)
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Barrier(intercomm);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;MPI_Comm_disconnect(&amp;intercomm);
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; MPI_Finalize();
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;The issue is that as soon as the first set of slaves calls
MPI_Finalize, 
&gt;&gt;&gt;the master dies also (it dies right after
MPI_Comm_disconnect(&amp;intercomm1) )
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;What am I doing wrong?
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;Thanks
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;Sergio
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;---------------------------------------------------------------------
---
&gt;&gt;&gt;
&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;    
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;  
&gt;&gt;
&gt;-----------------------------------------------------------------------
-
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0792.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0790.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0747.php">Brignone, Sergio: "[OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0792.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="0792.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
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
