<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 04:55:52 2016" -->
<!-- isoreceived="20160719085552" -->
<!-- sent="Tue, 19 Jul 2016 17:55:48 +0900" -->
<!-- isosent="20160719085548" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="dc30b37f-ad64-54aa-7493-54b2b4ea898e_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJDp2QrkTY4FoNvjJPk0pR+sA9XXY+LgF65x7nTwZtN51Rx9EA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 04:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>In reply to:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
here is what the client is doing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;CLIENT: after merging, new comm: size=%d rank=%d\n&quot;, size, 
<br>
rank) ;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = rank ; i &lt; num_clients ; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* client performs a collective accept */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHK(MPI_Comm_accept(server_port_name, MPI_INFO_NULL, 0, 
<br>
intracomm, &amp;intercomm)) ;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;CLIENT: connected to server on port\n&quot;) ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>2) has rank 1
<br>
<p>/* and 3) has rank 2) */
<br>
<p>so unless you run 2) with num_clients=2, MPI_Comm_accept() is never 
<br>
called, hence my analysis of the crash/hang
<br>
<p><p>I understand what you are trying to achieve, keep in mind 
<br>
MPI_Comm_accept() is a collective call, so when a new player
<br>
<p>is willing to join, other players must invoke MPI_Comm_accept().
<br>
<p>and it is up to you to make sure that happens
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/19/2016 5:48 PM, M. D. wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-07-19 10:06 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_accept must be called by all the tasks of the local
</span><br>
<span class="quotelev1">&gt;     communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's how I understand it. In the source code of the test, all 
</span><br>
<span class="quotelev1">&gt; the tasks call  MPI_Comm_accept - server and also relevant clients.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     so if you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) mpirun -np 1 ./singleton_client_server 2 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     then 3) starts after 2) has exited, so on 1), intracomm is made of
</span><br>
<span class="quotelev1">&gt;     1) and an exited task (2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not true in my opinion -  because of above mentioned fact that 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept is called by all the tasks of the local communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     strictly speaking, there is a race condition, if 2) has exited,
</span><br>
<span class="quotelev1">&gt;     then MPI_Comm_accept will crash when 1) informs 2) that 3) has joined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if 2) has not yet exited, then the test will hang because 2) does
</span><br>
<span class="quotelev1">&gt;     not invoke MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Task 2) does not exit, because of blocking call of MPI_Comm_accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     there are different ways of seeing things :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) this is an incorrect usage of the test, the number of clients
</span><br>
<span class="quotelev1">&gt;     should be the same everywhere
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2) task 2) should not exit (because it did not call
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_disconnect()) and the test should hang when
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     starting task 3) because task 2) does not call MPI_Comm_accept()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ad 1) I am sorry, but maybe I do not understand what you think - In my 
</span><br>
<span class="quotelev1">&gt; previous post I wrote that the number of clients is the same in every 
</span><br>
<span class="quotelev1">&gt; mpirun instance.
</span><br>
<span class="quotelev1">&gt; ad 2) it is the same as above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i do not know how you want to spawn your tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if 2) and 3) do not need to communicate with each other (they only
</span><br>
<span class="quotelev1">&gt;     communicate with 1)), then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     you can simply MPI_Comm_accept(MPI_COMM_WORLD) in 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if 2 and 3) need to communicate with each other, it would be much
</span><br>
<span class="quotelev1">&gt;     easier to MPI_Comm_spawn or MPI_Comm_spawn_multiple only once in 1),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     so there is only one inter communicator with all the tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My aim is that all the tasks need to communicate with each other. I am 
</span><br>
<span class="quotelev1">&gt; implementing a distributed application - game with more players 
</span><br>
<span class="quotelev1">&gt; communicating with each other via MPI. It should work as follows - 
</span><br>
<span class="quotelev1">&gt; First player creates a game and waits for other players to connect to 
</span><br>
<span class="quotelev1">&gt; this game. On different computers (in the same network) the other 
</span><br>
<span class="quotelev1">&gt; players can join this game. When they are connected, they should be 
</span><br>
<span class="quotelev1">&gt; able to play this game together.
</span><br>
<span class="quotelev1">&gt; I hope, it is clear what my idea is. If it is not, just ask me, please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The current test program is growing incrementally the intercomm,
</span><br>
<span class="quotelev1">&gt;     which does require extra steps for synchronization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 7/19/2016 4:37 PM, M. D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;     thank you for your interest in this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     So, I normally run the test as follows:
</span><br>
<span class="quotelev2">&gt;&gt;     Firstly, I run &quot;server&quot; (second parameter is 1):
</span><br>
<span class="quotelev2">&gt;&gt;     *mpirun -np 1 ./singleton_client_server number_of_clients 1*
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     Secondly, I run corresponding number of &quot;clients&quot; via following
</span><br>
<span class="quotelev2">&gt;&gt;     command:
</span><br>
<span class="quotelev2">&gt;&gt;     *mpirun -np 1 ./singleton_client_server number_of_clients 0*
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     *
</span><br>
<span class="quotelev2">&gt;&gt;     So, for example with 3 clients I do:
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 1 ./singleton_client_server 3 1
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It means you are right - there should be the same number of
</span><br>
<span class="quotelev2">&gt;&gt;     clients in each mpirun instance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The test does not involve MPI_Comm_disconnect(), but the problem
</span><br>
<span class="quotelev2">&gt;&gt;     in the test is in the earlier position, because some of clients
</span><br>
<span class="quotelev2">&gt;&gt;     (in the most cases actually the last client) cannot sometimes
</span><br>
<span class="quotelev2">&gt;&gt;     connect to the server and therefore all clients with server are
</span><br>
<span class="quotelev2">&gt;&gt;     hanging (waiting for the connections with the last client(s) ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     So, the bahaviour of accept/connect method is a bit confusing for
</span><br>
<span class="quotelev2">&gt;&gt;     me.
</span><br>
<span class="quotelev2">&gt;&gt;     If I understand you, according to your post - the problem is not
</span><br>
<span class="quotelev2">&gt;&gt;     in the timeout value, isn't it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Matus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2016-07-19 6:28 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:gilles_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         How do you run the test ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         you should have the same number of clients in each mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         instance, the following simple shell starts the test as i
</span><br>
<span class="quotelev2">&gt;&gt;         think it is supposed to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         note the test itself is arguable since MPI_Comm_disconnect()
</span><br>
<span class="quotelev2">&gt;&gt;         is never invoked
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         (and you will observe some related dpm_base_disconnect_init
</span><br>
<span class="quotelev2">&gt;&gt;         errors)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         clients=3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             screen -d -m sh -c &quot;mpirun -np 1
</span><br>
<span class="quotelev2">&gt;&gt;         ./singleton_client_server $clients 1 2&gt;&amp;1 | tee
</span><br>
<span class="quotelev2">&gt;&gt;         /tmp/server.$clients&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         for i in $(seq $clients); do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             sleep 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             screen -d -m sh -c &quot;mpirun -np 1
</span><br>
<span class="quotelev2">&gt;&gt;         ./singleton_client_server $clients 0 2&gt;&amp;1 | tee
</span><br>
<span class="quotelev2">&gt;&gt;         /tmp/client.$clients.$i&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         this test fails with master.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept()
</span><br>
<span class="quotelev2">&gt;&gt;         fails with a timeout.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         but this is not the timeout that is triggered ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         the eviction_cbfunc timeout function is invoked, and it has
</span><br>
<span class="quotelev2">&gt;&gt;         been set when opal_hotel_init() was invoked in
</span><br>
<span class="quotelev2">&gt;&gt;         orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         default timeout is 2 seconds, but in this case (user invokes
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_accept), i guess the timeout should be infinite or
</span><br>
<span class="quotelev2">&gt;&gt;         60 seconds (hard coded value described above)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         sadly, if i set a higher timeout value (mpirun --mca
</span><br>
<span class="quotelev2">&gt;&gt;         orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does
</span><br>
<span class="quotelev2">&gt;&gt;         not return when the client invokes MPI_Comm_connect()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         could you please have a look at this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 7/15/2016 9:20 PM, M. D. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I have a problem with basic client - server application. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         tried to run C program from this website
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I saw this program mentioned in many discussions in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         website, so I expected that it should work properly, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         after more testing I found out that there is probably an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         error somewhere in connect/accept method. I have read many
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         discussions and threads on your website, but I have not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         found similar problem that I am facing. It seems that nobody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         had similar problem like me. When I run this app with one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         server and more clients (3,4,5,6,...) sometimes the app
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hangs. It hangs when second or next client wants to connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         to the server (it depends, sometimes third client hangs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sometimes fourth, sometimes second, and so on).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         So it means that app starts to hang where server waits for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         accept and client waits for connect. And it is not possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         to continue, because this client cannot connect to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         server. It is strange, because I observed this behaviour
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         only in some cases... Sometimes it works without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         problems, sometimes it does not work. The behaviour is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         unpredictable and not stable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I have installed openmpi 1.10.2 on my Fedora 19. I have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         same problem with Java alternative of this application. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hangs also sometimes... I need this app in Java, but firstly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         it must work properly in C implementation. Because of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         strange behaviour I assume that there can be an error maybe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inside of openmpi implementation of connect/accept methods.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I tried it also with another version of openmpi - 1.8.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         However, the problem did not disappear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Could you help me, what can cause the problem? Maybe I did
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         not get something about openmpi (or connect/server) and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         problem is with me... I will appreciate any your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         support, or interest about this topic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Matus Dobrotka
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29687.php">http://www.open-mpi.org/community/lists/users/2016/07/29687.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29688.php">http://www.open-mpi.org/community/lists/users/2016/07/29688.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29689.php">http://www.open-mpi.org/community/lists/users/2016/07/29689.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29690/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>In reply to:</strong> <a href="29689.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29691.php">M. D.: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
