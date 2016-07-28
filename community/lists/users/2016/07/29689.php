<?
$subject_val = "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 04:48:15 2016" -->
<!-- isoreceived="20160719084815" -->
<!-- sent="Tue, 19 Jul 2016 10:48:13 +0200" -->
<!-- isosent="20160719084813" -->
<!-- name="M. D." -->
<!-- email="matus.dobrotka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
<!-- id="CAJDp2QrkTY4FoNvjJPk0pR+sA9XXY+LgF65x7nTwZtN51Rx9EA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server" -->
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
<strong>Date:</strong> 2016-07-19 04:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Maybe in reply to:</strong> <a href="29673.php">M. D.: "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2016-07-19 10:06 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; MPI_Comm_accept must be called by all the tasks of the local communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, that's how I understand it. In the source code of the test, all the
<br>
tasks call  MPI_Comm_accept - server and also relevant clients.
<br>
<p><span class="quotelev1">&gt; so if you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) mpirun -np 1 ./singleton_client_server 2 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) mpirun -np 1 ./singleton_client_server 2 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then 3) starts after 2) has exited, so on 1), intracomm is made of 1) and
</span><br>
<span class="quotelev1">&gt; an exited task (2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
This is not true in my opinion -  because of above mentioned fact that
<br>
MPI_Comm_accept is called by all the tasks of the local communicator.
<br>
<p><span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strictly speaking, there is a race condition, if 2) has exited, then
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept will crash when 1) informs 2) that 3) has joined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if 2) has not yet exited, then the test will hang because 2) does not
</span><br>
<span class="quotelev1">&gt; invoke MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
Task 2) does not exit, because of blocking call of MPI_Comm_accept.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; there are different ways of seeing things :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) this is an incorrect usage of the test, the number of clients should be
</span><br>
<span class="quotelev1">&gt; the same everywhere
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) task 2) should not exit (because it did not call MPI_Comm_disconnect())
</span><br>
<span class="quotelev1">&gt; and the test should hang when
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; starting task 3) because task 2) does not call MPI_Comm_accept()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ad 1) I am sorry, but maybe I do not understand what you think - In my
</span><br>
previous post I wrote that the number of clients is the same in every
<br>
mpirun instance.
<br>
ad 2) it is the same as above
<br>
<p><span class="quotelev1">&gt; i do not know how you want to spawn your tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if 2) and 3) do not need to communicate with each other (they only
</span><br>
<span class="quotelev1">&gt; communicate with 1)), then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can simply MPI_Comm_accept(MPI_COMM_WORLD) in 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if 2 and 3) need to communicate with each other, it would be much easier
</span><br>
<span class="quotelev1">&gt; to MPI_Comm_spawn or MPI_Comm_spawn_multiple only once in 1),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so there is only one inter communicator with all the tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
My aim is that all the tasks need to communicate with each other. I am
<br>
implementing a distributed application - game with more players
<br>
communicating with each other via MPI. It should work as follows - First
<br>
player creates a game and waits for other players to connect to this game.
<br>
On different computers (in the same network) the other players can join
<br>
this game. When they are connected, they should be able to play this game
<br>
together.
<br>
I hope, it is clear what my idea is. If it is not, just ask me, please.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current test program is growing incrementally the intercomm, which
</span><br>
<span class="quotelev1">&gt; does require extra steps for synchronization.
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
Cheers,
<br>
<p>Matus
<br>
<p><span class="quotelev1">&gt; On 7/19/2016 4:37 PM, M. D. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thank you for your interest in this topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I normally run the test as follows:
</span><br>
<span class="quotelev1">&gt; Firstly, I run &quot;server&quot; (second parameter is 1):
</span><br>
<span class="quotelev1">&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 1*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Secondly, I run corresponding number of &quot;clients&quot; via following command:
</span><br>
<span class="quotelev1">&gt; *mpirun -np 1 ./singleton_client_server number_of_clients 0*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, for example with 3 clients I do:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 1
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./singleton_client_server 3 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It means you are right - there should be the same number of clients in
</span><br>
<span class="quotelev1">&gt; each mpirun instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test does not involve MPI_Comm_disconnect(), but the problem in the
</span><br>
<span class="quotelev1">&gt; test is in the earlier position, because some of clients (in the most cases
</span><br>
<span class="quotelev1">&gt; actually the last client) cannot sometimes connect to the server and
</span><br>
<span class="quotelev1">&gt; therefore all clients with server are hanging (waiting for the connections
</span><br>
<span class="quotelev1">&gt; with the last client(s) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the bahaviour of accept/connect method is a bit confusing for me.
</span><br>
<span class="quotelev1">&gt; If I understand you, according to your post - the problem is not in the
</span><br>
<span class="quotelev1">&gt; timeout value, isn't it?
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
<span class="quotelev1">&gt; 2016-07-19 6:28 GMT+02:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you run the test ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you should have the same number of clients in each mpirun instance, the
</span><br>
<span class="quotelev2">&gt;&gt; following simple shell starts the test as i think it is supposed to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note the test itself is arguable since MPI_Comm_disconnect() is never
</span><br>
<span class="quotelev2">&gt;&gt; invoked
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and you will observe some related dpm_base_disconnect_init errors)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; clients=3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients 1
</span><br>
<span class="quotelev2">&gt;&gt; 2&gt;&amp;1 | tee /tmp/server.$clients&quot;
</span><br>
<span class="quotelev2">&gt;&gt; for i in $(seq $clients); do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     sleep 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     screen -d -m sh -c &quot;mpirun -np 1 ./singleton_client_server $clients 0
</span><br>
<span class="quotelev2">&gt;&gt; 2&gt;&amp;1 | tee /tmp/client.$clients.$i&quot;
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this test fails with master.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when the &quot;server&quot; (second parameter is 1), MPI_Comm_accept() fails with a
</span><br>
<span class="quotelev2">&gt;&gt; timeout.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i ompi/dpm/dpm.c, there is a hard coded 60 seconds timeout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PMIX_EXCHANGE(rc, &amp;info, &amp;pdat, 60);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but this is not the timeout that is triggered ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the eviction_cbfunc timeout function is invoked, and it has been set when
</span><br>
<span class="quotelev2">&gt;&gt; opal_hotel_init() was invoked in orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; default timeout is 2 seconds, but in this case (user invokes
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept), i guess the timeout should be infinite or 60 seconds
</span><br>
<span class="quotelev2">&gt;&gt; (hard coded value described above)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sadly, if i set a higher timeout value (mpirun --mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_pmix_server_max_wait 180 ...), MPI_Comm_accept() does not return when
</span><br>
<span class="quotelev2">&gt;&gt; the client invokes MPI_Comm_connect()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please have a look at this ?
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
<span class="quotelev2">&gt;&gt; On 7/15/2016 9:20 PM, M. D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem with basic client - server application. I tried to run C
</span><br>
<span class="quotelev2">&gt;&gt; program from this website
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c">https://github.com/hpc/cce-mpi-openmpi-1.7.1/blob/master/orte/test/mpi/singleton_client_server.c</a>
</span><br>
<span class="quotelev2">&gt;&gt; I saw this program mentioned in many discussions in your website, so I
</span><br>
<span class="quotelev2">&gt;&gt; expected that it should work properly, but after more testing I found out
</span><br>
<span class="quotelev2">&gt;&gt; that there is probably an error somewhere in connect/accept method. I have
</span><br>
<span class="quotelev2">&gt;&gt; read many discussions and threads on your website, but I have not found
</span><br>
<span class="quotelev2">&gt;&gt; similar problem that I am facing. It seems that nobody had similar problem
</span><br>
<span class="quotelev2">&gt;&gt; like me. When I run this app with one server and more clients (3,4,5,6,...)
</span><br>
<span class="quotelev2">&gt;&gt; sometimes the app hangs. It hangs when second or next client wants to
</span><br>
<span class="quotelev2">&gt;&gt; connect to the server (it depends, sometimes third client hangs, sometimes
</span><br>
<span class="quotelev2">&gt;&gt; fourth, sometimes second, and so on).
</span><br>
<span class="quotelev2">&gt;&gt; So it means that app starts to hang where server waits for accept and
</span><br>
<span class="quotelev2">&gt;&gt; client waits for connect. And it is not possible to continue, because this
</span><br>
<span class="quotelev2">&gt;&gt; client cannot connect to the server. It is strange, because I observed this
</span><br>
<span class="quotelev2">&gt;&gt; behaviour only in some cases... Sometimes it works without any problems,
</span><br>
<span class="quotelev2">&gt;&gt; sometimes it does not work. The behaviour is unpredictable and not stable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed openmpi 1.10.2 on my Fedora 19. I have the same problem
</span><br>
<span class="quotelev2">&gt;&gt; with Java alternative of this application. It hangs also sometimes... I
</span><br>
<span class="quotelev2">&gt;&gt; need this app in Java, but firstly it must work properly in C
</span><br>
<span class="quotelev2">&gt;&gt; implementation. Because of this strange behaviour I assume that there can
</span><br>
<span class="quotelev2">&gt;&gt; be an error maybe inside of openmpi implementation of connect/accept
</span><br>
<span class="quotelev2">&gt;&gt; methods. I tried it also with another version of openmpi - 1.8.1. However,
</span><br>
<span class="quotelev2">&gt;&gt; the problem did not disappear.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you help me, what can cause the problem? Maybe I did not get
</span><br>
<span class="quotelev2">&gt;&gt; something about openmpi (or connect/server) and the problem is with me... I
</span><br>
<span class="quotelev2">&gt;&gt; will appreciate any your help, support, or interest about this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Matus Dobrotka
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29673.php">http://www.open-mpi.org/community/lists/users/2016/07/29673.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29681.php">http://www.open-mpi.org/community/lists/users/2016/07/29681.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29687.php">http://www.open-mpi.org/community/lists/users/2016/07/29687.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29688.php">http://www.open-mpi.org/community/lists/users/2016/07/29688.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29688.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Maybe in reply to:</strong> <a href="29673.php">M. D.: "[OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Reply:</strong> <a href="29690.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
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
