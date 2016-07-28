<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 09:23:21 2016" -->
<!-- isoreceived="20160719132321" -->
<!-- sent="Tue, 19 Jul 2016 22:23:18 +0900" -->
<!-- isosent="20160719132318" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="CAAkFZ5sqeSo_0KYtSSXLVegaVjKFmGY-EV_JgFe+vzrnE9rXsw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJDp2QoROReU4bucU5nCUUKdP3DvyXzvs=Y4UWGGfphZ=Jrknw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 09:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29694.php">Nathaniel Graham: "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my bad for the confusion,
<br>
<p>I misread you and miswrote my reply.
<br>
<p>I will investigate this again.
<br>
<p>strictly speaking, the clients can only start after the server first write
<br>
the port info to a file.
<br>
if you start the client right after the server start, they might use
<br>
incorrect/outdated info and cause all the test hang.
<br>
<p>I will start reproducing the hang
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, July 19, 2016, M. D. &lt;matus.dobrotka_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes I understand it, but I think, this is exactly that situation you are
</span><br>
<span class="quotelev1">&gt; talking about. In my opinion, the test is doing exactly what you said -
</span><br>
<span class="quotelev1">&gt; when a new player is willing to join, other players must invoke MPI_Comm_accept().
</span><br>
<span class="quotelev1">&gt; All *other* players must invoke MPI_Comm_accept(). Only the last client
</span><br>
<span class="quotelev1">&gt; (in this case last player which wants to join) does not
</span><br>
<span class="quotelev1">&gt; invoke MPI_Comm_accept(), because this client invokes only
</span><br>
<span class="quotelev1">&gt; MPI_Comm_connect(). He is connecting to communicator, in which all other
</span><br>
<span class="quotelev1">&gt; players are already involved and therefore this last client doesn't have to
</span><br>
<span class="quotelev1">&gt; invoke MPI_Comm_accept().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I still missing something in this my reflection?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-07-19 10:55 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is what the client is doing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;CLIENT: after merging, new comm: size=%d rank=%d\n&quot;, size,
</span><br>
<span class="quotelev2">&gt;&gt; rank) ;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     for (i = rank ; i &lt; num_clients ; i++)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;       /* client performs a collective accept */
</span><br>
<span class="quotelev2">&gt;&gt;       CHK(MPI_Comm_accept(server_port_name, MPI_INFO_NULL, 0, intracomm,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;intercomm)) ;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;CLIENT: connected to server on port\n&quot;) ;
</span><br>
<span class="quotelev2">&gt;&gt;       [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) has rank 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* and 3) has rank 2) */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so unless you run 2) with num_clients=2, MPI_Comm_accept() is never
</span><br>
<span class="quotelev2">&gt;&gt; called, hence my analysis of the crash/hang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand what you are trying to achieve, keep in mind
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept() is a collective call, so when a new player
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is willing to join, other players must invoke MPI_Comm_accept().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and it is up to you to make sure that happens
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
<span class="quotelev2">&gt;&gt; On 7/19/2016 5:48 PM, M. D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-07-19 10:06 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_accept must be called by all the tasks of the local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that's how I understand it. In the source code of the test, all the
</span><br>
<span class="quotelev2">&gt;&gt; tasks call  MPI_Comm_accept - server and also relevant clients.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) mpirun -np 1 ./singleton_client_server 2 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then 3) starts after 2) has exited, so on 1), intracomm is made of 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and an exited task (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is not true in my opinion -  because of above mentioned fact that
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept is called by all the tasks of the local communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strictly speaking, there is a race condition, if 2) has exited, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_accept will crash when 1) informs 2) that 3) has joined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if 2) has not yet exited, then the test will hang because 2) does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invoke MPI_Comm_accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Task 2) does not exit, because of blocking call of MPI_Comm_accept.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there are different ways of seeing things :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) this is an incorrect usage of the test, the number of clients should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be the same everywhere
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) task 2) should not exit (because it did not call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_disconnect()) and the test should hang when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starting task 3) because task 2) does not call MPI_Comm_accept()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ad 1) I am sorry, but maybe I do not understand what you think - In my
</span><br>
<span class="quotelev2">&gt;&gt; previous post I wrote that the number of clients is the same in every
</span><br>
<span class="quotelev2">&gt;&gt; mpirun instance.
</span><br>
<span class="quotelev2">&gt;&gt; ad 2) it is the same as above
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i do not know how you want to spawn your tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if 2) and 3) do not need to communicate with each other (they only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate with 1)), then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can simply MPI_Comm_accept(MPI_COMM_WORLD) in 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if 2 and 3) need to communicate with each other, it would be much easier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to MPI_Comm_spawn or MPI_Comm_spawn_multiple only once in 1),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so there is only one inter communicator with all the tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My aim is that all the tasks need to communicate with each other. I am
</span><br>
<span class="quotelev2">&gt;&gt; implementing a distributed application - game with more players
</span><br>
<span class="quotelev2">&gt;&gt; communicating with each other via MPI. It should work as follows - First
</span><br>
<span class="quotelev2">&gt;&gt; player creates a game and waits for other players to connect to this game.
</span><br>
<span class="quotelev2">&gt;&gt; On different computers (in the same network) the other players can join
</span><br>
<span class="quotelev2">&gt;&gt; this game. When they are connected, they should be able to play this game
</span><br>
<span class="quotelev2">&gt;&gt; together.
</span><br>
<span class="quotelev2">&gt;&gt; I hope, it is clear what my idea is. If it is not, just ask me, please.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current test program is growing incrementally the intercomm, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does require extra steps for synchronization.
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
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/19/2016 4:37 PM, M. D. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thank you for your interest in this topic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I normally run the test as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Firstly, I run &quot;server&quot; (second parameter is 1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 1*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Secondly, I run corresponding number of &quot;clients&quot; via following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 0*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, for example with 3 clients I do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 ./singleton_client_server 3 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It means you are right - there should be the same number of clients in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each mpirun instance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The test does not involve MPI_Comm_disconnect(), but the problem in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test is in the earlier position, because some of clients (in the most cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually the last client) cannot sometimes connect to the server and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore all clients with server are hanging (waiting for the connections
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the last client(s) ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the bahaviour of accept/connect method is a bit confusing for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I understand you, according to your post - the problem is not in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timeout value, isn't it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-07-19 6:28 GMT+02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;gilles_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do you run the test ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you should have the same number of clients in each mpirun instance, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following simple shell starts the test as i think it is supposed to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note the test itself is arguable since MPI_Comm_disconnect() is never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; invoked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and you will observe some related dpm_base_disconnect_init errors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clients=3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 2&gt;&amp;1 | tee /tmp/server.$clients&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for i in $(seq $clients); do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     sleep 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 2&gt;&amp;1 | tee /tmp/client.$clients.$i&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this test fails with master.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept() fails with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a timeout.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but this is not the timeout that is triggered ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the eviction_cbfunc timeout function is invoked, and it has been set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when opal_hotel_init() was invoked in orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default timeout is 2 seconds, but in this case (user invokes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_accept), i guess the timeout should be infinite or 60 seconds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (hard coded value described above)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sadly, if i set a higher timeout value (mpirun --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does not return when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the client invokes MPI_Comm_connect()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you please have a look at this ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/15/2016 9:20 PM, M. D. wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a problem with basic client - server application. I tried to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C program from this website
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I saw this program mentioned in many discussions in your website, so I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected that it should work properly, but after more testing I found out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that there is probably an error somewhere in connect/accept method. I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; read many discussions and threads on your website, but I have not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similar problem that I am facing. It seems that nobody had similar problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like me. When I run this app with one server and more clients (3,4,5,6,...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes the app hangs. It hangs when second or next client wants to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connect to the server (it depends, sometimes third client hangs, sometimes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fourth, sometimes second, and so on).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So it means that app starts to hang where server waits for accept and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; client waits for connect. And it is not possible to continue, because this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; client cannot connect to the server. It is strange, because I observed this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behaviour only in some cases... Sometimes it works without any problems,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes it does not work. The behaviour is unpredictable and not stable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have installed openmpi 1.10.2 on my Fedora 19. I have the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem with Java alternative of this application. It hangs also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes... I need this app in Java, but firstly it must work properly in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C implementation. Because of this strange behaviour I assume that there can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be an error maybe inside of openmpi implementation of connect/accept
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; methods. I tried it also with another version of openmpi - 1.8.1. However,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem did not disappear.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you help me, what can cause the problem? Maybe I did not get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something about openmpi (or connect/server) and the problem is with me... I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will appreciate any your help, support, or interest about this topic.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matus Dobrotka
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29687.php">http://www.open-mpi.org/community/lists/users/2016/07/29687.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29688.php">http://www.open-mpi.org/community/lists/users/2016/07/29688.php</a>
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
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29689.php">http://www.open-mpi.org/community/lists/users/2016/07/29689.php</a>
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
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29690.php">http://www.open-mpi.org/community/lists/users/2016/07/29690.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29694.php">Nathaniel Graham: "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
