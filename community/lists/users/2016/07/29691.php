<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 05:24:45 2016" -->
<!-- isoreceived="20160719092445" -->
<!-- sent="Tue, 19 Jul 2016 11:24:43 +0200" -->
<!-- isosent="20160719092443" -->
<!-- name="M. D." -->
<!-- email="matus.dobrotka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="CAJDp2QoROReU4bucU5nCUUKdP3DvyXzvs=Y4UWGGfphZ=Jrknw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dc30b37f-ad64-54aa-7493-54b2b4ea898e_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server<br>
<strong>From:</strong> M. D. (<em>matus.dobrotka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 05:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>In reply to:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29693.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29693.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I understand it, but I think, this is exactly that situation you are
<br>
talking about. In my opinion, the test is doing exactly what you said -
<br>
when a new player is willing to join, other players must invoke
<br>
MPI_Comm_accept().
<br>
All *other* players must invoke MPI_Comm_accept(). Only the last client (in
<br>
this case last player which wants to join) does not
<br>
invoke MPI_Comm_accept(), because this client invokes only
<br>
MPI_Comm_connect(). He is connecting to communicator, in which all other
<br>
players are already involved and therefore this last client doesn't have to
<br>
invoke MPI_Comm_accept().
<br>
<p>Am I still missing something in this my reflection?
<br>
<p>Matus
<br>
<p>2016-07-19 10:55 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; here is what the client is doing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;CLIENT: after merging, new comm: size=%d rank=%d\n&quot;, size,
</span><br>
<span class="quotelev1">&gt; rank) ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for (i = rank ; i &lt; num_clients ; i++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       /* client performs a collective accept */
</span><br>
<span class="quotelev1">&gt;       CHK(MPI_Comm_accept(server_port_name, MPI_INFO_NULL, 0, intracomm,
</span><br>
<span class="quotelev1">&gt; &amp;intercomm)) ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       printf(&quot;CLIENT: connected to server on port\n&quot;) ;
</span><br>
<span class="quotelev1">&gt;       [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) has rank 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* and 3) has rank 2) */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so unless you run 2) with num_clients=2, MPI_Comm_accept() is never
</span><br>
<span class="quotelev1">&gt; called, hence my analysis of the crash/hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand what you are trying to achieve, keep in mind
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept() is a collective call, so when a new player
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is willing to join, other players must invoke MPI_Comm_accept().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it is up to you to make sure that happens
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/19/2016 5:48 PM, M. D. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-07-19 10:06 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept must be called by all the tasks of the local communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's how I understand it. In the source code of the test, all the
</span><br>
<span class="quotelev1">&gt; tasks call  MPI_Comm_accept - server and also relevant clients.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so if you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) mpirun -np 1 ./singleton_client_server 2 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then 3) starts after 2) has exited, so on 1), intracomm is made of 1) and
</span><br>
<span class="quotelev2">&gt;&gt; an exited task (2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This is not true in my opinion -  because of above mentioned fact that
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept is called by all the tasks of the local communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; strictly speaking, there is a race condition, if 2) has exited, then
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept will crash when 1) informs 2) that 3) has joined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if 2) has not yet exited, then the test will hang because 2) does not
</span><br>
<span class="quotelev2">&gt;&gt; invoke MPI_Comm_accept
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Task 2) does not exit, because of blocking call of MPI_Comm_accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there are different ways of seeing things :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) this is an incorrect usage of the test, the number of clients should
</span><br>
<span class="quotelev2">&gt;&gt; be the same everywhere
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) task 2) should not exit (because it did not call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_disconnect()) and the test should hang when
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; starting task 3) because task 2) does not call MPI_Comm_accept()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ad 1) I am sorry, but maybe I do not understand what you think - In my
</span><br>
<span class="quotelev1">&gt; previous post I wrote that the number of clients is the same in every
</span><br>
<span class="quotelev1">&gt; mpirun instance.
</span><br>
<span class="quotelev1">&gt; ad 2) it is the same as above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i do not know how you want to spawn your tasks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if 2) and 3) do not need to communicate with each other (they only
</span><br>
<span class="quotelev2">&gt;&gt; communicate with 1)), then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can simply MPI_Comm_accept(MPI_COMM_WORLD) in 1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if 2 and 3) need to communicate with each other, it would be much easier
</span><br>
<span class="quotelev2">&gt;&gt; to MPI_Comm_spawn or MPI_Comm_spawn_multiple only once in 1),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so there is only one inter communicator with all the tasks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; My aim is that all the tasks need to communicate with each other. I am
</span><br>
<span class="quotelev1">&gt; implementing a distributed application - game with more players
</span><br>
<span class="quotelev1">&gt; communicating with each other via MPI. It should work as follows - First
</span><br>
<span class="quotelev1">&gt; player creates a game and waits for other players to connect to this game.
</span><br>
<span class="quotelev1">&gt; On different computers (in the same network) the other players can join
</span><br>
<span class="quotelev1">&gt; this game. When they are connected, they should be able to play this game
</span><br>
<span class="quotelev1">&gt; together.
</span><br>
<span class="quotelev1">&gt; I hope, it is clear what my idea is. If it is not, just ask me, please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current test program is growing incrementally the intercomm, which
</span><br>
<span class="quotelev2">&gt;&gt; does require extra steps for synchronization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/19/2016 4:37 PM, M. D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; thank you for your interest in this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I normally run the test as follows:
</span><br>
<span class="quotelev2">&gt;&gt; Firstly, I run &quot;server&quot; (second parameter is 1):
</span><br>
<span class="quotelev2">&gt;&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 1*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Secondly, I run corresponding number of &quot;clients&quot; via following command:
</span><br>
<span class="quotelev2">&gt;&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 0*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, for example with 3 clients I do:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./singleton_client_server 3 1
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It means you are right - there should be the same number of clients in
</span><br>
<span class="quotelev2">&gt;&gt; each mpirun instance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test does not involve MPI_Comm_disconnect(), but the problem in the
</span><br>
<span class="quotelev2">&gt;&gt; test is in the earlier position, because some of clients (in the most cases
</span><br>
<span class="quotelev2">&gt;&gt; actually the last client) cannot sometimes connect to the server and
</span><br>
<span class="quotelev2">&gt;&gt; therefore all clients with server are hanging (waiting for the connections
</span><br>
<span class="quotelev2">&gt;&gt; with the last client(s) ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the bahaviour of accept/connect method is a bit confusing for me.
</span><br>
<span class="quotelev2">&gt;&gt; If I understand you, according to your post - the problem is not in the
</span><br>
<span class="quotelev2">&gt;&gt; timeout value, isn't it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-07-19 6:28 GMT+02:00 Gilles Gouaillardet &lt; &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do you run the test ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should have the same number of clients in each mpirun instance, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following simple shell starts the test as i think it is supposed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note the test itself is arguable since MPI_Comm_disconnect() is never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invoked
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and you will observe some related dpm_base_disconnect_init errors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clients=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 2&gt;&amp;1 | tee /tmp/server.$clients&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for i in $(seq $clients); do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sleep 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 2&gt;&amp;1 | tee /tmp/client.$clients.$i&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this test fails with master.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept() fails with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a timeout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but this is not the timeout that is triggered ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the eviction_cbfunc timeout function is invoked, and it has been set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when opal_hotel_init() was invoked in orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default timeout is 2 seconds, but in this case (user invokes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_accept), i guess the timeout should be infinite or 60 seconds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (hard coded value described above)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sadly, if i set a higher timeout value (mpirun --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does not return when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the client invokes MPI_Comm_connect()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you please have a look at this ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/15/2016 9:20 PM, M. D. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a problem with basic client - server application. I tried to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C program from this website
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw this program mentioned in many discussions in your website, so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected that it should work properly, but after more testing I found out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that there is probably an error somewhere in connect/accept method. I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; read many discussions and threads on your website, but I have not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar problem that I am facing. It seems that nobody had similar problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like me. When I run this app with one server and more clients (3,4,5,6,...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes the app hangs. It hangs when second or next client wants to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect to the server (it depends, sometimes third client hangs, sometimes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fourth, sometimes second, and so on).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it means that app starts to hang where server waits for accept and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; client waits for connect. And it is not possible to continue, because this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; client cannot connect to the server. It is strange, because I observed this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behaviour only in some cases... Sometimes it works without any problems,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes it does not work. The behaviour is unpredictable and not stable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have installed openmpi 1.10.2 on my Fedora 19. I have the same problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Java alternative of this application. It hangs also sometimes... I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need this app in Java, but firstly it must work properly in C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation. Because of this strange behaviour I assume that there can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be an error maybe inside of openmpi implementation of connect/accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; methods. I tried it also with another version of openmpi - 1.8.1. However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem did not disappear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you help me, what can cause the problem? Maybe I did not get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something about openmpi (or connect/server) and the problem is with me... I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will appreciate any your help, support, or interest about this topic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matus Dobrotka
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29687.php">http://www.open-mpi.org/community/lists/users/2016/07/29687.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29688.php">http://www.open-mpi.org/community/lists/users/2016/07/29688.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29689.php">http://www.open-mpi.org/community/lists/users/2016/07/29689.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29690.php">http://www.open-mpi.org/community/lists/users/2016/07/29690.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29691/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>In reply to:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29693.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29693.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
